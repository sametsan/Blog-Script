function kayit_sil(no)
{
  alert("Bu kaydı silmek istediğinize emin misiniz?");
  location="kayitlar_islem.php?islem=sil&no="+no;
}


function kayit_resimler(goster)
{
    var resimler=document.getElementById("resimler"); 
      
    if(goster==1)
    resimler.style.visibility="visible";
    else{
          resimler.style.visibility="hidden";
    }
}



function kayit_resim_sec(resim_url)
{
    var resimler=document.getElementById("resimler"); 
     var resim=document.getElementById("resim"); 
     
      var resim_adres=document.getElementById("resim_adres").value=resim_url; 

      resim.innerHTML="<img src='../"+resim_url+"' width=98%>";
       resimler.style.visibility="hidden";
    
}


function resim_yukle(dizin)
{
       var resim=document.getElementById("resim").value; 
  JXP(1,'album','kayitlar_kayit_album.php','islem=resim_yukle&dizin='+fc_(dizin)+'&resim='+fc_(resim));
}


function liste(durum)
{
  if(durum==1)
 document.getElementById("kayitlar").style.display="compact"; 
 else
    document.getElementById("kayitlar").style.display="none"; 
  
}

function liste_tip(durum)
{
  if(durum==1)
 document.getElementById("kayitlar_tip").style.display="compact"; 
 else
    document.getElementById("kayitlar_tip").style.display="none"; 
  
}

