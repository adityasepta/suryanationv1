<?php 
  $idPO=$dataSPK[0]->idPO;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
  if($this->input->post('is_submitted')){
        $namaCustomer           = set_value('namaCustomer');
        $nomorTelepon           = set_value('nomorTelepon');
        $idSalesPerson          = set_value('idSalesPerson');
        $tanggalMasuk           = set_value('tanggalMasuk');
        $tanggalEstimasiPenyelesaian = set_value('tanggalEstimasiPenyelesaian');
        $nomorPO                = set_value('nomorPO');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $idSPK                  = set_value('idSPK');
        $kodeGambar             = set_value('kodeGambar');
  }
  else {
        $namaCustomer           = $dataSPK[0]->namaCustomer;
        $nomorTelepon           = $dataSPK[0]->nomorTelepon;
        $idSalesPerson          = $dataSPK[0]->idSalesPerson;
        $tanggalMasuk           = $dataSPK[0]->tanggalMasuk;
        $tanggalEstimasiPenyelesaian = $dataSPK[0]->tanggalEstimasiPenyelesaian;
        $nomorPO                = $dataSPK[0]->nomorPO;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $idSPK                  = $dataSPK[0]->idSPK;
        $nama                   = $dataSPK[0]->nama;
        $kodeGambar             = $dataSPK[0]->kodeGambar;
        $namaProduk             = $dataSPK[0]->namaProduk;
  }

  $tglmsk = new DateTime($tanggalMasuk);
  $tglmsk = $tglmsk->format("d F Y");
  $tglpyl = new DateTime($tanggalEstimasiPenyelesaian);
  $tglpyl = $tglpyl->format("d F Y");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Services</title>

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
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Penilaian Customer</strong>
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
                            <h5>Detil PO</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2><?php echo $namaProduk ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 125px;">
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal">
                                        <dt>Nama Konsumen:</dt> <dd> <?php echo $namaCustomer ?></dd>
                                        <dt>Nomor Telepon:</dt> <dd> <?php echo $nomorTelepon ?></dd>
                                        <dt>Nomor PO:</dt> <dd><a href="#" class="text-navy"> <?php echo $nomorPO ?></a> </dd>
                                        <dt>Sales Person:</dt> <dd> <?php echo $dataSPK[0]->nama?> </dd>
                                    </dl>
                                    <dl class="dl-horizontal" >
                                        <dt>Tanggal Terima:</dt> <dd><?php echo $tglmsk;?></dd>
                                        <dt>Estimasi Penyelesaian:</dt> <dd>  <?php echo $tglpyl?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <?php echo form_open_multipart('user/tambahPenilaian/'.$jenisProduksi.'/'.$nomorPO,'class="form-horizontal"')?>
                        <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?php echo $dataSPK[0]->idCustomer ?>" class="form-control"/>
                        <input type="hidden" placeholder="ID SPK" name="idSPK" value="<?php echo $dataSPK[0]->idSPK ?>" class="form-control"/>
                        <input type="hidden" placeholder="Nomor PO" name="nomorPO" value="<?php echo $nomorPO ?>" class="form-control"/>
                            <input type="hidden" name="jenisProduksi" value="<?php echo $jenisProduksi ?>" class="form-control"/>
                        <div class="ibox-title">
                            <h5>Penilaian Customer <small>Isi sesuai penilaian customer.</small></h5>
                        </div>
                        <div class="ibox-content">
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2>Penilaian Kualitas Produksi</h2>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-lg-12" style="margin-bottom: 10px;">
                                    <div class="col-sm-3">
                                        <label class="control-label">Pilihan</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="control-label">Kualitas</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="control-label">Keterangan</label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="5" name="kualitas"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/thumb-up-green.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-success">Customer happy, kualitas bagus, sesuai ekspektasi</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="3" name="kualitas"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-warning">Biasa-biasa saja</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="5" name="kualitas"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/thumb-up-red.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-danger">Customer tidak happy, tidak sesuai ekspektasi kualitasnya</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                <div class="hr-line-dashed"></div>
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="3" name="kualitas"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/thumb-up-red.png')?>" height="42" width="42">
                                            <img src="<?php echo base_url('assets/img/thumb-up-green.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-success">Awalnya tidak happy, setelah diperbaiki jadi happy</span>
                                        </div>
                                </div>  
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="">Alasan</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alasan1"></textarea>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="1" name="kualitas"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/thumb-up-red.png')?>" height="42" width="42">
                                            <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-warning">Awalnya tidak happy, setelah diperbaiki jadi biasa-biasa saja</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="">Alasan</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alasan2"></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-content">
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2>Penilaian Kecepatan Produksi</h2>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-lg-12" style="margin-bottom: 10px;">
                                    <div class="col-sm-3">
                                        <label class="control-label">Pilihan</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="control-label">Kecepatan</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="control-label">Keterangan</label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="5" name="kecepatan"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/time-fast.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-success">Waktu siap lebih cepat, setelah diperbaiki jadi happy</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                        <div class="col-sm-3">
                                            <div class="i-checks"><input type="radio" value="1" name="kecepatan"  required> <i></i></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                        </div>
                                        <div class="col-sm-5">
                                            <span class="label label-danger">Waktu siap melewati dari hari yang dijanjikan</span>
                                        </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="hr-line-dashed"></div>
                                    <div class="pull-right">
                                        <button id="submit" class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; <?php echo date('Y')?>
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
