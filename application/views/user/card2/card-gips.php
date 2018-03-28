<?php 
    
    $idakt = 1005;
    $namakt = "Gips";
    $var = $gi[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="<?php echo $statr ?>-element" id="task1">
    <div class="row">
        <div class="col-lg-6 text-center">
            No Faktur<br>
            <b><?php echo $gi[$i]->nomorFaktur ?></b>
        </div>

        <div class="col-lg-6 text-center ">
            ID Sub SPK<br>
            <b><?php echo $gi[$i]->idSubSPK ?></b>
        </div>
    </div>
    
    
    
    <div class="row">
        <div class="col-lg-12 text-center">
            
            <!-- <span class="fa fa-warning text-muted"></span> -->

        </div>
    </div>
    
    
    <div class="row">
        <br>
        <div class="col-lg-6">
            <?php if ($gi[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>
        <div class="col-lg-3">
            
            <?php

            $sub = 0;
            for ($g=0; $g < count($cb) ; $g++) { 
                if($cb[$g]->idSubSPK == $gi[$i]->idSubSPK) {
                    $sub++;
                }
            } 

            ?>
            
            <?php if($sub == 0) { ?>
        
                <a href="<?php echo base_url('user/createbommassal/'.$gi[$i]->idSubSPK)?>"  class="btn btn-xs btn-danger btn-block"><span class="fa fa-cubes"></span>&nbsp&nbsp<span class="fa fa-times"></span></a>
        
            <?php } else {?>

                <a href="<?php echo base_url('user/createbommassal/'.$gi[$i]->idSubSPK)?>"  class="btn btn-xs btn-primary btn-block"><span class="fa fa-cubes"></span>&nbsp&nbsp<span class="fa fa-check"></span></a>

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
            <button data-toggle="modal" data-target="#detail<?php echo $gi[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        
        
        <div class="col-lg-3">
            <br>

           <?php

            $sub = 0;
            for ($g=0; $g < count($cb) ; $g++) { 
                if($cb[$g]->idSubSPK == $gi[$i]->idSubSPK) {
                    $sub++;
                }
            } 

            ?>
            
            <?php if($sub > 0 AND ($gi[$i]->statusWork == 'On Progress')) { ?>
        
                

                <a href="<?php echo base_url('User/next3/'.$gi[$i]->idProduk.'/'.$idakt.'/'.$gi[$i]->idProProd.'/'.$gi[$i]->idSPK.'/'.$gi[$i]->idSubSPK.'/0')?>" 
                    onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi nomor faktur <?php echo $gi[$i]->nomorFaktur ?> dan menyetujui Bill Of Material untuk Sub SPK id <?php echo $gi[$i]->idSubSPK ?>?')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $gi[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $gi[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $gi[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $gi[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $gi[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $gi[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $gi[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$gi[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
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
                        <div class="col-lg-5">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $gi[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Tambah PIC</button>

                            <div class="modal inmodal fade" id="pic<?php echo $gi[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $gi[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $gi[$i]->idProProd?>" name="idProProd">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $gi[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                        </div>
                        <div class="col-lg-7">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$gi[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$gi[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>


