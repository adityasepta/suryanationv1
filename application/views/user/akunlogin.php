<li class="nav-header">
    <div class="dropdown profile-element"> <span>
            <img alt="image" class="img-circle" src="<?php echo base_url()?>uploads/fotoUser/<?php echo $this->session->userdata['logged_in']['fotoUser']?>" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/profile_small.jpg')?>';" style="max-width: 48px; max-height: 48px"/>
             </span>
        <a>
            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata['logged_in']['nama'] ?></strong>
             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata['logged_in']['jabatan'] ?> / <b><?php echo $this->session->userdata['logged_in']['iduser'] ?></b> </span> 
        </a>

        
    </div>
    <div class="logo-element">
        SS
    </div>
</li>