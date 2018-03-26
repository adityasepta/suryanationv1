<?php 
    
    $idakt = 1010;
    $namakt = "Pasang CZ";
    $var = $cz[$i]->endDate;
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
            <b><?php echo $cz[$i]->idSubSPK ?></b>
        </div>

        <div class="col-lg-4 text-center ">
            ID Wadah<br>
            <b><?php echo $cz[$i]->idWadah ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Sisa Barang<br>
            <b><?php echo $cz[$i]->jumlahNow ?> / <?php echo $cz[$i]->jumlah ?></b>
        </div>
    
    </div>
    
    <div class="row">
        <br>

        <div class="col-lg-12">
            <div class="progress progress-striped active">
                <?php 

                    $val = round(($cz[$i]->jumlahNow/$cz[$i]->jumlah)*100);

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $cz[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $cz[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    
                </div>
            </div>
        </div>
        
        <div class="col-lg-9">
            
            <?php if ($cz[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else if(($cz[$i]->statusWork == 'On Progress')){ ?>
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

        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $cz[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

        <div class="col-lg-3">
            <br>
            <?php if($cz[$i]->berat == '0') {?>
                <button onclick="return confirm('Berat belum diisi')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check-square-o"></span>
                </button>
            <?php } else {?>
                <?php if($cz[$i]->statusBerat == 'Belum Disetujui') {?>

                <button data-toggle="modal" data-target="#serah<?php echo $cz[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span></button>

                <?php } else {?>
                <button onclick="return confirm('Sudah disetujui')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check-square-o"></span>
                </button>
            <?php }} ?>
        </div>

        <div class="col-lg-3">
            <br>

            
            <?php if(($cz[$i]->statusWork == 'On Progress' or $cz[$i]->statusWork == 'Waiting') AND $cz[$i]->statusBerat == 'Disetujui') { ?>
        
                

           <a data-toggle="modal" data-target="#kasih<?php echo $cz[$i]->idProProd ?>" class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="kasih<?php echo $cz[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Form Pengambilan Barang</h3><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open('User/next5')?>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pilih PIC</label>

                                    <div class="col-sm-9">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control' );
                                        echo form_dropdown('staf', $staf, $cz[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9"><input type="number" step="any" name="jumlah" required min="1"  max="<?php echo $cz[$i]->jumlahNow?>"  class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                        <div class="col-sm-9"><input type="number" step="any" required name="beratAwal" value="" class="form-control"></div>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $cz[$i]->idProProd?>" name="idProProd">
                                <input type="hidden" value="<?php echo $idakt ?>" name="idAktivitas">
                                <input type="hidden" value="<?php echo $cz[$i]->idProduk ?>" name="idProduk">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close()?>

            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="serah<?php echo $cz[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $cz[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $cz[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Awal<br>
                            <b><?php echo $cz[$i]->beratAwal ?> gr</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $cz[$i]->berat ?> gr</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            Jumlah Barang<br>
                            <b><?php echo $cz[$i]->jumlah ?> pieces</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            PIC Proses<br>
                            <b><?php echo $cz[$i]->namapic ?></b>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve2/'.$cz[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $cz[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $cz[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $cz[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $cz[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $cz[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $cz[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $cz[$i]->jumlahNow ?> / <?php echo $cz[$i]->jumlah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $cz[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $cz[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $cz[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $cz[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$cz[$i]->kodeGambar.'-cust.jpg')?>" class="img-responsive">
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>" class="img-responsive">
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
                            <?php if($cz[$i]->statusWork == 'Waiting') {?>
                                <button disabled class="btn btn-block ">Update PIC</button>
                            <?php } else {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $cz[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3">
                            <?php if($cz[$i]->statusWork == 'On Progress') {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $cz[$i]->idProProd ?>"  class="btn btn-warning btn-block btn-outline">Tambah Berat</button>
                                
                            <?php } else {?>
                                <button disabled class="btn  btn-block ">Tambah Berat</button>
                            <?php } ?>
                        </div>
                            
                            <div class="modal inmodal fade" id="berat<?php echo $cz[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('user/setBerat2')?>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $cz[$i]->beratAwal?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="text" name="berat" class="form-control"></div>
                                                    <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $cz[$i]->idProProd ?>"></div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $cz[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-success">Simpan</button>
                                                </div>
                                            </div>
                                            <?php echo form_close()?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal inmodal fade" id="pic<?php echo $cz[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $cz[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $cz[$i]->idProProd?>" name="idProProd">
                                                            <input type="hidden" class="form-control" value="<?php echo $cz[$i]->beratAwal?>" name="berat">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $cz[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$cz[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$cz[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




