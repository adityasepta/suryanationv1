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
                            <strong>Produk</strong>
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
                            <h5>Daftar Produk</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createProduk">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PRODUK</strong></span></i>
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
                                    <th class="text-center">Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th class="text-center" >Kategori</th>
                                    <th class="text-center" >Harga Produk</th>
                                    <!-- <th data-hide="phone,tablet">Foto</th> -->
                                    <th class="text-center" >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <?php for ($j=0; $j < count($produk); $j++) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $produk[$j]->kodeProduk?></td>
                                                <td><?php echo $produk[$j]->namaProduk?></td>
                                                <td class="text-center" ><?php echo $produk[$j]->jenisProduk?></td>
                                                <td class="text-center" >Rp. <?php echo number_format($produk[$j]->hargaProduk,2,".","."); ?></td>
                                                <td class="text-center"><!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#detail<?php echo $produk[$j]->idKatalog?>">Lihat</button>
                                                    <a href="<?php echo base_url()?>user/editProduk/<?php echo $produk[$j]->idKatalog?>" class="btn btn-xs btn-default">Edit</a>
                                                    <a href="<?php echo base_url()?>user/deleteProduk/<?php echo $produk[$j]->idKatalog?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')">Hapus</a></td>
                                            </tr>
                                        </div>
                                     <?php } ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <?php foreach ($produk as $p) : ?>
                                            <!-- Modal -->
                                            <div class="modal inmodal fade" id="detail<?php echo $p->idKatalog?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title">Detail Produk</h3><br>
                                                        <span >KODE PRODUK : <b class="text-success"><?php echo $p->kodeProduk?></b> | NAMA PRODUK : <b class="text-success"><?php echo $p->namaProduk?></b> | TIPE : <b class="text-success">Custom</b></span><br>
                                                        </div>
                                                    <div class="modal-body">

                                                        <div class="tabs-container">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <img src="<?php echo base_url('uploads/gambarProduk/'.$p->gambarProduk.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 125px;">
                                                                </div>
                                                                <div class="col-lg-7" id="cluster_info">
                                                                    <dl class="dl-horizontal">
                                                                        <dt>Nama Produk:</dt> <dd> <?php echo $p->namaProduk ?></dd>
                                                                        <dt>Jenis Produk:</dt> <dd><a href="#" class="text-navy"> <?php echo $p->jenisProduk ?></a> </dd>
                                                                        <dt>Deskripsi:</dt> <dd> <?php echo $p->deskripsiProduk ?></dd>
                                                                        
                                                                    </dl>
                                                                    <dl class="dl-horizontal" >
                                                                        <dt>Harga:</dt> <dd><strong> Rp. <?php echo  number_format($p->hargaProduk);?> </strong></dd>
                                                                        <dt>Harga Modal:</dt> <dd><strong> Rp. <?php echo  number_format($p->hargaModal);?> </strong></dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
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

        });

    </script>
</body>

</html>
