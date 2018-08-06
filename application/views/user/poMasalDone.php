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
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>PO Masal Selesai</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listPOMasal">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">PO Masal Berjalan</h3>
                                <span>Ada kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listPOMasalDone">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">PO Masal Selesai</h3>
                                <span>Tidak ada di kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar PO Masal Selesai</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-info" href="<?php echo base_url();?>user/listInvoiceMassal" style="color:white;">
                                    <i class="fa fa-dedent"><span style="font-family: 'open sans'"><strong> INVOICE</strong></span></i>
                                </a>
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createPurchaseOrder">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PO</strong></span></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th data-hide="phone,tablet">Tanggal Masuk</th>
                                    <th>Nomor PO</th>
                                    <th>Nama Konsumen</th>
                                    <th data-hide="phone,tablet">Jenis Produk</th>
                                    <th data-hide="phone,tablet">Nama Produk</th>
                                    <th class="text-center" data-hide="phone,tablet">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listPO as $hasil) : ?>
                                <tr>
                                    <?php $tglmsk = new DateTime($hasil->tanggalMasuk);
                                    $tglmsk = $tglmsk->format("d M Y"); ?>
                                    <td><?php echo $tglmsk?></td>
                                    <td><?php echo $hasil->nomorPO?></td>
                                    <td><?php echo $hasil->namaCustomer?></td>
                                    <td><?php echo $hasil->jenisProduk?></td>
                                    <td><?php echo $hasil->namaProduk?></td>
                                    
                                    <td class="text-center">
                                        <div class="btn-group">
                                        <?=anchor('user/invoicePOMassal/' . $hasil->nomorPO, 'Lihat', [
                                          'class' => 'btn btn-primary btn-xs',
                                          'role'  => 'button'
                                         ])?>
                                        <?=anchor('user/editPOMassal/' . $hasil->nomorPO, 'Edit', [
                                          'class' => 'btn btn-warning btn-xs',
                                          'role'  => 'button'
                                         ])?>
                                        <?=anchor('user/hapusPOMassal/' . $hasil->nomorPO, 'Hapus', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button'
                                        ])?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; 2018
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
