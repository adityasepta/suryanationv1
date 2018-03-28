<?php 
  $idPO=$dataSPK[0]->idPO;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
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
        $ukuranJari             = set_value('ukuranJari');
        $metode                 = set_value('metode');
        $krumWarna              = set_value('krumWarna');      
        $model                  = set_value('model');
        $totalHarga             = set_value('totalHarga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $kodeProduk             = set_value('kodeProduk');
        $nama             = set_value('nama');
  }
  else {
        $namaCustomer           = $dataSPK[0]->namaCustomer;
        $nomorTelepon           = $dataSPK[0]->nomorTelepon;
        $idSalesPerson        = $dataSPK[0]->idSalesPerson;
        $tanggalMasuk           = $dataSPK[0]->tanggalMasuk;
        $tanggalEstimasiPenyelesaian = $dataSPK[0]->tanggalEstimasiPenyelesaian;
        $nomorPO                = $dataSPK[0]->nomorPO;
        $jenisProduk            = $dataSPK[0]->jenisProduk;
        $bahan                  = $dataSPK[0]->bahan;
        $kadarBahan             = $dataSPK[0]->kadarBahan;
        $hargaBahan             = $dataSPK[0]->hargaBahan;      
        $datangEmas             = $dataSPK[0]->datangEmas;
        $hargaDatangEmas        = $dataSPK[0]->hargaDatangEmas;
        $ukuranJari             = $dataSPK[0]->ukuranJari;
        $metode                 = $dataSPK[0]->metode;
        $krumWarna              = $dataSPK[0]->krumWarna;      
        $model                  = $dataSPK[0]->model;
        $kuantitas              = $dataSPK[0]->beratAkhir;
        $totalHarga             = $dataSPK[0]->totalHarga;      
        $panjar                 = $dataSPK[0]->panjar;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $nama             = $dataSPK[0]->nama;
  }

  $tglmsk = new DateTime($tanggalMasuk);
  $tglmsk = $tglmsk->format("d F Y");
  $tglpyl = new DateTime($tanggalEstimasiPenyelesaian);
  $tglpyl = $tglpyl->format("d F Y");
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
            <!-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang.</span>
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
                <div class="col-lg-8">
                    <h2>Detil SPK</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong><a href="<?php echo base_url();?>user/Invoice">Detil SPK</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <!-- <a href="invoice_print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a> -->
                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Detil SPK</h5>
                        </div>
                        <div class="ibox-content">

                                <div class="row">
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nomor Faktur</label>
                                                <h5 class="text-muted"><?php echo $nomorFaktur?></h5>
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Sales Person</label>
                                                <h5 class="text-muted"><?php echo $nama?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="row">
                                    <label class="col-sm-2">Jenis Produk</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $jenisProduk?></label>
                                    </div>
                                    <label class="col-sm-2">Bahan</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $bahan?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2">Kadar</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $kadarBahan . "%"?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Pasaran</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted pull-left">: Rp. <?php echo number_format($hargaBahan,2,".","."); ?></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2">Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $datangEmas?></label>
                                    </div>
                                    <label class="col-sm-2">Harga Datang Emas</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: Rp. <?php echo number_format($hargaDatangEmas,2,".","."); ?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2">Ukuran Jari</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: <?php echo $ukuranJari?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2">Krum Warna</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $krumWarna?></label>
                                    </div>
                                    <label class="col-sm-2">Model</label>
                                    <div class="col-sm-2">
                                        <label class="text-muted">: <?php echo $model?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2">Kuantitas</label>
                                    <div class="col-sm-10">
                                        <label class="text-muted">: <?php echo $kuantitas?></label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="row">
                                    <label class="col-sm-2">Foto Sampel</label>
                                    <div class="col-sm-2">
                                        <img class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" src="<?php echo base_url();?>uploads/gambarProduk/<?php echo $dataSPK[0]->kodeGambar?>-cust.jpg" height="100 px">
                                    </div>
                                </div>
                             
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                           <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Rencana Produksi</h5>
                                </div>
                                <div class="ibox-content">

                                    <div class="row" >
                                        <div class="col-sm-12 text-center">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Aktivitas</th>
                                                        <th class="text-center">Tanggal Mulai</th>
                                                        <th class="text-center">Tanggal Selesai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for ($i=0; $i < count($jadwal); ++$i) { ?>

                                                        <tr>
                                                            <td class="text-center"><?php echo ($i+1)?></td>
                                                            <td><?php echo $jadwal[$i]->namaAktivitas?></td>
                                                            <td class="text-center"><?php echo $jadwal[$i]->sd?></td>
                                                            <td class="text-center"><?php echo $jadwal[$i]->ed?></td>
                                                        </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <?php 


                                            ?>
                                            
                                        </div>
                                    </div>

                                </div>

                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <div class="col-lg-12">
                                        <h5>Daftar Sub SPK dan Wadah Terkait</h5>
                                    </div>
                                   
                                </div>
                                <div class="ibox-content">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID Sub SPK</th>
                                                <th class="text-center">ID Wadah</th>
                                                <th class="text-center">Status BOM</th>
                                                <th class="text-center">Aktivitas</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php for ($i=0; $i < count($isi); $i++) { ?>
                                                
                                                <tr>
                                                    <td class="text-center"><?php echo $isi[$i]->idSubSPK?></td>
                                                    <td class="text-center"><?php echo $isi[$i]->idWadah?></td>
                                                    <td class="text-center">
                                                        <button data-toggle="modal" data-dismiss="modal" data-target="#bom<?php echo $isi[$i]->idSubSPK ?>"  class="btn btn-xs btn-info">Lihat BOM</button>
                                                        <div class="modal inmodal fade" id="bom<?php echo $isi[$i]->idSubSPK ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">

                                                                        <table class="table table-responsive table-hover">
                                                                            <thead>
                                                                                
                                                                                    <tr>
                                                      
                                                                                        <th>Bahan</th>
                                                                                        <th class="text-center">Stock Awal</th>
                                                                                        <th class="text-center">Jumlah</th>
                                                                                        <th class="text-center">Stock Akhir</th>
                                                                                        <th class="text-center">Status</th>
                                                                                    </tr>
                                                                                
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php $cbr=0; for ($j=0; $j < count($stokbom) ; $j++) { 
                                                                                    if($stokbom[$j]->idSubSPK == $isi[$i]->idSubSPK) { ?>

                                                                                    <tr>
                                                                                        <td><?php echo $stokbom[$j]->namaMaterial?></td>
                                                                                        <td class="text-center"><?php echo $stokbom[$j]->stok?> gram</td>
                                                                                        <td class="text-center"><?php echo $stokbom[$j]->jml?> gram</td>
                                                                                        <td class="text-center"><?php echo $stokbom[$j]->stokakhir?> gram</td>
                                                                                        <td class="text-center">
                                                                                            <?php 
                                                                                                
                                                                                                 if((float)$stokbom[$j]->stokakhir < (float)$stokbom[$j]->ss) { ?>
                                                                                                    <span class="fa fa-warning text-warning"></span>
                                                                                                <?php $cbr++; }
                                                                                                else { ?> 
                                                                                                    <span class="fa fa-check text-success"></span>
                                                                                                <?php } 
                                                                                                    
                                                                                            ?>
                                                                                        </td>
                                                                                    </tr>

                                                                                <?php }}?>
                                                                            </tbody>
                                                                        </table>

                                                                        <?php if($cbr > 0) {?>

                                                                            <div class="alert alert-danger">
                                                                                Terdapat material yang dibawah safety stock.
                                                                            </div>

                                                                        <?php } ?>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-center"><?php echo $isi[$i]->namaAktivitas?></td>
                                                </tr>

                                            <?php }?>
                                            
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <small >*pastikan semua wadah telah selesai dan tidak ada di kanban massal</small><br><br>

                                            <?php if($cf[0]->jml == '0'){ ?>
                                                <a href="<?php echo base_url('User/finish3/'.$dataSPK[0]->idSPK)?>" class="btn btn-block btn-success btn-lg" href="">Finish SPK</a>
                                            <?php } else {?>
                                            <a class="btn btn-block btn-success btn-lg" disabled href="">Finish SPK</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                           
                                </div>



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
