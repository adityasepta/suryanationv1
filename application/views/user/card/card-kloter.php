<?php $idakt = 1004 ?>
<li class="element" id="task1">

    <div class="row form-group">
        <div class="col-lg-6">
            
            <b><?php echo $qw[$i]->nama?></b>
        </div>
        <div class="col-lg-6">
            
            <b>Kadar: <?php echo $qw[$i]->kadar?> %</b>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6">
            <a class="btn btn-xs btn-warning" href="<?php echo base_url('user/reviewKloter/'.$qw[$i]->idKloter)?>">Review</a>
        </div>
        <div class="col-lg-6">
            <a class="btn btn-xs btn-success" onclick="return confirm('Apakah anda yakin untuk lanjut ke aktivitas selanjutnya ?')" href="<?php echo base_url('user/validasiKloter/'.$qw[$i]->idKloter)?>">Lanjut Aktivitas</a>
        </div>
    </div>



   

</li>
    
  





