<?php

$control = $_GET['control'];
$editpage = $_GET['editpage'];
$newpage = $_POST['newpage'];
$content = $_POST['content'];



if($editpage){
$sql = $stream->do_query("UPDATE anto_journal set month='$newpage', contents='$content' where id='$editpage'","one");
print "Journal Entry Edited!";
}
else {
print "<table cellpadding=2 cellspacing=0 border=0 width=600>";
		print "<tr><td colspan=17 align=left><h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6></td></tr>";
		print "<tr><td align=left>";

$sql = $stream->do_query("SELECT * FROM anto_journal","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$name = $tmp[1];
$content = $tmp[2];
print "<h5 onClick=\"expandcontent(this, 'sc$crap')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$name [click to expand]</h5><div id=\"sc$crap\" class=\"switchcontent\">";
print "<br><form action='admin.php?control=editjournal&editpage=$id' method=post name=journal$crap>";
print "Month : <br><input  type=text name=newpage value='$name'><br>";
print "Journal Entry : <br><textarea cols=70 rows=12 name=content>$content</textarea><br>";
print "<input  type=submit value='Edit Journal Entry'> <input type=reset><br></form>";
$f_n = "journal$crap";
$f_b = "content";
include("js.php");
print "</div>";
}
print "</td></tr></table>";
}

?>