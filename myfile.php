<?php

	// Open the text file
	$f = fopen("tweetresponse.txt", "w");

	// Write text
	fwrite($f, $_POST["textblock"]); 

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen("tweetresponse.txt", "r");

	// Read text
	echo fgets($f); 
	fclose($f);

?>