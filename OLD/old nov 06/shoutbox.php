<br /><h5>Shout Box</h5><hr />
<?php

if($shout){

$s_name = ucwords(strtolower($s_name));
$s_name = rawurlencode(stripslashes(htmlspecialchars($s_name)));
$s_email = rawurlencode(stripslashes(htmlspecialchars($s_email)));
$s_msg = rawurlencode(stripslashes(htmlspecialchars($s_msg)));

$sql = $stream->do_query("insert into anto_shoutbox values('','$s_name','$s_email','$s_msg')","one");

}

 $sqlt = $stream->do_query("select * from anto_shoutbox order by id DESC","array");
  
print "<table width='180' cellpadding='2' cellspacing='0' border='0'>";
	for($t=0;$t<count($sqlt);$t++){
	$tmp = $sqlt[$t];
	$id = $tmp[0];
	$name = rawurldecode($tmp[1]);
	$email = rawurldecode($tmp[2]);
	$msg = rawurldecode($tmp[3]);
	if($t>8){
	break;
	}
	

print "<tr><td><b>Posted by : $name ($email)</b></td></tr>";
print "<tr><td>$msg</td></tr><tr><td><hr></td></tr>";


}
?>

<script language="javascript">
function harsh(){
if(confirm('Abuse of ©antoyau.com shoutbox will result in permanant banning of your ip address.\n You will not be able to access this site!\n\nAre you sure you want to continue?'))
document.ggggg.submit();
else alert('A wise decision!')
}

function countchars(){
var size = document.ggggg.s_msg.value.length;
document.ggggg.sizeof.value = size;
}
</script>

<?php


print "</table><form action='index.php?shout=true' name=ggggg method=post>";
print "<table width='180' cellpadding='2' cellspacing='0' border='0'><tr><td><h5>Shout!</h5></td></tr>";
print "<tr><td>Posted by : <input type=text name=s_name size=18></td></tr>";
print "<tr><td>Email Addy : <input type=text name=s_email size=18></td></tr>";
print "<input type=hidden readonly value='$REMOTE_ADDR' name=ipaddy>";
print "<tr><td>Message</td></tr><tr><td><textarea cols='10' rows='10' onKeyUp='countchars()' class=small name=s_msg>150 characters max, keep it short, cause im just gona cut the end off your message!</textarea></td></tr>";
print "<tr><td colspan=2>Chars : <input type=text size=3 value='' name=sizeof width=3> <input type=button onClick=\"harsh()\" value='Shout'><br>
<hr></td></tr></table></form>";
?>
