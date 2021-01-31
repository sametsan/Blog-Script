<?

echo "<center>";

echo "<div class='govde'>";

include dirname(__FILE__)."/baslik.php";


echo "<div class=\"menu\" >";

echo "<div class='dugmeler'>";

echo "<ul>";
echo "<li><a href=index.php>Anasayfa</a></li>";


$k=$db->sorgu("SELECT * FROM kayitlar WHERE tip='kategori' AND kno='0'  ORDER BY no DESC");
while($l=$db->nesne()){

echo "<li
onmouseout=\"menu_gizle('menu_liste_$l->no')\" 
onmouseover=\"menu_goster('menu_liste_$l->no');\" >
<a href=?s=kayitlar&tip=kategori&no=$l->no>$l->baslik</a>

<ul class=golge id='menu_liste_$l->no'>";
$t=mysql_query("SELECT * FROM kayitlar WHERE tip='kategori' AND kno='$l->no' ORDER BY no ");
while($y=mysql_fetch_object($t)){
echo "<li ><a href=?s=kayitlar&tip=kategori&no=$y->no>$y->baslik</a></li>";
}

echo "</ul></li>";

}
echo "<li><a  href=rss.php>RSS</a></li>";
echo "</ul>";


include dirname(__FILE__)."/arama.php";

echo "</div>";
echo TEMIZLE;
echo "</div>";

include dirname(__FILE__)."/hata.php";

echo "<div class='ana-ust'></div>";
echo "<div class='ana'>";
echo "<div class='gobek'>";
include  dirname(__FILE__)."/eklentiler.php";
echo "<div class=orta id=orta>";


?>
