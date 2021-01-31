<?


tema_eklenti_ac("Rağbet Görenler");

$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale'  ORDER BY ziyaret DESC");
$i=0;
while($s=$db->nesne())
{

$adres=kayit_url($s);
$resim=kayit_resim_url($s->no);

echo "

<div class=eklenti-liste>
<table border=0><tr>
<td width=40><div class=eklenti-liste-resim><img src='$resim'></div></td>
<td><a href='$adres'>$s->baslik</a><br>$s->ziyaret kez ziyaret edilmiş.";
echo "</td></tr>
</table>

<div class=temizle></div>
</div>
";

if($i==2)break;
$i+=1;

}
tema_eklenti_kapat();

?>