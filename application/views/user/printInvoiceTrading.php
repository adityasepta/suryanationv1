<?php 
    $idPO                   = $dataPO[0]->idPO;
    $namaCustomer           = $dataPO[0]->namaCustomer;
    $nomorTelepon           = $dataPO[0]->nomorTelepon;
    $idSalesPerson          = $dataPO[0]->idSalesPerson;
    $tanggalMasuk           = $dataPO[0]->tanggalMasuk;
    $nomorPO                = $dataPO[0]->nomorPO;
    $idCustomer             = $dataPO[0]->idCustomer;
    $tglmsk     = new DateTime($tanggalMasuk);
    $tglmsk     = $tglmsk->format("d F Y");
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
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.location='<?php echo base_url()?>user/listPOTrading'">
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
            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                <thead>
                <tr>
                    <th data-hide="phone,tablet">No</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga Satuan</th>
                    <th>Sub Total</th>
                </tr>
                </thead>
                <tbody>
                    <?php $ijk=1; $jumlah=0; for ($ij=0; $ij < count($detailPO) ; $ij++) { 
                        $jumlah = $jumlah + (float)$detailPO[$ij]->harga*(float)$detailPO[$ij]->jumlah;
                    ?>
                <tr>
                    <td><?php echo $ij+1?></td>
                    <td><?php echo $detailPO[$ij]->namaProduk?></td>
                    <td><?php echo $detailPO[$ij]->jumlah?></td>
                    <td>Rp. <?php echo number_format($detailPO[$ij]->harga,2,".","."); ?></td>
                    <td>Rp. <?php echo number_format($detailPO[$ij]->jumlah*$detailPO[$ij]->harga,2,".","."); ?></td>
                </tr>
                <?php $ijk++; } ?>
                <tr>
                    <td colspan="4" class="text-center"><b>Total</b></td>
                    <td colspan="2"><b>Rp. <?php echo number_format($jumlah,2,".","."); ?></b></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <ul class="pagination pull-right"></ul>
                    </td>
                </tr>
                </tfoot>
            </table>
            
        </section>
        <!-- <section id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <hr style="border-top: 3px solid #282828;">
                    <h4><b>Biaya yang harus dibayar: </b><strong class="pull-right">Rp. <?php echo number_format($sisaBayar=$total-$panjar,2,",",".");?></h4>
                </div>
            </div>
        </section> -->
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
