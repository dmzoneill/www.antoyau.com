<script type="text/javascript">
function addBookmark(title,url) {
if (window.sidebar) { 
window.sidebar.addPanel(title, url,""); 
} else if( document.all ) {
window.external.AddFavorite( url, title);
} else if( window.opera && window.print ) {
return true;
}
}
</script>
<div align=right><a href="#" onmousedown="addBookmark(&#39;Antoyau.com&#39;,&#39;http://www.antoyau.com/&#39;)"> <img src='media/bookmarkme.gif' alt='css' border=0 /></a> <A HREF="#" onClick="this.style.behavior='url(#default#homepage)'; this.setHomePage('http://www.antoyau.com');"><img src='media/myhomepage.gif' alt='css' border=0 /></A></div>