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
                    <h2>Produk</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Produk</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Produk</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Info Produk</a></li>
                            </ul>
                            <div class="tab-content">
                                <?php echo form_open_multipart('user/createProduk')?>
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Kode Produk</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="kodeProduk" name="kodeProduk" placeholder="CLB01" class="form-control" value="<?php echo set_value('kodeProduk'); ?>" required="">
                                                    <small class="text-danger"><?php echo form_error('kodeProduk'); ?></small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Produk</label>
                                                <div class="col-md-10">
                                                    <input type="text" required placeholder="Nama Produk" name="namaProduk" class="form-control" value="<?php echo set_value('namaProduk'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2">
                                                    <div class="i-checks"><label> <input id="Cincin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk"> <i></i> Cincin </label></div>
                                                    <div class="i-checks"><label> <input id="Liontin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk"> <i></i> Liontin </label></div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="i-checks"><label> <input id="Gelang" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk"> <i></i> Gelang </label></div>
                                                    <div class="i-checks"><label> <input id="Anting" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk"> <i></i> Anting </label></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="i-checks"><label> <input id="Cincin Kawin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk"> <i></i> Cincin Kawin </label></div>
                                                    <div class="i-checks"><label> <input id="Lainnya" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Lainnya"){?> checked="" <?php } ?> value="Lainnya" name="jenisProduk"> <i></i> Lainnya </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                                                <div class="col-sm-10"><textarea name="deskripsi" value="<?php echo set_value('deskripsi'); ?>" class="form-control" rows="8"><?php echo set_value('deskripsi'); ?></textarea></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Harga Modal</label>
                                                <div class="col-md-10">
                                                    <input type="text" placeholder="Rp" name="hargaModal" class="form-control good" value="<?php echo set_value('hargaModal'); ?>" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Harga Jual</label>
                                                <div class="col-md-10">
                                                    <input type="text" placeholder="Rp" name="hargaJual" class="form-control good" value="<?php echo set_value('hargaProduk'); ?>" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                
                                                <label class="col-sm-2 control-label">Satuan</label>
                                                <div class="col-md-4">
                                                    <select name="satuan" required="" class="form-control">
                                                      <option value="Pcs" <?php $a= set_value('satuan'); if($a=="Pcs"){?> selected="" <?php } ?>>Pcs</option>
                                                      <option value="Liter" <?php $a= set_value('satuan'); if($a=="Liter"){?> selected="" <?php } ?>>Liter</option>
                                                      <option value="Gram" <?php $a= set_value('satuan'); if($a=="Gram"){?> selected="" <?php } ?>>Gram</option>
                                                      <option value="Carat" <?php $a= set_value('satuan'); if($a=="Carat"){?> selected="" <?php } ?>>Carat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Stok</label>
                                                <div class="col-md-2">
                                                    <input type="numeric name="stok" class="form-control" value="<?php echo set_value('stok'); ?>" step="any">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Kategori Produk</label>
                                                <div class="col-md-4">
                                                    <select class="form-control"  name="kategori" id="kategoriProduk">
                                                        <option value="Katalog" <?php $a= set_value('kategori'); if($a=="Katalog"){?> selected="" <?php } ?> required>Katalog</option>
                                                        <option value="Tempahan" <?php $a= set_value('kategori'); if($a=="Tempahan"){?> selected="" <?php } ?>>Tempahan</option>
                                                        <option value="Massal" <?php $a= set_value('kategori'); if($a=="Massal"){?> selected="" <?php } ?>>Massal</option>
                                                        <option value="Perak" <?php $a= set_value('kategori'); if($a=="Perak"){?> selected="" <?php } ?>>Perak</option>
                                                        <option value="Trading" <?php $a= set_value('kategori'); if($a=="Trading"){?> selected="" <?php } ?>>Trading</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group" id="kategoriTrading">
                                                <label class="col-sm-2 control-label">Kategori Produk Trading</label>
                                                <div class="col-md-4">
                                                    <select name="kategoriProdukTrading" required="" class="form-control">
                                                      <option value="Kotak perhiasan" <?php $a= set_value('kategoriProdukTrading'); if($a=="Kotak perhiasan"){?> selected="" <?php } ?>>Kotak perhiasan</option>
                                                      <option value="Alat pertukangan" <?php $a= set_value('kategoriProdukTrading'); if($a=="Alat pertukangan"){?> selected="" <?php } ?>>Alat pertukangan</option>
                                                      <option value="Obat - obatan" <?php $a= set_value('kategoriProdukTrading'); if($a=="Obat - obatan"){?> selected="" <?php } ?>>Obat - obatan</option>
                                                      <option value="Zircon" <?php $a= set_value('kategoriProdukTrading'); if($a=="Zircon"){?> selected="" <?php } ?>>Zircon</option>
                                                      <option value="Berlian" <?php $a= set_value('kategoriProdukTrading'); if($a=="Berlian"){?> selected="" <?php } ?>>Berlian</option>
                                                      <option value="Mesin Produksi" <?php $a= set_value('kategoriProdukTrading'); if($a=="Mesin Produksi"){?> selected="" <?php } ?>>Mesin Produksi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status Katalog</label>
                                                <div class="col-sm-2" style="margin-top: 7px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('statusKatalog'); if($a=="Tampil"){?> checked="" <?php } ?> value="Tampil" name="statusKatalog" required> <i></i> Tampil </label></div>
                                                </div>
                                                <div class="col-sm-2" style="margin-top: 7px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('statusKatalog'); if($a=="Tidak Tampil"){?> checked="" <?php } ?> value="Tidak Tampil" name="statusKatalog"> <i></i> Tidak Tampil </label></div>
                                                </div>
                                            </div>
                                             
                                        </fieldset>

                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-stripped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Urutan
                                                    </th>
                                                    <th>
                                                        Image preview
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php for ($i=1; $i <=4 ; $i++) { ?>
                                                <tr>
                                                    <td>
                                                        Gambar <?php echo $i;?>
                                                    </td>
                                                    <td>
                                                        <img style="display:none; max-height: 150px;" id="myImg<?php echo $i;?>" src="#" alt="your image">
                                                    </td>
                                                    <td>    
                                                        <input type="file" id="file<?php echo $i;?>" name="userfile[]">
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="row" style="margin: 10px 0 20px 0;">
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
    
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $('#kategoriTrading').prop('hidden', true);
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
    <?php for ($i=1; $i <=4 ; $i++) { ?>
    <script type="text/javascript">
        $(function () {
            $("#file<?php echo $i;?>").change(function () {
                if (this.files && this.files[0]) {
                    var reader<?php echo $i;?> = new FileReader();
                    reader<?php echo $i;?>.onload = imageIsLoaded<?php echo $i;?>;
                    reader<?php echo $i;?>.readAsDataURL(this.files[0]);
                    document.getElementById('myImg<?php echo $i;?>').style.display = 'block';
                }
            });
        });

        function imageIsLoaded<?php echo $i;?>(e) {
            $('#myImg<?php echo $i;?>').attr('src', e.target.result);
        };

        $('#kategoriProduk').on("click",function() {
            var produkKategori = document.getElementById('kategoriProduk').value;
            console.log(produkKategori);
            if (produkKategori=="Trading") {
                $('#kategoriTrading').prop('hidden', false);
            } else { 
                $('#kategoriTrading').prop('hidden', true);
            }
        });
    </script>
    <?php } ?>

</body>

</html>
