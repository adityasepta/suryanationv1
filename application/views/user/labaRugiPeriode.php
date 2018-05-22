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
                        <strong>Laba Rugi</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/labaRugi/')?>
                            <?php 
                              $tglskg = new DateTime();
                              $tglnow = $tglskg->format("Y-m-d");

                              $one_month_ago = date("Y-m-d",strtotime("-1 months",strtotime($tglnow))); 
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Filter Laporan Laba Rugi Berdasarkan Tanggal</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                

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
            <?php if($statusLaba) {?> 
            <script>
                $(function() {
                    $('html, body').animate({
                        scrollTop: $("#scoll").offset().top-85
                    }, 1000);
                 });
            </script>
            <?php }?> 
        <div class="row" id="scoll">
            <div class="col-lg-12">
                
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">

                                <h2 class="text-center"><b>Laba Rugi</b></h2>
                                <?php 
                                    if ($date1_pilih && $date2_pilih) {
                                    $date1_pilih = new DateTime($date1_pilih);
                                    $date2_pilih = new DateTime($date2_pilih);
                                    $dari = $date1_pilih->format("d F Y");
                                    $sampai = $date2_pilih->format("d F Y");
                                    
                                ?>
                                <hr>
                                <p class="text-left text-navy"><b>Periode &nbsp;: <?php echo $dari ?> - <?php echo $sampai ?></b></p>
                                <?php } ?>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">Kode Tipe Akun</th>
                                        <th class="text-center" width="10%">Nomor Akun</th>
                                        <th width="35%">Nama Akun</th>
                                        <th class="text-center" width="15%">Awal</th>
                                        <th class="text-center" width="15%">Berjalan</th>
                                        <th class="text-center" width="15%">Akhir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $totalAwal=0; $totalBerjalan=0; $totalAkhir=0; 

                                    for ($i=0; $i < count($labaRugiAwal); $i++) { ?>
                                        <?php 
                                            if($labaRugiAwal[$i]->kodeTipeAkun==4000) {
                                            $awal = $labaRugiAwal[$i]->Deb - $labaRugiAwal[$i]->Kre;
                                            $berjalan = $labaRugiBerjalan[$i]->Deb - $labaRugiBerjalan[$i]->Kre;
                                            $akhir = $awal+$berjalan;
                                            $totalAwal += $awal;
                                            $totalBerjalan += $berjalan;
                                            $totalAkhir += $akhir;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $labaRugiAwal[$i]->kodeTipeAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $labaRugiAwal[$i]->kodeAkun ?></label>
                                            </td>
                                            <td>
                                                <?php echo $labaRugiAwal[$i]->namaAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($awal>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($awal,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($berjalan>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($berjalan,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($akhir>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($akhir,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        } 
                                    ?>
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="text-left" colspan="3"><strong>Total Pendapatan</strong></td>
                                        <th class="text-right" ><strong>Rp. <?php echo number_format($totalAwal,2,".","."); ?></strong></th>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($totalBerjalan,2,".","."); ?></strong></th>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($totalAkhir,2,".","."); ?></strong></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">Kode Tipe Akun</th>
                                        <th class="text-center" width="10%">Nomor Akun</th>
                                        <th width="35%">Nama Akun</th>
                                        <th class="text-center" width="15%">Awal</th>
                                        <th class="text-center" width="15%">Berjalan</th>
                                        <th class="text-center" width="15%">Akhir</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $totalAwal1=0; $totalBerjalan1=0; $totalAkhir1=0; 

                                    for ($i=0; $i < count($labaRugiAwal); $i++) { ?>
                                        <?php 
                                            if($labaRugiAwal[$i]->kodeTipeAkun==5000) {
                                            $awal = $labaRugiAwal[$i]->Deb - $labaRugiAwal[$i]->Kre;
                                            $berjalan = $labaRugiBerjalan[$i]->Deb - $labaRugiBerjalan[$i]->Kre;
                                            $akhir = $awal+$berjalan;
                                            $totalAwal1 += $awal;
                                            $totalBerjalan1 += $berjalan;
                                            $totalAkhir1 += $akhir;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $labaRugiAwal[$i]->kodeTipeAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $labaRugiAwal[$i]->kodeAkun ?></label>
                                            </td>
                                            <td>
                                                <?php echo $labaRugiAwal[$i]->namaAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($awal>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($awal,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($berjalan>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($berjalan,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($akhir>0){
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($akhir,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        } 
                                    ?>
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="text-left" colspan="3"><strong>Total Biaya</strong></td>
                                        <th class="text-right" ><strong>Rp. <?php echo number_format($totalAwal1,2,".","."); ?></strong></th>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($totalBerjalan1,2,".","."); ?></strong></th>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($totalAkhir1,2,".","."); ?></strong></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <table class="table table-striped table-bordered table-hover">
                                    <?php 
                                        $totalAwal2=0;
                                        $totalBerjalan2=0;
                                        $totalAkhir2 = 0;
                                        $totalAwal2 = $totalAwal - $totalAwal1;
                                        $totalBerjalan2 = $totalBerjalan - $totalBerjalan1;
                                        $totalAkhir2 = $totalAkhir - $totalAkhir1;
                                    ?>
                                    <thead>
                                    <tr>
                                        <th colspan="3" width="55%"></th>
                                        <th class="text-center" width="15%">Awal</th>
                                        <th class="text-center" width="15%">Berjalan</th>
                                        <th class="text-center" width="15%">Akhir</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th class="text-left" colspan="3" width="55%"><strong>Total Laba (Rugi) Sebelum Pajak => Total Pendapatan - Total Biaya</strong></td>
                                        <th class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalAwal2,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalBerjalan2,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalAkhir2,2,".","."); ?></strong></th>
                                        </tr>
                                        <tr>
                                        <th class="text-left" colspan="3" width="55%"><strong>Pajak (10%)</strong></td>
                                        <th class="text-right" width="15%"><strong>Rp. <?php echo number_format($pajakTotalAwal=$totalAwal2*0.1,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($pajakTotalBerjalan=$totalBerjalan2*0.1,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($pajakTotalAkhir=$totalAkhir2*0.1,2,".","."); ?></strong></th>
                                        </tr>
                                        <tr>
                                        <th class="text-left" colspan="3" width="55%"><strong>Total Laba Setelah Pajak</strong></td>
                                        <th class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalAwal2-$pajakTotalAwal,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalBerjalan2-$pajakTotalBerjalan,2,".","."); ?></strong></th>
                                        <td class="text-right" width="15%"><strong>Rp. <?php echo number_format($totalAkhir2-$pajakTotalAkhir,2,".","."); ?></strong></th>
                                        </tr>
                                        <tr>
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
                <?php $nama = $dari."-".$sampai;?>
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Laba Rugi -<?php echo $nama?>'},
                    {extend: 'pdf', title: 'Laba Rugi -<?php echo $nama?>'},

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

            $('.dataTables-example2').DataTable({
                <?php $nama = $dari."-".$sampai;?>
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Laba Rugi -<?php echo $nama?>'},
                    {extend: 'pdf', title: 'Laba Rugi -<?php echo $nama?>'},

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
