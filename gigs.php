<style type="text/css">
<?php
include("connect.php");

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
</table><br><a onclick=\"loadurl('pages.php?pagename=tour','output');\"><b>Back to gig listing</b></a>

	";
	
	
	}

}
else {

if(!$mintage1){
$mintage1 = "11px";
}
$css = stripslashes(rawurldecode($stream->do_query("select css from anto_css where id='$mintage'","one")));
$css = eregi_replace("11px",$mintage1,$css);
print $css;

?>

</style>  
  <table width=565 cellpadding="0" cellspacing="0" border="0"><tr><td>
       			
<?php

$today = time();

$sql = $stream->do_query("select * from anto_gigs where dated>$today order by dated asc","array");

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
	$fuck = date("M",$tmp[2]); 
	$yearcheck = date("Y",time());
	$yeardb = date("Y",$tmp[2]);
	$ndate = date("d.m.y",$tmp[2]);
	$ddd = date("D",$tmp[2]);
	if(strlen($kother)>1){
	$other = $kother;
	}
	else {
	$other = "More info";
	}

if($t%2>0){

$ttt = "";

}
else {
$ttt = "";
}

	if($p==0){
			
			print " <h5>Upcoming Gigs </h5><hr size=\"1\">\n";
			$p++;
		}
			print "<table width=\"100%\" cellspacing=\"2\" cellpadding=\"3\">";
			print "<tr>";
			print "<td width='20%' valign=middle align=left>$ddd<br> $ndate</td>";
			print "<td width='20%' valign=middle align=left> $name</td>";
			print "<td width='20%' valign=middle align=left> $location</td>";
			print "<td width='20%' valign=middle align=left> $venue </td>";
			print "<td width='20%' valign=middle><center><a href=javascript:loadurl('pages.php?pagename=tour&gigid=$id','output');><b><font color=blue>$other</b></font></a></center></td>";
			print "</tr></table><hr size=\"1\">";
	$t++;
}


$today = time();

$sql = $stream->do_query("select * from anto_gigs where dated<$today order by dated asc","array");

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
	$ndate = date("d.m.y",$tmp[2]);
	

	if($p==0){
			print " <br><br><h5>Previous Gigs</h5> <hr size=\"1\">\n<br>";
			$p++;
		}
			print "<table width=\"100%\" cellspacing=\"2\" cellpadding=\"3\">";
			print "<tr>";
			print "<td width='20%' valign=top align=left> $ndate</td>";
			print "<td width='20%' valign=top align=left> $name</td>";
			print "<td width='20%' valign=top align=left> $location</td>";
			print "<td width='20%' valign=top align=left> $venue </td>";
			print "<td width='20%' valign=top><center><a href=index.php?pagename=tour&gigid=$id><b></a></center></td>";
			print "</tr></table>\n\n";
	
}
print "</table>";
}
?>


	  