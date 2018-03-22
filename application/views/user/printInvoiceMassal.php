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
    $beratAkhir             = $dataPO[0]->beratAkhir;
    $harga                  = $dataPO[0]->harga;      
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
    $biayaTambahan          = $dataPO[0]->biayaTambahan;
    $beratBerlian           = $dataPO[0]->beratBerlian;
    $hargaBerlian           = $dataPO[0]->hargaBerlian;
    $batuZirkon             = $dataPO[0]->batuZirkon;      
    $jumlahBatuZirkon       = $dataPO[0]->jumlahBatuZirkon;
    $hargaBatuZirkon        = $dataPO[0]->hargaBatuZirkon;
    $hargaKrumWarna         = $dataPO[0]->hargaKrumWarna;
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
                                            <span style="font-size: 20px; font-weight: 600px">RFQ</span>
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
                                        <td width="40%"><b>Tanggal Estimasi Penyelesaian</b> <?php echo '&nbsp : '.$tglpyl;?></td>
                                        <td width="5%"></td>
                                     </tr>
                                </tbody>
                            </table>
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th class="text-left">Keperluan</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-right">Biaya</th>
                                    <th class="text-right">Sub Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>
                                           Harga Pasaran Emas
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-right">Rp. <?php echo number_format($hargaBahan,2,".","."); ?></td>
                                        <td class="text-right">Rp. <?php echo number_format($hargaBahan,2,".","."); ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Upah
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-right">Rp. <?php echo number_format($upah,2,".","."); ?></td>
                                        <td class="text-right">Rp. <?php echo number_format($upah,2,".","."); ?></td>
                                    </tr>
                                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                        <td class="text-left" colspan="3"><strong>Estimasi Total Biaya</strong></td>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($total=$hargaBahan+$hargaBerlian+($hargaBatuZirkon*$jumlahBatuZirkon)+$hargaKrumWarna+$upahPasangBerlian+$biayaTambahan+$upah,2,".","."); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600; text-align: left;" colspan="3">Panjar</td>
                                        <td class="text-right" >Rp. <?php echo number_format($panjar,2,".","."); ?></td>
                                     </tr>
                                </tbody>
                            </table>
                            <table class="footable table table-stripped" width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding: 0 0 20px;">
                                <tbody>
                                    <tr>
                                        <td width="35%" valign="top" style="width: 35%; vertical-align: top; padding-right: 5px;"></td>
                                        <td width="65%" valign="top" style="width: 65%; vertical-align: top; padding-left: 5px;">
                                            <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border-collapse: collapse;">
                                                <tr bgcolor="#F1F1F1" style="font-size: 15px; color: #42B549; background-color: rgba(0,0,0,0.1);">
                                                    <td style="padding: 15px 0 15px 15px; font-weight: 600;">Harus Dibayar</td>
                                                    <td class="text-right" style="padding: 15px 15px 15px 0; font-weight: 600; text-align: right; ">Rp. <?php echo number_format($total-$panjar,2,".","."); ?></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="35%" valign="top" style="width: 35%; vertical-align: top; padding-right: 5px;"></td>
                                        <td width="65%" valign="top" style="width: 65%; vertical-align: top; padding-left: 5px;">
                                            <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border-collapse: collapse;">
                                                

                                                

                                                

                                                
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
