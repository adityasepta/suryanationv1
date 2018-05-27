<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Adminstrasi</title>

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
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Surat Perintah Kerja</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Daftar SPK</h5>
                                </div>
                                <div class="col-lg-6 text-right">
                                    
         
                                </div>
                            </div>

                           
                            
                            
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th class="text-center">Faktur</th>
                                    <th class="text-center">Kloter</th>
                                    <th>Konsumen</th>
                                    <th >Produk</th>
                                    <th class="text-center">Kadar</th>
                                    
                                    
                                    <th class="text-center" >Status</th>
                                    
                                    <th class="text-center">Action</th>
                                    <th class="text-center" >Keterangan </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listSPK as $hasil) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $hasil->nomorFaktur?></td>
                                    <td class="text-center">
                                        <?php

                                        $namakloter = "-";
                                        for ($g=0; $g < count($cekklot) ; $g++) { 
                                            if($cekklot[$g]->idSPK == $hasil->idSPK) {
                                                $namakloter = $cekklot[$g]->nama ;
                                            }
                                        } 
                                        echo $namakloter;

                                        ?>
                                        

                                    </td>
                                    <td><?php echo $hasil->namaCustomer?></td>
                                    <td ><?php echo $hasil->namaProduk?></td>
                                    <td class="text-center" ><?php echo $hasil->kadarBahan?> %</td>
                                    
                                    <td class="text-center">
                                        <?php

                                        $jadwal = 0;
                                        for ($g=0; $g < count($cekjadwal) ; $g++) { 
                                            if($cekjadwal[$g]->idSPK == $hasil->idSPK) {
                                                $jadwal++;
                                            }
                                        } 

                                        ?>

                                        <?php

                                        $klot = 0;
                                        for ($g=0; $g < count($cekklot) ; $g++) { 
                                            if($cekklot[$g]->idSPK == $hasil->idSPK) {
                                                $klot++;
                                            }
                                        } 

                                        ?>

                                        <?php if($jadwal == 0) { ?>
                                            <a href="<?php base_url();?>tambahJadwal/<?php echo $hasil->nomorFaktur;?>" class="btn btn-xs btn-info">Tambahkan Jadwal</a>

                                        <?php } else if($hasil->statusDesain == 'Proses Desain' OR $hasil->statusDesain == 'Ditolak') { ?>
                                            <a href="<?php base_url();?>tambahDesain/<?php echo $hasil->nomorFaktur;?>" class="btn btn-xs btn-info">Tambahkan Desain</a>
                                            <a href="#" data-toggle="modal" data-target="#qwe<?php echo $hasil->nomorFaktur;?>" class="btn btn-xs btn-danger">Tambah Keterangan</a>
                                            <?php if ($hasil->statusDesain == 'Ditolak') {
                                                echo '<button class="btn btn-xs btn-danger">Ditolak</button>';
                                            } ?>
                                            

                                        <?php } else if($hasil->statusDesain == 'Menunggu Persetujuan') { ?>
                                            <a href="#" data-toggle="modal" data-target="#desain<?php echo $hasil->nomorFaktur;?>" class="btn btn-xs btn-info">Persetujuan Desain</a>
                                            <button class="btn btn-xs btn-warning">Pending</button>

                                        
                                        <?php } else if($hasil->statusSPK=='Done') { ?>
                                            <a class="btn btn-xs btn-primary">Done</a>

                                        <?php } else {?>
                                            <a href="<?php base_url();?>kanban" class="btn btn-xs btn-default">Masuk Ke Kanban</a>
                                            <button class="btn btn-xs btn-success">Disetujui</button>

                                        <?php } ?>

                                    </td>
                                    
                                    <td class="text-center">

                                        <a href="<?php echo base_url('user/invoice/' . $hasil->nomorFaktur) ?>" class="btn btn-xs btn-primary" >Lihat</a>
                                        
                                        <!-- <a href="<?php echo base_url('user/editSPK/' . $hasil->nomorFaktur) ?>" class="btn btn-xs btn-warning" >Edit</a>

                                        
                                        <?=anchor('user/hapusSPK/' . $hasil->idSPK, 'Hapus', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button',
                                          'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])?> -->
                                    </td>
                                    <td class="text-center">
                                        

                                        <?php

                                        $jadwal = 0;
                                        for ($g=0; $g < count($cekjadwal) ; $g++) { 
                                            if($cekjadwal[$g]->idSPK == $hasil->idSPK) {
                                                $jadwal++;
                                            }
                                        } 

                                        ?>

                                        <?php if ($jadwal == 0) { ?>
                                            <span class="fa fa-calendar text-muted" ></span>
                                        <?php } ?>

                                        <?php if ($jadwal > 0) { ?>

                                            <?php if($hasil->statusJadwal !== 'Disetujui') { ?>
                                                <span class="fa fa-calendar text-warning" ></span>
                                            <?php } else { ?>
                                                <span class="fa fa-calendar text-success" ></span>
                                            <?php } ?>

                                        <?php } ?>

                                        <?php if($hasil->statusDesain == 'Proses Desain') { ?>
                                            <span class="fa fa-file-image-o text-muted" ></span>
                                        <?php } ?>
                                        <?php if($hasil->statusDesain == 'Menunggu Persetujuan') { ?>
                                            <span class="fa fa-file-image-o text-warning" ></span>
                                        <?php } ?>
                                        <?php if($hasil->statusDesain == 'Disetujui') { ?>
                                            <span class="fa fa-file-image-o text-success" ></span>
                                        <?php } ?>
                                        <?php if($hasil->statusDesain == 'Proses Desain Ulang') { ?>
                                            <span class="fa fa-file-image-o text-danger" ></span>
                                        <?php } ?>

                                        <?php

                                        $klot = 0;
                                        for ($g=0; $g < count($cekklot) ; $g++) { 
                                            if($cekklot[$g]->idSPK == $hasil->idSPK) {
                                                $klot++;
                                            }
                                        } 

                                        ?>

                                        <?php if ($klot == 0) { ?>
                                            <span class="fa fa-qrcode text-muted" ></span>
                                        <?php } ?>

                                        <?php if ($klot > 0) { ?>
                                        <span class="fa fa-qrcode text-success" ></span>
                                        <?php } ?>

                                        <?php 

                                        $asd = 0;

                                        for ($d=0; $d < count($cb) ; $d++) {
                                            if($hasil->idSPK == $cb[$d]->idSPK) {
                                                $asd++;
                                            }}
                                        ?>
                                            

                                        <?php if($asd == 0) {?>
                                            <span class="fa fa-cubes text-muted" ></span>
                                        <?php } else { ?>
                                            <?php if($hasil->statusBOM !== 'Disetujui') { ?>
                                                <span class="fa fa-cubes text-warning" ></span>
                                            <?php } else { ?>
                                                <span class="fa fa-cubes text-success" ></span>
                                            <?php } ?>
                                        <?php } ?>

                                        
                                        <?php if($hasil->statusPersetujuan == 'Belum Disetujui') { ?>
                                            <span class="fa fa-check-square-o text-muted" ></span>
                                        <?php } ?>

                                        <?php if($hasil->statusPersetujuan == 'Disetujui') { ?>
                                            <span class="fa fa-check-square-o text-success" ></span>
                                        <?php } ?>
                                            
                                        
                                        
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="desain<?php echo $hasil->nomorFaktur;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Persetujuan Desain - No. Faktur #<?php echo $hasil->nomorFaktur ?></h4>
                                      </div>
                                      <?php echo form_open('user/persetujuanDesain')?>
                                      <div class="modal-body">
                                        
                                        <div class="row">
                                           <div class="col-lg-8">
                                               <img src="<?php echo base_url('uploads/gambarDesain/'.$hasil->kodeGambar.'-d1.jpg')?>" class="img img-responsive">
                                           </div>
                                           <div class="col-lg-4">

                                                <div class="form-group">
                                                    <label>Alasan</label>
                                                    <textarea name="keterangan" class="form-control" rows="6"><?php echo $hasil->keteranganPending?></textarea>
                                                    <input type="hidden" name="nomorFaktur" value="<?php echo $hasil->nomorFaktur ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> <input type="radio" value="Disetujui" name="status" required> <i class="fa fa-circle" style="color:#07b77c;"></i> SETUJU  </label><br>
                                                    <label> <input type="radio" value="Menunggu Persetujuan" name="status" > <i class="fa fa-circle text-warning"></i> PENDING </label><br>
                                                    <label> <input type="radio" value="Ditolak" name="status" > <i class="fa fa-circle text-danger"></i> TIDAK SETUJU </label>
                                                </div>

                                               

                                           </div>
                                          
                                        </div>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <a href="<?php base_url();?>batalDesain/<?php echo $hasil->nomorFaktur;?>" class="btn btn-danger pull-left" type="button"><i class="fa fa-remove"></i> Batal</a>
                                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                        <!-- <a href="<?php base_url();?>setujuDesain/<?php echo $hasil->nomorFaktur;?>" class="btn btn-primary" type="button">Setuju</a> -->
                                        
                                      </div>
                                    <?php echo form_close() ?>
                                    </div>
                                  </div>
                                </div>

                                <div class="modal fade" id="qwe<?php echo $hasil->nomorFaktur;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Tambah Keterangan Desain #<?php echo $hasil->nomorFaktur ?></h4>
                                            </div>
                                            <?php echo form_open('user/setKeterangan')?>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <textarea required class="form-control" placeholder="Tambahkan Keterangan Desain" name="ket"><?php echo $hasil->keteranganDesain ?></textarea>
                                                    </div>
                                                    <div class="col-lg-12 text-right">
                                                        <br>
                                                        <input type="hidden" name="idSPK" value="<?php echo $hasil->idSPK ?>">
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                              

                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="10">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
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
