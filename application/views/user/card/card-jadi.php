
<li class="element" id="task1">
    <div class="row">
        <div class="col-lg-5 text-center">
            <img src="<?php echo base_url('uploads/gambarDesain/'.$jd[$i]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
        </div>
        <div class="col-lg-7">
            <b><?php echo substr($jd[$i]->namaCustomer,0,10) ?> / <?php echo $jd[$i]->nomorFaktur ?></b><br>
            <b><?php echo $jd[$i]->jenisProduk?></b><br>
            <b><?php echo $jd[$i]->tgljadi?> </b><br>
            
        </div>
    </div>
    
    
    

    <?php if(!isset($display)) { ?>
    <hr>
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url('user/createInvoiceAkhirPO')?>" class="btn btn-xs btn-block btn-info">Print Invoice</a>
            </div>
            <div class="col-lg-6">
                <a href="<?php echo base_url('user/ambil2/'.$jd[$i]->idSPK)?>" onclick="return confirm('Apakah anda yakin ?')"  class="btn btn-xs btn-block btn-warning">Sudah Diambil</a>
            </div>
            
        </div>
    <?php } ?>

    


    
</li>



