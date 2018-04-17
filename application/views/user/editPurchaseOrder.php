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
        $tipeOrder         = set_value('tipeOrder');
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
        $nomorPO           = $dataPO[0]->nomorPO;
        $idProduk          = $dataPO[0]->idProduk;
        $idCustomer        = $dataPO[0]->idCustomer;
        $idSalesPerson     = $dataPO[0]->idSalesPerson;
        $tanggalMasuk      = $dataPO[0]->tglmsk;
        $tanggalEstimasiPenyelesaian    = $dataPO[0]->tglpsy;
        $hargaBahan        = $dataPO[0]->hargaBahan;
        $upah              = $dataPO[0]->upah;
        $datangEmas        = $dataPO[0]->datangEmas;
        $hargaDatangEmas   = $dataPO[0]->hargaDatangEmas;
        $kuantitas         = $dataPO[0]->kuantitas;
        $metode            = $dataPO[0]->metode;
        $panjar            = $dataPO[0]->panjar;
        $totalHarga        = $dataPO[0]->totalHarga;
        $tipeOrder         = $dataPO[0]->tipeOrder;
        $kadarDatangEmas   = $dataPO[0]->kadarDatangEmas;
        $budget            = $dataPO[0]->budget;
        $datangBerlian     = $dataPO[0]->datangBerlian;
        $jumlahDatangBerlian = $dataPO[0]->jumlahDatangBerlian;
        $upahPasangBerlian = $dataPO[0]->upahPasangBerlian;
        $tipeCustomer      = $dataPO[0]->tipeCustomer;
        $pekerjaanTambahan = $dataPO[0]->pekerjaanTambahan;
        $keteranganTambahan= $dataPO[0]->keteranganTambahan;
        $keteranganEnamel     = $dataPO[0]->keteranganEnamel;
        $keteranganSlap     = $dataPO[0]->keteranganSlap;
        $keteranganKombinasi     = $dataPO[0]->keteranganKombinasi;
        $keteranganLaserHuruf     = $dataPO[0]->keteranganLaserHuruf;
        $keteranganKodeCap     = $dataPO[0]->keteranganKodeCap;
        $hargaEnamel     = $dataPO[0]->hargaEnamel;
        $hargaSlap     = $dataPO[0]->hargaSlap;
        $hargaKombinasi     = $dataPO[0]->hargaKombinasi;
        $hargaLaserHuruf     = $dataPO[0]->hargaLaserHuruf;
        $hargaKodeCap     = $dataPO[0]->hargaKodeCap;

        $biayaTambahan     = $dataPO[0]->biayaTambahan;
        $beratAkhir        = $dataPO[0]->beratAkhir;
        $susut             = $dataPO[0]->susut;
        $bahan             = $dataPO[0]->bahan;
        $kadarBahan        = $dataPO[0]->kadarBahan;
        $namaBatu          = $dataPO[0]->namaBatu;
        $beratBatu         = $dataPO[0]->beratBatu;
        $ukuranJari        = $dataPO[0]->ukuranJari;
        $berlian           = $dataPO[0]->berlian;
        $krumWarna         = $dataPO[0]->krumWarna;
        $tipeIkatan        = $dataPO[0]->tipeIkatan;
        $model             = $dataPO[0]->model;
        $beratBerlian      = $dataPO[0]->beratBerlian;
        $hargaBerlian      = $dataPO[0]->hargaBerlian;
        $batuZirkon        = $dataPO[0]->batuZirkon;
        $jumlahBatuZirkon  = $dataPO[0]->jumlahBatuZirkon;
        $hargaBatuZirkon   = $dataPO[0]->hargaBatuZirkon;
        $hargaKrumWarna    = $dataPO[0]->hargaKrumWarna;
        $keteranganKrum    = $dataPO[0]->keteranganKrum;
        $batuTerhadapGoresan = $dataPO[0]->batuTerhadapGoresan;
        $batuTerhadapPukulan = $dataPO[0]->batuTerhadapPukulan;
        $batuTerhadapKruman  = $dataPO[0]->batuTerhadapKruman;
        $keadaanBatuTengah   = $dataPO[0]->keadaanBatuTengah;
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
                            <h5>Edit Purchase Order Tempahan <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Nomor PO <?php echo $nomorPO ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><strong>Pembeli </strong><?php echo $dataPO[0]->namaCustomer ?> | <?php echo $dataPO[0]->nomorTelepon ?></p>
                                    <hr>
                                </div>
                            </div>
                            <?php echo form_open_multipart('user/updatePO/'.$idPO,'class="form-horizontal"')?>
                                <div class="form-group">
                                    <input type="hidden" name="kodeGambar" class="form-control" value="<?php echo $dataPO[0]->kodeGambar; ?>">
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
                                <div id="produkDetail">
                                    <div id="contentHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Detail Produk</h5>
                                    </div>
                                    <div id="contentDetail" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Kode Produk <strong><?php echo $dataPO[0]->kodeProduk ?></strong> | <small>Jenis Produk <?php echo $dataPO[0]->jenisProduk ?></small></h4>
                                                <hr>
                                            </div>
                                        </div>
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
                                                        <div id="ukuranCincin">
                                                            <label>Ukuran </label>
                                                            <input type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo $ukuranJari; ?>">
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
                                                    <div class="col-md-5">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Batu Zirkon</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuZirkon; if($a=="Swarovski"){?> checked="" <?php } ?> value="Swarovski" name="batuZirkon"> <i></i> Swarovski </label></div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuZirkon; if($a=="PRQ"){?> checked="" <?php } ?> value="PRQ" name="batuZirkon"> <i></i> PRQ </label></div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuZirkon; if($a==""){?> checked="" <?php } ?> value="" name="batuZirkon"> <i></i> Tidak Ada </label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
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
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Bungkus"){?> checked="" <?php } ?> value="Bungkus" name="tipeIkatan" required> <i></i> Bungkus </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Kuku"){?> checked="" <?php } ?> value="Kuku" name="tipeIkatan"> <i></i> Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Tanam"){?> checked="" <?php } ?> value="Tanam" name="tipeIkatan"> <i></i> Tanam </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Mangkok Kuku"){?> checked="" <?php } ?> value="Mangkok Kuku" name="tipeIkatan"> <i></i> Mangkok Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Bungkus Kaku"){?> checked="" <?php } ?> value="Bungkus Kaku" name="tipeIkatan"> <i></i> Bungkus Kaku </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Jepit"){?> checked="" <?php } ?> value="Jepit" name="tipeIkatan"> <i></i> Jepit </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a==""){?> checked="" <?php } ?> value="" name="tipeIkatan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Metode <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $metode; if($a=="Design"){?> checked="" <?php } ?> value="Design" name="metode" required> <i></i> Design </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $metode; if($a=="Manual"){?> checked="" <?php } ?> value="Manual" name="metode"> <i></i> Manual </label></div>
                                            </div>
                                            <div class="col-sm-6" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $metode; if($a=="Inject"){?> checked="" <?php } ?> value="Inject" name="metode"> <i></i> Inject </label></div>
                                            </div>
                                        </div>


                                        <div id="detailBatuPermata">
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Batu Terhadap Kruman <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapKruman; if($a=="Tahan"){?> checked="" <?php } ?> checked="" value="Tahan" name="batuTerhadapKruman"> <i></i> Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapKruman; if($a=="Tidak Tahan"){?> checked="" <?php } ?> value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapKruman; if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapKruman"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-sm-2 control-label">Batu Terhadap Pukulan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a=="Sangat Bagus"){?> checked="" <?php } ?> checked="" value="Sangat Bagus" name="batuTerhadapPukulan"> <i></i> Sangat Bagus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a=="Bagus"){?> checked="" <?php } ?> value="Bagus" name="batuTerhadapPukulan"> <i></i> Bagus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a=="Cukup"){?> checked="" <?php } ?> value="Cukup" name="batuTerhadapPukulan"> <i></i> Cukup </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a=="Kurang"){?> checked="" <?php } ?> value="Kurang" name="batuTerhadapPukulan"> <i></i> Kurang </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapPukulan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Batu Terhadap Goresan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapGoresan; if($a=="Kurang dari 6"){?> checked="" <?php } ?> checked="" value="Kurang dari 6" name="batuTerhadapGoresan"> <i></i> Kurang dari 6 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapGoresan; if($a=="6,5 Sampai 7,5"){?> checked="" <?php } ?> value="6,5 Sampai 7,5" name="batuTerhadapGoresan"> <i></i> 6,5 Sampai 7,5 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapGoresan; if($a=="Lebih dari 7"){?> checked="" <?php } ?> value="Lebih dari 7" name="batuTerhadapGoresan"> <i></i> Lebih dari 7 </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapGoresan; if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapGoresan"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keadaan Batu Tengah <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a=="Mulus"){?> checked="" <?php } ?> checked="" value="Mulus" name="keadaanBatuTengah"> <i></i> Mulus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a=="Serat Halus"){?> checked="" <?php } ?> value="Serat Halus" name="keadaanBatuTengah"> <i></i> Serat Halus </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a=="Serat Kasar"){?> checked="" <?php } ?> value="Serat Kasar" name="keadaanBatuTengah"> <i></i> Serat Kasar </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a=="Sompel"){?> checked="" <?php } ?> value="Sompel" name="keadaanBatuTengah"> <i></i> Sompel </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a==""){?> checked="" <?php } ?> value="" name="keadaanBatuTengah"> <i></i> Tidak Ada </label></div>
                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                </div>
                                <br>
                                <div id="detailTambahan">
                                    <div id="tambahanHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Informasi Tambahan</h5>
                                    </div>
                                    <div id="contentTambahan" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo $datangEmas; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Emas</label>
                                                        <input type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo $kadarDatangEmas; ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Datang Emas</label>
                                                        <input type="text" placeholder="Rp" name="hargaDatangEmas" class="form-control good" value="<?php echo $hargaDatangEmas; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Berlian </label>
                                                        <input type="text" placeholder="Pcs" name="datangBerlian" value="<?php echo $datangBerlian; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Berlian</label>
                                                        <input type="text" name="jumlahDatangBerlian" placeholder="Carat" value="<?php echo $jumlahDatangBerlian; ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Upah Pasang Berlian</label>
                                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" class="form-control good" value="<?php echo $upahPasangBerlian; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <span>Pekerjaan Tambahan</span> --> 
                                        <div class="hr-line-dashed"></div>
                                        <label>Pekerjaan Tambahan <br/></label>
                                        <div class="form-group">
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Enamel") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Enamel" name="pekerjaanTambahan[]"> <i></i> Enamel </label></div>
                                            </div>
                                            <div id="enamel" >
                                                <div class="col-sm-6">
                                                    <input type="text" name="keteranganEnamel" placeholder="Keterangan Enamel" class="form-control" value="<?php echo $keteranganEnamel; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="hargaEnamel" placeholder="Rp" class="form-control good" value="<?php echo $hargaEnamel; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Slap") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                            </div>
                                            <div id="slap" >
                                                <div class="col-sm-6">
                                                    <input type="text" name="keteranganSlap" placeholder="Keterangan Slap" class="form-control" value="<?php echo $keteranganSlap; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="hargaSlap" placeholder="Rp" class="form-control good" value="<?php echo $hargaSlap; ?>">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Kombinasi") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                            </div>   
                                            <div id="kombinasi" >
                                                <div class="col-sm-6">
                                                    <input type="text" name="keteranganKombinasi" placeholder="Keterangan Kombinasi" class="form-control" value="<?php echo $keteranganKombinasi; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="hargaKombinasi" placeholder="Rp" class="form-control good" value="<?php echo $hargaKombinasi; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Laser Huruf") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Laser Huruf" name="pekerjaanTambahan[]"> <i></i> Laser Huruf </label></div>
                                            </div>   
                                            <div id="laserHuruf" >
                                                <div class="col-sm-6">
                                                    <input type="text" name="keteranganLaserHuruf" placeholder="Keterangan Laser Huruf" class="form-control" value="<?php echo $keteranganLaserHuruf; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="hargaLaserHuruf" placeholder="Rp" class="form-control good" value="<?php echo $hargaLaserHuruf; ?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Kode Cap") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                            </div>   
                                            <div id="kodeCap" >
                                                <div class="col-sm-6">
                                                    <input type="text" name="keteranganKodeCap" placeholder="Keterangan Kode Cap" class="form-control" value="<?php echo $keteranganKodeCap; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="hargaKodeCap" placeholder="Rp" class="form-control good" value="<?php echo $hargaKodeCap; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <br>                     
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                    <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?php echo $model; ?>"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kuantitas</label>
                                    <div class="col-sm-4"><input type="number" name="kuantitas" class="form-control" value="<?php echo $kuantitas; ?>" required=""></div>
                                    <label class="col-sm-2 control-label">Estimasi Berat Akhir</label>
                                    <div class="col-sm-4"><input type="number" step="any" name="beratAkhir" placeholder="gr" class="form-control" value="<?php echo $beratAkhir; ?>" required=""></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                    </div>
                                    <label class="col-sm-2 control-label">Susut</label>
                                    <div class="col-sm-4"><input type="number" step="any" name="susut" class="form-control" value="<?php echo $susut; ?>" required=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$dataPO[0]->kodeGambar.'-cust.jpg')?>" class="img img-responsive" style="max-height: 125px;">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="upah" class="form-control good" value="<?php echo $upah; ?>" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Budget</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="budget" class="form-control good" value="<?php echo $budget; ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="panjar" class="form-control good" value="<?php echo $panjar; ?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
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
