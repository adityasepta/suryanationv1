<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Inventory</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- FooTable -->
    <link href="<?php echo base_url();?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">
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
            <!-- <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang Victoriavici.</span>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul> -->

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/inventory">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Rekap Berat Massal</strong>
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
                            <h5>Rekap Berat SPK Massal</h5>
                        </div>

                        <div class="ibox-content">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1-">Cor</a></li>
                                    <li><a data-toggle="tab" href="#tab-2-">Kecap</a></li>
                                    <li><a data-toggle="tab" href="#tab-3-">Gosok Pentol</a></li>
                                    <li><a data-toggle="tab" href="#tab-4-">Gosok</a></li>
                                    <li><a data-toggle="tab" href="#tab-5-">Boom</a></li>
                                    <li><a data-toggle="tab" href="#tab-6-">Pasang CZ</a></li>
                                    <li><a data-toggle="tab" href="#tab-7-">Polish</a></li>
                                    <li><a data-toggle="tab" href="#tab-8-">Sleb</a></li>
                                    <li><a data-toggle="tab" href="#tab-9-">Krum</a></li>
                                    <li><a data-toggle="tab" href="#tab-10-">Selesai</a></li>

                                </ul>
                            </div>
                                <div class="tab-content">
                                    <div id="tab-1-" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Cor') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Kecap') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Gosok Pentol') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Gosok') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-5-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Boom') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-6-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Pasang CZ') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-7-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Polish') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-8-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Sleb') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-9-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Krum') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-10-" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Nama Customer</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Kadar</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Berat Awal</th>
                                                        <th class="text-center">Berat Akhir</th>
                                                        <th class="text-center">Berat Kembali</th>
                                                        <th class="text-center">Susut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  foreach ($rekapBerat as $r) { 
                                                        if($r->namaAktivitas=='Selesai') {
                                                            for($i=0;$i<count($spk);$i++) {
                                                                if($r->idSPK==$spk[$i]->idSPK){
                                                    ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $spk[$i]->tanggalMasuk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaCustomer?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->namaProduk?></td>
                                                                <td class="text-center"><?php echo $spk[$i]->kadarBahan?> %</td>
                                                                <td class="text-center"><?php echo $spk[$i]->jumlah?></td>
                                                                <td class="text-center"><?php echo round($r->beratAwal,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->berat,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->kembali,2)?> gr</td>
                                                                <td class="text-center"><?php echo round($r->susut,2)?> gr</td>
                                                            </tr>
                                                    <?php }}}} ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
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

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
</body>

</html>
