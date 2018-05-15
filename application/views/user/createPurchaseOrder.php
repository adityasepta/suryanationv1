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

    <script src="<?php echo base_url();?>assets/js/editable-dropdown.js"></script>
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
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" id="nomorPO" class="form-control" value="<?php echo $poNow; ?>" readonly>
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
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?php echo set_value('tanggalEstimasiPenyelesaian'); ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-sm-10"><input type="text" name="kodeProduk" id="kodeProduk" placeholder="Misal: CNC - <?php echo $poNow; ?>" class="form-control" value="<?php echo set_value('kodeProduk'); ?>" readonly></div>
                                    <small class="text-danger"><?php echo form_error('kodeProduk'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="cincin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk" onclick="produkCheck();" required> <i></i> Cincin </label></div>
                                        <div class="i-checks" style="margin-top: 5px;"><label> <input id="liontin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk" onclick="produkCheck();"> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="gelang" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk" onclick="produkCheck();"> <i></i> Gelang </label></div>
                                        <div class="i-checks" style="margin-top: 5px;"><label> <input id="anting" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk" onclick="produkCheck();"> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input id="mainanNama" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Mainan Nama"){?> checked="" <?php } ?> value="Mainan Nama" name="jenisProduk" onclick="produkCheck();"> <i></i> Mainan Nama </label></div>
                                        <div class="i-checks" style="margin-top: 5px;"><label> <input id="cincinKawin" type="radio" <?php $a= set_value('jenisProduk'); if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk" onclick="produkCheck();"><i></i> Cincin Kawin </label></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="i-checks"><label> <input id="lainlain" type="radio" <?php $a= set_value('jenisProduk'); if($a!="Cincin" || $a!="Liontin" || $a!="Gelang" || $a!="Anting" || $a!="Mainan Nama" || $a!="Cincin Kawin"){?> checked="" <?php } ?> value="Lain Lain" name="jenisProduk" onclick="produkCheck();"> <i></i> Lain - Lain </label></div>
                                        <div><input id="jenisLain" type="text" placeholder="Jenis produk yang lain" name="jenisProdukDetail" class="form-control" value="<?php echo set_value('jenisProdukDetail'); ?>"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Customer</label>
                                    <div class="col-lg-2">
                                        <div class="i-checks"><label> <input id="toko" type="radio" value="Toko" name="jenisCustomer"> <i></i> Toko </label></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="i-checks"><label> <input id="perseorangan" type="radio" checked="" value="Perseorangan" name="jenisCustomer" required> <i></i> Perseorangan </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div id="produkDetail">
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
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Kadar (lokal)</label>
                                                        <input id="kadarBahan" type="text" name="kadarBahan" placeholder="%" value="<?php echo set_value('kadarBahan'); ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-6" id="penambahanPersen">
                                                        <label>Pen (Persen)</label>
                                                        <input id="persenBiaya" type="text" name="persenBiaya" placeholder="%" value="<?php echo set_value('persenBiaya'); ?>"  class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-6" id="hargaPasaran">
                                                        <label>Harga Per Gram</label>
                                                        <input id="hargaBahan" type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo $gold['currentCurrency']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Kuantitas</label>
                                                        <input type="number" name="kuantitas" class="form-control" value="1" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div id="ukuranCincin" style="display: none;">
                                                            <label>Ukuran Jari </label>
                                                            <input type="text" placeholder="Ukuran Jari" name="ukuranJari" class="form-control" value="<?php echo set_value('ukuranJari'); ?>">
                                                        </div>
                                                        <div id="ukuranLiontin" style="display: none;">
                                                            <label>Ukuran </label>
                                                            <input type="text" placeholder="Ukuran" name="ukuran" class="form-control" value="<?php echo set_value('ukuran'); ?>">
                                                        </div>
                                                        <div id="ukuranGelang" style="display: none;">
                                                            <label>Diameter X lebar </label>
                                                            <input type="text" placeholder="12cm X 22cm" name="diameter" class="form-control" value="<?php echo set_value('diameter'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Estimasi Berat </label>
                                                        <input type="number" step="any" name="beratAkhir" placeholder="gr" class="form-control" value="<?php echo set_value('beratAkhir'); ?>" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Range Berat Estimasi</label>
                                                        <input type="text" placeholder="10 gr - 14 gr" class="form-control" name="estimasi" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Susut</label>
                                                        <input type="number" placeholder="gr" step="any" name="susut" class="form-control" value="<?php echo set_value('susut'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo set_value('datangEmas'); ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Kadar Datang Emas (lokal)</label>
                                                        <input id="kadarDatangEmas" type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo set_value('kadarDatangEmas'); ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Harga Per Gram</label>
                                                        <input id="hargaDatangEmas" type="text" placeholder="Rp" name="hargaDatangEmas" class="form-control good" value="<?php echo $gold['currentCurrency']; ?>" >
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
                                                        <label>Berat Datang Berlian</label>
                                                        <input type="text" name="jumlahDatangBerlian" placeholder="Carat" value="<?php echo set_value('jumlahDatangBerlian'); ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Upah Pasang Berlian</label>
                                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" class="form-control good" value="<?php echo set_value('upahPasangBerlian'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Batu Permata</label>
                                            <div class="col-md-4">
                                                <input type="text" id="batu" placeholder="Nama Batu" name="namaBatu" onchange="detailBatu();" class="form-control" value="<?php echo set_value('namaBatu'); ?>">
                                            </div>
                                            <label class="col-md-2 control-label">Berat Batu Permata</label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?php echo set_value('beratBatu'); ?>">
                                            </div>
                                        </div>
                                        <div id="detailBatuPermata" style="display: none;">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Batu Terhadap Kruman <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a=="Tahan"){?> checked="" <?php } ?> checked="" value="Tahan" name="batuTerhadapKruman"> <i></i> Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a=="Tidak Tahan"){?> checked="" <?php } ?> value="Tidak Tahan" name="batuTerhadapKruman"> <i></i> Tidak Tahan </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapKruman'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapKruman"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Batu Terhadap Pukulan <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Sangat Bagus"){?> checked="" <?php } ?> checked="" value="Sangat Bagus" name="batuTerhadapPukulan"> <i></i> Sangat Bagus </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Bagus"){?> checked="" <?php } ?> value="Bagus" name="batuTerhadapPukulan"> <i></i> Bagus </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Cukup"){?> checked="" <?php } ?> value="Cukup" name="batuTerhadapPukulan"> <i></i> Cukup </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a=="Kurang"){?> checked="" <?php } ?> value="Kurang" name="batuTerhadapPukulan"> <i></i> Kurang </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapPukulan'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapPukulan"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Batu Terhadap Goresan <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="Kurang dari 6"){?> checked="" <?php } ?> checked="" value="Kurang dari 6" name="batuTerhadapGoresan"> <i></i> Kurang dari 6 </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="6,5 Sampai 7,5"){?> checked="" <?php } ?> value="6,5 Sampai 7,5" name="batuTerhadapGoresan"> <i></i> 6,5 Sampai 7,5 </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a=="Lebih dari 7"){?> checked="" <?php } ?> value="Lebih dari 7" name="batuTerhadapGoresan"> <i></i> Lebih dari 7 </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('batuTerhadapGoresan'); if($a==""){?> checked="" <?php } ?> value="" name="batuTerhadapGoresan"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Keadaan Batu Tengah <br/><small class="text-navy">Pilih salah satu</small></label>

                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Mulus"){?> checked="" <?php } ?> checked="" value="Mulus" name="keadaanBatuTengah"> <i></i> Mulus </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Serat Halus"){?> checked="" <?php } ?> value="Serat Halus" name="keadaanBatuTengah"> <i></i> Serat Halus </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Serat Kasar"){?> checked="" <?php } ?> value="Serat Kasar" name="keadaanBatuTengah"> <i></i> Serat Kasar </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a=="Sompel"){?> checked="" <?php } ?> value="Sompel" name="keadaanBatuTengah"> <i></i> Sompel </label></div>
                                                </div>
                                                <div class="col-sm-2" style="padding-top: 10px;">
                                                    <div class="i-checks"><label> <input type="radio" <?php $a= set_value('keadaanBatuTengah'); if($a==""){?> checked="" <?php } ?> value="" name="keadaanBatuTengah"> <i></i> Tidak Ada </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Keterangan Batu</label>
                                                <div class="col-sm-10">
                                                     <textarea type="text" class="form-control" name="ketBatu" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
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
                                        </div> -->
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Berlian</button>
                                                <div class="input_fields_wrap">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-info btn-sm add_fields" style="margin-bottom: 5px;">Tambah Batu Zirkon</button>
                                                <div class="input_fields_add">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>                               

                                
                                <hr>      
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label>Pekerjaan Tambahan</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="switch">
                                            <div class="onoffswitch" >
                                                <input type="checkbox" class="onoffswitch-checkbox" id="pekTam">
                                                <label class="onoffswitch-label" for="pekTam">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>                    
                                <div id="detailTambahan" style="display: none;">
                                    <div class="form-group">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" id="klikenamel" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Enamel"){?> checked="" <?php } ?> value="Enamel" name="pekerjaanTambahan[]"> <i></i> Enamel </label></div>
                                        </div>
                                        <div id="enamel" style="display: none;">
                                            <div class="col-sm-6">
                                                <input type="text" name="keteranganEnamel" placeholder="Keterangan Enamel" class="form-control" value="<?php echo set_value('keteranganEnamel'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="hargaEnamel" placeholder="Rp" class="form-control good" value="<?php echo set_value('hargaEnamel'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" id="klikslap" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Slap"){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                        </div>
                                        <div id="slap" style="display: none;">
                                            <div class="col-sm-6">
                                                <input type="text" name="keteranganSlap" placeholder="Keterangan Slap" class="form-control" value="<?php echo set_value('keteranganSlap'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="hargaSlap" placeholder="Rp" class="form-control good" value="<?php echo set_value('hargaSlap'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" id="klikkombinasi" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kombinasi"){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                        </div>
                                        <div id="kombinasi" style="display: none;">
                                            <div class="col-sm-6">
                                                <input type="text" name="keteranganKombinasi" placeholder="Keterangan Kombinasi" class="form-control" value="<?php echo set_value('keteranganKombinasi'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="hargaKombinasi" placeholder="Rp" class="form-control good" value="<?php echo set_value('hargaKombinasi'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" id="kliklaserHuruf" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Laser Huruf"){?> checked="" <?php } ?> value="Laser Huruf" name="pekerjaanTambahan[]"> <i></i> Laser Huruf </label></div>
                                        </div>
                                        <div id="laserHuruf" style="display: none;">
                                            <div class="col-sm-6">
                                                <input type="text" name="keteranganLaserHuruf" placeholder="Keterangan Laser Huruf" class="form-control" value="<?php echo set_value('keteranganLaserHuruf'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="hargaLaserHuruf" placeholder="Rp" class="form-control good" value="<?php echo set_value('hargaLaserHuruf'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2" style="padding-top: 10px;">
                                            <div class="i-checks"><label> <input type="checkbox" id="klikkodeCap" <?php $a= set_value('pekerjaanTambahan[]'); if($a=="Kode Cap"){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                        </div>
                                        <div id="kodeCap" style="display: none;">
                                            <div class="col-sm-6">
                                                <input type="text" name="keteranganKodeCap" placeholder="Keterangan Kode Cap" class="form-control" value="<?php echo set_value('keteranganKodeCap'); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="hargaKodeCap" placeholder="Rp" class="form-control good" value="<?php echo set_value('hargaKodeCap'); ?>">
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
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeIkatan'); if($a==""){?> checked="" <?php } ?> value="" name="tipeIkatan"> <i></i> Tidak Ada </label></div>
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
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" required> <i></i> Teliti </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Keterangan Lain</label>
                                    <div class="col-sm-10"><textarea type="text" name="model" class="form-control" value="<?php echo set_value('model'); ?>"></textarea></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <label>Insert Image(.JPG)</label>                
                                        <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Krum Warna</label>
                                    <div class="col-sm-4"><input type="text" name="krumWarna" class="form-control" value="<?php echo set_value('krumWarna'); ?>"></div>
                                    <label class="col-sm-2 control-label">Keterangan Krum</label>
                                    <div class="col-sm-4"><input type="text" name="keteranganKrum" class="form-control" value="<?php echo set_value('keteranganKrum'); ?>"></div>
                                    
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga Krum Warna</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Rp" name="hargaKrumWarna" class="form-control good" value="<?php echo set_value('hargaKrumWarna'); ?>"></div>
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

    <script src="<?php echo base_url();?>assets/js/inputmask.bundle.js"></script>

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
    $(document).ready(function () {
        $("#cincin").on("ifChanged", produkCheck);
        $("#liontin").on("ifChanged", produkCheck);
        $("#cincinKawin").on("ifChanged", produkCheck);
        $("#mainanNama").on("ifChanged", produkCheck);
        $("#anting").on("ifChanged", produkCheck);
        $("#gelang").on("ifChanged", produkCheck);
        $("#toko").on("ifChanged", customerCheck);
        $("#perseorangan").on("ifChanged", customerCheck);

        function produkCheck() {
            if ($('#cincin').iCheck('update')[0].checked) {
                document.getElementById('ukuranCincin').style.display = 'block';
                document.getElementById('ukuranLiontin').style.display = 'none';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'CNC-';
            } else if ($('#liontin').iCheck('update')[0].checked){
                document.getElementById('ukuranLiontin').style.display = 'block';
                document.getElementById('ukuranCincin').style.display = 'none';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'LTN-';
            } else if ($('#gelang').iCheck('update')[0].checked){
                document.getElementById('ukuranGelang').style.display = 'block';
                document.getElementById('ukuranLiontin').style.display = 'none';
                document.getElementById('ukuranCincin').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'GLG-';
            } else if ($('#cincinKawin').iCheck('update')[0].checked){
                document.getElementById('ukuranCincin').style.display = 'block';
                document.getElementById('ukuranLiontin').style.display = 'none';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'CCK-';
            } else if ($('#anting').iCheck('update')[0].checked){
                document.getElementById('ukuranLiontin').style.display = 'block';
                document.getElementById('ukuranCincin').style.display = 'none';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'ATG-';
            } else if ($('#mainanNama').iCheck('update')[0].checked){
                document.getElementById('ukuranLiontin').style.display = 'block';
                document.getElementById('ukuranCincin').style.display = 'none';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'none';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'MNA-';
            } else {
                document.getElementById('ukuranCincin').style.display = 'none';
                document.getElementById('ukuranLiontin').style.display = 'block';
                document.getElementById('ukuranGelang').style.display = 'none';
                document.getElementById('jenisLain').style.display = 'block';
                var nomorPO=document.getElementById('nomorPO').value;
                document.getElementById('kodeProduk').value = 'LLN-';
            }
        }

        function customerCheck(){
            if ($('#toko').iCheck('update')[0].checked) {
                document.getElementById('penambahanPersen').style.display = 'block';
                document.getElementById('hargaPasaran').style.display = 'none';
            } else {
                document.getElementById('penambahanPersen').style.display = 'none';
                document.getElementById('hargaPasaran').style.display = 'block';
                document.getElementById('persenBiaya').value = 0;
            }
        }

        produkCheck();
        customerCheck();
    });
    
    $("#kadarBahan").on("change",function() {
        var kadar = parseFloat(document.getElementById('kadarBahan').value);
        var jenisCustomer = $("input[name='jenisCustomer']:checked").val();
        var bahan = $("input[name='bahan']:checked").val();
        var currentPrice = parseFloat(<?php echo $gold['currentCurrency']; ?>);
        if(jenisCustomer=='Toko'){
            document.getElementById('hargaBahan').value = currentPrice;
        } else {
            if(bahan=='Emas Kuning'){
                document.getElementById('hargaBahan').value =(kadar+10)*currentPrice/100;
            } else if(bahan=='Emas Putih'){
                document.getElementById('hargaBahan').value = (kadar+15)*currentPrice/100;
            } else if(bahan=='Swasa'){
                document.getElementById('hargaBahan').value = (kadar+10)*currentPrice/100;
            } else if(bahan=='Rose Gold'){
                document.getElementById('hargaBahan').value = (kadar+15)*currentPrice/100;
            } else {
                document.getElementById('hargaBahan').value = 16000;
            }
        }
        
    });
    </script>
    <script type="text/javascript">
        $("#klikenamel").on("ifChanged", showEnamel);
        $("#klikslap").on("ifChanged", showSlap);
        $("#klikkombinasi").on("ifChanged", showKombinasi);
        $("#kliklaserHuruf").on("ifChanged", showLaserHuruf);
        $("#klikkodeCap").on("ifChanged", showKodeCap);

        function showEnamel() {
            if ($('#klikenamel').iCheck('update')[0].checked) {
            document.getElementById('enamel').style.display = 'block';
            } else {
                document.getElementById('enamel').style.display = 'none';
            }
        }

        function showSlap() {
            if ($('#klikslap').iCheck('update')[0].checked) {
            document.getElementById('slap').style.display = 'block';
            } else {
                document.getElementById('slap').style.display = 'none';
            }
        } 

        function showKombinasi() {
            if ($('#klikkombinasi').iCheck('update')[0].checked) {
            document.getElementById('kombinasi').style.display = 'block';
            } else {
                document.getElementById('kombinasi').style.display = 'none';
            }
        }

        function showLaserHuruf() {
            if ($('#kliklaserHuruf').iCheck('update')[0].checked) {
            document.getElementById('laserHuruf').style.display = 'block';
            } else {
                document.getElementById('laserHuruf').style.display = 'none';
            }
        }

        function showKodeCap() {
            if ($('#klikkodeCap').iCheck('update')[0].checked) {
            document.getElementById('kodeCap').style.display = 'block';
            } else {
                document.getElementById('kodeCap').style.display = 'none';
            }
        }

    </script>
    <script type="text/javascript">
        function detailBatu(){
            document.getElementById('detailBatuPermata').style.display = 'block';
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            customerCek();

            var max_fields      = 30; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="form-group"><div class="col-md-4"><label>Keterangan Poin Berlian</label><select class="form-control m-b" name="namaBerlian[]" id="lstDropDown_A" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($material); $i++) { ?><option value="<?php echo $material[$i]->namaMaterial?>"><?php echo $material[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-md-3"><label>Harga Berlian Per Karat (Dollar)</label><input type="text" name= "harga[]" placeholder="Harga Berlian" class="form-control" required></div><button class="btn remove_field" style="margin-top:22px;">Remove</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
        // <div class="col-md-2"><label>Berat Karat (Poin)</label><input type="text" name= "jumlah[]" placeholder="Jumlah" class="form-control" required></div>

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 30; //maximum input boxes allowed
            var wrapper         = $(".input_fields_add"); //Fields wrapper
            var add_button      = $(".add_fields"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="form-group"><div class="col-sm-12"><div class="row"><div class="col-md-4"><label>Batu Zirkon</label><select class="form-control m-b" name="zirkon[]" id="lstDropDown_A" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($zirkon); $i++) { ?><option value="<?php echo $zirkon[$i]->namaMaterial?>"><?php echo $zirkon[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-md-3"><label>Harga Batu Zirkon (/pcs)</label><input type="text" placeholder="Rp" name="hargaBatuZirkon[]" class="form-control good" value="<?php echo set_value('hargaBatuZirkon'); ?>"></div><div class="col-md-2"><button class="btn remove_fields" style="margin-top:22px;">Remove</button> </div></div></div></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_fields", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
            })
        });
        // <div class="col-md-3"><label>Jumlah Batu Zirkon</label><input type="text" placeholder="Jumlah Batu Zirkon" name="jumlahBatuZirkon" class="form-control" value="<?php echo set_value('jumlahBatuZirkon'); ?>"></div>
    </script>
    <script type="text/javascript">
        $(".switch").find("input[id=pekTam]").on("change",function() {
            var status = $(this).prop('checked');
            console.log(status);
            if (status==true) {
                document.getElementById('detailTambahan').style.display = 'block';
            } else { 
                document.getElementById('detailTambahan').style.display = 'none';
            }
        });
    </script>
    <script type="text/javascript">
        $("#kadarDatangEmas").on("change",function() {
            var cekKadar = document.getElementById('kadarDatangEmas').value;
            if (cekKadar==null||cekKadar==0) {
                document.getElementById('hargaDatangEmas').disabled = false;
            } else { 
                document.getElementById('hargaDatangEmas').disabled = true;
                document.getElementById('hargaDatangEmas').value = 0;
            }
            console.log(cekKadar);
        });

        $("#hargaDatangEmas").on("change",function() {
            var cekHarga = document.getElementById('hargaDatangEmas').value;
            if (cekHarga==null||cekHarga==0||cekHarga=='Rp'||cekHarga=='Rp 0') {
                document.getElementById('kadarDatangEmas').disabled = false;
            } else { 
                document.getElementById('kadarDatangEmas').disabled = true;
                document.getElementById('kadarDatangEmas').value = 0;
            }
            console.log(cekHarga);
        });
    </script>
</body>

</html>
