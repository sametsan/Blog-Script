<?


function takvim_aylar($s)
{
$aylar=array("",
"Ocak",
"Şubat",
"Mart",
"Nisan",
"Mayıs",
"Haziran",
"Temmuz",
"Ağustos",
"Eylül",
"Ekim",
"Kasım",
"Aralık");

return $aylar[$s];
}

function takvim_gunler($s)
{
$gunler=array("",
"Pazartesi",
"Salı",
"Çarşamba",
"Perşembe",
"Cuma",
"Cumartesi",
"Pazar");
return $gunler[$s];
}

function takvim_mevsimler($s){

$mevsimler=array("",
"İlkbahar",
"Yaz",
"Sonbahar",
"Kış",
);

return $mevsimler[$s];
}



?> 
