<?php

include ("ayarlar.php");
session_start();

if($kullaniciadi=$_POST['kullaniciadi']) 
{
	
	$_SESSION['giris']=true;
	$_SESSION['KULLANICIADI']=$kullaniciadi;
	
	header("location: yonetim.php");
}
else{
	echo"Kullanıcı adı veya şifre hatalı.<br>";
	echo "<a href=uyegirisi.php> Geri Dön </a>";
}

?>