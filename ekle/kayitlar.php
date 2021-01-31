<?

function kayit($no)
{
$sql=mysql_query("select * from kayitlar where no='$no'");
$s=mysql_fetch_object($sql);
return $s;
}


function kayit_url($kayit)
{
return $kayit->tip."-".$kayit->baslik_url;
}

function kayit_resim($no)
{
$s=kayit($no);
return $s->resim;
}

function kayit_resim_url($no)
{
$s=kayit($no);
$resim=DIZIN_RESIMLER."/".$no."/".$s->resim;
if(!file_exists($resim))
$resim=DIZIN_TEMALAR."/".ayar_al("site_tema")."/resim/resim_yok.png";
return  $resim;
}

function kayit_deger($no,$sutun)
{
$s=kayit($no);
return $s->{$deger};
}

function kayit_zaman($no)
{
$deger=array();
$s=kayit($no);
$d=explode(" ",$s->zaman);

$tarih=explode(".",$d[0]);
$saat=explode(":",$d[1]);

array_push($deger,$tarih);
array_push($deger,$saat);

return $deger;
}

function kayit_begen($no)
{
$sql=mysql_query("SELECT * FROM kayitlar WHERE kno='$no' AND tip='begen' ");
$s=mysql_num_rows($sql);
return $s;
}
?> 
