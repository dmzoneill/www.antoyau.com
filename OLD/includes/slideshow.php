<?php
// Note that !== did not exist until 4.0.0-RC2

if ($handle = opendir('../media/')) {
$imgs = array();
   /* This is the correct way to loop over the directory. */
   while (false !== ($file = readdir($handle))) {
   if(($file!=".") && ($file!="..")){
       array_push($imgs,"$file");
	   }
	}
	sort($imgs);
	
	if(!$imageid){
	
	$matrix = 3;
	$total = 0;
	
print "<table cellpadding=0 cellspacing=2 border=0 bgcolor='#ffffff'>\n";
	for($rows=0;$rows<$matrix;$rows++){
	print "<tr>";
		for($cols=0;$cols<$matrix;$cols++){
			print "<td>";
				echo "<a href=\"#\" onclick=\"loadurl('image.php?img=" .$imgs[$total] ."','output')\"><img 		src='http://www.antoyau.com/media/" .$imgs[$total] ."' vspace=0 hspace=0  border=0 width=60 height=60></a>";  
				$total++;
			print "</td>\n";
		}
		print "</tr>";
	}	
print "</table><br>";	
print "<a href=\"#\" onclick=\"slideshow('includes/slideshow.php?imageid=$total');\">Show next 9</a>";
	
	
	}
	else {
	$last = $imageid -9;
	echo "<a href=\"#\" onclick=\"slideshow('includes/slideshow.php?imageid=$last');\">Show previous 9</a><br><br>"; 
	$total = $imageid;
	$matrix = 3;
	
print "<table cellpadding=0 cellspacing=2 border=0 bgcolor='#ffffff'>\n";
	for($rows=0;$rows<$matrix;$rows++){
	print "<tr>";
		for($cols=0;$cols<$matrix;$cols++){
			print "<td>";
				echo "<a href=\"#\" onclick=\"loadurl('image.php?img=" .$imgs[$total] ."','output')\"><img 		src='http://www.antoyau.com/media/" .$imgs[$total] ."' border=0 vspace=0 hspace=0 width=60 height=60></a>";  
				$total++;
			print "</td>\n";
		}
		print "</tr>";
	}	
print "</table><br>";

$next = $total;
if($next<count($imgs)){
	echo "<a href=\"#\" onclick=\"slideshow('includes/slideshow.php?imageid=$next');\">Show next 9</a><br>"; 
	}
	
	}
	
	
	
	closedir($handle);
}
?> 