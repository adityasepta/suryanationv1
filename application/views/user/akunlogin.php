<li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url('assets/img/profile_small.jpg') ?>" />
                             </span>
                        <a>
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata['logged_in']['nama'] ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata['logged_in']['jabatan'] ?> </span> </a>
                        
                    </div>
                    <div class="logo-element">
                        SS
                    </div>
                </li>