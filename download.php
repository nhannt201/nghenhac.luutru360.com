
<?php
if(isset($_GET["url"]))
{
$filename = $_GET['url'];
$file2="[Luutru360.com]".$_GET['filename'];
header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=\"$file2\""); 
  ob_clean();
            flush();
readfile($filename);
exit;
//header("Content-type: application/octet-stream");
}
else {
echo '<meta http-equiv="refresh" content="0;https://www.neobux.com/?r=me09112001">';
}
?>
