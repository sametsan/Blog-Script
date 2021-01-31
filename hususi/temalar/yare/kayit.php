<?



$db->sorgu("UPDATE kayitlar SET ziyaret=ziyaret+1 WHERE baslik_url='$get->url'");
$db->sorgu("SELECT * FROM kayitlar WHERE baslik_url='$get->url'");
$kayit=$db->nesne();

site_baslik($kayit->baslik);
site_resim(kayit_resim_url($kayit->no));
site_icerik($kayit->aciklama);


facebook_baslik($kayit->baslik);
facebook_site(ayar_al("site_baslik"));
facebook_video($kayit->kaynak);
facebook_icerik($kayit->aciklama);
facebook_resim(kayit_resim_url($kayit->no));

tema_tablo_ac();

$resim=kayit_resim_url($kayit->no);

if(!file_exists($resim))
$resim="$tema/resim/resim_yok.png";
echo "<div class=tablo-resim><img width=175 height=150 src=$resim></div>";

echo "<div class=tablo-baslik><a href='$url'>$kayit->baslik</a></div>";
echo htmlspecialchars_decode(nl2br($kayit->aciklama));


echo "<br><br><br><span> <b>Kaynak : </b><a target='_blank' href=$kayit->kaynak>$kayit->kaynak</a></span><br><br>";

echo "Etiketler : ";
$e=explode(",",$kayit->etiketler);
foreach($e as $etiket)
echo "<a href=ara-$etiket>$etiket</a>,";

if(yonetim())
echo "<br><br><a href=yonetim/?s=kayitlar_kayit.php&no=$kayit->no>Kaydı Düzenle</a> ";


tema_tablo_kapat();

// // // // // // // // // // // // // // // // // // // // // // // // d

tema_tablo_ac();
$begen=kayit_begen($kayit->no);
$zaman=trim($kayit->zaman);

echo "<div class=tablo-ozellikler>
<div class=tablo-ozellikler-paylas>
<a title='Facebookta Paylaş' onclick=\"window.open('http://www.facebook.com/sharer.php?t=$baslik&u=http://".$_SERVER['HTTP_HOST']."/$url','sadasd','width=600,height=500')\" class=tablo-ozellikler-paylas-facebook></a>
<a title='Beğen' id=begen class=tablo-ozellikler-paylas-begen onclick=\"kayit_begen($kayit->no,'begen_$kayit->no')\"></a>
<a title='RSS' target=asdasdasd class=tablo-ozellikler-paylas-rss href='rss.php?no=$kayit->no'></a>
</div>
<div class=tablo-ozellikler-begen>
<strong>$begen/$kayit->ziyaret</strong>
</div>
<div class=tablo-ozellikler-zaman>
<strong>$zaman</strong> Tarihinde yazıldı.
</div>
<div class=tablo-ozellikler-devam>
<a href='$url'>Devamı</a>
</div>
</div>";

// echo "<div id='kayit-bilgiler-$kayit->no'>";
// $baslik=ereg_replace("'","",$kayit->baslik);
// $url=kayit_url($kayit);
// $begen=kayit_begen($kayit->no);
// 
// echo "
// <div style='float:left;' id=begen_$kayit->no><a onclick=\"kayit_begen($kayit->no,'begen_$kayit->no')\"><img border=0  src=$tema/resim/begen.png></a></div>
// <a onclick=\"window.open('http://www.facebook.com/sharer.php?t=$baslik&u=http://".$_SERVER['HTTP_HOST']."/$url','sadasd','width=600,height=500')\"><img border=0 src=$tema/resim/facebook.png></a>
// <a target=_blank href=rss.php?no=$kayit->no><img border=0 src=$tema/resim/rss2.png></a>
// <span style='float:right;'>$kayit->zaman - $kayit->ziyaret kere ziyaret edilmiş.</span>
// ";
// 
// echo "</div>";

tema_tablo_kapat();

// // // // // // // // // // // // // // // // // // // // // // // d



echo "<div id=yorum_liste>";



$db->sorgu("SELECT * FROM kayitlar WHERE tip='yorum' AND kno='$kayit->no'");

while($yorum=$db->nesne()){

tema_tablo_ac($yorum->baslik);

echo nl2br($yorum->aciklama);

if(yonetim())
print "<br><span class=yorum-bilgiler>$yorum->zaman - <a href=yonetim/yorumlar.php?sayfa=sil&no=$yorum->no&kno=$yorum->kno>Sil</a>  - $yorum->ip</span>";
else
print "<br><span class=yorum-bilgiler>$yorum->zaman</span>";
tema_tablo_kapat();

}

echo "</div>";






if($post->yazan)$yazan=$post->yazan;
if($session->yazan)$yazan=$session->yazan;
if($cookie->yazan)$yazan=$cookie->yazan;

print "<div id=yorum_yap>";
print "</div>";


tema_tablo_ac("Yorum yap");
if(trim($yazan)){
echo "<div id=kaydet></div>";
print "<br><form  action='javascript:void(0);' method=post>";
print "<textarea  id=cevap name=cevap cols=54 rows=2  class=text></textarea><br>";
print "<input  type=image src=$tema/resim/gonder.png onclick='yorum_yap()'>";
print "<input id=kno name=kno size=47 type=hidden value='$kayit->no'><br>";
print "<input id=yazan name=yazan size=47 type=hidden value='$yazan'><br>";
print "</form>";

}
else echo "Lütfen bir isim girin!";

tema_tablo_kapat();


?>
