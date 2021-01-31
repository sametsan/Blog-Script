<?
tema_eklenti_ac("Risale");
$db->sorgu("SELECT * FROM kayitlar WHERE tip='risale' ORDER BY RAND() LIMIT 1");
$f=$db->nesne();

echo "$f->aciklama<br>";
echo "($f->kaynak)";
tema_eklenti_kapat();
?> 
