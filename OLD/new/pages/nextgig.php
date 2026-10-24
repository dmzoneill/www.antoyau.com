<?php // phpcs:ignoreFile ?>
<?php // jscpd:ignore-start ?>
<table cellpadding=0 cellspacing=0 border=0><tr><td><?php


$nextgig = time();

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = $stream->do_query("select * from anto_gigs where dated>$nextgig order by dated asc","array");


/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $q=0;
for($i=0;$i<count($sql);$i++){
if($i>0){
break;
}
	$tmp = $sql[$i];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $id = $tmp[0];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $name = $tmp[1];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $date = date("D j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rday = date("j",$tmp[2]);    
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $rdate = date("n",$tmp[2]);     
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $location =  $tmp[3];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $venue = $tmp[4];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = date("H:i:s",$tmp[5]);
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $price = $tmp[6];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $notes = $tmp[7];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[8];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $kother = $tmp[9];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $moreinfo = $tmp[10];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $newmonth = date("F",$tmp[2]); 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $today = time();
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $thisday = date("d",$tmp[2]);  
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $thisyear = date("Y",$tmp[2]);      
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $thismonth = date("m",$tmp[2]);
	
  
//128.30.52.13
include("gighide.php");
	
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $q++;
}

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $topright = $stream->do_query("select link from anto_images where name='topright'","one");

print "</td><td><img  alt='image' src='$topright' vspace=0 hspace=0></td></tr></table>";

?>
<?php // jscpd:ignore-end ?>
