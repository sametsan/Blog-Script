


var url=location.href;
var adres=new Array();
adres=url.split("#");
if(adres[1])
location=adres[1];

function ara(yukleniyor,tema)
{
var ara=document.getElementById("ara").value;

 
     JXG(yukleniyor,"orta","sayfa.php","s="+fc_(tema)+"/ara.php&ara="+fc_(ara));
     
     
}

function yorum_yap()
{
   var yazan=document.getElementById("yazan").value;
    var cevap=document.getElementById("cevap").value;
      var kno=document.getElementById("kno").value;
    JXP(1,"kaydet","islem.php","islem=yorum_ekle&yazan="+fc_(yazan)+"&cevap="+fc_(cevap)+"&kno="+fc_(kno));

}

function div_ortala(div,g,y)
{
 var genislik = window.screen.width;
var yukseklik = window.screen.height;


x1=g/2;
x2=genislik/2;
x=x2-x1;

y1=y/2;
y2=yukseklik/2;
y=y2-y1;

div.style.top=y;
div.style.left=x;

  karart.style.width=genislik; 
  karart.style.height=yukseklik; 
}

function orta_pencere_ac(adres,veri,g,y)
{
  var g=g||300;
 var y=y||150;

  div_ortala(orta_pencere,g,y);
  orta_pencere.style.width=g; 
  orta_pencere.style.height=y; 
  document.body.style.overflowY='hidden'
 karart.style.visibility="visible"; 
orta_pencere.style.visibility="visible"; 
JXG(1,"orta_pencere","sayfa.php","s="+adres+"&"+veri);
}

function orta_pencere_kapat()
{

 karart.style.visibility="hidden"; 
orta_pencere.style.visibility="hidden"; 

}



