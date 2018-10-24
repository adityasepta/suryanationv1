<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Katalog Produk</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

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
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
        
        <div class="row">
            <div class="col-lg-8">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?php echo base_url();?>user/catalogue">
                            <div class="widget style1 <?php if($kategori=='All'){ echo 'red-bg';}else{echo 'lazur-bg';}?>">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h4 class="font-bold">Semua</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo base_url();?>user/catalogue/Tempahan">
                            <div class="widget style1 <?php if($kategori=='Tempahan'){ echo 'red-bg';}else{echo 'lazur-bg';}?>">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h4 class="font-bold">Tempahan</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url();?>user/catalogue/Massal">
                            <div class="widget style1 <?php if($kategori=='Massal'){ echo 'red-bg';}else{echo 'lazur-bg';}?>">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h4 class="font-bold">Massal</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url();?>user/catalogue/Trading">
                            <div class="widget style1 <?php if($kategori=='Trading'){ echo 'red-bg';}else{echo 'lazur-bg';}?>">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h4 class="font-bold">Trading</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url();?>user/catalogue/Perak">
                            <div class="widget style1 <?php if($kategori=='Perak'){ echo 'red-bg';}else{echo 'lazur-bg';}?>">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h4 class="font-bold">Perak</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="search-form">
                        <form action="<?php echo base_url();?>user/search?>" method="POST">
                            <div class="input-group">
                                <input type="text" placeholder="Cari Produk" name="searchParam" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php for ($i=0; $i < count($produk) ; $i++) { ?>
                <a href="<?php echo base_url();?>user/detailProduk/<?php echo $produk[$i]->idProduk?>">
                <div class="col-md-4">                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation" style="height: 100%; position:relative; background: url('<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[$i]->gambar1?>')no-repeat; background-size: cover; background-position: center;">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Rp. <?php echo  number_format($produk[$i]->hargaJual);?>
                                </span>
                                <small class="text-muted"><?php echo $produk[$i]->jenisProduk?> &#9679 <strong><?php echo $produk[$i]->kodeProduk?></strong></small>
                                <div style="white-space: nowrap; width: 15em; overflow: hidden; text-overflow: ellipsis; ">
                                    <a href="<?php echo base_url();?>user/detailProduk/<?php echo $produk[$i]->idProduk?>" class="product-name"> <?php echo substr($produk[$i]->namaProduk,0,20)?></a>
                                </div>
                                
                                <div class="small m-t-xs">
                                    Stok <span class="<?php if($produk[$i]->stok<=0){ echo "text-danger";} else { echo "text-navy";} ?>"><?php echo $produk[$i]->stok?> item</span>
                                </div>
                                <div class="m-t text-righ">

                                    <button href="#" class="add_cart btn btn-xs btn-outline btn-primary" data-productid="<?php echo $produk[$i]->idProduk;?>" data-productname="<?php echo $produk[$i]->namaProduk;?>" data-productprice="<?php echo $produk[$i]->hargaJual;?>" data-productqty="8"><i class="fa fa-shopping-cart"></i>  Tambahkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            <?php } ?>
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
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; <?php echo date('Y')?>
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
</body>
</html>
