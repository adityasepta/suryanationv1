
<li class="element" id="task1">
    <div class="row">
       
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $jd[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tanggal Jadi<br>
            <b><?php echo $jd[$i]->tgljadi ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Nomor HP
            
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $jd[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $jd[$i]->nomorTelepon ?></b><br>
            
        </div>

    </div>

    <div class="row">
        <div class="col-lg-4">
            Produk<br>
            Jenis<br>
            
        </div>
        <div class="col-lg-4">
            :&nbsp&nbsp<b><?php echo $jd[$i]->namaProduk ?></b><br>
            :&nbsp&nbsp<b><?php echo $jd[$i]->jenisProduk?></b>
            
        </div>
        
    </div>
    
    <br>

    <div class="row">
        <div class="col-lg-6">
            <a href="<?php echo base_url('user/createInvoiceAkhirPO')?>" class="btn btn-xs btn-block btn-info">Print Invoice</a>
        </div>
        <div class="col-lg-6">
            <a href="<?php echo base_url('user/ambil/'.$jd[$i]->idSPK)?>" onclick="return confirm('Apakah anda yakin akan memindah produk ini kepada customer ?')"  class="btn btn-xs btn-block btn-warning">Ambil</a>
        </div>
        
    </div>


    
</li>



