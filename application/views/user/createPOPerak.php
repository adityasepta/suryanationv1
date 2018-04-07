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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Buat Purchase Order <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/tambahPOPerak','class="form-horizontal"')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <?php if(count($poTerakhir)>0) { ?>
                                                <small>Nomor Purchase Order terakhir yang digunakan adalah <strong> <?php echo $poTerakhir[0]->nomorPO; ?></strong></small>
                                                <?php $poNow =  $poTerakhir[0]->nomorPO+1; } else { $poNow = 1; } ?>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" value="<?php echo $poNow; ?>" readonly>
                                                <small class="text-danger"><?php echo form_error('nomorPO'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <?php if($id['idC']==0){ ?>
                                                    <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?php echo set_value('namaCustomer'); ?>" required="">
                                                    <input type="hidden" name="idCustomer" class="form-control" value="0">
                                                <?php } else { ?>
                                                    <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?php echo $customer[0]->namaCustomer; ?>" readonly>
                                                    <input type="hidden" name="idCustomer" class="form-control" value="<?php echo $customer[0]->idCustomer; ?>">
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                <?php if($id['idC']==0){ ?>
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo set_value('nomorTelepon'); ?>" required="">
                                                <?php } else { ?>
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo $customer[0]->nomorTelepon; ?>" readonly>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <select id="idSalesPerson" class="form-control"  name="idSalesPerson">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= set_value('idSalesPerson'); if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?php echo set_value('tanggalMasuk'); ?>" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?php echo set_value('tanggalEstimasiPenyelesaian'); ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="custom" style="padding: 20px; margin: 0 -20px 0 -20px;">
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="kodeProduk" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?php echo set_value('kodeProduk'); ?>" required="">
                                            <small>Jika sudah ada master dari produk yang akan diproduksi,<strong> TEKAN TOMBOL CARI PRODUK</strong></small>
                                        </div>
                                        <div class="col-sm-2"><a class="btn btn-default btn-md" data-toggle="modal" data-target="#tambahProduk">Cari Produk</a></div>
                                        <small class="text-danger"><?php echo form_error('kodeProduk'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Produk </label>
                                        <div class="col-sm-10" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input id="Cincin" type="radio" checked="" value="Cincin" name="jenisProduk"> <i></i> Cincin </label></div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Batu Permata</label>
                                        <div class="col-md-3">
                                            <input id="namaBatu" type="text" placeholder="Nama Batu" name="namaBatu" class="form-control" value="<?php echo set_value('namaBatu'); ?>">
                                        </div>
                                        <label class="col-sm-2 control-label">Berat Batu Permata</label>
                                        <div class="col-md-3">
                                            <input id="beratBatu" type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo set_value('beratBatu'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keadaan Batu Tengah </label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" checked="" value="Mulus" name="keadaanBatuTengah" required> <i></i> Mulus </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Serat Halus" name="keadaanBatuTengah"> <i></i> Serat Halus </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Serat Kasar" name="keadaanBatuTengah"> <i></i> Serat Kasar </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Sompel" name="keadaanBatuTengah"> <i></i> Sompel </label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Batu Terhadap Kruman</label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" checked="" value="Tahan" name="batuTerhadapKruman" required> <i></i> Tahan </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Batu Terhadap Pukulan</label>

                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" checked="" value="Sangat Bagus" name="batuTerhadapPukulan" required> <i></i> Sangat Bagus </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Bagus" name="batuTerhadapPukulan"> <i></i> Bagus </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Cukup" name="batuTerhadapPukulan"> <i></i> Cukup </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" value="Kurang" name="batuTerhadapPukulan"> <i></i> Kurang </label></div>
                                        </div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ukuran Jari</label>
                                        <div class="col-md-8">
                                            <input id="ukuranJari" type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo set_value('ukuranJari'); ?>" required="">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                        <div class="col-sm-8"><input id="model" type="text" name="model" class="form-control" value="<?php echo set_value('model'); ?>"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Gambar Desain</label>
                                        <div class="col-sm-10" id="desainBelum">
                                            <label>Insert Image(.JPG)</label>                
                                            <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
                                        </div>
                                        <div class="col-lg-10" id="desainAda" style="display: none;">
                                            <div class="col-lg-4">
                                                <img id="desain1" src="" class="img img-responsive" style="max-height: 180px;">
                                            </div>
                                            <div class="col-lg-4">
                                                <img id="desain2" src="" class="img img-responsive" style="max-height: 180px;">
                                            </div>
                                            <div class="col-lg-4">
                                                <img id="desain3" src="" class="img img-responsive" style="max-height: 180px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                    <h5>Detail Biaya</h5>
                                </div>
                                <div style="padding: 15px; background-color: #f7f7f7;">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Berat Perak</label>
                                            <input id="beratAkhir" type="number" step="any" name="beratAkhir" onchange="calc1();" class="form-control" placeholder="gr" value="<?php echo set_value('beratAkhir'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Harga Pasaran</label>
                                            <input id="hargaBahan" type="text" name="hargaBahan" class="form-control good" value="<?php echo $this->session->userdata['logged_in']['currentCurrency']; ?>" readonly">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Harga</label>
                                            <input id="hargaPerak" type="text" name="hargaPerak" class="form-control good" placeholder="Rp" value="<?php echo set_value('hargaPerak'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Krum Warna</label>
                                            <input id="krumWarna" type="text" name="krumWarna" class="form-control" value="<?php echo set_value('krumWarna'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Keterangan Krum</label>
                                            <input id="keteranganKrum" type="text" name="keteranganKrum" class="form-control" value="<?php echo set_value('keteranganKrum'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Harga Krum</label>
                                            <input id="hargaKrumWarna" type="text" name="hargaKrumWarna" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaKrumWarna'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-4">
                                            <label>Keterangan Slep</label>
                                            <input id="keteranganSlep" type="text" name="keteranganSlep" class="form-control" value="<?php echo set_value('keteranganSlep'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Harga Slep</label>
                                            <input id="hargaSlep" type="text" name="hargaSlep" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaSlep'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-4">
                                            <label>Keterangan Rombak</label>
                                            <input id="keteranganRombak" type="text" name="keteranganRombak" class="form-control" value="<?php echo set_value('keteranganRombak'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Upah Rombak</label>
                                            <input id="upahRombak" type="text" name="upahRombak" class="form-control good"  onchange="calc2();" placeholder="Rp" value="<?php echo set_value('upahRombak'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-4">
                                            <label>Resize</label>
                                            <input id="resize" type="text" name="resize" class="form-control" value="<?php echo set_value('resize'); ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Harga Resize</label>
                                            <input id="hargaResize" type="text" name="hargaResize" placeholder="Rp" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('hargaResize'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-4">
                                            
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Upah Pasang Batu</label>
                                            <input id="upah" type="text" name="upah" class="form-control good" onchange="calc2();"  placeholder="Rp" value="<?php echo set_value('upah'); ?>">
                                        </div>
                                    </div>

                                    
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-4 control-label">Total Harga</label>
                                        <div class="col-sm-8"><input type="text" name="totalHarga" id="totalHarga" class="form-control good" placeholder="Rp" value="<?php echo set_value('totalHarga'); ?>" readonly></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-4 control-label">Panjar</label>
                                        <div class="col-sm-8"><input type="text" name="panjar" id="panjar" class="form-control good" onchange="calc3()" placeholder="Rp" value="<?php echo set_value('panjar'); ?>"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-4 control-label">Sisa</label>
                                        <div class="col-sm-8"><input type="text" name="sisa" id="sisa" class="form-control good" placeholder="Rp" value="<?php echo set_value('sisa'); ?>" readonly></div>
                                    </div>
                                </div>
                                
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                                <!-- Modal Pilih Produk -->
                                <div class="modal inmodal fade" id="tambahProduk" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">Pilih Produk</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php echo form_open_multipart('user/createDetailPO','class="form-horizontal"')?>
                                                        <h3 class="m-t-none m-b">Pilih Salah Satu Produk</h3>
                                                        <div id="produk" class="selectpicker" data-live="true">
                                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                                <span class="placeholder">Pilih Produk</span>
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
                                                                            <?php for ($i=0; $i < count($listProduk) ; $i++) { ?>
                                                                                <li class="filter-item items" data-filter="<?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->jenisProduk;?>" data-value="<?php echo $listProduk[$i]->kodeProduk?>"><?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->jenisProduk;?></li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                        <div class="no-search-results">
                                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="produk" id="pilihProduk" value="0" required="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="hr-line-dashed"></div>
                                                            <button id="pilih" class="btn btn-sm btn-primary pull-right m-t-n-xs" data-dismiss="modal"><strong>Pilih</strong></button>
                                                        </div>
                                                        <?php echo form_close()?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>

    <script src="<?php echo base_url();?>assets/js/inputmask.bundle.js"></script>

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
    $(document).ready(function() {
        // On change of the dropdown do the ajax
        $("#pilih").on('click', function () {
            // $("[id='Emas Putih']").prop('checked',true).iCheck('update');
            $.ajax({
                    // Change the link to the file you are using
                    url: '<?php echo base_url();?>user/cariProduk',
                    type: 'post',
                    // This just sends the value of the dropdown
                    data: { kodeProduk: $("#pilihProduk").val() },
                    success: function(response) {
                        
                        // Parse the jSON that is returned
                        // Using conditions here would probably apply
                        // incase nothing is returned
                        var Vals = $.parseJSON(response);
                        console.log(Vals);
                        // var Vals    =   JSON.parse(response);
                        // These are the inputs that will populate
                        $("input[name='kodeProduk']").val(Vals[0].kodeProduk);
                        $("[id='"+Vals[0].jenisProduk+"']").prop('checked',true).iCheck('update');
                        $("input[name='ukuranJari']").val(Vals[0].ukuranJari);
                        $("input[name='namaBatu']").val(Vals[0].namaBatu);
                        $("input[name='beratBatu']").val(Vals[0].beratBatu);
                        $("input[name='model']").val(Vals[0].model);

                        $('#kodeProduk').prop('readonly', true);
                        $("input[name='jenisProduk']").prop('disabled',true).iCheck('update');

                        document.getElementById("desainBelum").style.display = "none";
                        document.getElementById("desainAda").style.display = "block";
                        document.getElementById("desain1").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d1.jpg";
                        document.getElementById("desain2").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d2.jpg";
                        document.getElementById("desain3").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d3.jpg";
                        document.getElementById("custom").style.backgroundColor = "#f7f7f7";
                    }
            });
        });
    });
    </script>
    <script type="text/javascript">
        function calc1(){
            var m1 = document.getElementById('beratAkhir').value;
            var m2 = document.getElementById('hargaBahan').value;
            var m2 = m2.replace(/[^0-9]/g, '');

            var hargaPerak = m1*m2;

            document.getElementById('hargaPerak').value = hargaPerak.toFixed(2);
            $('#hargaPerak').prop('readonly', true);
        }
    </script>
    <script type="text/javascript">
        function calc2(){
            var m1 = document.getElementById('hargaPerak').value;
            var m1 = parseFloat(m1.replace(/[^0-9]/g, ''));
            var m2 = document.getElementById('hargaKrumWarna').value;
            var m2 = parseFloat(m2.replace(/[^0-9]/g, ''));
            var m3 = document.getElementById('hargaSlep').value;
            var m3 = parseFloat(m3.replace(/[^0-9]/g, ''));
            var m4 = document.getElementById('upahRombak').value;
            var m4 = parseFloat(m4.replace(/[^0-9]/g, ''));
            var m5 = document.getElementById('hargaResize').value;
            var m5 = parseFloat(m5.replace(/[^0-9]/g, ''));
            var m6 = document.getElementById('upah').value;
            var m6 = parseFloat(m6.replace(/[^0-9]/g, ''));

            var hargaTotal = m1+m2+m3+m4+m5+m6;
            document.getElementById('totalHarga').value = hargaTotal.toFixed(2);
        }
    </script>
    <script type="text/javascript">
        function calc3(){
            var m1 = document.getElementById('totalHarga').value;
            var m1 = parseFloat(m1.replace(/[^0-9]/g, ''));
            var m2 = document.getElementById('panjar').value;
            var m2 = parseFloat(m2.replace(/[^0-9]/g, ''));

            var sisa = m1-m2;
            console.log(sisa);
            document.getElementById('sisa').value = sisa.toFixed(2);
        }
    </script>
    <script type="text/javascript">
        $('.good').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 0,
            autoGroup: true,
            prefix: 'Rp ', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    </script>
</body>
</html>
