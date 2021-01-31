<?
require_once "bas.php";

echo "<center>";

switch($get->islem)
{
case "yorum_ekle": 

$session->yap("cevap",$post->cevap);

if(!$post->cevap){
$session->yap("hata","Boşlukları doldurun!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

$f=flood(60);

if($f>0){
$session->yap("hata","$f sn bekleyin!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

$sql=mysql_query("SELECT * FROM uyeler WHERE no='$session->uye_no'");
$d=mysql_fetch_object($sql);
$yazan=$d->no;
$cevap=$post->cevap;
$kno=$get->kno;
$tarih=date("d.m.y H:i:s");
$ip=$server->REMOTE_ADDR;

$db->sorgu("INSERT INTO kayitlar (baslik,aciklama,zaman,ip,kno,tip) VALUES ('$yazan','$cevap','$tarih','$ip','$kno','yorum')");

$session->yap("cevap","");
$session->yap("uyari","Yorumunuz eklenmiştir.Teşekkür ederiz.");
header("location:".$_SERVER["HTTP_REFERER"]);break;
break;

case "kayit_begen": 

if($session->uye_giris)
$db->sorgu("INSERT INTO kayitlar (baslik,tip,kno) VALUES ('$session->uye_no','begen','$get->no') ");
else
$session->yap("hata","Giriş yapın.");
header("location:".$_SERVER["HTTP_REFERER"]);break;
break;


case "giris":

$parola=md5($post->parola);
$sql=mysql_query("SELECT * FROM uyeler WHERE kullanici='$post->kullanici' AND parola='$parola'");
$s=mysql_fetch_object($sql);

if($s->no)
{
$session->yap("uye_no",$s->no);
$session->yap("uye_giris",TRUE);

header("location:".$_SERVER["HTTP_REFERER"]);break;
}
else{
$session->yap("hata","Kullanıcı adı veya parola yanlış!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

break;


case "cikis":
$session->yap("uye_no","");
$session->yap("uye_giris",FALSE);
header("location:index.php");
break;

case "kayit_ol":

$session->yap("kullanici",$post->kullanici);
$session->yap("eposta",$post->eposta);
$session->yap("website",$post->website);

if(!$post->kullanici || !$post->parola || !$post->parola_tekrar)
{
$session->yap("hata","Boşlukları doldurun!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

$sql=mysql_query("SELECT * FROM uyeler WHERE kullanici='$post->kullanici'");
$s=mysql_fetch_object($sql);
if($s->no){
$session->yap("hata","Böyle bir kullanıcı var.");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

if($post->parola!=$post->parola_tekrar)
{
$session->yap("hata","Parola eşleşmiyor.");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

if(!$session->hata)
{
$parola=md5($post->parola);
$db->sorgu("INSERT INTO uyeler (kullanici,parola,eposta,site) VALUES ('$post->kullanici','$parola','$post->eposta','$post->website')");

$sqld=mysql_query("SELECT * FROM uyeler WHERE kullanici='$post->kullanici'");
$d=mysql_fetch_object($sqld);
if($d->no){

$session->yap("kullanici","");
$session->yap("eposta","");
$session->yap("website","");
$session->yap("uyari","Üye kaydınız tamamlanmıştır.Teşekkürler...");
header("location:index.php");break;
}
else
{
$session->yap("hata","Üye kaydınız bilinmeyen bir nedenden ötürü yapılamadı. =( ");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}}

break;

case "kimlik":

mysql_query("UPDATE uyeler SET kullanici='$post->kullanici' WHERE no='$session->uye_no'");
mysql_query("UPDATE uyeler SET site='$post->website' WHERE no='$session->uye_no'");
mysql_query("UPDATE uyeler SET eposta='$post->eposta' WHERE no='$session->uye_no'");

if($post->parola && $post->parola==$post->parola_tekrar){
$parola=md5($post->parola);
mysql_query("UPDATE uyeler SET parola='$parola' WHERE no='$session->uye_no'");
}
else
{
$session->yap("hata","Parola eşit değil!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}

$session->yap("uyari","İşleminiz başarı ile gerçekleştirildi.");
header("location:".$_SERVER["HTTP_REFERER"]);
break;
}




?> 
