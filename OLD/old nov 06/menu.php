
  <?

print "<center><table width=\"150\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">";
   
  
  
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
  		print "<tr><td align=left><a class='menulink' href=\"#\">\n<b class='menubold'>&nbsp;</b></a><br></td>\n</tr>";
		$tr = $t - 1;
  	}
  	else {
  		if($t==0){
			$tr = "";
		}
  
  		if($bold==1){	
			if(stristr($link,"http://")){
				print "<tr><td align=left><a class='menulink' href=\"$link\">\n<b class='menubold'>$title</b></a><br></td>\n</tr>\n";
			}
			else if(stristr($link,"index.php")){
				print "<tr><td align=left><a class='menulink' href=\"$link\">\n<b class='menubold'>$title</b></a><br></td>\n</tr>\n";
			}
			else {
				print "<tr>\n<td align=left><a class='menulink' href=\"javascript:loadurl('$link','output');\">\n <b class='menubold'> $title </b>\n</a><br>\n</td>\n</tr>\n";
			}
		}
		else {
			if(stristr($link,"http://")){
				print "<tr><td align=left><a class='menulink' href=\"$link\">\n  $title </a><br></td>\n</tr>\n";
			}
			else if(stristr($link,"index.php")){
				print "<tr><td align=left><a class='menulink' href=\"$link\">\n$title</a><br></td>\n</tr>\n";
			}
			else {
				print "<tr>
      <td align=left><a class='menulink' href=\"javascript:loadurl('$link','output');\">\n  $title </a><br></td>\n</tr>\n";
			}
		}
	}
}
print "</table>";


?>


<table width="80%"  border="0" cellspacing="0" cellpadding="2">
  <tr><td>
  Visitors :
  <?php include("counter.php"); ?>
  <br>
  <?php include("lastupdated.php"); ?>
  <br>
  </td></tr></table><br />
  

