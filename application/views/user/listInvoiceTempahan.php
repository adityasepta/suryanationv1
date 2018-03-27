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
                            <a href="<?php echo base_url();?>user">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Invoice Akhir</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Invoice Akhir</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createInvoiceAkhirPO">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> BUAT INVOICE CUSTOMER</strong></span></i>
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
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">No PO</th>
                                    <th class="text-center">Nama Customer</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listPO as $hasil) : ?>
                                <tr>
                                    <td class="text-center">
                                        <?php 
                                        $tglmsk = new DateTime($hasil->tanggalMasuk);
                                        $tglmsk = $tglmsk->format("Y-m-d");
                                        echo $tglmsk?></td>
                                    <td class="text-center"><?php echo $hasil->noPurchaseOrder?></td>
                                    <td class="text-center"><?php echo $hasil->namaCustomer?></td>
                                    <td class="text-center"><?php echo $hasil->namaProduk?></td>
                                    <td class="text-center"><?php if ($hasil->tipeInvoice) { echo 'Sudah ada invoice';} else {echo 'Belum ada invoice';}?></td>
                                    
                                    <td class="text-center">
                                        <?php if ($hasil->tipeInvoice) {?>
                                        <a href="<?php echo base_url('user/printInvoiceTempahan/' . $hasil->noPurchaseOrder.'/'.$hasil->tipeInvoice) ?>" class="btn btn-xs btn-primary" >Print Invoice</a>
                                        <?php } else { ?>
                                        <?php } ?>
                                       <!--  <a href="<?php echo base_url('user/editSPK/' . $hasil->nomorFaktur) ?>" class="btn btn-xs btn-warning" >Edit</a> -->
<!-- 
                                        
                                        <?=anchor('user/hapusSPKService/' . $hasil->noPurchaseOrder, 'Hapus', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button',
                                          'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])?> -->
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="10">
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
