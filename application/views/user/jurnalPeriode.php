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
                        <strong>Detail Jurnal</strong>
                    </li>
                </ol>
            </div>
        </div>
        
        
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/cariJurnal/')?>
                            <?php 
                              $tglskg = new DateTime();
                              $tglnow = $tglskg->format("Y-m-d");
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Filter Laporan Jurnal Berdasarkan Tanggal</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-1">Pilih Tanggal</label>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="tanggal" class="form-control" value="<?php echo $tglnow ?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default btn-md" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">
                                <h2 class="text-center"><b>Jurnal</b></h2>
                                <?php 
                                    if ($jurnal) {
                                    $tgl = new DateTime($jurnal[0]->tanggal);
                                    $tglmsk = $tgl->format("d F Y");
                                    
                                ?>
                                <p class="text-center text-navy"><b><?php echo $tglmsk ?></b></p>
                                <?php } ?>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Uraian</th>
                                        <th class="text-center">Nomor Akun</th>
                                        <th>Nama Akun</th>
                                        <th class="text-center">Debit</th>
                                        <th class="text-center">Kredit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $debit=0; $kredit=0; for ($i=0; $i < count($jurnal); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $tgl = new DateTime($jurnal[$i]->tanggal);
                                                    $tglmsk = $tgl->format("d F Y");
                                                    echo $tglmsk;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $jurnal[$i]->keterangan ?>
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $jurnal[$i]->kodeAkun ?></label>
                                            </td>
                                            <td>
                                                <?php echo $jurnal[$i]->namaAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($jurnal[$i]->kategori=="Debit"){
                                                    $debit+=$jurnal[$i]->jumlah;
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($jurnal[$i]->jumlah,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($jurnal[$i]->kategori=="Kredit"){
                                                    $kredit+=$jurnal[$i]->jumlah;
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($jurnal[$i]->jumlah,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                        </tr>
                                    <?php
                                        
                                        } 
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-left" ><strong>Total</strong></td>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($debit,2,".","."); ?></strong></td>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($kredit,2,".","."); ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-left"><strong class="text-navy">Balance</strong></td>
                                        <td class="text-right" ><strong class="text-navy">Rp. <?php echo number_format($total=$debit-$kredit,2,".","."); ?></strong></td>
                                    </tr>
                                    </tbody>
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
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

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

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
</body>

</html>
