<?php 
    
    $idakt = 1007;
    $namakt = "Gosok Pentol";
    $var = $gp[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>

<li class="<?php echo $statr ?>-element" id="<?php echo $idakt ?>-<?php echo $gp[$i]->idProProd ?>">

    <?php if(isset($display)) {?>

    <div class="row">
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Kode</span>
            <b class="pull-right "><?php echo $gp[$i]->nomorFaktur ?> - <?php echo $gp[$i]->idSubSPK ?> - <?php echo $gp[$i]->idWadah ?> | <?php echo $gp[$i]->jumlahNow ?> / <?php echo $gp[$i]->jumlah ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Nama</span>
            <b class="pull-right"><?php echo $gp[$i]->namaCustomer ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">Produk</span>
            <b class="pull-right"><?php echo $gp[$i]->namaProduk ?></b>
        </div>
        <div class="col-lg-12 text-center ">
            <span class="pull-left">PIC</span>
            <b class="pull-right"><?php echo $gp[$i]->namapic ?></b>
        </div>

        
        
        <div class="col-lg-12">
            <br>
            <div class="progress progress-striped active">
                <?php 

                    $val = round(($gp[$i]->jumlahNow/$gp[$i]->jumlah)*100);

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $gp[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $gp[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            
            <button data-toggle="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-6">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>
    
    </div>



    <?php } else {?>

        
        
    <div class="row">
        <div class="col-lg-4 text-center ">
            ID Sub SPK<br>
            <b><?php echo $gp[$i]->idSubSPK ?></b>
        </div>

        <div class="col-lg-4 text-center ">
            ID Wadah<br>
            <b><?php echo $gp[$i]->idWadah ?></b>
        </div>
        <div class="col-lg-4 text-center ">
            Sisa Barang<br>
            <b><?php echo $gp[$i]->jumlahNow ?> / <?php echo $gp[$i]->jumlah ?></b>
        </div>
        <div class="col-lg-12">
            <br>
            <div class="progress progress-striped active">
                
                <?php 

                    $val = round(($gp[$i]->jumlahNow/$gp[$i]->jumlah)*100);

                ?>
                <div style="width: <?php echo $val?>%" aria-valuemax="<?php echo $gp[$i]->jumlah ?>" aria-valuemin="0" aria-valuenow="<?php echo $gp[$i]->jumlahNow ?>" role="progressbar" class="progress-bar progress-bar-info progress-small">
                    
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-4">
                Nomor Faktur<br>
                Customer<br>
                PIC
            </div>
            <div class="col-lg-8">
                :&nbsp&nbsp<b><?php echo $gp[$i]->nomorFaktur?></b><br>
                :&nbsp&nbsp<b><?php echo $gp[$i]->namaCustomer ?></b><br>
                :&nbsp&nbsp<b><?php echo $gp[$i]->namapic ?></b>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">
                Produk<br>
                Jenis
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $gp[$i]->namap ?></b><br>
                :&nbsp&nbsp<b><?php echo substr($gp[$i]->model,0,18)?></b>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-4">
                Kadar
                
            </div>
            <div class="col-lg-4">
                :&nbsp&nbsp<b><?php echo $gp[$i]->kadarBahan ?> %</b>
                
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 text-center">
                Tgl Masuk<br>
                <b><?php echo $gp[$i]->tanggal ?></b>
            </div>

            <div class="col-lg-6 text-center ">
                Tgl Estimasi Selesai<br>
                <b><?php echo $gp[$i]->tanggalSelesai ?></b>
            </div>
        </div>
        <br>
    <div class="row">
        <br>

        <div class="col-lg-3">
            
            <button data-toggle="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-default btn-block"><span class="fa fa-plus-square"></span></button>
        </div>

        <div class="col-lg-3">

            <?php if($statr == 'success') {?>
                <button class="btn btn-block btn-xs btn-primary"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-check"></span></button>
            <?php } else { ?>
                <button class="btn btn-block btn-xs btn-danger"><span class="fa fa-calendar-o"></span>&nbsp&nbsp<span class="fa fa-times"></span></button>
            <?php } ?>

        </div>

        
        
        <div class="col-lg-6">
            
            <?php if ($gp[$i]->statusWork == 'Belum ada PIC') { ?>
                <button data-toggle="modal" data-target="#pic<?php echo $gp[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block" onclick="tambahpic<?php echo $gp[$i]->idProProd ?>();">Tambah PIC</button>
            <?php } else if($gp[$i]->statusWork == 'On Progress' AND $gp[$i]->berat == 0 ) {  ?>
                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $gp[$i]->idProProd ?>"  class="btn btn-xs btn-success btn-block">Tambah Berat</button>
            <?php } else if($gp[$i]->statusWork == 'On Progress' AND $gp[$i]->berat > 0 AND $gp[$i]->statusBerat == 'Belum Disetujui' ) { ?>                
                <button data-toggle="modal" data-target="#serah<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block">Validasi Berat</button>
            <?php } else if($gp[$i]->statusWork == 'On Progress' AND $gp[$i]->statusBerat == 'Disetujui' ) { ?>                
                <button data-toggle="modal" data-target="#kasih<?php echo $gp[$i]->idProProd ?>" class="btn btn-xs btn-success btn-block" onclick="lanjutaktivitas<?php echo $gp[$i]->idProProd ?>();">Lanjut Aktivitas</button>
            <?php } ?>
            
        </div>

    </div>

    <?php } ?>
    

    <div class="modal inmodal fade" id="kasih<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Form Pengambilan Barang</h3><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open('User/next5')?>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="idAktivitasAwal" value="<?php echo $idakt ?>">
                                    <label class="col-sm-3 control-label">Pilih Aktivitas</label>

                                    <div class="col-sm-9">

                                        
                                        <select required class="form-control" name="idAktivitas">
                                        <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $gp[$i]->idSPK and $akt[$k]->idAktivitas > $idakt) { ?>
                                                
                                            
                                                <option value="<?php echo $akt[$k]->idAktivitas?>">
                                                    <?php echo $akt[$k]->namaAktivitas?>
                                                </option>
                                            

                                        <?php  }} ?>
                                        <?php for ($k=0; $k < count($akt) ; $k++) { 
                                            if($akt[$k]->idSPK == $gp[$i]->idSPK and $akt[$k]->idAktivitas < $idakt) { ?>
                                                
                                            
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
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pilih PIC</label>

                                    <div class="col-sm-9">

                                        
                                        <?php 

                                        $js = array( 'class' => 'form-control', 'onchange' => 'passing2'.$gp[$i]->idProProd.'()', 'id' =>  $gp[$i]->idProProd."-pic2");
                                        echo form_dropdown('staf', $staf, $gp[$i]->idPIC,$js);

                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang</label>

                                        <div class="col-sm-9">
                                            <input type="number" step="any" name="jumlah" required min="1"  max="<?php echo $gp[$i]->jumlahNow?>"  class="form-control">
                                            <small>jumlah maksimal adalah <b><?php echo $gp[$i]->jumlahNow?></b> pcs</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Berat Awal</label>

                                        <div class="col-sm-9">
                                            <input type="number" step="any" required name="beratAwal" value="" class="form-control">
                                            <small>Berat maksimal adalah <b><?php echo $gp[$i]->berat+$gp[$i]->beratTambahan?></b> gr</small>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                        <div class="col-sm-4">
                                            <input type="password" id="<?php echo $gp[$i]->idProProd?>-pentol?>-password-3" required  value="0" name="password3" class="form-control">
                                            <input type="hidden" id="<?php echo $gp[$i]->idProProd?>-pentol?>-password-4" required value="0" name="password4">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" onclick="cekpentol1<?php echo $gp[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-horizontal" >
                                    <div class="form-group">
                                    <div class="col-lg-12 text-center" id='<?php echo $gp[$i]->idProProd?>-pentol?>-cek3' style="display: none;">
                                        Password tidak cocok. Silahkan coba lagi.
                                    </div>
                                    <div class="col-lg-12 text-center" id='<?php echo $gp[$i]->idProProd?>-pentol?>-cek4' style="display: none;">
                                        Password valid.
                                    </div>
                                     </div>
                                </div>
                                <input type="hidden" value="<?php echo $gp[$i]->idProProd?>" name="idProProd">
                                <input type="hidden" value="<?php echo $gp[$i]->beratTambahan?>" name="beratTambahan">
                                <input type="hidden" value="<?php echo $gp[$i]->idProduk ?>" name="idProduk">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-block btn-success" id="<?php echo $gp[$i]->idProProd?>-pentol-2" disabled="true">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close()?>

            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="serah<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Form Serah Terima</h3><br>

                    <span >NO FAKTUR : <b class="text-success"><?php echo $gp[$i]->nomorFaktur ?></b> | ID SUB SPK : <b class="text-success"><?php echo $gp[$i]->idSubSPK ?></b></span><br>

                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                Asal Aktivitas
                                <h1 class="text-success"><?php echo $namakt?></h1>
                            </div>
                            <div class="col-lg-3 text-center">
                                Berat Awal<br>
                                <b><?php echo $gp[$i]->beratAwal ?> gr</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                Berat Akhir<br>
                                <b><?php echo $gp[$i]->berat ?> gr</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                Jumlah Barang<br>
                                <b><?php echo $gp[$i]->jumlah ?> pieces</b><br><br>
                                
                            </div>
                            <div class="col-lg-3 text-center">
                                PIC Proses<br>
                                <b><?php echo $gp[$i]->namapic ?></b>
                                
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <a href="<?php echo base_url('User/approve2/'.$gp[$i]->idProProd) ?>" onclick="return confirm('Apakah anda yakin untuk menyetujui berat dari aktivitas produksi nomor faktur <?php echo $gp[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $gp[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Validasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal inmodal fade" id="detail<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>
                    <span >No Faktur : <b class="text-success"><?php echo $gp[$i]->nomorFaktur ?></b> | ID Sub SPK : <b class="text-success"><?php echo $gp[$i]->idSubSPK ?></b>| ID Wadah : <b class="text-success"><?php echo $gp[$i]->idWadah ?></b>| Sisa Barang : <b class="text-success"><?php echo $gp[$i]->jumlahNow ?> / <?php echo $gp[$i]->jumlah ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1<?php echo $gp[$i]->idProProd ?>">Informasi Umum</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1<?php echo $gp[$i]->idProProd ?>" class="tab-pane active">
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
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namasales ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namapic ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->namaProduk ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $gp[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $gp[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <b>Foto Produk</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$gp[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
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

                <?php 
                $ids=$gp[$i]->idSubSPK;
                $sql ="SELECT * FROM factproduction2 WHERE idSubSPK=$ids AND idAktivitas=1006";
                $query = $this->db->query($sql);
                foreach ($query->result()  as $hasil) {
                    $beratTambahan=$hasil->beratTambahan;
                }
                ?>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <?php if($gp[$i]->statusWork == 'Waiting') {?>
                                <button disabled class="btn btn-block ">Update PIC</button>
                            <?php } else {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#pic<?php echo $gp[$i]->idProProd ?>"  class="btn btn-info btn-block btn-outline">Update PIC</button>
                            <?php } ?>
                        </div>
                        <!-- <div class="col-lg-3">
                            <?php if($gp[$i]->statusWork == 'On Progress') {?>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#berat<?php echo $gp[$i]->idProProd ?>"  class="btn btn-warning btn-block btn-outline">Tambah Berat</button>
                                
                            <?php } else {?>
                                <button disabled class="btn  btn-block ">Tambah Berat</button>
                            <?php } ?>
                        </div> -->
                            
                            <div class="modal inmodal fade" id="berat<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('user/setBerat2')?>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Awal <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratAwal" readonly="" value="<?php echo $gp[$i]->beratAwal+$gp[$i]->beratTambahan?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Akhir <?php echo $namakt ?></label>

                                                    <div class="col-sm-5"><input type="number" step="any"  name="berat" class="form-control"></div>
                                                    <div class="col-sm-2"><input type="hidden" name="idProProd" readonly class="form-control" value="<?php echo $gp[$i]->idProProd ?>"></div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-5 control-label">Berat Tambahan </label>

                                                    <div class="col-sm-5"><input type="number" step="any" name="beratTambahan" value="<?php echo $beratTambahan ?>" readonly class="form-control"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
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

                            <div class="modal inmodal fade" id="pic<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php echo form_open('User/setPIC3')?>
                                            <div class="form-horizontal">


                                                
                                                <div class="form-group"><label class="col-sm-3 control-label">Pilih / Ubah PIC</label>

                                                    <div class="col-sm-7">

                                                        
                                                        <?php 

                                                        $js = array( 'class' => 'form-control', 'onchange' => 'passing'.$gp[$i]->idProProd.'()', 'id' =>  $gp[$i]->idProProd."-pic");
                                                        echo form_dropdown('staf', $staf, $gp[$i]->idPIC,$js);

                                                        ?>
                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                              
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" value="<?php echo $gp[$i]->idProProd?>" name="idProProd">
                                                            <input type="hidden" class="form-control" value="<?php echo $gp[$i]->beratAwal?>" name="berat">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        
                                            <div class="form-horizontal">
                                                <div class="form-group"><label class="col-sm-3 control-label">Password PIC</label>

                                                    <div class="col-sm-4">
                                                        <input type="password" id="<?php echo $gp[$i]->idProProd?>-pentol?>-password-2" required  value="0" name="password2" class="form-control">
                                                        <input type="hidden" id="<?php echo $gp[$i]->idProProd?>-pentol?>-password-1" required value="0" name="password">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="button" onclick="cekpentol<?php echo $gp[$i]->idProProd?>();" class="btn btn-sm btn-primary btn-block">Cek</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-horizontal" >
                                                <div class="form-group">
                                                <div class="col-lg-12 text-center" id='<?php echo $gp[$i]->idProProd?>-pentol?>-cek' style="display: none;">
                                                    Password tidak cocok. Silahkan coba lagi.
                                                </div>
                                                <div class="col-lg-12 text-center" id='<?php echo $gp[$i]->idProProd?>-pentol?>-cek1' style="display: none;">
                                                    Password valid.
                                                </div>
                                                 </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button data-toggle="modal" data-dismiss="modal" data-target="#detail<?php echo $gp[$i]->idProProd ?>" class="btn btn-danger btn-block">Kembali</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-success" id="<?php echo $gp[$i]->idProProd?>-pentol" disabled="true">Simpan</button>
                                                </div>
                                            </div>
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <div class="col-lg-9">
                            <a href="<?php echo base_url('user/invoicePOMassal/'.$gp[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                            <a href="<?php echo base_url('user/invoiceSPKMassal/'.$gp[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                            <a href="<?php echo base_url('user/createbommassal/'.$gp[$i]->idSubSPK) ?>" type="button" class="btn btn-default btn-outline ">Detail BOM</a>
                            <button data-toggle="modal" data-dismiss="modal"  data-target="#reject<?php echo $gp[$i]->idProProd ?>" class="btn btn-danger btn-outline">Reject</button>
                        </div>

                        <div class="modal inmodal fade" id="reject<?php echo $gp[$i]->idProProd ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Form Pengembalian Barang (Reject)</h3><br>
                                    </div>
                                    <?php
                                    $atribut = array('id' => $gp[$i]->idProProd."form");
                                    echo form_open('User/rejectBarang',$atribut)?>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Pilih PIC</label>
                                                        <div class="col-sm-9">
                                                            <?php 
                                                            $js = array( 'class' => 'form-control', 'id' =>  $gp[$i]->idProProd."-pic");
                                                            echo form_dropdown('staf', $staf, $gp[$i]->idPIC,$js);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group"><label class="col-sm-3 control-label">Jumlah Barang Reject</label>
                                                            <div class="col-sm-9">
                                                                <input id="<?php echo $gp[$i]->idProProd ?>-jml" type="number" step="any" name="jumlahReject" required min="1"  max=""  class="form-control">
                                                                <small>jumlah maksimal adalah <b><?php echo $gp[$i]->jumlahNow?></b> pcs</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group"><label class="col-sm-3 control-label">Berat Reject</label>

                                                            <div class="col-sm-9">
                                                                <input id="<?php echo $gp[$i]->idProProd ?>-berat" type="number" step="any" required name="beratReject" value="" class="form-control">
                                                                <small>berat maksimal adalah <b><?php echo ((float)$gp[$i]->beratAwal-(float)$gp[$i]->berat)?></b> gr</small>  
                                                            </div>

                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                            <input type="hidden" value="<?php echo $gp[$i]->idProProd?>" name="idProProd">
                                            <input type="hidden" value="<?php echo $idakt?>" name="idAktivitas">
                                            <input type="hidden" value="<?php echo $gp[$i]->idProduk ?>" name="idProduk">
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <br><br>
                                                <button type="submit" onclick="return confirm('Apakah anda yakin untuk mengembalikan barang dari aktivitas produksi nomor faktur <?php echo $gp[$i]->nomorFaktur ?> dan ID Sub SPK <?php echo $gp[$i]->idSubSPK ?>?')"  class="btn btn-lg btn-primary btn-block">Simpan</button>
                                            </div>
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
        function tambahpic<?php echo $gp[$i]->idProProd ?>() {
            passing<?php echo $gp[$i]->idProProd ?>();
        };

        function passing<?php echo $gp[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pic');
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
                        $("input[id='<?php echo $gp[$i]->idProProd?>-pentol?>-password-1']").val(Vals[0].password);
                    }
            });
        }

        function lanjutaktivitas<?php echo $gp[$i]->idProProd ?>() {
            passing2<?php echo $gp[$i]->idProProd ?>();
        };

        function passing2<?php echo $gp[$i]->idProProd ?>() {
            var pic = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pic2');
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
                        $("input[id='<?php echo $gp[$i]->idProProd?>-pentol?>-password-4']").val(Vals[0].password);
                    }
            });
        }
</script>
<script type="text/javascript">
        function cekpentol<?php echo $gp[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pentol?>-password-1').value;
            var password2 = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pentol?>-password-2').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $gp[$i]->idProProd ?>-pentol?>-cek");
            var y = document.getElementById("<?php echo $gp[$i]->idProProd ?>-pentol?>-cek1");

            if(password==password2) {
                $('#<?php echo $gp[$i]->idProProd ?>-pentol').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $gp[$i]->idProProd ?>-pentol').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }

        function cekpentol1<?php echo $gp[$i]->idProProd?>() {
            var password = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pentol?>-password-3').value;
            var password2 = document.getElementById('<?php echo $gp[$i]->idProProd ?>-pentol?>-password-4').value;
            console.log(password);
            console.log(password2);
            var x = document.getElementById("<?php echo $gp[$i]->idProProd ?>-pentol?>-cek3");
            var y = document.getElementById("<?php echo $gp[$i]->idProProd ?>-pentol?>-cek4");

            if(password==password2) {
                $('#<?php echo $gp[$i]->idProProd ?>-pentol-2').prop('disabled', false);
                x.style.display = "none";
                y.style.display = "block";
            }
            else {
                $('#<?php echo $gp[$i]->idProProd ?>-pentol-2').prop('disabled', true);
                x.style.display = "block";
                y.style.display = "none";
            }
        }
</script>











