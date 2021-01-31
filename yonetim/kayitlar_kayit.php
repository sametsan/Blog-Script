<?
require_once "bas.php";

if($get->no){
$db->sorgu("SELECT * FROM kayitlar WHERE no='$get->no'");
$k=$db->nesne();

$resim=$k->resim;
$kno=$k->kno;
$baslik=$k->baslik;
$etiketler=$k->etiketler;
$kaynak=$k->kaynak;
$aciklama=$k->aciklama;
$on_aciklama=$k->on_aciklama;
$islem="duzenle&no=$get->no";
}
else
$islem="ekle";


if($get->no){
echo "
<div class=kutu>
<a class=kutu-dugme href=?s=kayitlar_kayit.php&no=$get->no>$baslik</a> 
<a class=kutu-dugme  href=?s=kayitlar_kayit_album.php&no=$get->no&islem=sil>Resim Yükle</a> 
<a  class=kutu-dugme href=?s=kayitlar_islem.php&no=$get->no&islem=sil>Kaydı Sil</a></div>
 <br><br>";
}else
echo "<div class=kutu><h2>|--------> \"$get->tip\" Ekle</h2></div>";

echo "<div class=sol>";
;
echo "<form action=?s=kayitlar_islem.php&islem=$islem method=post enctype=multipart/form-data>";
echo "

<div class=tablo>
<div class=tablo-orta>";
if($get->tip)
echo "<input type=hidden name=tip value='$get->tip'>";


echo "Başlık : <br><input size=50 type=text name=baslik value=\"$baslik\"><br>";
echo "Ön açıklama : <br><textarea cols=80 rows=5 name=on_aciklama>$on_aciklama</textarea><br>";
echo "Açıklama : <br><textarea cols=80 rows=20 name=aciklama>$aciklama</textarea><br>";
echo "Kaynak : <br><textarea cols=80 rows=3 name=kaynak>$kaynak</textarea><br>";
echo "Etiketler : <br><textarea cols=80 rows=3 name=etiketler>$etiketler</textarea><br>";
echo "</div>
</div>";


echo "</div>";
echo "<div class=sag>";

echo "<div class=tablo>";
echo "<div class=tablo-orta>";
echo "<div class=tablo-baslik>Kategori Seç</div>";
echo "<label><input type=radio value=0 name=kno checked>Hiçbiri</label><br>";
$db->sorgu("SELECT * FROM kayitlar WHERE tip='kategori'");
while($k=$db->nesne())
if($k->no!=$get->no)
if($k->no==$kno)
echo "<label><input type=radio value=$k->no name=kno checked>$k->baslik</label><br>";
else
echo "<label><input type=radio value=$k->no name=kno >$k->baslik</label><br>";
echo "</div>";
echo "</div>";


echo "<input type=submit value=Yayınla>";


echo "</form>";

echo "</div>";

?> 
