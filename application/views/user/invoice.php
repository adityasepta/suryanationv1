<?php 
    $nomorFaktur            = $dataSPK[0]->nomorFaktur;
    $idPO                   = $dataSPK[0]->idPO;
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
    $harga                  = $dataSPK[0]->hargaJual;      
    $panjar                 = $dataSPK[0]->panjar;
    $idProduk               = $dataSPK[0]->idProduk;
    $idCustomer             = $dataSPK[0]->idCustomer;
    $kodeProduk             = $dataSPK[0]->kodeProduk;
    $totalHarga             = $dataSPK[0]->totalHarga;
    $namaProduk             = $dataSPK[0]->namaProduk;
    $kadarDatangEmas        = $dataSPK[0]->kadarDatangEmas;
    $datangBerlian          = $dataSPK[0]->datangBerlian;      
    $jumlahDatangBerlian    = $dataSPK[0]->jumlahDatangBerlian;
    $upahPasangBerlian      = $dataSPK[0]->upahPasangBerlian;
    $tipeCustomer           = $dataSPK[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataSPK[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataSPK[0]->keteranganTambahan;
    $biayaTambahan          = $dataSPK[0]->biayaTambahan;
    $beratBerlian           = $dataSPK[0]->beratBerlian;
    $hargaBerlian           = $dataSPK[0]->hargaBerlian;
    $batuZirkon             = $dataSPK[0]->batuZirkon;      
    $jumlahBatuZirkon       = $dataSPK[0]->jumlahBatuZirkon;
    $hargaBatuZirkon        = $dataSPK[0]->hargaBatuZirkon;
    $hargaKrumWarna         = $dataSPK[0]->hargaKrumWarna;
    $keteranganKrum         = $dataSPK[0]->keteranganKrum;
    $budget                 = $dataSPK[0]->budget;
    $kodeGambar             = $dataSPK[0]->kodeGambar;
    
    $batuTerhadapKruman     = $dataSPK[0]->batuTerhadapKruman;
    $batuTerhadapPukulan    = $dataSPK[0]->batuTerhadapPukulan;
    $batuTerhadapGoresan    = $dataSPK[0]->batuTerhadapGoresan;
    $keadaanBatuTengah      = $dataSPK[0]->keadaanBatuTengah;
    $tglmsk     = new DateTime($tanggalMasuk);
    $tglmsk     = $tglmsk->format("d F Y");
    $tglpyl     = new DateTime($tanggalEstimasiPenyelesaian);
    $tglpyl     = $tglpyl->format("d F Y");
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
                <div class="col-lg-8">
                    <h2>Detail SPK</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong><a href="<?php echo base_url();?>user/Invoice">Detail SPK</a></strong>
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
                <div class="col-lg-9">
                    <div class="ibox">
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
                </div>
                <div class="col-lg-3">
                    <div class="ibox">
                        <div class="ibox-content text-right">
                            
                            <h4>Tipe Konsumen</h4>
                            <h2><?php echo $tipeCustomer ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Track Proses Produksi</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row" >
                                <div class="col-sm-12">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th class="text-center">Aktivitas</th>
                                                <th class="text-center">PIC</th>
                                                <th class="text-center">Berat Awal</th>
                                                <th class="text-center">Berat Akhir</th>
                                                <th class="text-center">Berat Tambahan</th>                                  
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i = 0; $i < count($tr); ++$i) {?>

                                                <tr>
                                                    
                                                    
                                                    <td class="text-center"><?php echo $tr[$i]->namaAktivitas?></td>
                                                    <td class="text-center"><?php echo $tr[$i]->nama ?></td>
                                                    <td class="text-center"><?php echo $tr[$i]->beratAwal?> gr</td>
                                                    <td class="text-center"><?php echo $tr[$i]->berat?> gr</td>
                                                    <td class="text-center"><?php echo $tr[$i]->beratTambahan?> gr</td>
                                                    <td class="text-center"><?php echo $tr[$i]->statusWork?></td>
                                                    <td class="text-center"><button data-toggle="modal" data-target="#edit<?php echo $tr[$i]->idProProd ?>"  class="btn btn-xs btn-default"><span class="fa fa-edit"></span></button></td>

                                                    <div class="modal inmodal fade" id="edit<?php echo $tr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                <h3 class="modal-title">Edit Informasi Produksi</h3><br>
                                                                <h4 class="text-muted"><em>pastikan diteliti kembali sebelum mengedit informasi produksi</em></h4>
                                                                <h4 class="text-success"><b><?php echo $tr[$i]->namaAktivitas?></b></h4>


                                                            </div>
                                                            <div class="modal-body">

                                                                <?php echo form_open('user/editProduksi2')?>
                                                                <div class="row">
                                                                 
                                                                    <div class="col-lg-6 text-left">
                                                                        <div class="form-horizontal">

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Pilih PIC</label>

                                                                                <div class="col-sm-9">

                                                                                    
                                                                                    <?php 

                                                                                    $js = array( 'class' => 'form-control');
                                                                                    echo form_dropdown('idPIC', $staf, $tr[$i]->idPIC,$js);

                                                                                    ?>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                         
                                                                            <div class="form-group">

                                                                                <label class="col-sm-6 control-label">Tanggal Dimulai</label>

                                                                                <div class="col-sm-6">
                                                                                    <input value="<?php echo $tr[$i]->tglmsk ?>" type="date" name="tglmsk" required max=""  class="form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">

                                                                                <label class="col-sm-6 control-label">Tanggal Dimulai</label>

                                                                                <div class="col-sm-6">
                                                                                    <input value="<?php echo $tr[$i]->tglend ?>" type="date" name="tglend" required max=""  class="form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6 text-left">
                                                                        <div class="form-horizontal">

                                                                            <div class="form-group">

                                                                                <label class="col-sm-6 control-label">Berat Awal ( gr )</label>

                                                                                <div class="col-sm-6">
                                                                                    <input value="<?php echo $tr[$i]->beratAwal ?>" type="number" step="any" name="beratAwal" required min="0"  max=""  class="form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">

                                                                                <label class="col-sm-6 control-label">Berat Akhir ( gr )</label>

                                                                                <div class="col-sm-6">
                                                                                    <input value="<?php echo $tr[$i]->berat ?>" type="number" step="any" name="berat" required min="0"  max=""  class="form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">

                                                                                <label class="col-sm-6 control-label">Berat Tambahan ( gr )</label>

                                                                                <div class="col-sm-6">
                                                                                    <input value="<?php echo $tr[$i]->beratTambahan ?>" type="number" step="any" name="beratTambahan" required min="0"  max=""  class="form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-10">
                                                                        &nbsp
                                                                    </div>
                                                                    <div class="col-lg-2 text-right">
                                                                        <input type="hidden" value="<?php echo $tr[$i]->idProProd ?>" name="idProProd">
                                                                        <input type="hidden" value="<?php echo $nomorFaktur ?>" name="nomorFaktur">
                                                                        <button type="submit" class="btn btn-block btn-success pull-left ">Edit</button>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>

                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                        <div class="col-lg-12">
                           <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Rekap Berat Per Aktivitas</h5>
                                </div>
                                <div class="ibox-content">

                                    <div class="row" >
                                        <div class="col-sm-12 table-responsive">
                                            <table data-page-size="20" class=" footable table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Aktivitas</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Kembali</th>
                                                        <th class="text-center">Berat Tambahan</th>
                                                        <th class="text-center">Susut Awal</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $totalSusut=0; for($p = 0; $p < count($rkp); ++$p) {
                                                            if($rkp[$p]->idAktivitas != NULL){
                                                                $totalSusut=$totalSusut+$rkp[$p]->susut;
                                                        ?>

                                                        <tr>
                                                            <td class="text-center"><?php echo $rkp[$p]->namaAktivitas?></td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->beratAwal,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->berat,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->kembali,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->beratTambahan,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->susut,2);?> gr</td>
                                                        </tr>
                                                    <?php }} ?>
                                                        <tr>
                                                            <td colspan="5" class="text-center"><b>Total Susut</b></td>
                                                            <td colspan="1" class="text-center"><b><?php echo round($totalSusut,2);?> gr</b></td>
                                                        </tr>
                                                    
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
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
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < count($jadwal); ++$i) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo ($i+1)?></td>
                                                    <td><?php echo $jadwal[$i]->namaAktivitas?></td>
                                                    <td class="text-center"><?php echo $jadwal[$i]->sd?></td>
                                                    <td class="text-center"><?php echo $jadwal[$i]->ed?></td>
                                                    <td class="text-center"><button data-toggle="modal" data-target="#edit<?php echo $jadwal[$i]->idRencana ?>" class="btn btn-xs btn-info">Edit</button></td>
                                                </tr>

                                                <div class="modal inmodal fade" id="edit<?php echo $jadwal[$i]->idRencana ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                <h3 class="modal-title">Edit Tanggal Aktivitas</h3><br>
                                                                <h4 class="text-muted"><em><?php echo $jadwal[$i]->namaAktivitas?></em></h4>


                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <?php echo form_open('User/editJadwalTempahan')?>
                                                                    <div class="col-lg-6">
                                                                        <b>Tanggal Mulai</b><br><br>
                                                                        <input type="date" name="tglmsk" value="<?php echo $jadwal[$i]->tglmsk?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <b>Tanggal Selesai</b><br><br>
                                                                        <input type="date" name="tglend" value="<?php echo $jadwal[$i]->tglend?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <br><br>
                                                                        <input type="hidden" name="idRencana" value="<?php echo $jadwal[$i]->idRencana ?>" class="form-control">
                                                                        <input type="hidden" name="nomorFaktur" value="<?php echo $nomorFaktur ?>" class="form-control">
                                                                        <button class="btn btn-success btn-block">Simpan</button>
                                                                    </div>
                                                                    <?php echo form_close()?>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>

                        </div>

                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <div class="col-lg-6">
                                <h5>Bill of Material</h5>
                            </div>
                            <div class="col-lg-6 text-right">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Bahan</th>
                                        <th class="text-center">Stock Awal</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Stock Akhir</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cbr=0; if (isset($stokbom)) {?>
                                    <?php $cb = 0;  for($i = 0; $i < count($stokbom); ++$i) { ?>

                                        <tr>
                                            <td class="text-center"><?php echo ($i+1);?></td>
                                            <td><?php echo $stokbom[$i]->namaMaterial?></td>
                                            <td class="text-center"><?php echo number_format($stokbom[$i]->stok,2)?> gram</td>
                                            <td class="text-center"><?php echo number_format($stokbom[$i]->jml,2)?> gram</td>
                                            <td class="text-center"><?php echo number_format($stokbom[$i]->stokakhir,2)?> gram</td>
                                            <td class="text-center">
                                                <?php 
                                                    
                                                     if((float)$stokbom[$i]->stokakhir < (float)$stokbom[$i]->ss) { ?>
                                                        <span class="fa fa-warning text-warning"></span>
                                                    <?php $cbr++; }
                                                    else { ?> 
                                                        <span class="fa fa-check text-success"></span>
                                                    <?php } 
                                                        
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                    <?php } ?>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Desain Produk</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row" >
                                <div class="col-sm-12">
                                    
                                    <?php if($dataSPK[0]->statusDesain !== 'Proses Desain'    ) { ?>
                                    
                                        <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" class="img img-responsive" src="<?php echo base_url('uploads/gambarDesain/'.$dataSPK[0]->kodeGambar.'-d1.jpg')?>"><br><br>
                                    <?php } ?>        

                                         
                                    
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
