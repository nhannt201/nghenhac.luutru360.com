<?php
if(isset($_GET["zm"]))
{
$nkk = $_GET["zm"];

   
$api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$nkk.'"}';
//doc noi dung API
$get = get_by_url($api);
//boc tach
 
 $json = json_decode($get, true);

    $name = $json['title'];
    $artist = $json['artist'];
  
$hinhanh = $json['thumbnail'];
//echo "<meta http-equiv='refresh' content='0;".$audio."' download>";
//echo "<title>".$name." - ".$artist." - Zing Mp3</title>";
  



}
    else{  
//	echo "<title>Nghe tai nhac Zing Mp3</title>";

}
?>