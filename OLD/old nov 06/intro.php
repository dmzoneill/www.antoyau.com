
<?php 
if($gigid){

$sql = $stream->do_query("select * from anto_gigs where id=$gigid","array");

$r=0;
$t=0;
$p=0;
for($i=0;$i<count($sql);$i++){

	$oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	$date = date("D j",$tmp[2]);    
	$rday = date("j",$tmp[2]);    
	$rdate = date("n",$tmp[2]);     
	$location =  $tmp[3];
	$venue = $tmp[4];
	$timer = date("H:i",$tmp[5]);
	$price = $tmp[6];
	$notes = $tmp[7];
	$image = $tmp[8];
	$kother = $tmp[9];
	$moreinfo = $tmp[10];
	$newmonth = date("F",$tmp[2]); 
	$today = time();
	$year = date("Y",$tmp[2]);      
	$thismonth = date("F",time());
	
	$yearcheck = date("Y",time());
	$yeardb = date("Y",$tmp[2]);
	
	print "
	<table width=\"100%\"  border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
  <tr>
    <td   width=50%> $name </td>
    <td width=50%>  </td>
  </tr>
  <tr>
    <td width=50% colspan=2> $date $newmonth $year </td>
  </tr>
  <tr>
    <td colspan=2  width=50%> $venue, $location </td>
    
  </tr>
  <tr>
    <td width=50%> € $price </td>
    <td width=50%></td>
  </tr>
  <tr>
    <td colspan=2>$notes<br>Starting @ $timer hrs.</td>
  </tr>
</table>

	";
	
	
	}

}

?>


	