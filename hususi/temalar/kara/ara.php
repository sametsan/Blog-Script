<?
$db->sorgu("SELECT * FROM kayitlar WHERE baslik LIKE '%$get->ara%' AND tip='makale' UNION SELECT * FROM kayitlar WHERE aciklama LIKE '%$get->ara%'  AND tip='makale'  UNION SELECT * FROM kayitlar WHERE etiketler LIKE '%$get->ara%'  AND tip='makale'");

tema_tablo_ac("'$get->ara' için arama sonuçları");


while($kayit=$db->nesne())
{
$url=kayit_url($kayit);
echo "<div class=tablo-liste><li><a href='$url'>$kayit->baslik</a></li></div>";
}

tema_tablo_kapat();


?>