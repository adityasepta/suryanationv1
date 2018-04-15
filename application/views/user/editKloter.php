<?php
    $idKloter    = $kloter[0]->idKloter;
if($this->input->post('is_submitted')){
    $namakloter  = $set_value('nama');
    $kadar       = $set_value('kadar');
    $beratKotor  = $set_value('beratKotor');
    $beratKaret  = $set_value('beratKaret');
}
else {
    $namakloter      = $kloter[0]->nama;
    $kadar            = $kloter[0]->kadar;
    $beratKotor        = $kloter[0]->beratKotor;
    $beratKaret  = $kloter[0]->beratKaret;
}
?>
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
                            <a href="<?php echo base_url();?>user/kanban">Kanban</a>
                        </li>
                        <li class="active">
                            <strong>Edit Kloter</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo form_open('user/reviewKloter/'.$idKloter)?>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Edit Kloter</h5>
                                </div>
                                <div class="col-lg-6 text-right">
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="row">
                        <div class="col-lg-9">
                            <label>Nama Kloter</label>
                            <input type="text" name="namakloter" class=" form-control" placeholder="Nama Kloter" required="" value="<?= $namakloter?>">
                            <input type="hidden" name="idKloter" value="<?= $idKloter?>">
                        </div>
                        <div class="col-lg-3">
                            <label>Kadar</label>
                            <input type="number" step="any" min="0" name="kadar" class=" form-control" placeholder="kadar" required="" value="<?= $kadar?>">
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <label>Berat Lilin + Karet (gr)</label>
                            <input type="number" step="any" name="beratKotor" min="0" class=" form-control" placeholder="Berat Lilin + Karet (gr)" required="" value="<?= $beratKotor?>">
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <label>Berat Karet (gr)</label>
                            <input type="number" step="any" min="0" name="beratKaret" class=" form-control" placeholder="Berat Karet (gr)" required="" value="<?= $beratKaret?>">
                        </div>
                    </div>
                    <hr>
                    <?php $b=count($kloter); for ($i=0; $i < $b ; $i++) { ?>  
                        <div class="row">
                            <div class="col-lg-1">
                                
                            </div>
                            <div class="col-lg-1">
                                <input class="form-control input-sm" type="checkbox" value="<?php echo $kloter[$i]->idSPK?>" name="idSPK[]" checked>
                            </div>
                            <div class="col-lg-6">
                                
                                <label style="margin-top: 8px">
                                &nbsp&nbsp&nbspNo Faktur : <b><?php echo $kloter[$i]->nomorFaktur?></b> - Kadar : <b><?php echo $kloter[$i]->kadarBahan?></b> %
                                </label>
                            </div>
                        </div>

                           
                    <?php } ?>
                    <?php $b=count($klot); for ($i=0; $i < $b ; $i++) { ?>  
                        <div class="row">
                            <div class="col-lg-1">
                                
                            </div>
                            <div class="col-lg-1">
                                <input class="form-control input-sm" type="checkbox" value="<?php echo $klot[$i]->idSPK?>" name="idSPK[]">
                            </div>
                            <div class="col-lg-6">
                                
                                <label style="margin-top: 8px">
                                &nbsp&nbsp&nbspNo Faktur : <b><?php echo $klot[$i]->nomorFaktur?></b> - Kadar : <b><?php echo $klot[$i]->kadarBahan?></b> %
                                </label>
                            </div>
                        </div>

                           
                    <?php } ?>
                    <br>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                     <a href="<?php echo base_url()?>user/kanban"><button type="button" name="submit" class="btn btn-default" value="batal">Batal</button></a>
                    </div>
                        </div>
                    </div>
                    
                    <?php echo form_close()?>
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
