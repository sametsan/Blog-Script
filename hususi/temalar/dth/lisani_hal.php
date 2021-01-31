<?
echo "<div class=tablo>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='hal' ORDER BY RAND() LIMIT 1");
$f=$db->nesne();

echo "<img src=".dosya_url_dizin(__FILE__)."/resim/lisani_hal.png align=left>";
print nl2br($f->aciklama);
echo "</div>";
?>