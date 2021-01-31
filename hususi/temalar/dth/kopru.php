<?

tema_eklenti_ac("Köprü ");

$db->sorgu("SELECT * FROM kayitlar WHERE tip='kopru'");
while($s=$db->nesne())
{
echo "
<div class=tablo-liste >
<li><a target='_blank' href='$s->kaynak'>$s->baslik</a></li>
".TEMIZLE."
</div>";
}

tema_eklenti_kapat();


?>