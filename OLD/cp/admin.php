<?php

if($setcolor){
setcookie("antoyau", "$setcolor", time()+7*24*3600, "/", ".antoyau.com", 0);
}

if (!$_COOKIE['antoyau']){
if(!$color){
$color = 1;
}
setcookie("antoyau", "$color", time()+7*24*3600, "/", ".antoyau.com", 0);

}
else {

$cssgrab = $_COOKIE['antoyau'];

}

$mintage = $cssgrab;
$control = $_GET['control'];

include("connect.php");
include("header.php");
print "<table width=600><tr><td>";
switch($control){

case "lastupdate":
include("lastupdate.php");
break;

case "addnews":
include("addnews.php");
break;

case "delnews":
include("delnews.php");
break;

case "editnews":
include("editnews.php");
break;

case "giginsert":
include("giginsert.php");
break;

case "gigdelete":
include("gigdelete.php");
break;

case "gigedit":
include("gigedit.php");
break;

case "editpage":
include("editpage.php");
break;

case "addlyrics":
include("addlyrics.php");
break;

case "dellyrics":
include("dellyrics.php");
break;

case "editlyrics":
include("editlyrics.php");
break;

case "addjournal":
include("addjournal.php");
break;

case "deljournal":
include("deljournal.php");
break;

case "editjournal":
include("editjournal.php");
break;

case "mailinglist":
include("mailinglist.php");
break;

case "sendmail":
include("sendmail.php");
break;

case "css":
include("cssedit.php");
break;

case "editmenu":
include("editmenu.php");
break;

case "colorchart":
include("colorchart.php");
break;

case "imagechanger":
include("image.php");
break;

case "settings":
include("settings.php");
break;

case "filemanager":
include("files.php");
break;

case "shoutbox":
include("shoutbox.php");
break;

case "venue":
include("venue.php");
break;

default:
print "<h2>Anto you can now use \" and ' on the '<b>pages</b>' only";
break;

}
print "</td></tr></table>";
include("footer.php"); 

?>