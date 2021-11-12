<?php
# connhagiau @ dembuon.vn
$id = $_GET['id'];
function cng_get_zing_mp3($id) {
    $api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$id.'"}';
    $content = file_get_contents($api);
    $json = json_decode($content, true);

    $name = $json['title'];
    $artist = $json['artist'];

    $hq = $json['link_download']['128'];
    $hd = $json['link_download']['320'];
    $l2 = $json['link_download']['lossless'];

    $url = $hq;

    return $url;
}
