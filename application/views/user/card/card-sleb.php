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
        <div class="col-lg-4 text-center">
            No PO<br>
            <b><?php echo $sl[$i]->nomorPO ?></b>
        </div>
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $sl[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tipe Order<br>
            <b><?php echo $sl[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            PIC Proses
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $sl[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $sl[$i]->namaPIC ?></b>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-4">
            Produk<br>
            Jenis
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $sl[$i]->namaProduk ?></b><br>
            :&nbsp&nbsp<b><?php echo $sl[$i]->jenisProduk?></b>
            
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
        <div class="col-lg-6">
            <?php if ($sl[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>
        <div class="col-lg-6">
            <?php if ($sl[$i]->prioritas == '1') { ?>
            <button class="btn btn-block btn-primary btn-xs">Prioritas Rendah</button>
            <?php } else if ($sl[$i]->prioritas == '2') { ?>
            <button class="btn btn-block btn-warning btn-xs">Prioritas Sedang</button>
            <?php } else {?>
            <button class="btn btn-block btn-danger btn-xs">Prioritas Tinggi</button>
            <?php } ?>
        </div>

        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $sl[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

        <div class="col-lg-3">
            <br>
            <?php if($sl[$i]->berat == '0') {?>
                <button onclick="return confirm('Berat belum diisi')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span>
                </button>
            <?php } else {?>
                <?php if($sl[$i]->statusBerat == 'Belum Disetujui') {?>

                <button data-toggle="modal" data-target="#serah<?php echo $sl[$i]->nomorFaktur ?>" class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span></button>

                <?php } else {?>
                <button onclick="return confirm('Sudah disetujui')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span>
                </button>
            <?php }} ?>
        </div>
        
        <div class="col-lg-3">
            <br>
            <?php if($sl[$i]->statusBerat == 'Belum Disetujui') {?>
            <button onclick="return confirm('Berat belum disetujui')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>
            <?php } else {?>
            <a href="<?php echo base_url('User/next/'.$sl[$i]->idProduk.'/'.$idakt.'/'.$sl[$i]->idProProd.'/'.$sl[$i]->idSPK)?>" onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi nomor faktur <?php echo $sl[$i]->nomorFaktur ?>?')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
            <?php } ?>
        </div>
        
    </div>

    <div class="modal inmodal fade" id="serah<?php echo $sl[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $sl[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $sl[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $sl[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas<br>
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $sl[$i]->berat ?> gr</b><br><br>
                            PIC Proses<br>
                            <b><?php echo $sl[$i]->namaPIC ?></b>
                        </div>
                        <div class="col-lg-3 text-center">
                            
                            Tanggal Mulai<br>
                            <b><?php echo $sl[$i]->tglmulai ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve/'.$sl[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $sl[$i]->nomorFaktur ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $sl[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $sl[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $sl[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $sl[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $sl[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $sl[$i]->nomorFaktur ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $sl[$i]->nomorFaktur ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $sl[$i]->nomorFaktur ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namaSales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sl[$i]->namaPIC ?></b><br>
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
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Mulai Pengerjaan</b><br>
                                            <?php echo $sl[$i]->tglmulai ?></b>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Selesai Pengerjaan</b><br>
                                            <?php echo $sl[$i]->tglselesai ?></b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$sl[$i]->kodeGambar.'-cust.jpg')?>" class="img-responsive">
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto 3D Model</b><br><br>
                                            <?php if($sl[$i]->statusDesain !== 'Proses Desain') {?>
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$sl[$i]->kodeGambar.'-d1.jpg')?>" class="img-responsive">
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $sl[$i]->nomorFaktur ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $sl[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Desain</td>
                                                <td class="text-center"><?php echo $sl[$i]->tanggaldes?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>PPIC</td>
                                                <td class="text-center"><?php echo $sl[$i]->tanggalsetuju?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $sl[$i]->idSPK) { ?>

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
                            <div id="tab-3<?php echo $sl[$i]->nomorFaktur ?>" class="tab-pane">
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
                                                
                                                <?php $rt = 1; for ($z=0; $z < count($b) ; ++$z) { 
                                                    if($b[$z]->idSPK == $sl[$i]->idSPK AND (int)$b[$z]->idAktivitas > 1006 ) {
                                                ?>

                                                <tr>
                                                    
                                                    
                                                    <td>Berat Akhir <?php echo $b[$z]->namaAktivitas ?></td>
                                                    <td class="text-center"><?php echo $b[$z]->berat ?></td>
                                                    <td class="text-center"><label class="label label-lg label-success"></label></td>

                                                    <?php if ((int)$b[$z]->idAktivitas == $idakt) { ?>

                                                    <td  class="text-center"><button data-toggle="modal"  data-dismiss="modal" data-target="#<?php echo $b[$z]->idAktivitas ?><?php echo $sl[$i]->idSPK ?>" class="btn btn-xs btn-info ">Update Berat</button></td>

                                                    <?php } else { ?>

                                                    <td  class="text-center"><button data-toggle="modal" disabled data-dismiss="modal" data-target="#<?php echo $b[$z]->idAktivitas ?><?php echo $sl[$i]->idSPK ?>" class="btn btn-xs btn-info ">Update Berat</button></td>

                                                    <?php } ?>

                                                    <div class="modal inmodal fade" id="<?php echo $b[$z]->idAktivitas ?><?php echo $sl[$i]->idSPK ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <?php echo form_open('user/setBerat')?>
                                                                    <div class="form-horizontal">
                                                                        <div class="form-group"><label class="col-sm-5 control-label">Berat <?php echo $b[$z]->namaAktivitas ?></label>

                                                                            <div class="col-sm-5"><input type="text" name="berat" class="form-control"></div>
                                                                            <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $b[$z]->idProProd ?>"></div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $sl[$i]->nomorFaktur ?>" class="btn btn-danger btn-block">Kembali</button>
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

                                                <?php }

                                                $rt++; } ?>

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
                            <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $sl[$i]->nomorFaktur ?>"  class="btn btn-info btn-block btn-outline">Tambah PIC</button>

                            <div class="modal inmodal fade" id="pic<?php echo $sl[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC')?>
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
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $sl[$i]->nomorFaktur ?>" class="btn btn-danger btn-block">Kembali</button>
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
                            <a href="<?php echo base_url('user/invoicePO/'.$sl[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoice/'.$sl[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




