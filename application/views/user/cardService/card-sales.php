<li class="success-element" id="task1">
    <div class="row">
        <div class="col-lg-6 text-center">
            No PO<br>
            <b><?php echo $s[$i]->nomorPO ?></b>
        </div>
        <!-- <div class="col-lg-4 text-center">
            No Barang<br>
            <b>0001</b>
        </div> -->
        <div class="col-lg-6 text-center ">
            Tipe Order<br>
            <b><?php echo $s[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Sales Person
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $s[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $s[$i]->nama ?></b>
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
            <button data-toggle="modal" data-target="#detail<?php echo $s[$i]->nomorPO ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <!-- <div class="col-lg-3">
            <a href="" disabled class="btn btn-xs btn-warning btn-block"><span class="fa fa-refresh"></span></a>
        </div>
        <div class="col-lg-3">
            <a href="" disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        </div> -->
        
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $s[$i]->nomorPO ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <!-- <span >NO FAKTUR : <b class="text-success">1423342</b> | NO BARANG : <b class="text-success">001</b> | TIPE : <b class="text-success">Custom</b></span><br> -->

                    <span >NO PO : <b class="text-success"><?php echo $s[$i]->nomorPO ?></b> | TIPE : <b class="text-success"><?php echo $s[$i]->tipeOrder ?></b></span><br>

                    <!-- <span >NO PO : <b class="text-success"><?php echo $s[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $s[$i]->nomorPO ?> | TIPE : <b class="text-success"><?php echo $s[$i]->tipeOrder ?></b></span><br> -->
   <!--                  <h2><span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span></h2> -->
                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $s[$i]->nomorPO ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $s[$i]->nomorPO ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $s[$i]->nomorPO ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $s[$i]->nomorPO ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $s[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $s[$i]->nama ?></b><br>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $ijk=1; for ($ij=0; $ij < count($ds) ; $ij++) { 
                                                    if ($ds[$ij]->nomorPO==$s[$i]->nomorPO) { ?>
                                                        <tr>
                                                            <td><?php echo $ijk; ?></td>
                                                            <td><?php echo $ds[$ij]->namaBarang?></td>
                                                            <td><?php echo $ds[$ij]->jumlah?></td>
                                                        </tr>
                                                    <?php $ijk++; } }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $s[$i]->nomorPO ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $s[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-3<?php echo $s[$i]->nomorPO ?>" class="tab-pane">
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
                    <a href="<?php echo base_url('user/invoicePO/'.$s[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                    <button type="button" disabled class="btn btn-default btn-outline ">Detail SPK</button>
                    <button type="button" class="btn btn-danger btn-outline">Reject</button>
                </div>
            </div>
        </div>
    </div>
    
    
</li>




