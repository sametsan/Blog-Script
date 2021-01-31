<?
include "1.php";

switch($get->islem)
{
case "kayit_sil":
mysql_query("DELETE FROM kayitlar WHERE no='$get->no'");
$session->yap("uyari","Yorum silindi!");
header("location:".$_SERVER["HTTP_REFERER"]);break;
break;



}





include "2.php";
?> 
