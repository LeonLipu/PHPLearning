<?php

//for simple reading
$filecontent = readfile("filetoberead.txt");
//print $filecontent;

//for open file in reading mode
$filehandle = fopen("filetoberead.txt", "r");

echo $filehandle;

//reading line by line
while (!feof($filehandle)) {

	$line = fgets($filehandle);

	echo $line . "<br>";

}

//get line specific line
echo fgets($filehandle, 22);

fclose($filehandle);

// to check file is present
if (file_exists("filetoberead.txt")) {
	echo "yes file is present";
}

//to write a file

$filewritehandle = fopen("filetobewrite.txt", "w");
$contenttobewrite = "this text is writen brahmananda ";
fwrite($filewritehandle, $contenttobewrite);
fclose($filewritehandle);

?>
