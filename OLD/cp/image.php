<SCRIPT language="JavaScript" type="text/javascript">
<!-- ;
var newwindow = ''
function popitup(url) {
if (newwindow.location && !newwindow.closed) {
    newwindow.location.href = url;
    newwindow.focus(); }
else {
    newwindow=window.open('http://www.antoyau.com/' +url,'Preview','width=404,height=316,resizable=1');}
}

function tidy() {
if (newwindow.location && !newwindow.closed) {
   newwindow.close(); }
}
// Based on JavaScript provided by Peter Curtis at www.pcurtis.com -->
</SCRIPT>

<?php


if($idd){
$stream->do_query("update anto_images set link='$newurl' where id='$idd'","one");

print "<h5> Image Changed </h5><hr><br>";
}


switch($image){



default:



$images = $stream->do_query("select * from anto_images","array");



for($r=0;$r<count($images);$r++){
$tmp = $images[$r];
$id = $tmp[0];
$name = $tmp[1];
$link = $tmp[2];
print "<h5>$name</h5>";
print "<table width=100% bgcolor=#000000 cellpadding=0 cellspacing=1 border=0><tr><td>\n";
print "<table width=100% bgcolor=#ffffff cellpadding=3 cellspacing=0 border=0>\n";
print "<form action='admin.php?control=imagechanger&idd=$id' name='hhh$r' method=post>\n";
print "<tr><td>Old Link</td><td><input readonly=yes value='$link' type='text' name=newurl></td><td rowspan=3><img src='http://www.antoyau.com/$link' border=0><br></td></tr><tr><td>New Link</td><td>\n";

$dir = "../media";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
   if ($dh = opendir($dir)) {
   print "<select name='img' onchange=\"document.hhh$r.newurl.value=this.value\">\n";
   echo "<option value='crap'>Select a New Image</option><br>\n";
       while (($file = readdir($dh)) !== false) {
	   if(($file==".") || ($file=="..")){
	   	continue;
	   }
           echo "<option value='media/$file'>$file</option><br>\n";
       }
       closedir($dh);
	   print "</select><br><A HREF=\"javascript:popitup(document.hhh$r.newurl.value)\">Preview New Image</a>\n";
   }
}

print "</td></tr>\n";
print "<tr><td colspan=2><input type=submit value='Change Image'> <input type=reset value='Reset'></td></tr></form>\n";
print "</table></td></tr></table><br><br>\n\n";
}




break;


case "upload":

print "<h5>So you want to upload some images</h5><h5>ANTO RESIZE THOSE IMAGES FIRST!</h5>";

if(!$uploadNeed){
?>

<form name="form1" method="post" action="admin.php?control=imagechanger&image=upload">
  <p>Enter the amount of images to upload you will need below. Max = 9.</p>
  <p>
    <input name="uploadNeed" type="text" id="uploadNeed" maxlength="1">
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>

<?php
}
else {

?>
<form name="form1" enctype="multipart/form-data" method="post" action="admin.php?control=imagechanger&image=upload">
  <p>
  <?
  for($x=0;$x<$uploadNeed;$x++){
  ?>
    <input name="uploadFile<? echo $x;?>" type="file" id="uploadFile<? echo $x;?>"><br />
  </p>
  <?
  }
  ?>
  <p><input name="uploadNeed" type="hidden" value="<? echo $uploadNeed;?>">
  <input name="uploadNeed2" type="hidden" value="<? echo $uploadNeed;?>">
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
<?php

}


if($uploadNeed2){


for($x=0;$x<$uploadNeed;$x++){
$file_name = $HTTP_POST_FILES['uploadFile'. $x]['name'];
$file_name = stripslashes($file_name);
$file_name = str_replace("'","",$file_name);
$copy = copy($HTTP_POST_FILES['uploadFile'. $x]['tmp_name'],$DOCUMENT_ROOT ."/media/" .$file_name);
  if($copy){
 echo "$file_name | uploaded sucessfully!<br>";
 }else{
 echo "$file_name | could not be uploaded!<br>";
 }
} // end of loop
}
break;


}





?>