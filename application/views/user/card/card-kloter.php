<?php $idakt = 1004 ?>
<li class="element" id="task1">

    <div class="row">
        <div class="col-lg-6">
            
            <b><?php echo $qw[$i]->nama?></b>
        </div>
        <div class="col-lg-2">
            
            <b><?php echo $qw[$i]->kadar?> %</b>
        </div>
        <div class="col-lg-4 text-center">
            
            <a class="btn btn-xs btn-warning" href="<?php echo base_url('user/reviewKloter/'.$qw[$i]->idKloter)?>">Review</a>

        </div>
    </div>



   

</li>
    
  





