<?

$db->sorgu("SELECT * FROM kayitlar WHERE tip='hal' ORDER BY RAND() LIMIT 1");
$f=$db->nesne();


echo "<div class=baslik>
<div class=baslik-orta>
<div class=baslik-logo>
<img src=".dosya_url_dizin(__FILE__)."/resim/baslik.png>
</div>
<div class=baslik-lisan><p>
".nl2br(ucwords($f->aciklama))."</p>
</div>
</div>
</div>
";
?>