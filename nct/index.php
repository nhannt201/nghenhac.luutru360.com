<?php
    function get_id_nct($link)
    {    
        $cut=explode(".html",$link);
        $link=$cut[0];
         $cut2=explode("http://www.nhaccuatui.com/bai-hat/",$link);
         $link2=$cut2[1];
         $cut3=explode(".",$link2);
        
        return "http://www.nhaccuatui.com/download/song/".$cut3[1];
    }
    function get_mp3_nct($link)
    {
        return file_get_contents($link);
    }
    function get_file_mp3($link)
    {
        $cut=explode('stream_url',$link);
        $cut2=explode('":"',$cut[1]);
        $cut3=explode('","',$cut2[1]);
        $thaythe=$cut3[0];
        $thaythe=str_replace("\/","/",$thaythe);
        return $thaythe;
    }
    $link = get_id_nct("http://www.nhaccuatui.com/bai-hat/em-cua-ngay-hom-qua-ho-quang-version-duy-khiem-ngo.2PyhWqqGhOpy.html");
   echo $link."<br>";
     $get = get_by_curl($link);
preg_match('/"stream_url":"(.*)"}/U', $get, $mp3_320k);
$audio = str_replace('\/', '/', $mp3_320k[1]);
  $json = json_decode($get, true);
 $hd = $json['data']['stream_url'];
   echo $hd;
//echo $audio;
    
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