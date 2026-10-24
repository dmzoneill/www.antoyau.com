<?php
// phpcs:ignoreFile
// jscpd:ignore-start
include("connect.php");
/** @psalm-suppress RiskyTruthyFalsyComparison, PossiblyFalseArgument */ if(stristr(getenv('SCRIPT_URI'),'index.php')){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $num = count($stream->do_query("select * from anto_lastupdate","array"));
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $rdate = $stream->do_query("select lup from anto_lastupdate where id='$num'","one");
$today = date("F j, Y",$rdate);
print "Last Updated<BR>$today";
}
/** @psalm-suppress RiskyTruthyFalsyComparison, PossiblyFalseArgument */ if(stristr(getenv('SCRIPT_URI'),'admin.php')){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $num = count($stream->do_query("select * from anto_lastupdate","array"));
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $rdate = $stream->do_query("select lup from anto_lastupdate where id='$num'","one");
$today = date("F j, Y",$rdate);
print "Last Updated<BR>$today";
}


?>
<?php // jscpd:ignore-end ?>
