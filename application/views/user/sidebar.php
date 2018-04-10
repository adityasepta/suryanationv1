                <li>
                    <a href="<?php echo base_url();?>user"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li> 
                    <a href="#"><i class="fa fa-file"></i> <span class="nav-label">Master Data</span><span class="fa arrow"></span></a> 
                    <ul class="nav nav-second-level"> 
                        <li><a href="<?php echo base_url()?>user/akun">Akun</a></li>
                        <li><a href="<?php echo base_url();?>user/jabatan">Jabatan</a></li>
                        <li><a href="<?php echo base_url();?>user/pegawai">Pegawai</a></li> 
                        <li><a href="<?php echo base_url();?>user/pelanggan">Pelanggan</a></li>
                        <li><a href="<?php echo base_url();?>user/produk">Produk</a></li>
                        <li><a href="<?php echo base_url();?>user/material">Material Dasar</a></li>

                    </ul> 
                </li>
                <li> 
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Status Produksi</span><span class="fa arrow"></span></a> 
                    <ul class="nav nav-second-level"> 
                        <li><a href="<?php echo base_url();?>user/kanban">Kanban Tempahan</a></li>
                        <li><a href="<?php echo base_url();?>user/kanbanMassal">Kanban Massal</a></li> 
                        <li><a href="<?php echo base_url();?>user/kanbanPerak">Kanban Perak</a></li> 
                        <li><a href="<?php echo base_url();?>user/kanbanService">Kanban Service</a></li> 
                    </ul> 
                </li> 
                <li> 
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Administration</span><span class="fa arrow"></span></a> 
                    <ul class="nav nav-second-level"> 
                        <li><a href="<?php echo base_url();?>user/administration">Beranda</a></li> 
                        <li> 
                            <a href="#">Purchase Order <span class="fa arrow"></span></a> 
                            <ul class="nav nav-third-level"> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/purchaseOrder">PO Tempahan</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listPOMasal">PO Massal</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listPOPerak">PO Perak</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listPOService">PO Service</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listPOTrading">PO Trading</a> 
                                </li> 
                            </ul> 
                        </li> 
                        <li><a href="<?php echo base_url();?>user/trackPO">Track PO</a></li> 
                        <li> 
                            <a href="#">Surat Perintah Kerja <span class="fa arrow"></span></a> 
                            <ul class="nav nav-third-level"> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/spk">SPK Tempahan</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listSPKMasal">SPK Massal</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listSPKPerak">SPK Perak</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listSPKService">SPK Service</a> 
                                </li> 
                            </ul> 
                        </li> 
                        <li>
                            <a href="#">Invoice Customer <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level"> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listInvoiceTempahan">PO Tempahan</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/listInvoiceMassal">PO Massal</a> 
                                </li> 
                            </ul> 
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Inventory</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url();?>user/inventory">Beranda</a></li>
                        <!-- <li><a href="<?php echo base_url();?>user/listProdukJadi">Produk Jadi</a></li> -->
                        <li><a href="<?php echo base_url();?>user/stokBarang">Pergerakan Barang</a></li>
                        <li><a href="#">Rekap Order <span class="fa arrow"></span></a> 
                            <ul class="nav nav-third-level"> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/rekapBerat">Tempahan</a> 
                                </li> 
                                <li> 
                                    <a href="<?php echo base_url();?>user/rekapBeratMassal">Massal</a> 
                                </li> 
                            </ul> 
                        </li>
                        <li><a href="<?php echo base_url();?>user/rekapProduksi">Rekap Produksi Per Orang</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Penjualan</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url()?>user/sales">Beranda</a></li>
                        <li><a href="<?php echo base_url()?>user/salesresult">Penjualan</a></li>
                        <li><a href="<?php echo base_url()?>user/topproduct">Top Produk dan Pelanggan</a></li>
                        <!-- <li><a href="<?php echo base_url()?>sales/topcustomer">Top Pelanggan</a></li -->
                        <li><a href="<?php echo base_url()?>user/catalogue">Katalog Produk</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-money"></i> <span class="nav-label">Keuangan</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url()?>user/finance">Beranda</a></li>
                        <li><a href="<?php echo base_url()?>user/cashflow">Cashflow</a></li>
                        <li><a href="<?php echo base_url()?>user/jurnal">Jurnal</a></li>
                        <li><a href="<?php echo base_url()?>user/revenue">Pendapatan</a></li>
                        <li><a href="<?php echo base_url()?>user/cost">Pengeluaran</a></li>
                        <li><a href="<?php echo base_url()?>user/profit">Keuntungan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-info-circle"></i> <span class="nav-label">Services</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url()?>user/service">Beranda</a></li>
                        <li><a href="<?php echo base_url()?>user/survey">Survey</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#setting>"<i class="fa fa-cog"></i> <span class="nav-label">Pengaturan</span></a>

                    <div class="modal inmodal fade" id="detail" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h3 class="modal-title">Detail Proses Produksi</h3><br>


                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li >
                    <a href="<?php echo base_url();?>user/logout"><i class="fa fa-sign-out"></i> <span class="nav-label">logout</span></a>
                </li>
                <li style="background-color: rgb(1, 177, 209, 0.1); ">
                    <a href="<?php echo base_url();?>user/currency"> 
                        <span class="nav-label" style="color:rgb(209, 156, 0);">Harga Emas Hari Ini</span>
                        <h2 class="nav-label" style="margin-top: -0.5%;"><strong>Rp. <?php if($gold['currentCurrency']!=NULL){ echo number_format($gold['currentCurrency'],2);} else echo 0 ?></strong></h2>
                        <?php 
                          $tgl = new DateTime($gold['tanggal']);
                          $tglsk = $tgl->format("d F Y");
                        ?>
                        <p class="nav-label" style="margin-top: -5%;"><small><?php echo $tglsk ?></small></p>
                        <p class="nav-label" style="margin-top: -2%;"><?php if (date('d F Y', strtotime('now')) > date('d F Y', strtotime($gold['tanggal']))){ ?> <span class="label label-warning">Perlu Update Harga Emas</span> <?php } ?></p>
                    </a>
                </li>