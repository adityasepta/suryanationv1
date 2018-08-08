<?php 
  $idPO=$dataPO[0]->idPO;
  if($this->input->post('is_submitted')){
        $nomorPO           = set_value('nomorPO');
        $idProduk          = set_value('idProduk');
        $idCustomer        = set_value('idCustomer');
        $idSalesPerson     = set_value('idSalesPerson');
        $tanggalMasuk      = set_value('tanggalMasuk');
        $tanggalEstimasiPenyelesaian    = set_value('tanggalEstimasiPenyelesaian');
        $hargaBahan        = set_value('hargaBahan');
        $upah              = set_value('upah');
        $datangEmas        = set_value('datangEmas');
        $panjar            = set_value('panjar');
        $beratAkhir        = set_value('beratAkhir');
        $totalHarga        = set_value('totalHarga');
        $tipeOrder         = set_value('tipeOrder');
        $kadarDatangEmas   = set_value('kadarDatangEmas');
        $tipeCustomer      = set_value('tipeCustomer');
        $pekerjaanTambahan = set_value('pekerjaanTambahan');
        $keteranganTambahan= set_value('keteranganTambahan');
        $bahan             = set_value('bahan');
        $kadarBahan        = set_value('kadarBahan');
        $ukuranJari        = set_value('ukuranJari');
        $krumWarna         = set_value('krumWarna');
        $model             = set_value('model');
        $keteranganKrum    = set_value('keteranganKrum');
  }
  else {
        $nomorPO           = $dataPO[0]->nomorPO;
        $idProduk          = $dataPO[0]->idProduk;
        $idCustomer        = $dataPO[0]->idCustomer;
        $idSalesPerson     = $dataPO[0]->idSalesPerson;
        $tanggalMasuk      = $dataPO[0]->tglmsk;
        $tanggalEstimasiPenyelesaian    = $dataPO[0]->tglpsy;
        $hargaBahan        = $dataPO[0]->hargaBahan;
        $upah              = $dataPO[0]->upah;
        $datangEmas        = $dataPO[0]->datangEmas;
        $panjar            = $dataPO[0]->panjar;
        $beratAkhir        = $dataPO[0]->beratAkhir;
        $totalHarga        = $dataPO[0]->totalHarga;
        $tipeOrder         = $dataPO[0]->tipeOrder;
        $kadarDatangEmas   = $dataPO[0]->kadarDatangEmas;
        $tipeCustomer      = $dataPO[0]->tipeCustomer;
        $pekerjaanTambahan = $dataPO[0]->pekerjaanTambahan;
        $keteranganTambahan= $dataPO[0]->keteranganTambahan;
        $bahan             = $dataPO[0]->bahan;
        $kadarBahan        = $dataPO[0]->kadarBahan;
        $ukuranJari        = $dataPO[0]->ukuranJari;
        $krumWarna         = $dataPO[0]->krumWarna;
        $model             = $dataPO[0]->model;
        $keteranganKrum    = $dataPO[0]->keteranganKrum;
  }
  $tglmsk = new DateTime($tanggalMasuk);
  $tglmsk = $tglmsk->format("Y-m-d");
  $tglpyl = new DateTime($tanggalEstimasiPenyelesaian);
  $tglpyl = $tglpyl->format("Y-m-d");
