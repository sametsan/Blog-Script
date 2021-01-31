<?




// // // // // PHP
$dizin=dirname(__FILE__);
$d=opendir($dizin);
while($s=readdir($d))
if(substr($s,-3)=="php")
require_once "$dizin/$s";

// // // // // JS
$url=dosya_url_dizin(__FILE__)."/js/";
$dizin=dirname(__FILE__)."/js/";
$d=opendir($dizin);
while($s=readdir($d))
if(substr($s,-2)=="js")
print "<script src=$url/$s></script>";
 

?> 
