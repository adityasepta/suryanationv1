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
    <!-- Morris -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <!-- FooTable -->
    <link href="<?php echo base_url();?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">

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
                        <li class="active">
                            <a href="<?php echo base_url();?>user"><strong>Beranda</strong></a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Stok Emas Murni</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 style="font-size: 40px; color: #f7af0c"><strong><?php echo round($stokEmas[0]->jumlah,2)?></strong></h1>
                            <medium>Gram</medium>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Total Berat Tempahan yang Hilang</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 style="font-size: 40px; color: #00000""><strong><?php echo $jumlahHilang;?></strong></h1>
                            <medium>Gram</medium>
                            <br><br>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#detailBeratHilang">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Total Berat Massal yang Hilang</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 style="font-size: 40px; color: #00000""><strong><?php echo $jumlahHilangMassal;?></strong></h1>
                            <medium>Gram</medium>
                            <br><br>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#detailBeratHilangMassal">Lihat</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Jenis Produk Jadi</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="text-navy" style="font-size: 40px;"><strong><?php echo count($produk);?></strong></h1>
                            <medium>Item</medium>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Barang Masuk</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="text-navy" style="font-size: 40px; color: #d61b15"><strong><?php echo $barangMasuk[0]->jumlah?></strong></h1>
                            <medium>Item</medium>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title text-center">
                            <h5>Barang Keluar</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h1 class="text-navy" style="font-size: 40px; color: #1488d6"><strong><?php echo $barangKeluar[0]->jumlah?></strong></h1>
                            <medium>Item</medium>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>10 Stok Terbanyak Material Dasar</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="stok-per-tipe"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="ibox-content">
                            <h2>LOW STOCK ITEMS</h2>
                            <small>Item yang memiliki stok dibawah normal</small>
                            <ul class="todo-list m-t">
                                <?php foreach ($material as $m) : ?>
                                    <?php if ($m->stokMaterial < $m->safetyStock || $m->stokMaterial == $m->safetyStock) { ?>
                                    <li>
                                        <span class="m-l-xs"><?php echo $m->namaMaterial?></span>
                                        <small class="label label-danger">
                                            <i class="fa fa-bar-chart"></i><?php echo $m->stokMaterial. '&nbsp'.$m->satuan ?>
                                        </small>
                                    </li> 
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Stok Barang Per Orang</h5>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="5" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Weny</th>
                                    <th>Mutia</th>
                                    <th>Ertin</th>
                                    <th>Susanti</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($tanggal2); $i++) { ?>
                                        <?php $tanggal = new DateTime($tanggal2[$i]->tanggal);
                                        $tanggal = $tanggal->format("d M Y"); ?>    
                                        <tr>
                                            <td><?php echo $tanggal?></td>
                                            <?php $g=0; for ($j=0; $j < count($st); $j++) { 
                                                if ($st[$j]->tanggal==$tanggal2[$i]->tanggal AND $st[$j]->idPIC==9) {
                                                    if($st[$j]->jenis == 'IN') {
                                                        $g += (float)$st[$j]->lokal;
                                                     } else {
                                                        $g -= (float)$st[$j]->lokal;
                                                     }
                                                }
                                            }?>
                                            <td><?php echo round($g,2);?> gr</td>
                                            <?php $g=0; for ($j=0; $j < count($st); $j++) { 
                                                if ($st[$j]->tanggal==$tanggal2[$i]->tanggal AND $st[$j]->idPIC==1) {
                                                    if($st[$j]->jenis == 'IN') {
                                                        $g += (float)$st[$j]->lokal;
                                                     } else {
                                                        $g -= (float)$st[$j]->lokal;
                                                     }
                                                }
                                            }?>
                                            <td><?php echo round($g,2);?> gr</td>
                                            <?php $g=0; for ($j=0; $j < count($st); $j++) { 
                                                if ($st[$j]->tanggal==$tanggal2[$i]->tanggal AND $st[$j]->idPIC==2) {
                                                    if($st[$j]->jenis == 'IN') {
                                                        $g += (float)$st[$j]->lokal;
                                                     } else {
                                                        $g -= (float)$st[$j]->lokal;
                                                     }
                                                }
                                            }?>
                                            <td><?php echo round($g,2);?> gr</td>
                                            <?php $g=0; for ($j=0; $j < count($st); $j++) { 
                                                if ($st[$j]->tanggal==$tanggal2[$i]->tanggal AND $st[$j]->idPIC==19) {
                                                    if($st[$j]->jenis == 'IN') {
                                                        $g += (float)$st[$j]->lokal;
                                                     } else {
                                                        $g -= (float)$st[$j]->lokal;
                                                     }
                                                }
                                            }?>
                                            <td><?php echo round($g,2);?> gr</td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Stok Barang Per Orang</h5>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="5" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Berat Emas Lokal</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($pic); $i++) { ?>    
                                        <tr>
                                            <td><?php echo $pic[$i]->tanggal?></td>
                                            <td><?php echo $pic[$i]->nama?></td>
                                            <?php $g=0; for ($j=0; $j < count($st); $j++) { 
                                                if(($pic[$i]->tanggal==$st[$j]->tanggal) AND ($pic[$i]->idPIC==$st[$j]->idPIC)) {
                                                    if($st[$j]->jenis == 'IN') {
                                                        $g += (float)$st[$j]->lokal;
                                                     } else {
                                                        $g -= (float)$st[$j]->lokal;
                                                     }
                                                }
                                            }?>
                                            <td><?php echo round($g,2)?> gr</td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Stok Material Dasar</h5>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="5" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Kode Material</th>
                                    <th>Nama Material</th>
                                    <th>Stok Material</th>
                                    <th>Safety Stock</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($material as $p) : ?>
                                    <tr>
                                        <td><?php echo $p->kodeMaterial?></td>
                                        <td><?php echo $p->namaMaterial?></td>
                                        <td><?php echo $p->stokMaterial.'&nbsp'.$p->satuan?></td>
                                        <td><?php echo $p->safetyStock.'&nbsp'.$p->satuan?></td>
                                        <td><?php if ($p->stokMaterial>$p->safetyStock) { ?>
                                                    <small class="label label-primary">Aman</small>
                                            <?php } else { ?>
                                                    <small class="label label-danger">Segera Tambah Stok</small>
                                            <?php } ?>
                                        </td>
                                     </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
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
        <!-- Modal -->
        <div class="modal inmodal fade" id="detailBeratHilangMassal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title">Detail Berat Tempahan Hilang</h3><br>
                        <br>
                    </div>
                    <div class="modal-body">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Detail Berat Hilang</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Keterangan</th>
                                                        <th class="text-center">Kehilangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Cor</td>
                                                        <td class="text-center"><?php echo $beratMassal6.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Gosok Pentol</td>
                                                        <td class="text-center"><?php echo $beratMassal7.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Gosok</td>
                                                        <td class="text-center"><?php echo $beratMassal8.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Boom</td>
                                                        <td class="text-center"><?php echo $beratMassal9.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Pasang CZ</td>
                                                        <td class="text-center"><?php echo $beratMassal10.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Polish</td>
                                                        <td class="text-center"><?php echo $beratMassal11.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Sleb</td>
                                                        <td class="text-center"><?php echo $beratMassal12.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Krum</td>
                                                        <td class="text-center"><?php echo $beratMassal13.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Selesai</td>
                                                        <td class="text-center"><?php echo $beratMassal14.' gram';?></td>     
                                                    </tr>
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


    <div class="modal inmodal fade" id="detailBeratHilang" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title">Detail Berat Massal Hilang</h3><br>
                        <br>
                    </div>
                    <div class="modal-body">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Detail Berat Hilang</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Keterangan</th>
                                                        <th class="text-center">Kehilangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Cor</td>
                                                        <td class="text-center"><?php echo $berat6.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Gosok</td>
                                                        <td class="text-center"><?php echo $berat7.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Boom</td>
                                                        <td class="text-center"><?php echo $berat8.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Pasang CZ</td>
                                                        <td class="text-center"><?php echo $berat9.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Polish</td>
                                                        <td class="text-center"><?php echo $berat10.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Sleb</td>
                                                        <td class="text-center"><?php echo $berat11.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Krum</td>
                                                        <td class="text-center"><?php echo $berat12.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Pasang Batu Tengah</td>
                                                        <td class="text-center"><?php echo $berat13.' gram';?></td>      
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Aktivitas Selesai</td>
                                                        <td class="text-center"><?php echo $berat14.' gram';?></td>     
                                                    </tr>
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

    <!-- Morris -->
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.js"></script>
    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>

    <script type="text/javascript">
        Morris.Bar({
        element: 'stok-per-tipe',
        data: [
        <?php for ($i = 0; $i < count($material2); $i++) { ?>
        {y: '<?php echo $material[$i]->namaMaterial?>', a: <?php echo $material[$i]->stokMaterial?>},
        <?php } ?>
      ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Score',],
        hideHover: 'auto',
        ymax: 1000,
        resize: true,
        gridTextSize:'10px',
        gridTextFamily:'open sans',
        xLabelAngle: 0,
        barColors: function (row, series, type) {
        console.log("--> "+row.label, series, type);
        <?php 
        $warna = array('#65a56a','#95c48b','#bbe098','#fcd58d','#fcd58d','#fcd58d','#fcd58d','#E84A5F','#E84A5F','#d1273e');
        for ($i = 0; $i < count($material2); $i++) { ?>
        return <?php echo "'".$warna[$i]."'"?>;
        <?php } ?>
        }

        });
    </script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script
</body>

</html>
