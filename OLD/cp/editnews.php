<?php

$control = $_GET['control'];
$news_title = $_POST['news_title'];
$news_message = $_POST['news_message'];
$id = $_GET['id'];


if($id){
$sql = $stream->do_query("update news_data set title='$news_title', post='$news_message' where id='$id'","one");
print "Edited";
}
else {
$sql = $stream->do_query("select * from news_data order by id desc","array");
print "<table cellpadding=2 cellspacing=0 border=0 width=600>";
		print "<tr><td colspan=17 align=left><h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6></td></tr>";
		print "<tr><td align=left>";
for($i=0;$i<count($sql);$i++){

	$oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$title = substr("$tmp[1]",0,50);
    $image = $tmp[2];
	$poster = $tmp[3];
	$dated = $tmp[4]; 
	$post = $tmp[5];
	print "<h5 onClick=\"expandcontent(this, 'sc$i')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$title [click to expand]</h5><div id=\"sc$i\" class=\"switchcontent\">";

print "<form name='news$i' action=admin.php?control=editnews&id=$id method=post>";
print "News Title<br>";
print "<input size=100 type=text value='$title' name='news_title'><br><br>";
print "News Message<br>";
print "<textarea cols=50 rows=8 name='news_message'>$post</textarea><br><br>";
print "<input type=submit name=news value='Edit News'> <input type=reset value='Reset'><br><br>";

print "</form>";
$f_n = "news$i";
$f_b = "news_message";
include("js.php");

print "</div>";
}
print "</td></tr></table>";
}



?>