<?


tema_eklenti_ac("Veriler");
$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='makale'");
$s=mysql_num_rows($sql);
echo "<b>Makale : </b><span>$s</span><br>";


$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='yorum'");
$s=mysql_num_rows($sql);
echo "<b>Yorumlar :</b><span> $s</span><br>";



$sql=mysql_query("SELECT * FROM kayitlar WHERE tip='risale'");
$s=mysql_num_rows($sql);
echo "<b>Risale :</b> <span>$s</span><br>";

echo "<b>Çevrimiçi : </b><span>".online()."</span><br>";
tema_eklenti_kapat();


?>