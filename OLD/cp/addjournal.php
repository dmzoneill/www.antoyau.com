<?php

$newpage = $_POST['newpage'];

if($newpage){

$sql = $stream->do_query("INSERT INTO anto_journal VALUES('','$newpage','$content')","one");

print "Journal Entry Added!";

}
else {

print "<table width=600><tr><td><form name=news action='admin.php?control=addjournal'  method=post>";
print "Date : <br><input  type=text name=newpage value='March 33%4'><br>";
print "Journal Entry : <br><textarea cols=40 rows=6 name=content></textarea><br>";
print "<input  type=submit value='Add Journal Entry'>";
print "</form></td></tr></table>";
$f_n = "news";
$f_b = "content";
include("js.php");

}


?>