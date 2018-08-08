

<li class="element" id="task1">


    <?php if(isset($display)) {?>

    <div class="row">
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Kode</span>
            <b class="pull-right "><?php echo $sp[$i]->nomorFaktur ?> </b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Nama</span>
            <b class="pull-right"><?php echo $sp[$i]->namaCustomer ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Produk</span>
            <b class="pull-right"><?php echo $sp[$i]->namaProduk ?></b>
        </div>



        <div class="col-lg-12">
            <br>    
            <button data-toggle="modal" data-target="#detail2x<?php echo $sp[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>


    </div>



    <?php } else {?>

    <div class="row">
        <div class="col-lg-6 text-center">
            No Faktur<br>
            <b><?php echo $sp[$i]->nomorFaktur ?></b>
        </div>

        <div class="col-lg-6 text-center ">
            Tipe Order<br>
            <b><?php echo $sp[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Nomor Faktur<br>
            Customer<br>
            Sales Person
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $sp[$i]->nomorFaktur ?></b><br>
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

    <div class="row">
        <div class="col-lg-4">
            Kadar
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $sp[$i]->kadarBahan ?> %</b>
            
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 text-center">
            Tgl Masuk<br>
            <b><?php echo $sp[$i]->tanggal ?></b>
        </div>

        <div class="col-lg-6 text-center ">
            Tgl Estimasi Selesai<br>
            <b><?php echo $sp[$i]->tanggalSelesai ?></b>
        </div>
    </div>
    
    <div class="row">
        
        <div class="col-lg-4">
            <br>    
            <button data-toggle="modal" data-target="#detail2x<?php echo $sp[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        <div class="col-lg-4">
            <br>    
            <button data-toggle="modal" data-target="#subspk<?php echo $sp[$i]->nomorFaktur ?>" class="btn btn-xs btn-info btn-block">Tambah</button>
        </div>
        <!--<div class="col-lg-4">-->
        <!--    <br>    -->
        <!--    <a href="<?php echo base_url();?>user/selesaiSeparasi/<?php echo $sp[$i]->nomorFaktur ?>" onclick="return confirm('Apakah anda yakin untuk menyelesaikan separasi pada produksi nomor faktur <?php echo $sp[$i]->nomorFaktur ?>')"><button type="submit" class="btn btn-xs btn-warning btn-block">Selesai</button></a>-->
        <!--</div>-->


        
    </div>


    <?php } ?>

    

    <div class="modal inmodal fade" id="subspk<?php echo $sp[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Tambah SUB SPK</h3><br>
                    <h5>No Faktur <strong class="text-success"><?php echo $sp[$i]->nomorFaktur?></strong></h5>


                </div>
                <div class="modal-body">

                    <?php echo form_open('user/setSubSPK2')?>

                    <div class="row">
                   
                        <div class="col-lg-12 text-center">
                            <h2>Apakah Anda Ingin Menambahkan 1 Pohon ? ( Sub SPK )</h2>
                            <input type="hidden" min="1" required="" value="1" name="jmlsub" class="form-control input-lg" readonly="">
                        </div>
                    </div>

                    <input type="hidden" value="<?php echo $sp[$i]->idSPK?>" name="idSPK"> 

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Tambahkan</button>

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
                        <div class="col-lg-3">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#pohon<?php echo $sp[$i]->nomorFaktur ?>"  class="btn btn-info btn-block btn-outline">Daftar Pohon</button>
                        </div>
                        <div class="col-lg-9">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$sp[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$sp[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    <div class="modal inmodal fade" id="pohon<?php echo $sp[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Daftar Pohon untuk nomor faktur <?php echo $sp[$i]->nomorFaktur ?></h3><br>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php $b=0; for ($c=0; $c < count($ceksub) ; $c++) { 
                                                    if($sp[$i]->idSPK==$ceksub[$c]->idSPK) {
                                                        $b++;
                                                    }
                                                } 
                                            ?>
                                            <?php if($b>0){ ?>
                                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                                <thead>
                                                    <tr>
                                                        <th>Nomor Pohon</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for ($c=0; $c < count($ceksub) ; $c++) { 
                                                        if($sp[$i]->idSPK==$ceksub[$c]->idSPK) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $ceksub[$c]->idSubSPK?></td>
                                                            <td><a href="<?php echo base_url('user/hapusSubSPK/'.$ceksub[$c]->idSubSPK) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-xs btn-danger">Hapus</a></td>
                                                        </tr>
                                                    <?php } } ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="3">
                                                        <ul class="pagination pull-right"></ul>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <?php } else { ?>
                                            <h2 class="text-center">Belum ada pohon yang dibuat untuk nomor Faktur <?php echo $sp[$i]->nomorFaktur?></h2>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</li>




