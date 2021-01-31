<?

if($session->uye_giris==TRUE)
{
$s=uye($session->uye_no);
tema_eklenti_ac($s->kullanici);
echo "<ul>";
if(yonetim())
echo "<li><a  href=yonetim/>Yönetim</a></li>";
echo "<li ><a href=?s=kayitlar&tip=yorumladiklarim>Yorumladıklarım</a></li>";
echo "<li><a href=?s=kayitlar&tip=begendiklerim>Beğendiklerim</a></li>";
echo "<li><a href=?s=posta>Posta</a></li>";
echo "<li><a href=?s=kimlik>Kimlik</a></li>";
echo "<li><a href=islem.php?islem=cikis>Çıkış</a></li>";
echo "</ul>";
tema_eklenti_kapat();
}
else
{
tema_eklenti_ac("Giriş");

echo "<form action=islem.php?islem=giris method='post'>";
echo "
<table><tr><td colspan=2>
<input type=text name=kullanici class=girdi id=kullanici onblur=\"if(this.value=='') this.value='Kullanıcı adı'\" onfocus=\"if(this.value=='Kullanıcı adı') this.value=''\" value='Kullanıcı adı'>
</td></tr><tr><td colspan=2>
<input type=password name=parola  class=girdi id=parola onblur=\"this.value='Parola'\" onfocus=\"this.value=''\" value='Parola'>
</td></tr><tr><td>
<input class=dugme type=submit value='Giriş' >
</td><td style=\"text-align:right;\">
<a href=?s=kayit_ol >Kayıt Ol</a>
</td></tr></table>

";



echo "</form>";
tema_eklenti_kapat();
}


?> 
