 
<?
if(yonetim()){
echo "<div class=menu>";
echo "<a href=../>Anasayfa</a>";
echo "<a href=?s=kategoriler.php>Kategoriler</a>";
echo "<a href=?s=kayitlar.php>Makaleler</a>";
echo "<a href=?s=eklentiler.php>Eklentiler</a>";

echo "<a href=?s=aktif.php>Aktif Olanlar</a>";
echo "<a href=?s=ayarlar.php>Ayarlar</a>";
echo "<a href=?s=log.php>Log</a>";
echo "<a href=?s=cikis.php>Çıkış</a>";

$s=uye($session->uye_no);
echo "<span class=menu-kullanici>Giriş yapan kullanıcı <b>$s->kullanici</b></span>";

echo TEMIZLE;
echo "</div>";
}
?>