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
        margin-top: 1em;
    }
    li {
        list-style-type: disc;
    }
    section > ul > li,
    header > ul > li {
        list-style-type: none;
        margin-bottom: .5em;
    }
    .less-space>tbody>tr>td {
        padding: 4px;

    }
    .holding>tbody>tr>td {
        padding: 0px;
        border-top: 0px;
        margin-bottom: -5px;
    }
    .table {
        margin-bottom: -5px;
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
            margin: auto;
            padding: 2px  2em 1em 2em;
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
            margin: 2px auto;
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
                    <h3>FORM ORDER TEMPAHAN</h3>
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
            <table class="table holding">
                <tbody>
                    <tr>
                        <td width="50%">
                            <table class="table no-border less-space">
                                <tbody>
                                    <tr>
                                        <td>Nama Konsumen</td>
                                        <td>: <b><?php echo $namaCustomer;?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td>: <b> <?php echo $nomorTelepon;?></b></td>
                                     </tr>
                                     <tr>
                                        <td><b>No PO / <b style="color: red;"><?php echo $nomorPO;?></b></td>
                                        <td></td>
                                     </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="50%">
                            <table class="table no-border less-space">
                                <tbody>
                                    <tr>
                                        <td>Tanggal Terima</td>
                                        <td>: <b><?php echo $tglmsk;?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Siap Tanggal</td>
                                        <td>: <b> <?php echo $tglpyl;?></b></td>
                                     </tr>
                                     <tr>
                                        <td>Nama Sales</td>
                                        <td>: <b><?php echo $dataPO[0]->nama;?></b></td>
                                     </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr style="border-top: 3px solid #282828;">
        </header>
        <section id="detailProduk">
            <table class="table no-border less-space">
                <tbody>
                    <tr>
                        <td width="20%"><b>Jenis Produk</b></td>
                        <td width="18%">: <?php echo $jenisProduk ?> </td>
                        <td width="18%"></td>
                        <td width="16%"></td>
                        <td width="10%"><b>Upah</b></td>
                        <td >: Rp <?php echo number_format($upah,2,',','.') ?></td>
                    </tr>
                    <tr>
                        <td><b>Bahan</b></td>
                        <td>: <?php echo $bahan ?> </td>
                        <td><b>Kadar</b></td>
                        <td>: <?php echo $kadarBahan; if($jenisCustomer=="Toko"){ echo "% + Pen".$persenBiaya;}?>%</td>
                        <td><b>Harga</b></td>
                        <td>: <?php if($jenisCustomer=="Toko"){ echo "Rp ".number_format($hargaBahan,2,',','.');} else { echo "Rp ".number_format($hargaBahan,2,',','.');}?></td>
                    </tr>
                    <tr id="datangEmas">
                        <td><b>Datang Emas</b></td>
                        <td>: <?php echo $datangEmas ?> </td>
                        <?php if($kadarDatangEmas!=0) {?>
                        <td><b>Kadar</b></td>
                        <td colspan="3">: <?php echo $kadarDatangEmas ?>%</td>
                        <?php } else { ?>
                        <td><b></b></td>
                        <td></td>
                        <td>Harga Per Gram</td>
                        <td>: <?php if($jenisCustomer=="Toko"){ echo "Rp ".number_format($hargaDatangEmas,2,',','.');} else { echo "Rp ".number_format($hargaDatangEmas,2,',','.');}?></td>
                        <?php } ?>
                    </tr>
                    <?php if(($datangBerlian!=0 && $jumlahDatangBerlian!=0) || ($datangBerlian!=NULL && $jumlahDatangBerlian!=NULL)) {?>
                    <tr>
                        <td><b>Datang Berlian</b></td>
                        <td>: <?php echo $datangBerlian ?> pcs</td>
                        <td><b>Berat</b></td>
                        <td>: <?php echo $jumlahDatangBerlian ?> cr</td>
                        <td><b>Harga / Gram</br></td>
                        <td>: <?php echo "Rp ".number_format($upahPasangBerlian,2,',','.');?></td>
                    </tr>
                    <?php }?>
                    <tr>                  
                        <td><b>Berat Estimasi</b></td>
                        <td>: <?php echo $beratAkhir ?> gr </td>
                        <td><b>Range Berat</b></td>
                        <td colspan="3">: <?php echo $estimasi ?> gr</td>
                    </tr>
                    <tr>
                        <td><b>Susut</b></td>
                        <td>: <?php echo $susut ?> gr</td>
                        <td><b>Ukuran</b></td>
                        <td colspan="3">: <?php echo $ukuranJari ?></td>
                    </tr>
                    <?php for ($b=0; $b < count($poberlian) ; $b++) { ?>
                    <tr>
                        <td><?php if(count($poberlian)>0 && $b==0){?><b>Berlian / Swarovski<?php } ?></b></td>
                        <td>: <?php echo $poberlian[$b]->namaBerlian ?></td>
                        <td></td>
                        <td></td>
                        <td><b>Harga CZ</b></td>
                        <td>: <?php if($poberlian[$b]->jenis=='Berlian'){ echo '$ '.number_format($poberlian[$b]->harga,0,',','.');} else {echo 'Rp '.number_format($poberlian[$b]->harga,0,',','.');}?></td>
                    </tr>
                    <?php } ?>
                     <tr id="namaBatu">
                        <td><b>Nama Batu</b></td>
                        <td>: <?php echo $namaBatu ?> </td>
                        <td><b>Berat Batu</b></td>
                        <td colspan="3">: <?php echo $beratBatu ?> gr</td>
                    </tr>
                    <tr id="namaBatu1">
                        <td><b>Keterangan Batu</b></td>
                        <td colspan="5">: <?php echo $keteranganBatu ?> </td>
                    </tr>
                    <tr id="namaBatu2">
                        <td><b>Batu Thd Pukulan</b></td>
                        <td>: <?php echo $batuTerhadapPukulan ?> </td>
                        <td><b>Batu Thd Goresan</b></td>
                        <td colspan="3">: <?php echo $batuTerhadapGoresan ?></td>
                    </tr>
                    <tr id="namaBatu3">
                        <td><b>Batu Thd Kruman</b></td>
                        <td>: <?php echo $batuTerhadapKruman ?> </td>
                        <td><b>Keadaan Batu Tengah</b></td>
                        <td colspan="3">: <?php echo $keadaanBatuTengah ?></td>
                    </tr>
                    <tr>
                        <td><b>Metode</b></td>
                        <td>: <?php echo $metode ?> </td>
                        <td><b>Tipe Ikatan</b></td>
                        <td colspan="3">: <?php echo $tipeIkatan ?></td>
                    </tr>
                    <!-- Pekerjaan Tambahan -->
                    <?php $pt = explode(',',$pekerjaanTambahan);?>
                    <?php if(in_array("Enamel", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Enamel</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganEnamel ?></td>
                        <td><b>Biaya:</b> Rp <?php echo number_format($dataPO[0]->hargaEnamel,2,',','.') ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Slap", $pt)){ ?>
                    <tr>
                        <td colspan="2"><b>(Tambahan) Slap</b></td>
                        <td><b>Keterangan</b></td>
                        <td>: <?php echo $keteranganSlap ?></td>
                        <td><b>Biaya</b></td>
                        <td>: Rp <?php echo number_format($dataPO[0]->hargaSlap,2,',','.') ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Kombinasi", $pt)){ ?>
                    <tr>
                        <td colspan="2"><b>(Tambahan) Kombinasi</b></td>
                        <td><b>Keterangan</b></td>
                        <td>: <?php echo $keteranganKombinasi ?></td>
                        <td><b>Biaya</b></td>
                        <td>: Rp <?php echo number_format($dataPO[0]->hargaKombinasi,2,',','.') ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Laser Huruf", $pt)){ ?>
                    <tr>
                        <td colspan="2"><b>(Tambahan) Laser Huruf</b></td>
                        <td><b>Keterangan</b></td>
                        <td>: <?php echo $keteranganLaserHuruf ?></td>
                        <td><b>Biaya</b></td>
                        <td>: Rp <?php echo number_format($dataPO[0]->hargaLaserHuruf,2,',','.') ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Kode Cap", $pt)){ ?>
                    <tr>
                        <td colspan="2"><b>(Tambahan) Kode Cap</b></td>
                        <td><b>Keterangan</b></td>
                        <td>: <?php echo $keteranganKodeCap ?></td>
                        <td><b>Biaya</b></td>
                        <td>: Rp <?php echo number_format($dataPO[0]->hargaKodeCap,2,',','.') ?></td>
                    </tr>
                    <?php } ?>
                    <!--  -->
                    <tr>
                        <td><b>Krum Warna</b></td>
                        <td>: <?php echo $krumWarna ?> </td>
                        <td><b>Keterangan</b></td>
                        <td>: <?php echo $keteranganKrum ?> </td>
                        <td><b>Harga Krum</b></td>
                        <td>: Rp <?php echo number_format($hargaKrumWarna,2,',','.') ?></td>
                    </tr>
                    <tr>
                        <td><b>Keterangan Lain</b></td>
                        <td colspan="5">: <?php echo $model ?> </td>
                    </tr>
                </tbody>
            </table>
            
        </section>
        <section id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <hr style="border-top: 3px solid #282828;">
                    <h4><b>Panjar: Rp <?php echo number_format($panjar,2,',','.') ?></b></h4>
                </div>
            </div>
            <table class="table no-border ">
                <tbody>
                    <tr>
                        <td width="70%">
                            <div style="background-color: #e2e2e2; padding: 8px; border: 1px solid #282828; font-size: 10px;">
                                <p><b>NB: JIKA BATAL / TUKAR DESAIN DIKENAKAN BIAYA SEBESAR RP 300.000,-</b></p>
                                <p style="margin-top: -10px;"><b>Perhatian:</b></p>
                                <ul style="margin-top: -10px;">
                                    <li>Perhiasan diambil dengan membawa bukti berupa surat</li>
                                    <li>Perhiasan tidak dapat diambil jika surat tidak dibawa / hilang</li>
                                    <li>Surat berlaku dalam waktu 1(satu) bulan, jika perhiasan tidak diambil maka uang panjar dianggap hilang</li>
                                    <li>Kami tidak bertanggungjawab terhadap kerusakan batu mulia, kecuali batu tersebut diansurasikan</li>
                                </ul>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="text-center">
                                <p><b>Hormat Kami</b></p>
                                <p style="margin-top: 40px;"><?php echo $dataPO[0]->nama ?></p>
                            </div></td>
                        <td width="20%">
                            <div class="text-center">
                                <p><b>Konsumen</b></p>
                                <p style="margin-top: 40px;"><?php echo $namaCustomer ?></p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    

<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
<script>
    $(document).ready(function () {
        var a = '<?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>';
        if(a==null||a==0){
            document.getElementById('namaBatu').style.display = 'none';
            document.getElementById('namaBatu1').style.display = 'none';
            document.getElementById('namaBatu2').style.display = 'none';
            document.getElementById('namaBatu3').style.display = 'none';
        };

        // var c = <?php if(count($poberlian)<1){echo 0;} else echo 1;?>;
        // if(c==null||c==0){
        //     document.getElementById('berlian').style.display = 'none';
        // };

        var g = <?php echo $datangEmas?>;
        if(g==null||g==0){
            document.getElementById('datangEmas').style.display = 'none';
        };

        // var i = <?php if($datangBerlian!=null){echo $datangBerlian;} else echo 0;?>;
        // if(i==null||i==0){
        //     document.getElementById('datangBerlian').style.display = 'none';
        // };
    });
</script>
    
</body>


</html>
