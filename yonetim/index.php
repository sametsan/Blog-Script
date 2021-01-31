<?
require_once "1.php";

if(!yonetim())
header("location:giris.php");

if($get->s)
include $get->s;

require_once "2.php";
?> 
