
<ul id="treemenu2" class="treeview">
<li>Home Page</li>

	<li>Biography</li>
	<li>Gallerys
		<ul rel="open">
		<li>Album Art</li>
		<li>Gig Photos
		
		<?php
// Note that !== did not exist until 4.0.0-RC2

if ($handle = opendir('../media/')) {
   echo "<ul>";

   /* This is the correct way to loop over the directory. */
   while (false !== ($file = readdir($handle))) {
       echo "<li><a href=\"#\" onclick=\"loadurl('image.php?img=$file','image')\">$file</a><font color=red>(anto)</font></li>";  

	}
	echo "</ul>";
	closedir($handle);
}
?> 
		
		
		<li>Personal
			<ul>
			<li><a href="#" onclick="loadurl('image.php?img=ep1.jpg','output')">Load an image</a><font color=red>(anto)</font></li>
			<li><a href="#" onclick="loadurl('image.php?img=ep2.jpg','output')">Load an image</a><font color=red>(anto)</font></li>
			<li><a href="#" onclick="loadurl('image.php?img=ep3.jpg','output')">Load an image</a><font color=red>(anto)</font></li>
			<li><a href="#" onclick="loadurl('image.php?img=ep4.jpg','output')">Load an image</a><font color=red>(anto)</font></li>
			</ul>
		</li>
		</ul>
	</li>
	<li>Gigs & Tours
		<ul rel="open">
		<li><a href="#" onclick="loadurl('../gigs.php','output')">Upcoming Gigs</a> <font color=red>(anto)</font></li>
		<li>Recent Gigs</li>
		<li>Archive
			<ul>
			<li>2005</li>
			<li>2004</li>
			<li>2003</li>
			<li>2002</li>
			</ul>
		</li>
		</ul>
	</li>
	<li>Mp3 & Videos
	<ul rel="open">
		<li>Listen to Music
		<ul>
		<li>October</li>
		<li>September</li>
		<li>August</li>
		<li>July</li>
		<li>June</li>
		<li>May</li>
		<li>April</li>
		<li>March</li>
		</ul>
		</li>
		
		<li>Watch Videos
		<ul>
		<li>October</li>
		<li>September</li>
		<li>August</li>
		<li>July</li>
		<li>June</li>
		<li>May</li>
		<li>April</li>
		<li>March</li>
		</ul>
		</li>
		
		</ul>
	</li>
	<li>Journal
		<ul rel="open">
		<li>October</li>
		<li>September</li>
		<li>August</li>
		<li>July</li>
		<li>June</li>
		<li>May</li>
		<li>April</li>
		<li>March</li>
		
		
		</ul>
	</li>

<li>MySpace</li>
<li>Bebo</li>
<li>Contact</li>
<li>Links</li>
<li>Merchandise</li>
</ul>