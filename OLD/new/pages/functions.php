<?php

function getpage($page){
global $stream;
$page = strtolower($page);
$page = rawurldecode($stream->do_query("select content from anto_pages where name='$page'","one"));
print stripslashes(nl2br($page));

}





function top_header(){
global $stream,$pagename,$mintage,$mintage1,$HTTP_SERVER_VARS;


print "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<title>";

print "anto yau - $pagename"; 

print "</title>
<META HTTP-EQUIV=\"Page-Enter\" content=\"revealTrans(Duration=1,Transition=12)\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">";
?>

<script src="http://maps.google.com/maps?file=api&v=1&key=ABQIAAAAJYmahT3LYkcu_m85ciNSVRRbrYzScX1k_rE1ongYXeCmjBOlxxRrwJ_7_I-WQdiOglZCgesOa6kUjg" type="text/javascript"></script>

<?php
include("css.php");

print "</head><body bgcolor='#ffffff'><center>
<script type=\"text/javascript\" src=\"http://www.makepovertyhistory.org/whiteband_small_right.js\">
</script><noscript><a href=\"http://www.makepovertyhistory.org/\">
http://www.makepovertyhistory.org</a></noscript>

<br><br><br>
<table width=\"902\" bgcolor='#ffffff' border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td bgcolor='#ffffff' width='30%' align=left>
	<font class='headerlarge'>a</font><font class='headersmall'>ntoyau</font><font class='headersmallorange'>.</font><font class='headersmall'>com</font>
	</td><td bgcolor='#ffffff' width='70%' align=right>";
	if(substr($HTTP_SERVER_VARS['HTTP_USER_AGENT'],0,3)!="W3C"){
	include("nextgig.php"); 
	}
	
	print "</td></tr></table>";
}



function bottom_footer(){

print "

<table width=\"800\" bgcolor='#ffffff' border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr><td><center><br>
    <img src='media/css-wide.png' alt='css' border=0 /> <img src='media/html401-wide.png'  alt='css' border=0 /> <img src='media/firefox-wide.png' alt='css' border=0 /> <img src='media/mozilla-wide.png' alt='css' border=0 /> <img src='media/opera-wide.png' alt='css' border=0 /> <img src='media/explorer.png' alt='css' border=0 /> <img src='media/safari.gif' alt='css' border=0 /> <img src='media/php.gif' alt='css' border=0 /> <img src='media/linuxpenguin.png' alt='css' border=0 />
  
  </td></tr><tr>
    <td bgcolor='#ffffff' width='100%' align=left>
	<center>Designed By David O Neill<br>©antoyaumusic<br></center>
	</td>
  </tr>
</table>

</center>


</body>
</html>

";


}

