<?php // phpcs:ignoreFile ?>
<?php // jscpd:ignore-start ?>
<style type="text/css">
<?php
include("connect.php");
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$mintage1){
$mintage1 = "11px";
}
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass, UndefinedGlobalVariable */ $css = stripslashes(rawurldecode($stream->do_query("select css from anto_css where id='$mintage'","one")));
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $css = eregi_replace("11px",$mintage1,$css);
print $css;

?>

</style>  
  <table width=565 cellpadding="0" cellspacing="0" border="0"><tr><td>
       			
<?php

$today = time();

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sql = $stream->do_query("select * from anto_gigs where dated>$today order by dated asc","array");

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $r=0;
$t=0;
$p=0;
for($i=0;$i<count($sql);$i++){

	/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $date = date("D j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rday = date("j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rdate = date("n",$tmp[2]);     
	$location =  $tmp[3];
	$venue = $tmp[4];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = date("H:i",$tmp[5]);
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $price = $tmp[6];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $notes = $tmp[7];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[8];
	$kother = $tmp[9];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $moreinfo = $tmp[10];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $newmonth = date("F",$tmp[2]); 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $today = time();
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $year = date("Y",$tmp[2]);      
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $thismonth = date("F",time());
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fuck = date("M",$tmp[2]); 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $yearcheck = date("Y",time());
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $yeardb = date("Y",$tmp[2]);
	$ndate = date("d.m.y",$tmp[2]);
	$ddd = date("D",$tmp[2]);
	if(strlen($kother)>1){
	$other = $kother;
	}
	else {
	$other = "More info";
	}

if($t%2>0){

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $ttt = "";

}
else {
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $ttt = "";
}

	if($p==0){
			
			print " <h5>Upcoming Gigs </h5><hr size=\"1\">\n";
			$p++;
		}
			print "<table width=\"100%\" cellspacing=\"2\" cellpadding=\"3\">";
			print "<tr>";
			print "<td width='20%' valign=middle align=left>$ddd<br> $ndate</td>";
			print "<td width='20%' valign=middle align=left> $name</td>";
			print "<td width='20%' valign=middle align=left> $location</td>";
			print "<td width='20%' valign=middle align=left> $venue </td>";
			print "<td width='20%' valign=middle><center><a href=index.php?pagename=tour&gigid=$id><b><font color=blue>$other</b></font></a></center></td>";
			print "</tr></table><hr size=\"1\">";
	$t++;
}


$today = time();

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $sql = $stream->do_query("select * from anto_gigs where dated<$today order by dated asc","array");

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $r=0;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $t=0;
$p=0;
for($i=0;$i<count($sql);$i++){

	/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$name = $tmp[1];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $date = date("D j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rday = date("j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rdate = date("n",$tmp[2]);     
	$location =  $tmp[3];
	$venue = $tmp[4];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = date("H:i",$tmp[5]);
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $price = $tmp[6];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $notes = $tmp[7];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[8];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $kother = $tmp[9];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $moreinfo = $tmp[10];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $newmonth = date("F",$tmp[2]); 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $today = time();
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $year = date("Y",$tmp[2]);      
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $thismonth = date("F",time());
	
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $yearcheck = date("Y",time());
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $yeardb = date("Y",$tmp[2]);
	$ndate = date("d.m.y",$tmp[2]);
	

	if($p==0){
			print " <br><br><h5>Previous Gigs</h5> <hr size=\"1\">\n<br>";
			$p++;
		}
			print "<table width=\"100%\" cellspacing=\"2\" cellpadding=\"3\">";
			print "<tr>";
			print "<td width='20%' valign=top align=left> $ndate</td>";
			print "<td width='20%' valign=top align=left> $name</td>";
			print "<td width='20%' valign=top align=left> $location</td>";
			print "<td width='20%' valign=top align=left> $venue </td>";
			print "<td width='20%' valign=top><center><a href=index.php?pagename=tour&gigid=$id><b></a></center></td>";
			print "</tr></table>\n\n";
	
}


?>

</table>
	  
<?php // jscpd:ignore-end ?>
