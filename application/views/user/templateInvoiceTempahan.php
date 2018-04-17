<div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Kode Produk:</dt>  <dd><a href="#" class="text-navy"> <?php echo $kodeProduk ?> </a></dd>
                                                <dt>Jenis Produk:</dt> <dd> <?php echo $jenisProduk ?></dd>
                                                <dt>Bahan:</dt> <dd> <?php echo $bahan ?> </dd>
                                                <dt>Kadar Bahan:</dt> <dd> <?php echo $kadarBahan?> </dd>
                                                <dt>Tipe Konsumen:</dt> <dd><a href="#" class="text-navy"><?php echo $tipeCustomer?></a></dd>
                                                <dt>Estimasi Berat Akhir:</dt> <dd><?php echo $beratAkhir?></dd>
                                                <dt>Susut:</dt> <dd><?php echo $susut?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal">
                                                <dt>Tipe Ikatan:</dt>  <dd> <?php echo $tipeIkatan ?> </dd>
                                                <dt>Ukuran Jari:</dt> <dd><?php echo $ukuranJari?></dd>
                                                <dt>Metode:</dt> <dd> <?php echo $metode?> </dd>
                                                <dt>Model:</dt> <dd> <?php echo $model ?></dd>
                                                <dt>Krum Warna:</dt> <dd> <?php echo $krumWarna ?> </dd>
                                                <dt>Keterangan Krum:</dt> <dd> <?php echo $keteranganKrum?> </dd>
                                                <dt>Kuantitas:</dt> <dd><a href="#" class="text-navy"><?php echo $kuantitas?></a></dd>
                                            </dl>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <dt id="namaBatu">Nama Batu Permata:</dt> <dd id="namaBatu1"> <?php echo $namaBatu?></dd>
                                                <dt id="beratBatu">Berat Batu Permata:</dt> <dd id="beratBatu1"><?php echo $beratBatu?></dd>
                                                <dt id="berlian">Berlian:</dt> <dd id="berlian1">  <?php echo $berlian?></dd>
                                                <dt id="beratBerlian">Berat Berlian:</dt> <dd id="beratBerlian1">  <?php echo $beratBerlian?></dd>
                                                <dt id="batuZirkon">Batu Zirkon:</dt> <dd id="batuZirkon1">  <?php echo $batuZirkon?></dd>
                                                <dt id="jumlahBatuZirkon">Jumlah Batu Zirkon:</dt> <dd id="jumlahBatuZirkon1">  <?php echo $jumlahBatuZirkon?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" >
                                                <?php $pt = explode(',',$pekerjaanTambahan);?>
                                                <dt id="pekerjaanTambahan">Pekerjaan Tambahan:</dt> <dd id="pekerjaanTambahan">  <?php echo $pekerjaanTambahan?></dd>
                                                <?php if(in_array("Enamel", $pt)){ ?>
                                                    <dt>Keterangan Enamel:</dt> <dd>  <?php echo $keteranganEnamel?></dd>
                                                <?php } ?>
                                                <?php if(in_array("Slap", $pt)){ ?>
                                                    <dt>Keterangan Slap:</dt> <dd>  <?php echo $keteranganSlap?></dd>
                                                <?php } ?>
                                                <?php if(in_array("Kombinasi", $pt)){ ?>
                                                    <dt>Keterangan Kombinasi:</dt> <dd>  <?php echo $keteranganKombinasi?></dd>
                                                <?php } ?>
                                                <?php if(in_array("Laser Huruf", $pt)){ ?>
                                                    <dt>Keterangan Laser Huruf:</dt> <dd>  <?php echo $keteranganLaserHuruf?></dd>
                                                <?php } ?>
                                                <?php if(in_array("Kode Cap", $pt)){ ?>
                                                    <dt>Keterangan Kode Cap:</dt> <dd>  <?php echo $keteranganKodeCap?></dd>
                                                <?php } ?>
                                                
                                                <dt id="datangEmas">Datang Emas:</dt> <dd id="datangEmas1">  <?php echo $datangEmas?></dd>
                                                <dt id="kadarDatangEmas">Kadar Datang Emas:</dt> <dd id="kadarDatangEmas1">  <?php echo $kadarDatangEmas?></dd>
                                                <dt id="datangBerlian">Datang Berlian:</dt> <dd id="datangBerlian1">  <?php echo $datangBerlian?></dd>
                                                <dt id="jumlahDatangBerlian">Jumlah Datang Berlian:</dt> <dd id="jumlahDatangBerlian1">  <?php echo $jumlahDatangBerlian?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <dl class="dl-horizontal" id="namaBatu2">
                                                <dt>Batu Terhadap Kruman:</dt>  <dd> <?php echo $batuTerhadapKruman ?> </dd>
                                                <dt>Batu Terhadap Pukulan:</dt> <dd> <?php echo $batuTerhadapPukulan ?></dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6" id="cluster_info">
                                            <dl class="dl-horizontal" id="namaBatu3">
                                                <dt>Batu Terhadap Goresan:</dt> <dd> <?php echo $batuTerhadapGoresan?> </dd>
                                                <dt>Keadaan Batu Tengah:</dt> <dd>  <?php echo $keadaanBatuTengah?></dd>
                                            </dl>
                                        </div>
                                    </div>

