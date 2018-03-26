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
                            <?php echo form_open_multipart('user/tambahPO','class="form-horizontal"')?>
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
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-sm-10"><input type="text" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?php echo set_value('kodeProduk'); ?>" required=""></div>
                                    <small class="text-danger"><?php echo form_error('kodeProduk'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk" required> <i></i> Cincin </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk"> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk"> <i></i> Gelang </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk"> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Mainan Nama"){?> checked="" <?php } ?> value="Mainan Nama" name="jenisProduk"> <i></i> Mainan Nama </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk"> <i></i> Cincin Kawin </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div id="cincin" style="display: none;">
                                    <div id="contentHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Detail Produk</h5>
                                    </div>
                                    <div id="contentDetail" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Bahan <small class="text-navy"> Pilih salah satu</small></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('bahan'); if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan" required> <i></i> Emas Kuning </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('bahan'); if($a=="Swasa"){?> checked="" <?php } ?> value="Swasa" name="bahan"> <i></i> Swasa </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('bahan'); if($a=="Rose Gold"){?> checked="" <?php } ?> value="Rose Gold" name="bahan"> <i></i> Rose Gold </label></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('bahan'); if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('bahan'); if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Kadar Bahan</label>
                                                <input type="text" name="kadarBahan" placeholder="%" value="<?php echo set_value('kadarBahan'); ?>"  class="form-control" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Harga Pasaran</label>
                                                <input type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo set_value('hargaBahan'); ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Ukuran Jari / Tangan / Leher </label>
                                                        <input type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo set_value('ukuranJari'); ?>" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama Batu Permata</label>
                                                        <input type="text" placeholder="Nama Batu" name="namaBatu" class="form-control" value="<?php echo set_value('namaBatu'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Berat Batu Permata</label>
                                                        <input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo set_value('beratBatu'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Berlian</label>
                                                        <input type="text" placeholder="Nama Berlian" name="berlian" class="form-control" value="<?php echo set_value('berlian'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Berat Berlian</label>
                                                        <input type="text" placeholder="gr" name="beratBerlian" class="form-control" value="<?php echo set_value('beratBerlian'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Berlian</label>
                                                        <input type="text" placeholder="Rp" name="hargaBerlian" class="form-control good" value="<?php echo set_value('hargaBerlian'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Batu Zirkon</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuZirkon'); if($a=="Swarovski"){?> checked="" <?php } ?> value="Swarovski" name="batuZirkon"> <i></i> Swarovski </label></div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuZirkon'); if($a=="PRQ"){?> checked="" <?php } ?> value="PRQ" name="batuZirkon"> <i></i> PRQ </label></div>
                                                                <input type="radio" checked="" value="" name="batuZirkon" hidden="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jumlah Batu Zirkon</label>
                                                        <input type="text" placeholder="Jumlah Batu Zirkon" name="jumlahBatuZirkon" class="form-control" value="<?php echo set_value('jumlahBatuZirkon'); ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Batu Zirkon (/pcs)</label>
                                                        <input type="text" placeholder="Rp" name="hargaBatuZirkon" class="form-control good" value="<?php echo set_value('hargaBatuZirkon'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe Ikatan <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Bungkus"){?> checked="" <?php } ?> value="Bungkus" name="tipeIkatan" required> <i></i> Bungkus </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Kuku"){?> checked="" <?php } ?> value="Kuku" name="tipeIkatan"> <i></i> Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Tanam"){?> checked="" <?php } ?> value="Tanam" name="tipeIkatan"> <i></i> Tanam </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Mangkok Kuku"){?> checked="" <?php } ?> value="Mangkok Kuku" name="tipeIkatan"> <i></i> Mangkok Kuku </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Bungkus Kaku"){?> checked="" <?php } ?> value="Bungkus Kaku" name="tipeIkatan"> <i></i> Bungkus Kaku </label></div>
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a=="Jepit"){?> checked="" <?php } ?> value="Jepit" name="tipeIkatan"> <i></i> Jepit </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Metode <br/><small class="text-navy">Pilih salah satu</small></label>

                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Design"){?> checked="" <?php } ?> value="Design" name="metode" required> <i></i> Design </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Manual"){?> checked="" <?php } ?> value="Manual" name="metode"> <i></i> Manual </label></div>
                                            </div>
                                            <div class="col-sm-6" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= set_value('metode'); if($a=="Inject"){?> checked="" <?php } ?> value="Inject" name="metode"> <i></i> Inject </label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <p>Tampilkan Informasi Tambahan</p>
                                Ya <input type="radio" name="infoTambahan" id="yTambahan" onclick="yesnoCheck();">
                                Tidak <input type="radio" name="infoTambahan" id="nTambahan" onclick="yesnoCheck();">
                                <hr>

                                <div id="detailTambahan" style="display: none;">
                                    <div id="tambahanHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Informasi Tambahan</h5>
                                    </div>
                                    <div id="contentTambahan" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Krum Warna</label>
                                            <div class="col-sm-4"><input type="text" name="krumWarna" class="form-control" value="<?php echo set_value('krumWarna'); ?>"></div>
                                            <label class="col-sm-2 control-label">Harga Krum Warna</label>
                                            <div class="col-sm-4"><input type="text" placeholder="Rp" name="hargaKrumWarna" class="form-control good" value="<?php echo set_value('hargaKrumWarna'); ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Krum</label>
                                            <div class="col-sm-10"><input type="text" name="keteranganKrum" class="form-control" value="<?php echo set_value('keteranganKrum'); ?>"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo set_value('datangEmas'); ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Emas</label>
                                                        <input type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo set_value('kadarDatangEmas'); ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Datang Emas</label>
                                                        <input type="text" placeholder="Rp" name="hargaDatangEmas" class="form-control good" value="<?php echo set_value('hargaDatangEmas'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Berlian </label>
                                                        <input type="text" placeholder="Pcs" name="datangBerlian" value="<?php echo set_value('datangBerlian'); ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Berlian</label>
                                                        <input type="text" name="jumlahDatangBerlian" placeholder="Carat" value="<?php echo set_value('jumlahDatangBerlian'); ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Upah Pasang Berlian</label>
                                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" class="form-control good" value="<?php echo set_value('upahPasangBerlian'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>Pekerjaan Tambahan</span>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pekerjaan Tambahan <br/></label>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Enamel"){?> checked="" <?php } ?> value="Enamel" name="pekerjaanTambahan[]"> <i></i> Enamel </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Slap"){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kombinasi"){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Laser Huruf"){?> checked="" <?php } ?> value="Laser Huruf" name="pekerjaanTambahan[]"> <i></i> Laser Huruf </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kode Cap"){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                                <!-- <input type="checkbox" checked="" hidden="" value="" name="pekerjaanTambahan"> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan Tambahan</label>
                                            <div class="col-sm-4"><input type="text" name="keteranganTambahan" class="form-control" value="<?php echo set_value('keteranganTambahan'); ?>"></div>
                                            <label class="col-sm-2 control-label">Biaya Tambahan</label>
                                            <div class="col-sm-4"><input type="text" placeholder="Rp" name="biayaTambahan" class="form-control good" value="<?php echo set_value('biayaTambahan'); ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                                              
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                    <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?php echo set_value('model'); ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kuantitas</label>
                                    <div class="col-sm-10"><input type="number" name="kuantitas" class="form-control" value="<?php echo set_value('kuantitas'); ?>" required=""></div>
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
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <label>Insert Image(.JPG)</label>                
                                        <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="upah" class="form-control good" value="<?php echo set_value('upah'); ?>" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Budget</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="budget" class="form-control good" value="<?php echo set_value('budget'); ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="panjar" class="form-control good" value="<?php echo set_value('panjar'); ?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button id="submit" class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
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

    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

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

    function yesnoCheck() {
        if (document.getElementById('yTambahan').checked) {
            document.getElementById('detailTambahan').style.display = 'block';
            console.log("a");
        }
        else document.getElementById('detailTambahan').style.display = 'none';
        console.log("b");

    }

    </script>
</body>

</html>
