<?php
include("connect.php");
if(stristr(getenv('SCRIPT_URI'),'index.php')){
$num = count($stream->do_query("select * from anto_lastupdate","array"));
$rdate = $stream->do_query("select lup from anto_lastupdate where id='$num'","one");
$today = date("F j, Y",$rdate);
print "Last Updated<BR>$today";
}
if(stristr(getenv('SCRIPT_URI'),'admin.php')){
$num = count($stream->do_query("select * from anto_lastupdate","array"));
$rdate = $stream->do_query("select lup from anto_lastupdate where id='$num'","one");
$today = date("F j, Y",$rdate);
print "Last Updated<BR>$today";
}


?>