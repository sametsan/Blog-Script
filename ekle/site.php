<?

function site_baslik($baslik)
{
echo "<title>$baslik</title>";
}


function site_icerik($icerik)
{
echo "<meta name=description content='$icerik'>";
}

function site_resim($adres)
{
echo "<link rel=image_src href='$adres' />";
}

function site_tema()
{
$tema=ayar_al("site_tema");

return "/hususi/temalar/$tema/";
}

?> 
