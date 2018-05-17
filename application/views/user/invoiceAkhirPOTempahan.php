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
                        <strong>Biaya</strong>
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
                                    <a href="<?php echo base_url()?>user/printInvoiceAkhirTempahan/<?php echo $nomorPO?>" class="btn btn-primary btn-xs pull-right"><i class="fa fa-print"></i> Print Invoice</a>
                                    <h2 class="text-navy">Biaya</h2>
                                </div>
                            </div>
                            <?php echo form_open_multipart('user/updateInvoicePOTempahan/'.$nomorPO)?>
                            <div class="row col-lg-12">
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td width="5%"></td>
                                            <td width="45%">Nama Konsumen : <b><?php echo $namaCustomer;?></b></td>
                                            <td width="50%">Tanggal Terima : <b><?php echo $tglmsk;?></b></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td width="45%" >Nomor Telepon : <b> <?php echo $nomorTelepon;?></b></td>
                                            <td width="50%">Nama Sales  : <b><?php echo $nama;?></b></td>
                                         </tr>
                                         <tr>
                                            <td width="5%"></td>
                                            <td width="45%"><b>Nomor PO : </b><b style="color: red;"><?php echo $nomorPO;?></b></td>
                                            <td width="50%">Jenis Produk  : <b><?php echo $dataPO[0]->jenisProduk;?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr style="border-top: 3px solid #282828;">
                            </div>
                            <div class="form-group">

                                <label class="col-sm-2 control-label">Jenis Customer <br/><small class="text-navy">Pilih salah satu</small></label>
                                <div class="col-md-2">
                                    <div class="i-checks"><label> <input id="toko" type="radio" <?php $a= $dataPO[0]->jenisCustomer; if($a=="Toko"){?> checked="" <?php } ?> value="Toko" name="jenisCustomer" requiered> <i></i> Toko </label></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="i-checks"><label> <input id="perseorangan" type="radio" <?php $a=$dataPO[0]->jenisCustomer; if($a=="Perseorangan"){?> checked="" <?php } ?> value="Perseorangan" name="jenisCustomer" required> <i></i> Perseorangan </label></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <br>
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Berat Akhir </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="beratAkhir" id="beratAkhir" onchange="calc2();" value="<?php echo $beratTotal;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Berat Batu </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="beratBatu" id="beratBatu" onchange="calc2();" value="<?php echo $dataPO[0]->beratBatu;?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Susut </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="text" name="susut" onchange="calc2();" value="<?php echo $dataPO[0]->susut;?>" id="susut" class="form-control" required><div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-1" style="width:0;">gram</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="sisaBerat" id="sisaBerat" value="<?php echo $sisaBerat=$beratTotal-$dataPO[0]->beratBatu+$dataPO[0]->susut ?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-4" id="showPersen">
                                        <div class="col-sm-2 text-center" style="width:0;">X</div>
                                        <div class="col-sm-4 text-center">
                                            <input type="number" name="kadarBahan" step="any" onchange="calc2();" placeholder="%" id="kadarBahan" value="<?php echo $dataPO[0]->kadarBahan ?>" class="form-control">
                                        </div>
                                        <div class="col-sm-2 text-center" style="width:0;">X</div>
                                        <div class="col-sm-4 text-center">
                                            <input type="number" name="persenBiaya" step="any" onchange="calc2();" placeholder="%" id="persenBiaya" value="<?php echo $dataPO[0]->persenBiaya ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2"><input type="number" name="hargaBahan" onchange="calc();" placeholder="Rp" id="hargaBahan" value="<?php echo $dataPO[0]->hargaBahan ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="hidden" name="hargaAwal" id="hargaAwal" onchange="calc();" value="<?php echo $hargaAwal=$sisaBerat*(($dataPO[0]->kadarBahan+$dataPO[0]->persenBiaya)/100)*$dataPO[0]->hargaBahan;?>" placeholder="Rp"  class="form-control" readonly>
                                        <input type="text" id="hargaAwals" value="<?php echo number_format($hargaAwal,2,",",".");?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-sm-6" style="width:0;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Upah </label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php echo $dataPO[0]->upah;?>" name="upah" id="upah" onchange="calc();" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Upah Pasang Berlian (pcs x Harga)</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="jumlahDatangBerlian" id="jumlahdatangBerlian" onchange="calc3();" value="<?php echo $dataPO[0]->jumlahDatangBerlian;?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="upahPasangBerlian" id="upahPasangBerlian" onchange="calc3();" value="<?php echo $dataPO[0]->upahPasangBerlian;?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="upahBerlian" id="upahBerlian" onchange="calc();" value="<?php echo $upahBerlian=$dataPO[0]->jumlahDatangBerlian*$dataPO[0]->upahPasangBerlian; ?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="col-sm-2">
                                        <label>Berlian / Swarovski</label>
                                        <a href="<?php echo base_url();?>user/tambahBerlian/<?php echo $nomorPO ?>" type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Update Berlian</a>
                                    </div>
                                    <div class="col-sm-1" style="width:0;"></div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <?php $hargaPerBerlian=0; $hargaBerlian=0; for ($i=0; $i < count($berlian) ; $i++) { ?>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2"><?php echo $berlian[$i]->namaBerlian ?></label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php echo $berlian[$i]->harga?>" class="form-control" readonly>
                                    </div>
                                    <?php if($berlian[$i]->jenis=='Berlian') {?>
                                    <div class="col-sm-4 row">
                                        <div class="col-sm-2" style="width:0;">X</div>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $berlian[$i]->karat?>" class="form-control" readonly>
                                        </div>
                                        <div class="col-sm-2" style="width:0;">X</div>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $gold['currentRupiah']?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-sm-1" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php if($berlian[$i]->jenis=='Berlian'){ $hargaPerBerlian=$berlian[$i]->karat*$berlian[$i]->harga*$gold['currentRupiah']; echo $hargaPerBerlian; } else { $hargaPerBerlian=$berlian[$i]->harga*$berlian[$i]->jumlah; echo $hargaPerBerlian;} ?>" class="form-control" readonly>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    $hargaBerlian+=$hargaPerBerlian; 
                                } 
                            ?>
                            <input type="hidden" id="hargaBerlian" value="<?php echo $hargaBerlian; ?>">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Krum</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="hargaKrumWarna" id="hargaKrumWarna" onchange="calc();" value="<?php echo $dataPO[0]->hargaKrumWarna;?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Biaya Pekerjaan Tambahan</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="biayaTambahan" id="biayaTambahan" onchange="calc();" value="<?php echo $biayaTambahan=$dataPO[0]->hargaEnamel+$dataPO[0]->hargaSlap+$dataPO[0]->hargaKombinasi+$dataPO[0]->hargaLaserHuruf+$dataPO[0]->hargaKodeCap;?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Datang Emas</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-1"><input type="text" name="datangEmas" id="datangEmas" value="<?php echo $dataPO[0]->datangEmas;?>" class="form-control" required readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <?php if($dataPO[0]->hargaDatangEmas==0) {?>
                                    <div class="col-sm-1">
                                        <input type="text" placeholder="Rp" name="kadarDatangEmas" id="kadarDatangEmas" value="<?php echo $dataPO[0]->kadarDatangEmas ?>" class="form-control" readonly required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">X</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" value="<?php echo $gold['currentCurrency']; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="totalDatangEmas" id="totalDatangEmas" value="<?php echo $totalDatangEmas=$dataPO[0]->datangEmas*$dataPO[0]->kadarDatangEmas/100*$gold['currentCurrency'];?>" class="form-control" required readonly>
                                    </div>
                                    <?php } else { ?>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="hargaDatangEmas" id="hargaDatangEmas" value="<?php echo $dataPO[0]->hargaDatangEmas ?>" class="form-control" readonly required>
                                    </div>
                                    <div class="col-sm-1 text-center" style="width:0;">=</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="totalDatangEmas" id="totalDatangEmas" value="<?php echo $totalDatangEmas=$dataPO[0]->datangEmas*$dataPO[0]->hargaDatangEmas;?>" class="form-control" required readonly>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Panjar</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="panjar" id='panjar' value="<?php echo $dataPO[0]->panjar;?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Selisih Harga</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="selisihHarga" id="selisihHarga" onchange="calc();" value="<?php echo $dataPO[0]->selisihHarga ?>" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Biaya Total</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="hidden" name="total" id="total" value="<?php echo $totalBiaya=$hargaAwal+$dataPO[0]->upah+$upahBerlian+$biayaTambahan+$hargaBerlian+$dataPO[0]->selisihHarga+$dataPO[0]->hargaKrumWarna-($totalDatangEmas+$dataPO[0]->panjar) ?>" class="form-control" required readonly>
                                    <input type="text" id="totals" value="<?php echo number_format($totalBiaya,2,",",".");?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Diskon</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2">
                                        <input type="text" placeholder="Rp" name="diskon" id="diskon" onchange="calc();" value="<?php echo $dataPO[0]->diskon ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-2">Harga Terakhir</label>
                                    <div class="col-sm-1" style="width:0;">:</div>
                                    <div class="col-sm-2"><input type="hidden" name="hargaTerakhir" id="hargaTerakhir" value="<?php echo $hargaTerakhir=$totalBiaya-$dataPO[0]->diskon?>" class="form-control" required readonly>
                                    <input type="text" id="hargaTerakhirs" value="<?php echo number_format($hargaTerakhir,2,",",".");?>" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <a href="<?php echo base_url()?>user/invoicePO/<?php echo $nomorPO?>"><button type="button" name="submit" class="btn btn-white" value="batal">Kembali</button></a>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
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
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            var jenisCustomer= '<?php echo $dataPO[0]->jenisCustomer?>';
            if (jenisCustomer=='Toko') {
                document.getElementById('showPersen').style.display = 'block';
            } else {
                document.getElementById('showPersen').style.display = 'none';
            }

        });
    </script>
    <script type="text/javascript">
        $("#toko").on("ifChanged", produkCheck);
        $("#perseorangan").on("ifChanged", produkCheck);
        function produkCheck() {
            if ($('#toko').iCheck('update')[0].checked) {
                document.getElementById('showPersen').style.display = 'block';
            } else if($('#perseorangan').iCheck('update')[0].checked) {
                document.getElementById('showPersen').style.display = 'none';
                
                calc2()
            }
        }
    </script>
    
    <script type="text/javascript">
            function calc(){
                var hargaAwal = parseFloat(document.getElementById('hargaAwal').value);
                var upah = parseFloat(document.getElementById('upah').value);
                var upahBerlian = parseFloat(document.getElementById('upahBerlian').value);
                var hargaKrumWarna = parseFloat(document.getElementById('hargaKrumWarna').value);
                var totalDatangEmas = parseFloat(document.getElementById('totalDatangEmas').value);
                var panjar = parseFloat(document.getElementById('panjar').value);
                var biayaTambahan = parseFloat(document.getElementById('biayaTambahan').value);
                var hargaBerlian = parseFloat(document.getElementById('hargaBerlian').value);
                var selisihHarga = parseFloat(document.getElementById('selisihHarga').value);
                var diskon = parseFloat(document.getElementById('diskon').value);


                var total = hargaAwal+upah+upahBerlian+hargaKrumWarna+biayaTambahan+hargaBerlian+selisihHarga-(totalDatangEmas+panjar);
                var totals = formatNumber(total);
                document.getElementById('total').value = total;
                document.getElementById('totals').value = totals;

                var hargaTerakhir = total-diskon;
                var hargaTerakhirs = formatNumber(hargaTerakhir);
                document.getElementById('hargaTerakhir').value = hargaTerakhir;
                document.getElementById('hargaTerakhirs').value = hargaTerakhirs;
            }

            function calc2(){
                var d = parseFloat(document.getElementById('beratAkhir').value);
                var e = parseFloat(document.getElementById('beratBatu').value);
                var f = parseFloat(document.getElementById('susut').value);
                var g = parseFloat(document.getElementById('hargaBahan').value);
                var m = parseFloat(document.getElementById('persenBiaya').value);
                console.log(m);
                var h = d+f-e;
                var i = h*g*(m/100);
                var hargaAwals=formatNumber(i);
                document.getElementById('sisaBerat').value = h;
                document.getElementById('hargaAwal').value = i;
                document.getElementById('hargaAwals').value = hargaAwals;

                calc();
            };

            function calc3(){
                var j = parseFloat(document.getElementById('jumlahDatangBerlian').value);
                var k = parseFloat(document.getElementById('upahPasangBerlian').value);

                var l = j*k;

                document.getElementById('upahBerlian').value = l;

                calc();
            };

            function formatNumber (num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
            }
        </script>
</body>

</html>
