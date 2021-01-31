<?


function resim_yukle($dizin,$resim_data,$ad)
{

$resim_dizin=$dizin;
$resim_tmp_ad=$resim_data["tmp_name"];
$resim_ad=$resim_data["name"];

$resim_ad=$ad.".".dosya_uzanti($resim_ad);
$resim=$resim_dizin.$resim_ad;


if(!file_exists($resim_dizin))mkdir($resim_dizin);
chmod($resim_dizin,0777);

if(file_exists($resim))
unlink($resim);

move_uploaded_file($resim_tmp_ad,$resim);

return $resim_ad;
}


?> 
