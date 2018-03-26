<?php 
    
    $idakt = 1014;
    $namakt = "Done";

?>

<li class="info-element" id="task1">
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
        <div class="col-lg-12">
            <div class="progress progress-striped active">

                <div style="width: <?php echo round(($do[$i]->jumlah/$do[$i]->max)*100) ?>%" aria-valuemax="<?php echo $do[$i]->max ?>" aria-valuemin="0" aria-valuenow="<?php echo $do[$i]->jumlah ?>" role="progressbar" class="progress-bar progress-bar-danger progress-small">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$do[$i]->nomorFaktur) ?>" class="btn btn-xs btn-default btn-block">Detail</a>
        </div>
        <div class="col-lg-3">
            <?php if($prs == 100) {?>
                <a data-toggle="modal" data-target="#beratakhir<?php echo $do[$i]->idSPK ?>" class="btn btn-xs btn-warning btn-block"><span class="fa fa-check-square"></span></a>
            <?php } else {?>
                <a disabled class="btn btn-xs btn-warning btn-block"><span class="fa fa-check-square"></span></a>
            <?php } ?>
            
        </div>

    </div>

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

                                        <div class="col-sm-9"><input type="number" readonly="" step="any" name="jumlah" required min="1"  value="<?php echo $do[$i]->jumlah?>"  class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Akhir</label>

                                        <div class="col-sm-9"><input type="number" step="any" required name="beratakhir" value="" class="form-control"></div>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $do[$i]->idSPK?>" name="idSPK">
                                <input type="hidden" value="<?php echo $do[$i]->idProduk?>" name="idProduk">
                                <div class="form-horizontal">
                                    <div class="form-group">

                                        <div class="col-sm-1 pull-left"><input type="checkbox" class="form-control " name="val" required></div>
                                        <div class="col-sm-11"><em>Berat yang dimasukkan adalah berat sebenar-benarnya dan berat ini tidak dapat diedit kembali.</em></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-block btn-success">Validasi</button>
                        </div>
                    </div>
                    <?php echo form_close()?>

            </div>
        </div>
    </div>
    
    
    


    
</li>




