
function kayit_liste(no,kayit_li_durum)
{
 
  if(kayit_li_durum==1){
    
document.getElementById("kayit_li_"+no).style.display="compact";
document.getElementById("kayit_li_"+no).style.display="block";

    document.getElementById("kayit_ok_"+no).style.display="compact";
  document.getElementById("kayit_ok_"+no).style.display="block";
  }
else{
 document.getElementById("kayit_li_"+no).style.display="none";
  document.getElementById("kayit_ok_"+no).style.display="none"; 
 
}
}


function kayit_li(no,kayit_li_durum)
{
setTimeout("kayit_liste("+no+","+kayit_li_durum+")",300); 
}

