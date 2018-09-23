<?php 

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
            No PO<br>
            <b><?php echo $do[$i]->nomorPO ?></b>
        </div>
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $do[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tipe Order<br>
            <b><?php echo $do[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            PIC Proses
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $do[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $do[$i]->namaPIC ?></b>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 text-center">
            
            <!-- <span class="fa fa-warning text-muted"></span> -->

        </div>
    </div>
    
    
    <div class="row">
        <br>

        <div class="col-lg-12">
            <?php if ($do[$i]->durasi == '2') { ?>
            <button class="btn btn-block btn-primary btn-xs">2 Jam</button>
            <?php } else if ($do[$i]->durasi == '4') { ?>
            <button class="btn btn-block btn-warning btn-xs">3-4 Jam</button>
            <?php } else if ($do[$i]->durasi == '5') { ?>
            <button class="btn btn-block btn-warning btn-xs">5 Jam</button>
            <?php } else if ($do[$i]->durasi == '24') { ?>
            <button class="btn btn-block btn-default btn-xs">1 Hari</button>
            <?php } else {?>
            <button class="btn btn-block btn-danger btn-xs">Tunggu</button>
            <?php } ?>
        </div>

        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $do[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        
        <div class="col-lg-6">
            <br>
            <?php if ($do[$i]->berat != '0') { ?>
            <a href="<?php echo base_url('User/pindahService/'.$do[$i]->idProProd.'/'.$do[$i]->idSPK.'/'.$do[$i]->nomorFaktur)?>" onclick="return confirm('Apakah anda yakin untuk mengakhiri aktivitas produksi nomor faktur <?php echo $do[$i]->nomorFaktur ?>?')"  class="btn btn-xs btn-primary btn-block">Selesai</a>
            <?php } else { ?>
            <button onclick="return confirm('Berat belum diisi')"  class="btn btn-xs btn-primary btn-block">Selesai
            </button>
        <?php } ?>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $do[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <!-- <span >NO FAKTUR : <b class="text-success">1423342</b> | NO BARANG : <b class="text-success">001</b> | TIPE : <b class="text-success">Custom</b></span><br> -->

                    <!-- <span >NO PO : <b class="text-success"><?php echo $do[$i]->nomorPO ?></b> | TIPE : <b class="text-success"><?php echo $do[$i]->tipeOrder ?></b></span><br> -->

                    <span >NO PO : <b class="text-success"><?php echo $do[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $do[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $do[$i]->tipeOrder ?></b></span><br>
   <!--                  <h2><span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span></h2> -->
                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $do[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $do[$i]->nomorFaktur ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $do[$i]->nomorFaktur ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $do[$i]->nomorFaktur ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            PIC Proses<br>
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaSales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaPIC ?></b><br>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Mulai Pengerjaan</b><br>
                                            <?php echo $do[$i]->tglmulai ?></b>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Selesai Pengerjaan</b><br>
                                            <?php echo $do[$i]->tglselesai ?></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $do[$i]->nomorFaktur ?>" class="tab-pane">
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
                                            
                                            <?php $no=2; for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $do[$i]->idSPK) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $no ?></td>
                                                    <td><?php echo $r[$q]->aktivitas ?></td>
                                                    <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                    <td class="text-center">
                                                        <?php if ($r[$q]->idAktivitas == '1007') {?>

                                                        <label class="label label-xs label-warning">On Progress</label>

                                                        <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                        <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } else { ?>

                                                        <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                            <?php $no++; }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-3<?php echo $do[$i]->nomorFaktur ?>" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <th class="text-center">Berat Akhir</th>                                                    
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php for ($z=0; $z < count($b) ; ++$z) { 
                                                    if($b[$z]->idSPK == $do[$i]->idSPK) {
                                                ?>

                                                <tr>
                                                    <td>Berat <?php echo $b[$z]->namaAktivitas ?></td>
                                                    <td class="text-center"><?php echo $b[$z]->berat ?></td>
                                                    <td class="text-center"><label class="label label-lg label-success"></label></td>

                                                    <?php if ((int)$b[$z]->idAktivitas == 1008) { ?>

                                                    <td  class="text-center"><button data-toggle="modal"  data-dismiss="modal" data-target="#<?php echo $b[$z]->idAktivitas ?><?php echo $do[$i]->idSPK ?>" class="btn btn-xs btn-info ">Update Berat</button></td>

                                                    <?php } else { ?>

                                                    <td  class="text-center"><button data-toggle="modal" disabled data-dismiss="modal" data-target="#<?php echo $b[$z]->idAktivitas ?><?php echo $do[$i]->idSPK ?>" class="btn btn-xs btn-info ">Update Berat</button></td>

                                                    <?php } ?>

                                                    <div class="modal inmodal fade" id="<?php echo $b[$z]->idAktivitas ?><?php echo $do[$i]->idSPK ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <?php echo form_open('user/setBeratService')?>
                                                                    <div class="form-horizontal">
                                                                        <div class="form-group"><label class="col-sm-3 control-label">Berat Akhir <?php echo $b[$z]->namaAktivitas ?></label>

                                                                            <div class="col-sm-7"><input type="text" name="berat" class="form-control"></div>
                                                                            <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $b[$z]->idProProd ?>"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $do[$i]->nomorFaktur ?>" class="btn btn-danger btn-block">Kembali</button>
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
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <button data-toggle="modal" disabled data-dismiss="modal" data-target="#pic<?php echo $do[$i]->nomorFaktur ?>"  class="btn btn-default btn-block ">Tambah PIC</button>

                            <div class="modal inmodal fade" id="pic<?php echo $do[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPICService')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $do[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $do[$i]->idProProd?>" name="idProProd">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $do[$i]->nomorFaktur ?>" class="btn btn-danger btn-block">Kembali</button>
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
                            <a href="<?php echo base_url('user/invoicePOService/'.$do[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoicePOService/'.$do[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