?>
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
                    <h2>Edit PO</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order</a>
                        </li>
                        <li class="active">
                            <strong>Edit Purchase Order</strong>
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
                            <h5>Edit Purchase Order Massal <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Nomor PO <?php echo $nomorPO ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><strong>Pembeli </strong><?php echo $dataPO[0]->namaCustomer ?> | <?php echo $dataPO[0]->nomorTelepon ?></p>
                                    <hr>
                                </div>
                            </div>
                            <?php echo form_open_multipart('user/updatePOMassal/'.$idPO,'class="form-horizontal"')?>
                                <input type="hidden" name="nomorPO" value="<?php echo $nomorPO;?>">
                                <input type="hidden" name="kodeProduk" value="<?php echo $dataPO[0]->kodeProduk ?>">
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <select id="idSalesPerson" class="form-control"  name="idSalesPerson">
                                                    <?php $ky=count($pegawai); for ($i=0; $i < $ky ; $i++) { ?> 
                                                        <option value="<?php echo $pegawai[$i]->idUser ?>" <?php $a= $idSalesPerson; if($a==$pegawai[$i]->idUser){?> selected="" <?php } ?>><?php echo $pegawai[$i]->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Terima</label>
                                                <input type="date" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?php echo $tanggalMasuk; ?>" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Estimasi Penyelesaian</label>
                                                <input type="date" placeholder="Estimasi Penyelesaian" name="tanggalEstimasiPenyelesaian" value="<?php echo $tanggalEstimasiPenyelesaian; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div id="produkDetail">
                                    <div id="contentHeader" style="background-color: #e8e8e8; height: 30px; padding: 3px 0 2px 8px;">
                                        <h5>Detail Produk</h5>
                                    </div>
                                    <div id="contentDetail" style="padding: 15px; background-color: #f7f7f7;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Kode Produk <strong><?php echo $dataPO[0]->kodeProduk ?></strong> | <small>Jenis Produk <?php echo $dataPO[0]->jenisProduk ?></small></h4>
                                                <hr>
                                                <?php for ($y=0; $y < count($produkPO) ; $y++) { ?>
                                                <div class="form-group" id="del<?php echo $y ?>">
                                                    <div class="col-md-4 ">
                                                        <label>Nama Produk</label>
                                                        <select class="form-control m-b" name="idProdukChild[]">
                                                            <?php for ($i = 0; $i < count($listProduk); $i++) { ?>
                                                                <option value="<?php echo $listProduk[$i]->idProduk?>" <?php if($listProduk[$i]->idProduk == $produkPO[$y]->idProdukChild){?> selected <?php } ?> ><?php echo $produkPO[$y]->kodeProduk." - ".$listProduk[$i]->namaProduk?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Keterangan</label>
                                                        <input type="text" name="keteranganChild[]" placeholder="Berat / Ukuran" class="form-control" value="<?php echo $produkPO[$y]->keterangan ?>">
                                                    </div>
                                                    <button type="button" class="btn remove_field" style="margin-top:22px;" onclick="removeDummy<?php echo $y ?>()">Remove</button>
                                                </div>
                                                <?php } ?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input_fields_wrap" >
                                                            <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Produk</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Bahan <small class="text-navy"> Pilih salah satu</small></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Kuning"){?> checked="" <?php } ?> value="Emas Kuning" name="bahan" required> <i></i> Emas Kuning </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Swasa"){?> checked="" <?php } ?> value="Swasa" name="bahan"> <i></i> Swasa </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Rose Gold"){?> checked="" <?php } ?> value="Rose Gold" name="bahan"> <i></i> Rose Gold </label></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Emas Putih"){?> checked="" <?php } ?> value="Emas Putih" name="bahan"> <i></i> Emas Putih </label></div>
                                                        <div class="i-checks"><label> <input type="radio" <?php $a= $bahan; if($a=="Perak"){?> checked="" <?php } ?> value="Perak" name="bahan"> <i></i> Perak </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Kadar Bahan</label>
                                                <input type="text" name="kadarBahan" placeholder="%" value="<?php echo $kadarBahan; ?>"  class="form-control" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Harga Pasaran</label>
                                                <input type="text" placeholder="Rp" name="hargaBahan" class="form-control good" value="<?php echo $hargaBahan; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Ukuran Jari / Tangan</label>
                                            <div class="col-sm-10"><input type="text" name="ukuranJari" class="form-control" value="<?php echo $ukuranJari; ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                                            <div class="col-sm-10"><input type="text" name="model" class="form-control" value="<?php echo $model; ?>"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Krum Warna</label>
                                            <div class="col-sm-10"><input type="text" name="krumWarna" class="form-control" value="<?php echo $krumWarna; ?>"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Krum</label>
                                            <div class="col-sm-10"><input type="text" name="keteranganKrum" class="form-control" value="<?php echo $keteranganKrum; ?>"></div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Datang Emas </label>
                                                        <input type="text" placeholder="gr" name="datangEmas" value="<?php echo $datangEmas; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Kadar Datang Emas</label>
                                                        <input type="text" name="kadarDatangEmas" placeholder="%" value="<?php echo $kadarDatangEmas; ?>"  class="form-control">
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
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Slap") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Slap" name="pekerjaanTambahan[]" > <i></i> Slap </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Kombinasi") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Kombinasi" name="pekerjaanTambahan[]"> <i></i> Kombinasi </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="checkbox" <?php $a=0; for ($i=0; $i < count($pekerjaan) ; $i++) { 
                                                    if ($pekerjaan[$i]=="Kode Cap") { $a++; }
                                                } if($a>0){?> checked="" <?php } ?> value="Kode Cap" name="pekerjaanTambahan[]"> <i></i> Kode Cap </label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Keterangan Tambahan</label>
                                            <div class="col-sm-10"><input type="text" name="keteranganTambahan" class="form-control" value="<?php echo $keteranganTambahan; ?>"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tipe Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Teliti"){?> checked="" <?php } ?> value="Teliti" name="tipeCustomer" > <i></i> Teliti </label></div>
                                            </div>
                                            <div class="col-sm-2" style="padding-top: 10px;">
                                                <div class="i-checks"><label> <input type="radio" <?php $a= $tipeCustomer; if($a=="Standard"){?> checked="" <?php } ?> value="Standard" name="tipeCustomer"> <i></i> Standard </label></div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Berat Akhir</label>
                                            <div class="col-sm-10"><input type="text" name="beratAkhir" class="form-control" value="<?php echo $beratAkhir; ?>" placeholder="500gr" required=""></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Upah</label>
                                            <div class="col-sm-10"><input type="text" placeholder="%" name="upah" class="form-control" value="<?php echo $upah; ?>" required=""></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Panjar</label>
                                            <div class="col-sm-10"><input type="text" name="panjar" class="form-control good" value="<?php echo $panjar; ?>"></div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
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
        
        var x = <?php echo count($produkPO)?>; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group"><div class="col-md-4 "><label>Nama Produk</label><datalist id="listofproduk"><?php for ($i = 0; $i < count($listProduk); $i++) { ?><option value="<?php echo $listProduk[$i]->namaProduk?>" data-value="<?php echo $listProduk[$i]->idProduk?>"><?php } ?></datalist><input type="text" id="prod'+x+'" list="listofproduk" class="form-control"><input type="hidden" id="sb'+x+'" name="idProdukChild[]"></div><div class="col-md-6"><label>Keterangan</label><input type="text" name= "keteranganChild[]" placeholder="Berat / Ukuran" class="form-control" required></div><button class="btn remove_field" style="margin-top:22px;">Remove</button></div>'); //add input box
            }
            var data = {}; 
                $("#listofproduk option").each(function(i,el) {  
                   data[$(el).data("value")] = $(el).val();
                });

                $('#prod'+x).on('change',function()
                {
                    var vale = $('#prod'+x).val();
                    document.getElementById('sb'+x).value=$('#listofproduk [value="' + vale + '"]').data('value');
            });
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>
    <script type="text/javascript">
        <?php for ($y=0; $y < count($produkPO) ; $y++) { ?>
        function removeDummy<?php echo $y ?>() {
            var elem = document.getElementById('del<?php echo $y ?>');
            elem.parentNode.removeChild(elem);
            return false;
        }
        <?php } ?>
    </script>
</body>

</html>
