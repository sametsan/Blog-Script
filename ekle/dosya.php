<?

function dosya_uzanti($isim) {
    $dizi = explode('.',$isim);
    $eleman = count($dizi) -1;
    $uzanti = $dizi["$eleman"];
  return $uzanti;
}

function dosya_url($d)
{
$dir=$d;
$kok=$_SERVER["DOCUMENT_ROOT"];
$adres=$_SERVER["SERVER_NAME"];

$url=ereg_replace($kok,"/",$dir);
$url="http://".$adres."/".$url;
return  $url;
}

function dosya_url_dizin($d)
{
$dir=dirname($d);
$kok=$_SERVER["DOCUMENT_ROOT"];
$adres=$_SERVER["SERVER_NAME"];

$url=ereg_replace($kok,"/",$dir);
$url="http://".$adres."/".$url;
return  $url;
}


function dosya_dizin($d)
{
$dir=$d;
$kok=$_SERVER["DOCUMENT_ROOT"];

$url=ereg_replace($kok,"./",$dir);

return  $url;

}


?> 
