<?php 



include("connect.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php print "anto yau - $pagename"; ?></title>
<META HTTP-EQUIV="Page-Enter" content="revealTrans(Duration=1,Transition=12)">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 

include("../css.php");

 ?>
 <script type="text/javascript">

/***********************************************
* Switch Content script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use. Last updated April 2nd, 2005.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var enablepersist="on" //Enable saving state of content structure using session cookies? (on/off)
var collapseprevious="no" //Collapse previously open content when opening present? (yes/no)

var contractsymbol='- ' //HTML for contract symbol. For image, use: <img src="whatever.gif">
var expandsymbol='+ ' //HTML for expand symbol.


if (document.getElementById){
document.write('<style type="text/css">')
document.write('.switchcontent{display:none;}')
document.write('</style>')
}

function getElementbyClass(rootobj, classname){
var temparray=new Array()
var inc=0
var rootlength=rootobj.length
for (i=0; i<rootlength; i++){
if (rootobj[i].className==classname)
temparray[inc++]=rootobj[i]
}
return temparray
}

function sweeptoggle(ec){
var thestate=(ec=="expand")? "block" : "none"
var inc=0
while (ccollect[inc]){
ccollect[inc].style.display=thestate
inc++
}
revivestatus()
}


function contractcontent(omit){
var inc=0
while (ccollect[inc]){
if (ccollect[inc].id!=omit)
ccollect[inc].style.display="none"
inc++
}
}

function expandcontent(curobj, cid){
var spantags=curobj.getElementsByTagName("SPAN")
var showstateobj=getElementbyClass(spantags, "showstate")
if (ccollect.length>0){
if (collapseprevious=="yes")
contractcontent(cid)
document.getElementById(cid).style.display=(document.getElementById(cid).style.display!="block")? "block" : "none"
if (showstateobj.length>0){ //if "showstate" span exists in header
if (collapseprevious=="no")
showstateobj[0].innerHTML=(document.getElementById(cid).style.display=="block")? contractsymbol : expandsymbol
else
revivestatus()
}
}
}

function revivecontent(){
contractcontent("omitnothing")
selectedItem=getselectedItem()
selectedComponents=selectedItem.split("|")
for (i=0; i<selectedComponents.length-1; i++)
document.getElementById(selectedComponents[i]).style.display="block"
}

function revivestatus(){
var inc=0
while (statecollect[inc]){
if (ccollect[inc].style.display=="block")
statecollect[inc].innerHTML=contractsymbol
else
statecollect[inc].innerHTML=expandsymbol
inc++
}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function getselectedItem(){
if (get_cookie(window.location.pathname) != ""){
selectedItem=get_cookie(window.location.pathname)
return selectedItem
}
else
return ""
}

function saveswitchstate(){
var inc=0, selectedItem=""
while (ccollect[inc]){
if (ccollect[inc].style.display=="block")
selectedItem+=ccollect[inc].id+"|"
inc++
}

document.cookie=window.location.pathname+"="+selectedItem
}

function do_onload(){
uniqueidn=window.location.pathname+"firsttimeload"
var alltags=document.all? document.all : document.getElementsByTagName("*")
ccollect=getElementbyClass(alltags, "switchcontent")
statecollect=getElementbyClass(alltags, "showstate")
if (enablepersist=="on" && ccollect.length>0){
document.cookie=(get_cookie(uniqueidn)=="")? uniqueidn+"=1" : uniqueidn+"=0" 
firsttimeload=(get_cookie(uniqueidn)==1)? 1 : 0 //check if this is 1st page load
if (!firsttimeload)
revivecontent()
}
if (ccollect.length>0 && statecollect.length>0)
revivestatus()
}

if (window.addEventListener)
window.addEventListener("load", do_onload, false)
else if (window.attachEvent)
window.attachEvent("onload", do_onload)
else if (document.getElementById)
window.onload=do_onload

if (enablepersist=="on" && document.getElementById)
window.onunload=saveswitchstate

</script>
</head>

<body bgcolor='#ffffff'>
<center><br><br>

<table width="800" bgcolor=='#ffffff' border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor=#ffffff width=30% align=left>
	
</td><td bgcolor=#ffffff width=70% align=right valign=bottom>
	</td>
  </tr>
</table>


<?PHP


$tour = count($stream->do_query("select * from anto_gigs","array"));
$journal = count($stream->do_query("select * from anto_journal","array"));
$songs = count($stream->do_query("select * from anto_lyrics","array"));
$mail = count($stream->do_query("select * from anto_mailinglist","array"));
$newss = count($stream->do_query("select * from news_data","array"));
?>
						<table width="800" bgcolor='#000000' height=300 border="0" cellspacing="0" cellpadding="1"><tr><td width=90% valign=top>
							<table width="800" bgcolor='#ffffff' height=300 border="0" cellspacing="0" cellpadding="10"><tr><td width=90% valign=top>
								

<?php
print "<table width=100% cellpadding=5 cellspacing=0><tr><td width=150 align=left>";

print "<font class=maintext>Total Gigs : <b>$tour</b><br>";
print "Total Journal Entries : <b>$journal</b><br>";
print "Total Songs : <b>$songs</b><br>";
print "Total Newss Entries : <b>$newss</b><br>";
print "Total on mailing list : <b>$mail</b><br>";
print "<hr><table cellpadding=5 cellspacing=0 border=0 width=150><tr><td width=90% align=left>";

print "
<a style='color:#000000;' href='admin.php?control=settings'>Settings</a><br>
<a style='color:#000000;' href='admin.php?control=filemanager'>File Manager</a><br><br>
<a style='color:#990000;' href='admin.php?control=colorchart'>Color Chart</a><br>
<a style='color:#990000;' href='admin.php?control=css'>Edit Style</a><br>
<a style='color:#990000;' href='admin.php?control=editmenu'>Edit Menu</a><br><br>
<a style='color:#330000;' href='admin.php?control=imagechanger'>Change Images</a><br>
<a style='color:#330000;' href='admin.php?control=imagechanger&image=upload'>Upload Images</a><br><br>
<a style='color:#00aa00;' href='admin.php?control=addnews'>Add News</a><br>
<a style='color:#00aa00;' href='admin.php?control=addjournal'>Add Journal Entry</a><br>
<a style='color:#00aa00;' href='admin.php?control=giginsert'>Add Gig</a><br>
<a style='color:#00aa00;' href='admin.php?control=addlyrics'>Add Lyrics</a><br><br>
<a style='color:#0000ff;' href='admin.php?control=editpage'>Edit Page</a><br>
<a style='color:#0000ff;' href='admin.php?control=gigedit'>Edit Gig</a><br>
<a style='color:#0000ff;' href='admin.php?control=editlyrics'>Edit Lyrics</a><br>
<a style='color:#0000ff;' href='admin.php?control=editnews'>Edit News</a><br>
<a style='color:#0000ff;' href='admin.php?control=editjournal'>Edit Journal Entry</a><br><br>
<a style='color:#ff0000;' href='admin.php?control=delnews'>Delete News</a><br>
<a style='color:#ff0000;' href='admin.php?control=gigdelete'>Delete Gig</a><br>
<a style='color:#ff0000;' href='admin.php?control=dellyrics'>Delete Lyrics</a><br>
<a style='color:#ff0000;' href='admin.php?control=deljournal'>Delete Journal Entry</a><br><br>
<a style='color:#ff0000;' href='admin.php?control=shoutbox'>Shoutbox Messages</a><br>
<a style='color:#ff0000;' href='admin.php?control=venue'>Venue Locations</a><br><br>
<a style='color:#0000ff;' href='admin.php?control=mailinglist'>Review Mailing List</a><br><br>
<a style='color:#0000ff;' href='admin.php?control=sendmail'>Send E-mail</a><br><br>
<a style='color:#0000ff;' href='admin.php?control=lastupdate'>Update The last modified time</a></td>";
print "</tr></table></td></tr></table><br><h5></td><td width='*' valign=top align=left>";
?>