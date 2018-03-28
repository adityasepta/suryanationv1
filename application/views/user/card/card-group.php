<?php 

    $var = $g[$i]->endDate;
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
            <b><?php echo $g[$i]->nomorPO ?></b>
        </div>
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $g[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tipe Order<br>
            <b><?php echo $g[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Sales Person
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $g[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $g[$i]->nama ?></b>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-4">
            Produk<br>
            Jenis
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $g[$i]->namap ?></b><br>
            :&nbsp&nbsp<b><?php echo $g[$i]->jenisProduk?></b>
            
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
            <button data-toggle="modal" data-target="#detail<?php echo $g[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <!-- <div class="col-lg-3">
            <a href="" disabled class="btn btn-xs btn-warning btn-block"><span class="fa fa-refresh"></span></a>
        </div>
        <div class="col-lg-3">
            <a href="" disabled class="btn btn-xs btn-info btn-block"><span class="fa fa-arrow-right"></span></a>
        </div> -->
        
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $g[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <!-- <span >NO FAKTUR : <b class="text-success">1423342</b> | NO BARANG : <b class="text-success">001</b> | TIPE : <b class="text-success">Custom</b></span><br> -->

                    <!-- <span >NO PO : <b class="text-success"><?php echo $g[$i]->nomorPO ?></b> | TIPE : <b class="text-success"><?php echo $g[$i]->tipeOrder ?></b></span><br> -->

                    <span >NO PO : <b class="text-success"><?php echo $g[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $g[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $g[$i]->tipeOrder ?></b></span><br>
   <!--                  <h2><span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span>
                    <span class="fa fa-warning text-danger"></span></h2> -->
                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $g[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $g[$i]->nomorFaktur ?>">Jadwal</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3<?php echo $g[$i]->nomorFaktur ?>">Berat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $g[$i]->nomorFaktur ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $g[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $g[$i]->nama ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $g[$i]->PICDesain ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $g[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $g[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $g[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $g[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$g[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto 3D Model</b><br><br>
                                            <?php if($g[$i]->statusDesain !== 'Proses Desain') {?>
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$g[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $g[$i]->nomorFaktur ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $g[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $g[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Dibuat</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Desain</td>
                                                <td class="text-center"><?php echo $g[$i]->tanggaldes?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetuj</label></td>
                                            </tr>

                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-3<?php echo $g[$i]->nomorFaktur ?>" class="tab-pane">
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
                    <a href="<?php echo base_url('user/invoicePO/'.$g[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                    <a href="<?php echo base_url('user/invoice/'.$g[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                    <button type="button" class="btn btn-danger btn-outline">Reject</button>
                </div>
            </div>
        </div>
    </div>
    
    
</li>




