<?php

$control = $_GET['control'];
$delpage = $_GET['delpage'];
$editpage = $_GET['editpage'];
$content = $_POST['content'];

if($delpage){

$sql = $stream->do_query("DELETE from anto_pages where id='$delpage'","one");
print "Page deleted";
}

if($editpage){
$content = rawurlencode($content);
$sql = $stream->do_query("UPDATE anto_pages set content='$content' where id='$editpage'","one");
print "Page Edited!";
}
else {
	print "<table cellpadding=2 cellspacing=0 border=0 width=600>";
		print "<tr><td colspan=17 align=left><h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6></td></tr>";
		print "<tr><td align=left>";
$sql = $stream->do_query("SELECT * FROM anto_pages","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$name = $tmp[1];
$content = stripslashes(rawurldecode($tmp[2]));
print "<h5 onClick=\"expandcontent(this, 'sc$crap')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$name [click to expand]</h5><div id=\"sc$crap\" class=\"switchcontent\">";
print "<br><form action='admin.php?control=editpage&editpage=$id' name='new$crap' method=post>";
print "Name : $name<br>";
print "Content :<br>";
print "<textarea cols=70 rows=15 name=content>$content</textarea><br>";
print "<input  type=submit value='edit'> <input type=reset value='Reset'>";
print "</form><br>";
$f_n = "new$crap";
$f_b = "content";
include("js.php");
print "<br><a href='admin.php?control=editpage&delpage=$id'>DELETE THIS PAGE ($name)</a><br><br><hr></div>";
}
print "</td></tr></table>";
}

?>