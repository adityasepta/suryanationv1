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
            <b><?php echo round(($do[$i]->jumlah/$do[$i]->max)*100) ?> %</b>
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
        <div class="col-lg-3">
            <a class="btn btn-xs btn-success btn-block"><span class="fa fa-check-square"></span></a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-xs btn-warning btn-block"><span class="fa fa-arrow-right"></span></a>
        </div>
    </div>
    
    
    


    
</li>




