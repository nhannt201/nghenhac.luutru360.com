<meta charset="utf-8" />

<?php
$snn = $_GET["q"];
//$api = 'http://mp3.zing.vn/suggest/search?term=".$snn."';
//đọc nội dung API
$api = 'http://mp3.zing.vn/ajax/lyric-v2/lyrics?id=ZW6UF98O';
$get = get_by_curl($api);
//bóc tách
 //echo $get;
 $json = json_decode($get, true);

    $name = $json['result'];
    $artist = $json['name']['artist'];
  
$hinhanh = $json['name'];
//echo "<meta http-equiv='refresh' content='0;".$audio."' download>";
echo $name."<br/>";
echo $artist."<br/>";
echo $hinhanh."<br/>";

?>

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
        echo "";
    }
    return $content;
}
 
?>