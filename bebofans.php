<?php


if($fp = fopen("http://www.bebo.com/Profile.jsp?MID=367137231&MemberId=474107329",'r')){

$fed = fread($fp,60000);

$content = explode("<h1>Friends</h1>",$fed);
$comments = explode("</div></div></div>",$content[1]);

$dead = eregi_replace("<a href=","<a href=http://www.bebo.com/",$comments[0]);
print $dead;



}