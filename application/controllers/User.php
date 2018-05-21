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
        $idUser=$this->session->userdata['logged_in']['iduser'];

        if (!(isset($this->session->userdata['logged_in']))) {

            redirect('Login');

        }

        $currency = $this->mdl->checkCurrency();
        $currentPrice['gold'] = array(
            'currentCurrency' => $currency[0]->hargaEmas,
            'currentRupiah' => $currency[0]->hargaRupiah,
            'tanggal' => $currency[0]->tanggal, 
        );
        $this->load->vars($currentPrice);

    }

    public function index() {

        redirect('user/kanbanmassal');

            $this->load->view('user/dashboardutama_view');
    }

    public function kanban() {

        // if (isset($this->session->userdata['logged_in'])) {

            //$data['tgl'] = date_create($time());

            $data['s'] = $this->mdl->getSales();
            $data['j'] = $this->mdl->getPenjadwalan();
            $data['d'] = $this->mdl->getDesain();
            $data['m'] = $this->mdl->getMenunggu();
            $data['p'] = $this->mdl->getPrint();

            $data['klt'] = $this->mdl->getListKloter2();
            // print_r($data['klt']); exit();
            

            $data['li'] = $this->mdl->getLilin(1003);

            
            $data['qw'] = $this->mdl->getKloter2();
            $data['g'] = $this->mdl->getGroup();
            //$data['g2'] = $this->mdl->getGroup2();

            $data['k1'] = $this->mdl->getKloter(1003);

            $data['k2'] = $this->mdl->getKloter(1005);
            $data['k3'] = $this->mdl->getKloter(1006);
            //$data['pp'] = $this->mdl->getPPIC();

             $data['staf'] = $this->mdl->getStaf();
             $data['akt'] = $this->mdl->getAktivitasLanjut();

            $data['r'] = $this->mdl->getRecord();
            $data['b'] = $this->mdl->getBerat();
            $data['cb'] = $this->mdl->cekbom2();
            $data['klot']      = $this->mdl->getKloterSPK();
            //$data['k'] = $this->mdl->getIsiKloter();

              
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

        $idakt = $this->input->post('idakt');
        $cek = $this->mdl->cekPolishDalam($idSPK,1010);
        if (strlen($idakt) > 0 and count($cek) == 0) {

            $proses = $this->mdl->getProsesDetail($idProProd);
            $beratAwal = (float)$proses[0]->beratAwal;

            $userx = $this->mdl->getUserByJabatan('Admin Tempahan');
            $idg = $userx[0]->idUser;
             
             $data = array(
                'idPIC' => $idg,
                'tipeBarang' => "Produk Semi Jadi",
                'kodeBarang' => $idProduk,
                'jumlah' => $beratAwal,
                'jenisPergerakanBarang' => "IN",
                'satuan' => 'gr',
                'tipePergerakan' => 'Produksi',
                'tanggal' => date("Y-m-d H:i:s")
            );

            $this->mdl->insertData('stokbarang', $data);
            
        }

        $this->next($idProduk,$idAktivitas,$idProProd,$idSPK);

    }

    public function next($idProduk,$idaktivitas,$idProProd,$idSPK) {
        print_r($idSPK);
        $proses = $this->mdl->getProsesDetail($idProProd);
        $stat = $proses[0]->statusWork;
        $spk = $this->mdl->findSPK10($idSPK);



        if($stat == 'Belum ada PIC') {

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">gagal melanjutkan proses produksi, belum ada PIC proses tersebut.</div>');
            redirect('User/kanban');

        } else {

            $data = array(
            'statusWork' => 'Done',
            'RealisasiEndDate' => date("Y-m-d H:i:s")
            );

            $this->mdl->updateData('idProProd',$idProProd, 'factproduction', $data);
            
            if ($idaktivitas != 1003) {

                $next = $idaktivitas;

                $beratAwal = $proses[0]->berat;
                $beratTambahan = $proses[0]->beratTambahan;

                $data = array(
                    'idSPK' => $idSPK,
                    'statusWork' => 'Belum ada PIC',
                    'statusSPK' => 'Active',
                    'idAktivitas' => $next,
                    'beratAwal' => $beratAwal,
                    'beratTambahan' => 0,
                    'statusBerat' => 'Belum Disetujui'
                );

                $this->mdl->insertData('factproduction', $data);

            }
            
            

            if ($idaktivitas == 1014) {
                
                $userx = $this->mdl->getUserByJabatan('Admin Produksi');
                $idg = $userx[0]->idUser;

                $idUser=$this->session->userdata['logged_in']['iduser'];

                $data = array(
                    'idPIC' => $idUser,
                    'tipeBarang' => "Produk Semi Jadi",
                    'kodeBarang' => $idProduk,
                    'jumlah' => $proses[0]->berat,
                    'jenisPergerakanBarang' => "OUT",
                    'satuan' => 'gr',
                    'tipePergerakan' => 'Produksi',
                    'tanggal' => date("Y-m-d H:i:s"),
                );

                $this->mdl->insertData('stokbarang',$data);

                $data = array(
                    'idPIC' => $idUser,
                    'tipeBarang' => "Produk Jadi",
                    'kodeBarang' => $idProduk,
                    'jumlah' => $proses[0]->berat,
                    'jenisPergerakanBarang' => "IN",
                    'satuan' => 'gr',
                    'tipePergerakan' => 'Produksi',
                    'tanggal' => date("Y-m-d H:i:s"),
                    'nomorPO' => $spk[0]->nomorPO
                );

                $this->mdl->insertData('stokbarang',$data);
                
            }

            
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
                'beratAwal' => $this->input->post('beratAwal'),
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

    public function setBerat10() {
        $idk = $this->input->post('idKloter');
        $kloter = $this->mdl->getIsiKloter($idk);

        for ($i=0; $i <count($kloter) ; $i++) { 

            $data = array(
                'berat' => $this->input->post('berat'),
                'beratAwal' => $this->input->post('beratAwal'),
                'kembali' => $this->input->post('kembali'),
            );

            $where = array(

                'idSPK' => $kloter[$i]->idSPK,
                'idAktivitas' => $this->input->post('idAktivitas')

            );

            $this->mdl->updateData2($where, 'factproduction', $data);
            
        }

        
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menambahkan Berat.</div>');
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
        $data['poPerMonth'] = $this->mdl->poPerMonth();
        $data['poSum'] = $this->mdl->poSum();
        $this->load->view('user/administrationDashboard',$data);
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

        $data['pegawai'] = $this->mdl->listPegawai();
        $data['poTerakhir'] = $this->mdl->poTerakhir();
        $data['material']=$this->mdl->getMaterialBerlian(); 
        $data['zirkon']=$this->mdl->getMaterialZirkon();
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
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['poTerakhir'] = $this->mdl->poTerakhir2();
        $data['listProduk'] = $this->mdl->listProduk();

        $this->load->view('user/createPOMasal',$data);
    }

    public function cariProduk() {
        $kodeProduk = $this->input->post('kodeProduk');
        $data['produk'] = $this->mdl->findProduk($kodeProduk);
        echo json_encode($data['produk']);
    }

    public function cariPegawai() {
        $idpic = $this->input->post('idpic');
        $data['pegawai'] = $this->mdl->findPegawai($idpic);
        echo json_encode($data['pegawai']);
    }

    public function editPO($nomorPO) {
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        $data['poberlian']=$this->mdl->getBerlian($nomorPO);
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['material']=$this->mdl->getMaterialBerlian(); 
        $data['zirkon']=$this->mdl->getMaterialZirkon();
        $data['pekerjaan'] = explode(',',$data['dataPO'][0]->pekerjaanTambahan);
        // print_r($data['berlian']);exit();
        $this->load->view('user/editPurchaseOrder2',$data);
    }

    public function editPOMassal($nomorPO) {
        $data['dataPO'] = $this->mdl->poMassal($nomorPO);
        $data['produkPO'] = $this->mdl->getProdukPO($nomorPO);
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['pekerjaan'] = explode(',',$data['dataPO'][0]->pekerjaanTambahan);
        $data['listProduk'] = $this->mdl->listProduk();
        $this->load->view('user/editPOMassal',$data);
    }

    public function editPOPerak($nomorPO) {
        $data['dataPO'] = $this->mdl->poPerak($nomorPO);
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['pekerjaan'] = explode(',',$data['dataPO'][0]->pekerjaanTambahan);
        $this->load->view('user/editPOPerak',$data);
    }

    public function editPOService($nomorPO) {
        $data['dataPO'] = $this->mdl->findPOService($nomorPO);
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['ds'] = $this->mdl->getDetailSalesService2($nomorPO);
        if ($data['dataPO'][0]->jenisOrder=='Satuan') {
            $this->load->view('user/editPOServiceSatuan',$data);
        }else{
            $this->load->view('user/editPOServicePartai',$data);
        }
        //print_r($data['ds']);exit();
    }

    public function editPOServiceSatuan($nomorPO) {
        $idPO = $this->input->post('idPO');
        $dataPO = array(
            'nomorPO'           => $this->input->post('nomorPO'),
            'idSalesPerson'     => $this->input->post('idSalesPerson'),
            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
            'tipeOrder'         => 'service',
            'jenisOrder'         => 'Satuan',
        );
        $this->mdl->updateData('idPO',$idPO,'purchaseorderservice',$dataPO);

        $idDetailPO = $this->input->post('idDetailPO[]');
        $jumlah = $this->input->post('jumlah[]');
        $namaBarang = $this->input->post('namaBarang[]');
        $berat = $this->input->post('berat[]');
        $harga = $this->input->post('harga[]');


        if(count($jumlah)>0){
            $data['dataPO'] = $this->mdl->findPOService($nomorPO);
            $data['ds'] = $this->mdl->getBeratHargaService($nomorPO);
            $totalHarga1 = $data['dataPO'][0]->totalHarga;
            $totalHarga2 = $data['ds'][0]->harga;
            $totalHarga = $totalHarga1 - $totalHarga2;

            $totalBerat1 = $data['dataPO'][0]->totalBerat;
            $totalBerat2 = $data['ds'][0]->berat;
            $totalBerat = $totalBerat1 - $totalBerat2;/*
            print_r($totalHarga);
            print_r($totalBerat);exit();*/
            for ($i=0; $i < count($jumlah); $i++) { 
                $id = $idDetailPO[$i];
                $dataDetailPO = array(
                        'namaBarang' => $namaBarang[$i],
                        'jumlah' => $jumlah[$i],
                        'berat' => $berat[$i], 
                        'harga' => $this->clean($harga[$i])      
                );
                $this->mdl->updateData('idDetailPO',$id,'detailpurchaseorderservice',$dataDetailPO);
                $totalHarga = $totalHarga + $this->clean($harga[$i]);
                $totalBerat = $totalBerat + $berat[$i];
            }
            $dataHarga = array(
                'totalHarga' => $totalHarga,
                'totalBerat' => $totalBerat
            );
            $this->mdl->updateData('idPO',$idPO,'purchaseorderservice',$dataHarga);
        }

        $jumlah1 = $this->input->post('jumlah1[]');
        $namaBarang1 = $this->input->post('namaBarang1[]');
        $berat1 = $this->input->post('berat1[]');
        $harga1 = $this->input->post('harga1[]');

        if(count($jumlah1)>0) {
            $data['dataPO'] = $this->mdl->findPOService($nomorPO);
            $totalHarga = $data['dataPO'][0]->totalHarga;
            $totalBerat = $data['dataPO'][0]->totalBerat;
            $idPO = $data['dataPO'][0]->idPO; 
            for ($i=0; $i < count($jumlah1); $i++) { 
                $dataDetailPO = array(
                        'idPO' => $idPO,
                        'namaBarang' => $namaBarang1[$i],
                        'jumlah' => $jumlah1[$i],
                        'berat' => $berat1[$i], 
                        'harga' => $harga1[$i]      
                );
                $this->mdl->insertData('detailpurchaseorderservice',$dataDetailPO);
                $totalHarga = $totalHarga + $harga1[$i];
                $totalBerat = $totalBerat + $berat1[$i];
            }

            $dataHarga = array(
                'totalHarga' => $totalHarga,
                'totalBerat' => $totalBerat
            );
            $this->mdl->updateData('idPO',$idPO,'purchaseorderservice',$dataHarga);
        }
        $message = "PO berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/listPOService")."';</script>";
    }

    public function editPOServicePartai($nomorPO) {
        /*$a = $this->clean($this->input->post('harga'));
        print_r($a);exit();*/
        $idPO = $this->input->post('idPO');

        $idDetailPO = $this->input->post('idDetailPO[]');
        $jumlah = $this->input->post('jumlah[]');
        $namaBarang = $this->input->post('namaBarang[]');


        if(count($jumlah)>0){
            for ($i=0; $i < count($jumlah); $i++) { 
                $id = $idDetailPO[$i];
                $dataDetailPO = array(
                        'namaBarang' => $namaBarang[$i],
                        'jumlah' => $jumlah[$i],    
                );
                $this->mdl->updateData('idDetailPO',$id,'detailpurchaseorderservice',$dataDetailPO);
            }
            
        }

        $jumlah1 = $this->input->post('jumlah1[]');
        $namaBarang1 = $this->input->post('namaBarang1[]');


        if(count($jumlah1)>0){
            for ($i=0; $i < count($jumlah1); $i++) { 
                $dataDetailPO = array(
                        'idPO' => $idPO,
                        'namaBarang' => $namaBarang1[$i],
                        'jumlah' => $jumlah1[$i],    
                );
                $this->mdl->insertData('detailpurchaseorderservice',$dataDetailPO);
            }
            
        }

        $dataHarga = array(
                'totalBerat' => $this->input->post('berat'),
                'totalHarga' => $this->clean($this->input->post('harga'))
        );
        
        $this->mdl->updateData('idPO',$idPO,'purchaseorderservice',$dataHarga);

        $message = "PO berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/listPOService")."';</script>";
    }

    public function updatePO($idPO){
        if(!$this->input->post('pekerjaanTambahan[]')) {
            $pekerjaanTambahan = "Tidak Ada";
        } else {
            $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
        }

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

        $harga=$this->input->post('harga');
        $qty=$this->input->post('kuantitas');
        $totalHarga=($qty*$harga)+$upah;
        
        //Query Tambah PO
        $dataPO = array(
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
            'keteranganEnamel'  => $this->input->post('keteranganEnamel'),
            'keteranganSlap'  => $this->input->post('keteranganSlap'),
            'keteranganKombinasi'  => $this->input->post('keteranganKombinasi'),
            'keteranganLaserHuruf'  => $this->input->post('keteranganLaserHuruf'),
            'keteranganKodeCap'  => $this->input->post('keteranganKodeCap'),
            'hargaEnamel'  => $this->input->post('hargaEnamel'),
            'hargaSlap'  => $this->input->post('hargaSlap'),
            'hargaKombinasi'  => $this->input->post('hargaKombinasi'),
            'hargaLaserHuruf'  => $this->input->post('hargaLaserHuruf'),
            'hargaKodeCap'  => $this->input->post('hargaKodeCap'),
            // 'biayaTambahan'     => $this->input->post('biayaTambahan'),
            'beratAkhir'        => $this->input->post('beratAkhir'),
            'susut'             => $this->input->post('susut'),
            'bahan'             => $this->input->post('bahan'),
            'kadarBahan'        => $this->input->post('kadarBahan'),
            'namaBatu'          => $this->input->post('namaBatu'),
            'beratBatu'         => $this->input->post('beratBatu'),
            'batuTerhadapGoresan' => $this->input->post('batuTerhadapGoresan'),
            'batuTerhadapPukulan' => $this->input->post('batuTerhadapPukulan'),
            'batuTerhadapKruman'  => $this->input->post('batuTerhadapKruman'),
            'keadaanBatuTengah'   => $this->input->post('keadaanBatuTengah'),
            'ukuranJari'        => $this->input->post('ukuranJari'),
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
        $this->mdl->updateData('idPO',$idPO,'potempahan',$dataPO);    

        $message = "PO berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/purchaseOrder")."';</script>";
    }

    public function updatePOMassal($idPO){
        if(!$this->input->post('pekerjaanTambahan[]')) {
            $pekerjaanTambahan = "Tidak Ada";
        } else {
            $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
        }

        $hargaBahan = $this->clean($this->input->post('hargaBahan'));
        $upah = $this->clean($this->input->post('upah'));
        $panjar = $this->clean($this->input->post('panjar'));

        $harga=$this->input->post('harga');
        $beratAkhir=$this->input->post('beratAkhir');
        $totalHarga=($beratAkhir*$harga)+$upah;
        
        //Query Tambah PO
        $dataPO = array(
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
        $this->mdl->updateData('idPO',$idPO,'pomasal',$dataPO); 

        $idProdukChild=$this->input->post('idProdukChild[]');
        $keteranganChild=$this->input->post('keteranganChild[]');
        $nomorPO=$this->input->post('nomorPO');

        $this->mdl->deleteData('nomorPO',$nomorPO,'produkpo');

        for ($i=0; $i < count($idProdukChild); $i++) { 
            $dataProdukPO = array(
                'nomorPO'           => $nomorPO,
                'idProdukAG'        => $this->input->post('kodeProduk'),
                'idProdukChild'     => $idProdukChild[$i],
                'keterangan'        => $keteranganChild[$i],
            );
            $this->mdl->insertData('produkpo',$dataProdukPO);
        }   

        $message = "PO berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/listPOMasal")."';</script>";
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
        $data['poberlian']=$this->mdl->getBerlian($nomorFaktur); 
        $this->load->view('user/spkDesain',$data);
    }

    public function persetujuanDesain() {

        $nomorFaktur = $this->input->post('nomorFaktur');
        $status = $this->input->post('status');

        $spk = $this->mdl->findSPK($nomorFaktur);
        $idSPK = $spk[0]->idSPK;

        if($status=='Disetujui'){
            
            $this->setujuDesain($nomorFaktur);

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Desain untuk nomor Faktur <b>'.$nomorFaktur.'</b> telah disetujui</div>');
        } else if($status=='Menunggu Persetujuan') {
            $data = array(
                'keteranganPending'     => $this->input->post('keterangan'),
                'statusDesain'          => $status,
            );

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-warning">Desain untuk nomor Faktur <b>'.$nomorFaktur.'</b> ditunda untuk sementara</div>');
        } else {
            $data = array(
                'keteranganPending'     => $this->input->post('keterangan'),
                'statusDesain'          => $status,
            );

            $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Desain untuk nomor Faktur <b>'.$nomorFaktur.'</b> ditolak oleh pelanggan</div>');
        }
        
        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);
        redirect('user/spk');
    }



    public function tambahJadwal($nomorFaktur) {
        $data['dataSPK'] = $this->mdl->findSPK($nomorFaktur);
        $data['aktivitas'] = $this->mdl->listAktivitas2();
        $data['poberlian']=$this->mdl->getBerlian($nomorFaktur); 
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
        $data['poberlian']=$this->mdl->getBerlian($nomorFaktur); 
        $idSPK = $data['dataSPK'][0]->idSPK;
        $data['kl'] = $this->mdl->getKloterBySPK($idSPK);
        $data['rkp'] = $this->mdl->getRekapTempahan($idSPK);
        $data['cekbom'] = $this->mdl->cekbom();
        $data['cekjadwal'] = $this->mdl->cekjadwal();
        $data['jadwal'] = $this->mdl->getjadwal($nomorFaktur);
        $kloter = $this->mdl->getIdKloter($nomorFaktur);
        $data['tr'] = $this->mdl->getTrackProduksiTempahan($nomorFaktur);
        $data['staf'] = $this->mdl->getStaf();
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

    public function setKeterangan() {
        $idSPK = $this->input->post('idSPK');

        $data = array(
            'keteranganDesain' => $this->input->post('ket')
            );

        $this->mdl->updateData('idSPK',$idSPK,'spk',$data);

        $message = "Berhasil menambahkan keterangan";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/spk")."';</script>";
    }

    public function uploadJadwal(){
            //eksekusi query insert tanpa gambar
        $idAktivitas    =$this->input->post('idAktivitas');
        $nomorAktivitas =$this->input->post('nomorAktivitas');
        $endDate        =$this->input->post('endDate');
        $nomorFaktur    =$this->input->post('nomorFaktur');
        // print_r($idAktivitas);exit();
        for ($i=0; $i < count($nomorAktivitas); $i++) {

            $b=$nomorAktivitas[$i]; 
            $dataAktivitas = array(
                'idProduk'              => $this->input->post('idProduk'),
                'idAktivitas'           => $idAktivitas[$b],
            );
            $this->mdl->tambahProdukAktivitas($dataAktivitas);            

            $dataJadwal = array(
                'idSPK'                 => $this->input->post('idSPK'),
                'idAktivitas'           => $idAktivitas[$b],
                'startDate'           => $endDate[$b],
                'endDate'           => $endDate[$b],
            );
            
           $this->mdl->tambahRencana($dataJadwal);
            
        } 


        $idSPK = $this->input->post('idSPK');

        $data = array(
            'statusJadwal' => 'Sudah Ada',
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s"),
            'tglPrint'           => $this->input->post('tglPrint'),
            );

        $this->mdl->updateData('idSPK',$idSPK,'spk',$data);

        //$this->mdl->prosesJadwal($nomorFaktur);

        $message = "Penjadwalan telah berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/spk")."';</script>";
    }

    public function uploadThumbnail() {
        $kodeProduk=$this->input->post('kodeProduk');
        $nomorFaktur=$this->input->post('nomorFaktur');

        $produk = $this->mdl->findProduk($kodeProduk);
        $kode=$produk[0]->kodeGambar;

        $this->load->library('upload');

        $config['upload_path']     = './uploads/gambarDesain/'; 
        $config['allowed_types']   = 'jpg|jpeg|png'; 
        $config['max_size']        = '6000';
        $config['file_name']       = $kode.'-thumb.jpg';
        $config['overwrite']        = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('thumb')) {
            $message = "Berhasil Mengupload Thumbnail Produk";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/spk")."';</script>";
            
        } else {
            $message = "Format Thumbnail tidak sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/tambahDesain/".$nomorFaktur)."';</script>";
        }
    }

    public function uploadFotoLilin() {
        $kloter=$this->input->post('kloter');

        $this->load->library('upload');

        $config['upload_path']     = './uploads/gambarDesain/'; 
        $config['allowed_types']   = 'jpg|jpeg'; 
        $config['max_size']        = '6000';
        $config['file_name']       = $kloter.'-lilin.jpg';
        $config['overwrite']        = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('foto')) {
            $message = "Berhasil Mengupload Foto Lilin";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/reviewKloter/".$kloter)."';</script>";
            
        } else {
            $message = "Format Thumbnail tidak sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/reviewKloter/".$kloter)."';</script>";
        }
    }

    public function uploadDesain()
    {       
        $kodeProduk=$this->input->post('kodeProduk');
        $nomorFaktur=$this->input->post('nomorFaktur');
        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $up=$this->input->post();

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
            $config['allowed_types']   = 'jpg|jpeg|png'; 
            $config['max_size']        = '8000';
            $config['file_name']       = $kode.'-d'.($i+1).'.jpg';
            $config['overwrite']        = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload()) {
                $a++;
            };
        }

        if($a==$b) {

            $data = array(
                'PICDesain' => $iduser,
                'statusDesain' => 'Menunggu Persetujuan',
                'keteranganDesain' => $this->input->post('keterangan')
            );
            $this->mdl->updateData('nomorFaktur', $nomorFaktur, 'spk', $data);

            $message = "Foto produk telah berhasil disimpan, Silahkan Tambahkan Thumbnail";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/tambahDesain/".$nomorFaktur)."';</script>";
        } else {
            $message = "Foto produk tidak sesuai";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/tambahDesain/".$nomorFaktur)."';</script>";
        } 
    }

    public function hapusKloter($idKloter){

        $this->mdl->deleteData('idKloter',$idKloter,'kloter');
        $message = "Berhasil Menghapus Kloter";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/kanban/")."';</script>";

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
        $data['c'] = $this->mdl->getBerat22();
        $data['produk']=$this->mdl->getProd();  
        $data['spk']=$this->mdl->getSPK();    
        $data['rekapBerat']=$this->mdl->rekapBerat();
        $this->load->view('user/berat',$data);
    }

    public function inventory() {
        $data['aktivitas'] = $this->mdl->getAktivitas2();
        $data['b'] = $this->mdl->getBeratRekap();
        $data['bb'] = $this->mdl->getBeratMassal();
        $data['spk']=$this->mdl->getSPK(); 
        $data['produk']=$this->mdl->getProd();  
        $data['barangMasuk']=$this->mdl->barangMasuk();
        $data['barangKeluar']=$this->mdl->barangKeluar();
        $data['stokEmas']=$this->mdl->stokEmas();
        $data['material']=$this->mdl->getMaterialDasar(); 
        $data['material2']=$this->mdl->getMaterialDasar2();
        $data['st'] = $this->mdl->getStockPIC(); 
        $data['pic'] = $this->mdl->getPIC(); 
        $data['tanggal2'] = $this->mdl->getTanggal(); 
        $spk=$this->mdl->getSPK();
        $b = $this->mdl->getBeratRekap();
        $bb = $this->mdl->getBeratMassal();
        $data['rekapBerat']=$this->mdl->rekapBerat();
        $jumlahHilang=0;
        $jumlahHilang2=0;
        $kembali=0;
        $bAwal=0;
        $bAkhir=0;

        for ($z=0; $z < count($b); $z++) { 
            if ($b[$z]->berat) {
                $bAwal= $bAwal + $b[$z]->beratAwal;
                $bAkhir=$bAkhir + $b[$z]->berat;
                $kembali = $kembali + $b[$z]->kembali;
                $jumlahHilang = round((($bAwal-$bAkhir-$kembali)),2);
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }

        
        
        $data['jumlahHilang']=$jumlahHilang;
        $data['berat6']=0;
        $data['berat7']=0;
        $data['berat8']=0;
        $data['berat9']=0;
        $data['berat10']=0;
        $data['berat11']=0;
        $data['berat12']=0;
        $data['berat13']=0;
        $data['berat14']=0;

        for ($z=0; $z < count($b); $z++) { 
            if ($b[$z]->berat) {
                    if ((int)$b[$z]->idAktivitas == 1006) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat6'] = $data['berat6'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1007) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat7'] = $data['berat7'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1008) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat8'] = $data['berat8'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1009) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat9'] = $data['berat9'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1010) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat10'] = $data['berat10'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1011) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat11'] = $data['berat11'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1012) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat12'] = $data['berat12'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1013) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat13'] = $data['berat13'] +  $selisih;
                    }
                    else if ((int)$b[$z]->idAktivitas == 1014) {
                        $bAwal=(float) $b[$z]->beratAwal;
                        $bAkhir=(float) $b[$z]->berat;
                        $kembali=(float) $b[$z]->kembali;
                        $selisih = round($bAwal-$bAkhir-$kembali,2);
                        $data['berat14'] = $data['berat14'] +  $selisih;
                    }
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }

        $bb = $this->mdl->getBeratMassal();
        $data['rekapBeratMassal']=$this->mdl->rekapBeratMassal();
        $jumlahHilang=0;
        $jumlahHilang2=0;
        $kembali=0;
        $bAwal=0;
        $bAkhir=0;

        for ($z=0; $z < count($bb); $z++) { 
            if ($bb[$z]->berat) {
                $bAwal= $bAwal + $bb[$z]->beratAwal;
                $bAkhir=$bAkhir + $bb[$z]->berat;
                $kembali = $kembali + $bb[$z]->kembali;
                $jumlahHilang = round((($bAwal-$bAkhir-$kembali)),2);
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }

        $data['jumlahHilangMassal']=$jumlahHilang;
        $data['beratMassal6']=0;
        $data['beratMassal7']=0;
        $data['beratMassal8']=0;
        $data['beratMassal9']=0;
        $data['beratMassal10']=0;
        $data['beratMassal11']=0;
        $data['beratMassal12']=0;
        $data['beratMassal13']=0;
        $data['beratMassal14']=0;

        for ($z=0; $z < count($bb); $z++) { 
            if ($bb[$z]->berat) {
                    if ((int)$bb[$z]->idAktivitas == 1006) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal6'] = $data['beratMassal6'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1007) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal7'] = $data['beratMassal7'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1008) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal8'] = $data['beratMassal8'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1009) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal9'] = $data['beratMassal9'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1010) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal10'] = $data['beratMassal10'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1011) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal11'] = $data['beratMassal11'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1012) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal12'] = $data['beratMassal12'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1013) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal13'] = $data['beratMassal13'] +  $selisih;
                    }
                    else if ((int)$bb[$z]->idAktivitas == 1014) {
                        $bbAwal=(float) $bb[$z]->beratAwal;
                        $bbAkhir=(float) $bb[$z]->berat;
                        $kembali=(float) $bb[$z]->kembali;
                        $selisih = round($bbAwal-$bbAkhir-$kembali,2);
                        $data['beratMassal14'] = $data['beratMassal14'] +  $selisih;
                    }
            // /$jumlahHilang2=$jumlahHilang2+$jumlahHilang;
            }
        }

        $this->load->view('user/inventoryDashboard',$data);
    }

    public function stokBarang() {
        $data['stokBarang']=$this->mdl->getStokProduk();
        $data['pegawai'] = $this->mdl->listPegawai();
        $idUser=$this->session->userdata['logged_in']['iduser'];
        $data['stok']=$this->mdl->stockPerMaterial($idUser);
        $data['st'] = $this->mdl->getYourStock($idUser);
        $data['pd'] = $this->mdl->getPending($idUser);
        $data['pass'] = $this->session->userdata['logged_in']['password'];
        $data['swandi'] = $this->mdl->findPegawai(12);
        // print_r($data['stok']);exit();
        $this->load->view('user/stokBarang',$data);
    }

    public function terimabarang($idStok) {
        $data = array(
            'statusTransfer' => 'Valid'
        );
        $this->mdl->updateData('idStok',$idStok,'stokbarang',$data);
        $message = "Berhasil Menerima Barang";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('user/stokBarang');

    }

    public function material() {
        $data['material']=$this->mdl->getMaterial();
        $data['pergerakan']=$this->mdl->getPergerakan();
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
                    $config['max_size']        = '8048';
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
            $data['produk'] = $this->mdl->findProdukId($id);
            //print_r($data['bom']);
            $this->load->view('user/editProduk',$data);
        }
        else {
            // print_r($_FILES['userfile']);
             // print_r($this->input->post());exit();
            $kode = $this->input->post('kodeGambar');
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
                    $config['max_size']        = '8048';
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

                    $this->mdl->updateData("idProduk",$id,"produk",$dataProduk);
                    $message = "Produk berhasil diperbaharui";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/produk")."';</script>";
                } else {

                    $message = "Terdapat foto produk tidak sesuai";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $this->load->view('user/createProduk');
                } 
   
            } else {

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
                $this->mdl->updateData("idProduk",$id,"produk",$dataProduk);
                $message = "Produk berhasil diperbaharui";
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
        $f = $this->mdl->getLastKodeMaterial();
        $data['kd'] = $f[0]->kodeMaterial+1;
        // print_r($f);exit();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('user/createMaterial',$data);
        }
        else {

            if($this->input->post('kategori')=="Emas"){
                $kadar=$this->input->post('kadar');
                $clarity="";
                $color="";
                $karat="";
            } else if($this->input->post('kategori')=="Berlian") {
                $karat=$this->input->post('carat');
                $clarity=$this->input->post('clarity');
                $color=$this->input->post('color');
                $kadar=0;
            } else {
                $kadar="0";
                $clarity="";
                $color="";
                $karat="";
            }

            $dataMaterial = array(
                'kodeMaterial'    => $this->input->post('kodeMaterial'),
                'namaMaterial'    => $this->input->post('namaMaterial'),
                'satuan'          => $this->input->post('satuan'),
                'stokMaterial'    => $this->input->post('stokMaterial'),
                'safetyStock'     => $this->input->post('safetyStock'),
                'kategori'        => $this->input->post('kategori'),
                'karat'           => $karat,
                'kadar'           => $kadar,
                'clarity'         => $clarity,
                'color'           => $color,
            );

            $kat = $this->input->post('kategori');
            $t = $this->mdl->cekMaterial($kat, $kadar);
            $d = count($t);
            if($kat!="Berlian" && $kat != 'Non Emas'){
                if($d == 0) {
                    $this->mdl->insertData('materialdasar',$dataMaterial);
                    $message = "Material dasar berhasil dibuat";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/material")."';</script>"; 
                } else {
                    $message = "Gagal menambahkan, material telah terdaftar";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='".base_url("user/createMaterial")."';</script>";
                }
            } else {
                $this->mdl->insertData('materialdasar',$dataMaterial);
                $message = "Material dasar berhasil dibuat";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/material")."';</script>"; 
            } 
              
        }
    }

    public function editMaterial($id) {
        $this->form_validation->set_rules('kodeMaterial','Kode Material', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['material'] = $this->mdl->findMaterial($id);
            $this->load->view('user/editMaterial',$data);
        }
        else {

            if($this->input->post('kategori')=="Emas"){
                $kadar=$this->input->post('kadar');
                $clarity="";
                $color="";
            } else if($this->input->post('kategori')=="Berlian") {
                $kadar=$this->input->post('carat');
                $clarity=$this->input->post('clarity');
                $color=$this->input->post('color');
            } else {
                $kadar="";
                $clarity="";
                $color="";
            }

            $dataMaterial = array(
                'kodeMaterial'    => $this->input->post('kodeMaterial'),
                'namaMaterial'    => $this->input->post('namaMaterial'),
                'satuan'          => $this->input->post('satuan'),
                'stokMaterial'    => $this->input->post('stokMaterial'),
                'safetyStock'     => $this->input->post('safetyStock'),
                'kategori'        => $this->input->post('kategori'),
                'kadar'           => $kadar,
                'clarity'         => $clarity,
                'color'           => $color,
            );

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

    public function createBOMMassal($idSubSPK) {
        $data['lk'] = $this->mdl->getSetting();
        $data['subSPK']=$this->mdl->findSubSPK($idSubSPK);
        $data['emas']=$this->mdl->cekDatangEmas($idSubSPK);
        $data['materials']=$this->mdl->getMaterial();
        $data['bom4'] = $this->mdl->getbom4($idSubSPK);
        $this->load->view('user/createBOMMassal',$data);
    }


    public function createBOMTempahan($kloter) {
        

        $data['kloter']=$this->mdl->findKloter($kloter);
        $data['bom4'] = $this->mdl->getbom5($kloter);
        $data['materials']=$this->mdl->getMaterial();
        $data['spk'] = $this->mdl->getIsiKloter($kloter);
        $data['lk'] = $this->mdl->getSetting();

        $this->load->view('user/createBOMTempahan',$data);
    }

    public function createBOMTempahanTurun() {
        $idKloter = $this->input->post('idKloter');

        $data['material'] = $this->mdl->findNamaMaterial('Alloy Kuning');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratAlloy');

        $dataBOM1= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh,
        );
        
    
    
        $data['material'] = $this->mdl->findNamaMaterial('Tembaga');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratTembaga');
        

        $dataBOM2= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh,
        );
        
    
    
        $data['material'] = $this->mdl->findNamaMaterial('Perak');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratPerak');
        

        $dataBOM3= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh
            );
            


        $idMaterial = $this->input->post('kodeMaterial');
        $idm = explode(",",$idMaterial);

        
        $jmlbutuh = $this->input->post('beratEmasMurni');
        $data = array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idm[0],
            'jumlah'     => $jmlbutuh
        );


        $this->mdl->insertData('bomtempahan',$dataBOM1);
        $this->mdl->insertData('bomtempahan',$dataBOM2);
        $this->mdl->insertData('bomtempahan',$dataBOM3);
        $this->mdl->insertData('bomtempahan',$data);

        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";
                
    }

    public function createBOMTempahanNaik() {
        $idMaterial = $this->input->post('kodeMaterial');
        $idMaterial2 = $this->input->post('kodeMaterial2');



        $idKloter = $this->input->post('idKloter');

        $idm = explode(",",$idMaterial);
        $idm2 = explode(",",$idMaterial2);


        $brt = $this->input->post('brt');
        $brt2 = $this->input->post('brt2');

        //$idUser=$this->session->userdata['logged_in']['iduser'];
        
        $dataBOM= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idm[0],
            'jumlah'     => $brt
        );
        
        //print_r($dataBOM);

        $this->mdl->insertData('bomtempahan',$dataBOM);

        $dataBOM2= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idm2[0],
            'jumlah'     => $brt2
        );

        //print_r($dataBOM2);exit();
        
        $this->mdl->insertData('bomtempahan',$dataBOM2);

        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";
    }

    
    public function tambahBOMMassal() {

        $idSubSPK = $this->input->post('idSubSPK');

        $idMaterial = $this->input->post('kodeMaterial');
        $idUser=$this->session->userdata['logged_in']['iduser'];
        $jmlbutuh = $this->input->post('berat');

        $idm = explode(",",$idMaterial);
        $dataBOM= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idm[0],
            'jumlah'     => $jmlbutuh
            );
    
        
        $this->mdl->insertData('bommassal',$dataBOM);
        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createbommassal/".$idSubSPK)."';</script>";

    }

    public function createEmasPutih() {

        $idKloter = $this->input->post('idKloter');

        if(strlen($idKloter) > 0) {

            $data['material'] = $this->mdl->findNamaMaterial('Alloy Putih');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratAlloy');



            $dataBOM= array(
                'idKloter'   => $idKloter,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

            $this->mdl->insertData('bomtempahan',$dataBOM);

            $data['material'] = $this->mdl->findNamaMaterial('Paladium');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratPaladium');

            $dataBOM= array(
                'idKloter'   => $idKloter,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

            $this->mdl->insertData('bomtempahan',$dataBOM);

             $idMaterial = $this->input->post('kodeMaterial');
            $idUser=$this->session->userdata['logged_in']['iduser'];
            $jmlbutuh = $this->input->post('beratEmasMurni');

            $idm = explode(",",$idMaterial);
            $dataBOM= array(
                'idKloter'   => $idKloter,
                'idMaterial' => $idm[0],
                'jumlah'     => $jmlbutuh
                );
        
            
            $this->mdl->insertData('bomtempahan',$dataBOM);

            $message = "BOM berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";

        } else {

            $idSubSPK = $this->input->post('idSubSPK');

            $data['material'] = $this->mdl->findNamaMaterial('Alloy Putih');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratAlloy');

            $dataBOM= array(
                'idSubSPK'   => $idSubSPK,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

            $this->mdl->insertData('bommassal',$dataBOM);

            $data['material'] = $this->mdl->findNamaMaterial('Paladium');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratPaladium');

            $dataBOM= array(
                'idSubSPK'   => $idSubSPK,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

            $this->mdl->insertData('bommassal',$dataBOM);

             $idMaterial = $this->input->post('kodeMaterial');
            $idUser=$this->session->userdata['logged_in']['iduser'];
            $jmlbutuh = $this->input->post('beratEmasMurni');

            $idm = explode(",",$idMaterial);
            $dataBOM= array(
                'idSubSPK'   => $idSubSPK,
                'idMaterial' => $idm[0],
                'jumlah'     => $jmlbutuh
                );
        
            $this->mdl->insertData('bommassal',$dataBOM);

            $message = "BOM berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMMassal/".$idSubSPK)."';</script>";

        }

        

    }

    public function createEmasRosegold() {

        $idKloter = $this->input->post('idKloter');

        if(strlen($idKloter) > 0) {

            $data['material'] = $this->mdl->findNamaMaterial('Alloy Merah');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratAlloy');



            $dataBOM= array(
                'idKloter'   => $idKloter,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

            $this->mdl->insertData('bomtempahan',$dataBOM);
            

             $idMaterial = $this->input->post('kodeMaterial');
            $idUser=$this->session->userdata['logged_in']['iduser'];
            $jmlbutuh = $this->input->post('beratEmasMurni');

            $idm = explode(",",$idMaterial);
            $dataBOM= array(
                'idKloter'   => $idKloter,
                'idMaterial' => $idm[0],
                'jumlah'     => $jmlbutuh
                );
        
            
            $this->mdl->insertData('bomtempahan',$dataBOM);

            $message = "BOM berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";

        } else {

            $idSubSPK = $this->input->post('idSubSPK');

            $data['material'] = $this->mdl->findNamaMaterial('Alloy Merah');
            $idMaterial = $data['material'][0]->idMaterial;
            $jmlbutuh = $this->input->post('beratAlloy');

            $dataBOM= array(
                'idSubSPK'   => $idSubSPK,
                'idMaterial' => $idMaterial,
                'jumlah'     => $jmlbutuh
            );

        


            $this->mdl->insertData('bommassal',$dataBOM);

             $idMaterial = $this->input->post('kodeMaterial');
            $idUser=$this->session->userdata['logged_in']['iduser'];
            $jmlbutuh = $this->input->post('beratEmasMurni');

            $idm = explode(",",$idMaterial);
            $dataBOM= array(
                'idSubSPK'   => $idSubSPK,
                'idMaterial' => $idm[0],
                'jumlah'     => $jmlbutuh
                );
        
            $this->mdl->insertData('bommassal',$dataBOM);

            $message = "BOM berhasil dibuat";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMMassal/".$idSubSPK)."';</script>";

        }

        

    }

    public function tambahBOMTempahan() {

        $idKloter = $this->input->post('idKloter');

        $idMaterial = $this->input->post('kodeMaterial');
        $idUser=$this->session->userdata['logged_in']['iduser'];
        $jmlbutuh = $this->input->post('berat');

        $idm = explode(",",$idMaterial);
        $dataBOM= array(
            'idKloter'   => $idKloter,
            'idMaterial' => $idm[0],
            'jumlah'     => $jmlbutuh
            );
    
        
        $this->mdl->insertData('bomtempahan',$dataBOM);
        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";

    }

    public function createBOMMassalTurun() {

        $idSubSPK = $this->input->post('idSubSPK');

        $data['material'] = $this->mdl->findNamaMaterial('Alloy Kuning');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratAlloy');

        $dataBOM1= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh,
        );
        
    
    
        $data['material'] = $this->mdl->findNamaMaterial('Tembaga');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratTembaga');
        

        $dataBOM2= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh,
        );
        
    
    
        $data['material'] = $this->mdl->findNamaMaterial('Perak');
        $idMaterial = $data['material'][0]->idMaterial;
        $jmlbutuh = $this->input->post('beratPerak');
        

        $dataBOM3= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idMaterial,
            'jumlah'     => $jmlbutuh
            );
            


        $idMaterial = $this->input->post('kodeMaterial');
        $idm = explode(",",$idMaterial);

        
        $jmlbutuh = $this->input->post('beratEmasMurni');
        $data = array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idm[0],
            'jumlah'     => $jmlbutuh
        );


        $this->mdl->insertData('bommassal',$dataBOM1);
        $this->mdl->insertData('bommassal',$dataBOM2);
        $this->mdl->insertData('bommassal',$dataBOM3);
        $this->mdl->insertData('bommassal',$data);

        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createbommassal/".$idSubSPK)."';</script>";

    }

    public function createBOMMassalNaik() {
        $idMaterial = $this->input->post('kodeMaterial');
        $idMaterial2 = $this->input->post('kodeMaterial2');



        $idSubSPK = $this->input->post('idSubSPK');

        $idm = explode(",",$idMaterial);
        $idm2 = explode(",",$idMaterial2);


        $brt = $this->input->post('brt');
        $brt2 = $this->input->post('brt2');

        //$idUser=$this->session->userdata['logged_in']['iduser'];
        
        $dataBOM= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idm[0],
            'jumlah'     => $brt
        );
        
        //print_r($dataBOM);

        $this->mdl->insertData('bommassal',$dataBOM);

        $dataBOM2= array(
            'idSubSPK'   => $idSubSPK,
            'idMaterial' => $idm2[0],
            'jumlah'     => $brt2
        );

        //print_r($dataBOM2);exit();
        
        $this->mdl->insertData('bommassal',$dataBOM2);

        $message = "BOM berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/createbommassal/".$idSubSPK)."';</script>";
    }

    

    public function tambahPergerakan() {
        $tipePergerakan=$this->input->post('tipePergerakan');
        $jenisProduksi=$this->input->post('jenisProduksi');
        $idUser=$this->input->post('idUser');
        // print_r($idUser);exit();
        
        if ($tipePergerakan=='Beli Material' || $tipePergerakan=='Transfer Material') {
            $data['materialDasar']=$this->mdl->getMaterial();
            $data['produk']=$this->mdl->getMovement();
            $data['produkJadi']=$this->mdl->getProduk();

        } else if ($tipePergerakan=='Balik Abu') {
            

            if ($jenisProduksi=="tempahan") {
                $data['listSPK'] = $this->mdl->getSPKTempahan($idUser);
            } else if ($jenisProduksi=="massal") {
                $data['listSPK'] = $this->mdl->getListSPKMassal($idUser);
            }
            $data['user'] = $this->mdl->findPegawai($idUser);

        } else {
            $data['materialDasar']=$this->mdl->getMaterial();
            $data['produk']=$this->mdl->getMovement();
            $data['produkJadi']=$this->mdl->getProduk();
        }
        // $idUser=$this->session->userdata['logged_in']['iduser'];
        $data['stok'] = $this->mdl->getStokPerId($idUser);
        $data['pegawai'] = $this->mdl->listPegawai();
        $data['user'] = $this->mdl->findPegawai($idUser);
        $data['pergerakan'] = array(
            'tipePergerakan'    => $tipePergerakan,
            'jenisProduksi'          => $jenisProduksi
        );

        $this->load->view('user/createInventory',$data);
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
                    'idPIC'         => $this->input->post('idUser'),
                    'tipeBarang'    => $this->input->post('tipeBarang'),
                    'tipePergerakan'=> $this->input->post('tipePergerakan'),
                    'kodeBarang'    => $this->input->post('kodeBarang'),
                    'jumlah'        => $this->input->post('jumlah'),
                    'satuan'        => $this->input->post('satuan'),
                    'jenisPergerakanBarang'  => $this->input->post('jenisPergerakanBarang'),
                    'hargaBeli'     => $hargaBeli,
                    'tanggal' => date("Y-m-d H:i:s"),
                    'keterangan'        => $this->input->post('keterangan'),
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

    public function createInventoryTransfer() {
        $this->form_validation->set_rules('kodeBarang','Kode Barang', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['produk']=$this->mdl->getMovement();
            $data['produkJadi']=$this->mdl->getProduk();
            $data['materialDasar']=$this->mdl->getMaterial();
            $this->load->view('user/createInventory',$data);
        }
        else {
            $dataInventory = array(
                'idPIC'         => $this->session->userdata['logged_in']['iduser'],
                'tipeBarang'    => 'Material Dasar',
                'tipePergerakan'=> $this->input->post('tipePergerakan'),
                'kodeBarang'    => $this->input->post('kodeBarang'),
                'jumlah'        => $this->input->post('jumlah'),
                'satuan'        => $this->input->post('satuan'),
                'jenisPergerakanBarang'  => 'OUT',
                'hargaBeli'     => 0,
                'tanggal' => date("Y-m-d H:i:s"),
                'keterangan'        => $this->input->post('keterangan'),
                
            );
            $this->mdl->insertData('stokbarang',$dataInventory);

            $dataInventory = array(
                'idPIC'         => $this->input->post('idPIC'),
                'tipeBarang'    => 'Material Dasar',
                'tipePergerakan'=> $this->input->post('tipePergerakan'),
                'kodeBarang'    => $this->input->post('kodeBarang'),
                'jumlah'        => $this->input->post('jumlah'),
                'satuan'        => $this->input->post('satuan'),
                'jenisPergerakanBarang'  => 'IN',
                'hargaBeli'     => 0,
                'tanggal' => date("Y-m-d H:i:s"),
                'statusTransfer' => 'Pending',
                'keterangan'        => $this->input->post('keterangan'),
            );
            $this->mdl->insertData('stokbarang',$dataInventory);

            redirect('user/stokBarang');   
        }
    }


    public function editInventory($id) {
        $data['stokBarang'] = $this->mdl->findStok($id);

        $dataInventory = array(
            'jumlah'        => $this->input->post('jumlah')
        );
        $this->mdl->updateData('idStok',$id,'stokbarang',$dataInventory);\
        redirect('user/stokBarang');   
    }
    /*public function editInventory($id) {
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
    }*/
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

    public function batalDesain($nomorFaktur){
        $this->mdl->deleteData('nomorPO',$nomorFaktur,'potempahan');
        $this->mdl->deleteData('nomorFaktur',$nomorFaktur,'spk');
        
        $produk=$this->mdl->findprodukByPO($nomorFaktur);
        $idProduk=$produk[0]->idProduk;
        $this->mdl->deleteData('idProduk',$idproduk,'produk');

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-danger">Purchase Order dan SPK dengan nomor <b>'.$nomorFaktur.'</b> telah dihapus</div>');
        redirect('user/spk');
    }

    public function setujuDesain($nomorFaktur){
        
        $data = array(
            'tanggalApprovalDesain'    => date("Y-m-d H:i:s"),
            'statusDesain' => 'Disetujui',
            'statusPrint' => 'Proses Print',
        );

        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);

        $spk = $this->mdl->findSPK($nomorFaktur);
        $idSPK = $spk[0]->idSPK;

        // $data = array(
        //         'idSPK' => $idSPK,
        //         'idAktivitas' => 1004,
        //         'statusWork' => 'Belum ada PIC',
        //         'statusSPK' => 'Active',
        // );

        // $this->mdl->insertData('factproduction',$data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil mensetujui design SPK no Faktur <b>'.$nomorFaktur.'</b></div>');
        redirect('user/spk');
    }

    public function selesaiPrint($nomorFaktur){

        $spk = $this->mdl->findSPK($nomorFaktur);
        
        $data = array(

            'statusPrint' => 'Sudah',
        );

        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);

        $data = array(
                'idSPK' => $spk[0]->idSPK,
                'idAktivitas' => 1003,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
        );

        $this->mdl->insertData('factproduction',$data);

        redirect('user/kanban');

    }

    public function tidakSetujuDesain($nomorFaktur){
        
        $data = array(

            'statusDesain' => 'Ditolak',
        );

        $this->mdl->updateData('nomorFaktur',$nomorFaktur,'spk',$data);

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
        
        $spk=$this->mdl->findSPKTempahanbyPO($nomorPO);
        $produk=$this->mdl->findprodukByPO($nomorPO);
        $idProduk=$produk[0]->idProduk;
        $idSPK=$produk[0]->idSPK;
        $this->mdl->deleteData('idProduk',$idproduk,'produk');
        $this->mdl->deleteData('nomorPO',$nomorPO,'potempahan');
        $this->mdl->deleteData('nomorPO',$nomorPO,'spk');
        $this->mdl->deleteData('idSPK',$idSPK,'factproduction');
        $this->mdl->deleteData('idSPK',$idSPK,'kloter');
         $this->mdl->deleteData('nomorPO',$nomorPO,'poberlian');

        redirect('user/purchaseOrder');
    }

    public function hapusPOMassal($nomorPO){
        $produk=$this->mdl->findprodukMassal($nomorPO);
        $idProduk=$produk[0]->idProduk;
        $idSPK=$produk[0]->idSPK;
        $this->mdl->deleteData('idProduk',$idproduk,'produk');
        $this->mdl->deleteData('nomorPO',$nomorPO,'pomasal');
         $this->mdl->deleteData('nomorPO',$nomorPO,'produkpo');
        $this->mdl->deleteData('nomorPO',$nomorPO,'spk');
        $this->mdl->deleteData('idSPK',$idSPK,'factproduction2');
        redirect('user/listPOMasal');
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
        $data['poberlian']=$this->mdl->getBerlian($nomorPO); 
        $this->load->view('user/invoicePO',$data);
    }

    

    public function trackPO() {
        $data['listPO'] = $this->mdl->listPO();
        $data['listCustomer'] = $this->mdl->listCustomer();
        $data['listPOMassal'] = $this->mdl->listPOMasal();
        $this->load->view('user/trackPO',$data);
    }

    public function detailTracking() {
        // print_r($this->input->post());exit();
        $nomorPO = $this->input->post('nomorPO');
        $idCustomer = $this->input->post('idCustomer');
        $jenisProduksi = $this->input->post('jenisProduksi');

        if ($jenisProduksi=='Tempahan') {

        } elseif ($jenisProduksi=='Massal') {
            $data['dataPO']=$this->mdl->getPOMassal($nomorPO);
            if(count($data['dataPO']>0)){
                $data['aktivitas']  = $this->mdl->trackPOMassal($nomorPO);
                $data['dataSPK'] = $this->mdl->findSPKMassalbyPO($nomorPO);
                $data['subSPK']  = $this->mdl->jumlahSubSPK($nomorPO);
                $this->load->view('user/detailTrackPOMassal', $data);
            } else {
                $message = "Tidak ada nomor Purchase Order yang sesuai";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='".base_url("user/trackPO")."';</script>";
            }
        }

            // $data['dataUmum']  = $this->mdl->dataUmum($nomorPO);
            // $jmlData=count($data['dataUmum']);
            // if($jmlData>0){
            //     $data['dataAdministrasi']  = $this->mdl->trackAdministrasi($nomorPO);
            //     $data['dataPO']  = $this->mdl->trackPO($nomorPO);
            //     $this->load->view('user/detailTracking', $data);
            // } else {
            //     $message = "Tidak ada nomor Purchase Order yang sesuai";
            //     echo "<script type='text/javascript'>alert('$message');
            //     window.location.href='".base_url("user/trackPO")."';</script>";
            // }
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
        $data['poberlian']=$this->mdl->getBerlian($nomorPO); 
        $this->load->view('user/printInvoice',$data);
    }

    

    public function printSPKTempahan($nomorFaktur){
        $data['dataPO'] = $this->mdl->findSPKTempahan($nomorFaktur);
        $data['poberlian']=$this->mdl->getBerlian($nomorFaktur); 
        // print_r($data);exit();
        $this->load->view('user/printSPKTempahan',$data);
    }

    public function printSPKMassal($nomorFaktur){
        $data['dataPO'] = $this->mdl->findSPKMassal($nomorFaktur);
        $data['produkPO'] = $this->mdl->getProdukPO($nomorFaktur);
        $this->load->view('user/printSPKMassal',$data);
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
            $data['pegawai'] = $this->mdl->listPegawai();
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


                //Query Tambah SPK
                $sj='Belum Ada';
                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataSPK = array(
                    'nomorFaktur'           => $this->input->post('nomorPO'),
                    'nomorPO'               => $this->input->post('nomorPO'),
                    'idCustomer'            => $idCustomer,
                    'statusJadwal'          => $sj,
                    'PICJadwal'             => $iduser,
                );
                $this->mdl->insertData('spkservice',$dataSPK); 

                $data['pegawai'] = $this->mdl->listPegawai();
                $nomorPO=$this->input->post('nomorPO');
                $data['dataPO'] = $this->mdl->findPOService($nomorPO);
                $data['ds'] = $this->mdl->getDetailSalesService2($nomorPO);
                $this->load->view('user/invoicePOService',$data);
        }
    }

    public function tambahJadwalService($nomorFaktur)
    {
        $data['dataSPK']   = $this->mdl->findSPKService($nomorFaktur);
        $data['aktivitas'] = $this->mdl->listAktivitasService();
        $this->load->view('user/spkJadwalService', $data);
    }

    public function uploadJadwalService()
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
            $data = array(
                'idSPK' => $this->input->post('idSPK'),
                'idAktivitas' => $idAktivitas[$b],
                'startDate' => $startDate[$b],
                'endDate' => $endDate[$b]
            );
            //$this->mdl->tambahRencana($dataJadwal);
            $this->mdl->insertData('rencanaproduksiservice',$data);
            
        }
        
        $idSPK = $this->input->post('idSPK');
        
        $data = array(
            'statusJadwal' => 'Sudah Ada',
            'tanggalApprovalJadwal' => date("Y-m-d H:i:s"),
            'durasi'    => $this->input->post('durasi')
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkService', $data);

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
        
        //$this->mdl->prosesJadwal($nomorFaktur);
        
        $message = "Penjadwalan telah berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/listSPKService") . "';</script>";
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
        $data['cekjadwal'] = $this->mdl->cekjadwalservice();
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
                'beratKotor' => $this->input->post('beratKotor'),
                'beratKaret' => $this->input->post('beratKaret'),
                'tgl_kloter' => date("Y-m-d H:i:s"),
            );

            $this->mdl->insertData('kloter',$data);

            /*$idSPK = $idspk[$i];

            $data = array(
                'idSPK' => $idSPK,
                'idAktivitas' => 1005,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
            );

            $this->mdl->insertData('factproduction',$data);*/

        }

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil membuat kloter SPK</div>');
        redirect('user/kanban');
        

    }

    public function setToleransi() {
        $idKloter = $this->input->post('idKloter');
        $spk = $this->mdl->getIsiKloter($idKloter);

        for ($i=0; $i <count($spk) ; $i++) { 
            $data = array(
                'kadarWenny' => $this->input->post('kadar')
            );
            $idSPK = $spk[$i]->idSPK;
            $this->mdl->updateData('idSPK',$idSPK, 'spk',$data);
        }

        $message = "Berhasil Konfirmasi Kadar";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMTempahan/".$idKloter)."';</script>";

    }

    public function setToleransi2() {
        $idSPK = $this->input->post('idSPK');
        $idSubSPK = $this->input->post('idSubSPK');
        $data = array(
                'kadarWenny' => $this->input->post('kadar')

            );
        $this->mdl->updateData('idSPK',$idSPK, 'spkmasal',$data);

        $message = "Berhasil Konfirmasi Kadar";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/createBOMMassal/".$idSubSPK)."';</script>";

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

         if ($idAktivitas == 1006) {

             $isi = $this->mdl->getBOMTempahan($idKloter);

             for ($i=0; $i < count($isi) ; $i++) { 

                $userx = $this->mdl->getUserByJabatan('Admin Produksi');
                $idg = $userx[0]->idUser;

                $idUser=$this->session->userdata['logged_in']['iduser'];

                $data = array(
                    'idPIC' => $idUser,
                    'tipeBarang' => "Material Dasar",
                    'kodeBarang' => $isi[$i]->kodeMaterial,
                    'jumlah' => $isi[$i]->jumlah,
                    'jenisPergerakanBarang' => "OUT",
                    'satuan' => 'gr',
                    'tipePergerakan' => 'Produksi',
                    'tanggal' => date("Y-m-d H:i:s")
                );



                $this->mdl->insertData('stokbarang', $data);

                $data = array(
                    'status' => 'Disetujui'
                );

                $this->mdl->updateData('idBOM',$isi[$i]->idBOM,'bomtempahan',$data);
                 
             }

             $idSPK = $kloter[0]->idSPK;
             $spk = $this->mdl->findSPK2($idSPK);

            $kadarWenny = $spk[0]->kadarWenny;
            $namaBahan = "Balik Bahan ".$kadarWenny."%";

            $t = $this->mdl->cekMaterial('Emas',$kadarWenny);
            $d = count($t);

            if($d == 0) {

                $f = $this->mdl->getLastKodeMaterial();
                $km = $f[0]->kodeMaterial+1;

                $dataMaterial = array(
                    'kodeMaterial'    => $km,
                    'namaMaterial'    => $namaBahan,
                    'satuan'          => 'gr',
                    'stokMaterial'    => 0,
                    'safetyStock'     => 0,
                    'kadar'           => $kadarWenny,
                    'asal'            => 'Balik Bahan',
                );
                
                $this->mdl->insertData('materialdasar',$dataMaterial);

            } else {

                $km = $t[0]->kodeMaterial;

            }

            $xe = $this->mdl->cekPolishDalam($idSPK,1006);
            $kembali = $xe[0]->kembali;

            $data = array(
                'idPIC' => $idUser,
                'tipeBarang' => "Material Dasar",
                'kodeBarang' => $km,
                'jumlah' => $kembali,
                'jenisPergerakanBarang' => "IN",
                'satuan' => 'gr',
                'tipePergerakan' => 'Balik Bahan',
                'tanggal' => date("Y-m-d H:i:s")
                );

            $this->mdl->insertData('stokbarang', $data);

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
        $data['pegawai'] = $this->mdl->listPegawai();
        //$data['poTerakhir'] = $this->mdl->poTerakhir();
        $data['listProduk'] = $this->mdl->listProduk();
        $data['poTerakhir'] = $this->mdl->poTerakhir3();
        $this->load->view('user/createPOPerak',$data);
    }

    public function tambahPOPerak(){
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[poperak.nomorPO]');

        if ($this->form_validation->run() == FALSE){
            $data['pegawai'] = $this->mdl->listPegawai();
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
                 $config['allowed_types']   = 'jpg|png|jpeg|gif'; 
                 $config['max_size']        = '8048';
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
                        $data['pegawai'] = $this->mdl->listPegawai();
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
        $data['produkPO'] = $this->mdl->getProdukPO($nomorPO);
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

    public function rekapEmas() {
        $data['dataRekap'] = $this->mdl->listRekapProduksi();
        $data['pegawai'] = $this->mdl->listPegawai();
        $this->load->view('user/rekapEmas',$data);
    }

    public function tambahRekapProduksi() {
        $idUser=$this->input->post('idUser');

        $jenisProduksi=$this->input->post('jenisProduksi');

        if ($jenisProduksi=="tempahan") {
            $data['listSPK'] = $this->mdl->getSPKTempahan($idUser);
        } else if ($jenisProduksi=="massal") {
            $data['listSPK'] = $this->mdl->getListSPKMassal($idUser);
        }
        $data['user'] = $this->mdl->findPegawai($idUser);
        $data['data'] = array(
            'jenisProduksi' => $jenisProduksi,
        );

        $this->load->view('user/createRekapProduksi',$data);
    }

    public function tambahRekap() {
        $this->form_validation->set_rules('beratKembali', 'Berat Kembalian','required');
        // print_r($this->input->post());exit();
        $jenisProduksi=$this->input->post('jenisProduksi');
        $idUser=$this->input->post('idPIC');

        if ($this->form_validation->run() == FALSE){

            if ($jenisProduksi=="tempahan") {
                $data['listSPK'] = $this->mdl->getSPKTempahan($idUser);
            } else if ($jenisProduksi=="massal") {
                $data['listSPK'] = $this->mdl->getListSPKMassal($idUser);
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
                'kadar'             => $this->input->post('kadar'),
                'jenisProduksi'     => $jenisProduksi,
            );
            // $this->mdl->insertData("rekapproduksi",$dataRekap);  

            $idProd=$this->input->post('idProProd[]');
            for ($i=0; $i < count($idProd) ; $i++) { 
                $dataRekapLine = array(
                    'kodeRekapProduksi' => $kode,
                    'idProProd'         => $idProd[$i],
                );
                // $this->mdl->insertData("rekapproduksiline",$dataRekapLine); 
            }

            $namaMaterial = $this->input->post('namaMaterial').' '.$this->input->post('kadar').'%';
            

            $t = $this->mdl->cekMaterial('Emas',$this->input->post('kadar'));
            $d = count($t);

            $f = $this->mdl->getLastKodeMaterial();
            $ww = $f[0]->kodeMaterial+1;

            if($d == 0) {
                $dataMaterial = array(
                    'kodeMaterial'    => $ww,
                    'namaMaterial'    => $namaMaterial,
                    'satuan'          => 'gr',
                    'stokMaterial'    => $this->input->post('beratKembali'),
                    'safetyStock'     => 0,
                    'kadar'           => $this->input->post('kadar'),
                    'asal'            => 'Balik Abu',
                );
                print_r($dataMaterial);exit();
                // $this->mdl->insertData('materialdasar',$dataMaterial);

                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Balik Abu',
                    'kodeBarang'    => $ww,
                    'satuan'          => 'gr',
                    'jumlah'        => $this->input->post('beratKembali'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory); 
            } else {
                $kode = $t[0]->kodeMaterial;
                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Balik Abu',
                    'kodeBarang'    => $kode,
                    'satuan'        => 'gr',
                    'jumlah'        => $this->input->post('beratKembali'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory); 
            }

            $message = "Rekap Produksi Telah Berhasil di Simpan";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/stokbarang")."';</script>";
        }
    }

    public function lihatRekap($jenisProduksi,$kodeRekapProduksi) {

        if ($jenisProduksi=="tempahan") {
            $data['rekap'] = $this->mdl->findRekap($kodeRekapProduksi);
        } else if ($jenisProduksi=="massal") {
            $data['rekap'] = $this->mdl->findRekapMassal($kodeRekapProduksi);
        }
        
        $this->load->view('user/viewRekapProduksi',$data);
    }

    public function convertTrading() {
        $idCustomer=$this->input->post('idCustomer');
        redirect('user/createPOTrading/'.$idCustomer);
    }

    public function createPOTrading($idCustomer) {
        $this->form_validation->set_rules('idCustomer', 'idCustomer','required');
        //$this->form_validation->set_message('is_unique','The %s is already taken');
        //$this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseordertrading.nomorPO]');
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
            $data['pegawai'] = $this->mdl->listPegawai();
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

                $data['poTerakhir'] = $this->mdl->poTerakhirTrading();
                if(!$data['poTerakhir']) { $nomorPO=1;} else {
                    $nomorPO=$data['poTerakhir'][0]->nomorPO+1;
                }
                
                $dataPOTrading= array(
                            'nomorPO'           => $nomorPO,
                            'idCustomer'        => $idCustomer,
                            'idSalesPerson'     => $this->input->post('idSalesPerson'),
                            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
                            'tipeOrder'         => 'trading',
                        );
                //print_r($dataPOService);exit();
                $this->mdl->insertData('purchaseordertrading',$dataPOTrading);

                $data['PO'] = $this->mdl->findPOTrading($nomorPO);
                $idPO = $data['PO'][0]->idPO;

                redirect('user/createPOTradingDetail/'.$idPO);
        }
    }

    public function createPOTradingDetail($idPO) {
        $this->form_validation->set_message('is_unique','The %s is already taken');
        $this->form_validation->set_rules('nomorPO', 'Nomor PO' ,'is_unique[purchaseordertrading.nomorPO]');
        $data['produk'] = $this->mdl->listProdukTrading();
        $data['poTerakhir'] = $this->mdl->poTerakhirTrading();
        if(!$data['poTerakhir']) { $nomorPO=1;} else {
            $nomorPO=$data['poTerakhir'][0]->nomorPO+1;
        }
        if ($this->form_validation->run() == FALSE){
            //$data['BOMProduk'];
            $data['idPO'] = $idPO;
            $data['PO'] = $this->mdl->findPOTradingbyID($idPO);
            $data['detailPO'] = $this->mdl->findPOTradingDetail($idPO);
            $data['pegawai'] = $this->mdl->listPegawai();
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

    public function hapusPOTrading($idPO) {
        $this->mdl->deleteData('idPO', $idPO, 'purchaseordertrading');
        $this->mdl->deleteData('idPO', $idPO, 'detailpurchaseordertrading');
        redirect('user/listPOTrading');
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
        $string = str_replace('.00', '', $string); // Replaces all spaces with hyphens.
        $string = str_replace(' ', '', $string);

        return preg_replace('/[^0-9]/', '', $string); // Removes special chars.
    }


    public function tambahPO(){
        $poTerakhir = $this->mdl->poTerakhir();
        $lastPO = $poTerakhir[0]->nomorPO;
        $nomorPO = $lastPO+1;
        
        $kd=$this->input->post('kodeProduk');
        $kodeProduk=$kd.'-'.$nomorPO;
        $kode = $this->generateRandomString();
        //jika ada gambar;
        if($_FILES['userfile']['name'] != NULL){
            //form sumbit dengan gambar diisi
            //load uploading file library
             $config['upload_path']     = './uploads/gambarProduk/'; 
             $config['allowed_types']   = 'jpg|jpeg|png'; 
             $config['max_size']        = '8048';
             $config['file_name']       = $kode."-cust.jpg";
             $config['overwrite']        = TRUE;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( !$this->upload->do_upload()){
                $data['error'] = array(
                    'error' => $this->upload->display_errors()
                );
                $message = "Gambar tidak mendukung";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
                $idCustomer = $this->input->post('idCustomer');
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
                $data['pegawai'] = $this->mdl->listPegawai();
                $data['poTerakhir'] = $this->mdl->poTerakhir();
                $data['material']=$this->mdl->getMaterialBerlian(); 
                $data['zirkon']=$this->mdl->getMaterialZirkon();
                $this->load->view('user/createPurchaseOrder',$data);
            } else {
                $gambar = $this->upload->data(); 
            }
        }

        // Query input new customer
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

        //var pekerjaan tambahan
        if(!$this->input->post('pekerjaanTambahan[]')) {
            $pekerjaanTambahan = "Tidak Ada";
        } else {
            $pekerjaanTambahan = implode(',',$this->input->post('pekerjaanTambahan[]'));
        }

        //var nama produk
        if ($this->input->post('namaBatu')==NULL) {
            $namaProduk=$this->input->post('namaCustomer').'-'.$nomorPO;
        } else {
            $namaProduk=$this->input->post('namaCustomer').'-'.$nomorPO.'-'.$this->input->post('namaBatu');
        };

        //var jenis produk
        if ($this->input->post('jenisProduk')=='Lain Lain') {
            $jenisProduk=$this->input->post('jenisProdukDetail');
        } else {
            $jenisProduk=$this->input->post('jenisProduk');
        }

        //var ukuran jari
        if ($this->input->post('jenisProduk')=='Cincin'||$this->input->post('jenisProduk')=='Cincin Kawin') {
            $ukuranJari=$this->input->post('ukuranJari');
        } else if ($this->input->post('jenisProduk')=='Gelang') {
            $ukuranJari=$this->input->post('diameter');
        } else {
            $ukuranJari=$this->input->post('ukuran');
        };

        //method cleaning qurrency input
        $hargaBahan = $this->clean($this->input->post('hargaBahan'));
        $hargaDatangEmas = $this->clean($this->input->post('hargaDatangEmas'));
        $upahPasangBerlian = $this->clean($this->input->post('upahPasangBerlian'));
        $hargaBatuZirkon = $this->clean($this->input->post('hargaBatuZirkon'));
        $hargaKrumWarna = $this->clean($this->input->post('hargaKrumWarna'));
        $upah = $this->clean($this->input->post('upah'));
        $budget = $this->clean($this->input->post('budget'));
        $panjar = $this->clean($this->input->post('panjar'));

        $hargaEnamel = $this->clean($this->input->post('hargaEnamel'));
        $hargaSlap = $this->clean($this->input->post('hargaSlap'));
        $hargaKombinasi = $this->clean($this->input->post('hargaKombinasi'));
        $hargaLaserHuruf = $this->clean($this->input->post('hargaLaserHuruf'));
        $hargaKodeCap = $this->clean($this->input->post('hargaKodeCap'));
                 
        //query insert produk
        $dataProduk = array(
            'kodeProduk'        => $kodeProduk,
            'namaProduk'        => $namaProduk,
            'jenisProduk'       => $jenisProduk,
            'kategori'          => 'Tempahan',
            'statusKatalog'     => 'Tidak Tampil',
            'kodeGambar'        => $kode,
        );
        $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);

        $harga=$this->input->post('harga');
        $qty=$this->input->post('kuantitas');
        $totalHarga=0;

        //var datang emas
        $datangEmas=$this->input->post('datangEmas');
        $idStokBarang = '';

        if ($datangEmas>0) {
            $kadarx = $this->input->post('kadarDatangEmas');
            $kat = 'Emas';

            $t = $this->mdl->cekMaterial('Emas',$kadarx);
            $d = count($t);

            if($d == 0) {

                $f = $this->mdl->getLastKodeMaterial();
                $ww = $f[0]->kodeMaterial+1;

                $dataMaterial = array(
                    'kodeMaterial'    => $ww,
                    'namaMaterial'    => 'Emas Kuning '.$this->input->post('kadarDatangEmas').'%',
                    'satuan'          => 'gr',
                    
                    'safetyStock'     => 0,
                    'kadar'     => $this->input->post('kadarDatangEmas'),
                    'asal'            => 'Datang Emas',
                );
                //print_r($dataMaterial);exit();
                $this->mdl->insertData('materialdasar',$dataMaterial);

                $iduser = ($this->session->userdata['logged_in']['iduser']);
                //Stok Datang Emas
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Bahan Datang',
                    'satuan'          => 'gr',
                    'kodeBarang'    => $ww,
                    'jumlah'        => $this->input->post('datangEmas'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'nomorPO'   => $nomorPO,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory); 

            } else {

                $iduser = ($this->session->userdata['logged_in']['iduser']);
                //Stok Datang Emas
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Bahan Datang',
                    'satuan'          => 'gr',
                    'kodeBarang'    => $t[0]->kodeMaterial,
                    'jumlah'        => $this->input->post('datangEmas'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'nomorPO'   => $nomorPO,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory);  
            } 
        }
        
        //Query Tambah PO
        $jenisCustomer=$this->input->post('jenisCustomer');
        
        $dataPO = array(
            'nomorPO'           => $nomorPO,
            'idProduk'          => $idProduk,
            'idCustomer'        => $idCustomer,
            'idSalesPerson'     => $this->input->post('idSalesPerson'),
            'idStokBarang'      => $idStokBarang,
            'tanggalMasuk'      => $this->input->post('tanggalMasuk'),
            'tanggalEstimasiPenyelesaian'    => $this->input->post('tanggalEstimasiPenyelesaian'),
            'jenisCustomer'     => $jenisCustomer,
            'bahan'             => $this->input->post('bahan'),
            'kadarBahan'        => $this->input->post('kadarBahan'),
            'hargaBahan'        => $hargaBahan,
            'persenBiaya'       => $this->input->post('persenBiaya'),
            'kuantitas'         => $this->input->post('kuantitas'),
            'ukuranJari'        => $ukuranJari,
            'estimasi'   => $this->input->post('estimasi'),
            'beratAkhir'        => $this->input->post('beratAkhir'),
            'susut'             => $this->input->post('susut'),
            'datangEmas'        => $this->input->post('datangEmas'),
            'hargaDatangEmas'   => $hargaDatangEmas,
            'kadarDatangEmas'   => $this->input->post('kadarDatangEmas'),
            'datangBerlian'     => $this->input->post('datangBerlian'),
            'jumlahDatangBerlian' => $this->input->post('jumlahDatangBerlian'),
            'upahPasangBerlian' => $upahPasangBerlian,
            'namaBatu'          => $this->input->post('namaBatu'),
            'beratBatu'         => $this->input->post('beratBatu'),
            'batuTerhadapGoresan' => $this->input->post('batuTerhadapGoresan'),
            'batuTerhadapPukulan' => $this->input->post('batuTerhadapPukulan'),
            'batuTerhadapKruman'  => $this->input->post('batuTerhadapKruman'),
            'keadaanBatuTengah'   => $this->input->post('keadaanBatuTengah'),
            'keteranganBatu'   => $this->input->post('ketBatu'),
            'pekerjaanTambahan' => $pekerjaanTambahan,
            'keteranganEnamel'  => $this->input->post('keteranganEnamel'),
            'keteranganSlap'  => $this->input->post('keteranganSlap'),
            'keteranganKombinasi'  => $this->input->post('keteranganKombinasi'),
            'keteranganLaserHuruf'  => $this->input->post('keteranganLaserHuruf'),
            'keteranganKodeCap'  => $this->input->post('keteranganKodeCap'),
            'hargaEnamel'       => $hargaEnamel,
            'hargaSlap'         => $hargaSlap,
            'hargaKombinasi'    => $hargaKombinasi,
            'hargaLaserHuruf'   => $hargaLaserHuruf,
            'hargaKodeCap'      => $hargaKodeCap,
            'tipeIkatan'        => $this->input->post('tipeIkatan'),
            'metode'            => $this->input->post('metode'),
            'tipeCustomer'      => $this->input->post('tipeCustomer'),
            'model'             => $this->input->post('model'),
            'krumWarna'         => $this->input->post('krumWarna'),
            'hargaKrumWarna'    => $hargaKrumWarna,
            'keteranganKrum'    => $this->input->post('keteranganKrum'),
            'upah'              => $upah,
            'budget'            => $budget,
            'panjar'            => $panjar,
            'tipeOrder'         => 'tempahan',
            // 'berlian'           => $this->input->post('berlian'),
            // 'beratBerlian'      => $this->input->post('beratBerlian'),
            // 'hargaBerlian'      => $hargaBerlian,
            // 'batuZirkon'        => $this->input->post('batuZirkon'),
            // 'jumlahBatuZirkon'  => $this->input->post('jumlahBatuZirkon'),
            // 'hargaBatuZirkon'   => $hargaBatuZirkon,
        );
        $this->mdl->tambahPO($dataPO); 

        $namaBerlian=$this->input->post('namaBerlian[]');
        $harga=$this->input->post('harga[]');
        for ($i=0; $i < count($namaBerlian) ; $i++) { 
            $dataPO = array(
                'nomorPO'       => $nomorPO,
                'jumlah'        => 1,
                'namaBerlian'   => $namaBerlian[$i],
                'harga'         => $harga[$i],
                'jenis'         => 'Berlian',
            );
            $this->mdl->insertData('poberlian',$dataPO);  
        }   

        $zirkon=$this->input->post('zirkon[]');
        $hargaZirkon=$this->input->post('hargaBatuZirkon[]');
        for ($i=0; $i < count($zirkon) ; $i++) { 
            $dataPO = array(
                'nomorPO'       => $nomorPO,
                'jumlah'        => 1,
                'namaBerlian'   => $zirkon[$i],
                'harga'         => $hargaZirkon[$i],
                'jenis'         => 'Zirkon',
            );
            $this->mdl->insertData('poberlian',$dataPO);  
        }   
                 

        //Query Tambah SPK
        $sd='Proses Desain';
        $sb='Belum Ada';
        $sj='Belum Ada';
        $sp='Belum Disetujui';
        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $dataSPK = array(
            'nomorFaktur'           => $nomorPO,
            'nomorPO'               => $nomorPO,
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
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        $data['poberlian']=$this->mdl->getBerlian($nomorPO); 
        $this->load->view('user/invoicePO',$data);
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

    public function printInvoiceAkhirTempahan($nomorPO){
        $data['dataPO'] = $this->mdl->findPO($nomorPO);
        $data['poberlian']=$this->mdl->getBerlian($nomorPO);
        $data['SPK']=$this->mdl->findSPKTempahanbyPO($nomorPO); 
        $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;}  
        $this->load->view('user/printInvoiceTempahan',$data);
    }

    public function createInvoiceAkhirPOMassal() {
        $idCustomer=$this->input->post('idCustomer');
        $data['PO'] = $this->mdl->listPOMassalByCustomer($idCustomer);
        $this->load->view('user/invoiceAkhirPOMassal',$data);
    }

    public function detailInvoiceAkhirPOMassal() {
        $nomorPO = implode(',',$this->input->post('nomorPO[]'));
        $data['PO'] = $this->mdl->listPOMassal($nomorPO);
        $this->load->view('user/createInvoiceAkhirPOMassal',$data);
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

        $jenisMassal        = $this->input->post('jenisMassal');
        $po = implode(',',$this->input->post('nomorPO[]'));
        $tipeInvoice = 'pertokoan';
        $headerInvoice = array(
                'jenisInvoice'          => 'massal',
                'tipeInvoice'           => 'pertokoan',
                'nomorPO'               => $po,
                'total'                 => $this->input->post('beratTotal'),
                'datangEmas'            => $this->input->post('datangEmas'),
        );
        
        $idHeader=$this->mdl->insertDataGetLast('invoiceheader',$headerInvoice);

        $nomorPO=$this->input->post('nomorPO[]');
        $kadar=$this->input->post('kadar[]');
        $upah=$this->input->post('upah[]');
        $kuantitas=$this->input->post('kuantitas[]');
        $berat=$this->input->post('berat[]');

        for ($i=0; $i < count($nomorPO) ; $i++) { 
            
            $dataInvoice = array(
                'idHeader'       => $idHeader,
                'nomorPO'               => $nomorPO[$i],
                'kadar'            => $kadar[$i],
                'upah'               => $upah[$i],
                'kuantitas'            => $kuantitas[$i],
                'berat'            => $berat[$i],
            );
            
            $this->mdl->insertData('invoicemassal',$dataInvoice);
        }
        redirect('user/listInvoiceMassal');
        
        //redirect('user/printInvoiceTempahan/'.$jenisTempahan);
    }

    public function printInvoiceMassal($idHeader){
        $po=$this->mdl->findPOFromInvoice($idHeader);
        $nomorPO=$po[0]->nomorPO;
        $data['dataPO'] = $this->mdl->listPOMassal($nomorPO);
        $this->load->view('user/printInvoiceAkhirMassal',$data);
        
    }

    public function pindah($idProduk, $kuantitas, $idProProd, $idSPK,$nomorFaktur) {
        
    
        $spk = $this->mdl->findSPK6($idSPK);
        $idProduk = $spk[0]->idProduk;
        $prod = $this->mdl->findProduk6($idProduk); 
        $kodeProduk = $prod[0]->kodeProduk;
        $stok = (int)$prod[0]->stok;
        $newstok = $stok + (int)$kuantitas;

        $proses = $this->mdl->getProsesDetail($idProProd);

        $iduser = ($this->session->userdata['logged_in']['iduser']);
        $berat = $proses[0]->berat;

        $data = array(
            'idPIC' => $iduser,
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $idProduk,
            'jumlah' => $berat,
            'satuan' => 'gr',
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'OUT',
            'tipePergerakan' => 'Transfer'
                
        );

        
        $this->mdl->insertData('stokbarang', $data);

        $userx = $this->mdl->getUserByJabatan('Staff Keuangan');
        $idg = $userx[0]->idUser;

        $data = array(
            'idPIC' => $idg,
            'tipeBarang' => 'Produk Jadi',
            'kodeBarang' => $idProduk,
            'jumlah' => $berat,
            'satuan' => 'gr',
            'tanggal' => date("Y-m-d H:i:s"),
            'jenisPergerakanBarang' => 'IN',
            'tipePergerakan' => 'Transfer',
            'statusTransfer' => 'Pending'
                
        );

        
        $this->mdl->insertData('stokbarang', $data);

      

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

        redirect('User/kanban');

    }

    public function display($tipe,$rf)
    {
        $data['rf'] = $rf;
        if($tipe == 'massal') {

            $data['s']  = $this->mdl->getSales2();
            $data['j']  = $this->mdl->getPenjadwalan2();
            $data['sp']  = $this->mdl->getSeparasi();
            
            $data['li'] = $this->mdl->getProsesMassal1(1004);
            $data['gi'] = $this->mdl->getProsesMassal1(1005);
            $data['co'] = $this->mdl->getProsesMassal1(1006);
           

            $data['akt'] = $this->mdl->getAktivitasLanjut2();
            
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
            
            $this->load->view('user/display_massal', $data);

        } else {

            $data['s'] = $this->mdl->getSales();
            $data['j'] = $this->mdl->getPenjadwalan();
            $data['d'] = $this->mdl->getDesain();
            $data['m'] = $this->mdl->getMenunggu();
            $data['p'] = $this->mdl->getPrint();

            $data['klt'] = $this->mdl->getListKloter2();
            // print_r($data['klt']); exit();
            

            $data['li'] = $this->mdl->getLilin(1003);

            
            $data['qw'] = $this->mdl->getKloter2();
            $data['g'] = $this->mdl->getGroup();
            //$data['g2'] = $this->mdl->getGroup2();

            $data['k1'] = $this->mdl->getKloter(1003);

            $data['k2'] = $this->mdl->getKloter(1005);
            $data['k3'] = $this->mdl->getKloter(1006);
            //$data['pp'] = $this->mdl->getPPIC();

             $data['staf'] = $this->mdl->getStaf();
             $data['akt'] = $this->mdl->getAktivitasLanjut();

            $data['r'] = $this->mdl->getRecord();
            $data['b'] = $this->mdl->getBerat();
            $data['cb'] = $this->mdl->cekbom2();
            $data['klot']      = $this->mdl->getKloterSPK();
            //$data['k'] = $this->mdl->getIsiKloter();

              
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

        }
            
            
        
        
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

            $data['akt'] = $this->mdl->getAktivitasLanjut2();
            
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
        $data['produkPO'] = $this->mdl->getProdukPO($nomorFaktur);
        $this->load->view('user/spkJadwalMassal', $data);
    }
    
    public function uploadJadwalMassal()
    {
        //eksekusi query insert tanpa gambar
        $idAktivitas    = $this->input->post('idAktivitas');
        $nomorAktivitas = $this->input->post('nomorAktivitas');
        $endDate        = $this->input->post('endDate');
        $nomorFaktur    = $this->input->post('nomorFaktur');
        //print_r($endDate);exit();
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
                'startDate' => $endDate[$b],
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

        for ($i=0; $i < $jumlah ; $i++) { 

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

            /*'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),*/
            
            'statusBOM' => 'Disetujui',/*
            'statusJadwal' => 'Disetujui',
            'statusPersetujuan' => 'Disetujui'*/
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkmasal', $data);

        $message = "Berhasil membuat Sub SPK";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("user/kanbanmassal") . "';</script>";
    }


    public function selesaiSeparasi($idSPK) {
    $data = array(
            
            'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),
            
            'statusJadwal' => 'Disetujui',
            'statusPersetujuan' => 'Disetujui'
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkmasal', $data);

        $message = "Separasi SPK ".$idSPK." selesai dilakukan.";
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
        $beratTambahan = 0;
        $idAktivitas = $this->input->post('idAktivitas');
        $idProduk = $this->input->post('idProduk');

        $proses = $this->mdl->getProsesDetail2($idProProd);
        $idSPK = $proses[0]->idSPK;
        $idSubSPK = $proses[0]->idSubSPK;
        $idAkt = $proses[0]->idAktivitas;

        $wadah = $this->mdl->getWadahTerakhir();
        $idWadah = (int)($wadah[0]->idWadah) + 1;  

        $gh = $this->mdl->cekFactProduction($idSPK, $idAktivitas);


        //$b = 0;

        if(count($gh) == 0) { //NO REWORK

            $data = array(
                
                'idProProdAsal' => $idProProd,
                'idSPK' => $idSPK,
                'idSubSPK' => $idSubSPK,
                'idWadah' => $idWadah,
                'idPIC' => $staf,
                'statusSPK' => 'Active',
                'statusWork' => 'On Progress',
                'idAktivitas' => $idAktivitas,
                'statusBerat' => 'Belum Disetujui',
                'jumlah'    => $proses[0]->jumlah,
                'jumlahNow'    => $jumlah,
                'beratAwal' => $beratAwal,
                'beratTambahan' => $beratTambahan,
                'RealisasiStartDate' => date("Y-m-d H:i:s")

            );

            $b = $this->mdl->insertDataGetLast('factproduction2', $data); //idproprod anyar

            $jmlakhir = (int)$proses[0]->jumlahNow - (int)$jumlah; //hitung new jml
            $tr = $this->input->post('idAktivitasAwal');   //untuk gp

            if($tr > 0) {
                $beratAkhir = (float)$proses[0]->berat;    //kalo gp gak diupdate
            } else {
                $beratAkhir = (float)$proses[0]->berat + (float)$beratAwal; //update jml

            }
            

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

        } else {

            $proses2 = $this->mdl->getProsesDetail2($gh[0]->idProProd);

            $xx = $gh[0]->idProProd;
            $ba = $proses2[0]->beratAwal; //60
            $jm = $proses2[0]->jumlahNow; //5
            $newBerat = $beratAwal + $ba; //100 + 60
            $newJumlah = $jumlah + $jm; //10 + 5

            $data = array(
                'beratAwal' => $newBerat,
                'jumlahNow' => $newJumlah,
            );


           $this->mdl->updateData('idProProd',$xx,'factproduction2',$data);

            $jmlx = $proses[0]->jumlahNow;
            $jmlc = $jmlx-$jumlah;

            $tr = $this->input->post('idAktivitasAwal');   //untuk gp

            if($tr > 0) {
                $bx = (float)$proses[0]->berat;    //kalo gp gak diupdate
            } else {
                if ($idAkt > $idAktivitas) {
                    $bx = (float)$proses[0]->berat; //update jml    
                } else {
                    $bx = (float)$proses[0]->berat + (float)$beratAwal; //update jml
                }
                

            };

            

            $jmlakhir = (int)$proses[0]->jumlahNow - (int)$jumlah; //hitung new jml

            if($jmlakhir > 0) {
                $statusWork = 'On Progress';
            } else {
                $statusWork = 'Done';
            }

            $data = array(
                'statusWork' => $statusWork,
                'berat' => $bx,
                'jumlahNow' => $jmlc,
            );

            $this->mdl->updateData('idProProd',$idProProd,'factproduction2',$data);


        }


        $idUser=$this->session->userdata['logged_in']['iduser'];

        if($idAktivitas == 1014) {

            $data = array(
                'idPIC' => $idUser,
                'tipeBarang' => 'Produk Semi Jadi',
                'kodeBarang' => $idProduk,
                'jumlah' => $beratAwal,
                'satuan' => 'gr',
                'tanggal' => date("Y-m-d H:i:s"),
                'jenisPergerakanBarang' => 'OUT',
                'tipePergerakan' => 'Produksi'
                
            );

           // print_r($data);
            
            $this->mdl->insertData('stokbarang', $data);

           //  $data = array(
           //      'idPIC' => $idUser,
           //      'tipeBarang' => 'Produk Jadi',
           //      'kodeBarang' => $idProduk,
           //      'jumlah' => $beratAwal,
           //      'satuan' => 'gr',
           //      'tanggal' => date("Y-m-d H:i:s"),
           //      'jenisPergerakanBarang' => 'IN',
           //      'tipePergerakan' => 'Produksi'
                
           //  );

           // // print_r($data);
            
           //  $this->mdl->insertData('stokbarang', $data);

        }

        

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil melanjutkan proses produksi</div>');
        redirect('User/kanbanmassal');



    }

    public function isiBerat($nomorPO,$idProProd) {
        $data['pro'] = $this->mdl->getAnak($nomorPO);
        $data['idProProd'] = $idProProd;
        $data['nomorPO'] = $nomorPO;
        $this->load->view('user/isiBerat',$data);
    }

    public function setBeratAnak() {

        $idProProd = $this->input->post('idProProd');
        $nomorPO = $this->input->post('nomorPO');

        $berat = $this->input->post('berat[]');
        
        $idProduk = $this->input->post('idProduk[]');

        $idUser=$this->session->userdata['logged_in']['iduser'];

        for ($i=0; $i <count($berat) ; $i++) { 

            $data = array(  //menambahkan detil berat anak
                'idPIC' => $idUser,
                'tipeBarang' => "Produk Jadi",
                'kodeBarang' => $idProduk[$i],
                'jumlah' => $berat[$i],
                'jenisPergerakanBarang' => "IN",
                'satuan' => 'gr',
                'tipePergerakan' => 'Produksi',
                'tanggal' => date("Y-m-d H:i:s"),
                'nomorPO' => $nomorPO,
            );
            
            $this->mdl->insertData('stokbarang', $data);

            $data = array( // produk jadi out
                'idPIC' => $idUser,
                'tipeBarang' => 'Produk Jadi',
                'kodeBarang' => $idProduk[$i],
                'jumlah' => $berat[$i],
                'satuan' => 'gr',
                'tanggal' => date("Y-m-d H:i:s"),
                'jenisPergerakanBarang' => 'OUT',
                'tipePergerakan' => 'Transfer',
                'nomorPO' => $nomorPO,
                
            );

            $this->mdl->insertData('stokbarang', $data); 

            $userx = $this->mdl->getUserByJabatan('Staff Keuangan');
            $idg = $userx[0]->idUser;

            $data = array(
                'idPIC' => $idg,
                'tipeBarang' => 'Produk Jadi',
                'kodeBarang' => $idProduk[$i],
                'jumlah' => $berat[$i],
                'satuan' => 'gr',
                'tanggal' => date("Y-m-d H:i:s"),
                'jenisPergerakanBarang' => 'IN',
                'tipePergerakan' => 'Transfer',
                'statusTransfer' => 'Pending',
                'nomorPO' => $nomorPO,
                
            );

            $this->mdl->insertData('stokbarang', $data); 
        }

        $data = array(
            'statusBerat' => 'Disetujui'
        );

        $this->mdl->updateData('idProProd',$idProProd,'factproduction2',$data);

        redirect('user/kanbanmassal');


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
        $beratKecap    = $proses[0]->beratKecap;
        $kembali    = $proses[0]->kembali;

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
        $f = $this->mdl->insertDataGetLast('factproduction2', $data);

        if($idAktivitas == '1006') {

            $data = array(

                'beratAwal' => $beratKecap
            );

            $this->mdl->updateData('idProProd',$f,'factproduction2',$data);

            $bom = $this->mdl->getbom4($idSubSPK);
            $idUser=$this->session->userdata['logged_in']['iduser'];

            $data = array(
                'status' => 'Disetujui'
            );

            $this->mdl->updateData('idSubSPK',$idSubSPK,'bommassal',$data);

            for ($i=0; $i < count($bom) ; $i++) { 

                $data = array(
                    'idPIC' => $idUser,
                    'tipeBarang' => "Material Dasar",
                    'kodeBarang' => $bom[$i]->kodeMaterial,
                    'jumlah' => $bom[$i]->jumlah,
                    'jenisPergerakanBarang' => "OUT",
                    'satuan' => 'gr',
                    'tipePergerakan' => 'Produksi',
                    'tanggal' => date("Y-m-d H:i:s")
                );
                
                $this->mdl->insertData('stokbarang', $data);
                
                $data = array(
                    'stokMaterial' => (float) $bom[$i]->stokMaterial - (float) $bom[$i]->jumlah
                );
                
                $this->mdl->updateData('idMaterial', $bom[$i]->idMaterial, 'materialdasar', $data);
                
            }


        }

        if($idAktivitas == '1006') {

            $userx = $this->mdl->getUserByJabatan('Admin Produksi');
            $idg = $userx[0]->idUser;

            $idUser=$this->session->userdata['logged_in']['iduser'];

            $data = array(
                'idPIC' => $idg,
                'tipeBarang' => "Produk Semi Jadi",
                'kodeBarang' => $idProduk,
                'jumlah' => $proses[0]->beratKecap,
                'jenisPergerakanBarang' => "IN",
                'satuan' => 'gr',
                'tipePergerakan' => 'Produksi',
                'tanggal' => date("Y-m-d H:i:s")
            );

            $this->mdl->insertData('stokbarang', $data); //semi jadi for real

            $cx = $this->mdl->findKadar($idSPK);
            

            $kadarWenny = $cx[0]->kadarWenny;
            $namaBahan = "Balik Bahan ".$kadarWenny."%";

            $t = $this->mdl->cekMaterial('Emas',$kadarWenny);
            $d = count($t);

            if($d == 0) {

                $f = $this->mdl->getLastKodeMaterial();
                $km = $f[0]->kodeMaterial+1;

                $dataMaterial = array(
                    'kodeMaterial'    => $km,
                    'namaMaterial'    => $namaBahan,
                    'satuan'          => 'gr',
                    'stokMaterial'    => 0,
                    'safetyStock'     => 0,
                    'kadar'           => $kadarWenny,
                    'asal'            => 'Balik Bahan',
                );
                
                $this->mdl->insertData('materialdasar',$dataMaterial);

            } else {

                $km = $t[0]->kodeMaterial;

            }

            $data = array(
                'idPIC' => $idUser,
                'tipeBarang' => "Material Dasar",
                'kodeBarang' => $km,
                'jumlah' => $proses[0]->kembali,
                'jenisPergerakanBarang' => "IN",
                'satuan' => 'gr',
                'tipePergerakan' => 'Balik Bahan',
                'tanggal' => date("Y-m-d H:i:s")
                );

            $this->mdl->insertData('stokbarang', $data);
            
            $jml = $this->mdl->getNewJumlah($idSPK,$idSubSPK);
            $newjml = $jml[0]->jumlah+$jumlah;

            $data = array(
                'jumlah' => $newjml,
            );

            $where = array(
                'idSPK' => $idSPK,
            );

            $this->mdl->updateData2($where, 'factproduction2', $data);

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

        $bk = $this->input->post('beratkecap');
        $km = $this->input->post('kembali');

        if($bk > 0) {

            $data = array(
            'beratKecap' => $bk,
            
            );
            $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        }

        if($km > 0) {

            $data = array(
            'kembali' => $km,
            
            );
            $this->mdl->updateData('idProProd', $idp, 'factproduction2', $data);
        }

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
        $nomorPO = $this->input->post('nomorPO');
        $beratAkhir = $this->input->post('beratakhir');
        $jumlah = $this->input->post('jumlah');
        
        $data = array(
            
            'tanggalApprovalPersetujuan' => date("Y-m-d H:i:s"),
            
            'statusJadwal' => 'Disetujui',
            'statusPersetujuan' => 'Disetujui'
        );
        
        $this->mdl->updateData('idSPK', $idSPK, 'spkmasal', $data);

        $data = array(
            'statusSPK' => 'Done',
        );

        $this->mdl->updateData('idSPK',$idSPK,'spkmasal', $data);

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

        
        $idUser=$this->session->userdata['logged_in']['iduser'];


       // print_r($data);


        $data = array(
            'stok' => $newstok
            
        );

        //print_r($data);
        //exit();
        
       $this->mdl->updateData('idProduk', $idProduk, 'produk', $data);

        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil menyelesaikan aktivitas produksi </div>');
        redirect('user/kanbanmassal');

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
        $poTerakhir = $this->mdl->poTerakhir2();
        $lastPO = $poTerakhir[0]->nomorPO;
        $nomorPO = $lastPO+1;

        $namaProduk=$this->input->post('namaCustomer').'-'.'Agregat';
        $getProdukPO=$this->mdl->getLastProdukPO();
        $kodeProduk=$getProdukPO[0]->idProdukAG+1;

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

        

        $kode = $this->generateRandomString();
        
        $hargaBahan = $this->clean($this->input->post('hargaBahan'));
        $upah = $this->clean($this->input->post('upah'));
        $panjar = $this->clean($this->input->post('panjar'));



        $harga=$this->input->post('harga');
        $totalHarga=0;

        $datangEmas=$this->input->post('datangEmas');
        $idStokBarang = '';
        if ($datangEmas>0) {

            $namaMaterial = 'Emas Kuning '.$this->input->post('kadarDatangEmas').'%';
            $t = $this->mdl->cekMaterial('Emas',$this->input->post('kadarDatangEmas'));
            $d = count($t);
            
            $f = $this->mdl->getLastKodeMaterial();
            $ww = $f[0]->kodeMaterial+1;

            if($d == 0) {
                $dataMaterial = array(
                    'kodeMaterial'    => $ww,
                    'namaMaterial'    => $namaMaterial,
                    'satuan'          => 'gr',
                    'stokMaterial'    => $this->input->post('datangEmas'),
                    'safetyStock'     => 0,
                    'kadar'           =>$this->input->post('kadarDatangEmas'),
                    'asal'            => 'Datang Emas',
                );
                
                $this->mdl->insertData('materialdasar',$dataMaterial);

                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Bahan Datang',
                    'kodeBarang'    => $ww,
                    'satuan'          => 'gr',
                    'jumlah'        => $this->input->post('datangEmas'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory); 
            } else {
                $kodek = $t[0]->kodeMaterial;
                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataInventory = array(
                    'idPIC'         => $iduser,
                    'tipeBarang'    => 'Material Dasar',
                    'tipePergerakan'=> 'Bahan Datang',
                    'kodeBarang'    => $kodek,
                    'satuan'          => 'gr',
                    'jumlah'        => $this->input->post('datangEmas'),
                    'jenisPergerakanBarang'  => 'IN',
                    'hargaBeli'     => 0,
                    'tanggal'   => date("Y-m-d H:i:s"),
                );
                $idStokBarang = $this->mdl->insertDataGetLast("stokbarang",$dataInventory); 
            }

            
        }


        $dataProduk = array(
            'kodeProduk'        => $kodeProduk,
            'namaProduk'        => $namaProduk,
            'jenisProduk'       => 'Agregat',
            'kategori'          => 'Massal',
            'statusKatalog'     => 'Tidak Tampil',
            'kodeGambar'        => $kode,
        );
        $idProduk=$this->mdl->insertDataGetLast('produk',$dataProduk);
        
        //eksekusi query insert
        $dataPO = array(
            'nomorPO'           => $nomorPO,
            'idProduk'          => $idProduk,
            'idCustomer'        => $idCustomer,
            'idSalesPerson'     => $this->input->post('idSalesPerson'),
            'idStokBarang'      => $idStokBarang,
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
        $this->mdl->insertDataGetLast('pomasal',$dataPO);

        $idProdukChild=$this->input->post('idProdukChild[]');
        $keteranganChild=$this->input->post('keteranganChild[]');
        for ($i=0; $i < count($idProdukChild); $i++) { 
            $dataProdukPO = array(
                'nomorPO'           => $nomorPO,
                'idProdukAG'        => $kodeProduk,
                'idProdukChild'     => $idProdukChild[$i],
                'keterangan'        => $keteranganChild[$i],
            );
            $this->mdl->insertData('produkpo',$dataProdukPO);
        }

        //Query Tambah SPK Massal
        $sd      = 'Proses Desain';
        $sb      = 'Belum Ada';
        $sj      = 'Belum Ada';
        $sp      = 'Belum Disetujui';
        $iduser  = ($this->session->userdata['logged_in']['iduser']);
        $dataSPK = array(
            'nomorFaktur' => $nomorPO,
            'nomorPO' => $nomorPO,
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
        $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
        $data['produkPO'] = $this->mdl->getProdukPO($nomorPO);
        $this->load->view('user/invoicePOMassal',$data);

        
    }

    public function printRFQMassal($nomorPO){
        $data['dataPO'] = $this->mdl->findPOMassal($nomorPO);
         $data['produkPO'] = $this->mdl->getProdukPO($nomorPO);
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
        $data['customer']=$this->mdl->listCustomerInvoice();
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

    public function editProduksi() {
        $tglmsk = @date('Y-m-d', @strtotime($this->input->post('tglmsk')));
        $tglend = @date('Y-m-d', @strtotime($this->input->post('tglend')));

        $data = array(
            'jumlah' => $this->input->post('jumlah'),
            'jumlahNow' => $this->input->post('jumlahNow'),
            'berat' => $this->input->post('berat'),
            'beratAwal' => $this->input->post('beratAwal'),
            'beratTambahan' => $this->input->post('beratTambahan'),
            'idPIC' => $this->input->post('idPIC'),
            'RealisasiStartDate' =>$tglmsk,
            'RealisasiEndDate' =>$tglend
        );

        $idProProd = $this->input->post('idProProd');
        $nomorFaktur = $this->input->post('nomorFaktur');
        $this->mdl->updateData('idProProd',$idProProd,'factproduction2',$data);
        $message = "Berhasil Mengedit Informasi Produksi";

        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("User/invoiceSPKMassal/".$nomorFaktur) ."';</script>";
    }

    public function editProduksi2() {
        $tglmsk = @date('Y-m-d', @strtotime($this->input->post('tglmsk')));
        $tglend = @date('Y-m-d', @strtotime($this->input->post('tglend')));

        $data = array(
            'berat' => $this->input->post('berat'),
            'beratAwal' => $this->input->post('beratAwal'),
            'beratTambahan' => $this->input->post('beratTambahan'),
            'idPIC' => $this->input->post('idPIC'),
            'RealisasiStartDate' =>$tglmsk,
            'RealisasiEndDate' =>$tglend
        );

        $idProProd = $this->input->post('idProProd');
        $nomorFaktur = $this->input->post('nomorFaktur');
        $this->mdl->updateData('idProProd',$idProProd,'factproduction',$data);
        $message = "Berhasil Mengedit Informasi Produksi";

        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("User/invoice/".$nomorFaktur) ."';</script>";
    }

    //Inventory
    public function rekapBeratMassal() {
       /* $data['b'] = $this->mdl->getBeratMassal();
        $data['c'] = $this->mdl->getBeratMassal2();
        $data['produk']=$this->mdl->getProd();  
        $data['spk']=$this->mdl->getSPKMassal();    
        $data['rekapBerat']=$this->mdl->rekapBeratMassal();
        $this->load->view('user/beratMassal',$data);*/
        $data['spk']=$this->mdl->getRekapSPKMassal();
        $data['rekapBerat']=$this->mdl->getRekapAkvititas();
        $this->load->view('user/beratMassalPerAktivitas',$data);

    }

    public function invoiceSPKMassal($nomorFaktur) {
        $data['dataSPK']   = $this->mdl->findSPKMasal($nomorFaktur);
        $idSPK = $data['dataSPK'][0]->idSPK;
        //print_r($data['dataSPK'][0]->nomorPO);exit();
        $data['rkp'] = $this->mdl->getRekapMassal($idSPK);
        $data['jadwal']    = $this->mdl->getjadwal7($nomorFaktur);
        $data['stokbom']   = $this->mdl->getBom2($nomorFaktur);
        $data['isi'] = $this->mdl->getIsiSPK($nomorFaktur);
        $data['cf'] = $this->mdl->cekFinishSPK($nomorFaktur);
        $data['tr'] = $this->mdl->getTrackProduksi($nomorFaktur);
        $data['staf'] = $this->mdl->getStaf();
        $data['produkPO'] = $this->mdl->getProdukPO($data['dataSPK'][0]->nomorPO);
        $data['sub'] = $this->mdl->getSubSPK($idSPK);
        $this->load->view('user/invoiceMassal', $data);
    }

    public function hapusmaterial($idBOM,$tipe,$id) {
        if($tipe == 'massal') {
            $this->mdl->deleteData('idBOM',$idBOM,'bommassal');
            redirect('user/createbommassal/'.$id);
        } else {
            $this->mdl->deleteData('idBOM',$idBOM,'bomtempahan');
            redirect('user/createBOMTempahan/'.$id);
        }
    }

    public function editJadwal() {

        $tglmsk = @date('Y-m-d', @strtotime($this->input->post('tglmsk')));
        $tglend = @date('Y-m-d', @strtotime($this->input->post('tglend')));
        $data = array(
            'startDate' => $tglend,
            'endDate' => $tglend,
        );
        $idRencana = $this->input->post('idRencana');
        $nomorFaktur = $this->input->post('nomorFaktur');
        $this->mdl->updateData('idRencana',$idRencana,'rencanaproduksi2',$data);


        $message = "Berhasil Memperbarui Jadwal";

        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("User/invoiceSPKMassal/".$nomorFaktur) ."';</script>";

    }

    public function editJadwalTempahan() {

        $tglmsk = @date('Y-m-d', @strtotime($this->input->post('tglmsk')));
        $tglend = @date('Y-m-d', @strtotime($this->input->post('tglend')));
        $data = array(
            'startDate' => $tglend,
            'endDate' => $tglend,
        );
        $idRencana = $this->input->post('idRencana');
        $nomorFaktur = $this->input->post('nomorFaktur');
        $this->mdl->updateData('idRencana',$idRencana,'rencanaproduksi',$data);


        $message = "Berhasil Memperbarui Jadwal";

        echo "<script type='text/javascript'>alert('$message');
        window.location.href='" . base_url("User/invoice/".$nomorFaktur) ."';</script>";

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
            $data['pegawai'] = $this->mdl->listPegawai();
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
                //Query Tambah SPK
                $sj='Belum Ada';
                $iduser = ($this->session->userdata['logged_in']['iduser']);
                $dataSPK = array(
                    'nomorFaktur'           => $this->input->post('nomorPO'),
                    'nomorPO'               => $this->input->post('nomorPO'),
                    'idCustomer'            => $idCustomer,
                    'statusJadwal'          => $sj,
                    'PICJadwal'             => $iduser,
                );
                $this->mdl->insertData('spkservice',$dataSPK); 

                $data['pegawai'] = $this->mdl->listPegawai();
                $nomorPO=$this->input->post('nomorPO');
                $data['dataPO'] = $this->mdl->findPOService($nomorPO);
                $data['ds'] = $this->mdl->getDetailSalesService2($nomorPO);
                $this->load->view('user/invoicePOService',$data);
        }
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

    //Finance
    public function akun() {
        $data['akun1'] = $this->mdl->listTipeAkun();
        $data['akun2'] = $this->mdl->listAkun();
        $this->load->view('user/akun',$data);
    } 

    public function createAkun() {
        $dataAkun = array(
            'kodeTipeAkun'      => $this->input->post('kodeTipeAkun'),
            'kodeAkun'          => $this->input->post('kodeAkun'),
            'namaAkun'          => $this->input->post('namaAkun'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->insertData('akun', $dataAkun);
        $message = "Akun berhasil dibuat";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/akun")."';</script>";
    }

    public function editAkun($idAkun) {
        $dataAkun = array(
            'kodeTipeAkun'      => $this->input->post('kodeTipeAkun'),
            'kodeAkun'          => $this->input->post('kodeAkun'),
            'namaAkun'          => $this->input->post('namaAkun'),
        );
        /*print_r($dataAkun);exit();*/
        $this->mdl->updateData('idAkun',$idAkun,'akun', $dataAkun);
        $message = "Akun berhasil diedit";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/akun")."';</script>";
    }

    public function deleteAkun($idAkun) {
        $this->mdl->deleteData('idAkun', $idAkun, 'akun');
        $message = "Akun berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/akun")."';</script>";
    }

    //Currency
    public function currency() {
        $data['job'] = $this->session->userdata['logged_in']['jabatan'];
        $data['lk'] = $this->mdl->getSetting();
        $data['currency'] = $this->mdl->listCurrency();
        $this->load->view('user/currency',$data);
    } 

    public function setTol() {
        $data = array ( 'nilai' => $this->input->post('tol') );
        $this->mdl->updateData('id',3,'setting', $data);
        $message = "Berhasil mengupdate toleransi";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/currency")."';</script>";
    }

    public function tambahCurrency() {
        $hargaEmas = $this->input->post('hargaEmas');
        $hargaRupiah = $this->input->post('hargaRupiah');

        $dataCurrency = array(
            'hargaEmas'     => $hargaEmas,
            'hargaRupiah'     => $hargaRupiah,
            'tanggal'       => date("Y-m-d H:i:s"),
        );
        $this->mdl->insertData('currency', $dataCurrency);
        
        redirect('user/currency');
    }

    public function editCurrency($idCurrency) {
        $hargaEmas = $this->input->post('hargaEmas');
        $hargaRupiah = $this->input->post('hargaRupiah');

        $dataCurrency = array(
            'hargaEmas'     => $hargaEmas,
            'hargaRupiah'     => $hargaRupiah,
        );
        $this->mdl->updateData('idCurrency',$idCurrency,'currency', $dataCurrency);
        
        redirect('user/currency');
    }

    //CashFlow
    public function cashflow() {
        $data['cashflow'] = $this->mdl->listCashflow();
        $this->load->view('user/cashflow',$data);
    } 

    public function tambahCashflow() {
        $dataCashflow = array(
            'keterangan'      => $this->input->post('keterangan'),
            'tanggal'          => $this->input->post('tanggal'),
            'jumlah'          => $this->input->post('jumlah'),
            'kategori'      => $this->input->post('kategori'),
            'tipeTransaksi'          => $this->input->post('tipeTransaksi'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->insertData('cashflow', $dataCashflow);
        $message = "Cashflow berhasil ditambah";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/cashflow")."';</script>";
    }

    public function editCashflow($idCashflow) {
        $dataCashflow = array(
            'keterangan'      => $this->input->post('keterangan'),
            'tanggal'          => $this->input->post('tanggal'),
            'jumlah'          => $this->input->post('jumlah'),
            'kategori'      => $this->input->post('kategori'),
            'tipeTransaksi'          => $this->input->post('tipeTransaksi'),
        );
        /*print_r($dataAkun);exit();*/
        $this->mdl->updateData('idCashflow',$idCashflow,'cashflow', $dataCashflow);
        $message = "Transaksi berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/cashflow")."';</script>";
    }

    public function deleteCashflow($idCashflow) {
        $this->mdl->deleteData('idCashflow', $idCashflow, 'cashflow');
        $message = "Akun berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/cashflow")."';</script>";
    }

    //Jurnal
    public function jurnal() {
        $data['jurnal'] = $this->mdl->listJurnal();
        $data['listAkun'] = $this->mdl->listAkun();
        $this->load->view('user/jurnal',$data);
    } 

    public function detailJurnal($idCashflow) {
        $data['jurnal'] = $this->mdl->detailJurnal($idCashflow);
        $this->load->view('user/detailJurnal',$data);
    } 

    public function jurnalHariIni() {
        $data['jurnal'] = $this->mdl->jurnalHariIni();
        $this->load->view('user/jurnalPeriode',$data);
    } 

    public function editJurnal($idCashflow) {
        $data['jurnal'] = $this->mdl->detailJurnal($idCashflow);
        $data['cashflow'] = $this->mdl->findCashflow($idCashflow);
        $data['listAkun'] = $this->mdl->listAkun();
        $this->load->view('user/editJurnal',$data);
    } 

    public function createJurnal($idCashflow) {
        $data['cashflow'] = $this->mdl->findCashflow($idCashflow);
        $data['listAkun'] = $this->mdl->listAkun();
        $this->load->view('user/createJurnal',$data);
    } 

    public function tambahJurnal() {
        // print_r($this->input->post());exit();
        $dataAkun = array(
            'keterangan'      => $this->input->post('keterangan'),
            'tanggal'         => $this->input->post('tanggal'),
            'idCashflow'      => $this->input->post('idCashflow'),
        );
        $idJurnal=$this->mdl->insertDataGetLast('jurnal', $dataAkun);

        $akun=$this->input->post('akun[]');
        $jumlah=$this->input->post('jumlah[]');
        $kategori=$this->input->post('kategori[]');
        
        for ($i=0; $i < count($akun); $i++) { 
            $dataDetail = array(
                'idJurnal'      => $idJurnal,
                'kodeAkun'         => $akun[$i],
                'jumlah'      => $jumlah[$i],
                'kategori'      => $kategori[$i],
            );
            $this->mdl->insertData('detailjurnal', $dataDetail);
        }
        $message = "Jurnal berhasil ditambah";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/jurnal")."';</script>";
    }

    public function updateJurnal($idJurnal) {
        // print_r($this->input->post());exit();
        $dataAkun = array(
            'keterangan'      => $this->input->post('keterangan'),
            'tanggal'         => $this->input->post('tanggal'),
        );
        $this->mdl->updateData('idJurnal',$idJurnal,'jurnal',$dataAkun);

        $this->mdl->deleteData('idJurnal',$idJurnal,'detailjurnal');

        $akun=$this->input->post('akun[]');
        $jumlah=$this->input->post('jumlah[]');
        $kategori=$this->input->post('kategori[]');
        
        for ($i=0; $i < count($akun); $i++) { 
            $dataDetail = array(
                'idJurnal'      => $idJurnal,
                'kodeAkun'         => $akun[$i],
                'jumlah'      => $jumlah[$i],
                'kategori'      => $kategori[$i],
            );
            $this->mdl->insertData('detailjurnal', $dataDetail);
        }
        $message = "Jurnal berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/jurnal")."';</script>";
    }


    public function ambil2($idSPK) {

        $spk = $this->mdl->findSPK2($idSPK);
        $nomorPO = $spk[0]->nomorPO;
        $idProduk = $spk[0]->idProduk;

        $stok = $this->mdl->getLastMovement($nomorPO,$idProduk);



        $dataInventory = array(
                'idPIC'         => $this->session->userdata['logged_in']['iduser'],
                'tipeBarang'    => 'Produk Jadi',
                'tipePergerakan'=> 'Diambil Customer',
                'nomorPO'       => $nomorPO,
                'kodeBarang'    => $idProduk,
                'jumlah'        => $stok[0]->jumlah,
                'satuan'        => 'gr',
                'jenisPergerakanBarang'  => 'OUT',
                'hargaBeli'     => 0,
                'tanggal' => date("Y-m-d H:i:s"),
                
        );

        $this->mdl->insertData('stokbarang',$dataInventory);

        $dataStatus = array(
                'statusPengambilan' => 'Sudah'
        );
        $this->mdl->updateData('idSPK',$idSPK,'factproduction', $dataStatus);

        $message = "Berhasil mengambil barang, jangan lupa stock opname berlian !";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/kanban")."';</script>";
        
    }

    public function ambil($idSPK) {
        $data['SPK'] = $this->mdl->findSPKMassalbySPK($idSPK);
        $data['beratAkhir'] = $this->mdl->findBeratProd($idSPK);
        $nomorPO = $data['SPK']->nomorPO;
        $data['produkpo']=$this->mdl->findProdukPO($nomorPO);
        for ($i=0; $i < count($data['produkpo']) ; $i++) { 
            $data['pergerakan']=$this->mdl->findPergerakan($data['produkpo'][$i]->nomorPO,$data['produkpo'][$i]->idProdukChild);
            $dataInventory = array(
                'idPIC'         => $this->session->userdata['logged_in']['iduser'],
                'tipeBarang'    => 'Produk Jadi',
                'tipePergerakan'=> 'Diambil Customer',
                'nomorPO'       => $data['pergerakan'][0]->nomorPO,
                'kodeBarang'    => $data['pergerakan'][0]->kodeBarang,
                'jumlah'        => $data['pergerakan'][0]->jumlah,
                'satuan'        => 'gr',
                'jenisPergerakanBarang'  => 'OUT',
                'hargaBeli'     => 0,
                'tanggal' => date("Y-m-d H:i:s"),
                
            );
            $this->mdl->insertData('stokbarang',$dataInventory);
        }
        $dataStatus = array(
                'statusPengambilan' => 'Sudah'
        );
        $this->mdl->updateData('idSPK',$idSPK,'factproduction2', $dataStatus);

        $message = "Produk sudah diambil customer";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/stokBarang")."';</script>";
    }

    //Role
    public function role() {
        $data['role']=$this->mdl->listRole();  
        $this->load->view('user/role',$data);
    }

    public function createRole() {
        $dataRole = array(
            'kodeRole'          => $this->input->post('kodeRole'),
            'deskripsi'          => $this->input->post('deskripsi'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->insertData('role', $dataRole);
        redirect('user/role');
    }

    public function editRole($idRole) {
        $dataRole = array(
            'kodeRole'          => $this->input->post('kodeRole'),
            'deskripsi'          => $this->input->post('deskripsi'),
        );
        //print_r($dataPegawai);exit();
        $this->mdl->updateData('idRole', $idRole, 'role', $dataRole);
        redirect('user/role');
    }

    public function deleteRole($idRole) {
        $this->mdl->deleteData('idRole', $idRole, 'role');
        $message = "Data Role berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/role")."';</script>";
    }

    //Akses
    public function akses() {
        $data['akses']=$this->mdl->listAkses();
        $data['akses2']=$this->mdl->listAkses1();  
        $data['pegawai']=$this->mdl->listPegawai(); 
        $data['role']=$this->mdl->listRole();  
        $this->load->view('user/akses',$data);
    }

    public function createAkses() {
        /*print_r($this->input->post());exit();*/
        $idUser = $this->input->post('idUser');
        $role=$this->input->post('kodeRole[]');
        $jumlahRole = count($role);
        
        for($i=0;$i<$jumlahRole;$i++){
            $dataAkses = array(
                'idUser'          => $idUser,
                'kodeRole'          => $role[$i]
            );
            $this->mdl->insertData('akses', $dataAkses);
        }
        //print_r($dataPegawai);exit();
        
        redirect('user/akses');
    }

    public function editAkses($idUser) {
        $this->mdl->deleteData('idUser', $idUser, 'akses');

        $role=$this->input->post('kodeRole[]');
        $jumlahRole = count($role);
        
        for($i=0;$i<$jumlahRole;$i++){
            $dataAkses = array(
                'idUser'          => $idUser,
                'kodeRole'          => $role[$i]
            );
            $this->mdl->insertData('akses', $dataAkses);
        }
        redirect('user/akses');
    }

    public function deleteAkses($idAkses) {
        $this->mdl->deleteData('idAkses', $idAkses, 'akses');
        $message = "Data Akses berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/akses")."';</script>";
    }

    //Estimasi Biaya
    public function estimasiBiaya($nomorPO) {
        $data['dataPO']=$this->mdl->findPO($nomorPO); 
        $data['berlian']=$this->mdl->getBerlian($nomorPO);  
        $this->load->view('user/estimasiBiaya',$data);
    }

    public function invoiceAkhirPOTempahan($nomorPO) {
        $data['dataPO']=$this->mdl->findPO($nomorPO); 
        $data['berlian']=$this->mdl->getBerlian($nomorPO); 
        $data['SPK']=$this->mdl->findSPKTempahanbyPO($nomorPO); 
        $idSPK = $data['SPK']->idSPK;
            $data['berat']=$this->mdl->getBeratAkhir($idSPK);
            if ($data['berat']){
            $data['beratTotal'] = $data['berat'][0]->berat;}
            else {$data['beratTotal']=0;} 
        $this->load->view('user/invoiceAkhirPOTempahan',$data);
    }

    public function tambahBerlian($nomorPO) {
        $data['dataPO']=$this->mdl->findPO($nomorPO); 
        $data['berlian']=$this->mdl->getBerlian($nomorPO); 
        $data['material']=$this->mdl->getMaterialBerlian(); 
        $data['zirkon']=$this->mdl->getMaterialZirkon(); 
        $this->load->view('user/tambahBerlian',$data);
    }

    public function updateBerlian($nomorPO){
        //Query Tambah PO
        // print_r($this->input->post());exit();
        $this->mdl->deleteData('nomorPO',$nomorPO,'poberlian');

        $namaBerlian=$this->input->post('namaBerlian[]');
        $jumlah=$this->input->post('jumlah[]');
        $harga=$this->input->post('harga[]');
        $karat=$this->input->post('karat[]');
        $jenis=$this->input->post('jenis[]');
        for ($i=0; $i < count($namaBerlian) ; $i++) { 
            $dataPO = array(
                'nomorPO'       => $nomorPO,
                'namaBerlian'  => $namaBerlian[$i],
                'jumlah'        => $jumlah[$i],
                'harga'         => $harga[$i],
                'karat'         => $karat[$i],
                'jenis'         => $jenis[$i],
            );
            $this->mdl->insertData('poberlian',$dataPO);  
        }

        $message = "Berlian berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/estimasiBiaya/".$nomorPO)."';</script>";
    }

    public function updateBiaya($nomorPO){
        // print_r($this->input->post());exit();
        //Query Tambah PO
        $dataPO = array(
            'beratAkhir'        => $this->input->post('beratAkhir'),
            'beratBatu'         => $this->input->post('beratBatu'),
            'susut'             => $this->input->post('susut'),
            'upah'              => $this->input->post('upah'),
            'jumlahDatangBerlian' => $this->input->post('jumlahDatangBerlian'),
            'upahPasangBerlian' => $this->input->post('upahPasangBerlian'),
            'jumlahBatuZirkon'  => $this->input->post('jumlahBatuZirkon'),
            'hargaBatuZirkon'   => $this->input->post('hargaBatuZirkon'),
            'hargaKrumWarna'    => $this->input->post('hargaKrumWarna'),
            'jenisCustomer'     => $this->input->post('jenisCustomer'),
            'persenBiaya'       => $this->input->post('persenBiaya'),
            'hargaBahan'        => $this->input->post('hargaBahan'),
            'hargaDatangEmas'   => $this->input->post('hargaDatangEmas'),
        );
        $this->mdl->updateData('nomorPO',$nomorPO,'potempahan',$dataPO);  

        $message = "Estimasi biaya berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/purchaseOrder")."';</script>";
    }

    public function updateInvoicePOTempahan($nomorPO){
        // print_r($this->input->post());exit();
        //Query Tambah PO
        $dataPO = array(
            'beratBatu'         => $this->input->post('beratBatu'),
            'susut'             => $this->input->post('susut'),
            'upah'              => $this->input->post('upah'),
            'jumlahDatangBerlian' => $this->input->post('jumlahDatangBerlian'),
            'upahPasangBerlian' => $this->input->post('upahPasangBerlian'),
            'jumlahBatuZirkon'  => $this->input->post('jumlahBatuZirkon'),
            'hargaBatuZirkon'   => $this->input->post('hargaBatuZirkon'),
            'hargaKrumWarna'    => $this->input->post('hargaKrumWarna'),
            'jenisCustomer'     => $this->input->post('jenisCustomer'),
            'persenBiaya'       => $this->input->post('persenBiaya'),
            'hargaBahan'        => $this->input->post('hargaBahan'),
            'hargaDatangEmas'   => $this->input->post('hargaDatangEmas'),
            'diskon'        => $this->input->post('diskon'),
            'selisihHarga'   => $this->input->post('selisihHarga'),
        );
        $this->mdl->updateData('nomorPO',$nomorPO,'potempahan',$dataPO);    

        $message = "Estimasi biaya berhasil diperbaharui";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='".base_url("user/purchaseOrder")."';</script>";
    }

    public function reviewKloter($idKloter){
        $this->form_validation->set_rules('namakloter', 'Nama Kloter' ,'required');
        $this->form_validation->set_rules('kadar', 'Kadar' ,'required');
        $this->form_validation->set_rules('beratKotor', 'Berat Kotoe' ,'required');
        $this->form_validation->set_rules('beratKaret', 'Berat Karet' ,'required');
        
        if ($this->form_validation->run() == FALSE){
            $data['kloter'] = $this->mdl->findKloter($idKloter);
            $data['klot']   = $this->mdl->getKloterSPK();
            $this->load->view('user/editKloter',$data);
        }
        else {
            $idspk = $this->input->post('idSPK');
            $idKloter = $this->input->post('idKloter');
            $this->mdl->deleteData('idKloter', $idKloter, 'kloter');
            for ($i=0; $i < count($idspk); $i++) { 
                $data = array (
                    'nama' => $this->input->post('namakloter'),
                    'kadar' => $this->input->post('kadar'),
                    'idKloter' => $idKloter,
                    'idSPK' => $idspk[$i],
                    'beratKotor' => $this->input->post('beratKotor'),
                    'beratKaret' => $this->input->post('beratKaret'),
                    'tgl_kloter' => date("Y-m-d H:i:s"),
                );
                $this->mdl->insertData('kloter',$data);
            }
            $message = "Data berhasil disimpan";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("user/reviewKloter/".$idKloter)."';</script>";
        }
        
    }

    public function validasiKloter($idKloter) {
        $kloter = $this->mdl->findKloter($idKloter);
        $jumlahKloter = count($kloter);
        // print_r(count($data['kloter']));exit();
        for ($i=0; $i < $jumlahKloter; $i++) { 
            $idSPK = $kloter[$i]->idSPK;
            $data = array(
                'idSPK' => $idSPK,
                'idAktivitas' => 1005,
                'statusWork' => 'Belum ada PIC',
                'statusSPK' => 'Active',
            );
            $this->mdl->insertData('factproduction',$data);
        }
        $this->session->set_flashdata('msg', '<div class="alert animated fadeInRight alert-success">Berhasil membuat kloter SPK</div>');
        redirect('user/kanban');
    }

    // Produk
    public function produk() {
        $data['produk']=$this->mdl->listProdukTempahan();
        $this->load->view('user/produk',$data);
    }
    
    public function produkMassal() {
        $data['produk']=$this->mdl->listProdukMassal();
        $this->load->view('user/produkMassal',$data);
    }

    public function produkPerak() {
        $data['produk']=$this->mdl->listProdukPerak();
        $this->load->view('user/produkPerak',$data);
    }

    public function produkTrading() {
        $data['produk']=$this->mdl->listProdukTrading();
        $this->load->view('user/produkTrading',$data);
    }


}
