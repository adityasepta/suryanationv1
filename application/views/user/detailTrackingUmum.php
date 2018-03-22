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
                <div class="col-lg-10">
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Track Purchase Order</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Track Purchase Order</h5>
                        </div>
                        <div class="ibox-content">
                            <dir class="row">
                                <div class="col-lg-12">
                                    <h3>Informasi Umum</h3>
                                    <hr>
                                </div>
                            </dir>
                            <dir class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-4"><label>Nomor PO</label></div><div class="col-lg-8"><p><?php echo $dataUmum[0]->nomorPO?></p></div>
                                    <div class="col-lg-4"><label>Tanggal Masuk</label></div><div class="col-lg-8"><p><?php echo $dataUmum[0]->tanggalMasuk?></p></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-4"><label>Nama Customer</label></div><div class="col-lg-8"><p><?php echo $dataUmum[0]->namaCustomer?></p></div>
                                    <div class="col-lg-4"><label>Telepon</label></div><div class="col-lg-8"><p><?php echo $dataUmum[0]->nomorTelepon?></p></div>
                                </div>
                                <div class="col-lg-12">
                                    <hr>
                                </div>
                            </dir>
                            <dir class="row">
                                <div class="col-lg-12">
                                    <h3>Riwayat Produksi</h3>
                                    <hr>
                                </div>
                            </dir>
                            <dir class="row">
                                <div class="col-lg-6">
                                    <p class="text-center"><em>Riwayat Administrasi</em></p>
                                    <div class="hr-line-dashed"></div>
                                    <?php if(count($dataAdministrasi) > 0) {?>
                                        <?php if($dataAdministrasi[0]->tanggalApprovalDesain!=0){?>
                                            <?php 
                                              $a=2;
                                              $dsn = new DateTime($dataAdministrasi[0]->tanggalApprovalDesain);
                                              $dsn->modify('+'.$a.' day');
                                              $tgldsn = $dsn->format("Y-M-d");
                                            ?>
                                            <div class="col-lg-4"><label>Persetujuan Desain</label></div><div class="col-lg-5"><p><?php echo $tgldsn?></p></div><div class="col-lg-3"><p>Done</p></div>
                                        <?php } ?>
                                        <?php if($dataAdministrasi[0]->tanggalApprovalBOM!=0){?>
                                            <?php 
                                              $a=2;
                                              $bom = new DateTime($dataAdministrasi[0]->tanggalApprovalBOM);
                                              $bom->modify('+'.$a.' day');
                                              $tglbom = $bom->format("Y-M-d");
                                            ?>
                                            <div class="col-lg-4"><label>Persetujuan BOM</label></div><div class="col-lg-5"><p><?php echo $tglbom?></p></div><div class="col-lg-3"><p>Done</p></div>
                                        <?php } ?>
                                        <?php if($dataAdministrasi[0]->tanggalApprovalJadwal!=0){?>
                                            <?php 
                                              $a=2;
                                              $jdw = new DateTime($dataAdministrasi[0]->tanggalApprovalJadwal);
                                              $jdw->modify('+'.$a.' day');
                                              $tgljdw = $jdw->format("Y-M-d");
                                            ?>
                                            <div class="col-lg-4"><label>Persetujuan Jadwal</label></div><div class="col-lg-5"><p><?php echo $tgljdw?></p></div><div class="col-lg-3"><p>Done</p></div>
                                        <?php } ?>
                                        <?php if($dataAdministrasi[0]->tanggalApprovalPersetujuan!=0){?>
                                            <?php 
                                              $a=2;
                                              $pst = new DateTime($dataAdministrasi[0]->tanggalApprovalPersetujuan);
                                              $pst->modify('+'.$a.' day');
                                              $tglpst = $pst->format("Y-M-d");
                                            ?>
                                            <div class="col-lg-4"><label>Persetujuan Final</label></div><div class="col-lg-5"><p><?php echo $tglpst?></p></div><div class="col-lg-3"><p>Done</p></div>
                                        <?php } ?>
                                    <?php } else {?>
                                        <p>Tidak ada data administrasi</p>
                                    <?php } ?>
                                    <p class="text-center"><em>Riwayat Produksi</em></p>
                                    <div class="hr-line-dashed"></div>
                                    <?php if(count($dataPO) > 0) {?>
                                        <?php for ($i=0; $i < count($dataPO); $i++) {?>
                                            <div <?php $c=count($dataPO); if($i==$c-1) {?> style="color: green;" <?php } ?>>
                                            <div class="col-lg-4"><label><?php echo $dataPO[$i]->namaAktivitas?></label></div>
                                            <?php if($dataPO[$i]->RealisasiEndDate == NULL ){ ?> 
                                                <?php 
                                                  $a=2;
                                                  $tgl = new DateTime($dataPO[$i]->RealisasiEndDate);
                                                  $tgl->modify('+'.$a.' day');
                                                  $tgljd = $tgl->format("Y-M-d");
                                                ?>
                                                <div class="col-lg-5"><p><?php echo $tgljd?></p></div>
                                            <?php } else { ?>
                                                <?php 
                                                  $a=2;
                                                  $tgl = new DateTime($dataPO[$i]->RealisasiStartDate);
                                                  $tgl->modify('+'.$a.' day');
                                                  $tgljd = $tgl->format("Y-M-d");
                                                ?>
                                                <div class="col-lg-5"><p><?php echo $tgljd?></p></div>
                                            <?php } ?>
                                            
                                            <div class="col-lg-3"><p><?php if ($dataPO[$i]->statusWork == "Done"){ echo "Done";} else { echo "On Progress";}?></p></div>
                                            </div>
                                        <?php } ?>
                                    <?php } else {?>
                                        <p>PO belum diproduksi</p>
                                    <?php } ?>
                                </div>
                                <?php if(count($dataPO)==NULL){?>
                                <div class="col-lg-6">
                                    <p class="text-center"><em>Status PO</em></p>
                                    <div class="widget style1 yellow-bg">
                                        <div class="row vertical-align">
                                            <div class="col-xs-12 text-center">
                                                <h2 class="font-bold">On Progress</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } else { ?>
                                    <?php $d=count($dataPO); $e=$d-1; if($dataPO[$e]->statusWork == "Done") {?>
                                    <div class="col-lg-6">
                                        <p class="text-center"><em>Status PO</em></p>
                                        <div class="widget style1 yellow-bg">
                                            <div class="row vertical-align">
                                                <div class="col-xs-12 text-center">
                                                    <h2 class="font-bold">On Progress</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    <div class="col-lg-6">
                                        <p class="text-center"><em>Status PO</em></p>
                                        <div class="widget style1 navy-bg">
                                            <div class="row vertical-align">
                                                <div class="col-xs-12 text-center">
                                                    <h2 class="font-bold">Selesai</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <?php } ?>
                                <div class="col-lg-12">
                                    <hr>
                                </div>
                            </dir>
                            <!-- End -->
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

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
</body>

</html>
