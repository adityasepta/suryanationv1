<?php 
    
    $idakt = 1014;
    $namakt = "Done";

?>

<li class="info-element" id="task1">

    <?php if(isset($display)) { ?>

    <div class="row">
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Nomor Faktur</span>
            <b class="pull-right "><?php echo $do[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Jumlah Sub SPK</span>
            <b class="pull-right "><?php echo $do[$i]->jml1 ?> Item</b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Jumlah Wadah</span>
            <b class="pull-right "><?php echo $do[$i]->jml2 ?> Item</b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Selesai / Total</span>
            <b class="pull-right "><?php echo $do[$i]->jumlah ?> / <?php echo $do[$i]->max ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Presentase</span>
            <b class="pull-right "><?php $prs = round(($do[$i]->jumlah/$do[$i]->max)*100); echo $prs; ?> %</b>
        </div>
            
            
            <div class="col-lg-12"><br>
                <div class="progress progress-striped active">
                    
                    <div style="width: <?php echo round(($do[$i]->jumlah/$do[$i]->max)*100) ?>%" aria-valuemax="<?php echo $do[$i]->max ?>" aria-valuemin="0" aria-valuenow="<?php echo $do[$i]->jumlah ?>" role="progressbar" class="progress-bar progress-bar-danger progress-small">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="<?php echo base_url('user/invoiceSPKMassal/'.$do[$i]->nomorFaktur) ?>" class="btn btn-xs btn-default btn-block">Detail</a>
            </div>
        
    </div>

    <?php } else {?>
        <div class="row">
            <div class="col-lg-4 text-center">
                No Faktur<br>
                <b><?php echo $do[$i]->nomorFaktur ?></b>
            </div>
            <div class="col-lg-4 text-center">
                SubSPK<br>
                <b><?php echo $do[$i]->jml1 ?> Item</b>
            </div>
            <div class="col-lg-4 text-center">
                Wadah<br>
                <b><?php echo $do[$i]->jml2 ?> Item</b>
            </div>
            
        </div>
        <br>
        <div class="row">
         
            <div class="col-lg-4 text-center ">
                Jumlah Barang<br>
                <b><?php echo $do[$i]->jumlah ?> / <?php echo $do[$i]->max ?> </b>
            </div>
            <div class="col-lg-4 text-center ">
                Kurang<br>
                <b><?php echo round(($do[$i]->max-$do[$i]->jumlah)) ?> Pcs</b>
            </div>
            <div class="col-lg-4 text-center ">
                Prosentase<br>
                <b><?php $prs = round(($do[$i]->jumlah/$do[$i]->max)*100); echo $prs; ?> %</b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                Customer<br>
                Sales Person
            </div>
            <div class="col-lg-8">
                :&nbsp&nbsp<b><?php echo $do[$i]->namaCustomer ?></b><br>
                :&nbsp&nbsp<b><?php echo $do[$i]->namasales ?></b>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">
                Produk<br>
                Jenis
                
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $do[$i]->namap ?></b><br>
                :&nbsp&nbsp<b><?php echo $do[$i]->jenisProduk?></b>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-4">
                Kadar
                
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $do[$i]->kadarBahan ?> %</b>
                
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 text-center">
                Tgl Masuk<br>
                <b><?php echo $do[$i]->tanggal ?></b>
            </div>

            <div class="col-lg-6 text-center ">
                Tgl Estimasi Selesai<br>
                <b><?php echo $do[$i]->tanggalSelesai ?></b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="progress progress-striped active">

                    <div style="width: <?php echo round(($do[$i]->jumlah/$do[$i]->max)*100) ?>%" aria-valuemax="<?php echo $do[$i]->max ?>" aria-valuemin="0" aria-valuenow="<?php echo $do[$i]->jumlah ?>" role="progressbar" class="progress-bar progress-bar-danger progress-small">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url('user/invoiceSPKMassal/'.$do[$i]->nomorFaktur) ?>" class="btn btn-xs btn-default btn-block">Detail</a>
            </div>
            <div class="col-lg-6">
                <?php if($prs == 100 and $do[$i]->statusBerat == 'Belum Disetujui') {?>
                    <a href="<?php echo base_url('user/isiBerat/'.$do[$i]->nomorPO.'/'.$do[$i]->idProProd)?>" class="btn btn-xs btn-info btn-block">Isi Berat</a>
                <?php } else if($prs == 100 and $do[$i]->statusBerat == 'Disetujui') {?>
                    <a data-toggle="modal" data-target="#beratakhir<?php echo $do[$i]->idSPK ?>" class="btn btn-xs btn-warning btn-block">Transfer</a>
                <?php } else {?>
                    <a disabled class="btn btn-xs btn-warning btn-block">Transfer</a>
                <?php } ?>
                
            </div>

        </div>
    <?php } ?>
    

    <div class="modal inmodal fade" id="beratakhir<?php echo $do[$i]->idSPK  ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Form Validasi Akhir</h3><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open('User/setBeratAkhir')?>
                            <div class="form-horizontal">

                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9"><input type="number" step="any" name="jumlah" required min="1"  value="<?php echo $do[$i]->jumlah?>"  class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Akhir</label>

                                        <div class="col-sm-9"><input type="number" step="any" required name="beratakhir" value="" class="form-control"></div>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $do[$i]->idSPK?>" name="idSPK">
                                <input type="hidden" value="<?php echo $do[$i]->idProduk?>" name="idProduk">
                                <input type="hidden" value="<?php echo $do[$i]->nomorPO?>" name="nomorPO">
                                <div class="form-horizontal">
                                    <div class="form-group">

                                        <div class="col-sm-1 pull-left"><input type="checkbox" class="form-control " name="val" required></div>
                                        <div class="col-sm-11"><em>Berat yang dimasukkan adalah <b>TOTAL</b> berat sebenar-benarnya dan berat ini tidak dapat diedit kembali.</em></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-block btn-success">Transfer</button>
                        </div>
                    </div>
                    <?php echo form_close()?>

            </div>
        </div>
    </div>
    
    
    


    
</li>




