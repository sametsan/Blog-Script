<?
require_once "bas.php";

if($get->islem=="temizle")
{
$f=fopen("../hususi/log","w");
}


echo "<a href=?s=log.php&islem=temizle>Kayıtları Temizle</a>";

$f=fopen("../hususi/log","r");

echo "<div class=tablo>";
echo nl2br(fread($f,99999999));

echo "</div>";



?> 
