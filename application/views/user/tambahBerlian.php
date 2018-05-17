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

    <script src="<?php echo base_url();?>assets/js/editable-dropdown.js"></script>
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
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Jenis Customer </label>
                                <div class="col-md-1">
                                    <div class="i-checks"><label> <input id="toko" type="radio" <?php $a= $dataPO[0]->jenisCustomer; if($a=="Toko"){?> checked="" <?php } ?> value="Toko" name="jenisCustomer" disabled> <i></i> Toko </label></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="i-checks"><label> <input id="perseorangan" type="radio" <?php $a=$dataPO[0]->jenisCustomer; if($a=="Perseorangan"){?> checked="" <?php } ?> value="Perseorangan" name="jenisCustomer" disabled> <i></i> Perseorangan </label></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label>Berlian / Swarowski</label><br>
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
                                            <?php } else { ?>
                                            <div class="col-md-2">
                                                <input type="hidden" name= "karat[]" placeholder="Berat Karat" value="0" class="form-control" required>
                                            </div>
                                            <?php } ?>
                                            <input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="<?php echo $berlian[$y]->jenis ?>" class="form-control">
                                            <button type="button" class="btn remove_field" onclick="removeDummy<?php echo $y ?>()">Remove</button>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Berlian</button>
                                    <div class="input_fields_wrap">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-info btn-sm add_fields" style="margin-bottom: 5px;">Tambah Batu Zirkon</button>
                                    <div class="input_fields_add">
                                        
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

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        var max_fields      = 30; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        
        var n;
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group"><div class="col-md-4"><label>Keterangan Poin Berlian</label><select class="form-control m-b" name="namaBerlian[]" id="lstDropDown_'+x+'" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($material); $i++) { ?><option value="<?php echo $material[$i]->namaMaterial?>"><?php echo $material[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-sm-1" style="width:0;margin-top:30px;">:</div><div class="col-md-2"><label>Jumlah (Pcs)</label><input type="text" id="jumlah'+x+'" placeholder="Pcs" name="jumlah[]" class="form-control" ></div><div class="col-md-2"><label>Harga Berlian (Dollar)</label><input id="hargaPoin'+x+'" type="text" name= "harga[]" placeholder="Harga Berlian" class="form-control" required><input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="Berlian" class="form-control"></div><div class="col-md-2"><label>Berat (Ct)</label><input type="text" id="berat (Ct)'+x+'" placeholder="Pcs" name="karat[]" class="form-control" ></div><button class="btn remove_field" style="margin-top:22px;">Remove</button></div><script>$("#lstDropDown_'+x+'").change(function(){var hg=getHarga(document.getElementById("lstDropDown_'+x+'").value);document.getElementById("hargaPoin'+x+'").value=hg;});</' + 'script>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });

    function getHarga(n){
        var jenisCustomer = $("input[name='jenisCustomer']:checked").val();
        <?php for ($i = 0; $i < count($material); $i++) { ?>
            var namaMaterial = "<?php echo $material[$i]->namaMaterial?>";
            if(jenisCustomer=="Toko"){
                var hargaMaterial = <?php echo $material[$i]->hargaToko?>;
            } else {
                var hargaMaterial = <?php echo $material[$i]->hargaSatuan?>;
            }

            if(n==namaMaterial) {
                return hargaMaterial;
            }
        <?php } ?>
     }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 30; //maximum input boxes allowed
            var wrapper         = $(".input_fields_add"); //Fields wrapper
            var add_button      = $(".add_fields"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="form-group"><div class="col-sm-12"><div class="row"><div class="col-md-4"><label>Batu Zirkon</label><select class="form-control m-b" name="namaBerlian[]" id="lstDropDown_A'+x+'" style="" onKeyDown="fnKeyDownHandler_A(this, event);" onKeyUp="fnKeyUpHandler_A(this, event); return false;" onKeyPress = "return fnKeyPressHandler_A(this, event);"  onChange="fnChangeHandler_A(this);" onFocus="fnFocusHandler_A(this);"><option value="" style="font-family:Courier,monospace;color:#ff0000;background-color:#ffff00;">Lainnya...</option> <!-- This is the Editable Option --><?php for ($i = 0; $i < count($zirkon); $i++) { ?><option value="<?php echo $zirkon[$i]->namaMaterial?>"><?php echo $zirkon[$i]->namaMaterial?></option><?php } ?></select></div><div class="col-sm-1" style="width:0;margin-top:30px;">:</div><div class="col-md-2"><label>Jumlah (Pcs)</label><input type="text" id="jumlah'+x+'" placeholder="Pcs" name="jumlah[]" class="form-control" ><input type="hidden" id="karat'+x+'" name="karat[]" value="0" class="form-control" ><input type="hidden" name= "jenis[]" placeholder="Berat Karat" value="Zirkon" class="form-control"></div><div class="col-md-2"><label>Harga Satuan</label><input type="text" id="hargaPoinZirkon'+x+'" placeholder="Rp" name="harga[]" class="form-control good"></div><div class="col-md-2"><button class="btn remove_fields" style="margin-top:22px;">Remove</button> </div></div></div></div><script>$("#lstDropDown_A'+x+'").change(function(){var hg=getHargaZirkon(document.getElementById("lstDropDown_A'+x+'").value);document.getElementById("hargaPoinZirkon'+x+'").value=hg;});</' + 'script>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_fields", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
            })
        });

        function getHargaZirkon(n){
            console.log(n);
            var jenisCustomer = $("input[name='jenisCustomer']:checked").val();
            <?php for ($i = 0; $i < count($zirkon); $i++) { ?>
                var namaMaterial = "<?php echo $zirkon[$i]->namaMaterial?>";
                if(jenisCustomer=="Toko"){
                    var hargaMaterial = <?php echo $zirkon[$i]->hargaToko?>;
                } else {
                    var hargaMaterial = <?php echo $zirkon[$i]->hargaSatuan?>;
                }

                if(n==namaMaterial) {
                    return hargaMaterial;
                }
            <?php } ?>
         }
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
