<?php
// phpcs:ignoreFile
// jscpd:ignore-start
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $num = $stream->do_query("select num from anto_counter where id='1'","one");
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$pagename){
$newnum = $num + 1;
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable */ $update = $stream->do_query("update anto_counter set num='$newnum' where id='1'","one");
$num = $newnum;
}
$numno = strlen($num);
$start = $numno - 3;
$rest = substr("$num", $start, $numno);
/** @psalm-suppress ArgumentTypeCoercion */ $num = explode("$rest",$num);

print "$num[0],$rest";
?>
<?php // jscpd:ignore-end ?>
