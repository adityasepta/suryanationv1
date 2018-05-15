<?php 
    $namaCustomer           = $PO[0]->namaCustomer;
    $nomorTelepon           = $PO[0]->nomorTelepon;
    $idSalesPerson          = $PO[0]->idSalesPerson;
    $tanggalMasuk           = $PO[0]->tanggalMasuk;
    $nomorPO                = $PO[0]->nomorPO;
    $nama                   = $PO[0]->nama;
    $namaProduk             = $PO[0]->namaProduk;
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
                            <strong>Create Invoice Akhir</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="title-action">
                        <a href="<?php echo base_url()?>user/printInvoicePerseorangan/<?php echo $nomorPO?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a>
                    </div> -->
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/invoiceTempahan/')?>
                            <input type="hidden" name="jenisTempahan" value="perseorangan" class="form-control">
                            <input type="hidden" name="nomorPO" value="<?php echo $nomorPO?>" class="form-control">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <h5 class="text-muted"><?php echo $namaCustomer?></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor PO</label>
                                                <h5 class="text-muted"><?php echo $nomorPO?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                <h5 class="text-muted"><?php echo $nomorTelepon?></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Produk</label>
                                                <h5 class="text-muted"><?php echo $namaProduk?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Sales Person</label>
                                                <h5 class="text-muted"><?php echo $nama?></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tanggal Terima</label>
                                                <h5 class="text-muted"><?php echo $tglmsk;?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Berat Total </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="beratTotal" id="beratTotal" onchange="calc();" value="<?php echo $beratTotal;?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Berat Batu </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="beratBatu" id="beratBatu" value="<?php echo $PO[0]->beratBatu;?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Susut </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="susut" value="0" id="susut" onchange="calc();"  class="form-control" required><div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="beratAkhir" id= "beratAkhir" value="" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2"><input type="number" name="hargaAkhir" onchange="calc();" placeholder="Rp" id="hargaAkhir" value="" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2"><input type="text" name="berathargaAkhir" id="berathargaAkhir" value="" placeholder="Rp"  class="form-control" required readonly>
                                        <input type="hidden" name="berathargaAkhir2" id="berathargaAkhir2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Upah </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->upah,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" name="upah" id="upah" placeholder="Rp" value="<?php echo$PO[0]->upah;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Upah Pasang Berlian (pcs x Harga)</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="jumlahDatangBerlian" id= "jumlahDatangBerlian" value="<?php echo $PO[0]->jumlahDatangBerlian;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->upahPasangBerlian,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" placeholder="Rp" name="upahPasangBerlian" id="upahPasangBerlian" value="<?php echo $PO[0]->upahPasangBerlian;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->jumlahDatangBerlian*$PO[0]->upahPasangBerlian,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" placeholder="Rp" name="upahBerlian" id="upahBerlian" value="<?php echo $PO[0]->jumlahDatangBerlian*$PO[0]->upahPasangBerlian;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">CZ (pcs x Harga)</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="jumlahBatuZirkon" id="jumlahBatuZirkon" value="<?php echo $PO[0]->jumlahBatuZirkon?>" onchange="calc1()" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="hargaBatuZirkon" onchange="calc1()" id="hargaBatuZirkon" value="<?php echo $PO[0]->hargaBatuZirkon?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="upahCZ" id="upahCZ" value="<?php echo $PO[0]->jumlahBatuZirkon*$PO[0]->hargaBatuZirkon?>" class="form-control" required readonly>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Krum</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->hargaKrumWarna,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" text" placeholder="Rp" name="hargaKrumWarna" id="hargaKrumWarna" value="<?php echo $PO[0]->hargaKrumWarna;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Datang Emas</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="datangEmas" id="datangEmas" value="<?php echo $PO[0]->datangEmas;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->hargaDatangEmas,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" placeholder="Rp" name="hargaDatangEmas" id="hargaDatangEmas" value="<?php echo $PO[0]->hargaDatangEmas;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->datangEmas*$PO[0]->hargaDatangEmas,2,".",".");?>" class="form-control" required readonly>
                                        <input type="hidden" placeholder="Rp" name="totalDatangEmas" id="totalDatangEmas" value="<?php echo $PO[0]->datangEmas*$PO[0]->hargaDatangEmas;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Panjar</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="Rp <?php echo number_format($PO[0]->panjar,2,".","."); ?>" class="form-control" required readonly>
                                        <input type="hidden" placeholder="Rp" name="panjar" id='panjar' value="<?php echo $PO[0]->panjar;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Total</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" placeholder="Rp" name="total" id="total" class="form-control" required readonly>
                                        <input type="hidden" name="total2" id='total2' class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/createInvoiceAkhirPO"><button type="button" name="submit" class="btn btn-white" value="batal">Kembali</button></a>
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
        function calc1(){
            
            var a = parseFloat(document.getElementById('jumlahBatuZirkon').value);
            var b = parseFloat(document.getElementById('hargaBatuZirkon').value);
            var c = a*b;
            document.getElementById('upahCZ').value = c;
        };
    </script>
    <script type="text/javascript">
            function calc(){
                    var beratTotal = parseFloat(document.getElementById('beratTotal').value);
                    var beratBatu = parseFloat(document.getElementById('beratBatu').value);
                    var susut = parseFloat(document.getElementById('susut').value);

                            var beratAkhir = beratTotal-beratBatu+susut;
                    document.getElementById('beratAkhir').value = beratAkhir;
                    var beratAkhir = parseFloat(document.getElementById('beratAkhir').value);
                    var hargaAkhir = parseFloat(document.getElementById('hargaAkhir').value);

                            var berathargaAkhir = beratAkhir*hargaAkhir;
                            var textBeratHargaAkhir = formatNumber(berathargaAkhir);
                    document.getElementById('berathargaAkhir2').value = berathargaAkhir;
                    document.getElementById('berathargaAkhir').value = textBeratHargaAkhir;

                    //var berathargaAkhir = parseFloat(document.getElementById('berathargaAkhir').value);

                    var upah = parseFloat(document.getElementById('upah').value);
                    var upahPasangBerlian = parseFloat(document.getElementById('upahPasangBerlian').value);
                    var jumlahDatangBerlian = parseFloat(document.getElementById('jumlahDatangBerlian').value);

                            var upahBerlian = upahPasangBerlian*jumlahDatangBerlian;
                    document.getElementById('upahBerlian').value = upahBerlian;
                    var upahBerlian = parseFloat(document.getElementById('upahBerlian').value);
                    var jumlahBatuZirkon = parseFloat(document.getElementById('jumlahBatuZirkon').value);
                    var hargaBatuZirkon = parseFloat(document.getElementById('hargaBatuZirkon').value);

                            var upahCZ = jumlahBatuZirkon*hargaBatuZirkon;
                    document.getElementById('upahCZ').value = upahCZ;
                    var upahCZ = parseFloat(document.getElementById('upahCZ').value);
                    var hargaKrumWarna = parseFloat(document.getElementById('hargaKrumWarna').value);
                    var datangEmas = parseFloat(document.getElementById('datangEmas').value);
                    var hargaDatangEmas = parseFloat(document.getElementById('hargaDatangEmas').value);
                    var panjar = parseFloat(document.getElementById('panjar').value);

                            var totalDatangEmas = datangEmas*hargaDatangEmas;
                    document.getElementById('totalDatangEmas').value = totalDatangEmas;
                    var totalDatangEmas = parseFloat(document.getElementById('totalDatangEmas').value);

                    var total = berathargaAkhir+upah+upahBerlian+upahCZ+hargaKrumWarna-totalDatangEmas-panjar;
                    var total1 = formatNumber(total);
                     console.log(berathargaAkhir);
                     console.log(upah);
                     console.log(upahBerlian);
                     console.log(upahCZ);
                     console.log(hargaKrumWarna);
                     console.log(totalDatangEmas);
                     console.log(panjar);
                    document.getElementById('total').value = total1;
                    document.getElementById('total2').value = total;

                }


                function formatNumber (num) {
                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
                }
        </script>
        <script type="text/javascript">
            
        </script>

</body>

</html>
