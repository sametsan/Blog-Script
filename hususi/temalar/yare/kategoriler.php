<?

tema_eklenti_ac("Kategoriler");
echo "<ul>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='kategori'");
while($s=$db->nesne())
{
echo "<li><a  href='kategori-$s->no'>$s->baslik</a></li>";
}
echo "</ul>";
tema_eklenti_kapat();


?>