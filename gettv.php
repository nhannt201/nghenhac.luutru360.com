<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>


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
<?php

if(isset($_GET['link'])) {
if(eregi("http://mp3.zing.vn/video-clip/", $_GET['link'] )){
$link23 = $_GET['link'];
	$id = explode('/', $_GET['link']);
	$id = explode('.html', $id[5]);
	$api = 'http://api.mp3.zing.vn/api/mobile/video/getvideoinfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$id[0].'"}';
	$get = get_by_curl($api);

preg_match('/"title":"(.*)","/U', $get, $tieude);
	$tieude = str_replace('\/', '/', $tieude[1]);

	preg_match('/"240":"(.*)","/U', $get, $mp4_240p);
	$mp4_240p = str_replace('\/', '/', $mp4_240p[1]);
	preg_match('/"360":"(.*)",/U', $get, $mp4_360p);
	$mp4_360p = str_replace('\/', '/', $mp4_360p[1]);
	preg_match('/"480":"(.*)",/U', $get, $mp4_480p);
	$mp4_480p = str_replace('\/', '/', $mp4_480p[1]);
	preg_match('/"720":"(.*)",/U', $get, $mp4_720p);
	$mp4_720p = str_replace('\/', '/', $mp4_720p[1]);
	preg_match('/"1080":"(.*)"}/U', $get, $mp4_1080p);
	$mp4_1080p = str_replace('\/', '/', $mp4_1080p[1]);
echo "<center>Tải Video ".$tieude." từ Zing Mp3</center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_240p."' >Chất lượng 240P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_360p."'>Chất lượng 360P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_480p."' >Chất lượng 480P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_720p."' >Chất lượng 720P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_1080p."' >Chất lượng 1080P</a></center>";

}
}
?>
