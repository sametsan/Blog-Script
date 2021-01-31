<?


function resim_goster($adres,$width,$height)
{
$boyut=getimagesize($adres);
$en=$boyut[0];
$boy=$boyut[1];
$oran=$en/$boy;
if($oran>=2)
print "<center><img widht=$width src='$adres'></center><br>";
else
print "<center><img height=$height src='$adres'></center><br>";

}





?> 
