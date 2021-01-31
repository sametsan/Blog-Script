<?
require_once "bas.php";

if(!$get->sirala)
$sirala="no";
else
$sirala=$get->sirala;

switch($get->ters)
{
case "desc":$ters="asc"; break;
case "asc":$ters="desc"; break;
default: $ters="desc";
}


$tip=$get->tip;



echo "<h3>Sayfalar</h3>";
echo "<a href='?s=kayitlar_kayit.php&tip=sayfa'>Sayfa Ekle</a><br>";

echo "
<div class=tablo>
<div class=tablo-orta>
";

echo "<table width=100% >";

$db->sorgu("SELECT * FROM kayitlar WHERE tip='sayfa' ORDER BY $sirala $ters");
while($s=$db->nesne())
{
$resim=kayit_resim_url($s->no);

// echo "<td width=35><img src='../$resim' width=32></td>";

echo "<td> ";

if($s->baslik)
echo "$s->baslik";
elseif($s->aciklama)
echo "$s->aciklama";
echo "</td>";

echo "<td width=35><a href=?s=kayitlar_kayit.php&no=$s->no>Düzenle</a></td>";
echo "</tr>";
}
echo "</table>";

echo "</div>
</div><br>";



?> 
