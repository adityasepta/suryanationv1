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
                        <h2>Finance</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                            </li>
                            <li class="active">
                                <strong>CashFlow</strong>
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
                                <h5>Daftar Cashflow</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-xs btn-primary" href="#" data-toggle="modal" data-target="#tambahCashflow">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH CASHFLOW</strong></span></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                       placeholder="Search in table">
                                <div class="table-responsive">
                                <table class="footable table table-stripped" data-page-size="15" data-filter=#filter>
                                    <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Keterangan</th>
                                        <th>Kategori</th>
                                        <th>Tipe Transaksi</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach($cashflow as $p) : 
                                            $no++;
                                            $idCashflow    = $p->idCashflow;
                                            if($this->input->post('is_submitted')){
                                                $keterangan     = set_value('keterangan');
                                                $kategori       = set_value('kategori');
                                                $tipeTransaksi  = set_value('tipeTransaksi');
                                                $jumlah         = set_value('jumlah');
                                                $tanggal        = set_value('tanggal');
                                            }
                                            else {
                                                $keterangan     = $p->keterangan;
                                                $kategori       = $p->kategori;
                                                $tipeTransaksi  = $p->tipeTransaksi;
                                                $jumlah         = $p->jumlah;
                                                $tanggal        = $p->tanggal;
                                            }

                                            $tgl = new DateTime($tanggal);
                                            $tglmsk = $tgl->format("d F Y");
                                        ?>

                                        <tr>
                                            <td><?php echo $p->idCashflow?></td>
                                            <td><?php echo $p->keterangan?></td>
                                            <td><?php echo $p->kategori?></td>
                                            <td><?php echo $p->tipeTransaksi?></td>
                                            <td>Rp <?php echo number_format($p->jumlah,2);?></td>
                                            <td><?php echo $tglmsk?></td>
                                            <td><!-- Button trigger modal -->
                                                <a href="#" data-toggle="modal" data-target="#cash<?php echo $p->idCashflow;?>" class="btn btn-xs btn-warning" >Edit</a>
                                                <a href="<?php echo base_url()?>user/deleteCashflow/<?php echo $p->idCashflow?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus transaksi ini?')">Hapus</a>
                                            </td>
                                         </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="cash<?php echo $p->idCashflow;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Cashflow</h4>
                                              </div>
                                              <div class="modal-body">
                                                <?php echo form_open_multipart('user/editCashflow/'.$idCashflow)?>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>Keterangan</label>
                                                            <input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Tanggal</label>
                                                            <input type="date" name="tanggal" value="<?php echo $p->tgl; ?>" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Jumlah</label>
                                                            <input type="number" step="any" name="jumlah" value="<?= $jumlah ?>" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Kategori</label>
                                                            <select type="text" name="kategori"  class="form-control" required>
                                                                <option <?php if($kategori=='Masuk'){?> selected <?php } ?> value="Masuk">Masuk</option>
                                                                <option <?php if($kategori=='Keluar'){?> selected <?php } ?>  value="Keluar">Keluar</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Tipe Transaksi</label>
                                                            <select type="text" name="tipeTransaksi"  class="form-control" required>
                                                                <option <?php if($tipeTransaksi=='Tunai'){?> selected <?php } ?>  value="Tunai">Tunai</option>
                                                                <option <?php if($tipeTransaksi=='Bank'){?> selected <?php } ?>  value="Bank">Bank</option>
                                                            </select>
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
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="tambahCashflow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Cashflow</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo form_open_multipart('user/tambahCashflow')?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control" value="<?php set_value('keterangan') ?>" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Tanggal</label>
                                                    <input type="date" name="tanggal" value="<?php set_value('tanggal') ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Jumlah</label>
                                                    <input type="number" step="any" name="jumlah" value="<?php set_value('jumlah') ?>" class="form-control" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Kategori</label>
                                                    <select type="text" name="kategori"  class="form-control" required>
                                                        <option value="Masuk">Masuk</option>
                                                        <option value="Keluar">Keluar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Tipe Transaksi</label>
                                                    <select type="text" name="tipeTransaksi"  class="form-control" required>
                                                        <option value="Tunai">Tunai</option>
                                                        <option value="Bank">Bank</option>
                                                    </select>
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
