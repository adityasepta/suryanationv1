<?php $idakt = 1005 ?>
<li class="element" id="task1">

    


    <?php for ($x=0; $x < count($gi) ; $x++) { ?>

        <?php if($k2[$i]->idKloter == $gi[$x]->idKloter) { ?>

        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="<?php echo base_url('uploads/gambarDesain/'.$gi[$x]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
            </div>
            <div class="col-lg-8">
                <b><a data-toggle="modal" data-target="#detail<?php echo $gi[$x]->idProProd ?>" >
                    <?php echo $gi[$x]->namaCustomer ?> / <?php echo $gi[$x]->nomorFaktur ?>
                        
                    </a></b><br>
                
                <b><?php echo $gi[$x]->jenisProduk?></b><br>

                
                <div class="modal inmodal fade" id="detail<?php echo $gi[$x]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Detail Proses Produksi</h3><br>
                                <span >NO PO : <b class="text-success"><?php echo $gi[$x]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $gi[$x]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $gi[$x]->tipeOrder ?></b></span><br>

                            </div>
                            <div class="modal-body">

                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $gi[$x]->nomorFaktur ?>">Informasi Umum</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2<?php echo $gi[$x]->nomorFaktur ?>">Jadwal</a></li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1<?php echo $gi[$x]->nomorFaktur ?>" class="tab-pane active">
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
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->namaCustomer ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->namaSales ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->namaPIC ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->namaProduk ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->kadarBahan ?> %</b><br>
                                                        :&nbsp&nbsp<b><?php echo $gi[$x]->jenisProduk ?></b>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4 text-right ">
                                                        <b>Model</b>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <?php echo $gi[$x]->model ?>
                                                    </div>

                                                </div>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-6 text-center">
                                                        <b>Tanggal Mulai Pengerjaan</b><br>
                                                        <?php echo $gi[$x]->tglmulai ?>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <b>Tanggal Selesai Pengerjaan</b><br>
                                                        <?php echo $gi[$x]->tglselesai ?>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto Refrensi</b><br><br>
                                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$gi[$x]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                    </div>
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto 3D Model</b><br><br>
                                                        
                                                        <img src="<?php echo base_url('uploads/gambarDesain/'.$gi[$x]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                        
                                                    </div>
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto PIC</b><br><br>
                                                        <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2<?php echo $gi[$x]->nomorFaktur ?>" class="tab-pane">
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
                                                            <td class="text-center"><?php echo $gi[$x]->tanggal?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Penjadwalan</td>
                                                            <td class="text-center"><?php echo $gi[$x]->tanggaljadwal?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Dibuat</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td>Desain</td>
                                                            <td class="text-center"><?php echo $gi[$x]->tanggaldes?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                                        </tr>

                                                        <?php $no = 4; for ($q=0; $q < count($r) ; ++$q) { 
                                                            
                                                            if($r[$q]->idSPK == $gi[$x]->idSPK) { ?>

                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td><?php echo $r[$q]->aktivitas ?></td>
                                                                <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                                <td class="text-center"><?php if ($r[$q]->idAktivitas == '1005') {?>

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
                                        <a href="<?php echo base_url('user/invoicePO/'.$gi[$x]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                                        <a href="<?php echo base_url('user/invoice/'.$gi[$x]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                                        <button type="button" class="btn btn-danger btn-outline">Reject</button>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
        <br>


    <?php }} ?>
        


    

    <div class="row">
        <div class="col-lg-12">

            <?php 

            $asd = 0;

            for ($d=0; $d < count($cb) ; $d++) {
                if($k2[$i]->idKloter == $cb[$d]->idKloter) {
                    $asd++;
                }}
            ?>
            
            <?php if ($gi[$i]->statusWork == 'Belum ada PIC') { ?>
                <button data-toggle="modal" data-target="#pic<?php echo $gi[$i]->idKloter ?>"  class="btn btn-xs btn-success btn-block">Tambah PIC - <?php echo $gi[$i]->nama ?></button>
            <?php } else if($gi[$i]->statusWork == 'On Progress' AND $asd == 0 ) {  ?>
                <a href="<?php echo base_url('user/createBOMTempahan/'.$k2[$i]->idKloter)?>" class="btn btn-xs btn-success btn-block">Tambah BOM - <?php echo $gi[$i]->nama ?></a>
            <?php } else  { ?>                          
                <a href="<?php echo base_url('user/next2/'.$k2[$i]->idKloter.'/'.$idakt) ?>" class="btn btn-block btn-success btn-xs" onclick="return confirm('Apakah anda yakin untuk finalisasi Kloter dengan nama kloter <?php echo $k2[$i]->nama ?> ?')"  class="btn btn-xs btn-success btn-block">Lanjut Aktivitas - <?php echo $gi[$i]->nama ?></a>
            <?php } ?>
            
        </div>
    </div>

    <div class="modal inmodal fade" id="pic<?php echo $k2[$i]->idKloter ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <?php echo form_open('User/setPIC2')?>
                    <div class="form-horizontal">
                        
                        <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                            <div class="col-sm-7">

                                
                                <?php 

                                $js = array( 'class' => 'form-control' );
                                echo form_dropdown('staf', $staf, $k2[$i]->idPIC,$js);

                                ?>
                                
                            </div>
                            <div class="col-sm-2">
                      
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?php echo $k2[$i]->idKloter?>" name="idKloter">
                                    <input type="hidden" class="form-control" value="<?php echo $idakt ?>" name="idAktivitas">
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

</li>
    
  





