<?php 
    $idPO                   = $dataPO[0]->idPO;
    $namaCustomer           = $dataPO[0]->namaCustomer;
    $nomorTelepon           = $dataPO[0]->nomorTelepon;
    $idSalesPerson          = $dataPO[0]->idSalesPerson;
    $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
    $tanggalEstimasiPenyelesaian = $dataPO[0]->tanggalEstimasiPenyelesaian;
    $nomorPO                = $dataPO[0]->nomorPO;
    $jenisProduk            = $dataPO[0]->jenisProduk;
    $bahan                  = $dataPO[0]->bahan;    
    $hargaBahan             = $dataPO[0]->hargaBahan;      
    $namaBatu               = $dataPO[0]->namaBatu;
    $beratBatu              = $dataPO[0]->beratBatu;
    $ukuranJari             = $dataPO[0]->ukuranJari;
    $upah                   = $dataPO[0]->upah;
    $krumWarna              = $dataPO[0]->krumWarna;      
    $model                  = $dataPO[0]->model;    
    $panjar                 = $dataPO[0]->panjar;
    $idProduk               = $dataPO[0]->idProduk;
    $idCustomer             = $dataPO[0]->idCustomer;
    $kodeProduk             = $dataPO[0]->kodeProduk;
    $totalHarga             = $dataPO[0]->totalHarga;
    $namaProduk             = $dataPO[0]->namaProduk;
    $tipeCustomer           = $dataPO[0]->tipeCustomer;      
    $hargaKrum        = $dataPO[0]->hargaKrum;
    $keteranganKrum         = $dataPO[0]->keteranganKrum;
    $kodeGambar             = $dataPO[0]->kodeGambar;

    $keadaanBatuTengah      = $dataPO[0]->keadaanBatuTengah;
    $batuTerhadapKruman     = $dataPO[0]->batuTerhadapKruman;
    $batuTerhadapPukulan    = $dataPO[0]->batuTerhadapPukulan;   
    $beratAkhir             = $dataPO[0]->beratAkhir;
    $hargaPerak             = $dataPO[0]->hargaPerak;
    $keteranganSlep         = $dataPO[0]->keteranganSlep;
    $hargaSlep              = $dataPO[0]->hargaSlep;   
    $keteranganRombak       = $dataPO[0]->keteranganRombak;
    $upahRombak             = $dataPO[0]->upahRombak;
    $resize                 = $dataPO[0]->resize;
    $hargaResize            = $dataPO[0]->hargaResize;
    $tglmsk     = new DateTime($tanggalMasuk);
    $tglmsk     = $tglmsk->format("d F Y");
    $tglpyl     = new DateTime($tanggalEstimasiPenyelesaian);
    $tglpyl     = $tglpyl->format("d F Y");
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
            <div class="col-lg-8">
                <h2>RFQ</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>user/administration">Beranda</a>
                    </li>
                    <li class="active">
                        <strong><a href="<?php echo base_url();?>user/Invoice">Request For Quotation</a></strong>
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-9">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="<?php echo base_url()?>user/printInvoicePerak/<?php echo $nomorPO?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print RFQ</a>
                                        <h2><?php echo $namaProduk ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 125px;">
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal">
                                        <dt>Nama Konsumen:</dt> <dd> <?php echo $namaCustomer ?></dd>
                                        <dt>Nomor Telepon:</dt> <dd> <?php echo $nomorTelepon ?></dd>
                                        <dt>Nomor PO:</dt> <dd><a href="#" class="text-navy"> <?php echo $nomorPO ?></a> </dd>
                                        <dt>Sales Person:</dt> <dd> <?php echo $dataPO[0]->nama?> </dd>
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
                                            <li class=""><a href="#tab-2" data-toggle="tab">Detail Biaya</a></li>
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
                                                <dt>Berat Perak:</dt> <dd><?php echo $tipeCustomer?></dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt>Nama Batu Permata:</dt> <dd>  <?php echo $namaBatu?></dd>
                                                <dt>Berat Batu Permata:</dt> <dd><?php echo $beratBatu?></dd>
                                                <dt>Keadaan Batu Tengah:</dt> <dd>  <?php echo $keadaanBatuTengah?></dd>
                                                <dt>Batu Terhadap Kruman:</dt> <dd><?php echo $batuTerhadapKruman?></dd>
                                                <dt>Batu Terhadap Pukulan:</dt> <dd><?php echo $batuTerhadapPukulan?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Resize:</dt> <dd><?php echo $tipeCustomer?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Keterangan Slep:</dt> <dd><?php echo $tipeCustomer?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Keperluan</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-right">Biaya</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                               Harga Perak <br>
                                               <small>Saat ini Rp <strong><?php echo number_format($hargaBahan,0,".",".") ?></strong></small>
                                            </td>
                                            <td class="text-center">
                                                <label> <?php echo $beratAkhir ?> Gr</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaPerak,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Harga Krum Warna
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaKrum,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Harga Slep
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaSlep,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Upah Rombak
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($upahRombak,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Harga Resize
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaResize,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Upah Pasang Batu
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($upah,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                            <td class="text-left" colspan="2"><strong>Estimasi Total Biaya</strong></td>
                                            <td class="text-right" ><strong>Rp. <?php echo number_format($totalHarga,2,".","."); ?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div>
                                    <a href="<?php echo base_url()?>user/listPOPerak"><button type="button" class="btn btn-primary"> < Kembali</button></a>
                                </div>
                                </div>

                                </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wrapper wrapper-content project-manager text-right">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>Detail Pembayaran</h3><br>
                            <h4>Total Harga</h4>
                            <h2>Rp. <?php echo number_format($totalHarga,0,".","."); ?></h2>
                            <h4>Panjar</h4>
                            <h2>Rp. <?php echo number_format($panjar,0,".","."); ?></h2>
                            <br>
                            <h4>Sisa <i class="fa fa-circle text-warning"></i></h4>
                            <p class="small">Sisa biaya yang harus dibayarkan dari total harga dikurangi panjar</p>
                            <h2>Rp. <?php echo number_format($sisa=$totalHarga-$panjar,0,".","."); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y');?>
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
