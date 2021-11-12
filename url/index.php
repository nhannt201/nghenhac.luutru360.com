<?php
 $file2=$_GET['url'];
$myfile = fopen($file2, "r") or die("");
echo fread($myfile,filesize($file2));
fclose($myfile);
?>