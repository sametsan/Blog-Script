<?

tema_tablo_ac("Kayıt Ol");

echo "
<form action=islem.php?islem=kayit_ol method=post>
<table border=0>
<tr>
<td>Kullanıcı Adı* : </td><td><input type=text name=kullanici value='$session->kullanici'></td>
</tr>
<tr>
<td>Parola* : </td><td><input type=password name=parola></td>
</tr>
<tr>
<td>Parola Tekrar* : </td><td><input type=password name=parola_tekrar></td>
</tr>
<tr>
<td>e-posta : </td><td><input type=text name=eposta value='$session->eposta'></td>
</tr>
<tr>
<td>Web Site : </td><td><input type=text name=website value='$session->website'></td>
</tr>
<tr>
<td> </td><td><input type=submit value=Kaydet></td>
</tr>
</table>
</form>
";


tema_tablo_kapat();


?> 
