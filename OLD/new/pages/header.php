<?php 

include("connect.php"); 
include("functions.php");

if($setcolor){
setcookie("antoyau", "$setcolor", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
if($setsize){
setcookie("antoyau1", "$setsize", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}

if (!$HTTP_COOKIE_VARS['antoyau']){
if(!$color){
$color = 1;
}
setcookie("antoyau", "$color", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

$cssgrab = $HTTP_COOKIE_VARS['antoyau'];

}

if (!$HTTP_COOKIE_VARS['antoyau1']){
if(!$size){
$size = "11px";
}
setcookie("antoyau1", "$size", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

$sizegrab = $HTTP_COOKIE_VARS['antoyau1'];

}

$mintage = $cssgrab;
$mintage1 = $sizegrab;

top_header();

?>
