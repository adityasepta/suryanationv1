<?php 

    $var = $m[$i]->endDate;
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
            <b><?php echo $m[$i]->nomorPO ?></b>
        </div>
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $m[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tipe Order<br>
            <b><?php echo $m[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Sales Person
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $m[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $m[$i]->nama ?></b>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-4">
            Produk<br>
            Jenis
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $m[$i]->namap ?></b><br>
            :&nbsp&nbsp<b><?php echo $m[$i]->jenisProduk?></b>
            
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3">
            <img src="<?php echo base_url('uploads/gambarDesain/'.$m[$i]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
        </div>
        <div class="col-lg-4 text-center">
            Tanggal Masuk<br>
            <b><?php echo $m[$i]->tanggal ?></b>
        </div>
        <div class="col-lg-5 text-center ">
            Tanggal Selesai<br>
            <b><?php echo $m[$i]->tanggalSelesai ?></b>
        </div>
    </div>

    <div class="row">
        <br>
        <div class="col-lg-12">
            <button data-toggle="modal" data-target="#detailx2<?php echo $m[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>

    </div>

    

    <div class="modal inmodal fade" id="detailx2<?php echo $m[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $m[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $m[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $m[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1x2<?php echo $m[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2x2<?php echo $m[$i]->nomorFaktur ?>">Jadwal</a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="tab-1x2<?php echo $m[$i]->nomorFaktur ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $m[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $m[$i]->nama ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $m[$i]->PICDesain ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $m[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $m[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $m[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $m[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$m[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Desain Produk</b><br><br>
                                            
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$m[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2x2<?php echo $m[$i]->nomorFaktur ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $m[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Penjadwalan</td>
                                                <td class="text-center"><?php echo $m[$i]->tanggaljadwal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Dibuat</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Desain</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                       
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <a href="<?php echo base_url('user/invoicePO/'.$m[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                    <a href="<?php echo base_url('user/invoice/'.$m[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                    <button type="button" class="btn btn-danger btn-outline">Reject</button>
                </div>
            </div>
        </div>
    </div>
    
    
</li>




