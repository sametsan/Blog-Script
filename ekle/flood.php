<?
function flood($d)
{
$saat=time();
$flood=$_SESSION["flood"]["saat"];
$kalan=$flood-$saat;

if(!$_SESSION["flood"]["saat"]){
$_SESSION["flood"]["saat"]=$saat+$d;
return 0;
}

if($kalan>0)
return $kalan;
else{
$_SESSION["flood"]["saat"]=$saat+$d;
return 0;
}
}


/*

işlev ilk çalıştığında ki saati bir oturum değişkeni olarak kaydeder.
$d değişkeni sınırı belirler.
İşlev kalan süreyi saniye olarak geri döndürür.

*/

?> 
