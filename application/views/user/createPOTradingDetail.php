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
                    <h2>Buat PO Trading</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/purchaseOrder">Purchase Order Trading</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Purchase Order</strong>
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
                            <h5>Buat PO Trading <small>Isi semua data yang dibutuhkan.</small></h5>
                        </div>
                        <div class="ibox-content form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nomor PO</label><br>
                                                <input type="text" placeholder="Nomor PO" name="nomorPO" class="form-control" value="<?php echo $PO[0]->nomorPO ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Konsumen</label>
                                                    <input type="text" placeholder="Nama Konsumen" name="namaCustomer" class="form-control" value="<?php echo $PO[0]->namaCustomer ?>"  readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                                    <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo $PO[0]->nomorTelepon; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Sales Person</label>
                                                <input type="text" placeholder="Nomor Telepon" name="nomorTelepon" class="form-control" value="<?php echo $PO[0]->nama; ?>" readonly>
                                            </div>
                                            <div class="col-md-8">
                                                <label>Tanggal Terima</label>
                                                <input type="text" placeholder="Tanggal Terima" name="tanggalMasuk" class="form-control" value="<?php
                                                $tglmsk = new DateTime($PO[0]->tanggalMasuk);
                                                $tglmsk = $tglmsk->format("d-M-Y"); 
                                                echo $tglmsk; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <a class="btn btn-success btn-md" data-toggle="modal" data-target="#tambahProduk">Tambah Produk</a>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th data-hide="phone,tablet">No</th>
                                    <th>Nama Barang</th>
                                    <th>Qty</th>
                                    <th>Satuan</th>
                                    <th>Harga Satuan</th>
                                    <th>Sub Total</th>
                                    <th class="text-center" data-hide="phone,tablet"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $ijk=1; $jumlah=0; for ($ij=0; $ij < count($detailPO) ; $ij++) { 
                                        $jumlah = $jumlah + (float)$detailPO[$ij]->harga*(float)$detailPO[$ij]->jumlah;
                                    ?>
                                <tr>
                                    <td><?php echo $ij+1?></td>
                                    <td><?php echo $detailPO[$ij]->namaProduk?></td>
                                    <td><?php echo $detailPO[$ij]->jumlah?></td>
                                    <td><?php echo $detailPO[$ij]->satuan?></td>
                                    <td>Rp. <?php echo number_format($detailPO[$ij]->harga,2,".","."); ?></td>
                                    <td>Rp. <?php echo number_format($detailPO[$ij]->jumlah*$detailPO[$ij]->harga,2,".","."); ?></td>
                                    
                                    <td class="text-center">
                                        <?=anchor('user/hapusCart/' . $detailPO[$ij]->idDetailPO, 'Delete', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button',
                                          'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])?>
                                    </td>
                                </tr>
                                <?php $ijk++; } ?>
                                <tr>
                                    <td colspan="5" class="text-center"><b>Total</b></td>
                                    <td colspan="2"><b>Rp. <?php echo number_format($jumlah,2,".","."); ?></b></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <a class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#checkout">Checkout</a>
                                    </div>
                                </div>
                                <div class="modal inmodal fade" id="tambahProduk" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">Pilih Produk</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php echo form_open_multipart('user/tambahCart/'.$PO[0]->idPO,'class="form-horizontal"')?>
                                                        <h3 class="m-t-none m-b">Pilih Salah Satu Produk</h3>
                                                        <div id="produk" class="selectpicker" data-live="true">
                                                            <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                                                <span class="placeholder">Pilih Produk</span>
                                                                <span class="caret"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                                                    <label class="sr-only" for="input-bts-ex-4">Search in the list</label>
                                                                    <div class="search-box">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="search-icon3">
                                                                                <span class="fa fa-search"></span>
                                                                                <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                                            </span>
                                                                            <input type="text" placeholder="Search in the list" id="input-bts-ex-4" class="form-control live-search" aria-describedby="search-icon3" tabindex="1" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-to-filter">
                                                                        <ul class="list-unstyled">
                                                                            <?php for ($i=0; $i < count($listProduk) ; $i++) { ?>
                                                                                <li class="filter-item items" data-filter="<?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->namaProduk;echo " - "; echo $listProduk[$i]->jenisProduk;?>" data-value="<?php echo $listProduk[$i]->idProduk?>"><?php echo $listProduk[$i]->kodeProduk; echo " - "; echo $listProduk[$i]->namaProduk; echo " - "; echo $listProduk[$i]->jenisProduk;?></li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                        <div class="no-search-results">
                                                                            <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label >Qty</label><br>
                                                                    <input type="number" step="any" name="jumlah" class="form-control">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="produk" id="pilihProduk" value="0" required="">
                                                            <input type="hidden" name="harga" required="">
                                                            

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="hr-line-dashed"></div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Pilih</strong></button>
                                                        </div>
                                                        <?php echo form_close()?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal inmodal fade" id="checkout" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title">CHECKOUT TRADING</h3><br>
                                                <span >NO PO : <b class="text-success"><?php echo $PO[0]->nomorPO ?></b> | TIPE : <b class="text-success"><?php echo $PO[0]->tipeOrder ?></b></span><br>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php echo form_open_multipart('user/selesaiChart','class="form-horizontal"')?>
                                                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                                            <thead>
                                                            <tr>
                                                                <th data-hide="phone,tablet">No</th>
                                                                <th>Nama Barang</th>
                                                                <th>Qty</th>
                                                                <th>Satuan</th>
                                                                <th>Harga Satuan</th>
                                                                <th>Sub Total</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $ijk=1; $jumlah=0; for ($ij=0; $ij < count($detailPO) ; $ij++) { 
                                                                    $jumlah = $jumlah + (float)$detailPO[$ij]->harga*(float)$detailPO[$ij]->jumlah;
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $ij+1?></td>
                                                                <td><?php echo $detailPO[$ij]->namaProduk?></td>
                                                                <td><?php echo $detailPO[$ij]->jumlah?></td>
                                                                <td><?php echo $detailPO[$ij]->satuan?></td>
                                                                <td>Rp. <?php echo number_format($detailPO[$ij]->harga,2,".","."); ?></td>
                                                                <td>Rp. <?php echo number_format($detailPO[$ij]->jumlah*$detailPO[$ij]->harga,2,".","."); ?></td>
                                                            </tr>
                                                            <?php $ijk++; } ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center"><b>Total</b></td>
                                                                <td colspan="2"><b>Rp. <?php echo number_format($jumlah,2,".","."); ?></b></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="6">
                                                                    <ul class="pagination pull-right"></ul>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                        <input type="hidden" name="totalHarga" value="<?php echo $jumlah?>" required="">
                                                        <input type="hidden" name="nomorPO" value="<?php echo $PO[0]->nomorPO?>" required="">
                                                        <div class="hr-line-dashed"></div>
                                                        <div>
                                                            <div class="col-md-12">
                                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" onclick="return confirm('Apakah anda yakin ?')"><strong>Selesai</strong></button>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close()?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
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

    <script src="<?php echo base_url();?>assets/js/tabcomplete.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/livefilter.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>


        <script> 
        $(document).ready(function() { 
            // On change of the dropdown do the ajax 
            $("#pilihProduk").change(function () {

                // $("[id='Emas Putih']").prop('checked',true;).iCheck('update'); 
                $.ajax({ 
                        // Change the link to the file you are using 
                        url: '<?php echo base_url();?>user/cariProduk2', 
                        type: 'post', 
                        // This just sends the value of the dropdown 
                        data: { kodeProduk: $(this).val() }, 
                        success: function(response) { 
                            console.log("success"); 
                            // Parse the jSON that is returned 
                            // Using conditions here would probably apply 
                            // incase nothing is returned 
                            var Vals = $.parseJSON(response); 
                            console.log(Vals); 
                            // var Vals    =   JSON.parse(response); 
                            // These are the inputs that will populate 
                            $("input[name='harga']").val(Vals[0].hargaJual);


                        } 
                }); 
            }); 
        });
    </script>
</body>

</html>
