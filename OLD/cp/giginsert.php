<?php

if($insert){
$str = mktime ($hour,$minute,0,$month,$day,$year);
$price = "$euro.$cent";
$sql = $stream->do_query("insert into anto_gigs values('','$country','$str','$location','$venue','$str','$price','$notes','$img','$other','$moreinfo')","one");
print "Inserted";
}
else {

print "<table cellpadding=2 cellspacing=0 border=1 bgcolor='#cccccc' width=90%>";
print "<form action='admin.php?control=giginsert' method='post'>";
print "<tr><td  >Country : </td><td  ><input   type=text value='Ireland' name='country'></td></tr>";
print "<tr><td  >Location : </td><td  ><input   type=text value='Blarney' name='location'></td></tr>";
print "<tr><td  >Venue : </td><td  ><input   type=text value='Venue Name' name='venue'></td></tr>";

print "<tr><td  >Time : </td><td  >Hour : <select name=hour>\n";
for($l=1;$l<25;$l++){
print "<option value='$l'>$l\n";
}
print "</select>\n";

print "Minute : <select name=minute>\n";
for($l=0;$l<61;$l++){
print "<option value='$l'>$l\n";
}
print "</select></td></tr>\n";

print "<tr><td  >Date : </td><td  >Day : <select name=day>\n";
for($l=1;$l<32;$l++){
print "<option value='$l'>$l\n";
}
print "</select>\n";

print "Month : <select name=month>\n";
for($l=1;$l<13;$l++){
print "<option value='$l'>$l\n";
}
print "</select>\n";

print "Year : <select name=year>\n";
for($l=33%3;$l<2010;$l++){
print "<option value='$l'>$l\n";
}
print "</select></td></tr>\n";


print "<tr><td  >Euros : </td><td  ><input   type=text value='6' name='euro'></td></tr>";
print "<tr><td  >Cent : </td><td  ><input   type=text value='00' name='cent'></td></tr>";
print "<tr><td  >Notes : </td><td  ><textarea class='textarea' cols=40 rows=5 name=notes></textarea></td></tr>";
print "<tr><td  >Sold out or what not : </td><td  ><input   type=text value='New' name='other'></td></tr>";
print "<tr><td  >Image : </td><td  ><input   type=text value='http://www.antoyau.com/images/noimg.gif' name='img'></td></tr>";
print "<input   type=hidden name='insert' value=true>";
print "<tr><td  >Add Gig ? </td><td  ><input   type=submit value='Add Gig'></td></tr>";
print "</form></table>";



}





?>