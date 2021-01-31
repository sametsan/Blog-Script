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


function tema_tablo_ac($baslik="",$tag="")
{
echo "
<div class=tablo $tag>
<h3>$baslik</h3>
";

}


function tema_tablo_kapat()
{
echo TEMIZLE;
echo "
</div>
";

}


function tema_eklenti_ac($baslik="")
{
echo "<div class=eklenti>";
echo "<div class=eklenti-baslik>$baslik</div>";
echo "<div class=eklenti-orta>";
}


function tema_eklenti_kapat()
{
echo TEMIZLE;
echo "</div>";
echo TEMIZLE;
echo "</div>";
}

function tema_yukleniyor()
{
return "<div class=tablo><br><br><br><center>Yükleniyor...<br><img height=25 src=$tema/resim/yukleniyor.gif><br><br><br><br></div>";
}


?> 
