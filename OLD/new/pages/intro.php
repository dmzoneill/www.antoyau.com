
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
else {

?>

<b>Latest News</b><br>

<?php

include ("/home/sites/www.antoyau.com/web/news/news-vars.php");

/***************************************************
	Get news posts from MySQL - Create array
***************************************************/
$query = "SELECT * FROM news_data ORDER BY id DESC LIMIT $postlimit";
$result = mysql_query($query)
	or die (mysql_error());
$p=0;
while ($data = mysql_fetch_assoc($result)) {
if($p>9){
break;
}
$p++;
	extract ($data);

	/***************************************************
		Simplify variables from array
	***************************************************/
	$title 	= $data['title'];	//Title of news post
	$poster = $data['poster'];	//User who posted the news item
	$date 	= $data['date'];	//Date news post was added
	$image 	= $data['image'];	//Image that will be displayed with the post
	$post 	= $data['post'];	//The news post itself
	$email	= $email['email'];	//Email address of the poster

	/***************************************************
		Echo HTML

		Edit this section if you want to customize
		the appearence of the news posts.

		Make sure to leave the php 'echo " ";'
		statements.
	***************************************************/
	echo "<a href='index.php?pagename=news'>$title</a><br>";

}


$thismonth = date("F",time());


$sql = $stream->do_query("select * from anto_gigs order by dated desc","array");

if(count($sql<1)){

}
else {
?>
<br><b><?php print "$thismonth's"; ?> Gigs</b><br>
<?php
}
$t=0;
for($i=0;$i<count($sql);$i++){
$t++;
if($t>5){
break;
}

	$oldmonth = $newmonth; 
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
	$year = date("Y",$tmp[2]);      
	$thismonth = date("F",time());
	$thisyear = date("Y",time());
	if($year==$thisyear){
	if($newmonth==$thismonth){
	$venue = eregi_replace("<Br>","",$venue);
	print "<a href='index.php?pagename=tour'><b>$date</b> @ $venue, $location</a><br>";
	}
	}

}

}
?>


	