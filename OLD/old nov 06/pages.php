<?php // phpcs:ignoreFile ?>
<?php 
// jscpd:ignore-start

include("connect.php"); 

/** @psalm-suppress MissingReturnType, MissingParamType */ /** @psalm-suppress MissingReturnType, MissingParamType */ function getpage($page){
global $stream;
$page = strtolower($page);
/** @psalm-suppress UndefinedClass */ /** @psalm-suppress UndefinedClass */ $page = rawurldecode($stream->do_query("select content from anto_pages where name='$page'","one"));
print stripslashes(nl2br($page));

}
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$pagename){
$pagename = "start";
}

switch($pagename){
						
	default:
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if($QUERY_STRING==""){
	$showmain = true;
	}
	/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison, RedundantCondition */ /** @psalm-suppress RiskyTruthyFalsyComparison, RedundantCondition */ if($pagename){
		/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$sub){
			getpage($pagename);
		}
		else {
			getpage($sub);
		}
	}
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ /** @psalm-suppress PossiblyUndefinedGlobalVariable */ if($showmain){
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
			/* @phpstan-ignore-line */ /** @psalm-suppress MissingFile */ /** @psalm-suppress MissingFile */ include("./news/news.php"); 
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
<?php // jscpd:ignore-end ?>
