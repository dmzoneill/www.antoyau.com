<?php

print "<h5>Shout Box Messages</h5><hr><br>";

if($shout){

$s_name = ucwords(strtolower($s_name));
$s_name = rawurlencode(stripslashes(htmlspecialchars($s_name)));
$s_email = rawurlencode(stripslashes(htmlspecialchars($s_email)));
$s_msg = rawurlencode(stripslashes(htmlspecialchars($s_msg)));

$sql = $stream->do_query("update anto_shoutbox set name='$s_name', email='$s_email', msg='$s_msg' where id='$shout'","one");

print "<h5>Edited</h5><hr><br>";
if($delete){
	$sql = $stream->do_query("DELETE from anto_shoutbox where id='$shout'","one");
	print "<h5>Deleted</h5><hr><br>";
}
}


$sqlt = $stream->do_query("select * from anto_shoutbox order by id DESC","array");
  
print "<table width='80%' cellpadding='2' cellspacing='0' border='0'>";
	for($t=0;$t<count($sqlt);$t++){
	$tmp = $sqlt[$t];
	$id = $tmp[0];
	$name = rawurldecode($tmp[1]);
	$email = rawurldecode($tmp[2]);
	$msg = rawurldecode($tmp[3]);
	if($t>8){
	break;
	}
	

print "<form action='admin.php?control=shoutbox&shout=$id' method=post><tr><td><b>Posted by : </td><td><input type=text name=s_name value='$name'></td></tr>";
print "<tr><td>Email addy : </td><td><input type=text name=s_email value='$email'></b></td></tr>";
print "<tr><td>Message : </td><td><textarea class=small name=s_msg>$msg</textarea><br>Delete : <input type=checkbox name=delete><br><br><input type=submit value='Edit / Delete'> <input type=reset value='reset'></td></tr><tr><td colspan=2></form><hr></td></tr>";


}

print "</table>";

?>