<?php

if(isset($_GET["link"]))
{
         $link = $_GET['link'];
$id = explode('/', $link);
$id = explode('.html', $id[5]);
$URL="http://v3.mp3.zing.vn/download/vip/song/".$id[0];
header ("Location: $URL");
		   
       }
       else{
       echo "<meta http-equiv='refresh' content='0;/index.php'>";

       }
       
 ?>