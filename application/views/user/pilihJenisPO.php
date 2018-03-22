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
                    <h2>Buat PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Purchase Order</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-3">
                    <a type="button" data-toggle="modal" data-target="#tempahan">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div >
                                    <img src="<?php echo base_url();?>assets/img/tempahan.jpg" style="object-fit: cover; width: 100%;" >
                                </div>
                                <div class="product-desc">
                                    <h2 class="product-name text-center" style="font-size: 30px;"> TEMPAHAN</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a type="button" data-toggle="modal" data-target="#masal">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div >
                                    <img src="<?php echo base_url();?>assets/img/masal.jpg" style="object-fit: cover; width: 100%;" >
                                </div>
                                <div class="product-desc">
                                    <h2 class="product-name text-center" style="font-size: 30px;"> MASSAL</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a type="button" data-toggle="modal" data-target="#perak">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div >
                                    <img src="<?php echo base_url();?>assets/img/perak.jpg" style="object-fit: cover; width: 100%;" >
                                </div>
                                <div class="product-desc">
                                    <h2 class="product-name text-center" style="font-size: 30px;"> PERAK</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a type="button" data-toggle="modal" data-target="#service">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div >
                                    <img src="<?php echo base_url();?>assets/img/service.jpg" style="object-fit: cover; width: 100%;" >
                                </div>
                                <div class="product-desc">
                                    <h2 href="#" class="product-name text-center" style="font-size: 30px;"> SERVICE</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a type="button" data-toggle="modal" data-target="#trading">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div >
                                    <img src="<?php echo base_url();?>assets/img/trading.jpg" style="object-fit: cover; width: 100%;" >
                                </div>
                                <div class="product-desc">
                                    <h2 href="#" class="product-name text-center" style="font-size: 30px;"> TRADING</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Modal Tempahan -->
                <div class="modal inmodal fade" id="tempahan" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Tipe Pelanggan</h3>
                                <span>PRODUKSI : <b class="text-success">TEMPAHAN</b></span>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r">
                                        <?php echo form_open_multipart('user/convertTempahan','class="form-horizontal"')?>
                                        <h3 class="m-t-none m-b">Pelanggan Lama</h3>
                                        <p>Purchase Order dari pelanggan yang sudah pernah melakukan pembelian.</p>
                                        <div id="idCustomer" class="selectpicker" data-live="true">
                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                <span class="placeholder">Pilih Customer</span>
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
                                                            <?php for ($i=0; $i < count($listCustomer) ; $i++) { ?>
                                                                <li class="filter-item items" data-filter="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php echo $listCustomer[$i]->namaCustomer?></li>
                                                            <?php } ?>
                                                        </ul>
                                                        <div class="no-search-results">
                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idCustomer" value="0" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_open_multipart('user/convertTempahan','class="form-horizontal"')?>
                                        <div class="col-md-12" style="height: 123px;">
                                            <h3 class="m-t-none m-b">Pelanggan Baru</h3>
                                            <p>Purchase Order dari pelanggan yang baru pertama kali melakukan pembelian.</p>
                                            <input type="hidden" name="idCustomer" value="0">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-warning pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Modal Masal -->
                <div class="modal inmodal fade" id="masal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Tipe Pelanggan</h3>
                                <span >PRODUKSI : <b class="text-success">MASAL</b></span>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r">
                                        <?php echo form_open_multipart('user/convertMassal','class="form-horizontal"')?>
                                        <h3 class="m-t-none m-b">Pelanggan Lama</h3>
                                        <p>Purchase Order dari pelanggan yang sudah pernah melakukan pembelian.</p>
                                        <div id="idCustomer" class="selectpicker" data-live="true">
                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                <span class="placeholder">Pilih Customer</span>
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
                                                            <?php for ($i=0; $i < count($listCustomer) ; $i++) { ?>
                                                                <li class="filter-item items" data-filter="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php echo $listCustomer[$i]->namaCustomer?></li>
                                                            <?php } ?>
                                                        </ul>
                                                        <div class="no-search-results">
                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idCustomer" value="0" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_open_multipart('user/convertMassal','class="form-horizontal"')?>
                                        <div class="col-md-12" style="height: 123px;">
                                            <h3 class="m-t-none m-b">Pelanggan Baru</h3>
                                            <p>Purchase Order dari pelanggan yang baru pertama kali melakukan pembelian.</p>
                                            <input type="hidden" name="idCustomer" value="0">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-warning pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Modal Perak -->
                <div class="modal inmodal fade" id="perak" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Tipe Pelanggan</h3>
                                <span >PRODUKSI : <b class="text-success">PERAK</b></span>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r">
                                        <?php echo form_open_multipart('user/convertPerak','class="form-horizontal"')?>
                                        <h3 class="m-t-none m-b">Pelanggan Lama</h3>
                                        <p>Purchase Order dari pelanggan yang sudah pernah melakukan pembelian.</p>
                                        <div id="idCustomer" class="selectpicker" data-live="true">
                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                <span class="placeholder">Pilih Customer</span>
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
                                                            <?php for ($i=0; $i < count($listCustomer) ; $i++) { ?>
                                                                <li class="filter-item items" data-filter="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php echo $listCustomer[$i]->namaCustomer?></li>
                                                            <?php } ?>
                                                        </ul>
                                                        <div class="no-search-results">
                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idCustomer" value="0" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_open_multipart('user/convertPerak','class="form-horizontal"')?>
                                        <div class="col-md-12" style="height: 123px;">
                                            <h3 class="m-t-none m-b">Pelanggan Baru</h3>
                                            <p>Purchase Order dari pelanggan yang baru pertama kali melakukan pembelian.</p>
                                            <input type="hidden" name="idCustomer" value="0">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-warning pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Modal Service -->
                <div class="modal inmodal fade" id="service" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Tipe Pelanggan</h3>
                                <span >PRODUKSI : <b class="text-success">SERVICE</b></span>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r">
                                        <?php echo form_open_multipart('user/createPOService','class="form-horizontal"')?>
                                        <h3 class="m-t-none m-b">Pelanggan Lama</h3>
                                        <p>Purchase Order dari pelanggan yang sudah pernah melakukan pembelian.</p>
                                        <div id="idCustomer" class="selectpicker" data-live="true">
                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                <span class="placeholder">Pilih Customer</span>
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
                                                            <?php for ($i=0; $i < count($listCustomer) ; $i++) { ?>
                                                                <li class="filter-item items" data-filter="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php echo $listCustomer[$i]->namaCustomer?></li>
                                                            <?php } ?>
                                                        </ul>
                                                        <div class="no-search-results">
                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idCustomer" value="0" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_open_multipart('user/createPOService','class="form-horizontal"')?>
                                        <div class="col-md-12" style="height: 123px;">
                                            <h3 class="m-t-none m-b">Pelanggan Baru</h3>
                                            <p>Purchase Order dari pelanggan yang baru pertama kali melakukan pembelian.</p>
                                            <input type="hidden" name="idCustomer" value="0">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-warning pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Modal Trading -->
                <div class="modal inmodal fade" id="trading" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Tipe Pelanggan</h3>
                                <span >PRODUKSI : <b class="text-success">TRADING</b></span>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 b-r">
                                        <?php echo form_open_multipart('user/convertTrading','class="form-horizontal"')?>
                                        <h3 class="m-t-none m-b">Pelanggan Lama</h3>
                                        <p>Purchase Order dari pelanggan yang sudah pernah melakukan pembelian.</p>
                                        <div id="idCustomer" class="selectpicker" data-live="true">
                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                <span class="placeholder">Pilih Customer</span>
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
                                                            <?php for ($i=0; $i < count($listCustomer) ; $i++) { ?>
                                                                <li class="filter-item items" data-filter="<?php echo $listCustomer[$i]->namaCustomer?>" data-value="<?php echo $listCustomer[$i]->idCustomer?>"><?php echo $listCustomer[$i]->namaCustomer?></li>
                                                            <?php } ?>
                                                        </ul>
                                                        <div class="no-search-results">
                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idCustomer" value="0" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
                                        </div>
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_open_multipart('user/convertTrading','class="form-horizontal"')?>
                                        <div class="col-md-12" style="height: 123px;">
                                            <h3 class="m-t-none m-b">Pelanggan Baru</h3>
                                            <p>Purchase Order dari pelanggan yang baru pertama kali melakukan pembelian.</p>
                                            <input type="hidden" name="idCustomer" value="0">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="hr-line-dashed"></div>
                                            <button class="btn btn-sm btn-warning pull-right m-t-n-xs" type="submit"><strong>Lanjutkan</strong></button>
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
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; 2018
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>


</body>

</html>
