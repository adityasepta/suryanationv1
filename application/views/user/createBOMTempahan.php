<?php $Kloter =  $kloter[0]->idKloter ?>
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
                            <strong>Tambah BOM Produk Tempahan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Buat BOM Untuk Produk Tempahan <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <div class="alert alert-success alert-dismissable" id="alert1" style="display:block;"></div>

                                <?php echo form_open('user/createBOMTempahan/' .$Kloter,array('id'=>'myForm1','method'=>'post'))?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Kloter</label>
                                                <input type="text" required name="kloter" class="form-control" value="<?php echo $kloter[0]->nama?>" readonly> 
                                                <input type="hidden" required name="idKloter" class="form-control" value="<?php echo $kloter[0]->idKloter?>" readonly> 
                                                
                                            </div>
                                            <div class="col-md-8">
                                                
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No Faktur</th>
                                                            <th>Customer</th>
                                                            <th class="text-center">Jenis Produk</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php for ($i=0; $i < count($spk) ; $i++) { ?>

                                                        <tr>
                                                            <td class="text-center"><?php echo $spk[$i]->nomorFaktur; ?></td>
                                                            <td><?php echo $spk[$i]->namaCustomer; ?></td>
                                                            <td class="text-center"><?php echo $spk[$i]->jenisProduk; ?></td>
                                                            <td class="text-center"><a class="btn btn-info btn-xs" href="<?php echo base_url('user/invoice/'.$spk[$i]->nomorFaktur); ?>">Lihat BOM</a></td>
                                                        </tr>
                                                            
                                                        <?php } ?>

                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Nama Material</label>
                                                <select class="form-control" id="kode" onchange="calc();" name="kodeMaterial">
                                                <?php
                                                foreach($materials as $m)
                                                {
                                                    echo "<option value='".$m->idMaterial."'";
                                                    echo ">".$m->namaMaterial."</option>";

                                                }

                                                ?>
                                                </select>
                                            </div>
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
                                                <label>Bahan Pengurang (%)</label>
                                                <input type="number" step="any" name= "bahanPengurang" id="n4" onchange="calc();" value='0' class="form-control" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Bahan Penentu</label>
                                                <input type="number" step="any" name= "bahanPenentu" id="n5" onchange="calc();" value='0' class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 row">
                                            <div class="col-md-3">
                                                <label>Jumlah Bahan Butuh</label>
                                                <input type="text" name= "bahanButuh" id="result" class="form-control" readonly="true">
                                            </div>
                                        </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <a href="<?php echo base_url()?>user/produk"><button type="button" name="submit" class="btn btn-danger" value="batal">Batalkan</button></a>
                                        <button id='myBtn' class="btn btn-primary" type="submit">Tambahkan</button>
                                        
                                    </div>
                                    <div class="col-sm-4 text-muted-right">
                                        <input type="button" class="btn btn-info" value="Isi Kembali" onClick="window.location.reload()">
                                        <a class="btn btn-success " href="<?php echo base_url('user/kanban')?>">Kanban</a>
                                        
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
                                <?php echo form_open('user/createBOMTempahanTurun/' .$Kloter)?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>kadar Awal (%)</label>
                                                <input type="number" step="any" name= "kadarAwal" step=any id="m1" onchange="calc1();" class="form-control" value='' required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Emas Murni (gr)</label>
                                                <input type="number" step="any" name= "beratEmasMurni" step=any id="m2" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Kadar Dimau (%)</label>
                                                <input type="number" step="any" name= "kadarDimau" step=any id="m3" onchange="calc1();" class="form-control" value='0' required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 row">
                                            <div class="col-md-3">
                                                <label>Berat Bahan (gr)</label>
                                                <input type="text" name= "beratBahan" id="result1" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Alloy (gr)</label>
                                                <input type="text" name= "beratAlloy" id="result2" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Tembaga (gr)</label>
                                                <input type="text" name= "beratTembaga" id="result3" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Perak (gr)</label>
                                                <input type="text" name= "beratPerak" id="result4" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Paladium (gr)</label>
                                                <input type="text" name= "beratPaladium" id="result5" class="form-control" readonly="true">
                                            </div>
                                        </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/produk"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
                                        <button id='myBtn1' class="btn btn-primary" type="submit" disabled>Save changes</button>
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
                                <?php echo form_open('user/createBOMTempahanNaik/' .$Kloter)?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Material Yang Ingin Dicampur</label>
                                                <select id = "aa" disabled class="form-control" id="kode" onchange="calc();" name="kodeMaterial">
                                                <?php
                                                foreach($materials as $m)
                                                {
                                                    echo "<option value='".$m->idMaterial."'";
                                                    echo ">".$m->namaMaterial."</option>";

                                                }

                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Kadar Bahan Ada (%)</label>
                                                <input type="number" step="any" name= "kadarBahanAda" step=any id="o2" onchange="calc2();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Berat Bahan Ada (gr)</label>
                                                <input type="number" step="any" name= "beratBahanAda" step=any id="o1" onchange="calc2();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Kadar Emas Dimiliki (%)</label>
                                                <input type="number" step="any" name= "kadarEmasDimiliki" step=any id="o3" onchange="calc2();" class="form-control" value='0' required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Kadar Target (%)</label>
                                                <input type="number" step="any" name= "kadarTarget" step=any id="o4" onchange="calc2();" class="form-control" value='0' required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 row">
                                            <div class="col-md-4">
                                                <label> Hitung Berat+Kadar Bahan Ada (gr)</label>
                                                <input type="text" name= "beratKadarAda" id="result11" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-4">
                                                <label> Hitung Berat yang ada dan Kadar Target (gr)</label>
                                                <input type="text" name= "beratKadarTarget" id="result12" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-4">
                                                <label> Berat Bahan Target (gr)</label>
                                                <input type="text" name= "beratBahanTarget" id="result13" class="form-control" readonly="true">
                                            </div>
                                        </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a href="<?php echo base_url()?>user/produk"><button type="button" name="submit" class="btn btn-white" value="batal">Cancel</button></a>
                                        <button id='myBtn2' class="btn btn-primary" type="submit" disabled>Save changes</button>
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
                        document.getElementById("myBtn").disabled = false;      
                }
        </script>
        <script type="text/javascript">
            function calc1(){
                    var m1 = parseFloat(document.getElementById('m1').value);
                    var m2 = parseFloat(document.getElementById('m2').value);
                    var m3 = parseFloat(document.getElementById('m3').value);

                    var beratBahan = m1*m2/m3;
                    var beratAlloy = beratBahan-m2;
                    var beratPaladium = beratBahan*1.5/100;

                    document.getElementById('result1').value = beratBahan.toFixed(2);
                    document.getElementById('result2').value = beratAlloy.toFixed(2);
                    document.getElementById('result3').value = 0;
                    document.getElementById('result4').value = 0;
                    document.getElementById('result5').value = beratPaladium.toFixed(2);

                }
        </script>
        <script type="text/javascript">
            function calc2(){
                    var o1 = parseFloat(document.getElementById('o1').value);
                    var o2 = parseFloat(document.getElementById('o2').value)/100;
                    var o3 = parseFloat(document.getElementById('o3').value)/100;
                    var o4 = parseFloat(document.getElementById('o4').value)/100;

                    var beratKadarAda = o1*o2;
                    var beratKadarTarget = o4*o1;
                    var beratBahanTarget = (beratKadarTarget-beratKadarAda)/(o3-o4);

                    document.getElementById('result11').value = beratKadarAda.toFixed(2);
                    document.getElementById('result12').value = beratKadarTarget.toFixed(2);
                    document.getElementById('result13').value = beratBahanTarget.toFixed(2);

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
