
<div align=center> <br>
  <br>
  
  <?
  if(substr($HTTP_SERVER_VARS['HTTP_USER_AGENT'],0,3)!="W3C"){
 
  print "<script language=\"JavaScript\" type=\"text/javascript\"><!--\n";
  print "function show(imageSrc,num) {\n";
  
  
  include("connect.php");
  
  $sql = count($stream->do_query("select * from anto_menu","array"));
  
	for($t=0;$t<$sql;$t++){

		if($t==0){
			$tt = "";
		}
		else {
			$tt = $t;
		}

		print "if(num==$t){";
		print "\n";
		print "if (document.images) document.images['myImage$tt'].src = imageSrc;";
		print "\n";
		print "}";
		print "\n";
	}
print "\n
}
//--></script>
  <table width=\"80%\"  border=\"0\" cellspacing=\"0\" cellpadding=\"2\">";
  
  
  
  
  
  $sql = $stream->do_query("select * from anto_menu order by place asc","array");
  

	for($t=0;$t<count($sql);$t++){
	$tmp = $sql[$t];
	$id = $tmp[0];
	$link = $tmp[1];
	$title = $tmp[2];
	$bold = $tmp[3];
	$place = $tmp[4];
	$tr = $t;
  
  if($link=="0"){
  	print "<tr><td >&nbsp;</td></tr>";
	$tr = $t - 1;
  }
  else {
  $image = $stream->do_query("select link from anto_images where name='menuhover'","one");
  if($t==0){
			$tr = "";
		}
  
  		if($bold==1){	
			print "<tr>\n
      		<td><a class='menulink' onMouseover=\"show('$image','$tr')\" onMouseout=\"show('media/blank.jpg','$tr')\"  href='$link'>\n 
			<b class='menubold'> $title </b>\n
			<img border='0' src='media/blank.jpg' name='myImage$tr' alt='image'></a><br>\n
      </td>\n
    </tr>\n";
		}
	
	else {
	
		print "<tr>
      <td><a class='menulink' onMouseover=\"show('$image','$tr')\" onMouseout=\"show('media/blank.jpg','$tr')\"  href='$link'>\n  $title <img border=0 src='media/blank.jpg' name='myImage$tr' alt='image'></a><br>
      </td>\n
    </tr>\n";
		}
	}
}
print "</table>";
}
  ?>

<table width="80%"  border="0" cellspacing="0" cellpadding="2">
  <tr><td>
<br /><br /><br />Color Scheme :<br /><br />
<?php
$color1 = $stream->do_query("select link from anto_images where name='color1'","one");
$color2 = $stream->do_query("select link from anto_images where name='color2'","one");
$color3 = $stream->do_query("select link from anto_images where name='color3'","one");
$small = $stream->do_query("select link from anto_images where name='small'","one");
$medium = $stream->do_query("select link from anto_images where name='medium'","one");
$large = $stream->do_query("select link from anto_images where name='large'","one");

print "
<a href='index.php?setcolor=1'><img alt='Style 1' src='$color1' border=0></a> 
<a href='index.php?setcolor=2'><img alt='Style 2' src='$color2' border=0></a> 
<a href='index.php?setcolor=3'><img alt='Style 2' src='$color3' border=0></a>
<br /><br />Text Size :<br /><br />
<a href='index.php?setsize=11px'><img alt='size 1' src='$small' vspace=2 border=0></a> <br />
<a href='index.php?setsize=13px'><img alt='size 2' src='$medium' vspace=2 border=0></a> <br />
<a href='index.php?setsize=15px'><img alt='size 2' src='$large' vspace=2 border=0></a> <br />";

?>


</td></tr></table>
<table width="80%"  border="0" cellspacing="0" cellpadding="2">
  <tr><td>
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
  
print "<table width='80%' cellpadding='2' cellspacing='0' border='0'>";
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
print "<table width='80%' cellpadding='2' cellspacing='0' border='0'><tr><td><h5>Shout!</h5></td></tr>";
print "<tr><td>Posted by : <input type=text name=s_name size=18></td></tr>";
print "<tr><td>Email Addy : <input type=text name=s_email size=18></td></tr>";
print "<input type=hidden readonly value='$REMOTE_ADDR' name=ipaddy>";
print "<tr><td>Message</td></tr><tr><td><textarea cols='10' rows='10' onKeyUp='countchars()' class=small name=s_msg>150 characters max, keep it short, cause im just gona cut the end off your message!</textarea></td></tr>";
print "<tr><td colspan=2>Chars : <input type=text size=3 value='' name=sizeof width=3> <input type=button onClick=\"harsh()\" value='Shout'><br>
<hr></td></tr></table></form>";
?>
</td></tr></table><br /><br />
<table width="80%"  border="0" cellspacing="0" cellpadding="2">
  <tr><td>
  Visitors :
  <?php include("counter.php"); ?>
  <br>
  <?php include("lastupdated.php"); ?>
  <br>
  </td></tr></table>
</div>
