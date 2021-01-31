<?
require_once "bas.php";
echo BR;

echo "
<script>
function yaz(v)
{
v.innerHTML='$d->ad - $d->ip  - $d->sayfa <br><b>Geldiği sayfa :</b> <a target=_blank href=$d->geldigi_sayfa>$d->geldigi_sayfa</a> \n<b>Tarayıcı :</b> $d->tarayici \n<b>Giriş :</b> $giris \n<b>$dk</b> saniyedir haraket yok.';
}
</script>
";

$db->sorgu("SELECT * FROM online ");

echo "<div class=tablo><div class=tablo-orta><table>
<td>ad </td>
<td>IP</td>
<td>Bulunduğu Sayfa</td>
<td>Geldiği Sayfa</td>
<td>Tarayıcı</td>
<td>Giriş</td>
<td>Son Hareket (Saniye)</td>
<td>Çerezler</td>


";
while($d=$db->nesne())
{
$giris=date("d.m.y  H:i:s",$d->zaman);
$dk=time()-$d->zaman;


echo "
<tr>

<td>$d->ad </td>
<td>$d->ip</td>
<td>$d->sayfa</td>
<td><a target=_blank href=$d->geldigi_sayfa>$d->geldigi_sayfa</a> </td>
<td> $d->tarayici</td>
<td>$giris </td>
<td>$dk sn </td>
<td><textarea cols=40 rows=5>$d->cerez</textarea></td>

</tr>
";
}
echo "</table></div></div>";


?> 
