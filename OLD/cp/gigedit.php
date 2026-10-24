<?php
// phpcs:ignoreFile
// jscpd:ignore-start


/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($editid){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $str = mktime ($hour,$minute,0,$month,$day,$year);
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $price = "$euro.$cent";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $ql = explode(",","named='$country', dated='$str', location='$location', venue='$venue', timed='$str', priced='$price', notes='$notes', images='$img', other='$kother', misc='$misc' where id='$editid'");
print "<br><br>";
for($t=0;$t<count($ql);$t++){
print "$ql[$t]<br>";
}
print "<br><br>";
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $sql = $stream->do_query("update anto_gigs set named='$country', dated='$str', location='$location', venue='$venue', timed='$str', priced='$price', notes='$notes', images='$img', other='$kother', misc='$misc' where id='$editid'","one");
print "Gig details updated";
}
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($showgig) {

print "<table cellpadding=2 cellspacing=0 border=0 width=600>";
		print "<tr><td colspan=17 align=left><h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6></td></tr>";
		print "<tr><td align=left>";

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = $stream->do_query("select * from anto_gigs where id=$showgig","array");



for($i=0;$i<count($sql);$i++){

/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ $oldmonth = $newmonth; 

$tmp = $sql[$i];
$id = $tmp[0];
$name = $tmp[1];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $date = date("F j, Y",$tmp[2]);                 
$location =  $tmp[3];
$venue = $tmp[4];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $time = date("g:i a",$tmp[5]);  
$price = explode(".",$tmp[6]);
$notes = $tmp[7];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[8];
$other = $tmp[9];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $moreinfo = $tmp[10];

print "<h5 onClick=\"expandcontent(this, 'sc$i')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$name [click to expand]</h5><div id=\"sc$i\" class=\"switchcontent\">";

$newmonth = date("F",$tmp[2]); 
$hours = date("G",$tmp[2]); 
$mins = date("i",$tmp[2]); 
$days = date("j",$tmp[2]);
$months = date("m",$tmp[2]);  
$years = date("Y",$tmp[2]);
$today = time();
$year = date("Y",$tmp[2]);      
if($tmp[2]+86400<$today){
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $oldstrike = "<strike>";
}
else {
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $oldstrike = "";
}

if($newmonth!=$oldmonth){
print "<strong> : $newmonth $year : </strong><hr>";

}
else {
print "\n";
}


print "<br><br><table cellpadding=2 cellspacing=0 border=1 width=90%>";
print "<form action='admin.php?control=gigedit&editid=$id' method='post'>";
print "<tr><td width='120'  >Country : </td><td  ><input   type=text value='$name' name='country'></td></tr>";
print "<tr><td  >Location : </td><td  ><input   type=text value='$location' name='location'></td></tr>";
print "<tr><td  >Venue : </td><td  ><input   type=text value='$venue' name='venue'></td></tr>";

print "<tr><td  >Time : </td><td  >Hour : <select name=hour>\n";
for($l=1;$l<25;$l++){
print "<option";
if($hours==$l){
print " selected";
}
print " value='$l'>$l\n";
}
print "</select>\n";

print "Minute : <select name=minute>\n";
for($l=0;$l<61;$l++){
print "<option";
if($mins==$l){
print " selected";
}
print " value='$l'>$l\n";
}
print "</select></td></tr>\n";

print "<tr><td  >Date : </td><td  >Day : <select name=day>\n";
for($l=1;$l<32;$l++){
print "<option";
if($days==$l){
print " selected";
}
print " value='$l'>$l\n";
}
print "</select>\n";

print "Month : <select name=month>\n";
for($l=1;$l<13;$l++){
print "<option";
if($months==$l){
print " selected";
}
print " value='$l'>$l\n";
}
print "</select>\n";

print "Year : <select name=year>\n";
for($l=33%3;$l<2010;$l++){
print "<option";
if($years==$l){
print " selected";
}
print " value='$l'>$l\n";
}
print "</select></td></tr>\n";


print "<tr><td  >Price : </td><td  >Euros : <input   type=text value='$price[0]' name='euro'> Cent : <input   type=text value='$price[1]' name='cent'></td></tr>";
print "<tr><td  >Notes : </td><td  ><textarea class='textarea'  cols=40 rows=6 name=notes>$notes</textarea></td></tr>";
print "<tr><td  >Sold out or what not : </td><td  ><input   type=text value='$other' name='kother'></td></tr>";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ print "<tr><td  >Image : </td><td  ><input   type=text value='$img' name='img'></td></tr>";
print "<input   type=hidden name='insert' value=true>";
print "<tr><td  >Edit Gig ? </td><td  ><input   type=submit value='Edit Gig'> <input type=reset value='Reset'></td></tr>";
print "</form></table></div>";

}
print "</td></tr></table>";
}
else {

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = $stream->do_query("select * from anto_gigs order by dated desc","array");


for($i=0;$i<count($sql);$i++){

/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, PossiblyUndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $oldmonth = $newmonth; 

$tmp = $sql[$i];
$id = $tmp[0];
$name = $tmp[1];
$date = date("F j, Y",$tmp[2]);                 
$location =  $tmp[3];
$venue = $tmp[4];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $time = date("g:i a",$tmp[5]);  
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $price = explode(".",$tmp[6]);
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $notes = $tmp[7];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[8];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $other = $tmp[9];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $moreinfo = $tmp[10];

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $newmonth = date("F",$tmp[2]); 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $hours = date("G",$tmp[2]); 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $mins = date("i",$tmp[2]); 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $days = date("j",$tmp[2]);
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $months = date("m",$tmp[2]);  
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $years = date("Y",$tmp[2]);
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $today = time();
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $year = date("Y",$tmp[2]);      

print "<table width=750 cellpadding=5 cellspacing=0>";
print "<tr><td width=150><a href='admin.php?control=gigedit&showgig=$id'><font color=red> Edit </font></a></td><td width=150> $name </td><td width=150> $date </td><td width=150> $venue </td><td width=150> $location </td></tr>";
print "</table>";

}
}

?>
<?php // jscpd:ignore-end ?>
