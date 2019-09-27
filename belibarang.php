
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BELI BARANG</title>
</head>
<body>

<?php
if (isset($_POST['simpan'])) {
    $jml_form=$_POST['jml'];
    $nama = $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $kelamin= $_POST['jeniskelamin'];
    $tgl_pem = $_POST['tgl']; 
        
?>    
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">isi</div>
                        <div class="card-body">
    
    <form action="prosesbarang.php" method="post">
   <?php for ($a=1; $a <= $jml_form; $a++) {?>
    <div class="form-group">
        <label for="">Nama barang</label>
        <input type="text" name="namabarang[]" class="form-control" required><br><br>
    </div>

    <div class="form-group">
        <label for="">Kode barang</label>
        <input type="text" min="1" name="kodebarang[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
    <label for="">jenis barang</label>
    <select name="jenisbarang[]" class="form-control">
        <option value="makanan">makanan</option>
        <option value="minuman ">minuman</option>
       
        <option value="Action">Action</option></select><br><br>
    </div>
    
    <div class="form-group">
    <label for="">Harga barang</label>
    <input type="number" min="1" name="hargabarang[]" class="form-control">
    </div>
    <br><br>
    __________________________________________________________________________________________________________________________________________________________
      

    <?php }
    ?>
    <input type="hidden" name="nama" value="<?php echo $nama ?>">
    <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
    <input type="hidden" name="jeniskelamin" value="<?php echo $kelamin ?>">
    <input type="hidden" name="tgl" value="<?php echo $tgl_pem ?>">
    <input type="hidden" name="jml" value="<?php echo $jml_form ?>">
    <input type="submit" name="simpan"  value="simpan">
    <hr>
    </form>
    </div>
    </div>
        </div>
            </div>
                </div>
                    </div>


                   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
    
        
        
</body>
</html>
    <?php } ?>