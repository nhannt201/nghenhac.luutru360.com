<?php
$n=rand(0000,9999);
$pathname=base_convert($n,10,36); //đánh số ngẫu nhiên
//mkdir("url/".$pathname);
$file="url/".$pathname.".upu";
$fh= fopen($file,'w');
$string = $_GET["url"];
fwrite($fh,$string);
fclose($fh);
echo $pathname;

?>