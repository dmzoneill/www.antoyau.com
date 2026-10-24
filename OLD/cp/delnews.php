<?php
// phpcs:ignoreFile
// jscpd:ignore-start

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $control = $_GET['control'];
$id = $_GET['id'];

/** @psalm-suppress RiskyTruthyFalsyComparison */ /** @psalm-suppress RiskyTruthyFalsyComparison */ if($id){
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable, PossiblyInvalidCast */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable, PossiblyInvalidCast */ $sql = $stream->do_query("delete from news_data where id='$id'","one");
print "Deleted";
}
else {
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = $stream->do_query("select * from news_data","array");

for($i=0;$i<count($sql);$i++){

	/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ $oldmonth = $newmonth; 
	$tmp = $sql[$i];
	$id = $tmp[0];
	$title = substr("$tmp[1]",0,25);
    /** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $image = $tmp[2];
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $poster = $tmp[3];
	$dated = $tmp[4]; 
	$post = substr("$tmp[5]",0,50);

print "<table width=600><tr><td><div align=left>[<a style='color:#ff0000;' href='admin.php?control=delnews&id=$id'>Del</a>] <b style='color:#ff0000;'>Date</b> $dated <b style='color:#ff0000;'>Title</b> $title <B style='color:#ff0000;'>Message</b> $post<br></td></tr></table>";

}
}

?>
<?php // jscpd:ignore-end ?>
