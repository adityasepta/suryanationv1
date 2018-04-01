<?php 
  $idPO=$dataPO[0]->idPO;
  if($this->input->post('is_submitted')){
    $nomorPO           = set_value('nomorPO');
    $idProduk          = set_value('idProduk');
    $idCustomer        = set_value('idCustomer');
    $idSalesPerson     = set_value('idSalesPerson');
    $tanggalMasuk      = set_value('tanggalMasuk');
    $tanggalEstimasiPenyelesaian    = set_value('tanggalEstimasiPenyelesaian');
    $hargaBahan         = set_value('hargaBahan');
    $upah               = set_value('upah');
    $panjar             = set_value('panjar');
    $totalHarga         = set_value('totalHarga');
    $tipeOrder          = set_value('tipeOrder');
    $beratAkhir         = set_value('beratAkhir');
    $tipeCustomer       = set_value('tipeCustomer');
    $krumWarna          = set_value('krumWarna');
    $keteranganKrum     = set_value('keteranganKrum');
    $keteranganSlep     = set_value('keteranganSlep');
    $keteranganRombak   = set_value('keteranganRombak');
    $resize             = set_value('resize');
    $hargaPerak         = set_value('hargaPerak');
    $hargaKrum          = set_value('hargaKrum');
    $hargaSlep          = set_value('hargaSlep');
    $upahRombak         = set_value('upahRombak');
    $hargaResize        = set_value('hargaResize');
    $namaBatu           = set_value('namaBatu');
    $beratBatu          = set_value('beratBatu');
    $ukuranJari         = set_value('ukuranJari');
    $model              = set_value('model');
    $bahan              = set_value('bahan');
    $keadaanBatuTengah  = set_value('keadaanBatuTengah');
    $batuTerhadapKruman = set_value('batuTerhadapKruman');
    $batuTerhadapPukulan= set_value('batuTerhadapPukulan');
  }
  else {
    $nomorPO           = $dataPO[0]->nomorPO;
    $idProduk          = $dataPO[0]->idProduk;
    $idCustomer        = $dataPO[0]->idCustomer;
    $idSalesPerson     = $dataPO[0]->idSalesPerson;
    $tanggalMasuk      = $dataPO[0]->tglmsk;
    $tanggalEstimasiPenyelesaian    = $dataPO[0]->tglpsy;
    $hargaBahan         = $dataPO[0]->hargaBahan;
    $upah               = $dataPO[0]->upah;
    $panjar             = $dataPO[0]->panjar;
    $totalHarga         = $dataPO[0]->totalHarga;
    $tipeOrder          = $dataPO[0]->tipeOrder;
    $beratAkhir         = $dataPO[0]->beratAkhir;
    $tipeCustomer       = $dataPO[0]->tipeCustomer;
    $krumWarna          = $dataPO[0]->krumWarna;
    $keteranganKrum     = $dataPO[0]->keteranganKrum;
    $keteranganSlep     = $dataPO[0]->keteranganSlep;
    $keteranganRombak   = $dataPO[0]->keteranganRombak;
    $resize             = $dataPO[0]->resize;
    $hargaPerak         = $dataPO[0]->hargaPerak;
    $hargaKrum          = $dataPO[0]->hargaKrum;
    $hargaSlep          = $dataPO[0]->hargaSlep;
    $upahRombak         = $dataPO[0]->upahRombak;
    $hargaResize        = $dataPO[0]->hargaResize;
    $namaBatu           = $dataPO[0]->namaBatu;
    $beratBatu          = $dataPO[0]->beratBatu;
    $ukuranJari         = $dataPO[0]->ukuranJari;
    $model              = $dataPO[0]->model;
    $bahan              = $dataPO[0]->bahan;
    $keadaanBatuTengah  = $dataPO[0]->keadaanBatuTengah;
    $batuTerhadapKruman = $dataPO[0]->batuTerhadapKruman;
    $batuTerhadapPukulan= $dataPO[0]->batuTerhadapPukulan;
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
                            <h5>Edit Purchase Order Massal <small>Isi semua data yang dibutuhkan.</small></h5>
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
                            <?php echo form_open_multipart('user/updatePOMassal/'.$idPO,'class="form-horizontal"')?>
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
                                        <div class="form-group"><label class="col-sm-2 control-label">Ukuran Jari</label>
                                            <div class="col-sm-10"><input type="text" name="ukuranJari" class="form-control" value="<?php echo $ukuranJari; ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                            <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?php echo $model; ?>"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar</label>
                                            <div class="col-sm-10">
                                                
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Batu Permata</label>
                                        <div class="col-md-3">
                                            <input id="namaBatu" type="text" placeholder="Nama Batu" name="namaBatu" class="form-control" value="<?php echo $namaBatu; ?>">
                                        </div>
                                        <label class="col-sm-2 control-label">Berat Batu Permata</label>
                                        <div class="col-md-3">
                                            <input id="beratBatu" type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo $beratBatu; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keadaan Batu Tengah </label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= $keadaanBatuTengah; if($a=="Mulus"){?> checked="" <?php } ?> value="Mulus" name="keadaanBatuTengah" required> <i></i> Mulus </label></div>
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
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Batu Terhadap Kruman</label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapKruman; if($a=="Tahan"){?> checked="" <?php } ?> value="Tahan" name="batuTerhadapKruman" required> <i></i> Tahan </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapKruman; if($a=="Tidak Tahan"){?> checked="" <?php } ?> value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Batu Terhadap Pukulan</label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= $batuTerhadapPukulan; if($a=="Sangat Bagus"){?> checked="" <?php } ?> value="Sangat Bagus" name="batuTerhadapPukulan" required> <i></i> Sangat Bagus </label></div>
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
                                    </div>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>Berat Perak</label>
                                                <input id="beratAkhir" type="number" step="any" name="beratAkhir" onchange="calc1();" class="form-control" placeholder="gr" value="<?php echo set_value('beratAkhir'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Harga Pasaran</label>
                                                <input id="hargaBahan" type="text" name="hargaBahan" onchange="calc1();" class="form-control good" placeholder="Rp" value="<?php echo set_value('hargaBahan'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Harga</label>
                                                <input id="hargaPerak" type="text" name="hargaPerak" class="form-control good" placeholder="Rp" value="<?php echo set_value('hargaPerak'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>Krum Warna</label>
                                                <input id="krumWarna" type="text" name="krumWarna" class="form-control" value="<?php echo set_value('krumWarna'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Keterangan Krum</label>
                                                <input id="keteranganKrum" type="text" name="keteranganKrum" class="form-control" value="<?php echo set_value('keteranganKrum'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Harga Krum</label>
                                                <input id="hargaKrumWarna" type="text" name="hargaKrumWarna" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaKrumWarna'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-4">
                                                <label>Keterangan Slep</label>
                                                <input id="keteranganSlep" type="text" name="keteranganSlep" class="form-control" value="<?php echo set_value('keteranganSlep'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Harga Slep</label>
                                                <input id="hargaSlep" type="text" name="hargaSlep" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaSlep'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-4">
                                                <label>Keterangan Rombak</label>
                                                <input id="keteranganRombak" type="text" name="keteranganRombak" class="form-control" value="<?php echo set_value('keteranganRombak'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Upah Rombak</label>
                                                <input id="upahRombak" type="text" name="upahRombak" class="form-control good"  onchange="calc2();" placeholder="Rp" value="<?php echo set_value('upahRombak'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-4">
                                                <label>Resize</label>
                                                <input id="resize" type="text" name="resize" class="form-control" value="<?php echo set_value('resize'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Harga Resize</label>
                                                <input id="hargaResize" type="text" name="hargaResize" placeholder="Rp" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaResize'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-4">
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Upah Pasang Batu</label>
                                                <input id="upah" type="text" name="upah" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('upah'); ?>">
                                            </div>
                                        </div>

                                        
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group"><label class="col-sm-4 control-label">Total Harga</label>
                                            <div class="col-sm-8"><input type="text" name="totalHarga" id="totalHarga" class="form-control good" placeholder="Rp" value="<?php echo set_value('totalHarga'); ?>" readonly></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-4 control-label">Panjar</label>
                                            <div class="col-sm-8"><input type="text" name="panjar" id="panjar" class="form-control good" onchange="calc3()" placeholder="Rp" value="<?php echo set_value('panjar'); ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-4 control-label">Sisa</label>
                                            <div class="col-sm-8"><input type="text" name="sisa" id="sisa" class="form-control good" placeholder="Rp" value="<?php echo set_value('sisa'); ?>" readonly></div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
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
