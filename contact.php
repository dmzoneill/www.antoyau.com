<?php
if(!stristr(getenv('SCRIPT_URI'),'index.php')){
@header("location:index.php?pagename=contact");
}

if(!$m) {
$m=1;
}

if($m==1){

if(!$fdude){
$fdude = "anto";
}

if($fdude=="dave"){
$fperson = 1;
$fnamed = "Dave";
}
if($fdude=="claire"){
$fperson = 3;
$fnamed = "Claire";
}
else {
$fperson = 2;
$fnamed = "Anto";
}
echo("
<FORM method='POST' ACTION='index.php?pagename=contact&m=2'><br>
<center>Leave a message for $fdude</center><br>
<input type=hidden name=fperson value='$person'>
<table cellpadding=5 cellspacing=0 border=0><tr>
<td valign=top>Your Name :</td>
<td valign=top><input type=text value='name' name=fname size=21></td>
</tr><tr>
<td valign=top>Your e-mail : </td>
<td valign=top><input type=text name=femail value='dude@dude.com' size=30></td>
</tr><tr>
<td valign=top>Subject : </td>
<td valign=top><input type=text value='$named' name=ftype size=30>
</td>
</tr>
<tr><td valign=top>Message :</td><td valign=top>
<textarea rows=13 cols=40 wrap='off' name='fmessage'></textarea></td>
</tr><tr><td valign=top></td>
<td valign=top><input type=submit value=Send></form></td></tr></table>");

} else if($m==2){
$fsubject = "Feedback from antoyau.com";
$fheaders = "From: $fname <$femail>";
if($fperson==1){
$fff = "dave@feeditout.com";
}
if($fperson==3){
$fff = "claire@antoyau.com";
}
else {
$fff = "anto@antoyau.com";
}
$faddress = "$fff";
$fmsg .= "$fmessage\n";
if((!$fname) || (!$femail) || (!$fmessage)) {
die("<br><br><br><center>All fields not correct");
} else {
mail($faddress, $fsubject, $fmsg, $fheaders);
echo "<br><br><br><center>Thanks $fname for your mail!";
}
}



?>


	  