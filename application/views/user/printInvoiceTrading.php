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
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body class="top-navigation">

    <div id="wrapper">
        <div class="white-bg">
        <div class="wrapper-content animated fadeInRight">
            <div class="row" style="color: black">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1 class="text-center" >Surya Sumatra</h1>
                            <table class="footable table table-stripped" width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding-bottom: 20px;">
                                <tbody>
                                    <tr style="margin-top: 8px; margin-bottom: 8px;">
                                        <td>
                                            <span style="font-size: 20px; font-weight: 600px">Invoice</span>
                                        </td>
                                        <td style="text-align: right; padding-right: 15px;">
                                            <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.print()">
                                                <span style="vertical-align: middle">Cetak</span>
                                                <img src="https://ecs7.tokopedia.net/img/print.png" alt="Print" style="vertical-align: middle;">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="footable table no-border" data-page-size="8" data-filter=#filter>
                                <tbody>
                                    <tr>
                                        <td width="5%"></td>
                                        <td width="55%"><b>Nama Konsumen</b> <?php echo '&nbsp : '.$namaCustomer;?></td>
                                        <td width="40%"><b>Nama Sales Person</b> <?php echo '&nbsp : '.$dataPO[0]->nama;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                     <tr>
                                        <td width="5%"></td>
                                        <td width="55%" ><b>Nomor PO</b> <?php echo '&nbsp : '.$nomorPO;?></td>
                                        <td width="40%"><b>Tanggal Terima</b> <?php echo '&nbsp : '.$tglmsk;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                     <tr>
                                        <td width="5%"></td>
                                        <td width="55%" ><b>Nomor Telepon</b> <?php echo '&nbsp : '.$nomorTelepon;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                        <div class="col-lg-12">
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
                                        </div>
                                    </div>
                        </div>
                        <div class="ibox-content">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        </div>
        </div>

</body>


</html>
