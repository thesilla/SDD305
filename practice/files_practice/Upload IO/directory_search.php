<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>


<body>

<?php

// string containing directory path - replace with absolute (or relative path of any file you want to search)
$dir = 'C:\Users\mgillman\Desktop\Maxs Files\Personal\S\SDD305\practice\files_practice\Upload IO';

// saves contents of directory into array
// using '.' instead of entire path means current directory 
// using '..' instead of entire path means parent directory 
$stuff  = scandir($dir); // just so happens $dir is current directory for this example

// will print filename
print $stuff[3];

// pulls file from file array, prints out the contents of file that is read to array
$file = file($stuff[3]);

//print_r($file);

// will show size of file in bytes
$size = filesize($stuff[3]);
print $size;

// will print out array of all files in $dir
print_r($stuff);

// TODO FINISH THIS
makedir();
?>






</body>

</html>

