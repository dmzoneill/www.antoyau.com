<?php

switch($sub){

default:
print "<table bgcolor=#000000 width=\"600\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">";
print "<tr>";
print "<td width=100% valign=top align=left>";
print "<table bgcolor=#ffffff width=\"600\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">";
print "<tr>";
print "<td width=100% bgcolor=#ffffff valign=top align=left><center>";

$sql = $stream->do_query("select * from anto_lyrics order by songorder asc","array");

for($i=0;$i<count($sql);$i++){
$tmp = $sql[$i];
$id = $tmp[1];
$name = $tmp[1];
$oldlyrics = $tmp[5];   

//if($oldlyrics=="0"){
//continue;
//}

print "<a href='#$id'> $name </a> &nbsp;  $add\n";
if($i%4>0){
$add = "";
}
else {
$add = "<br>";
}
}
	

print "</center></td></tr></table></td></tr></table>\n\n";


$sql = $stream->do_query("select * from anto_lyrics order by songorder asc","array");


for($i=0;$i<count($sql);$i++){

$tmp = $sql[$i];
$id = $tmp[1];
$name = $tmp[1];
$contents = nl2br($tmp[2]);            
$download = $tmp[4];   
$oldlyrics = $tmp[5];   

//if($oldlyrics=="0"){
//continue;
//}

if($i%2>0){
$bgcolor = "#fefefe";
}
else {
$bgcolor = "#efefef";
}


if(strlen($download)>7){
$download = " | <a href='$download'> Download </a>";
}
else {
$download = "";
}


print "<br>: $name : </a><a name='#$id'>&nbsp;</a>$download<br>\n";
print "<hr>";
print "<table bgcolor=#000000 width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\">";
print "<tr>";
print "<td width=100% valign=top align=left>";
print "<table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">";
print "<tr>";
print "<td width=100% bgcolor='$bgcolor' valign=top align=left>$contents</td>";
print "</tr></table></td></tr></table>\n\n";


}
break;



case "player":
?>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  width="400" height="400" id="mp3player"	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" ><param name="movie" value="mp3player.swf?config=includes/config_1.xml&file=includes/php_readdir_sample.php" /><param name="allowScriptAccess" value="always"><embed src="mp3player.swf?config=includes/config.xml&file=includes/php_readdir_sample.php" allowScriptAccess="always" width="400" height="400" name="mp3player"	type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object><br /><br />
<?php
break;


case "notes":
break;

}


?>