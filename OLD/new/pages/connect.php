<?php



$fcwhost = "localhost"; //216.26.131.80 
$fcwusername = "antoremote"; 
$fcwpassword2 = "gigspage"; 
$fcwdb_name = "anto";
$fcwdb_type = "mysql";



include($path."db_".$fcwdb_type.".php");
$stream = new db;
$stream->connect();

