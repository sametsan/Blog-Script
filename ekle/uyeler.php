<?

function uye($no)
{
$sql=mysql_query("SELECT * FROM uyeler WHERE no='$no'");
return mysql_fetch_object($sql);
}

function uye_girdi_mi($no)
{
if(mysql_query("SELECT * FROM uyeler WHERE no='$no'"))
return TRUE;
else
return FALSE;
}

function uye_yetki_mi($no)
{
$s=uye($no);

if($s->yetki==1)
return TRUE;
else
return FALSE;
}

?> 
