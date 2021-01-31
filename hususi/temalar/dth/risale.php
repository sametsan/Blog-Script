<?
echo "<div class=tablo>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='risale' ORDER BY RAND() LIMIT 1");
$f=$db->nesne();
echo "<img src=".dosya_url_dizin(__FILE__)."/resim/risale.png align=left>";

echo "$f->aciklama<br>";
echo "($f->kaynak)";
echo "</div>";
?> 
