<?php 
    $idCustomer             = $PO[0]->idCustomer;
    $namaCustomer           = $PO[0]->namaCustomer;
    $nomorTelepon           = $PO[0]->nomorTelepon;
    $idSalesPerson          = $PO[0]->idSalesPerson;
    $tanggalMasuk           = $PO[0]->tanggalMasuk;
    $nomorPO                = $PO[0]->nomorPO;
    $nama                   = $PO[0]->nama;
    $namaProduk             = $PO[0]->namaProduk;
    $tglmsk = new DateTime($tanggalMasuk);
    $tglmsk = $tglmsk->format("d F Y");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Adminstrasi</title>

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
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Create Invoice Akhir</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="title-action">
                        <a href="<?php echo base_url()?>user/printInvoicePerseorangan/<?php echo $nomorPO?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a>
                    </div> -->
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <?php echo form_open_multipart('user/detailInvoiceAkhirPOMassal/')?>
                            <input type="hidden" name="idCustomer" value="<?php echo $idCustomer?>" class="form-control">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                <h5 class="text-muted"><?php echo $namaCustomer?></h5>
                                            
                                                <label>Nomor Telepon</label>
                                                <h5 class="text-muted"><?php echo $nomorTelepon?></h5>
                                                <div class="hr-line-dashed"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pilih PO</label>  
                                    <div class="col-lg-10">
                                        <?php $b=count($PO); for ($i=0; $i < $b ; $i++) { ?> 
                                            <?php 

                                              $tglmsk = new DateTime($PO[$i]->tanggalMasuk);
                                              $tglmsk->modify('+'.$i.' day');
                                              $tglmsk1 = $tglmsk->format("d F Y");

                                            ?>
                                            <div class="col-md-4">
                                                <div class="i-checks"><label><input type="checkbox" value="<?php echo $PO[$i]->nomorPO?>" checked name="nomorPO[]"><i></i> <?php echo 'Nomor PO '.$PO[$i]->nomorPO; echo '('.$PO[$i]->jenisProduk.')'; echo ' - '; echo $tglmsk1;?></label></div>
                                            </div>
                                        <?php } ?>
                                    </div>                         
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <br>
                                        <a href="<?php echo base_url()?>user/listInvoiceMassal"><button type="button" name="submit" class="btn btn-white" value="batal">Kembali</button></a>
                                        <button class="btn btn-primary" type="submit">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close();?>
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

</body>

</html>
