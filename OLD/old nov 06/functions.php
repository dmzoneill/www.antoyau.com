<?php






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

include("css.php");

print "<script type=\"text/javascript\" src=\"ajax.js\"></script> <script type=\"text/javascript\" src=\"http://www.makepovertyhistory.org/whiteband_small_right.js\">
</script><noscript><a href=\"http://www.makepovertyhistory.org/\">
http://www.makepovertyhistory.org</a></noscript> </head><body bgcolor='#223344' onLoad=\"hideallids();\">
<center>
<table width=\"1024\" bgcolor='#223344' border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td bgcolor='#223344' width='30%' align=left>
	</td><td bgcolor='#223344' width='70%' valign=bottom align=right></td></tr></table>";
}



function bottom_footer(){

print "

<table width=\"974\" bgcolor='#223344' border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
 <tr>
    <td bgcolor='#223344' width='100%' align=left>
	<center>Designed By David O Neill<br>©antoyaumusic<br></center>
	</td>
  </tr>
</table>

</center>

</body>
</html>

";


}

