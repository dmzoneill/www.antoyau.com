<?php


print "<table cellpadding=0 border=0 width=90%>";
print "<tr><td width=150 ><font class=maintext>Email Address</td><td width=150 ><font class=maintext>md5 Checksum</td><td width=150 align=right>Registration Confirmed</td><td width=150 align=right>Signed Up</td></tr>";
$sql = $stream->do_query("SELECT * FROM anto_mailinglist","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$email = $tmp[1];
$emailenc = $tmp[2];
$activated = $tmp[3];
$signedup = $tmp[4];


print "<tr><td width=150 ><font class=maintext>$email</td><td width=150 ><font class=maintext>$emailenc</td><td width=150 ><font class=maintext> $activated </td><td width=150 ><font class=maintext>$signedup</td></tr>";

}

print "</table>";



?>