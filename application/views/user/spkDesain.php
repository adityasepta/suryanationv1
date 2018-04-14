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
                    
                    
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tambah Desain <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            
                            
                                

                                <div class="row">
                                    <div class="col-sm-6 ">

                                        
                                        
                                            <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-d1.jpg')?>"><br><br>
                                        
                                        
                                        
                                    </div>
                                    <div class="col-sm-6">

                                        <?php echo form_open_multipart('user/uploadDesain','class="form-horizontal"')?>

                                        <input type="hidden"  name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                        <input type="hidden"  name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                        <input type="hidden"  name="kodeProduk" value="<?= $kodeProduk ?>" class="form-control">
                                        <input type="hidden"  name="nomorFaktur" value="<?= $nomorFaktur ?>" class="form-control">

                                        <label>Upload Gambar Desain</label>        
                                        <br>
                                        <small class="text-danger">Upload maksimal 6 MB, tipe file jpg</small>
                                        <br><br>
                                        <input type="file" required name="userfile[]">
                                        <br><br>
                                        <label>Keterangan Tambahan Desain</label>
                                        <input name="keterangan" placeholder="ex : Jumlah Batu Zikron = 30 pcs, Ukuran Batu = 3 mm" required="" class="form-control input-lg" value="<?php echo $dataSPK[0]->keteranganDesain?>"></input>
                                        
                                        <br><br>
                                        <button class="btn btn-sm btn-default" type="submit">Upload Gambar Desain</button>
                                        <a class="btn btn-sm btn-info" href="<?php echo base_url('user/invoice/'.$nomorFaktur)?>" >Detil SPK</a>
                                        <hr>
                                        <?php echo form_close()?>

                                        <?php echo form_open_multipart('user/uploadThumbnail','class="form-horizontal"')?>

                                        <input type="hidden"  name="idCustomer" value="<?= $idCustomer ?>" class="form-control">
                                        <input type="hidden"  name="idProduk" value="<?= $idProduk ?>" class="form-control">
                                        <input type="hidden"  name="kodeProduk" value="<?= $kodeProduk ?>" class="form-control">
                                        <input type="hidden"  name="nomorFaktur" value="<?= $nomorFaktur ?>" class="form-control">

                                        
                                        <label>Upload Thumbnail</label>        
                                        <br>
                                        <small class="text-danger">Upload maksimal 2 MB, tipe file jpg - Rasio Gambar 1:1 ( Square )</small>
                                        <br><br>
                                        <div class="row ">
                                            <div class="col-lg-4">
                                                <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-thumb.jpg')?>"><br><br>
                                            </div>
                                        </div>

                                        <input type="file" required name="thumb"><br>
                                        <button <?php if($dataSPK[0]->PICDesain == 0) { echo 'disabled'; } ?> class="btn btn-sm btn-default" type="submit">Upload Thumbnail</button>
                                        <a class="btn btn-sm btn-info" href="<?php echo base_url('user/spk')?>" >Kembali</a>
                                        <?php echo form_close()?>
                                    </div>


                                </div>
                           
                                

                            
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
