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
    $ukuranJari             = $dataPO[0]->ukuranJari;
    $upah                   = $dataPO[0]->upah;
    $krumWarna              = $dataPO[0]->krumWarna;      
    $model                  = $dataPO[0]->model;
    $beratAkhir             = $dataPO[0]->beratAkhir;     
    $panjar                 = $dataPO[0]->panjar;
    $idProduk               = $dataPO[0]->idProduk;
    $idCustomer             = $dataPO[0]->idCustomer;
    $kodeProduk             = $dataPO[0]->kodeProduk;
    $totalHarga             = $dataPO[0]->totalHarga;
    $namaProduk             = $dataPO[0]->namaProduk;
    $kadarDatangEmas        = $dataPO[0]->kadarDatangEmas;
    $tipeCustomer           = $dataPO[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataPO[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataPO[0]->keteranganTambahan;
    $keteranganKrum         = $dataPO[0]->keteranganKrum;
    $kodeGambar             = $dataPO[0]->kodeGambar;
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
    .less-space>tbody>tr>td {
        padding: 4px;
    }
    .holding>tbody>tr>td {
        padding: 0px;
        border-top: 0px;
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
            <div class="header-section row">
                <div class="col-lg-4">
                    <h3>SURAT PERINTAH KERJA MASSAL</h3>
                </div>
                <div class="toolbox col-lg-8 text-right">
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.location='<?php echo base_url()?>user/listSPKMasal'">
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
                                        <td>Nama Sales</td>
                                        <td>: <b><?php echo $dataPO[0]->nama;?></b></td>
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
                                        <td><b style="font-size: 15px;">No SPK / <?php echo $nomorPO;?></b></td>
                                        <td></td>
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
            <div class="col-lg-12">
            <table class="table holding">
                <tbody>
                    <tr>
                        <td width="50%">
                            <table class="table no-border less-space">
                                <tbody>
                                    <tr>
                                        <td width="50%"><b>Jenis Produk</td>
                                        <td width="50%">: <?php echo $jenisProduk ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Bahan</b></td>
                                        <td>: <?php echo $bahan ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Kadar Bahan</b></td>
                                        <td>: <?php echo $kadarBahan; ?>%</td>
                                    </tr>
                                    <tr id="datangEmas">
                                        <td><b>Datang Emas</b></td>
                                        <td>: <?php echo $datangEmas ?></td>
                                    </tr>
                                    <tr id="datangEmas1">
                                        <td><b>Kadar Datang Emas</b></td>
                                        <td>: </b> <?php echo $kadarDatangEmas ?>%</td>
                                    </tr>
                                    <tr>
                                        <td><b>Berat Estimasi</b></td>
                                        <td>: <?php echo $beratAkhir ?>gr</td>
                                    </tr>
                                    <tr>
                                        <td><b>Ukuran</b></td>
                                        <td>: <?php echo $ukuranJari ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Pekerjaan Tambahan</b></td>
                                        <td>: <?php echo $pekerjaanTambahan ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan Tambahan</b></td>
                                        <td>: <?php echo $keteranganTambahan ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Krum Warna</b></td>
                                        <td>: <?php echo $krumWarna ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan Krum</b></td>
                                        <td>: <?php echo $keteranganKrum ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Upah</b></td>
                                        <td>: <?php echo $upah ?>%</td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan Lain</b></td>
                                        <td>: <?php echo $model ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="50%">
                            <table class="table no-border less-space">
                                <tbody>
                                    <tr>
                                        <td><b>Model yang diproduksi : </b></td>
                                    </tr>
                                    <?php for($a=0; $a < count($produkPO); $a++) { ?>
                                    <tr>
                                        <td><b><?php echo $produkPO[$a]->namaProduk; ?> </b> <?php echo '| '.$produkPO[$a]->keterangan?></td>
                                    </tr>        
                                    <?php } ?>        
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </section>
    </div>
    

<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
<script>
    $(document).ready(function () {

        var g = <?php echo $datangEmas?>;
        if(g==null||g==0){
            document.getElementById('datangEmas').style.display = 'none';
            document.getElementById('datangEmas1').style.display = 'none';
        };

    });
</script>
    
</body>


</html>

