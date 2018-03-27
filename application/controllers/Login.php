<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->model('mdl');
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        
    }
    
    public function index() {

        if (isset($this->session->userdata['logged_in'])) {

            redirect('User');

        } else {
            $this->load->view('user/login_view');    
        }

        

    }
     public function proseslogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $status = $this->mdl->checkAccount($username,$password);
        
        if ($status != FALSE AND $status[0]->username!=NULL AND $status[0]->password!=NULL) {
            $session_data = array(
                'username' => $status[0]->username,
                'nama' => $status[0]->nama,
                'level' => $status[0]->level,
                'iduser' => $status[0]->idUser,
            );

            $this->session->set_userdata('logged_in', $session_data);
            
            redirect('User/index');
        } else {
            $data['err'] = 'ada';
            $this->load->view('user/login_view', $data);
        }
    }
    
}
