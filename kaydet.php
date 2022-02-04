<html> 

<head> 
<meta charset="utf-8"> 
</head> 

<body> 
<?php

$baglanti= mysqli_connect("localhost","root","","ogrencikayitdb");
mysqli_set_charset($baglanti,"utf-8");


$ad= $_POST["kullaniciadi"];
$soyad=$_POST["sifre"];

$sqlekle="insert into ogrbilgi(KULLANICIADI,SIFRE) values ('$ad','$soyad')";
$islem=mysqli_query($baglanti,$sqlekle);

if($islem==0){
	echo "<center> Bir hata oluştu, veriler gönderilemedi. </center>";
}

else{
	echo "<center> <img src='https://sanalajan.com/wp-content/uploads/2020/05/tik-isareti-nasil-yapilir.jpg' width='100' > </center>";
	echo "<center> Bilgiler Başarıyla Kaydedildi.</center>";

}


header("refresh:10","uyegiris.php");
die("Üye Girişi sayfasına yönlendirilecektir.");

?>

</body>
</html>