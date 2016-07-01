var tm=null;  
function newsScroll()
{   
  if(document.getElementById("scrollimg").parentNode.scrollLeft!=(document.getElementById("scrollimg").clientWidth/2))   
    document.getElementById("scrollimg").parentNode.scrollLeft++;   
  else   
    document.getElementById("scrollimg").parentNode.scrollLeft=0   
}   
 
function stop()   
{   
  clearInterval(tm)   
}   
 
function start()   
{   
  tm=setInterval('newsScroll()',30)     
}
document.getElementById("simg1").innerHTML=document.getElementById("simg").innerHTML   
tm=setInterval('newsScroll()',30)   