<?php 
    
    $idakt = 1012;
    $namakt = "Sleb";
    $var = $sl[$i]->endDate;
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
            <b><?php echo $sl[$i]->idSubSPK ?></b>
        </div>

        <div class="col-lg-4 text-center ">
            ID Wadah<br>
            <b><?php echo $sl[$i]->idWadah ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Sisa Barang<br>
            <b><?php echo $sl[$i]->jumlahNow ?> / <?php echo $sl[$i]->jumlah ?></b>
        </div>
    
    </div>
    
    <div class="row">
        <br>

        <div class="col-lg-12">
            <div class="progress progress-striped active">
                <?php 

                    $val = round(($sl[$i]->jumlahNow/$sl[$i]->jumlah)*100);

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $sl[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $sl[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    
                </div>
            </div>
        </div>
        
        <div class="col-lg-9">
            
            <?php if ($sl[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else if(($sl[$i]->statusWork == 'On Progress')){ ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } else {?>
            <button class="btn btn-block btn-success btn-xs">Menunggu</button>
            <?php } ?>
        </div>

        <div class="col-lg-3">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>
            
            
            
        </div>

        <div class="col-lg-9">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $sl[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

        

        <div class="col-lg-3">
            <br>

            
            <?php if(($sl[$i]->statusWork == 'On Progress')) { ?>
        
                

           <a data-toggle="modal" data-target="#kasih<?php echo $sl[$i]->idProProd ?>" class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="kasih<?php echo $sl[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                    <label class="col-sm-3 control-label">Pilih PIC</label>

                                    <div class="col-sm-9">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control', 'id' =>  $sl[$i]->idProProd."-pic");
                                        echo form_dropdown('staf', $staf, $sl[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9">
                                            <input id="<?php echo $sl[$i]->idProProd ?>-jml" type="number" step="any" name="jumlah" required min="1"  max=""  class="form-control">
                                            <small>jumlah maksimal adalah <b><?php echo $sl[$i]->jumlahNow?></b> pcs</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                        <div class="col-sm-9">
                                            <input id="<?php echo $sl[$i]->idProProd ?>-berat" type="number" step="any" required name="beratAwal" value="" class="form-control">
                                            <small>jumlah maksimal adalah <b><?php echo $sl[$i]->beratAwal?></b> gr</small>    
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">

                            <button onclick="passing<?php echo $sl[$i]->idProProd ?>();" data-toggle="modal" data-dismiss="modal" data-target="#serah<?php echo $sl[$i]->idProProd ?>" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </div>
                    <!-- <?php echo form_close()?> -->

            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="serah<?php echo $sl[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >No Faktur : <b class="text-success"><?php echo $sl[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $sl[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $sl[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $sl[$i]->jumlahNow ?> / <?php echo $sl[$i]->jumlah ?></b></span><br>

                </div>
                <?php
                    $atribut = array('id' => $sl[$i]->idProProd."form");
                 echo form_open('User/next5',$atribut)?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Awal<br>
                            <b id="<?php echo $sl[$i]->idProProd ?>-berat-d"></b><br><br>
                            <input type="hidden" id="<?php echo $sl[$i]->idProProd ?>-berat-i" required value="0" name="beratAwal">
                            
                        </div>
                        
                        <div class="col-lg-3 text-center">
                            Jumlah Barang<br>
                            <b id="<?php echo $sl[$i]->idProProd ?>-jml-d"></b><br><br>
                            <input type="hidden" id="<?php echo $sl[$i]->idProProd ?>-jml-i" required value="0" name="jumlah">
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            PIC Awal<br>
                            <b><?php echo $sl[$i]->namapic ?></b>
                        </div>
                        <div class="col-lg-3 text-center">
                            PIC Selanjutnya<br>
                            <b id="<?php echo $sl[$i]->idProProd ?>-pic-d"></b>
                            <input type="hidden" id="<?php echo $sl[$i]->idProProd ?>-pic-i" required value="0" name="staf">
                        </div>
                        <input type="hidden" value="<?php echo $sl[$i]->idProProd?>" name="idProProd">
                        <input type="hidden" value="<?php echo $idakt ?>" name="idAktivitas">
                        <input type="hidden" value="<?php echo $sl[$i]->idProduk ?>" name="idProduk">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $sl[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $sl[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function passing<?php echo $sl[$i]->idProProd ?>() {
            var jumlah = document.getElementById('<?php echo $sl[$i]->idProProd ?>-jml').value;
            var berat = document.getElementById('<?php echo $sl[$i]->idProProd ?>-berat').value;
            var pic = document.getElementById('<?php echo $sl[$i]->idProProd ?>-pic');
            var nama = pic.options[pic.selectedIndex].text;
            var idpic = pic.options[pic.selectedIndex].value;

            if(jumlah > 10) {
                alert('Jumlah tidak sesuai');
                location.reload();
            }

            document.getElementById('<?php echo $sl[$i]->idProProd ?>-jml-d').innerHTML = jumlah + ' Pcs';
            document.getElementById('<?php echo $sl[$i]->idProProd ?>-berat-d').innerHTML = berat + ' gr';
            document.getElementById('<?php echo $sl[$i]->idProProd ?>-pic-d').innerHTML = nama;

            document.getElementById('<?php echo $sl[$i]->idProProd ?>-jml-i').value = jumlah;
            document.getElementById('<?php echo $sl[$i]->idProProd ?>-berat-i').value = berat;
            document.getElementById('<?php echo $sl[$i]->idProProd ?>-pic-i').value = idpic;

        }
    </script>

    

    <div class="modal inmodal fade" id="detail<?php echo $sl[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $sl[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $sl[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $sl[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $sl[$i]->jumlahNow ?> / <?php echo $sl[$i]->jumlah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $sl[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $sl[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $sl[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$sl[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
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
                            <?php if($sl[$i]->statusWork == 'Waiting') {?>
                                <button disabled class="btn btn-block ">Update PIC</button>
                            <?php } else {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $sl[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3">
                            <?php if($sl[$i]->statusWork == 'On Progress') {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $sl[$i]->idProProd ?>"  class="btn btn-warning btn-block btn-outline">Berat</button>
                                
                            <?php } else {?>
                                <button disabled class="btn  btn-block ">Berat</button>
                            <?php } ?>
                        </div>
                            
                            <div class="modal inmodal fade" id="berat<?php echo $sl[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $sl[$i]->beratAwal?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="text" value="<?php echo $sl[$i]->berat?>" readonly class="form-control" readonly name="berat" class="form-control"></div>
                                                    <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $sl[$i]->idProProd ?>"></div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal inmodal fade" id="pic<?php echo $sl[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $sl[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $sl[$i]->idProProd?>" name="idProProd">
                                                            <input type="hidden" class="form-control" value="<?php echo $sl[$i]->beratAwal?>" name="berat">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Berat Tambahan</label>

                                                    <div class="col-sm-7">
                                                        <input type="number" step="any" name="beratTambahan" value="<?php echo $sl[$i]->beratTambahan?>" required class="form-control">
                                                        <small>berat tambahan yang ditambahkan terhadap peroduk dalam aktivitas ini, seperti berat <b>batu cz</b>, dll. Apabila lebih dari satu maka berat diakumulasi</small>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $sl[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$sl[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$sl[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>









