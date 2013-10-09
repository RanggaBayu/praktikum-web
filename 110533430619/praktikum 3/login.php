<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>hasil Login</title>
</head>

<body>
<?php
$user = 'rangga';	//definisi user = rangga
$password = 'mimin';	//definisi password = mimin
$us = $_REQUEST['user'];	//masukan us dari user
$pass = $_REQUEST['password'];		//masukan pass dari password
if(is_string($us) && is_string($pass)){
if($us == $user && $pass == $password){		//mencocokkan nilai yang diinput dengan nilai yang ditentukan
echo '<h1>Selamat Datang</h1><br/><h1>Login Sukses '.$us;	//pemberitahuan apabila login berhasil
}
else
{
echo '<h1>Gagal Login</h1><br/><h1>Username atau Passwordd salah</h1>';		//pemberitahuan apabila login gagal
}
}
else
{
echo '<h1>Username dan Password Tidak Boleh Angka</h1>';	//warning inputan tidak boleh angka
}
?>
</body>
</html>