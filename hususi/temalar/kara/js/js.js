window.onload = function() {
  if (navigator.appVersion.indexOf("MSIE")!=-1) {
    var field = document.getElementsByTagName("input"); 
    for(var i = 0; i < field.length; i++) {
      if (field[i].type == "text" || field[i].type == "password") { 
        field[i].onfocus = function() { 
          this.className += " focus"; 
        };
        field[i].onblur = function() { 
          this.className = this.className.replace(/\bfocus\b/, ""); 
        };
      }; 
    }; 
field = null; 
  }; 
}; 


