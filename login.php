<html>
<head>
<title>Login Anggota</title>
<link rel="stylesheet" type="text/css" href="css/Login.css">
</head>
<body>
<form method="post" action="login_admin.php">

<div class="tampilan">
 <div class="kepala">
<div class="logo"></div>
<h2 class="judul">Login Admin</h2>
</div>
<div class="artikel">

<div class="kesalahan">
<?php
        if(isset($_GET["login_error"])){
            echo "Username atau password salah";
        }
    ?>
</div>

<div class="kotak">
<p><input type="text" name="username" value="" placeholder="Masukan Username Anda"></p>
<p><input type="password" name="password" value="" placeholder="Masukan Password Anda"></p>
<p class="submit"><input type="submit" name="commit" value="Login"></p>
</form>
</div>
</div>

 </div>
</div>
</body>
</html> 