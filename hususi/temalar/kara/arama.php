
<?
echo "<div class=arama>";
echo "

<input size=18 class=arama-girdi type=text name=ara id=ara  value=\"$get->ara\" onkeypress=\"javascript:if (event.keyCode == 13) ara('".tema_yukleniyor()."','$tema')\">

<a class=arama-dugme onclick=\"ara('".tema_yukleniyor()."','$tema')\"></a>

";
echo "</div>";
?>