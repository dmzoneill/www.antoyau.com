<?php 


//sub menus

if($z==0){


switch($pagename){
						
	default:
			print "<a href='index.php?pagename=homepage&sub=links'>Links</a> ";
	break;
						
	case "tour":
			print "<a href='index.php?pagename=tour&sub=archive'>Gigs Archive</a>";
	break;
						
	case "journal":
			print "Journal";
	break;
						
	case "lyrics":
			print "<a href='index.php?pagename=lyrics&sub=notes'>Notes</a> | <a href='index.php?pagename=lyrics&sub=player'>Music Player</a>";
	break;
						
	case "information":
			print "<a href='index.php?pagename=information&sub=bio-reviews'>Press Releases</a> | <a href='index.php?pagename=information&sub=bio-other'>Other</a>";
	break;
						
	case "news":
			print "News";
	break;
						
	case "photographs":
			print "<a href='index.php?pagename=photographs&sub=pics-chilling'>Anto Chilling</a> | <a href='index.php?pagename=photographs&sub=pics-other'>Misc</a>";
	break;
						
	case "team":
			print "<a href='index.php?pagename=photographs&sub=aff'>Affiliates</a>";
	break;
						
	case "contact":
			print "<a href='index.php?pagename=contact'>Anto</a> | <a href='index.php?pagename=contact&fdude=claire'>Claire</a> | <a href='index.php?pagename=contact&fdude=dave'>Dave</a>";
	break;
	
	case "mailinglist":
			print "Join the Anto Yau Mailing List";
	break;
	
	case "staff":
			print "Staff";
	break;
	
	case "shop":
			print "Shop";
	break;
	
	case "404":
			print "You got lost!";
	break;
						
}


}






















// Main Page

if($z==1){
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
						
	case "tour":
			include("gigs.php"); 
	break;
						
	case "journal":
			include("journal.php"); 
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
}














// Top Page

if($z==2){
switch($pagename){
						
	default:
			include("intro.php"); 
	break;
						
	case "tour":
			include("intro.php"); 
	break;
						
	case "journal":
			include("intro.php"); 
	break;
						
	case "lyrics":
			include("intro.php"); 
	break;
						
	case "information":
			include("intro.php"); 
	break;
						
	case "news":
			include("intro.php"); 
	break;
						
	case "photographs":
			include("intro.php"); 
	break;
						
	case "team":
			include("intro.php"); 
	break;
						
	case "contact":
			include("intro.php"); 
	break;
	
	case "mailinglist":
			include("intro.php"); 
	break;
	
	case "staff":
			include("intro.php"); 
	break;
	
	case "shop":
			include("intro.php"); 
	break;
	
	case "404":
			include("intro.php"); 
	break;
						
}
}












// Page Title

if($z==3){
switch($pagename){
	
	default:
		$message[0] = "What's going down?";
		$message[1] = "What's the story?";
		$message[2] = "What's up?";
		$message[3] = "What's the scenario?";
		$message[4] = "What's the plan?";
		$message[5] = "Confused...?";
		$message[6] = "What's happening?";
		$crap = count($message);
		$num = rand(0,6);
		if($gigid){
			$txt = "Gig Details";
		}
		else {
			$txt = $message[$num];
		}
		print "<font color='FF6600'><b>$txt </b></font>";
	break;
	
}
}


?>