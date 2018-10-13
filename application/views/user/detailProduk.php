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
                <div class="col-lg-8">

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
                                    <small>Kode Produk <span class="text-navy"><?php echo $produk[0]->kodeProduk?></span> | Stok Tersisa <span class="<?php if($produk[0]->stok==0){ echo 'text-danger'; } else { echo 'text-navy';}?>"><?php echo $produk[0]->stok ?> Item </span></small>
                                    <hr>
                                    <h4>Product description</h4>

                                    <div class="small text-muted">
                                        <?php echo $produk[0]->deskripsi?>
                                        <br>
                                    </div>
                                    <dl class="dl-horizontal m-t-md small">
                                        Jenis produk <strong> <?php echo $produk[0]->jenisProduk?></strong>
                                        <?php if($produk[0]->kategoriProdukTrading!=NULL) { ?>
                                        Kategori <strong> <?php echo $produk[0]->kategoriProdukTrading?></strong>
                                        <?php } ?>
                                    </dl>
                                    <hr>
                                    <div>
                                        <h1 class="product-main-price text-left">Rp. <?php echo  number_format($produk[0]->hargaJual);?> <small class="text-muted">Harga bisa berubah kapan saja</small> </h1>
                                    </div>
                                    <hr>
                                    <button class="add_cart btn btn-primary" data-productid="<?php echo $produk[0]->idProduk;?>" data-productname="<?php echo $produk[0]->namaProduk;?>" data-productprice="<?php echo $produk[0]->hargaJual;?>" data-productqty="8">Tambahkan ke Keranjang</button>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-shopping-cart"></i>  Keranjang</h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/tambahPOTrading')?>
                            <div class="row" style="padding: 5px;">
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <datalist id="listofcustomer"><?php for ($i = 0; $i < count($listCustomer); $i++) { ?><option value="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php } ?>
                                    </datalist>
                                    <input type="text" id="cust" list="listofcustomer" class="form-control" required="">
                                    <input type="hidden" id="idCust" name="idCustomer" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Items</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail_cart">
                     
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="padding: 5px;">
                                <button class="btn btn-sm btn-success btn-block" type="submit"><strong>Checkout</strong></button>
                            </div>
                            <?php echo form_close()?>
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

    <script type="text/javascript">
        $(document).ready(function(){
            $('.add_cart').click(function(){
                var product_id    = $(this).data("productid");
                var product_name  = $(this).data("productname");
                var product_price = $(this).data("productprice");
                var quantity      = 1;
                $.ajax({
                    url : "<?php echo site_url('user/add_to_cart');?>",
                    method : "POST",
                    data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                    success: function(data){
                        $('#detail_cart').html(data);
                    }
                });
            });
     
             
            $('#detail_cart').load("<?php echo site_url('user/load_cart');?>");
     
             
            $(document).on('click','.romove_cart',function(){
                var row_id=$(this).attr("id"); 
                $.ajax({
                    url : "<?php echo site_url('user/delete_cart');?>",
                    method : "POST",
                    data : {row_id : row_id},
                    success :function(data){
                        $('#detail_cart').html(data);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $('#cust').on('change', function() { 
            var data = {}; 
            $("#listofcustomer option").each(function(i,el) {  
               data[$(el).data("value")] = $(el).val();
            });

            var vale = $('#cust').val();
            document.getElementById('idCust').value=$('#listofcustomer [value="' + vale + '"]').data('value');
            
        });
        
    </script>
    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>

</body>

</html>
