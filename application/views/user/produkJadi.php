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
            <!-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang Victoriavici.</span>
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
                                <!-- <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createProduk">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PRODUK</strong></span></i>
                                </a> -->
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
                                    <th class="text-center" >Stok </th>
                                    <!-- <th data-hide="phone,tablet">Foto</th> -->
                                    <th class="text-center" >Action</th>
                                    <!-- <th class="text-center" >Status BOM</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                     <?php for ($j=0; $j < count($produk); $j++) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $produk[$j]->kode?></td>
                                                <td><?php echo $produk[$j]->namaProduk?></td>
                                                <td class="text-center" ><?php echo $produk[$j]->jenisProduk?></td>
                                                <td class="text-center" >Rp. <?php echo number_format($produk[$j]->hargaJual,2,".","."); ?></td>
                                                <td class="text-center" ><?php echo $produk[$j]->stok?></td>
                                                <td class="text-center"><!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#detail<?php echo $produk[$j]->idProduk?>">Lihat</button>
                                                    <!-- <a href="<?php echo base_url()?>user/editProduk/<?php echo $produk[$j]->idProduk?>" class="btn btn-xs btn-default">Edit</a>
                                                    <a href="<?php echo base_url()?>user/deleteProduk/<?php echo $produk[$j]->idProduk?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')">Hapus</a></td> -->
                                                <!-- <td class="text-center">
                                                        <?php if ($produk[$j]->kodeProduk != NULL) { ?>
                                                        <div class="label label-xs label-success">BOM sudah terisi</div>
                                                        <?php } else {?>
                                                        <a href="<?php echo base_url()?>user/createBOM/<?php echo $produk[$j]->idProduk?>" class="btn btn-xs btn-default">Isi BOM</a></td>
                                                        <?php }?>
                                                </td> -->
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
                                            <div class="modal inmodal fade" id="detail<?php echo $p->idProduk?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title">Detail Produk</h3><br>
                                                        <span >KODE PRODUK : <b class="text-success"><?php echo $p->kodeProduk?></b> | NAMA PRODUK : <b class="text-success"><?php echo $p->namaProduk?></b> | TIPE : <b class="text-success">Custom</b></span><br>
                                                        </div>
                                                    <div class="modal-body">

                                                        <div class="tabs-container">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a data-toggle="tab" href="#tab-1-<?php echo $p->idProduk?>">Informasi Umum</a></li>
                                                                <li class=""><a data-toggle="tab" href="#tab-2-<?php echo $p->idProduk?>">Daftar BOM</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="tab-1-<?php echo $p->idProduk?>" class="tab-pane active">
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 text-right ">
                                                                                Jenis Produk<br>
                                                                                Bahan<br>
                                                                                Nama Batu<br>
                                                                                Ukuran Jari<br>
                                                                                Berlian<br>
                                                                                Krum Warna<br>
                                                                                Tipe Ikatan<br>
                                                                                Harga<br>
                                                                                Stok Barang<br>
                                                                                Model
                                                                            </div>
                                                                            <div class="col-lg-4 text-left">
                                                                                :&nbsp&nbsp<b><?php echo $p->jenisProduk?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->bahan?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->namaBatu?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->ukuranJari?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->berlian?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->krumWarna?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->tipeIkatan?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->hargaJual?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->stok?></b><br>
                                                                                :&nbsp&nbsp<b><?php echo $p->model?></b><br>
                                                                            </div>
                                                                             <div class="col-lg-3 text-left">
                                                                                <b>Foto Produk</b><br><br>
                                                                                <img src="<?php echo base_url()?>uploads/gambarProduk/<?php echo $p->kodeGambar?>-cust.jpg" class="img-responsive">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="tab-2-<?php echo $p->idProduk?>" class="tab-pane">
                                                                    <div class="panel-body">
                                                                            <table class="table table-stripped text-left">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Nama Material</th>
                                                                                <th>Satuan</th>
                                                                                <th>Kuantitas</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php foreach($bom as $b) : 
                                                                            if ($p->idProduk==$b->kodeProduk) {?>
                                                                            <tr>
                                                                                <td><?php echo $b->namaMaterial?></td>
                                                                                <td><?php echo $b->satuan?></td>
                                                                                <td><?php echo $b->jumlah?></td>
                                                                                <td>
                                                                                    <!-- <a href="<?php echo base_url()?>user/editBOM/<?php echo $b->idBOM?>" class="btn btn-xs btn-primary">Edit</a> --><a href="<?php echo base_url()?>user/deleteBOM/<?php echo $b->idBOM?>" class="btn btn-xs btn-danger"onclick="return confirm('Apakah anda yakin akan menghapus BOM ini?')">Hapus</a>
                                                                                    </td>
                                                                            </tr>
                                                                            <?php }
                                                                            endforeach; ?>
                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <td colspan="4">
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
