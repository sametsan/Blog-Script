<?

switch($get->islem)
{
case "ekle":

echo "Kaydediliyor.<br>";
$zaman=date("y.m.d H:i:s");
$baslik_url=cevir_baslik0baslik_url($post->baslik);

echo "Başlık URL tamam.<br>";

$db->sorgu("INSERT INTO kayitlar (baslik,kno,kaynak,zaman,aciklama,on_aciklama,etiketler,baslik_url,tip) VALUES ('$post->baslik','$post->kno','$post->kaynak','$zaman','$post->aciklama','$post->on_aciklama','$post->etiketler','$baslik_url','$post->tip')");
echo "Veri tabanına kayıdedildi.<br>";

$db->sorgu("SELECT * FROM kayitlar ORDER BY no DESC");
$s=$db->nesne();



header("location:?s=kayitlar_kayit_album.php&no=$s->no");
break;

case "duzenle":

$db->sorgu("UPDATE kayitlar SET kno='$post->kno' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET baslik='$post->baslik' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET kaynak='$post->kaynak' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET aciklama='$post->aciklama' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET on_aciklama='$post->on_aciklama' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET etiketler='$post->etiketler' WHERE no='$get->no'");
$db->sorgu("UPDATE kayitlar SET kno='$post->kno' WHERE no='$get->no'");
$baslik_url=cevir_baslik0baslik_url($post->baslik);
$db->sorgu("UPDATE kayitlar SET baslik_url='$baslik_url' WHERE no='$get->no'");


 header("location:?s=kayitlar_kayit.php&no=$get->no");
break;

case "sil":

if($get->onay=="tamam")
{
$db->sorgu("DELETE FROM kayitlar WHERE no='$get->no'");

unlink("../hususi/resimler/$get->no/");
header("location:?s=kayitlar.php&tip=$s->tip");
}else
echo "<center><div class=dugme-kutu>
Silmek istediğinize emin misiniz?
<a class=dugme-kutu-dugme href=?s=kayitlar_islem.php&no=$get->no&islem=sil&onay=tamam>Kaydı Sil</a> 
<a  class=dugme-kutu-dugme href=?s=kayitlar_kayit.php&no=$get->no>İptal</a></div></center>";


break;

}






?> 
