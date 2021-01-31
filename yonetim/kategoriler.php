<?
require_once "bas.php";


echo "<h3>Kategoriler / <a href='?s=kayitlar_kayit.php&tip=kategori'>Kategori Ekle</a></h3>";

echo "
<div class=tablo>
<div class=tablo-orta>
";


echo "<ul>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='kategori' ORDER BY no DESC");
while($s=$db->nesne())
{
$resim=kayit_resim_url($s->no);

// echo "<td width=35><img src='../$resim' width=32></td>";


echo "<li>";
if($s->baslik)
echo "$s->baslik";
elseif($s->aciklama)
echo "$s->aciklama";


echo "<a class='sag' href=?s=kayitlar_kayit.php&no=$s->no>Düzenle</a>";
echo "</li>";
}
echo "</ul>";

echo "</div>
</div><br>";



?> 
