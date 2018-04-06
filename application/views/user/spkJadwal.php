<?php 
  $idPO=$dataSPK[0]->idPO;
  $nomorFaktur=$dataSPK[0]->nomorFaktur;
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
        $totalHarga             = set_value('totalHarga');      
        $panjar                 = set_value('panjar');
        $idProduk               = set_value('idProduk');
        $idCustomer             = set_value('idCustomer');
        $idSPK                  = set_value('idSPK');
        $kodeGambar             = set_value('kodeGambar');
    
        $batuTerhadapKruman     = set_value('batuTerhadapKruman');
        $batuTerhadapPukulan    = set_value('batuTerhadapPukulan');
        $batuTerhadapGoresan    = set_value('batuTerhadapGoresan');
        $keadaanBatuTengah      = set_value('keadaanBatuTengah');
  }
  else {
        $namaCustomer           = $dataSPK[0]->namaCustomer;
        $nomorTelepon           = $dataSPK[0]->nomorTelepon;
        $idSalesPerson          = $dataSPK[0]->idSalesPerson;
        $tanggalMasuk           = $dataSPK[0]->tanggalMasuk;
        $tanggalEstimasiPenyelesaian = $dataSPK[0]->tanggalEstimasiPenyelesaian;
        $nomorPO                = $dataSPK[0]->nomorPO;
        $jenisProduk            = $dataSPK[0]->jenisProduk;
        $bahan                  = $dataSPK[0]->bahan;
        $kadarBahan             = $dataSPK[0]->kadarBahan;
        $hargaBahan             = $dataSPK[0]->hargaBahan;      
        $datangEmas             = $dataSPK[0]->datangEmas;
        $hargaDatangEmas        = $dataSPK[0]->hargaDatangEmas;      
        $namaBatu               = $dataSPK[0]->namaBatu;
        $beratBatu              = $dataSPK[0]->beratBatu;
        $ukuranJari             = $dataSPK[0]->ukuranJari;
        $berlian                = $dataSPK[0]->berlian;
        $upah                   = $dataSPK[0]->upah;
        $tipeIkatan             = $dataSPK[0]->tipeIkatan;
        $metode                 = $dataSPK[0]->metode;
        $krumWarna              = $dataSPK[0]->krumWarna;      
        $model                  = $dataSPK[0]->model;
        $kuantitas              = $dataSPK[0]->kuantitas;
        $totalHarga             = $dataSPK[0]->totalHarga;      
        $panjar                 = $dataSPK[0]->panjar;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $idSPK                  = $dataSPK[0]->idSPK;
        $nama                   = $dataSPK[0]->nama;
        $kodeGambar             = $dataSPK[0]->kodeGambar;
        
        $datangBerlian          = $dataSPK[0]->datangBerlian;      
        $jumlahDatangBerlian    = $dataSPK[0]->jumlahDatangBerlian;
        $batuZirkon             = $dataSPK[0]->batuZirkon;      
        $jumlahBatuZirkon       = $dataSPK[0]->jumlahBatuZirkon;
        $kadarDatangEmas        = $dataSPK[0]->kadarDatangEmas;
        $beratBerlian           = $dataSPK[0]->beratBerlian;
        $keteranganKrum         = $dataSPK[0]->keteranganKrum;
        $namaProduk             = $dataSPK[0]->namaProduk;
        $tipeCustomer           = $dataSPK[0]->tipeCustomer; 
        $batuTerhadapKruman     = $dataSPK[0]->batuTerhadapKruman;
        $batuTerhadapPukulan    = $dataSPK[0]->batuTerhadapPukulan;
        $batuTerhadapGoresan    = $dataSPK[0]->batuTerhadapGoresan;
        $keadaanBatuTengah      = $dataSPK[0]->keadaanBatuTengah;
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
                    <div class="ibox float-e-margins collapsed">
                        <div class="ibox-title">
                            <h5>Detil SPK</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="<?php echo base_url()?>user/printSPKTempahan/<?php echo $nomorFaktur?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print SPK</a>
                                        <h2><?php echo $namaProduk ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 125px;">
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal">
                                        <dt>Nama Konsumen:</dt> <dd> <?php echo $namaCustomer ?></dd>
                                        <dt>Nomor Telepon:</dt> <dd> <?php echo $nomorTelepon ?></dd>
                                        <dt>Nomor PO:</dt> <dd><a href="#" class="text-navy"> <?php echo $nomorPO ?></a> </dd>
                                        <dt>Sales Person:</dt> <dd> <?php echo $dataSPK[0]->nama?> </dd>
                                    </dl>
                                    <dl class="dl-horizontal" >
                                        <dt>Tanggal Terima:</dt> <dd><?php echo $tglmsk;?></dd>
                                        <dt>Estimasi Penyelesaian:</dt> <dd>  <?php echo $tglpyl?></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Detail Produk</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Kode Produk:</dt>  <dd><a href="#" class="text-navy"> <?php echo $kodeProduk ?> </a></dd>
                                                <dt>Jenis Produk:</dt> <dd> <?php echo $jenisProduk ?></dd>
                                                <dt>Bahan:</dt> <dd> <?php echo $bahan ?> </dd>
                                                <dt>Kadar Bahan:</dt> <dd> <?php echo $kadarBahan?> </dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Tipe Ikatan:</dt>  <dd> <?php echo $tipeIkatan ?> </dd>
                                                <dt>Metode:</dt> <dd> <?php echo $metode?> </dd>
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Kuantitas:</dt> <dd><a href="#" class="text-navy"><?php echo $kuantitas?></a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt id="namaBatu">Nama Batu Permata:</dt> <dd id="namaBatu1"> <?php echo $namaBatu?></dd>
                                                <dt id="beratBatu">Berat Batu Permata:</dt> <dd id="beratBatu1"><?php echo $beratBatu?></dd>
                                                <dt id="berlian">Berlian:</dt> <dd id="berlian1">  <?php echo $berlian?></dd>
                                                <dt id="beratBerlian">Berat Berlian:</dt> <dd id="beratBerlian1">  <?php echo $beratBerlian?></dd>
                                                <dt id="batuZirkon">Batu Zirkon:</dt> <dd id="batuZirkon1">  <?php echo $batuZirkon?></dd>
                                                <dt id="jumlahBatuZirkon">Jumlah Batu Zirkon:</dt> <dd id="jumlahBatuZirkon1">  <?php echo $jumlahBatuZirkon?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt id="datangEmas">Datang Emas:</dt> <dd id="datangEmas1">  <?php echo $datangEmas?></dd>
                                                <dt id="kadarDatangEmas">Kadar Datang Emas:</dt> <dd id="kadarDatangEmas1">  <?php echo $kadarDatangEmas?></dd>
                                                <dt id="datangBerlian">Datang Berlian:</dt> <dd id="datangBerlian1">  <?php echo $datangBerlian?></dd>
                                                <dt id="jumlahDatangBerlian">Jumlah Datang Berlian:</dt> <dd id="jumlahDatangBerlian1">  <?php echo $jumlahDatangBerlian?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal" id="namaBatu2">
                                                <dt>Batu Terhadap Kruman:</dt>  <dd> <?php echo $batuTerhadapKruman ?> </dd>
                                                <dt>Batu Terhadap Pukulan:</dt> <dd> <?php echo $batuTerhadapPukulan ?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" id="namaBatu3">
                                                <dt>Batu Terhadap Goresan:</dt> <dd> <?php echo $batuTerhadapGoresan?> </dd>
                                                <dt>Keadaan Batu Tengah:</dt> <dd>  <?php echo $keadaanBatuTengah?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Rencana Penjadwalan <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <!-- <form method="get" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>user/tambahPO"> -->
                            <?php echo form_open_multipart('user/uploadJadwal','class="form-horizontal"')?>
                                <input type="hidden" placeholder="ID Konsumen" name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                <input type="hidden" placeholder="ID Produk" name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                <input type="hidden" placeholder="Kode Produk" name="kodeProduk" value="<?= $kodeProduk ?>" class="form-control">
                                <input type="hidden" placeholder="Kode Produk" name="idSPK" value="<?= $idSPK ?>" class="form-control">
                                
                                <div class="form-group col-lg-12">
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
                                              $tglmsk->modify('+'.$i.' day');
                                              $tglmsk1 = $tglmsk->format("Y-m-d");

                                              ?>
                                            <input class="form-control" type="date" value="<?php echo $tglmsk1 ?>" name="startDate[]">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" value="<?php echo $tglmsk1 ?>" name="endDate[]">
                                        </div>
                                    </div>
                                <?php } ?>
                                
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

                var a = <?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>;
                if(a==null||a==0){
                    document.getElementById('namaBatu').style.display = 'none';
                    document.getElementById('namaBatu1').style.display = 'none';
                    document.getElementById('namaBatu2').style.display = 'none';
                    document.getElementById('namaBatu3').style.display = 'none';
                };

                var b = <?php echo $beratBatu?>;
                if(b==null||b==0){
                    document.getElementById('beratBatu').style.display = 'none';
                    document.getElementById('beratBatu1').style.display = 'none';
                };

                var c = <?php if($berlian!=null){echo $berlian;} else echo 0;?>;
                if(c==null||c==0){
                    document.getElementById('berlian').style.display = 'none';
                    document.getElementById('berlian1').style.display = 'none';
                };

                var d = <?php echo $beratBerlian?>;
                if(d==null||d==0){
                    document.getElementById('beratBerlian').style.display = 'none';
                    document.getElementById('beratBerlian1').style.display = 'none';
                };

                var e = <?php if($batuZirkon!=null){echo $batuZirkon;} else echo 0;?>;
                if(e==null||e==0){
                    document.getElementById('batuZirkon').style.display = 'none';
                    document.getElementById('batuZirkon1').style.display = 'none';
                };

                var f = <?php echo $jumlahBatuZirkon?>;
                if(f==null||f==0){
                    document.getElementById('jumlahBatuZirkon').style.display = 'none';
                    document.getElementById('jumlahBatuZirkon1').style.display = 'none';
                };

                var g = <?php echo $datangEmas?>;
                if(g==null||g==0){
                    document.getElementById('datangEmas').style.display = 'none';
                    document.getElementById('datangEmas1').style.display = 'none';
                };

                var h = <?php echo $kadarDatangEmas?>;
                if(h==null||h==0){
                    document.getElementById('kadarDatangEmas').style.display = 'none';
                    document.getElementById('kadarDatangEmas1').style.display = 'none';
                };

                var i = <?php if($datangBerlian!=null){echo $datangBerlian;} else echo 0;?>;
                if(i==null||i==0){
                    document.getElementById('datangBerlian').style.display = 'none';
                    document.getElementById('datangBerlian1').style.display = 'none';
                };

                var j = <?php echo $jumlahDatangBerlian?>;
                if(j==null||j==0){
                    document.getElementById('jumlahDatangBerlian').style.display = 'none';
                    document.getElementById('jumlahDatangBerlian1').style.display = 'none';
                };
            });
        </script>
</body>

</html>
