<?php 
    
    $idakt = 1007;
    $namakt = "Separasi";
    $var = $sp2[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="element" id="task1">
    <div class="row">
        <div class="col-lg-6 text-center">
            No Faktur<br>
            <b><?php echo $sp2[$i]->nomorFaktur ?></b>
        </div>

        <div class="col-lg-6 text-center ">
            ID Sub SPK<br>
            <b><?php echo $sp2[$i]->idSubSPK ?></b>
        </div>
    </div>
    
    

    <div class="row">
        <div class="col-lg-12 text-center">
            


        </div>
    </div>
    
    
    <div class="row">
        <br>


        <div class="col-lg-9">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $sp2[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>



        <div class="col-lg-3">
            <br>

                <a data-toggle="modal" data-target="#separasi2<?php echo $sp2[$i]->idProProd ?>" class="btn btn-xs btn-info btn-block"><span class="fa fa-code-fork"></span></a>
        
            
        </div>

        
    </div>

    <div class="modal inmodal fade" id="separasi2<?php echo $sp2[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Separasi SUB SPK</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $sp2[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $sp2[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">
                    <?php echo form_open('User/setWadah')?>
                    <div class="row text-right input_fields_wrap">

                                                                        
                            <button class="btn btn-sm btn-success add_field_button">Tambah Wadah</button>
                            <br>
                            
                      
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <input type="hidden" name="idSubSPK" value="<?php echo $sp2[$i]->idSubSPK?>">
                            <input type="hidden" name="idSPK" value="<?php echo $sp2[$i]->idSPK?>">
                            <input type="hidden" name="idProProd" value="<?php echo $sp2[$i]->idProProd?>">
                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk membagi Sub SPK <?php echo $sp2[$i]->idSubSPK?>?')"  class="btn btn-lg btn-primary btn-block">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $sp2[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $sp2[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $sp2[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $sp2[$i]->idProProd ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $sp2[$i]->idProProd ?>">Jadwal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $sp2[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $sp2[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $sp2[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$sp2[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $sp2[$i]->idProProd ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $sp2[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $sp2[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $sp2[$i]->idSPK) { ?>

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
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                      
                        <div class="col-lg-7">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$sp2[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$sp2[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




