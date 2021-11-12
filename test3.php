<?php define(url,$_GET["url"]);
error_reporting(E_ALL);
function xmlGet($url){
$f = file_get_contents(url);
	if(strstr($url,'mp3.zing.vn')){
		preg_match_all('/<param name="flashvars" value="(.*)"/',$f,$arr);
		$arr = $arr[1];
		$arr = $arr[0];		
		$arr = explode("&",$arr);
		$arr = explode("=",$arr[2]);
		return $arr[1];
		
	}
}

$s = xmlGet(url);
$xmlurl = file_get_contents($s);    
$xml = simplexml_load_string($xmlurl);
foreach ($xml->item as $item) {
   echo (string)$item->source;
}

    
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