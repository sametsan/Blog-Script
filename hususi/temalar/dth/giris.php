<?

tema_eklenti_ac();

echo "<div class=giris>";
if($session->yazan!="")
$yazan=$session->yazan;
if($cookie->yazan!="")
$yazan=$cookie->yazan;

$session->yap("yazan",$yazan);

if(!trim($yazan)){
echo "
<form action=islem.php method=get >
Bir isim rica etsem!
<input type=hidden name=islem value=giris>
<input type=text name=ad id=ad value=\"$session->yazan\"><br>

<input type=submit value=Giriş>
<input type=button onclick=giris_iptal() value='IP Adresimi Kullan'>
</form>";
}else
echo "<a href=islem.php?islem=cikis>".$yazan."</a> siteme hoşgeldin.";

echo "</div>";
tema_eklenti_kapat();

?> 
