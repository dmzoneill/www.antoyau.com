<?php

if($osid){
$sql = $stream->do_query("update googlemarkers set ospoint='$ospoint', details='$osmsg' where id='$osid'","one");
print "<h5>Updated Os Point</h5><hr><br><br>";
}

if($add){
$sql = $stream->do_query("insert into googlemarkers values('','$point','$details','0')","one");
print "<h5>Added Os Point</h5><hr><br><br>";
}

if($del){
$sql = $stream->do_query("delete from googlemarkers where id='$del'","one");
print "<h5>Deleted Os Point</h5><hr><br><br>";
}

print "<a href='images/map.gif'><h2>how to get an ospoint</h2></a><br><br>";

print "<h5>Add Ordinance Survey point</h5><hr><br>";

print "<form action='admin.php?control=venue&add=true' method=post><table width=100%><tr><td>
OS Point : <input type='text' value='$point' name=point>switch then numbers around, notice the ospoint order<br>
Message : <textarea class=small name='details'>$details</textarea></td></tr></table><input type=submit value='Change'></form><br><br>";	


print "<h5>Edit Ordinance Survey point</h5><hr><br>";

$sql = $stream->do_query("select * from googlemarkers","array");

$r=0;
$t=0;
$p=0;
for($i=0;$i<count($sql);$i++){

// id   	  ospoint   	  details   	  opt


	$tmp = $sql[$i];
	$id = $tmp[0];
	$point = $tmp[1];
	$details = $tmp[2];    
	$opt = $tmp[3];    
	
print "<form action='admin.php?control=venue&osid=$id' method=post><table width=100%><tr><td>
OS Point : <input type='text' value='$point' name=ospoint>switch then numbers around, notice the ospoint order<br>
Message : <textarea class=small name='osmsg'>$details</textarea></td></tr></table><input type=submit value='Change'><input type=reset value='Reset'><br><br> <a href='admin.php?control=venue&del=$id'>Delete this point</a> ||| <a href='http://www.antoyau.com/index.php?pagename=tour' target='_blank'>View Venue Map</a></form><br>";	
	}
	?>