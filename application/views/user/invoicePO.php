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
    $harga                  = $dataPO[0]->hargaJual;      
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
                                            <li class=""><a href="#tab-2" data-toggle="tab">Detail Estimasi Biaya</a></li>
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
                                                <dt>Harga Pasaran Bahan:</dt> <dd> Rp. <?php echo number_format($hargaBahan,2,".",".");?> </dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Tipe Ikatan:</dt>  <dd> <?php echo $tipeIkatan ?> </dd>
                                                <dt>Metode:</dt> <dd> <?php echo $metode?> </dd>
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Harga Krum Warna:</dt> <dd> Rp. <?php echo number_format($hargaKrumWarna,2,".",".");?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Kuantitas:</dt> <dd><a href="#" class="text-navy"><?php echo $kuantitas?></a></dd>
                                            </dl>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt id="namaBatu">Nama Batu Permata:</dt> <dd id="namaBatu1"> <?php echo $namaBatu?></dd>
                                                <dt id="beratBatu">Berat Batu Permata:</dt> <dd id="beratBatu1"><?php echo $beratBatu?></dd>
                                                <dt id="berlian">Berlian:</dt> <dd id="berlian1">  <?php echo $berlian?></dd>
                                                <dt id="beratBerlian">Berat Berlian:</dt> <dd id="beratBerlian1">  <?php echo $beratBerlian?></dd>
                                                <dt id="batuZirkon">Batu Zirkon:</dt> <dd id="batuZirkon1">  <?php echo $batuZirkon?></dd>
                                                <dt id="jumlahBatuZirkon">Jumlah Batu Zirkon:</dt> <dd id="jumlahBatuZirkon1">  <?php echo $jumlahBatuZirkon?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt id="datangEmas">Datang Emas:</dt> <dd id="datangEmas1">  <?php echo $datangEmas?></dd>
                                                <dt id="kadarDatangEmas">Kadar Datang Emas:</dt> <dd id="kadarDatangEmas1">  <?php echo $kadarDatangEmas?></dd>
                                                <dt id="datangBerlian">Datang Berlian:</dt> <dd id="datangBerlian1">  <?php echo $datangBerlian?></dd>
                                                <dt id="jumlahDatangBerlian">Jumlah Datang Berlian:</dt> <dd id="jumlahDatangBerlian1">  <?php echo $jumlahDatangBerlian?></dd>
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
                                               <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaBatuZirkon*$jumlahBatuZirkon,2,".","."); ?></label>
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

                var a = <?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>;
                if(a==null||a==0){
                    document.getElementById('namaBatu').style.display = 'none';
                    document.getElementById('namaBatu1').style.display = 'none';
                };

                var b = <?php echo $beratBatu?>;
                if(b==null||b==0){
                    document.getElementById('beratBatu').style.display = 'none';
                    document.getElementById('beratBatu1').style.display = 'none';
                };

                var c = <?php if($berlian!=null){echo $berlian;} else echo 0;?>;
                if(c==null||c==0){
                    document.getElementById('berlian').style.display = 'none';
                    document.getElementById('berlian1').style.display = 'none';
                };

                var d = <?php echo $beratBerlian?>;
                if(d==null||d==0){
                    document.getElementById('beratBerlian').style.display = 'none';
                    document.getElementById('beratBerlian1').style.display = 'none';
                };

                var e = <?php if($batuZirkon!=null){echo $batuZirkon;} else echo 0;?>;
                if(e==null||e==0){
                    document.getElementById('batuZirkon').style.display = 'none';
                    document.getElementById('batuZirkon1').style.display = 'none';
                };

                var f = <?php echo $jumlahBatuZirkon?>;
                if(f==null||f==0){
                    document.getElementById('jumlahBatuZirkon').style.display = 'none';
                    document.getElementById('jumlahBatuZirkon1').style.display = 'none';
                };

                var g = <?php echo $datangEmas?>;
                if(g==null||g==0){
                    document.getElementById('datangEmas').style.display = 'none';
                    document.getElementById('datangEmas1').style.display = 'none';
                };

                var h = <?php echo $kadarDatangEmas?>;
                if(h==null||h==0){
                    document.getElementById('kadarDatangEmas').style.display = 'none';
                    document.getElementById('kadarDatangEmas1').style.display = 'none';
                };

                var i = <?php if($datangBerlian!=null){echo $datangBerlian;} else echo 0;?>;
                if(i==null||i==0){
                    document.getElementById('datangBerlian').style.display = 'none';
                    document.getElementById('datangBerlian1').style.display = 'none';
                };

                var j = <?php echo $jumlahDatangBerlian?>;
                if(j==null||j==0){
                    document.getElementById('jumlahDatangBerlian').style.display = 'none';
                    document.getElementById('jumlahDatangBerlian1').style.display = 'none';
                };
            });
        </script>
</body>

</html>
