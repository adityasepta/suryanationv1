<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Status Produksi</title>
    <?php include('header.php'); ?>

    <style type="text/css">
        .set-width {
            width: 100px;
        }

    </style>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div>
            <h1>Isikan Berat Masing Masing Produk</h1><br>
            <table class="table table-hover table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th class="set-width">Berat (gr) </th>
                        
                    </tr>
                </thead>
                <tbody>

                    <?php echo form_open('user/setBeratAnak')?>
                    <?php for ($i=0; $i < count($pro); ++$i) { ?>
                        <tr>
                            <td><h4><?php echo $i+1; ?></h4></td>
                            <td><h4><?php echo $pro[$i]->namaProduk; ?></h4></td>
                            <td><input type="number" required="" step="any" class="form-control set-width input-sm" name="berat[]"></td>
                            
                        </tr>

                        <input type="hidden" value="<?php echo $pro[$i]->idProdukChild; ?>" name="idProduk[]">
                    <?php } ?>
                    
                    <input type="hidden" value="<?php echo $idProProd; ?>" name="idProProd">
                     
                </tbody>
            </table>

            <div class="row">
                <div class="col-lg-3">
                    &nbsp
                </div>
                <div class="col-lg-3">
                    <a href="<?php echo base_url('user/kanbanmassal') ?>" class="btn btn-block btn-danger">Kembali</a>        
                </div>
                <div class="col-lg-3">
                    <button type="submit" class="btn-block btn btn-info">Simpan</button>         
                </div>
            </div>

            <?php echo form_close() ?>

            
            
            
            

            <br><br>

            <div class="row">
                <div class="col-lg-3">
                    <label>Nama Customer</label><br>
                    <h2><?php echo $pro[0]->namaCustomer; ?></h2>
                </div>
                <div class="col-lg-3">
                    <label>Kadar</label><br>
                    <h2><?php echo $pro[0]->kadarBahan; ?> %</h2>
                </div>
                <div class="col-lg-3">
                    <label>Tanggal Masuk</label><br>
                    <h2><?php echo $pro[0]->tanggal; ?></h2>
                </div>
                <div class="col-lg-3">
                    <label>Estimasi Selesai</label><br>
                    <h2><?php echo $pro[0]->tanggalSelesai; ?></h2>
                </div>
            </div>

       

        </div>
    </div>

    <!-- Mainly scripts -->
    <?php include('footer.php'); ?>

</body>

</html>
