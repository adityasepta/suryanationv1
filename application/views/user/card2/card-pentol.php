<?php 
    
    $idakt = 1007;
    $namakt = "Gosok Pentol";
    $var = $gp[$i]->endDate;
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
            <b><?php echo $gp[$i]->nomorFaktur ?></b>
        </div>

        <div class="col-lg-4 text-center ">
            ID Sub SPK<br>
            <b><?php echo $gp[$i]->idSubSPK ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Sisa Barang<br>
            <b><?php echo $gp[$i]->jumlahNow ?> / <?php echo $gp[$i]->jumlah ?></b>
        </div>
    
    </div>
    
    

    <div class="row">
        <div class="col-lg-12 text-center">
            
            <!-- <span class="fa fa-warning text-muted"></span> -->

        </div>
    </div>
    
    
    <div class="row">
        <br>

        
        <div class="col-lg-12">
            <div class="progress progress-striped active">
                <?php 

                    $val = round($gp[$i]->jumlahNow/$gp[$i]->jumlah)*100;

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $gp[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $gp[$i]->jumlah-$gp[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    <span class="sr-only">40% Complete (success)</span>
                </div>
            </div>
            <?php if ($gp[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>

        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

        <div class="col-lg-3">
            <br>
            <?php if($gp[$i]->berat == '0') {?>
                <button onclick="return confirm('Berat belum diisi')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span>
                </button>
            <?php } else {?>
                <?php if($gp[$i]->statusBerat == 'Belum Disetujui') {?>

                <button data-toggle="modal" data-target="#serah<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span></button>

                <?php } else {?>
                <button onclick="return confirm('Sudah disetujui')"  class="btn btn-xs btn-success btn-block"><span class="fa fa-check"></span>
                </button>
            <?php }} ?>
        </div>

        <div class="col-lg-3">
            <br>

            
            <?php if($gp[$i]->statusWork == 'On Progress' AND $gp[$i]->statusBerat == 'Disetujui') { ?>
        
                

           <!--      <a href="<?php echo base_url('User/wait/'.$gp[$i]->idProduk.'/'.$idakt.'/'.$gp[$i]->idProProd.'/'.$gp[$i]->idSPK.'/'.$gp[$i]->idSubSPK.'/'.$gp[$i]->idWadah)?>" onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi nomor faktur <?php echo $gp[$i]->nomorFaktur ?>?')"  class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a> -->

           <a data-toggle="modal" data-target="#kasih<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        
            <?php } else {?>

                <button disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></button>

            <?php } ?>
         
            
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="kasih<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Form Pengambilan Barang</h3><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open('User/next4')?>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pilih PIC</label>

                                    <div class="col-sm-9">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control' );
                                        echo form_dropdown('staf', $staf, $gp[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9"><input type="number" step="any" name="jumlah" min="1" max="<?php echo $gp[$i]->jumlah?>"  class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $b[$j]->namaAktivitas ?></label>

                                        <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $gp[$i]->beratAwal?>" class="form-control"></div>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $gp[$i]->idProProd?>" name="idProProd">
                            </div>
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

    <div class="modal inmodal fade" id="serah<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $gp[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $gp[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Awal<br>
                            <b><?php echo $gp[$i]->beratAwal ?> gr</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $gp[$i]->berat ?> gr</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            Jumlah Barang<br>
                            <b><?php echo $gp[$i]->jumlah ?> pieces</b><br><br>
                            
                        </div>
                        <div class="col-lg-3 text-center">
                            PIC Proses<br>
                            <b><?php echo $gp[$i]->namapic ?></b>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve2/'.$gp[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $gp[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $gp[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $gp[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $gp[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $gp[$i]->idWadah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $gp[$i]->idProProd ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $gp[$i]->idProProd ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $gp[$i]->idProProd ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $gp[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $gp[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$gp[$i]->kodeGambar.'-cust.jpg')?>" class="img-responsive">
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $gp[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Tambah PIC</button>

                            <div class="modal inmodal fade" id="pic<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control' );
                                                        echo form_dropdown('staf', $staf, $gp[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $gp[$i]->idProProd?>" name="idProProd">
                                                            <input type="hidden" class="form-control" value="<?php echo $gp[$i]->beratAwal?>" name="berat">
                                                        </div>
                                                        
                                                    </div>
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
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$gp[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$gp[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




