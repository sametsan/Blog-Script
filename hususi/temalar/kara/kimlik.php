<?


include dirname(__FILE__)."/yetki.php";

$db->sorgu("SELECT * FROM uyeler WHERE no='$session->uye_no'");
$uye=$db->nesne();

tema_tablo_ac("Kimlik");

echo "
<form action=islem.php?islem=kimlik method=post>
<table border=0>
<tr>
<td>Kullanıcı Adı* : </td><td><input type=text name=kullanici value='$uye->kullanici'></td>
</tr>
<tr>
<td>Parola* : </td><td><input type=password name=parola></td>
</tr>
<tr>
<td>Parola Tekrar* : </td><td><input type=password name=parola_tekrar></td>
</tr>
<tr>
<td>e-posta : </td><td><input type=text name=eposta value='$uye->eposta'></td>
</tr>
<tr>
<td>Web Site : </td><td><input type=text name=website value='$uye->site'></td>
</tr>
<tr>
<td> </td><td><input type=submit value=Kaydet></td>
</tr>
</table>
</form>
";


tema_tablo_kapat();


?> 
