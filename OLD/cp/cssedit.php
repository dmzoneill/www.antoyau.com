<?php

$setstyle = $_GET['setstyle'];
$control = $_GET['control'];
$styleid = $_POST['styleid'];
$add = $_GET['add'];
$csst = $_POST['csst'];
$css_object = $_POST['css_object'];
$edit = $_GET['edit'];
$add = $_GET['edit'];
$makecss = $_GET['makecss'];




print "<br><br><br>";
$sq = $stream->do_query("select id from anto_css where act='1'","one");
if($styleid){
$sq = $styleid;
}

print "<table width=600><tr><td><a href='admin.php?control=css&cssedit=add'>Add New Style</a> | 
<a href='admin.php?control=css&cssedit=edit'>Edit Current Style</a><br></td></tr></table><br><h5>Current style : Style $sq</h5><hr>";

switch($cssedit){

default:

if($setstyle){
$sqlt = $stream->do_query("update anto_css set act='0' where id>0","one");
$sqlt = $stream->do_query("update anto_css set act='1' where id=$styleid","one");

print "<h5>Default style selected</h5>";

}


$sql = $stream->do_query("select * from anto_css","array");

print "<form action=admin.php?control=css&setstyle=true method=post><br>Set Style : <select name='styleid'>";

for($t=0;$t<count($sql);$t++){

$tp = $sql[$t];
$id = $tp[0];

print "<option value='$id'>Style $id</option>";

}

print "</select> as <input type=submit value='Current Theme'></form>";

break;


case "edit":

print "<h6><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></h6>";

if($edit=="true"){


if($makecss=="true"){

function printNestedArray($a) {
$t = 0;
$sex = "";
    foreach ($a as $key => $value) {
      if (is_array($value)) {
	  //here
        			 foreach ($value as $key => $value1) {
   						   if (is_array($value1)) {
	 							 //here
        					  			 foreach ($value1 as $key => $value2) {
    											  if (is_array($value2)) {
														  //here
        
													  } else {
      											  $sex .= trim(htmlspecialchars($value2)) . ";\n";
    										  }
   												 }
							  

							  } else {
      							  $sex .= trim(htmlspecialchars($value1)) . ":";
    						  }
    					  }
	  } else {
	  if($t>0) $sex .= " } \n";  
        $sex .= trim(htmlspecialchars($value)) . " { \n";
		$t++;
      }
    }
	$sex .= "\n}\n"; 
	return ($sex);
 }


$csst = rawurlencode(printNestedArray($css_object));

$sqlt = $stream->do_query("update anto_css set css='$csst' where act=1","one");

print "<h5>Style Updated</h5>";

}

else {

$csst = rawurlencode($csst);

$sqlt = $stream->do_query("update anto_css set css='$csst' where act=1","one");

print "<h5>Style Updated</h5>";

}

}

$sql = stripslashes(rawurldecode($stream->do_query("select css from anto_css where act=1","one")));


print "<h5 onClick=\"expandcontent(this, 'sc0')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Simple Editor [click to expand]</h5><div id=\"sc0\" class=\"switchcontent\">";

print "<br><h5>The CSS</h5><hr><br><form action='admin.php?control=css&cssedit=edit&edit=true&makecss=true' method='post'><table cellpadding=1 border=0><tr><td width 180><font color=blue>HTML TAG</font></td><td><font color=blue>Properties that apply to it!</font></td></tr>";

$qwe = explode("}",$sql);


for($t=0;$t<count($qwe)-1;$t++){
$rrr = explode("{",$qwe[$t]);

if(count(explode(".",$rrr[0]))>1){
$iii = explode(".",$rrr[0]);
$text = "$iii[0] class='$iii[1]'";
}
else {
$text = $rrr[0];
}

if($t%2>0){
$bg = " bgcolor='#ededed' ";
}
else {
$bg = " bgcolor='#cdcdcd' ";
}

print "<tr bgcolor='#333333'><td colspan=2><input type=hidden name='css_object[]' value='$rrr[0]'><b> &lt; $text &gt;</b></td></tr>\n";

$ooo = explode(";",$rrr[1]);

for($p=0;$p<count($ooo)-1;$p++){
$yyy = explode(":",$ooo[$p]);
print "<tr$bg><td width=180><input type=hidden value='$yyy[0]' name='css_object[][]'>\n";
print "$yyy[0] : </td><td><input type=text value='$yyy[1]' name='css_object[][][]'></td></tr>\n";

}

print "<tr><td colspan=2></td></tr>\n";

}
print "<tr><td colspan=2><input type=submit value='Change Style'> <input type=reset value='Reset'></td></tr>\n";
print "</table></form></div>\n";

print "<h5 onClick=\"expandcontent(this, 'sc1')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Advanced Editor [click to expand]</h5><div id=\"sc1\" class=\"switchcontent\">";

print "<br><h5>The CSS</h5><hr><br><form action=admin.php?control=css&cssedit=edit&edit=true method=post>";
print "<textarea class='css' name=csst>$sql</textarea><br>";
print "<input type=submit value='Update Css'> <input type=reset value='Reset'> </form>";
print "</div>";

break;

case "add":


if($add=="true"){

$csst = rawurlencode($csst);

$sqlt = $stream->do_query("insert into anto_css values('','$csst','0')","one");

print "<h5>Style Added</h5>";

}


print "<h5>Add New Style</h5><hr><br><form action=admin.php?control=css&cssedit=add&add=true method=post>";
print "<textarea class='css' name=csst></textarea><br>";
print "<input type=submit value='Add Css'></form>";


break;


}




?>