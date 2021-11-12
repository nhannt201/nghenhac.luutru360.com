<?php
// code by toiviet.com vui long khong xoa dong nay khi su dung
 
//Đầu tiên là hàm get curl để connect đên mp3 zing, có thể thay thế hàm này bằng file_get_contents nhưng không tối ưu bằng curl
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
 
 
// Bắt đầu từ đây
if($_GET['getlink']) {
$link = ($_GET['link']);
// Nếu người dùng bấm vào submit thì [dưới]
 
if (empty($link))  { // thì kiểm tra xem có rỗng hay không nếu rỗng thì thông báo và kết thúc không chạy bất kỳ lệnh nào.
    echo '<center>Mời bạn điền link vào</center>';
	exit;
}
// nếu không rỗng thì tiếp tục chạy và kiểm tra có phải đúng link dạng http://mp3.zing.vn/bai-hat/(.*?)/ZW7I0ZWA.html hay không
// nếu đúng thì làm nó sẽ kết nối, còn không đúng dạng thì nó nhảy xuống [chú thích 09]
if (preg_match("/http:\/\/mp3.zing.vn\/bai\-hat\/(.*?).html/",$link)){
	$data = get_by_curl($link);// kết nối và lấy toàn bộ dữ liệu của link
	preg_match("/http:\/\/mp3.zing.vn\/xml\/song\-xml\/(.*?)\"/",$data,$arr_preg);
	$link_xml = str_replace('"','',$arr_preg[0]);
	$xml_data = get_by_curl($link_xml);
	// tách lấy tên bài hát trong file xml
	preg_match("/<title><!\[CDATA\[(.*?)]]><\/title>/",$xml_data,$name_arr);
	$name_song = $name_arr[1];
	// tách lấy link mp3 trong xml
	preg_match("/http:\/\/mp3.zing.vn\/xml\/load\-song\/(.*?)]/",$xml_data,$arr_link_mp3);
	$link_mp3 = str_replace(']','',$arr_link_mp3[0]);
	echo '<center><h3><a href="'.$link_mp3.'" target="_blank">'.$name_song.'</a></h3></center>';
}
else{
// [chú thích 09]	
echo "<center>Link MP3 không đúng xin vui lòng kiểm tra lại</center>";	
}
}
 
?>