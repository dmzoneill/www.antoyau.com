// JavaScript Document


function loadurl(dest) { 
try { 
xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP"); 
} 
catch (e) 
{ 
document.getElementById("search").innerHTML = "There was a problem fetching the search results"; 
} 
xmlhttp.onreadystatechange = triggeredoutput; 

xmlhttp.open("GET", dest, true); 
xmlhttp.send(null); 
} 



function triggeredoutput() { 
if ((xmlhttp.readyState == 1)) { 
document.getElementById("status").innerHTML = "Calling the page......."; 
} 
if ((xmlhttp.readyState == 2)) { 
document.getElementById("status").innerHTML = "Page loaded........"; 
} 
if ((xmlhttp.readyState == 3)) { 
document.getElementById("status").innerHTML = "Interacting with the server......"; 
} 
if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) { 
	document.getElementById("status").innerHTML = "Page Load Complete"; 
	document.getElementById("output").innerHTML = xmlhttp.responseText; 
} 
}



window.onload = function(){
var children = document.getElementsByTagName('div');
for(var i=0; child=children[i]; i++)
if (child.className.indexOf('round')>-1)
child.innerHTML = '<b class="t"><b class="r"></b></b><div class="c"><b class="br"></b>'
+child.innerHTML+'<b class="br"></b></div><b class="b"><b class="r"><!----></b></b>';
}


function slideshow(dest) { 
try { 
xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP"); 
} 
catch (e) 
{ 
document.getElementById("status").innerHTML = "There was a problem fetching the page"; 
} 
xmlhttp.onreadystatechange = updateslide; 
xmlhttp.open("GET", dest, true); 
xmlhttp.send(null); 
} 


function updateslide() { 
if ((xmlhttp.readyState == 1)) { 
document.getElementById("status").innerHTML = "Calling the page......."; 
} 
if ((xmlhttp.readyState == 2)) { 
document.getElementById("status").innerHTML = "Page loaded........"; 
} 
if ((xmlhttp.readyState == 3)) { 
document.getElementById("status").innerHTML = "Interacting with the server......"; 
} 
if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) { 
	document.getElementById("status").innerHTML = "Page Load Complete"; 
	document.getElementById("slideshow").innerHTML = xmlhttp.responseText; 
} 
}
