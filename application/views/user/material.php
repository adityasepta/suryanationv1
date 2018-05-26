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
                                <strong>Material Dasar</strong>
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
                                <h5>Material Dasar</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createMaterial">
                                        <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH MATERIAL DASAR</strong></span></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                       placeholder="Search in table">
                                <div class="table-responsive">
                                <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th class="text-center">Kadar Lokal</th>
                                        
                                        <th  class="text-center">Safety Stock</th>
                                        <th  class="text-center">Kategori</th>
                                        <th  class="text-center">Asal</th>
                                        <th  class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($material as $p) : 
                                            $stokk = 0;
                                            for($i=0;$i<count($pergerakan);$i++) {
                                                if($p->kodeMaterial==$pergerakan[$i]->kodeBarang) {
                                                    if($pergerakan[$i]->jenisPergerakanBarang=='IN') {
                                                        $stokk=$stokk+$pergerakan[$i]->jumlah;
                                                    }
                                                    else {
                                                        $stokk=$stokk-$pergerakan[$i]->jumlah;   
                                                    }
                                                }
                                            }

                                        ?>
                                        <tr>
                                            <td><?php echo $p->namaMaterial?></td>
                                            <td class="text-center"><?php echo $p->kadar?> %</td>
                                            
                                            <td class="text-center"><?php echo $p->safetyStock.'&nbsp'.$p->satuan?></td>
                                            <td class="text-center"><?php echo $p->kategori?></td>
                                            <td class="text-center"><?php echo $p->asal?></td>
                                            <td class="text-center"><!-- Button trigger modal -->
                                                <div class="btn-group">
                                                            <a href="<?php echo base_url()?>user/editMaterial/<?php echo $p->idMaterial?>" class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="<?php echo base_url()?>user/deleteMaterial/<?php echo $p->idMaterial?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus material ini?')">Hapus</a></td>
                                                </div>
                                         </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="8">
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
            $('.footable2').footable();

        });

    </script>
</body>

</html>
