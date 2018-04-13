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
                    <h2>Buat PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order</a>
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
                            <h5>Buat Purchase Order <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/tambahPOMasal','class="form-horizontal"')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <?php if(count($poTerakhir)>0) { ?>
                                                <small>Nomor Purchase Order terakhir yang digunakan adalah <strong> <?php echo $poTerakhir[0]->nomorPO; ?></strong></small>
                                                <?php $poNow =  $poTerakhir[0]->nomorPO+1; } else { $poNow = 1; } ?>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" value="<?php echo $poNow; ?>" readonly>
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
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo set_value('nomorTelepon'); ?>">
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
                                <div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h3>Pilih Produk <small>Klik tombol <strong>Tambah Produk</strong> untuk memilih produk yang akan di produksi</small></h3>
                                            <div style="padding: 2px 0 1px 5px; background-color: #f7f7f7;">
                                                <p><small>Jika tidak ada produk dalam daftar, silahkan membuat Produk Baru <a href="<?php echo base_url();?>user/createProduk"> Disini!</a></small></p>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input_fields_wrap" >
                                                        <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Produk</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Bahan <br/><small class="text-navy">Pilih salah satu</small></label>
                                        <div class="col-md-2">
                                                <div class="i-checks"><label> <input id="Emas Kuning" type="radio" <?php $a= set_value('bahan'); if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan"> <i></i> Emas Kuning </label></div>
                                                <div class="i-checks"><label> <input id="Emas Putih" type="radio" <?php $a= set_value('bahan'); if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                                <div class="i-checks"><label> <input id="Perak" type="radio" <?php $a= set_value('bahan'); if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kadar Bahan</label>
                                            <input id="kadarBahan" type="text" name="kadarBahan" placeholder="%" value="<?php echo set_value('kadarBahan'); ?>"  class="form-control" required="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Harga Pasaran</label>
                                            <input type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo $gold['currentCurrency']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                        <div class="col-md-2" style="padding-top:8px;">
                                            <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                            <div class="i-checks"><label> <input type="radio" <?php $a= set_value('tipeCustomer'); if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                        </div>
                                        
                                        <div class="col-md-8">
                                            <label class="ontrol-label">Ukuran Jari / Tangan </label>
                                            <input id="ukuranJari" type="text" placeholder="Ukuran Jari / Tangan / Leher" name="ukuranJari" class="form-control" value="<?php echo set_value('ukuranJari'); ?>" required="">
                                        </div>
                                    </div>


                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                        <div class="col-sm-10"><input id="model" type="text" name="model" class="form-control" value="<?php echo set_value('model'); ?>"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Krum Warna</label>
                                        <div class="col-sm-10"><input id="krumWarna" type="text" name="krumWarna" class="form-control" value="<?php echo set_value('krumWarna'); ?>"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Keterangan Krum</label>
                                        <div class="col-sm-10"><input id="keteranganKrum" type="text" name="keteranganKrum" class="form-control" value="<?php echo set_value('keteranganKrum'); ?>"></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <!-- <div class="form-group"><label class="col-sm-2 control-label">Gambar Desain</label>
                                    <div class="col-sm-10" id="desainBelum">
                                        <label>Insert Image(.JPG)</label>                
                                        <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
                                    </div>
                                    <div class="col-lg-10" id="desainAda" style="display: none;">
                                        <div class="col-lg-4">
                                            <img id="desain1" src="" class="img img-responsive" style="max-height: 180px;">
                                        </div>
                                        <div class="col-lg-4">
                                            <img id="desain2" src="" class="img img-responsive" style="max-height: 180px;">
                                        </div>
                                        <div class="col-lg-4">
                                            <img id="desain3" src="" class="img img-responsive" style="max-height: 180px;">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Datang Emas </label>
                                                <input type="text" placeholder="gr" name="datangEmas" value="<?php echo set_value('datangEmas'); ?>" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Kadar Datang Emas</label>
                                                <input type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo set_value('kadarDatangEmas'); ?>"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span>Pekerjaan Tambahan</span>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pekerjaan Tambahan <br/>
                                    <!-- <input type="checkbox" checked="" value="" name="pekerjaanTambahan"><small> Tidak Ada</small> --></label>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan'); if($a=="Slap"){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan'); if($a=="Kombinasi"){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                    </div>
                                    <div class="col-sm-2" style="padding-top: 10px;">
                                        <div class="i-checks"><label> <input type="checkbox" <?php $a= set_value('pekerjaanTambahan'); if($a=="Kode Cap"){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Keterangan Tambahan</label>
                                    <div class="col-sm-10"><input type="text" name="keteranganTambahan" class="form-control" value="<?php echo set_value('keteranganTambahan'); ?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Berat Akhir</label>
                                    <div class="col-sm-10"><input type="text" name="beratAkhir" class="form-control" value="<?php echo set_value('beratAkhir'); ?>" placeholder="500gr" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                    <div class="col-sm-10"><input type="text" placeholder="%" name="upah" class="form-control" value="<?php echo set_value('upah'); ?>" required=""></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                    <div class="col-sm-10"><input type="text" name="panjar" class="form-control good" value="<?php echo set_value('panjar'); ?>"></div>
                                </div>
                                
                                


                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                                <!-- Modal Pilih Produk -->
                                <div class="modal inmodal fade" id="tambahProduk" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">Pilih Produk</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php echo form_open_multipart('user/createDetailPO','class="form-horizontal"')?>
                                                        <h3 class="m-t-none m-b">Pilih Salah Satu Produk</h3>
                                                        <div id="produk" class="selectpicker" data-live="true">
                                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                                <span class="placeholder">Pilih Produk</span>
                                                                <span class="caret"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                                                    <label class="sr-only" for="input-bts-ex-4">Search in the list</label>
                                                                    <div class="search-box">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="search-icon3">
                                                                                <span class="fa fa-search"></span>
                                                                                <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                                            </span>
                                                                            <input type="text" placeholder="Search in the list" id="input-bts-ex-4" class="form-control live-search" aria-describedby="search-icon3" tabindex="1" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-to-filter">
                                                                        <ul class="list-unstyled">
                                                                            <?php for ($i=0; $i < count($listProduk) ; $i++) { ?>
                                                                                <li class="filter-item items" data-filter="<?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->jenisProduk;?>" data-value="<?php echo $listProduk[$i]->kodeProduk?>"><?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->jenisProduk;?></li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                        <div class="no-search-results">
                                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="produk" id="pilihProduk" value="0" required="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="hr-line-dashed"></div>
                                                            <button id="pilih" class="btn btn-sm btn-primary pull-right m-t-n-xs" data-dismiss="modal"><strong>Pilih</strong></button>
                                                        </div>
                                                        <?php echo form_close()?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; 2018
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/inputmask.bundle.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
   <!--  <script>
    $(document).ready(function() {
        // On change of the dropdown do the ajax
        $("#pilih").on('click', function () {
            // $("[id='Emas Putih']").prop('checked',true).iCheck('update');
            $.ajax({
                    // Change the link to the file you are using
                    url: '<?php echo base_url();?>user/cariProduk',
                    type: 'post',
                    // This just sends the value of the dropdown
                    data: { kodeProduk: $("#pilihProduk").val() },
                    success: function(response) {
                        
                        // Parse the jSON that is returned
                        // Using conditions here would probably apply
                        // incase nothing is returned
                        var Vals = $.parseJSON(response);
                        console.log(Vals);
                        // var Vals    =   JSON.parse(response);
                        // These are the inputs that will populate
                        $("input[name='kodeProduk']").val(Vals[0].kodeProduk);
                        $("[id='"+Vals[0].jenisProduk+"']").prop('checked',true).iCheck('update');
                        $("[id='"+Vals[0].bahan+"']").prop('checked',true).iCheck('update');
                        $("input[name='kadarBahan']").val(Vals[0].kadarBahan);
                        $("input[name='hargaBahan']").val(Vals[0].hargaBahan);
                        $("input[name='ukuranJari']").val(Vals[0].ukuranJari);
                        $("input[name='krumWarna']").val(Vals[0].krumWarna);
                        $("input[name='keteranganKrum']").val(Vals[0].keteranganKrum);
                        $("input[name='model']").val(Vals[0].model);

                        $('#kodeProduk').prop('readonly', true);
                        $("input[name='jenisProduk']").prop('disabled',true).iCheck('update');

                        // document.getElementById("desainBelum").style.display = "none";
                        // document.getElementById("desainAda").style.display = "block";
                        // document.getElementById("desain1").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d1.jpg";
                        // document.getElementById("desain2").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d2.jpg";
                        // document.getElementById("desain3").src = "<?php echo base_url();?>uploads/gambarDesain/"+Vals[0].kodeGambar+"-d3.jpg";
                        document.getElementById("custom").style.backgroundColor = "#f7f7f7";
                    }
            });
        });
    });
    </script> -->
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
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            <?php $jawab=0; ?>
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    <?php $jawab++;?>
                    $(wrapper).append('<div></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
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
                $(wrapper).append('<div class="form-group"><div class="col-md-4 "><label>Nama Produk</label><select class="form-control m-b" name="idProdukChild[]"><?php for ($i = 0; $i < count($listProduk); $i++) { ?><option value="<?php echo $listProduk[$i]->idProduk?>"><?php echo $listProduk[$i]->kodeProduk." - ".$listProduk[$i]->namaProduk?></option><?php } ?></select></div><div class="col-md-6"><label>Keterangan</label><input type="text" name= "keteranganChild[]" placeholder="Berat / Ukuran" class="form-control" required></div><button class="btn remove_field" style="margin-top:22px;">Remove</button></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>
</body>
</html>
