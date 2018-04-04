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
                            <strong>Stok Barang</strong>
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
                            <h5>Stok Barang Anda</h5>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>

                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-lg-3 text-center">

                                    <span class="">Total Berat Emas Lokal Anda</span>
                                    <h1 class="text-success">
                                        <br>
                                         <?php $g = 0; 

                                         for ($i=0; $i < count($st); ++$i) { 
                                             if($st[$i]->jenis == 'IN') {
                                                $g += (float)$st[$i]->beratlokal;
                                             } else {
                                                $g -= (float)$st[$i]->beratlokal;
                                             }
                                        } echo $g." gr" ?>

                                        <?php if(count($pd) > 0) {?>
                                            <br><br>
                                            <button data-toggle="modal" data-target="#terima" class="btn btn-sm btn-warning">Terdapat Transfer Barang Baru !</button>

                                            <div class="modal inmodal fade" id="terima" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Terima Transfer Barang</h3><br>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-stripped table-responsive text-center">
                                                                <thead>
                                                                    <th class="text-center">Nama Barang</th>
                                                                    <th class="text-center">Kadar</th>
                                                                    <th class="text-center">Berat</th>
                                                                    <th class="text-center">Action</th>
                                                                </thead>
                                                                <tbody>
                                                                    <?php for ($i=0; $i < count($pd); ++$i) { ?>
                                                                        <tr>
                                                                            <td><?php echo $pd[$i]->namaMaterial?></td>
                                                                            <td><?php echo $pd[$i]->kadar?></td>
                                                                            <td><?php echo $pd[$i]->jumlah?> gr</td>
                                                                            <td><a href="<?php echo base_url('user/terimabarang/'.$pd[$i]->idStok)?>" class="btn btn-xs btn-info">Terima</a></td>
                                                                        </tr>
                                                                    <?php }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </h1>
                                </div>
                                <div class="col-lg-9 text-center">
                                    <table data-page-size="4" class=" footable table table-responsive table-stripped">

                                        <thead>
                                            <tr>
                                                <th class="text-center">Arah</th>
                                                <th class="text-center">Barang</th>
                                                <th class="text-center">Kadar</th>
                                                <th class="text-center">Berat</th>
                                                <th class="text-center">Kadar Lokal</th>
                                                <th class="text-center">Berat Lokal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < count($st); ++$i) { ?>
                                                <tr>
                                                    <td><?php echo $st[$i]->jenis?></td>
                                                    <td><?php echo $st[$i]->nama?></td>
                                                    <td><?php echo $st[$i]->kadar?> %</td>
                                                    <td><?php echo $st[$i]->jmlmasuk?> gr</td>
                                                    <td><?php echo $st[$i]->lokal?> %</td>
                                                    <td><?php echo $st[$i]->beratlokal?> gr</td>
                                                </tr>
                                            <?php }?>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <ul class="pagination pull-right"></ul>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        
                                    </table>
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang Keseluruhan</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal">
                                    <i class="fa fa-pencil"></i><strong> TAMBAH PERGERAKAN BARANG</strong>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>PIC</th>
                                    <th>Nama Barang</th>
                                    <th>Tipe Barang</th>
                                    
                                    <th>Jenis Pergerakan</th>
                                    <th>Arah</th>
                                    <th>Jumlah</th>
                                    
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($stokBarang as $p) : ?>
                                    <tr>
                                        <?php $tglmsk = new DateTime($p->tanggal);
                                        $tglmsk = $tglmsk->format("d M Y h:i:s"); ?>
                                        <td><?php echo $p->tgl?></td>
                                        <td><?php echo $p->namapic?></td>
                                        <td><?php echo $p->namaMaterial?></td>
                                        <td><?php echo $p->tipeBarang?></td>
                                        
                                        <td><?php echo $p->tipePergerakan?></td>
                                        <td><?php echo $p->jenisPergerakanBarang?></td>
                                        <td><?php echo $p->jumlah?> <?php echo $p->satuan?> </td>
                                        
                                        <td>
                                            <a href="<?php echo base_url()?>user/deleteInventory/<?php echo $p->idStok?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus stok barang ini?')">Hapus</a>
                                            <?php if($p->statusTransfer == 'Pending') { ?>
                                                &nbsp<button class="btn btn-warning btn-xs" disabled>Pending</button>
                                            <?php } ?>
                                        </td>
                                     </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="8">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- Modal -->
                            <div class="modal inmodal fade" id="modal" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h3 class="modal-title">Tipe Pergerakan Barang</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?php echo form_open_multipart('user/tambahPergerakan','class="form-horizontal"')?>
                                                    <h3 class="m-t-none m-b">Pilih Tipe Pergerakan</h3>
                                                    <select id="tipePergerakan" class="form-control"  name="tipePergerakan">
                                                        <option value="Beli Material">Beli Material</option>
                                                        <option value="Transfer Material">Transfer Material</option>
                                                        <option value="Balik Bahan">Balik Bahan</option>
                                                        <option value="Balik Abu">Balik Abu</option>
                                                        <option value="Stok Opname">Stok Opname</option>
                                                    </select>
                                                    
                                                    <div id="jenisProduksi" style="display: none;">
                                                        <hr>
                                                        <h3 class="m-t-none m-b">Pilih Jenis Produksi</h3>
                                                        <select id="jenisProduksi" class="form-control"  name="jenisProduksi">
                                                            <option value="tempahan">Tempahan</option>
                                                            <option value="massal">Massal</option>
                                                            <option value="perak">Perak</option>
                                                        </select>
                                                        <br>
                                                        <h3 class="m-t-none m-b">Pilih Pegawai</h3>
                                                        <div id="idUser" class="selectpicker" data-live="true">
                                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                                <span class="placeholder">Pilih Pegawai</span>
                                                                <span class="caret"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                                                    <label class="sr-only" for="input-bts-ex-4">Search in the list</label>
                                                                    <div class="search-box">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="search-icon3">
                                                                                <span class="fa fa-search"></span>
                                                                                <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                                            </span>
                                                                            <input type="text" placeholder="Search in the list" id="input-bts-ex-4" class="form-control live-search" aria-describedby="search-icon3" tabindex="1" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-to-filter">
                                                                        <ul class="list-unstyled">
                                                                            <?php for ($i=0; $i < count($pegawai) ; $i++) { ?>
                                                                                <?php if ($pegawai[$i]->idUser!=0) {?>
                                                                                <li class="filter-item items" data-filter="<?php echo $pegawai[$i]->nama; echo' - '; echo $pegawai[$i]->jabatan?>" data-value="<?php echo $pegawai[$i]->idUser?>"><?php echo $pegawai[$i]->nama; echo' - '; echo $pegawai[$i]->jabatan?></li>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                        </ul>
                                                                        <div class="no-search-results">
                                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="idUser" value="0" required="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="hr-line-dashed"></div>
                                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                                    </div>
                                                    <?php echo form_close()?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            </div>
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
    <script type="text/javascript">
        $('#tipePergerakan').change(function(){

            if ($(this).val() == "Balik Bahan" || $(this).val() == "Balik Abu"){
                document.getElementById('jenisProduksi').style.display = 'block';
            } else {
                document.getElementById('jenisProduksi').style.display = 'none';
            }
        });
        
    </script>
</body>

</html>
