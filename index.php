<?php

include("header.php"); 

?>

<table height=60 background="media/Image6.jpg" width="802" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table><table width="800" bgcolor='#000000' border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>
      	  
	  
	  
	  <table width="800" bgcolor='#223344' border="0" cellspacing="0" cellpadding="0" background="media/Image2.jpg">
	  <tr><td width=85 valign=middle align=left>&nbsp;Page Status :</td><td width=515 align=left><div id="status"></div></td>
	   <td width=200 valign=top align=left><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  width="200" height="17" id="mp3player"	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" ><param name="movie" value="mp3player.swf?config=includes/config_1.xml&file=includes/php_readdir_sample.php" /><param name="allowScriptAccess" value="always"><embed src="mp3player.swf?config=includes/config_1.xml&file=includes/php_readdir_sample.php" allowScriptAccess="always" width="200" height="17" name="mp3player"	type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object></td>
	  </tr>
	  </table>
	    <table width="800" bgcolor='#223344' height=17 border="0" cellspacing="0" cellpadding="0" background="media/Image2.jpg">
	  <tr> <td width=800 valign="middle" align="left">&nbsp;<a href="javascript:switchid('menu');">Main Menu</a> | 
	  <a href="javascript:switchid('a2');">Image Gallery</a> | 
		<a href="javascript:switchid('a3');">Shoutbox</a> | 
		<a href="javascript:switchid('a4');">Mailing list</a>
	  &nbsp;
	  </td> 
	  </tr>
	  </table>
	  
	  
	  
	  <table width="800" bgcolor='#efefef' border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td background='media/Image5.jpg' width=200 valign=top align=left>
		  <div id='menu' style="width:190;"><?php include("menu.php"); ?><br /></div>
		  <div id='a3' style="width:190;"><?php include("shoutbox.php"); ?><br /></div><br />
		  <div id='a4' style="width:190;"><?php include("listform.php"); ?></div><br />
		  </td>
          <td width=600 valign=top align=left>
<table width="600" bgcolor='#000000' border="0" cellspacing="1" cellpadding="0"><tr><td>
	<table width="600" bgcolor='#efefef' border="0" cellspacing="0" cellpadding="0"><tr><td>
		<div id='output' class=main></div>
		<?php if($player){
		$sub = "player";
		include("lyrics.php");
		}
		else {
		$z=1; include("pages.php");
		}
		?>
	</td></tr></table>
</td></tr></table>		  
		  </td>
        </tr>
	  </table>
	  
		  
	  <table background="media/Image2.jpg" width="800" bgcolor='#223344' border="0" cellspacing="0" cellpadding="0">
	  <tr>
	  <td width=600 valign=top align=left></td>
	  <td width=200 valign=top align=left>&nbsp;</td>
	  </tr>
	  </table>
	  
	  
	</td>
  </tr>
</table>


<?php include("footer.php"); ?>
