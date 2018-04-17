<?php 
  $idPO=$dataSPK[0]->idPO;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
  if($this->input->post('is_submitted')){
    $idPO                   = set_value('idPO');
    $idSPK                  = set_value('idSPK');
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
    $ukuranJari             = set_value('ukuranJari');
    $upah                   = set_value('upah');
    $krumWarna              = set_value('krumWarna');      
    $model                  = set_value('model');
    $beratAkhir             = set_value('beratAkhir');     
    $panjar                 = set_value('panjar');
    $idProduk               = set_value('idProduk');
    $idCustomer             = set_value('idCustomer');
    $kodeProduk             = set_value('kodeProduk');
    $totalHarga             = set_value('totalHarga');
    $namaProduk             = set_value('namaProduk');
    $kadarDatangEmas        = set_value('kadarDatangEmas');
    $tipeCustomer           = set_value('tipeCustomer');      
    $pekerjaanTambahan      = set_value('pekerjaanTambahan');
    $keteranganTambahan     = set_value('keteranganTambahan');
    $keteranganKrum         = set_value('keteranganKrum');
    $kodeGambar             = set_value('kodeGambar');
  }
  else {
    $idPO                   = $dataSPK[0]->idPO;
    $idSPK                  = $dataSPK[0]->idSPK;
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
    $ukuranJari             = $dataSPK[0]->ukuranJari;
    $upah                   = $dataSPK[0]->upah;
    $krumWarna              = $dataSPK[0]->krumWarna;      
    $model                  = $dataSPK[0]->model;
    $beratAkhir             = $dataSPK[0]->beratAkhir;     
    $panjar                 = $dataSPK[0]->panjar;
    $idProduk               = $dataSPK[0]->idProduk;
    $idCustomer             = $dataSPK[0]->idCustomer;
    $kodeProduk             = $dataSPK[0]->kodeProduk;
    $totalHarga             = $dataSPK[0]->totalHarga;
    $namaProduk             = $dataSPK[0]->namaProduk;
    $kadarDatangEmas        = $dataSPK[0]->kadarDatangEmas;
    $tipeCustomer           = $dataSPK[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataSPK[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataSPK[0]->keteranganTambahan;
    $keteranganKrum         = $dataSPK[0]->keteranganKrum;
    $kodeGambar             = $dataSPK[0]->kodeGambar;
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
            <!-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang.</span>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul> -->

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Buat SPK</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Surat Perintah Kerja</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Surat Perintah Kerja</strong>
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
                            <h5>Detil SPK</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="<?php echo base_url()?>user/printRFQMassal/<?php echo $nomorPO?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print RFQ</a>
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
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Detail Produk</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Kode Produk:</dt>  <dd><a href="#" class="text-navy"> <?php echo $kodeProduk ?> </a></dd>
                                                <dt>Jenis Produk:</dt> <dd> <?php echo $jenisProduk ?></dd>
                                                <dt>Bahan:</dt> <dd> <?php echo $bahan ?> </dd>
                                                <dt>Kadar Bahan:</dt> <dd> <?php echo $kadarBahan?> </dd>
                                                <dt>Harga Pasaran Bahan:</dt> <dd> <?php echo $hargaBahan?> </dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Berat Yang Diinginkan:</dt> <dd><a href="#" class="text-navy"><?php echo $beratAkhir?></a></dd>
                                                <dt>Datang Emas:</dt> <dd>  <?php echo $datangEmas?></dd>
                                                <dt>Kadar Datang Emas:</dt> <dd>  <?php echo $kadarDatangEmas?></dd>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt id="pekerjaanTambahan">Pekerjaan Tambahan:</dt> <dd id="pekerjaanTambahan1">  <?php echo $pekerjaanTambahan?></dd>
                                                <dt id="keteranganTambahan">Keterangan Tambahan:</dt> <dd id="keteranganTambahan1">  <?php echo $keteranganTambahan?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt><a href="#" class="text-navy">Produk Yang dibuat :</a></dt><dd></dd>
                                                <?php for($a=0; $a < count($produkPO); $a++) { ?>
                                                    <dt><?php echo $produkPO[$a]->namaProduk.' '.$produkPO[$a]->kodeProduk; ?></dt> <dd> <?php echo $produkPO[$a]->keterangan?> </dd>
                                                <?php } ?>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                                </div>

                                </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Rencana Penjadwalan <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <!-- <form method="get" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>user/tambahPO"> -->
                            <?php echo form_open_multipart('user/uploadJadwalMassal','class="form-horizontal"')?>
                                <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                <input type="hidden" placeholder="ID Produk" name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                <input type="hidden" placeholder="Kode Produk" name="kodeProduk" value="<?= $kodeProduk ?>" class="form-control">
                                <input type="hidden" placeholder="Kode Produk" name="idSPK" value="<?= $idSPK ?>" class="form-control">
                                
                                <div class="form-group col-lg-12">
                                </div>
                                <div class="form-group" style="margin-bottom: 10px;">
                                    <div class="col-sm-4">
                                        <label class="control-label">Pilih Aktivitas</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="control-label">Tanggal Selesai</label>
                                    </div>
                                </div>
                                <?php 

                                ?>
                                <?php $b=count($aktivitas); for ($i=0; $i < $b ; $i++) { ?> 
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="i-checks"><label><input <?php if ($i<4) {echo "required";} ?> type="checkbox" value="<?php echo $i?>" checked name="nomorAktivitas[]"><i></i>  <?php echo $aktivitas[$i]->namaAktivitas?></label></div>
                                            <input class="form-control" type="hidden" value="<?php echo $aktivitas[$i]->idAktivitas?>" name="idAktivitas[]">   
                                        </div>
                                        <?php 
                                          $tglmsk = new DateTime($tanggalMasuk);
                                          $tglmsk1 = $tglmsk->format("Y-m-d");
                                          ?>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" value="<?php echo $tglmsk1 ?>" name="endDate[]">
                                        </div>
                                    </div>
                                <?php } ?>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
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
