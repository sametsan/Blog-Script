<?

if($session->uye_giris==TRUE)
{
$s=uye($session->uye_no);
tema_eklenti_ac($s->kullanici);
echo "Siteme hoşgeldin.Çıkış yapmak için <a href=islem.php?islem=cikis>buradan.</a>";
tema_eklenti_kapat();
}
else
{
tema_eklenti_ac("Giriş");
if($get->giris_uyari==1)
echo "Kullanıcı adı veya Parola yanlış.<br>";

echo "<form action=islem.php?islem=giris method=post>";
echo "
<label>
Kullanıcı Adı : 
<input type=text name=ad id=ad >
</label><br>
<label>
Parola : 
<input type=password name=parola id=parola >
</label>
<br>
<input type=image src=$tema/resim/giris.png >
";



echo "</form>";
tema_eklenti_kapat();
}


?> 
