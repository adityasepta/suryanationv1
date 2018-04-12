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
                                <strong>Hak Akses</strong>
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
                                <h5>Hak Akses</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="href="#" data-toggle="modal" data-target="#tambahRole">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH HAK AKSES</strong></span></i>
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
                                        <th>Nama</th>
                                        <th>Hak Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach($akses as $p) : 
                                            $no++;
                                            $idUser    = $p->idUser;
                                            /*if($this->input->post('is_submitted')){
                                                $kodeRole    = $set_value('kodeRole');
                                                $deskripsi    = $set_value('deskripsi');
                                            }
                                            else {
                                                $kodeRole    = $p->kodeRole;
                                                $deskripsi    = $p->deskripsi;
                                            }*/
                                        ?>
                                        <tr>
                                            <td style="width: 10%"><?php echo $no?></td>
                                            <td style="width: 30%"><?php echo $p->nama?></td>
                                           <td style="width: 50%"><?php for ($i=0; $i < count($akses2) ; $i++) {
                                                                    if ($akses2[$i]->idUser==$idUser) {
                                                                         echo $akses2[$i]->kodeRole.',';
                                                                     } 
                                                                    }?> 
                                            </td>
                                            <td style="width: 10%"><!-- Button trigger modal -->
                                                <a href="href="#" data-toggle="modal" data-target="#role<?php echo $p->idUser;?>" class="btn btn-xs btn-warning" >Edit</a>
                                                <a href="<?php echo base_url('user/deleteRole/' . $idUser) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus role ini?')">Delete</a>
                                            </td>
                                         </tr>
                                         <?php if($akses) {?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="role<?php echo $idUser;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <?php echo form_open_multipart('user/editAkses'.$idUser)?>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Nama</label>
                                                                <select class="form-control"  name="idUser">
                                                                <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                                    <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= $idUser; if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>> 
                                                                        <?php echo $pegawai[$i]->nama.' - '.$pegawai[$i]->jabatan;?>
                                                                    </option>
                                                                <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Akses</label>
                                                                    <?php $aa=0; for ($i=0; $i < count($role); $i++) { ?>
                                                                        <div class="i-checks"><label> <input type="checkbox" value="<?php echo $role[$i]->kodeRole?>" name="kodeRole[]" <?php for ($j=0; $j < count($akses2) ; $j++) {
                                                                            if ($akses2[$i]->idUser==$idUser) {
                                                                            if ($akses2[$j]->kodeRole==$role[$i]->kodeRole) {
                                                                                 echo "checked";
                                                                             }
                                                                             else {
                                                                                break;
                                                                             } 
                                                                             
                                                                            }
                                                                            }?> > <i></i> <?php echo $role[$i]->kodeRole?></label></div>
                                                                    <?php } ?>
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
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Role</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo form_open_multipart('user/createAkses')?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Nama</label>
                                                    <select class="form-control"  name="idUser">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>"> 
                                                            <?php echo $pegawai[$i]->nama.' - '.$pegawai[$i]->jabatan;?>
                                                        </option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Akses</label>
                                                        <?php for ($i=0; $i < count($role); $i++) { ?>
                                                            <div class="i-checks"><label> <input type="checkbox" value="<?php echo $role[$i]->kodeRole?>" name="kodeRole[]" > <i></i> <?php echo $role[$i]->kodeRole?></label></div>
                                                        <?php } ?>
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
