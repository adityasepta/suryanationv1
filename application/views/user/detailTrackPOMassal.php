<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Adminstrasi</title>

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
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Track Purchase Order</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-9">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content" style="padding: 0;">
                            <div class="row" style="background-color: #2a5268; padding: 15px 2px 2px 5px; color: white;">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <span>Detail tracking untuk nomor PO</span>
                                        <h2><strong><?php echo $dataPO[0]->nomorPO.' - '.$dataPO[0]->namaCustomer ?></strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="background-color: white; padding: 10px 2px 2px 2px;">
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>Nomor PO:</dt> <dd> <?php echo $dataPO[0]->nomorPO ?></dd>
                                        <dt>Nama Konsumen:</dt> <dd> <?php echo $dataPO[0]->namaCustomer ?></dd>
                                        <dt>Nomor Telepon:</dt> <dd> <?php echo $dataPO[0]->nomorTelepon ?></dd>
                                    </dl>
                                    <dl class="dl-horizontal" >
                                        <dt>Jumlah Pohon:</dt> <dd> <?php echo count($subSPK).' Pohon'; ?></dd>
                                    </dl>
                                </div>
                                <div class="col-lg-5" id="cluster_info">
                                    <?php 
                                        $tglmsk     = new DateTime($dataPO[0]->tanggalMasuk);
                                        $tglmsk     = $tglmsk->format("d F Y");
                                        $tglpyl     = new DateTime($dataPO[0]->tanggalEstimasiPenyelesaian);
                                        $tglpyl     = $tglpyl->format("d F Y");
                                    ?>
                                    <dl class="dl-horizontal" >
                                        <dt>Nama Sales Person:</dt> <dd> <?php echo $dataPO[0]->nama ?></dd>
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
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Detail Aktivitas</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Detail Estimasi Biaya</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Pohon Ke-</th>
                                            <th>Aktivitas</th>
                                            <th class="text-right">Status</th>
                                            <th class="text-right">Tanggal Pengerjaan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                               
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
                                <div class="tab-pane" id="tab-2">

                                    

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
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y')?>
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

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
</body>

</html>
