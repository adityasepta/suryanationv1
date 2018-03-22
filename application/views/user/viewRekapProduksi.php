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
                                        <h2>Rekap Berat</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" id="cluster_info">
                                    <dl class="dl-horizontal">
                                        <dt>Nama Pegawai:</dt> <dd> <?php echo $rekap[0]->nama ?></dd>
                                        <dt>Jabatan:</dt> <dd><a href="#" class="text-navy"> <?php echo $rekap[0]->jabatan ?></a> </dd>
                                    </dl>
                                    <dl class="dl-horizontal" >
                                        <dt>Jenis Produksi:</dt> <dd>  <?php echo $rekap[0]->jenisProduksi?></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Rekap Berat</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Nomor Faktur</th>
                                            <th class="text-center">Berat Awal</th>
                                            <th class="text-center">Berat Akhir</th>
                                            <th class="text-center">Berat Kembali</th>
                                            <th class="text-center">Susut</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $jumlahBeratAwal=0;
                                            $jumlahBerat=0;
                                            $jumlahKembali=0;
                                            $jumlahSusut=0; 
                                            for ($i=0; $i < count($rekap) ; $i++) { 
                                        ?>
                                            <tr>
                                                <td>
                                                   <?php echo $rekap[$i]->nomorFaktur ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $rekap[$i]->beratAwal ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $rekap[$i]->berat ?>
                                                </td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                            </tr>
                                        <?php 
                                                $jumlahBeratAwal+=$rekap[$i]->beratAwal;
                                                $jumlahBerat+=$rekap[$i]->berat;
                                            } 
                                        ?>
                                        
                                        <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                            <td class="text-left" colspan="1"><strong>Total Berat</strong></td>
                                            <td class="text-center" ><strong><?php echo $jumlahBeratAwal; ?> Gram</strong></td>
                                            <td class="text-center" ><strong><?php echo $jumlahBerat; ?> Gram</strong></td>
                                            <td class="text-center" ><strong><?php echo $rekap[0]->beratKembali; ?> Gram</strong></td>
                                            <td class="text-center" ><strong><?php echo $jumlahBeratAwal-($jumlahBerat+$rekap[0]->beratKembali); ?> Gram</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
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
