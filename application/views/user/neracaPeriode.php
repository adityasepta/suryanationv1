<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Finance</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>

    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
                <h2>Finance</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>user/jurnal">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Neraca</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/neraca/')?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Filter Laporan Neraca Berdasarkan Tanggal</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Periode Awal</label>
                                    <div class="form-group">
                                        <input type="date" name="date1" class="form-control" value="<?php echo $date1_pilih ?>" required="">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <labeL>Periode Akhir</label>
                                    <div class="form-group">
                                        <input type="date" name="date2" class="form-control" value="<?php echo $date2_pilih ?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button style="margin-top: 22px" class="btn btn-primary btn-md" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>   
            <script>
                $(function() {
                    $('html, body').animate({
                        scrollTop: $("#scoll").offset().top-85
                    }, 1000);
                 });
            </script>
        <div class="row" id="scoll">
            <div class="col-lg-12">
                
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">

                                <h2 class="text-center"><b>Neraca</b></h2>
                                <?php 
                                    if ($date1_pilih && $date2_pilih) {
                                        $date1_pilih = new DateTime($date1_pilih);
                                        $date2_pilih = new DateTime($date2_pilih);
                                        $dari = $date1_pilih->format("d F Y");
                                        $sampai = $date2_pilih->format("d F Y");
                                    }
                                ?>
                                <hr>
                                <p class="text-left text-navy"><b>Periode &nbsp;: <?php echo $dari ?> - <?php echo $sampai ?></b></p>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Tipe Akun</th>
                                            <th class="text-center">Kode Akun </th>
                                            <th class="text-center">Nama Akun</th>
                                            <th class="text-center">Awal</th>
                                            <th class="text-center">Berjalan</th>
                                            <th class="text-center">Akhir</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $totalAwal=0; $totalBerjalan=0;$totalAkhir=0; for ($i=0; $i < count($neraca); $i++) { ?>
                                            <?php if($neraca[$i]->kodeTipeAkun<3000) {?>
                                            <tr>
                                                <td>
                                                    <?php echo $neraca[$i]->kodeTipeAkun ?>
                                                </td>
                                                <td>
                                                    <label><?php echo $neraca[$i]->kodeAkun ?></label>
                                                </td>
                                                <td>
                                                    <label><?php echo $neraca[$i]->namaAkun ?></label>
                                                </td>
                                                <td class="text-right">
                                                    <?php $awal=$saldoAwal[$i]->deb-$saldoAwal[$i]->kre;
                                                    if($awal==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($awal,2,',','.'); }?>
                                                </td>
                                                <td class="text-right">
                                                    <?php $berjalan=$neraca[$i]->deb-$neraca[$i]->kre;
                                                    if($berjalan==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($berjalan,2,',','.'); }?>
                                                </td>
                                                <td class="text-right">
                                                    <?php $akhir=$awal+$berjalan;
                                                    if($akhir==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($akhir,2,',','.'); }?>
                                                </td>
                                            </tr>
                                        <?php
                                                $totalAwal+=$awal;
                                                $totalBerjalan+=$berjalan;
                                                $totalAkhir+=$akhir;
                                                }
                                            } 

                                        ?>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-left" colspan="3"><strong>Total</strong></td>
                                                <th class="text-right" ><strong>Rp. <?php echo number_format($totalAwal,2,",","."); ?></strong></th>
                                                <td class="text-right" ><strong>Rp. <?php echo number_format($totalBerjalan,2,",","."); ?></strong></th>
                                                <td class="text-right" ><strong>Rp. <?php echo number_format($totalAkhir,2,",","."); ?></strong></th>
                                            </tr>
                                        </tfoot>
                                    </table>    
                                </div>
                                <div class="row">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Tipe Akun</th>
                                            <th class="text-center">Kode Akun </th>
                                            <th class="text-center">Nama Akun</th>
                                            <th class="text-center">Awal</th>
                                            <th class="text-center">Berjalan</th>
                                            <th class="text-center">Akhir</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $totalAwal=0; $totalBerjalan=0;$totalAkhir=0; for ($i=0; $i < count($neraca); $i++) { ?>
                                            <?php if($neraca[$i]->kodeTipeAkun>=3000) {?>
                                            <tr>
                                                <td>
                                                    <?php echo $neraca[$i]->kodeTipeAkun ?>
                                                </td>
                                                <td>
                                                    <label><?php echo $neraca[$i]->kodeAkun ?></label>
                                                </td>
                                                <td>
                                                    <label><?php echo $neraca[$i]->namaAkun ?></label>
                                                </td>
                                                <td class="text-right">
                                                    <?php $awal=$saldoAwal[$i]->deb-$saldoAwal[$i]->kre;
                                                    if($awal==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($awal,2,',','.'); }?>
                                                </td>
                                                <td class="text-right">
                                                    <?php $berjalan=$neraca[$i]->deb-$neraca[$i]->kre;
                                                    if($berjalan==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($berjalan,2,',','.'); }?>
                                                </td>
                                                <td class="text-right">
                                                    <?php $akhir=$awal+$berjalan;
                                                    if($akhir==0){ echo '<p class="text-center">-</p>';} else {echo 'Rp '.number_format($akhir,2,',','.'); }?>
                                                </td>
                                            </tr>
                                        <?php
                                                $totalAwal+=$awal;
                                                $totalBerjalan+=$berjalan;
                                                $totalAkhir+=$akhir;
                                                }
                                            } 

                                        ?>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-left" colspan="3"><strong>Total</strong></td>
                                                <th class="text-right" ><strong>Rp. <?php echo number_format($totalAwal,2,",","."); ?></strong></th>
                                                <td class="text-right" ><strong>Rp. <?php echo number_format($totalBerjalan,2,",","."); ?></strong></th>
                                                <td class="text-right" ><strong>Rp. <?php echo number_format($totalAkhir,2,",","."); ?></strong></th>
                                            </tr>
                                        </tfoot>
                                    </table> 
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
    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 20,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Neraca'},
                    {extend: 'pdf', title: 'Neraca?>'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                     }
                    
                    }
                ]

            });

        });
    </script>
</body>

</html>
