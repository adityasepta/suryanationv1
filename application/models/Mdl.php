<?php
/* 
 * File Name: employee_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mdl extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();

    }

    public function checkAccount($username,$password) {
        
        $sql   = "SELECT * from user where username ='" . $username . "' and password = '$password'";
        $query = $this->db->query($sql);
        
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function checkCurrency() {
        $hasil = $this->db->query("SELECT * FROM currency ORDER BY idCurrency DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function insertData($table, $data) {
        $this->db->insert($table, $data);
    }

    public function insertDataGetLast($table, $data) {
        $this->db->insert($table, $data);

        if($this->db->affected_rows()){ 
            return $this->db->insert_id(); 
        }else{ 
            return false; 
        }
    }
    
    public function updateData($param, $value, $table, $data) {
        $this->db->where($param, $value);
        $this->db->update($table, $data);
    }
    
    public function deleteData($param, $value, $table) {
        $this->db->where($param, $value);
        $this->db->delete($table);
    }

    public function getStaf() {
        
        $sql   = "SELECT * FROM `user` WHERE idUser != 0 and level < 5 order by nama asc, nama";
        $result = $this->db->query($sql);
        $return = array();
        
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['idUser']] = $row['nama'];
            }
        }
        
        return $return;
        
    }

    public function getAktivitasLanjut() {
        
        $sql   = "SELECT a.idSPK, b.namaAktivitas, b.idAktivitas FROM rencanaproduksi a, aktivitas2 b where a.idaktivitas = b.idAktivitas and a.idaktivitas > 1006 order by idaktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }

    public function getAktivitasLanjut2() {
        
        $sql   = "SELECT a.idSPK, b.namaAktivitas, b.idAktivitas FROM rencanaproduksi2 a, aktivitas b where a.idaktivitas = b.idAktivitas and a.idaktivitas > 1006 order by idaktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }

     public function getSales() {

        $sql   = "SELECT *, left(pr.namaProduk, 20) as namap , DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal FROM potempahan po, produk pr, customer c, user u WHERE po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND po.nomorPO NOT IN( SELECT nomorPO FROM spk )";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getStokPerId($idUser) {

        $sql   = "SELECT (IFNULL((SELECT SUM(a.jumlah) as jmlmasuk FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial and a.idPIC = $idUser and b.kategori = 'Emas' and a.jenisPergerakanBarang = 'IN'),0) - IFNULL((SELECT SUM(a.jumlah) as jmlmasuk FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial and a.idPIC = $idUser and b.kategori = 'Emas' and a.jenisPergerakanBarang = 'OUT'),0)) AS tot";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getJadi() {

        $sql   = "SELECT * FROM (SELECT idSPK, DATE_FORMAT(max(RealisasiEndDate), '%d %M %Y') as tgljadi FROM `factproduction` where statusPengambilan = 'Belum' and statusSPK = 'Done' GROUP by idSPK) a, spk b, customer c, produk d where a.idSPK = b.idSPK and b.idCustomer = c.idCustomer and b.idProduk = d.idProduk order by tgljadi";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getJadi2() {

        $sql   = "SELECT * FROM (SELECT idSPK, DATE_FORMAT(max(RealisasiEndDate), '%d %M %Y') as tgljadi FROM `factproduction2` where statusPengambilan = 'Belum' and statusSPK = 'Done' GROUP by idSPK) a, spkmasal b, customer c, produk d where a.idSPK = b.idSPK and b.idCustomer = c.idCustomer and b.idProduk = d.idProduk order by tgljadi";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    public function getProsesDetail($idProProd) {
        $sql   = "SELECT * from factproduction where idProProd = $idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getPPIC() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap,DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal, DATE_FORMAT(tanggalApprovalDesain,'%d %M %Y') as tanggaldes FROM potempahan po, produk pr, customer c, spk s, user u WHERE po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and s.statusDesain = 'Disetujui' and s.statusPersetujuan != 'Disetujui' ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getBerat() {


        $sql = "SELECT a.*,b.nama FROM (SELECT f.idSPK, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal,SUM(f.beratTambahan) as beratTambahan, SUM(f.kembali) as kembali,idPIC  FROM factproduction f, aktivitas2 a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas) a JOIN user b on a.idPIC=b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getBeratRekap() {


        $sql = "SELECT a.*,b.nama FROM (SELECT f.idSPK, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali,idPIC  FROM factproduction f, aktivitas2 a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas,idProProd) a JOIN user b on a.idPIC=b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    /////////////

    public function getListSPKTempahan() {
        $hasil = $this->db->query("SELECT * FROM potempahan po LEFT JOIN customer cu ON po.idCustomer=cu.idCustomer WHERE po.nomorPO NOT IN( SELECT nomorPO FROM spk ) order by po.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        } 
    }

    public function getListSPKMasal() {
        $hasil = $this->db->query("SELECT * FROM pomasal po LEFT JOIN customer cu ON po.idCustomer=cu.idCustomer WHERE po.nomorPO NOT IN( SELECT nomorPO FROM spkmasal ) order by po.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        } 
    }

    public function getListSPKService() {
        $hasil = $this->db->query("SELECT * FROM purchaseorderservice po LEFT JOIN customer cu ON po.idCustomer=cu.idCustomer WHERE po.nomorPO NOT IN( SELECT nomorPO FROM spkservice ) order by po.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getBOMProduct($id) {
        $sql    = "SELECT * from billofmaterial a JOIN materialdasar b on a.kodeMaterial = b.idMaterial where kodeProduk='$id'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function cekbom() {
        $sql   = "SELECT * from billofmaterial";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekjadwal() {
        $sql   = "SELECT * from rencanaproduksi";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getjadwal($nomorFaktur) {
        $sql   = "SELECT *, DATE_FORMAT(r.startDate, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(r.endDate, '%Y-%m-%d') AS tglend,DATE_FORMAT(r.startDate, '%d %M %Y' ) as sd, DATE_FORMAT(r.endDate, '%d %M %Y' ) as ed FROM aktivitas2 a, rencanaproduksi r, spk s where s.idSPK = r.idSPK and a.idAktivitas = r.idAktivitas and s.nomorFaktur = '$nomorFaktur' order by r.idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getSetting() {
        $sql   = "SELECT * from setting";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function listPO(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.nomorPO DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPORunning(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.* FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN spk d ON a.nomorPO=d.nomorPO WHERE d.statusSPK!='Done' ORDER BY a.nomorPO DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPODone(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.* FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN spk d ON a.nomorPO=d.nomorPO WHERE d.statusSPK='Done' ORDER BY a.nomorPO DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOMasal(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOMasalRunning(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.* FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN spkmasal d ON a.nomorPO=d.nomorPO WHERE d.statusSPK!='Done' ORDER BY a.nomorPO DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOMasalDone(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.* FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN spkmasal d ON a.nomorPO=d.nomorPO WHERE d.statusSPK='Done' ORDER BY a.nomorPO DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listProduk(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk  WHERE jenisProduk != 'Agregat'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listProdukTempahan(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk WHERE kategori = 'Tempahan'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listProdukMassal(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT idProduk,kodeProduk,namaProduk,jenisProduk,deskripsi,hargaJual,hargaModal,kategori,statusKatalog,gambar1 FROM produk WHERE kategori = 'Massal' ");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listProdukPerak(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk WHERE kategori = 'Perak' ");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listProdukTrading(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk WHERE kategori = 'Trading' ");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPK(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN potempahan d ON a.nomorPO = d.nomorPO ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPKRunning(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN potempahan d ON a.nomorPO = d.nomorPO WHERE a.statusSPK!='Done' ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPKDone(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN potempahan d ON a.nomorPO = d.nomorPO WHERE a.statusSPK='Done' ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPKMasal(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPKMasalRunning(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO WHERE a.statusSPK!='Done'ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listSPKMasalDone(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO WHERE a.statusSPK='Done'ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPegawai(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM user WHERE idUser != 0 ORDER BY nama");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listJabatan(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM jabatan");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listRole(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM role");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAkses1(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM akses a, user b,role c WHERE a.idUser = b.idUser and a.kodeRole=c.kodeRole");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAkses(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.idUser,nama FROM akses a, user b WHERE a.idUser = b.idUser GROUP BY a.idUser,nama");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listDesain(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM user WHERE jabatan = 'Staff Desain Tempahan'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPegawaiSales(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM user WHERE jabatan = 'Staff Sales & Marketing'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPegawaiDesain(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM user WHERE jabatan = 'Staff Desain Tempahan'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poTerakhir(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM potempahan ORDER BY nomorPO DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poTerakhir2(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal ORDER BY nomorPO DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function spkTerakhir(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk ORDER BY idSPK DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function spkTerakhir2(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal ORDER BY idSPK DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function spkTerakhir3(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkperak ORDER BY idSPK DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAktivitas(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM aktivitas");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAktivitas2(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM aktivitas2");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekSPK($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPK($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN potempahan d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE nomorFaktur=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function findSPK10($idSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN potempahan d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE idSPK=$idSPK LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPK2($idSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk a, potempahan b where a.idSPK = $idSPK and a.nomorPO = b.nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    

    public function findSPK6($idSPK){
        //Query mencari record berdasarkan ID
        $sql = "SELECT * FROM spk where idSPK = $idSPK ";
        $query = $this->db->query($sql);
        return $query->result();  
    }

    public function tambahSPK($dataSPK){
        //Quert insert into
        $this->db->insert('spk', $dataSPK);
    }

    public function tambahProdukAktivitas($dataAktivitas){
        //Quert insert into
        $this->db->insert('produkaktivitas', $dataAktivitas);
    }

    public function tambahRencana($dataRencana){
        //Quert insert into
        $this->db->insert('rencanaproduksi', $dataRencana);
    }

    public function tambahRencana2($dataRencana){
        //Quert insert into
        $this->db->insert('rencanaproduksi2', $dataRencana);
    }


    public function findPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT *, DATE_FORMAT(a.tanggalMasuk, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(a.tanggalEstimasiPenyelesaian, '%Y-%m-%d') AS tglpsy FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPKTempahan($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT *, DATE_FORMAT(a.tanggalMasuk, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(a.tanggalEstimasiPenyelesaian, '%Y-%m-%d') AS tglpsy FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser LEFT JOIN spk e ON a.nomorPO=e.nomorPO WHERE a.nomorPO=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT *, DATE_FORMAT(a.tanggalMasuk, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(a.tanggalEstimasiPenyelesaian, '%Y-%m-%d') AS tglpsy FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poPerak($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT *, DATE_FORMAT(a.tanggalMasuk, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(a.tanggalEstimasiPenyelesaian, '%Y-%m-%d') AS tglpsy FROM poperak a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE a.nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getPOMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.*,d.nama FROM pomasal a LEFT JOIN produkpo b ON a.nomorPO = b.nomorPO LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE a.nomorPO=$nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getProdukPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT b.*,c.* FROM pomasal a LEFT JOIN produkpo b ON a.nomorPO=b.nomorPO LEFT JOIN produk c ON b.idProdukChild=c.idProduk WHERE a.nomorPO=$nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProduk($kodeProduk){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk WHERE kodeProduk = '$kodeProduk' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProProd($id){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM factproduction2 WHERE idProProd = '$id' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProdukByPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM potempahan a LEFT JOIN produk b ON a.idProduk=b.idProduk WHERE a.nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProdukMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal a LEFT JOIN produk b ON a.idProduk=b.idProduk WHERE a.nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cariPOMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal a LEFT JOIN spkmasal b ON a.nomorPO=b.nomorPO WHERE a.nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProdukId($idProduk){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produk WHERE idProduk = '$idProduk' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }



    public function tambahProduk($dataProduk){
        //Quert insert into
        $this->db->insert('produk', $dataProduk);
    }

    public function tambahCustomer($dataCustomer){
        //Quert insert into
        $this->db->insert('customer', $dataCustomer);
    }

    public function findCustomer(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM customer ORDER BY idCustomer DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function tambahPO($dataPO){
        //Quert insert into
        $this->db->insert('potempahan', $dataPO);
    }

    public function hapusPO($nomorPO) {
        //Query delete ... where id=...
        $this->db->where('nomorPO', $nomorPO)
                 ->delete('potempahan');
    }
    
    public function updatePO($dataPO,$idPO) {
        //Query update from ... where id = ...
        $this->db->where('idPO', $idPO)
                 ->update('potempahan', $dataPO);
    }

    public function updateCustomer($dataCustomer,$idCustomer) {
        //Query update from ... where id = ...
        $this->db->where('idCustomer', $idCustomer)
                 ->update('customer', $dataCustomer);
    }

    public function updateProduk($dataProduk,$idProduk) {
        //Query update from ... where id = ...
        $this->db->where('idProduk', $idProduk)
                 ->update('produk', $dataProduk);
    }

    public function updateSPK($dataSPK,$idSPK) {
        //Query update from ... where id = ...
        $this->db->where('idSPK', $idSPK)
                 ->update('spk', $dataSPK);
    }

    public function prosesJadwal($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusJadwal='Sudah Ada' where nomorFaktur=$nomorFaktur");
    }

    public function setujuDesain($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusDesain='Disetujui' where nomorFaktur=$nomorFaktur");
    }



    public function setujuBOM($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusBOM='Disetujui' where nomorFaktur=$nomorFaktur");
    }

    public function tidakSetujuBOM($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusBOM='Harus Diubah' where nomorFaktur=$nomorFaktur");
    }

    public function setujuJadwal($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusJadwal='Disetujui' where nomorFaktur=$nomorFaktur");
    }

    public function tidakSetujuJadwal($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusJadwal='Harus Diubah' where nomorFaktur=$nomorFaktur");
    }

    public function setujuAkhir($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusPersetujuan='Disetujui' where nomorFaktur=$nomorFaktur");
    }

    public function tidakSetujuAkhir($nomorFaktur) {
        //Query update from ... where id = ...
        $this->db->query("update spk set statusPersetujuan='Tidak Disetujui' where nomorFaktur=$nomorFaktur");
    }

    public function updateStokProduk2($id,$stok) {
        $sql    = "UPDATE materialdasar set stokMaterial='$stok' where kodeMaterial='$id'";
        $query  = $this->db->query($sql);
    }



    //Inventoy
    public function insertProduk($dataProduk) {
        $this->db->insert('produk', $dataProduk);
    }

    public function findBOM($id) {
        $sql    = "SELECT * from (SELECT idProduk,b.kodeProduk,namaProduk,idBOM,kodeMaterial,jumlah from billofmaterial a JOIN produk b on a.kodeProduk = b.idProduk) c JOIN materialdasar d on c.kodeMaterial=d.idMaterial where idProduk='$id'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getProduk() {
        $sql    = "SELECT * from produk";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function detailProduk($idProduk) {
        $sql    = "SELECT * from produk WHERE idProduk=$idProduk LIMIT 1";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function listKatalog() {
        $sql    = "SELECT * from produk WHERE statusKatalog='Tampil'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function listKatalogByKategori($kategori) {
        $sql    = "SELECT * from produk WHERE kategori='$kategori' AND statusKatalog='Tampil'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    public function getProd() {
        $sql    = "SELECT *,a.kodeProduk as kode FROM produk a, potempahan b where a.idProduk = b.idProduk";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getBOM() {
        $sql    = "SELECT * from billofmaterial a JOIN materialdasar b on a.kodeMaterial = b.idMaterial";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getBOMdistinct() {
        $sql    = "SELECT distinct(kodeProduk) from billofmaterial a JOIN materialdasar b on a.kodeMaterial = b.idMaterial";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getMaterial() {

        $sql    = "SELECT * FROM `materialdasar` where asal = 'Asli' UNION SELECT * FROM materialdasar where (asal = 'Datang Emas' OR asal ='Balik Abu' OR asal ='Balik Bahan') ORDER BY namaMaterial";

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getMaterialBerlian() {

        $sql    = "SELECT * FROM `materialdasar` where kategori='Berlian'";

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getMaterialZirkon() {

        $sql    = "SELECT * FROM `materialdasar` where kategori='Zirkon'";

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getMaterialDropdown() {
        
        $sql   = "SELECT * FROM `materialdasar`";
        $result = $this->db->query($sql);
        $return = array();
        
        $a=0;
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$a] = $row['namaMaterial'];
                $a=$a+1;
            }
        }
        
        return $return;
    }

    public function getMaterialDropdown2() {
        
        $sql   = "SELECT * FROM `materialdasar`";
        $result = $this->db->query($sql);
        $return = array();
        $a=0;
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$a] = $row['idMaterial'];
                $a=$a+1;
            }
        }
        
        return $return;
    }
    

    public function findProduk2($id) {
        $sql    = "SELECT * from produk where idProduk=$id";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function findKadar($idSPK) {
        $sql    = "SELECT * from spkmasal a, pomasal b where a.nomorPO = b.nomorPO and a.idSPK = $idSPK ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findKadarTempahan($idSPK) {
        $sql    = "SELECT * from spk a, potempahan b where a.nomorPO = b.nomorPO and a.idSPK = $idSPK ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getNewJumlah($idSPK,$idSubSPK) {
        $sql    = "SELECT jumlah FROM `factproduction2` where idSubSPK != $idSubSPK and idAktivitas = 1006 and idSPK = $idSPK";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findProduk6($id) {
        $sql    = "SELECT * from produk where idProduk=$id";
        $query = $this->db->query($sql);
        return $query->result();   
    }
    
    public function findMaterial($id) {
        $sql    = "SELECT * from materialdasar where idMaterial=$id";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function findMaterialByKode($kodeMaterial) {
        $sql    = "SELECT * from materialdasar where kodeMaterial=$kodeMaterial";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function updateProduk2($id, $dataProduk) {
        $this->db->where('idProduk', $id)
                 ->update('produk', $dataProduk);
    }
    
    public function deleteProduk($id) {
        $this->db->where('idProduk', $id)
                 ->delete('produk');
    }

    public function insertMaterial($dataMaterial) {
        $this->db->insert('materialdasar', $dataMaterial);
    }

    public function updateMaterial($id, $dataMaterial) {
        $this->db->where('idMaterial', $id)
                 ->update('materialdasar', $dataMaterial);
    }
    
    public function deleteMaterial($id) {
        $this->db->where('idMaterial', $id)
                 ->delete('materialdasar');
    }

    public function insertBOM($dataBOM) {
        $this->db->insert('billofmaterial', $dataBOM);
    }

    public function updateBOM($id, $dataBOM) {
        $this->db->where('idBOM', $id)
                 ->update('billofmaterial', $dataBOM);
    }

    public function insertInventory($dataInventory) {
        $this->db->insert('stokbarang', $dataInventory);
    }

    public function editInventory($id, $dataInventory) {
        $this->db->where('idStok', $id)
                 ->update('stokbarang', $dataInventory);
    }
    
    public function deleteInventory($id) {
        $this->db->where('idStok', $id)
                 ->delete('stokbarang');
    }

    public function getStokProduk() {
        $sql    = "SELECT * FROM (SELECT a.idStok,a.idPIC,a.nomorPO,a.tipeBarang,a.kodeBarang,a.jumlah,a.satuan,a.jenisPergerakanBarang,a.tipePergerakan,a.statusTransfer,a.hargaBeli,a.tanggal,a.keterangan, DATE_FORMAT (a.tanggal,'%d %M %Y') AS tgl, b.namaMaterial, c.nama as namapic FROM stokbarang a, materialdasar b, user c where a.kodeBarang = b.kodeMaterial and a.idPIC = c.idUser AND a.tipeBarang='Material Dasar' 
               UNION SELECT a.idStok,a.idPIC,a.nomorPO,a.tipeBarang,a.kodeBarang,a.jumlah,a.satuan,a.jenisPergerakanBarang,a.tipePergerakan,a.statusTransfer,a.hargaBeli,a.tanggal,a.keterangan, DATE_FORMAT (a.tanggal,'%d %M %Y') AS tgl, b.namaProduk,  c.nama FROM stokbarang a, produk b, user c where a.kodeBarang = b.idproduk and a.idPIC = c.idUser and (a.tipeBarang!='Material Dasar')) a ORDER BY idStok DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function updateStokProduk($id,$stok) {
        $sql    = "UPDATE produk set stok='$stok' where kodeProduk='$id'";
        $query  = $this->db->query($sql);
    }

    public function findStok($id) {
        $sql    = "SELECT * from stokbarang where idStok='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function findProduk3($id) {
        $sql    = "SELECT * from produk where kodeProduk='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function deleteBOM($id) {
        $this->db->where('idBOM', $id)
                 ->delete('billofmaterial');
    }


    public function getSPK() {
        $sql    = "SELECT *, DATE_FORMAT (lastModified,'%d %M %Y') AS tglspk FROM spk WHERE idSPK IN (select DISTINCT(idSPK) FROM rencanaproduksi) ORDER BY lastModified DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function rekapBerat(){
        $sql= "SELECT * FROM `factproduction` a JOIN aktivitas b JOIN spk c on a.idAktivitas=b.idAktivitas AND a.idSPK=c.idSPK";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }

    public function getMovement() {
        $sql    = "SELECT idProduk,kodeProduk,namaProduk,stok from produk UNION SELECT idMaterial,kodeMaterial,namaMaterial,stokMaterial FROM materialdasar order by namaProduk ";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function findProduk4($id) {
        $sql    = "SELECT * from materialdasar where kodeMaterial='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    public function getJadwal2($nomorFaktur)
    {
        $sql = "SELECT * FROM `rencanaproduksi` a, spk b where a.idSPK=b.idSPK AND b.nomorFaktur='$nomorFaktur'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getAktivitasDefault()
    {
        $sql = "SELECT * FROM aktivitas";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getJadwal3($nomorFaktur)
    {
        $sql = "SELECT * FROM (SELECT a.idAktivitas,c.namaAktivitas, DATE_FORMAT (a.startDate,'%Y-%m-%d') AS startDate,DATE_FORMAT (a.endDate,'%Y-%m-%d') AS endDate FROM `rencanaproduksi` a, spk b, aktivitas c where a.idSPK=b.idSPK AND a.idAktivitas=c.idAktivitas AND b.nomorFaktur=$nomorFaktur UNION
SELECT c.idAktivitas,c.namaAktivitas,'' as startDate , '' as endDate FROM aktivitas c) f GROUP BY f.idAktivitas";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function hapusProdukAktivitas($idProduk) {
        //Query delete ... where id=...
        $this->db->where('idProduk', $idProduk)
                 ->delete('produkaktivitas');
    }

    public function hapusRencana($idSPK) {
        //Query delete ... where id=...
        $this->db->where('idSPK', $idSPK)
                 ->delete('rencanaproduksi');
    }

    public function getStokBOM($nomorFaktur) {
        $sql = "SELECT a.nomorFaktur, c.namaMaterial, CONCAT(c.stokMaterial,' ',c.satuan) as stok, CONCAT(b.jumlah,' ',c.satuan) as jml, CONCAT((round(c.stokMaterial - b.jumlah,1)),' ',c.satuan) as stokakhir, (c.stokMaterial - b.jumlah) as jum, c.safetyStock as ss from spk a, billofmaterial b, materialdasar c where a.idProduk = b.kodeProduk and b.kodeMaterial = c.idMaterial and a.nomorFaktur = $nomorFaktur";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function stokEmas() {
        $sql="SELECT 'EMAS' as material,SUM(stokMaterial) as jumlah,satuan FROM `materialdasar` WHERE kategori= 'Emas'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function barangMasuk() {
        $sql="SELECT 'Barang Masuk' as jenisPergerakanBarang,COUNT(*) as jumlah FROM `stokbarang` where jenisPergerakanBarang = 'IN'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function barangKeluar() {
        $sql="SELECT 'Barang Keluar' as jenisPergerakanBarang,COUNT(*) as jumlah FROM `stokbarang` where jenisPergerakanBarang = 'OUT'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getMaterialDasar() {
        $sql    = "SELECT * from materialdasar ORDER BY stokMaterial DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    public function getMaterialDasar2() {
        $sql    = "SELECT * from materialdasar ORDER BY stokMaterial DESC LIMIT 10";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function trackPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT b.idSPK, b.idAktivitas, b.idPIC, b.RealisasiStartDate, b.RealisasiEndDate, b.statusWork, a.*, c.* FROM spk a RIGHT JOIN factproduction b ON a.idSPK = b.idSPK LEFT JOIN aktivitas c ON b.idAktivitas = c.idAktivitas WHERE a.nomorPO = '$nomorPO'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function trackPOMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT c.namaAktivitas, b.* FROM spkmasal a RIGHT JOIN factproduction2 b ON a.idSPK = b.idSPK LEFT JOIN aktivitas c ON b.idAktivitas = c.idAktivitas WHERE a.nomorPO = $nomorPO ORDER BY b.idSubSPK");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function jumlahSubSPK($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM subspk WHERE idSPK=$nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function dataUmum($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM potempahan a LEFT JOIN customer b ON a.idCustomer=b.idCustomer WHERE nomorPO = '$nomorPO'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function trackAdministrasi($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk WHERE nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    
    public function getAktivitas2() {
        $sql   = "SELECT * FROM aktivitas WHERE idAktivitas NOT IN ('1001','1002')";
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    
    public function listCustomer(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM customer order by namaCustomer");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listCustomerInvoice(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT DISTINCT(a.idCustomer),a.namaCustomer,a.nomorTelepon FROM customer a RIGHT JOIN pomasal b ON a.idCustomer=b.idCustomer LEFT JOIN spkmasal c ON b.nomorPO=c.nomorPO WHERE c.statusSPK='Done' AND b.nomorPO NOT IN (SELECT nomorPO FROM invoicemassal)");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cariCustomer($idCustomer){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM customer WHERE idCustomer=$idCustomer");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findKloter($kloter){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM kloter a, spk b, potempahan c WHERE a.idKloter = '$kloter' and a.idSPK = b.idSPK and b.nomorPO = c.nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findNamaMaterial($nama){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM materialdasar WHERE namaMaterial = '$nama' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOService(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseorderservice a LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poTerakhirService(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseorderservice ORDER BY nomorPO DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOService($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseorderservice a LEFT JOIN customer c ON a.idCustomer = c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO='$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function spkTerakhirService(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice ORDER BY idSPK DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAktivitasService(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM aktivitasservice");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPKbyFaktur($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice where nomorFaktur = '$nomorFaktur' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }

    public function findSPKbyPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice where nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }
    
    public function findSPKTempahanbyPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spk where nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }

    public function cariPOTempahan($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM potempahan a LEFT JOIN spk b ON a.nomorPO=b.nomorPO where a.nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }
    
    public function getAktivitasService($nomorFaktur) {
        $sql   = "SELECT * FROM rencanaproduksiservice r, spkservice s where s.idSPK = r.idSPK and s.nomorFaktur = $nomorFaktur order by r.idAktivitas asc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function listSPKService(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice a LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekSPKService($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getSalesService() {

        $sql   = "SELECT *, DATE_FORMAT(tanggalMasuk, '%d %M %Y %h:%m:%i') AS tanggal FROM purchaseorderservice po, customer c, user u WHERE po.idSalesPerson = u.idUser  AND po.idCustomer = c.idCustomer AND po.nomorPO NOT IN( SELECT nomorPO FROM spkservice)";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getDetailSalesService() {

        $sql   = "SELECT * FROM purchaseorderservice po, detailpurchaseorderservice d WHERE po.idPO = d.idPO";
        $hasil = $this->db->query($sql);
        
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getDetailSalesService2($nomorPO) {

        $sql   = "SELECT * FROM purchaseorderservice po, detailpurchaseorderservice d WHERE po.idPO = d.idPO AND po.nomorPO='$nomorPO'";
        $hasil = $this->db->query($sql);
        
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getBeratHargaService($nomorPO) {

        $sql   = "SELECT po.idPO,po.nomorPO,SUM(d.berat) as berat,SUM(d.jumlah) as jumlah,SUM(d.harga) as harga FROM purchaseorderservice po, detailpurchaseorderservice d WHERE po.idPO = d.idPO AND po.nomorPO='$nomorPO' GROUP BY po.nomorPO";
        $hasil = $this->db->query($sql);
        
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getProsesService($idAktivitas) {

        $sql   = "SELECT  s.durasi,f.berat, f.statusBerat, f.kembali, r.endDate, r.startDate, DATE_FORMAT( r.endDate, '%m/%d/%Y %h:%m:%i' ) AS tgs , DATE_FORMAT( r.startDate, '%d %M %Y %h:%m:%i' ) AS tglmulai, DATE_FORMAT( r.endDate, '%d %M %Y %h:%m:%i' ) AS tglselesai, f.idAktivitas,f.idPIC,f.idSPK, f.statusWork, f.statusSPK, f.idProProd, po.nomorPO, s.nomorFaktur, po.tipeOrder, c.namaCustomer, k.nama AS namaSales, u.nama AS namaPIC, s.statusJadwal, DATE_FORMAT(tanggalMasuk, '%d %M %Y %h:%m:%i') AS tanggal FROM purchaseorderservice po, customer c, spkservice s, factproductionservice f, rencanaproduksiservice r, user u, user k WHERE po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND f.idPIC = u.idUser AND po.idSalesPerson = k.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork = 'On Progress'
            UNION
            SELECT s.durasi,f.berat, f.statusBerat, f.kembali, r.endDate, r.startDate, DATE_FORMAT( r.endDate, '%m/%d/%Y %h:%m:%i' ) AS tgs , DATE_FORMAT( r.startDate, '%d %M %Y %h:%m:%i' ) AS tglmulai, DATE_FORMAT( r.endDate, '%d %M %Y %h:%m:%i' ) AS tglselesai, '0' as idPIC, f.idAktivitas, f.idSPK, f.statusWork, f.statusSPK, f.idProProd, po.nomorPO, s.nomorFaktur, po.tipeOrder, c.namaCustomer, u.nama AS namaSales, '-' AS namaPIC, s.statusJadwal, DATE_FORMAT(tanggalMasuk, '%d %M %Y %h:%m:%i') AS tanggal FROM purchaseorderservice po, customer c, spkservice s, factproductionservice f, rencanaproduksiservice r, user u WHERE po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND po.idSalesPerson = u.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork = 'Belum ada PIC'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRecordService() {

        $sql   = "SELECT idSPK, idAktivitas, MAX(namaAktivitas) AS aktivitas, MAX( DATE_FORMAT(startDate, '%d %M %Y %h:%m:%i') ) AS sd, MAX( DATE_FORMAT(RealisasiStartDate, '%d %M %Y %h:%m:%i') ) AS rsd, MAX( DATE_FORMAT(endDate, '%d %M %Y %h:%m:%i') ) AS ed, MAX( DATE_FORMAT(RealisasiEndDate, '%d %M %Y %h:%m:%i') ) AS red, MAX(statusWork) AS stat, MAX(state) AS STATUS FROM ( SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, f.RealisasiStartDate, r.endDate, f.RealisasiEndDate, f.statusWork, ( CASE WHEN( DATE_ADD(f.RealisasiEndDate, INTERVAL -1 DAY) <= r.endDate ) THEN 'On Time' ELSE 'Terlambat' END ) AS state FROM factproductionservice f JOIN rencanaproduksiservice r ON f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas JOIN aktivitasservice a ON f.idAktivitas = a.idAktivitas UNION ALL SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, '0000-00-00 00:00:00' AS RealisasiStartDate, r.endDate, '0000-00-00 00:00:00' AS RealisasiEndDate, '' AS statusWork, '' AS state FROM rencanaproduksiservice r JOIN aktivitasservice a ON r.idAktivitas = a.idAktivitas ) t GROUP BY idAktivitas, idSPK ORDER BY idspk, idaktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getBeratService() {

        $sql   = "SELECT a.*,IFNULL(b.nama,'Belum ada PIC') as nama FROM (SELECT max(idProProd) as idProProd, idSPK, idAktivitas, max(namaAktivitas) as namaAktivitas, max(berat) as berat, max(beratAwal) as beratAwal, max(kembali) as kembali, idPIC, max(statusBerat) as statusBerat FROM ( SELECT f.idProProd, f.idSPK, f.idAktivitas, a.namaAktivitas, f.berat, f.beratAwal, f.kembali, f.idPIC, f.statusBerat FROM factproductionservice f, aktivitasservice a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas >= 1001 UNION ALL SELECT '0' AS idProProd, r.idSPK, r.idAktivitas, a.namaAktivitas, '0' AS berat, '0' AS beratAwal, '0' AS kembali, '0' as idPIC, '0' as statusBerat FROM aktivitasservice a, rencanaproduksiservice r WHERE a.idAktivitas = r.idAktivitas AND a.idAktivitas >= 1001 ) t group by idAktivitas, idSPK order by idSPK, idAktivitas) a LEFT JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getProsesDetailService($idProProd) {
        $sql   = "SELECT * from factproductionservice where idProProd = $idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getNextAktivitasService($idSPK, $idAktivitas) {

        $sql   = "SELECT * FROM `rencanaproduksiservice` where idSPK = $idSPK and idAktivitas > $idAktivitas order by idAktivitas limit 1";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getKloterSPK() {
        $sql   = "SELECT * FROM spk s, produk p, potempahan d where s.idProduk = p.idProduk and s.nomorPO = d.nomorPO and s.statusJadwal = 'Sudah Ada' and s.statusDesain = 'Disetujui' and s.idSPK not in (SELECT idSPK from kloter)";
        $query = $this->db->query($sql);
        
        return $query->result();  
    }

    public function getKloterSPK10() {
        $sql   = "SELECT * FROM spk s, produk p, potempahan d where s.idProduk = p.idProduk and s.nomorPO = d.nomorPO and s.statusJadwal = 'Sudah Ada' and s.statusDesain = 'Disetujui' and s.statusPrint = 'Sudah' and s.idSPK not in (SELECT idSPK from kloter)";
        $query = $this->db->query($sql);
        
        return $query->result();  
    }

    public function getNextAktivitas($idProduk, $idAktivitas) {

        $sql   = "SELECT * FROM `produkaktivitas` where idProduk = $idProduk and idAktivitas > $idAktivitas order by idAktivitas limit 1";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getAktivitas($nomorFaktur) {
        $sql   = "SELECT * FROM rencanaproduksi r, spk s where s.idSPK = r.idSPK and s.nomorFaktur = $nomorFaktur order by r.idAktivitas asc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    

     public function getDesain() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap,DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal,DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal FROM potempahan po, produk pr, customer c, spk s, user u, rencanaproduksi r
            WHERE r.idSPK = s.idSPK and po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and (s.statusDesain = 'Proses Desain' or s.statusDesain = 'Ditolak') and s.statusJadwal = 'Sudah Ada' and r.idAktivitas = 1001";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getMenunggu() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap,DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal,DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal FROM potempahan po, produk pr, customer c, spk s, user u, rencanaproduksi r
            WHERE r.idSPK = s.idSPK and po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and (s.statusDesain = 'Menunggu Persetujuan') and r.idAktivitas = 1002";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getPrint() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap,DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal,DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal FROM potempahan po, produk pr, customer c, spk s, user u, rencanaproduksi r
            WHERE r.idSPK = s.idSPK and po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and (s.statusPrint = 'Proses Print') and r.idAktivitas = 1002";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getPenjadwalan() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal,DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, DATE_FORMAT(tanggalApprovalDesain, '%d %M %Y') AS tanggaldes FROM potempahan po, produk pr, customer c, spk s, user u WHERE po.idSalesPerson = u.idUser AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND s.statusJadwal != 'Sudah Ada' and s.statusPersetujuan != 'Disetujui'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getGroup() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap, DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal, DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, DATE_FORMAT(tanggalApprovalDesain,'%d %M %Y') as tanggaldes FROM potempahan po, produk pr, customer c, spk s, user u, rencanaproduksi r

            WHERE r.idSPK = s.idSPK and po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and s.statusDesain = 'Disetujui' and r.idAktivitas = 1004 and s.idSPK not in (select idSPK from kloter) and s.idSPK in (select idSPK from factproduction where statusWork = 'Done' )";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getGroup2() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT(tanggalApprovalJadwal, '%d %M %Y') AS tanggaljadwal, DATE_FORMAT( tanggalEstimasiPenyelesaian, '%d %M %Y' ) AS tanggalSelesai, DATE_FORMAT(tanggalApprovalDesain, '%d %M %Y') AS tanggaldes FROM potempahan po, produk pr, customer c, spk s, USER u, rencanaproduksi r, kloter kl

            WHERE s.idSPK = kl.idSPK and r.idSPK = s.idSPK AND po.idSalesPerson = u.idUser AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND s.statusDesain = 'Disetujui' AND r.idAktivitas = 1003 AND s.idSPK IN( SELECT idSPK FROM kloter ) AND s.idSPK NOT IN( SELECT idSPK FROM factproduction WHERE idAktivitas = 1005 )";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getLilin($idAktivitas) {

        $sql   = "

            SELECT *, DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai, $idAktivitas as idAktivitas, DATE_FORMAT(r.endDate, '%m/%d/%Y') AS tgs, DATE_FORMAT(r.startDate, '%d %M %Y') AS tglmulai, DATE_FORMAT(r.endDate, '%d %M %Y') AS tglselesai, k.nama AS namaSales, LEFT(pr.namaProduk, 20) AS namaProduk, u.nama AS namaPIC, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT( tanggalApprovalDesain, '%d %M %Y' ) AS tanggaldes, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal, DATE_FORMAT( tanggalApprovalPersetujuan, '%d %M %Y' ) AS tanggalsetuju FROM potempahan po, produk pr, customer c, spk s, factproduction f, rencanaproduksi r, user u, user k WHERE  po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND f.idPIC = u.idUser AND po.idSalesPerson = k.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork != 'Done' ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getProses($idAktivitas) {

        $sql   = "

            SELECT *, $idAktivitas as idAktivitas, DATE_FORMAT(r.endDate, '%m/%d/%Y') AS tgs, DATE_FORMAT(r.startDate, '%d %M %Y') AS tglmulai, DATE_FORMAT(r.endDate, '%d %M %Y') AS tglselesai, k.nama AS namaSales, LEFT(pr.namaProduk, 20) AS namaProduk, u.nama AS namaPIC, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT( tanggalApprovalDesain, '%d %M %Y' ) AS tanggaldes, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal, DATE_FORMAT( tanggalApprovalPersetujuan, '%d %M %Y' ) AS tanggalsetuju, DATE_FORMAT(tanggalEstimasiPenyelesaian,'%d %M %Y') as tanggalSelesai FROM potempahan po, produk pr, customer c, spk s, factproduction f, rencanaproduksi r, user u, user k, kloter kl WHERE s.idSPK = kl.idSPK and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND f.idPIC = u.idUser AND po.idSalesPerson = k.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork != 'Done' ORDER BY idKloter";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRecord() {

        $sql   = "

            SELECT idSPK, idAktivitas, MAX(namaAktivitas) AS aktivitas, MAX( DATE_FORMAT(startDate, '%d %M %Y') ) AS sd, MAX( DATE_FORMAT(RealisasiStartDate, '%d %M %Y') ) AS rsd, MAX( DATE_FORMAT(endDate, '%d %M %Y') ) AS ed, MAX( DATE_FORMAT(RealisasiEndDate, '%d %M %Y') ) AS red, MAX(statusWork) AS stat, MAX(state) AS STATUS FROM ( SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, f.RealisasiStartDate, r.endDate, f.RealisasiEndDate, f.statusWork, ( CASE WHEN( DATE_ADD( f.RealisasiEndDate, INTERVAL -1 DAY ) <= r.endDate ) THEN 'On Time' ELSE 'Terlambat' END ) AS state FROM factproduction f JOIN rencanaproduksi r ON f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas JOIN aktivitas2 a ON f.idAktivitas = a.idAktivitas UNION ALL SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, '0000-00-00 00:00:00' AS RealisasiStartDate, r.endDate, '0000-00-00 00:00:00' AS RealisasiEndDate, '' AS statusWork, '' AS state FROM rencanaproduksi r JOIN aktivitas2 a ON r.idAktivitas = a.idAktivitas ) t WHERE idAktivitas > 1003 GROUP BY idAktivitas, idSPK ORDER BY idspk, idaktivitas";
        
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getKloter($idAktivitas) {

        $sql   = "SELECT * FROM factproduction f JOIN (SELECT idKloter as idKloter, MAX(nama) AS nama, MAX(kadar) AS kadar,MAX(beratKotor) AS beratKotor,MAX(beratKaret) AS beratKaret,MAX(tgl_kloter) AS tgl_kloter, MIN(idSPK) AS idSPK FROM kloter WHERE idSPK IN( SELECT idSPK FROM factproduction WHERE idAKtivitas = $idAktivitas and statusWork != 'Done' ) GROUP BY idKloter ) t ON f.idSPK = t.idSPK WHERE f.idAktivitas = $idAktivitas ORDER BY idKloter";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getKloter2() {

        $sql   = "SELECT * FROM factproduction f JOIN (SELECT idKloter as idKloter, MAX(nama) AS nama, MAX(kadar) AS kadar, MAX(tgl_kloter) AS tgl_kloter, MIN(idSPK) AS idSPK FROM kloter WHERE idSPK IN( SELECT idSPK FROM factproduction WHERE idAKtivitas = 1003 and statusWork = 'Done' ) and idSPK NOT IN( SELECT idSPK FROM factproduction WHERE idAKtivitas = 1005 ) GROUP BY idKloter ) t ON f.idSPK = t.idSPK WHERE f.idAktivitas = 1003";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getIsiKloter($idKloter) {

        $sql   = "SELECT * FROM kloter k, spk s, produk p, potempahan pp LEFT JOIN customer c ON pp.idCustomer=c.idCustomer where s.nomorPO = pp.nomorPO and k.idSPK = s.idSPK and s.idProduk = p.idProduk and k.idKloter = '$idKloter' ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekRework($idSubSPK, $idAktivitas) {

        $sql   = "SELECT * FROM factproduction2 where idSubSPK = $idSubSPK and idAktivitas = $idAktivitas ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findPOPerak($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM poperak a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO=$nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listRekapProduksi(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM rekapproduksi a LEFT JOIN user b ON a.idPIC = b.idUser ORDER By a.idRekapProduksi DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getSPKTempahan($idUser){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*, c.namaAktivitas, d.nomorFaktur, e.kadarBahan FROM factproduction a LEFT JOIN aktivitas c ON a.idAktivitas=c.idAktivitas LEFT JOIN spk d ON a.idSPK=d.idSPK LEFT JOIN potempahan e ON d.nomorPO=e.nomorPO WHERE a.idPIC=$idUser AND a.idProProd NOT IN (SELECT b.idProProd FROM rekapproduksiline b)");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getListSPKMassal($idUser){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*, c.namaAktivitas, d.nomorFaktur,e.kadarBahan FROM factproduction2 a LEFT JOIN aktivitas2 c ON a.idAktivitas=c.idAktivitas LEFT JOIN spkmasal d ON a.idSPK=d.idSPK LEFT JOIN pomasal e ON d.nomorPO=e.nomorPO WHERE a.idPIC=$idUser AND a.idProProd NOT IN (SELECT b.idProProd FROM rekapproduksiline b)");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getListKloter(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM kloter a");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getListKloter2(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM kloter a group by idKloter order by idGroup desc");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPegawai($idUser){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM user WHERE idUser = $idUser");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findRekap($kodeRekapProduksi){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*, c.*, e.nama, e.jabatan, f.nomorFaktur,g.namaAktivitas FROM rekapproduksi a RIGHT JOIN rekapproduksiline b ON a.kodeRekapProduksi=b.kodeRekapProduksi LEFT JOIN factproduction c ON b.idProProd = c.idProProd LEFT JOIN user e ON a.idPIC = e.idUser LEFT JOIN spk f ON c.idSPK=f.idSPK LEFT JOIN aktivitas2 g ON c.idAktivitas=g.idAktivitas  WHERE a.kodeRekapProduksi = '$kodeRekapProduksi'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findRekapMassal($kodeRekapProduksi){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*, c.*, e.nama, e.jabatan, f.nomorFaktur, g.namaAktivitas FROM rekapproduksi a RIGHT JOIN rekapproduksiline b ON a.kodeRekapProduksi=b.kodeRekapProduksi LEFT JOIN factproduction2 c ON b.idProProd = c.idProProd LEFT JOIN user e ON a.idPIC = e.idUser LEFT JOIN spkmasal f ON c.idSPK=f.idSPK LEFT JOIN aktivitas2 g ON c.idAktivitas=g.idAktivitas WHERE a.kodeRekapProduksi = '$kodeRekapProduksi'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekbom2() {
        $sql = "SELECT * from bomtempahan b, kloter k, materialdasar m where b.idKloter = k.idKloter and b.idMaterial = m.idMaterial";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getBOMTempahan($idKloter) {
        $sql = "SELECT DISTINCT * from bomtempahan b, materialdasar m where b.idKloter = '$idKloter' and b.idMaterial = m.idMaterial";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function cekPolishDalam($idSPK, $idAktivitas) {
        $sql = "SELECT * from factproduction where idSPK = $idSPK and idAktivitas = $idAktivitas ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getLastMovement($nomorPO, $idProduk) {
        $sql = "SELECT * FROM `stokbarang` where nomorPO = $nomorPO and tipeBarang = 'Produk Jadi' AND tipePergerakan='Transfer' AND jenisPergerakanBarang='IN' AND kodeBarang=$idProduk";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function cekkloter() {
        $sql   = "SELECT * from kloter";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function updateData2($where, $table, $data) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getStokBOM2($idKloter) {
        $sql = "SELECT *, m.stokMaterial as stok, b.jumlah as jum,b.jumlah as jml,(m.stokMaterial - b.jumlah) as stokakhir, m.safetyStock as ss FROM materialdasar m, bomtempahan b where m.idMaterial = b.idMaterial and b.idKloter = '$idKloter'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getIdKloter($nomorFaktur) {
        $sql = "SELECT * FROM `kloter` a, spk b where a.idSPK = b.idSPK AND b.nomorFaktur = $nomorFaktur";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

 
    
    
    public function listPOTrading() {
        $hasil = $this->db->query("SELECT * FROM purchaseordertrading a LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    
    public function listPOPerak() {
        $hasil = $this->db->query("SELECT * FROM poperak a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.tanggalMasuk DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    
    public function poTerakhirTrading(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseordertrading ORDER BY nomorPO DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
     public function findPOTrading($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseordertrading a LEFT JOIN customer c ON a.idCustomer = c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE nomorPO='$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProdukTrading($kodeProduk){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT *,hargaJual as 'harga' FROM produk WHERE idProduk = '$kodeProduk' AND kategori='trading' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOTradingDetail($idPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM detailpurchaseordertrading a LEFT JOIN produk p on a.idProduk = p.idProduk WHERE idPO='$idPO' AND kategori='trading'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOTradingDetailbyPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM detailpurchaseordertrading a LEFT JOIN produk p on a.idProduk = p.idProduk WHERE nomorPO='$nomorPO' AND kategori='trading'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOTradingDetail2($idDetailPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM detailpurchaseordertrading a LEFT JOIN produktrading p on a.idProduk = p.idProduk WHERE idDetailPO='$idDetailPO'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function findPOTradingbyID($idPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM purchaseordertrading a LEFT JOIN customer c ON a.idCustomer = c.idCustomer LEFT JOIN user d ON a.idSalesPerson = d.idUser WHERE idPO='$idPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function getBeratAkhir($idSPK) {

        $sql   = "SELECT a.*,IFNULL(b.nama,'Belum ada PIC') as nama FROM (SELECT max(idProProd) as idProProd, idSPK, idAktivitas, max(namaAktivitas) as namaAktivitas, max(berat) as berat, max(beratAwal) as beratAwal, max(kembali) as kembali, idPIC, max(statusBerat) as statusBerat, max(statusWork) as statusWork FROM ( SELECT f.idProProd, f.idSPK, f.idAktivitas, a.namaAktivitas, f.berat, f.beratAwal, f.kembali, f.idPIC, f.statusBerat, f.statusWork FROM factproduction f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas = 1014 UNION ALL SELECT '0' AS idProProd, r.idSPK, r.idAktivitas, a.namaAktivitas, '0' AS berat, '0' AS beratAwal, '0' AS kembali, '0' as idPIC, '0' as statusBerat, '0' as statusWork FROM aktivitas a, rencanaproduksi r WHERE a.idAktivitas = r.idAktivitas AND a.idAktivitas = 1014) t where t.idSPK = '$idSPK' AND t.statusWork = 'Done' group by idAktivitas, idSPK order by idSPK, idAktivitas) a LEFT JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    public function findInvoice($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM invoiceheader where nomorPO = $nomorPO LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPO3(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT
                                          a.*,
                                          d.statusSPK,
                                          e.idHeader,
                                          e.jenisInvoice
                                        FROM
                                          (
                                          SELECT
                                            a.idPO,
                                            a.nomorPO,
                                            a.idProduk,
                                            a.idCustomer,
                                            a.idSalesPerson,
                                            a.tanggalMasuk,
                                            a.tanggalEstimasiPenyelesaian,
                                            a.hargaBahan,
                                            a.upah,
                                            a.datangEmas,
                                            a.hargaDatangEmas,
                                            a.kadarDatangEmas,
                                            a.datangBerlian,
                                            a.jumlahDatangBerlian,
                                            a.upahPasangBerlian,
                                            a.tipeCustomer,
                                            a.pekerjaanTambahan,
                                            a.keteranganTambahan,
                                            a.biayaTambahan,
                                            a.metode,
                                            a.panjar,
                                            a.totalHarga,
                                            a.lastModified,
                                            a.tipeOrder,
                                            b.kodeProduk,
                                            b.namaProduk,
                                            b.jenisProduk,
                                            a.bahan,
                                            a.kadarBahan,
                                            a.namaBatu,
                                            a.beratBatu,
                                            a.ukuranJari,
                                            a.berlian,
                                            a.beratBerlian,
                                            a.hargaBerlian,
                                            a.batuZirkon,
                                            a.jumlahBatuZirkon,
                                            a.hargaBatuZirkon,
                                            a.krumWarna,
                                            a.hargaKrumWarna,
                                            a.keteranganKrum,
                                            a.tipeIkatan,
                                            a.model,
                                            b.hargaJual,
                                            b.hargaModal,
                                            b.stok,
                                            c.namaCustomer,
                                            c.nomorTelepon
                                          FROM
                                            potempahan a
                                          LEFT JOIN
                                            produk b ON a.idProduk = b.idProduk
                                          LEFT JOIN
                                            customer c ON a.idCustomer = c.idCustomer
                                        ) a
                                        LEFT JOIN
                                          spk d ON a.nomorPO = d.nomorPO
                                        LEFT JOIN
                                          invoiceheader e ON a.nomorPO = e.nomorPO
                                        WHERE
                                          d.statusSPK = 'Done' AND e.jenisInvoice IS NULL");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findInvoice3($nomorPO,$table){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM invoiceheader a JOIN $table b ON a.idHeader = b.idHeader WHERE b.nomorPO = $nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOMassalByCustomer($idCustomer){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer = c.idCustomer LEFT JOIN user f ON a.idSalesPerson=f.idUser LEFT JOIN spkmasal d ON a.nomorPO = d.nomorPO WHERE a.idCustomer=$idCustomer AND d.statusSPK = 'Done' AND a.nomorPO NOT IN (SELECT e.nomorPO FROM invoicemassal e)");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPOMassal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("select * from (SELECT max(berat) as berat, sum(jumlah) as jumlah, idSPK as idSPK FROM factproduction2 where idAktivitas = 1014 and statusSPK = 'Done' group by idAktivitas, idSPK) a, spkmasal b, pomasal c, produk d, customer e, user f where a.idSPK = b.idSPK and b.nomorPO = c.nomorPO and c.idProduk=d.idProduk and c.idCustomer=e.idCustomer and c.idSalesPerson=f.idUser and c.nomorPO IN ($nomorPO)");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPOFromInvoice($idHeader){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT nomorPO FROM invoiceheader WHERE idHeader=$idHeader");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listPO4(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT
                                      a.*,
                                      d.statusSPK,
                                      e.idHeader,
                                      e.jenisInvoice
                                    FROM
                                      (
                                      SELECT
                                        a.idPO,
                                        a.nomorPO,
                                        a.idProduk,
                                        a.idCustomer,
                                        a.idSalesPerson,
                                        a.tanggalMasuk,
                                        a.tanggalEstimasiPenyelesaian,
                                        a.hargaBahan,
                                        a.upah,
                                        a.datangEmas,
                                        a.hargaDatangEmas,
                                        a.kadarDatangEmas,
                                        a.datangBerlian,
                                        a.jumlahDatangBerlian,
                                        a.upahPasangBerlian,
                                        a.tipeCustomer,
                                        a.pekerjaanTambahan,
                                        a.keteranganTambahan,
                                        a.biayaTambahan,
                                        a.metode,
                                        a.panjar,
                                        a.totalHarga,
                                        a.lastModified,
                                        a.tipeOrder,
                                        b.kodeProduk,
                                        b.namaProduk,
                                        b.jenisProduk,
                                        a.bahan,
                                        a.kadarBahan,
                                        a.namaBatu,
                                        a.beratBatu,
                                        a.ukuranJari,
                                        a.berlian,
                                        a.beratBerlian,
                                        a.hargaBerlian,
                                        a.batuZirkon,
                                        a.jumlahBatuZirkon,
                                        a.hargaBatuZirkon,
                                        a.krumWarna,
                                        a.hargaKrumWarna,
                                        a.keteranganKrum,
                                        a.tipeIkatan,
                                        a.model,
                                        b.hargaModal,
                                        b.hargaJual,
                                        b.stok,
                                        c.namaCustomer,
                                        c.nomorTelepon
                                      FROM
                                        pomasal a
                                      LEFT JOIN
                                        produk b ON a.idProduk = b.idProduk
                                      LEFT JOIN
                                        customer c ON a.idCustomer = c.idCustomer
                                    ) a
                                    LEFT JOIN
                                      spkmasal d ON a.nomorPO = d.nomorPO
                                    LEFT JOIN
                                      invoiceheader e ON a.nomorPO = e.nomorPO
                                    WHERE
                                      d.statusSPK = 'Done' AND e.jenisInvoice IS NULL");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPKMassalbyPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal where nomorPO = '$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findSPKMassalbySPK($idSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO WHERE idSPK=$idSPK LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findProdukPO($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM produkpo where nomorPO='$nomorPO'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findPergerakan($nomorPO,$kodeBarang){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM stokbarang where nomorPO='$nomorPO' and kodeBarang='$kodeBarang' and jenisPergerakanBarang='IN' and tipeBarang='Produk Jadi' AND tipePergerakan='Transfer'");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findBeratProd($idSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM factproduction2 WHERE idSPK=$idSPK AND idAktivitas=1014 LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }

    public function findSPKMasal($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE nomorFaktur=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getSales2() {

        $sql   = "SELECT *, left(pr.namaProduk, 20) as namap , DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal FROM pomasal po, produk pr, customer c, user u WHERE po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND po.nomorPO NOT IN( SELECT nomorPO FROM spkmasal )";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getPenjadwalan2() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT(tanggalEstimasiPenyelesaian, '%d %M %Y') AS tanggalSelesai FROM pomasal po, produk pr, customer c, spkmasal s, user u WHERE po.idSalesPerson = u.idUser AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND s.statusJadwal != 'Sudah Ada' and s.statusPersetujuan != 'Disetujui'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    public function getProsesMassal1($idAktivitas) {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal,DATE_FORMAT(tanggalEstimasiPenyelesaian, '%d %M %Y') AS tanggalSelesai, DATE_FORMAT( tanggalApprovalJadwal, '%d %M %Y' ) AS tanggaljadwal, k.nama AS namapic, u.nama AS namasales FROM pomasal po, produk pr, customer c, spkmasal s, user u, user k, factproduction2 f, rencanaproduksi2 r WHERE po.idSalesPerson = u.idUser AND k.idUser = f.idPIC AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idAktivitas = $idAktivitas AND s.idSPK = f.idSPK AND f.statusWork != 'Done' and f.idSPK = r.idSPK and r.idAktivitas = $idAktivitas ORDER BY f.idSPK,f.idSubSPK";
        $query = $this->db->query($sql);
        
        return $query->result();

    }

    public function getDone() {

        $sql = "SELECT e.*, f.namaProduk AS namap, f.jenisProduk, e.kadarBahan, h.namaCustomer AS namaCustomer, g.nama AS namasales, tanggal, tanggalSelesai FROM ( SELECT a.*, b.*, c.*, po.idSalesPerson, po.kadarBahan, d.*, DATE_FORMAT(po.tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT( po.tanggalEstimasiPenyelesaian, '%d %M %Y' ) AS tanggalSelesai FROM ( SELECT idSPK AS id1, MAX(jumlah) AS max FROM `factproduction2` WHERE idAktivitas = 1006 GROUP BY idspk ) a, ( SELECT idSPK AS id2, SUM(jumlahNow) AS jumlah,max(statusBerat) as statusBerat, max(idProProd) as idProProd FROM `factproduction2` WHERE idAktivitas = 1014 AND statusWork = 'On Progress' GROUP BY idspk ) b, ( SELECT idSPK AS id3, COUNT(DISTINCT idSubSPK) AS jml1, COUNT(DISTINCT idWadah) AS jml2 FROM `factproduction2` GROUP BY idspk ) d, spkmasal c, pomasal po WHERE a.id1 = b.id2 AND c.idSPK = a.id1 AND a.id1 = d.id3 AND po.nomorPO = c.nomorPO ORDER BY (MAX - jumlah) ) e, produk f, user g, customer h WHERE e.idProduk = f.idProduk AND e.idCustomer = h.idCustomer AND e.idSalesPerson = g.idUser";
        $query = $this->db->query($sql);
        
        return $query->result();

    }


    public function getSeparasi2() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal, DATE_FORMAT( tanggalApprovalJadwal, '%d %M %Y' ) AS tanggaljadwal, k.nama AS namapic, u.nama AS namasales FROM pomasal po, produk pr, customer c, spkmasal s, user u, user k, factproduction2 f, rencanaproduksi r WHERE po.idSalesPerson = u.idUser AND k.idUser = f.idPIC AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idAktivitas = 1007 AND s.idSPK = f.idSPK AND f.statusWork != 'Done' and f.idSPK = r.idSPK and r.idAktivitas = 1007 and f.idSubSPK not in (SELECT idsubspk from wadah) ORDER BY f.idproprod";
        $query = $this->db->query($sql);
        
        return $query->result();

    }

    public function getSeparasi() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalEstimasiPenyelesaian, '%d %M %Y') AS tanggalSelesai, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal,DATE_FORMAT(tanggalApprovalJadwal, '%d %M %Y') AS tanggaljadwal, u.nama as namasales FROM pomasal po, produk pr, customer c, spkmasal s, user u WHERE po.idSalesPerson = u.idUser AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND s.statusJadwal = 'Sudah Ada' AND s.statusPersetujuan != 'Disetujui'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekSubSPK() {
        $sql   = "SELECT * from subspk";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getSubSPK($idSPK) {
        $sql   = "SELECT * from subspk where idSPK = $idSPK ORDER BY idSubSPK DESC";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getWadah($idSubSPK) {
        $sql   = "SELECT * from wadah where idSubSPK = $idSubSPK ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getAnak($nomorPO) {
        $sql   = "SELECT *,DATE_FORMAT(tanggalEstimasiPenyelesaian, '%d %M %Y') AS tanggalSelesai, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal from produkpo a, produk b, pomasal c, customer e where c.idCustomer = e.idCustomer and a.idProdukChild = b.idProduk and a.nomorPO = $nomorPO and a.nomorPO = c.nomorPO ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    // ----------------------------------------------------------------------------------------------
    public function getSales3() {

        $sql   = "SELECT *, left(pr.namaProduk, 20) as namap , DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal FROM poperak po, produk pr, customer c, user u WHERE po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND po.nomorPO NOT IN( SELECT nomorPO FROM spkperak )";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getPenjadwalan3() {

        $sql   = "SELECT *, LEFT(pr.namaProduk, 20) AS namap, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal FROM poperak po, produk pr, customer c, spkperak s, user u WHERE po.idSalesPerson = u.idUser AND po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND s.statusJadwal != 'Sudah Ada' and s.statusPersetujuan != 'Disetujui'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getGroup3() {

        $sql   = "SELECT *,left(pr.namaProduk, 20) as namap, DATE_FORMAT(tanggalMasuk,'%d %M %Y') as tanggal, DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal FROM poperak po, produk pr, customer c, spkperak s, user u, rencanaproduksi3 r
            WHERE r.idSPK = s.idSPK and po.idSalesPerson = u.idUser and po.idProduk = pr.idProduk and po.idCustomer = c.idCustomer and s.nomorPO = po.nomorPO and s.statusJadwal = 'Sudah Ada' and r.idAktivitas = 1003 and s.idSPK not in (select idSPK from kloter2)";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function listSPK3() {
        $hasil = $this->db->query("SELECT * FROM spkperak a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer ORDER BY a.nomorFaktur DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        } 
    }

    public function getListSPKPerak() { 
        $hasil = $this->db->query("SELECT * FROM poperak po LEFT JOIN customer cu ON po.idCustomer=cu.idCustomer WHERE po.nomorPO NOT IN( SELECT nomorPO FROM spkperak ) order by po.tanggalMasuk DESC"); 
        if($hasil->num_rows() > 0){ 
            return $hasil->result(); 
        } else{ 
            return array(); 
        }  
    }

    public function cekjadwal3() {
        $sql   = "SELECT * from rencanaproduksi3";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekjadwalservice() {
        $sql   = "SELECT * from rencanaproduksiservice";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findSPKPerak($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkperak a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE nomorFaktur=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAktivitas3(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM aktivitas WHERE idAktivitas > 1002");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }


    public function cekkloter3() {
        $sql   = "SELECT * from kloter2";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekbom7() {
        $sql = "SELECT * from bomperak ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getKloterSPK3() {
        $sql   = "SELECT * FROM spkperak s, produk p where s.idProduk = p.idProduk and s.statusJadwal = 'Sudah Ada' and s.statusJadwal = 'Sudah Ada' and s.idSPK not in (SELECT idSPK from kloter2)";
        $query = $this->db->query($sql);
        
        return $query->result();  
    }

    public function getKloter3($idAktivitas) {

        $sql   = "SELECT * FROM factproduction3 f JOIN (SELECT idKloter as idKloter, MAX(nama) AS nama, MAX(kadar) AS kadar, MAX(tgl_kloter) AS tgl_kloter, MIN(idSPK) AS idSPK FROM kloter2 WHERE idSPK IN( SELECT idSPK FROM factproduction3 WHERE idAKtivitas = $idAktivitas and statusWork != 'Done' ) GROUP BY idKloter ) t ON f.idSPK = t.idSPK WHERE f.idAktivitas = $idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    public function getProses3($idAktivitas) {

        $sql   = "

            SELECT $idAktivitas as idAktivitas, f.*, kl.*, f.berat, f.statusBerat, f.kembali, r.endDate, r.startDate, DATE_FORMAT(r.endDate, '%m/%d/%Y') AS tgs, DATE_FORMAT(r.startDate, '%d %M %Y') AS tglmulai, DATE_FORMAT(r.endDate, '%d %M %Y') AS tglselesai, pr.kodeProduk, po.kuantitas, pr.kodeGambar, po.idProduk, f.idAktivitas, f.idPIC, f.idSPK, f.statusWork, f.statusSPK, f.idProProd, po.nomorPO, s.nomorFaktur, po.tipeOrder, c.namaCustomer, k.nama AS namaSales, LEFT(pr.namaProduk, 20) AS namaProduk, pr.jenisProduk, s.prioritas, u.nama AS namaPIC, pr.kadarBahan, pr.model,  s.statusBOM, s.statusJadwal, s.statusPersetujuan, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal,  DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal, DATE_FORMAT( tanggalApprovalPersetujuan, '%d %M %Y' ) AS tanggalsetuju FROM poperak po, produk pr, customer c, spkperak s, factproduction3 f, rencanaproduksi3 r, user u, user k, kloter2 kl WHERE s.idSPK = kl.idSPK and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND f.idPIC = u.idUser AND po.idSalesPerson = k.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork = 'On Progress' 

        UNION 

            SELECT $idAktivitas as idAktivitas, f.*, kl.*, f.berat, f.statusBerat, f.kembali, r.endDate, r.startDate, DATE_FORMAT(r.endDate, '%m/%d/%Y') AS tgs, DATE_FORMAT(r.startDate, '%d %M %Y') AS tglmulai, DATE_FORMAT(r.endDate, '%d %M %Y') AS tglselesai, pr.kodeProduk, po.kuantitas, pr.kodeGambar, '0' AS idPIC, po.idProduk, f.idAktivitas, f.idSPK, f.statusWork, f.statusSPK, f.idProProd, po.nomorPO, s.nomorFaktur, po.tipeOrder, c.namaCustomer, u.nama AS namaSales, LEFT(pr.namaProduk, 20) AS namaProduk, pr.jenisProduk, s.prioritas, '-' AS namaPIC, pr.kadarBahan, pr.model,  s.statusBOM, s.statusJadwal, s.statusPersetujuan, DATE_FORMAT(tanggalMasuk, '%d %M %Y') AS tanggal,  DATE_FORMAT(tanggalApprovalJadwal,'%d %M %Y') as tanggaljadwal, DATE_FORMAT( tanggalApprovalPersetujuan, '%d %M %Y' ) AS tanggalsetuju FROM poperak po, produk pr, customer c, spkperak s, factproduction3 f, rencanaproduksi3 r, user u, kloter2 kl WHERE s.idSPK = kl.idSPK and po.idProduk = pr.idProduk AND po.idCustomer = c.idCustomer AND s.nomorPO = po.nomorPO AND f.idSPK = s.idSPK AND f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas AND po.idSalesPerson = u.idUser AND f.idAktivitas = $idAktivitas AND f.statusWork = 'Belum ada PIC'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRecord3() {

        $sql   = "

            SELECT idSPK, idAktivitas, MAX(namaAktivitas) AS aktivitas, MAX( DATE_FORMAT(startDate, '%d %M %Y') ) AS sd, MAX( DATE_FORMAT(RealisasiStartDate, '%d %M %Y') ) AS rsd, MAX( DATE_FORMAT(endDate, '%d %M %Y') ) AS ed, MAX( DATE_FORMAT(RealisasiEndDate, '%d %M %Y') ) AS red, MAX(statusWork) AS stat, MAX(state) AS STATUS FROM ( SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, f.RealisasiStartDate, r.endDate, f.RealisasiEndDate, f.statusWork, ( CASE WHEN( DATE_ADD(f.RealisasiEndDate, INTERVAL -1 DAY) <= r.endDate ) THEN 'On Time' ELSE 'Terlambat' END ) AS state FROM factproduction3 f JOIN rencanaproduksi3 r ON f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas JOIN aktivitas a ON f.idAktivitas = a.idAktivitas UNION ALL SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, '0000-00-00 00:00:00' AS RealisasiStartDate, r.endDate, '0000-00-00 00:00:00' AS RealisasiEndDate, '' AS statusWork, '' AS state FROM rencanaproduksi3 r JOIN aktivitas a ON r.idAktivitas = a.idAktivitas ) t where idAktivitas > 1003 GROUP BY idAktivitas, idSPK ORDER BY idspk, idaktivitas";
        
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekFactProduction($idSPK,$idAktivitas) {

        $sql   = "SELECT * FROM `factproduction2` where idSPK = $idSPK and idAktivitas = $idAktivitas and statusWork = 'On Progress'" ;
        
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getBerat3() {

        $sql   = "SELECT a.*,IFNULL(b.nama,'Belum ada PIC') as nama FROM (SELECT max(idProProd) as idProProd, idSPK, idAktivitas, max(namaAktivitas) as namaAktivitas, max(berat) as berat, max(beratAwal) as beratAwal, max(kembali) as kembali, idPIC, max(statusBerat) as statusBerat FROM ( SELECT f.idProProd, f.idSPK, f.idAktivitas, a.namaAktivitas, f.berat, f.beratAwal, f.kembali, f.idPIC, f.statusBerat FROM factproduction3 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 UNION ALL SELECT '0' AS idProProd, r.idSPK, r.idAktivitas, a.namaAktivitas, '0' AS berat, '0' AS beratAwal, '0' AS kembali, '0' as idPIC, '0' as statusBerat FROM aktivitas a, rencanaproduksi3 r WHERE a.idAktivitas = r.idAktivitas AND a.idAktivitas > 1002 ) t group by idAktivitas, idSPK order by idSPK, idAktivitas) a LEFT JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekbom8() {
        $sql = "SELECT * from bomperak b, kloter2 k where b.idKloter = k.idKloter";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getIsiKloter2($idKloter) {

        $sql   = "SELECT * FROM kloter2 k, spkperak s, produk p, customer c where s.idCustomer = c.idCustomer and k.idSPK = s.idSPK and s.idProduk = p.idProduk and k.idKloter = '$idKloter' ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getStokBOM3($idKloter) {
        $sql = "SELECT *, m.stokMaterial as stok, b.jumlah as jum,b.jumlah as jml,(m.stokMaterial - b.jumlah) as stokakhir, m.safetyStock as ss FROM materialdasar m, bomperak b where m.idMaterial = b.idMaterial and b.idKloter = '$idKloter'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getLastKodeMaterial() {
        $hasil = $this->db->query("SELECT * from materialdasar order by kodematerial desc LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            $array = array(
            'kodeMaterial'=>0,
            );
             
            $books = (object) $array;
            return array($books);
        }
    }

    public function getLastProdukPO() {
        $hasil = $this->db->query("SELECT * from produkpo order by idProdukPO desc LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            $array = array(
            'idProdukAG'=> 5000,
            );
             
            $books = (object) $array;
            return array($books);
        }
    }

    public function getProsesDetail4($idProProd) {
        $sql   = "SELECT * from factproduction3 where idProProd = $idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function findSPK7($idSPK){
        //Query mencari record berdasarkan ID
        $sql = "SELECT * FROM spkperak where idSPK = $idSPK ";
        $query = $this->db->query($sql);
        return $query->result();  
    }
    

    public function listAktivitasMassal(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM aktivitas WHERE idAktivitas > 1003");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekbom3() {
        $sql = "SELECT * from bommassal ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getWadahTerakhir() {
        $sql = "SELECT * from factproduction2 order by idWadah desc limit 1 ";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getBerat2() {

        $sql   = "SELECT f.idProProd, f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas, a.namaAktivitas , f.berat from factproduction2 f, aktivitas a where f.idaktivitas > 1005 and f.idAktivitas = a.idAktivitas order by f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getProsesDetail2($idProProd) {
        $sql   = "SELECT * from factproduction2 where idProProd = $idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getTrackProduksi($nomorFaktur) {
        $sql   = "SELECT a.*, IFNULL(b.idWadahAsal,'-') as idWadahAsal FROM ( SELECT f.idProProd, f.idProProdAsal, f.idSubSPK, f.idWadah, a.namaAktivitas, f.beratAwal, f.beratTambahan, f.berat, f.jumlah, f.idPIC, f.jumlahNow, f.statusBerat, f.statusWork, u.nama, DATE_FORMAT( f.RealisasiStartDate, '%d %M %Y %T' ) AS sd, IFNULL( DATE_FORMAT( f.RealisasiEndDate, '%d %M %Y %T' ), '-' ) AS ed,DATE_FORMAT(f.RealisasiStartDate, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(f.RealisasiEndDate, '%Y-%m-%d') AS tglend FROM `factproduction2` f, user u, aktivitas a, spkmasal s WHERE f.idpic = u.idUser AND f.idaktivitas = a.idAktivitas AND s.idSPK = f.idspk AND s.nomorFaktur = $nomorFaktur ORDER BY f.idProProd ) a LEFT JOIN ( SELECT idProProd, idWadah AS idWadahAsal FROM factproduction2 ) b ON a.idProProdAsal = b.idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getTrackProduksiTempahan($nomorFaktur) {
        $sql   = "SELECT *, DATE_FORMAT( f.RealisasiStartDate, '%d %M %Y %T' ) AS sd, IFNULL( DATE_FORMAT( f.RealisasiEndDate, '%d %M %Y %T' ), '-' ) AS ed,DATE_FORMAT(f.RealisasiStartDate, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(f.RealisasiEndDate, '%Y-%m-%d') AS tglend FROM `factproduction` f, user u, aktivitas2 a, spk s WHERE f.idpic = u.idUser AND f.idaktivitas = a.idAktivitas AND s.idSPK = f.idspk AND s.nomorFaktur = $nomorFaktur ORDER BY f.idProProd";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getProsesDetail3($idWadah, $idAktivitas) {
        $sql   = "SELECT * from factproduction2 where idWadah = $idWadah and idAktivitas = $idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getIsiSPK($nomorFaktur) {
        $sql   = "SELECT idSPK, idSubSPK, bb.idWadah, cc.idAktivitas, namaAktivitas from (SELECT A.idSPK, B.idSubSPK, C.idWadah FROM spkmasal A LEFT JOIN subspk B ON A.idSPK = B.idSPK LEFT JOIN wadah C ON B.idSubSPK = C.idSubSPK where A.nomorFaktur = $nomorFaktur) aa, (select idWadah, max(idAktivitas) as idAktivitas from factproduction2 where idWadah != 0 group by idwadah) bb, (select idAktivitas, namaAktivitas from aktivitas ) cc where aa.idWadah = bb.idWadah and bb.idAktivitas = cc.idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();   
    }

    public function getjadwal4($nomorFaktur) {
        $sql   = "SELECT *,DATE_FORMAT(r.startDate, '%d %M %Y' ) as sd, DATE_FORMAT(r.endDate, '%d %M %Y' ) as ed FROM aktivitas a, rencanaproduksi r, spkmasal s where s.idSPK = r.idSPK and a.idAktivitas = r.idAktivitas and s.nomorFaktur = '$nomorFaktur' order by r.idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getBom2($nomorFaktur) {
        $sql   = "SELECT a.*, d.idSPK, c.idSubSPK, b.namaMaterial, b.stokMaterial as stok, a.jumlah as jml, b.safetyStock as ss, round((b.stokMaterial - a.jumlah),2) as stokakhir FROM bommassal a, materialdasar b, subspk c, spkmasal d where a.idMaterial = b.idMaterial and c.idSubSPK = a.idSubSPK and c.idSPK = d.idSPK and d.nomorFaktur = $nomorFaktur";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getUserByJabatan($jabatan) {
        $sql   = "SELECT * from user where jabatan = '$jabatan'";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekMaterial($kategori,$kadar) {
        $sql   = "SELECT * from materialdasar where kategori = '$kategori' and kadar = $kadar ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function cekMaterialBalikBahan($kategori,$kadar) {
        $sql   = "SELECT * from materialdasar where kategori = '$kategori' and kadar = $kadar and asal='Balik Bahan' ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getStokMaterial($idPIC, $idMaterial) {
        $sql   = "SELECT (IFNULL((SELECT SUM(a.jumlah) as jmlmasuk FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial and a.idPIC = $idPIC and b.idMaterial = $idMaterial and a.jenisPergerakanBarang = 'IN'),0) - IFNULL((SELECT SUM(a.jumlah) as jmlmasuk FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial and a.idPIC = $idPIC and b.idMaterial = $idMaterial and a.jenisPergerakanBarang = 'OUT'),0)) AS TOT";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getYourStock($idPIC) {
        $sql   = "SELECT a.jenis, a.nama, a.jmlmasuk, c.kadarBahan as kadar,DATE_FORMAT(a.tanggal, '%d %M %Y') AS tgl from (SELECT a.jenisPergerakanBarang as jenis, max(b.namaProduk) as nama, b.idProduk, SUM(a.jumlah) as jmlmasuk, DATE_FORMAT(a.tanggal, '%d %M %Y') AS tanggal FROM stokbarang a, produk b where a.kodeBarang = b.idProduk and a.statusTransfer = 'Valid' AND (a.tipeBarang='Produk Jadi') and a.idPIC = $idPIC GROUP BY a.jenisPergerakanBarang, b.idProduk ORDER BY nama) a, produkpo b, pomasal c where a.idProduk = b.idProdukChild and b.nomorPO = c.nomorPO
        UNION 
        SELECT a.jenisPergerakanBarang as jenis, max(b.namaMaterial) as nama , SUM(a.jumlah) as jmlmasuk, max(b.kadar) as kadar,DATE_FORMAT(a.tanggal, '%d %M %Y') AS tgl FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial  and a.statusTransfer = 'Valid' AND a.tipeBarang='Material Dasar' and a.idPIC = $idPIC GROUP BY a.jenisPergerakanBarang, b.idMaterial
        UNION
        SELECT a.jenisPergerakanBarang as jenis, max(b.namaProduk) as nama , SUM(a.jumlah) as jmlmasuk, max(c.kadarBahan) as kadar,DATE_FORMAT(a.tanggal, '%d %M %Y') AS tgl FROM stokbarang a, produk b, pomasal c where c.idProduk = b.idProduk and a.kodeBarang = b.idProduk  and a.statusTransfer = 'Valid' AND (a.tipeBarang='Produk Semi Jadi') and a.idPIC = $idPIC GROUP BY a.jenisPergerakanBarang, b.idProduk 
        UNION
        SELECT a.jenisPergerakanBarang as jenis, max(b.namaProduk) as nama , SUM(a.jumlah) as jmlmasuk, max(c.kadarBahan) as kadar,DATE_FORMAT(a.tanggal, '%d %M %Y') AS tgl FROM stokbarang a, produk b, potempahan c where c.idProduk = b.idProduk and a.kodeBarang = b.idProduk  and a.statusTransfer = 'Valid' AND (a.tipeBarang='Produk Semi Jadi' or a.tipeBarang='Produk Jadi') and a.idPIC = $idPIC GROUP BY a.jenisPergerakanBarang, b.idProduk
 
ORDER BY tgl DESC,nama LIMIT 50
        ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getStockPIC() {
        $sql   = "SELECT tanggal,idPIC,b.nama,jenis,SUM(lokal) as lokal FROM (select DATE(a.tanggal) as tanggal,a.idPIC,a.jenis, a.nama, a.jmlmasuk, c.kadarBahan, a.jmlmasuk*c.kadarBahan/100 as lokal from (SELECT a.tanggal,a.idPIC as idPIC,a.jenisPergerakanBarang as jenis, max(b.namaProduk) as nama, b.idProduk, SUM(a.jumlah) as jmlmasuk FROM stokbarang a, produk b where a.kodeBarang = b.idProduk and a.statusTransfer = 'Valid' AND (a.tipeBarang='Produk Jadi') and (a.idPIC='1' OR a.idPIC='2' OR a.idPIC='9' OR a.idPIC='19') GROUP BY a.jenisPergerakanBarang, b.idProduk,a.idPIC,DATE(a.tanggal) ORDER BY nama) a, produkpo b, pomasal c where a.idProduk = b.idProdukChild and b.nomorPO = c.nomorPO

            UNION 

            SELECT DATE(a.tanggal) as tanggal,a.idPIC,a.jenisPergerakanBarang as jenis, max(b.namaMaterial) as nama ,SUM(a.jumlah) as jmlmasuk, max(b.kadar) as kadar, SUM(a.jumlah)*max(b.kadar)/100 as lokal FROM stokbarang a, materialdasar b where a.kodeBarang = b.kodeMaterial  and a.statusTransfer = 'Valid' AND a.tipeBarang='Material Dasar' AND (a.idPIC='1' OR a.idPIC='2' OR a.idPIC='9' OR a.idPIC='19')  GROUP BY a.jenisPergerakanBarang, b.idMaterial,a.idPIC,DATE(a.tanggal)

            UNION

            SELECT DATE(a.tanggal) as tanggal,a.idPIC,a.jenisPergerakanBarang as jenis, max(b.namaProduk) as nama , SUM(a.jumlah) as jmlmasuk, max(c.kadarBahan) as kadar, SUM(a.jumlah)*max(c.kadarBahan)/100 as lokal FROM stokbarang a, produk b, pomasal c where c.idProduk = b.idProduk and a.kodeBarang = b.idProduk  and a.statusTransfer = 'Valid' AND (a.tipeBarang='Produk Semi Jadi') AND (a.idPIC=1 OR a.idPIC=2 OR a.idPIC=9 OR a.idPIC=19) GROUP BY a.jenisPergerakanBarang, b.idProduk,a.idPIC,DATE(a.tanggal)) a, user b where a.idPIC=b.idUser GROUP BY tanggal,idPIC,jenis

        ORDER BY tanggal desc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getPIC() {
        $sql   = "SELECT DATE(tanggal) as tanggal,b.nama,idPIC from stokbarang a, user b where (a.idPIC=1 OR a.idPIC=2 OR a.idPIC=9 OR a.idPIC=19) and a.idPIC=b.idUser GROUP BY DATE(a.tanggal),idPIC order by DATE(tanggal) DESC";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getTanggal() {
        $sql   = "SELECT DATE(tanggal) as tanggal, idPIC from stokbarang a where (a.idPIC=1 OR a.idPIC=2 OR a.idPIC=9 OR a.idPIC=19)GROUP BY DATE(a.tanggal) order by DATE(tanggal) DESC";
        $query = $this->db->query($sql);
        
        return $query->result();
    }


    public function getPending($idPIC) {
        $sql   = "SELECT a.*, b.namaMaterial, b.kadar FROM stokbarang a, materialdasar b WHERE a.idPIC = $idPIC AND a.statusTransfer = 'Pending' AND a.kodeBarang = b.kodeMaterial AND a.tipeBarang = 'Material Dasar' 

        UNION 
        SELECT a.*, (b.namaProduk) AS namaMaterial, c.kadarBahan AS kadar FROM stokbarang a, produk b, pomasal c WHERE b.idProduk = c.idProduk AND a.idPIC = $idPIC AND a.statusTransfer = 'Pending' AND a.kodeBarang = b.idProduk AND( a.tipeBarang = 'Produk Jadi' OR a.tipeBarang = 'Produk Semi Jadi') 

        UNION 
        SELECT a.*, (b.namaProduk) AS namaMaterial, d.kadarBahan as kadar FROM stokbarang a, produk b, produkpo c, pomasal d WHERE a.idPIC = $idPIC AND a.statusTransfer = 'Pending' AND a.kodeBarang = b.idProduk AND a.tipeBarang = 'Produk Jadi' and a.kodeBarang = c.idProdukChild and d.nomorPO = c.nomorPO

        UNION 
        SELECT a.*, (b.namaProduk) AS namaMaterial, c.kadarBahan AS kadar FROM stokbarang a, produk b, potempahan c WHERE b.idProduk = c.idProduk AND a.idPIC = $idPIC AND a.statusTransfer = 'Pending' AND a.kodeBarang = b.idProduk AND( a.tipeBarang = 'Produk Jadi' OR a.tipeBarang = 'Produk Semi Jadi') 
        ";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getbom4($idSubSPK) {
        $sql = "SELECT * from bommassal a, materialdasar b where a.idSubSPK = $idSubSPK and a.idMaterial = b.idMaterial";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getbom5($idKloter) {
        $sql = "SELECT * from bomtempahan a, materialdasar b where a.idKloter = '$idKloter' and a.idMaterial = b.idMaterial";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getProduk2($idProduk) {
        $sql    = "SELECT * from produk where idProduk = $idProduk";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function cekFinishSPK($nomorFaktur) {
        $sql   = "SELECT (SELECT count(*) as total FROM spkmasal A LEFT JOIN subspk B ON A.idSPK = B.idSPK LEFT JOIN wadah C ON B.idSubSPK = C.idSubSPK where A.nomorFaktur = $nomorFaktur) - (SELECT COUNT(*) FROM factproduction2 a, spkmasal b where a.idSPK = b.idSPK and a.idAktivitas = 1014 and a.statusWork = 'Done' and b.nomorFaktur = $nomorFaktur) as jml";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRecord2() {

        $sql   = "

            SELECT idSPK, idAktivitas, MAX(namaAktivitas) AS aktivitas, MAX( DATE_FORMAT(startDate, '%d %M %Y') ) AS sd, MAX( DATE_FORMAT(RealisasiStartDate, '%d %M %Y') ) AS rsd, MAX( DATE_FORMAT(endDate, '%d %M %Y') ) AS ed, MAX( DATE_FORMAT(RealisasiEndDate, '%d %M %Y') ) AS red, MAX(statusWork) AS stat, MAX(state) AS STATUS FROM ( SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, f.RealisasiStartDate, r.endDate, f.RealisasiEndDate, f.statusWork, ( CASE WHEN( DATE_ADD(f.RealisasiEndDate, INTERVAL -1 DAY) <= r.endDate ) THEN 'On Time' ELSE 'Terlambat' END ) AS state FROM factproduction2 f JOIN rencanaproduksi r ON f.idSPK = r.idSPK AND f.idAktivitas = r.idAktivitas JOIN aktivitas a ON f.idAktivitas = a.idAktivitas UNION ALL SELECT r.idSPK, r.idAktivitas, a.namaAktivitas, r.startDate, '0000-00-00 00:00:00' AS RealisasiStartDate, r.endDate, '0000-00-00 00:00:00' AS RealisasiEndDate, '' AS statusWork, '' AS state FROM rencanaproduksi r JOIN aktivitas a ON r.idAktivitas = a.idAktivitas ) t where idAktivitas > 1003 GROUP BY idAktivitas, idSPK ORDER BY idspk, idaktivitas";
        
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    
    public function listInvoiceTempahan() {
        $hasil = $this->db->query("SELECT * FROM (SELECT a.idPO,a.nomorPO as noPurchaseOrder,a.tanggalMasuk,b.namaProduk,c.namaCustomer FROM potempahan a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer) a LEFT JOIN invoiceheader i ON a.noPurchaseOrder=i.nomorPO");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listInvoiceMassal() {
        $hasil = $this->db->query("SELECT *,f.nomorPO AS po FROM (SELECT a.idPO,a.nomorPO as noPurchaseOrder,a.tanggalMasuk,b.namaProduk,c.namaCustomer FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer) a LEFT JOIN invoicemassal i ON a.noPurchaseOrder=i.nomorPO LEFT JOIN invoiceheader f ON i.idHeader=f.idHeader WHERE i.idHeader IS NOT NULL GROUP BY i.idHeader
            UNION
            SELECT *,f.nomorPO AS po FROM (SELECT a.idPO,a.nomorPO as noPurchaseOrder,a.tanggalMasuk,b.namaProduk,c.namaCustomer FROM pomasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer) a LEFT JOIN invoicemassal i ON a.noPurchaseOrder=i.nomorPO LEFT JOIN invoiceheader f ON i.idHeader=f.idHeader WHERE i.idHeader IS NULL");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getBeratMassal() {

        $sql   = "SELECT f.idSPK, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali  FROM factproduction2 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        /*SELECT a.*,b.nama FROM (SELECT f.idProProd, f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali, f.idPIC, f.statusBerat FROM factproduction2 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas) a JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas*/
        return $query->result();
    }

    public function getBeratMassal2() {

        $sql   = "SELECT a.*,b.nama FROM (SELECT f.idProProd, f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali, f.idPIC, f.statusBerat FROM factproduction2 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idSubSPK,idAktivitas) a JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        /*SELECT a.*,b.nama FROM (SELECT f.idProProd, f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali, f.idPIC, f.statusBerat FROM factproduction2 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas) a JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas*/
        return $query->result();
    }

    public function getBerat22() {

        $sql   = "SELECT a.*,b.nama FROM (SELECT f.idProProd, f.idSPK, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal,SUM(f.beratTambahan) as beratTambahan, SUM(f.kembali) as kembali, f.idPIC, f.statusBerat FROM factproduction f, aktivitas2 a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas,idProProd) a JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas";
        $query = $this->db->query($sql);
        
        /*SELECT a.*,b.nama FROM (SELECT f.idProProd, f.idSPK, f.idSubSPK, f.idWadah, f.idAktivitas, a.namaAktivitas, SUM(f.berat) as berat, SUM(f.beratAwal) as beratAwal, SUM(f.kembali) as kembali, f.idPIC, f.statusBerat FROM factproduction2 f, aktivitas a WHERE f.idAktivitas = a.idAktivitas AND f.idAktivitas > 1002 GROUP BY idSPK,idAktivitas) a JOIN user b ON a.idPIC = b.idUser ORDER BY idSPK,idAktivitas*/
        return $query->result();
    }


    public function getSPKMassal() {
        $sql    = "SELECT *, DATE_FORMAT (lastModified,'%d %M %Y') AS tglspk FROM spkmasal WHERE idSPK IN (select DISTINCT(idSPK) FROM rencanaproduksi2) ORDER BY lastModified DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function rekapBeratMassal(){
        $sql= "SELECT * FROM `factproduction2` a JOIN aktivitas b JOIN spkmasal c on a.idAktivitas=b.idAktivitas AND a.idSPK=c.idSPK";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }

    public function cekjadwal2() {
        $sql   = "SELECT * from rencanaproduksi2";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findSPKMassal($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkmasal a LEFT JOIN produk b ON a.idProduk = b.idProduk LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN pomasal d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE nomorFaktur=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function findSPKService($nomorFaktur){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM spkservice a LEFT JOIN customer c ON a.idCustomer=c.idCustomer LEFT JOIN purchaseorderservice d ON a.nomorPO = d.nomorPO LEFT JOIN user e ON d.idSalesPerson=e.idUser WHERE nomorFaktur=$nomorFaktur LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

   

    public function getjadwal7($nomorFaktur) {
        $sql   = "SELECT *, DATE_FORMAT(r.startDate, '%Y-%m-%d') AS tglmsk, DATE_FORMAT(r.endDate, '%Y-%m-%d') AS tglend, DATE_FORMAT(r.startDate, '%d %M %Y') AS sd, DATE_FORMAT(r.endDate, '%d %M %Y') AS ed FROM aktivitas a, rencanaproduksi2 r, spkmasal s WHERE s.idSPK = r.idSPK AND a.idAktivitas = r.idAktivitas AND s.nomorFaktur = 1 ORDER BY r.idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function findSubSPK($idSubSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM subspk a, spkmasal b, pomasal c WHERE b.nomorPO = c.nomorPO and idSubSPK = '$idSubSPK' and a.idSPK = b.idSPK LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekDatangEmas($idSubSPK){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM subspk a, spkmasal b, pomasal c, stokbarang d, materialdasar e WHERE c.idStokBarang = d.idStok and d.kodeBarang = e.kodeMaterial and b.nomorPO = c.nomorPO and idSubSPK = '$idSubSPK' and a.idSPK = b.idSPK LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }


    public function findKatalog($idKatalog){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM katalog WHERE idKatalog = '$idKatalog' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    //Service
    public function getPertanyaan() {
        $sql   = "SELECT * from pertanyaan";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getKepuasan(){
        $hasil = $this->db->query("SELECT COUNT(*) as 'Jumlah','Tidak Puas' as 'Status' FROM `penilaian` WHERE u1 <50
                UNION
                SELECT COUNT(*) as 'Jumlah', 'Puas' as 'Status' FROM `penilaian` WHERE u1 >50
                UNION 
                SELECT COUNT(*) as 'Jumlah', 'Netral' as 'Status' FROM `penilaian` WHERE u1=50");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getRekomendasi(){
        $hasil = $this->db->query("SELECT COUNT(*) as 'Jumlah','Tidak Merekomendasikan' as 'Status' FROM `penilaian` WHERE u2 <=50
                UNION
                SELECT COUNT(*) as 'Jumlah', 'Merekomendasikan' as 'Status' FROM `penilaian` WHERE u2 >50");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getJumlahResponden() {
        $sql   = "SELECT count(*) as 'jumlahResponden' from penilaian";
        $query = $this->db->query($sql);
        
        return $query->row();
    }

    public function getDimensi() {
        $sql   = "SELECT * from dimensi";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRekapMassal($idSPK) {
        $sql   = "

        SELECT 1 as idAktivitas, b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali , sum(beratTambahan) as beratTambahan , ((sum(beratAwal)-sum(berat))) as susut, sum(jumlah) as jumlah , count(distinct idSubSPK) as jmlsub, sum(case when idWadah > 0 then 1 else 0 end) as jmlwadah FROM factproduction2 a, aktivitas b where a.idSPK = $idSPK and a.idAktivitas = 1006 and a.idAktivitas = b.idAktivitas 
        
        UNION 
        
        SELECT 2 as idAktivitas, 'Kecap' as namaAktivitas, (sum(berat)-sum(kembali)) as beratAwal, sum(beratKecap) as berat, 0 as kembali, sum(beratTambahan) as beratTambahan , ((sum(berat)-sum(kembali))-sum(beratKecap)) as susut, sum(jumlah) as jumlah,count(distinct idSubSPK) as jmlsub, sum(case when idWadah > 0 then 1 else 0 end) as jmlwadah FROM factproduction2 a, aktivitas b where a.idSPK = $idSPK and a.idAktivitas = 1006 and a.idAktivitas = b.idAktivitas 

        UNION 

        SELECT (a.idAktivitas-1000), b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan , ((sum(beratAwal)-(sum(berat)-sum(beratTambahan)))-sum(kembali)) as susut, sum(jumlah) as jumlah, count(distinct idSubSPK) as jmlsub, sum(case when idWadah > 0 then 1 else 0 end) as jmlwadah FROM factproduction2 a, aktivitas b where a.idSPK = $idSPK and a.idAktivitas > 1006 and a.idAktivitas < 1014 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas 

        UNION 

        SELECT (a.idAktivitas-1000) as idAktivitas, b.namaAktivitas, sum(beratAwal) as beratAwal, max(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan , (sum(beratAwal)-max(berat)) as susut, sum(jumlah) as jumlah, count(distinct idSubSPK) as jmlsub, sum(case when idWadah > 0 then 1 else 0 end) as jmlwadah FROM factproduction2 a, aktivitas b where a.idSPK = $idSPK and a.idAktivitas = 1014 and a.idAktivitas = b.idAktivitas 

        order by idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRekapTempahan($idSPK) {
        $sql   = "

        SELECT 1 as idAktivitas, b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali , sum(beratTambahan) as beratTambahan , ((sum(beratAwal)-sum(berat))) as susut FROM factproduction a, aktivitas2 b where a.idSPK = $idSPK and a.idAktivitas = 1006 and a.idAktivitas = b.idAktivitas 
        
        UNION 

        SELECT (a.idAktivitas-1000), b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan , ((sum(beratAwal)-(sum(berat)-sum(beratTambahan)))-sum(kembali)) as susut FROM factproduction a, aktivitas2 b where a.idSPK = $idSPK and a.idAktivitas > 1006 and a.idAktivitas < 1014 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas 

        UNION 
        
        SELECT (a.idAktivitas-1000) as idAktivitas, b.namaAktivitas, sum(beratAwal) as beratAwal, max(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan , (sum(beratAwal)-max(berat)) as susut FROM factproduction a, aktivitas2 b where a.idSPK = $idSPK and a.idAktivitas = 1014 and a.idAktivitas = b.idAktivitas 

                order by idAktivitas";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    public function getRadar() {
        $sql   = "SELECT AVG(rataHarapan) as 'rataHarapan',AVG(rataRealisasi) as 'rataRealisasi',AVG(rataHarapanT) as 'rataHarapanT',AVG(rataHarapanR) as 'rataHarapanR',AVG(rataHarapanRE) as 'rataHarapanRE',AVG(rataHarapanA) as 'rataHarapanA',AVG(rataHarapanE) as 'rataHarapanE',AVG(rataRealisasiT) as 'rataRealisasiT',AVG(rataRealisasiR) as 'rataRealisasiR',AVG(rataRealisasiRE) as 'rataRealisasiRE',AVG(rataRealisasiA) as 'rataRealisasiA',AVG(rataRealisasiE) as 'rataRealisasiE' FROM `penilaian`";
        $query = $this->db->query($sql);
        
        return $query->row();
    }

    public function poTerakhir3(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM poperak ORDER BY nomorPO DESC LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    // Dashboard Administration ----------------------------------------------------------------------------------

    public function poPerMonth(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT COUNT(po.idPO) AS jumlah, MONTH(po.tanggalMasuk) AS bulan FROM (SELECT a.idPO,a.tanggalMasuk,'Tempahan' AS kategori FROM potempahan a UNION SELECT b.idPO,b.tanggalMasuk,'Perak' AS kategori FROM poperak b UNION SELECT c.idPO,c.tanggalMasuk,'Massal' AS kategori FROM pomasal c UNION SELECT d.idPO,d.tanggalMasuk,'Service' AS kategori FROM purchaseorderservice d UNION SELECT e.idPO,e.tanggalMasuk,'Trading' AS kategori FROM purchaseordertrading e) po WHERE YEAR(po.tanggalMasuk) = YEAR(CURDATE()) GROUP BY MONTH(po.tanggalMasuk) ");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function poSum(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT COUNT(po.idPO) AS jumlah FROM (SELECT a.idPO,a.tanggalMasuk,'Tempahan' AS kategori FROM potempahan a UNION SELECT b.idPO,b.tanggalMasuk,'Perak' AS kategori FROM poperak b UNION SELECT c.idPO,c.tanggalMasuk,'Massal' AS kategori FROM pomasal c UNION SELECT d.idPO,d.tanggalMasuk,'Service' AS kategori FROM purchaseorderservice d UNION SELECT e.idPO,e.tanggalMasuk,'Trading' AS kategori FROM purchaseordertrading e) po WHERE YEAR(po.tanggalMasuk) = YEAR(CURDATE())");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    //Akun
    public function listTipeAkun(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM tipeakun");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function listAkun(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT b.*,a.namaTipeAkun FROM tipeakun a, akun b WHERE a.kodeTipeAkun = b.kodeTipeAkun order by b.kodeAkun ASC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findAkun($idSubAkun){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT b.*,a.namaTipeAkun as akun,a.kodeTipeAkun FROM tipeakun a, akun b WHERE a.kodeTipeAkun= b.kodeTipeAkun AND b.idAkun=1 order by b.kodeAkun LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getPergerakan(){
        $sql= "SELECT * FROM stokbarang";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }
    
    //Currency
    public function listCurrency(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM currency ORDER BY idCurrency DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    //Cashflow
    public function listCashflow(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*, DATE_FORMAT(tanggal, '%Y-%m-%d') AS tgl FROM cashflow a ORDER BY a.idCashflow DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function findCashflow($idCashflow){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM cashflow a WHERE a.idCashflow=$idCashflow LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getBerlian($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM poberlian a WHERE a.nomorPO=$nomorPO ORDER BY jenis");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    //Jurnal
    public function listJurnal(){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,IFNULL((SELECT SUM(d.jumlah) FROM jurnal c LEFT JOIN detailjurnal d ON c.idJurnal=d.idJurnal WHERE c.idJurnal=a.idJurnal AND d.kategori='Debit'),0) AS jumlah FROM jurnal a WHERE tanggal=CURDATE() ORDER BY a.idJurnal DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function detailJurnal($idJurnal){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.namaCustomer,c.nomorTelepon FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN customer c ON a.idCustomer=c.idCustomer WHERE a.idJurnal=$idJurnal");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function jurnalHarian($date){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT a.*,b.*,c.kodeTipeAkun,c.namaAkun, DATE_FORMAT(a.tanggal, '%Y-%m-%d') AS tgl FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE a.tanggal = '$date' ORDER BY a.idJurnal, b.kategori DESC");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function stockPerMaterial($idUser){

        $hasil = $this->db->query("SELECT * FROM (SELECT a.kodeBarang, a.tipeBarang, a.statusTransfer, c.namaMaterial AS namaBarang, a.MSK AS masuk, IFNULL(b.KLR,0) AS keluar, (a.MSK-b.KLR) as selisih FROM (SELECT kodeBarang, tipeBarang, statusTransfer, sum(jumlah) as MSK FROM stokbarang where statusTransfer='Valid' AND jenisPergerakanBarang = 'IN' and idPIC = $idUser AND tipeBarang = 'Material Dasar' group by kodeBarang, tipeBarang) a LEFT JOIN ( SELECT kodeBarang,tipeBarang, statusTransfer, SUM(jumlah) as KLR FROM stokbarang where statusTransfer='Valid' AND jenisPergerakanBarang = 'OUT' and idPIC = $idUser AND tipeBarang = 'Material Dasar' group by kodeBarang , tipeBarang ) as b ON a.kodeBarang = b.kodeBarang JOIN materialdasar c ON c.kodeMaterial=a.kodeBarang 
        UNION
        SELECT a.kodeBarang, a.tipeBarang, a.statusTransfer, c.namaProduk AS namaBarang, a.MSK AS masuk, IFNULL(b.KLR,0) AS keluar, (a.MSK-b.KLR) as selisih FROM (SELECT kodeBarang, tipeBarang, statusTransfer, sum(jumlah) as MSK FROM stokbarang where statusTransfer='Valid' AND jenisPergerakanBarang = 'IN' and idPIC =$idUser AND (tipeBarang = 'Produk Jadi' OR tipeBarang ='Produk Semi Jadi') group by kodeBarang , tipeBarang) a LEFT JOIN ( SELECT kodeBarang,tipeBarang, statusTransfer, SUM(jumlah) as KLR FROM stokbarang where statusTransfer='Valid' AND jenisPergerakanBarang = 'OUT' and idPIC = $idUser AND (tipeBarang = 'Produk Jadi' OR tipeBarang ='Produk Semi Jadi') group by kodeBarang , tipeBarang) as b ON a.kodeBarang = b.kodeBarang JOIN produk c ON c.idProduk=a.kodeBarang) al WHERE al.masuk-al.keluar!=0 ORDER BY namaBarang");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    function getRekapAkvititas(){
        $hasil = $this->db->query("SELECT 1 as idAktivitas, a.idSPK,b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali , sum(beratTambahan) as beratTambahan , ((sum(beratAwal)-sum(berat))) as susut FROM factproduction2 a, aktivitas b where a.idAktivitas = 1006 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas,a.idSPK
        
        UNION 
        
        SELECT 2 as idAktivitas, a.idSPK,'Kecap' as namaAktivitas, (sum(berat)-sum(kembali)) as beratAwal, sum(beratKecap) as berat, 0 as kembali, sum(beratTambahan) as beratTambahan , ((sum(berat)-sum(kembali))-sum(beratKecap)) as susut FROM factproduction2 a, aktivitas b where a.idAktivitas = 1006 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas,a.idSPK

        UNION 

        SELECT (a.idAktivitas-1000), a.idSPK,b.namaAktivitas, sum(beratAwal) as beratAwal, sum(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan, ((sum(beratAwal)-(sum(berat)-sum(beratTambahan)))-sum(kembali)) as susut FROM factproduction2 a, aktivitas b where a.idAktivitas > 1006 and a.idAktivitas < 1014 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas,a.idSPK

        UNION 

        SELECT (a.idAktivitas-1000) as idAktivitas, a.idSPK,b.namaAktivitas, sum(beratAwal) as beratAwal, max(berat) as berat, sum(kembali) as kembali, sum(beratTambahan) as beratTambahan , (sum(beratAwal)-max(berat)) as susut FROM factproduction2 a, aktivitas b where a.idAktivitas = 1014 and a.idAktivitas = b.idAktivitas group by b.namaAktivitas,a.idSPK

        order by idAktivitas,idSPK");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
        
    }

    function getRekapSPKMassal(){
        $hasil = $this->db->query("SELECT max(idSPK) as idSPK,max(tanggalMasuk) as tanggalMasuk,max(namaCustomer) as namaCustomer,max(namaProduk) as namaProduk,max(kadarBahan) as kadarBahan,max(jumlah) as jumlah FROM (SELECT a.idSPK,DATE_FORMAT(b.tanggalMasuk, '%d %M %Y') AS tanggalMasuk,c.namaCustomer,d.namaProduk,b.kadarBahan,NULL as jumlah FROM `spkmasal` a JOIN pomasal b on a.nomorPO=b.nomorPO JOIN customer c on a.idCustomer=c.idCustomer JOIN produk d on a.idProduk=d.idProduk WHERE a.statusSPK='Done'
        UNION
        SELECT a.idSPK,'0' as tanggalMasuk, '0' as namaCustomer, '0' as namaProduk, '0' as kadarBahan, sum(jumlah) as jumlah FROM factproduction2 a WHERE idAktivitas=1014 and statusSPK='Done' GROUP BY idSPK)a GROUP BY idSPK");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getKloterBySPK($idSPK) {

        $sql   = "SELECT * from kloter where idSPK = $idSPK";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    //BukuBesar
    public function bukuBesarPeriode($kodeAkun,$dari,$sampai) {
        $date1 = $newDate = date("Y/m/d", strtotime($dari));
        $date2 = $newDate = date("Y/m/d", strtotime($sampai));
        $hasil = $this->db->query("SELECT a.*,b.*,c.kodeTipeAkun,c.namaAkun, DATE_FORMAT(a.tanggal, '%Y-%m-%d') AS tgl FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE c.kodeAkun=$kodeAkun AND a.tanggal >= '$date1' and a.tanggal <= '$date2' ORDER BY a.idJurnal, b.kategori");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getSaldo($kodeAkun,$date) {
        $date1 = $newDate = date("Y/m/d", strtotime($date));
        $hasil = $this->db->query("SELECT (SELECT IFNULL(SUM(b.jumlah),0) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE c.kodeAkun=$kodeAkun AND b.kategori='Debit' AND a.tanggal < '$date1') - IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE c.kodeAkun=$kodeAkun AND b.kategori='Kredit' AND a.tanggal < '$date1'),0) as balance");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }


    public function getNeracaBerjalan($dari,$sampai) {
        $date1 = $newDate = date("Y/m/d", strtotime($dari));
        $date2 = $newDate = date("Y/m/d", strtotime($sampai));
        $hasil = $this->db->query("SELECT z.kodeTipeAkun, z.kodeAkun, z.namaAkun, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Debit' AND a.tanggal >= '$date1' AND a.tanggal <= '$date2' GROUP BY b.kodeAkun),0) AS deb, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Kredit' AND a.tanggal >= '$date1' AND a.tanggal <= '$date2' GROUP BY b.kodeAkun),0) AS kre FROM akun z WHERE z.kodeTipeAkun < 4000");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getNeracaAwal($date) {
        $date1 = $newDate = date("Y/m/d", strtotime($date));
        $hasil = $this->db->query("SELECT z.kodeTipeAkun, z.kodeAkun, z.namaAkun, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Debit' AND a.tanggal < '$date1' GROUP BY b.kodeAkun),0) AS deb, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Kredit' AND a.tanggal < '$date1' GROUP BY b.kodeAkun),0) AS kre FROM akun z WHERE z.kodeTipeAkun < 4000");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }
    public function labaRugiBerjalan($dari,$sampai) {
        $date1 = $newDate = date("Y/m/d", strtotime($dari));
        $date2 = $newDate = date("Y/m/d", strtotime($sampai));
        $hasil=$this->db->query("SELECT z.kodeTipeAkun, z.kodeAkun, z.namaAkun, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Debit' AND a.tanggal >= '$date1' AND a.tanggal <= '$date2' GROUP BY b.kodeAkun),0) AS Deb, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Kredit' AND a.tanggal >= '$date1' AND a.tanggal <= '$date2' GROUP BY b.kodeAkun),0) AS Kre FROM akun z");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function labaRugiAwal($date) {
        $date1 = $newDate = date("Y/m/d", strtotime($date));
        $hasil=$this->db->query("SELECT z.kodeTipeAkun, z.kodeAkun, z.namaAkun, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Debit' AND a.tanggal < '$date1' GROUP BY b.kodeAkun),0) AS Deb, IFNULL((SELECT SUM(b.jumlah) FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun WHERE b.kodeAkun=z.kodeAkun AND b.kategori='Kredit' AND a.tanggal < '$date1' GROUP BY b.kodeAkun),0) AS Kre FROM akun z");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function bukuBesarPiutang($idCustomer,$dari,$sampai) {
        $date1 = $newDate = date("Y/m/d", strtotime($dari));
        $date2 = $newDate = date("Y/m/d", strtotime($sampai));
        $hasil = $this->db->query("SELECT a.idJurnal,d.idCustomer,d.namaCustomer,a.keterangan,b.kodeAkun,b.jumlah,b.kategori,c.kodeTipeAkun,c.namaAkun, DATE_FORMAT(a.tanggal, '%Y-%m-%d') AS tgl FROM jurnal a LEFT JOIN detailjurnal b ON a.idJurnal=b.idJurnal LEFT JOIN akun c ON b.kodeAkun = c.kodeAkun LEFT JOIN customer d ON a.idCustomer=d.idCustomer WHERE c.kodeTipeAkun < 1300 AND a.tanggal >= '$date1' and a.tanggal <= '$date2' AND d.idCustomer= $idCustomer ORDER BY a.tanggal, idJurnal DESC");

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getJumlahSPK($tahun,$bulan,$kualitas,$kecepatan) {
        $hasil=$this->db->query("SELECT COUNT(*) as jumlah FROM `service` where YEAR(dateCreated)=$tahun AND MONTH(dateCreated)=$bulan AND nilaiKualitas=$kualitas AND nilaiKecepatan=$kecepatan");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function getJumlahSPKTotal($tahun,$kualitas,$kecepatan) {
        $hasil=$this->db->query("SELECT COUNT(*) as jumlah FROM `service` where YEAR(dateCreated)=$tahun AND nilaiKualitas=$kualitas AND nilaiKecepatan=$kecepatan");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }

    public function cekInvoicePOMasal($nomorPO){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM invoiceheader WHERE nomorPO='$nomorPO' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }

    public function cariBOMMassal($id){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM bommassal WHERE idBOM='$id' LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }

    public function findFactproduction2($idSubSPK,$idAktivitas){
        //Query mencari record berdasarkan ID
        $hasil = $this->db->query("SELECT * FROM factproduction2 WHERE idSubSPK='$idSubSPK' AND idAktivitas=$idAktivitas LIMIT 1");
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else{
            return array();
        }
    }



    /*public function dapatPO() {
        $hasil=$this->db->query("SELECT nomorPO FROM potempahan");
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else{
            return array();
        }
    }*/


}