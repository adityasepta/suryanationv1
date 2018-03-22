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
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Buat PO Service</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order Service</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Purchase Order</strong>
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
                            <h5>Buat PO Service <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                            <?php echo form_open_multipart('user/createPOService/')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <?php if(count($poTerakhir)>0) { ?>
                                                <small>Nomor Purchase Order terakhir yang digunakan adalah <strong> <?php echo $poTerakhir[0]->nomorPO; ?></strong></small>
                                                <?php } ?>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" required="">
                                                <small class="text-danger"><?php echo form_error('nomorPO'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <?php if($id['idC']==0){ ?>
                                                    <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?php echo set_value('namaCustomer'); ?>" required="">
                                                    <input type="hidden" name="idCustomer" class="form-control" value="0">
                                                <?php } else { ?>
                                                    <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?php echo $customer[0]->namaCustomer; ?>" readonly>
                                                    <input type="hidden" name="idCustomer" class="form-control" value="<?php echo $customer[0]->idCustomer; ?>">
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                <?php if($id['idC']==0){ ?>
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo set_value('nomorTelepon'); ?>" required="">
                                                <?php } else { ?>
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo $customer[0]->nomorTelepon; ?>" readonly>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <select id="idSalesPerson" class="form-control"  name="idSalesPerson">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= set_value('idSalesPerson'); if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?php echo set_value('tanggalMasuk'); ?>" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?php echo set_value('tanggalEstimasiPenyelesaian'); ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label>Jumlah</label>
                                                <input type="number" name= "jumlah[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nama Barang</label>
                                                <input type="text" name= "namaBarang[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat (gr)</label>
                                                <input type="text" name= "berat[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Total Harga (Rp)</label>
                                                <input type="text" name= "harga[]" class="form-control good" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="multiple_choice" style="margin-left: 0;">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="input_fields_wrap" >
                                                                <button class="btn btn-success add_field_button" style="margin-bottom: 5px;">Tambah Material</button>
                                                                
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/produk"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
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
    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
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
            var max_fields      = 20; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            <?php $jawab=0; ?>
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    <?php $jawab++;?>
                    $(wrapper).append('<div class="form-group"><div class="col-md-1"><label>Jumlah</label><input type="number" name= "jumlah[]" class="form-control good" required></div><div class="col-md-4"><label>Nama Barang</label><input type="text" name= "namaBarang[]" class="form-control" required></div><div class="col-md-2 "><label>Berat (gram)</label><input type="text" name= "berat[]" class="form-control" required></div><div class="col-md-3"><label>Sub Total Harga</label><input type="number" name= "harga[]" class="form-control" required></div><br><button class="btn remove_field" style="margin-bottom: 5px;"">Hapus</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        }); 
    </script>

    <script type="text/javascript">
        $('.good').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: 'Rp ', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    </script>
</body>

</html>
