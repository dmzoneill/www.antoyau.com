<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="ajax.js"></script>  
<script type="text/javascript" src="simpletreemenu.js"></script>
<link rel="stylesheet" type="text/css" href="simpletree.css">
</head>
<body style="font-family:verdana; background:#223344; color:#cfcfcf;">
<center>


<table background="images/logo.jpg" cellpadding=1 cellspacing=0 height=80 width=1100>
<tr><td valign=top align=left colspan=2></td><td align="right"></td>
</tr>
</table>
<table cellpadding=0 cellspacing=0 width=1100>
<tr><td colspan=3><hr /></td></tr><tr>
<td class='tdindent' colspan=3>
<a href="javascript:switchid('a1');">Page Status</a> | 
<a href="javascript:switchid('a2');">Image Gallery thumbnails</a> | 
<a href="javascript:switchid('a3');">Shoutbox</a> | 
<a href="javascript:switchid('mp3player');">Listen to anto</a>
</td>
</tr>
</table><table cellpadding=5 cellspacing=0 width=1100><tr>
<td valign=top align=left width=250>
<div id='a1' style="width:150;" class="round myClassName">
Page Load Status : <br /><div id="status"></div><br /></div>
<table width="253" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height=25 background="images/mh.gif">&nbsp;</td>
  </tr>
  <tr>
    <td background="images/mm.gif">
	
	<?php include("menu.php"); ?>
	
	
	</td>
  </tr>
   
  <tr height=28>
    <td background="images/mf.gif">&nbsp;</td>
  </tr>
</table>
<table width="253" border="0" cellspacing="0" cellpadding="15">
 <tr>
    <td>
	Some shit : 
	<hr />
	dfsfdsf<br />
	dfsdfds<br />
	dfdsfds<br />
	
	</td>
  </tr>
 </table> 
</td><td class=1 valign=top width=600>

<div style="width:600px;background-color:#223344;" class="round myClassName"><img src='images/trans.gif' width=565 height=2 border=0 /><div style="width:540;word-wrap:break-word;" id="output" align=left>

<br />
<b><font size='5'>C</font></b>hinese/Irish, Singer/Songwriter,Oxfam Campaigner, Anto Yau (King Hei) was born in the <br /> early 80's in Ireland's Big Apple, Dublin, after his parents immigrated from Hong Kong. 
<br />
He spent most of his childhood playing football with friends behind the Walkinstown <br />Church Green and enjoyed watching the World Cup 90's. 
<br />
He picked up his first guitar at the age of 12, throughout school he pretty 
<br />
much slept right through classes, woke up and wrote songs. 
<br />
Since then Anto has been living in Cork making demo's and mixtapes 
<br />

wether at studios or at home. 
<br />
<br />
In the Winter of 2004 he released an underground compilation titled 'the family tree' <br />which consisted of raw acoustic tracks from singer/songwriters he got to know from touring <br />around ireland. 
<br />
500 copies were pressed and split between all artists to sell at their shows. 
<br />
<br />
In 2005 the (no artwork) 'lovers EP' was anonymously put out for free online. 
<br />
It was available since the 100,000 website hit. 
<br />
Then when he came back from a (wholala.org) showcase gig in Hong Kong later that year, 
<br />
he released the 'Surround EP' online for free downloadable, changed direction and 
<br />
featured on a track called 'shooting stars' with Cork Rapper/Procucer GMC. 

<br />
His self-produced debut Album 'diggin' a hole', peaked and reached number 37 in the IRMA <br />Top 100 albums chart in the first week of the release in April 2006.... the single is tba. 
<br />
He's also working with is Irish Metor Nominee Dublin Rapper 'Collie'. 
<br />
'I want to work with with these guys and people i can connect with, it makes sence to do tracks <br />with them cos I'm born in Dublin and I've pretty much adapted to what Cork is all about,<br /> it's an Irish thing really'. 
<br />
The demo is nearly done with Collie, its called 'Cool Water'. 
<br />
A live solo acoustic version of the song is featured on a Irish 2006 compilation called <br />'Magic Nights in the Lobby Bar ', so keep an ear out.  
<br />
Stay informed and keep in touch.
<br /></div>

<hr>
<table cellpadding="0" cellspacing="0" border="0" width="565">
<tr><td align=right>
<a href="javascript:switchid('a1');">Contact</a> | 
<a href="javascript:switchid('a2');">Links</a> | 
<a href="javascript:switchid('a3');">Copyright</a> | 
<a href="javascript:switchid('mp3player');">Disclaimer</a>
</td></tr></table>

</div>


</td>
<td size=250 valign=top>

<div id="mp3player"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  width="220" height="76" id="mp3player"	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" ><param name="movie" value="mp3player.swf?config=includes/config_1.xml&file=includes/php_readdir_sample.php" /><param name="allowScriptAccess" value="always"><embed src="mp3player.swf?config=includes/config_1.xml&file=includes/php_readdir_sample.php" allowScriptAccess="always" width="220" height="76" name="mp3player"	type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object><br /><br /></div>

<div id='a2' style="width:150;" class="round myClassName">
<div id="slideshow">
		<?php include("includes/slideshow.php"); ?>
		</div>
</div>

<div id='a3'  class="round myClassName">Shout Box <br />dsfdsfdsfsdfdsf dsfdsfdsf dfdsfsfdsf dsf sdf dsf dsf sd</div>

</td>
</tr></table>



<script type="text/javascript">

//ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))

ddtreemenu.createTree("treemenu2", true);
setTimeout(hideallids(),8000);
switchid('a3');

</script>


</body>
</html>
