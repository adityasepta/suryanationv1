<?php 
  $idJurnal=$jurnal[0]->idJurnal;
  if($this->input->post('is_submitted')){
        $keterangan         = set_value('keterangan');
        $tanggal            = set_value('tanggal');
  }
  else {
        $keterangan         = $jurnal[0]->keterangan;
        $tanggal            = $jurnal[0]->tanggal;
  }

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Finance</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <?php include('akunlogin.php') ?>
                <?php include('sidebar.php') ?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-8">
                <h2>Finance</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>user/jurnal">Beranda</a>
                    </li>
                    <li class="active">
                        <strong>Edit Jurnal</strong>
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-9">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">
                                <h2 class="text-center">Edit Jurnal</h2>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('user/updateJurnal/'.$idJurnal)?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Customer</label>
                                        <select name="idCustomer" class="form-control">
                                            
                                            <?php foreach($customer as $cs) {?>
                                            <option <?php $jm=0; if($cs->idCustomer==$jurnal[0]->idCustomer) { $jm=$jm+1;?> selected="" <?php } ?> value="<?php echo $cs->idCustomer?>"><?php echo $cs->namaCustomer?></option>
                                            <?php if($jm<1){?>
                                            <option selected="" value="">Tidak Ada Customer </option>
                                            <?php } } ?>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <?php 
                                          $tglsk = new datetime($tanggal);
                                          $tglnow = $tglsk->format("Y-m-d");
                                        ?>
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" value="<?php echo $tglnow ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" value="<?= $keterangan ?>" class="form-control" required>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br>
                                        <div class="form-group">
                                        <?php for ($y=0; $y < count($jurnal) ; $y++) { ?>
                                        <div class="form-group row" id="del<?php echo $y ?>">
                                            <div class="col-md-4"> 
                                                <label>Akun</label> 
                                                <select class="form-control m-b" name="akun[]">
                                                    <?php for ($i = 0; $i < count($listAkun); $i++) { ?>
                                                    <option value="<?php echo $listAkun[$i]->kodeAkun?>" <?php if($jurnal[$y]->kodeAkun==$listAkun[$i]->kodeAkun){?> selected <?php }?>><?php echo $listAkun[$i]->kodeAkun." ".$listAkun[$i]->namaAkun." (".$listAkun[$i]->namaTipeAkun.")"?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Kategori</label>
                                                <select type="text" id="kate<?php echo $y+1 ?>" name="kategori[]" class="form-control" required>
                                                    <option value="Debit" <?php if($jurnal[$y]->kategori=="Debit"){?> selected <?php }?>>Debit</option>
                                                    <option value="Kredit" <?php if($jurnal[$y]->kategori=="Kredit"){?> selected <?php }?>>Kredit</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jumlah</label>
                                                <input id="jumla<?php echo $y+1 ?>" type="number" step="any" name="jumlah[]" value="<?php echo $jurnal[$y]->jumlah?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn remove_field" style="margin-top:22px;" onclick="removeDummy<?php echo $y ?>()">Remove</button>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                        <div class="form-group">
                                            <div class="input_fields_wrap" >
                                                <button type="button" class="btn btn-info btn-sm add_field_button" style="margin-bottom: 5px;">Tambah Akun</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                <?php echo form_close()?> 
                            </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y');?>
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 30; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = <?php echo count($jurnal) ?>; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group row"><div class="col-md-4"> <label>Akun</label> <select class="form-control m-b" name="akun[]"><?php for ($i = 0; $i < count($listAkun); $i++) { ?> <option value="<?php echo $listAkun[$i]->kodeAkun?>"><?php echo $listAkun[$i]->kodeAkun." ".$listAkun[$i]->namaAkun." (".$listAkun[$i]->namaTipeAkun.")"?></option><?php } ?></select> </div><div class="col-md-2"><label>Kategori</label><select id="kate'+x+'" type="text" name="kategori[]" class="form-control" required><option value="Debit">Debit</option><option value="Kredit">Kredit</option></select></div><div class="col-md-4"><label>Jumlah</label><input id="jumla'+x+'" type="number" step="any" name="jumlah[]" class="form-control" required></div><div class="col-md-2"><button class="btn remove_field" style="margin-top:22px;">Remove</button></div></div>'); //add input box
                
            }
        });

        $(document).on('click','form button[type=submit]',function(e){
            var balance=0;
            console.log(balance);
            for(var i=1;i<=x;i++){
                console.log(document.getElementById('kate'+i).value);
                if(document.getElementById('kate'+i).value=='Debit'){
                    balance+=parseFloat(document.getElementById('jumla'+i).value);
                    console.log(balance);
                } else {
                    balance-=parseFloat(document.getElementById('jumla'+i).value);
                    console.log(balance);
                }
            }
            console.log(balance);
            if(x>0&&balance==0){
            } else {
                alert('Jumlah Debit dan Kredit yang dimasukkan tidak seimbang (Balance)');
                e.preventDefault();
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent().parent('div').remove(); x--;
        })
    });
    </script>
    <script type="text/javascript">
        <?php for ($y=0; $y < count($jurnal) ; $y++) { ?>
        function removeDummy<?php echo $y ?>() {
            var elem = document.getElementById('del<?php echo $y ?>');
            elem.parentNode.removeChild(elem);
            return false;
        }
        <?php } ?>
    </script>
</body>

</html>
