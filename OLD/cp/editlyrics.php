<?php

$control = $_GET['control'];
$editpage = $_GET['editpage'];
$newpage = $_POST['newpage'];
$content = $_POST['content'];
$order = $_POST['order'];
$download = $_POST['download'];
$oldlyr = $_POST['oldlyr'];


if($editpage){
$sql = $stream->do_query("UPDATE anto_lyrics set name='$newpage', songorder='$order', download='$download', content='$content', oldlyrics='$oldlyr' where id='$editpage'","one");
print "Lyrics Edited!";
}
else {
$sql = $stream->do_query("SELECT * FROM anto_lyrics","array");

print "<table cellpadding=2 cellspacing=0 border=0 width=600>";
		print "<tr><td colspan=17 align=left><h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6></td></tr>";
		print "<tr><td align=left>";

for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$name = $tmp[1];
$content = $tmp[2];
$songorder = $tmp[3];
$download = $tmp[4];
$oldlyrics = $tmp[5];


	print "<h5 onClick=\"expandcontent(this, 'sc$crap')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$name [click to expand]</h5><div id=\"sc$crap\" class=\"switchcontent\">";


print "<br><form name='lyrics$crap' action='admin.php?control=editlyrics&editpage=$id' method=post>";
print "Name of Song : <br><input  type=text name=newpage value='$name'><br>";
print "Lyrics : <br><textarea cols=70 rows=15 name=content>$content</textarea><br>";
print "Order : <br><input  type=text name=order value='$songorder'><br>";
print "Download Mp3 : <br><input  type=text name=download value='$download'><br>";
print "OLD lyrics 0=old / 1=new : <br><input  type=text name=oldlyr value='$oldlyrics'><br>";

print "<input  type=submit value='Edit Lyrics'> <input type=reset value='Reset'><br><br></form>";
$f_n = "lyrics$crap";
$f_b = "content";
include("js.php");
print "</div>";
}
print "</td></tr></table>";
}

?>