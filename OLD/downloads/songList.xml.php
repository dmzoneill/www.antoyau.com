<?php


    /*
     * Copyright © 2004 by
     Tilo Kussatz <http://www.kussatz.com>
     and Steve Nelson <http://www.thegoldenmean.com>
     *
     * This script must be accompanied by the
     ID3v2 tag reading class by Daniel Martinez-Morales:
     * http://phpclasses.php-start.de/browse/package/640.html
     *
     * This code is released under the GNU LGPL; see the included lgpl.txt.
     *
     Purpose: This script requests some of the information the ID3v2 class
     extracts and calcuates from an MP3 file or files, and formats that information
     into xml format which is read by a Macromedia Flash-based MP3 player
     *
     */



include_once("id3v2.php");

$mp3 = new id3v2();

// Print opening XML tags
echo('<?xml version="1.0" ?>' . "\n");
echo('  <songs>' . "\n");

// Set the directory which contains the MP3 files. Don't forget the trailing slash!
// "./" is the directory this PHP file lives in.
$dir = './';

$handle = opendir($dir);
// Loop through all the files found in this directory
while (false !== ($file = readdir($handle))) {
        // Ignore any types of subdirectories and process files with ".mp3" extension only
        if (!is_dir($file) && eregi("(.mp3)$", $file)) {
				$filesize = filesize($dir.$file);
                // Extract ID3 information from current file
                $mp3->GetInfo($dir.$file);


                // Build the <song> XML tag for the current song,
                // preferably using ID3v2 information, otherwise ID3v1 data if available.

                // Step 1: the "artist" attribute:
                echo '    <song artist="';
                if (!empty($mp3->id3v2Info[TP1][info][0][Value]))
                    echo $mp3->id3v2Info[TP1][info][0][Value];
                elseif (!empty($mp3->id3v2Info[TPE1][info][0][Value]))
                    echo $mp3->id3v2Info[TPE1][info][0][Value];
                elseif (!empty($mp3->id3v1Info[artist]))
                    echo $mp3->id3v1Info[artist];
                else
                    echo 'artist not available';

                // Step 2: the "title" attribute:
                echo '" title="';
                if (!empty($mp3->id3v2Info[TT2][info][0][Value]))
                    echo $mp3->id3v2Info[TT2][info][0][Value];
                elseif (!empty($mp3->id3v2Info[TIT2][info][0][Value]))
                    echo $mp3->id3v2Info[TIT2][info][0][Value];
                elseif (!empty($mp3->id3v1Info[title]))
                    echo $mp3->id3v1Info[title];
                else
                    echo 'title not available';

                // Step 3: the "album" attribute:
                echo '" album="';
                if (!empty($mp3->id3v2Info[TAL][info][0][Value]))
                    echo $mp3->id3v2Info[TAL][info][0][Value];
                elseif (!empty($mp3->id3v2Info[TALB][info][0][Value]))
                    echo $mp3->id3v2Info[TALB][info][0][Value];
                elseif (!empty($mp3->id3v1Info[album]))
                    echo $mp3->id3v1Info[album];
                else
                    echo 'album not available';

		// Step 4 - next extract PlayTime for progress bar and scrubber
		//get it in milliseconds to match position property in ActionScript
			echo '" playtime="'.floor($mp3->mpegInfo[PlaySeconds]*1000);
		
		// Step 5 get file size, to use with graphical preload bar
			echo '" filesize="'.$filesize;
		
		// Step 6: the "url" attribute:
			echo '" url="'.$dir.$file.'" />' . "\n";
                
                // That's it for this file - on to the next one!
        }
}
closedir($handle);

// Print closing tag - we're done!
echo('  </songs>' . "\n");

?>