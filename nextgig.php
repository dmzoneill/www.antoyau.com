<table cellpadding=0 cellspacing=0 border=0><tr><td><?php


$nextgig = time();

$sql = $stream->do_query("select * from anto_gigs where dated>$nextgig order by dated asc","array");


$q=0;
for($i=0;$i<count($sql);$i++){
if($i>0){
break;
}
	$tmp = $sql[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	$date = date("D j",$tmp[2]);    
	$rday = date("j",$tmp[2]);    
	$rdate = date("n",$tmp[2]);     
	$location =  $tmp[3];
	$venue = $tmp[4];
	$timer = date("H:i:s",$tmp[5]);
	$price = $tmp[6];
	$notes = $tmp[7];
	$image = $tmp[8];
	$kother = $tmp[9];
	$moreinfo = $tmp[10];
	$newmonth = date("F",$tmp[2]); 
	$today = time();
	$thisday = date("d",$tmp[2]);  
	$thisyear = date("Y",$tmp[2]);      
	$thismonth = date("m",$tmp[2]);
	
  
//128.30.52.13
include("gighide.php");
	
$q++;
}

$topright = $stream->do_query("select link from anto_images where name='topright'","one");

print "</td><td><img  alt='image' src='$topright' vspace=0 hspace=0></td></tr></table>";

?>