<?php 
    $idakt = 1001;
    $namakt= "MASAK SODA + CUCI";
    $var = $li[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>


<li class="<?php echo $statr ?>-element" id="task1">
    <div class="row">
        <div class="col-lg-4 text-center">
            No PO<br>
            <b><?php echo $li[$i]->nomorPO ?></b>
        </div>
        <div class="col-lg-4 text-center">
            No Faktur<br>
            <b><?php echo $li[$i]->nomorFaktur ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Tipe Order<br>
            <b><?php echo $li[$i]->tipeOrder ?></b>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            PIC Proses
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo $li[$i]->namaCustomer ?></b><br>
            :&nbsp&nbsp<b><?php echo $li[$i]->namaPIC ?></b>
        </div>

    </div>
    <br>
    
    
    
    <div class="row">
        <br>
        <div class="col-lg-6">
            <?php if ($li[$i]->statusWork == 'Belum ada PIC') { ?>
            <button class="btn btn-block btn-danger btn-xs">Belum ada PIC</button>
            <?php } else { ?>
            <button class="btn btn-block btn-warning btn-xs">On Progress</button>
            <?php } ?>
        </div>
        <div class="col-lg-6">
            <?php if ($li[$i]->durasi == '2') { ?>
            <button class="btn btn-block btn-primary btn-xs">2 Jam</button>
            <?php } else if ($li[$i]->durasi == '4') { ?>
            <button class="btn btn-block btn-warning btn-xs">3-4 Jam</button>
            <?php } else if ($li[$i]->durasi == '5') { ?>
            <button class="btn btn-block btn-warning btn-xs">5 Jam</button>
            <?php } else if ($li[$i]->durasi == '24') { ?>
            <button class="btn btn-block btn-default btn-xs">1 Hari</button>
            <?php } else {?>
            <button class="btn btn-block btn-danger btn-xs">Tunggu</button>
            <?php } ?>
        </div>
    </div>

    <hr>
    <div class="row">

        <div class="col-lg-3">
            
            <button data-toggle="modal" data-target="#detail<?php echo $li[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-3">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>
        
        <div class="col-lg-6">
            <?php if ($li[$i]->statusWork == 'Belum ada PIC') { ?>
                <button data-toggle="modal" data-target="#pic<?php echo $li[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block" onclick="tambahpic<?php echo $li[$i]->idProProd ?>();">Tambah PIC</button>
            <?php } else if($li[$i]->statusWork == 'On Progress' AND $li[$i]->berat == 0 ) {  ?>
                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $li[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block">Tambah Berat</button>
            <?php } else if($li[$i]->statusWork == 'On Progress' AND $li[$i]->berat > 0 AND $li[$i]->statusBerat == 'Belum Disetujui' ) { ?>                
                <button data-toggle="modal" data-target="#serah<?php echo $li[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Validasi Berat</button>
            <?php } else if($li[$i]->statusWork == 'On Progress' AND $li[$i]->statusBerat == 'Disetujui' ) { ?>                
                <a  data-toggle="modal" data-target="#akt<?php echo $li[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Lanjut Aktivitas</a>
            <?php } ?>
        </div>

    </div>

    <div class="modal inmodal fade" id="serah<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $li[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $li[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $li[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            Asal Aktivitas<br>
                            <h1 class="text-success">Masak Soda + Cuci</h1>
                        </div>
                        <div class="col-lg-3 text-center">
                            Berat Akhir<br>
                            <b><?php echo $li[$i]->berat ?> gr</b><br><br>
                            PIC Proses<br>
                            <b><?php echo $li[$i]->namaPIC ?></b>
                        </div>
                        <div class="col-lg-3 text-center">
                            Tanggal Mulai<br>
                            <b><?php echo $li[$i]->tglmulai ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approveService/'.$li[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $li[$i]->nomorFaktur ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >NO PO : <b class="text-success"><?php echo $li[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $li[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $li[$i]->tipeOrder ?></b></span><br>
                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $li[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2<?php echo $li[$i]->nomorFaktur ?>">Jadwal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $li[$i]->nomorFaktur ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            PIC Proses<br>
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namaSales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $li[$i]->namaPIC ?></b><br>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $ijk=1; for ($ij=0; $ij < count($ds) ; $ij++) { 
                                                    if ($ds[$ij]->nomorPO==$li[$i]->nomorPO) { ?>
                                                        <tr>
                                                            <td><?php echo $ijk; ?></td>
                                                            <td><?php echo $ds[$ij]->namaBarang?></td>
                                                            <td><?php echo $ds[$ij]->jumlah?></td>
                                                        </tr>
                                                    <?php $ijk++; } }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Mulai Pengerjaan</b><br>
                                            <?php echo $li[$i]->tglmulai ?></b>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <b>Tanggal Selesai Pengerjaan</b><br>
                                            <?php echo $li[$i]->tglselesai ?></b>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div id="tab-2<?php echo $li[$i]->nomorFaktur ?>" class="tab-pane">
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
                                                <td class="text-center"><?php echo $li[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>

                                            <?php $no=2; for ($q=0; $q < count($r) ; ++$q) { 
                                                if($r[$q]->idSPK == $li[$i]->idSPK) { ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $no ?></td>
                                                    <td><?php echo $r[$q]->aktivitas ?></td>
                                                    <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                    <td class="text-center"><?php if ($r[$q]->idAktivitas == $idakt) {?>

                                                        <label class="label label-xs label-warning">On Progress</label>

                                                        <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                        <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } else { ?>

                                                        <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                        <?php } ?></td>
                                                </tr>

                                            <?php $no++; }} ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal inmodal fade" id="berat<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">

                                <?php echo form_open('User/setBeratService')?>
                                
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                        <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $li[$i]->beratAwal?>" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                        <div class="col-sm-5"><input type="number" step="any" min="0" class="form-control" type="number" step="any" name="berat" class="form-control"></div>
                                        <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $li[$i]->idProProd ?>"></div>
                                    </div>
                                </div>
                                
                               <div class="row">
                                    <div class="col-lg-6">
                                        <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $li[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-block btn-success">Simpan</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal inmodal fade" id="pic<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php echo form_open('User/setPICService')?>
                            <div class="form-horizontal">
                                
                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                    <div class="col-sm-7">
                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control', 'onchange' => 'passing'.$li[$i]->idProProd.'()', 'id' =>  $li[$i]->idProProd."-pic");
                                        echo form_dropdown('staf', $staf, $li[$i]->idPIC,$js);
                                        ?>
                                        
                                    </div>
                                    <div class="col-sm-2">
                              
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="<?php echo $li[$i]->idProProd?>" name="idProProd">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                        <div class="col-sm-7"><input type="number" step="any" name="beratAwal" value="<?php echo $li[$i]->beratAwal?>" required class="form-control"></div>
                                        
                                    </div>
                                </div>

                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                        <div class="col-sm-4">
                                            <input type="password" id="<?php echo $li[$i]->idProProd?>-soda?>-password-2" required  value="0" name="password2" class="form-control">
                                            <input type="hidden" id="<?php echo $li[$i]->idProProd?>-soda?>-password-1" required value="0" name="password">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="ceksoda<?php echo $li[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-horizontal" >
                                    <div class="form-group">
                                    <div class="col-lg-12 text-center" id='<?php echo $li[$i]->idProProd?>-soda?>-cek' style="display: none;">
                                        Password tidak cocok. Silahkan coba lagi.
                                    </div>
                                    <div class="col-lg-12 text-center" id='<?php echo $li[$i]->idProProd?>-soda?>-cek1' style="display: none;">
                                        Password valid.
                                    </div>
                                     </div>
                                </div>

                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $li[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" id="<?php echo $li[$i]->idProProd?>-soda" disabled="true"  class="btn btn-block btn-success">Simpan</button>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal inmodal fade" id="akt<?php echo $li[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h3 class="modal-title">Lanjutkan Aktivitas</h3><br>

                        </div>

                        <div class="modal-body">
                            <?php echo form_open('User/setAktivitasService')?>
                            <div class="form-horizontal">
                                
                                <div class="form-group">

                                    <div class="col-sm-10">

                                        <select required class="form-control" name="idAktivitas">
                                        <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $li[$i]->idSPK and $akt[$k]->idAktivitas > $idakt) { ?>
                                                
                                            
                                                <option value="<?php echo $akt[$k]->idAktivitas?>">
                                                    <?php echo $akt[$k]->namaAktivitas?>
                                                </option>
                                            

                                        <?php  }} ?>
                                        <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $li[$i]->idSPK and $akt[$k]->idAktivitas < $idakt) { ?>
                                                
                                            
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
                                    <input type="hidden" class="form-control" value="<?php echo $li[$i]->idProProd?>" name="idProProd">
                                            <input type="hidden" class="form-control" value="<?php echo $li[$i]->idSPK?>" name="idSPK">
                                            <input type="hidden" class="form-control" value="<?php echo $idakt?>" name="idakt">
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
            </div>
        </div>
    </div>
    
    
</li>

<script type="text/javascript">
        function tambahpic<?php echo $li[$i]->idProProd ?>() {
            passing<?php echo $li[$i]->idProProd ?>();
        };

        function passing<?php echo $li[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $li[$i]->idProProd ?>-pic');
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
                        $("input[id='<?php echo $li[$i]->idProProd?>-soda?>-password-1']").val(Vals[0].password);
                    }
            });
        }
</script>
<script type="text/javascript">
        function ceksoda<?php echo $li[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $li[$i]->idProProd ?>-soda?>-password-1').value;
            var password2 = document.getElementById('<?php echo $li[$i]->idProProd ?>-soda?>-password-2').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $li[$i]->idProProd ?>-soda?>-cek");
            var y = document.getElementById("<?php echo $li[$i]->idProProd ?>-soda?>-cek1");

            if(password==password2) {
                $('#<?php echo $li[$i]->idProProd ?>-soda').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $li[$i]->idProProd ?>-soda').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }
    </script>




