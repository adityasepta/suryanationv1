<?php 

    $var = $p[$i]->tglPrint;
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
            <img src="<?php echo base_url('uploads/gambarDesain/'.$p[$i]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
        </div>
        <div class="col-lg-7">
            <b><?php echo substr($p[$i]->namaCustomer,0,10) ?> / <?php echo $p[$i]->nomorFaktur ?></b><br>
            <b><?php echo $p[$i]->jenisProduk?></b><br>
            <b><?php echo $p[$i]->tanggal?> -</b><br>
            <b><?php echo $p[$i]->tanggalSelesai?> </b><br>
        </div>
    </div>

    <div class="row">
        <br>
        <div class="col-lg-6">
            <button data-toggle="modal" data-target="#detailx2<?php echo $p[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <div class="col-lg-6">
            <a href="<?php echo base_url('user/selesaiPrint/'.$p[$i]->nomorFaktur) ?>" class="btn btn-xs btn-success btn-block">Lanjut</a>
        </div>

    </div>

    

    <div class="modal inmodal fade" id="detailx2<?php echo $p[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $p[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $p[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $p[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1x2<?php echo $p[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            

                        </ul>
                        <div class="tab-content">
                            <div id="tab-1x2<?php echo $p[$i]->nomorFaktur ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $p[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $p[$i]->nama ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $p[$i]->PICDesain ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $p[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $p[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $p[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $p[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$p[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Desain Produk</b><br><br>
                                            
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$p[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                       
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <a href="<?php echo base_url('user/invoicePO/'.$p[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                    <a href="<?php echo base_url('user/invoice/'.$p[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                    <button data-toggle="modal" data-dismiss="modal"  data-target="#reject<?php echo $p[$i]->nomorFaktur ?>" class="btn btn-danger btn-outline">Reset</button>
                </div>

                <div class="modal inmodal fade" id="reject<?php echo $p[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Form Reset Produksi</h3><br>
                            </div>
                            <?php echo form_close(); ?>
                            <?php
                            $atribut = array('id' => $p[$i]->nomorFaktur."form");
                            echo form_open('User/resetBarangMasal3',$atribut)?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-horizontal">
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Barang Reset Ke Aktivitas</label>

                                                    <div class="col-sm-9">
                                                        <select required class="form-control" name="idAktivitas">
                                                            <option value="1001">Desain</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                    <input type="hidden" value="<?php echo $p[$i]->idSPK ?>" name="idSPK">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <br><br>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</li>



