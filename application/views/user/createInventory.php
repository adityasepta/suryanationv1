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

    <script>
    function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Produk Jadi"){
            var optionArray = [<?php for ($i=0; $i < count($produkJadi); $i++) {
                                    if ($i!=count($produkJadi)-1) {  
                                    echo '"'.$produkJadi[$i]->kodeProduk.'|'.$produkJadi[$i]->namaProduk.'",';
                                    }
                                    else {
                                    echo '"'.$produkJadi[$i]->kodeProduk.'|'.$produkJadi[$i]->namaProduk.'"';
                                    }}
                                ?>];
        } else if(s1.value == "Material Dasar"){
            var optionArray = [<?php for ($i=0; $i < count($materialDasar); $i++) {
                                    if ($i!=count($materialDasar)-1) {  
                                    echo '"'.$materialDasar[$i]->kodeMaterial.'|'.$materialDasar[$i]->namaMaterial.'",';
                                    }
                                    else {
                                    echo '"'.$materialDasar[$i]->kodeMaterial.'|'.$materialDasar[$i]->namaMaterial.'"';
                                    }}
                                ?>];
        } else if(s1.value == 'NULL'){
            var optionArray = ['|-Pilih salah satu-'];
        }

        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
    </script>

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
                    <div class="ibox-content">
                        <h2>Stok Emas yang anda bawa <?php echo $stok[0]->tot ?> Gram</h2>
                    </div>
                    <br>
                </div>
            </div>

            <!-- Stok Opname -->
            <div class="row" id="opname" style="display: none;">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang | <?php echo $pergerakan['tipePergerakan']?></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createInventory')?>
                                <div class="form-group">
                                    <input type="hidden" name="tipePergerakan" value="<?php echo $pergerakan['tipePergerakan']?>" class="form-control">
                                    <input type="hidden" placeholder="Rp" name="hargaBeli" class="form-control" value="0">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tipe Barang</label>
                                                <select class="form-control" id="slct1" name="tipeBarang" onchange="populate(this.id,'slct2')">
                                                    <option value='NULL'>-Pilih salah satu-</option>
                                                    <option value="Material Dasar">Material Dasar</option>
                                                    <option value="Produk Jadi">Produk Jadi</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Barang</label>
                                                <select class="form-control" id="slct2" name="kodeBarang">
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Jumlah</label>
                                                <input type="number" step="any" onchange="handleChange(this);" name="jumlah" placeholder="Jumlah Barang Masuk" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Tipe Barang</label>
                                                <select class="form-control" name="satuan">
                                                    <option value="gr">Gram</option>
                                                    <option value="cr">Carat</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Jenis Pergerakan Barang</label>
                                                <select class="form-control" name="jenisPergerakanBarang">
                                                    <option value="IN">BARANG MASUK</option>
                                                    <option value="OUT">BARANG KELUAR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pilih PIC</label>
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
                                            <!-- <div class="col-md-6">
                                                <label>Harga Beli</label>
                                                <input type="text" placeholder="Rp" name="hargaBeli" class="form-control good" value="<?php echo set_value('hargaBeli'); ?>">
                                            </div> -->
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

            <!-- Transaksi dan Produk Jadi -->
            <div class="row" id="transaksi" style="display: none;">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang | <?php echo $pergerakan['tipePergerakan']?></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createInventory')?>
                                <div class="form-group">
                                    <input type="hidden" name="tipePergerakan" value="<?php echo $pergerakan['tipePergerakan']?>" class="form-control">
                                    <input type="hidden" name="tipeBarang" value="Produk Jadi" class="form-control">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Barang</label>
                                                <select class="form-control" id="slct2" name="kodeBarang">
                                                    <?php for ($i=0; $i < count($produkJadi) ; $i++) { ?> 
                                                        <option value="<?php echo $produkJadi[$i]->kodeProduk ?>"><?php echo $produkJadi[$i]->namaProduk ?></option>
                                                    <?php } ?> 
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jumlah</label>
                                                <input type="number" name="jumlah" step="any" onchange="handleChange(this);" placeholder="Jumlah Barang Masuk" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Satuan</label>
                                                <select class="form-control" name="satuan">
                                                    <option value="gr">Gram</option>
                                                    <option value="cr">Carat</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pilih PIC</label>
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
                                            <div class="col-md-6">
                                                <label>Jenis Pergerakan Barang</label>
                                                <select class="form-control" name="jenisPergerakanBarang">
                                                    <option value="IN">BARANG MASUK</option>
                                                    <option value="OUT">BARANG KELUAR</option>
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
                                                <input type="text" placeholder="Rp" name="hargaBeli" class="form-control good" value="<?php echo set_value('hargaBeli'); ?>">
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

            <!-- Balik Abu dan Balik Bahan -->
            <div class="row" id="balik" style="display: none;">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang | <?php echo $pergerakan['tipePergerakan']?></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <div class="row">
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>Nama Pegawai:</dt> <dd> <?php echo $user[0]->nama;?></dd>
                                        <dt>Jabatan:</dt> <dd> <?php echo $user[0]->jabatan;?></dd>
                                    </dl>
                                </div>
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>Jenis Produksi:</dt> <dd> <?php echo $pergerakan['jenisProduksi'] ?></dd>
                                    </dl>
                                </div>
                                <hr>
                            </div>
                            <?php echo form_open_multipart('user/tambahRekap','class="form-horizontal"')?>
                                <input type="hidden" name="idPIC" value="<?php echo $user[0]->idUser;?>" class="form-control">
                                <input type="hidden" name="jenisProduksi" value="<?php echo  $pergerakan['jenisProduksi'];?>" class="form-control">
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Barang</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="kodeBarang">
                                            <?php for ($i=0; $i < count($materialDasar) ; $i++) { ?> 
                                                <option value="<?php echo $materialDasar[$i]->kodeMaterial ?>"><?php echo $materialDasar[$i]->namaMaterial ?></option>
                                            <?php } ?> 
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label">Berat Kembalian</label>
                                    <div class="col-sm-4"><input type="text" placeholder="gr" name="beratKembali" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pilih SPK</label>  
                                    <div class="col-lg-10">
                                        <?php $b=count($listSPK); for ($i=0; $i < $b ; $i++) { ?> 
                                            <?php 

                                              $tglmsk = new DateTime($listSPK[$i]->RealisasiEndDate);
                                              $tglmsk->modify('+'.$i.' day');
                                              $tglmsk1 = $tglmsk->format("Y-m-d");

                                            ?>
                                            <div class="col-md-3">
                                                <div class="i-checks"><label><input type="checkbox" value="<?php echo $listSPK[$i]->idProProd?>" checked name="idProProd[]"><i></i> <?php echo $listSPK[$i]->nomorFaktur; echo ' - '; echo $tglmsk1;?></label></div>
                                            </div>
                                        <?php } ?>
                                    </div>                         
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                                
                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Transfer Material -->
            <div class="row" id="transfer" style="display: none;">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang | <?php echo $pergerakan['tipePergerakan'] ?></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createInventoryTransfer')?>
                                <div class="form-group">
                                    <input type="hidden" name="tipePergerakan" value="<?php echo $pergerakan['tipePergerakan']?>" class="form-control">
                                    <input type="hidden" name="tipeBarang" value="Material Dasar" class="form-control">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Barang</label>
                                                <select class="form-control" id="slct2" name="kodeBarang">
                                                    <?php for ($i=0; $i < count($materialDasar) ; $i++) { ?> 
                                                        <option value="<?php echo $materialDasar[$i]->kodeMaterial ?>"><?php echo $materialDasar[$i]->namaMaterial ?></option>
                                                    <?php } ?> 
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jumlah</label>
                                                <input type="number" name="jumlah" step="any" onchange="handleChange(this);" placeholder="Jumlah Barang Masuk" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Satuan</label>
                                                <select class="form-control" name="satuan">
                                                    <option value="gr">Gram</option>
                                                    <option value="cr">Carat</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pengirim</label>
                                                <h3><?php echo $this->session->userdata['logged_in']['nama']?> </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Pilih Penerima</label>
                                                <div id="idPIC" class="selectpicker" data-live="true">
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
                                                    <input type="hidden" name="idPIC" value="0" required="">
                                                </div>
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


            <!-- Beli Material -->
            <div class="row" id="beli" style="display: none;">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pergerakan Barang | <?php echo $pergerakan['tipePergerakan'] ?></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createInventory')?>
                                <div class="form-group">
                                    <input type="hidden" name="tipePergerakan" value="<?php echo $pergerakan['tipePergerakan']?>" class="form-control">
                                    <input type="hidden" name="idUser" value="<?php echo $this->session->userdata['logged_in']['iduser']?>" class="form-control">
                                    <input type="hidden" name="tipeBarang" value="Material Dasar" class="form-control">
                                    <input type="hidden" name="jenisPergerakanBarang" value="IN" class="form-control">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Barang</label>
                                                <select class="form-control" id="slct2" name="kodeBarang">
                                                    <?php for ($i=0; $i < count($materialDasar) ; $i++) { ?> 
                                                        <option value="<?php echo $materialDasar[$i]->kodeMaterial ?>"><?php echo $materialDasar[$i]->namaMaterial ?></option>
                                                    <?php } ?> 
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jumlah</label>
                                                <input type="number" name="jumlah" step="any" placeholder="Jumlah Barang Masuk" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Satuan</label>
                                                <select class="form-control" name="satuan">
                                                    <option value="gr">Gram</option>
                                                    <option value="cr">Carat</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>PIC</label>
                                                <h3><?php echo $this->session->userdata['logged_in']['nama']?> </h3>
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>

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
        $(document).ready(function () {
            var tipePergerakan = "<?php echo $pergerakan['tipePergerakan'] ?>";
            if (tipePergerakan=='Transfer Material') {
                document.getElementById('opname').style.display = 'none';
                document.getElementById('balik').style.display = 'none';
                document.getElementById('transaksi').style.display = 'none';
                document.getElementById('transfer').style.display = 'block';
                document.getElementById('beli').style.display = 'none';
            } else if (tipePergerakan=='Produk Jadi' || tipePergerakan=='Transaksi') {
                document.getElementById('opname').style.display = 'none';
                document.getElementById('balik').style.display = 'none';
                document.getElementById('transaksi').style.display = 'block';
                document.getElementById('transfer').style.display = 'none';
                document.getElementById('beli').style.display = 'none';
            } else if (tipePergerakan=='Balik Abu' || tipePergerakan=='Balik Bahan') {
                document.getElementById('opname').style.display = 'none';
                document.getElementById('balik').style.display = 'block';
                document.getElementById('transaksi').style.display = 'none';
                document.getElementById('transfer').style.display = 'none';
                document.getElementById('beli').style.display = 'none';
            } else if (tipePergerakan=='Beli Material') {
                document.getElementById('opname').style.display = 'none';
                document.getElementById('balik').style.display = 'none';
                document.getElementById('transaksi').style.display = 'none';
                document.getElementById('transfer').style.display = 'none';
                document.getElementById('beli').style.display = 'block';
            } else {
                document.getElementById('opname').style.display = 'block';
                document.getElementById('balik').style.display = 'none';
                document.getElementById('transaksi').style.display = 'none';
                document.getElementById('transfer').style.display = 'none';
                document.getElementById('beli').style.display = 'none';
            }
        });
    </script>
    <script>
      function handleChange(input) {
        if (input.value < 0) input.value = 0;
        if (input.value >  <?php echo $stok[0]->tot?>) {
            input.value = <?php echo $stok[0]->tot?>;
            alert("Stok emas tidak memenuhi");
        }
      }
    </script>
</body>

</html>
