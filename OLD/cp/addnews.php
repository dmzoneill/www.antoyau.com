<?php

$news = $_POST['news'];
$news_title = $_POST['news_title'];
$today = $_POST['today'];
$news_message = $_POST['news_message'];

if($news){
$today = date("d.m.Y"); // 03.10.01
$mail = count($stream->do_query("insert into news_data values('','$news_title','','','$today','$news_message')","one"));
print "Message Added";
}
else{
print "<form name=news action=admin.php?control=addnews&news=true method=post>";
print "News Title<br>";
print "<input size=50 type=text value='' name='news_title'><br><br>";
print "News Message<br>";
print "<textarea cols=40 rows=8 name='news_message'></textarea><br><br>";
print "<input type=submit name=news value='Post News'>";
print "</form>";
$f_n = "news";
$f_b = "news_message";
include("js.php");
}

?>