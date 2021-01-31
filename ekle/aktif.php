<?


function online() {
$session = new _session();
$cookie = new _cookie();
$server = new _server();

$saat=time();
$sure = time()-1000;
$ip=$server->REMOTE_ADDR;
$sayfa=$server->REQUEST_URI;
$geldigi_sayfa=$server->HTTP_REFERER;
$tarayici=$server->HTTP_USER_AGENT;
$ad=$session->yazan;
$ad=$cookie->yazan;
$cerez=$cookie->sametsan_log;

$mysql = mysql_query("select * from online where ip='$ip'");
$f=mysql_num_rows($mysql);
if($f==0)
$mysql = mysql_query("insert into online (ip,zaman,sayfa,geldigi_sayfa,tarayici,ad,cerez) values('$ip','$saat','$sayfa','$geldigi_sayfa','$tarayici','$ad','$cerez')");
else
$mysql = mysql_query("update online set zaman='$saat', sayfa='$sayfa',tarayici='$tarayici',ad='$ad' where ip='$ip'");

$sorgu = mysql_query("Select * from online where zaman>='$sure'");
$s=mysql_num_rows($sorgu);

$mysql = mysql_query(" delete from online where zaman<'$sure'");
return $s;
 
}


?> 
