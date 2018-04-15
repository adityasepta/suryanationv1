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
        <div class="col-lg-5 text-center">
            <img src="<?php echo base_url('uploads/gambarDesain/'.$do[$i]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
        </div>
        <div class="col-lg-7">
            <b><?php echo substr($do[$i]->namaCustomer,0,10) ?> / <?php echo $do[$i]->nomorFaktur ?></b><br>
            <b><?php echo $do[$i]->jenisProduk?></b><br>
            <b><?php echo $do[$i]->tanggal?> -</b><br>
            <b><?php echo $do[$i]->tanggalSelesai?> </b><br>
        </div>
    </div>
    <hr>
    
    <?php if(isset($display)) { ?>

    <div class="row">
        <div class="col-lg-6">
            
            <button data-toggle="modal" data-target="#detail<?php echo $do[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

        <div class="col-lg-6">

                <?php if($statr == 'success') {?>
                    <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
                <?php } else { ?>
                    <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
                <?php } ?>
                
                
                
        </div>
    </div>


    <?php } else { ?>

    <div class="row">
        <br>

        <div class="col-lg-6">

            <?php if ($do[$i]->berat == 0) { ?>
                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $do[$i]->idProProd ?>"  class="btn btn-xs btn-info btn-block ">Berat Akhir</button>
            <?php } else {?>
                <button disabled="" class="btn btn-xs btn-info btn-block ">Berat Akhir</button>
            <?php } ?>

            

            <div class="modal inmodal fade" id="berat<?php echo $do[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php echo form_open('User/setBerat')?>
                            <?php echo form_close() ?>

                            <?php echo form_open('User/setBerat')?>
                            
                            
                                

                                <input type="hidden"  step="any" name="beratAwal" readonly="" value="<?php echo $do[$i]->beratAwal?>" class="form-control">
                                
                            
                            <div class="form-horizontal">
                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir</label>

                                    <div class="col-sm-5"><input type="number" step="any" min="0" class="form-control" type="number" step="any" name="berat" value="<?php echo $do[$i]->beratAwal?>" class="form-control"></div>
                                    <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $do[$i]->idProProd ?>"></div>
                                </div>
                            </div>
                            
                           <div class="row">
                                <div class="col-lg-6">
                                    <button data-dismiss="modal" class="btn btn-danger btn-block">Kembali</button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-block btn-success">Validasi</button>
                                </div>
                            </div>

                            <?php echo form_close() ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            
            
            
        </div>

        <div class="col-lg-6">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>
            
            
            
        </div>

        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $do[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        
        <div class="col-lg-6">
            <br>
            <?php if ($do[$i]->berat != '0') { ?>
            <a href="<?php echo base_url('User/pindah/'.$do[$i]->idProduk.'/'.$do[$i]->kuantitas.'/'.$do[$i]->idProProd.'/'.$do[$i]->idSPK.'/'.$do[$i]->nomorFaktur)?>" onclick="return confirm('Apakah anda yakin untuk mengakhiri aktivitas produksi nomor faktur <?php echo $do[$i]->nomorFaktur ?> dan memindahkan ke inventory ?')"  class="btn btn-xs btn-success btn-block">Selesai</a>
            <?php } else { ?>
            <button onclick="return confirm('Berat belum diisi')"  class="btn btn-xs btn-success btn-block">Selesai
            </button>
        <?php } ?>
        </div>
    </div>
    <?php } ?>

    

    <div class="modal inmodal fade" id="detail<?php echo $do[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>


                    <span >NO PO : <b class="text-success"><?php echo $do[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $do[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $do[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $do[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $do[$i]->nomorFaktur ?>">Jadwal</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $do[$i]->nomorFaktur ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaSales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $do[$i]->namaPIC ?></b><br>
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
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$do[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto 3D Model</b><br><br>
                                            <?php if($do[$i]->statusDesain !== 'Proses Desain') {?>
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$do[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
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
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Desain</td>
                                                <td class="text-center"><?php echo $do[$i]->tanggaldes?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>PPIC</td>
                                                <td class="text-center"><?php echo $do[$i]->tanggalsetuju?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $do[$i]->idSPK) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $q+3 ?></td>
                                                    <td><?php echo $r[$q]->aktivitas ?></td>
                                                    <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                    <td class="text-center">
                                                        <?php if ($r[$q]->idAktivitas == '1014') {?>

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
                                            <?php echo form_open('User/setPIC')?>
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
                            <a href="<?php echo base_url('user/invoicePO/'.$do[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoice/'.$do[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




