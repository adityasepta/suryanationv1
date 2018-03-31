<?php 
  $idPO=$dataPO[0]->idPO;
  if($this->input->post('is_submitted')){
        $nomorPO           = set_value('nomorPO');
        $idProduk          = set_value('idProduk');
        $idCustomer        = set_value('idCustomer');
        $idSalesPerson     = set_value('idSalesPerson');
        $tanggalMasuk      = set_value('tanggalMasuk');
        $tanggalEstimasiPenyelesaian    = set_value('tanggalEstimasiPenyelesaian');
        $hargaBahan        = set_value('hargaBahan');
        $upah              = set_value('upah');
        $datangEmas        = set_value('datangEmas');
        $hargaDatangEmas   = set_value('hargaDatangEmas');
        $kuantitas         = set_value('kuantitas');
        $metode            = set_value('metode');
        $panjar            = set_value('panjar');
        $totalHarga        = set_value('totalHarga');
        $tipeOrder         = set_value('custom');
        $kadarDatangEmas   = set_value('kadarDatangEmas');
        $budget            = set_value('budget');
        $datangBerlian     = set_value('datangBerlian');
        $jumlahDatangBerlian = set_value('jumlahDatangBerlian');
        $upahPasangBerlian = set_value('upahPasangBerlian');
        $tipeCustomer      = set_value('tipeCustomer');
        $pekerjaanTambahan = set_value('pekerjaanTambahan');
        $keteranganTambahan= set_value('keteranganTambahan');
        $biayaTambahan     = set_value('biayaTambahan');
        $beratAkhir        = set_value('beratAkhir');
        $susut             = set_value('susut');
        $bahan             = set_value('bahan');
        $kadarBahan        = set_value('kadarBahan');
        $namaBatu          = set_value('namaBatu');
        $beratBatu         = set_value('beratBatu');
        $ukuranJari        = set_value('ukuranJari');
        $berlian           = set_value('berlian');
        $krumWarna         = set_value('krumWarna');
        $tipeIkatan        = set_value('tipeIkatan');
        $model             = set_value('model');
        $beratBerlian      = set_value('beratBerlian');
        $hargaBerlian      = set_value('hargaBerlian');
        $batuZirkon        = set_value('batuZirkon');
        $jumlahBatuZirkon  = set_value('jumlahBatuZirkon');
        $hargaBatuZirkon   = set_value('hargaBatuZirkon');
        $hargaKrumWarna    = set_value('hargaKrumWarna');
        $keteranganKrum    = set_value('keteranganKrum');
        $batuTerhadapGoresan = set_value('batuTerhadapGoresan');
        $batuTerhadapPukulan = set_value('batuTerhadapPukulan');
        $batuTerhadapKruman  = set_value('batuTerhadapKruman');
        $keadaanBatuTengah   = set_value('keadaanBatuTengah');
  }
  else {
        $nomorPO           = $nomorPO;
        $idProduk          = $idProduk;
        $idCustomer        = $idCustomer;
        $idSalesPerson     = $idSalesPerson;
        $tanggalMasuk      = $tanggalMasuk;
        $tanggalEstimasiPenyelesaian    = $tanggalEstimasiPenyelesaian;
        $hargaBahan        = $hargaBahan;
        $upah              = $upah;
        $datangEmas        = $datangEmas;
        $hargaDatangEmas   = $hargaDatangEmas;
        $kuantitas         = $kuantitas;
        $metode            = $metode;
        $panjar            = $panjar;
        $totalHarga        = $totalHarga;
        $tipeOrder         = $custom;
        $kadarDatangEmas   = $kadarDatangEmas;
        $budget            = $budget;
        $datangBerlian     = $datangBerlian;
        $jumlahDatangBerlian = $jumlahDatangBerlian;
        $upahPasangBerlian = $upahPasangBerlian;
        $tipeCustomer      = $tipeCustomer;
        $pekerjaanTambahan = $pekerjaanTambahan;
        $keteranganTambahan= $keteranganTambahan;
        $biayaTambahan     = $biayaTambahan;
        $beratAkhir        = $beratAkhir;
        $susut             = $susut;
        $bahan             = $bahan;
        $kadarBahan        = $kadarBahan;
        $namaBatu          = $namaBatu;
        $beratBatu         = $beratBatu;
        $ukuranJari        = $ukuranJari;
        $berlian           = $berlian;
        $krumWarna         = $krumWarna;
        $tipeIkatan        = $tipeIkatan;
        $model             = $model;
        $beratBerlian      = $beratBerlian;
        $hargaBerlian      = $hargaBerlian;
        $batuZirkon        = $batuZirkon;
        $jumlahBatuZirkon  = $jumlahBatuZirkon;
        $hargaBatuZirkon   = $hargaBatuZirkon;
        $hargaKrumWarna    = $hargaKrumWarna;
        $keteranganKrum    = $keteranganKrum;
        $batuTerhadapGoresan = $batuTerhadapGoresan;
        $batuTerhadapPukulan = $batuTerhadapPukulan;
        $batuTerhadapKruman  = $batuTerhadapKruman;
        $keadaanBatuTengah   = $keadaanBatuTengah;
  }
  $tglmsk = new DateTime($tanggalMasuk);
  $tglmsk = $tglmsk->format("Y-m-d");
  $tglpyl = new DateTime($tanggalEstimasiPenyelesaian);
  $tglpyl = $tglpyl->format("Y-m-d");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <?php include('akunlogin.php') ?>
                <?php include('sidebar.php') ?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order</a>
                        </li>
                        <li class="active">
                            <strong>Edit Purchase Order</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Purchase Order <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/editPO/'.$idPO,'class="form-horizontal"')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <select id="idSalesPerson" class="form-control"  name="idSalesPerson">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= $idSalesPerson; if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?php echo $tanggalMasuk; ?>" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?php echo $tanggalEstimasiPenyelesaian; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-sm-10"><input type="text" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?php echo $kodeProduk; ?>" required=""></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="cincin" type="radio" <?php $a= $jenisProduk; if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk" required> <i></i> Cincin </label></div>
                                        <div class="i-checks"><label> <input id="liontin" type="radio" <?php $a= $jenisProduk; if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk"> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="gelang" type="radio" <?php $a= $jenisProduk; if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk"> <i></i> Gelang </label></div>
                                        <div class="i-checks"><label> <input id="anting" type="radio" <?php $a= $jenisProduk; if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk"> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="i-checks"><label> <input id="mainanNama" type="radio" <?php $a= $jenisProduk; if($a=="Mainan Nama"){?> checked="" <?php } ?> value="Mainan Nama" name="jenisProduk"> <i></i> Mainan Nama </label></div>
                                        <div class="i-checks"><label> <input id="cincinKawin" type="radio" <?php $a= $jenisProduk; if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk"><i></i> Cincin Kawin </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div id="produkDetail" style="display: none;">
                                    <div id="contentHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Detail Produk</h5>
                                    </div>
                                    <div id="contentDetail" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Bahan <small class="text-navy"> Pilih salah satu</small></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan" required> <i></i> Emas Kuning </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Swasa"){?> checked="" <?php } ?> value="Swasa" name="bahan"> <i></i> Swasa </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Rose Gold"){?> checked="" <?php } ?> value="Rose Gold" name="bahan"> <i></i> Rose Gold </label></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Kadar Bahan</label>
                                                <input type="text" name="kadarBahan" placeholder="%" value="<?php echo $kadarBahan; ?>"  class="form-control" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Harga Pasaran</label>
                                                <input type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo $hargaBahan; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div id="ukuranCincin" style="display: none;">
                                                            <label>Ukuran Jari </label>
                                                            <input type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo $ukuranJari; ?>">
                                                        </div>
                                                        <div id="ukuranLiontin" style="display: none;">
                                                            <label>Ukuran </label>
                                                            <input type="text" placeholder="Ukuran" name="ukuran" class="form-control" value="<?php echo $ukuran; ?>">
                                                        </div>
                                                        <div id="ukuranGelang" class="row" style="display: none;">
                                                            <label>Diameter X lebar </label>
                                                            <input type="text" placeholder="12cm X 22cm" name="diameter" class="form-control" value="<?php echo $diameter; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama Batu Permata</label>
                                                        <input type="text" id="batu" placeholder="Nama Batu" name="namaBatu" onchange="detailBatu();" class="form-control" value="<?php echo $namaBatu; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Berat Batu Permata</label>
                                                        <input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo $beratBatu; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Berlian</label>
                                                        <input type="text" placeholder="Nama Berlian" name="berlian" class="form-control" value="<?php echo $berlian; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Berat Berlian</label>
                                                        <input type="text" placeholder="gr" name="beratBerlian" class="form-control" value="<?php echo $beratBerlian; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Berlian</label>
                                                        <input type="text" placeholder="Rp" name="hargaBerlian" class="form-control good" value="<?php echo $hargaBerlian; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Batu Zirkon</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuZirkon; if($a=="Swarovski"){?> checked="" <?php } ?> value="Swarovski" name="batuZirkon"> <i></i> Swarovski </label></div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuZirkon; if($a=="PRQ"){?> checked="" <?php } ?> value="PRQ" name="batuZirkon"> <i></i> PRQ </label></div>
                                                                <input type="radio" checked="" value="" name="batuZirkon" hidden="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jumlah Batu Zirkon</label>
                                                        <input type="text" placeholder="Jumlah Batu Zirkon" name="jumlahBatuZirkon" class="form-control" value="<?php echo $jumlahBatuZirkon; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Batu Zirkon (/pcs)</label>
                                                        <input type="text" placeholder="Rp" name="hargaBatuZirkon" class="form-control good" value="<?php echo $hargaBatuZirkon; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Krum Warna</label>
                                            <div class="col-sm-4"><input type="text" name="krumWarna" class="form-control" value="<?php echo $krumWarna; ?>"></div>
                                            <label class="col-sm-2 control-label">Harga Krum Warna</label>
                                            <div class="col-sm-4"><input type="text" placeholder="Rp" name="hargaKrumWarna" class="form-control good" value="<?php echo $hargaKrumWarna; ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Krum</label>
                                            <div class="col-sm-10"><input type="text" name="keteranganKrum" class="form-control" value="<?php echo $keteranganKrum; ?>"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe Ikatan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Bungkus"){?> checked="" <?php } ?> value="Bungkus" name="tipeIkatan" required> <i></i> Bungkus </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Kuku"){?> checked="" <?php } ?> value="Kuku" name="tipeIkatan"> <i></i> Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Tanam"){?> checked="" <?php } ?> value="Tanam" name="tipeIkatan"> <i></i> Tanam </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Mangkok Kuku"){?> checked="" <?php } ?> value="Mangkok Kuku" name="tipeIkatan"> <i></i> Mangkok Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Bungkus Kaku"){?> checked="" <?php } ?> value="Bungkus Kaku" name="tipeIkatan"> <i></i> Bungkus Kaku </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Jepit"){?> checked="" <?php } ?> value="Jepit" name="tipeIkatan"> <i></i> Jepit </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a==""){?> checked="" <?php } ?> value="" name="tipeIkatan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Metode <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Design"){?> checked="" <?php } ?> value="Design" name="metode" required> <i></i> Design </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Manual"){?> checked="" <?php } ?> value="Manual" name="metode"> <i></i> Manual </label></div>
                                            </div>
                                            <div class="col-sm-6" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Inject"){?> checked="" <?php } ?> value="Inject" name="metode"> <i></i> Inject </label></div>
                                            </div>
                                        </div>


                                        <div id="detailBatuPermata" style="display: none;">
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Batu Terhadap Kruman <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a=="Tahan"){?> checked="" <?php } ?> checked="" value="Tahan" name="batuTerhadapKruman"> <i></i> Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a=="Tidak Tahan"){?> checked="" <?php } ?> value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapKruman"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-sm-2 control-label">Batu Terhadap Pukulan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Sangat Bagus"){?> checked="" <?php } ?> checked="" value="Sangat Bagus" name="batuTerhadapPukulan"> <i></i> Sangat Bagus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Bagus"){?> checked="" <?php } ?> value="Bagus" name="batuTerhadapPukulan"> <i></i> Bagus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Cukup"){?> checked="" <?php } ?> value="Cukup" name="batuTerhadapPukulan"> <i></i> Cukup </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Kurang"){?> checked="" <?php } ?> value="Kurang" name="batuTerhadapPukulan"> <i></i> Kurang </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapPukulan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Batu Terhadap Goresan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="Kurang dari 6"){?> checked="" <?php } ?> checked="" value="Kurang dari 6" name="batuTerhadapGoresan"> <i></i> Kurang dari 6 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="6,5 Sampai 7,5"){?> checked="" <?php } ?> value="6,5 Sampai 7,5" name="batuTerhadapGoresan"> <i></i> 6,5 Sampai 7,5 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="Lebih dari 7"){?> checked="" <?php } ?> value="Lebih dari 7" name="batuTerhadapGoresan"> <i></i> Lebih dari 7 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapGoresan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keadaan Batu Tengah <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Mulus"){?> checked="" <?php } ?> checked="" value="Mulus" name="keadaanBatuTengah"> <i></i> Mulus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Serat Halus"){?> checked="" <?php } ?> value="Serat Halus" name="keadaanBatuTengah"> <i></i> Serat Halus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Serat Kasar"){?> checked="" <?php } ?> value="Serat Kasar" name="keadaanBatuTengah"> <i></i> Serat Kasar </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Sompel"){?> checked="" <?php } ?> value="Sompel" name="keadaanBatuTengah"> <i></i> Sompel </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a==""){?> checked="" <?php } ?> value="" name="keadaanBatuTengah"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                </div>

                                <br>
                                <p>Tampilkan Informasi Tambahan</p>
                                Ya <input type="radio" name="infoTambahan" id="yTambahan" onclick="yesnoCheck();">
                                Tidak <input type="radio" name="infoTambahan" id="nTambahan" onclick="yesnoCheck();">
                                <hr>

                                <div id="detailTambahan" style="display: none;">
                                    <div id="tambahanHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Informasi Tambahan</h5>
                                    </div>
                                    <div id="contentTambahan" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo set_value('datangEmas'); ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Emas</label>
                                                        <input type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo set_value('kadarDatangEmas'); ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Datang Emas</label>
                                                        <input type="text" placeholder="Rp" name="hargaDatangEmas" class="form-control good" value="<?php echo set_value('hargaDatangEmas'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Berlian </label>
                                                        <input type="text" placeholder="Pcs" name="datangBerlian" value="<?php echo set_value('datangBerlian'); ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Berlian</label>
                                                        <input type="text" name="jumlahDatangBerlian" placeholder="Carat" value="<?php echo set_value('jumlahDatangBerlian'); ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Upah Pasang Berlian</label>
                                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" class="form-control good" value="<?php echo set_value('upahPasangBerlian'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>Pekerjaan Tambahan</span>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pekerjaan Tambahan <br/></label>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Enamel"){?> checked="" <?php } ?> value="Enamel" name="pekerjaanTambahan[]"> <i></i> Enamel </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Slap"){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kombinasi"){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Laser Huruf"){?> checked="" <?php } ?> value="Laser Huruf" name="pekerjaanTambahan[]"> <i></i> Laser Huruf </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kode Cap"){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                                <!-- <input type="checkbox" checked="" hidden="" value="" name="pekerjaanTambahan"> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan Tambahan</label>
                                            <div class="col-sm-4"><input type="text" name="keteranganTambahan" class="form-control" value="<?php echo set_value('keteranganTambahan'); ?>"></div>
                                            <label class="col-sm-2 control-label">Biaya Tambahan</label>
                                            <div class="col-sm-4"><input type="text" placeholder="Rp" name="biayaTambahan" class="form-control good" value="<?php echo set_value('biayaTambahan'); ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                                              
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                    <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?php echo set_value('model'); ?>"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kuantitas</label>
                                    <div class="col-sm-4"><input type="number" name="kuantitas" class="form-control" value="<?php echo set_value('kuantitas'); ?>" required=""></div>
                                    <label class="col-sm-2 control-label">Estimasi Berat Akhir</label>
                                    <div class="col-sm-4"><input type="number" step="any" name="beratAkhir" placeholder="gr" class="form-control" value="<?php echo set_value('beratAkhir'); ?>" required=""></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                    </div>
                                    <label class="col-sm-2 control-label">Susut</label>
                                    <div class="col-sm-4"><input type="number" step="any" name="susut" class="form-control" value="<?php echo set_value('susut'); ?>" required=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <label>Insert Image(.JPG)</label>                
                                        <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="upah" class="form-control good" value="<?php echo set_value('upah'); ?>" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Budget</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="budget" class="form-control good" value="<?php echo set_value('budget'); ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="panjar" class="form-control good" value="<?php echo set_value('panjar'); ?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button id="submit" class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; 2018
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
