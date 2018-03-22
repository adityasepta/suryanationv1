<?php 
  $idPO=$dataPO[0]->idPO;
  $nomorFaktur=2001;
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
        $kuantitas              = set_value('kuantitas');
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
        $idCustomer             = $dataPO[0]->idCustomer;
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
                    <?php echo form_open_multipart('user/tambahSPKService/'.$nomorPO,'class="form-horizontal"')?>
                    <div class="ibox  float-e-margins">
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
                            
                        </div>
                    </div>

                    <div class="ibox  float-e-margins">
                        <div class="ibox-title">
                            <h5>Buat SPK <small>Isi semua data yang dibutuhkan.</small></h5>
                            
                        </div>
                        <div class="ibox-content">
                                <div class="form-group"><label class="col-sm-2 control-label">Nomor Faktur</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Nomor Faktur" name="nomorFaktur" value="<?php echo set_value('nomorFaktur') ?>" class="form-control" required>
                                    <?php if(count($spkTerakhir)>0) { ?>
                                    <small>Nomor SPK terakhir yang digunakan adalah <strong> <?php echo $spkTerakhir[0]->nomorFaktur; ?></strong></small>
                                    <?php } ?>
                                    </div>
                                </div>
                                <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                <div class="form-group"><label class="col-sm-2 control-label">Durasi</label>
                                    <div class="col-sm-3"><select id="idSalesPerson" class="form-control"  name="durasi">
                                        <option value="2">2 Jam</option>
                                        <option value="4">3-4 Jam</option>
                                        <option value="5">5 Jam</option>
                                        <option value="24">1 Hari</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 10px;">
                                    <div class="col-sm-4">
                                        <label class="control-label">Pilih Aktivitas</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="control-label">Tanggal Mulai</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="control-label">Tanggal Berakhir</label>
                                    </div>
                                </div>
                                <?php 

                                ?>
                                <?php $b=count($aktivitas); for ($i=0; $i < $b ; $i++) { ?> 
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="i-checks"><label><input type="checkbox" value="<?php echo $i?>" checked name="nomorAktivitas[]"><i></i>  <?php echo $aktivitas[$i]->namaAktivitas?></label></div>
                                            <input class="form-control" type="hidden" value="<?php echo $aktivitas[$i]->idAktivitas?>" name="idAktivitas[]">   
                                        </div>
                                        <div class="col-sm-4">
                                            <?php 

                                              $tglmsk = new DateTime($tanggalMasuk);
                                              $tglmsk1 = $tglmsk->format("Y-m-d h:m");
                                              $tahun = $tglmsk->format("Y");
                                              $bulan = $tglmsk->format("m");
                                              $hari = $tglmsk->format("d");
                                              $jam = $tglmsk->format("h");
                                              $menit = $tglmsk->format("m");
                                              $tanggal = $tahun.'-'.$bulan.'-'.$hari.'T'.$jam.':'.$menit;

                                              ?>
                                            <input class="form-control" type="datetime-local" value="<?php echo $tanggal ?>" name="startDate[]">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="datetime-local" value="<?php echo $tanggal ?>" name="endDate[]">
                                        </div>
                                    </div>
                                <?php } ?>
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
