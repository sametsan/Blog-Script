<?

tema_eklenti_ac("Kategoriler");

$db->sorgu("SELECT * FROM kayitlar WHERE tip='kategori'");
while($s=$db->nesne())
{
echo "
<div class=tablo-liste >
<li><a  href='kategori-$s->no'>$s->baslik</a></li>
".TEMIZLE."
</div>";
}

tema_eklenti_kapat();


?>