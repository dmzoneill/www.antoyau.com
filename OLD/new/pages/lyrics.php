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
<iframe src="http://www.antoyau.com/downloads/" name="music player" width="300" marginwidth="0" height="200" marginheight="0" scrolling="no" frameborder="0"></iframe>
<?php
break;


case "notes":
break;

}


?>