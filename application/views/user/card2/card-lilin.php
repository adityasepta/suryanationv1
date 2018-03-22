<?php 
    
    $idakt = 1004;
    $namakt = "Lilin";
    $var = $li[$i]->endDate;
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
            <b><?php echo $li[$i]->nomorFaktur ?></b>
        </div>
        <!-- <div class="col-lg-4 text-center">
            No Barang<br>
            <b>0001</b>
        </div> -->
        <div class="col-lg-6 text-center ">
            ID Sub SPK<br>
            <b><?php echo $li[$i]->idSubSPK ?></b>
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
            <?php if ($li[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>
        <div class="col-lg-6">
            <?php

            $sub = 0;
            for ($g=0; $g < count($cb) ; $g++) { 
                if($cb[$g]->idSubSPK == $li[$i]->idSubSPK) {
                    $sub++;
                }
            } 

            ?>
            
            <?php if($sub == 0) { ?>
        
                <button class="btn btn-block btn-danger btn-xs">Belum ada BOM</button>
        
            <?php } else {?>

                <button class="btn btn-block btn-warning btn-xs">Sudah ada BOM</button>

            <?php } ?>
        </div>
     
        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $li[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <div class="col-lg-3">
            <br>
            <a href="<?php echo base_url('user/createbommassal/'.$li[$i]->idSubSPK)?>"  class="btn btn-xs btn-primary btn-block"><span class="fa fa-cubes"></span></a>
        </div>
        <div class="col-lg-3">
            <br>

           <?php

            $sub = 0;
            for ($g=0; $g < count($cb) ; $g++) { 
                if($cb[$g]->idSubSPK == $li[$i]->idSubSPK) {
                    $sub++;
                }
            } 

            ?>
            
            <?php if($sub > 0 AND ($li[$i]->statusWork == 'On Progress')) { ?>
        
                

                <a href="<?php echo base_url('User/next3/'.$li[$i]->idProduk.'/'.$idakt.'/'.$li[$i]->idProProd.'/'.$li[$i]->idSPK.'/'.$li[$i]->idSubSPK.'/0')?>" 
                    onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi nomor faktur <?php echo $li[$i]->nomorFaktur ?> dan menyetujui Bill Of Material untuk Sub SPK id <?php echo $li[$i]->idSubSPK ?>?')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $li[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $li[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $li[$i]->idProProd ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $li[$i]->idProProd ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $li[$i]->idProProd ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $li[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $li[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$li[$i]->kodeGambar.'-cust.jpg')?>" class="img-responsive">
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $li[$i]->idProProd ?>" class="tab-pane">
                                <div class="panel-body">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Proses</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Sales</td>
                                                <td class="text-center"><?php echo $li[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $li[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $li[$i]->idSPK) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $q+3 ?></td>
                                                    <td><?php echo $r[$q]->aktivitas ?></td>
                                                    <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                    <td class="text-center">
                                                        <?php if ($r[$q]->idAktivitas == $idakt) {?>

                                                        <label class="label label-xs label-warning">On Progress</label>

                                                        <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                        <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } else { ?>

                                                        <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                            <?php }} ?>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-3<?php echo $li[$i]->idProProd ?>" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th>Keterangan</th>
                                                    <th class="text-center">Berat</th>                                                    
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $li[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Tambah PIC</button>

                            <div class="modal inmodal fade" id="pic<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $li[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $li[$i]->idProProd?>" name="idProProd">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $li[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                            <a href="<?php echo base_url('user/invoicePO/'.$li[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceMassal/'.$li[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




