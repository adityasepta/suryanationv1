<?php
    $idMaterial    = $material->idMaterial;
if($this->input->post('is_submitted')){
    $kodeProduk    = set_value('kodeMaterial');
    $namaProduk    = set_value('namaMaterial');
    $satuan        = set_value('satuan');
    $stokMaterial    = set_value('stokMaterial');
    $safetyStock    = set_value('safetyStock');
    $kadar      = set_value('kadar');
    $clarity    = set_value('clarity');
    $color      = set_value('color');
    $kategori      = set_value('kategori');
}
else {
    $kodeMaterial  = $material->kodeMaterial;
    $namaMaterial  = $material->namaMaterial;
    $satuan        = $material->satuan;
    $stokMaterial  = $material->stokMaterial;
    $safetyStock  = $material->safetyStock;
    $kadar      = $material->kadar;
    $clarity    = $material->clarity;
    $color      = $material->color;
    $kategori      = $material->kategori;
}
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
                            <a href="<?php echo base_url();?>user/material">Material Dasar</a>
                        </li>
                        <li class="active">
                            <strong>Edit Material Dasar</strong>
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
                            <h5>Edit Material Dasar <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/editMaterial/'.$idMaterial)?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="col-md-2">
                                            <label>Kode Material</label>
                                            <input type="text" readonly name= "kodeMaterial" placeholder="Kode Material" class="form-control" value="<?php echo $kodeMaterial ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" id="kategori">
                                                <option <?php $a=$kategori; if($a=="Emas"){?> selected <?php } ?> value="Emas">Emas</option>
                                                <option <?php $a=$kategori; if($a=="Berlian"){?> selected <?php } ?> value="Berlian">Berlian</option>
                                                <option <?php $a=$kategori; if($a=="Zirkon"){?> selected <?php } ?> value="Zirkon">Zirkon</option>
                                                <option <?php $a=$kategori; if($a=="Non Emas"){?> selected <?php } ?> value="Non Emas">Non Emas</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Nama Material</label>
                                            <input type="text" name= "namaMaterial"  placeholder="Nama Material" class="form-control" value="<?php echo $namaMaterial ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="emas" style="display: none; padding: 10px 0 10px 0; background-color: #f7f7f7;">
                                    <div class="col-sm-12">
                                        <div class="col-md-8">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kadar</label>
                                            <input type="number" step="any" name= "kadar" placeholder="%" class="form-control" value="<?php echo $kadar ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="berlian" style="display: none; padding: 10px 0 10px 0; background-color: #f7f7f7;">
                                    <div class="col-sm-12">
                                        <div class="col-md-4">
                                            <label>Carat</label>
                                            <input type="number" step="any" name= "carat" placeholder="cr" class="form-control" value="<?php echo $kadar ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Clarity</label>
                                            <input type="text" name= "clarity" placeholder="Clarity" class="form-control" value="<?php echo $clarity ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Color</label>
                                            <input type="text" name= "color" placeholder="Color" class="form-control" value="<?php echo $color ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="col-md-4">
                                            <label>Stok Terkini</label>
                                            <input type="number" readonly name= "stokMaterial" placeholder="Jumlah" class="form-control" value="<?php echo $stokMaterial ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Safety Stok</label>
                                            <input type="number" name= "safetyStock"  placeholder="Jumlah" class="form-control" value="<?php echo $safetyStock ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Satuan</label>
                                            <input type="text" name= "satuan" placeholder="Satuan" class="form-control" value="<?php echo $satuan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/material"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
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
        $(document).ready(function(){
            if ($('#kategori').val() == "Emas"){
                document.getElementById('emas').style.display = 'block';
                document.getElementById('berlian').style.display = 'none';
            } else if ($('#kategori').val() == "Berlian"){
                document.getElementById('emas').style.display = 'none';
                document.getElementById('berlian').style.display = 'block';
            } else {
                document.getElementById('emas').style.display = 'none';
                document.getElementById('berlian').style.display = 'none';
            }
        });
        $('#kategori').change(function(){
            if ($(this).val() == "Emas"){
                document.getElementById('emas').style.display = 'block';
                document.getElementById('berlian').style.display = 'none';
            } else if ($(this).val() == "Berlian"){
                document.getElementById('emas').style.display = 'none';
                document.getElementById('berlian').style.display = 'block';
            } else {
                document.getElementById('emas').style.display = 'none';
                document.getElementById('berlian').style.display = 'none';
            }
            
        });
    </script>
</body>

</html>
