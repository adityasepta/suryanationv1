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
                                    <label>Akun</label>
                                    <div class="form-group">
                                        <select name="tahun" class="form-control" required="">
                                            <option value="2018" <?php if ($tahun_pilih==2018){echo " selected";} ?>>2018</option>
                                            <option value="2019" <?php if ($tahun_pilih==2019){echo " selected";} ?> >2019</option>
                                            <option value="2020" <?php if ($tahun_pilih==2020){echo " selected";} ?> >2020</option>
                                            <option value="2021" <?php if ($tahun_pilih==2021){echo " selected";} ?> >2021</option>
                                            <option value="2022" <?php if ($tahun_pilih==2022){echo " selected";} ?> >2012</option>
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
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr>
                                        <th width="16%">Penilaian</th>
                                        <th width="7%">Jan</th>
                                        <th width="7%">Feb</th>
                                        <th width="7%">Mar</th>
                                        <th width="7%">Apr</th>
                                        <th width="7%">Mei</th>
                                        <th width="7%">Jun</th>
                                        <th width="7%">Jul</th>
                                        <th width="7%">Agus</th>
                                        <th width="7%">Sept</th>
                                        <th width="7%">Okt</th>
                                        <th width="7%">Nop</th>
                                        <th width="7%">Des</th>
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
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-green.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-fast.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-yellow.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/thumb-up-red.png')?>" height="42" width="42">
                                                <img src="<?php echo base_url('assets/img/time-late.png')?>" height="42" width="42">
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                            <td>
                                                1 SPK
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                    </tfoot>
                                </table>
                                </div>  
                            </div>
                        </div>
                        <?php echo form_close()?>
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
</body>

</html>
