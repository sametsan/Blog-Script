<?
function ayar_al($degisken)
{
$sql=mysql_query("SELECT * FROM ayarlar WHERE degisken='$degisken'");
$s=mysql_fetch_object($sql);
return $s->deger;
}

function ayar_ver($degisken,$deger)
{
// $deger=addslashes($deger);

if(ayar_varmi($degisken))
$sql=mysql_query("UPDATE ayarlar SET deger='".$deger."' WHERE degisken='".$degisken."'");
else
 $sql=mysql_query("INSERT INTO ayarlar (degisken,deger) VALUES ('$degisken','$deger')");
return $sql;
}

function ayar_varmi($degisken)
{
$sql=mysql_query("SELECT * FROM ayarlar WHERE degisken='$degisken'");
$s=mysql_fetch_object($sql);
return $s->degisken;
}

?>