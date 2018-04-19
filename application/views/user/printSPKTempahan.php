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
                                            <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="<?php echo base_url()?>user/spk">
                                                <span style="vertical-align: middle"> < Kembali </span>
                                            </a>&nbsp
                                            <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.print()">
                                                <span style="vertical-align: middle">Cetak</span>
                                                <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" src="https://ecs7.tokopedia.net/img/print.png" alt="Print" style="vertical-align: middle;">
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
                            <table class="footable table no-border" data-page-size="8" data-filter=#filter style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="3"><strong>Detail Produk</strong></td>
                                    </tr>
                                    <tr>
                                        <td><b>Kode Produk:</b> <?php echo $kodeProduk ?><br>
                                        <b>Jenis Produk:</b> <?php echo $jenisProduk ?><br>
                                        <b><?php if($jenisProduk=='Gelang') { echo 'Diameter';} else {echo 'Ukuran';} ?>:</b> <?php echo $ukuranJari ?> <br>
                                        <b>Estimasi Berat:</b> <?php echo $beratAkhir?></td>

                                        <td><b>Bahan:</b> <?php echo $bahan ?><br>
                                        <b>Kadar Bahan:</b> <?php echo $kadarBahan ?>%<br>
                                        <b>Range Estimasi Berat:</b> <?php echo $tipeIkatan ?><br>
                                        <b>Susut:</b> <?php echo $dataPO[0]->susut?></td>

                                        <td><b>Kuantitas:</b> <?php echo $kuantitas ?><br>
                                        <b>Krum Warna:</b> <?php echo $krumWarna ?><br>
                                        <b>Keterangan Krum:</b> <?php echo $keteranganKrum ?></td>

                                        <td><b>Metode:</b> <?php echo $metode ?><br>
                                        <b>Model:</b> <?php echo $model ?><br>
                                        <b>Tipe Ikatan:</b> <?php echo $tipeIkatan ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p id="namaBatu"><b>Nama Batu Permata:</b> <?php echo $namaBatu ?><br>
                                        <b>Berat Batu Permata:</b> <?php echo $beratBatu ?></p></td>

                                        <td><p id="berlian">
                                        <?php for ($i=0; $i < count($poberlian) ; $i++) { ?>
                                        <b>Berlian:</b> <?php echo $poberlian[$i]->namaMaterial ?><br>
                                        <b>Berat / Jumlah:</b> <?php echo $poberlian[$i]->jumlah ?></p></td>
                                        <?php } ?>
                                        <td><p id="datangEmas"><b>Datang Emas:</b> <?php echo $datangEmas ?><br>
                                        <b>Kadar Datang Emas:</b> <?php echo $kadarDatangEmas ?></p></td>

                                        <td><p id="datangBerlian"><b>Datang Berlian:</b> <?php echo $datangBerlian ?><br>
                                        <b>Jumlah Datang Berlian:</b> <?php echo $jumlahDatangBerlian ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p id="batuA"><b>Batu Terhadap Pukulan:</b> <?php echo $batuTerhadapPukulan ?><br>
                                        <b>Batu Terhadap Goresan:</b> <?php echo $batuTerhadapGoresan ?><br>
                                        <b>Keterangan Batu:</b> <?php echo $keteranganBatu ?></p></td>
                                        <td><p id="batuB"><b>Batu Terhadap Kruman:</b> <?php echo $batuTerhadapKruman ?><br>
                                        <b>Keadaan Batu Tengah:</b> <?php echo $keadaanBatuTengah ?></p></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <label>Gambar Sampel</label>
                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive pull-right" style="max-height: 200px;">
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
                var a = '<?php if($namaBatu!=null){echo $namaBatu;} else echo 0;?>';
                if(a==null||a==0){
                    document.getElementById('namaBatu').style.display = 'none';
                };

                var b = '<?php if($batuTerhadapKruman!=null){echo $batuTerhadapKruman;} else echo 0;?>';
                if(b==null||b==0){
                    document.getElementById('batuA').style.display = 'none';
                    document.getElementById('batuB').style.display = 'none';
                };

                var c = <?php if(count($poberlian)<1){echo 0;} else echo 1;?>;
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
