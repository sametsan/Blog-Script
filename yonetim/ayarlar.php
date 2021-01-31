<?

require_once "bas.php";

$islem=$get->islem;

switch($islem)
{
case "duzenle":
echo "<div class=tablo>";
echo "<div class=tablo-orta>";

ayar_ver("site_baslik",$post->baslik);
ayar_ver("site_tanim",$post->tanim);
ayar_ver("site_icerik",$post->icerik);
ayar_ver("site_tema",$post->site_tema);

echo "Ayarlar değişti.";
echo BR;

echo TEMIZLE."</div></div>";
break;
}


echo "<form action='?s=ayarlar.php&islem=duzenle' method=post>";


echo "<div class=tablo>";
echo "<div class=tablo-baslik>Site Ayarlar</div>";
echo "<div class=tablo-orta>";
echo "<table width=100% border=0 cellpadding=1 cellspacing=1 bordercolor=#DDDDDD>";
$baslik=ayar_al("site_baslik");
$tanim=ayar_al("site_tanim");
$icerik=ayar_al("site_icerik");
echo "<tr><td>Başlık : </td><td><input type=text name=baslik value=\"$baslik\"></td></tr>";
echo "<tr><td>Tanım : </td><td><input type=text name=tanim value=\"$tanim\"></td></tr>";
echo "<tr><td>içerik : </td><td><input type=text name=icerik value=\"$icerik\"></td></tr>";
echo "</table>";
echo TEMIZLE."</div></div>";

echo "<div class=tablo>";
echo "<div class=tablo-baslik>Tema</div>";
echo "<div class=tablo-orta>";
echo "<table width=100% border=0 cellpadding=1 cellspacing=1 bordercolor=#DDDDDD>";
echo "<tr><td>Tema : </td><td><select name=site_tema>";
$tema=ayar_al("site_tema");
$d=opendir("../hususi/temalar/");
while($s=readdir($d))
if($s!="." && $s!="..")
if($s==$tema)
echo "<option value='$s' selected>$s</option>";
else
echo "<option value='$s'>$s</option>";


echo "</select></td></tr>";
echo "</table>";
echo TEMIZLE."</div></div>";


echo "<div class=tablo>";
echo "<div class=tablo-baslik>İşlem tamam!</div>";
echo "<div class=tablo-orta>";
echo "<table width=100% border=0 cellpadding=1 cellspacing=1 bordercolor=#DDDDDD>";
echo "<tr><td> </td><td><input type=submit value=Kaydet></td></tr>";
echo "</table>";
echo TEMIZLE."</div></div>";




echo "</form>";


?> 
