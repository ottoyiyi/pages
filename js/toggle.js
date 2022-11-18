const	button=document.getElementById("toggle");
const 	body=document.querySelector("body");
const	img=document.getElementById("img2")
var changeimg=false;

button.onclick=function(){
	button.classList.toggle('dark');
	body.classList.toggle('dark');
	
	if(changeimg){
		img.src="img/sun.ico";
		changeimg=false;
	}else{
		img.src="img/moon.ico";
		changeimg=true;
	}
}
