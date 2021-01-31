<?

function kod_uret()
{
return date("ymdHis");
}

function kod_coz($kod)
{
$s=array();
$s["yil"]=substr($kod,0,2);
$s["ay"]=substr($kod,2,2);
$s["gun"]=substr($kod,4,2);
$s["saat"]=substr($kod,6,2);
$s["dakika"]=substr($kod,8,2);
$s["saniye"]=substr($kod,10,2);

return $s;
}

function yonetim()
{
$sql=mysql_query("SELECT * FROM uyeler WHERE no='".$_SESSION["uye_no"]."'");
$s=mysql_fetch_object($sql);
if($s->yetki==1)
return TRUE;
else
return FALSE;
}


?> 
