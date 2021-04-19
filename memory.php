<?php
$txt = $_POST['text'];
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
?>
