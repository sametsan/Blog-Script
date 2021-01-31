<?

echo "<div id=karart class=karart>
<div id=orta_pencere class=orta_pencere></div>
</div>";

echo "<center>";

echo "<div class=baslik>";
echo "<img src=".dosya_url_dizin(__FILE__)."/resim/baslik.png>";

echo "</div>";

echo "<div class=ana>";
echo "<div class=menu>";

echo "<div class=dugmeler>";
echo "<div class=dugme><a href=index.php>Anasayfa</a></div>";
echo "<div class=dugme><a href=iletisim>İletişim</a></div>";
echo "<div class=dugme><a href=rss>RSS</a></div>";
if(yonetim())
echo "<div class=dugme><a href=yonetim/>Yönetim</a></div>";
echo "</div>";

echo "<div class=arama>";
include dirname(__FILE__)."/arama.php";
echo "</div>";

echo TEMIZLE;
echo "</div>";


include dirname(__FILE__)."/eklentiler_sol.php";
include dirname(__FILE__)."/eklentiler_ust.php";

echo "<div class=orta>";

?>
