<?php 
    $idPO                   = $dataPO[0]->idPO;
    $namaCustomer           = $dataPO[0]->namaCustomer;
    $nomorTelepon           = $dataPO[0]->nomorTelepon;
    $idSalesPerson          = $dataPO[0]->idSalesPerson;
    $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
    $tanggalEstimasiPenyelesaian = $dataPO[0]->tanggalEstimasiPenyelesaian;
    $nomorPO                = $dataPO[0]->nomorPO;
    $jenisProduk            = $dataPO[0]->jenisProduk;
    $bahan                  = $dataPO[0]->bahan;
    $kadarBahan             = $dataPO[0]->kadarBahan;
    $hargaBahan             = $dataPO[0]->hargaBahan;      
    $datangEmas             = $dataPO[0]->datangEmas;
    $hargaDatangEmas        = $dataPO[0]->hargaDatangEmas;      
    $namaBatu               = $dataPO[0]->namaBatu;
    $beratBatu              = $dataPO[0]->beratBatu;
    $ukuranJari             = $dataPO[0]->ukuranJari;
    $berlian                = $dataPO[0]->berlian;
    $upah                   = $dataPO[0]->upah;
    $tipeIkatan             = $dataPO[0]->tipeIkatan;
    $metode                 = $dataPO[0]->metode;
    $krumWarna              = $dataPO[0]->krumWarna;      
    $model                  = $dataPO[0]->model;
    $kuantitas              = $dataPO[0]->kuantitas;
    $harga                  = $dataPO[0]->hargaJual;      
    $panjar                 = $dataPO[0]->panjar;
    $idProduk               = $dataPO[0]->idProduk;
    $idCustomer             = $dataPO[0]->idCustomer;
    $kodeProduk             = $dataPO[0]->kodeProduk;
    $totalHarga             = $dataPO[0]->totalHarga;
    $namaProduk             = $dataPO[0]->namaProduk;
    $kadarDatangEmas        = $dataPO[0]->kadarDatangEmas;
    $datangBerlian          = $dataPO[0]->datangBerlian;      
    $jumlahDatangBerlian    = $dataPO[0]->jumlahDatangBerlian;
    $upahPasangBerlian      = $dataPO[0]->upahPasangBerlian;
    $tipeCustomer           = $dataPO[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataPO[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataPO[0]->keteranganTambahan;
    $keteranganEnamel     = $dataPO[0]->keteranganEnamel;
    $keteranganSlap     = $dataPO[0]->keteranganSlap;
    $keteranganKombinasi     = $dataPO[0]->keteranganKombinasi;
    $keteranganLaserHuruf     = $dataPO[0]->keteranganLaserHuruf;
    $keteranganKodeCap     = $dataPO[0]->keteranganKodeCap;
    $biayaTambahan          = $dataPO[0]->biayaTambahan;
    $beratBerlian           = $dataPO[0]->beratBerlian;
    $hargaBerlian           = $dataPO[0]->hargaBerlian;
    $batuZirkon             = $dataPO[0]->batuZirkon;      
    $jumlahBatuZirkon       = $dataPO[0]->jumlahBatuZirkon;
    $hargaBatuZirkon        = $dataPO[0]->hargaBatuZirkon;
    $hargaKrumWarna         = $dataPO[0]->hargaKrumWarna;
    $keteranganKrum         = $dataPO[0]->keteranganKrum;
    $budget                 = $dataPO[0]->budget;
    $kodeGambar             = $dataPO[0]->kodeGambar;
    $batuTerhadapKruman     = $dataPO[0]->batuTerhadapKruman;
    $batuTerhadapPukulan    = $dataPO[0]->batuTerhadapPukulan;
    $batuTerhadapGoresan    = $dataPO[0]->batuTerhadapGoresan;
    $keadaanBatuTengah      = $dataPO[0]->keadaanBatuTengah;
    $estimasi               = $dataPO[0]->estimasi;
    $keteranganBatu         = $dataPO[0]->keteranganBatu;
    $beratAkhir             = $dataPO[0]->beratAkhir;
    $susut                  = $dataPO[0]->susut;
    $jenisCustomer          = $dataPO[0]->jenisCustomer;
    $persenBiaya            = $dataPO[0]->persenBiaya;
    $tglmsk     = new DateTime($tanggalMasuk);
    $tglmsk     = $tglmsk->format("d F Y");
    $tglpyl     = new DateTime($tanggalEstimasiPenyelesaian);
    $tglpyl     = $tglpyl->format("d F Y");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    html {
        background: white;
        color: black;
        font: 14px 'Helvetica Neue', Arial, sans-serif;
    }
    body {
        padding: 1em 10em 1em 10em ;
    }
    section {
        clear: both;
        margin-top: 3em;
    }
    li {
        list-style-type: disc;
    }
    section > ul > li,
    header > ul > li {
        list-style-type: none;
        margin-bottom: .5em;
    }
    .headline-name {
        border-bottom: 1px solid black;
        padding-bottom: .5em;
    }
    .contact-column {
        float: left;
        padding: 0 1px;
    }
    .header-title > p {
        margin-top: -7px;
    }

    .header-section h3 {
        margin-top: -5px;
    }
    a,
    a:link,
    a:visited {
        border-bottom: 1px dotted rgb(0, 120, 180);
        color: rgb(0, 120, 180);
        padding: .2em .1em;
        text-decoration: none;
    }
    a:focus,
    a:hover,
    a:active {
        background-color: rgb(255, 245, 0);
        border-bottom: 1px solid rgb(0, 120, 180);
        color: rgb(0, 120, 180);
    }
    @media (min-width: 992px) {
        .contact-column {
            margin-left: 0.1em;
        }
        .contact-column.right {
            float: right;
        }
    }
    @media (max-width: 776px) {
        ul {
            margin-left: 0;
            margin-right: 0;
            padding-left: 0;
            padding-right: 0;
        }
    }
    @media print {
        html {
            color: black;
            font-size: 12px;
        }
        body {
            margin: 1em auto;
            padding: 1em  2em 1em 2em;
            width: 100%;
        }
        section {
            margin-top: 1em;
        }
        a,
        a:link,
        a:visited {
            border: none;
            color: black;
        }

        .header-section h3 {
            margin: 20px auto;
            text-align: center;
        }

        .toolbox {
            display: none;
        }

        #footer ul {
            margin:0 5px 0 20px;
        }
    }

    </style>
    <style type="text/css" media="print">
    @page {
        size: auto;   /* auto is the initial value */
        margin: 0;  /* this affects the margin in the printer settings */
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header-title text-center">
                <h2><b>PT. SURYA SUMATERA</b></h2>
                <P>Menerima Tempahan Cincin, Gelang, Liontin, Dll.</P>
                <P>Jalan Sekip Baru No.30 Medan Telp. 061 - 4520404</P>
            </div>

            <div class="header-section row">
                <div class="col-lg-4">
                    <h3>INVOICE</h3>
                </div>
                <div class="toolbox col-lg-8 text-right">
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.location='<?php echo base_url()?>user/purchaseOrder'">
                        <span style="vertical-align: middle"> < Kembali </span>
                    </a>&nbsp
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.print()">
                        <span style="vertical-align: middle">Cetak</span>
                        <img src="https://ecs7.tokopedia.net/img/print.png" alt="Print" style="vertical-align: middle;">
                    </a>
                </div>
            </div> 
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
                        <td width="50%">Siap Tanggal : <b> <?php echo $tglpyl;?></b></td>
                     </tr>
                     <tr>
                        <td width="5%"></td>
                        <td width="45%" >Produk : <b><?php echo $jenisProduk;?></b></td>
                        <td width="50%">Nama Sales  : <b><?php echo $dataPO[0]->nama;?></b></td>
                     </tr>
                     <tr>
                        <td width="5%"></td>
                        <td width="45%" ><b>Nomor PO : </b><b style="color: red;"><?php echo $nomorPO;?></b></td>
                        <td width="50%"></td>
                     </tr>
                </tbody>
            </table>
            <hr style="border-top: 3px solid #282828;">
        </header>
        <section id="detailProduk">
            <table class="table no-border">
                <thead>
                    <tr>
                        <th>Keterangan</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-right">Harga Satuan</th>
                        <th class="text-right">Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                           Berat Total <br>
                           (Berat Akhir - Berat Batu + Susut)<br>
                           <?php echo '('.$beratTotal.'gr - '.$beratBatu.'gr + '.$susut.'gr)'?>
                        </td>
                        <td class="text-center">
                            <label><?php echo $sisaBerat=$beratTotal-$beratBatu+$susut?> gr</label>
                        </td>
                        <td>
                            <label class="text-muted pull-right">Rp. <?php echo number_format($hargaBahan,2,",","."); ?></label>
                        </td>
                        <td>
                           <label class="text-muted pull-right"> Rp. <?php if($dataPO[0]->jenisCustomer=="Toko"){ $hargaAwal=$sisaBerat*(($dataPO[0]->kadarBahan+$dataPO[0]->persenBiaya)/100)*$dataPO[0]->hargaBahan; }else{$hargaAwal=$sisaBerat*$dataPO[0]->hargaBahan;}; echo number_format($hargaAwal,2,',','.'); ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Upah
                        </td>
                        <td class="text-center">
                            <label>-</label>
                        </td>
                        <td class="text-right">
                            <label class="text-muted pull-right">-</label>
                        </td>
                        <td>
                           <label class="text-muted pull-right"> Rp. <?php echo number_format($upah,2,",","."); ?></label>
                        </td>
                    </tr>
                    <tr id="datangBerlian">
                        <td>
                           Upah Pasang Berlian
                        </td>
                        <td class="text-center">
                            <label> <?php if($datangBerlian==NULL || $datangBerlian==0){echo 0;} else { echo $datangBerlian;}?> Pcs</label>
                        </td>
                        <td>
                           <label class="text-muted pull-right"> Rp. <?php echo number_format($upahPasangBerlian,2,",","."); ?></label>
                        </td>
                        <td>
                           <label class="text-muted pull-right"> Rp. <?php echo number_format($upahBerlian=$datangBerlian*$upahPasangBerlian,2,",","."); ?></label>
                        </td>
                    </tr>
                    <?php $hargaPerBerlian=0; $hargaBerlian=0; for ($y=0; $y < count($poberlian) ; $y++) { ?>
                    <?php if($dataPO[0]->jenisCustomer=='Toko'){?>
                    <tr>
                        <td>
                            <?php if($poberlian[$y]->jenis=='Berlian'){ echo $poberlian[$y]->namaBerlian.' ('.$poberlian[$y]->karat.')';}else{echo $poberlian[$y]->namaBerlian;}?>
                        </td>
                        <td class="text-center">
                            <label><?php if($poberlian[$y]->jenis=='Berlian'){echo $poberlian[$y]->karat.' Ct'; } else { echo $poberlian[$y]->jumlah.' Pcs';}?></label>
                        </td>
                        <td class="text-center">
                            <label class="text-muted pull-right"> <?php if($poberlian[$y]->jenis=='Berlian'){ $satuanBerlian=$poberlian[$y]->karat*$poberlian[$y]->harga*$gold['currentRupiah']; echo '$ '.number_format($poberlian[$y]->harga,0,",",".").' (Rp. '.number_format($gold['currentRupiah'],0,",",".").')'; } else { $satuanBerlian=$poberlian[$y]->harga; echo 'Rp. '.number_format( $satuanBerlian,0,",",".");} ?></label>
                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaPerBerlian=$poberlian[$y]->jumlah*$satuanBerlian,2,",","."); ?></label>
                        </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td>
                            <?php echo $poberlian[$y]->namaBerlian ?>
                        </td>
                        <td class="text-center">
                            <label><?php if($poberlian[$y]->jenis=='Berlian'){echo $poberlian[$y]->karat.' Ct'; } else { echo $poberlian[$y]->jumlah.' Pcs';}?></label>
                        </td>
                        <td class="text-center">
                            <label class="text-muted pull-right"> <?php if($poberlian[$y]->jenis=='Berlian'){ $satuanBerlian=$poberlian[$y]->harga*$gold['currentRupiah']; echo 'Rp '.number_format($satuanBerlian,2,",","."); } else { $satuanBerlian=$poberlian[$y]->harga; echo 'Rp. '.number_format( $satuanBerlian,2,",",".");} ?></label>

                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php if($poberlian[$y]->jenis=='Berlian'){ echo number_format($hargaPerBerlian=$poberlian[$y]->karat*$satuanBerlian,2,".",".");} else {echo number_format($hargaPerBerlian=$poberlian[$y]->jumlah*$satuanBerlian,2,".",".");} ?></label>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php 
                            $hargaBerlian+=$hargaPerBerlian; 
                        } 
                    ?>
                    <tr>
                        <td>
                           Harga Krum Warna
                        </td>
                        <td class="text-center">
                            <label>-</label>
                        </td>
                        <td class="text-right">
                            <label class="text-muted pull-right">-</label>
                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php echo number_format($hargaKrumWarna,2,",","."); ?></label>
                        </td>
                    </tr>
                    <tr id="pekerjaanTambahan">
                        <td>
                           Pekerjaan Tambahan <br>
                           (<?php echo $pekerjaanTambahan ?>)
                        </td>
                        <td class="text-center">
                            <label>-</label>
                        </td>
                        <td>
                            <label class="text-muted pull-right">-</label>
                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php echo number_format($biayaTambahan=$dataPO[0]->hargaEnamel+$dataPO[0]->hargaSlap+$dataPO[0]->hargaKombinasi+$dataPO[0]->hargaLaserHuruf+$dataPO[0]->hargaKodeCap,2,",","."); ?></label>
                        </td>
                    </tr>
                    <tr id="datangEmas">
                        <td>
                           Datang Emas
                        </td>
                        <td class="text-center">
                            <label><?php echo $dataPO[0]->datangEmas;?> gr</label>
                        </td>
                        <?php if($dataPO[0]->hargaDatangEmas==0) {?>
                        <td>
                            <label class="text-muted pull-right"><?php echo $dataPO[0]->kadarDatangEmas.'% (Rp '.number_format($gold['currentCurrency'],2,",",".").')';?></label>
                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php echo number_format($totalDatangEmas=$dataPO[0]->datangEmas*$dataPO[0]->kadarDatangEmas/100*$gold['currentCurrency'],2,",","."); ?></label>
                        </td>
                        <?php } else {?>
                        <td>
                            <label class="text-muted pull-right">Rp. <?php echo number_format($dataPO[0]->hargaDatangEmas,2,",",".");?></label>
                        </td>
                        <td>
                            <label class="text-muted pull-right"> Rp. <?php echo number_format($totalDatangEmas=$dataPO[0]->datangEmas*$dataPO[0]->hargaDatangEmas,2,",","."); ?></label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                        <td class="text-left" colspan="3"><strong>Total Harga</strong></td>
                        <td class="text-right" ><strong>Rp. <?php echo number_format($total=$hargaAwal+$upah+$hargaBerlian+$upahBerlian+$biayaTambahan+$hargaKrumWarna-$totalDatangEmas,2,",",".");?></strong></td>
                    </tr>
                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                        <td class="text-left" colspan="3"><strong>Panjar</strong></td>
                        <td class="text-right" ><strong>Rp. <?php echo number_format($panjar,2,",",".");?></strong></td>
                    </tr>
                </tbody>
            </table>
            
        </section>
        <section id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <hr style="border-top: 3px solid #282828;">
                    <h4><b>Biaya yang harus dibayar: </b><strong class="pull-right">Rp. <?php echo number_format($sisaBayar=$total-$panjar,2,",",".");?></h4>
                </div>
            </div>
        </section>
    </div>
    

<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
<script>
    $(document).ready(function () {


        var c = <?php echo $jumlahDatangBerlian?>;
        if(c==null||c==0){
            document.getElementById('datangBerlian').style.display = 'none';
        };

        var g = <?php echo $datangEmas?>;
        if(g==null||g==0){
            document.getElementById('datangEmas').style.display = 'none';
        };

        var h = '<?php echo $pekerjaanTambahan?>';
        if(h=='Tidak Ada'){
            document.getElementById('pekerjaanTambahan').style.display = 'none';
        };
        
    });
</script>
    
</body>


</html>
