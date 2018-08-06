<?php 
    $idCustomer             = $dataPO[0]->idCustomer;
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
                                            <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="<?php echo base_url("user/listInvoiceMassal")?>"/>
                                                <span style="vertical-align: middle"> < Kembali </span>&nbsp
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
                                        <td width="35%" ><b>Nama Sales Person</b> <?php echo '&nbsp : '.$nama;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                     <tr>
                                        <td width="5%"></td>
                                        <td width="55%" ><b>Nomor Telepon</b> <?php echo '&nbsp : '.$nomorTelepon;?></td>
                                        <td width="35%"><b>Tanggal Terima</b> <?php echo '&nbsp : '.$tglmsk;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                </tbody>
                            </table>
                            <br></br>
                            <table class="table1">
                                <tbody>
                                    <tr>
                                        <td style=" padding: 2px 0 2px 10px"><b>Jumlah</b></td>
                                        <td><b>Nama Barang</b></td>
                                        <td><b>Berat</b></td>
                                        <td><b>Kadar</b></td>
                                        <td><b>Upah</b></td>
                                        <td><b>Total</b></td>
                                    </tr>
                                    <?php $de=0; $tw=0; for ($i=0; $i < count($dataPO); $i++) { ?>
                                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                        <td style=" padding: 2px 0 2px 10px"><b>Nomor PO <?php echo $dataPO[$i]->nomorPO ?></b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style=" padding: 2px 0 2px 10px"><?php echo $dataPO[$i]->jumlah ?></td>
                                        <td><?php echo $dataPO[$i]->namaProduk ?></td>
                                        <td><?php echo $dataPO[$i]->berat ?></td>
                                        <td><?php echo $dataPO[$i]->kadarBahan ?></td>
                                        <td><?php echo $dataPO[$i]->upah ?></td>
                                        <td><?php $total=$dataPO[$i]->berat*($dataPO[$i]->kadarBahan+$dataPO[$i]->upah)/100; echo $total; ?></td>
                                    </tr>
                                    <?php 
                                        $de+=(float)$dataPO[$i]->datangEmas;
                                        $tw+=(float)($dataPO[$i]->kadarBahan+$dataPO[$i]->upah)*$dataPO[$i]->berat/100;
                                        } 
                                    ?>
                                    <tr height="20">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"><b>Berat Total</b></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"><b><?php echo $tw; ?></b></td>
                                    </tr>
                                    <tr height="20">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"><b>Datang Emas</b></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"><b><?php echo $de; ?></b></td>
                                    </tr>
                                    <tr height="30">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1"></td>
                                        <td style="background-color: rgba(0,0,0,0.1); font-size: 15px; color: #42B549;" bgcolor="#F1F1F1"><b>Sisa Emas</b></td>
                                        <td style="background-color: rgba(0,0,0,0.1); font-size: 15px; color: #42B549;" bgcolor="#F1F1F1"><b><?php echo $tw-$de; ?></b></td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="hr-line-dashed"></div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        </div>
        </div>
        <style type="text/css">
        .table1 {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            border-spacing: 0;
        }
        .thead1 {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        </style>

</body>


</html>
