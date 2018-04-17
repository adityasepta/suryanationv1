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
                                    <?php $jh = 0; for ($i=0; $i < count($bom4); $i++) { $jh += $bom4[$i]->jumlah;?>
                             
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
                                    <tr>
                                        <td colspan="3" class="text-center"><b>Total Berat Bahan Sementara</b></td>
                                        <td colspan="1" class="text-center"><b><?php echo round($jh,2);?> gr</b></td>
                                        <td colspan="1" class="text-center"></td>
                                    </tr>
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
                                    <span class="text-muted">Kadar Dimau (lokal)</span><br>
                                    <h1 class="text-right" ><b id="a1"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-muted">Kadar Disarankan</span><br>
                                    <h1 class="text-right" ><b id="a2"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-muted">Berat yang dimau</span><br>
                                    <h1 class="text-right" ><b id="a3"></b></h1>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-muted">Toleransi Kadar</span><br>
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
                            var to = parseFloat(<?php echo $lk[2]->nilai?>);

                            var w = parseFloat(t-to);
                            var b = parseFloat((c*w)/100);

                            document.getElementById('a2').innerHTML  = w.toFixed(2)+" %";
                            document.getElementById('a4').innerHTML  = to.toFixed(2)+" %";


                        </script>
                    </div>
                </div>

                <?php 

                $r = count($bom4);

                if($r == 0) {
                    $a = true;
                    $b = true;
                };
                

                if($r > 0) {
                    $x = $bom4[0]->status;
                    if($x == 'Disetujui') {
                        $b = false;
                        $a = false;
                    } else {
                        $b = true;
                        $a = true;
                    }
                }

                ?>

                <?php if( $a and $b) {?>

                <div  class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Perhitungan Bahan Produksi</h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                
                                <?php echo form_open('user/setToleransi2')?>                  
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Sub SPK</label>
                                        <input type="text" required name="idSubSPK" class="form-control" value="<?php echo $idSubSPK?>" readonly> 
                                        <input type="hidden" name="idSubSPK" value="<?php echo $idSubSPK?>">
                                        <input type="hidden" name="idSPK" value="<?php echo $subSPK[0]->idSPK?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nomor Faktur</label>
                                        <input type="text" required name="idSubSPK" class="form-control" value="<?php echo $subSPK[0]->nomorFaktur ?>" readonly> 
                                    </div>
                                    <div class="col-md-3">
                                    <label>Kadar Yang dibuat Wenny</label>
                                        <input type="number" step="any" required name="kadar" class="form-control" value="<?php echo $subSPK[0]->kadarWenny ?>" id="Wenny" > 
                                         <script type="text/javascript">
                                             
                                         </script>
                                        
                                    </div>
                                    <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                                    </div>
                                    <div class="col-sm-3">
                                        <br>
                                        <?php if($subSPK[0]->kadarWenny == 0 ) { ?>
                                            <b class="text-danger">Belum Konfirmasi Kadar</b>
                                        <?php } else { ?>
                                            <b>Kadar telah dikonfirmasi sebesar <?php echo $subSPK[0]->kadarWenny ?></b>
                                        <?php } ?>
                                    </div>
                                    <?php echo form_close()?>
                                </div>
                                    
                                <hr>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Berat Lilin + Karet (gr)</label>
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
                                        
                                        <label>Faktor Pengali</label>
                                        <input type="number" step="any" name= "bahanPenentu" id="n5" onchange="calc();" value='1' class="form-control" required>
                                    </div>
                                    <div class="col-md-2">
                                        
                                        <label>Pengurang (gr)</label>
                                        <input type="number" step="any" name= "bahanPengurang" id="n4" onchange="calc();" value='0' class="form-control" required>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="row">
                                    

                                    <div class="col-md-4">
                                        
                                        <label>Jumlah Bahan Butuh (gr) </label>
                                        <input type="text" required name= "bahanButuh" id="result" class="form-control" readonly="true">
                                    </div>


                                    
                                </div>

                             
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8">

                                        
                                        
                                    </div>
                                    <div class="col-sm-4 text-muted-right">
                                        <a href="<?php echo base_url('user/invoiceSPKMassal/'.$subSPK[0]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                                        <input type="button" class="btn btn-info" value="Isi Kembali" onClick="window.location.reload()">
                                        <a class="btn btn-success " href="<?php echo base_url('user/kanbanmassal')?>">Kanban</a>
                                        
                                    </div>
                                </div>
                             
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Sesuai Kadar</h5>
                        </div>
                        <div class="ibox-content form-horizontal">

                            <?php echo form_open('user/tambahBOM')?>

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama Material</label>
                                    <select class="form-control" id="kode" onchange="calc3();"  name="kodeMaterial">
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
                                    <label>Kadar Lokal (%)</label>
                                    <input type="number" step="any" name= "kadar" step=any id="k1" readonly onchange="calc3();" class="form-control" value='0' required>
                                </div>
                                <div class="col-md-2">
                                    <label>Berat (gr)</label>
                                    <input type="number" step="any" name= "berat" step=any class="form-control" required>
                                </div>
                                
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button id='' class="btn btn-primary" type="submit" >Tambahkan</button>
                                    <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                </div>
                            </div>
                            <?php echo form_close();?>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><input type="checkbox" onchange="document.getElementById('myBtn1').disabled = !this.checked;"> Menurunkan Kadar <small>Centang untuk memilih menurunkan kadar</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMMassalTurun')?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-8">
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
                                            
                                            
                                            <div class="col-md-4">

                                                <label>Berat (gr)</label>
                                                <input type="number" step="any" name= "beratEmasMurni" step=any id="m2" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <br>
                                                <label>Kadar Lokal (%)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="k3" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <label>Emas Lokal (gr)</label>
                                                <input type="number" step="any" name= "kadar" step=any id="e1" readonly onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <label>Kadar Dimau (%)</label>
                                                <input type="number" step="any" name= "kadarDimau" step=any id="m3" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Berat Alloy (gr)</label>
                                        <input type="text" name= "beratAlloy" id="result3" class="form-control" >
                                    </div>
                                    <div class="col-md-4">
                                        <label>Berat Tembaga (gr)</label>
                                        <input type="text" name= "beratTembaga" id="result4" class="form-control" >
                                    </div>
                                    <div class="col-md-4">
                                        <label>Berat Perak (gr)</label>
                                        <input type="text" name= "beratPerak" id="result5" class="form-control" >
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <br>
                                        <label>Berat Tambahan (gr)</label>
                                        <input type="text" name= "beratTotalTanpaEmas" id="result22" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Berat Campuran (gr)</label>
                                        <input type="text" required name= "beratTotalCampuran" required id="result1" class="form-control" readonly="true">
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>
                                    
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <button id='myBtn1' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                    </div>
                                    <div class="col-sm-9">
                                        <span><em>Berat Alloy Kuning, Perak dan Tembaga dapat diganti sesuai kebutuhan. Misal untuk pemesanan dari <b>Ko Adi </b> </em></span>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><div><input type="checkbox" onchange="document.getElementById('myBtn2').disabled = !this.checked;"> Menaikkan Kadar <small>Centang untuk memilih menaikkan kadar</small></div></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMMassalNaik')?>
                                
                                    
                                <div class="row">
                                    <div class="col-md-8">
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

                                    <div class="col-md-4">
                                        <label>Berat (gr)</label>
                                        <input type="number" step="any" name= "brt" step=any id="brt" onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                    
                                

                                <div class="row">
                                     <div class="col-md-4">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="kd1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Emas Lokal (gr)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="brt1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                   
                                </div>
                                <hr>
                                <div class="row">
                                    
                                    <div class="col-md-8">
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
                                    
                                    <div class="col-md-4">
                                        <label>Kadar Target (%)</label>
                                        <input type="number" step="any" name= "kadarTarget" step=any id="o4" onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="xkd1" readonly onchange="calc2();" class="form-control" value='0' required>
                                    </div>
                                    
                                

                                    <div class="col-md-4">
                                        <Br>
                                        <label> Emas Dibutuhkan (gr)</label>
                                        <input type="text" required name= "brt2" id="result13"  onchange="calc2();" class="form-control" readonly="true">
                                    </div>

                                    <div class="col-md-4">
                                        <Br>
                                        <label> Berat Campuran (gr)</label>
                                        <input type="text" required name= "beratAll" id="beratAll" class="form-control" readonly="true">
                                    </div>
                                
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8">
       
                                        <button id='myBtn2' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><input type="checkbox" onchange="document.getElementById('myBtn3').disabled = !this.checked;"> Membuat / Menurunkan Emas Putih</h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMTempahanturun')?>
                                
                                    
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Material</label>
                                        <select class="form-control" id="km4" onchange="calc4();"  name="kodeMaterial">
                                        <?php
                                        foreach($materials as $m)
                                        {
                                            echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                            echo ">".$m->namaMaterial."</option>";

                                        }

                                        ?>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="col-md-4">

                                        <label>Berat (gr)</label>
                                        <input type="number" step="any" name= "beratEmasMurni" step=any id="br4" onchange="calc4();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="kl4" readonly onchange="calc4();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Emas Lokal (gr)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="el4" readonly onchange="calc4();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Kadar Dimau (%)</label>
                                        <input type="number" step="any" name= "kadarDimau" step=any id="kd4" onchange="calc4();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                    
                                
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Berat Alloy Putih (gr)</label>
                                        <input type="text" name= "beratAlloy" id="ap" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Berat Paladium (gr)</label>
                                        <input type="text" name= "beratTembaga" id="pl" class="form-control" readonly="true">
                                    </div>

                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <br>
                                        <label>Berat Tambahan (gr)</label>
                                        <input type="text" name= "beratTotalTanpaEmas" id="res1" class="form-control" readonly="true">
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <label>Berat Campuran (gr)</label>
                                        <input type="text" required name= "beratTotalCampuran" required id="res2" class="form-control" readonly="true">
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>
                                    
                                </div>
                                
                                <hr>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <button id='myBtn3' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><input type="checkbox" onchange="document.getElementById('myBtn4').disabled = !this.checked;"> Membuat / Menurunkan Emas Rosegold </h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <?php echo form_open('user/createBOMTempahanturun')?>
                                
                                    
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Material</label>
                                        <select class="form-control" id="km5" onchange="calc5();"  name="kodeMaterial">
                                        <?php
                                        foreach($materials as $m)
                                        {
                                            echo "<option value='".$m->idMaterial.",".$m->kadar."'";
                                            echo ">".$m->namaMaterial."</option>";

                                        }

                                        ?>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="col-md-4">

                                        <label>Berat (gr)</label>
                                        <input type="number" step="any" name= "beratEmasMurni" step=any id="br5" onchange="calc5();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <br>
                                        <label>Kadar Lokal (%)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="kl5" readonly onchange="calc5();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Emas Lokal (gr)</label>
                                        <input type="number" step="any" name= "kadar" step=any id="el5" readonly onchange="calc5();" class="form-control" value='0' required>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label>Kadar Dimau (%)</label>
                                        <input type="number" step="any" name= "kadarDimau" step=any id="kd5" onchange="calc5();" class="form-control" value='0' required>
                                    </div>
                                    
                                </div>
                                    
                                
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Berat Alloy Merah (gr)</label>
                                        <input type="text" name= "beratAlloy" id="am" class="form-control" readonly="true">
                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <label>Berat Campuran (gr)</label>
                                        <input type="text" required name= "beratTotalCampuran" required id="res3" class="form-control" readonly="true">
                                        <input type="hidden"  value="<?php echo $idSubSPK ?>" name="idSubSPK">
                                    </div>

                                    
                                </div>

                                
                                <hr>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <button id='myBtn4' class="btn btn-primary" type="submit" disabled>Tambahkan</button>
                                    </div>
                                </div>
                             <?php echo form_close()?>  
                        </div>
                    </div>
                    
                </div>

                <?php } ?>
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

                function calc3() {

                    var c = document.getElementById('kode').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('k1').value = t[1];


                }

                function calc(){


                    var n1 = parseFloat(document.getElementById('n1').value);
                    var n2 = parseFloat(document.getElementById('n2').value);
                    var n3 = parseFloat(document.getElementById('n3').value);
                    var n4 = parseFloat(document.getElementById('n4').value);
                    var n5 = parseFloat(document.getElementById('n5').value);
                    //var jenisEmas = $('#kode option:selected').text();

                    var beratBersih = n1-n2-n3;
                    
                    var bahanDasar = beratBersih*n5;
                    var bahanPengurang = n4;

                    document.getElementById('result').value = (bahanDasar-bahanPengurang).toFixed(2);

                    //document.getElementById('result2').value =parseFloat((parseFloat(w).toFixed(2)*(bahanDasar-bahanPengurang).toFixed(2))/100).toFixed(2);

                   // document.getElementById("myBtn").disabled = false;
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
                    var beratAlloy = beratTotalTanpaEmas*0.35;
                    var beratTembaga = beratTotalTanpaEmas*0.3;
                    var beratPerak = beratTotalTanpaEmas*0.35;
                    var beratPaladium = 0;

                    

                    document.getElementById('e1').value = e1.toFixed(2);
                    

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

                    //


                    var c = document.getElementById('kode4').value;
                    var t = c.split(",");
                    //console.log(t[1]);

                    document.getElementById('xkd1').value = t[1];

                    var lk = parseFloat(<?php echo $lk[0]->nilai?>);
                    var w = (parseFloat(t[1])*100)/lk;

                    var kd1 = parseFloat(document.getElementById('xkd1').value);
            
                    
                    

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
        <script type="text/javascript">
            function calc4() {
                var c = document.getElementById('km4').value;
                var t = c.split(",");
                //console.log(t[1]);

                document.getElementById('kl4').value = t[1];

                var brt = parseFloat(document.getElementById('br4').value);
                var kd1 = parseFloat(document.getElementById('kl4').value);

                var brt1 = parseFloat((kd1*brt)/100);
                document.getElementById('el4').value = brt1.toFixed(2);

                var dimau = parseFloat(document.getElementById('kd4').value);
                
                sd = (kd1/dimau)*brt;
                ap = sd-brt;
                pl = 0.01*sd;

                res1 = ap+pl;
                res2 = sd+pl;

                document.getElementById('ap').value = ap.toFixed(2);
                document.getElementById('pl').value = pl.toFixed(2);
                document.getElementById('res1').value = res1.toFixed(2);
                document.getElementById('res2').value = res2.toFixed(2);
                console.log(ap);
            }
        </script>
        <script type="text/javascript">
            function calc5() {
                var c = document.getElementById('km5').value;
                var t = c.split(",");
                //console.log(t[1]);

                document.getElementById('kl5').value = t[1];

                var brt = parseFloat(document.getElementById('br5').value);
                var kd1 = parseFloat(document.getElementById('kl5').value);

                var brt1 = parseFloat((kd1*brt)/100);
                document.getElementById('el5').value = brt1.toFixed(2);

                var dimau = parseFloat(document.getElementById('kd5').value);
                
                sd = (kd1/dimau)*brt;
                am = sd-brt;
                

                res3 = sd;
                

                document.getElementById('am').value = am.toFixed(2);
                
                document.getElementById('res3').value = res3.toFixed(2);
                
                
            }
        </script>
</body>

</html>
