<div id="tab-2<?php echo $gp[$i]->idProProd ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $gp[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $gp[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $gp[$i]->idSPK) { ?>

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
                            <div id="tab-3<?php echo $gp[$i]->idProProd ?>" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center">Berat</th>                                                    
                                                    
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($j=0; $j < count($b) ; $j++) { 
                                                    if($b[$j]->idSubSPK == $gp[$i]->idSubSPK) { ?>

                                                    
                                                    <tr>
                                                        <td class="text-center"><?php echo $b[$j]->namaAktivitas ?></td>
                                                        <td class="text-center"><?php echo $b[$j]->berat ?> gr</td>
                                                        <?php if($b[$j]->idAktivitas == (int)$idakt) {?>
                                                            <td class="text-center">
                                                                <button data-toggle="modal"  data-dismiss="modal" data-target="#<?php echo $b[$j]->idAktivitas ?><?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-info">Update Berat</button>
                                                            </td>
                                                        <?php } else {?>
                                                            <td class="text-center">
                                                                <button disabled class="btn btn-xs btn-info">Update Berat</button>
                                                            </td>
                                                         <?php } ?>
                                                         <div class="modal inmodal fade" id="<?php echo $b[$j]->idAktivitas ?><?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <?php echo form_open('user/setBerat2')?>
                                                                            <div class="form-horizontal">
                                                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $b[$j]->namaAktivitas ?></label>

                                                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $gp[$i]->beratAwal?>" class="form-control"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-horizontal">
                                                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $b[$j]->namaAktivitas ?></label>

                                                                                    <div class="col-sm-5"><input type="text" name="berat" class="form-control"></div>
                                                                                    <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $b[$j]->idProProd ?>"></div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                           
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                                                    </tr>

                                                <?php }} ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>




                            <?php 
    
    $idakt = 1014;
    $namakt = "Done";
    $var = $do[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="<?php echo $statr ?>-element" id="task1">
    <div class="row">
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $do[$i]->nomorFaktur ?></b>
        </div>
        <!-- <div class="col-lg-4 text-center">
            No Barang<br>
            <b>0001</b>
        </div> -->
        <div class="col-lg-4 text-center ">
            ID Sub SPK<br>
            <b><?php echo $do[$i]->idSubSPK ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            ID Wadah<br>
            <b><?php echo $do[$i]->idWadah ?></b>
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
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $do[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>


        <div class="col-lg-6">
            <br>

            
            <?php if($do[$i]->berat !== '0') { ?>
        
                

                <a href="<?php echo base_url('User/pindah2/'.$do[$i]->idProduk.'/'.$idakt.'/'.$do[$i]->idProProd.'/'.$do[$i]->idSPK.'/'.$do[$i]->idSubSPK.'/'.$do[$i]->idWadah)?>" onclick="return confirm('Apakah anda yakin untuk mengakhiri aktivitas produksi nomor faktur <?php echo $do[$i]->nomorFaktur ?>, ID Sub SPK <?php echo $do[$i]->idSubSPK ?>, ID Wadah <?php echo $do[$i]->idWadah ?> dan memindahkan ke inventory?')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="serah<?php echo $do[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $do[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $do[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $do[$i]->idWadah ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $do[$i]->berat ?> gr</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            PIC Proses<br>
                            <b><?php echo $do[$i]->namapic ?></b>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve2/'.$do[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $do[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $do[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $do[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $do[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $do[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $do[$i]->idWadah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $do[$i]->idProProd ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $do[$i]->idProProd ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $do[$i]->idProProd ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $do[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $do[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$do[$i]->kodeGambar.'-cust.jpg')?>" class="img-responsive">
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $do[$i]->idProProd ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $do[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $do[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $do[$i]->idSPK) { ?>

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
                            <div id="tab-3<?php echo $do[$i]->idProProd ?>" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center">Berat</th>                                                    
                                                    
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($j=0; $j < count($b) ; $j++) { 
                                                    if($b[$j]->idSubSPK == $do[$i]->idSubSPK and $b[$j]->idAktivitas == '1006') { ?>

                                                    
                                                    <tr>
                                                        <td class="text-center"><?php echo $b[$j]->namaAktivitas ?></td>
                                                        <td class="text-center"><?php echo $b[$j]->berat ?> gr</td>
                                                        <td class="text-center"><button disabled="" class="btn btn-xs btn-info">Update Berat</button></td>
                                                        
                                                    </tr>

                                                <?php }
                                                    if($b[$j]->idWadah == $do[$i]->idWadah and $b[$j]->idAktivitas > 1006) { ?>
                                                
                                                    <tr>
                                                        <td class="text-center"><?php echo $b[$j]->namaAktivitas ?></td>
                                                        <td class="text-center"><?php echo $b[$j]->berat ?> gr</td>

                                                        <td class="text-center">

                                                                <?php if($b[$j]->idAktivitas == $idakt) {?>

                                                                <button data-toggle="modal"  data-dismiss="modal" data-target="#<?php echo $b[$j]->idAktivitas ?><?php echo $do[$i]->idProProd ?>" class="btn btn-xs btn-info">Update Berat</button>

                                                                <?php } else {?>

                                                                <button disabled="" class="btn btn-xs btn-info">Update Berat</button>

                                                                <?php } ?>
                                                                
                                                                <div class="modal inmodal fade" id="<?php echo $b[$j]->idAktivitas ?><?php echo $do[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <?php echo form_open('user/setBerat2')?>
                                                                                <div class="form-horizontal">
                                                                                    <div class="form-group"><label class="col-sm-5 control-label">Berat <?php echo $b[$j]->namaAktivitas ?></label>

                                                                                        <div class="col-sm-5"><input type="text" name="berat" class="form-control"></div>
                                                                                        <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $b[$j]->idProProd ?>"></div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                               
                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $do[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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
                                                            </td>
                                                        </tr>

                                                <?php }}?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                       
                        <div class="col-lg-7">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$do[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$do[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




