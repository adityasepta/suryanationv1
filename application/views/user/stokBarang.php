<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Inventory</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- FooTable -->
    <link href="<?php echo base_url();?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">
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
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang Victoriavici.</span>
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
                    <h2>Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Stok Barang</strong>
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
                            <h5>Stok Barang</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createInventory">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH STOK BARANG</strong></span></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Tipe Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th data-hide="phone,tablet">Jenis Pergerakan</th>
                                    <th data-hide="phone,tablet">Jumlah</th>
                                    <!-- <th data-hide="phone,tablet">Harga Beli</th> -->
                                    <th data-hide="phone,tablet">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($stokBarang as $p) : ?>
                                    <tr>
                                        <?php $tglmsk = new DateTime($p->tanggal);
                                        $tglmsk = $tglmsk->format("d M Y h:i:s"); ?>
                                        <td><?php echo $tglmsk?></td>
                                        <td><?php echo $p->tipeBarang?></td>
                                        <td><?php echo $p->kodeProduk?></td>
                                        <td><?php echo $p->namaProduk?></td>
                                        <td><?php echo $p->jenisPergerakanBarang?></td>
                                        <td><?php echo $p->jumlah?></td></td>
                                        <!-- <td>Rp. <?php echo number_format($p->hargaBeli,2,".","."); ?> -->
                                        <td><!-- Button trigger modal -->
                                                        <!-- <a href="<?php echo base_url()?>user/editInventory/<?php echo $p->idStok?>" class="btn btn-xs btn-default">Edit</a> -->
                                                        <a href="<?php echo base_url()?>user/deleteInventory/<?php echo $p->idStok?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus stok barang ini?')">Hapus</a></td>
                                     </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
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
