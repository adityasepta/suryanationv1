<?php $idakt = 1006;
    $namakt = "Cor";
?>
<li class="element" id="task1">



    <?php for ($x=0; $x < count($co) ; $x++) { ?>

        <?php if($k3[$i]->idKloter == $co[$x]->idKloter) { ?>

        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="<?php echo base_url('uploads/gambarDesain/'.$co[$x]->kodeGambar.'-thumb.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
            </div>
            <div class="col-lg-8">
                <b><a data-toggle="modal" data-target="#detail<?php echo $co[$x]->idProProd ?>" >
                    <?php echo substr($co[$x]->namaCustomer,0,10) ?> / <?php echo $co[$x]->nomorFaktur ?>
                        
                    </a></b><br>
                
                <b><?php echo $co[$x]->jenisProduk?></b><br>

                
                <div class="modal inmodal fade" id="detail<?php echo $co[$x]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title">Detail Proses Produksi</h3><br>
                                <span >NO PO : <b class="text-success"><?php echo $co[$x]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $co[$x]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $co[$x]->tipeOrder ?></b></span><br>

                            </div>
                            <div class="modal-body">

                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $co[$x]->nomorFaktur ?>">Informasi Umum</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2<?php echo $co[$x]->nomorFaktur ?>">Jadwal</a></li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1<?php echo $co[$x]->nomorFaktur ?>" class="tab-pane active">
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
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaCustomer ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaSales ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaPIC ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->namaProduk ?></b><br>
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->kadarBahan ?> %</b><br>
                                                        :&nbsp&nbsp<b><?php echo $co[$x]->jenisProduk ?></b>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4 text-right ">
                                                        <b>Model</b>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <?php echo $co[$x]->model ?>
                                                    </div>

                                                </div>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-6 text-center">
                                                        <b>Tanggal Mulai Pengerjaan</b><br>
                                                        <?php echo $co[$x]->tglmulai ?>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <b>Tanggal Selesai Pengerjaan</b><br>
                                                        <?php echo $co[$x]->tglselesai ?>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto Refrensi</b><br><br>
                                                        <img src="<?php echo base_url('uploads/gambarProduk/'.$co[$x]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                    </div>
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto 3D Model</b><br><br>
                                                        
                                                        <img src="<?php echo base_url('uploads/gambarDesain/'.$co[$x]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                        
                                                    </div>
                                                    <div class="col-lg-4 text-center">
                                                        <b>Foto PIC</b><br><br>
                                                        <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2<?php echo $co[$x]->nomorFaktur ?>" class="tab-pane">
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
                                                            <td class="text-center"><?php echo $co[$x]->tanggal?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Penjadwalan</td>
                                                            <td class="text-center"><?php echo $co[$x]->tanggaljadwal?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Dibuat</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td>Desain</td>
                                                            <td class="text-center"><?php echo $co[$x]->tanggaldes?></td>
                                                            <td class="text-center"><label class="label label-xs label-primary">Disetujui</label></td>
                                                        </tr>

                                                        <?php $no = 4; for ($q=0; $q < count($r) ; ++$q) { 
                                                            
                                                            if($r[$q]->idSPK == $co[$x]->idSPK) { ?>

                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td><?php echo $r[$q]->aktivitas ?></td>
                                                                <td class="text-center"><?php echo $r[$q]->sd ?></td>
                                                                <td class="text-center"><?php if ($r[$q]->idAktivitas == '1005') {?>

                                                                    <label class="label label-xs label-warning">On Progress</label>

                                                                    <?php } else if ($r[$q]->STATUS == 'On Time'){ ?>

                                                                    <label class="label label-xs label-primary"><?php echo $r[$q]->STATUS ?></label>

                                                                    <?php } else { ?>

                                                                    <label class="label label-xs label-danger"><?php echo $r[$q]->STATUS ?></label>

                                                                    <?php } ?></td>
                                                            </tr>

                                                        <?php ++$no; }} ?>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="row">
                                    
                                    <div class="col-lg-12 text-right ">
                                        <a href="<?php echo base_url('user/invoicePO/'.$co[$x]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                                        <a href="<?php echo base_url('user/invoice/'.$co[$x]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                                        <button type="button" class="btn btn-danger btn-outline">Reject</button>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
        <br>


    <?php }} ?>

    

    <div class="row">
        <div class="col-lg-12">

            <?php 

            $asd = 0;

            for ($d=0; $d < count($cb) ; $d++) {
                if($k3[$i]->idKloter == $cb[$d]->idKloter) {
                    $asd++;
                }}
            ?>
            
            <?php if ($co[$i]->statusWork == 'Belum ada PIC') { ?>
                <button data-toggle="modal" data-target="#pic<?php echo $co[$i]->idKloter ?>"  class="btn btn-xs btn-success btn-block">Tambah PIC - <?php echo $co[$i]->nama ?></button>
            <?php } else if($co[$i]->statusWork == 'On Progress' AND $co[$i]->berat == 0 ) {  ?>
                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $co[$i]->idKloter ?>"  class="btn btn-xs btn-success btn-block">Tambah Berat - <?php echo $co[$i]->nama ?></button>
            <?php } else if($co[$i]->statusWork == 'On Progress' AND $asd == 0 ) {  ?>
                <a href="<?php echo base_url('user/createBOMTempahan/'.$k3[$i]->idKloter)?>" class="btn btn-xs btn-success btn-block">Tambah BOM</a>
            <?php } else  { ?>                          
                <a href="<?php echo base_url('user/next2/'.$k3[$i]->idKloter.'/'.$idakt) ?>" class="btn btn-block btn-success btn-xs" onclick="return confirm('Apakah anda yakin untuk finalisasi Kloter dengan nama kloter <?php echo $k3[$i]->nama ?> ?')"  class="btn btn-xs btn-success btn-block">Lanjut Aktivitas - <?php echo $co[$i]->nama ?></a>
            <?php } ?>
            
        </div>
    </div>

    <div class="modal inmodal fade" id="pic<?php echo $k3[$i]->idKloter ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <?php echo form_open('User/setPIC2')?>
                    <div class="form-horizontal">
                        
                        <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                            <div class="col-sm-7">

                                
                                <?php 

                                $js = array( 'class' => 'form-control', 'onchange' => 'passing'.$k3[$i]->idProProd.'()', 'id' =>  $k3[$i]->idProProd."-pic");
                                echo form_dropdown('staf', $staf, $k3[$i]->idPIC,$js);

                                ?>
                                
                            </div>
                            
                            <div class="col-sm-2">
                      
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?php echo $k3[$i]->idKloter?>" name="idKloter">
                                    <input type="hidden" class="form-control" value="<?php echo $idakt ?>" name="idAktivitas">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                                <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                    <div class="col-sm-7"><input type="number" step="any" name="beratAwal" value="<?php echo $k3[$i]->beratAwal?>" required class="form-control"></div>
                                    
                                </div>
                            </div>
                    <div class="form-horizontal">
                            <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                <div class="col-sm-4">
                                    <input type="password" id="<?php echo $k3[$i]->idProProd?>-k3?>-password-2" required  value="0" name="password2" class="form-control">
                                    <input type="hidden" id="<?php echo $k3[$i]->idProProd?>-k3?>-password-1" required value="0" name="password">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="cekk3<?php echo $k3[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-horizontal" >
                            <div class="form-group">
                            <div class="col-lg-12 text-center" id='<?php echo $k3[$i]->idProProd?>-k3?>-cek' style="display: none;">
                                Password tidak cocok. Silahkan coba lagi.
                            </div>
                            <div class="col-lg-12 text-center" id='<?php echo $k3[$i]->idProProd?>-k3?>-cek1' style="display: none;">
                                Password valid.
                            </div>
                             </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button data-toggle="modal" data-dismiss="modal" class="btn btn-danger btn-block">Kembali</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-block btn-success" id="<?php echo $k3[$i]->idProProd?>-k3" disabled="true">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>

     <div class="modal inmodal fade" id="berat<?php echo $co[$i]->idKloter ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <?php echo form_open('User/setBerat10')?>
                    
                    <div class="form-horizontal">
                        <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                            <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $k3[$i]->beratAwal?>" class="form-control"></div>
                            <input type="hidden" class="form-control" value="<?php echo $k3[$i]->idKloter?>" name="idKloter">
                            <input type="hidden" class="form-control" value="<?php echo $idakt ?>" name="idAktivitas">
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                            <div class="col-sm-5"><input type="number" step="any" min="0" value="<?php echo $k3[$i]->berat?>" class="form-control" type="number" step="any" name="berat" class="form-control"></div>
                            <div class="col-sm-2"><input type="hidden"  name="idProProd"  value="<?php echo $co[$i]->idProProd ?>"></div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group"><label class="col-sm-5 control-label">Balik Bahan</label>

                            <div class="col-sm-5"><input type="number" step="any" min="0" value="<?php echo $k3[$i]->kembali?>" class="form-control" type="number" step="any" name="kembali" class="form-control"></div>
                            
                        </div>
                    </div>
                    
                   <div class="row">
                        <div class="col-lg-6">
                            <button data-toggle="modal" data-dismiss="modal" class="btn btn-danger btn-block">Kembali</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



</li>
<script type="text/javascript">
        function tambahpic<?php echo $k3[$i]->idProProd ?>() {
            passing<?php echo $k3[$i]->idProProd ?>();
        };

        function passing<?php echo $k3[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $k3[$i]->idProProd ?>-pic');
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
                        $("input[id='<?php echo $k3[$i]->idProProd?>-k3?>-password-1']").val(Vals[0].password);
                    }
            });
        }
</script>
<script type="text/javascript">
        function cekk3<?php echo $k3[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $k3[$i]->idProProd ?>-k3?>-password-1').value;
            var password2 = document.getElementById('<?php echo $k3[$i]->idProProd ?>-k3?>-password-2').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $k3[$i]->idProProd ?>-k3?>-cek");
            var y = document.getElementById("<?php echo $k3[$i]->idProProd ?>-k3?>-cek1");

            if(password==password2) {
                $('#<?php echo $k3[$i]->idProProd ?>-k3').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $k3[$i]->idProProd ?>-k3').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }
    </script>    
  





