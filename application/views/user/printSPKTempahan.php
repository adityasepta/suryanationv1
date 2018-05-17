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
            <div class="header-section row">
                <div class="col-lg-4">
                    <h3>SURAT PERINTAH KERJA TEMPAHAN</h3>
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
                        <td width="45%" ><b>Nomor SPK : </b><b style="color: red;"><?php echo $nomorPO;?></b></td>
                        <td width="50%">Nama Sales  : <b><?php echo $dataPO[0]->nama;?></b></td>
                     </tr>
                     
                </tbody>
            </table>
            <hr style="border-top: 3px solid #282828;">
        </header>
        <section id="detailProduk">
            <table class="table no-border">
                <tbody>
                    <tr>
                        <td colspan="3"><b>Jenis Produk : </b><?php echo $jenisProduk ?> </td>
                    </tr>
                    <tr>
                        <td><b>Bahan:</b> <?php echo $bahan ?></td>
                        <td><b>Kadar:</b> <?php echo $kadarBahan?>%</td>
                    </tr>
                    <tr id="datangEmas">
                        <td><b>Datang Emas:</b> <?php echo $datangEmas ?>gr</td>
                        <td><b>Kadar:</b> <?php echo $kadarDatangEmas ?>%</td>
                    </tr>
                    <tr>
                        <td><b>Berat Estimasi:</b> <?php echo $beratAkhir ?>gr</td>
                        <td><b>Range Berat:</b> <?php echo $estimasi ?>gr</td>
                    </tr>
                    <tr>
                        <td><b>Kuantitas:</b> <?php echo $kuantitas ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Ukuran:</b> <?php echo $ukuranJari ?></td>
                    </tr>
                    <?php for ($b=0; $b < count($poberlian) ; $b++) { ?>
                    <tr>
                        <td><?php if(count($poberlian)>0 && $b==0){?><b>Berlian / Swarovski:<?php } ?></b></td>
                        <td><?php echo $poberlian[$b]->namaBerlian ?></td>
                    </tr>
                    <?php } ?>
                    <tr id="batu1">
                        <td><b>Nama Batu:</b> <?php echo $namaBatu ?></td>
                    </tr>
                    <tr id="batu2">
                        <td><b>Berat Batu:</b> <?php echo $beratBatu ?></td>
                    </tr>
                    <tr id="batu3">
                        <td><b>Keterangan Batu:</b> <?php echo $keteranganBatu ?></td>
                    </tr>
                    <tr id="batu4">
                        <td><b>Batu Terhadap Pukulan:</b> <?php echo $batuTerhadapPukulan ?></td>
                    </tr>
                    <tr id="batu5">
                        <td><b>Batu Terhadap Goresan:</b> <?php echo $batuTerhadapGoresan ?></td>
                    </tr>
                    <tr id="batu6">
                        <td><b>Batu Terhadap Kruman:</b> <?php echo $batuTerhadapKruman ?></td>
                    </tr>
                    <tr id="batu7">
                        <td><b>Keadaan Batu Tengah:</b> <?php echo $keadaanBatuTengah ?></td>
                    </tr>
                    <tr>
                        <td><b>Metode:</b> <?php echo $metode ?></td>
                    </tr>
                    <tr>
                        <td><b>Tipe Ikatan:</b> <?php echo $tipeIkatan ?></td>
                    </tr>
                    

                    <!-- Pekerjaan Tambahan -->
                    <?php $pt = explode(',',$pekerjaanTambahan);?>
                    <?php if(in_array("Enamel", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Enamel</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganEnamel ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Slap", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Slap</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganSlap ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Kombinasi", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Kombinasi</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganKombinasi ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Laser Huruf", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Laser Huruf</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganLaserHuruf ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(in_array("Kode Cap", $pt)){ ?>
                    <tr>
                        <td><b>(Tambahan) Kode Cap</b></td>
                        <td><b>Keterangan:</b> <?php echo $keteranganKodeCap ?></td>
                    </tr>
                    <?php } ?>
                    <!--  -->
                    <tr>
                        <td><b>Krum Warna:</b> <?php echo $krumWarna ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Keterangan Krum:</b> <?php echo $keteranganKrum ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Keterangan Lain:</b> <?php echo $model ?></td>
                    </tr>
                </tbody>
            </table>
            <hr style="border-top: 3px solid #282828;">
            <div class="row">
                <div class="col-lg-12">
                    <label>Gambar Sampel</label>
                    <img src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive" style="max-height: 400px;">
                </div>
            </div>
        </section>
    </div>
    

<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
<script>
    $(document).ready(function () {
        var a = '<?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>';

        if(a==null||a==0){
            console.log('a');
            document.getElementById('batu1').style.display = 'none';
            document.getElementById('batu2').style.display = 'none';
            document.getElementById('batu3').style.display = 'none';
            document.getElementById('batu4').style.display = 'none';
            document.getElementById('batu5').style.display = 'none';
            document.getElementById('batu6').style.display = 'none';
            document.getElementById('batu7').style.display = 'none';

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
