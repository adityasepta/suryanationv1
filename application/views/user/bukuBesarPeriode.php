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
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>

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
                        <strong>Buku Besar</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/bukuBesar/')?>
                            <?php 
                              $tglskg = new DateTime();
                              $tglnow = $tglskg->format("Y-m-d");

                              $one_month_ago = date("Y-m-d",strtotime("-1 months",strtotime($tglnow))); 
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Filter Laporan Buku Besar Berdasarkan Tanggal</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Akun</label>
                                    <div class="form-group">
                                        <select name="kodeAkun" class="form-control" required="">
                                            <?php foreach($akun as $akun1) {?>
                                            <option value="<?php echo $akun1->kodeAkun?>" 
                                                <?php if($akun1->kodeAkun==$kodeAkun_pilih) { 
                                                    echo "selected ";}?>><?php echo $akun1->kodeAkun." - ".$akun1->namaAkun?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <label>Periode Awal</label>
                                    <div class="form-group">
                                        <input type="date" name="date1" class="form-control" value="<?php echo $date1_pilih ?>" required="">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <labeL>Periode Akhir</label>
                                    <div class="form-group">
                                        <input type="date" name="date2" class="form-control" value="<?php echo $date2_pilih ?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button style="margin-top: 22px" class="btn btn-primary btn-md" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>   
            <script>
                $(function() {
                    $('html, body').animate({
                        scrollTop: $("#scoll").offset().top-85
                    }, 1000);
                 });
            </script>
        <div class="row" id="scoll">
            <div class="col-lg-12">
                
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="modal-header">

                                <h2 class="text-center"><b>Buku Besar</b></h2>
                                <?php 
                                    if ($date1_pilih && $date2_pilih) {
                                    $date1_pilih = new DateTime($date1_pilih);
                                    $date2_pilih = new DateTime($date2_pilih);
                                    $dari = $date1_pilih->format("d F Y");
                                    $sampai = $date2_pilih->format("d F Y");
                                    
                                ?>
                                <hr>
                                <p class="text-left text-navy"><b>Periode &nbsp;: <?php echo $dari ?> - <?php echo $sampai ?></b></p>
                                <p class="text-left text-navy"><b>Akun &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                    <?php foreach($akun as $akun) {?>
                                        <?php if($akun->kodeAkun==$kodeAkun_pilih) {
                                            $namaAkun_pilih=$akun->namaAkun;
                                            echo $kodeAkun_pilih." - ".$namaAkun_pilih;
                                        } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Uraian</th>
                                        <th class="text-center">Nomor Akun</th>
                                        <th>Nama Akun</th>
                                        <th class="text-center">Debit</th>
                                        <th class="text-center">Kredit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                SALDO AWAL
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $kodeAkun_pilih ?></label>
                                            </td>
                                            <td>
                                                <?php echo $namaAkun_pilih; ?>
                                            </td>
                                            <td class="text-center">
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($saldoAwal,2,".","."); ?></label>
                                            </td>
                                            <td class="text-center">
                                                <label class="text-muted">-</label>
                                            </td>
                                        </tr>
                                    <?php $debit=0; $kredit=0; for ($i=0; $i < count($bukuBesar); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $tgl = new DateTime($bukuBesar[$i]->tanggal);
                                                    $tglmsk = $tgl->format("d F Y");
                                                    echo $tglmsk;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $bukuBesar[$i]->keterangan ?>
                                            </td>
                                            <td class="text-center">
                                                <label><?php echo $bukuBesar[$i]->kodeAkun ?></label>
                                            </td>
                                            <td>
                                                <?php echo $bukuBesar[$i]->namaAkun ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($bukuBesar[$i]->kategori=="Debit"){
                                                    $debit+=$bukuBesar[$i]->jumlah;
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($bukuBesar[$i]->jumlah,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($bukuBesar[$i]->kategori=="Kredit"){
                                                    $kredit+=$bukuBesar[$i]->jumlah;
                                                ?>
                                                <label class="text-muted pull-right"> Rp. <?php echo number_format($bukuBesar[$i]->jumlah,2,".","."); ?></label>
                                                <?php } else {?><label class="text-muted">-</label> <?php } ?>
                                            </td>
                                        </tr>
                                    <?php
                                        
                                        } 
                                    ?>
                                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                        <?php 
                                            $total = $debit-$kredit+$saldoAwal;
                                        ?>
                                        <td class="text-left" colspan="4"><strong>Total</strong></td>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($debit+$saldoAwal,2,".","."); ?></strong></td>
                                        <td class="text-right" ><strong>Rp. <?php echo number_format($kredit,2,".","."); ?></strong></td>
                                    </tr>
                                    <tr style="background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                                        <td class="text-left" colspan="5"><strong class="text-navy">Balance</strong></td>
                                        <td class="text-right" ><strong class="text-navy">Rp. <?php echo number_format($total,2,".","."); ?></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

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
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group row"><div class="col-md-4"> <label>Akun</label> <select class="form-control m-b" name="akun[]"><?php for ($i = 0; $i < count($listAkun); $i++) { ?> <option value="<?php echo $listAkun[$i]->kodeAkun?>"><?php echo $listAkun[$i]->kodeAkun." ".$listAkun[$i]->namaAkun." (".$listAkun[$i]->namaTipeAkun.")"?></option><?php } ?></select> </div><div class="col-md-2"><label>Kategori</label><select type="text" name="kategori[]" class="form-control" required><option value="Debit">Debit</option><option value="Kredit">Kredit</option></select></div><div class="col-md-4"><label>Jumlah</label><input type="number" step="any" name="jumlah[]" class="form-control" required></div><div class="col-md-2"><button class="btn remove_field" style="margin-top:22px;">Remove</button></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent().parent('div').remove(); x--;
        })
    });
    </script>
</body>

</html>
