
<script language=javascript type=text/javascript>

function m_bold<?php print $crap; ?>(){
var txt = prompt("Please enter the text you would like in bold","");
txt = "<b>" + txt + "</b>";
document.<?php print "$f_n.$f_b"; ?>.value+=txt;
}

function m_italic<?php print $crap; ?>(){
var txt = prompt("Please enter the text you would like in italics","");
txt = "<i>" + txt + "</i>";
document.<?php print "$f_n.$f_b"; ?>.value+=txt;
}


function m_img<?php print $crap; ?>(){
var txt = prompt("Please enter the image location","media/");
txt = "<img src='" + txt + "' border=0>";
document.<?php print "$f_n.$f_b"; ?>.value+=txt;
}

function m_link<?php print $crap; ?>(){
var txt = prompt("Please enter the url","http://www.antoyau.com");
var txt2 = prompt("Please enter the text for the link","some text");
txt = "<a href='" + txt + "'>" + txt2 + "</a>";
document.<?php print "$f_n.$f_b"; ?>.value+=txt;
}

function m_underline<?php print $crap; ?>(){
var txt = prompt("Please enter the text you would like to be underlined","");
txt = "<u>" + txt + "</u>";
document.<?php print "$f_n.$f_b"; ?>.value+=txt;
}

</script>
<input type='button' onclick='m_bold<?php print $crap; ?>();' value='Bold' /> 
<input type='button' onclick='m_italic<?php print $crap; ?>();' value='Italics' /> 
<input type='button' onclick='m_underline<?php print $crap; ?>();' value='Underline' /> 
<input type='button' onclick='m_img<?php print $crap; ?>();' value='Image' /> 
<input type='button' onclick='m_link<?php print $crap; ?>();' value='Hyperlink' /> 
<br /><br /><hr />