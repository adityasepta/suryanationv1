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
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
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
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/produk">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <span>Produk</span>
                                <h3 class="font-bold">Tempahan</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/produkMassal">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <span>Produk</span>
                                <h3 class="font-bold">Massal</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/produkTrading">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <span>Produk</span>
                                <h3 class="font-bold">Trading</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/produkPerak">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <span>Produk</span>
                                <h3 class="font-bold">Perak</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Daftar Produk</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createProduk">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PRODUK</strong></span></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="table-responsive">
                            <table class="table datatables dataTables-example">
                                <thead>
                                <tr>

                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th> Harga Jual</th>
                                    
                                    <th>Kategori</th>
                                    <th> Status Katalog</th>
                                    <th class="text-right" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php for ($j=0; $j < count($produk); $j++) { ?>
                                    <td> <?php echo $produk[$j]->kodeProduk?> </td>
                                    <td> <?php echo $produk[$j]->namaProduk?> </td>
                                    <td>
                                        Rp. <?php echo number_format($produk[$j]->hargaJual,2,".","."); ?>
                                    </td>
                                     
                                    <td>
                                        <?php echo $produk[$j]->kategori?>
                                    </td>
                                    <td>
                                        <?php if($produk[$j]->statusKatalog=="Tampil"){ ?>
                                            <span class="label label-primary">Tampil</span>
                                        <?php } else { ?>
                                            <span class="label label-danger">Tidak Tampil</span>
                                        <?php } ?>
                                    </td>
                                    <td class="text-right"><!-- Button trigger modal -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#detail<?php echo $produk[$j]->idProduk?>">Lihat</button>
                                            <a href="<?php echo base_url()?>user/editProduk/<?php echo $produk[$j]->idProduk?>" class="btn btn-xs btn-default">Edit</a>
                                            <a href="<?php echo base_url()?>user/deleteProduk/<?php echo $produk[$j]->idProduk?>" class="btn btn-xs btn-default" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal inmodal fade" id="detail<?php echo $produk[$j]->idProduk ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">Detail Produk</h3><br>
                                                <span >KODE PRODUK : <b class="text-success"><?php echo $produk[$j]->kodeProduk?></b> | NAMA PRODUK : <b class="text-success"><?php echo $produk[$j]->namaProduk?></b> </span><br>
                                                </div>
                                            <div class="modal-body">

                                                <div class="tabs-container">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$produk[$j]->gambar1)?>" class="img img-responsive pull-right" style="max-height: 125px;">
                                                        </div>
                                                        <div class="col-lg-7" id="cluster_info">
                                                            <dl class="dl-horizontal">
                                                                <dt>Nama Produk:</dt> <dd> <?php echo $produk[$j]->namaProduk ?></dd>
                                                                <dt>Jenis Produk:</dt> <dd><a href="#" class="text-navy"> <?php echo $produk[$j]->jenisProduk ?></a> </dd>
                                                                <dt>Deskripsi:</dt> <dd> <?php echo $produk[$j]->deskripsi ?></dd>
                                                                
                                                            </dl>
                                                            <dl class="dl-horizontal" >
                                                                <dt>Harga Jual:</dt> <dd><strong> Rp. <?php echo  number_format($produk[$j]->hargaJual);?> </strong></dd>
                                                                <dt>Harga Modal:</dt> <dd><strong> Rp. <?php echo  number_format($produk[$j]->hargaModal);?> </strong></dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="8">
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
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 20,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Neraca'},
                    {extend: 'pdf', title: 'Neraca?>'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                     }
                    
                    }
                ]

            });

        });
    </script>
</body>

</html>
