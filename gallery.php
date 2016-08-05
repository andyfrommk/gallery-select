<?php
echo "<a href=upload.html>Upload additional images</a><p>";
$dir = "uploads/";
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){

echo "<a href=\"commit.php?choice=" . $file . "\"> <img src=\"uploads/" . $file . "\" style=\"width:300px;height:200px;\">
";
		}
	closedir($dh);
	}
	}
?>
