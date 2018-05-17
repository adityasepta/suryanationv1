<?php 
    $namaCustomer           = $dataPO[0]->namaCustomer;
    $nomorTelepon           = $dataPO[0]->nomorTelepon;
    $idSalesPerson          = $dataPO[0]->idSalesPerson;
    $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
    $nomorPO                = $dataPO[0]->nomorPO;
    $nama                   = $dataPO[0]->nama;
    $namaProduk             = $dataPO[0]->namaProduk;
    $tglmsk = new DateTime($tanggalMasuk);
    $tglmsk = $tglmsk->format("d F Y");
?>
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
                <div class="col-lg-8">
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Berlian</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="text-navy">Update Berlian</h2>
                                </div>
                            </div>
                            <?php echo form_open_multipart('user/updateBerlian/'.$nomorPO)?>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><b>Nama Konsumen:</b> <?php echo $namaCustomer?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Nomor PO: </b><?php echo $nomorPO?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><b>Nomor Telepon: </b><?php echo $nomorTelepon?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Nama Produk: </b><?php echo $namaProduk?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><b>Nama Sales Person: </b> <?php echo $nama?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Tanggal Terima: </b> <?php echo $tglmsk;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label>Berlian</label><br>
                                    </div>
                                    <div class="col-sm-1" style="width:0;"></div>
                                    <div class="col-md-2">
                                        <label>Jumlah (Pcs)</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Harga Satuan</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat (Ct)</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <?php for ($y=0; $y < count($berlian) ; $y++) { ?>
                                        <div class="form-group row" id="del<?php echo $y ?>">
                                            <div class="col-md-4 ">
                                                <input type="text" name= "namaBerlian[]" placeholder="Nama Berlian" value="<?php echo $berlian[$y]->namaBerlian ?>" class="form-control" readonly>
                                            </div>
                                            <div class="col-sm-1" style="width:0;">:</div>
                                            <div class="col-md-2">
                                                <input type="text" name= "jumlah[]" placeholder="Jumlah" value="<?php echo $berlian[$y]->jumlah ?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" name= "harga[]" placeholder="Harga Berlian" value="<?php echo $berlian[$y]->harga ?>" class="form-control" required>
                                            </div>
                                            <?php if($berlian[$y]->jenis=="Berlian") {?>
                                            <div class="col-md-2">
                                                <input type="text" name= "karat[]" placeholder="Berat Karat" value="<?php echo $berlian[$y]->karat ?>" class="form-control" required>
                                            </div>
                                            <?php } ?>
                                            <button type="button" class="btn remove_field" onclick="removeDummy<?php echo $y ?>()">Remove</button>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Berlian</button>
                                    </div>
                                    <div class="col-sm-1" style="width:0;"></div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input_fields_wrap">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                        </div>
                        <?php echo form_close();?>
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
                    $(wrapper).append('<div class="form-group"><div class="col-md-4 "><select class="form-control m-b" name="kodeMaterial[]"><?php for ($i = 0; $i < count($material); $i++) { ?><option value="<?php echo $material[$i]->kodeMaterial?>"><?php echo $material[$i]->kodeMaterial." - ".$material[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-sm-1" style="width:0;">:</div><div class="col-md-2"><input type="text" name= "jumlah[]" placeholder="Jumlah" class="form-control" required></div><div class="col-md-2"><input type="text" name= "harga[]" placeholder="Harga Berlian" class="form-control" required></div><button class="btn remove_field">Remove</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
        </script>
        <script type="text/javascript">
            <?php for ($y=0; $y < count($berlian) ; $y++) { ?>
            function removeDummy<?php echo $y ?>() {
                var elem = document.getElementById('del<?php echo $y ?>');
                elem.parentNode.removeChild(elem);
                return false;
            }
            <?php } ?>
        </script>
</body>

</html>
