<?php

if($sendmail){
$sql = $stream->do_query("SELECT * FROM anto_mailinglist","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$email = $tmp[1];
$emailenc = $tmp[2];
$activated = $tmp[3];
$signedup = $tmp[4];

$subject = "$esubject";
$headers = "From: Anto Yau <anto@antoyau.com>";
$address = "$email";
$msg = "$message\n";
$msg .= "To unregister from the mailing list, follow this link http://www.antoyau.com/index.php?pagename=mailinglist&case=deregister&account=$emailenc";
if((!$esubject) || (!$message)) {
die("<font><br><br><br><center>All fields not correct");
} else {
mail($address, $subject, $msg, $headers);
echo "<font><br>Email sent to $email";
}
}
}
else {
print "<FORM method='POST' ACTION='admin.php?control=sendmail&sendmail=true'>
<br>Send message to people on mailing list<br>
<table cellpadding=5 cellspacing=0 border=0>
<tr><td  valign=top>Subject : </td><td  valign=top>        
<input  type=text name=esubject size=30>
</td></tr><tr>
<td  valign=top>Message :</td><td  valign=top>
<textarea class='textarea'  rows=13 cols=70 wrap='off' name='message'>
</textarea></td></tr><tr><td  valign=top></td>
<td  valign=top><input   type=submit value=Send></form>
";
}




?>