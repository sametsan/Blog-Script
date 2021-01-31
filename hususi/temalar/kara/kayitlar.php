<?

switch($get->tip)
{
case "kategori":
if($get->sirala)
$sirala=$get->sirala;
else
$sirala="DESC";

$kod="SELECT * FROM kayitlar WHERE tip='makale' AND kno='$get->no' ORDER BY no $sirala";
$s=kayit($get->no);
$baslik=$s->baslik;
break;
case "yorumladiklarim":
include dirname(__FILE__)."/yetki.php";
$baslik="Yorumladıklarım";
$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='yorum' AND baslik='$session->uye_no'");
$j=mysql_fetch_object($sql);
$b=$b." AND no='$j->kno' ";
while($j=mysql_fetch_object($sql))
$b=$b." OR no='$j->kno' ";
$kod="SELECT * FROM kayitlar WHERE tip='makale'  $b  ORDER BY no DESC";
break;

case "begendiklerim":
include dirname(__FILE__)."/yetki.php";
$baslik="Beğendiklerim";
$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='begen' AND baslik='$session->uye_no'");
$j=mysql_fetch_object($sql);
$b=$b." AND no='$j->kno' ";
while($j=mysql_fetch_object($sql))
$b=$b." OR no='$j->kno' ";
$kod="SELECT * FROM kayitlar WHERE tip='makale'  $b  ORDER BY no DESC";
break;

default:
$kod="SELECT * FROM kayitlar WHERE tip='makale' ORDER BY no DESC";
break;
}

if($baslik){
tema_tablo_ac();
echo "<span style='float:left;font-weight:bold;'>$baslik</span>";
if($get->sirala=="ASC")
$sirala="DESC";
else
$sirala="ASC";



echo "<span style='float:right;'><a onclick=\"JXG('$yukleniyor','orta','sayfa.php','s=$tema/kayitlar.php&tip=kategori&no=$get->no&sirala=$sirala');\" >Sıralamayı ters çevir</a></span>";
tema_tablo_kapat();
}


$sql=$db->sorgu($kod);

$sayi=$db->kayit_sayisi();

$sinir=15;
$sayfa=$get->sayfa;

if(!$sayfa)
$sayfa=1;

$sayfalar=$sayi/$sinir;
$sayfalar=ceil($sayfalar);
$son=$sinir*($sayfa-1);


$kod=$kod." LIMIT $son,$sinir";
$sql=$db->sorgu($kod);
$i=0;
while($kayit=$db->nesne())
{
tema_tablo_ac("","onmouseover=\"this.className='tablo tablo-uzerinde'\" onmouseout=\"this.className='tablo'\"");
$url=kayit_url($kayit);

$resim=kayit_resim_url($kayit->no);
$baslik=ereg_replace("'","",$kayit->baslik);

$sqlyorum=mysql_query("SELECT * FROM kayitlar WHERE kno='$kayit->no' AND tip='yorum'");
$yorum=mysql_num_rows($sqlyorum);
$begen=kayit_begen($kayit->no);
$zaman=trim($kayit->zaman);




$boyut=getimagesize($resim);



echo "<div class=kayitlar-hucre-resim ><img width=100% src=$resim></div>";
echo "<div class=kayitlar-hucre-baslik><a href='$url'>$kayit->baslik</a></div>";
echo "<div class=kayitlar-hucre-orta>".nl2br($kayit->on_aciklama)."</div>";


tema_tablo_kapat();
}

$i=1;


echo "<div class=sayfala>";
while($i<=$sayfalar)
{
if($get->no){
$adres="?s=kayitlar&tip=kategori&no=$get->no&sayfa=$i";
$class="dugme";
}
else{
$adres="?s=kayitlar&tip=$get->tip&sayfa=$i";
$class="dugme";
}

if($get->sayfa==$i)
$class="dugme-uzerinde";

echo "<a class='$class' href='$adres'>$i</a>";
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