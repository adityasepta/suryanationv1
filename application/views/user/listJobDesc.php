<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Job Desc</title>

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
                        <h2>Job Description</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url();?>user">Beranda</a>
                            </li>
                            <li class="active">
                                <strong>Job Description</strong>
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
                                <h5>Job Description</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="href="#" data-toggle="modal" data-target="#tambahRole">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH JOB DESC</strong></span></i>
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
                                        <th data-hide="phone">Nama Jabatan</th>
                                        <th data-hide="phone">Bagian</th>
                                        <th data-hide="phone">Unit</th>
                                        <th data-hide="phone">Kode Bagian</th>
                                        <th data-hide="all">Fungsi Utama</th>
                                        <th data-hide="all">Tanggung Jawab</th>
                                        <th data-hide="all">Wewenang</th>
                                        <th data-hide="all">Target Pekerjaan</th>
                                        <th data-hide="all">Spesifikasi Jabatan</th>
                                        <th data-hide="phone">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach($listJobDesc as $p) : 
                                            $no++;
                                            $idJobDesc    = $p->idJobDesc;
                                            if($this->input->post('is_submitted')){
                                                $namaJabatan   = set_value('namaJabatan');
                                                $bagian   = set_value('bagian');
                                                $unit       = set_value('unit');
                                                $kodeBagian       = set_value('kodeBagian');
                                                $fungsiUtama   = set_value('fungsiUtama');
                                                $tanggungJawab   = set_value('tanggungJawab');
                                                $wewenang       = set_value('wewenang');
                                                $targetPekerjaan       = set_value('targetPekerjaan');
                                                $spesifikasiJabatan       = set_value('spesifikasiJabatan');
                                            }
                                            else {
                                                $namaJabatan   = $p->namaJabatan;
                                                $bagian   = $p->bagian;
                                                $unit       = $p->unit;
                                                $kodeBagian       = $p->kodeBagian;
                                                $fungsiUtama   = $p->fungsiUtama;
                                                $tanggungJawab   = $p->tanggungJawab;
                                                $wewenang       = $p->wewenang;
                                                $targetPekerjaan       = $p->targetPekerjaan;
                                                $spesifikasiJabatan       = $p->spesifikasiJabatan;
                                            }
                                        ?>

                                        <tr>
                                            <td style="width: 10%"><?php echo $p->namaJabatan?></td>
                                            <td style="width: 10%"><?php echo $p->bagian?></td>
                                            <td style="width: 10%"><?php echo $p->unit?></td>
                                            <td style="width: 10%"><?php echo $p->kodeBagian?></td>
                                            <td style="width: 10%"><?php echo $p->fungsiUtama?></td>
                                            <td style="width: 10%"><?php echo $p->tanggungJawab?></td>
                                            <td style="width: 10%"><?php echo $p->wewenang?></td>
                                            <td style="width: 10%"><?php echo $p->targetPekerjaan?></td>
                                            <td style="width: 10%"><?php echo $p->spesifikasiJabatan?></td>
                                            <td style="width: 10%"><!-- Button trigger modal -->
                                                <div class="btn-group">
                                                <a href="href="#" data-toggle="modal" data-target="#role<?php echo $p->idJobDesc;?>" class="btn btn-xs btn-warning" >Edit</a>
                                                <a href="<?php echo base_url('user/deleteJobDesc/' . $idJobDesc) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus job desc ini?')">Delete</a>
                                                </div>
                                            </td>
                                         </tr>
                                         <?php if($listJobDesc) {?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="role<?php echo $idJobDesc;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Job Desc</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <?php echo form_open_multipart('user/editJobDesc/'.$idJobDesc)?>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Nama Jabatan</label>
                                                                <input type="text" name= "namaJabatan"  class="form-control" required value="<?= $namaJabatan?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Bagian</label>
                                                                <input type="text" name= "bagian"  class="form-control" required value="<?= $bagian?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Unit</label>
                                                                <input type="text" name= "unit"  class="form-control" required value="<?= $unit?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Kode Bagian</label>
                                                                <input type="text" name= "kodeBagian"  class="form-control" required value="<?= $kodeBagian?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Fungsi Utama Jabatan</label>
                                                                <textarea name="fungsiUtama" class="form-control" required ><?php echo $fungsiUtama?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Tanggung Jawab</label>
                                                                <textarea name="tanggungJawab" class="form-control" required><?php echo $tanggungJawab?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Wewenang</label>
                                                                <textarea name="wewenang" class="form-control" required><?php echo $wewenang?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Target Pekerjaan</label>
                                                                <textarea name="targetPekerjaan" class="form-control" required><?php echo $targetPekerjaan?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Spesifikasi Jabatan</label>
                                                                <textarea name="spesifikasiJabatan" class="form-control" required><?php echo $spesifikasiJabatan?></textarea>
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
                                        <h4 class="modal-title" id="myModalLabel">Tambah Job Desc</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo form_open_multipart('user/createJobDesc')?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Jabatan</label>
                                                    <input type="text" name= "namaJabatan"  class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Bagian</label>
                                                    <input type="text" name= "bagian"  class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Unit</label>
                                                    <input type="text" name= "unit"  class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Kode Bagian</label>
                                                    <input type="text" name= "kodeBagian"  class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Fungsi Utama Jabatan</label>
                                                    <textarea name="fungsiUtama" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Tanggung Jawab</label>
                                                    <textarea name="tanggungJawab" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Wewenang</label>
                                                    <textarea name="wewenang" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Target Pekerjaan</label>
                                                    <textarea name="targetPekerjaan" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Spesifikasi Jabatan</label>
                                                    <textarea name="spesifikasiJabatan" class="form-control" required></textarea>
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
