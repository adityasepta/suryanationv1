<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Welcome</title>

    <?php include('header.php'); ?>
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
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                </nav>
            </div>


            <div class="wrapper wrapper-content ">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Selamat datang di Victoeriavici</h1>

                    </div>
                </div>
            </div>


        <?php include('copyright.php') ?>

        </div>

    </div>

    <?php include('footer.php') ?>

    <script src="<?php echo base_url('assets/js/plugins/chartist/chartist.min.js') ?>"></script>
    <!-- Echarts -->
    <script src="<?php echo base_url()?>assets/js/echarts.js"></script>

    <script type="text/javascript">
        var lineData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Okt", "Nov", "Dec"],
        datasets: [
            {
                label: "Example dataset",
                fillColor: "rgba(26,179,148,0.1)",
                strokeColor: "rgba(26,179,148,0.7)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(26,179,148,1)",
                data: [28, 48, 40, 19, 35, 27, 30,28, 48, 40, 19, 50]
            }
        ]
    };

    var lineOptions = {
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDot: true,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    };


    var ctx = document.getElementById("iiChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    var barData = {
        labels: ["Massal", "Custom", "Service"],
        datasets: [

            {
                label: "My Second dataset",
                fillColor: "rgba(26,179,148,0.5)",
                strokeColor: "rgba(26,179,148,0.8)",
                highlightFill: "rgba(26,179,148,0.75)",
                highlightStroke: "rgba(26,179,148,1)",
                data: [50, 20, 30]
            }
        ]
    };

    var barOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        barShowStroke: false,
        barStrokeWidth: 2,
        barValueSpacing: 1,
        barDatasetSpacing: 1,
        responsive: true,
        scales: {
        xAxes: [{
            barPercentage: 0.4
        }]
    }
    }


    var ctx = document.getElementById("barChart").getContext("2d");
    var myNewChart = new Chart(ctx).Bar(barData, barOptions);


    </script>

    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                 

                 $("#sparkline6").sparkline([5, 3, 4], {
                     type: 'pie',
                     height: '120',
                     sliceColors: ['#1d84c6', '#24c6c8','#f8ac5a'],
                     tooltipFormat: '<span style="color: {{color}}">&#9679;</span> {{offset:names}} ({{percent.1}}%)',
                     tooltipValueLookups: {
                        names: {
                            0: 'Produksi Massal',
                            1: 'Produksi Custom',
                            2: 'Servis Produk',
                            // Add more here
                        }
                    }
                 });

            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();


        });
    </script>
    <script type="text/javascript">
        //GAUGE CHART//
        var dom = document.getElementById("produksi");
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
                        name: 'produksi',
                        type: 'gauge',
                        detail: 
                        {formatter: '20'},
                        data: 20, 
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
        var dom = document.getElementById("penjualan");
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
                        name: 'penjualan',
                        type: 'gauge',
                        detail: 
                        {formatter: '60'},
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
        var dom = document.getElementById("profit");
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
                        name: 'profit',
                        type: 'gauge',
                        detail: 
                        {formatter: '90'},
                        data: 90, 
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
    

</body>
</html>
