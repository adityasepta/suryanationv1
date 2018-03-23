<?php 
  $idPO=$dataPO[0]->idPO;
  if($this->input->post('is_submitted')){
        $namaCustomer           = set_value('namaCustomer');
        $nomorTelepon           = set_value('nomorTelepon');
        $idSalesPerson        = set_value('idSalesPerson');
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
        $beratAkhir             = set_value('beratAkhir');
        $totalHarga             = set_value('totalHarga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $kodeProduk             = set_value('kodeProduk');
  }
  else {
        $namaCustomer           = $dataPO[0]->namaCustomer;
        $nomorTelepon           = $dataPO[0]->nomorTelepon;
        $idSalesPerson        = $dataPO[0]->idSalesPerson;
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
        $beratAkhir             = $dataPO[0]->beratAkhir;
        $totalHarga             = $dataPO[0]->totalHarga;      
        $panjar                 = $dataPO[0]->panjar;
        $harga                 = $dataPO[0]->harga;
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
                    <h2>Buat SPK</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Surat Perintah Kerja</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Surat Perintah Kerja</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo form_open_multipart('user/tambahSPKMasal','class="form-horizontal"')?>
                    <div class="ibox collapsed float-e-margins">
                        <div class="ibox-title">
                            <h5>Detil Purchase Order</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            
                                <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                <input type="hidden" placeholder="ID Produk" name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                <input type="hidden" placeholder="Nomor PO" name="nomorPO" value="<?= $nomorPO ?>" class="form-control">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nomor PO</label>
                                                <h5 class="text-muted"><?php echo $nomorPO?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nama Konsumen</label>
                                                <h5 class="text-muted"><?php echo $namaCustomer?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <h5 class="text-muted"><?php echo $tglmsk;?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Sales Person</label>
                                                <h5 class="text-muted"><?php echo $dataPO[0]->nama?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nomor Telepon</label>
                                                <h5 class="text-muted"><?php echo $nomorTelepon?></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <h5 class="text-muted"><?php echo $tglpyl?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2">Jenis Produk</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $jenisProduk?></label>
                                    </div>
                                    <label class="col-sm-2">Bahan</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $bahan?></label>
                                    </div>
                                    <label class="col-sm-2">Tipe Ikatan</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $tipeIkatan?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Kadar</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $kadarBahan . "%"?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Pasaran</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted pull-left">: Rp. <?php echo number_format($hargaBahan,2,".","."); ?></label>
                                    </div>
                                    <label class="col-sm-2">Metode</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $metode?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2">Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $datangEmas?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: Rp. <?php echo number_format($hargaDatangEmas,2,".","."); ?></label>
                                    </div>
                                    <label class="col-sm-2">Krum Warna</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $krumWarna?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Nama Batu</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $namaBatu?></label>
                                    </div>
                                    <label class="col-sm-2">Berat Batu</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $beratBatu?></label>
                                    </div>
                                    <label class="col-sm-2">Model</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $model?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">Ukuran Jari</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $ukuranJari?></label>
                                    </div>
                                    <label class="col-sm-2">Swarowskri / Diamond</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $berlian?></label>
                                    </div>
                                    <label class="col-sm-2">Berat Akhir</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $beratAkhir?></label>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2">Foto Sampel</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo base_url();?>uploads/gambarProduk/<?php echo $dataPO[0]->kodeGambar?>-cust.jpg" height="100 px">
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                    <div class="ibox  float-e-margins">
                        <div class="ibox-title">
                            <h5>Buat SPK <small>Isi semua data yang dibutuhkan.</small></h5>
                            
                        </div>
                        <div class="ibox-content">
                                <div class="form-group"><label class="col-sm-2 control-label">Nomor Faktur</label>
                                    <?php if(count($spkTerakhir)>0) { ?>
                                    <small>Nomor SPK terakhir yang digunakan adalah <strong> <?php echo $spkTerakhir[0]->nomorFaktur; ?></strong></small>
                                    <?php $spkNow =  $spkTerakhir[0]->nomorFaktur+1; } else { $spkNow = 1; } ?>
                                    <div class="col-sm-10"><input type="text" placeholder="Nomor Faktur" name="nomorFaktur" value="<?php echo $spkNow ?>" class="form-control" readonly>
                                   <small class="text-danger"><?php echo form_error('nomorFaktur'); ?></small>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>PIC Desain</label>
                                                <select id="picdesain" class="form-control"  name="picdesain">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>"><?php echo $pegawai[$i]->nama?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Prioritas</label>
                                                <select id="prioritas" class="form-control"  name="prioritas">
                                                    <option value="1">Rendah</option>
                                                    <option value="2">Sedang</option>
                                                    <option value="3">Tinggi</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-12 pull-right">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                            
                        </div>
                    </div>
                    <?php echo form_close()?>
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
