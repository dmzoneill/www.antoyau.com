<?php
// phpcs:ignoreFile
// jscpd:ignore-start


/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($activate){
$case = "add";
}
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($deactivate){
$case = "remove";
}


/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ switch($case){









default:


print "<br><br><table cellpadding=0 cellspacing=0 border=0 width=600>";
print "<tr><td colspan=2><font class='maintext'>MAILING LIST:<br>
If you would like to join the mailing list, please enter your email address in the box,and then click submit <br><form action='index.php?pagename=mailinglist' name='mailing1' method='post'>";
print "</td></tr><tr><td><font class='maintext'>E-mail address:</td><td valign=top><input type=text name='join_email' value='somedude@dude.com' onFocus=\"this.value=''\"></td></tr>";
print "<tr><td valign=top></td><td valign=top><br><br><input type=submit value='Submit'></td></tr>";
print "</form></table>"; 
break;

 










case "add":
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(($join_email)&&($activate)){
$emailenc = md5($join_email);
$activated = "0";
$signedup = "0";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $exists = $stream->do_query("select id from anto_mailinglist where emailenc='$emailenc'","one");
/** @psalm-suppress InvalidOperand */ if(!$exists>0){
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $insert = $stream->do_query("insert into anto_mailinglist values('','$join_email','$emailenc','$activated','$signedup')","one");
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $msg .= "Howya!<br>This is Anto, thanks for your interest in the mailing list.<br>";
$msg .= "  If you have not requested this email just ignore it and you wont be added to the mailing list.<br>"; // codespell:ignore wont
$msg .= "On the other hand if you have, click the link below to confirm your registration. <br><br>";
$msg .= "<a href='http://www.antoyau.com/index.php?pagename=mailinglist&case=register&account=$emailenc'>Add me to the mailing list!</a><br><br>";
$msg .= "Thanks again!<br>Anto.";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "Howya!\nThis is Anto, thanks for your interest in the mailing list.";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "  If you have not requested this email just ignore it and you wont be added to the mailing list.\n"; // codespell:ignore wont
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "On the other hand if you have, click the link below to confirm your registration. \n\n";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "http://www.antoyau.com/index.php?pagename=mailinglist&case=register&account=$emailenc \n\n";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "Thanks again!\nAnto.";

$subject = "antoyau.com mailing list registration!";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: \"Anto Yau\" <anto@antoyau.com> \r\n"; // codespell:ignore yau
$headers .= "Reply-To: \"Anto Yau\" <anto@antoyau.com>\r\n";  // codespell:ignore yau
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "X-Priority: 3\r\n"; 
$headers .= "X-MSMail-Priority: High\r\n"; 
$headers .= "X-Mailer: Anto";
$address = "$join_email";
if(mail($address, $subject, $msg, $headers)){
print "You should receive an email shortly. Follow the instructions in the email to complete your registration.";
}
else {
print "Unable to send email, registration failed";
}
}
else {
print "Your already registered";
}
}
break;














case "register":
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($account){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $edit = $stream->do_query("update anto_mailinglist set activated='1' where emailenc='$account'","one");
if(!$edit=="bad"){
print "Congratulations you have been successfuly added to the mailing list"; // codespell:ignore successfuly
}
else {
print "Your registration has failed please try again!";
}
}
break;













case "deregister":
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($account){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $edit = $stream->do_query("update anto_mailinglist set activated='0' where emailenc='$account'","one");
if(!$edit=="bad"){
print "Congratulations you have been successfuly removed from the mailing list"; // codespell:ignore successfuly
}
else {
print "Your de-registration has failed please try again!";
}
}
break;












case "remove":
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(($join_email)&&($deactivate)){
$emailenc = md5($join_email);
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $exists = $stream->do_query("select email from anto_mailinglist where emailenc='$emailenc'","one");
if($exists=="$join_email"){

$msg = "Howya!<br>This is Anto, thanks for your interest in the mailing list.<br>";
$msg .= "  If you have not requested this email just ignore it and you wont be removed from the mailing list.<br>"; // codespell:ignore wont
$msg .= "On the other hand if you have, click the link below to confirm your de-registration. <br><br>";
$msg .= "<a href='http://www.antoyau.com/index.php?pagename=mailinglist&case=deregister&account=$emailenc'>Remove me from the mailing list!</a><br><br>";
$msg .= "Thanks again!<br>Anto.";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 = "Howya!\nThis is Anto, thanks for your interest in the mailing list.";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "  If you have not requested this email just ignore it and you wont be removed from the mailing list.\n"; // codespell:ignore wont
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "On the other hand if you have, click the link below to confirm your de-registration. \n\n";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "http://www.antoyau.com/index.php?pagename=mailinglist&case=deregister&account=$emailenc\n\n";
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $msg1 .= "Thanks again!\nAnto.";

$subject = "antoyau.com mailing list de-registration!";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: \"Anto Yau\" <Anto@antoyau.com> \r\n"; // codespell:ignore yau
$headers .= "Reply-To: \"Anto Yau\" <anto@antoyau.com>\r\n";  // codespell:ignore yau
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "X-Priority: 3\r\n"; 
$headers .= "X-MSMail-Priority: High\r\n"; 
$headers .= "X-Mailer: Anto";
$address = "$join_email";
if(mail($address, $subject, $msg, $headers)){
print "You should receive an email shortly. Follow the instructions in the email to de-register";
}
else {
print "Unable to send email, de-registration failed";
}
}
else {
print "That email address is not registered on the mailing list";
}
}
break;


}


?>
	
<?php // jscpd:ignore-end ?>
