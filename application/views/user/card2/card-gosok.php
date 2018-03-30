<?php 
    
    $idakt = 1008;
    $namakt = "Gosok";
    $var = $go[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="<?php echo $statr ?>-element" id="task1">
    <div class="row">
        <div class="col-lg-4 text-center ">
            ID Sub SPK<br>
            <b><?php echo $go[$i]->idSubSPK ?></b>
        </div>

        <div class="col-lg-4 text-center ">
            ID Wadah<br>
            <b><?php echo $go[$i]->idWadah ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Sisa Barang<br>
            <b><?php echo $go[$i]->jumlahNow ?> / <?php echo $go[$i]->jumlah ?></b>
        </div>
    
    </div>
    
    <div class="row">
        <br>

        <div class="col-lg-12">
            <div class="progress progress-striped active">
                <?php 

                    $val = round(($go[$i]->jumlahNow/$go[$i]->jumlah)*100);

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $go[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $go[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            
            <button data-toggle="modal" data-target="#detail<?php echo $go[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-3">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>

        
        <div class="col-lg-6">
            
            <button data-toggle="modal" data-target="#kasih<?php echo $go[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Lanjut Aktivitas</button>
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="kasih<?php echo $go[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Form Pengambilan Barang</h3><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pilih Aktivitas</label>

                                    <div class="col-sm-9">

                                        
                                        <select id="<?php echo $go[$i]->idProProd ?>-akt" required class="form-control" name="idAktivitas2">
                                      <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $go[$i]->idSPK and $akt[$k]->idAktivitas > $idakt) { ?>
                                                
                                            
                                                <option value="<?php echo $akt[$k]->idAktivitas?>">
                                                    <?php echo $akt[$k]->namaAktivitas?>
                                                </option>
                                            

                                        <?php  }} ?> 
                                        <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $go[$i]->idSPK and $akt[$k]->idAktivitas < $idakt) { ?>
                                                
                                            
                                                <option value="<?php echo $akt[$k]->idAktivitas?>">
                                                    <?php echo $akt[$k]->namaAktivitas?> 
                                                    <?php 
                                                        if ($akt[$k]->idAktivitas < $idakt) {
                                                            echo "( REWORK )";
                                                        }
                                                    ?>
                                                </option>
                                            

                                        <?php  }} ?>
                                        </select>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pilih PIC</label>

                                    <div class="col-sm-9">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control', 'id' =>  $go[$i]->idProProd."-pic");
                                        echo form_dropdown('staf', $staf, $go[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9">
                                            <input id="<?php echo $go[$i]->idProProd ?>-jml" type="number" step="any" name="jumlah" required min="1"  max=""  class="form-control">
                                            <small>jumlah maksimal adalah <b><?php echo $go[$i]->jumlahNow?></b> pcs</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                        <div class="col-sm-9">
                                            <input id="<?php echo $go[$i]->idProProd ?>-berat" type="number" step="any" required name="beratAwal" value="" class="form-control">
                                            <small>jumlah maksimal adalah <b><?php echo (float)$go[$i]->beratAwal?></b> gr</small>  
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">

                            <button onclick="passing<?php echo $go[$i]->idProProd ?>();" data-toggle="modal" data-dismiss="modal" data-target="#serah<?php echo $go[$i]->idProProd ?>" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </div>
                    <!-- <?php echo form_close()?> -->

            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="serah<?php echo $go[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >No Faktur : <b class="text-success"><?php echo $go[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $go[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $go[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $go[$i]->jumlahNow ?> / <?php echo $go[$i]->jumlah ?></b></span><br>

                </div>
                <?php
                    $atribut = array('id' => $go[$i]->idProProd."form");
                 echo form_open('User/next5',$atribut)?>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-9 text-center">
                            Asal Aktivitas
                            <h1 class="text-success"><?php echo $namakt?></h1><br>
                            Aktivitas Selanjutnya
                            <h1 id="<?php echo $go[$i]->idProProd ?>-akt-d" class="text-success"></h1>
                        </div>
                        <div class="col-lg-3">
                            Berat Awal<br>
                            <b id="<?php echo $go[$i]->idProProd ?>-berat-d"></b><br><br>
                            <input type="hidden" id="<?php echo $go[$i]->idProProd ?>-berat-i" required value="0" name="beratAwal">
                            Berat Tambahan<br>
                            <b><?php echo $go[$i]->beratTambahan ?> gr</b><br><br>
                            <input type="hidden"  required value="<?php echo $go[$i]->beratTambahan ?>" name="beratTambahan">
                            Jumlah Barang<br>
                            <b id="<?php echo $go[$i]->idProProd ?>-jml-d"></b><br><br>
                            <input type="hidden" id="<?php echo $go[$i]->idProProd ?>-jml-i" required value="0" name="jumlah">
                            PIC Awal<br>
                            <b><?php echo $go[$i]->namapic ?></b><br><br>
                            PIC Selanjutnya<br>
                            <b id="<?php echo $go[$i]->idProProd ?>-pic-d"></b>
                            <input type="hidden" id="<?php echo $go[$i]->idProProd ?>-pic-i" required value="0" name="staf">
                        </div>

                    </div>

                        <input type="hidden" value="<?php echo $go[$i]->idProProd?>" name="idProProd">
                        <input type="hidden" id="<?php echo $go[$i]->idProProd ?>-akt-i" required value="0" name="idAktivitas">
                        <input type="hidden" value="<?php echo $go[$i]->idProduk ?>" name="idProduk">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $go[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $go[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function passing<?php echo $go[$i]->idProProd ?>() {
            var jumlah = document.getElementById('<?php echo $go[$i]->idProProd ?>-jml').value;
            var berat = document.getElementById('<?php echo $go[$i]->idProProd ?>-berat').value;
            var pic = document.getElementById('<?php echo $go[$i]->idProProd ?>-pic');
            var nama = pic.options[pic.selectedIndex].text;
            var idpic = pic.options[pic.selectedIndex].value;
            var akt = document.getElementById('<?php echo $go[$i]->idProProd ?>-akt');
            var namaakt = akt.options[akt.selectedIndex].text;
            var idakt = akt.options[akt.selectedIndex].value;
            console.log(nama);
            if(jumlah > <?php echo $go[$i]->jumlahNow?>) {
                alert('Jumlah tidak sesuai');
                location.reload();
            }

            document.getElementById('<?php echo $go[$i]->idProProd ?>-jml-d').innerHTML = jumlah + ' Pcs';
            document.getElementById('<?php echo $go[$i]->idProProd ?>-berat-d').innerHTML = berat + ' gr';
            document.getElementById('<?php echo $go[$i]->idProProd ?>-pic-d').innerHTML = nama;
            document.getElementById('<?php echo $go[$i]->idProProd ?>-akt-d').innerHTML = namaakt;

            document.getElementById('<?php echo $go[$i]->idProProd ?>-jml-i').value = jumlah;
            document.getElementById('<?php echo $go[$i]->idProProd ?>-berat-i').value = berat;
            document.getElementById('<?php echo $go[$i]->idProProd ?>-pic-i').value = idpic;
            document.getElementById('<?php echo $go[$i]->idProProd ?>-akt-i').value = idakt;

        }
    </script>

    

    <div class="modal inmodal fade" id="detail<?php echo $go[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $go[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $go[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $go[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $go[$i]->jumlahNow ?> / <?php echo $go[$i]->jumlah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $go[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $go[$i]->idProProd ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            PIC Proses<br>
                                            Produk<br>
                                            Bahan<br>
                                            jenis
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $go[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $go[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $go[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $go[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $go[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $go[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $go[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$go[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <?php if($go[$i]->statusWork == 'Waiting') {?>
                                <button disabled class="btn btn-block ">Update PIC</button>
                            <?php } else {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $go[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3">
                            
                        </div>
                            
                            <div class="modal inmodal fade" id="berat<?php echo $go[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $go[$i]->beratAwal?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="text" value="<?php echo $go[$i]->berat?>" readonly class="form-control" readonly name="berat" class="form-control"></div>
                                                    <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $go[$i]->idProProd ?>"></div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal inmodal fade" id="pic<?php echo $go[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $go[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $go[$i]->idProProd?>" name="idProProd">
                                                            <input type="hidden" class="form-control" value="<?php echo $go[$i]->beratAwal?>" name="berat">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Berat Tambahan</label>

                                                    <div class="col-sm-7">
                                                        <input type="number" step="any" name="beratTambahan" value="<?php echo $go[$i]->beratTambahan?>" required class="form-control">
                                                        <small>berat tambahan yang ditambahkan terhadap peroduk dalam aktivitas ini, seperti berat <b>batu cz</b>, dll. Apabila lebih dari satu maka berat diakumulasi</small>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $go[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-success">Simpan</button>
                                                </div>
                                            </div>
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <div class="col-lg-6">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$go[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$go[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>





