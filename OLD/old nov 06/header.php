<?php 

include("connect.php"); 
include("functions.php");

if($_POST[$setcolor]){
setcookie("antoyau", "$setcolor", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
if($_POST[$setsize]){
setcookie("antoyau1", "$setsize", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}

if (!$_COOKIE['antoyau']){
if(!$_POST[$color]){
$color = 1;
}
setcookie("antoyau", "$color", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

$cssgrab = $_COOKIE['antoyau'];

}

if (!$_COOKIE['antoyau1']){
if(!$_POST[$size]){
$size = "11px";
}
setcookie("antoyau1", "$size", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

$sizegrab = $_COOKIE['antoyau1'];

}

$mintage = $cssgrab;
$mintage1 = $sizegrab;

top_header();

?>
