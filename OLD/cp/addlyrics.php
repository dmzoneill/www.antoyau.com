<?php

$newpage = $_POST['newpage'];
$content = $_POST['content'];
$order = $_POST['order'];
$download = $_POST['download'];



if($newpage){

$sql = $stream->do_query("INSERT INTO anto_lyrics VALUES('','$newpage','$content','$order','$download','0')","one");

print "Lyrics Added!";

}
else {

print "<table width=600><tr><td align=left><form name=news action='admin.php?control=addlyrics'  method=post>";
print "Name of Song : <br><input  type=text name=newpage><br>";
print "Lyrics : <br><textarea cols=40 rows=6 name=content></textarea><br>";
print "Order : <br><input  type=text name=order><br>";
print "Download Mp3 : <br><input  type=text name=download><br>";
print "<input  type=submit value='Add New Page'>";
print "</form></td></tr></table>";
$f_n = "news";
$f_b = "content";
include("js.php");

}






?>