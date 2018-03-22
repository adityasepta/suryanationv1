<?php
    $idProduk    = $produk->idProduk;
/*if($this->input->post('is_submitted')){
    $kodeProduk    = $set_value('kodeMaterial');
    $namaProduk    = $set_value('namaMaterial');
    $satuan        = $set_value('satuan');
    $stokMaterial    = $set_value('stokMaterial');
}
else {
    $kodeMaterial  = $material->kodeMaterial;
    $namaMaterial  = $material->namaMaterial;
    $satuan        = $material->satuan;
    $stokMaterial  = $material->stokMaterial;
}*/
?>
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
            <!-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang.</span>
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
                        <li>
                            <a href="<?php echo base_url();?>user/produk">Produk</a>
                        </li>
                        <li class="active">
                            <strong>Tambah BOM Produk</strong>
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
                            <h5>Buat BOM Produk <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createBOM/' .$produk->idProduk)?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Produk</label>
                                                <input type="text" required placeholder="Nama Produk" name="namaProduk" class="form-control" value="<?php echo $produk->namaProduk?>" readonly> 
                                                <input type="hidden" name="kodeProduk" value="<?php echo $produk->idProduk?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Material</label>
                                                <select class="form-control" name="kodeMaterial[]">
                                                <?php
                                                foreach($materials as $m)
                                                {
                                                    echo "<option value='".$m->idMaterial."'";
                                                    echo ">".$m->namaMaterial."</option>";

                                                }

                                                ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Jumlah Kebutuhan</label>
                                                <input type="number" name= "jumlah[]"  placeholder="Jumlah" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="multiple_choice" style="margin-left: 0;">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="input_fields_wrap" >
                                                                <button class="btn btn-success add_field_button" style="margin-bottom: 5px;">Tambah Material</button>
                                                                
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/produk"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
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
        <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            <?php $jawab=0; ?>
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    <?php $jawab++;?>
                    $(wrapper).append('<div class="form-group"><div class="col-md-6 "><label>Nama Material</label><select class="form-control m-b" name="kodeMaterial[]"><?php for ($i = count($material); $i > 0; $i--) {echo '<option value='.$material2[$i].'>'.$material[$i].'</option>';}?></select></div><div class="col-md-3"><label>Jumlah Kebutuhan</label><input type="number" name= "jumlah[]" placeholder="Jumlah" class="form-control" required></div><br><button class="btn remove_field" style="margin-bottom: 5px;"">Hapus</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        }); 
    </script>
</body>

</html>
