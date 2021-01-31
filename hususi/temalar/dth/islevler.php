<?


function tema_tablo_dugme($yazi,$adres,$resim)
{
echo "
<div class=tablo-liste style=\"background:url('$resim') center;\">
<div class=tablo-liste-ic>
<img alt='Resim Yok' src=$resim height=35 width=35 align=left>
<a href='$adres'>$yazi</a>
".TEMIZLE."
</div>
</div>";
}


function tema_tablo_ac($baslik="")
{
echo "
<div class=tablo>
<div class=ust>
<div class=alt>
<div class=sag>
<div class=sol>
<div class=sol_ust>
<div class=sag_ust>
<div class=sol_alt>
<div class=ic>
<h3>$baslik</h3>
";

}


function tema_tablo_kapat()
{
echo TEMIZLE;
echo "
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
";

}


function tema_eklenti_ac($baslik="")
{
echo "<div class=eklenti>";
if($baslik!="")
echo "<h3>$baslik</h3>";
echo "<p>";
}


function tema_eklenti_kapat()
{
echo "</p>";
echo "</div>";
}



?> 
