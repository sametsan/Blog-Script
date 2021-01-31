<?

$db->sorgu("SELECT * FROM kayitlar WHERE tip='hal' ORDER BY RAND() LIMIT 1");
$f=$db->nesne();


echo "<div class=baslik>
<div class=baslik-orta>
<div class=baslik-logo>
</div>
<div class=baslik-lisan><p>
".nl2br(ucwords($f->aciklama))."</p>
</div>
</div>
</div>
";
?>