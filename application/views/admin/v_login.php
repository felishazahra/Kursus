<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<body>

	<style type="text/css" >

body{
	font-family: sans-serif;
	background: #C0C0C0;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;\
	/*meletakkan form ke tengah*/
	text-align: center;
	margin: 200px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #000000;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
	</style>
</head>
<body>

<div class="kotak_login">
		<p class="tulisan_login">Login</p>
 
		<form method="post" action="<?php echo base_url('login/login_aksi');?>">
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/Kursus/home">kembali</a>
			</center>
		</form>
		
	</div>

</body>
</html>