<?

echo "<link href=$tema/css/sifirla.css rel='stylesheet' type='text/css'>";
echo "<link href=$tema/css/css.css rel='stylesheet' type='text/css'>";

/*
$tarayici    = strtolower($_SERVER['HTTP_USER_AGENT']);

if(preg_match("/firefox/",$tarayici)) 
    echo "<link rel=stylesheet type=text/css href=$tema/css/firefox.css>";

if(preg_match("/opera/",$tarayici))
    echo "<link rel=stylesheet type=text/css href=$tema/css/opera.css>";


if(preg_match("/MSIE/",$tarayici))
    echo "<link rel=stylesheet type=text/css href=$tema/css/ie.css>";

*/

// // // // // // // // // // JS

$f=opendir("$tema/js/");
while($s=readdir($f))
if(substr($s,-2)=="js")
print "<script src=$tema/js/$s></script>";






require_once "$tema/islevler.php";
?>