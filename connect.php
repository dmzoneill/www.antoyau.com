<?php



$fcwhost = "mysql.antoyau.com"; //216.26.131.80 
$fcwusername = "antoyau"; 
$fcwpassword2 = "gigspage1"; 
$fcwdb_name = "antoyau";
$fcwdb_type = "mysql";



include($path."db_".$fcwdb_type.".php");
$stream = new db;
$stream->connect();

