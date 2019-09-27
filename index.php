<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam</a>
        <a href="login.php">logout</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pembelian Barang</div>
                        <div class="card-body">
                <!--isi disini-->
                <form action="belibarang.php" method="post">
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                     <textarea name="alamat" class="form-control" rows="5">
                </textarea>
                </div>
                <div class="form-group">
                <label for="">Jenis Kelamin</label><br>
                    <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki </label>
                    <input type="radio" name="jeniskelamin" value="perempuan">Perempuan </label>
                    </div>
                <div class="form-group">
                <label for="">Tanggal Pembelian</label>
                <input type="date" name="tgl" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Jumlah barang</label>
                <input type="number" name="jml" class="form-control">
                </div>
                
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary">Proses</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; 2019 SMK Assalaam</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>

</html>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        font-family: 'Chilanka',
        cursive;
    </style>
    <title>Yusup Shopping</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="utslogin.php">Yusup Supratman</a>
        <a class="navbar-brand" href="utslogin.php" >Home</a>
        <a class="navbar-brand" href="utslogin.php" >logout</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <center>
        <h2>Detail Pembelian</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Invoice Pembayaran</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['simpan'])) {
                            /* Data 1 */
                            $jml_form = $_POST['jml'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $Kelamin = $_POST['jeniskelamin'];
                            $tgl_pem = $_POST['tgl'];
                            /* Data 2 */
                            $namabarang = $_POST['nama'];
                            $kodebarang = $_POST['kodebarang'];
                            $jenisbarang = $_POST['jenisbarang'];
                            $hargabarang = $_POST['hargabarang'];
                            $jml_pem = $_POST['jml'];
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah Barang Yang Di Beli</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $Kelamin ?></td>
                                    <td><?php echo $jml_form?></td>
                                    <td colspan="3"><?php $originalDate = $tgl_pem;
                                                    echo $newDate = date("d M Y", strtotime($originalDate)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Daftar Barang Yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Satuan(Rp)</th>
                                    <th>Jumlah</th>
                                    
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kodebarang as $a => $b) { ?>
                                    <tr>
                                        <td><?php echo $namabarang[$a]; ?></td>
                                        <td><?php echo $kodebarang[$a]; ?></td>
                                        <td><?php echo $jenisbarang[$a];
                                             ?></td>
                                        <td><?php echo $jenisbarang[$a]; ?></td>
                                        <td><?php echo $hargabarang[$a]; ?></td>
                                        <td><?php echo number_format($hargabarang[$a], 2, ',', '.') ?></td>
                                        <?php $sub_total = $hargabarang[$a]* $jenisbarang[$a]; ?>
                                    </tr>
                                <?php
                                }
                                if ($sub_total >= 150000) {
                                    $diskon = $sub_total*0.5/100;
                                    /* var_dump($diskon); */
                                    $desc = 5;
                                } else if ($sub_total >=250000) {
                                    $diskon = $sub_total*0.10/100;
                                    $desc = 10;
                                    /* var_dump($diskon); */
                                }else if ($sub_total >= 500000) {
                                    $diskon = $sub_total * 0.20/100;
                                    $desc = 20;
                                    /* var_dump($diskon); */
                                }else {
                                    $diskon = 0;
                                    $desc = 0;
                                    /* var_dump($diskon); */
                                }
                                $total = $sub_total - $diskon;
                                ?>
                                <tr>
                                    <td colspan="6" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($sub_total, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo "$desc%"; ?>)</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($diskon, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                <form action="utspro4.php" method="post">
                                <tr>
                                    <td colspan="6" align="center"><b>Pembayaran</b></td>
                                </tr>
                                <td><center><div class="form-group">
                                <label >Masukan Jumlah Uang Anda</label>
                                <input type="number" class="form-control" name="uang" required>
                            </div></center></td>
                                <tr></tr>
                                <td><button type="submit" name="bayar" class="btn btn-outline-primary">Bayar</button></></td>
                                </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>
