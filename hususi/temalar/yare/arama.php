
<?
echo "<div class=arama>";
echo "
<div class=arama-girdi>
<input size=18 class=arama-girdi type=text name=ara id=ara  value=\"$get->ara\" onkeypress=\"javascript:if (event.keyCode == 13) ara()\">
</div>


<a class=arama-dugme onclick=\"ara()\"></a>

";
echo "</div>";
?>