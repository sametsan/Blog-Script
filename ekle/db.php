<?
class _db
{
var  $sql;

function sorgu($d)
{
$this->sql=mysql_query("$d");
if(!$this->sql) print mysql_error();
}

function nesne()
{
return mysql_fetch_object($this->sql);
}

function dizi()
{
return mysql_fetch_array($this->sql);
}

function kayit_sayisi()
{
return mysql_num_rows($this->sql);
}


}

$GLOBALS["db"]=new _db();
?> 
