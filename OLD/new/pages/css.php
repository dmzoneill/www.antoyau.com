<?php // phpcs:ignoreFile ?>
<?php // jscpd:ignore-start ?>
<style type="text/css">
<?php
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$mintage1){
$mintage1 = "11px";
}
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $css = stripslashes(rawurldecode($stream->do_query("select css from anto_css where id='$mintage'","one")));
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ $css = eregi_replace("11px",$mintage1,$css);
print $css;

?>

</style>
<?php // jscpd:ignore-end ?>
