<?php 

include("connect.php"); 

function getpage($page){
global $stream;
$page = strtolower($page);
$page = rawurldecode($stream->do_query("select content from anto_pages where name='$page'","one"));
print stripslashes(nl2br($page));

}
if(!$pagename){
$pagename = "start";
}

switch($pagename){
						
	default:
	if($QUERY_STRING==""){
	$showmain = true;
	}
	if($pagename){
		if(!$sub){
			getpage($pagename);
		}
		else {
			getpage($sub);
		}
	}
	if($showmain){
			include("mainpage.php"); 
	}
	break;
			
	case "start":
		include("mainpage.php"); 
	break;		
						
	case "tour":
			include("gigs.php"); 
	break;
						
	case "journal":
			include("journal.php"); 
	break;
	
 	case "bebo":
			include("bebocom.php"); 
	break;	
	
	case "bebofans":
			include("bebofans.php"); 
	break;	
	
	case "bebobands":
			include("bebobands.php"); 
	break;	
	
	case "myspace":
			include("myspace.php"); 
	break;	
			
	case "lyrics":
			include("lyrics.php"); 
	break;
						
	case "information":
			include("info.php"); 
	break;
						
	case "news":
			include("./news/news.php"); 
	break;
						
	case "photographs":
			include("photos.php"); 
	break;
						
	case "team":
			include("team.php"); 
	break;
						
	case "contact":
			include("contact.php"); 
	break;
	
	case "mailinglist":
			include("mailinglist.php"); 
	break;
	
	case "staff":
			include("staff.php"); 
	break;
	
	case "shop":
			include("shop.php"); 
	break;
	
	case "404":
			include("404.php"); 
	break;
						
}




?>