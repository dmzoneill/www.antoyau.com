<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

switch($mint){


default:

for($t=0;$t<300;$t++){

print "$t = " .chr($t) . "<br>";

}

?>

<form action=enc.php?mint=show method=post>

<textarea cols=80 rows=20 name='ggg'></textarea>

<input type=submit />

</form>



<?php


break;


case "show":

print rawurlencode($ggg);

break;



}
?>



</body>
</html>
