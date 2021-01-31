function embed_gizle()
{
  var i=0;
  var embeds = document.getElementsByTagName('embed');
  for (i = 0; i < embeds.length; i++) {
        embed = embeds[i];
  embed.style.display="none";
    } 
    
      var i=0;
  var iframes = document.getElementsByTagName('iframe');
  for (i = 0; i < iframes.length; i++) {
        iframe = iframes[i];
  iframe.style.display="none";
    } 
    
    
}


function giris_pencere_ac(adres)
{
  


var g=300;
var y=100;
var y_off=window.pageYOffset;

div_ortala(orta_pencere,g,y);

if(y_off!=0)
 orta_pencere.style.top=y_off;
  karart.style.top=y_off;
  
  orta_pencere.style.width=g; 
 orta_pencere.style.height=y; 
 
  document.body.style.overflowY='hidden'

 embed_gizle();
 karart.style.display="compact"; 
orta_pencere.style.display="compact"; 

JXG(1,"orta_pencere","sayfa.php","s="+adres+"&sayfa=gir");
}

function giris_pencere_kapat()
{

 karart.style.display="none";  
orta_pencere.style.display="none";  

}

function giris_ip()
{
  giris_pencere_kapat();
  location='islem.php?islem=giris_ip';
}

 
