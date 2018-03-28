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
                                        <td width="40%"><b>Nomor PO</b> <?php echo '&nbsp : '.$dataPO[0]->nomorPO;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                     <tr>
                                        <td width="5%"></td>
                                        <td width="55%" ><b>Nomor Telepon</b> <?php echo '&nbsp : '.$nomorTelepon;?></td>
                                        <td width="40%"><b>Nama Produk</b> <?php echo '&nbsp : '.$dataPO[0]->namaProduk;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                     <tr>
                                        <td width="5%"></td>
                                        <td width="55%" ><b>Nama Sales Person</b> <?php echo '&nbsp : '.$dataPO[0]->nama;?></td>
                                        <td width="40%"><b>Tanggal Terima</b> <?php echo '&nbsp : '.$tglmsk;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                </tbody>
                            </table>
                            <br></br>
                            <table class="table1">
                                <tbody>
                                    <tr>
                                        <td><b>Berat Total</b></td>
                                        <td>:</td>
                                        <td><?php echo $PO[0]->beratTotal;?></td>
                                        <td style="width :5%">gram</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width :1%"></td>
                                        <td></td>
                                     </tr>
                                     <tr>
                                        <td><b>Berat Batu</b></td>
                                        <td>:</td>
                                        <td><?php echo $PO[0]->beratBatu;?></td>
                                        <td style="width :5%">gram</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width :1%"></td>
                                        <td></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 3%">_____________ -</td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%"></td>
                                        <td class="text-right" style="width: 10%"></td>
                                     </tr>
                                     <tr>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo ($PO[0]->beratTotal-$PO[0]->beratBatu);?></td>
                                        <td style="width :5%">gram</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width :1%"></td>
                                        <td></td>
                                     </tr>
                                     <tr>
                                        <td><b>Susut</b></td>
                                        <td>:</td>
                                        <td><?php echo $PO[0]->susut;?></td>
                                        <td style="width :5%">gram</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width :1%"></td>
                                        <td></td>
                                     </tr>
                                     <tr>
                                        <td style="width :18%"></td>
                                        <td style="width :1%"></td>
                                        <td style="width :10%">_____________ +</td>
                                        <td style="width :3%"></td>
                                        <td style="width :1%"></td>
                                        <td style="width :10%"></td>
                                        <td style="width :1%"></td>
                                        <td style="width :10%"></td>
                                        <td style="width :1%"></td>
                                        <td class="text-right" style="width :10%"></td>
                                     </tr>
                                     <tr>
                                        <td style="width :18%"></td>
                                        <td style="width :1%">:</td>
                                        <td style="width :10%"><?php echo $PO[0]->beratAkhir;?></td>
                                        <td style="width :3%">gram</td>
                                        <td style="width :1%">X</td>
                                        <td style="width :10%"><?php echo $PO[0]->prosentase;?> %</td>
                                        <td style="width :1%">X</td>
                                        <td style="width :10%">Rp <?php echo number_format($PO[0]->beratAkhir,2,".","."); ?></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width :10%">Rp <?php echo number_format($PO[0]->beratHargaAkhir,2,".","."); ?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"><b>Upah</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->upah,2,".",".");?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"><b>Upah Pasang Berlian (pcs x Harga)</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 3%"><?php echo $PO[0]->beratDatangBerlian;?></td>
                                        <td style="width: 10%">ct</td>
                                        <td style="width: 1%">X</td>
                                        <td style="width: 3%"><?php echo $PO[0]->jumlahDatangBerlian;?></td>
                                        <td style="width: 1%">X</td>
                                        <td style="width: 10%">Rp <?php echo number_format($PO[0]->upahPasangBerlian,2,".","."); ?></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->beratDatangBerlian*$PO[0]->jumlahDatangBerlian*$PO[0]->upahPasangBerlian,2,".",".");?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"><b>CZ (pcs x Harga)</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 3%"><?php echo $PO[0]->jumlahBatuZirkon;?></td>
                                        <td style="width: 10%">pcs</td>
                                        <td style="width: 1%">X</td>
                                        <td style="width: 10%">Rp <?php echo number_format($PO[0]->hargaBatuZirkon,2,".","."); ?></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->jumlahBatuZirkon*$PO[0]->hargaBatuZirkon,2,".",".");?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"><b>Krum</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->hargaKrumWarna,2,".","."); ?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%"></td>
                                        <td class="text-right" style="width: 10%">_____________ +</td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%"></td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->beratHargaAkhir+$PO[0]->upah+($PO[0]->beratDatangBerlian*$PO[0]->jumlahDatangBerlian*$PO[0]->upahPasangBerlian)+($PO[0]->jumlahBatuZirkon*$PO[0]->hargaBatuZirkon)+$PO[0]->hargaKrumWarna,2,".","."); ?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"><b>Datang Emas</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 3%"><?php echo $PO[0]->datangEmas;?></td>
                                        <td style="width: 10%">gram</td>
                                        <td style="width: 1%">X</td>
                                        <td style="width: 10%">Rp <?php echo number_format($PO[0]->hargaDatangEmas,2,".","."); ?></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->datangEmas*$PO[0]->hargaDatangEmas,2,".",".");?></td>
                                     </tr>  
                                     <tr>
                                        <td style="width: 18%"><b>Panjar</b></td>
                                        <td style="width: 1%">:</td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 2%">=</td>
                                        <td class="text-right" style="width: 10%">Rp <?php echo number_format($PO[0]->panjar,2,".",".");?></td>
                                     </tr>
                                     <tr>
                                        <td style="width: 18%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 3%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width: 1%"></td>
                                        <td style="width: 10%"></td>
                                        <td style="width :1%"></td>
                                        <td class="text-right" style="width: 10%">_____________ -</td>
                                     </tr>
                                </tbody>
                            </table>
                            <div class="hr-line-dashed"></div>
                            <table class="table1">
                                <tbody>
                                     <tr>
                                        <td style="width :18%"><b>Total</b></td>
                                        <td style="width :1%"></td>
                                        <td style="width :3%"></td>
                                        <td style="width :10%"></td>
                                        <td style="width :1%"></td>
                                        <td style="width :10%"></td>
                                        <td style="width :1%"></td>
                                        <td style="width :10%"></td>
                                        <td style="width :1%">=</td>
                                        <td class="text-right" style="width :10%"><b>Rp <?php echo number_format($PO[0]->total,2,".",".");?></b></td>
                                     </tr>
                                </tbody>
                            </table>
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
