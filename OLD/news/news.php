<?PHP

include ("/home/sites/www.antoyau.com/web/news/news-vars.php");

/***************************************************
	Get news posts from MySQL - Create array
***************************************************/
$query = "SELECT * FROM news_data ORDER BY id DESC LIMIT $postlimit";
$result = mysql_query($query)
	or die (mysql_error());

while ($data = mysql_fetch_assoc($result)) {
	extract ($data);


	/***************************************************
		Simplify variables from array
	***************************************************/
	$title 	= $data['title'];	//Title of news post
	$poster = $data['poster'];	//User who posted the news item
	$date 	= $data['date'];	//Date news post was added
	$image 	= $data['image'];	//Image that will be displayed with the post
	$post 	= $data['post'];	//The news post itself
	$email	= $email['email'];	//Email address of the poster

	/***************************************************
		Echo HTML

		Edit this section if you want to customize
		the appearence of the news posts.

		Make sure to leave the php 'echo " ";'
		statements.
	***************************************************/
	echo "
	<table align='center' width='$tablewidth'>
	<tr>
		<td  width='100%'>
			<font color=#ff6600 size=1><b>$title</b></font><br>
<i>Posted by <a href='index.php?pagename=contact'>anto</a> on $date</i><a href='index.php?pagename=contact'>
			<img src='news/icons/email.gif' align='absmiddle' hspace='2' vspace='1' border='0' alt='Send an email to the author.'></a>
		</td>
	</tr>
	<tr>
		<td valign='top' width='100%' colspan=2>
				$post
		</td>
	</tr>
</table>
	

	<br><br>
	";

}
?>
