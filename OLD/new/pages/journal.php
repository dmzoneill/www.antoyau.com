<?php


print "<br><table bgcolor=#000000 width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">";
print "<tr>";
print "<td width=100% valign=top align=left class=maintext>";
print "<table bgcolor=#ffffff width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">";
print "<tr>";
print "<td width=100% valign=top align=left class=maintext><center>";

?>

<script language=javascript>

function gothere(url){

document.location.href= "http://www.antoyau.com/index.php?pagename=journal#" + url;

}


</script>


<?php




$sql = $stream->do_query("select * from anto_journal order by id desc","array");
print "<form name=fed><select name=url>";
for($i=0;$i<count($sql);$i++){

$tmp = $sql[$i];
$id = $tmp[0];
$month = $tmp[1];
$contents = $tmp[2];
print "<option value='$id'>$month </option>";
}

print "</select><input type=button onclick=\"javascript:gothere(document.fed.url.value);\" value='Jump to'></form>";




$sql = $stream->do_query("select * from anto_journal order by id desc","array");

for($i=0;$i<count($sql);$i++){

$tmp = $sql[$i];
$id = $tmp[0];
$month = $tmp[1];
$contents = $tmp[2]; 
//if($i%4>0){
//$add = "";
//}
//else {
//$add = "<br>";
//}
//print "&nbsp; $add <a href='#$id'> $month </a> |\n";
}
	

print "</center></td></tr></table></td></tr></table>\n\n";






$sql = $stream->do_query("select * from anto_journal order by id desc","array");

$k=0;
for($i=0;$i<count($sql);$i++){


$tmp = $sql[$i];
$id = $tmp[0];
$month = $tmp[1];
$contents = $tmp[2]; 

print "<br><table bgcolor=#000000 width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
print "<tr>";
print "<td width=100% valign=top align=left class=maintext>";
print "<table bgcolor=#ffffff width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">";
print "<tr>";
print "<td width=100% valign=top align=left class=maintext>";
print "<a name='$id'>&nbsp;</a> : ";

	print "<font class='journalmon'>$month</font> :\n";
print "</td></tr></table></td></tr></table><br>\n\n";


print "<table width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">";
print "<tr>";
print "
<td width=100% valign=top align=left class=maintext>$contents</td>
";
print "</tr> </table>\n\n";


}



?>