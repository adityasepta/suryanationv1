<?php
    $idStok    = $stokBarang->idStok;
if($this->input->post('is_submitted')){
    $tipeBarang   = $set_value('tipeBarang');
    $kodeBarang   = $set_value('kodeBarang');
    $jumlah  = $set_value('jumlah');
    $jenisPergerakanBarang = $set_value('jenisPergerakanBarang');
    $hargaBeli    = $set_value('hargaBeli');
}
else {
    $tipeBarang   = $stokBarang->tipeBarang;
    $kodeBarang   = $stokBarang->kodeBarang;
    $jumlah  = $stokBarang->jumlah;
    $jenisPergerakanBarang = $stokBarang->jenisPergerakanBarang;
    $hargaBeli    = $stokBarang->hargaBeli;
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
                    <h2>Buat PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/stokBarang">Pergerakan Barang</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Stok Barang</strong>
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
                            <h5>Isi Stok Barang <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/editInventory/'.$idStok)?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tipe Barang</label>
                                                <select disabled class="form-control" name="tipeBarang">
                                                    <option value="Produk Jadi" <?php if ($tipeBarang=='Produk Jadi') echo "selected";?>>Produk Jadi</option>
                                                    <option value="Material Dasar" <?php if ($tipeBarang=='Material Dasar') echo "selected";?>>Material Dasar</option>
                                                </select>
                                                <input type="hidden" name="tipeBarang" value="<?= $tipeBarang?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Barang</label>
                                                <select disabled class="form-control" name="kodeBarang">
                                                <?php
                                                foreach($produk as $p)
                                                {
                                                    echo "<option value='".$p->kodeProduk."'";
                                                    if($p->kodeProduk==$kodeBarang) echo "selected";
                                                    echo ">".$p->namaProduk."</option>";

                                                }

                                                ?>
                                                </select>
                                                <input type="hidden" name="kodeBarang" value="<?= $kodeBarang?>">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jumlah</label> 
                                                <input type="number" name="jumlah" placeholder="Jumlah Barang Masuk" class="form-control" value="<?= $jumlah?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Jenis Pergerakan Barang</label>
                                                <select class="form-control" name="jenisPergerakanBarang">
                                                    <option value="IN" <?php if ($jenisPergerakanBarang=='IN') echo "selected";?>>BARANG MASUK</option>
                                                    <option value="OUT" <?php if ($jenisPergerakanBarang=='OUT') echo "selected";?>>BARANG KELUAR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Harga Beli</label>
                                                <input type="number" name="hargaBeli" placeholder="Harga Beli" class="form-control" value="<?= $hargaBeli?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/stokBarang"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
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
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y');?>
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
</body>

</html>
