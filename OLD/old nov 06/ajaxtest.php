<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php include("connect.php"); ?>
<script language=javascript language="javascript">
function loadurl(dest) { 
try { 
// Moz supports XMLHttpRequest. IE uses ActiveX.  
// browser detction is bad. object detection works for any browser 
xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP"); 
} 
catch (e) 
{ 
// browser doesn't support ajax. handle however you want  
} 
// the xmlhttp object triggers an event everytime the status changes  
// triggered() function handles the events  
xmlhttp.onreadystatechange = triggered; 
// open takes in the HTTP method and url.  
xmlhttp.open("GET", dest); 
// send the request. if this is a POST request we would have  
// sent post variables: send("name=aleem&gender=male)  
// Moz is fine with just send(); but  
// IE expects a value here, hence we do send(null);  
xmlhttp.send(null); 
} 
function triggered() { 
// if the readyState code is 4 (Completed)  
// and http status is 200 (OK) we go ahead and get the responseText  
// other readyState codes:  
// 0=Uninitialised 1=Loading 2=Loaded 3=Interactive  
if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) { 
// xmlhttp.responseText object contains the response.  
document.getElementById("output").innerHTML = xmlhttp.responseText; 
} 
}
</script>  
</head>

<body>

<div id="output" onclick="loadurl('gigs.php')">click here to load my resume into this div</div>
</body>
</html>
