<html> 

<?php
$baglanti= mysqli_connect("localhost","root","","ogrencikayitdb");
mysqli_set_charset($baglanti,"utf-8");
?>

<head> <meta charset="utf-8" /> <title> Üye Kayıt Sayfası </title> </head> 

<body>

<header>
<center>
<img src="https://www.e-sehir.com/egitim/resimler/uni-logolar/istinye-universitesi.png" width="250" height="70" />

<p> <i> <h3>  MESLEK YÜKSEK OKULU  </h3> </i> </p>
<p><i><h5>    BİLGİSAYAR PROGRAMCILIĞI  </h5></i></p>

<a href=#anasayfa target="_self" > <u> Anasayfa </u></a>&nbsp;
<a href=#hakkımda> <u> Hakkımda </u></a>&nbsp;
<a href=#uyegirisi" target="_self" > <u> Üye Girişi </u></a>&nbsp;
<a href=#kayit> <u> Kayıt Ol </u></a>
</center>
<br> <br> <br> 
</header>
 
 
<form action="kaydet.php" method="post"/> 
<table border="1" align="center"> 

<tr> <td colspan="2" align="center"> <h5> <i> ÜYE KAYIT FORMU </i> </h5> </td> </tr> 

<tr> 
<td> Kullanıcı Adı: </td>
<td> <input type="text" name="kullaniciadi"> </td> 
</tr> 

<tr> 
<td> Şifre </td>
<td> <input type="password" name="sifre"> </td> 
</tr> 

<tr> 
<td> </td> 
<td> <input type="submit" name="kaydet" value="KAYDET"> </td>
</tr> 

</table>
</form> 
<br> <br> <br> <br> 

<footer>
<center> 
 <img src="https://pbs.twimg.com/profile_images/981835969090457600/Zc7Aw6Fr_400x400.jpg" width="250" height="150"> 
</center> 
</footer>

</body>
</html>