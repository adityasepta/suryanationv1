<?php 
    $idPO                   = $dataPO[0]->idPO;
    $jenisOrder             = $dataPO[0]->jenisOrder;
    $totalBerat             = $dataPO[0]->totalBerat;
    $totalHarga             = $dataPO[0]->totalHarga;
    $namaCustomer           = $dataPO[0]->namaCustomer;
    $nomorTelepon           = $dataPO[0]->nomorTelepon;
    $idSalesPerson          = $dataPO[0]->idSalesPerson;
    $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
    $tanggalEstimasiPenyelesaian = $dataPO[0]->tanggalEstimasiPenyelesaian;
    $nomorPO                = $dataPO[0]->nomorPO;
    $idCustomer             = $dataPO[0]->idCustomer;
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
                    <h3>INVOICE SERVICE KRUMAN</h3>
                </div>
                <div class="toolbox col-lg-8 text-right">
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.location='<?php echo base_url()?>user/listPOService'">
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
            <?php if($jenisOrder=='Satuan') { ?>
            <table class="table no-border less-space">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Berat</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ijk=1; $jumlah=0; for ($ij=0; $ij < count($ds) ; $ij++) { 
                        $jumlah = $jumlah + (float)$ds[$ij]->harga;
                        ?>
                        <tr>
                            <td><?php echo $ijk; ?></td>
                            <td><?php echo $ds[$ij]->namaBarang?></td>
                            <td><?php echo number_format($ds[$ij]->berat,2,".","."); ?> gram</td>
                            <td><?php echo $ds[$ij]->jumlah?></td>
                            <td>Rp. <?php echo number_format($ds[$ij]->harga,2,".","."); ?></td>
                            <td><?php echo $ds[$ij]->keterangan?></td>
                        </tr>
                    <?php $ijk++; } ?>
                        <tr>
                            <td colspan="4" class="text-center"><b>Total Harga</b></td>
                            <td colspan="2"><b>Rp. <?php echo number_format($jumlah,2,".","."); ?></b></td>
                        </tr>
                </tbody>
            </table>
            <?php } else {?>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 10%">No</th>
                            <th style="width: 50%">Nama Barang</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ijk=1; $jumlah=0; for ($ij=0; $ij < count($ds) ; $ij++) { 
                            $jumlah = $jumlah + (float)$ds[$ij]->harga;
                            ?>
                            <tr>
                                <td style="width: 10%"><?php echo $ijk; ?></td>
                                <td style="width: 50%"><?php echo $ds[$ij]->namaBarang?></td>
                                <td>-</td>
                                <td>-</td>
                                <td><?php echo $ds[$ij]->keterangan?></td>
                            </tr>
                        <?php $ijk++; } ?>
                            <tr>
                                <td colspan="2" class="text-center"><b>Total Berat</b></td>
                                <td><b><?php echo $totalBerat." gr"; ?></b></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center"><b>Total Harga</b></td>
                                <td></td>
                                <td colspan="2"><b>Rp. <?php echo number_format($totalHarga,2,".","."); ?></b></td>
                            </tr>
                    </tbody>
                </table>
            <?php }?>
        </section>
        <br>
        <section id="footer">
            <table class="table no-border ">
                <tbody>
                    <tr>
                        <td width="70%">
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
</body>


</html>