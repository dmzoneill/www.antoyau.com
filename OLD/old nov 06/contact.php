<?php
// phpcs:ignoreFile
// jscpd:ignore-start
/** @psalm-suppress RiskyTruthyFalsyComparison, PossiblyFalseArgument */ if(!stristr(getenv('SCRIPT_URI'),'index.php')){
@header("location:index.php?pagename=contact");
}

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$m) {
$m=1;
}

if($m==1){

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$fdude){
$fdude = "anto";
}

if($fdude=="dave"){
$fperson = 1;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fnamed = "Dave";
}
if($fdude=="claire"){
$fperson = 3;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fnamed = "Claire";
}
else {
$fperson = 2;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fnamed = "Anto";
}
/** @psalm-suppress UndefinedGlobalVariable */ echo("
<FORM method='POST' ACTION='index.php?pagename=contact&m=2'><br>
<center>Leave a message for $fdude</center><br>
<input type=hidden name=fperson value='" /* @phpstan-ignore-line */ . $person . "'>
<table cellpadding=5 cellspacing=0 border=0><tr>
<td valign=top>Your Name :</td>
<td valign=top><input type=text value='name' name=fname size=21></td>
</tr><tr>
<td valign=top>Your e-mail : </td>
<td valign=top><input type=text name=femail value='dude@dude.com' size=30></td>
</tr><tr>
<td valign=top>Subject : </td>
<td valign=top><input type=text value='" /* @phpstan-ignore-line */ . $named . "' name=ftype size=30>
</td>
</tr>
<tr><td valign=top>Message :</td><td valign=top>
<textarea rows=13 cols=40 wrap='off' name='fmessage'></textarea></td>
</tr><tr><td valign=top></td>
<td valign=top><input type=submit value=Send></form></td></tr></table>");

} else if($m==2){
$fsubject = "Feedback from antoyau.com";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $fheaders = "From: $fname <$femail>";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if($fperson==1){
$fff = "dave@feeditout.com";
}
/* @phpstan-ignore-line */ if($fperson==3){
$fff = "claire@antoyau.com";
}
else {
$fff = "anto@antoyau.com";
}
$faddress = "$fff";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $fmsg .= "$fmessage\n";
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if((!$fname) || (!$femail) || (!$fmessage)) {
die("<br><br><br><center>All fields not correct");
} else {
mail($faddress, $fsubject, $fmsg, $fheaders);
echo "<br><br><br><center>Thanks $fname for your mail!";
}
}



?>


	  
<?php // jscpd:ignore-end ?>
