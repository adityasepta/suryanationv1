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
                                <strong>Jurnal</strong>
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
                                <h5>Daftar Jurnal</h5>
                                <div class="ibox-tools">
                                    <!-- <a class="btn btn-xs btn-primary" href="#" data-toggle="modal" data-target="#tambahCashflow">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH JURNAL</strong></span></i>
                                    </a> -->
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
                                        <?php foreach($jurnal as $p) : 
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

                                            $tgl = new DateTime($p->tanggal);
                                            $tglmsk = $tgl->format("d F Y");
                                        ?>

                                        <tr>
                                            <td><?php echo $p->idCashflow?></td>
                                            <td><?php echo $p->keterangan?></td>
                                            <td><?php echo $p->kategori?></td>
                                            <td><?php echo $p->tipeTransaksi?></td>
                                            <td>Rp <?php echo number_format($p->jumlah,2);?></td>
                                            <td><?php echo $tglmsk?></td>
                                            <?php if($p->idJurnal==NULL) {?>
                                            <td><a href="<?php echo base_url();?>user/createJurnal/<?php echo $p->idCashflow;?>" class="btn btn-xs btn-primary" >Tambah</a></td>
                                            <?php } else { ?>
                                            <td><!-- Button trigger modal -->
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url()?>user/detailJurnal/<?php echo $p->idCashflow;?>" data-toggle="modal" class="btn btn-xs btn-info" >lihat</a>
                                                    <a href="<?php echo base_url()?>user/deleteCashflow/<?php echo $p->idCashflow?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus transaksi ini?')">Hapus</a>
                                                </div>
                                            </td>
                                            <?php } ?>
                                         </tr>

                                        <!-- Modal Tambah-->
                                        <div class="modal inmodal fade" id="tambah<?php echo $p->idCashflow;?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title">Tambah Jurnal</h3>
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tanggal :</dt><dd> <b class="text-success"><?php echo $tglmsk?></b></dd>
                                                                    <dt>Keterangan :</dt><dd> <b class="text-success"><?php echo $keterangan; ?></b></dd>
                                                                </dl>
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <dl class="dl-horizontal">
                                                                    <dt>Jumlah :</dt><dd> <b class="text-success">Rp <?php echo number_format($p->jumlah,2);?></b></dd>
                                                                    <dt>Kategori :</dt><dd> <b class="text-success"><?php echo $p->kategori?></b></dd>
                                                                    <dt>Tipe Transaksi :</dt><dd> <b class="text-success"><?php echo $p->tipeTransaksi?></b></dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <?php echo form_open_multipart('user/tambahJurnal/')?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input type="hidden" name="idCashflow" value="<?= $p->idCashflow ?>">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <label>Keterangan</label>
                                                                            <input type="text" name="keterangan" class="form-control" required>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>Tanggal</label>
                                                                            <input type="date" name="tanggal" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input_fields_wrap" >
                                                                        <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Akun</button>
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
                                        </div>
                                        </div>
                                        <!-- End -->
                                        
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
    <script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 30; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group row"><div class="col-md-4"> <label>Akun</label> <select class="form-control m-b" name="akun[]"><?php for ($i = 0; $i < count($listAkun); $i++) { ?> <option value="<?php echo $listAkun[$i]->kodeAkun?>"><?php echo $listAkun[$i]->kodeAkun." ".$listAkun[$i]->namaAkun." (".$listAkun[$i]->namaTipeAkun.")"?></option><?php } ?></select> </div><div class="col-md-2"><label>Kategori</label><select type="text" name="kategori[]" class="form-control" required><option value="Debit">Debit</option><option value="Kredit">Kredit</option></select></div><div class="col-md-4"><label>Jumlah</label><input type="number" step="any" name="jumlah[]" class="form-control" required></div><div class="col-md-2"><button class="btn remove_field" style="margin-top:22px;">Remove</button></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent().parent('div').remove(); x--;
        })
    });
    </script>
    
</body>

</html>
