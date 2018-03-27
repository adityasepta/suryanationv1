<?php
    $idProduk    = $produk[0]->idProduk;
if($this->input->post('is_submitted')){
    $kodeProduk    = $set_value('kodeProduk');
    $namaProduk    = $set_value('namaProduk');
    $jenisProduk   = $set_value('jenisProduk');
    $deskripsiProduk   = $set_value('deskripsiProduk');
    $harga         = $set_value('hargaProduk');
    $hargaModal         = $set_value('hargaModal');

}
else {
    $kodeProduk  = $produk[0]->kodeProduk;
    $namaProduk  = $produk[0]->namaProduk;
    $jenisProduk = $produk[0]->jenisProduk;
    $harga       = $produk[0]->hargaProduk;
    $deskripsiProduk  = $produk[0]->deskripsiProduk;
    $gambarProduk  = $produk[0]->gambarProduk;
    $hargaModal       = $produk[0]->hargaModal;
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
                    <h2>Produk</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Produk</a>
                        </li>
                        <li class="active">
                            <strong>Edit Produk</strong>
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
                            <h5>Edit Produk <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/editProduk/' .$idKatalog)?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-md-10">
                                        <input type="text" id="kodeProduk" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?= $kodeProduk ?>" required="">
                                        <small class="text-danger"><?php echo form_error('kodeProduk'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Produk</label>
                                    <div class="col-md-10">
                                        <input type="text" required placeholder="Nama Produk" name="namaProduk" class="form-control" value="<?= $namaProduk?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="Cincin" type="radio" <?php $a= $jenisProduk; if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk"> <i></i> Cincin </label></div>
                                        <div class="i-checks"><label> <input id="Liontin" type="radio" <?php $a= $jenisProduk; if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk"> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="Gelang" type="radio" <?php $a= $jenisProduk; if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk"> <i></i> Gelang </label></div>
                                        <div class="i-checks"><label> <input id="Anting" type="radio" <?php $a= $jenisProduk; if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk"> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="i-checks"><label> <input id="Cincin Kawin" type="radio" <?php $a= $jenisProduk; if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk"> <i></i> Cincin Kawin </label></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                                    <div class="col-sm-10"><textarea required name="deskripsiProduk" class="form-control" rows="8" value="<?= $deskripsiProduk ?>"><?= $deskripsiProduk ?></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga Modal</label>
                                    <div class="col-md-10">
                                        <input type="text" placeholder="Rp" name="hargaModal" class="form-control good" value="<?= $hargaModal ?>" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga</label>
                                    <div class="col-md-10">
                                        <input type="text" required placeholder="Harga" name="hargaProduk" class="form-control good" value="<?= $harga ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url();?>uploads/gambarProduk/<?php echo $produk[0]->gambarProduk?>-cust.jpg" height="100 px">
                                    </div>
                                    <div class="col-sm-7">
                                        <label>Upload Gambar Baru (.JPG dan Max 2MB)</label>                
                                        <input type="file" name="userfile">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
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

    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

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
        <script>
            $(document).ready(function () {
                $('.i-checks2').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        <script type="text/javascript">
        $('.good').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: 'Rp ', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    </script>
</body>

</html>
