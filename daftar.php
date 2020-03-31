<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:Login_Sukses.php'); }
?>

<!DOCTYPE html>
<html>
<style>
body{
	font-family: sans-serif;
	background: url('wallpaper.jpg');
	background-size: 100% 100%;
	background-attachment: fixed;}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 7px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.tanya{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

</style>
<body>
<div class="kotak_login">
<p class="tulisan_login">Register</p>
 
<form action="prosesdaftar.php" method="post">
<label>Username:</label>
<input type="text" name="username" class="form_login" placeholder="Username...">

<label>Password:</label>
<input type="password" name="password" class="form_login" placeholder="Password...">
<br/>
<br/>
<br/> 
<input type="submit" class="tombol_login" value="Daftar">
<br/>
<br/>
<br/>
<center>
   <p class="tanya">Sudah Punya Akun?</p>
   <a class="link" href="login.php">Login</a>
</center>
</form>   
</div>
</body>
</html>
