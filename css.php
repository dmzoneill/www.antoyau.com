<style type="text/css">
<?php
if(!$mintage1){
$mintage1 = "11px";
}
$css = stripslashes(rawurldecode($stream->do_query("select css from anto_css where id='$mintage'","one")));
$css = eregi_replace("11px",$mintage1,$css);
print $css;

?>

</style>