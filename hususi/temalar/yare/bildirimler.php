<?
$adet=15;


tema_eklenti_ac("Bildirimler");
$db->sorgu("SELECT * FROM kayitlar WHERE tip='yorum' OR tip='begen' ORDER BY no DESC LIMIT $adet");
while($s=$db->nesne())
{

$sql=mysql_query("SELECT * FROM kayitlar WHERE  no='$s->kno'");
$d=mysql_fetch_object($sql);

$url=kayit_url($d);
$resim=kayit_resim_url($d->no);


echo "
<a class=eklenti-liste  href='$url'>
<img src='$resim' width=42 height=40 align=left><b>";

if($s->tip=="begen"){
if($s->baslik)
echo $s->baslik."  beğendi.";
else
echo "Bir kişi beğendi.";
}
if($s->tip=="yorum")
echo "$s->baslik yorum yaptı";

echo "</b><br>$d->baslik".TEMIZLE."</a>";}


tema_eklenti_kapat();


?>