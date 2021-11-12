<?php
function get_by_curl($url){
        //echo "curl:url<pre>".$url."</pre><BR>";
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 15,      // timeout on connect
        CURLOPT_TIMEOUT        => 15,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		CURLOPT_SSL_VERIFYPEER => false,
 
    );
 
    $ch      = curl_init($url);
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch,CURLINFO_EFFECTIVE_URL );
    curl_close( $ch );
 
    //$header['errno']   = $err;
   // $header['errmsg']  = $errmsg;
 
    //change errmsg here to errno
    if ($errmsg)
    {
        echo "CURL:".$errmsg."<BR>";
    }
    return $content;
}
//text_get_link là tên textbox nhập liệu ở bên trên
$link = $_GET['u'];
//tách chuỗi để lấy ID bài hát từ url
$id = explode('/', $link);
$id = explode('.html', $id[5]);
$id=$id[0];
$api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$id.'"}';
//đọc nội dung API
$get = get_by_curl($api);
//bóc tách
preg_match('/"320":"(.*)"}/U', $get, $mp3_320k);
$audio = str_replace('\/', '/', $mp3_320k[1]);

echo "<a href='".$audio."' download>Download</a>";
//trả về link
return $audio;
?>