<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | Top Navigation</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="<?php echo base_url('assets4/bootstrap/css/bootstrap.min.css') ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url('assets4/dist/css/AdminLTE.min.css') ?>">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo base_url('assets4/dist/css/skins/_all-skins.min.css') ?>">
   </head>
   <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
   <body class="hold-transition skin-red layout-top-nav">
      <div class="wrapper">
         <header class="main-header">
            <nav class="navbar navbar-static-top">
               <div class="container">
                  <div class="navbar-header">
                     <a href="../../index2.html" class="navbar-brand"><b>Wahana </b>Tani</a>
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                     <i class="fa fa-bars"></i>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk &nbsp<span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Pestisida</a></li>
                              <li><a href="#">Insektisida</a></li>
                              <li><a href="#">Herbisida</a></li>
                              <li><a href="#">Fungisida</a></li>
                              <li><a href="#">Molusksida</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Multivitamin</a></li>
                              <li><a href="#">Pupuk Urea</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Alat Pertanian</a></li>
                              <li><a href="#">Alat Perkebunan</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Lain-Lain</a></li>
                           </ul>
                        </li>
                        <li><a href="#">Kontak</a></li>
                     </ul>
                     <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                           <input type="text" class="form-control" id="navbar-search-input" placeholder="Pencarian">
                        </div>
                     </form>
                  </div>
                  <!-- /.navbar-collapse -->
                  <!-- Navbar Right Menu -->
                  <!-- /.navbar-custom-menu -->
               </div>
               <!-- /.container-fluid -->
            </nav>
         </header>
         <!-- Full Width Column -->
         <div class="content-wrapper">
            <div class="container">
               
               <!-- Main content -->
               <section class="content">
               
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="box box-solid">
                           <div class="box-body">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="row">
                                       <div class="col-lg-5">
                                          <div class="row">
                                             <div class="col-xs-5 text-center">
                                                <h5>JUMLAH PRODUK/HLM</h5>
                                             </div>
                                             <div class="col-xs-7">
                                                <select class="form-control input-sm">
                                                  <option>6</option>
                                                  <option>12</option>
                                                  <option>48</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-5">
                                          <div class="row">
                                             <div class="col-xs-5 text-center">
                                                <h5>URUT BERDASARKAN</h5>
                                             </div>
                                             <div class="col-xs-7">
                                                <select class="form-control input-sm">
                                                  <option>Nama Produk (A-Z)</option>
                                                  <option>Nama Produk (Z-A)</option>
                                                  <option>Harga Terendah</option>
                                                  <option>Harga Tertinggi</option>
                                                  <option>Rating Terendah</option>
                                                  <option>Rating Tertinggi</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-lg-2">
                                          <button class="btn btn-sm btn-flat bg-olive btn-block">REFRESH</button>
                                       </div>

                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="row">

                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/biofast.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">Biofast</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-olive btn-sm btn-flat">ADA&nbsp&nbsp <span class="fa fa-check"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 65.000</b></h4>
                              <hr>
                              <span class="text-muted">Biofast merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Fungisida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/agrotech.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">Agrotech</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-red btn-sm btn-flat">HABIS&nbsp&nbsp <span class="fa fa-close"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 43.000</b></h4>
                              <hr>
                              <span class="text-muted">Agrotech merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Molusksida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/npro.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">N-pro</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-olive btn-sm btn-flat">ADA&nbsp&nbsp <span class="fa fa-check"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 26.000</b></h4>
                              <hr>
                              <span class="text-muted">N-pro merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Molusksida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/trivia.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">Trivia</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-olive btn-sm btn-flat">ADA&nbsp&nbsp <span class="fa fa-check"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 90.000</b></h4>
                              <hr>
                              <span class="text-muted">Trivia merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Pestisida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/sangkur.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">Sangkur</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-olive btn-sm btn-flat">ADA&nbsp&nbsp <span class="fa fa-check"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 50.000</b></h4>
                              <hr>
                              <span class="text-muted">Sangkur merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Pestisida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star-o text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="box box-solid">
                           <!-- /.box-header -->
                           <div class="box-body">
                              <img src="<?php echo base_url('foto/snaildown.jpg');?>" class="img-responsive">
                              <div class="row">
                                 <div class="col-xs-8">
                                    <h3><a href="">Snaildown</a></h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <h3><button class="btn bg-olive btn-sm btn-flat">ADA&nbsp&nbsp <span class="fa fa-check"></span></button></h3>
                                 </div>
                              </div>
                              <h4 class="text-danger"><b>Rp 300.000</b></h4>
                              <hr>
                              <span class="text-muted">Snaildown merupakan salah satu insektisida nonkimia yang dapat efektif membunuh jangkrik</span>
                              <br><br>
                              <div class="row">
                                 <div class="col-xs-8">
                                    <main><b>Kategori : </b><em>Pestisida</em></main>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <small>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    <span class="fa fa-star text-yellow"></span>
                                    </small>
                                 </div>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-12 ">
                        <a href="<?php echo base_url('katalog')?>" class="btn btn-flat btn-danger"><span class="fa fa-arrow-left"></span>&nbsp&nbsp&nbsp Kembali</a>
                     </div>
                  </div>
                  <!-- /.box -->
               </section>
               <!-- /.content -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="container">
               <div class="pull-right hidden-xs">
                  <b>Version</b> 2.3.6
               </div>
               <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
               reserved.
            </div>
            <!-- /.container -->
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 2.2.3 -->
      <script src="<?php echo base_url('assets4/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="<?php echo base_url('assets4/bootstrap/js/bootstrap.min.js') ?>"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url('assets4/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url('assets4/plugins/fastclick/fastclick.js') ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url('assets4/dist/js/app.min.js') ?>"></script>
      <!-- AdminLTE for demo purposes -->
   </body>
</html>