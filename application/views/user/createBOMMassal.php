<?php
    $idSubSPK = $subSPK[0]->idSubSPK;
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

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
                <div class="col-lg-10">
                    <h2>Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/produk">Produk</a>
                        </li>
                        <li class="active">
                            <strong>Tambah BOM Produk Massal</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Bahan Sementara</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-responsive table-hover table-stripped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Material</th>
                                        <th class="text-center">Kadar</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($bom4); $i++) { ?>
                             
                                        <tr>
                                            <td class="text-center"><?php echo $i+1?></td>
                                            <td class="text-center"><?php echo $bom4[$i]->namaMaterial?></td>
                                            <td class="text-center"><?php echo $bom4[$i]->kadar?> %</td>
                                            <td class="text-center"><?php echo $bom4[$i]->jumlah?> gr</td>
                                            <td class="text-center">

                                                <?php  if($bom4[$i]->status == 'Belum Disetujui') {?>
                                                    <a class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?')"  href="<?php echo base_url('user/hapusmaterial/'.$bom4[$i]->idBOM.'/massal/'.$idSubSPK)?>">Hapus</a>
                                                <?php } else { ?>
                                                <a class="btn btn-xs btn-danger" disabled href="">Hapus</a>
                                                <?php } ?>
                                                
                                            </td>
                                        </tr>
                             
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Kebutuhan Produksi</h5>
                        </div>
                        <div class="ibox-content text-right">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-muted">Kadar yang dimau</span><br>
                                    <h1 class="text-right" ><b id="a1"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-muted">Kadar dalam lokal</span><br>
                                    <h1 class="text-right" ><b id="a2"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-muted">Berat yang dimau</span><br>
                                    <h1 class="text-right" ><b id="a3"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-muted">Berat dalam lokal</span><br>
                                    <h1 class="text-right" ><b id="a4"></b></h1>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            
                            var t = <?php echo $subSPK[0]->kadarBahan ?>;
                            var c = <?php echo $subSPK[0]->beratAkhir ?>;

                            document.getElementById('a1').innerHTML  = t+" %";
                            document.getElementById('a3').innerHTML  = c+" gr";
                            
                            var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                            var w = (parseFloat(t)*100)/lk;
                            var b = parseFloat((c*w)/100);

                            document.getElementById('a2').innerHTML  = w.toFixed(2)+" %";
                            document.getElementById('a4').innerHTML  = b.toFixed(2)+" gr";


                        </script>
                    </div>
                </div>
                <div  class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Buat BOM Untuk Produk Massal <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <div class="alert alert-success alert-dismissable" id="alert1" style="display:block;"></div>
                                <?php echo form_open('user/createBOMMassal/' .$idSubSPK,array('id'=>'myForm1','method'=>'post'))?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Sub SPK</label>
                                                <input type="text" required name="idSubSPK" class="form-control" value="<?php echo $idSubSPK?>" readonly> 
                                                <input type="hidden" name="idSubSPK" value="<?php echo $idSubSPK?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Nomor Faktur</label>
                                                <input type="text" required name="idSubSPK" class="form-control" value="<?php echo $subSPK[0]->nomorFaktur ?>" readonly> 
                                            </div>
                                            <div class="col-md-2">
                                                <label>Nomor PO</label>
                                                <input type="text" required name="idSubSPK" class="form-control" value="<?php echo $subSPK[0]->nomorPO ?>" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                    
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Material</label>
                                        <select class="form-control" id="kode" onchange="calc();"  name="kodeMaterial">
                                        <?php
                                        foreach($materials as $m)
                                        {
                                            echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                            echo ">".$m->namaMaterial."</option>";

                                        }

                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kadar Murni (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="k1" readonly onchange="calc();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="k2" readonly onchange="calc();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Berat Kotor (gr)</label>
                                        <input type="number" step="any" name= "beratKotor" step=any id="n1" onchange="calc();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat Karet (gr)</label>
                                        <input type="number" step="any" name= "beratKaret" step=any id="n2" onchange="calc();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat Batu (gr)</label>
                                        <input type="number" step="any" name= "beratBatu" step=any id="n3" onchange="calc();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        
                                        <label>Pengurang (%)</label>
                                        <input type="number" step="any" name= "bahanPengurang" id="n4" onchange="calc();" value='0' class="form-control" required>
                                    </div>
                                    <div class="col-md-2">
                                        
                                        <label>Faktor Pengali</label>
                                        <input type="number" step="any" name= "bahanPenentu" id="n5" onchange="calc();" value='1' class="form-control" required>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    

                                    <div class="col-md-4">
                                        
                                        <label>Berat Emas dalam Lokal (gr) </label>
                                        <input type="text" name= "bahanButuh" id="result2" class="form-control" readonly="true">
                                    </div>

                                    <div class="col-md-4">
                                        
                                        <label>Jumlah Bahan Butuh (gr) </label>
                                        <input type="text" required name= "bahanButuh" id="result" class="form-control" readonly="true">
                                    </div>


                                    
                                </div>

                             
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8">

                                        <button id='myBtn' class="btn btn-primary" type="submit">Tambahkan</button>
                                        
                                    </div>
                                    <div class="col-sm-4 text-muted-right">
                                        <a href="<?php echo base_url('user/invoiceSPKMassal/'.$subSPK[0]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                                        <input type="button" class="btn btn-info" value="Isi Kembali" onClick="window.location.reload()">
                                        <a class="btn btn-success " href="<?php echo base_url('user/kanbanmassal')?>">Kanban</a>
                                        
                                    </div>
                                </div>
                             <?php echo form_close()?> 
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><input type="checkbox" onchange="document.getElementById('myBtn1').disabled = !this.checked;"> Menurunkan Kadar <small>Centang untuk memilih menurunkan kadar</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMMassalTurun')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Material</label>
                                                <select class="form-control" id="kode2" onchange="calc1();"  name="kodeMaterial">
                                                <?php
                                                foreach($materials as $m)
                                                {
                                                    echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                                    echo ">".$m->namaMaterial."</option>";

                                                }

                                                ?>
                                                </select>
                                            </div>
                                            
                                            
                                            <div class="col-md-2">

                                                <label>Berat (gr)</label>
                                                <input type="number" step="any" name= "beratEmasMurni" step=any id="m2" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">

                                                <label>Kadar Dimau (%)</label>
                                                <input type="number" step="any" name= "kadarDimau" step=any id="m3" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-2">
                                                <br>
                                                <label>Kadar Murni (%)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="k3" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <label>Emas Murni (gr)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="e1" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <label>Kadar Lokal (%)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="k4" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <label>Emas Lokal (gr)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="e2" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Berat Alloy (gr)</label>
                                        <input type="text" name= "beratAlloy" id="result3" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat Tembaga (gr)</label>
                                        <input type="text" name= "beratTembaga" id="result4" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat Perak (gr)</label>
                                        <input type="text" name= "beratPerak" id="result5" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Total Tambahan (gr)</label>
                                        <input type="text" name= "beratTotalTanpaEmas" id="result22" class="form-control" readonly="true">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <br>
                                        <label>Berat Total Campuran (gr)</label>
                                        <input type="text" required name= "beratTotalCampuran" required id="result1" class="form-control" readonly="true">
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>
                                    
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button id='myBtn1' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><div><input type="checkbox" onchange="document.getElementById('myBtn2').disabled = !this.checked; document.getElementById('aa').disabled = !this.checked;"> Menaikkan Kadar <small>Centang untuk memilih menaikkan kadar</small></div></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMMassalNaik')?>
                                
                                    
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Material Kadar Rendah</label>
                                        <select class="form-control" id="kode3" onchange="calc2();"  name="kodeMaterial">
                                            <?php
                                            foreach($materials as $m)
                                            {
                                                echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                                echo ">".$m->namaMaterial."</option>";

                                            }

                                            ?>
                                        </select>
                                        
                                    </div>

                                    <div class="col-md-2">
                                        <label>Berat (gr)</label>
                                        <input type="number" step="any" name= "brt" step=any id="brt" onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                    
                                

                                <div class="row">
                                     <div class="col-md-2">
                                        <br>
                                        <label>Kadar Murni (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="kd1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <label>Emas Murni (gr)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="brt1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="kd2" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <label>Emas Lokal (gr)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="brt2" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label>Material Kadar Tinggi</label>
                                        <select class="form-control" id="kode4" onchange="calc2();"  name="kodeMaterial2">
                                            <?php
                                            foreach($materials as $m)
                                            {
                                                echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                                echo ">".$m->namaMaterial."</option>";

                                            }

                                            ?>
                                        </select>
                                        
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <label>Kadar Target (%)</label>
                                        <input type="number" step="any" name= "kadarTarget" step=any id="o4" onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-2">
                                        <br>
                                        <label>Kadar Murni (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="xkd1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="xkd2" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>

                                    <div class="col-md-2">
                                        <Br>
                                        <label> Emas Murni (gr)</label>
                                        <input type="text" required name= "brt2" id="result13"  onchange="calc2();" class="form-control" readonly="true">
                                    </div>

                                    
                                     
                                    
                                
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <Br>
                                        <label> Berat Total Campuran (gr)</label>
                                        <input type="text" required name= "beratAll" id="beratAll" class="form-control" readonly="true">
                                    </div>
                                </div>
                                    
                                    
                                
                      
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
       
                                        <button id='myBtn2' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y')?>
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
    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        
        <script type="text/javascript">
                function calc(){

                    
                    var c = document.getElementById('kode').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('k1').value = t[1];
                    var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                    var w = (parseFloat(t[1])*100)/lk;
                    document.getElementById('k2').value =parseFloat(w).toFixed(2);

                    var n1 = parseFloat(document.getElementById('n1').value);
                    var n2 = parseFloat(document.getElementById('n2').value);
                    var n3 = parseFloat(document.getElementById('n3').value);
                    var n4 = parseFloat(document.getElementById('n4').value);
                    var n5 = parseFloat(document.getElementById('n5').value);
                    var jenisEmas = $('#kode option:selected').text();

                    var beratBersih = n1-n2-n3;
                    
                    var bahanDasar = beratBersih*n5;
                    var bahanPengurang = bahanDasar*n4/100;
                    document.getElementById('result').value = (bahanDasar-bahanPengurang).toFixed(2);

                    document.getElementById('result2').value =parseFloat((parseFloat(w).toFixed(2)*(bahanDasar-bahanPengurang).toFixed(2))/100).toFixed(2);

                    document.getElementById("myBtn").disabled = false;
                }
        </script>
        <script type="text/javascript">
            function calc1(){
                    //var m1 = parseFloat(document.getElementById('m1').value);
                    
                    var c = document.getElementById('kode2').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('k3').value = t[1];

                    var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                    var w = (parseFloat(t[1])*100)/lk;
                    

                    var m1 = parseFloat(document.getElementById('k3').value);
                    var m2 = parseFloat(document.getElementById('m2').value);
                    var m3 = parseFloat(document.getElementById('m3').value);

                    var beratTotalCampuran = m1*m2/m3;

                    //console.log(beratTotalCampuran-m2);

                    var e1 = parseFloat((m2*m1)/100);
                    var e2 = parseFloat((m2*w)/100);

                    var beratTotalTanpaEmas = beratTotalCampuran-m2; 
                    var beratAlloy = beratTotalTanpaEmas*0.6;
                    var beratTembaga = beratTotalTanpaEmas*0.2;
                    var beratPerak = beratTotalTanpaEmas*0.2;
                    var beratPaladium = 0;

                    document.getElementById('k4').value =parseFloat(w).toFixed(2);

                    document.getElementById('e1').value = e1.toFixed(2);
                    document.getElementById('e2').value = e2.toFixed(2);

                    document.getElementById('result1').value = beratTotalCampuran.toFixed(2);
                    document.getElementById('result22').value = beratTotalTanpaEmas.toFixed(2);
                    document.getElementById('result3').value = beratAlloy.toFixed(2);
                    document.getElementById('result4').value = beratTembaga.toFixed(2);
                    document.getElementById('result5').value = beratPerak.toFixed(2);

                }
        </script>
        <script type="text/javascript">
            function calc2(){

                    var c = document.getElementById('kode3').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('kd1').value = t[1];

                    var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                    var w = (parseFloat(t[1])*100)/lk;

                    var kd1 = parseFloat(document.getElementById('kd1').value);
                    var brt = parseFloat(document.getElementById('brt').value);

                    var brt1 = parseFloat((kd1*brt)/100);
                    var brt2 = parseFloat((w*brt)/100);


                    document.getElementById('brt1').value = brt1.toFixed(2);
                    document.getElementById('kd2').value = w.toFixed(2);
                    document.getElementById('brt2').value = brt2.toFixed(2);


                    //


                    var c = document.getElementById('kode4').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('xkd1').value = t[1];

                    var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                    var w = (parseFloat(t[1])*100)/lk;

                    var kd1 = parseFloat(document.getElementById('xkd1').value);
            
                    document.getElementById('xkd2').value = w.toFixed(2);
                    

                    var o1 = parseFloat(document.getElementById('brt').value);
                    var o2 = parseFloat(document.getElementById('kd1').value)/100;
                    var o3 = parseFloat(document.getElementById('xkd1').value)/100;
                    var o4 = parseFloat(document.getElementById('o4').value)/100;

                    var beratKadarAda = o1*o2;
                    var beratKadarTarget = o4*o1;
                    var beratBahanTarget = (beratKadarTarget-beratKadarAda)/(o3-o4);

                    var beratAll = beratBahanTarget+brt;
                    console.log(beratAll);

                    document.getElementById('result13').value = beratBahanTarget.toFixed(2);
                    document.getElementById('beratAll').value = beratAll.toFixed(2);

                }
        </script>
        <script>
            $(document).ready(function() {

                $().ajaxStart(function() {
                    $('#alert1').hide();
                }).ajaxStop(function() {
                    $('#alert1').show('');
                });

                $('#myForm1').submit(function() {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function(data) {
                            $('#alert1').html(data);
                        }
                    })
                    return false;
                });
            });

        </script>
</body>

</html>
