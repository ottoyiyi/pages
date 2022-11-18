const pageWidth  = document.documentElement.scrollWidth;
var windowWidth = window.innerWidth;
if(pageWidth< 900 ||windowWidth<900){
	window.location.href='air quality monitor.html';
}else{
	window.location.href='air quality monitor pc.html';
}
