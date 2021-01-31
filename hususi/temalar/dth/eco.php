<?


tema_eklenti_ac("Rağbet Görenler");

$db->sorgu("SELECT * FROM kayitlar WHERE tip='makale'  ORDER BY ziyaret DESC");
$i=0;
while($s=$db->nesne())
{

$adres=kayit_url($s);
$resim=kayit_resim_url($s->no);

echo "
<div class=tablo-liste>
<img alt='Resim Yok' src=\"$resim\"  width=45 align=left>
<a href='$adres'>$s->baslik($s->ziyaret)</a>
".TEMIZLE."
</div>";

if($i==2)break;
$i+=1;

}
tema_eklenti_kapat();

?>