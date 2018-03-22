<?php 
  $idPO=$dataPO[0]->idPO;
  if($this->input->post('is_submitted')){
        $namaCustomer           = set_value('namaCustomer');
        $nomorTelepon           = set_value('nomorTelepon');
        $idSalesPerson          = set_value('idSalesPerson');
        $tanggalMasuk           = set_value('tanggalMasuk');
        $tanggalEstimasiPenyelesaian = set_value('tanggalEstimasiPenyelesaian');
        $nomorPO                = set_value('nomorPO');
        $jenisProduk            = set_value('jenisProduk');
        $bahan                  = set_value('bahan');
        $kadarBahan             = set_value('kadarBahan');
        $hargaBahan             = set_value('hargaBahan');      
        $datangEmas             = set_value('datangEmas');
        $hargaDatangEmas        = set_value('hargaDatangEmas');      
        $namaBatu               = set_value('namaBatu');
        $beratBatu              = set_value('beratBatu');
        $ukuranJari             = set_value('ukuranJari');
        $berlian                = set_value('berlian');
        $upah                   = set_value('upah');
        $tipeIkatan             = set_value('tipeIkatan');
        $metode                 = set_value('metode');
        $krumWarna              = set_value('krumWarna');      
        $model                  = set_value('model');
        $kuantitas              = set_value('kuantitas');
        $harga             = set_value('harga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $kodeProduk             = set_value('kodeProduk');
  }
  else {
        $namaCustomer           = $dataPO[0]->namaCustomer;
        $nomorTelepon           = $dataPO[0]->nomorTelepon;
        $idSalesPerson          = $dataPO[0]->idSalesPerson;
        $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
        $tanggalEstimasiPenyelesaian = $dataPO[0]->tanggalEstimasiPenyelesaian;
        $nomorPO                = $dataPO[0]->nomorPO;
        $jenisProduk            = $dataPO[0]->jenisProduk;
        $bahan                  = $dataPO[0]->bahan;
        $kadarBahan             = $dataPO[0]->kadarBahan;
        $hargaBahan             = $dataPO[0]->hargaBahan;      
        $datangEmas             = $dataPO[0]->datangEmas;
        $hargaDatangEmas        = $dataPO[0]->hargaDatangEmas;      
        $namaBatu               = $dataPO[0]->namaBatu;
        $beratBatu              = $dataPO[0]->beratBatu;
        $ukuranJari             = $dataPO[0]->ukuranJari;
        $berlian                = $dataPO[0]->berlian;
        $upah                   = $dataPO[0]->upah;
        $tipeIkatan             = $dataPO[0]->tipeIkatan;
        $metode                 = $dataPO[0]->metode;
        $krumWarna              = $dataPO[0]->krumWarna;      
        $model                  = $dataPO[0]->model;
        $kuantitas              = $dataPO[0]->kuantitas;
        $harga                  = $dataPO[0]->harga;      
        $panjar                 = $dataPO[0]->panjar;
        $idProduk               = $dataPO[0]->idProduk;
        $idCustomer             = $dataPO[0]->idCustomer;
        $kodeProduk             = $dataPO[0]->kodeProduk;
  }
  $tglmsk = new DateTime($tanggalMasuk);
  $tglmsk = $tglmsk->format("Y-m-d");
  $tglpyl = new DateTime($tanggalEstimasiPenyelesaian);
  $tglpyl = $tglpyl->format("Y-m-d");
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
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order</a>
                        </li>
                        <li class="active">
                            <strong>Edit Purchase Order</strong>
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
                            <h5>Edit Purchase Order <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/updatePO/'.$idPO,'class="form-horizontal"')?>
                                <input type="hidden" name="idCustomer" class="form-control" value="<?= $idCustomer ?>">
                                <input type="hidden" name="idProduk" class="form-control" value="<?= $idProduk ?>">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" value="<?= $nomorPO ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?= $namaCustomer ?>" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?= $nomorTelepon ?>" required="">
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
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= $idSalesPerson; if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?= $tglmsk ?>" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?= $tglpyl ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kode Produk</label>
                                    <div class="col-sm-10"><input type="text" name="kodeProduk" placeholder="Misal: CLS 00010" class="form-control" value="<?= $kodeProduk ?>" readonly></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Produk <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Cincin"){?> checked="" <?php } ?> value="Cincin" name="jenisProduk"> <i></i> Cincin </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Liontin"){?> checked="" <?php } ?> value="Liontin" name="jenisProduk"> <i></i> Liontin </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Gelang"){?> checked="" <?php } ?> value="Gelang" name="jenisProduk"> <i></i> Gelang </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Anting"){?> checked="" <?php } ?> value="Anting" name="jenisProduk"> <i></i> Anting </label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Mainan Nama"){?> checked="" <?php } ?> value="Mainan Nama" name="jenisProduk"> <i></i> Mainan Nama </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$jenisProduk; if($a=="Cincin Kawin"){?> checked="" <?php } ?> value="Cincin Kawin" name="jenisProduk"> <i></i> Cincin Kawin </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bahan <br/><small class="text-navy">Custom elements</small></label>

                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan"> <i></i> Emas Kuning </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Swasa"){?> checked="" <?php } ?> value="Swasa" name="bahan"> <i></i> Swasa </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$bahan; if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="col-sm-5">
                                            <label class="col-sm-4 control-label">Kadar <br/></label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" name="kadarBahan" placeholder="%" value="<?= $kadarBahan ?>"  class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-sm-6">
                                            <label class="col-sm-12 control-label">Harga Pasaran <br/></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="/gr" name="hargaBahan" class="form-control" value="<?= $hargaBahan ?>" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Datang Emas</label>
                                    <div class="col-md-3"><input type="text" placeholder="gr" name="datangEmas" value="<?= $datangEmas ?>" class="form-control"></div>
                                    <label class="col-sm-3 control-label">Harga Datang Emas</label>
                                    <div class="col-md-4"><input type="text" placeholder="/gr" name="hargaDatangEmas" class="form-control" value="<?= $hargaDatangEmas ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Batu</label>
                                    <div class="col-md-3"><input type="text" placeholder="Nama Batu" name="namaBatu" class="form-control" value="<?= $namaBatu ?>"></div>
                                    <label class="col-sm-3 control-label">Berat Batu</label>
                                    <div class="col-md-4"><input type="text" placeholder="gr" name="beratBatu" class="form-control" value="<?= $beratBatu ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ukuran Jari</label>
                                    <div class="col-sm-10"><input type="text" name="ukuranJari" class="form-control" value="<?= $ukuranJari ?>" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Swarowski / Diamond</label>
                                    <div class="col-sm-10"><input type="text" name="berlian" class="form-control" value="<?= $berlian ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" name="upah" class="form-control" value="<?= $upah ?>" required=""></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipe Ikatan <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Bungkus"){?> checked="" <?php } ?> value="Bungkus" name="tipeIkatan"> <i></i> Bungkus </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Bungkus Kaku"){?> checked="" <?php } ?> value="Bungkus Kaku" name="tipeIkatan"> <i></i> Bungkus Kaku </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Tanam"){?> checked="" <?php } ?> value="Tanam" name="tipeIkatan"> <i></i> Tanam </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Kuku"){?> checked="" <?php } ?> value="Kuku" name="tipeIkatan"> <i></i> Kuku </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$tipeIkatan; if($a=="Mangkok Kuku"){?> checked="" <?php } ?> value="Mangkok Kuku" name="tipeIkatan"> <i></i> Mangkok Kuku </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Metode <br/><small class="text-navy">Pilih salah satu</small></label>

                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Design"){?> checked="" <?php } ?> value="Design" name="metode"> <i></i> Design </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Manual"){?> checked="" <?php } ?> value="Manual" name="metode"> <i></i> Manual </label></div>
                                    </div>
                                    <div class="col-sm-6" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="radio" <?php $a=$metode; if($a=="Inject"){?> checked="" <?php } ?> value="Inject" name="metode"> <i></i> Inject </label></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Krum Warna</label>
                                    <div class="col-sm-10"><input type="text" name="krumWarna" class="form-control" value="<?= $krumWarna; ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                    <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?= $model; ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kuantitas</label>
                                    <div class="col-sm-10"><input type="number" name="kuantitas" class="form-control" value="<?= $kuantitas; ?>" required=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Sampel</label>
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url();?>uploads/gambarProduk/<?php echo $dataPO[0]->kodeGambar?>-cust.jpg" height="100 px">
                                    </div>
                                    <div class="col-sm-7">
                                        <label>Upload Gambar Baru (.JPG)</label>                
                                        <input type="file" name="userfile">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Harga Cincin</label>
                                    <div class="col-sm-10"><input type="text" name="harga" class="form-control" value="<?= $harga; ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" name="panjar" class="form-control" value="<?= $panjar; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a href="<?php echo base_url();?>user/purchaseOrder" class="btn btn-white">Cancel</a>
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
</body>

</html>
