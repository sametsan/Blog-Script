<?
session_start();
ob_start(); 

// // // // // // // // EKLEMELER
require_once dirname(__FILE__)."/ayar.php";
require_once dirname(__FILE__)."/ekle/index.php";



// // // // // // // // DEGİSKENLER

$tema=DIZIN_TEMALAR."/".ayar_al("site_tema");
$dizin= "http://".$_SERVER["SERVER_NAME"]."/sametsan/";


require_once dirname(__FILE__)."/tema.php";


echo "<link rel='shortcut icon' href= $tema/resim/simge.ico> ";

// // // // // // // // // // // // HTML ETİKETLERİ

echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
echo "<head> ";
echo "<base href='$dizin'>";
echo "</head>";



?>




