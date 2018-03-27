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
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Pegawai</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div>
                <a class="btn btn-xs btn-primary" href="href="#" data-toggle="modal" data-target="#tambahPegawai">
                        <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PEGAWAI</strong></span></i>
                </a><br><br>
            </div>
            <div class="row">
            <?php foreach ($pegawai as $p) : ?>
                <?php
                    $idUser    = $p->idUser;
                if($this->input->post('is_submitted')){
                    $username    = $set_value('username');
                    $password    = $set_value('password');
                    $nama        = $set_value('nama');
                    $jabatan    = $set_value('jabatan');
                    $level    = $set_value('level');
                    $phone    = $set_value('phone');
                    $email    = $set_value('email');
                    $alamat    = $set_value('alamat');
                }
                else {
                    $username    = $p->username;
                    $password    = $p->password;
                    $nama        = $p->nama;
                    $jabatan    = $p->jabatan;
                    $level    = $p->level;
                    $phone    = $p->phone;
                    $email    = $p->email;
                    $alamat    = $p->alamat;
                }
                ?>
                <div class="col-lg-6">
                <div class="contact-box" style="height: 200px">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="<?php echo base_url();?>assets/img/profile_small.jpg">
                            <div class="m-t-xs font-bold"><?php echo $p->jabatan?></div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong><?php echo $p->nama?></strong></h3>
                        <p><i class="fa fa-phone"></i><?php echo " ".$p->phone?></p>
                        <p><i class="fa fa-envelope-square"></i><?php echo " ".$p->email?></p>
                        <p><i class="fa fa-map-marker"></i><?php echo " ".$p->alamat?></p>
                        <address>
                            <a href="href="#" data-toggle="modal" data-target="#desain<?php echo $p->idUser;?>" class="btn btn-xs btn-warning" >Edit</a>
                            <a href="<?php echo base_url('user/deletePegawai/' . $idUser) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data pegawai ini?')">Delete</a>
                        </address>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="desain<?php echo $idUser;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Pegawai</h4>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open_multipart('user/editPegawai/'.$idUser)?>
                    <div class="form-group">
                        <div class="row">
                            
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                        <input type="text" name= "nama"  class="form-control" required value="<?= $nama?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jabatan</label>
                                        <select id="jabatan" class="form-control"  name="jabatan">
                                            <?php
                                            for ($i=0; $i < count($jabatana); $i++) { 
                                            if($jabatana[$i]->namaJabatan == $jabatan) {
                                            echo "<option value='".$jabatana[$i]->namaJabatan."' selected>".$jabatana[$i]->namaJabatan."</option>";
                                            }
                                            else {
                                                echo "<option value='".$jabatana[$i]->namaJabatan."'>".$jabatana[$i]->namaJabatan."</option>";
                                            }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No Telepon</label>
                                        <input type="number" name= "phone"  class="form-control" value="<?= $phone?>" >
                                    </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            
                                    <div class="col-md-4">
                                        <label>Username</label>
                                        <input type="text" name= "username" class="form-control" required value="<?= $username?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                        <input type="text" name= "password"  class="form-control" required value="<?= $password?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" name= "email"  class="form-control" value="<?= $email?>">
                                    </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea name= "alamat" class="form-control" required><?php echo $alamat;?></textarea>
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
            <?php endforeach;?>
        </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="tambahPegawai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open_multipart('user/createPegawai')?>
                    <div class="form-group">
                        <div class="row">
                            
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                        <input type="text" name= "nama"  class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jabatan</label>
                                        <select id="jabatan" class="form-control"  name="jabatan">
                                            <?php
                                            for ($i=0; $i < count($jabatana); $i++) { 
                                            /*if($j->nama!="Belum ada PIC") {*/
                                            echo "<option value='".$jabatana[$i]->namaJabatan."'>".$jabatana[$i]->namaJabatan."</option>";
                                            }
                                            /*}*/
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No Telepon</label>
                                        <input type="number" name= "phone"  class="form-control" >
                                    </div>
                            
                        </div>
                        <br>
                        <div class="row">
                           
                                    <div class="col-md-4">
                                        <label>Username</label>
                                        <input type="text" name= "username" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                        <input type="text" name= "password"  class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" name= "email"  class="form-control">
                                    </div>
                           
                        </div>
                        <br>
                        <div class="row">
                            
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea name= "alamat" class="form-control"></textarea>
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
