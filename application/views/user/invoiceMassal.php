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
        $nama                   = set_value('nama');
        $idCustomer             = set_value('idCustomer');
        $tipeCustomer           = set_value('tipeCustomer');      
        $pekerjaanTambahan      = set_value('pekerjaanTambahan');
        $keteranganTambahan     = set_value('keteranganTambahan');
        $keteranganKrum         = set_value('keteranganKrum');
        $kodeGambar             = set_value('kodeGambar');
        $namaProduk             = set_value('namaProduk');
        $beratAkhir             = set_value('beratAkhir');
        $kadarDatangEmas        = set_value('kadarDatangEmas'); 
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
        $ukuranJari             = $dataSPK[0]->ukuranJari;
        $krumWarna              = $dataSPK[0]->krumWarna;      
        $model                  = $dataSPK[0]->model;
        $totalHarga             = $dataSPK[0]->totalHarga;      
        $panjar                 = $dataSPK[0]->panjar;
        $idProduk               = $dataSPK[0]->idProduk;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $kodeProduk             = $dataSPK[0]->kodeProduk;
        $nama                   = $dataSPK[0]->nama;
        $idCustomer             = $dataSPK[0]->idCustomer;
        $tipeCustomer           = $dataSPK[0]->tipeCustomer;      
        $pekerjaanTambahan      = $dataSPK[0]->pekerjaanTambahan;
        $keteranganTambahan     = $dataSPK[0]->keteranganTambahan;
        $keteranganKrum         = $dataSPK[0]->keteranganKrum;
        $kodeGambar             = $dataSPK[0]->kodeGambar;
        $namaProduk             = $dataSPK[0]->namaProduk;
        $beratAkhir             = $dataSPK[0]->beratAkhir;
        $kadarDatangEmas        = $dataSPK[0]->kadarDatangEmas; 
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
                <div class="col-lg-8">
                    <h2>Detail SPK</h2>
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

                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <a href="<?php echo base_url()?>user/printSPKMassal/<?php echo $nomorFaktur?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print SPK</a>
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
                                    <div class="col-lg-6" id="cluster_info">
                                        <dl class="dl-horizontal" >
                                            <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                            <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                            <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                            <dt>Berat Yang Diinginkan:</dt> <dd><a href="#" class="text-navy"><?php echo $beratAkhir?></a></dd>
                                            <dt>Datang Emas:</dt> <dd>  <?php echo $datangEmas?></dd>
                                            <dt>Kadar Datang Emas:</dt> <dd>  <?php echo $kadarDatangEmas?></dd>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Track Proses Produksi</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row" >
                                        <div class="col-sm-12 table-responsive">
                                            <table data-page-size="8" class=" footable table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">IDS</th>
                                                        <th class="text-center">IDW</th>
                                                        <th class="text-center">IDA</th>
                                                        <th class="text-center">Aktivitas</th>
                                                        <th class="text-center">PIC</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Tambahan</th>                                  
                                                        <th class="text-center">Jumlah Awal</th>
                                                        <th class="text-center">Jumlah Akhir</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for($i = 0; $i < count($tr); ++$i) {?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $tr[$i]->idSubSPK?></td>
                                                            <td class="text-center"><?php echo $tr[$i]->idWadah?></td>
                                                            <td class="text-center"><?php echo $tr[$i]->idWadahAsal?></td>
                                                            <td class="text-center"><?php echo $tr[$i]->namaAktivitas?></td>
                                                            <td class="text-center"><?php echo $tr[$i]->nama ?></td>
                                                            <td class="text-center"><?php echo $tr[$i]->beratAwal?> gr</td>
                                                            <td class="text-center"><?php echo $tr[$i]->berat?> gr</td>
                                                            <td class="text-center"><?php echo $tr[$i]->beratTambahan?> gr</td>                                  
                                                            <td class="text-center"><?php echo $tr[$i]->jumlah ?> pcs</td>
                                                            <td class="text-center"><?php echo $tr[$i]->jumlahNow ?> pcs</td>
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
                                                                        <?php echo form_open('user/editProduksi')?>
                                                                        <div class="row">
                                                                            <div class="col-lg-6 text-left">
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

                                                                                    <label class="col-sm-6 control-label">Jumlah Barang Awal ( pcs )</label>

                                                                                    <div class="col-sm-6">
                                                                                        <input value="<?php echo $tr[$i]->jumlah ?>" type="number" step="any" name="jumlah" required min="0"  max=""  class="form-control">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">

                                                                                    <label class="col-sm-6 control-label">Jumlah Barang Terkini ( pcs )</label>

                                                                                    <div class="col-sm-6">
                                                                                        <input value="<?php echo $tr[$i]->jumlahNow ?>" type="number" step="any" name="jumlahNow" required min="0"  max=""  class="form-control">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">

                                                                                    <label class="col-sm-6 control-label">Tanggal Dimulai</label>

                                                                                    <div class="col-sm-6">
                                                                                        <input value="<?php echo $tr[$i]->tglmsk ?>" type="date" name="tglmsk" required max=""  class="form-control">
                                                                                        
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
                                                                                    <div class="form-group">

                                                                                        <label class="col-sm-6 control-label">Tanggal Selesai</label>

                                                                                        <div class="col-sm-6">
                                                                                            <input value="<?php echo $tr[$i]->tglend ?>" type="date" name="tglend" required max=""  class="form-control">
                                                                                            
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

                                                                    <?php echo form_close() ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>

                                                <tfoot>
                                                <tr>
                                                    <td colspan="12">
                                                        <ul class="pagination pull-right"></ul>
                                                    </td>
                                                </tr>
                                                </tfoot>


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
                                    <h5>Track Proses Produksi</h5>
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
                                                        <th class="text-center">Jumlah Barang</th>
                                                        <th class="text-center">Jumlah Sub SPK</th>
                                                        <th class="text-center">Jumlah Wadah</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php for($p = 0; $p < count($rkp); ++$p) {
                                                            if($rkp[$p]->idAktivitas > 0){
                                                        ?>

                                                        <tr>
                                                            <td class="text-center"><?php echo $rkp[$p]->namaAktivitas?></td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->beratAwal,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->berat,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->kembali,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->beratTambahan,2);?> gr</td>
                                                            <td class="text-center"><?php echo round($rkp[$p]->susut,2);?> gr</td>
                                                            <td class="text-center"><?php echo $rkp[$p]->jumlah?> pcs</td>
                                                            <td class="text-center"><?php echo $rkp[$p]->jmlsub?> item</td>
                                                            <td class="text-center"><?php echo $rkp[$p]->jmlwadah?> item</td>
                                                        </tr>

                                                    <?php }} ?>
                                                    
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
                                            </table>
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
                                                                        <?php echo form_open('User/editJadwal')?>
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
                                    <div class="col-lg-12">
                                        <h5>Daftar Sub SPK dan Wadah Terkait</h5>
                                    </div>
                                   
                                </div>
                                <div class="ibox-content">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Bahan</th>
                                                    <th class="text-center">Stock Awal</th>
                                                    <th class="text-center">Jumlah</th>
                                                    <th class="text-center">Stock Akhir</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <?php $cbr=0; for ($j=0; $j < count($stokbom) ; $j++) { 
                                                 ?>

                                                <tr>
                                                    <td><?php echo $stokbom[$j]->idSubSPK?></td>
                                                    <td><?php echo $stokbom[$j]->namaMaterial?></td>
                                                    <td class="text-center"><?php echo $stokbom[$j]->stok?> gr</td>
                                                    <td class="text-center"><?php echo $stokbom[$j]->jml?> gr</td>
                                                    <td class="text-center"><?php echo $stokbom[$j]->stokakhir?> gr</td>
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
                                                    <td class="text-center">
                                                        <?php if ($stokbom[$j]->status !== 'Disetujui') { ?>
                                                            <a class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?')"  href="<?php echo base_url('user/hapusmaterial/'.$stokbom[$j]->idBOM.'/massal/'.$nomorFaktur)?>">Hapus</a>
                                                        <?php } else {?>
                                                            <a class="btn btn-xs btn-danger" disabled href="">Hapus</a>
                                                        <?php } ?>
                                                        
                                                    </td>
                                                </tr>

                                            <?php }?>
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

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>

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

        <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="row"><br><div class="col-lg-4"><input class="form-control" type="number" placeholder="berat" required name="berat[]"/></div><div class="col-lg-4"><input class="form-control" placeholder="jumlah" required type="number" name="jumlah[]"/></div><a href="#" class="btn btn-danger remove_field">Hapus</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })

        });

    </script>   
</body>

</html>
