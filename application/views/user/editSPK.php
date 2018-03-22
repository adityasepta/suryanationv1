<?php 
  $idPO=$dataSPK[0]->idPO;
  $idSPK=$dataSPK[0]->idSPK;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
  if($this->input->post('is_submitted')){
        $namaCustomer           = set_value('namaCustomer');
        $nomorTelepon           = set_value('nomorTelepon');
        $idSalesPerson          = set_value('idSalesPerson');
        $tanggalMasuk           = set_value('tanggalMasuk');
        $tanggalEstimasiPenyelesaian = set_value('tanggalEstimasiPenyelesaian');
        $nomorPO                = set_value('nomorPO');
        $jenisProduk            = set_value('jenisProduk');
        $bahan                  = set_value('bahan');
        $kadarBahan             = set_value('kadarBahan');
        $hargaBahan             = set_value('hargaBahan');      
        $datangEmas             = set_value('datangEmas');
        $hargaDatangEmas        = set_value('hargaDatangEmas');      
        $namaBatu               = set_value('namaBatu');
        $beratBatu              = set_value('beratBatu');
        $ukuranJari             = set_value('ukuranJari');
        $berlian                = set_value('berlian');
        $upah                   = set_value('upah');
        $tipeIkatan             = set_value('tipeIkatan');
        $metode                 = set_value('metode');
        $krumWarna              = set_value('krumWarna');      
        $model                  = set_value('model');
        $kuantitas              = set_value('kuantitas');
        $harga                  = set_value('harga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $kodeProduk             = set_value('kodeProduk');
        $batuTerhadapKruman     = set_value('batuTerhadapKruman');
        $batuTerhadapPukulan    = set_value('batuTerhadapPukulan');      
        $batuTerhadapGoresan    = set_value('batuTerhadapGoresan');
        $keadaanBatuTengah      = set_value('keadaanBatuTengah');
        $picdesain              = set_value('picdesain');
        $prioritas              = set_value('prioritas');
  }
  else {
        $namaCustomer           = $dataSPK[0]->namaCustomer;
        $nomorTelepon           = $dataSPK[0]->nomorTelepon;
        $idSalesPerson          = $dataSPK[0]->idSalesPerson;
        $tanggalMasuk           = $dataSPK[0]->tanggalMasuk;
        $tanggalEstimasiPenyelesaian = $dataSPK[0]->tanggalEstimasiPenyelesaian;
        $nomorPO                = $dataSPK[0]->nomorPO;
        $jenisProduk            = $dataSPK[0]->jenisProduk;
        $bahan                  = $dataSPK[0]->bahan;
        $kadarBahan             = $dataSPK[0]->kadarBahan;
        $hargaBahan             = $dataSPK[0]->hargaBahan;      
        $datangEmas             = $dataSPK[0]->datangEmas;
        $hargaDatangEmas        = $dataSPK[0]->hargaDatangEmas;      
        $namaBatu               = $dataSPK[0]->namaBatu;
        $beratBatu              = $dataSPK[0]->beratBatu;
        $ukuranJari             = $dataSPK[0]->ukuranJari;
        $berlian                = $dataSPK[0]->berlian;
        $upah                   = $dataSPK[0]->upah;
        $tipeIkatan             = $dataSPK[0]->tipeIkatan;
        $metode                 = $dataSPK[0]->metode;
        $krumWarna              = $dataSPK[0]->krumWarna;      
        $model                  = $dataSPK[0]->model;
        $kuantitas              = $dataSPK[0]->kuantitas;
        $harga                  = $dataSPK[0]->harga;      
        $panjar                 = $dataSPK[0]->panjar;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $batuTerhadapKruman     = $dataSPK[0]->batuTerhadapKruman;
        $batuTerhadapPukulan    = $dataSPK[0]->batuTerhadapPukulan;      
        $batuTerhadapGoresan    = $dataSPK[0]->batuTerhadapGoresan;
        $keadaanBatuTengah      = $dataSPK[0]->keadaanBatuTengah;
        $picdesain              = $dataSPK[0]->PICDesain;
        $prioritas              = $dataSPK[0]->prioritas;
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
                    <h2>Edit SPK</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">SPK</a>
                        </li>
                        <li class="active">
                            <strong>Edit SPK</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins collapsed">
                        <div class="ibox-title">
                            <h5>Data PO <small>Berisikan detail dari purchase order.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="form-horizontal">
                                <input type="hidden" name="idCustomer" class="form-control" value="<?= $idCustomer ?>">
                                <input type="hidden" name="idProduk" class="form-control" value="<?= $idProduk ?>">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" value="<?= $nomorPO ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?= $namaCustomer ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?= $nomorTelepon ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <input type="text" placeholder="idSalesPerson" name="idSalesPerson" class="form-control" value="<?php echo $dataSPK[0]->nama;?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?= $tglmsk ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?= $tglpyl ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-sm-10"><input type="text" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?= $kodeProduk ?>" readonly></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk" disabled> <i></i> Cincin </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk" disabled> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk" disabled> <i></i> Gelang </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk" disabled> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Mainan Nama"){?> checked="" <?php } ?> value="Mainan Nama" name="jenisProduk" disabled> <i></i> Mainan Nama </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk" disabled> <i></i> Cincin Kawin </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bahan <br/><small class="text-navy">Custom elements</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan" disabled> <i></i> Emas Kuning </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Swasa"){?> checked="" <?php } ?> value="Swasa" name="bahan" disabled> <i></i> Swasa </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan" disabled> <i></i> Emas Putih </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan" disabled> <i></i> Perak </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="col-sm-5">
                                            <label class="col-sm-4 control-label">Kadar <br/></label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" name="kadarBahan" placeholder="%" value="<?= $kadarBahan ?>"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-sm-6">
                                            <label class="col-sm-12 control-label">Harga Pasaran <br/></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="/gr" name="hargaBahan" class="form-control" value="<?= $hargaBahan ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Datang Emas</label>
                                    <div class="col-md-3"><input type="text" placeholder="gr" name="datangEmas" value="<?= $datangEmas ?>" class="form-control" readonly></div>
                                    <label class="col-sm-3 control-label">Harga Datang Emas</label>
                                    <div class="col-md-4"><input type="text" placeholder="/gr" name="hargaDatangEmas" class="form-control" value="<?= $hargaDatangEmas ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Batu</label>
                                    <div class="col-md-3"><input type="text" placeholder="Nama Batu" name="namaBatu" class="form-control" value="<?= $namaBatu ?>" readonly></div>
                                    <label class="col-sm-3 control-label">Berat Batu</label>
                                    <div class="col-md-4"><input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?= $beratBatu ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ukuran Jari</label>
                                    <div class="col-sm-10"><input type="text" name="ukuranJari" class="form-control" value="<?= $ukuranJari ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Swarowski / Diamond</label>
                                    <div class="col-sm-10"><input type="text" name="berlian" class="form-control" value="<?= $berlian ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" name="upah" class="form-control" value="<?= $upah ?>" readonly></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Ikatan <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Bungkus"){?> checked="" <?php } ?> value="Bungkus" name="tipeIkatan" disabled> <i></i> Bungkus </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Bungkus Kaku"){?> checked="" <?php } ?> value="Bungkus Kaku" name="tipeIkatan" disabled> <i></i> Bungkus Kaku </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Tanam"){?> checked="" <?php } ?> value="Tanam" name="tipeIkatan" disabled> <i></i> Tanam </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Kuku"){?> checked="" <?php } ?> value="Kuku" name="tipeIkatan" disabled> <i></i> Kuku </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Mangkok Kuku"){?> checked="" <?php } ?> value="Mangkok Kuku" name="tipeIkatan" disabled> <i></i> Mangkok Kuku </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Metode <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Design"){?> checked="" <?php } ?> value="Design" name="metode" disabled> <i></i> Design </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Manual"){?> checked="" <?php } ?> value="Manual" name="metode" disabled> <i></i> Manual </label></div>
                                    </div>
                                    <div class="col-sm-6" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Inject"){?> checked="" <?php } ?> value="Inject" name="metode" disabled> <i></i> Inject </label></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Krum Warna</label>
                                    <div class="col-sm-10"><input type="text" name="krumWarna" class="form-control" value="<?= $krumWarna; ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                    <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?= $model; ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kuantitas</label>
                                    <div class="col-sm-10"><input type="number" name="kuantitas" class="form-control" value="<?= $kuantitas; ?>" readonly></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url();?>assets/sampel-<?php echo $dataSPK[0]->kodeProduk?>.jpg" height="100 px">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga Cincin</label>
                                    <div class="col-sm-10"><input type="text" name="harga" class="form-control" value="<?= $harga; ?>" readonly></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" name="panjar" class="form-control" value="<?= $panjar; ?>" readonly></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data SPK <small>Berisikan detail dari SPK.</small></h5>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1"> General</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2">Design</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-3">BOM</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-4">Jadwal</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="panel-body">
                                                <?php echo form_open_multipart('user/updateSPK/'.$idSPK,'class="form-horizontal"')?>
                                                    <input type="hidden" name="idSPK" class="form-control" value="<?= $idSPK ?>">
                                                    <input type="hidden" name="nomorFaktur" class="form-control" value="<?= $nomorFaktur ?>">
                                                    <div class="form-group"><label class="col-sm-2 control-label">Nomor Faktur</label>
                                                        <div class="col-sm-10"><input type="text" placeholder="Nomor Faktur" name="nomorFaktur" value="<?= $nomorFaktur?>" class="form-control" readonly></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Batu Terhadap Kruman <br/><small class="text-navy">Pilih salah satu</small></label>

                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapKruman; if($a=="Tahan"){?> checked="" <?php } ?> value="Tahan" name="batuTerhadapKruman"> <i></i> Tahan </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapKruman; if($a=="Tidak Tahan"){?> checked="" <?php } ?> value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Batu Terhadap Pukulan <br/><small class="text-navy">Pilih salah satu</small></label>

                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapPukulan; if($a=="Sangat Bagus"){?> checked="" <?php } ?> value="Sangat Bagus" name="batuTerhadapPukulan"> <i></i> Sangat Bagus </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapPukulan; if($a=="Bagus"){?> checked="" <?php } ?> value="Bagus" name="batuTerhadapPukulan"> <i></i> Bagus </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapPukulan; if($a=="Cukup"){?> checked="" <?php } ?> value="Cukup" name="batuTerhadapPukulan"> <i></i> Cukup </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapPukulan; if($a=="Kurang"){?> checked="" <?php } ?> value="Kurang" name="batuTerhadapPukulan"> <i></i> Kurang </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Batu Terhadap Goresan <br/><small class="text-navy">Pilih salah satu</small></label>

                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapGoresan; if($a=="Kurang dari 6"){?> checked="" <?php } ?> value="Kurang dari 6" name="batuTerhadapGoresan"> <i></i> Kurang dari 6 </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapGoresan; if($a=="6,5 Sampai 7,5"){?> checked="" <?php } ?> value="6,5 Sampai 7,5" name="batuTerhadapGoresan"> <i></i> 6,5 Sampai 7,5 </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$batuTerhadapGoresan; if($a=="Lebih dari 7"){?> checked="" <?php } ?> value="Lebih dari 7" name="batuTerhadapGoresan"> <i></i> Lebih dari 7 </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Keadaan Batu Tengah <br/><small class="text-navy">Pilih salah satu</small></label>

                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$keadaanBatuTengah; if($a=="Mulus"){?> checked="" <?php } ?> value="Mulus" name="keadaanBatuTengah"> <i></i> Mulus </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$keadaanBatuTengah; if($a=="Serat Halus"){?> checked="" <?php } ?> value="Serat Halus" name="keadaanBatuTengah"> <i></i> Serat Halus </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$keadaanBatuTengah; if($a=="Serat Kasar"){?> checked="" <?php } ?> value="Serat Kasar" name="keadaanBatuTengah"> <i></i> Serat Kasur </label></div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-top: 10px;">
                                                            <div class="i-checks"><label> <input type="radio" <?php $a=$keadaanBatuTengah; if($a=="Sompel"){?> checked="" <?php } ?> value="Sompel" name="keadaanBatuTengah"> <i></i> Sompel </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>PIC Desain</label>
                                                                    <select id="picdesain" class="form-control"  name="picdesain">
                                                                        <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                                            <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= $picdesain; if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                            <div class="col-md-12">
                                                <label>Prioritas</label>
                                                <select id="prioritas" class="form-control"  name="prioritas">
                                                    <option value="0" <?php if($prioritas==0) { ?> selected <?php } ?> >Rendah</option>
                                                    <option value="1" <?php if($prioritas==1) { ?> selected <?php } ?> >Sedang</option>
                                                    <option value="2" <?php if($prioritas==2) { ?> selected <?php } ?> >Tinggi</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 col-sm-offset-2">
                                                            <a href="<?php echo base_url();?>user/spk" class="btn btn-default">Cancel</a>

                                                            

                                                            <button <?php if ($dataSPK[0]->statusPersetujuan=='Disetujui') { ?> disabled <?php } ?>  class="btn btn-primary" type="submit">Save changes</button>
                                                        </div>
                                                    </div>
                                                <?php echo form_close()?>
                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-pane">
                                            <div class="panel-body">
                                                    <div class="ibox-content">
                                                    <!-- <form method="get" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>user/tambahPO"> -->
                                                    <?php echo form_open_multipart('user/uploadDesain','class="form-horizontal"')?>
                                                        <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                                        <input type="hidden" placeholder="ID Produk" name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                                        <input type="hidden" placeholder="Kode Produk" name="kodeProduk" value="<?= $kodeProduk ?>" class="form-control">
                                                        <input type="hidden" placeholder="Nomor Faktur" name="nomorFaktur" value="<?= $nomorFaktur ?>" class="form-control">

                                                        <div class="hr-line-dashed"></div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Foto Desain</label>
                                                            <div class="col-sm-3">
                                                                
                                                                <?php if($dataSPK[0]->statusDesain !== 'Proses Desain'    ) { ?>
                                                                
                                                                    <img class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-d1.jpg')?>"><br><br>
                                                                <?php } ?>        

                                                                <label>Upload Gambar 1 (.JPG)</label>        
                                                                <input type="file" name="userfile[]">
                                                            </div>
                                                            <div class="col-sm-3">
                                                               
                                                                <?php if($dataSPK[0]->statusDesain !== 'Proses Desain'    ) { ?>
                                                                
                                                                    <img class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-d2.jpg')?>"><br><br>
                                                                <?php } ?>
                                                                 <label>Upload Gambar 2 (.JPG)</label>                 
                                                                <input type="file" name="userfile[]">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <?php if($dataSPK[0]->statusDesain !== 'Proses Desain'    ) { ?>
                                                                
                                                                    <img class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-d3.jpg')?>"><br><br>
                                                                <?php } ?> 
                                                                <label>Upload Gambar 3 (.JPG)</label>                
                                                                <input type="file" name="userfile[]">
                                                            </div>
                                                        </div>
                                                        <div class="hr-line-dashed"></div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4 col-sm-offset-2">
                                                                <button class="btn btn-primary" <?php if ($dataSPK[0]->statusDesain=='Disetujui') { ?> disabled <?php } ?> type="submit">Save changes</button>
                                                            </div>
                                                        </div>

                                                    <?php echo form_close()?>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-3" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                <p class="text-center">Untuk mengedit BOM klik dibawah ini.</p>
                                                <a href="<?php echo base_url()?>user/editProduk/<?php echo $dataSPK[0]->idProduk?>" class="btn btn-lg btn-warning btn-block">EDIT BOM</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-4" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-lg-3">
                                                            <label>AKTIVITAS</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label>TANGGAL MULAI</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label>TANGGAL SELESAI</label>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <?php echo form_open_multipart('user/editAktivitas','class="form-horizontal"')?>
                                                <?php for ($i=0; $i < count($jadwalProd) ; $i++) { ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-md-1"></div>
                                                            <input type="hidden" name="idSPK" class="form-control" value="<?= $idSPK ?>">
                                                            <input type="hidden" name="idProduk" class="form-control" value="<?= $idProduk ?>">
                                                            <input type="hidden" name="nomorFaktur" class="form-control" value="<?= $nomorFaktur ?>">
                                                        <div class="col-lg-3 i-checks">
                                                            <label><input type="checkbox" value="<?php echo $i?>"
                                                            <?php
                                                            if ($jadwalProd[$i]->startDate) {
                                                                echo 'checked'; 
                                                            }?>
                                                             name="nomorAktivitas[]"><i></i>&nbsp&nbsp&nbsp&nbsp<?php echo $jadwalProd[$i]->namaAktivitas?></label>
                                                             <input class="form-control" type="hidden" value="<?php echo $jadwalProd[$i]->idAktivitas?>" name="idAktivitas[]"> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input class="form-control" type="date" <?php if ($jadwalProd[$i]->startDate) { ?> value="<?php echo $jadwalProd[$i]->startDate;?>" <?php }?> name="startDate[]">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input class="form-control" type="date" <?php if ($jadwalProd[$i]->endDate) { ?> value="<?php echo $jadwalProd[$i]->endDate;?>" <?php }?> name="endDate[]">
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <div class="hr-line-dashed"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 col-sm-offset-2">
                                                        <button class="btn btn-primary" <?php if ($dataSPK[0]->statusJadwal=='Disetujui') { ?> disabled <?php } ?> type="submit">Save changes</button>
                                                    </div>
                                                </div>

                                                <?php echo form_close()?>
                                            </div>
                                        </div>
                                        <!-- <div id="tab-5" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="row">
                                                    
                                                </div>
                                                <div class="col-sm-4">
                                                <?php for ($i=0; $i < count($aktivitasDefault) ; $i++) { ?>
                                                    <div class="i-checks"><label><input type="checkbox" value="<?php echo $aktivitasDefault[$i]->idAktivitas?>" 
                                                        <?php for ($j=0; $j < count($jadwal); $j++) {
                                                            if ($aktivitasDefault[$i]->idAktivitas==$jadwal[$j]->idAktivitas) {
                                                                echo 'checked';
                                                            }
                                                        }?>
                                                        name="nomorAktivitas[]"><i></i>  <?php echo $aktivitasDefault[$i]->namaAktivitas?></label>
                                                    </div>
                                                    </div>

                                                    <input class="form-control" type="hidden" value="<?php echo $aktivitasDefault[$i]->idAktivitas?>" name="idAktivitas[]">   

                                                    <?php for ($j=0; $j < count($jadwal); $j++) {
                                                        if ($aktivitasDefault[$i]->idAktivitas==$jadwal[$j]->idAktivitas) { 

                                                              $tglmsk = new DateTime($jadwal[$j]->startDate);
                                                              $tglmsk = $tglmsk->format("Y-m-d");
                                                              $tglpyl = new DateTime($jadwal[$j]->endDate);
                                                              $tglpyl = $tglpyl->format("Y-m-d");

                                                              ?>
                                                            <div class="col-sm-4">
                                                                <input class="form-control" type="date" value="<?php echo $tglmsk ?>" name="startDate[]">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <input class="form-control" type="date" value="<?php echo $tglpyl ?>" name="endDate[]">
                                                            </div>
                                                    <?php    }
                                                    echo "<br>";
                                                    }?>
                                                    
                                                <?php } ?>
                                            </div>
                                        </div> -->
                                        <!-- End Tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- <script>
        $('#general').submit(function(e) {

            var form = $(this);

            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('user/updateSPK'); ?>",
                data: form.serialize(), // <--- THIS IS THE CHANGE
                dataType: "html",
                success: function(data){
                    $('#resultGeneral').prepend(data);
                },
                error: function() { alert("Error posting feed."); }
           });


    </script>  -->
</body>

</html>
