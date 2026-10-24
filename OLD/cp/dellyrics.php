<?php
// phpcs:ignoreFile
// jscpd:ignore-start

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $control = $_GET['control'];
$delpage = $_GET['delpage'];

/** @psalm-suppress RiskyTruthyFalsyComparison */ /** @psalm-suppress RiskyTruthyFalsyComparison */ if($delpage){
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable, PossiblyInvalidCast */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable, PossiblyInvalidCast */ $sql = $stream->do_query("DELETE FROM anto_lyrics where id='$delpage'","one");
print "Lyrics Deleted!";
}
else {
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $sql = $stream->do_query("SELECT * FROM anto_lyrics","array");
for($crap=0;$crap<count($sql);$crap++){
$tmp = $sql[$crap];
$id = $tmp[0];
$name = $tmp[1];
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $content = $tmp[2];
print "<table width=600><tr><td align=left><a href='admin.php?control=dellyrics&delpage=$id'>$name</a></td></tr></table>";
}
}


?>
<?php // jscpd:ignore-end ?>
