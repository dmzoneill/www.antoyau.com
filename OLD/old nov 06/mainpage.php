<?php

if($sub){
getpage($sub);
}
else {

if(!$sub){
$sub = "mainpage";
}
getpage($sub);

}


?>