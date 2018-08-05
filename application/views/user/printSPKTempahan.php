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
                    <h3>SURAT PERINTAH KERJA TEMPAHAN</h3>
                </div>
                <div class="toolbox col-lg-8 text-right">
                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.location='<?php echo base_url()?>user/invoice/<?php echo $nomorPO ?>'">
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
                                        <td><b>No SPK / <?php echo $nomorPO;?></b></td>
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
            <table class="table no-border holding">
                <tbody>
                    <tr>
                        <td width="50%">
                            <table class="table no-border less-space">
                                <tbody>
                                    <tr>
                                        <td width="45%"><b>Jenis Produk</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $jenisProduk ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Bahan</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $bahan ?></td>
                                    </tr>
                                    <tr id="datangEmas">
                                        <td><b>Datang Emas</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $datangEmas ?> gr</td>
                                    </tr>
                                    <?php if(($datangBerlian!=0 && $jumlahDatangBerlian!=0) || ($datangBerlian!=NULL && $jumlahDatangBerlian!=NULL)) {?>
                                    <tr>
                                        <td><b>Datang Berlian</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td><?php echo $datangBerlian ?> pcs</td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td><b>Berat Estimasi</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $beratAkhir ?> gr</td>
                                    </tr>
                                    <tr>
                                        <td><b>Ukuran</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $ukuranJari ?> </td>
                                    </tr>
                                    <?php for ($b=0; $b < count($poberlian) ; $b++) { ?>
                                    <tr>
                                        <td><?php if(count($poberlian)>0 && $b==0){?><b>Berlian / Swarovski:<?php } ?></b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="<?php echo 6-$b?>"><?php echo $poberlian[$b]->namaBerlian ?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr id="batu1">
                                        <td><b>Nama Batu</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $namaBatu ?> </td>
                                    </tr>
                                    <tr id="batu2">
                                        <td><b>Berat Batu</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $beratBatu ?> </td>
                                    </tr>
                                    <tr id="batu3">
                                        <td><b>Keterangan Batu</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $keteranganBatu ?> </td>
                                    </tr>
                                    <tr id="batu4">
                                        <td><b>Batu Terhadap Pukulan</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $batuTerhadapPukulan ?> </td>
                                    </tr>
                                    <tr id="batu5">
                                        <td><b>Batu Terhadap Goresan</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $batuTerhadapGoresan ?> </td>
                                    </tr>
                                    <tr id="batu6">
                                        <td><b>Batu Terhadap Kruman</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $batuTerhadapKruman ?> </td>
                                    </tr>
                                    <tr id="batu7">
                                        <td><b>Keadaan Batu Tengah</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $keadaanBatuTengah ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Metode</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $metode ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Tipe Ikatan</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $tipeIkatan ?> </td>
                                    </tr>
                                    

                                    <!-- Pekerjaan Tambahan -->
                                    <?php $pt = explode(',',$pekerjaanTambahan);?>
                                    <?php if(in_array("Enamel", $pt)){ ?>
                                    <tr>
                                        <td width="25%"><b>(Tambahan) Enamel</b></td>
                                        <td width="1%"></td>
                                        <td><b>Keterangan</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td><?php echo $keteranganEnamel ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if(in_array("Slap", $pt)){ ?>
                                    <tr>
                                        <td width="25%"><b>(Tambahan) Slap</b></td>
                                        <td width="1%"></td>
                                        <td><b>Keterangan</td>
                                        <td width="10%" class="text-center">:</td>
                                        <td><?php echo $keteranganSlap ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if(in_array("Kombinasi", $pt)){ ?>
                                    <tr>
                                        <td width="25%"><b>(Tambahan) Kombinasi</b></td>
                                        <td width="1%"></td>
                                        <td><b>Keterangan</td>
                                        <td width="10%" class="text-center">:</td>
                                        <td colspan="2"><?php echo $keteranganKombinasi ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if(in_array("Laser Huruf", $pt)){ ?>
                                    <tr>
                                        <td width="25%"><b>(Tambahan) Laser Huruf</b></td>
                                        <td width="1%"></td>
                                        <td><b>Keterangan</td>
                                        <td width="10%" class="text-center">:</td>
                                        <td colspan="2"><?php echo $keteranganLaserHuruf ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php if(in_array("Kode Cap", $pt)){ ?>
                                    <tr>
                                        <td width="25%"><b>(Tambahan) Kode Cap</b></td>
                                        <td width="1%"></td>
                                        <td><b>Keterangan</td>
                                        <td width="10%" class="text-center">:</td>
                                        <td colspan="2"><?php echo $keteranganKodeCap ?></td>
                                    </tr>
                                    <?php } ?>
                                    <!--  -->
                                    <tr>
                                        <td><b>Krum Warna</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $krumWarna ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan Krum</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $keteranganKrum ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan Lain</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td colspan="4"><?php echo $model ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="50%">
                            <table class="table no-border less-space">
                            <tbody>
                                <tr>
                                    <td width="45%"><b></b></td>
                                    <td width="1%" class="text-center">&nbsp</td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td><b>Kadar</b></td>
                                    <td width="1%" class="text-center">:</td>
                                    <td><?php echo $kadarBahan ?> %</td>
                                </tr>
                                <tr id="datangEmas2">
                                    <td><b>Kadar</b></td>
                                    <td width="1%" class="text-center">:</td>
                                    <td><?php echo $kadarDatangEmas ?> %</td>
                                </tr>
                                <?php if(($datangBerlian!=0 && $jumlahDatangBerlian!=0) || ($datangBerlian!=NULL && $jumlahDatangBerlian!=NULL)) {?>
                                    <tr>
                                        <td><b>Berat</b></td>
                                        <td width="1%" class="text-center">:</td>
                                        <td><?php echo $jumlahDatangBerlian ?> cr</td>
                                    </tr>
                                    <?php }?>
                                <tr>
                                    <td><b>Range Berat</b></td>
                                    <td width="1%" class="text-center">:</td>
                                    <td><?php echo $estimasi ?> gr</td>
                                </tr>
                                <tr>
                                    <td><b>Gambar Sampel</b></td>
                                    <td width="1%" class="text-center">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><img src="<?php echo base_url('uploads/gambarProduk/'.$kodeGambar.'-cust.jpg')?>" class="img img-responsive" style="max-height: 400px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>
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
            document.getElementById('datangEmas2').style.display = 'none';
        };

        // var i = <?php if($datangBerlian!=null){echo $datangBerlian;} else echo 0;?>;
        // if(i==null||i==0){
        //     document.getElementById('datangBerlian').style.display = 'none';
        // };
    });
</script>
    
</body>


</html>
