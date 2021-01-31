<?

if($session->uye_giris==FALSE){
$session->yap("hata","Lütfen giriş yapın!");
header("location:index.php");
}

?>