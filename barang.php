<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>barang!</title>
  </head>
  <body>
  <center><h2>Silahkan Isi Data Pembeli</h2></center>
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
                    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki </label>
                    <input type="radio" name="jk" value="perempuan">Perempuan </label>
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
         

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>