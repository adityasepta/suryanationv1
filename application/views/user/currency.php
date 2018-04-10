<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

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
                    <h2>Data Harga Emas</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user">Beranda</a>
                        </li>
                        <li >
                            <strong>Data Harga Emas</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Harga Emas Per Hari</h5>
                        </div>
                        <div class="ibox-content">
                            <?php if (date('d F Y', strtotime('now')) > date('d F Y', strtotime($gold['tanggal']))){ ?> 
                                <?php echo form_open('user/tambahCurrency')?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p><span class="label label-warning">Update Harga Emas Hari Ini</span></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control input-sm m-b-xs" placeholder="Harga Emas Saat Ini" name="hargaEmas">
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary btn-sm btn-block" type="submit">Update</button>
                                    </div>
                                </div>
                                
                                <?php echo form_close()?>
                            <?php } ?>
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Harga Emas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($currency as $p) : ?>
                                    <tr>
                                        <?php 
                                          $tgl = new DateTime($p->tanggal);
                                          $tglsk = $tgl->format("d F Y");
                                        ?>
                                        <td><?php echo $tglsk ?></td>
                                        <td>Rp <?php echo number_format($p->hargaEmas,2)?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#curr<?php echo $p->idCurrency;?>" class="btn btn-xs btn-default">Edit</a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="curr<?php echo $p->idCurrency;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Harga Emas</h4>
                                          </div>
                                          <div class="modal-body">
                                            <?php echo form_open_multipart('user/editCurrency/'.$p->idCurrency)?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Harga Emas</label>
                                                        <input type="text" name= "hargaEmas"  class="form-control" required value="<?php echo $p->hargaEmas; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Tanggal</label>
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $tglsk?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        <?php echo form_close()?> 
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End of Modal -->
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($job == 'Owner') {
                    echo form_open('user/setTol');
                    ?>

                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Toleransi Kadar Produksi</h5>
                        </div>
                        <div class="ibox-content">

                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4>Toleransi (%)</h4>
                                </div>
                                <div class="col-lg-4">
                                    <input type="number" class="form-control input-sm" step="any" value="<?php echo $lk[2]->nilai?>" name="tol">
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-primary btn-block btn-sm" type="submit">Update</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <?php echo form_close(); } ?>
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
