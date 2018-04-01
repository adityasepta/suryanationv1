<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Inventory</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- FooTable -->
    <link href="<?php echo base_url();?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">
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
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang Victoriavici.</span>
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
                <div class="col-lg-10">
                    <h2>Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Rekap Berat Tempahan</strong>
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
                            <h5>Rekap Berat SPK</h5>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Nomor Faktur</th>
                                    <th class="text-center">Nomor PO</th>
                                    <th class="text-center">Berat Awal</th>
                                    <th class="text-center">Berat Akhir</th>
                                    <th class="text-center">Berat Kembali</th>
                                    <th class="text-center">Kehilangan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <?php for ($j=0; $j < count($spk); $j++) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $spk[$j]->tglspk?></td>
                                                <td class="text-center"><?php echo $spk[$j]->nomorFaktur?></td>
                                                <td class="text-center"><?php echo $spk[$j]->nomorPO?></td>
                                                <?php 

                                                $ii=0; $oo=0; $bAwal=0; $bAkhir=0;$kembali=0; 

                                                for ($z=0; $z < count($b) ; ++$z) { 
                                                    if($b[$z]->idSPK == $spk[$j]->idSPK) {
                                                        if((int)$b[$z]->idAktivitas == 1007) { 
                                                            $ii=1;$bAwal=$b[$z]->beratAwal;
                                                        }
                                                        if((int)$b[$z]->idAktivitas == 1014) { 
                                                            $oo=1;$bAkhir=$b[$z]->berat;
                                                        }
                                                    $kembali = $kembali + $b[$z]->kembali;
                                                    }
                                                }
                                                
                                                if ($bAwal!=0 && $bAkhir!=0) {

                                                    $prosenHilang2 = round((($bAwal-$bAkhir-$kembali)/$bAwal * 100),2);
                                                    $beratHilang = round((($bAwal-$bAkhir-$kembali)),2);
                                                    $beratHilang = $beratHilang." gr || "; 
                                                    $prosenHilang = $prosenHilang2." %"; 
                                                
                                                } else { 

                                                    $prosenHilang="-";
                                                    $beratHilang=NULL;
                                                } ?>
                                                <td class="text-center">
                                                    
                                                    <?php if($ii==1) { 
                                                    
                                                        echo $bAwal." gr";
                                                    
                                                    } else {
                                                    
                                                        echo "-";
                                                    
                                                    } ?>
                                                            
                                                </td>
                                                <td class="text-center"><?php if($ii==1) { echo $bAkhir." gr";} else {echo "-";}?></td>
                                                <td class="text-center"><?php echo $kembali." gr"?></td>
                                                <td class="text-center"><?php echo $beratHilang.''.$prosenHilang?></td>
                                                <td class="text-center">
                                                    <?php if ($prosenHilang!='-') { 
                                                    if ($prosenHilang2 <= 3) { 
                                                    echo '<small class="label label-success">WIN</small>';}
                                                    else {
                                                    echo '<small class="label label-danger">LOSS</small>';} }
                                                    else {
                                                    echo '<small class="label label-warning">ON PROGRESS</small>';
                                                    }
                                                    ?>
                                                    <!--<?php if($spk[$j]->prioritas == '1') { echo "Rendah"; } ?>
                                                    <?php if($spk[$j]->prioritas == '2') { echo "Sedang"; } ?>
                                                    <?php if($spk[$j]->prioritas == '3') { echo "Tinggi"; } ?> -->       
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#detail<?php echo $spk[$j]->idSPK?>">Lihat</button>
                                                </td>
                                                
                                            </tr>
                                     <?php } ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="8">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <?php foreach ($spk as $p) : ?>
                                <!-- Modal -->
                                <div class="modal inmodal fade" id="detail<?php echo $p->idSPK?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h3 class="modal-title">Detail SPK</h3><br>
                                            <span >NOMOR FAKTUR : <b class="text-success"><?php echo $p->nomorFaktur?></b> | NOMOR PO : <b class="text-success"><?php echo $p->nomorPO?></b> | ID PRODUK : <b class="text-success"><?php echo $p->idProduk?></b> | ID CUSTOMER : <b class="text-success"><?php echo $p->idCustomer?></b> </span><br>
                                        </div>
                                        <div class="modal-body">

                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#tab-2-<?php echo $p->idSPK?>">Detail Berat Per Aktivitas</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-2-<?php echo $p->idSPK ?>" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <table class="table table-hover table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">Keterangan</th>
                                                                            <th class="text-center">Berat Awal</th>
                                                                            <th class="text-center">Berat Akhir</th>
                                                                            <th class="text-center">Berat Kembali</th>
                                                                            <th class="text-center">Kehilangan</th>
                                                                            <th class="text-center">Status</th>
                                                                            <th class="text-center">PIC</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                        <?php for ($z=0; $z < count($b) ; ++$z) { 
                                                                            if($b[$z]->idSPK == $p->idSPK) {
                                                                                if($b[$z]->berat) {
                                                                        ?>
                                                                        <tr>  
                                                                            <td class="text-center">Berat <?php echo $b[$z]->namaAktivitas ?></td>
                                                                                <?php  if ($b[$z]->namaAktivitas == 'Gosok' && $b[$z]->berat) {
                                                                                    $bAwal=(float) $b[$z]->beratAwal;
                                                                                    $bAkhir=(float) $b[$z]->berat;
                                                                                    $kembali=(float) $b[$z]->kembali;
                                                                                    $selisih = round($bAwal-$bAkhir-$kembali,2);
                                                                                    $prosen=round($selisih/$bAwal*100,2);
                                                                                    ?>
                                                                                    <td class="text-center"><?php echo $b[$z]->beratAwal." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->berat." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->kembali." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $selisih." gr || ".$prosen ?> %</td>
                                                                                    <?php if ($prosen <=3) { ?>
                                                                                        <td class="text-center"><?php echo '<small class="label label-success">WIN</small>' ?></td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-center"><?php echo '<small class="label label-danger">LOSS</small>' ?></td>
                                                                                    <?php } ?>
                                                                                <?php } else if ($b[$z]->berat) { 
                                                                                    $bAwal=(float) $b[$z]->beratAwal;
                                                                                    $bAkhir=(float) $b[$z]->berat;
                                                                                    $kembali=(float) $b[$z]->kembali;
                                                                                    $selisih = round($bAwal-$bAkhir-$kembali,2);
                                                                                    $prosen=round($selisih/$bAwal*100,2);
                                                                                    ?>
                                                                                    <td class="text-center"><?php echo $b[$z]->beratAwal." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->berat." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->kembali." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $selisih." gr || ".$prosen ?> %</td>
                                                                                    <?php if ($prosen <=3) { ?>
                                                                                        <td class="text-center"><?php echo '<small class="label label-success">WIN</small>' ?></td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-center"><?php echo '<small class="label label-danger">LOSS</small>' ?></td>
                                                                                    <?php } ?>
                                                                                <?php } else if ($b[$z]->namaAktivitas != 'Selesai' && !$b[$z+1]->berat) { ?>
                                                                                    <td class="text-center">-</td>
                                                                                    <td class="text-center">-</td>
                                                                                    <td class="text-center">-</td>
                                                                                    <td class="text-center">-</td>
                                                                                    <td class="text-center"><small class="label label-warning">ON PROGRESS</small></td>
                                                                                <?php } else {?>
                                                                                    <td class="text-center"><?php echo $b[$z]->beratAwal." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->berat." gr" ?></td>
                                                                                    <td class="text-center"><?php echo $b[$z]->kembali." gr" ?></td>
                                                                                    <td class="text-center"><?php echo "0 gr || 0 %" ?></td>
                                                                                    <td class="text-center"><?php echo '<small class="label label-primary">DONE</small>' ?></td>
                                                                                <?php } ?>
                                                                                <td class="text-center"><?php echo $b[$z]->nama?></td>

                                                                        </tr>
                                                                        <?php } else { ?>
                                                                            <tr>
                                                                                <td class="text-center">Berat <?php echo $b[$z]->namaAktivitas ?></td>
                                                                                <td class="text-center">-</td>
                                                                                <td class="text-center">-</td>
                                                                                <td class="text-center">-</td>
                                                                                <td class="text-center">-</td>
                                                                                <td class="text-center"><small class="label label-warning"></small></td>
                                                                                <td class="text-center"><?php echo $b[$z]->nama?></td>
                                                                            </tr>
                                                                        <?php }
                                                                            }} ?>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y')?>
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

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
</body>

</html>
