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
     <!-- orris -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
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
                <div class="col-lg-6">
                        <div class="ibox-title">
                                <h5>Delivery Status</h5>
                            </div>
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">     
                                        <div class="col-lg-12">
                                            <div id="deliverystatus" style="
                                                width:300px;
                                                height: 300px;
                                                padding: 0;
                                                margin: 0 auto 0 auto;">                                    
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                         </div>
                <div class="col-lg-6">
                        <div class="ibox-title">
                                <h5>Delivery Time</h5>
                            </div>
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">     
                                        <div class="col-lg-12">
                                            <div id="deliverytime" style="
                                                width:300px;
                                                height: 300px;
                                                padding: 0;
                                                margin: 0 auto 0 auto;">                                    
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                         </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Customer Satisfaction Index</h5>
                        </div>

                        <div class="ibox-content">
                          <div class="row">
                            <div class="col-lg-6">
                              <h3>APAKAH ANDA PUAS DENGAN LAYANAN YANG KAMI BERIKAN?</h3>
                            <div class="col-xs-4">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <br><small class="stats-label">Puas</small>
                                <h4><?php echo number_format($puas,2,".","."); ?> %</h4>
                            </div>

                            <div class="col-xs-4">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star-half text-warning"></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <br>
                                <small class="stats-label">Netral</small>
                                <h4><?php echo number_format($netral,2,".","."); ?> %</h4>
                            </div>

                            <div class="col-xs-4">
                                <span class="fa fa-star-o text-warning "></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <span class="fa fa-star-o text-warning "></span>
                                <br>
                                <small class="stats-label">Tidak Puas</small>
                                <h4><?php echo number_format($tidakpuas,2,".","."); ?> %</h4>
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <h3>APAKAH ANDA INGIN MEREKOMENDASIKAN PRODUK KAMI KEPADA ORANG LAIN?</h3>
                                <div id='pie'></div>
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
                            <h5>Service Quality Index</h5>
                        </div>

                        <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <canvas id="radarChart"></canvas>  
                                    </div>
                                    <div class="col-lg-12">
                                        <h2>Interpretasi Hasil</h2><b>
                                        <?php if ($radar->rataHarapan > $radar->rataRealisasi) {
                                            echo '<h3>Karena nilai Harapan > Realisasi, Konsumen kurang puas atas kualitas layanan yang diterima</h3>';
                                        } else if ($radar->rataHarapan == $radar->rataRealisasi) {
                                            echo '<h3>Karena nilai Harapan = Realisasi,Konsumen puas atas kualtias layanan yang diterima</h3>';
                                        } else {
                                            echo '<h3>Karena nilai Harapan < Realisasi,Konsumen merasa kualitas layanan yang diterima ideal dan
sangat luar biasa</h3>';
                                        }?></b>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                            <thead>
                                            <tr>
                                                <th class="text-center">DIMENSI</th>
                                                <th class="text-center">HARAPAN</th>
                                                <th class="text-center">REALISASI</th>
                                                <th class="text-center">GAP</th>
                                                <th class="text-center">STATUS</th>
                                                <th class="text-center">REKOMENDASI</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">Tangibles</td>
                                                <td class="text-center"><?php echo number_format($radar->rataHarapanT,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiT,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiT-$radar->rataHarapanT,2)?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiT-$radar->rataHarapanT > 0) echo "TOP"; else echo "BOTTOM";?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiT-$radar->rataHarapanT > 0) echo "PERTAHANKAN"; else echo "Perusahaan perlu meningkatkan kualitas fasilitas fisik, peralatan, penampilan dan kemampuan komunikasi SDM.";?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Reliability</td>
                                                <td class="text-center"><?php echo number_format($radar->rataHarapanR,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiR,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiR-$radar->rataHarapanR,2)?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiR-$radar->rataHarapanR > 0) echo "TOP"; else echo "BOTTOM";?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiR-$radar->rataHarapanR > 0) echo "PERTAHANKAN"; else echo "Perusahaan perlu meningkatkan kualitas ketepatan service terutama tepat waktu dan tepat spesifikasi agar sesuai dengan yang dijanjikan sehingga kepercayaan konsumen terus meningkat.";?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Responsiveness</td>
                                                <td class="text-center"><?php echo number_format($radar->rataHarapanRE,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiRE,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiRE-$radar->rataHarapanRE,2)?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiRE-$radar->rataHarapanRE > 0) echo "TOP"; else echo "BOTTOM";?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiRE-$radar->rataHarapanRE > 0) echo "PERTAHANKAN"; else echo "Perusahaan perlu meningkatkan kualitas layanan kepada konsumen agar lebih tangkas dan cepat.";?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Assurance</td>
                                                <td class="text-center"><?php echo number_format($radar->rataHarapanA,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiA,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiA-$radar->rataHarapanA,2)?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiA-$radar->rataHarapanA > 0) echo "TOP"; else echo "BOTTOM";?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiA-$radar->rataHarapanA > 0) echo "PERTAHANKAN"; else echo "Perusahaan perlu meningkatkan kualitas SDM terutama pengetahuan, kesopanan dan kemampuan karyawan meyakinkan Konsumen sehingga merasa nyaman atau terjamin.";?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">Empathy</td>
                                                <td class="text-center"><?php echo number_format($radar->rataHarapanE,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiE,2)?></td>
                                                <td class="text-center"><?php echo number_format($radar->rataRealisasiE-$radar->rataHarapanE,2)?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiE-$radar->rataHarapanE > 0) echo "TOP"; else echo "BOTTOM";?></td>
                                                <td class="text-center"><?php if ($radar->rataRealisasiE-$radar->rataHarapanE > 0) echo "PERTAHANKAN"; else echo "Perusahaan perlu meningkatkan kualitas layanan agar lebih sesuai sesuai dengan kebutuhan konsumen dan layanan yang lebih merasakan apa yang dirasakan konsumen.";?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                            <thead>
                                            <tr>
                                                <th class="text-center">DIMENSI</th>
                                                <th class="text-center">DEFINISI INDIKATOR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($dimensi as $d) : ?>
                                            <tr>
                                                <td><?php echo $d->dimensi?></td>
                                                <td><?php echo $d->definisi?></td>
                                            </tr>
                                                <?php endforeach; ?>
                                            </tbody>
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
    <!-- d3 and c3 charts -->
    <script src="<?php echo base_url();?>assets/js/plugins/d3/d3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/c3/c3.min.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url();?>assets/js/plugins/chartJs/Chart.min.js"></script>

    <script src="<?php echo base_url('assets/js/plugins/chartist/chartist.min.js') ?>"></script>
    <!-- Echarts -->
    <script src="<?php echo base_url()?>assets/js/echarts.js"></script>

    <script>

        $(document).ready(function () {
            c3.generate({
                bindto: '#pie',
                data:{
                    columns: [
                        ['Ya', <?php echo $merekomendasikan ?>],
                        ['Tidak', <?php echo $tidakmerekomendasikan?>]
                    ],
                     colors: {
                        Ya: '#27acf9',
                        Tidak: '#ed8f1c',
                    },
                    type : 'pie'
                }
            });

        });

    </script>

    <script>

        $(document).ready(function () {
            c3.generate({
                bindto: '#donut1',
                data:{
                    columns: [
                        ['Low', 10],
                        ['Middle', 20],
                        ['High', 5]
                    ],
                     colors: {
                        Low: '#f4ec07',
                        Middle: '#ff9e02',
                        High: '#d8041d',
                    },
                    type : 'donut'
                }
            });

        });

    </script>

    <script>

        $(document).ready(function () {
            c3.generate({
                bindto: '#donut2',
                data:{
                    columns: [
                        ['Low', 5],
                        ['Middle', 7],
                        ['High', 2]
                    ],
                     colors: {
                        Low: '#f4ec07',
                        Middle: '#ff9e02',
                        High: '#d8041d',
                    },
                    type : 'donut'
                }
            });

        });

    </script>

    <script type="text/javascript">
        var radarData = {
        labels: ["Tangibles", "Reliability", "Responsiveness", "Assurance", "Emphaty"],
        datasets: [
            {
                label: "Harapan",
                fillColor: "rgba(0,0,255,0.2)",
                strokeColor: "rgba(0,0,255,1)",
                pointColor: "rgba(0,0,255,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#re",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [<?php echo $radar->rataHarapanT/6*100?>,<?php echo $radar->rataHarapanR/6*100?>,<?php echo $radar->rataHarapanRE/6*100?>,<?php echo $radar->rataHarapanA/6*100?>,<?php echo $radar->rataHarapanE/6*100?>]
            },
            {
                label: "Realisasi",
                fillColor: "rgba(255,0,0,0.2)",
                strokeColor: "rgba(255,0,0,1)",
                pointColor: "rgba(255,0,0,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $radar->rataRealisasiT/6*100?>,<?php echo $radar->rataRealisasiR/6*100?>,<?php echo $radar->rataRealisasiRE/6*100?>,<?php echo $radar->rataRealisasiA/6*100?>,<?php echo $radar->rataRealisasiE/6*100?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: true,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 2,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 12,
        pointLabelFontColor: "black",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);
    </script>

    <script type="text/javascript">
        //GAUGE CHART//
        var dom = document.getElementById("deliverystatus");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = 
            {
                tooltip : 
                    {
                        formatter: "{a} <br/>{b} : {c} %"
                    },
                
                    series: [
                    {
                        name: 'deliverystatus',
                        type: 'gauge',
                        detail: 
                        {formatter: '60 %'},
                        data: 60, 
                        name:'Success Rate',
                        axisLine:
                            {
                              show: true,
                              lineStyle:
                                {
                                  color: [[0.5, '#ed5666'], [0.8, '#f8ac5a'], [1, '#1bb394']],
                                  width: 10
                                }
                            },
                        pointer:
                        {
                            length : '50%',
                            width : 2,
                            color : '#394341'
                        }  
                    }
                        ] 
                
            };


            if (option && typeof option === "object") 
                {
                    myChart.setOption(option, true);
                }
    </script>

    <script type="text/javascript">
        //GAUGE CHART//
        var dom = document.getElementById("deliverytime");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = 
            {
                tooltip : 
                    {
                        formatter: "{a} <br/>{b} : {c} %"
                    },
                
                    series: [
                    {
                        name: 'deliverytime',
                        type: 'gauge',
                        detail: 
                        {formatter: '86 %'},
                        data: 86, 
                        name:'Success Rate',
                        axisLine:
                            {
                              show: true,
                              lineStyle:
                                {
                                  color: [[0.5, '#ed5666'], [0.8, '#f8ac5a'], [1, '#1bb394']],
                                  width: 10
                                }
                            },
                        pointer:
                        {
                            length : '50%',
                            width : 2,
                            color : '#394341'
                        }  
                    }
                        ] 
                
            };


            if (option && typeof option === "object") 
                {
                    myChart.setOption(option, true);
                }
    </script>
    


