// JavaScript Document

var ids=new Array('a1','a2','a3','mp3player');

function switchid(id){	
	//hideallids();
	showdiv(id);
}

function hideallids(){
	//loop through the array and hide each element by id
	for (var i=0;i<ids.length;i++){
		hidediv(ids[i]);
	}		  
}

function hidediv(id) {
	//safe function to hide an element with a specified id
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'none';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'none';
		}
		else { // IE 4
			document.all.id.style.display = 'none';
		}
	}
}

function showdiv(id) {
	//safe function to show an element with a specified id
		  
	if (document.getElementById) { // DOM3 = IE5, NS6
		if (document.getElementById(id).style.display=='none') {
			document.getElementById(id).style.display = 'block';
		}
		else {
			document.getElementById(id).style.display = 'none';
		}
	}
	else {
		if (document.layers) { // Netscape 4
			if (document.id.display = 'none'){
				document.id.display = 'block';
			}
			else {
				document.id.display = 'none';	
			}
		}
		else { // IE 4
			if(document.all.id.style.display == 'none'){
				document.all.id.style.display = 'block';
			}
			else {
				document.all.id.style.display = 'none';
			}
		}
	}
}

function loadurl(dest,div) { 
try { 
xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP"); 
} 
catch (e) 
{ 
document.getElementById("status").innerHTML = "There was a problem fetching the page"; 
} 
if(div=="image"){
xmlhttp.onreadystatechange = triggeredimage; 
}
else {
xmlhttp.onreadystatechange = triggeredoutput; 
}

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


function triggeredimage() { 
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
document.getElementById("image").innerHTML = xmlhttp.responseText + document.getElementById("image").innerHTML; 
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
