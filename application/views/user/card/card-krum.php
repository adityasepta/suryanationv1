<?php 
    
    $idakt = 1012;
    $namakt = "Krum";
    $var = $kr[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>


<li class="<?php echo $statr?>-element" id="task1">
    <div class="row">
        <div class="col-lg-5 text-center">
            <img src="<?php echo base_url('uploads/gambarDesain/'.$kr[$i]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
        </div>
        <div class="col-lg-7">
            <b><?php echo substr($kr[$i]->namaCustomer,0,10) ?> / <?php echo $kr[$i]->nomorFaktur ?></b><br>
            <b><?php echo $kr[$i]->jenisProduk?></b><br>
            <b><?php echo $kr[$i]->tanggal?> -</b><br>
            <b><?php echo $kr[$i]->tanggalSelesai?> </b><br>
        </div>
    </div>
    <hr>

    
    
    <?php if(isset($display)) { ?>

    <div class="row">

        <div class="col-lg-6">
            
            <button data-toggle="modal" data-target="#detail<?php echo $kr[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-6">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>
    </div>

    <?php } else { ?>


    <div class="row">

        <div class="col-lg-3">
            
            <button data-toggle="modal" data-target="#detail<?php echo $kr[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-3">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>
        
        <div class="col-lg-6">
            <?php if ($kr[$i]->statusWork == 'Belum ada PIC') { ?>
                <button data-toggle="modal" data-target="#pic<?php echo $kr[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block" onclick="tambahpic<?php echo $kr[$i]->idProProd ?>();">Tambah PIC</button>
            <?php } else if($kr[$i]->statusWork == 'On Progress' AND $kr[$i]->berat == 0 ) {  ?>
                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $kr[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block">Tambah Berat</button>
            <?php } else if($kr[$i]->statusWork == 'On Progress' AND $kr[$i]->berat > 0 AND $kr[$i]->statusBerat == 'Belum Disetujui' ) { ?>                
                <button data-toggle="modal" data-target="#serah<?php echo $kr[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Validasi Berat</button>
            <?php } else if($kr[$i]->statusWork == 'On Progress' AND $kr[$i]->statusBerat == 'Disetujui' ) { ?>                
                <a  data-toggle="modal" data-target="#akt<?php echo $kr[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Lanjut Aktivitas</a>
            <?php } ?>
        </div>

    </div>

    <?php } ?>

    <div class="modal inmodal fade" id="akt<?php echo $kr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Lanjutkan Aktivitas</h3><br>

                </div>

                <div class="modal-body">
                    <?php echo form_open('User/setAktivitas')?>
                   
                    <?php echo form_close() ?>

                    <?php echo form_open('User/setAktivitas')?>
                    <div class="form-horizontal">
                        
                        <div class="form-group">

                            <div class="col-sm-10">

                                <select required class="form-control" name="idAktivitas">
                                <?php for ($k=0; $k < count($akt) ; $k++) { 
                                    if($akt[$k]->idSPK == $kr[$i]->idSPK and $akt[$k]->idAktivitas > $idakt) { ?>
                                        
                                    
                                        <option value="<?php echo $akt[$k]->idAktivitas?>">
                                            <?php echo $akt[$k]->namaAktivitas?>
                                        </option>
                                    

                                <?php  }} ?>
                                <?php for ($k=0; $k < count($akt) ; $k++) { 
                                    if($akt[$k]->idSPK == $kr[$i]->idSPK and $akt[$k]->idAktivitas < $idakt) { ?>
                                        
                                    
                                        <option value="<?php echo $akt[$k]->idAktivitas?>">
                                            <?php echo $akt[$k]->namaAktivitas?> 
                                            <?php 
                                                if ($akt[$k]->idAktivitas < $idakt) {
                                                    echo "<b> ---------- ( REWORK ) ---------- </b>";
                                                }
                                            ?>
                                        </option>
                                    

                                <?php  }} ?>
                                </select>
                                
                                
                            </div>
                            <input type="hidden" class="form-control" value="<?php echo $kr[$i]->idProProd?>" name="idProProd">
                                    <input type="hidden" class="form-control" value="<?php echo $kr[$i]->idProduk?>" name="idProduk">
                                    <input type="hidden" class="form-control" value="<?php echo $kr[$i]->idSPK?>" name="idSPK">
                            <div class="col-sm-2">
                      
                                <button type="submit" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-block btn-success"><b>OK</b></button>
                            </div>
                        </div>
                    </div>
                  
                    <?php echo form_close() ?>
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="serah<?php echo $kr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $kr[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $kr[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $kr[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas<br>
                            <h1 class="text-success"><?php echo $namakt?></h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Awal<br>
                            <b><?php echo $kr[$i]->beratAwal+$kr[$i]->beratTambahan ?> gr</b><br><br>
                            PIC Proses<br>
                            <b><?php echo $kr[$i]->namaPIC ?></b>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $kr[$i]->berat ?> gr</b><br><br>
                            Tanggal Mulai<br>
                            <b><?php echo $kr[$i]->tglmulai ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve/'.$kr[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $kr[$i]->nomorFaktur ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="berat<?php echo $kr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <?php echo form_open('User/setBerat')?>
                    
                    <div class="form-horizontal">
                        <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                            <div class="col-sm-5"><input type="number" step="any" readonly="" value="<?php echo $kr[$i]->beratAwal+$kr[$i]->beratTambahan?>" class="form-control">
                                <input type="hidden" step="any" name="beratAwal" readonly="" value="<?php echo $kr[$i]->beratAwal?>" class="form-control"></div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                            <div class="col-sm-5"><input type="number" step="any" min="0" class="form-control" type="number" step="any" name="berat" class="form-control"></div>
                            <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $kr[$i]->idProProd ?>"></div>
                        </div>
                    </div>
                    
                   <div class="row">
                        <div class="col-lg-6">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $kr[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="detail<?php echo $kr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $kr[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $kr[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $kr[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $kr[$i]->idProProd ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $kr[$i]->idProProd ?>">Jadwal</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $kr[$i]->idProProd ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            PIC Proses<br>
                                            Produk<br>
                                            Bahan<br>
                                            jenis
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->namaSales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->namaPIC ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $kr[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $kr[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Mulai Pengerjaan</b><br>
                                            <?php echo $kr[$i]->tglmulai ?></b>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Selesai Pengerjaan</b><br>
                                            <?php echo $kr[$i]->tglselesai ?></b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$kr[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto 3D Model</b><br><br>
                                            <?php if($kr[$i]->statusDesain !== 'Proses Desain') {?>
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$kr[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $kr[$i]->idProProd ?>" class="tab-pane">
                                <div class="panel-body">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Proses</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Sales</td>
                                                <td class="text-center"><?php echo $kr[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Desain</td>
                                                <td class="text-center"><?php echo $kr[$i]->tanggaldes?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>PPIC</td>
                                                <td class="text-center"><?php echo $kr[$i]->tanggalsetuju?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                            </tr>

                                            <?php for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $kr[$i]->idSPK) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $q+3 ?></td>
                                                    <td><?php echo $r[$q]->aktivitas ?></td>
                                                    <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                    <td class="text-center">
                                                        <?php if ($r[$q]->idAktivitas == $idakt) {?>

                                                        <label class="label label-xs label-warning">On Progress</label>

                                                        <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                        <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } else { ?>

                                                        <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <?php if($kr[$i]->statusWork == 'Waiting') {?>
                                <button disabled class="btn btn-block ">Update PIC</button>
                            <?php } else {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $kr[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                            <?php } ?>

                            
                        </div>
                        <div class="col-lg-3">

                            <?php if($kr[$i]->statusWork == 'On Progress') {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $kr[$i]->idProProd ?>"  class="btn btn-warning btn-block btn-outline">Berat</button>
                                
                            <?php } else {?>
                                <button disabled class="btn  btn-block ">Berat</button>
                            <?php } ?>

                            

                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo base_url('user/invoicePO/'.$kr[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoice/'.$kr[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="pic<?php echo $kr[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <?php echo form_open('User/setPIC')?>
                    <?php echo form_close(); ?>
                    <?php echo form_open('User/setPIC')?>
                    <div class="form-horizontal">
                        
                        <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                            <div class="col-sm-7">

                                
                                <?php 

                                $js = array( 'class' => 'form-control', 'onchange' => 'passing'.$kr[$i]->idProProd.'()', 'id' =>  $kr[$i]->idProProd."-pic");
                                echo form_dropdown('staf', $staf, $kr[$i]->idPIC,$js);

                                ?>
                                
                            </div>
                            <div class="col-sm-2">
                      
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?php echo $kr[$i]->idProProd?>" name="idProProd">
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-horizontal">
                            <div class="form-group"><label class="col-sm-3 control-label">Berat Tambahan</label>

                                <div class="col-sm-7">
                                    <input type="number" step="any" name="beratTambahan" value="<?php echo $kr[$i]->beratTambahan?>" required class="form-control">
                                    <small>berat tambahan yang ditambahkan terhadap peroduk dalam aktivitas ini, seperti berat <b>batu cz</b>, dll. Apabila lebih dari satu maka berat diakumulasi</small>
                                </div>
                                
                            </div>
                        </div>
                    <div class="form-horizontal">
                            <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                <div class="col-sm-4">
                                    <input type="password" id="<?php echo $kr[$i]->idProProd?>-boom?>-password-2" required  value="0" name="password2" class="form-control">
                                    <input type="hidden" id="<?php echo $kr[$i]->idProProd?>-boom?>-password-1" required value="0" name="password">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="cekboom<?php echo $kr[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-horizontal" >
                            <div class="form-group">
                            <div class="col-lg-12 text-center" id='<?php echo $kr[$i]->idProProd?>-boom?>-cek' style="display: none;">
                                Password tidak cocok. Silahkan coba lagi.
                            </div>
                            <div class="col-lg-12 text-center" id='<?php echo $kr[$i]->idProProd?>-boom?>-cek1' style="display: none;">
                                Password valid.
                            </div>
                             </div>
                        </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $kr[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-block btn-success" id="<?php echo $kr[$i]->idProProd?>-boom" disabled="true">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
    
    
</li>
<script type="text/javascript">
        function tambahpic<?php echo $kr[$i]->idProProd ?>() {
            passing<?php echo $kr[$i]->idProProd ?>();
        };

        function passing<?php echo $kr[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $kr[$i]->idProProd ?>-pic');
            var idpic = pic.options[pic.selectedIndex].value;
            console.log(idpic);
            $.ajax({
                    // Change the link to the file you are using
                    url: '<?php echo base_url();?>user/cariPegawai',
                    type: 'post',
                    // This just sends the value of the dropdown
                    data: { idpic },
                    success: function(response) {
                        
                        var Vals = $.parseJSON(response);
                        /*console.log(Vals);*/
                        var Vals    =   JSON.parse(response);
                        $("input[id='<?php echo $kr[$i]->idProProd?>-boom?>-password-1']").val(Vals[0].password);
                    }
            });
        }
</script>
<script type="text/javascript">
        function cekboom<?php echo $kr[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $kr[$i]->idProProd ?>-boom?>-password-1').value;
            var password2 = document.getElementById('<?php echo $kr[$i]->idProProd ?>-boom?>-password-2').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $kr[$i]->idProProd ?>-boom?>-cek");
            var y = document.getElementById("<?php echo $kr[$i]->idProProd ?>-boom?>-cek1");

            if(password==password2) {
                $('#<?php echo $kr[$i]->idProProd ?>-boom').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $kr[$i]->idProProd ?>-boom').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }
    </script>

