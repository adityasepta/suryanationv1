
<li class="element" id="task1">

    <div class="row">
        <div class="col-lg-8 text-center">
            Nama Kloter<br>
            <b><?php echo $k3[$i]->nama?></b>
        </div>
        <div class="col-lg-4 text-center">
            Kadar<br>
            <b><?php echo $k3[$i]->kadar?> %</b>
        </div>
    </div>

    <div class="row">
        
    </div>


    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr class="text-muted">
                        <th class="text-center">No Faktur</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($x=0; $x < count($co) ; $x++) { ?>

                        <?php if($k3[$i]->idKloter == $co[$x]->idKloter) { ?>

                        <tr>
                            <td class="text-center">
                                <?php 

                                    $var = $co[$x]->endDate;
                                    $statr = "";
                                    if((time()-(60*60*24)) < strtotime($var)) {
                                        $statr = "primary";
                                    } else {
                                        $statr = "danger";
                                    } 
                                ?>

                                <button class="btn btn-xs btn-<?php echo $statr?>"></button>

                                <?php echo $co[$x]->nomorFaktur?>
                            </td>
                            <td class="text-center"><?php echo $co[$x]->jenisProduk?></td>
                            <td class="text-center">
                                <button data-toggle="modal" data-target="#detail<?php echo $co[$x]->nomorFaktur ?>" class="btn btn-xs btn-primary">Detail</button>
                                <div class="modal inmodal fade" id="detail<?php echo $co[$x]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">Detail Proses Produksi</h3><br>
                                                <span >NO PO : <b class="text-success"><?php echo $co[$x]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $co[$x]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $co[$x]->tipeOrder ?></b></span><br>

                                            </div>
                                            <div class="modal-body">

                                                <div class="tabs-container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $co[$x]->nomorFaktur ?>">Informasi Umum</a></li>
                                                        <li class=""><a data-toggle="tab" href="#tab-2<?php echo $co[$x]->nomorFaktur ?>">Jadwal</a></li>
                                                        
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="tab-1<?php echo $co[$x]->nomorFaktur ?>" class="tab-pane active">
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
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaCustomer ?></b><br>
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaSales ?></b><br>
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaPIC ?></b><br>
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaProduk ?></b><br>
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->kadarBahan ?> %</b><br>
                                                                        :&nbsp&nbsp<b><?php echo $co[$x]->jenisProduk ?></b>
                                                                    </div>

                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-4 text-right ">
                                                                        <b>Model</b>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <?php echo $co[$x]->model ?>
                                                                    </div>

                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-6 text-center">
                                                                        <b>Tanggal Mulai Pengerjaan</b><br>
                                                                        <?php echo $co[$x]->tglmulai ?>
                                                                    </div>
                                                                    <div class="col-lg-6 text-center">
                                                                        <b>Tanggal Selesai Pengerjaan</b><br>
                                                                        <?php echo $co[$x]->tglselesai ?>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-4 text-center">
                                                                        <b>Foto Refrensi</b><br><br>
                                                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$co[$x]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                                    </div>
                                                                    <div class="col-lg-4 text-center">
                                                                        <b>Foto 3D Model</b><br><br>
                                                                        <?php if($co[$x]->statusDesain !== 'Proses Desain') {?>
                                                                        <img src="<?php echo base_url('uploads/gambarDesain/'.$co[$x]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="col-lg-4 text-center">
                                                                        <b>Foto PIC</b><br><br>
                                                                        <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tab-2<?php echo $co[$x]->nomorFaktur ?>" class="tab-pane">
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
                                                                            <td class="text-center"><?php echo $co[$x]->tanggal?></td>
                                                                            <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td>Penjadwalan</td>
                                                                            <td class="text-center"><?php echo $co[$x]->tanggaljadwal?></td>
                                                                            <td class="text-center"><label class="label label-xs label-primary">Dibuat</label></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">3</td>
                                                                            <td>Desain</td>
                                                                            <td class="text-center"><?php echo $co[$x]->tanggaldes?></td>
                                                                            <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                                                        </tr>

                                                                        <?php $no = 4; for ($q=0; $q < count($r) ; ++$q) { 
                                                                            
                                                                            if($r[$q]->idSPK == $co[$x]->idSPK) { ?>

                                                                            <tr>
                                                                                <td class="text-center"><?php echo $no ?></td>
                                                                                <td><?php echo $r[$q]->aktivitas ?></td>
                                                                                <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                                                <td class="text-center"><?php if ($r[$q]->idAktivitas == '1006') {?>

                                                                                    <label class="label label-xs label-warning">On Progress</label>

                                                                                    <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                                                    <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                                                    <?php } else { ?>

                                                                                    <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                                                    <?php } ?></td>
                                                                            </tr>

                                                                        <?php ++$no; }} ?>
                                                                       
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12 text-right ">
                                                        <a href="<?php echo base_url('user/invoicePO/'.$co[$x]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                                                        <a href="<?php echo base_url('user/invoice/'.$co[$x]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                                                        <button type="button" class="btn btn-danger btn-outline">Reject</button>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        

                        <?php } ?>
                        
                    <?php }?>
                </tbody>
            </table>
        </div>
        
        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if ($k3[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>
        <br><br>
        <div class="col-lg-9">
            <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $k3[$i]->idKloter ?>" class="btn btn-block btn-white btn-xs">Tambah PIC</button>
            
            <div class="modal inmodal fade" id="pic<?php echo $k3[$i]->idKloter ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php echo form_open('User/setPIC7')?>
                            <div class="form-horizontal">
                                
                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                    <div class="col-sm-7">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control' );
                                        echo form_dropdown('staf', $staf, $k3[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    <div class="col-sm-2">
                              
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="<?php echo $k3[$i]->idKloter?>" name="idKloter">
                                            <input type="hidden" class="form-control" value="1006" name="idAktivitas">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <button data-toggle="modal" data-dismiss="modal" class="btn btn-danger btn-block">Kembali</button>
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
        <div class="col-lg-3">
            <?php if (($k3[$i]->statusWork !== 'Belum ada PIC') ) { ?>
            <a href="<?php echo base_url('user/next4/'.$k3[$i]->idKloter.'/1006') ?>" class="btn btn-block btn-info btn-xs" onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi kloter dengan nama kloter <?php echo $k3[$i]->nama ?> ?')"><span class="fa fa-arrow-right"></span></a>
            <?php } else { ?>
            <button disabled class="btn btn-block btn-info btn-xs"><span class="fa fa-arrow-right"></span></button>
            <?php } ?>
        </div>
    </div>


</li>
    
  





