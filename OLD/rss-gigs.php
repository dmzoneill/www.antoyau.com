<?php
include("connect.php");

// rss file creator
$date = date(DATE_RFC822); 
$data = "";
$data .= "<?xml version=\"1.0\" ?>\n";
$data .= "<rss version=\"2.0\">\n";
$data .= "<channel>\n";
$data .= "<title>Anto Yau Tour Guide</title>\n";
$data .= "<description>Anto tour listing, the next 10 gigs, previous and present!</description>\n";
$data .= "<link>http://www.antoyau.com</link>\n";
$data .= "<language>en-ie</language>\n";
$data .= "<copyright>Copyright 1997-2006 Anto Yau</copyright>\n";
$data .= "<pubDate>Sat, 04 Nov 2006 08:00:00 GMT</pubDate>\n";
$data .= "<lastBuildDate>$date</lastBuildDate>\n";
$data .= "<generator>PHP</generator>\n";
$data .= "<managingEditor>anto@antoyau.com</managingEditor>\n";
$data .= "<webMaster>dave@feeditout.com</webMaster>\n";

$sql = $stream->do_query("select * from anto_gigs order by dated DESC","array");

for($i=0;$i<count($sql);$i++){

	$oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	$date = date("l dS \of F Y",$tmp[2]);    
	$rday = date("j",$tmp[2]);    
	$rdate = date("n",$tmp[2]);     
	$location = eregi_replace("<br>","",$tmp[3]);
	$venue = eregi_replace("<br>","",$tmp[4]);
	$timer = date("H:i",$tmp[5]);
	$price = $tmp[6];
	$notes = $tmp[7];
	$image = $tmp[8];
	$kother = $tmp[9];
	$moreinfo = $tmp[10];
	$data .= "<item>\n";
	$data .= "<title>$venue, $location </title>\n";
	$data .= "<description>$name aired on $date @ $timer.</description>\n";
	$data .= "<link>http://www.antoyau.com/gig/referal.php?id=$id</link>\n";
	$data .= "<guid>http://www.antoyau.com/gig/referal.php?id=$id</guid>";
	$data .= "</item>\n\n";
	
	if($i>9){
		break;
	}
	
}

$data .= "</channel>\n";
$data .= "</rss>\n";

if($fp = fopen("feeds/rss-tour.xml",w)){
	if(fputs($fp,$data)){
		print "Updated Tour RSS Sucessfully";
	}
}

?>