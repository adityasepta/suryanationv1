<?php 
    
    $idakt = 1006;
    $namakt = "Cor";
    $var = $co[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="<?php echo $statr ?>-element" id="task1">

    <?php if(isset($display)) {?>

    <div class="row">
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Kode</span>
            <b class="pull-right "><?php echo $co[$i]->nomorFaktur ?> - <?php echo $co[$i]->idSubSPK ?> </b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Nama</span>
            <b class="pull-right"><?php echo $co[$i]->namaCustomer ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Produk</span>
            <b class="pull-right"><?php echo $co[$i]->namaProduk ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">PIC</span>
            <b class="pull-right"><?php echo $co[$i]->namapic ?></b>
        </div>

        


        <div class="col-lg-6">
            <br>    
            <button data-toggle="modal" data-target="#detail<?php echo $co[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-6">
            <br>
            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>
    
    </div>

    <?php } else { ?>

        <div class="row">
            <div class="col-lg-6 text-center">
                No Faktur<br>
                <b><?php echo $co[$i]->nomorFaktur ?></b>
            </div>

            <div class="col-lg-6 text-center ">
                Tipe Order<br>
                <b><?php echo $co[$i]->tipeOrder ?></b>
            </div>
        </div>
        
        <br>
        <div class="row">
            <div class="col-lg-4">
                Customer<br>
                Sales Person
            </div>
            <div class="col-lg-8">
                :&nbsp&nbsp<b><?php echo $co[$i]->namaCustomer ?></b><br>
                :&nbsp&nbsp<b><?php echo $co[$i]->namasales ?></b>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">
                Produk<br>
                Jenis
                
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $co[$i]->namap ?></b><br>
                :&nbsp&nbsp<b><?php echo $co[$i]->jenisProduk?></b>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-4">
                Kadar
                
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $co[$i]->kadarBahan ?> %</b>
                
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 text-center">
                Tgl Masuk<br>
                <b><?php echo $co[$i]->tanggal ?></b>
            </div>

            <div class="col-lg-6 text-center ">
                Tgl Estimasi Selesai<br>
                <b><?php echo $co[$i]->tanggalSelesai ?></b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                
                <button data-toggle="modal" data-target="#detail<?php echo $co[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
            </div>

            <div class="col-lg-3">

                <?php if($statr == 'success') {?>
                    <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
                <?php } else { ?>
                    <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
                <?php } ?>

            </div>

            
            
            <div class="col-lg-6">
                
                <?php if ($co[$i]->statusWork == 'Belum ada PIC') { ?>
                    <button data-toggle="modal" data-target="#pic<?php echo $co[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block" onclick="tambahpic<?php echo $co[$i]->idProProd ?>();">Tambah PIC</button>
                <?php } else if($co[$i]->statusWork == 'On Progress' AND $co[$i]->berat == 0 ) {  ?>
                    <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $co[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block">Tambah Berat</button>
                <?php } else if($co[$i]->statusWork == 'On Progress' AND $co[$i]->berat > 0 AND $co[$i]->statusBerat == 'Belum Disetujui' AND $co[$i]->beratKecap == 0 ) { ?>                
                    <button data-toggle="modal" data-target="#berat<?php echo $co[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Berat Kecap</button>            
                <?php } else if($co[$i]->statusWork == 'On Progress' AND $co[$i]->berat > 0 AND $co[$i]->statusBerat == 'Belum Disetujui' AND $co[$i]->beratKecap > 0 ) { ?>                
                    <button data-toggle="modal" data-target="#serah<?php echo $co[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Validasi Berat</button>
                <?php } else if($co[$i]->statusWork == 'On Progress' AND $co[$i]->statusBerat == 'Disetujui' ) { ?>                
                    <a href="<?php echo base_url('User/next3/'.$co[$i]->idProduk.'/'.$idakt.'/'.$co[$i]->idProProd.'/'.$co[$i]->idSPK.'/'.$co[$i]->idSubSPK.'/0')?>" 
                        onclick="return confirm('Apakah anda yakin untuk melanjutkan aktivitas produksi nomor faktur <?php echo $co[$i]->nomorFaktur ?> dan menyetujui Bill Of Material untuk Sub SPK id <?php echo $co[$i]->idSubSPK ?>?')"  class="btn btn-xs btn-success btn-block">Lanjut Aktivitas</a>
                <?php } ?>
                
            </div>
        </div>

    <?php } ?>

    

    <div class="modal inmodal fade" id="serah<?php echo $co[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $co[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $co[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">
                    <div class="row">
                            <div class="col-lg-6 text-center">
                                Asal Aktivitas
                                <h1 class="text-success"><?php echo $namakt?></h1>
                            </div>
                            <div class="col-lg-3 text-center">
                                Berat Awal<br>
                                <b><?php echo $co[$i]->beratAwal ?> gr</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                Balik Bahan<br>
                                <b><?php echo $co[$i]->kembali ?> gr</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                Berat Cor<br>
                                <b><?php echo $co[$i]->berat ?> gr</b><br><br>
                                
                            </div>
                            
                            <div class="col-lg-3 text-center">
                                Berat Kecap<br>
                                <b><?php echo $co[$i]->beratKecap ?> gr</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                &nbsp
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                &nbsp
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                Jumlah Barang<br>
                                <b><?php echo $co[$i]->jumlah ?> pieces</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                PIC Proses<br>
                                <b><?php echo $co[$i]->namapic ?></b>
                                
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve2/'.$co[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $co[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $co[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $co[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $co[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $co[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $co[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $co[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $co[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $co[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $co[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $co[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $co[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $co[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $co[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$co[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                     
                                        <div class="col-lg-6 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url('assets/img/agus.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <div class="row">
                        
                            <div class="col-lg-3">
                                <?php if($co[$i]->statusWork == 'Done') {?>
                                    <button disabled class="btn btn-block ">Update PIC</button>
                                <?php } else {?>
                                    <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $co[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                                <?php } ?>
                            </div>
                            <div class="col-lg-3">
                                <?php if($co[$i]->statusWork == 'On Progress') {?>
                                    <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $co[$i]->idProProd ?>"  class="btn btn-warning btn-block btn-outline">Tambah Berat</button>
                                    
                                <?php } else {?>
                                    <button disabled class="btn  btn-block ">Tambah Berat</button>
                                <?php } ?>
                            </div>

                            <div class="modal inmodal fade" id="berat<?php echo $co[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('user/setBerat3')?>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $co[$i]->beratAwal?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" value="<?php echo $co[$i]->berat?>"  name="berat" class="form-control"></div>
                                                    <div class="col-sm-2"><input type="hidden" required name="idProProd" readonly class="form-control" value="<?php echo $co[$i]->idProProd ?>"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Kecap</label>

                                                    <div class="col-sm-5"><input type="number" step="any" value="<?php echo $co[$i]->beratKecap?>" name="beratkecap" class="form-control"></div>
                                                   
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Balik Bahan</label>

                                                    <div class="col-sm-5"><input type="number" step="any" required="" value="<?php echo $co[$i]->kembali?>" name="kembali" class="form-control"></div>
                                                   
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Jumlah Barang</label>

                                                    <div class="col-sm-5"><input type="number" value="<?php echo $co[$i]->jumlah?>" name="jumlah" min="1" class="form-control"></div>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $co[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-success">Simpan</button>
                                                </div>
                                            </div>
                                            <?php echo form_close()?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="modal inmodal fade" id="pic<?php echo $co[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC4')?>
                                            <div class="form-horizontal">
                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control', 'onchange' => 'passing'.$co[$i]->idProProd.'()', 'id' =>  $co[$i]->idProProd."-pic");
                                                        echo form_dropdown('staf', $staf, $co[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $co[$i]->idProProd?>" name="idProProd">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                                    <div class="col-sm-7"><input type="number" step="any" name="beratAwal" value="<?php echo $co[$i]->beratAwal?>" required class="form-control"></div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                                    <div class="col-sm-4">
                                                        <input type="password" id="<?php echo $co[$i]->idProProd?>-cor?>-password-2" required  value="0" name="password2" class="form-control">
                                                        <input type="hidden" id="<?php echo $co[$i]->idProProd?>-cor?>-password-1" required value="0" name="password">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="button" onclick="cekcor<?php echo $co[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-horizontal" >
                                                <div class="form-group">
                                                <div class="col-lg-12 text-center" id='<?php echo $co[$i]->idProProd?>-cor?>-cek' style="display: none;">
                                                    Password tidak cocok. Silahkan coba lagi.
                                                </div>
                                                <div class="col-lg-12 text-center" id='<?php echo $co[$i]->idProProd?>-cor?>-cek1' style="display: none;">
                                                    Password valid.
                                                </div>
                                                 </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $co[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-success" id="<?php echo $co[$i]->idProProd?>-cor" disabled="true">Simpan</button>
                                                </div>
                                            </div>
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="col-lg-6">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$co[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$co[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <button type="button" class="btn btn-danger btn-outline">Reject</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</li>
<script type="text/javascript">
        function tambahpic<?php echo $co[$i]->idProProd ?>() {
            passing<?php echo $co[$i]->idProProd ?>();
        };

        function passing<?php echo $co[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $co[$i]->idProProd ?>-pic');
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
                        $("input[id='<?php echo $co[$i]->idProProd?>-cor?>-password-1']").val(Vals[0].password);
                    }
            });
        }
</script>
<script type="text/javascript">
        function cekcor<?php echo $co[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $co[$i]->idProProd ?>-cor?>-password-1').value;
            var password2 = document.getElementById('<?php echo $co[$i]->idProProd ?>-cor?>-password-2').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $co[$i]->idProProd ?>-cor?>-cek");
            var y = document.getElementById("<?php echo $co[$i]->idProProd ?>-cor?>-cek1");

            if(password==password2) {
                $('#<?php echo $co[$i]->idProProd ?>-cor').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $co[$i]->idProProd ?>-cor').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }
    </script>




