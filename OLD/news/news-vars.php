<?PHP
/*************************************************
 	Set MySQL Access (Edit)
*************************************************/
	$phost		= "localhost";
	$puser		= "antoremote";
	$ppassword	= "gigspage";

	$pdatabase	= "anto";

/*************************************************
 	Database Connection (DO NOT EDIT)
*************************************************/
	$connection = mysql_connect($phost,$puser,$ppassword)
		or die (mysql_error());

	$db = mysql_select_db("$pdatabase",$connection)
		or die (mysql_error());

/*************************************************
 	Variables (Edit)
*************************************************/
	$tablewidth	= "600";	//Width of the output table
	$titlebg	= "#D3D3D3";	//Title background color
	$imagebg	= "#FFFFFF";	//Image background color
	$infobg		= "#EEEEEE";	//Post info background color (cell below the title)
	$postbg		= "#FFFFFF";	//Post area background color
	$printbg	= "#DDDDDD";	//Background color of the email/printer icons
	$barbg		= "#EEEEEE";	//Bottom bar (empty) color

	$postlimit	= "40";		//Number of posts to display

?>
