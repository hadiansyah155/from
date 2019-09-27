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
    <title>Shopping</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="utslogin.php">Hadiansyah</a>
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
            $i=1;
            for ($key=0; $key <count($hargabarang); $key++) { 
                $sub_total=$sub_total+$hargabarang[$key];
          ?>

          <tr>
              <td align="center"><?php  echo "$i++"; ?></td>
                <td align="center"><?php  echo "$namabarang[$key]"; ?></td>
                <td align="center"><?php  echo "$kodebarang[$key]"; ?></td>
                <td align="center"><?php  echo "$jenisbarang[$key]"; ?></td>
                <td align="center"><?php  echo "$hargabarang[$key]"; ?></td>
          </tr>
          <?php
            } 
            if ($jml_form >=3) {
              
                $jum = $sub_total*5/100;
            }
            elseif ($jml_form    >=5) {
                 $diskon = "10%";
                $jum = $sub_total*10/100;
            }
            else {
                $diskon = "0%";
                $jum = 0;
            }
            $hasil = $sub_total-$jum;
           ?>
           <tr>
               <th align="center" rowspan="6">total pembayaran</th>
           </tr>
           <tr>
               <th align="left" colspan="3">sub total</th>
               <th align="center"><?php echo "Rp."."$sub_total"; ?></th>  
           </tr>
           <tr>
               <th align="left" colspan="3">diskon <?php echo "("."$diskon".")"; ?></th>
               <th><?php echo "Rp. $jum";  ?></th>
           </tr>
           <tr>
               <th colspan="3" align="left">total</th>
               <th><?php echo "Rp."."$hasil";  ?></th>
           </tr>
            <tr>
                                <form action="prosesbarang.php" method="post">
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