<?php
$num = $stream->do_query("select num from anto_counter where id='1'","one");
if(!$pagename){
$newnum = $num + 1;
$update = $stream->do_query("update anto_counter set num='$newnum' where id='1'","one");
$num = $newnum;
}
$numno = strlen($num);
$start = $numno - 3;
$rest = substr("$num", $start, $numno);
$num = explode("$rest",$num);

print "$num[0],$rest";
?>