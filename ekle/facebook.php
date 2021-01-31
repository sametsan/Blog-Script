<?

function facebook_site($adres)
{echo "<meta property=og:site_name content=$adres/>";}

function facebook_baslik($baslik)
{echo "<meta property='og:title' content=$baslik/>";}


function facebook_icerik($icerik)
{echo "<meta property='og:description' content=\"".htmlspecialchars($icerik)."\">";}

function facebook_resim($adres)
{echo "<meta property='og:image' content=$resim/>";}

function facebook_video($adres)
{
echo "<meta property=og:url content=$adres/>";
echo "<meta property=og:type content=movie/>";
}




?> 
