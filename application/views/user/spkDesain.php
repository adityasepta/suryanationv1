<?php 
  $idPO=$dataSPK[0]->idPO;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
  if($this->input->post('is_submitted')){
        $namaCustomer           = set_value('namaCustomer');
        $nomorTelepon           = set_value('nomorTelepon');
        $idSalesPerson        = set_value('idSalesPerson');
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
        $totalHarga             = set_value('totalHarga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $kodeProduk             = set_value('kodeProduk');
  }
  else {
        $namaCustomer           = $dataSPK[0]->namaCustomer;
        $nomorTelepon           = $dataSPK[0]->nomorTelepon;
        $idSalesPerson        = $dataSPK[0]->idSalesPerson;
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
        $totalHarga             = $dataSPK[0]->totalHarga;      
        $panjar                 = $dataSPK[0]->panjar;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $nama             = $dataSPK[0]->nama;
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
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nomor PO</label>
                                                <h5 class="text-muted"><?php echo $nomorPO?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nama Konsumen</label>
                                                <h5 class="text-muted"><?php echo $namaCustomer?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <h5 class="text-muted"><?php echo $tglmsk;?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nomor Faktur</label>
                                                <h5 class="text-muted"><?php echo $nomorFaktur?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nomor Telepon</label>
                                                <h5 class="text-muted"><?php echo $nomorTelepon?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <h5 class="text-muted"><?php echo $tglpyl?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Sales Person</label>
                                                <h5 class="text-muted"><?php echo $nama?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2">Jenis Produk</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $jenisProduk?></label>
                                    </div>
                                    <label class="col-sm-2">Bahan</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $bahan?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Kadar</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $kadarBahan . "%"?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Pasaran</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted pull-left">: Rp. <?php echo number_format($hargaBahan,2,".","."); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2">Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $datangEmas?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: Rp. <?php echo number_format($hargaDatangEmas,2,".","."); ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Nama Batu</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $namaBatu?></label>
                                    </div>
                                    <label class="col-sm-2">Berat Batu</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $beratBatu?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Ukuran Jari</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: <?php echo $ukuranJari?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Swarowskri / Diamond</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: <?php echo $berlian?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Upah</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: Rp. <?php echo number_format($upah,2,".","."); ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Tipe Ikatan</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $tipeIkatan?></label>
                                    </div>
                                    <label class="col-sm-2">Metode</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $metode?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Krum Warna</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $krumWarna?></label>
                                    </div>
                                    <label class="col-sm-2">Model</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $model?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Kuantitas</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: <?php echo $kuantitas?></label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo base_url();?>uploads/gambarProduk/<?php echo $dataSPK[0]->kodeGambar?>-cust.jpg" height="100 px">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"> 
                                    <label class="col-sm-2">Total Estimasti Harga</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: Rp. <?php echo number_format($totalHarga,2,".","."); ?></label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2">Panjar</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: Rp. <?php echo number_format($panjar,2,".","."); ?></label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-3">Batu Terhadap Kruman</label>
                                    <div class="col-sm-3">
                                        <label class="text-muted">: <?php echo $dataSPK[0]->batuTerhadapKruman?></label>
                                    </div>
                                    <label class="col-sm-3">Batu Terhadap Pukulan</label>
                                    <div class="col-sm-3">
                                        <label class="text-muted">: <?php echo $dataSPK[0]->batuTerhadapPukulan?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3">Batu Terhadap Goresan</label>
                                    <div class="col-sm-3">
                                        <label class="text-muted">: <?php echo $dataSPK[0]->batuTerhadapGoresan?></label>
                                    </div>
                                    <label class="col-sm-3">Keadaan Batu Tengah</label>
                                    <div class="col-sm-3">
                                        <label class="text-muted">: <?php echo $dataSPK[0]->keadaanBatuTengah?></label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tambah Desain <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
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
