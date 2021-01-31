<?
header("Content-type: text/xml\n\n");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\">";


require_once "ayar.php";
require_once "ekle/mysql.php";
require_once "ekle/kayitlar.php";
require_once "ekle/degiskenler.php";


$baslik="Samet SAN";
$icerik="RSS";
$link="http://www.sametsan.org/";
$dil="tr";
$webmaster="Samet SAN";

echo "
<channel>
<title>$baslik</title>
<description>$icerik</description>
<link>$link</link>
<language>$dil</language>
<webMaster>$webmaster</webMaster>
 ";

if($get->no)
$sql=mysql_query("SELECT * FROM kayitlar WHERE no='$get->no'")or die(mysql_error());
else
$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='makale'")or die(mysql_error());

while($s=mysql_fetch_object($sql))
{

$resim=kayit_resim_url($s->no);
$url=kayit_url($s);

echo "
<title>$s->baslik</title>
<description><![CDATA[
<p><img src=".$link.$resim."></p>
<p>$s->aciklama</p>
]]></description>
<link>".$link.$url."</link>
";

}

echo "</channel>
</rss>";

?>