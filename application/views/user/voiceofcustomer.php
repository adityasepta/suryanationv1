<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Services</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <!-- orris -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
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
                <h2>Services</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>user/">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Voice of Customer</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/voiceofcustomer/')?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Filter Voice Of Customer Berdasarkan Tahun</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tahun</label>
                                    <div class="form-group">
                                        <select name="tahun" class="form-control" required="">
                                            <option value="2018" <?php if ($tahun_pilih==2018){echo " selected";} ?>>2018</option>
                                            <option value="2019" <?php if ($tahun_pilih==2019){echo " selected";} ?> >2019</option>
                                            <option value="2020" <?php if ($tahun_pilih==2020){echo " selected";} ?> >2020</option>
                                            <option value="2021" <?php if ($tahun_pilih==2021){echo " selected";} ?> >2021</option>
                                            <option value="2022" <?php if ($tahun_pilih==2022){echo " selected";} ?> >2022</option>
                                        </select>
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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <?php echo form_open_multipart('user/tambahPenilaian','class="form-horizontal"')?>
                        <div class="ibox-title">
                            <h5>Voice of Customer</h5>
                        </div>
                        <div class="ibox-content">
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2>Penilaian Customer Tahun <?php echo $tahun_pilih?></h2>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-12" style="margin-bottom: 10px;">
                                    <table class="table table-striped table-bordered table-hover footable">
                                    <thead>
                                    <tr>
                                        <th width="9%">Penilaian</th>
                                        <th width="7%" data-hide="phone,tablet">Jan</th>
                                        <th width="7%" data-hide="phone,tablet">Feb</th>
                                        <th width="7%" data-hide="phone,tablet">Mar</th>
                                        <th width="7%" data-hide="phone,tablet">Apr</th>
                                        <th width="7%" data-hide="phone,tablet">Mei</th>
                                        <th width="7%" data-hide="phone,tablet">Jun</th>
                                        <th width="7%" data-hide="phone,tablet">Jul</th>
                                        <th width="7%" data-hide="phone,tablet">Agus</th>
                                        <th width="7%" data-hide="phone,tablet">Sept</th>
                                        <th width="7%" data-hide="phone,tablet">Okt</th>
                                        <th width="7%" data-hide="phone,tablet">Nop</th>
                                        <th width="7%" data-hide="phone,tablet">Des</th>
                                        <th width="7%" >Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-green.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-fast.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                <?php echo $jan1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $feb1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mar1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $apr1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mei1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jun1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jul1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $agu1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $sep1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $okt1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $nop1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $des1[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $total1[0]->jumlah;?> SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-green.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                <?php echo $jan2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $feb2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mar2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $apr2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mei2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jun2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jul2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $agu2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $sep2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $okt2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $nop2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $des2[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $total2[0]->jumlah;?> SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-fast.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                <?php echo $jan3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $feb3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mar3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $apr3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mei3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jun3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jul3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $agu3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $sep3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $okt3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $nop3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $des3[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $total3[0]->jumlah;?> SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                <?php echo $jan4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $feb4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mar4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $apr4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mei4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jun4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jul4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $agu4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $sep4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $okt4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $nop4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $des4[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $total4[0]->jumlah;?> SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-red.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                <?php echo $jan5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $feb5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mar5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $apr5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $mei5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jun5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $jul5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $agu5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $sep5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $okt5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $nop5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $des5[0]->jumlah;?> SPK
                                            </td>
                                            <td>
                                                <?php echo $total5[0]->jumlah;?> SPK
                                            </td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th width="16%">Total</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $jan1[0]->jumlah+$jan2[0]->jumlah+$jan3[0]->jumlah+$jan4[0]->jumlah+$jan5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $feb1[0]->jumlah+$feb2[0]->jumlah+$feb3[0]->jumlah+$feb4[0]->jumlah+$feb5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $mar1[0]->jumlah+$mar2[0]->jumlah+$mar3[0]->jumlah+$mar4[0]->jumlah+$mar5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $apr1[0]->jumlah+$apr2[0]->jumlah+$apr3[0]->jumlah+$apr4[0]->jumlah+$apr5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $mei1[0]->jumlah+$mei2[0]->jumlah+$mei3[0]->jumlah+$mei4[0]->jumlah+$mei5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $jun1[0]->jumlah+$jun2[0]->jumlah+$jun3[0]->jumlah+$jun4[0]->jumlah+$jun5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $jul1[0]->jumlah+$jul2[0]->jumlah+$jul3[0]->jumlah+$jul4[0]->jumlah+$jul5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $agu1[0]->jumlah+$agu2[0]->jumlah+$agu3[0]->jumlah+$agu4[0]->jumlah+$agu5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $sep1[0]->jumlah+$sep2[0]->jumlah+$sep3[0]->jumlah+$sep4[0]->jumlah+$sep5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $okt1[0]->jumlah+$okt2[0]->jumlah+$okt3[0]->jumlah+$okt4[0]->jumlah+$okt5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $nop1[0]->jumlah+$nop2[0]->jumlah+$nop3[0]->jumlah+$nop4[0]->jumlah+$nop5[0]->jumlah;?> SPK</th>
                                        <th width="7%" data-hide="phone,tablet"><?php echo $des1[0]->jumlah+$des2[0]->jumlah+$des3[0]->jumlah+$des4[0]->jumlah+$des5[0]->jumlah;?> SPK</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                </table>
                                </div>  
                            </div>
                        </div>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Grafik Voice of Customer</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                 <div id="morris-bar-chart"></div>
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
        });
    </script>
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
    <!-- Morris -->
    <script src="<?php echo base_url()?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris.js"></script>
    <!-- ChartJS-->
    <script src="<?php echo base_url()?>assets/js/plugins/chartJs/Chart.min.js"></script>

    <script type="text/javascript">
        $(function() {
            Morris.Bar({
                element: 'morris-bar-chart',
                data: [
{ y: 'Bagus-Cepat',  a: <?php echo $jan1[0]->jumlah?>, b: <?php echo $feb1[0]->jumlah?>, c: <?php echo $mar1[0]->jumlah?>, d:<?php echo $apr1[0]->jumlah?>, e: <?php echo $mei1[0]->jumlah?>, f: <?php echo $jun1[0]->jumlah?>, g: <?php echo $jul1[0]->jumlah?>, h: <?php echo $agu1[0]->jumlah?>, i: <?php echo $sep1[0]->jumlah?>, j: <?php echo $okt1[0]->jumlah?>, k: <?php echo $nop1[0]->jumlah?>, l: <?php echo $des1[0]->jumlah?> },
{ y: 'Bagus-Lambat',    a: <?php echo $jan2[0]->jumlah?>, b: <?php echo $feb2[0]->jumlah?>, c: <?php echo $mar2[0]->jumlah?>, d:<?php echo $apr2[0]->jumlah?>, e: <?php echo $mei2[0]->jumlah?>, f: <?php echo $jun2[0]->jumlah?>, g: <?php echo $jul2[0]->jumlah?>, h: <?php echo $agu2[0]->jumlah?>, i: <?php echo $sep2[0]->jumlah?>, j: <?php echo $okt2[0]->jumlah?>, k: <?php echo $nop2[0]->jumlah?>, l: <?php echo $des2[0]->jumlah?> },
{ y: 'Standar-Cepat',   a: <?php echo $jan3[0]->jumlah?>, b: <?php echo $feb3[0]->jumlah?>, c: <?php echo $mar3[0]->jumlah?>, d:<?php echo $apr3[0]->jumlah?>, e: <?php echo $mei3[0]->jumlah?>, f: <?php echo $jun3[0]->jumlah?>, g: <?php echo $jul3[0]->jumlah?>, h: <?php echo $agu3[0]->jumlah?>, i: <?php echo $sep3[0]->jumlah?>, j: <?php echo $okt3[0]->jumlah?>, k: <?php echo $nop3[0]->jumlah?>, l: <?php echo $des3[0]->jumlah?> },
{ y: 'Standar-Lambat',  a: <?php echo $jan4[0]->jumlah?>, b: <?php echo $feb4[0]->jumlah?>, c: <?php echo $mar4[0]->jumlah?>, d:<?php echo $apr4[0]->jumlah?>, e: <?php echo $mei4[0]->jumlah?>, f: <?php echo $jun4[0]->jumlah?>, g: <?php echo $jul4[0]->jumlah?>, h: <?php echo $agu4[0]->jumlah?>, i: <?php echo $sep4[0]->jumlah?>, j: <?php echo $okt4[0]->jumlah?>, k: <?php echo $nop4[0]->jumlah?>, l: <?php echo $des4[0]->jumlah?> },
{ y: 'Jelek-Lambat',    a: <?php echo $jan5[0]->jumlah?>, b: <?php echo $feb5[0]->jumlah?>, c: <?php echo $mar5[0]->jumlah?>, d:<?php echo $apr5[0]->jumlah?>, e: <?php echo $mei5[0]->jumlah?>, f: <?php echo $jun5[0]->jumlah?>, g: <?php echo $jul5[0]->jumlah?>, h: <?php echo $agu5[0]->jumlah?>, i: <?php echo $sep5[0]->jumlah?>, j: <?php echo $okt5[0]->jumlah?>, k: <?php echo $nop5[0]->jumlah?>, l: <?php echo $des5[0]->jumlah?> },
{ y: 'Rework',          a: <?php echo $jan5[0]->jumlah?>, b: <?php echo $feb5[0]->jumlah?>, c: <?php echo $mar5[0]->jumlah?>, d:<?php echo $apr5[0]->jumlah?>, e: <?php echo $mei5[0]->jumlah?>, f: <?php echo $jun5[0]->jumlah?>, g: <?php echo $jul5[0]->jumlah?>, h: <?php echo $agu5[0]->jumlah?>, i: <?php echo $sep5[0]->jumlah?>, j: <?php echo $okt5[0]->jumlah?>, k: <?php echo $nop5[0]->jumlah?>, l: <?php echo $des5[0]->jumlah?> } ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k','l'],
                labels: ['Jan', 'Feb', 'Mar', 'Apr','Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nop', 'Des'],
                hideHover: 'auto',
                resize: true,
                barColors: ['#003B46','#07575B','#2E4600','#486B00','#A2C523','#7D4427','#2C7873','#6FB98F','#375E97','#FB6542','#FFBB00','#7DA3A1'],
            });

        });
    </script>
</body>

</html>
