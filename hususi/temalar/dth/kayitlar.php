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
// echo "<div onmouseover='kayit_liste($kayit->no,1)' onmouseout='kayit_liste($kayit->no,0);'>";
$url=kayit_url($kayit);

$resim=kayit_resim_url($kayit->no);
$baslik=ereg_replace("'","",$kayit->baslik);

$sqlyorum=mysql_query("SELECT * FROM kayitlar WHERE kno='$kayit->no' AND tip='yorum'");
$yorum=mysql_num_rows($sqlyorum);
$begen=kayit_begen($kayit->no);


tema_tablo_ac();

echo "<div class=liste onmouseover='kayit_li($kayit->no,1)' onmouseout='kayit_li($kayit->no,0)' id=kayit_liste_$kayit->no >
<h3><a href='$url'>$kayit->baslik</a></h3>";
echo "<div id=kayit_li_$kayit->no class=li  >
<b>Beğenen : </b> <br> $begen kişi beğendi.<br>
<b>Ziyaret : </b> <br>$kayit->ziyaret kişi ziyaret etti.<br>
<b>Kaynak : </b> <br> $kayit->kaynak <br>
<b>Zaman : </b> <br> $kayit->zaman <br>


<div style='float:left;' id=begen_$kayit->no><a  onclick=\"kayit_begen($kayit->no,'begen_$kayit->no')\"><img border=0 width=20 src=$tema/resim/begen.png></a></div>
<a target=_blank href=rss.php?no=$kayit->no><img border=0 width=20 src=$tema/resim/rss.png></a>
<a onclick=\"window.open('http://www.facebook.com/sharer.php?t=$baslik&u=http://".$_SERVER['HTTP_HOST']."/$url','sadasd','width=600,height=500')\"><img border=0 width=20 src=$tema/resim/facebook.png></a>
<a href='$url'>Yorum Yap[$yorum]</a>
</div>

<div id=kayit_ok_$kayit->no class=ok></div>
</div>";


if(file_exists($resim))echo "<div class=resim style=\"background:url('$resim') center center no-repeat #DDD\"></div>";
echo "<p>".nl2br($kayit->aciklama)."</p>";

$e = explode(",",$kayit->etiketler);

foreach($e as $etiket)
echo "<a href=ara-$etiket>$etiket</a>,";

tema_tablo_kapat();
echo TEMIZLE;
// echo "</div>";
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