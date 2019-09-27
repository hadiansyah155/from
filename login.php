<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "hadiansyah" && $b == "123456") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='hal1.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>FROM LOGIM</title>
    <link rel="stylesheet" href="logincss.css" type="text/css">
</head>
<body>

<h2>FORM LOGIN</h2>

   <form action="index.php" method="post">
    <div class="imgcontainer">
    <img src="pt.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Masuk</button>
    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Lupa <a href="#">password?</a></span>
  </div>
</form>
      
<?php
}
?>
  

</body>
</html>
