<?php 
    $idPO                   = $dataSPK[0]->idPO;
    $namaCustomer           = $dataSPK[0]->namaCustomer;
    $nomorTelepon           = $dataSPK[0]->nomorTelepon;
    $idSalesPerson          = $dataSPK[0]->idSalesPerson;
    $tanggalMasuk           = $dataSPK[0]->tanggalMasuk;
    $tanggalEstimasiPenyelesaian = $dataSPK[0]->tanggalEstimasiPenyelesaian;
    $nomorPO                = $dataSPK[0]->nomorPO;
    $jenisProduk            = $dataSPK[0]->jenisProduk;
    $bahan                  = $dataSPK[0]->bahan;
    $kadarBahan             = $dataSPK[0]->kadarBahan;
    $hargaBahan             = $dataSPK[0]->hargaBahan;      
    $datangEmas             = $dataSPK[0]->datangEmas;    
    $ukuranJari             = $dataSPK[0]->ukuranJari;
    $upah                   = $dataSPK[0]->upah;
    $krumWarna              = $dataSPK[0]->krumWarna;      
    $model                  = $dataSPK[0]->model;
    $nama                   = $dataSPK[0]->nama;
    $beratAkhir             = $dataSPK[0]->beratAkhir;     
    $panjar                 = $dataSPK[0]->panjar;
    $idProduk               = $dataSPK[0]->idProduk;
    $idCustomer             = $dataSPK[0]->idCustomer;
    $kodeProduk             = $dataSPK[0]->kodeProduk;
    $totalHarga             = $dataSPK[0]->totalHarga;
    $namaProduk             = $dataSPK[0]->namaProduk;
    $kadarDatangEmas        = $dataSPK[0]->kadarDatangEmas;
    $tipeCustomer           = $dataSPK[0]->tipeCustomer;      
    $pekerjaanTambahan      = $dataSPK[0]->pekerjaanTambahan;
    $keteranganTambahan     = $dataSPK[0]->keteranganTambahan;
    $keteranganKrum         = $dataSPK[0]->keteranganKrum;
    $kodeGambar             = $dataSPK[0]->kodeGambar;
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
                                            <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="<?php echo base_url()?>user/listSPKMasal">
                                                <span style="vertical-align: middle"> < Kembali </span>
                                            </a>&nbsp
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
                                        <td width="40%"><b>Nama Sales Person</b> <?php echo '&nbsp : '.$nama;?></td>
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
                            <table class="footable table no-border" data-page-size="8" data-filter=#filter style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="3"><strong>Detail Produk</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Produk: <?php echo $kodeProduk ?><br>
                                        Jenis Produk: <?php echo $jenisProduk ?><br>
                                        Ukuran Jari: <?php echo $ukuranJari ?> <br>
                                        Model: <?php echo $model ?></td>

                                        <td>Bahan: <?php echo $bahan ?><br>
                                        Kadar Bahan: <?php echo $kadarBahan ?>%<br>
                                        Datang Emas: <?php echo $datangEmas ?><br>
                                        Kadar Datang Emas: <?php echo $kadarDatangEmas?>
                                        </td>

                                        <td>Krum Warna: <?php echo $krumWarna ?><br>
                                        Keterangan Krum: <?php echo $keteranganKrum ?><br>
                                        Pekerjaan Tambahan: <?php echo $pekerjaanTambahan ?><br>
                                        Keterangan Tambahan: <?php echo $keteranganTambahan ?></td>

                                        <td>Model yang diproduksi:<br>
                                        <?php for($a=0; $a < count($produkPO); $a++) { ?>
                                            <?php echo $produkPO[$a]->namaProduk.' ('.$produkPO[$a]->kodeProduk.')'; ?> <?php echo '| '.$produkPO[$a]->keterangan?><br>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <label>Gambar Sampel</label>
                                        <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        </div>
        </div>
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
        <script>
            $(document).ready(function () {
                var a = <?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>;
                if(a==null||a==0){
                    document.getElementById('namaBatu').style.display = 'none';
                };

                var c = <?php if($berlian!=null){echo $berlian;} else echo 0;?>;
                if(c==null||c==0){
                    document.getElementById('berlian').style.display = 'none';
                };

                var g = <?php echo $datangEmas?>;
                if(g==null||g==0){
                    document.getElementById('datangEmas').style.display = 'none';
                };

                var i = <?php if($datangBerlian!=null){echo $datangBerlian;} else echo 0;?>;
                if(i==null||i==0){
                    document.getElementById('datangBerlian').style.display = 'none';
                };
            });
        </script>
</body>


</html>
