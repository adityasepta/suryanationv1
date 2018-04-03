

<li class="element" id="task1">
    <div class="row">
        <div class="col-lg-6 text-center">
            No PO<br>
            <b><?php echo $sp[$i]->nomorPO ?></b>
        </div>
        <!-- <div class="col-lg-4 text-center">
            No Barang<br>
            <b>0001</b>
        </div> -->
        <div class="col-lg-6 text-center ">
            Tipe Order<br>
            <b><?php echo $sp[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Sales Person
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $sp[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $sp[$i]->namasales ?></b>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-4">
            Produk<br>
            Jenis
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $sp[$i]->namap ?></b><br>
            :&nbsp&nbsp<b><?php echo $sp[$i]->jenisProduk?></b>
            
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
        <div class="col-lg-9">
            <br>    
            <button data-toggle="modal" data-target="#detail2x<?php echo $sp[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <div class="col-lg-3">
            <br>    
            <button data-toggle="modal" data-target="#subspk<?php echo $sp[$i]->nomorFaktur ?>" class="btn btn-xs btn-info btn-block"><span class="fa fa-sitemap"></span></button>
        </div>


        
    </div>

    <div class="modal inmodal fade" id="subspk<?php echo $sp[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Tambah SUB SPK</h3><br>
                    <h5>No Faktur <strong class="text-success"><?php echo $sp[$i]->nomorFaktur?></strong></h5>


                </div>
                <div class="modal-body">

                    <?php echo form_open('user/setSubSPK2')?>

                    <div class="row">
                        <div class="col-lg-4">
                            &nbsp
                        </div>
                        <div class="col-lg-4">
                            <input type="number" min="1" required="" placeholder="4" name="jmlsub" class="form-control input-lg">
                        </div>
                    </div>

                    <input type="hidden" value="<?php echo $sp[$i]->idSPK?>" name="idSPK"> 

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail2x<?php echo $sp[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >NO PO : <b class="text-success"><?php echo $sp[$i]->nomorPO ?></b> | TIPE : <b class="text-success"><?php echo $sp[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $sp[$i]->nomorPO ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $sp[$i]->nomorPO ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $sp[$i]->nomorPO ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $sp[$i]->nomorPO ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            
                                            Produk<br>
                                            Bahan<br>
                                            jenis
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $sp[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $sp[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $sp[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $sp[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$sp[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $sp[$i]->nomorPO ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $sp[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $sp[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-3<?php echo $sp[$i]->nomorPO ?>" class="tab-pane">
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
                        
                        <div class="col-lg-7">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$sp[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$sp[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>




