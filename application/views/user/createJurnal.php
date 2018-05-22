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
            <div class="col-lg-8">
                <h2>Finance</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>user/jurnal">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Tambah Jurnal</strong>
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-9">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">
                                <h2 class="text-center">Tambah Jurnal</h2>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('user/tambahJurnal/')?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Customer</label>
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" required>
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

        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y');?>
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
