<?


if($get->kno)
$sql=$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale' AND kno='$get->kno' ORDER BY no DESC");
else
$sql=$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale' ORDER BY no DESC");

$sayi=$db->kayit_sayisi();

$sinir=10;
$sayfa=$get->sayfa;

if(!$sayfa)
$sayfa=1;

$sayfalar=$sayi/$sinir;
$sayfalar=ceil($sayfalar);
$son=$sinir*($sayfa-1);

if($get->kno)
$sql=$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale'  AND kno='$get->kno'  ORDER BY no DESC LIMIT $son,$sinir");
else
$sql=$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale' ORDER BY no DESC LIMIT $son,$sinir");

while($kayit=$db->nesne())
{
$url=kayit_url($kayit);

$resim=kayit_resim_url($kayit->no);
$baslik=ereg_replace("'","",$kayit->baslik);

$sqlyorum=mysql_query("SELECT * FROM kayitlar WHERE kno='$kayit->no' AND tip='yorum'");
$yorum=mysql_num_rows($sqlyorum);
$begen=kayit_begen($kayit->no);
$zaman=trim($kayit->zaman);


tema_tablo_ac();

if(!file_exists($resim))
$resim="$tema/resim/resim_yok.png";
echo "<div class=tablo-resim><img width=185 src=$resim></div>";

echo "<div class=tablo-aciklama>

<span class=tablo-baslik><a href='$url'>$kayit->baslik</a></span><br>";
echo "".nl2br($kayit->on_aciklama)."</div>";



tema_tablo_kapat();

}

$i=1;

echo "<div class=sayfala>";
while($i<=$sayfalar)
{
if($get->kno)
echo "<a href='./sayfa-$i-$get->kno'>$i</a>";
else
echo "<a href='./sayfa-$i'>$i</a>";
$i++;
}
echo "</div>";


/*
print "<div id=sayfala_$sayfa>";
if($sayfa<$sayfalar){
print "<div class=sayfala><a  onclick=\"JXG(1,'sayfala_$sayfa','tema/kayitlar.php','sayfa=$sayfa&bas=1')\">Devamını göster</a></div>";
}else
print "<div class=sayfala >Başka kayıt yok........</div>";
echo "</div>";
*/
?>