<?

tema_eklenti_ac("Köprü ");
echo "<ul>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='kopru'");
while($s=$db->nesne())
echo "<li><a target='_blank' href='$s->kaynak'>$s->baslik</a></li>";
echo "</ul>";
tema_eklenti_kapat();


?>