<?php


if($deleteid){
$sql = $stream->do_query("delete from anto_gigs where id='$deleteid'","one");
print "Deleted";
}
else {

?>	<table width="600" border="0" cellspacing="2" cellpadding="3">

              <tr> 
	            <td  width="120"><center><strong>Date</strong></td>
                <td  width="100"><center><strong>Name</strong></td>
                <td  width="80"><center><strong>location</strong></td>
				<td  width="80"><center><strong>Venue</strong></td>
				<td  width="50"><center><strong>Time</strong></td>
				<td  width="50"><center><strong>Price</strong></td>
				<td  width="*"><center><strong>Notes</strong></td>
              </tr>

<?php

$sql = $stream->do_query("select * from anto_gigs order by dated desc","array");


for($i=0;$i<count($sql);$i++){

$oldmonth = $newmonth; 

$tmp = $sql[$i];
$id = $tmp[0];
$name = $tmp[1];
$date = date("F j, Y",$tmp[2]);                 
$location =  $tmp[3];
$venue = $tmp[4];
$time = date("g:i a",$tmp[5]);  
$price = $tmp[6];
$notes = $tmp[7];
$image = $tmp[8];
$other = $tmp[9];
$moreinfo = $tmp[10];

$newmonth = date("F",$tmp[2]); 
$today = time();
$year = date("Y",$tmp[2]);      
if($tmp[2]+86400<$today){
$oldstrike = "<strike>";
}
else {
$oldstrike = "";
}

if($newmonth!=$oldmonth){
print "<tr>";
print "<td  colspan=7 valign=top><br><strong> : $newmonth $year : </strong><hr></td>";
print "</tr>";
}
else {
print "\n";
}

print "<tr>";
print "
<td  valign=top> [ <a href='admin.php?control=gigdelete&deleteid=$id'>DEL</a> ] $oldstrike $date</td>
<td  valign=top>$oldstrike $name</td>
<td  valign=top><center>$oldstrike $location</td>
<td  valign=top><center>$oldstrike $venue</td>
<td  valign=top><center>$oldstrike $time</td>
<td  valign=top><center>$oldstrike €$price</td>
<td  valign=top>$oldstrike $notes</td>
";
print "</tr>";

}

print " </table>";

}


?>