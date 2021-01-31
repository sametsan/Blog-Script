<?
require_once "bas.php";


if(!$post->kad || !$post->parola)
header("location:giris.php?uyari=1");



if($post->kad!=ayar_al("yonetim_kullanici"))
header("location:giris.php?uyari=2");
else
$kullanici=1;

if(md5($post->parola)!=ayar_al("yonetim_sifre"))
header("location:giris.php?uyari=3");
else
$sifre=1;


if($kullanici==1 && $sifre==1){
$session->yap("uye",ayar_al("yonetim_sifre"));
header("location:index.php");
}
?> 
