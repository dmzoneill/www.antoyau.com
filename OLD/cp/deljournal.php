<?php

$control = $_GET['control'];
$delpage = $_GET['delpage'];

if($delpage){
$sql = $stream->do_query("DELETE FROM anto_journal where id='$delpage'","one");
print "Journal Entry Deleted!";
}
else {
$sql = $stream->do_query("SELECT * FROM anto_journal","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$name = $tmp[1];
$content = $tmp[2];
print "<table width=600><tr><td><a href='admin.php?control=deljournal&delpage=$id'>$name</a></td></tr></table>";
}
}


?>