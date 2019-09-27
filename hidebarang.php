<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
   
<?php
if (isset($_POST['simpan'])) {
    $jml_form=$_POST['jml'];
    $nama = $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $kelamin= $_POST['jk'];
    $tgl_pem = $_POST['tgl']; 
      }  
?>    
<div class = "container">
  <div class = "col-md-12" style="background-white">
  <center>
   <center><h2>Detail Pembelian Buku</h2></center>
   </center>
   <div class = "table">
   <tr>
   <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Pembelian</th>
            <th>Jumlah Barang</th>
    <th></th>
    </tr>
    <tr>
        <td><?php echo $nama ?></td>
        <td><?php echo $alamat ?></td>
        <td><?php echo $jk ?></td>
        <td><?php echo $tgl_pem ?></td>
        <td><?php echo $jml ?></td>
    </tr>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Kode Barang</th>
        <th>jenis barang</th>
        <th>harga buku</th>
        <th>jumlah</th>
        </tr> 
        <?php foreach ($jdl as $key => $value) {
            ?>
            <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $namabarang [$key]; ?></td>
            <td><?php echo $kodebarang[$key]; ?></td>
            <td><?php echo $jenisbarang [$key]; ?></td>
            <td><?php echo $harga [$key]; ?></td>
            </tr>
        
        </table>
        <?php } ?>

          <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>    