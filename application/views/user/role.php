<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Akses</title>

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
                        <h2>Role</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url();?>user">Beranda</a>
                            </li>
                            <li class="active">
                                <strong>Role</strong>
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
                                <h5>Role</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="href="#" data-toggle="modal" data-target="#tambahRole">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH ROLE</strong></span></i>
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
                                        <th>No</th>
                                        <th>Kode Role</th>
                                        <th>Nama Role</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach($role as $p) : 
                                            $no++;
                                            $idRole    = $p->idRole;
                                            if($this->input->post('is_submitted')){
                                                $kodeRole    = $set_value('kodeRole');
                                                $namaRole    = $set_value('namaRole');
                                                $deskripsi    = $set_value('deskripsi');
                                            }
                                            else {
                                                $kodeRole    = $p->kodeRole;
                                                $namaRole    = $p->namaRole;
                                                $deskripsi    = $p->deskripsi;
                                            }
                                        ?>
                                        <tr>
                                            <td style="width: 5%"><?php echo $no?></td>
                                            <td style="width: 15%"><?php echo $p->kodeRole?></td>
                                            <td style="width: 20%"><?php echo $p->namaRole?></td>
                                            <td style="width: 45%"><?php echo $p->deskripsi?></td>
                                            <td style="width: 15%"><!-- Button trigger modal -->
                                                <div class="btn-group">
                                                    <a href="#" data-toggle="modal" data-target="#role<?php echo $p->idRole;?>" class="btn btn-xs btn-warning" >Edit</a>
                                                <a href="<?php echo base_url('user/deleteRole/' . $idRole) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus role ini?')">Hapus</a>
                                                </div>
                                                
                                            </td>
                                         </tr>
                                         <?php if($role) {?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="role<?php echo $idRole;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
                                              </div>
                                              <div class="modal-body">
                                                <?php echo form_open_multipart('user/editRole/'.$idRole)?>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Kode Role</label>
                                                            <input type="text" name= "kodeRole"  class="form-control" required readonly="" value="<?= $kodeRole?>">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label>Nama Role</label>
                                                            <input type="text" name= "namaRole"  class="form-control" required value="<?= $namaRole?>">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <label>Deskripsi</label>
                                                            <textarea type="text" name= "deskripsi"  class="form-control" required value="<?= $deskripsi?>" ><?= $deskripsi?></textarea>
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
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <!-- Modal -->
                                <div class="modal fade" id="tambahRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Role</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo form_open_multipart('user/createRole')?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Kode Role</label>
                                                    <input type="text" placeholder="Contoh: PRD" name= "kodeRole"  class="form-control" required >
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Nama Role</label>
                                                    <input type="text" name= "namaRole" placeholder="Contoh: Production"  class="form-control" required >
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <br>
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" name= "deskripsi"  class="form-control" required ></textarea>
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
