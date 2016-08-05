<?php
$myfile = fopen("playlist.txt", "a") or die ("Unable to open file! It's not me, It's you ;( ");
$txt = $_GET["choice"];
fwrite($myfile, $txt . "\n");
fclose($myfile);
echo $_GET["choice"] . " has been added to the playlist<p>Click <a href=gallery.php>here </a> to go back to the gallery";
?>
