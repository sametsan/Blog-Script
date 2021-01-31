<? 

include "bas.php";
include DIZIN_EKLENTILER."/log.php";



if(!$get->s){
site_baslik(ayar_al("site_baslik") ." // ". ayar_al("site_tanim"));
site_icerik(ayar_al("site_icerik"));
site_resim("$tema/resim/sametsan.png");
}

include "$tema/1.php";


if($get->s){
$adres="$tema/$get->s.php"; 
if(file_exists($adres))
 include $adres;
else
{
$session->yap("hata","Böyle bir sayfa yok!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
}


}else
 include  "$tema/kayitlar.php"; 


include "$tema/2.php";?>