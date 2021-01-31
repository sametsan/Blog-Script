<?

echo "<center>";


include dirname(__FILE__)."/baslik.php";

echo "<div class=menu>";

echo "<div class=dugmeler>";
echo "<div class=menu-ayirac></div>";
echo "<a class=menu-dugme href=index.php>Anasayfa</a>";
echo "<div class=menu-ayirac></div>";
echo "<a class=menu-dugme href=iletisim>İletişim</a>";
echo "<div class=menu-ayirac></div>";
echo "<a class=menu-dugme href=rss>RSS</a>";
echo "<div class=menu-ayirac></div>";
if(yonetim()){
echo "<a class=menu-dugme href=yonetim/>Yönetim</a>";
echo "<div class=menu-ayirac></div>";}


include dirname(__FILE__)."/arama.php";

echo "</div>";
echo TEMIZLE;
echo "</div>";

echo "<div class=ana-ust></div>";
echo "<div class=ana>";
echo "<div class=orta>";

?>
