<?
require_once "bas.php";

$dizin="../hususi/resimler/$get->no/";
$no=$get->no;
$kayit=kayit($get->no);



if($get->no){
echo "
<div class=kutu>
<a class=kutu-dugme href=?s=kayitlar_kayit.php&no=$get->no>$kayit->baslik</a> 
<a class=kutu-dugme  href=?s=kayitlar_kayit_album.php&no=$get->no&islem=sil>Resim Yükle</a> 
<a  class=kutu-dugme href=?s=kayitlar_islem.php&no=$get->no&islem=sil>Kaydı Sil</a></div>
 <br><br>";
}


echo "<form  action='?s=kayitlar_kayit_album.php&islem=resim_yukle&no=$get->no' method='post' enctype='multipart/form-data' >";
echo "<input type=file name=resim >";
echo "<input type=submit value=Yükle>";
echo "</form>";


echo "<br>Dizin : $dizin | ";
if (file_exists($dizin))
    echo "Dosya var | ";
if (is_writable($dizin))
    echo "Dosyaya yazılabilir | ";
echo "<br>";

switch($get->islem)
{
case "resim_yukle":

$ad=$_FILES["resim"]["name"];
$tmp_ad=$_FILES["resim"]["tmp_name"];
$baslik_url=cevir_baslik0baslik_url($ad);

$resim=resim_yukle($dizin,$_FILES["resim"],$baslik_url);


if($resim)
echo "İşlem tamam.";
// header("location:?s=kayitlar_kayit_album.php&no=$get->no");
break;
case "resim_sil":
unlink($get->resim);
header("location:?s=kayitlar_kayit_album.php&no=$get->no");
break;
case "on_tanimli":
$db->sorgu("UPDATE kayitlar SET resim='$get->resim' WHERE no='$get->no'");
header("location:?s=kayitlar_kayit_album.php&no=$get->no");
break;
}



echo "<table width=100% border=0><tr>";
if(file_exists($dizin))
$d=opendir($dizin);
while($s=readdir($d))
{
if($s!="." && $s!=".."){

$resim="$s";
$resim_adres="$dizin/$s";
echo "<td>";
if($resim==$kayit->resim)
$border="border=8";
else
$border="border=0";


echo "<a href=?s=kayitlar_kayit_album.php&islem=on_tanimli&no=$no&resim=$resim><img $border src='$resim_adres' width=140 ></a>";
echo "<br>";
echo "<a href=?islem=resim_sil&no=$no&resim=$resim_adres>Resmi Sil</a>";
echo "</td>";

if($i==4){
echo "</tr><tr>";$i=0;}

$i=$i+1;
}}

echo "</tr></table>";

?>

