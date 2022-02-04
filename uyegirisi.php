<html> 

<head> <title> Üye Girişi </title> </head> 

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

<form action="denetim.php" method="post">
<table border="1" align="center" valign="middle"> 

<p> <center> ÜYE GİRİŞİ FORMU  </center> </p> <br> 

<tr> 
<td> Kullanıcı Adı: </td>
<td> <input type="text" name="kullaniciadi"> </td> 
</tr> 

<tr>
<td> Şifre: </td> 
<td> <input type="password" name="sifre"> </td> 
</tr> 

<tr> 
<td> </td> 
<td> <input type="submit" name="giris" value="Giriş"> </td> 
</tr> 

</table> 
</form> 
<br> <br> <br> <br> 

<footer>
<center> 
 <img src="https://pbs.twimg.com/profile_images/981835969090457600/Zc7Aw6Fr_400x400.jpg" width="250" height="150"> 
</center> 
</footer>

<?php
header("Location: uyekayit.php");
die("Üye Girişi sayfasına yönlendirilecektir.");
?>

</body> 
</html>