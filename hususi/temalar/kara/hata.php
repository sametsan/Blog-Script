<?

if($session->uyari)
{
echo "
<div class=uyari> 
$session->uyari
</div>
";
$session->yap("uyari","");
}


if($session->hata)
{
echo "
<div class=hata> 
$session->hata
</div>
";
$session->yap("hata","");
}


?>
