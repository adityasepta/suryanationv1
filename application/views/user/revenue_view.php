<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Pendapatan</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

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
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        </nav>
        </div>
            <div class="wrapper wrapper-content">
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Rekap Pendapatan</h5>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>

                                    <th>No Faktur</th>
                                    <th data-hide="phone">Pelanggan</th>
                                    <th data-hide="phone">Produk</th>
                                    <th data-hide="phone">Total</th>
                                    <th data-hide="phone">Tanggal Pesan</th>
                                    <th data-hide="phone" >Tanggal Diterima</th>
                                    <th data-hide="phone">Kategori</th>
                                    <th class="text-right">Aksi</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                       3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-warning">Service</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Massal</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        Product example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Custom</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Lihat</button>
                                            
                                            <button class="btn-white btn btn-xs">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="8">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> Surya Sumatra &copy; <?php echo date('Y')?>
            </div>
        </div>
        </div>
    </div>

   <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url()?>assets/js/plugins/footable/footable.all.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
</body>
</html>
