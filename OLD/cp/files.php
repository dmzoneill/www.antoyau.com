<?php

if($delete){

$delete = substr($delete,2,strlen($delete));

$sys = shell_exec("rm -rvf " .$DOCUMENT_ROOT ."$delete");

if(strlen($sys)<5){
$sys = "File Not Deleted!";
}

print "<h5>File Deleted!!</h5><hr><br> Debug : $sys<br> <hr>";


}



if($rename){
$q=0;
$o=0;
print "<hr>File renaming process</h5><hr><br>";
for($y=0;$y<count($filez);$y++){

$pp = substr($url[$y],3,strlen($url[$y]));

$ttt = explode("/",$pp);

if(rename("$DOCUMENT_ROOT$pp","$DOCUMENT_ROOT/$ttt[1]/$filez[$y]")){
$q++;
}
else {
print "Unable to rename file : $DOCUMENT_ROOT$pp<br>";
$o++;
}
if(($o>0) && ($y==count($files)-1)){
print "<br><hr><br>";
}
}
print "Total of $q files renamed successfully<br>Total of $o failed<br><hr><br>";
}







if($uploadto){

print "<h5>So you want to upload some files</h5>";

if(!$uploadNeed){
?>

<form name="form1" method="post" action="admin.php?control=filemanager&uploadto=true&image=upload&dir=<?php print $dir; ?>">
  <p>Enter the amount of files to upload you will need below. Max = 9. (<?php print $dir; ?>)</p>
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
<form name="form1" enctype="multipart/form-data" method="post" action="admin.php?control=filemanager&uploadto=true&image=upload&dir=<?php print $dir; ?>">
  
  <?
  print "Upload these files to this folder ($dir)<br><br>";
  for($x=0;$x<$uploadNeed;$x++){
  ?>
    <input name="uploadFile<? echo $x;?>" type="file" id="uploadFile<? echo $x;?>"><br />
  
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
$copy = copy($HTTP_POST_FILES['uploadFile'. $x]['tmp_name'],$DOCUMENT_ROOT ."/$dir/" .$file_name);
  if($copy){
 echo "$file_name | uploaded sucessfully!<br>";
 }else{
 echo "$file_name | could not be uploaded!<br>";
 }
} // end of loop
}
}


print "<form action=admin.php?control=filemanager&rename=true method=post>";
print "<table cellpadding=4 border=0 width=100%>";

create_tree("../");
function create_tree($file_dir)
{
        if ($handle = @opendir($file_dir))
        {
                $i=0;
                while (false !== ($file = @readdir($handle)))
                {
                        if ($file != "." && $file != ".." && $file !="phpBB2" && $file !="cp" && $file !="flash" && $file !="news" && $file !="stats" )
                        {
                                $list[$i]=$file;
                                $i++;
                        }
                }
				
                $dir_length = count($list);
                
                for($i=0;$i<$dir_length;$i++)
                {
                        if(strrpos($list[$i], ".") == FALSE)
                        {
						if(substr($list[$i],0,strlen($list[$i]))!=".htaccess"){
						if(substr($list[$i],0,strlen($list[$i]))!=".htaccess~"){
                                echo "<tr><td width=100% colspan=3>
								<h5>Directory '".$list[$i]."' Contents</h5><hr>
								<a href='admin.php?control=filemanager&uploadto=true&dir=$list[$i]'>
								Upload Files To This Directory</a><br><hr></td></tr>";
                                create_tree($file_dir."/".$list[$i]);
								}
								}
                        }
                        else
                        {
							if(substr($list[$i],strlen($list[$i])-3,strlen($list[$i]))!="php"){
							if(substr($list[$i],strlen($list[$i])-3,strlen($list[$i]))!="swf"){
							if(substr($list[$i],strlen($list[$i])-2,strlen($list[$i]))!="js"){
							if(substr($list[$i],strlen($list[$i])-4,strlen($list[$i]))!="html"){//
							if(substr($list[$i],0,strlen($list[$i]))!=".htaccess"){
							
							$size = round(filesize($file_dir."/".$list[$i])/1024);
							if($size<1){
							$size = 1;
							}
                                echo "<tr><td width=250>
								<a href=\"".$file_dir."/".$list[$i]."\">".$list[$i]."</a></td><td width=100>Filesize : " 
								. $size ." kb</td><td width=250 align=right> 
								<input type=text name='filez[]' value='$list[$i]'>
								<input type=hidden name=url[] value='$file_dir/$list[$i]'> 
								<a href='admin.php?control=filemanager&delete=$file_dir/$list[$i]'>Delete</a></td></tr>";
							}
							}
							}
							}
							}
                        }
                }
                
                closedir($handle);
        }
}
print "<tr><td colspan=3><br><br><center><input type=submit value='Rename Files'> <input type=reset value='Reset'><br>All files will be renamed<br> (untouched files will still have the same name)</td></tr></table>";
?>