<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | SOP</title>

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
                        <h2>SOP</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url();?>user">Beranda</a>
                            </li>
                            <li class="active">
                                <strong>SOP</strong>
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
                                <h5>SOP</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="href="#" data-toggle="modal" data-target="#tambahRole">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH SOP</strong></span></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                       placeholder="Search in table">
                                <div class="table-responsive">
                                <table class="footable table table-stripped" data-page-size="25" data-filter=#filter>
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">Nama SOP</th>
                                        <th data-hide="all">Tujuan SOP</th>
                                        <th data-hide="all">Uraian Singkat</th>
                                        <th data-hide="phone">Lampiran</th>
                                        <th data-hide="phone">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach($listSOP as $p) : 
                                            $no++;
                                            $idSOP    = $p->idSOP;
                                            if($this->input->post('is_submitted')){
                                                $namaSOP   = set_value('namaSOP');
                                                $tujuanSOP   = set_value('tujuanSOP');
                                                $uraianSingkat       = set_value('uraianSingkat');
                                                $lampiran       = set_value('lampiran');
                                            }
                                            else {
                                                $namaSOP   = $p->namaSOP;
                                                $tujuanSOP   = $p->tujuanSOP;
                                                $uraianSingkat       = $p->uraianSingkat;
                                                $lampiran       = $p->lampiran;

                                            }
                                        ?>

                                        <tr>
                                            <td style="width: 10%"><?php echo $p->namaSOP?></td>
                                            <td style="width: 50%"><?php echo $p->tujuanSOP?></td>
                                            <td style="width: 30%"><?php echo $p->uraianSingkat?></td>
                                            <td style="width: 10%">
                                                <a href="<?php echo base_url('uploads/lampiran/'.$p->lampiran)?>">
                                                <?php echo $p->lampiran?>
                                            </td>
                                            <td style="width: 10%"><!-- Button trigger modal -->
                                                <div class="btn-group">
                                                <a href="href="#" data-toggle="modal" data-target="#role<?php echo $p->idSOP;?>" class="btn btn-xs btn-warning" >Edit</a>
                                                <a href="<?php echo base_url('user/deleteSOP/' . $idSOP) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus job desc ini?')">Delete</a>
                                                </div>
                                            </td>
                                         </tr>
                                         <?php if($listSOP) {?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="role<?php echo $idSOP;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit SOP</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <?php echo form_open_multipart('user/editSOP/'.$idSOP)?>
                                                    <div class="form-group">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Nama SOP</label>
                                                        <input type="text" name= "namaSOP"  class="form-control" required value="<?= $namaSOP?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Tujuan SOP</label>
                                                        <textarea name="tujuanSOP" class="form-control" required><?php echo $tujuanSOP?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Uraian Singkat</label>
                                                        <textarea name="uraianSingkat" class="form-control" required><?php echo $uraianSingkat?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Lampiran</label>
                                                        <?php if($lampiran) {?>
                                                            <a href="<?php echo base_url('uploads/lampiran/'.$p->lampiran)?>">
                                                            <?php echo $p->lampiran?>
                                                        <?php } ?>
                                                        <input type="file" name="userfile">
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                                  <div class="modal-footer">
                                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                                <?php echo form_close()?> 
                                                </div>
                                              </div>
                                            </div>
                                            <!-- End of Modal -->
                                         <?php } ?>
                                        <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <!-- Modal -->
                                <div class="modal fade" id="tambahRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah SOP</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo form_open_multipart('user/createSOP')?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Nama SOP</label>
                                                    <input type="text" name= "namaSOP"  class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Tujuan SOP</label>
                                                    <textarea name="tujuanSOP" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Uraian Singkat</label>
                                                    <textarea name="uraianSingkat" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Lampiran</label>
                                                    <input type="file" name="userfile">
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                    <?php echo form_close()?> 
                                    </div>
                                  </div>
                                </div>
                                <!-- End of Modal -->
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
