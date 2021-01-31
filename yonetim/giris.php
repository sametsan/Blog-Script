<?
require_once "bas.php";

echo "<center><br><br><br><br><br><br><br>";
echo "
<div class=tablo style=\"width:350;\">
<div class=tablo-baslik>Giriş</div>
<div class=tablo-orta>
<form action=gir.php method=post>";
switch($get->uyari)
{
case 1:echo "Boşlukları doldurun.";break;
case 2:echo "Kullanıcı adı  yanlış.";break;
case 3:echo "Şifre yanlış.";break;
}
echo "<table>
<tr><td>Kullanıcı Adı : </td><td><input type=text name=kad></td></tr>
<tr><td>Şifre : </td><td><input type=password name=parola></td></tr>
<tr><td></td><td><input type=submit value='Gir'></td></tr>
</table>
</form>

</div>
".TEMIZLE."
</div>
";

?> 
