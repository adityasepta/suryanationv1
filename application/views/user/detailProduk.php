<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/slick/slick-theme.css" rel="stylesheet">

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
                    <h2>Produk</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Produk</a>
                        </li>
                        <li class="active">
                            <strong>Detail Produk</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">

                                        <div>
                                            <div class="image-imitation" style="height: 100%; position:relative; background: url('<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[0]->gambar1?>')no-repeat; background-size: cover; background-position: center;">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="height: 100%; position:relative; background: url('<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[0]->gambar2?>')no-repeat; background-size: cover; background-position: center;">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="height: 100%; position:relative; background: url('<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[0]->gambar3?>')no-repeat; background-size: cover; background-position: center;">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-imitation" style="height: 100%; position:relative; background: url('<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[0]->gambar4?>')no-repeat; background-size: cover; background-position: center;">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        <?php echo $produk[0]->namaProduk?>
                                    </h2>
                                    <small>Kode Produk <?php echo $produk[0]->kodeProduk?>.</small>
                                    <hr>
                                    <div style="margin-left: -450px;">
                                        <h1 class="product-main-price">Rp. <?php echo  number_format($produk[0]->hargaJual);?> <small class="text-muted">Exclude Tax</small> </h1>
                                    </div>
                                    <hr>
                                    <h4>Product description</h4>

                                    <div class="small text-muted">
                                        <?php echo $produk[0]->deskripsi?>
                                        <br>
                                        <dt>Jenis Produk</dt>
                                        <dd><?php echo $produk[0]->jenisProduk?></dd>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="ibox-footer">
                            <span class="pull-right">
                                Terakhir diperbaharui- <i class="fa fa-clock-o"></i> <?php echo $produk[0]->lastModified?>
                            </span>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="footer">
             <strong>Copyright</strong> Surya Sumatra &copy; <?php echo date('Y')?>
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
    <script src="<?php echo base_url();?>assets/js/inputmask.bundle.js"></script>
    
    <!-- slick carousel-->
    <script src="<?php echo base_url();?>assets/js/plugins/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>

</body>

</html>
