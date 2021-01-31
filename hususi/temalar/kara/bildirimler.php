<?
$adet=15;


tema_eklenti_ac("Bildirimler");
$db->sorgu("SELECT * FROM kayitlar WHERE tip='yorum' OR tip='begen' ORDER BY no DESC LIMIT $adet");
while($s=$db->nesne())
{

$sql=mysql_query("SELECT * FROM kayitlar WHERE  no='$s->kno'");
$d=mysql_fetch_object($sql);

$sqlf=mysql_query("SELECT * FROM uyeler WHERE  no='$s->baslik'");
$f=mysql_fetch_object($sqlf);

$url=kayit_url($d);
$resim=kayit_resim_url($d->no);


echo "
<div class=eklenti-liste>
<table border=0><tr>
<td width=40><div class=eklenti-liste-resim><img src='$resim'></div></td>
<td>
<a   href='$url'>$d->baslik</a><br>";

if($s->tip=="begen"){
if($s->baslik)
echo $f->kullanici."  beğendi.";
else
echo "Bir kişi beğendi.";
}
if($s->tip=="yorum")
echo "$f->kullanici yorum yaptı";


echo "</td></tr>
</table>

<div class=temizle></div>
</div>

";
}


tema_eklenti_kapat();


?>