<title>Site Map</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="icon" type="image/png" href="/ico.ico" />

<?php
include("ketnoi.php");
$kq=mysql_query("SELECT id from link ORDER BY id DESC ") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from link where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
$id2 = explode('/', $data['url']);
$id2 = explode('.html', $id2[5]);
  echo "<div id='download'  ".$idvss." class='lk'>Link  320Kb/Video vừa GET : <a href='/?play=".$id2[0]."'>".$data['url']."</a><hr/></div>"; 


}


?>