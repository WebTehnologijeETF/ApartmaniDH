function showmore(ref,bonus){	
var tekst=ref.innerHTML;
if(tekst=="Read more..."){
	document.getElementById(bonus).style.display="inline";
	ref.innerHTML="Read less.";
}
else {
	document.getElementById(bonus).style.display="none";
	ref.innerHTML="Read more...";
}
}


function showMenu(){
	var submeni=document.getElementById("menu").children[0];
    var submeni1=document.getElementById("menu").children[1];      
	submeni.style.display="block";
	submeni1.style.display="block";
   document.getElementById("menu").style.display="block";
   document.getElementById("menu").style.clear="both";
    
 }
 function hideMenu(){
   document.getElementById("menu").style.display="none";
 }