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
        $keteranganTambahan= set_value('keteranganTambahan');
        $keteranganEnamel     = set_value('keteranganEnamel');
        $keteranganSlap     = set_value('keteranganSlap');
        $keteranganKombinasi     = set_value('keteranganKombinasi');
        $keteranganLaserHuruf     = set_value('keteranganLaserHuruf');
        $keteranganKodeCap     = set_value('keteranganKodeCap');
        $hargaEnamel     = set_value('hargaEnamel');
        $hargaSlap     = set_value('hargaSlap');
        $hargaKombinasi     = set_value('hargaKombinasi');
        $hargaLaserHuruf     = set_value('hargaLaserHuruf');
        $hargaKodeCap     = set_value('hargaKodeCap');
        $jenisCustomer     = set_value('jenisCustomer');
        $jenisProduk     = set_value('jenisProduk');
        $persenBiaya     = set_value('persenBiaya');
        $estimasi     = set_value('estimasi');
        $ketBatu     = set_value('ketBatu');
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
        $jenisCustomer   = $dataPO[0]->jenisCustomer;
        $jenisProduk   = $dataPO[0]->jenisProduk;
        $persenBiaya   = $dataPO[0]->persenBiaya;
        $estimasi   = $dataPO[0]->estimasi;
        $ketBatu   = $dataPO[0]->keteranganBatu;
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

    <script src="<?php echo base_url();?>assets/js/editable-dropdown.js"></script>

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
                                    <input type="hidden" name="nomorPO" class="form-control" value="<?php echo $dataPO[0]->nomorPO; ?>">
                                    <input type="hidden" name="jenisProduk" class="form-control" value="<?php echo $dataPO[0]->jenisProduk; ?>">
                                    <input type="hidden" name="idProduk" class="form-control" value="<?php echo $dataPO[0]->idProduk; ?>">
                                    <input type="hidden" name="idStokBarang" class="form-control" value="<?php echo $dataPO[0]->idStokBarang; ?>">
                                    <input type="hidden" name="jenisCustomer" class="form-control" value="<?php echo $dataPO[0]->jenisCustomer; ?>">
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
                                                <h4>Kode Produk <strong><?php echo $dataPO[0]->kodeProduk ?></strong> | <small>Jenis Produk <?php echo $dataPO[0]->jenisProduk ?></small> | <?php echo $dataPO[0]->jenisCustomer ?></h4>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5">
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
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Kuning + Putih"){?> checked="" <?php } ?> value="Emas Kuning + Putih" name="bahan"> <i></i> Emas Kuning + Putih </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Putih + Rosegold"){?> checked="" <?php } ?> value="Emas Putih + Rosegold" name="bahan"> <i></i> Emas Putih + Rosegold </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Kadar (lokal)</label>
                                                        <input id="kadarBahan" type="text" name="kadarBahan" placeholder="%" value="<?php echo $kadarBahan; ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-6" id="penambahanPersen">
                                                        <label>Pen (Persen)</label>
                                                        <input id="persenBiaya" type="text" name="persenBiaya" placeholder="%" value="<?php echo $persenBiaya; ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-6" id="hargaPasaran">
                                                        <label>Harga Per Gram</label>
                                                        <input id="hargaBahan" type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo $hargaBahan; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Kuantitas</label>
                                                        <input type="number" name="kuantitas" class="form-control" value="1" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div id="ukuranCincin" style="display: none;">
                                                            <label>Ukuran Jari </label>
                                                            <input type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo $ukuranJari;?>">
                                                        </div>
                                                        <div id="ukuranLiontin" style="display: none;">
                                                            <label>Ukuran </label>
                                                            <input type="text" placeholder="Ukuran" name="ukuran" class="form-control" value="<?php echo $ukuranJari; ?>">
                                                        </div>
                                                        <div id="ukuranGelang" style="display: none;">
                                                            <label>Diameter X lebar </label>
                                                            <input type="text" placeholder="12cm X 22cm" name="diameter" class="form-control" value="<?php echo $ukuranJari; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Estimasi Berat </label>
                                                        <input type="number" step="any" name="beratAkhir" placeholder="gr" class="form-control" value="<?php echo $beratAkhir; ?>" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Range Berat Estimasi</label>
                                                        <input type="text" placeholder="10 gr - 14 gr" class="form-control" name="estimasi" value="<?php echo $estimasi; ?>" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Susut</label>
                                                        <input type="number" placeholder="gr" step="any" name="susut" class="form-control" value="<?php echo $susut; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo $datangEmas; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Emas (lokal)</label>
                                                        <input id="kadarDatangEmas" type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo $kadarDatangEmas; ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Per Gram</label>
                                                        <input id="hargaDatangEmas" type="text" placeholder="Rp" name="hargaDatangEmas" class="form-control good" value="<?php echo $hargaDatangEmas ?>" >
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
                                                        <label>Berat Datang Berlian</label>
                                                        <input type="text" name="jumlahDatangBerlian" placeholder="Carat" value="<?php echo $jumlahDatangBerlian; ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Upah Pasang Berlian</label>
                                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" class="form-control good" value="<?php echo $upahPasangBerlian; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Batu Permata</label>
                                            <div class="col-md-4">
                                                <input type="text" id="batu" placeholder="Nama Batu" name="namaBatu" onchange="detailBatu();" class="form-control" value="<?php echo $namaBatu; ?>">
                                            </div>
                                            <label class="col-md-2 control-label">Berat Batu Permata</label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo $beratBatu; ?>">
                                            </div>
                                        </div>
                                        <div id="detailBatuPermata">
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
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Keterangan Batu</label>
                                                <div class="col-sm-10">
                                                     <textarea type="text" class="form-control" name="ketBatu" rows="2" value="<?php echo $ketBatu?>"><?php echo $ketBatu?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Berlian</label>
                                                        <input type="text" placeholder="Nama Berlian" name="berlian" class="form-control" value="<?php echo set_value('berlian'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Berat Berlian</label>
                                                        <input type="text" placeholder="gr" name="beratBerlian" class="form-control" value="<?php echo set_value('beratBerlian'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Berlian</label>
                                                        <input type="text" placeholder="Rp" name="hargaBerlian" class="form-control good" value="<?php echo set_value('hargaBerlian'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                    <label>Berlian / Swarowski</label><br>
                                                </div>
                                                <div class="col-sm-1" style="width:0;"></div>
                                                <div class="col-md-2">
                                                    <label>Harga Satuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <?php for ($y=0; $y < count($poberlian) ; $y++) { ?>
                                                    <div class="form-group row" id="del<?php echo $y ?>">
                                                        <div class="col-md-4 ">
                                                            <input type="text" name= "namaBerlian[]" placeholder="Nama Berlian" value="<?php echo $poberlian[$y]->namaBerlian ?>" class="form-control" readonly>
                                                        </div>
                                                        <div class="col-sm-1" style="width:0;">:</div>
                                                        <div class="col-md-2">
                                                            <input type="text" name= "harga[]" placeholder="Harga Berlian" value="<?php echo $poberlian[$y]->harga ?>" class="form-control" required>
                                                        </div>
                                                        <input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="<?php echo $poberlian[$y]->jenis ?>" class="form-control">
                                                        <button type="button" class="btn remove_field" onclick="removeDummy<?php echo $y ?>()">Remove</button>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Berlian</button>
                                                <div class="input_fields_wrap">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-info btn-sm add_fields" style="margin-bottom: 5px;">Tambah Batu Zirkon</button>
                                                <div class="input_fields_add">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>  
                                                             

                                <div class="hr-line-dashed"></div>  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pekerjaan Tambahan <br/></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                if ($pekerjaan[$i]=="Enamel") { $a++; }
                                            } if($a>0){?> checked="" <?php } ?> value="Enamel" name="pekerjaanTambahan[]"> <i></i> Enamel </label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="keteranganEnamel" placeholder="Keterangan Enamel" class="form-control" value="<?php echo $keteranganEnamel; ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="hargaEnamel" placeholder="Rp" class="form-control good" value="<?php echo $hargaEnamel; ?>">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                if ($pekerjaan[$i]=="Slap") { $a++; }
                                            } if($a>0){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="keteranganSlap" placeholder="Keterangan Slap" class="form-control" value="<?php echo $keteranganSlap; ?>">
                                        </div>    
                                        <div class="col-sm-4">
                                            <input type="text" name="hargaSlap" placeholder="Rp" class="form-control good" value="<?php echo $hargaSlap; ?>">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                if ($pekerjaan[$i]=="Kombinasi") { $a++; }
                                            } if($a>0){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                        </div>   
                                        <div class="col-sm-6">
                                            <input type="text" name="keteranganKombinasi" placeholder="Keterangan Kombinasi" class="form-control" value="<?php echo $keteranganKombinasi; ?>">
                                        </div> 
                                        <div class="col-sm-4">
                                            <input type="text" name="hargaKombinasi" placeholder="Rp" class="form-control good" value="<?php echo $hargaKombinasi; ?>">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                if ($pekerjaan[$i]=="Laser Huruf") { $a++; }
                                            } if($a>0){?> checked="" <?php } ?> value="Laser Huruf" name="pekerjaanTambahan[]"> <i></i> Laser Huruf </label></div>
                                        </div>   
                                        <div class="col-sm-6">
                                            <input type="text" name="keteranganLaserHuruf" placeholder="Keterangan Laser Huruf" class="form-control" value="<?php echo $keteranganLaserHuruf; ?>">
                                        </div> 
                                        <div class="col-sm-4">
                                            <input type="text" name="hargaLaserHuruf" placeholder="Rp" class="form-control good" value="<?php echo $hargaLaserHuruf; ?>">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                if ($pekerjaan[$i]=="Kode Cap") { $a++; }
                                            } if($a>0){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                        </div>   
                                        <div class="col-sm-6">
                                            <input type="text" name="keteranganKodeCap" placeholder="Keterangan Kode Cap" class="form-control" value="<?php echo $keteranganKodeCap; ?>">
                                        </div> 
                                        <div class="col-sm-4">
                                            <input type="text" name="hargaKodeCap" placeholder="Rp" class="form-control good" value="<?php echo $hargaKodeCap; ?>">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
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
                                        <div class="i-checks"><label> <input type="radio" <?php $a= $tipeIkatan; if($a=="Bungkus Kuku"){?> checked="" <?php } ?> value="Bungkus Kuku" name="tipeIkatan"> <i></i> Bungkus Kuku </label></div>
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
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" required> <i></i> Teliti </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Keterangan Lain</label>
                                    <div class="col-sm-10"><textarea type="text" name="model" class="form-control" value="<?php echo $model; ?>"><?php echo $model; ?></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$dataPO[0]->kodeGambar.'-cust.jpg')?>" class="img img-responsive" style="max-height: 125px;">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">-</label>
                                    <div class="col-sm-10">
                                        <label>Insert Image(.JPG)</label>                
                                        <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
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

    <script src="<?php echo base_url();?>assets/js/inputmask.bundle.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    <script type="text/javascript">
        $('.good').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: 'Rp ', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    </script>

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
    <script type="text/javascript">
    $(document).ready(function () {
        var jenisProduk = '<?php echo $jenisProduk;?>';
        var jenisCustomer = '<?php echo $jenisCustomer;?>';
        console.log(jenisProduk);
        if(jenisProduk=='Cincin') { 
            document.getElementById('ukuranCincin').style.display = 'block';
            document.getElementById('ukuranLiontin').style.display = 'none';
            document.getElementById('ukuranGelang').style.display = 'none';
        } else if (jenisProduk=='Liontin'){
            document.getElementById('ukuranLiontin').style.display = 'block';
            document.getElementById('ukuranCincin').style.display = 'none';
            document.getElementById('ukuranGelang').style.display = 'none';
        } else if (jenisProduk=='Gelang'){
            document.getElementById('ukuranGelang').style.display = 'block';
            document.getElementById('ukuranLiontin').style.display = 'none';
            document.getElementById('ukuranCincin').style.display = 'none';
        } else if (jenisProduk=='Cincin Kawin'){
            document.getElementById('ukuranCincin').style.display = 'block';
            document.getElementById('ukuranLiontin').style.display = 'none';
            document.getElementById('ukuranGelang').style.display = 'none';
        } else if (jenisProduk=='Anting'){
            document.getElementById('ukuranLiontin').style.display = 'block';
            document.getElementById('ukuranCincin').style.display = 'none';
            document.getElementById('ukuranGelang').style.display = 'none';
        } else if (jenisProduk=='Mainan Nama'){
            document.getElementById('ukuranLiontin').style.display = 'block';
            document.getElementById('ukuranCincin').style.display = 'none';
            document.getElementById('ukuranGelang').style.display = 'none';
        } else {
            document.getElementById('ukuranCincin').style.display = 'none';
            document.getElementById('ukuranLiontin').style.display = 'block';
            document.getElementById('ukuranGelang').style.display = 'none';
 
        }

        if (jenisCustomer=='Toko'){
            document.getElementById('penambahanPersen').style.display = 'block';
            document.getElementById('hargaPasaran').style.display = 'none';
        } else {
            document.getElementById('penambahanPersen').style.display = 'none';
            document.getElementById('hargaPasaran').style.display = 'block';
            document.getElementById('persenBiaya').value = 0;
        }

    });
    </script>
    <script type="text/javascript">
        $("#klikenamel").on("ifChanged", showEnamel);
        $("#klikslap").on("ifChanged", showSlap);
        $("#klikkombinasi").on("ifChanged", showKombinasi);
        $("#kliklaserHuruf").on("ifChanged", showLaserHuruf);
        $("#klikkodeCap").on("ifChanged", showKodeCap);

        function showEnamel() {
            if ($('#klikenamel').iCheck('update')[0].checked) {
            document.getElementById('enamel').style.display = 'block';
            } else {
                document.getElementById('enamel').style.display = 'none';
            }
        }

        function showSlap() {
            if ($('#klikslap').iCheck('update')[0].checked) {
            document.getElementById('slap').style.display = 'block';
            } else {
                document.getElementById('slap').style.display = 'none';
            }
        } 

        function showKombinasi() {
            if ($('#klikkombinasi').iCheck('update')[0].checked) {
            document.getElementById('kombinasi').style.display = 'block';
            } else {
                document.getElementById('kombinasi').style.display = 'none';
            }
        }

        function showLaserHuruf() {
            if ($('#kliklaserHuruf').iCheck('update')[0].checked) {
            document.getElementById('laserHuruf').style.display = 'block';
            } else {
                document.getElementById('laserHuruf').style.display = 'none';
            }
        }

        function showKodeCap() {
            if ($('#klikkodeCap').iCheck('update')[0].checked) {
            document.getElementById('kodeCap').style.display = 'block';
            } else {
                document.getElementById('kodeCap').style.display = 'none';
            }
        }

    </script>
    <script type="text/javascript">
        function detailBatu(){
            document.getElementById('detailBatuPermata').style.display = 'block';
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            var max_fields      = 30; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            
            var n;
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="form-group"><div class="col-md-4"><label>Keterangan Poin Berlian</label><select class="form-control m-b" name="namaBerlian[]" id="lstDropDown_'+x+'" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($material); $i++) { ?><option value="<?php echo $material[$i]->namaMaterial?>"><?php echo $material[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-md-3"><label>Harga Berlian Per Karat (Dollar)</label><input id="hargaPoin'+x+'" type="text" name= "harga[]" placeholder="Harga Berlian" class="form-control" required></div><input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="Berlian" class="form-control"><button class="btn remove_field" style="margin-top:22px;">Remove</button></div><script>$("#lstDropDown_'+x+'").change(function(){var hg=getHarga(document.getElementById("lstDropDown_'+x+'").value);document.getElementById("hargaPoin'+x+'").value=hg;});</' + 'script>'); //add input box
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });

        function getHarga(n){
            var jenisCustomer = $("input[name='jenisCustomer']:checked").val();
            <?php for ($i = 0; $i < count($material); $i++) { ?>
                var namaMaterial = "<?php echo $material[$i]->namaMaterial?>";
                if(jenisCustomer=="Toko"){
                    var hargaMaterial = <?php echo $material[$i]->hargaToko?>;
                } else {
                    var hargaMaterial = <?php echo $material[$i]->hargaSatuan?>;
                }

                if(n==namaMaterial) {
                    return hargaMaterial;
                }
            <?php } ?>
         }
       

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 30; //maximum input boxes allowed
            var wrapper         = $(".input_fields_add"); //Fields wrapper
            var add_button      = $(".add_fields"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="form-group"><div class="col-sm-12"><div class="row"><div class="col-md-4"><label>Batu Zirkon</label><select class="form-control m-b" name="namaBerlian[]" id="lstDropDown_A'+x+'" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($zirkon); $i++) { ?><option value="<?php echo $zirkon[$i]->namaMaterial?>"><?php echo $zirkon[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-md-3"><label>Harga Batu Zirkon (/pcs)</label><input type="text" id="hargaPoinZirkon'+x+'" placeholder="Rp" name="harga[]" class="form-control good" value="<?php echo set_value('hargaBatuZirkon'); ?>"></div><div class="col-md-2"><input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="Zirkon" class="form-control"><button class="btn remove_fields" style="margin-top:22px;">Remove</button> </div></div></div></div><script>$("#lstDropDown_A'+x+'").change(function(){var hg=getHargaZirkon(document.getElementById("lstDropDown_A'+x+'").value);document.getElementById("hargaPoinZirkon'+x+'").value=hg;});</' + 'script>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_fields", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
            })
        });
        function getHargaZirkon(n){
            console.log(n);
            var jenisCustomer = $("input[name='jenisCustomer']:checked").val();
            <?php for ($i = 0; $i < count($zirkon); $i++) { ?>
                var namaMaterial = "<?php echo $zirkon[$i]->namaMaterial?>";
                if(jenisCustomer=="Toko"){
                    var hargaMaterial = <?php echo $zirkon[$i]->hargaToko?>;
                } else {
                    var hargaMaterial = <?php echo $zirkon[$i]->hargaSatuan?>;
                }

                if(n==namaMaterial) {
                    return hargaMaterial;
                }
            <?php } ?>
         }
        // <div class="col-md-3"><label>Jumlah Batu Zirkon</label><input type="text" placeholder="Jumlah Batu Zirkon" name="jumlahBatuZirkon" class="form-control" value="<?php echo set_value('jumlahBatuZirkon'); ?>"></div>
    </script>
    <script type="text/javascript">
        $(".switch").find("input[id=pekTam]").on("change",function() {
            var status = $(this).prop('checked');
            console.log(status);
            if (status==true) {
                document.getElementById('detailTambahan').style.display = 'block';
            } else { 
                document.getElementById('detailTambahan').style.display = 'none';
            }
        });
    </script>
    <script type="text/javascript">
        $("#kadarDatangEmas").on("change",function() {
            var cekKadar = document.getElementById('kadarDatangEmas').value;
            if (cekKadar==null||cekKadar==0) {
                document.getElementById('hargaDatangEmas').disabled = false;
            } else { 
                document.getElementById('hargaDatangEmas').disabled = true;
                document.getElementById('hargaDatangEmas').value = 0;
            }
        });

        $("#hargaDatangEmas").on("change",function() {
            var cekHarga = document.getElementById('hargaDatangEmas').value;
            console.log(cekHarga);
            if (cekHarga==null||cekHarga==0||cekHarga=='Rp'||cekHarga=='Rp 0') {
                document.getElementById('kadarDatangEmas').disabled = false;
            } else { 
                document.getElementById('kadarDatangEmas').disabled = true;
                document.getElementById('kadarDatangEmas').value = 0;
            }
        });
    </script>
    <script type="text/javascript">
        <?php for ($y=0; $y < count($poberlian) ; $y++) { ?>
        function removeDummy<?php echo $y ?>() {
            var elem = document.getElementById('del<?php echo $y ?>');
            elem.parentNode.removeChild(elem);
            return false;
        }
        <?php } ?>
    </script>
</body>

</html>
