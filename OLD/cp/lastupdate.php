<?php

$lin = time();
$sql = $stream->do_query("insert into anto_lastupdate values('','$lin')","one");
print "Last Modified site time updated";

?>