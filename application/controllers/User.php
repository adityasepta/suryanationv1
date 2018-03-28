<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->model('mdl');
        
        date_default_timezone_set("Asia/Jakarta");

        if (!(isset($this->session->userdata['logged_in']))) {

            redirect('Login');

        }
    }

    public function index() {

        // if (isset($this->session->userdata['logged_in'])) {

            $this->load->view('user/dashboardutama_view');

        // } else {
        //     redirect('user/login');
        // }

        
    }

    public function kanban() {

        // if (isset($this->session->userdata['logged_in'])) {

            //$data['tgl'] = date_create($time());

            $data['s'] = $this->mdl->getSales();
            $data['j'] = $this->mdl->getPenjadwalan();
            $data['d'] = $this->mdl->getDesain();
            $data['m'] = $this->mdl->getMenunggu();
            $data['g'] = $this->mdl->getGroup();

            $data['k1'] = $this->mdl->getKloter(1004);
            $data['k2'] = $this->mdl->getKloter(1005);
            $data['k3'] = $this->mdl->getKloter(1006);
            //$data['pp'] = $this->mdl->getPPIC();

             $data['staf'] = $this->mdl->getStaf();
             $data['akt'] = $this->mdl->getAktivitasLanjut();

            $data['r'] = $this->mdl->getRecord();
            $data['b'] = $this->mdl->getBerat();
            $data['cb'] = $this->mdl->cekbom2();
            //$data['k'] = $this->mdl->getIsiKloter();

            $data['li'] = $this->mdl->getProses(1004);  
            $data['gi'] = $this->mdl->getProses(1005);
            $data['co'] = $this->mdl->getProses(1006);

            //$data['gp'] = $this->mdl->getProses(1007);  
            $data['go'] = $this->mdl->getProses(1007);  
            $data['bo'] = $this->mdl->getProses(1008);  

            $data['cz'] = $this->mdl->getProses(1009);  
            $data['po'] = $this->mdl->getProses(1010);  
            $data['sl'] = $this->mdl->getProses(1011);

            $data['kr'] = $this->mdl->getProses(1012);
            $data['bt'] = $this->mdl->getProses(1013);
             $data['do'] = $this->mdl->getProses(1014);

             $data['jd'] = $this->mdl->getJadi();  

            $this->load->view('user/statprod_view',$data);

        // } else {
        //     redirect('user/login');
        // }   


        
    }

    public function setAktivitas() {
        $idProduk = $this->input->post('idProduk');
        $idSPK = $this->input->post('idSPK');
        $idProProd = $this->input->post('idProProd');
        $idAktivitas = $this->input->post('idAktivitas');

        //var_dump(get_defined_vars());exit();

        $this->next($idProduk,$idAktivitas,$idProProd,$idSPK);

    }

    public function next($idProduk,$idaktivitas,$idProProd,$idSPK) {

        $proses = $this->mdl->getProsesDetail($idProProd);
        $stat = $proses[0]->statusWork;



        if($stat == 'Belum ada PIC') {

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">gagal melanjutkan proses produksi, belum ada PIC proses tersebut.</div>');
            redirect('User/kanban');

        } else {
            $data = array(
            'statusWork' => 'Done',
            'RealisasiEndDate' => date("Y-m-d H:i:s")
            );
            $this->mdl->updateData('idProProd',$idProProd, 'factproduction', $data);
            
            
            $next = $idaktivitas;

            $beratAwal = $proses[0]->berat;
            $beratTambahan = $proses[0]->beratTambahan;

            $data = array(
                'idSPK' => $idSPK,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
                'idAktivitas' => $next,
                'beratAwal' => $beratAwal,
                'beratTambahan' => $beratTambahan,
                'statusBerat' => 'Belum Disetujui'
            );
            $this->mdl->insertData('factproduction', $data);
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil memperbarui proses produksi</div>');
            redirect('User/kanban');    
        }

        

    }

    public function setPIC() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'beratTambahan' => $this->input->post('beratTambahan'),
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
        );
        $this->mdl->updateData('idProProd',$idp, 'factproduction', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanban');

    }

    public function setPIC2() {

        $idk = $this->input->post('idKloter');
        $kloter = $this->mdl->getIsiKloter($idk);

        for ($i=0; $i <count($kloter) ; $i++) { 

            $data = array(
                'idPIC' => $this->input->post('staf'),
                'statusWork' => 'On Progress',
                'RealisasiStartDate' => date("Y-m-d H:i:s")
            );

            $where = array(

                'idSPK' => $kloter[$i]->idSPK,
                'idAktivitas' => $this->input->post('idAktivitas')

            );

            $this->mdl->updateData2($where, 'factproduction', $data);
            
        }

        
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC Kloter</div>');
        redirect('User/kanban');

    }

    public function setBerat() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'berat' => $this->input->post('berat'),
            'beratAwal' => $this->input->post('beratAwal'),
            'kembali' => $this->input->post('kembali'),
        );
        $this->mdl->updateData('idProProd',$idp, 'factproduction', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat</div>');
        redirect('User/kanban');

    }

  

    public function logout() {
        
        $sess_array = array(
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        redirect('Login');
    }

   
    
    public function administration() {
        $this->load->view('user/administrationDashboard');
    }

    public function purchaseOrder() {
        $data['listPO'] = $this->mdl->listPO();
        $this->load->view('user/poTempahan',$data);
    }

    public function listPOMasal() {
        $data['listPO'] = $this->mdl->listPOMasal();
        $this->load->view('user/poMasal',$data);
    }

    public function listPOPerak() {
        $data['listPO'] = $this->mdl->listPOPerak();
        $this->load->view('user/poPerak',$data);
    }

    public function listPOService() {
        $data['listPO'] = $this->mdl->listPOService();
        $this->load->view('user/poService',$data);
    }

    public function listPOTrading() {
        $data['listPO'] = $this->mdl->listPOTrading();
        $this->load->view('user/poTrading',$data);
    }

    public function createPurchaseOrder() {
        $data['listCustomer'] = $this->mdl->listCustomer();
        $this->load->view('user/pilihJenisPO',$data);
    }

    public function convertTempahan() {
        $idCustomer=$this->input->post('idCustomer');
        redirect('user/createDetailPO/'.$idCustomer);
    }

    public function createDetailPO($idCustomer) {
        if ($idCustomer==0){
            $data['id'] = array(
                'idC' => 0,
            );
        } else {
            $data['customer'] = $this->mdl->cariCustomer($idCustomer);
            $data['id']= array(
                'idC' => 1,
            );
        }
        $data['pegawai'] = $this->mdl->listPegawaiSales();
        $data['poTerakhir'] = $this->mdl->poTerakhir();
        $this->load->view('user/createPurchaseOrder',$data);
    }

    public function convertMassal() {
        $idCustomer=$this->input->post('idCustomer');
        redirect('user/detailPOMasal/'.$idCustomer);
    }

    public function detailPOMasal($idCustomer) {
        
        if ($idCustomer==0){
            $data['id'] = array(
                'idC' => 0,
            );
        } else {
            $data['customer'] = $this->mdl->cariCustomer($idCustomer);
            $data['id']= array(
                'idC' => 1,
            );
        }
        $data['pegawai'] = $this->mdl->listPegawaiSales();
        $data['poTerakhir'] = $this->mdl->poTerakhir2();
        $data['listProduk'] = $this->mdl->listProduk();
        $this->load->view('user/createPOMasal',$data);
    }

    public function cariProduk() {
        $kodeProduk = $this->input->post('kodeProduk');
        $data['produk'] = $this->mdl->findProduk($kodeProduk);
        echo json_encode($data['produk']);
    }

    public function editPO($nomorPO) {
        $data['pegawai'] = $this->mdl->listPegawaiSales();
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        $this->load->view('user/editPurchaseOrder',$data);
    }

    public function updatePO($idPO){
            //eksekusi query tabel Customer
            $idCustomer=$this->input->post('idCustomer');
            $dataCustomer = array(
                'namaCustomer'        => $this->input->post('namaCustomer'),
                'nomorTelepon'        => $this->input->post('nomorTelepon'),
            );
            $this->mdl->updateCustomer($dataCustomer,$idCustomer);

            if ($this->input->post('namaBatu')==NULL) {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO');
            } else {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO').'-'.$this->input->post('namaBatu');
            };
            
            $kodeProduk=$this->input->post('kodeProduk');
            $idProduk=$this->input->post('idProduk');
            
            $produk = $this->mdl->findProduk($kodeProduk);
            $kode = $produk[0]->kodeGambar;
            // print_r($dataProduk);exit();
            if($_FILES['userfile']['name'] != NULL){

                //form sumbit dengan gambar diisi
                //load uploading file library
                 $config['upload_path']     = './uploads/gambarProduk/';
                 $config['allowed_types']   = 'jpg'; 
                 $config['max_size']        = '2048';
                 $config['file_name']       = $kode."-cust.jpg";
                 $config['overwrite']        = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                    if ( !$this->upload->do_upload()){
                        $error = array('error' => $this->upload->display_errors());
                        var_dump($error);
                    }
                    else {
                        $gambar = $this->upload->data();
                        // print_r($gambar);exit();
                        $dataProduk = array(
                            'kodeProduk'        => $this->input->post('kodeProduk'),
                            'namaProduk'        => $namaProduk,
                            'jenisProduk'       => $this->input->post('jenisProduk'),
                            'bahan'             => $this->input->post('bahan'),
                            'kadarBahan'        => $this->input->post('kadarBahan'),
                            'namaBatu'          => $this->input->post('namaBatu'),
                            'beratBatu'         => $this->input->post('beratBatu'),
                            'ukuranJari'        => $this->input->post('ukuranJari'),
                            'berlian'           => $this->input->post('berlian'),
                            'krumWarna'         => $this->input->post('krumWarna'),
                            'tipeIkatan'        => $this->input->post('tipeIkatan'),
                            'model'             => $this->input->post('model'),
                            'harga'             => $this->input->post('harga'),
                        );
                        $this->mdl->updateProduk($dataProduk,$idProduk);

                        $harga=$this->input->post('harga');
                        $qty=$this->input->post('kuantitas');
                        $upah=$this->input->post('upah');
                        $totalHarga=($qty*$harga)+$upah;
                        
                        //eksekusi query insert
                        $dataPO = array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idProduk'          => $idProduk,
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                            'hargaBahan'        => $this->input->post('hargaBahan'),
                            'upah'              => $this->input->post('upah'),
                            'datangEmas'        => $this->input->post('datangEmas'),
                            'hargaDatangEmas'   => $this->input->post('hargaDatangEmas'),
                            'kuantitas'         => $this->input->post('kuantitas'),
                            'metode'            => $this->input->post('metode'),
                            'panjar'            => $this->input->post('panjar'),
                            'totalHarga'        => $totalHarga,
                            'tipeOrder'         => 'custom',
                            
                        );
                        $this->mdl->updatePO($dataPO,$idPO);                     
                        $message = "Purchase Order telah berhasil diperbaharui";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/purchaseOrder")."';</script>";
                    }
            } else {
                        $dataProduk = array(
                            'kodeProduk'        => $this->input->post('kodeProduk'),
                            'namaProduk'        => $namaProduk,
                            'jenisProduk'       => $this->input->post('jenisProduk'),
                            'bahan'             => $this->input->post('bahan'),
                            'kadarBahan'        => $this->input->post('kadarBahan'),
                            'namaBatu'          => $this->input->post('namaBatu'),
                            'beratBatu'         => $this->input->post('beratBatu'),
                            'ukuranJari'        => $this->input->post('ukuranJari'),
                            'berlian'           => $this->input->post('berlian'),
                            'krumWarna'         => $this->input->post('krumWarna'),
                            'tipeIkatan'        => $this->input->post('tipeIkatan'),
                            'model'             => $this->input->post('model'),
                            'harga'             => $this->input->post('harga'),
                        );
                        $this->mdl->updateProduk($dataProduk,$idProduk); 

                        $harga=$this->input->post('harga');
                        $qty=$this->input->post('kuantitas');
                        $upah=$this->input->post('upah');
                        $totalHarga=($qty*$harga)+$upah;
                        //eksekusi query insert tanpa gambar
                        $dataPO = array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idProduk'          => $idProduk,
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                            'hargaBahan'        => $this->input->post('hargaBahan'),
                            'upah'              => $this->input->post('upah'),
                            'datangEmas'        => $this->input->post('datangEmas'),
                            'hargaDatangEmas'   => $this->input->post('hargaDatangEmas'),
                            'kuantitas'         => $this->input->post('kuantitas'),
                            'metode'            => $this->input->post('metode'),
                            'panjar'            => $this->input->post('panjar'),
                            'totalHarga'        => $totalHarga,
                            'tipeOrder'         => 'custom',
                        );
                        $this->mdl->updatePO($dataPO,$idPO);                      
                        $message = "Purchase Order telah berhasil diperbaharui";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/purchaseOrder")."';</script>";
            }
    }

    public function spk() {
        $data['listSPK'] = $this->mdl->listSPK();
        $data['cekbom'] = $this->mdl->cekbom();
        $data['cekjadwal'] = $this->mdl->cekjadwal();
        $data['klot'] = $this->mdl->getKloterSPK();
        $data['cekklot'] = $this->mdl->cekkloter();
        $data['cb'] = $this->mdl->cekbom2();

        $this->load->view('user/spk',$data);
    }

    public function editSPK($nomorFaktur) {
        $data['pegawai'] = $this->mdl->listPegawaiDesain();
        $data['dataSPK'] = $this->mdl->findSPK($nomorFaktur);
        $data['jadwal'] = $this->mdl->getJadwal2($nomorFaktur);
        $data['jadwalProd'] = $this->mdl->getJadwal3($nomorFaktur);
        $data['aktivitasDefault'] = $this->mdl->getAktivitasDefault();
        $this->load->view('user/editSPK',$data);
    }

    public function updateSPK($idSPK) {
        $nomorFaktur=$this->input->post('nomorFaktur');
        $dataSPK = array(
            'batuTerhadapKruman'    => $this->input->post('batuTerhadapKruman'),
            'batuTerhadapPukulan'   => $this->input->post('batuTerhadapPukulan'),
            'batuTerhadapGoresan'   => $this->input->post('batuTerhadapGoresan'),
            'keadaanBatuTengah'     => $this->input->post('keadaanBatuTengah'),
            'PICDesain'             => $this->input->post('picdesain'),
            'prioritas'             => $this->input->post('prioritas'),
        );
        //print_r($dataMaterial);exit();
        $this->mdl->updateSPK($dataSPK, $idSPK);
        $message = "Surat Perintah Kerja telah berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/editSPK/".$nomorFaktur)."';</script>";
    }

    public function tambahDesain($nomorFaktur) {
        $data['dataSPK'] = $this->mdl->findSPK($nomorFaktur);
        $this->load->view('user/spkDesain',$data);
    }

    public function tambahJadwal($nomorFaktur) {
        $data['dataSPK'] = $this->mdl->findSPK($nomorFaktur);
        $data['aktivitas'] = $this->mdl->listAktivitas2();
        $this->load->view('user/spkJadwal',$data);
    }

    public function spkTempahan() {
        $nomorPO=$this->input->post('nomorPO');
        redirect('user/detailSPK/'.$nomorPO);
    }

    public function detailSPK($nomorPO) {
        $data['pegawai'] = $this->mdl->listDesain();
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        $jumlah = count($data['dataPO']);

        if($jumlah>0)
        {
            $data['cekSPK'] = $this->mdl->cekSPK($nomorPO);
            $jml=count($data['cekSPK']);
            if ($jml<1) {
                $data['spkTerakhir'] = $this->mdl->spkTerakhir();
                $this->load->view('user/createSpkDetail',$data);
            } else {
                $message = "Nomor PO telah digunakan";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/createSpk")."';</script>";
            }
            
        } else {
            $message = "Tidak ada nomor Purchase Order yang sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createSpk")."';</script>";
        }
    }

    public function createSpk() {
        $data['spkTempahan'] = $this->mdl->getListSPKTempahan();
        $data['spkMasal'] = $this->mdl->getListSPKMasal();
        $data['spkService'] = $this->mdl->getListSPKService();
        $data['spkPerak'] = $this->mdl->getListSPKPerak();
        $this->load->view('user/createSpk',$data);
    }

    public function invoice($nomorFaktur) {
        $data['dataSPK'] = $this->mdl->findSPK($nomorFaktur);
        $data['cekbom'] = $this->mdl->cekbom();
        $data['cekjadwal'] = $this->mdl->cekjadwal();
        $data['jadwal'] = $this->mdl->getjadwal($nomorFaktur);
        $kloter = $this->mdl->getIdKloter($nomorFaktur);
        if ($kloter) {
            $data['stokbom'] = $this->mdl->getStokBOM2($kloter[0]->idKloter);
        }
        
        $this->load->view('user/invoice',$data);
    }

    public function tambahSPK(){
        //sebelum mengeksekusi query
        
        $this->form_validation->set_message('is_unique','Nomor SPK telah digunakan');
        $this->form_validation->set_rules('nomorFaktur', 'Nomor Faktur' ,'is_unique[spk.nomorFaktur]');
        // $pos=$this->input->post('nomorFaktur');
        // print_r($pos);exit();
        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO = $this->input->post('nomorPO');
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['spkTerakhir'] = $this->mdl->spkTerakhir();
            $this->load->view('user/createSpkDetail',$data);
        }
        else {
            //eksekusi query insert tanpa gambar
            $sd='Proses Desain';
            $sb='Belum Ada';
            $sj='Belum Ada';
            $sp='Belum Disetujui';
            $iduser = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur'           => $this->input->post('nomorFaktur'),
                'nomorPO'               => $this->input->post('nomorPO'),
                'idProduk'              => $this->input->post('idProduk'),
                'idCustomer'            => $this->input->post('idCustomer'),
                'batuTerhadapKruman'    => $this->input->post('batuTerhadapKruman'),
                'batuTerhadapPukulan'   => $this->input->post('batuTerhadapPukulan'),
                'batuTerhadapGoresan'   => $this->input->post('batuTerhadapGoresan'),
                'keadaanBatuTengah'     => $this->input->post('keadaanBatuTengah'),
                'statusDesain'          => $sd,
                'PICDesain'             => $this->input->post('picdesain'),
                'statusBOM'             => $sb,
                'PICBOM'                => $iduser,
                'statusJadwal'          => $sj,
                'PICJadwal'             => $iduser,
                'statusPersetujuan'     => $sp,
                'PICPersetujuan'        => $iduser,
                'prioritas'             => $this->input->post('prioritas'),
            );
            $this->mdl->tambahSPK($dataSPK);                      
            $message = "Surat Perintah Kerja telah berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/spk")."';</script>";
        }
    }

    public function uploadJadwal(){
            //eksekusi query insert tanpa gambar
        $idAktivitas    =$this->input->post('idAktivitas');
        $nomorAktivitas =$this->input->post('nomorAktivitas');
        $startDate      =$this->input->post('startDate');
        $endDate        =$this->input->post('endDate');
        $nomorFaktur    =$this->input->post('nomorFaktur');
        // print_r($idAktivitas);exit();
        for ($i=0; $i <count($nomorAktivitas); $i++) {
            $b=$nomorAktivitas[$i]; 
            $dataAktivitas = array(
                'idProduk'              => $this->input->post('idProduk'),
                'idAktivitas'           => $idAktivitas[$b],
            );
            $this->mdl->tambahProdukAktivitas($dataAktivitas);            

            $dataJadwal = array(
                'idSPK'                 => $this->input->post('idSPK'),
                'idAktivitas'           => $idAktivitas[$b],
                'startDate'           => $startDate[$b],
                'endDate'           => $endDate[$b],
            );
            $this->mdl->tambahRencana($dataJadwal);
            
        } 

        $idSPK = $this->input->post('idSPK');

        $data = array(
            'statusJadwal' => 'Sudah Ada',
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s"),
            );

        $this->mdl->updateData('idSPK',$idSPK,'spk',$data);

        //$this->mdl->prosesJadwal($nomorFaktur);

        $message = "Penjadwalan telah berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/spk")."';</script>";
    }

    public function uploadDesain()
    {       
        $kodeProduk=$this->input->post('kodeProduk');
        $nomorFaktur=$this->input->post('nomorFaktur');
        $up=$this->input->post();
        //print_r($nomorFaktur);exit();
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);

        

        $b=0;
        for ($i=0; $i < $cpt; $i++) { 
            if ($_FILES['userfile']['name'][$i]!=NULL) {
                $b++;
            }
        }

        $produk = $this->mdl->findProduk($kodeProduk);
        $kode=$produk[0]->kodeGambar;
        $a=0;
        for($i=0; $i<$cpt; $i++)
        {           
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $config['upload_path']     = './uploads/gambarDesain/'; 
            $config['allowed_types']   = 'jpg|jpeg'; 
            $config['max_size']        = '2048';
            $config['file_name']       = $kode.'-d'.($i+1).'.jpg';
            $config['overwrite']        = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload()) {
                $a++;
            };
        }
        if($a==$b) {
            $this->mdl->prosesDesain($nomorFaktur);
            $message = "Foto produk telah berhasil disimpan";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/spk")."';</script>";
        } else {
            $message = "Foto produk tidak sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/spk")."';</script>";
        } 
    }

    public function editAktivitas(){
            //eksekusi query insert tanpa gambar
        $idAktivitas    =$this->input->post('idAktivitas');
        $nomorAktivitas =$this->input->post('nomorAktivitas');
        $startDate      =$this->input->post('startDate');
        $endDate        =$this->input->post('endDate');
        $nomorFaktur    =$this->input->post('nomorFaktur');
        $idSPK          =$this->input->post('idSPK');
        $idProduk       =$this->input->post('idProduk');
        // print_r($idProduk);exit();
        $this->mdl->hapusProdukAktivitas($idProduk);
        $this->mdl->hapusRencana($idSPK);

        
        for ($i=0; $i <count($nomorAktivitas); $i++) {
            $b=$nomorAktivitas[$i]; 
            $dataAktivitas = array(
                'idProduk'              => $idProduk,
                'idAktivitas'           => $idAktivitas[$b],
            );
            $this->mdl->tambahProdukAktivitas($dataAktivitas);            

            $dataJadwal = array(
                'idSPK'                 => $idSPK,
                'idAktivitas'           => $idAktivitas[$b],
                'startDate'           => $startDate[$b],
                'endDate'           => $endDate[$b],
            );
            $this->mdl->tambahRencana($dataJadwal);
            
        } 

        //$this->mdl->prosesJadwal($nomorFaktur);

        $message = "Jadwal Aktivitas telah berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/editSPK/".$nomorFaktur)."';</script>";
    }

    public function pegawai() {
        $data['pegawai']=$this->mdl->listPegawai(); 
        $data['jabatana']=$this->mdl->listJabatan(); 

        $this->load->view('user/pegawai',$data);
    }

    public function createPegawai() {
        $dataPegawai = array(
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'nama'              => $this->input->post('nama'),
            'jabatan'           => $this->input->post('jabatan'),
            'level'             => '0',
            'phone'             => $this->input->post('phone'),
            'email'             => $this->input->post('email'),
            'alamat'             => $this->input->post('alamat'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->insertData('user', $dataPegawai);
        redirect('user/pegawai');
    }

    public function editPegawai($idUser) {
        $dataPegawai = array(
            'username'    => $this->input->post('username'),
            'password'   => $this->input->post('password'),
            'nama'   => $this->input->post('nama'),
            'jabatan'     => $this->input->post('jabatan'),
            'phone'             => $this->input->post('phone'),
            'email'             => $this->input->post('email'),
            'alamat'             => $this->input->post('alamat'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->updateData('idUser', $idUser, 'user', $dataPegawai);
        redirect('user/pegawai');
    }

    public function deletePegawai($idUser) {
        $this->mdl->deleteData('idUser', $idUser, 'user');
        $message = "Data pegawai berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/pegawai")."';</script>";
    }

    //Inventory
    public function rekapBerat() {
        $data['b'] = $this->mdl->getBerat();
        $data['produk']=$this->mdl->getProd();  
        $data['spk']=$this->mdl->getSPK();    
        $data['rekapBerat']=$this->mdl->rekapBerat();
        $this->load->view('user/berat',$data);
    }

    public function inventory() {
        $data['aktivitas'] = $this->mdl->getAktivitas2();
        $data['b'] = $this->mdl->getBerat();
        $data['spk']=$this->mdl->getSPK(); 
        $data['produk']=$this->mdl->getProd();  
        $data['barangMasuk']=$this->mdl->barangMasuk();
        $data['barangKeluar']=$this->mdl->barangKeluar();
        $data['stokEmas']=$this->mdl->stokEmas();
        $data['material']=$this->mdl->getMaterialDasar(); 
        $data['material2']=$this->mdl->getMaterialDasar2(); 
        $spk=$this->mdl->getSPK();
        $b = $this->mdl->getBerat();
        $data['rekapBerat']=$this->mdl->rekapBerat();
        $jumlahHilang=0;
        $jumlahHilang2=0;
        $kembali=0;
        $bAwal=0;
        $bAkhir=0;

        for ($z=0; $z < count($b); $z++) { 
            if ($b[$z]->berat) {
            if((int)$b[$z]->idAktivitas == 1003) { 
                $bAwal= $bAwal + $b[$z]->beratAwal;
                $bAkhir=$bAkhir + $b[$z]->berat;
                $kembali = $kembali + $b[$z]->kembali;
                $jumlahHilang = round((($bAwal-$bAkhir-$kembali)),2);
                /*print_r($jumlahHilang);
                echo "<br>";*/
            } else if((int)$b[$z]->idAktivitas == 1011) { 
                $bAwal= $bAwal + $b[$z]->berat;
                $bAkhir=$bAkhir + $b[$z]->berat;
                $kembali = $kembali + $b[$z]->kembali;
                $jumlahHilang = round((($bAwal-$bAkhir-$kembali)),2);
                /*print_r($jumlahHilang);
                echo "<br>";*/
            }
            else {
                $bAwal= $bAwal + $b[$z-1]->berat;
                $bAkhir=$bAkhir + $b[$z]->berat;
                $kembali = $kembali + $b[$z]->kembali;
                $jumlahHilang = round((($bAwal-$bAkhir-$kembali)),2);
                /*print_r($jumlahHilang);
                echo "<br>";*/
            }
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }
        
        $data['jumlahHilang']=$jumlahHilang;
        $data['berat3']=0;
        $data['berat4']=0;
        $data['berat5']=0;
        $data['berat6']=0;
        $data['berat7']=0;
        $data['berat8']=0;
        $data['berat9']=0;
        $data['berat10']=0;
        $data['berat11']=0;

        for ($z=0; $z < count($b); $z++) { 
            if ($b[$z]->berat) {
            if((int)$b[$z]->idAktivitas == 1003) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat3'] = $data['berat3'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1004) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat4'] = $data['berat4'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1005) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat5'] = $data['berat5'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1006) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat6'] = $data['berat6'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1007) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat7'] = $data['berat7'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1008) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat8'] = $data['berat8'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1009) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat9'] = $data['berat9'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1010) {
                        $bAwal=(float) $b[$z-1]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat10'] = $data['berat10'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1011) {
                        $bAwal=(float) $b[$z]->berat;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat11'] = $data['berat11'] +  $selisih;
                    }
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }
        $this->load->view('user/inventoryDashboard',$data);
    }

    public function stokBarang() {
        $data['stokBarang']=$this->mdl->getStokProduk();
        $this->load->view('user/stokBarang',$data);
    }

    public function produk() {
        $data['produk']=$this->mdl->listProduk();
        $this->load->view('user/produk',$data);
    }

    public function material() {
        $data['material']=$this->mdl->getMaterial();
        $this->load->view('user/material',$data);
    }

    public function createProduk() {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('kodeProduk', 'Kode Produk' ,'is_unique[produk.kodeProduk]');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('user/createProduk');
        }
        else {
            // print_r($_FILES['userfile']);
             // print_r($this->input->post());exit();
            $kode = $this->generateRandomString();
            if (array_sum($_FILES['userfile']['error']) < 16) {
                //form sumbit dengan gambar diisi
                //load uploading file library

                $b=0;
                for ($i=0; $i < 4; $i++) { 
                    if ($_FILES['userfile']['name'][$i]!=NULL) {
                        $b++;
                    }
                }

                $a=0;
                $files = $_FILES;
                $this->load->library('upload');
                $dataInfo = array();
                for($i=0; $i<4; $i++) {      

                    $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                    $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                    $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                    $config['upload_path']     = './uploads/gambarProduk/'; 
                    $config['allowed_types']   = 'jpg|jpeg|png|bmp'; 
                    $config['max_size']        = '2048';
                    $config['file_name']       = $kode.($i+1).'.jpg';
                    $config['overwrite']        = TRUE;

                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload()){
                        $error = array('error' => $this->upload->display_errors());

                        ${"file" . $i}=NULL;
                    }
                    else {
                        $gambar = $this->upload->data();
                        $a++;
                        ${"file" . $i}=$gambar['file_name'];
                    };
                }

                if($a==$b) {

                    $hargaProduk = $this->clean($this->input->post('hargaJual'));
                    $hargaModal = $this->clean($this->input->post('hargaModal'));
                    $dataProduk = array(
                        'kodeProduk'        => $this->input->post('kodeProduk'),
                        'namaProduk'        => $this->input->post('namaProduk'),
                        'jenisProduk'       => $this->input->post('jenisProduk'),
                        'deskripsi'         => $this->input->post('deskripsi'),
                        'satuan'            => $this->input->post('satuan'),
                        'kodeGambar'        => $kode,
                        'hargaJual'         => $hargaProduk,
                        'hargaModal'        => $hargaModal,
                        'kategori'          => $this->input->post('kategori'),
                        'statusKatalog'     => $this->input->post('statusKatalog'),
                        'gambar1'           => $file0,
                        'gambar2'           => $file1,
                        'gambar3'           => $file2,
                        'gambar4'           => $file3,
                        'stok'              => $this->input->post('stok'),
                    );

                    $this->mdl->insertData("produk",$dataProduk);
                    $message = "Produk berhasil dibuat";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/produk")."';</script>";
                } else {

                    $message = "Terdapat foto produk tidak sesuai";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $this->load->view('user/createProduk');
                } 
   
            } else {
                print_r($a.'&'.$b);exit();
                //form submit dengan gambar dikosongkan
                $hargaProduk = $this->clean($this->input->post('hargaJual'));
                $hargaModal = $this->clean($this->input->post('hargaModal'));
                $dataProduk = array(
                    'kodeProduk'        => $this->input->post('kodeProduk'),
                    'namaProduk'        => $this->input->post('namaProduk'),
                    'jenisProduk'       => $this->input->post('jenisProduk'),
                    'deskripsi'         => $this->input->post('deskripsi'),
                    'satuan'            => $this->input->post('satuan'),
                    'kodeGambar'        => $kode,
                    'hargajual'         => $hargaProduk,
                    'hargaModal'        => $hargaModal,
                    'kategori'          => $this->input->post('kategori'),
                    'statusKatalog'     => $this->input->post('statusKatalog'),
                    'stok'              => $this->input->post('stok'),
                );
                //print_r($dataProduk);exit();
                $this->mdl->insertData("produk",$dataProduk);
                $message = "Produk berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/produk")."';</script>";
            }
        }
    }

    public function editProduk($id) {
        $this->form_validation->set_rules('kodeProduk','Kode Produk', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['produk'] = $this->mdl->findKatalog($id);
            //print_r($data['bom']);
            $this->load->view('user/editProduk',$data);
        }
        else {
            $produk=$this->mdl->findKatalog($id);
            $kode=$produk[0]->gambarProduk;
            if (isset($_FILES['userfile']['name'])&&!empty($_FILES['userfile']['name'])) {
                //form sumbit dengan gambar diisi
                //load uploading file library
                 $config['upload_path']   = './uploads/gambarProduk/'; 
                 $config['allowed_types'] = 'jpg'; 
                 $config['max_size']    = '2048';
                 $config['file_name']   = $kode.'-cust.jpg';
                 $config['overwrite']   = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                    if (!$this->upload->do_upload()){
                        $error = array('error' => $this->upload->display_errors());
                        var_dump($error);
                    }
                    else {
                        $gambar = $this->upload->data();
                        $hargaProduk = $this->clean($this->input->post('hargaProduk'));
                        $hargaModal = $this->clean($this->input->post('hargaModal'));
                        $dataProduk = array(
                                'kodeProduk'    => $this->input->post('kodeProduk'),
                                'namaProduk'   => $this->input->post('namaProduk'),
                                'jenisProduk'   => $this->input->post('jenisProduk'),
                                'deskripsiProduk'   => $this->input->post('deskripsiProduk'),
                                'gambarProduk'        => $kode,
                                'hargaProduk'         => $hargaProduk,
                                'hargaModal'         => $hargaModal,
                                'stok'              => $this->input->post('stok'),
                        );
                        //print_r($dataProduk);exit();
                        $this->mdl->updateData("idKatalog",$id,"katalog",$dataProduk);
                        $message = "Produk berhasil diedit";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/produk")."';</script>";
                        }
                    }
            else {
                //form submit dengan gambar dikosongkan
                $hargaProduk = $this->clean($this->input->post('hargaProduk'));
                $hargaModal = $this->clean($this->input->post('hargaModal'));
               $dataProduk = array(
                                'kodeProduk'    => $this->input->post('kodeProduk'),
                                'namaProduk'   => $this->input->post('namaProduk'),
                                'jenisProduk'   => $this->input->post('jenisProduk'),
                                'deskripsiProduk'   => $this->input->post('deskripsiProduk'),
                                'gambarProduk'        => $kode,
                                'hargaProduk'         => $hargaProduk,
                                'hargaModal'         => $hargaModal,
                                'stok'              => $this->input->post('stok'),
                        );
                        //print_r($dataProduk);exit();
                        $this->mdl->updateData("idKatalog",$id,"katalog",$dataProduk);
                        $message = "Produk berhasil diedit";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/produk")."';</script>";
            }
        }
    }
    
    public function deleteProduk($id){
        $this->mdl->deleteData("idProduk",$id,"produk");
        $message = "Produk berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/produk")."';</script>";
    }

    public function createMaterial() {
        $this->form_validation->set_rules('kodeMaterial','Kode Material', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('user/createMaterial');
        }
        else {
               $dataMaterial = array(
                                'kodeMaterial'    => $this->input->post('kodeMaterial'),
                                'namaMaterial'    => $this->input->post('namaMaterial'),
                                'satuan'          => $this->input->post('satuan'),
                                'stokMaterial'    => $this->input->post('stokMaterial'),
                                'safetyStock'     => $this->input->post('safetyStock')
                        );
                        //print_r($dataMaterial);exit();
                        $this->mdl->insertMaterial($dataMaterial);
                        $message = "Material dasar berhasil dibuat";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/material")."';</script>";   
        }
    }

    public function editMaterial($id) {
        $this->form_validation->set_rules('kodeMaterial','Kode Material', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['material'] = $this->mdl->findMaterial($id);
            $this->load->view('user/editMaterial',$data);
        }
        else {
               $dataMaterial = array(
                                'kodeMaterial'    => $this->input->post('kodeMaterial'),
                                'namaMaterial'    => $this->input->post('namaMaterial'),
                                'satuan'          => $this->input->post('satuan'),
                                'stokMaterial'    => $this->input->post('stokMaterial'),
                                'safetyStock'    => $this->input->post('safetyStock')
                        );
                        //print_r($dataMaterial);exit();
                        $this->mdl->updateMaterial($id,$dataMaterial);
                        $message = "Material dasar berhasil diedit";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='".base_url("user/material")."';</script>"; 
        }
    }

    public function deleteMaterial($id){
        $this->mdl->deleteMaterial($id);
        $message = "Material dasar berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/material")."';</script>";

    }

    public function createBOMTempahan($kloter) {
        $this->form_validation->set_rules('kloter','kloter', 'required');
        if ($this->form_validation->run() == FALSE){
            $data['kloter']=$this->mdl->findKloter($kloter);
            $data['materials']=$this->mdl->getMaterial();
            $data['spk'] = $this->mdl->getIsiKloter($kloter);
            $this->load->view('user/createBOMTempahan',$data);
        }
        else {
                $dataBOM= array(
                            'idKloter'   => $this->input->post('idKloter'),
                            'idMaterial' => $this->input->post('kodeMaterial'),
                            'jumlah'     => $this->input->post('bahanButuh')
                        );

                $this->mdl->insertData('bomtempahan',$dataBOM);
                echo '<b>Data BOM berhasil disimpan.</b><br />';
        }
    }

    public function createBOMTempahanTurun($kloter) {
        $this->form_validation->set_rules('kadarAwal','Kadar Awal', 'required');
        if ($this->form_validation->run() == FALSE){

            $data['kloter']=$this->mdl->findKloter($idKloter);
            $data['materials']=$this->mdl->getMaterial();
            $data['spk'] = $this->mdl->getIsiKloter($kloter);

            $this->load->view('user/createBOMTempahan',$data);
        }
        else {

            if ($this->input->post('beratAlloy') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Alloy');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idKloter'   => $kloter,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratAlloy')
                ); 
                $this->mdl->insertData('bomtempahan',$dataBOM);
            }
            if ($this->input->post('beratTembaga') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Tembaga');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idKloter'   => $kloter,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratTembaga')
                ); 
                $this->mdl->insertData('bomtempahan',$dataBOM);
            }
            if ($this->input->post('beratPerak') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Perak');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idKloter'   => $kloter,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratPerak')
                ); 
                $this->mdl->insertData('bomtempahan',$dataBOM);
            }
            if ($this->input->post('beratPaladium') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Paladium');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idKloter'   => $kloter,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratPaladium')
                ); 
                $this->mdl->insertData('bomtempahan',$dataBOM);
            }
                $message = "BOM berhasil dibuat, untuk melihat bom dapat melalui tombol Lihat BOM";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/kanban")."';</script>";
                
        }
                
    }

    public function createBOMTempahanNaik($kloter) {
        $this->form_validation->set_rules('kodeMaterial','Kode Material', 'required');
        if ($this->form_validation->run() == FALSE){
            $data['kloter']=$this->mdl->findKloter($kloter);
            $data['materials']=$this->mdl->getMaterial();
            $data['spk'] = $this->mdl->getIsiKloter($kloter);
            $this->load->view('user/createBOMTempahan',$data);
        }
        else {
                $dataBOM= array(
                            'idKloter'   => $kloter,
                            'idMaterial' => $this->input->post('kodeMaterial'),
                            'jumlah'     => $this->input->post('beratBahanTarget')
                        );
                
                $this->mdl->insertData('bomtempahan',$dataBOM);
                $message = "BOM berhasil dibuat, untuk melihat bom dapat melalui tombol 'Lihat BOM'";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/kanban")."';</script>";
        }
    }

    public function createBOMMassal($idSubSPK) {
        $this->form_validation->set_rules('idSubSPK','idSubSPK', 'required');
        // print_r($idSubSPK);exit();
        if ($this->form_validation->run() == FALSE){
            $data['subSPK']=$this->mdl->findSubSPK($idSubSPK);
            $data['materials']=$this->mdl->getMaterial();
            $this->load->view('user/createBOMMassal',$data);
        }
        else {
                $dataBOM= array(
                            'idSubSPK'   => $idSubSPK,
                            'idMaterial' => $this->input->post('kodeMaterial'),
                            'jumlah'     => $this->input->post('bahanButuh')
                        );
                $this->mdl->insertData('bommassal',$dataBOM);
                echo '<b>Data BOM berhasil disimpan.</b><br />';
        }
    }

    public function createBOMMassalTurun($idSubSPK) {
        $this->form_validation->set_rules('kadarAwal','Kadar Awal', 'required');
        if ($this->form_validation->run() == FALSE){

            $data['$subSPK']=$this->mdl->findSubSPK($idSubSPK);
            $data['materials']=$this->mdl->getMaterial();

            $this->load->view('user/createBOMMassal',$data);
        }
        else {
            if ($this->input->post('beratAlloy') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Alloy');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idSubSPK'   => $idSubSPK,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratAlloy')
                ); 
                $this->mdl->insertData('bommassal',$dataBOM);
            }
            if ($this->input->post('beratTembaga') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Tembaga');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idSubSPK'   => $idSubSPK,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratTembaga')
                ); 
                $this->mdl->insertData('bommassal',$dataBOM);
            }
            if ($this->input->post('beratPerak') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Perak');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idSubSPK'   => $idSubSPK,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratPerak')
                ); 
                $this->mdl->insertData('bommassal',$dataBOM);
            }
            if ($this->input->post('beratPaladium') != 0) {
                $data['material'] = $this->mdl->findNamaMaterial('Paladium');
                $idMaterial = $data['material'][0]->idMaterial;
                $dataBOM= array(
                    'idSubSPK'   => $idSubSPK,
                    'idMaterial' => $idMaterial,
                    'jumlah'     => $this->input->post('beratPaladium')
                ); 
                $this->mdl->insertData('bommassal',$dataBOM);
            }
                $message = "BOM berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/kanbanMassal")."';</script>";
        }
    }

    public function createBOMMassalNaik($idSubSPK) {
        $this->form_validation->set_rules('kodeMaterial','Kode Material', 'required');
        if ($this->form_validation->run() == FALSE){
            $data['$subSPK']=$this->mdl->findSubSPK($idSubSPK);
            $data['materials']=$this->mdl->getMaterial();
            $this->load->view('user/createBOMMassal',$data);
        }
        else {
                $dataBOM= array(
                            'idSubSPK'   => $idSubSPK,
                            'idMaterial' => $this->input->post('kodeMaterial'),
                            'jumlah'     => $this->input->post('beratBahanTarget')
                        );
                
                $this->mdl->insertData('bommassal',$dataBOM);
                $message = "BOM berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/kanbanMassal")."';</script>";
        }
    }

    public function createBOM($id) {
        $this->form_validation->set_rules('namaProduk','Nama Produk', 'required');
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $data['produk']=$this->mdl->findProduk2($id);
            $data['material']=$this->mdl->getMaterialDropdown();
            $data['material2']=$this->mdl->getMaterialDropdown2();
            $data['materials']=$this->mdl->getMaterial();
            /*print_r($data['material']);
            print_r($data['material2']);exit();*/
            $this->load->view('user/createBOM',$data);
        }
        else {
                $data['material']=$this->input->post('kodeMaterial');
                $data['jumlah']=$this->input->post('jumlah');
                $kodeProduk = $this->input->post('kodeProduk');

                //print_r($data['material']);exit();
                $j=count($this->input->post('jumlah'));
                    for ($i=0; $i < $j ;$i++){
                        $dataBOM= array(
                            'kodeProduk'   => $kodeProduk,
                            'kodeMaterial' => $data['material'][$i],
                            'jumlah'       => $data['jumlah'][$i],
                        );
                        //print_r($dataBOM);//exit();
                        $this->mdl->insertBOM($dataBOM);
                    }
                redirect('user/produk');
        }
    }

    public function editBOM($id) {
        $this->form_validation->set_rules('namaProduk','Nama Produk', 'required');
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $data['produk']=$this->mdl->findProduk2($id);
            $data['material']=$this->mdl->getMaterialDropdown();
            $data['material2']=$this->mdl->getMaterialDropdown2();
            $data['materials']=$this->mdl->getMaterial();
            $this->load->view('user/editBOM',$data);
        }
        else {
                $dataBOM = array(
                                'kodeMaterial'    => $this->input->post('kodeMaterial'),
                                'jumlah'          => $this->input->post('jumlah')
                        );
                //print_r($dataBOM);exit();
                $this->mdl->updateBOM($id,$dataBOM);
                $message = "BOM berhasil diedit";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/produk")."';</script>"; 
        }
    }

    public function deleteBOM($id){
        $this->mdl->deleteBOM($id);
        redirect('user/produk');
    }

   public function createInventory() {
        $this->form_validation->set_rules('kodeBarang','Kode Barang', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['produk']=$this->mdl->getMovement();
            $data['produkJadi']=$this->mdl->getProduk();
            $data['materialDasar']=$this->mdl->getMaterial();
            $this->load->view('user/createInventory',$data);
        }
        else {
                $hargaBeli = $this->clean($this->input->post('hargaBeli'));
                $dataInventory = array(
                                'tipeBarang'   => $this->input->post('tipeBarang'),
                                'kodeBarang'    => $this->input->post('kodeBarang'),
                                'jumlah'        => $this->input->post('jumlah'),
                                'jenisPergerakanBarang'  => $this->input->post('jenisPergerakanBarang'),
                                'hargaBeli'  => $hargaBeli
                        );
               //print_r($dataInventory);exit();
               if ($this->input->post('tipeBarang')=='Produk Jadi') {
                    $data['produk']=$this->mdl->findProduk3($this->input->post('kodeBarang'));
                    $stokBarang=$data['produk']->stok;
                    $jumlah=$this->input->post('jumlah');
                    if ($this->input->post('jenisPergerakanBarang')=='IN') {
                        $stokBarangTerbaru = $stokBarang+$jumlah;
                    }
                    else if ($this->input->post('jenisPergerakanBarang')=='OUT') {
                        $stokBarangTerbaru = $stokBarang-$jumlah;
                    }
                    $this->mdl->insertInventory($dataInventory);
                    $this->mdl->updateStokProduk($this->input->post('kodeBarang'),$stokBarangTerbaru);
               }
               else {
                    $data['produk']=$this->mdl->findProduk4($this->input->post('kodeBarang'));
                    $stokBarang=$data['produk']->stokMaterial;
                    $jumlah=$this->input->post('jumlah');
                    if ($this->input->post('jenisPergerakanBarang')=='IN') {
                        $stokBarangTerbaru = $stokBarang+$jumlah;
                    }
                    else if ($this->input->post('jenisPergerakanBarang')=='OUT') {
                        $stokBarangTerbaru = $stokBarang-$jumlah;
                    }
                    $this->mdl->insertInventory($dataInventory);
                    $this->mdl->updateStokProduk2($this->input->post('kodeBarang'),$stokBarangTerbaru);
               }
                
                redirect('user/stokBarang');   
        }
    }

    public function editInventory($id) {
        $this->form_validation->set_rules('kodeBarang','Kode Barang', 'required');
        
        if ($this->form_validation->run() == FALSE){
            //print_r("d");exit();
            $data['stokBarang'] = $this->mdl->findStok($id);
            $data['produk']=$this->mdl->getMovement();
            $this->load->view('user/editInventory',$data);
        }
        else {
                if($this->input->post('tipeBarang')=='Produk Jadi'){
                    $data['produk']=$this->mdl->findProduk3($this->input->post('kodeBarang'));
                    $data['stokBarang'] = $this->mdl->findStok($id);
                    $dataInventory = array(
                                'tipeBarang'   => $this->input->post('tipeBarang'),
                                'kodeBarang'    => $this->input->post('kodeBarang'),
                                'jumlah'        => $this->input->post('jumlah'),
                                'jenisPergerakanBarang'  => $this->input->post('jenisPergerakanBarang'),
                                'hargaBeli'  => $this->input->post('hargaBeli')
                            );
                    $stokTerkini=$data['produk']->stok;
                    $jumlahBarangTerkini=$data['stokBarang']->jumlah;
                    $jumlahBarangInput=$this->input->post('jumlah');
                    if ($data['stokBarang']->jenisPergerakanBarang=='IN') {
                        $stokLama=$stokTerkini-$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama+$jumlahBarangInput;
                    }
                    else {
                        $stokLama=$stokTerkini+$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama-$jumlahBarangInput;   
                    }
                    //print_r($stokBarangTerbaru);exit();
                    $this->mdl->editInventory($id,$dataInventory);
                    $this->mdl->updateStokProduk($this->input->post('kodeBarang'),$stokBarangTerbaru);
                }
                else if($this->input->post('tipeBarang')=='Material Dasar'){
                    $data['produk']=$this->mdl->findProduk4($this->input->post('kodeBarang'));
                    $data['stokBarang'] = $this->mdl->findStok($id);
                    $dataInventory = array(
                                'tipeBarang'   => $this->input->post('tipeBarang'),
                                'kodeBarang'    => $this->input->post('kodeBarang'),
                                'jumlah'        => $this->input->post('jumlah'),
                                'jenisPergerakanBarang'  => $this->input->post('jenisPergerakanBarang'),
                                'hargaBeli'  => $this->input->post('hargaBeli')
                            );
                    $stokTerkini=$data['produk']->stokMaterial;
                    $jumlahBarangTerkini=$data['stokBarang']->jumlah;
                    $jumlahBarangInput=$this->input->post('jumlah');
                    if ($data['stokBarang']->jenisPergerakanBarang=='IN') {
                        $stokLama=$stokTerkini-$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama+$jumlahBarangInput;
                    }
                    else {
                        $stokLama=$stokTerkini+$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama-$jumlahBarangInput;   
                    }
                    //print_r($stokBarangTerbaru);exit();
                    $this->mdl->editInventory($id,$dataInventory);
                    $this->mdl->updateStokProduk2($this->input->post('kodeBarang'),$stokBarangTerbaru);


                    
                }
                
                redirect('user/stokBarang');   
        }
    }
    public function deleteInventory($id){
        //
        $data['stokBarang'] = $this->mdl->findStok($id);

        if ($data['stokBarang']->tipeBarang=='Produk Jadi') {
            $data['produk']=$this->mdl->findProduk3($data['stokBarang']->kodeBarang);
            $stokTerkini=$data['produk']->stok;
            $jumlahBarangTerkini=$data['stokBarang']->jumlah;
            //print_r($jumlahBarangTerkini);exit();
            if ($data['stokBarang']->jenisPergerakanBarang=='IN') {
                        $stokLama=$stokTerkini-$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama;
                    }
            else {
                $stokLama=$stokTerkini+$jumlahBarangTerkini;
                $stokBarangTerbaru=$stokLama;   
            }
            $this->mdl->updateStokProduk($data['stokBarang']->kodeBarang,$stokBarangTerbaru);
            $this->mdl->deleteInventory($id);
        }
        else if ($data['stokBarang']->tipeBarang=='Material Dasar') {
            $data['produk']=$this->mdl->findProduk4($data['stokBarang']->kodeBarang);
            $stokTerkini=$data['produk']->stok;
            $jumlahBarangTerkini=$data['stokBarang']->jumlah;
            //print_r($jumlahBarangTerkini);exit();
            if ($data['stokBarang']->jenisPergerakanBarang=='IN') {
                        $stokLama=$stokTerkini-$jumlahBarangTerkini;
                        $stokBarangTerbaru=$stokLama;
                    }
            else {
                $stokLama=$stokTerkini+$jumlahBarangTerkini;
                $stokBarangTerbaru=$stokLama;   
            }
            $this->mdl->updateStokProduk2($data['stokBarang']->kodeBarang,$stokBarangTerbaru);
            $this->mdl->deleteInventory($id);
        }
        redirect('user/stokBarang');
    }
    
    public function finance() {
        $this->load->view("user/dashboard_finance_view");
        
    }

    public function revenue() {
        $this->load->view("user/revenue_view");
        
    }

    public function cost() {
        $this->load->view("user/cost_view");
        
    }

    public function profit() {
        $this->load->view("user/profit_view");
        
    }

    public function sales() {
        $this->load->view("user/dashboard_sales_view");
        
    }

    public function salesresult() {
        $this->load->view("user/salesresult_view");
        
    }

    public function topproduct() {
        $this->load->view("user/topproduct_view");
        
    }

    public function topcustomer() {
        $this->load->view("user/topcustomer_view");
        
    }

    public function detailProduk($idProduk) {
        $data['produk'] = $this->mdl->detailProduk($idProduk);
        $this->load->view("user/detailProduk",$data);
        
    }

    public function catalogue() {
        $data['produk'] = $this->mdl->listKatalog();
        $this->load->view("user/catalogue_view",$data);
        
    }

    public function setujuDesain($nomorFaktur){
        //$this->mdl->setujuDesain($nomorFaktur);
        $data = array(
            'tanggalApprovalDesain'    => date("Y-m-d H:i:s"),
            'statusDesain' => 'Disetujui',
        );
        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil mensetujui design SPK no Faktur <b>'.$nomorFaktur.'</b>, anda saat ini dapat menambahkan Kloter !</div>');
        redirect('user/spk');
    }

    public function tidakSetujuDesain($nomorFaktur){
        $this->mdl->tidakSetujuDesain($nomorFaktur);
        redirect('user/spk');
    }

    public function setujuJadwal($nomorFaktur){
        $this->mdl->setujuJadwal($nomorFaktur);
        redirect('user/spk');
    }

    public function tidakSetujuJadwal($nomorFaktur){
        $this->mdl->tidakSetujuJadwal($nomorFaktur);
        redirect('user/spk');
    }

    public function setujuBOM($nomorFaktur){
        $this->mdl->setujuBOM($nomorFaktur);
        redirect('user/spk');
    }

    public function tidakSetujuBOM($nomorFaktur){
        $this->mdl->tidakSetujuBOM($nomorFaktur);
        redirect('user/spk');
    }



    public function setujuAkhir($nomorFaktur){
        //$this->mdl->setujuAkhir($nomorFaktur);

        $data['spk']=$this->mdl->findSPK($nomorFaktur);
        $data['produk']=$this->mdl->findProduk($data['spk'][0]->idProduk);
        $data['bom']=$this->mdl->getBOMProduct($data['spk'][0]->idProduk);

        $ii=0;
        for ($i=0; $i <count($data['bom']) ; $i++) { 
            if ($data['bom'][$i]->jumlah > $data['bom'][$i]->stokMaterial) {
                $ii++;
            }
        if ($ii>0) {
                echo "";
                $message = "Material Tidak Cukup";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/spk")."';</script>";
            }
            else {
                $dataInventory = array(
                            'tipeBarang'   => "Material Dasar",
                            'kodeBarang'    => $data['bom'][$i]->kodeMaterial,
                            'jumlah'        => $data['bom'][$i]->jumlah,
                            'jenisPergerakanBarang'  => "OUT"
                        );

                $jumlah=$data['bom'][$i]->jumlah;
                $stokBarang=$data['bom'][$i]->stokMaterial;
                $stokBarangTerbaru = $stokBarang-$jumlah;
                //print_r($dataInventory);
                $this->mdl->insertInventory($dataInventory);
                $this->mdl->updateStokProduk2($data['bom'][$i]->kodeMaterial,$stokBarangTerbaru);
            }
        }

        $data = array(
            'tanggalApprovalBOM' => date("Y-m-d H:i:s"),
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s"),
            'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),

            'statusBOM' => 'Disetujui',
            'statusJadwal' => 'Disetujui',
            'statusPersetujuan' => 'Disetujui',
        );

        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);

        $ren = $this->mdl->getAktivitas($nomorFaktur);

        $idAktivitas = $ren[0]->idAktivitas;
        $idSPK = $ren[0]->idSPK;

        $data = array(
            'idSPK' => $idSPK,
            'idAktivitas' => $idAktivitas,
            'statusWork' => 'Belum ada PIC',
            'statusSPK' => 'Active',
        );

        $this->mdl->insertData('factproduction',$data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil mensetujui SPK no Faktur <b>'.$nomorFaktur.'</b>, silahkan tambahkan PIC untuk memulai aktivitas pertama !</div>');
        redirect('user/kanban');
    }


    public function tidakSetujuAkhir($nomorFaktur){
        $this->mdl->tidakSetujuAkhir($nomorFaktur);
        redirect('user/spk');
    }

    public function hapusPO($nomorPO){
        $this->mdl->hapusPO($nomorPO);
        redirect('user/purchaseOrder');
    }

    public function hapusSPK($idSPK){
        $this->mdl->deleteData('idSPK',$idSPK,'spk');
        $this->mdl->deleteData('idSPK',$idSPK,'factproduction');
        $this->mdl->deleteData('idSPK',$idSPK,'rencanaproduksi');
        redirect('user/spk');
    }

    public function generateRandomString($length = 10) {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function invoicePO($nomorPO){
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/invoicePO',$data);
    }

    

    public function trackPO() {
        $data['listPO'] = $this->mdl->listPO();
        $this->load->view('user/trackPO',$data);
    }

    public function detailTracking() {
        $nomorPO = $this->input->post('nomorPO');
        $data['dataUmum']  = $this->mdl->dataUmum($nomorPO);
        $jmlData=count($data['dataUmum']);
        if($jmlData>0){
            $data['dataAdministrasi']  = $this->mdl->trackAdministrasi($nomorPO);
            $data['dataPO']  = $this->mdl->trackPO($nomorPO);
            $this->load->view('user/detailTracking', $data);
        } else {
            $message = "Tidak ada nomor Purchase Order yang sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/trackPO")."';</script>";
        }
    }

    public function approve($idProProd) {

        $data = array(
            'statusBerat' => 'Disetujui',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyetujui berat aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b></div>');
        redirect('User/kanban');

    }
    
    public function printInvoice($nomorPO){
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/printInvoice',$data);
    }


    public function createPOService() {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseorderservice.nomorPO]');
        $this->form_validation->set_rules('namaBarang[]','Nama Barang', 'required');
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $idCustomer=$this->input->post('idCustomer');
            if ($idCustomer==0){
                $data['id'] = array(
                    'idC' => 0,
                );
            } else {
                $data['customer'] = $this->mdl->cariCustomer($idCustomer);
                $data['id']= array(
                    'idC' => 1,
                );
            }
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhirService();
            $this->load->view('user/createPOService',$data);
        }
        else {
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $this->mdl->tambahCustomer($dataCustomer);
                $customer=$this->mdl->findCustomer();
                $idCustomer=$customer[0]->idCustomer;

                $data['namaBarang']=$this->input->post('namaBarang');
                $data['jumlah']=$this->input->post('jumlah');
                $data['harga']=$this->input->post('harga');
                $data['berat']=$this->input->post('berat');
                $dataPOService= array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                            'tipeOrder'         => 'service',
                            'jenisOrder'         => 'Satuan',
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseorderservice',$dataPOService);

                $data['PO'] = $this->mdl->findPOService($this->input->post('nomorPO'));
                $idPO = $data['PO'][0]->idPO;
                //print_r($data['material']);exit();
                $j=count($this->input->post('jumlah'));
                $harga=0;
                $berat=0;
                    for ($i=0; $i < $j ;$i++){
                        $dataDetailPOService= array(
                            'idPO'         => $idPO,
                            'namaBarang'    => $data['namaBarang'][$i],
                            'jumlah'       => $data['jumlah'][$i],
                            'berat'       => $data['berat'][$i],
                            'harga'       => $this->clean($data['harga'][$i]),
                        );

                        $this->mdl->insertData('detailpurchaseorderservice',$dataDetailPOService);
                        $berat = $berat + $data['berat'][$i];
                        $harga = $harga + $this->clean($data['harga'][$i]); 
                    }
                $dataHarga = array(
                    'totalHarga' => $harga,
                    'totalBerat' => $berat
                ); 
                $this->mdl->updateData('idPO',$idPO, 'purchaseorderservice', $dataHarga);
                $message = "PO berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/listPOService")."';</script>";
        }
    }

    public function tambahSPKService($nomorPO){
        //sebelum mengeksekusi query
        
        $this->form_validation->set_message('is_unique','Nomor SPK telah digunakan');
        $this->form_validation->set_rules('nomorFaktur', 'Nomor Faktur' ,'is_unique[spkService.nomorFaktur]');
        // $pos=$this->input->post('nomorFaktur');
        // print_r($pos);exit();
        $data['spkTerakhir'] = $this->mdl->spkTerakhirService();
        $data['aktivitas'] = $this->mdl->listAktivitasService();
        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO = $nomorPO;
            $data['dataPO'] = $this->mdl->findPOService($nomorPO);
            $this->load->view('user/createSpkService',$data);
        }
        else {
            //eksekusi query insert tanpa gambar

            $iduser = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur'           => $this->input->post('nomorFaktur'),
                'nomorPO'               => $this->input->post('nomorPO'),
                'idCustomer'            => $this->input->post('idCustomer'),
                'statusJadwal'          => 'Disetujui',
                'PICJadwal'             => $iduser,
                'durasi'                => $this->input->post('durasi'),
            );

            $this->mdl->insertData('spkservice',$dataSPK);  


            $data['dataSPK'] = $this->mdl->findSPKbyFaktur($this->input->post('nomorFaktur'));
            $idSPK = $data['dataSPK']->idSPK;
            $idAktivitas    =$this->input->post('idAktivitas');
            $nomorAktivitas =$this->input->post('nomorAktivitas');
            $startDate      =$this->input->post('startDate');
            $endDate        =$this->input->post('endDate');
            $nomorFaktur    =$this->input->post('nomorFaktur');

            
            // print_r($idAktivitas);exit();
            for ($i=0; $i <count($nomorAktivitas); $i++) {
                $b=$nomorAktivitas[$i]; 
                $dataJadwal = array(
                    'idSPK'                 => $idSPK,
                    'idAktivitas'           => $idAktivitas[$b],
                    'startDate'           => $startDate[$b],
                    'endDate'           => $endDate[$b],
                );
                $this->mdl->insertData('rencanaproduksiservice',$dataJadwal);  
                
            }     

            $ren = $this->mdl->getAktivitasService($nomorFaktur);

            $idAktivitas = $ren[0]->idAktivitas;
            $idSPK = $ren[0]->idSPK;

            $data = array(
                'idSPK' => $idSPK,
                'idAktivitas' => $idAktivitas,
                'statusWork' => 'Belum ada PIC',
                'statusBerat' => 'Belum Disetujui',
                'statusSPK' => 'Active',
            );

            $this->mdl->insertData('factproductionservice',$data);             
            $message = "Surat Perintah Kerja telah berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/listSPKService")."';</script>";
        }
    }

    public function hapusSPKService($idSPK){
        $this->mdl->deleteData('idSPK',$idSPK,'spkservice');
        $this->mdl->deleteData('idSPK',$idSPK,'factproductionservice');
        $this->mdl->deleteData('idSPK',$idSPK,'rencanaproduksiservice');
        redirect('user/listSPKService');
    }

    public function detailSPKService() {
        $nomorPO=$this->input->post('nomorPO');
        $data['pegawai'] = $this->mdl->listDesain();
        $data['dataPO'] = $this->mdl->findPOService($nomorPO);
        $jumlah = count($data['dataPO']);

        if($jumlah>0)
        {
            $data['cekSPK'] = $this->mdl->cekSPKservice($nomorPO);
            $jml=count($data['cekSPK']);
            if ($jml<1) {
                $data['spkTerakhir'] = $this->mdl->spkTerakhirService();
                $data['aktivitas'] = $this->mdl->listAktivitasService();
                $this->load->view('user/createSpkService',$data);
            } else {
                $message = "Nomor PO telah digunakan";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/createSpkService")."';</script>";
            }
            
        } else {
            $message = "Tidak ada nomor Purchase Order yang sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/listSPKService")."';</script>";
        }
    }

    public function listSPKService() {
        $data['listSPK'] = $this->mdl->listSPKService();
        $this->load->view('user/spkService',$data);
    }

    public function createSpkService() {
        $data['list'] = $this->mdl->getListSPKService();
        $this->load->view('user/createSpkServ',$data);
    }

    public function kanbanService() {

        // if (isset($this->session->userdata['logged_in'])) {

            //$data['tgl'] = date_create($time());

            $data['s'] = $this->mdl->getSalesService();
            $data['ds'] = $this->mdl->getDetailSalesService();
            //print_r($data['ds']);exit();

            $data['staf'] = $this->mdl->getStaf();

            $data['r'] = $this->mdl->getRecordService();
            $data['b'] = $this->mdl->getBeratService();

            /*$data['ms'] = $this->mdl->getProsesService(1001);
            $data['po'] = $this->mdl->getProsesService(1002);  
            $data['do'] = $this->mdl->getProsesService(1003);

            $data['dr'] = $this->mdl->getProsesService(1004);  
            $data['pn'] = $this->mdl->getProsesService(1005);  
            $data['qc'] = $this->mdl->getProsesService(1006);  

            $data['sl'] = $this->mdl->getProsesService(1007); */

            $data['li'] = $this->mdl->getProsesService(1001);
            $data['gi'] = $this->mdl->getProsesService(1002);  
            $data['co'] = $this->mdl->getProsesService(1003);

            $data['gp'] = $this->mdl->getProsesService(1004);  
            $data['go'] = $this->mdl->getProsesService(1005);  
            $data['bo'] = $this->mdl->getProsesService(1006);  

            $data['do'] = $this->mdl->getProsesService(1007);
  

            $this->load->view('user/statprodService_view',$data);

        // } else {
        //     redirect('user/login');
        // }   


        
    }

    public function nextService($idaktivitas,$idProProd,$idSPK) {

        $proses = $this->mdl->getProsesDetailService($idProProd);
        $stat = $proses[0]->statusWork;

        if($stat == 'Belum ada PIC') {

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">gagal melanjutkan proses produksi, belum ada PIC proses tersebut.</div>');
            redirect('user/kanbanService');

        } else {
            $data = array(
            'statusWork' => 'Done',
            'RealisasiEndDate' => date("Y-m-d H:i:s")
            );
            $this->mdl->updateData('idProProd',$idProProd, 'factproductionservice', $data);
            
            $aktivitas = $this->mdl->getNextAktivitasService($idSPK, $idaktivitas);
            $next = $aktivitas[0]->idAktivitas;

            $data = array(
                'idSPK' => $idSPK,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
                'idAktivitas' => $next,
                'statusBerat' => 'Belum Disetujui'
            );
            $this->mdl->insertData('factproductionservice', $data);
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
            redirect('user/kanbanService');    
        }

        

    }

    public function setPICService() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s")
        );
        $this->mdl->updateData('idProProd',$idp, 'factproductionservice', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanbanService');

    }

    public function setBeratService() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'berat' => $this->input->post('berat')
        );
        $this->mdl->updateData('idProProd',$idp, 'factproductionservice', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat</div>');
        redirect('User/kanbanService');

    }

    public function approveService($idProProd) {

        $data = array(
            'statusBerat' => 'Disetujui',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproductionservice',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyetujui berat aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b></div>');
        redirect('User/kanbanService');

    }

    public function pindahService($idProProd, $idSPK,$nomorFaktur) {
        
        $data = array(
            'statusSPK' => 'Done'
        );
        $this->mdl->updateData('idSPK',$idSPK,'spkservice',$data);
        $this->mdl->updateData('idSPK',$idSPK,'factproductionservice',$data);

        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $data = array(
            'idPIC' => $iduser,
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'RealisasiEndDate' => date("Y-m-d H:i:s"),
            'statusWork' => 'Done',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproductionservice',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b></div>');
        redirect('User/kanbanService');

    }

    public function hapusPOService($nomorPO){
        $data['spk'] = $this->mdl->findSPKbyPO($nomorPO);
        $data['po'] = $this->mdl->findPOService($nomorPO);
        $idSPK = $data['spk']->idSPK;
        $idPO = $data['po']->idPO;
        
        $nomorFaktur = $data['spk']->nomorFaktur;
        $this->mdl->deleteData('nomorPO', $nomorPO, 'purchaseorderservice');
        $this->mdl->deleteData('idSPK', $idSPK, 'spkservice');
        $this->mdl->deleteData('idSPK', $idSPK, 'rencanaproduksiservice');
        $this->mdl->deleteData('idSPK', $idSPK, 'factproductionservice');
        $this->mdl->deleteData('idPO', $idPO, 'detailpurchaseorderservice');
        redirect('user/listPOService');
    }

    public function invoicePOService($nomorPO){
        $data['dataPO'] = $this->mdl->findPOService($nomorPO);

        $data['ds'] = $this->mdl->getDetailSalesService2($nomorPO);
        
        // print_r($data);exit();
        $this->load->view('user/invoicePOService',$data);
    }

    public function printInvoiceService($nomorPO){
        $data['dataPO'] = $this->mdl->findPOService($nomorPO);
        // print_r($data);exit();
        $data['ds'] = $this->mdl->getDetailSalesService2($nomorPO);
        $this->load->view('user/printInvoiceService',$data);
    }

    public function setKloter() {
        $idspk = $this->input->post('idSPK');

        $kode = $this->generateRandomString();
        if (count($idspk)==0) {
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Gagal membuat kloter SPK karena belum memilih SPK.</div>');
            redirect('user/spk');
        }
        for ($i=0; $i < count($idspk); $i++) { 
            
            $data = array (
                'nama' => $this->input->post('namakloter'),
                'kadar' => $this->input->post('kadar'),
                'idKloter' => $kode,
                'idSPK' => $idspk[$i],
                'tgl_kloter' => date("Y-m-d H:i:s"),
            );

            $this->mdl->insertData('kloter',$data);

            $idSPK = $idspk[$i];

            $data = array(
                'idSPK' => $idSPK,
                'idAktivitas' => 1004,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
            );

            $this->mdl->insertData('factproduction',$data);

        }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil membuat kloter SPK</div>');
        redirect('user/kanban');
        

    }

    public function next2($idKloter,$idAktivitas) {

        $kloter = $this->mdl->getIsiKloter($idKloter);

        for ($i=0; $i < count($kloter) ; $i++) { 

            $data = array(
                'statusWork' => 'Done',
                'RealisasiEndDate' => date("Y-m-d H:i:s")
                );
            
            $where = array(

                    'idSPK' => $kloter[$i]->idSPK,
                    'idAktivitas' => $idAktivitas

                );

            $this->mdl->updateData2($where, 'factproduction', $data);

            $data = array(
                    'idSPK' => $kloter[$i]->idSPK,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => (int)$idAktivitas+1,
                    'statusBerat' => 'Belum Disetujui'
                );
            $this->mdl->insertData('factproduction', $data);
        
        
         }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanban');

    }

    public function finalisasi($idKloter) {

        $kloter = $this->mdl->getIsiKloter($idKloter);
        $bom = $this->mdl->getStokBOM2($idKloter); 

        $xx = 0;
        for ($i=0; $i < count($bom) ; $i++) { 

            // if($bom[$i]->kategori == 'Emas' AND (float)$bom[$i]->stokakhir < (float)$bom[$i]->ss) {
            //     $xx++;
            //     $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Stok material '.$bom[$i]->namaMaterial.' dibawah batas stok aman, gagal melanjutkan proses produksi. Silahkan isi terlebih dahulu stok material tersebut.</div>');
            //     redirect('User/kanban');
            // } 

            $data = array(
                'tipeBarang'   => "Material Dasar",
                'kodeBarang'    => $bom[$i]->kodeMaterial,
                'jumlah'        => $bom[$i]->jumlah,
                'jenisPergerakanBarang'  => "OUT",
                'tanggal' => date("Y-m-d H:i:s"),
            );

            $this->mdl->insertData('stokbarang', $data);

            $data = array(
                'stokMaterial' => (float)$bom[$i]->stokMaterial-(float)$bom[$i]->jumlah
            );

            $this->mdl->updateData('idMaterial',$bom[$i]->idMaterial,'materialdasar',$data);

        }


        for ($i=0; $i < count($kloter) ; $i++) { 

            $data = array(
                'tanggalApprovalBOM' => date("Y-m-d H:i:s"),
                'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),

                'statusBOM' => 'Disetujui',
                'statusJadwal' => 'Disetujui',
                'statusPersetujuan' => 'Disetujui',
            );

            $this->mdl->updateData('nomorFaktur',$kloter[$i]->nomorFaktur,'spk',$data);

            $data = array(
                'statusWork' => 'Done',
                'RealisasiEndDate' => date("Y-m-d H:i:s")
                );
            
            $where = array(

                    'idSPK' => $kloter[$i]->idSPK,
                    'idAktivitas' => '1004'

                );

            $this->mdl->updateData2($where, 'factproduction', $data);

            $data = array(
                    'idSPK' => $kloter[$i]->idSPK,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => '1005',
                    'statusBerat' => 'Belum Disetujui'
                );
            $this->mdl->insertData('factproduction', $data);
        
        
         }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanban');
    }

    public function spkMasal() {
        $nomorPO=$this->input->post('nomorPO');
        redirect('user/detailSPKMasal/'.$nomorPO);
    }

    public function detailSPKMasal($nomorPO) {
        $data['pegawai'] = $this->mdl->listDesain();
        $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
        $jumlah = count($data['dataPO']);

        if($jumlah>0)
        {
            $data['spkTerakhir'] = $this->mdl->spkTerakhir2();
            $this->load->view('user/createSpkMasal',$data);
            
        } else {
            $message = "Tidak ada nomor Purchase Order yang sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createSpk")."';</script>";
        }
    }

    public function convertPerak() {
        $idCustomer=$this->input->post('idCustomer');
        redirect('user/detailPOPerak/'.$idCustomer);
    }

    public function detailPOPerak($idCustomer) {
        
        if ($idCustomer==0){
            $data['id'] = array(
                'idC' => 0,
            );
        } else {
            $data['customer'] = $this->mdl->cariCustomer($idCustomer);
            $data['id']= array(
                'idC' => 1,
            );
        }
        $data['pegawai'] = $this->mdl->listPegawaiSales();
        //$data['poTerakhir'] = $this->mdl->poTerakhir();
        $data['listProduk'] = $this->mdl->listProduk();
        $data['poTerakhir'] = $this->mdl->poTerakhir3();
        $this->load->view('user/createPOPerak',$data);
    }

    public function tambahPOPerak(){
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[poperak.nomorPO]');

        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhir3();
            $this->load->view('user/createPOPerak',$data);
        }
        else {

            if(!$this->input->post('pekerjaanTambahan[]')) {
                $pekerjaanTambahan = "Tidak Ada";
            } else {
                $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
            }

            $idC=$this->input->post('idCustomer');
            if($idC==0){
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $idCustomer=$this->mdl->insertDataGetLast('customer',$dataCustomer);
            } else {
                $idCustomer=$idC;
            }
            
            
            if ($this->input->post('namaBatu')==NULL) {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO');
            } else {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO').'-'.$this->input->post('namaBatu');
            };
            

            $kodeProduk=$this->input->post('kodeProduk');
            $cekProduk=$this->mdl->findProduk($kodeProduk);

            $hargaBahan = $this->clean($this->input->post('hargaBahan'));
            $hargaKrum = $this->clean($this->input->post('hargaKrum'));
            $upah = $this->clean($this->input->post('upah'));
            $panjar = $this->clean($this->input->post('panjar'));
            $hargaPerak = $this->clean($this->input->post('hargaPerak'));
            $hargaKrum = $this->clean($this->input->post('hargaKrumWarna'));
            $hargaSlep = $this->clean($this->input->post('hargaSlep'));
            $upahRombak = $this->clean($this->input->post('upahRombak'));
            $totalHarga = $this->clean($this->input->post('totalHarga'));
            $hargaResize = $this->clean($this->input->post('hargaResize'));

            $kode = $this->generateRandomString();
             
            // print_r($dataProduk);exit();
            if($_FILES['userfile']['name'] != NULL){
                //form sumbit dengan gambar diisi
                //load uploading file library
                 
                 $config['upload_path']     = './uploads/gambarProduk/'; 
                 $config['allowed_types']   = 'jpg'; 
                 $config['max_size']        = '2048';
                 $config['file_name']       = $kode."-cust.jpg";
                 $config['overwrite']        = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                    if ( !$this->upload->do_upload()){
                        $data['error'] = array(
                            'error' => $this->upload->display_errors()
                        );
                        $message = "Gambar tidak mendukung";
                        echo "<script type='text/javascript'>alert('$message');
                        </script>";
                        $data['pegawai'] = $this->mdl->listPegawaiSales();
                        $data['poTerakhir'] = $this->mdl->poTerakhir3();
                        $this->load->view('user/createPurchaseOrder',$data);
                    }
                    else {
                        $gambar = $this->upload->data();

                        if(count($cekProduk)==0){
                            $dataProduk = array(
                            'kodeProduk'        => $this->input->post('kodeProduk'),
                            'namaProduk'        => $namaProduk,
                            'jenisProduk'       => $this->input->post('jenisProduk'),
                            'kategori'          => 'Perak',
                            'statusKatalog'     => 'Tidak Tampil',
                            'kodeGambar'        => $kode,
                            );
                            $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);
                        } else {
                            $produk=$this->mdl->findProduk($kodeProduk);
                            $idProduk=$produk[0]->idProduk;
                        } 
                    }
            } else {

                if(count($cekProduk)==0){
                    $dataProduk = array(
                        'kodeProduk'        => $this->input->post('kodeProduk'),
                        'namaProduk'        => $namaProduk,
                        'jenisProduk'       => $this->input->post('jenisProduk'),
                        'kategori'         => 'Tempahan',
                        'statusKatalog'         => 'Tidak Tampil',
                        'kodeGambar'        => $kode,
                    );
                    $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);
                } else {
                    $produk=$this->mdl->findProduk($kodeProduk);
                    $idProduk=$produk[0]->idProduk;
                }                 
                        
            }

            //eksekusi query Tambah PO
            $dataPO = array(
                'nomorPO'           => $this->input->post('nomorPO'),
                'idProduk'          => $idProduk,
                'idCustomer'        => $idCustomer,
                'idSalesPerson'     => $this->input->post('idSalesPerson'),
                'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                'hargaBahan'        => $hargaBahan,
                'upah'              => $upah,
                'panjar'            => $panjar,
                'totalHarga'        => $totalHarga,
                'tipeOrder'         => 'Perak',
                'beratAkhir'        => $this->input->post('beratAkhir'),
                'tipeCustomer'      => $this->input->post('tipeCustomer'),
                'krumWarna'      => $this->input->post('krumWarna'),
                'keteranganKrum'      => $this->input->post('keteranganKrum'),
                'keteranganSlep'      => $this->input->post('keteranganSlep'),
                'keteranganRombak'      => $this->input->post('keteranganRombak'),
                'resize'      => $this->input->post('resize'),
                'hargaPerak'          => $hargaPerak,
                'hargaKrum'          => $hargaKrum,
                'hargaSlep'          => $hargaSlep,
                'upahRombak'          => $upahRombak,
                'hargaResize'          => $hargaResize,
                'namaBatu'          => $this->input->post('namaBatu'),
                'beratBatu'         => $this->input->post('beratBatu'),
                'ukuranJari'        => $this->input->post('ukuranJari'),
                'model'             => $this->input->post('model'),
                'bahan'             => 'Perak',
                'keadaanBatuTengah'     => $this->input->post('keadaanBatuTengah'),
                'batuTerhadapKruman'    => $this->input->post('batuTerhadapKruman'),
                'batuTerhadapPukulan'   => $this->input->post('batuTerhadapPukulan'),
            );
            $this->mdl->insertData('poperak',$dataPO); 

            //Query Tambah SPK
            $sd='Proses Desain';
            $sb='Belum Ada';
            $sj='Belum Ada';
            $sp='Belum Disetujui';
            $iduser = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur'           => $this->input->post('nomorPO'),
                'nomorPO'               => $this->input->post('nomorPO'),
                'idProduk'              => $idProduk,
                'idCustomer'            => $idCustomer,
                'PICBOM'                => $iduser,
                'statusJadwal'          => $sj,
                'PICJadwal'             => $iduser,
                'statusPersetujuan'     => $sp,
                'PICPersetujuan'        => $iduser,
            );
            $this->mdl->insertData("spkperak",$dataSPK);

            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO=$this->input->post('nomorPO');
            $data['dataPO'] = $this->mdl->findPOPerak($nomorPO);
            // print_r($data);exit();
            $this->load->view('user/invoicePOPerak',$data);
        }
        
    }

    public function spkPerak() {
        $nomorPO=$this->input->post('nomorPO');
        redirect('user/detailSPKPerak/'.$nomorPO);
    }

    public function invoicePOMassal($nomorPO){
        $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/invoicePOMassal',$data);
    }

    public function invoicePOPerak($nomorPO){
        $data['dataPO'] = $this->mdl->findPOPerak($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/invoicePOPerak',$data);
    }
    
    public function printInvoicePerak($nomorPO){
        $data['dataPO'] = $this->mdl->findPOPerak($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/printInvoicePerak',$data);
    }

    public function rekapProduksi() {
        $data['dataRekap'] = $this->mdl->listRekapProduksi();
        $data['pegawai'] = $this->mdl->listPegawai();
        $this->load->view('user/rekapProduksi',$data);
    }

    public function tambahRekapProduksi() {
        $jenisProduksi=$this->input->post('jenisProduksi');
        $idUser=$this->input->post('idUser');

        if ($jenisProduksi=="tempahan") {
            $data['listSPK'] = $this->mdl->getSPKTempahan($idUser);
        }
        $data['user'] = $this->mdl->findPegawai($idUser);
        $data['data'] = array(
            'jenisProduksi' => $jenisProduksi,
        );
        $this->load->view('user/createRekapProduksi',$data);
    }

    public function tambahRekap() {
        $this->form_validation->set_rules('beratKembali', 'Berat Kembalian','required');

        $jenisProduksi=$this->input->post('jenisProduksi');
        $idUser=$this->input->post('idPIC');

        if ($this->form_validation->run() == FALSE){
            

            if ($jenisProduksi=="tempahan") {
                $data['listSPK'] = $this->mdl->getSPKTempahan($idUser);
            }
            $data['user'] = $this->mdl->findPegawai($idUser);
            $data['data'] = array(
                'jenisProduksi' => $jenisProduksi,
            );
            $this->load->view('user/createRekapProduksi',$data);
        }
        else {
            //eksekusi query insert tanpa gambar
            $kode = $this->generateRandomString();
            $dataRekap = array(
                'idPIC'             => $idUser,
                'kodeRekapProduksi' => $kode,
                'beratKembali'      => $this->input->post('beratKembali'),
                'jenisProduksi'     => $jenisProduksi,
            );
            $this->mdl->insertData("rekapproduksi",$dataRekap);  

            $idProd=$this->input->post('idProProd[]');
            for ($i=0; $i < count($idProd) ; $i++) { 
                $dataRekapLine = array(
                    'kodeRekapProduksi' => $kode,
                    'idProProd'         => $idProd[$i],
                );
                $this->mdl->insertData("rekapproduksiline",$dataRekapLine); 
            }

            $message = "Rekap Produksi Telah Berhasil di Simpan";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/rekapProduksi")."';</script>";
        }
    }

    public function lihatRekap($kodeRekapProduksi) {
        $data['rekap'] = $this->mdl->findRekap($kodeRekapProduksi);
        
        $this->load->view('user/viewRekapProduksi',$data);
    }

    public function convertTrading() {
        $idCustomer=$this->input->post('idCustomer');
        redirect('user/createPOTrading/'.$idCustomer);
    }

    public function createPOTrading($idCustomer) {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseordertrading.nomorPO]');
        $data['produk'] = $this->mdl->listProdukTrading();
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            if ($idCustomer==0){
                $data['id'] = array(
                    'idC' => 0,
                );
            } else {
                $data['customer'] = $this->mdl->cariCustomer($idCustomer);
                $data['id']= array(
                    'idC' => 1,
                );
            }
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhirTrading();
            $data['listProduk'] = $this->mdl->listProdukTrading();
            $this->load->view('user/createPOTrading',$data);

            // print_r($data);exit();
        }
        else {
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $this->mdl->insertData('customer', $dataCustomer);
                $customer=$this->mdl->findCustomer();
                $idCustomer=$customer[0]->idCustomer;

                $dataPOTrading= array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tipeOrder'         => 'trading',
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseordertrading',$dataPOTrading);

                $data['PO'] = $this->mdl->findPOTrading($this->input->post('nomorPO'));
                $idPO = $data['PO'][0]->idPO;

                redirect('user/createPOTradingDetail/'.$idPO);
        }
    }

    public function createPOTradingDetail($idPO) {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseordertrading.nomorPO]');
        $data['produk'] = $this->mdl->listProdukTrading();
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $data['idPO'] = $idPO;
            $data['PO'] = $this->mdl->findPOTradingbyID($idPO);
            $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhirTrading();
            $data['listProduk'] = $this->mdl->listProdukTrading();
            $this->load->view('user/createPOTradingDetail',$data);

            // print_r($data);exit();
        }
        else {
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $this->mdl->insertData('customer', $dataCustomer);
                $customer=$this->mdl->findCustomer();
                $idCustomer=$customer[0]->idCustomer;

                $dataPOTrading= array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tipeOrder'         => 'trading',
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseordertrading',$dataPOTrading);

                $data['PO'] = $this->mdl->findPOTrading($this->input->post('nomorPO'));
                $idPO = $data['PO'][0]->idPO;

                redirect('user/createPOTradingDetail/'.$idPO);
        }
    }

     public function createPOTradingDetail2($idPO) {
        $data['produk'] = $this->mdl->listProdukTrading();
        $data['PO'] = $this->mdl->findPOTradingbyID($idPO);
        $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $this->mdl->insertData('customer', $dataCustomer);
                $customer=$this->mdl->findCustomer();
                $idCustomer=$customer[0]->idCustomer;

                $data['idProduk']=$this->input->post('idProduk');
                $data['jumlah']=$this->input->post('jumlah');
                $data['harga']=$this->input->post('harga');
                $dataPOTrading= array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                            'tipeOrder'         => 'trading',
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseordertrading',$dataPOTrading);

                $data['PO'] = $this->mdl->findPOTrading($this->input->post('nomorPO'));
                $idPO = $data['PO'][0]->idPO;
                //print_r($data['material']);exit();
                $j=count($this->input->post('jumlah'));
                    for ($i=0; $i < $j ;$i++){
                        $dataDetailPOTrading= array(
                            'idPO'         => $idPO,
                            'idProduk'    => $data['idProduk'][$i],
                            'jumlah'       => $data['jumlah'][$i],
                            'harga'       => $data['harga'][$i],
                        );
                        //print_r($dataBOM);//exit();
                        $this->mdl->insertData('detailpurchaseordertrading',$dataDetailPOTrading);
                    }
                $message = "PO Trading berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/listPOService")."';</script>";
    }


    public function cariProduk2() {
        $kodeProduk = $this->input->post('kodeProduk');
        $data['produk'] = $this->mdl->findProdukTrading($kodeProduk);
        echo json_encode($data['produk']);
    }

    public function tambahCart($idPO) {

        $dataCart = array(
                'idPO'         => $idPO,
                'idProduk'    => $this->input->post('produk'),
                'jumlah'       => $this->input->post('jumlah'),
                'harga'       => $this->input->post('harga')

            );
        $this->mdl->insertData('detailpurchaseordertrading',$dataCart);
        $message = "Produk berhasil ditambahkan";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url('user/createPOTradingDetail/'.$idPO)."';</script>";
    }

    public function hapusCart($idDetailPO) {
        $data['PO'] = $this->mdl->findPOTradingDetail2($idDetailPO);
        $idPO = $data['PO'][0]->idPO;
        $this->mdl->deleteData('idDetailPO', $idDetailPO, 'detailpurchaseordertrading');
        $message = "Produk berhasil dihapus dari chart";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url('user/createPOTradingDetail/'.$idPO)."';</script>";
    }

    public function selesaiChart() {
        $nomorPO = $this->input->post('nomorPO');
        $dataCart = array(
                'totalHarga' => $this->input->post('totalHarga')
                );
        $this->mdl->updateData('nomorPO',$nomorPO,'purchaseordertrading',$dataCart);
        $data['PO'] = $this->mdl->findPOTrading($nomorPO);
        $idPO = $data['PO'][0]->idPO;
        $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
        for ($i=0; $i < count($data['detailPO']) ; $i++) { 
            $jumlah = $data['detailPO'][$i]->jumlah;
            $idProduk = $data['detailPO'][$i]->idProduk;
            $data['produk'] = $this->mdl->findProdukTrading($idProduk);
            $stok=$data['produk'][0]->stok;
            $stokTerkini = $stok-$jumlah;
            $dataStok = array(
                'stok' => $stokTerkini
                );
            $this->mdl->updateData('idProduk',$idProduk,'produk',$dataStok);


            $kodeBarang=$data['produk'][0]->kodeProduk;
            $harga=$data['detailPO'][0]->harga;
            $dataInventory = array(
                    'tipeBarang'   => "Produk Jadi",
                    'kodeBarang'    => $kodeBarang,
                    'jumlah'        => $jumlah,
                    'jenisPergerakanBarang'  => "OUT",
                    'hargaBeli'  => $harga*$jumlah
            );
            $this->mdl->insertInventory($dataInventory);
        }
        redirect('user/listPOTrading');
    }

    public function invoicePOTrading($nomorPO){
        $data['dataPO'] = $this->mdl->findPOTrading($nomorPO);
        $idPO = $data['dataPO'][0]->idPO;
        $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
        // print_r($data);exit();
        $this->load->view('user/invoicePOTrading',$data);
    }

    public function printInvoiceTrading($nomorPO){
        $data['dataPO'] = $this->mdl->findPOTrading($nomorPO);
        $idPO = $data['dataPO'][0]->idPO;
        $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
        $this->load->view('user/printInvoiceTrading',$data);
    }

    public function createInvoiceAkhirPO() {
        $data['listPO'] = $this->mdl->listPO3();
        $this->load->view('user/pilihJenisInvoicePO',$data);
    }

    public function convertInvoicePerseorangan() {
        $nomorPO=$this->input->post('nomorPO');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'required');
        if($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Nomor PO tidak boleh kosong.</div>');
            redirect('user/createInvoiceAkhirPO');
        }
        else {
        redirect('user/invoiceAkhirPOPerseorangan/'.$nomorPO);
        }
    }

    public function convertInvoicePertokoan() {
        $nomorPO=$this->input->post('nomorPO');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'required');
        if($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Nomor PO tidak boleh kosong.</div>');
            redirect('user/createInvoiceAkhirPO');
        }
        else {
        redirect('user/invoiceAkhirPOPertokoan/'.$nomorPO);
        }
    }

    public function invoiceAkhirPOPerseorangan($nomorPO) {
        $data['PO'] = $this->mdl->findPO($nomorPO);
        $data['SPK'] = $this->mdl->findSPKTempahanbyPO($nomorPO);
        if ($data['SPK']) {
            $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;}
        }
        else {
            $nomorFaktur = NULL;
        }
        $this->load->view('user/invoiceAkhirPOPerseorangan',$data);
    }

    public function invoiceAkhirPOPertokoan($nomorPO) {
        $data['PO'] = $this->mdl->findPO($nomorPO);
        $data['SPK'] = $this->mdl->findSPKTempahanbyPO($nomorPO);
        if ($data['SPK']) {
            $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;}
        }
        else {
            $nomorFaktur = NULL;
        }
        $this->load->view('user/invoiceAkhirPOPertokoan',$data);
    }

    function clean($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^0-9]/', '', $string); // Removes special chars.
    }

    public function tambahPO(){
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[potempahan.nomorPO]');
        $this->form_validation->set_rules('kodeProduk', 'Kode Produk' ,'is_unique[produk.kodeProduk]');

        if ($this->form_validation->run() == FALSE){
            $idCustomer = $this->input->post('idCustomer');
                        // print_r($idCustomer);exit();
                        if ($idCustomer==0){
                            $data['id'] = array(
                                'idC' => 0,
                            );
                        } else {
                            $data['customer'] = $this->mdl->cariCustomer($idCustomer);
                            $data['id']= array(
                                'idC' => 1,
                            );
                        }
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhir();
            $this->load->view('user/createPurchaseOrder',$data);
        }
        else {

            if(!$this->input->post('pekerjaanTambahan[]')) {
                $pekerjaanTambahan = "Tidak Ada";
            } else {
                $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
            }

            $idC=$this->input->post('idCustomer');
            if($idC==0){
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );

                $idCustomer=$this->mdl->insertDataGetLast('customer',$dataCustomer);
            } else {
                $idCustomer=$idC;
            }
            
            
            if ($this->input->post('namaBatu')==NULL) {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO');
            } else {
                $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO').'-'.$this->input->post('namaBatu');
            };

            
            if ($this->input->post('jenisProduk')=='Cincin'||$this->input->post('jenisProduk')=='Cincin Kawin') {
                $ukuranJari=$this->input->post('ukuranJari');
            } else if ($this->input->post('jenisProduk')=='Gelang') {
                $ukuranJari=$this->input->post('diameter');
            } else {
                $ukuranJari=$this->input->post('ukuran');
            };

            $hargaBahan = $this->clean($this->input->post('hargaBahan'));
            $hargaDatangEmas = $this->clean($this->input->post('hargaDatangEmas'));
            $upahPasangBerlian = $this->clean($this->input->post('upahPasangBerlian'));
            $hargaBerlian = $this->clean($this->input->post('hargaBerlian'));
            $hargaBatuZirkon = $this->clean($this->input->post('hargaBatuZirkon'));
            $hargaKrumWarna = $this->clean($this->input->post('hargaKrumWarna'));
            $upah = $this->clean($this->input->post('upah'));
            $budget = $this->clean($this->input->post('budget'));
            $panjar = $this->clean($this->input->post('panjar'));
            

            $kodeProduk=$this->input->post('kodeProduk');
            $kode = $this->generateRandomString();
             
            // print_r($dataProduk);exit();
            if($_FILES['userfile']['name'] != NULL){
                //form sumbit dengan gambar diisi
                //load uploading file library

                 
                 $config['upload_path']     = './uploads/gambarProduk/'; 
                 $config['allowed_types']   = 'jpg'; 
                 $config['max_size']        = '2048';
                 $config['file_name']       = $kode."-cust.jpg";
                 $config['overwrite']        = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                    if ( !$this->upload->do_upload()){
                        $data['error'] = array(
                            'error' => $this->upload->display_errors()
                        );
                        $message = "Gambar tidak mendukung";
                        echo "<script type='text/javascript'>alert('$message');
                        </script>";
                        $idCustomer = $this->input->post('idCustomer');
                        // print_r($idCustomer);exit();
                        if ($idCustomer==0){
                            $data['id'] = array(
                                'idC' => 0,
                            );
                        } else {
                            $data['customer'] = $this->mdl->cariCustomer($idCustomer);
                            $data['id']= array(
                                'idC' => 1,
                            );
                        }
                        $data['pegawai'] = $this->mdl->listPegawaiSales();
                        $data['poTerakhir'] = $this->mdl->poTerakhir();
                        $this->load->view('user/createPurchaseOrder',$data);
                    }
                    else {
                        $gambar = $this->upload->data();
                        $dataProduk = array(
                            'kodeProduk'        => $this->input->post('kodeProduk'),
                            'namaProduk'        => $namaProduk,
                            'jenisProduk'       => $this->input->post('jenisProduk'),
                            'kategori'          => 'Tempahan',
                            'statusKatalog'     => 'Tidak Tampil',
                            'kodeGambar'        => $kode,
                        );
                        $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);
                        
                    }
            } else {
                
                $dataProduk = array(
                    'kodeProduk'        => $this->input->post('kodeProduk'),
                    'namaProduk'        => $namaProduk,
                    'jenisProduk'       => $this->input->post('jenisProduk'),
                    'kategori'          => 'Tempahan',
                    'statusKatalog'     => 'Tidak Tampil',
                    'kodeGambar'        => $kode,
                );
                $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);

            }

            $harga=$this->input->post('harga');
            $qty=$this->input->post('kuantitas');
            $totalHarga=($qty*$harga)+$upah;
            
            //Query Tambah PO
            $dataPO = array(
                'nomorPO'           => $this->input->post('nomorPO'),
                'idProduk'          => $idProduk,
                'idCustomer'        => $idCustomer,
                'idSalesPerson'     => $this->input->post('idSalesPerson'),
                'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                'hargaBahan'        => $hargaBahan,
                'upah'              => $upah,
                'datangEmas'        => $this->input->post('datangEmas'),
                'hargaDatangEmas'   => $hargaDatangEmas,
                'kuantitas'         => $this->input->post('kuantitas'),
                'metode'            => $this->input->post('metode'),
                'panjar'            => $panjar,
                'totalHarga'        => $totalHarga,
                'tipeOrder'         => 'custom',
                'kadarDatangEmas'   => $this->input->post('kadarDatangEmas'),
                'budget'            => $budget,
                'datangBerlian'     => $this->input->post('datangBerlian'),
                'jumlahDatangBerlian' => $this->input->post('jumlahDatangBerlian'),
                'upahPasangBerlian' => $upahPasangBerlian,
                'tipeCustomer'      => $this->input->post('tipeCustomer'),
                'pekerjaanTambahan' => $pekerjaanTambahan,
                'keteranganTambahan'=> $this->input->post('keteranganTambahan'),
                'biayaTambahan'     => $this->input->post('biayaTambahan'),
                'beratAkhir'        => $this->input->post('beratAkhir'),
                'susut'             => $this->input->post('susut'),
                'bahan'             => $this->input->post('bahan'),
                'kadarBahan'        => $this->input->post('kadarBahan'),
                'namaBatu'          => $this->input->post('namaBatu'),
                'beratBatu'         => $this->input->post('beratBatu'),
                'ukuranJari'        => $ukuranJari,
                'berlian'           => $this->input->post('berlian'),
                'krumWarna'         => $this->input->post('krumWarna'),
                'tipeIkatan'        => $this->input->post('tipeIkatan'),
                'model'             => $this->input->post('model'),
                'beratBerlian'      => $this->input->post('beratBerlian'),
                'hargaBerlian'      => $hargaBerlian,
                'batuZirkon'        => $this->input->post('batuZirkon'),
                'jumlahBatuZirkon'  => $this->input->post('jumlahBatuZirkon'),
                'hargaBatuZirkon'   => $hargaBatuZirkon,
                'hargaKrumWarna'    => $hargaKrumWarna,
                'keteranganKrum'    => $this->input->post('keteranganKrum'),
            );
            $this->mdl->tambahPO($dataPO);    
             

            //Query Tambah SPK
            $sd='Proses Desain';
            $sb='Belum Ada';
            $sj='Belum Ada';
            $sp='Belum Disetujui';
            $iduser = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur'           => $this->input->post('nomorPO'),
                'nomorPO'               => $this->input->post('nomorPO'),
                'idProduk'              => $idProduk,
                'idCustomer'            => $idCustomer,
                'statusDesain'          => $sd,
                'PICDesain'             => 'Belum Ada',
                'statusBOM'             => $sb,
                'PICBOM'                => $iduser,
                'statusJadwal'          => $sj,
                'PICJadwal'             => $iduser,
                'statusPersetujuan'     => $sp,
                'PICPersetujuan'        => $iduser,
            );
            $this->mdl->tambahSPK($dataSPK); 

            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO=$this->input->post('nomorPO');
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $this->load->view('user/invoicePO',$data); 

        }
    }


    public function invoiceTempahan(){
        /*$je=$this->input->post();
        print_r($je);exit();*/
        $jenisTempahan      = $this->input->post('jenisTempahan');
        $nomorPO            = $this->input->post('nomorPO');

        if ($jenisTempahan=='perseorangan') {
                $tipeInvoice = 'perseorangan';
                $headerInvoice = array(
                        'nomorPO'               => $nomorPO,
                        'jenisInvoice'          => 'tempahan',
                        'tipeInvoice'           => 'perseorangan',
                        'total'                 => $this->input->post('total2')
                );
                //print_r($headerInvoice);exit();
                $this->mdl->insertData('invoiceheader',$headerInvoice);

                $data['invoice'] = $this->mdl->findInvoice($nomorPO);
                $idHeader = $data['invoice'][0]->idHeader;

                $dataInvoice = array(
                        'idHeader'              => $idHeader,
                        'nomorPO'               => $this->input->post('nomorPO'),
                        'beratTotal'            => $this->input->post('beratTotal'),
                        'beratBatu'             => $this->input->post('beratBatu'),
                        'susut'                 => $this->input->post('susut'),
                        'beratAkhir'            => $this->input->post('beratAkhir'),
                        'hargaAkhir'            => $this->input->post('hargaAkhir'),
                        'beratHargaAkhir'       => $this->input->post('berathargaAkhir2'),
                        'upah'                  => $this->input->post('upah'),
                        'jumlahDatangBerlian'   => $this->input->post('jumlahDatangBerlian'),
                        'upahPasangBerlian'     => $this->input->post('upahPasangBerlian'),
                        'upahBerlian'           => $this->input->post('upahBerlian'),
                        'jumlahBatuZirkon'      => $this->input->post('jumlahBatuZirkon'),
                        'hargaBatuZirkon'       => $this->input->post('hargaBatuZirkon'),
                        'upahCZ'                => $this->input->post('upahCZ'),
                        'hargaKrumWarna'        => $this->input->post('hargaKrumWarna'),
                        'datangEmas'            => $this->input->post('datangEmas'),
                        'hargaDatangEmas'       => $this->input->post('hargaDatangEmas'),
                        'totalDatangEmas'       => $this->input->post('totalDatangEmas'),
                        'panjar'                => $this->input->post('panjar'),
                        'total'                 => $this->input->post('total2')
                );

                $this->mdl->insertData('invoicetempahanperseorangan',$dataInvoice);
                redirect('user/printInvoiceTempahan/'.$nomorPO.'/'.$tipeInvoice);
        } 
        else if ($jenisTempahan=='pertokoan') {
                $tipeInvoice = 'pertokoan';
                $headerInvoice = array(
                        'nomorPO'               => $nomorPO,
                        'jenisInvoice'          => 'tempahan',
                        'tipeInvoice'           => 'pertokoan',
                        'total'                 => $this->input->post('total2')
                );
                //print_r($headerInvoice);exit();
                $this->mdl->insertData('invoiceheader',$headerInvoice);

                $data['invoice'] = $this->mdl->findInvoice($nomorPO);
                $idHeader = $data['invoice'][0]->idHeader;

                $dataInvoice = array(
                        'idHeader'              => $idHeader,
                        'nomorPO'               => $this->input->post('nomorPO'),
                        'beratTotal'            => $this->input->post('beratTotal'),
                        'beratBatu'             => $this->input->post('beratBatu'),
                        'susut'                 => $this->input->post('susut'),
                        'beratAkhir'            => $this->input->post('beratAkhir'),
                        'prosentase'            => $this->input->post('prosentase'),
                        'hargaAkhir'            => $this->input->post('hargaAkhir'),
                        'beratHargaAkhir'       => $this->input->post('berathargaAkhir2'),
                        'upah'                  => $this->input->post('upah'),
                        'beratDatangBerlian'   => $this->input->post('beratDatangBerlian'),
                        'jumlahDatangBerlian'   => $this->input->post('jumlahDatangBerlian'),
                        'upahPasangBerlian'     => $this->input->post('upahPasangBerlian'),
                        'upahBerlian'           => $this->input->post('upahBerlian'),
                        'jumlahBatuZirkon'      => $this->input->post('jumlahBatuZirkon'),
                        'hargaBatuZirkon'       => $this->input->post('hargaBatuZirkon'),
                        'upahCZ'                => $this->input->post('upahCZ'),
                        'hargaKrumWarna'        => $this->input->post('hargaKrumWarna'),
                        'datangEmas'            => $this->input->post('datangEmas'),
                        'hargaDatangEmas'       => $this->input->post('hargaDatangEmas'),
                        'totalDatangEmas'       => $this->input->post('totalDatangEmas'),
                        'panjar'                => $this->input->post('panjar'),
                        'total'                 => $this->input->post('total2')
                );

                $this->mdl->insertData('invoicetempahanpertokoan',$dataInvoice);
                redirect('user/printInvoiceTempahan/'.$nomorPO.'/'.$tipeInvoice);
        }

        else {
            redirect('user');
        }
        //redirect('user/printInvoiceTempahan/'.$jenisTempahan);
    }
    
    public function printInvoiceTempahan($nomorPO,$tipeInvoice){
        // print_r($data);exit();
        if ($tipeInvoice=='perseorangan') {
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['PO'] = $this->mdl->findInvoice3($nomorPO,'invoicetempahanperseorangan');
            $this->load->view('user/printInvoiceTempahanPerseorangan',$data);
        }
        else if ($tipeInvoice=='pertokoan') {
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['PO'] = $this->mdl->findInvoice3($nomorPO,'invoicetempahanpertokoan');
            $this->load->view('user/printInvoiceTempahanPertokoan',$data);
        }
        
    }



    public function createInvoiceAkhirPOMassal() {
        $data['listPO'] = $this->mdl->listPO4();
        $this->load->view('user/pilihJenisInvoicePOMassal',$data);
    }

    public function convertInvoiceMassalPerseorangan() {
        $nomorPO=$this->input->post('nomorPO');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'required');
        if($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Nomor PO tidak boleh kosong.</div>');
            redirect('user/createInvoiceAkhirPOMassal');
        }
        else {
        redirect('user/invoiceAkhirPOMassalPerseorangan/'.$nomorPO);
        }
    }

    public function convertInvoiceMassalPertokoan() {
        $nomorPO=$this->input->post('nomorPO');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'required');
        if($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Nomor PO tidak boleh kosong.</div>');
            redirect('user/createInvoiceAkhirPO');
        }
        else {
        redirect('user/invoiceAkhirPOMassalPertokoan/'.$nomorPO);
        }
    }

    public function invoiceAkhirPOMassalPerseorangan($nomorPO) {
        $data['PO'] = $this->mdl->findPOMassal($nomorPO);
        $data['SPK'] = $this->mdl->findSPKMassalbyPO($nomorPO);
        if ($data['SPK']) {
            $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;}
        }
        else {
            $nomorFaktur = NULL;
        }
        $this->load->view('user/invoiceAkhirPOMassalPerseorangan',$data);
    }

    public function invoiceAkhirPOMassalPertokoan($nomorPO) {
        $data['PO'] = $this->mdl->findPOMassal($nomorPO);
        $data['SPK'] = $this->mdl->findSPKMassalbyPO($nomorPO);
        if ($data['SPK']) {
            $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;}
        }
        else {
            $nomorFaktur = NULL;
        }
        $this->load->view('user/invoiceAkhirPOMassalPertokoan',$data);
    }

    public function invoiceMassal(){
        /*$je=$this->input->post();
        print_r($je);exit();*/
        $jenisMassal      = $this->input->post('jenisMassal');
        $nomorPO            = $this->input->post('nomorPO');

        if ($jenisMassal=='perseorangan') {
                $tipeInvoice = 'perseorangan';
                $headerInvoice = array(
                        'nomorPO'               => $nomorPO,
                        'jenisInvoice'          => 'massal',
                        'tipeInvoice'           => 'perseorangan',
                        'total'                 => $this->input->post('total2')
                );
                //print_r($headerInvoice);exit();
                $this->mdl->insertData('invoiceheader',$headerInvoice);

                $data['invoice'] = $this->mdl->findInvoice($nomorPO);
                $idHeader = $data['invoice'][0]->idHeader;

                $dataInvoice = array(
                        'idHeader'              => $idHeader,
                        'nomorPO'               => $this->input->post('nomorPO'),
                        'beratTotal'            => $this->input->post('beratTotal'),
                        'beratBatu'             => $this->input->post('beratBatu'),
                        'susut'                 => $this->input->post('susut'),
                        'beratAkhir'            => $this->input->post('beratAkhir'),
                        'hargaAkhir'            => $this->input->post('hargaAkhir'),
                        'beratHargaAkhir'       => $this->input->post('berathargaAkhir2'),
                        'upah'                  => $this->input->post('upah'),
                        'jumlahDatangBerlian'   => $this->input->post('jumlahDatangBerlian'),
                        'upahPasangBerlian'     => $this->input->post('upahPasangBerlian'),
                        'upahBerlian'           => $this->input->post('upahBerlian'),
                        'jumlahBatuZirkon'      => $this->input->post('jumlahBatuZirkon'),
                        'hargaBatuZirkon'       => $this->input->post('hargaBatuZirkon'),
                        'upahCZ'                => $this->input->post('upahCZ'),
                        'hargaKrumWarna'        => $this->input->post('hargaKrumWarna'),
                        'datangEmas'            => $this->input->post('datangEmas'),
                        'hargaDatangEmas'       => $this->input->post('hargaDatangEmas'),
                        'totalDatangEmas'       => $this->input->post('totalDatangEmas'),
                        'panjar'                => $this->input->post('panjar'),
                        'total'                 => $this->input->post('total2')
                );

                $this->mdl->insertData('invoicemassalperseorangan',$dataInvoice);
                redirect('user/printInvoiceMassal/'.$nomorPO.'/'.$tipeInvoice);
        } 
        else if ($jenisMassal=='pertokoan') {
                $tipeInvoice = 'pertokoan';
                $headerInvoice = array(
                        'nomorPO'               => $nomorPO,
                        'jenisInvoice'          => 'massal',
                        'tipeInvoice'           => 'pertokoan',
                        'total'                 => $this->input->post('total2')
                );
                //print_r($headerInvoice);exit();
                $this->mdl->insertData('invoiceheader',$headerInvoice);

                $data['invoice'] = $this->mdl->findInvoice($nomorPO);
                $idHeader = $data['invoice'][0]->idHeader;

                $dataInvoice = array(
                        'idHeader'              => $idHeader,
                        'nomorPO'               => $this->input->post('nomorPO'),
                        'beratTotal'            => $this->input->post('beratTotal'),
                        'beratBatu'             => $this->input->post('beratBatu'),
                        'susut'                 => $this->input->post('susut'),
                        'beratAkhir'            => $this->input->post('beratAkhir'),
                        'prosentase'            => $this->input->post('prosentase'),
                        'hargaAkhir'            => $this->input->post('hargaAkhir'),
                        'beratHargaAkhir'       => $this->input->post('berathargaAkhir2'),
                        'upah'                  => $this->input->post('upah'),
                        'beratDatangBerlian'   => $this->input->post('beratDatangBerlian'),
                        'jumlahDatangBerlian'   => $this->input->post('jumlahDatangBerlian'),
                        'upahPasangBerlian'     => $this->input->post('upahPasangBerlian'),
                        'upahBerlian'           => $this->input->post('upahBerlian'),
                        'jumlahBatuZirkon'      => $this->input->post('jumlahBatuZirkon'),
                        'hargaBatuZirkon'       => $this->input->post('hargaBatuZirkon'),
                        'upahCZ'                => $this->input->post('upahCZ'),
                        'hargaKrumWarna'        => $this->input->post('hargaKrumWarna'),
                        'datangEmas'            => $this->input->post('datangEmas'),
                        'hargaDatangEmas'       => $this->input->post('hargaDatangEmas'),
                        'totalDatangEmas'       => $this->input->post('totalDatangEmas'),
                        'panjar'                => $this->input->post('panjar'),
                        'total'                 => $this->input->post('total2')
                );

                $this->mdl->insertData('invoicemassalpertokoan',$dataInvoice);
                redirect('user/printInvoiceMassal/'.$nomorPO.'/'.$tipeInvoice);
        }

        else {
            redirect('user');
        }
        //redirect('user/printInvoiceTempahan/'.$jenisTempahan);
    }

    public function printInvoiceMassal($nomorPO,$tipeInvoice){
        // print_r($data);exit();
        if ($tipeInvoice=='perseorangan') {
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['PO'] = $this->mdl->findInvoice3($nomorPO,'invoicemassalperseorangan');
            $this->load->view('user/printInvoiceMassalPerseorangan',$data);
        }
        else if ($tipeInvoice=='pertokoan') {
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['PO'] = $this->mdl->findInvoice3($nomorPO,'invoicemassalpertokoan');
            $this->load->view('user/printInvoiceMassalPertokoan',$data);
        }
        
    }

    public function pindah($idProduk, $kuantitas, $idProProd, $idSPK,$nomorFaktur) {
        
    
        $spk = $this->mdl->findSPK6($idSPK);
        $idProduk = $spk[0]->idProduk;
        $prod = $this->mdl->findProduk6($idProduk); 
        $kodeProduk = $prod[0]->kodeProduk;
        $stok = (int)$prod[0]->stok;
        $newstok = $stok + (int)$kuantitas;

        $data = array(
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $kodeProduk,
            'jumlah' => $kuantitas,
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'IN'

            );

        $this->mdl->insertData('stokbarang',$data);

        $data = array(
            'stok' => $newstok,

            );

        $this->mdl->updateData('idProduk',$idProduk,'produk',$data);

        $data = array(
            'statusSPK' => 'Done'
        );

        $this->mdl->updateData('idSPK',$idSPK,'factproduction',$data);
        $this->mdl->updateData('idSPK',$idSPK,'spk',$data);

        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $data = array(
            'idPIC' => $iduser,
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'RealisasiEndDate' => date("Y-m-d H:i:s"),
            'statusWork' => 'Done',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b> dan kode produk <b>'.$kodeProduk.'</b></div>');

        redirect('User/listProdukJadi');

    }


    
    public function kanbanMassal()
    {
        
        // if (isset($this->session->userdata['logged_in'])) {
            
            //$data['tgl'] = date_create($time());
            
            $data['s']  = $this->mdl->getSales2();
            $data['j']  = $this->mdl->getPenjadwalan2();
            $data['sp']  = $this->mdl->getSeparasi();
            
            $data['li'] = $this->mdl->getProsesMassal1(1004);
            $data['gi'] = $this->mdl->getProsesMassal1(1005);
            $data['co'] = $this->mdl->getProsesMassal1(1006);
           // $data['sp2']  = $this->mdl->getSeparasi2();

            
            
            $data['staf'] = $this->mdl->getStaf();
            $data['ceksub'] = $this->mdl->cekSubSPK();
            $data['cb'] = $this->mdl->cekbom3();
            
            $data['r'] = $this->mdl->getRecord2();
            $data['b'] = $this->mdl->getBerat2();

            $data['gp'] = $this->mdl->getProsesMassal1(1007);  
            $data['go'] = $this->mdl->getProsesMassal1(1008);  
            $data['bo'] = $this->mdl->getProsesMassal1(1009);  
            
            $data['cz'] = $this->mdl->getProsesMassal1(1010);  
            $data['po'] = $this->mdl->getProsesMassal1(1011);  
            $data['sl'] = $this->mdl->getProsesMassal1(1012);
            
            $data['kr'] = $this->mdl->getProsesMassal1(1013);
            $data['do'] = $this->mdl->getDone();
            $data['jd'] = $this->mdl->getJadi2();  
            
            $this->load->view('user/statprodMassal_view', $data);
            
        // } else {
        //     redirect('user/login');
        // }
        
        
        
    }
    
    public function tambahJadwalMassal($nomorFaktur)
    {
        $data['dataSPK']   = $this->mdl->findSPKMasal($nomorFaktur);
        $data['aktivitas'] = $this->mdl->listAktivitasMassal();
        $this->load->view('user/spkJadwalMassal', $data);
    }
    
    public function uploadJadwalMassal()
    {
        //eksekusi query insert tanpa gambar
        $idAktivitas    = $this->input->post('idAktivitas');
        $nomorAktivitas = $this->input->post('nomorAktivitas');
        $startDate      = $this->input->post('startDate');
        $endDate        = $this->input->post('endDate');
        $nomorFaktur    = $this->input->post('nomorFaktur');
        // print_r($idAktivitas);exit();
        for ($i = 0; $i < count($nomorAktivitas); $i++) {
            $b             = $nomorAktivitas[$i];
            $dataAktivitas = array(
                'idProduk' => $this->input->post('idProduk'),
                'idAktivitas' => $idAktivitas[$b]
            );
            $this->mdl->tambahProdukAktivitas($dataAktivitas);
            
            $dataJadwal = array(
                'idSPK' => $this->input->post('idSPK'),
                'idAktivitas' => $idAktivitas[$b],
                'startDate' => $startDate[$b],
                'endDate' => $endDate[$b]
            );
            $this->mdl->tambahRencana2($dataJadwal);
            
        }
        
        $idSPK = $this->input->post('idSPK');
        
        $data = array(
            'statusJadwal' => 'Sudah Ada',
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s")
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkmasal', $data);

        
        
        //$this->mdl->prosesJadwal($nomorFaktur);
        
        $message = "Penjadwalan telah berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/listSPKMasal") . "';</script>";
    }

    public function setWadah() {
        $berat = $this->input->post('berat');
        $jumlah = $this->input->post('jumlah');

        $idSubSPK = $this->input->post('idSubSPK');
        $idSPK = $this->input->post('idSPK');
        $idProProd = $this->input->post('idProProd');

        if(count($berat)==0){
            $message = "Jumlah wadah belum ditentukan, silahkan ulangi proses Separasi";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='" . base_url("user/kanbanmassal") . "';</script>";
        } else {

            for ($i=0; $i < count($berat); $i++) { 
                
                $data = array(

                    'idSubSPK' => $idSubSPK

                );

                $this->mdl->insertData('wadah',$data);

            }

            $wadah = $this->mdl->getWadah($idSubSPK);

            for ($i=0; $i < count($wadah); $i++) { 
                
                $data = array(
                    'idSPK' => $idSPK,
                    'idSubSPK' => $idSubSPK,
                    'idWadah' => $wadah[$i]->idWadah,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => '1007',
                    'statusBerat' => 'Belum Disetujui',
                    'beratawal' => $berat[$i],
                    'jumlah' => $jumlah[$i],
                );
                $this->mdl->insertData('factproduction2', $data);

            }

            $this->mdl->deleteData('idProProd',$idProProd,'factproduction2');

            $message = "Berhasil membuat wadah";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='" . base_url("user/kanbanmassal") . "';</script>";
        }
    }

    public function setSubSPK2() {
        //$berat = $this->input->post('berat');
        $jumlah = $this->input->post('jmlsub');
        $idSPK = $this->input->post('idSPK');

        for ($i=0; $i < $jumlah; $i++) { 
            
            $data = array(

                'idSPK' => $idSPK,

            );


            $this->mdl->insertData('subspk',$data);

        }

        $sub = $this->mdl->getSubSPK($idSPK);

        for ($i=0; $i < count($sub) ; $i++) { 

            $data = array(
                'idSPK' => $idSPK,
                'idSubSPK' => $sub[$i]->idSubSPK,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
                'idAktivitas' => '1004',
                'statusBerat' => 'Belum Disetujui'
            );
            $this->mdl->insertData('factproduction2', $data);
            
        }

        $data = array(
            'tanggalApprovalBOM' => date("Y-m-d H:i:s"),

            'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),
            
            'statusBOM' => 'Disetujui',
            'statusJadwal' => 'Disetujui',
            'statusPersetujuan' => 'Disetujui'
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkmasal', $data);

        $message = "Berhasil membuat Sub SPK";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/kanbanmassal") . "';</script>";
    }

    public function setPIC3()
    {
        
        $idp = $this->input->post('idProProd');
        
        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'beratAwal' => $this->input->post('berat'),
            'beratTambahan' => $this->input->post('beratTambahan')
        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanbanMassal');
        
    }

    public function setPIC4()
    {
        
        $idp = $this->input->post('idProProd');
        
        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'beratAwal' => $this->input->post('beratAwal')
        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanbanMassal');
        
    }

    public function next5() {
        $idProProd = $this->input->post('idProProd');
        $staf = $this->input->post('staf');
        $jumlah = $this->input->post('jumlah');
        $beratAwal = $this->input->post('beratAwal');
        $idAktivitas = $this->input->post('idAktivitas');
        $idProduk = $this->input->post('idProduk');

        $proses = $this->mdl->getProsesDetail2($idProProd);
        $idSPK = $proses[0]->idSPK;
        $idSubSPK = $proses[0]->idSubSPK;

        $wadah = $this->mdl->getWadahTerakhir();
        $idWadah = (int)($wadah[0]->idWadah) + 1;

        $aktivitas = $this->mdl->getNextAktivitas($idProduk, $idAktivitas);
        $next      = $aktivitas[0]->idAktivitas;

        $data = array(
                
                'idSPK' => $idSPK,
                'idSubSPK' => $idSubSPK,
                'idWadah' => $idWadah,
                'idPIC' => $staf,
                'statusSPK' => 'Active',
                'statusWork' => 'On Progress',
                'idAktivitas' => $next,
                'statusBerat' => 'Belum Disetujui',
                'jumlah'    => $jumlah,
                'jumlahNow'    => $jumlah,
                'beratAwal' => $beratAwal,
                'RealisasiStartDate' => date("Y-m-d H:i:s")
        );

        $this->mdl->insertData('factproduction2', $data);

        $jmlakhir = (int)$proses[0]->jumlahNow - (int)$jumlah;
        $beratAkhir = (float)$proses[0]->beratAwal + (float)$beratAwal;

        if($jmlakhir > 0) {
            $statusWork = 'On Progress';
        } else {
            $statusWork = 'Done';
        }

        $data = array(
                
                'statusBerat' => 'Disetujui',
                'berat' => $beratAkhir,
                'jumlahNow' => $jmlakhir,
                'statusWork' => $statusWork,
                'RealisasiEndDate' => date("Y-m-d H:i:s")
                
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction2',$data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanbanmassal');



    }

    public function next3($idProduk, $idAktivitas, $idProProd, $idSPK, $idSubSPK, $idWadah)
    {
        $proses = $this->mdl->getProsesDetail2($idProProd);
        $data = array(
                'statusWork' => 'Done',
                'RealisasiEndDate' => date("Y-m-d H:i:s")
            );

        $this->mdl->updateData('idProProd',$idProProd, 'factproduction2', $data);

        $aktivitas = $this->mdl->getNextAktivitas($idProduk, $idAktivitas);
        $next      = $aktivitas[0]->idAktivitas;
        $jumlah    = $proses[0]->jumlah;
        $beratAwal    = $proses[0]->berat;

        $data = array(
                'idSPK' => $idSPK,
                'idSubSPK' => $idSubSPK,
                'idWadah' => $idWadah,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
                'idAktivitas' => $next,
                'statusBerat' => 'Belum Disetujui',
                'jumlah'    => $jumlah,
                'jumlahNow'    => $jumlah,
                'beratAwal' => $beratAwal
            );
        $this->mdl->insertData('factproduction2', $data);

        if($idAktivitas == '1004') {

            $bom = $this->mdl->getbom4($idSubSPK);

            for ($i=0; $i < count($bom) ; $i++) { 

                $data = array(
                    'tipeBarang' => "Material Dasar",
                    'kodeBarang' => $bom[$i]->kodeMaterial,
                    'jumlah' => $bom[$i]->jumlah,
                    'jenisPergerakanBarang' => "OUT",
                    'tanggal' => date("Y-m-d H:i:s")
                );
                
                $this->mdl->insertData('stokbarang', $data);
                
                $data = array(
                    'stokMaterial' => (float) $bom[$i]->stokMaterial - (float) $bom[$i]->jumlah
                );
                
                $this->mdl->updateData('idMaterial', $bom[$i]->idMaterial, 'materialdasar', $data);
                
            }


        }

       
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanbanmassal');
        
    }

    public function setBerat2()
    {
        
        $idp = $this->input->post('idProProd');

        $data = array(
            'berat' => $this->input->post('berat'),
            'kembali' => $this->input->post('kembali'),
            'beratAwal' => $this->input->post('beratAwal'),

        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat</div>');
        redirect('User/kanbanmassal');
        
    }

    public function setBerat3()
    {
        
        $idp = $this->input->post('idProProd');

        $data = array(
            'berat' => $this->input->post('berat'),
            'beratAwal' => $this->input->post('beratAwal'),
            'jumlah' => $this->input->post('jumlah'),
            'kembali' => $this->input->post('kembali'),

        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat</div>');
        redirect('User/kanbanmassal');
        
    }

    public function approve2($idProProd)
    {
        
        $data = array(
            'statusBerat' => 'Disetujui'
        );
        
        $this->mdl->updateData('idProProd', $idProProd, 'factproduction2', $data);
        
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyetujui berat aktivitas produksi</div>');
        redirect('User/kanbanmassal');
        
    }

    public function tambahSPKMasal()
    {
        //sebelum mengeksekusi query
        
        $this->form_validation->set_message('is_unique', 'Nomor SPK telah digunakan');
        $this->form_validation->set_rules('nomorFaktur', 'Nomor Faktur', 'is_unique[spkmasal.nomorFaktur]');
        // $pos=$this->input->post('nomorFaktur');
        // print_r($pos);exit();
        if ($this->form_validation->run() == FALSE) {
            $data['pegawai']     = $this->mdl->listPegawai();
            $nomorPO             = $this->input->post('nomorPO');
            $data['dataPO']      = $this->mdl->findPOMassal($nomorPO);
            $data['spkTerakhir'] = $this->mdl->spkTerakhir2();
            $this->load->view('user/createSpkMasal', $data);
        } else {
            //eksekusi query insert tanpa gambar
            $sd      = 'Proses Desain';
            $sb      = 'Belum Ada';
            $sj      = 'Belum Ada';
            $sp      = 'Belum Disetujui';
            $iduser  = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur' => $this->input->post('nomorFaktur'),
                'nomorPO' => $this->input->post('nomorPO'),
                'idProduk' => $this->input->post('idProduk'),
                'idCustomer' => $this->input->post('idCustomer'),
                'statusBOM' => $sb,
                'PICBOM' => $iduser,
                'statusJadwal' => $sj,
                'PICJadwal' => $iduser,
                'statusPersetujuan' => $sp,
                'PICPersetujuan' => $iduser,
                'prioritas' => $this->input->post('prioritas')
            );
            $this->mdl->insertData("spkmasal", $dataSPK);
            $message = "Surat Perintah Kerja telah berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='" . base_url("user/listSPKMasal") . "';</script>";
        }
    }

    public function pindah2($idProduk, $idAktivitas, $idProProd, $idSPK, $idSubSPK, $idWadah)
    {
        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $data   = array(
            'idPIC' => $iduser,
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'RealisasiEndDate' => date("Y-m-d H:i:s"),
            'statusWork' => 'Done',
            'statusBerat' => 'Disetujui'
        );
        
        $this->mdl->updateData('idProProd', $idProProd, 'factproduction2', $data);


        $proses = $this->mdl->getProsesDetail3($idWadah,1007);
        $jumlah = $proses[0]->jumlah;

        $prod       = $this->mdl->findProduk6($idProduk);
        $kodeProduk = $prod[0]->kodeProduk;
        $stok       = (int) $prod[0]->stok;
        $newstok    = $stok + (int) $jumlah;

        $data = array(
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $kodeProduk,
            'jumlah' => $jumlah,
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'IN'
            
        );
        
        $this->mdl->insertData('stokbarang', $data);
        
        $data = array(
            'stok' => $newstok
            
        );
        
        $this->mdl->updateData('idProduk', $idProduk, 'produk', $data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi </div>');
        redirect('User/produk');

    }

    public function setBeratAkhir() {
        
        $idSPK = $this->input->post('idSPK');
        $idProduk = $this->input->post('idProduk');
        $beratAkhir = $this->input->post('beratakhir');
        $jumlah = $this->input->post('jumlah');

       // print_r($idProduk);
        $data = array(
            'berat' => $beratAkhir,
            'statusBerat' =>  'Disetujui',
            'statusWork' => 'Done',
            'RealisasiEndDate' => date("Y-m-d H:i:s"),
            'jumlahNow' => 0
        );
        $where = array (
            'idSPK' => $idSPK,
            'idAktivitas' => 1014
        );

       // print_r($data);

        $this->mdl->updateData2($where, 'factproduction2', $data);

        $data = array(
            'statusSPK' => 'Done',
        );

        $this->mdl->updateData('idSPK',$idSPK,'factproduction2', $data);

        $prod       = $this->mdl->findProduk6($idProduk);
        $kodeProduk = $prod[0]->kodeProduk;
        $stok       = (int) $prod[0]->stok;
        $newstok    = $stok + (int) $jumlah;

        $data = array(
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $kodeProduk,
            'jumlah' => $jumlah,
            'satuan' => 'Pcs',
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'IN'
            
        );

       // print_r($data);
        
        $this->mdl->insertData('stokbarang', $data);

        $data = array(
            'stok' => $newstok
            
        );

        //print_r($data);
        //exit();
        
        $this->mdl->updateData('idProduk', $idProduk, 'produk', $data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi </div>');
        redirect('User/listProdukJadi');

    }

    public function finish3($idSPK) {

        $data   = array(
            'statusSPK' => 'Done',
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'factproduction2', $data);

    }


    // ----------------------------------------------------------------------------------------

    public function pelanggan() {
        $data['pelanggan']=$this->mdl->listCustomer();  
        $this->load->view('user/pelanggan',$data);
    }

    public function editPelanggan($idCustomer) {
        $data = array(
            'namaCustomer'    => $this->input->post('namaCustomer'),
            'nomorTelepon'             => $this->input->post('nomorTelepon'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->updateData('idCustomer', $idCustomer, 'customer', $data);
        redirect('user/pelanggan');
    }

    public function deletePelanggan($idCustomer) {
        $this->mdl->deleteData('idCustomer', $idCustomer, 'customer');
        $message = "Data pelanggan berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/pelanggan")."';</script>";
    }

    public function tambahPOMasal(){
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[pomasal.nomorPO]');

        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhir2();
            $this->load->view('user/createPOMasal',$data);
        }
        else {
            
            $idC=$this->input->post('idCustomer');
            if($idC==0){
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $idCustomer=$this->mdl->insertDataGetLast('customer',$dataCustomer);
            } else {
                $idCustomer=$idC;
            }
            
            if(!$this->input->post('pekerjaanTambahan[]')) {
                $pekerjaanTambahan = "Tidak Ada";
            } else {
                $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
            }

            $namaProduk=$this->input->post('namaCustomer').'-'.$this->input->post('nomorPO');
            $kodeProduk=$this->input->post('kodeProduk');
            $cekProduk=$this->mdl->findProduk($kodeProduk);

            $kode = $this->generateRandomString();
            
            $hargaBahan = $this->clean($this->input->post('hargaBahan'));
            $upah = $this->clean($this->input->post('upah'));
            $panjar = $this->clean($this->input->post('panjar'));

            if(count($cekProduk)==0){
                $dataProduk = array(
                    'kodeProduk'        => $this->input->post('kodeProduk'),
                    'namaProduk'        => $namaProduk,
                    'jenisProduk'       => $this->input->post('jenisProduk'),
                    'kategori'        => 'Massal',
                    'statusKatalog'        => 'Tidak Tampil',
                    'kodeGambar'        => $kode,
                );
                $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);

            } else {
                $produk=$this->mdl->findProduk($kodeProduk);
                $idProduk=$produk[0]->idProduk;
            } 

            $harga=$this->input->post('harga');
            $totalHarga=0;
            
            //eksekusi query insert
            $dataPO = array(
                'nomorPO'           => $this->input->post('nomorPO'),
                'idProduk'          => $idProduk,
                'idCustomer'        => $idCustomer,
                'idSalesPerson'     => $this->input->post('idSalesPerson'),
                'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                'hargaBahan'        => $hargaBahan,
                'upah'              => $upah,
                'datangEmas'        => $this->input->post('datangEmas'),
                'panjar'            => $panjar,
                'beratAkhir'        => $this->input->post('beratAkhir'),
                'totalHarga'        => $totalHarga,
                'tipeOrder'         => 'massal',
                'kadarDatangEmas'   => $this->input->post('kadarDatangEmas'),
                'tipeCustomer'      => $this->input->post('tipeCustomer'),
                'pekerjaanTambahan' => $pekerjaanTambahan,
                'keteranganTambahan'=> $this->input->post('keteranganTambahan'),
                'bahan'             => $this->input->post('bahan'),
                'kadarBahan'        => $this->input->post('kadarBahan'),
                'ukuranJari'        => $this->input->post('ukuranJari'),
                'krumWarna'         => $this->input->post('krumWarna'),
                'model'             => $this->input->post('model'),
                'keteranganKrum'    => $this->input->post('keteranganKrum'),
            );
            $this->mdl->insertData('pomasal',$dataPO);

            //Query Tambah SPK Massal
            $sd      = 'Proses Desain';
            $sb      = 'Belum Ada';
            $sj      = 'Belum Ada';
            $sp      = 'Belum Disetujui';
            $iduser  = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur' => $this->input->post('nomorPO'),
                'nomorPO' => $this->input->post('nomorPO'),
                'idProduk' => $idProduk,
                'idCustomer' => $idCustomer,
                'statusBOM' => $sb,
                'PICBOM' => $iduser,
                'statusJadwal' => $sj,
                'PICJadwal' => $iduser,
                'statusPersetujuan' => $sp,
                'PICPersetujuan' => $iduser,
            );
            $this->mdl->insertData("spkmasal", $dataSPK);      
                    
            
            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO=$this->input->post('nomorPO');
            $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
            // print_r($data);exit();
            $this->load->view('user/invoicePOMassal',$data);
        }
        
    }

    public function printRFQMassal($nomorPO){
        $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
        // print_r($data);exit();
        $this->load->view('user/printInvoiceMassal',$data);
    }

     public function kanbanPerak() {

        // if (isset($this->session->userdata['logged_in'])) {
// 
            //$data['tgl'] = date_create($time());

            $data['s'] = $this->mdl->getSales3();
            $data['j'] = $this->mdl->getPenjadwalan3();

            $data['g'] = $this->mdl->getGroup3();

            $data['k1'] = $this->mdl->getKloter3(1004);
            $data['k2'] = $this->mdl->getKloter3(1005);
            $data['k3'] = $this->mdl->getKloter3(1006);
            

            $data['staf'] = $this->mdl->getStaf();

            $data['r'] = $this->mdl->getRecord3();
            $data['b'] = $this->mdl->getBerat3();
            $data['cb'] = $this->mdl->cekbom8();
            

            $data['li'] = $this->mdl->getProses3(1004);  
            $data['gi'] = $this->mdl->getProses3(1005);
            $data['co'] = $this->mdl->getProses3(1006);

            $data['gp'] = $this->mdl->getProses3(1007);  
            $data['go'] = $this->mdl->getProses3(1008);  
            $data['bo'] = $this->mdl->getProses3(1009);  

            $data['cz'] = $this->mdl->getProses3(1010);  
            $data['po'] = $this->mdl->getProses3(1011);  
            $data['sl'] = $this->mdl->getProses3(1012);

            $data['kr'] = $this->mdl->getProses3(1013);
            $data['do'] = $this->mdl->getProses3(1014);     

            $this->load->view('user/statprodperak_view',$data);

        // } else {
        //     redirect('user/login');
        // }   


        
    }

    public function listSPKPerak() {
        $data['listSPK'] = $this->mdl->listSPK3();
         $data['cekbom'] = $this->mdl->cekbom7();
         $data['cekjadwal'] = $this->mdl->cekjadwal3();
         $data['klot'] = $this->mdl->getKloterSPK3();
         $data['cekklot'] = $this->mdl->cekkloter3();
        // $data['cb'] = $this->mdl->cekbom2();
        $this->load->view('user/spkPerak',$data);
    }

    public function detailSPKPerak($nomorPO) { //update findpo
        $data['pegawai'] = $this->mdl->listDesain();
        $data['dataPO'] = $this->mdl->findPOPerak($nomorPO);
        $jumlah = count($data['dataPO']);

        if($jumlah>0)
        {
            $data['spkTerakhir'] = $this->mdl->spkTerakhir3();
            $this->load->view('user/createSpkPerak',$data);
            
        } else {
            $message = "Tidak ada nomor Purchase Order yang sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createSpk")."';</script>";
        }
    }

    public function tambahSPKPerak(){ //menghilangkan status desain
        //sebelum mengeksekusi query
        
        $this->form_validation->set_message('is_unique','Nomor SPK telah digunakan');
        $this->form_validation->set_rules('nomorFaktur', 'Nomor Faktur' ,'is_unique[spkperak.nomorFaktur]');
        // $pos=$this->input->post('nomorFaktur');
        // print_r($pos);exit();
        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawai();
            $nomorPO = $this->input->post('nomorPO');
            $data['dataPO'] = $this->mdl->findPO($nomorPO);
            $data['spkTerakhir'] = $this->mdl->spkTerakhir3();
            $this->load->view('user/createSpkPerak',$data);
        }
        else {
            //eksekusi query insert tanpa gambar
            $sd='Proses Desain';
            $sb='Belum Ada';
            $sj='Belum Ada';
            $sp='Belum Disetujui';
            $iduser = ($this->session->userdata['logged_in']['iduser']);
            $dataSPK = array(
                'nomorFaktur'           => $this->input->post('nomorFaktur'),
                'nomorPO'               => $this->input->post('nomorPO'),
                'idProduk'              => $this->input->post('idProduk'),
                'idCustomer'            => $this->input->post('idCustomer'),
                'PICBOM'                => $iduser,
                'statusJadwal'          => $sj,
                'PICJadwal'             => $iduser,
                'statusPersetujuan'     => $sp,
                'PICPersetujuan'        => $iduser,
                'prioritas'             => $this->input->post('prioritas'),
            );
            $this->mdl->insertData("spkperak",$dataSPK);                      
            $message = "Surat Perintah Kerja telah berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/listSPKPerak/")."';</script>";
        }
    }

    public function tambahJadwalPerak($nomorFaktur)
    {
        $data['dataSPK']   = $this->mdl->findSPKPerak($nomorFaktur);
        $data['aktivitas'] = $this->mdl->listAktivitas3();
        $this->load->view('user/spkJadwalPerak', $data);
    }

    public function uploadJadwalPerak()
    {
        //eksekusi query insert tanpa gambar
        $idAktivitas    = $this->input->post('idAktivitas');
        $nomorAktivitas = $this->input->post('nomorAktivitas');
        $startDate      = $this->input->post('startDate');
        $endDate        = $this->input->post('endDate');
        $nomorFaktur    = $this->input->post('nomorFaktur');
        // print_r($idAktivitas);exit();
        for ($i = 0; $i < count($nomorAktivitas); $i++) {
            $b             = $nomorAktivitas[$i];
            $dataAktivitas = array(
                'idProduk' => $this->input->post('idProduk'),
                'idAktivitas' => $idAktivitas[$b]
            );
            $this->mdl->tambahProdukAktivitas($dataAktivitas);
            
            $data = array(
                'idSPK' => $this->input->post('idSPK'),
                'idAktivitas' => $idAktivitas[$b],
                'startDate' => $startDate[$b],
                'endDate' => $endDate[$b]
            );
            //$this->mdl->tambahRencana($dataJadwal);
            $this->mdl->insertData('rencanaproduksi3',$data);
            
        }
        
        $idSPK = $this->input->post('idSPK');
        
        $data = array(
            'statusJadwal' => 'Sudah Ada',
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s")
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkperak', $data);

        
        
        //$this->mdl->prosesJadwal($nomorFaktur);
        
        $message = "Penjadwalan telah berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/listSPKPerak") . "';</script>";
    }

    public function setKloter2() {
        $idspk = $this->input->post('idSPK');

        $kode = $this->generateRandomString();
        for ($i=0; $i < count($idspk); $i++) { 
            
            $data = array (
                'nama' => $this->input->post('namakloter'),
                'kadar' => $this->input->post('kadar'),
                'idKloter' => $kode,
                'idSPK' => $idspk[$i],
                'tgl_kloter' => date("Y-m-d H:i:s"),
            );

            $this->mdl->insertData('kloter2',$data);

            $idSPK = $idspk[$i];

            $data = array(
                'idSPK' => $idSPK,
                'idAktivitas' => 1004,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
            );

            $this->mdl->insertData('factproduction3',$data);

        }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil membuat kloter SPK</div>');
        redirect('user/kanbanPerak');
        

    }

    public function setPIC7() {

        $idk = $this->input->post('idKloter');
        $kloter = $this->mdl->getIsiKloter2($idk);

        for ($i=0; $i <count($kloter) ; $i++) { 

            $data = array(
                'idPIC' => $this->input->post('staf'),
                'statusWork' => 'On Progress',
                'RealisasiStartDate' => date("Y-m-d H:i:s")
            );

            $where = array(

                'idSPK' => $kloter[$i]->idSPK,
                'idAktivitas' => $this->input->post('idAktivitas')

            );

            $this->mdl->updateData2($where, 'factproduction3', $data);
            
        }

        
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC Kloter</div>');
        redirect('User/kanbanPerak');

    }

    public function finalisasi3($idKloter) {

        $kloter = $this->mdl->getIsiKloter2($idKloter);
        $bom = $this->mdl->getStokBOM3($idKloter); 

        $xx = 0;
        for ($i=0; $i < count($bom) ; $i++) { 

     

            $data = array(
                'tipeBarang'   => "Material Dasar",
                'kodeBarang'    => $bom[$i]->kodeMaterial,
                'jumlah'        => $bom[$i]->jumlah,
                'jenisPergerakanBarang'  => "OUT",
                'tanggal' => date("Y-m-d H:i:s"),
            );

            $this->mdl->insertData('stokbarang', $data);

            $data = array(
                'stokMaterial' => (float)$bom[$i]->stokMaterial-(float)$bom[$i]->jumlah
            );

            $this->mdl->updateData('idMaterial',$bom[$i]->idMaterial,'materialdasar',$data);

        }


        for ($i=0; $i < count($kloter) ; $i++) { 

            $data = array(
                'tanggalApprovalBOM' => date("Y-m-d H:i:s"),
                'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),

                'statusBOM' => 'Disetujui',
                'statusJadwal' => 'Disetujui',
                'statusPersetujuan' => 'Disetujui',
            );

            $this->mdl->updateData('nomorFaktur',$kloter[$i]->nomorFaktur,'spkperak',$data);

            $data = array(
                'statusWork' => 'Done',
                'RealisasiEndDate' => date("Y-m-d H:i:s")
                );
            
            $where = array(

                    'idSPK' => $kloter[$i]->idSPK,
                    'idAktivitas' => '1004'

                );

            $this->mdl->updateData2($where, 'factproduction3', $data);

            $data = array(
                    'idSPK' => $kloter[$i]->idSPK,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => '1005',
                    'statusBerat' => 'Belum Disetujui'
                );
            $this->mdl->insertData('factproduction3', $data);
        
        
         }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanbanperak');
    }

    public function next4($idKloter,$idAktivitas) {

        $kloter = $this->mdl->getIsiKloter2($idKloter);

        for ($i=0; $i < count($kloter) ; $i++) { 

            $data = array(
                'statusWork' => 'Done',
                'RealisasiEndDate' => date("Y-m-d H:i:s")
                );
            
            $where = array(

                    'idSPK' => $kloter[$i]->idSPK,
                    'idAktivitas' => $idAktivitas

                );

            $this->mdl->updateData2($where, 'factproduction3', $data);

            $data = array(
                    'idSPK' => $kloter[$i]->idSPK,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => (int)$idAktivitas+1,
                    'statusBerat' => 'Belum Disetujui'
                );
            $this->mdl->insertData('factproduction3', $data);
        
        
         }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanbanperak');

    }

    public function setPIC8()
    {
        
        $idp = $this->input->post('idProProd');
        
        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'beratAwal' => $this->input->post('berat')
        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction3', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanbanperak');
        
    }

    public function setBerat7() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'berat' => $this->input->post('berat'),

        );
        $this->mdl->updateData('idProProd',$idp, 'factproduction3', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat</div>');
        redirect('User/kanbanperak');

    }

    public function approve3($idProProd) {

        $data = array(
            'statusBerat' => 'Disetujui',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction3',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyetujui berat aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b></div>');
        redirect('User/kanbanperak');

    }

    public function next7($idProduk,$idaktivitas,$idProProd,$idSPK) {

        $proses = $this->mdl->getProsesDetail4($idProProd);
        $stat = $proses[0]->statusWork;

        if($stat == 'Belum ada PIC') {

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">gagal melanjutkan proses produksi, belum ada PIC proses tersebut.</div>');
            redirect('User/kanbanperak');

        } else {
            $data = array(
            'statusWork' => 'Done',
            'RealisasiEndDate' => date("Y-m-d H:i:s")
            );
            $this->mdl->updateData('idProProd',$idProProd, 'factproduction3', $data);
            
            $aktivitas = $this->mdl->getNextAktivitas($idProduk, $idaktivitas);
            $next = $aktivitas[0]->idAktivitas;

            $data = array(
                'idSPK' => $idSPK,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
                'idAktivitas' => $next,
                'statusBerat' => 'Belum Disetujui'
            );
            $this->mdl->insertData('factproduction3', $data);
            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
            redirect('User/kanbanperak');    
        }

        

    }

    public function setPIC9() {

        $idp = $this->input->post('idProProd');

        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s"),

        );
        $this->mdl->updateData('idProProd',$idp, 'factproduction3', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanbanperak');

    }

    public function pindah3($idProduk, $kuantitas, $idProProd, $idSPK,$nomorFaktur) {
    
        $spk = $this->mdl->findSPK7($idSPK);
        $idProduk = $spk[0]->idProduk;
        $prod = $this->mdl->findProduk6($idProduk); 
        $kodeProduk = $prod[0]->kodeProduk;
        $stok = (int)$prod[0]->stok;
        $newstok = $stok + (int)$kuantitas;

        $data = array(
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $kodeProduk,
            'jumlah' => $kuantitas,
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'IN'

            );

        $this->mdl->insertData('stokbarang',$data);

        $data = array(
            'stok' => $newstok,

            );

        $this->mdl->updateData('idProduk',$idProduk,'produk',$data);

        $data = array(
            'statusSPK' => 'Done'
        );

        $this->mdl->updateData('idSPK',$idSPK,'factproduction3',$data);
        //$this->mdl->updateData('idSPK',$idSPK,'spkperak',$data);

        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $data = array(
            'idPIC' => $iduser,
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'RealisasiEndDate' => date("Y-m-d H:i:s"),
            'statusWork' => 'Done',
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction3',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi dengan nomor faktur <b>'.$nomorFaktur.'</b> dan kode produk <b>'.$kodeProduk.'</b></div>');

        redirect('User/produk');

    }


    public function invoiceSPKPerak($nomorFaktur) {

    }

    public function listInvoiceTempahan() {
        $data['listPO'] = $this->mdl->listInvoiceTempahan();
        $this->load->view('user/listInvoiceTempahan',$data);
    }
   
    public function listInvoiceMassal() {
        $data['listPO'] = $this->mdl->listInvoiceMassal();
        $this->load->view('user/listInvoiceMassal',$data);
    }
    
    public function setPIC5()
    {
        
        $idp = $this->input->post('idProProd');
        
        $data = array(
            'idPIC' => $this->input->post('staf'),
            'statusWork' => 'On Progress',
            'RealisasiStartDate' => date("Y-m-d H:i:s"),
            'beratAwal' => $this->input->post('beratAwal'),
            'beratTambahan' => $this->input->post('beratTambahan')
        );
        $this->mdl->updateData('idProProd', $idp, 'factproduction', $data);
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan PIC</div>');
        redirect('User/kanban');
        
    }

    //Inventory
    public function rekapBeratMassal() {
        $data['b'] = $this->mdl->getBeratMassal();
        $data['produk']=$this->mdl->getProd();  
        $data['spk']=$this->mdl->getSPKMassal();    
        $data['rekapBerat']=$this->mdl->rekapBeratMassal();
        $this->load->view('user/beratMassal',$data);
    }

    public function invoiceSPKMassal($nomorFaktur) {
        $data['dataSPK']   = $this->mdl->findSPKMasal($nomorFaktur);
        //$data['cekbom']    = $this->mdl->cekbom();
        //$data['cekjadwal'] = $this->mdl->cekjadwal();
        $data['jadwal']    = $this->mdl->getjadwal7($nomorFaktur);
        $data['stokbom']   = $this->mdl->getBom2($nomorFaktur);
        $data['isi'] = $this->mdl->getIsiSPK($nomorFaktur);
        $data['cf'] = $this->mdl->cekFinishSPK($nomorFaktur);
        $this->load->view('user/invoiceMassal', $data);
    }

    public function listSPKMasal()
    {
        $data['listSPK']   = $this->mdl->listSPKMasal();
        //$data['cekbom'] = $this->mdl->cekbom();
        $data['cekjadwal'] = $this->mdl->cekjadwal2();
        $data['klot']      = $this->mdl->getKloterSPK();
        $data['ceksub']    = $this->mdl->cekSubSPK();
        $data['cb']        = $this->mdl->cekbom2();
        $this->load->view('user/spkMasal', $data);
    }

    //Services
    function service(){
        $data['pertanyaan'] = $this->mdl->getPertanyaan();
        $data['kepuasan'] = $this->mdl->getKepuasan();
        $data['rekomendasi'] = $this->mdl->getRekomendasi();
        $data['jumlahResponden'] = $this->mdl->getJumlahResponden();
        $data['radar'] = $this->mdl->getRadar();
        $data['dimensi'] = $this->mdl->getDimensi();
        
            if($data['kepuasan'] && $data['jumlahResponden']) {
                $data['tidakpuas'] = $data['kepuasan'][0]->Jumlah/$data['jumlahResponden']->jumlahResponden *100;
                $data['puas'] = $data['kepuasan'][1]->Jumlah/$data['jumlahResponden']->jumlahResponden *100;
                $data['netral'] = $data['kepuasan'][2]->Jumlah/$data['jumlahResponden']->jumlahResponden *100;
            }

            if($data['rekomendasi'] && $data['jumlahResponden']) {
                $data['merekomendasikan'] = $data['rekomendasi'][1]->Jumlah;
                $data['tidakmerekomendasikan'] = $data['rekomendasi'][0]->Jumlah;
            }
        //print_r($data['kepuasan']);exit();
        $this->load->view('user/service',$data);
    }

    function survey(){
        $data['pertanyaan'] = $this->mdl->getPertanyaan();
        $this->load->view('user/pertanyaan',$data);
    }

    function isiSurvey(){
        $a = $this->input->post();
        $h1 = $this->input->post('h1');
        $h2 = $this->input->post('h2');
        $h3 = $this->input->post('h3');
        $h4 = $this->input->post('h4');
        $h5 = $this->input->post('h5');
        $h6 = $this->input->post('h6');
        $h7 = $this->input->post('h7');
        $h8 = $this->input->post('h8');
        $h9 = $this->input->post('h9');
        $h10 = $this->input->post('h10');
        $r1 = $this->input->post('r1');
        $r2 = $this->input->post('r2');
        $r3 = $this->input->post('r3');
        $r4 = $this->input->post('r4');
        $r5 = $this->input->post('r5');
        $r6 = $this->input->post('r6');
        $r7 = $this->input->post('r7');
        $r8 = $this->input->post('r8');
        $r9 = $this->input->post('r9');
        $r10 = $this->input->post('r10');
        $rataHarapanT = ($h1+$h2)/2;  
        $rataHarapanR = ($h3+$h4)/2;
        $rataHarapanRE = ($h5+$h6)/2;
        $rataHarapanA = ($h7+$h8)/2;
        $rataHarapanE = ($h9+$h10)/2;
        $rataRealisasiT = ($r1+$r2)/2;
        $rataRealisasiR = ($r3+$r4)/2;
        $rataRealisasiRE = ($r5+$r6)/2;
        $rataRealisasiA = ($r7+$r8)/2;
        $rataRealisasiE = ($r9+$r10)/2;
        $rataHarapan = ($h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10)/10;
        $rataRealisasi = ($r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10)/10;
        $data = array(
                'id_user'               => "1",
                'h1'               => $h1,
                'h2'               => $h2,
                'h3'               => $h3,
                'h4'               => $h4,
                'h5'               => $h5,
                'h6'               => $h6,
                'h7'               => $h7,
                'h8'               => $h8,
                'h9'               => $h9,
                'h10'              => $h10,
                'r1'               => $r1,
                'r2'               => $r2,
                'r3'               => $r3,
                'r4'               => $r4,
                'r5'               => $r5,
                'r6'               => $r6,
                'r7'               => $r7,
                'r8'               => $r8,
                'r9'               => $r9,
                'r10'              => $r10,
                'u1'               => $this->input->post('u1'),
                'u2'                => $this->input->post('u2'),
                'rataHarapanT'      => $rataHarapanT,
                'rataHarapanR'      => $rataHarapanR,
                'rataHarapanRE'     => $rataHarapanRE,
                'rataHarapanA'      => $rataHarapanA,
                'rataHarapanE'      => $rataHarapanE,
                'rataRealisasiT'     => $rataRealisasiT,
                'rataRealisasiR'     => $rataRealisasiR,
                'rataRealisasiRE'    => $rataRealisasiRE,
                'rataRealisasiA'     => $rataRealisasiA,
                'rataRealisasiE'     => $rataRealisasiE,
                'rataHarapan'       => $rataHarapan,
                'rataRealisasi'      => $rataRealisasi
        );
        $this->mdl->insertData('penilaian', $data);
        $message = "Terima kasih sudah mengisi survey. Kepuasan anda adalah prioritas kami.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/survey") . "';</script>";
    }

    public function listProdukJadi() {
        $data['produk']=$this->mdl->getProd();
        $data['bom']=$this->mdl->getBOM();
        $data['bom2']=$this->mdl->getBOMdistinct();
        $this->load->view('user/produkJadi',$data);
    }

    //createPOService
    public function pilihPOService() {
        $data['listCustomer'] = $this->mdl->listCustomer();
        $this->load->view('user/pilihJenisService',$data);
    } 

    public function createPOServicePartai() {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseorderservice.nomorPO]');
        $this->form_validation->set_rules('namaBarang[]','Nama Barang', 'required');
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $idCustomer=$this->input->post('idCustomer');
            if ($idCustomer==0){
                $data['id'] = array(
                    'idC' => 0,
                );
            } else {
                $data['customer'] = $this->mdl->cariCustomer($idCustomer);
                $data['id']= array(
                    'idC' => 1,
                );
            }
            $data['pegawai'] = $this->mdl->listPegawaiSales();
            $data['poTerakhir'] = $this->mdl->poTerakhirService();
            $this->load->view('user/createPOServicePartai',$data);
        }
        else {
                //eksekusi query tabel Customer
                $dataCustomer = array(
                    'namaCustomer'        => $this->input->post('namaCustomer'),
                    'nomorTelepon'        => $this->input->post('nomorTelepon'),
                );
                $this->mdl->tambahCustomer($dataCustomer);
                $customer=$this->mdl->findCustomer();
                $idCustomer=$customer[0]->idCustomer;

                $data['namaBarang']=$this->input->post('namaBarang');
                $data['jumlah']=$this->input->post('jumlah');
                $dataPOService= array(
                            'nomorPO'           => $this->input->post('nomorPO'),
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
                            'tipeOrder'         => 'service',
                            'jenisOrder'         => 'Partai',
                            'totalBerat'        => $this->input->post('berat'),
                            'totalHarga'        => $this->clean($this->input->post('harga')),
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseorderservice',$dataPOService);

                $data['PO'] = $this->mdl->findPOService($this->input->post('nomorPO'));
                $idPO = $data['PO'][0]->idPO;
                //print_r($data['material']);exit();
                $j=count($this->input->post('jumlah'));
                $harga=0;
                    for ($i=0; $i < $j ;$i++){
                        $dataDetailPOService= array(
                            'idPO'         => $idPO,
                            'namaBarang'    => $data['namaBarang'][$i],
                            'jumlah'       => $data['jumlah'][$i]
                        );
                        $this->mdl->insertData('detailpurchaseorderservice',$dataDetailPOService);
                    }
                $message = "PO berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/listPOService")."';</script>";
        }
    }

    public function produkTrading() {
        $data['produk']=$this->mdl->listProdukTrading();
        $this->load->view('user/produkTrading',$data);
    }

    public function tambahProdukTrading(){
        $this->form_validation->set_rules('kodeProduk','Kode Produk', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['produk'] = $this->mdl->listProdukTrading($id);
            //print_r($data['bom']);
            $this->load->view('user/produkTrading',$data);
        }
        else {
            //form submit dengan gambar dikosongkan
           $dataProduk = array(
                            'kodeProduk'    => $this->input->post('kodeProduk'),
                            'namaProduk'   => $this->input->post('namaProduk'),
                            'jenisProduk'   => $this->input->post('jenisProduk'),
                            'satuan'   => $this->input->post('satuan'),
                            'harga'        => $this->clean($this->input->post('harga')),
                            'stok'         => $this->input->post('stok'),
                    );
                    //print_r($dataProduk);exit();
                    $this->mdl->insertData("produkTrading",$dataProduk);
                    $message = "Produk berhasil tambahkan";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/produkTrading")."';</script>";
    }
        
    }

    public function hapusProdukTrading($id){
        $this->mdl->deleteData("idProduk",$id,"produkTrading");
        $message = "Produk berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/produkTrading")."';</script>";
    }


    //Jabatan
    public function jabatan() {
        $data['jabatan']=$this->mdl->listJabatan();  
        $this->load->view('user/jabatan',$data);
    }

    public function createJabatan() {
        $dataJabatan = array(
            'namaJabatan'          => $this->input->post('namaJabatan'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->insertData('jabatan', $dataJabatan);
        redirect('user/jabatan');
    }

    public function editJabatan($idJabatan) {
        $dataJabatan = array(
            'namaJabatan'          => $this->input->post('namaJabatan'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->updateData('idJabatan', $idJabatan, 'jabatan', $dataJabatan);
        redirect('user/jabatan');
    }

    public function deleteJabatan($idJabatan) {
        $this->mdl->deleteData('idJabatan', $idJabatan, 'jabatan');
        $message = "Data Jabatan berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/jabatan")."';</script>";
    }

}
