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

    <!-- Ion.RangeSlider -->
  <link href="<?php echo base_url();?>assets/vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

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
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/survey">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Survey</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="ibox-content">
            <!-- form grid slider -->

                <div class="x_content">
                 <blockquote>
                  <h2><b>Instruksi</b></h2>
                  <h4 >
                    Jawablah dengan cara menggeser bar mendekati pilihan yang menurut anda paling sesuai (index 1 sampai 6)
                  </h4>
                </blockquote>
                <?php echo form_open_multipart('user/isiSurvey')?>
                  <br>
                  <?php $i=0; ?>
                 <?php foreach ($pertanyaan as $a) { $i=$i+1; ?>
                  <div class="row grid_slider">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <ol type="1" start="<?php echo $i;?>">
                        <li><h5><?php echo $a->indikator;?></h5></li>
                      </ol>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <ol style="font-size: 14px">Harapan</ol>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-danger pull-right">Sangat Tidak Setuju</h5>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <input type="text" id="<?php echo $a->kode?>a" value="1" name="h<?php echo $i;?>" />
                        <br>
                        <div class="clearfix"></div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-primary pull-left">Sangat Setuju</h5>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <ol style="font-size: 14px">Realisasi</ol>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-danger pull-right">Sangat Tidak Setuju</h5>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <input type="text" id="<?php echo $a->kode?>b" value="1" name="r<?php echo $i;?>" />
                        <br>
                        <div class="clearfix"></div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-primary pull-left">Sangat Setuju</h5>
                      </div>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <?php } ?>
                  <div class="hr-line-dashed"></div>
                  <div class="row grid_slider">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <ol type="1" start="1">
                        <li><h5>Seberapa Anda Mau Mempromosikan Surya Sumatera kepada Konsumen Lain</h5></li>
                      </ol>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-danger pull-right">Tidak Mau</h5>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <input type="text" id="umum1" value="1" name="u1" />
                        <br>
                        <div class="clearfix"></div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-primary pull-left">Sangat Mau</h5>
                      </div>
                    </div>
                  </div>
                  <div class="row grid_slider">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <ol type="1" start="2">
                        <li><h5>Seberapa Anda Mau Mempromosikan Surya Sumatera kepada Konsumen Lain</h5></li>
                      </ol>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-danger pull-right">Tidak Mau</h5>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <input type="text" id="umum2" value="1" name="u2" />
                        <br>
                        <div class="clearfix"></div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <h5 style="text-align:center; vertical-align:middle" class="label label-primary pull-left">Sangat Mau</h5>
                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>Submit</button>
                      <?php echo form_close()?>
                      </div>   
              </div>
            </div>
            <br />
            <br />
            <!-- /form grid slider -->
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
    <!-- Ion.RangeSlider -->
<script src="<?php echo base_url();?>assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
</body>

</html>
<!-- Ion.RangeSlider -->
<script>
  $(document).ready(function() {

    <?php $i=0; ?>
    <?php foreach ($pertanyaan as $a) { ?>
      $("#<?php echo $a->kode?>a").ionRangeSlider({
      type: "single",
      min: 1,
      max: 6,
      from: 1 ,
      to: 10,
    });
      $("#<?php echo $a->kode?>b").ionRangeSlider({
      type: "single",
      min: 1,
      max: 6,
      from: 1 ,
      to: 10,
    });
   <?php } ?>
      $("#umum1").ionRangeSlider({
      type: "single",
      min: 1,
      max: 100,
      from: 1 ,
      to: 100,
    });
      $("#umum2").ionRangeSlider({
      type: "single",
      min: 1,
      max: 100,
      from: 1 ,
      to: 100,
    });
  });
</script>
<!-- /Ion.RangeSlider -->
