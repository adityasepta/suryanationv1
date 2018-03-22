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
    $kadarBahan             = $dataPO[0]->kadarBahan;
    $hargaBahan             = $dataPO[0]->hargaBahan;      
    $datangEmas             = $dataPO[0]->datangEmas;
    $hargaDatangEmas        = $dataPO[0]->hargaDatangEmas;      
    $namaBatu               = $dataPO[0]->namaBatu;
    $beratBatu              = $dataPO[0]->beratBatu;
    $ukuranJari             = $dataPO[0]->ukuranJari;
    $berlian                = $dataPO[0]->berlian;
    $upah                   = $dataPO[0]->upah;
    $tipeIkatan             = $dataPO[0]->tipeIkatan;
    $metode                 = $dataPO[0]->metode;
    $krumWarna              = $dataPO[0]->krumWarna;      
    $model                  = $dataPO[0]->model;
    $kuantitas              = $dataPO[0]->kuantitas;
    $harga                  = $dataPO[0]->harga;      
    $panjar                 = $dataPO[0]->panjar;
    $idProduk               = $dataPO[0]->idProduk;
    $idCustomer             = $dataPO[0]->idCustomer;
    $kodeProduk             = $dataPO[0]->kodeProduk;
    $totalHarga             = $dataPO[0]->totalHarga;
    $namaProduk             = $dataPO[0]->namaProduk;
    $kadarDatangEmas        = $dataPO[0]->kadarDatangEmas;
    $datangBerlian          = $dataPO[0]->datangBerlian;      
    $jumlahDatangBerlian    = $dataPO[0]->jumlahDatangBerlian;
    $upahPasangBerlian      = $dataPO[0]->upahPasangBerlian;
    $tipeCustomer           = $dataPO[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataPO[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataPO[0]->keteranganTambahan;
    $biayaTambahan          = $dataPO[0]->biayaTambahan;
    $beratBerlian           = $dataPO[0]->beratBerlian;
    $hargaBerlian           = $dataPO[0]->hargaBerlian;
    $batuZirkon             = $dataPO[0]->batuZirkon;      
    $jumlahBatuZirkon       = $dataPO[0]->jumlahBatuZirkon;
    $hargaBatuZirkon        = $dataPO[0]->hargaBatuZirkon;
    $hargaKrumWarna         = $dataPO[0]->hargaKrumWarna;
    $keteranganKrum         = $dataPO[0]->keteranganKrum;
    $budget                 = $dataPO[0]->budget;
    $kodeGambar             = $dataPO[0]->kodeGambar;
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
                                        <a href="<?php echo base_url()?>user/printInvoice/<?php echo $nomorPO?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print RFQ</a>
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
                                                <dt>Kadar Bahan:</dt> <dd> <?php echo $kadarBahan?> </dd>
                                                <dt>Harga Pasaran Bahan:</dt> <dd> <?php echo $hargaBahan?> </dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt>Nama Batu Permata:</dt> <dd>  <?php echo $namaBatu?></dd>
                                                <dt>Berat Batu Permata:</dt> <dd><?php echo $beratBatu?></dd>
                                                <dt>Berlian:</dt> <dd>  <?php echo $berlian?></dd>
                                                <dt>Berat Berlian:</dt> <dd>  <?php echo $beratBerlian?></dd>
                                                <dt>Batu Zirkon:</dt> <dd>  <?php echo $batuZirkon?></dd>
                                                <dt>Jumlah Batu Zirkon:</dt> <dd>  <?php echo $jumlahBatuZirkon?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Tipe Ikatan:</dt>  <dd> <?php echo $tipeIkatan ?> </dd>
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Harga Krum Warna:</dt> <dd> <?php echo $hargaKrumWarna?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Kuantitas:</dt> <dd><a href="#" class="text-navy"><?php echo $kuantitas?></a></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt>Metode:</dt> <dd> <?php echo $metode?> </dd>
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                                <dt>Datang Emas:</dt> <dd>  <?php echo $datangEmas?></dd>
                                                <dt>Kadar Datang Emas:</dt> <dd>  <?php echo $kadarDatangEmas?></dd>
                                                <dt>Datang Berlian:</dt> <dd>  <?php echo $datangBerlian?></dd>
                                                <dt>Jumlah Datang Berlian:</dt> <dd>  <?php echo $jumlahDatangBerlian?></dd>
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
                                               Harga Pasaran Emas
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $kuantitas ?> Pcs</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaBahan,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Harga Berlian
                                            </td>
                                            <td class="text-center">
                                                <label> <?php echo $beratBerlian ?> Gram</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaBerlian,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Harga Batu Zirkon
                                            </td>
                                            <td class="text-center">
                                                <label> <?php echo $jumlahBatuZirkon ?> Pcs</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaBatuZirkon,2,".","."); ?></label>
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
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaKrumWarna,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Upah Pasang Berlian
                                            </td>
                                            <td class="text-center">
                                                <label> <?php echo $datangBerlian ?> Pcs</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($upahPasangBerlian,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Biaya Pekerjaan Tambahan
                                            </td>
                                            <td class="text-center">
                                                <label>-</label>
                                            </td>
                                            <td>
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($biayaTambahan,2,".","."); ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Upah
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
                                            <td class="text-right" ><strong>Rp. <?php echo number_format($total=$hargaBahan+$hargaBerlian+($hargaBatuZirkon*$jumlahBatuZirkon)+$hargaKrumWarna+$upahPasangBerlian+$biayaTambahan+$upah,2,".","."); ?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div>
                                    <a href="<?php echo base_url()?>user/purchaseOrder"><button type="button" class="btn btn-primary"> < Kembali</button></a>
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
                            <h4>Budget <i class="fa fa-circle text-warning"></i></h4>
                            <p class="small">Biaya maksimal yang dikeluarkan oleh customer untuk order ini</p>
                            <h2>Rp. <?php echo number_format($budget,0,".","."); ?></h2>
                            <br>
                            <h4>Panjar</h4>
                            <h2>Rp. <?php echo number_format($panjar,0,".","."); ?></h2>
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
