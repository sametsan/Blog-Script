<?

function cevir_baslik0baslik_url($baslik)
{
$tr=array("[ç]","[ş]","[ı]","[ğ]","[ü]","[ö]");
$en=array("c","s","i","g","u","o");
$baslik=strtolower($baslik);
$baslik=preg_replace($tr,$en,$baslik);
$baslik=preg_replace("[\W]","_",$baslik);
return $baslik;
}

function cevir_html0yazi($d)
{
$d=ereg_replace("'","",$d);
$d=ereg_replace("<","&lt;",$d);
$d=ereg_replace(">","&gt;",$d);
$d=htmlspecialchars($d);
return $d;
}


?> 
