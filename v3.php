<html lang="vi">
<head>
<?php
$hideen = "style='visibility: hidden'";
$hideen2 = "";
?>

<?php
if(isset($_GET["zm"]))
{
$nkk = $_GET["zm"];
$idvss = $hideen;
 $conn=mysql_connect("localhost","luutru360","0907375645") or die("can't connect this  database");
    mysql_select_db("luutru36_getlink",$conn);
    $sql="select * from link where url LIKE '%$nkk%' LIMIT 1";
    $query=mysql_query($sql);
    if(mysql_num_rows($query)!=""){
    $stt=1;
    while($row=mysql_fetch_array($query)){
       $stt++;
       $npk = $row['url'];
    }
    }else{
     echo "<tr><td colspan='4' align='center'>Không tìm thấy tên bài hát!</td></tr>";
$idvss = $hideen2;
   }
$api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$nkk.'"}';
//đọc nội dung API
$get = get_by_curl($api);
//bóc tách
 
 $json = json_decode($get, true);

    $name = $json['title'];
    $artist = $json['artist'];
  
$hinhanh = $json['thumbnail'];
//echo "<meta http-equiv='refresh' content='0;".$audio."' download>";
echo "<title>".$name." - ".$artist." - Zing Mp3</title>";

}

else{
echo "<title>Nghe tải nhạc Zing Mp3</title>";
}
?>
<?php
if(isset($_GET["nct"]))
{
$nkk = $_GET["nct"];
$idvss = $hideen;
 $conn=mysql_connect("localhost","luutru360","0907375645") or die("can't connect this  database");
    mysql_select_db("luutru36_getlink",$conn);
    $sql="select * from nct where url LIKE '%$nkk%' LIMIT 1";
    $query=mysql_query($sql);
    if(mysql_num_rows($query)!=""){
    $stt=1;
    while($row=mysql_fetch_array($query)){
       $stt++;
       $npk = $row['url'];
    }
    }else{
     echo "<tr><td colspan='4' align='center'>Không tìm thấy tên bài hát!</td></tr>";
$idvss = $hideen2;
   }
echo "<title>Nghe tải nhạc Zing Mp3</title>";

}

else{
//echo "<title>Nghe tải nhạc Zing Mp3</title>";
}
?>
<link rel="icon" type="image/png" href="/ico.ico" />
<meta name="keywords" content="mang xa hoi nghe nhac, zing mp3, mang xa hoi, get link, tai nhac vip zing mp3,nhac vip mp3 zing, zing mp3,get link mp3 zing,<?php echo $artist.", "; echo $name;  ?>" />
<meta name="description" content="Công cụ tải và nghe nhạc <?php echo $name; ?> bởi <?php echo $artist; ?> Zing Mp3 với giao diện nhỏ gọn , chỉ vài thao tác là có thể tải về bản nhạc chất lượng mà bạn yêu thích !" />
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<meta http-equiv="EXPIRES" content="0"/>
<meta name="RESOURCE-TYPE" content="DOCUMENT"/>
<meta name="DISTRIBUTION" content="GLOBAL"/>
<meta name="AUTHOR" content="Nghe tải nhạc Zing Mp3"/>
<meta name="COPYRIGHT" content="Copyright (c) by luturu360.com"/>
<meta name="ROBOTS" content="INDEX, FOLLOW"/>
<meta name="Googlebot" content="index,follow,archive">
<meta name="RATING" content="GENERAL"/>
<meta name="GENERATOR" content="nghenhac.luutru360.com"/>
<meta name="geo.region" content="Vietnam"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta property="fb:admins" content="100006476596425"/>
<meta name="og:image" content="http://image.mp3.zdn.vn/<?php echo $hinhanh; ?>"/>
 <script language=javascript>

function externalLinks()
{
  if (!document.getElementsByTagName) return;
  var anchors = document.getElementsByTagName("a");
  for (var i=0; i<anchors.length; i++)
  {
      var anchor = anchors[i];
      if(anchor.getAttribute("href"))
        anchor.target = "_blank";
  }
}
window.onload = externalLinks;

</script>

</head>
<body>
<hr/>
<h1><center>Tải nhạc Zing Mp3 320kb</center></h1>

<?php
if(isset($_GET["zm"]))
{

}
else{
echo '<center>
<a href="http://luutru360.com/quangcao/quangcaoview.php"><img src="http://static.taiiwin.net/event/iwin.gif" width="550" height=”200” /></a>
</center>';
}
?>

<?php
if(isset($_GET["nct"]))
{

}
else{
//echo '<center><a href="http://luutru360.com/quangcao/quangcaoview.php"><img src="http://static.taiiwin.net/event/iwin.gif" width="550" height=”200” /></a></center>';
}
?>
<style type="text/css">
#download-form {background: #FDFDFD;width: 600px;padding: 20px;margin-right: auto;margin-left: auto;border: 1px solid #E9E9E9;border-radius: 10px; margin-top:20px;}
.lk {
    background: none repeat scroll 0 0 #DFFFF1;
    border: 1px solid #D0F5E5;
    border-radius: 5px;
    font-family: "museo-slab",serif;
    font-size: 14px;
    margin-bottom: 10px;
    margin-top: 10px;
    padding: 8px;
}
input[type="url"] {
padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
border-radius: 5px;
  width: 50%;
  font-family: Tahamo;
  font-size: 18px;

}
input[type="url"]:focus {
  outline: none;
}
input[type=submit] {padding:5px 15px; background:#ccc; border:0 none;
cursor:pointer;
-webkit-border-radius: 5px;
border-radius: 5px; }
#submit {
 color: #fff;
 font-size: 0;
 width: 135px;
 height: 60px;
 border: none;
 margin: 0;
 padding: 0;
 background: #0c0 
}
/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		background-color: #1cb495;
		border-radius: 6px;
		border: 0;
		color: #ffffff !important;
		cursor: pointer;
		display: inline-block;
		font-weight: 700;
		height: 2.75em;
		line-height: 2.75em;
		padding: 0 1.125em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			background-color: #1fcaa7;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		button:active,
		.button:active {
			background-color: #199e83;
		}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			opacity: 0.5;
		}

		@media screen and (max-width: 480px) {

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			button,
			.button {
				padding: 0;
			}

		}

.ac_res{background:none repeat scroll 0 0 #FFF;border:1px solid #E5E5E5;display:none;font-size:.8em;left:8px!important;position:absolute;text-align:left;top:32px!important;width:352px!important;z-index:1000;}.ac_close{float:right;margin:3px;padding-right:10px;text-decoration:none;}.ac_inactive{background:none repeat scroll 0 0 #FFF;cursor:default;height:20px;line-height:20px;margin:0;overflow:hidden;padding-left:8px;}.ac_active{background:none repeat scroll 0 0 #EEE;cursor:pointer;height:20px;line-height:20px;margin:0;overflow:hidden;padding-left:8px;}a.active_link{color:#000;padding:0 0 0 4px;}body,html{margin:0;top:0;}body{background:url(bg.jpg) repeat scroll 0 0 transparent;color:#333;font-family:Segoe UI,trebuchet MS,Lucida Sans Unicode,Lucida Sans,Sans-Serif;font-size:1em;line-height:1.5em;margin:0 0 100px;}a{color:#254488;cursor:pointer;text-decoration:none;}.cloud_up{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -289px transparent;padding:0 0 0 18px;}.alsotry a{padding:0 8px 0 0;}.cloud_down{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -257px transparent;padding:0 0 0 18px;}.cloud_nochange{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -273px transparent;padding:0 0 0 18px;}.cloud_flow{float:left;font-size:.8em;width:20%}.content_sharing{font-size:.8em;width:300px;}#frame{background-color:#FFF;border:1px solid #CECECE;border-radius:6px;box-shadow:0 0 10px 5px #CCC;margin:10px auto;padding:0 10px;width:95%;max-width:1000px;}#content_nav{background:none repeat scroll 0 0 #f9f9f9;border-top:1px solid #CCC;clear:both;}#content_text{clear:both;font-size:.8em;padding:10px;}#content_nav_left{float:left;font-size:0.85em;max-width:668px;padding:5px 10px;width:100%;}#content_nav_left h1{display:inline;font-size:1em;font-weight:700;margin:0;padding:0;}#content_nav_right{float:left;font-size:0.75em;padding:5px 10px;text-align:right;}#content_related{clear:both;font-size:.8em;}.download_top{border-bottom:1px dotted #CCC;font-size:.8em;font-weight:700;padding:2px 0;}.star{background:url(/theme/mainsprite.jpg) repeat scroll 0 -398px transparent;display:block;float:left;height:11px;margin:6px 5px 0 0;width:12px;}.download_item{border-bottom:1px dotted #CCC;font-size:.8em;padding:2px 0;}.right_it{float:right;font-size:.9em;padding:0 5px 0 0;text-align:right;width:115px;}.sharing_frame{border:1px solid #EBEBEB;margin:0 0 10px;}#sharing_top{background:none repeat scroll 0 0 #F6F6F6;border-bottom:1px solid #EBEBEB;border-top:1px solid #FFF;padding:10px;}#footer_bottom{color:#999;font-size:.7em;margin:13px auto 10px;padding:0;text-shadow:0 -1px 1px #FFF;text-transform:uppercase;width:95%;max-width:1000px;}#footer_bottom a{color:#666;text-decoration:none;text-shadow:1px 1px 0 #FFF;}#content_download{float:left;max-width:820px;overflow:hidden;padding:4px;width:100%;}#content_page{float:left;max-width:680px;overflow:hidden;padding:4px;width:100%;}#content_banner{max-width:300px;float:left;font-size:.8em;margin:10px 0;padding:0 0 0 10px;text-align:left;width:100%;}.content_d_title_l{font-size:1.1em;font-weight:700;margin:10px 0;overflow:hidden;width:680px;}.alsotry{font-size:.75em;margin:0 0 10px;}.content_d_title_s{clear:both;font-size:.8em;}.bolder a{color:#000;text-decoration:underline;}.bgframe{border-top:1px dotted #CCC;font-size:.8em;padding:10px 0;}.bg1{background:none repeat scroll 0 0 #FDFEFF;}.rsl_ico{float:left;padding:0;width:20px;}.bigdlbutton{background:url(/theme/download_big.png) repeat scroll 0 0 transparent;cursor:pointer;height:104px;margin:-20px 0 10px;width:300px;}.bigdlbutton:hover{background:url(/theme/download_big_hover.png) repeat scroll 0 0 transparent;}.rsl_info img{margin:5px 0 0;vertical-align:top;}.rsl_1{padding:5px 0 0;}.rsl_4{float:left;padding:5px 0;text-align:right;width:140px;}#footer_bottom a:hover{color:#254488;text-decoration:none;}#header_top{border-bottom:1px solid #CCC;clear:both;display:block;font-size:.8em;height:30px;line-height:30px;margin:0;padding:5px;}.content_dl_frame{clear:both;}.dl_frame{border-top:1px dotted #ccc;clear:both;height:30px;margin:0;width:98%;}.dl_1{float:left;font-size:0.8em;margin:5px 0 0;width:70%;}.dl_2{background:url(mainsprite.jpg) no-repeat scroll 0 -228px transparent;cursor:pointer;float:right;height:21px;margin:5px 0 0;text-align:right;width:auto;}.dl_4{background:url(mainsprite.jpg) no-repeat scroll 0 -580px transparent;cursor:pointer;float:right;height:21px;margin:5px 0 0;text-align:right;width:24px;}.dl_2:hover{background:url("mainsprite.jpg") no-repeat scroll 0 -207px transparent;float:right;height:21px;text-align:right;width:104px;}.dl_3{cursor:pointer;float:right;font-size:.9em;height:21px;margin:2px 0 0;text-align:right;width:104px;}.dl_3:hover{float:right;height:21px;text-align:right;width:104px;}#page_frame{clear:both;margin:0;padding:0;width:100%;max-width:1000px;}#search_form{display:inline;}input,select,textarea{font-family:Segoe UI,trebuchet MS,Lucida Sans Unicode,Lucida Sans,Sans-Serif;}pre.prelinks{background:none repeat scroll 0 0 #F9F9F9;border:1px inset #CCC;clear:both;font-family:Segoe UI,trebuchet MS,Lucida Sans Unicode,Lucida Sans,Sans-Serif;margin:0;max-height:500px;overflow:hidden;padding:5px;}#logo{float:left;margin:11px 0 10px;width:60%;}#search{float:left;margin:15px 0 10px;min-width:300px;width:40%;}textarea.dllink{height:70px;width:680px;}.search_input{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;border-color:#CCC #999 #999 #CCC;border-image:none;border-style:solid;border-width:1px;color:#333;font-size:.85em;font-weight:400;margin:0;outline-width:0;padding:6px;vertical-align:top;width:70%;}.search_option_2{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;border-color:#CCC #999 #999 #CCC;border-image:none;border-style:solid;border-width:1px;font-size:.8em;height:34px;margin:0 0 0 -1px;outline-width:0;padding:6px;vertical-align:top;width:80px;}.search_button{background-color:#0099ff;border-width:0;color:#ffffff;cursor:pointer;font-size:0.8em;height:34px;margin:0 0 0 -1px;outline-width:0;padding:0;vertical-align:top;width:20%;}.search_button:hover{background-color:#33CCFF;}.icon16{height:16px;vertical-align:middle;width:16px;}#header_top_right a{padding:0 0 0 14px;}#header_top_right,span#footer_bottom_right{float:right;text-align:right;}.rsl_2,.rsl_3{float:left;padding:5px 0;text-align:right;width:130px;}.rsl_info span{color:green;}span.r{color:#DD581F;}.rsl_info{font-size:.9em;}#search_info{color:#666;font-size:.75em;padding:2px 0 0 13px;text-align:left;vertical-align:top;}.cml_t{font-weight:700;padding:5px 0 0;}.arrow-down{background-image:url(mainsprite.jpg);background-position:left -172px;height:15px;width:15px;}.arrow-up{background-image:url(mainsprite.jpg);background-position:left -188px;height:15px;width:15px;}.pagination{border-top:1px dotted #ccc;clear:both;font-size:0.8em;overflow:scroll;padding:10px 0;width:100%;}.footer_latest{border-top:1px dotted #CCC;clear:both;font-size:.8em;height:120px;margin:15px 0 0;padding:10px;}.even{float:left;width:25%}.pagination a{background:none repeat scroll 0 0 #F2FAFD;border:1px dotted #CCC;margin:0 4px 0 0;padding:3px 10px;}.pagination .active{color:red;text-decoration:underline;}.content_results_frame{clear:both;width:100%;}.content_results_left{border-bottom:1px dotted #ccc;border-right:1px dotted #ccc;float:left;font-size:0.8em;margin:0 10px 20px 0;max-width:150px;width:100%;}.content_results_right{float:left;max-width:820px;width:100%;}.cloud_flow_big{float:left;font-size:.8em;width:33%}#cloud_index{clear:both;margin:10px;}.bolder a:hover,a:hover{color:red;}.cml_l a:hover,.rsl_1 a,.rsl_1 a:hover{text-decoration:underline;}.form_frame{font-size:1em;height:45px;width:600px;}.form_left{float:left;height:45px;line-height:45px;width:150px;}.form_right{float:right;height:40px;padding-top:5px;text-align:left;width:450px;}#error{background:none repeat scroll 0 0 #FFF2F2;margin:10px 0;padding:10px;}#notice{background:none repeat scroll 0 0 #FFFFE6;margin:10px 0;padding:10px;}#success{background:none repeat scroll 0 0 #EAFFEA;margin:10px 0;padding:10px;}.form_avatar{border:1px solid #DDD;float:left;height:50px;margin:0 10px 0 0;padding:2px;width:50px;}input.post_input,select.post_select{background-color:#F9F9F9;border:1px solid #CCC;color:#181818;font-family:trebuchet MS,Lucida Sans Unicode,Lucida Sans,Sans-Serif;font-size:1em;padding:5px;width:250px;}input.post_input{width:250px;}.button1{background:url(/theme/bg-button.gif) repeat-x scroll 0 0 #DDD;border:1px solid #BBB;border-radius:3px;cursor:pointer;font-size:1em;margin:0;padding:6px 12px;}.button1:hover{border:1px solid #A5BADA;}.btnsmall{padding:2px 10px;}.chrome{background:url(/theme/mainsprite.jpg) repeat scroll 0 -429px transparent;cursor:pointer;float:right;height:16px;margin:6px -5px 0 10px;width:103px;}.chrome:hover{background:url(/theme/mainsprite.jpg) repeat scroll -104px -429px transparent;}textarea.textit{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;border-color:#CCC #999 #999 #CCC;border-image:none;border-style:solid;border-width:1px;font-size:1em;height:18px;overflow:hidden;padding:7px;width:95%;}.vote_box{background:none repeat scroll 0 0 #FFF;margin:10px 0 0 620px;position:absolute;z-index:1000;}.vote_frame{margin:0 0 0 5px;width:60px;}#vote_up{background:url(/theme/mainsprite.jpg) repeat scroll 0 -526px transparent;cursor:pointer;float:left;height:23px;margin:0 3px;width:24px;}#vote_up:hover{background:url(/theme/mainsprite.jpg) repeat scroll -24px -526px rgba(0,0,0,0);}#vote_down:hover{background:url(/theme/mainsprite.jpg) repeat scroll -24px -549px rgba(0,0,0,0);}#vote_down{background:url(/theme/mainsprite.jpg) repeat scroll 0 -549px transparent;cursor:pointer;float:right;height:23px;margin:0 3px;width:24px;}#vote_down_count,#vote_up_count{color:#666;float:left;font-size:.7em;text-align:center;width:30px;}.login_fb{background:url(/theme/mainsprite.jpg) repeat scroll 0 -449px transparent;cursor:pointer;float:left;height:22px;margin:0 10px 0 0;width:150px;}.login_tw{background:url(/theme/mainsprite.jpg) repeat scroll 0 -495px transparent;cursor:pointer;float:left;height:22px;margin:0 10px 0 0;width:150px;}.login_go{background:url(/theme/mainsprite.jpg) repeat scroll 0 -472px transparent;cursor:pointer;float:left;height:22px;margin:0 10px 0 0;width:150px;}.cloud_item{border-bottom:1px dotted #CCC;float:left;font-size:.8em;margin:0 20px 0 0;width:320px;}.cloud_item3{border-bottom:1px dotted #CCC;float:left;font-size:.8em;margin:0;width:300px;}span.cloud_right{color:#666;float:right;font-size:.9em;text-align:right;width:40px;}span.change_icon_down{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -409px transparent;display:block;float:left;height:11px;margin:6px 0 0;width:12px;}span.change_icon_up{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -398px transparent;display:block;float:left;height:11px;margin:6px 0 0;width:12px;}span.change_icon_none{background:url(/theme/mainsprite.jpg) no-repeat scroll -24px -398px transparent;display:block;float:left;height:11px;margin:6px 0 0;width:12px;}span.change_icon_new{background:url(/theme/mainsprite.jpg) no-repeat scroll -24px -409px transparent;display:block;float:left;height:11px;margin:6px 0 0;width:12px;}span.cloud_count{color:#CCC;display:block;float:left;width:23px;}.bolder,.btnbold{font-weight:700;}#header_top_left,.form_text{float:left;}.share_1{font-size:.8em;font-weight:700;height:35px;margin:15px 0 0;vertical-align:top;}.share_2{float:left;padding:0 20px 0 0;}.share_3{float:left;padding:0 5px 0 0;}.share_4{float:left;padding:0 0 0 5px;}.ds1{border-bottom:1px dotted #CCC;height:23px;margin:0 0 7px;padding:0 0 7px;}span.smallvote{color:#666;font-size:1em;padding:0 2px;}.vup{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -397px transparent;height:12px;margin:6px 2px 0 0;padding:0;vertical-align:top;width:12px;}.vdown{background:url(/theme/mainsprite.jpg) no-repeat scroll 0 -409px transparent;height:12px;margin:6px 2px 0 8px;padding:0;vertical-align:top;width:12px;}.votediv{display:inline;vertical-align:top;}.txt_fp{background:none repeat scroll 0 0 #FDFEFF;border-bottom:1px dotted #CCC;border-top:1px dotted #CCC;font-size:.8em;margin:0 0 10px;padding:10px 0;}.bgframe:hover,.download_item:hover{background:none repeat scroll 0 0 #FFF8E7;}.s16,.s23,.s39,.s49,.s50,.s52,.s7{background:url(sprite.png) repeat scroll 0 -96px rgba(0,0,0,0);}.s260,.s53{background:url(sprite.png) repeat scroll 0 -832px transparent;}.download_top2{border-bottom:1px dotted #CCC;font-size:.8em;font-weight:700;height:28px;line-height:28px;}.download_item2{background:url(mainsprite.jpg) no-repeat scroll 0 -142px transparent;border-bottom:1px dotted #CCC;font-size:.8em;height:28px;line-height:28px;padding:0 0 0 20px;}.maintable2{border-collapse:collapse;font-size:.75em;}table.maintable2{width:100%}.maintable2 tr.g{background:url(td_bg.png) repeat scroll 0 0 transparent;}.maintable2 td{border-top:1px solid #CCC;padding:5px;vertical-align:top;}.maintable2 th{cursor:none;padding:5px;text-transform:uppercase;}.icon-sprite{width:25px;height:25px;background:url(./sprites.png) left top no-repeat!important;display:inline-block;position:relative;margin-top:-15px;top:10px;border-radius:20px;-webkit-box-shadow:0 0 5px 0 rgba(0,0,0,.1);-moz-box-shadow:0 0 5px 0 rgba(0,0,0,.1);-o-box-shadow:0 0 5px 0 rgba(0,0,0,.1);box-shadow:0 0 5px 0 rgba(0,0,0,.1);}.fb_iframe_widget,.fb_iframe_widget span,.fb_iframe_widget span iframe[style]{min-width:100%!important;width:100%!important;}.mediafire{background-position:-115px!important;}.megashare{background-position:-30px!important;}.sharevn{background-position:-58px!important;}.share{background-position:-88px!important;}.tenlua{background-position:-148px!important;}.rapid{background-position:-180px!important;}.mega{background-position:-215px!important;}.baidu{background-position:-283px!important;}.uploadch{background-position:-318px!important;}.direct{background-position:-249px!important;}
</style>

<?php
if(isset($_GET["zm"]))
{
$id0 =  $_GET["zm"];


 $conn=mysql_connect("localhost","luutru360","0907375645") or die("can't connect this  database");
    mysql_select_db("luutru36_getlink",$conn);
    $sql="select * from link where url LIKE '%$id0%' LIMIT 1";
    $query=mysql_query($sql);
    if(mysql_num_rows($query)!=""){
    $stt=1;
    while($row=mysql_fetch_array($query)){
       $stt++;
       $npk = $row['url'];
    }
    }else{
     echo "<tr><td colspan='4' align='center'>Không tìm thấy tên bài hát!</td></tr>";
   }
$api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$id0.'"}';
//đọc nội dung API
$get = get_by_curl($api);

  
//bóc tách
preg_match('/"320":"(.*)"}/U', $get, $mp3_320k);
$audio = str_replace('\/', '/', $mp3_320k[1]);
$data = get_by_curl($npk);// kết nối và lấy toàn bộ dữ liệu của link

	preg_match("/http:\/\/mp3.zing.vn\/xml\/song\-xml\/(.*?)\"/",$data,$arr_preg);
	$link_xml = str_replace('"','',$arr_preg[0]);
	$xml_data = get_by_curl($link_xml);
	// tách lấy tên bài hát trong file xml
	preg_match("/<title><!\[CDATA\[(.*?)]]><\/title>/",$xml_data,$name_arr);
$name_song = $name_arr[1];
 $json = json_decode($get, true);

    $name = $json['title'];
    $artist = $json['artist'];
$theloai = $json['genre_name'];
  $username = $json['username'];
    $likes= $json['likes'];
$coppy = $json['copyright'];

$thumbnail= $json['thumbnail'];
$hq = $json['source']['128'];
    $hd = $json['source']['320'];
    $l2 = $json['source']['lossless'];
//echo '<audio controls style="visibility: hidden"
 //name="mp3get"><source src="'.$audio.'" type="audio/mpeg"></audio>';

//echo "<input type='url' id='audio' name='audio' value='".$audio."'";
$aaa = $audio;

$url=$aaa;
$ch=curl_init();
$timeout=5;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

$result=curl_exec($ch);
curl_close($ch);
echo $result;
    //$hqq = str_replace("download","source",$hq);
  //  $hdd = str_replace("download","source",$hd);
   // $l22 = str_replace("download","source",$l2);
echo "<center><img src='http://image.mp3.zdn.vn/".$thumbnail."' width='200' /></center>";
//echo "<meta http-equiv='refresh' content='0;".$audio."' download>";
echo "<center><h1>".$name." - ".$artist."</h1></center>";


echo "<center><h1>Tải về : <a href='".$hq."' download>128kb</a>|<a href='".$hd."' download>320kb</a>|<a href='".$l2."'>Lossless</a></center></h1><hr/>";
echo "<div id='download' class='lk'>";
	echo "<center><iframe scrolling='no' width='860' height='240' src='http://mp3.zing.vn/embed/song/".$id0."?start=true' frameborder='0' allowfullscreen='true'></iframe></center>";
	
echo "</div><hr/>";
echo '';
echo "<center>Chia sẻ bởi: <b>".$username."</b> Số lượt thích: <b>".$likes."</b> Thể loại: <b>".$theloai."</b><!-- Coppyright : <b>".$coppy."</b>--></center><hr/>";
//echo '<div style="background-color:;border:5px groove rgb(145, 228, 203);" cellpadding="5">
//<div style="background-color:;border:4px groove #111111;" align="center">';
echo "<center><span><div align='center' class='fb-like' data-href='http://nghenhac.luutru360.com/?zm=".$id0."' data-layout='standard' data-action='like'  data-show-faces='true' data-share='true'></center></span></div></div>";
//echo "<div class='fb-share-button' 
	//	data-href='http://nghenhac.luutru360.com/?zm=".$id0."' 
	//	data-layout='button_count'>
	//</div>";
	echo '<center><h2>Mọi người đã từng nghe trang này :</h2>
<img alt="Website counter" hspace="0" vspace="0" border="0" src="http://www.webmetriccmonitor.com/8923897-CA0BC1B2C25DE723F57DC8D6CF211E27/counter.img?theme=7&digits=7&siteId=7"/>
</center>';

//echo "<script type='text/javascript'>
  //var _pop = _pop || [];
 // _pop.push(['siteId', 851701]);
  //_pop.push(['minBid', 0.000000]);
  //_pop.push(['popundersPerIP', 0]);
  //_pop.push(['delayBetween', 0]);
  //_pop.push(['default', false]);
 // _pop.push(['defaultPerDay', 0]);
  //_pop.push(['topmostLayer', false]);
 // (function() {
  //  var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
  //  var s = document.getElementsByTagName('script')[0]; 
   // pa.src = '//c1.popads.net/pop.js';
   // pa.onerror = function() {
   //   var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
   //   sa.src = '//c2.popads.net/pop.js';
   //   s.parentNode.insertBefore(sa, s);
   // };
   // s.parentNode.insertBefore(pa, s);
 // })();
//</script>";
echo "<div class='fb-comments' data-href='http://nghenhac.luutru360.com/?zm=".$id0."' data-numposts='5'></div></center>";



}

else{
}

?>


<?php
if(isset($_GET["play"]))
{
$id0 =  $_GET["play"];


echo '<meta http-equiv="refresh" content="0;/?zm='.$id0.'">';


}


?>
<?php
if(isset($_GET["nct"]))
{
$id0 =  $_GET["nct"];


 $conn=mysql_connect("localhost","luutru360","0907375645") or die("can't connect this  database");
    mysql_select_db("luutru36_getlink",$conn);
    $sql="select * from nct where url LIKE '%$id0%' LIMIT 1";
    $query=mysql_query($sql);
    if(mysql_num_rows($query)!=""){
    $stt=1;
    while($row=mysql_fetch_array($query)){
       $stt++;
       $npk = $row['url'];
    }
    }else{
     echo "<tr><td colspan='4' align='center'>Không tìm thấy tên bài hát!</td></tr>";
   }

  function get_id_nct($link)
    {    
        $cut=explode(".html",$link);
        $link=$cut[0];
         $cut2=explode("http://www.nhaccuatui.com/bai-hat/",$link);
         $link2=$cut2[1];
         $cut3=explode(".",$link2);
        
        return "http://www.nhaccuatui.com/download/song/".$cut3[1];
    }
     function get_id_nct2($link)
    {    
        $cut2=explode(".html",$link);
        $link2=$cut2[0];
         $cut22=explode("http://www.nhaccuatui.com/bai-hat/",$link);
         $link22=$cut2[1];
         $cut32=explode(".",$link22);
        
        return $cut32[1];
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
    $link = get_id_nct($id0);
     $get = get_by_curl($link);
preg_match('/"stream_url":"(.*)"}/U', $get, $mp3_320k);
  $json = json_decode($get, true);
 $hd = $json['data']['stream_url'];
$nhacc = get_id_nct2($id0);
echo "<center><h1>Tải về : <a href='".$hd."' download>Click Download</a></center></h1><hr/>";
//echo "<div id='download' class='lk'>";
	//echo "<center><iframe src='http://www.nhaccuatui.com/mh/auto/".$nhacc."' width='316' height='382' frameborder='0' allowfullscreen></iframe></center>";
	//
//echo "</div><hr/>";

echo "<center><div class='fb-like'></div></center><br/>";
echo "<div class='fb-share-button' 
		data-href='http://nghenhac.luutru360.com/?nct=".$id0."' 
		data-layout='button_count'>
	</div>";
	echo '<center><h2>Mọi người đã từng nghe trang này :</h2>
<img alt="Website counter" hspace="0" vspace="0" border="0" src="http://www.webmetriccmonitor.com/8923897-CA0BC1B2C25DE723F57DC8D6CF211E27/counter.img?theme=7&digits=7&siteId=7"/>
</center>';

echo "";
echo "<div class='fb-comments' data-href='http://nghenhac.luutru360.com/?nct=".$id0."' data-numposts='5'></div></center>";



}

else{
}

?>

<?php

if(isset($_POST["get"]))
{


         $link = $_POST['link'];
if ($link == ""){
echo "<center>Vui lòng nhập link MP3</center>";
echo "<meta http-equiv='refresh' content='1;url=http://nghenhac.luutru360.com'>";
}
elseif (eregi("http://mp3.zing.vn/bai-hat/", $link )){
$link23 = str_replace(' ', '', $link);
echo "<center>Đã getlink thành công vui lòng Click vào link dưới để tải về...</center>";
$id = explode('/', $link23);
$id = explode('.html', $id[5]);
$id=$id[0];
$api = 'http://api.mp3.zing.vn/api/mobile/song/getsonginfo?keycode=fafd463e2131914934b73310aa34a23f&requestdata={"id":"'.$id.'"}';
//đọc nội dung API
$get = get_by_curl($api);
//bóc tách
preg_match('/"320":"(.*)"}/U', $get, $mp3_320k);
$audio = str_replace('\/', '/', $mp3_320k[1]);
$data = get_by_curl($link);// kết nối và lấy toàn bộ dữ liệu của link
	preg_match("/http:\/\/mp3.zing.vn\/xml\/song\-xml\/(.*?)\"/",$data,$arr_preg);
	$link_xml = str_replace('"','',$arr_preg[0]);
	$xml_data = get_by_curl($link_xml);
	// tách lấy tên bài hát trong file xml
	preg_match("/<title><!\[CDATA\[(.*?)]]><\/title>/",$xml_data,$name_arr);
$name_song = $name_arr[1];
//echo "<meta http-equiv='refresh' content='0;".$audio."' download>";
echo "<center><h1>".$name_song."</h1></center>";
echo "<center><h1><a href='http://nghenhac.luutru360.com/dw.php?url=".$audio."'>Click Download</a></center></h1>";

$age= $link23;
///////////////////////////////////
$servername = "localhost";
$username = "luutru360";
$password = "0907375645";
$dbname = "luutru36_getlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO link(url)
VALUES ('$age')";

if ($conn->query($sql) === TRUE) {
   // echo "<br/><h2>Tải lên thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

		else{
		echo "<center>Link không hợp  lệ!</center>";
		}   
       
     
}


        
 ?>
<?php

if(isset($_POST["albumm"]))
{


         $link = $_POST['link'];
if ($link == ""){
echo "<center>Vui lòng nhập link MP3</center>";
echo "<meta http-equiv='refresh' content='1;url=http://nghenhac.luutru360.com'>";
}
elseif (eregi("http://mp3.zing.vn/album/", $link )){
$link23 = str_replace(' ', '', $link);
echo "<center>Get thành công bạn hãy chọn bản nhạc muốn tải...</center>";
echo '<iframe src="http://nghenhac.luutru360.com/ver2.php?url='.$link.'" style="width:98%;" height="500" "></iframe>';

$age= $link23;
///////////////////////////////////
$servername = "localhost";
$username = "luutru360";
$password = "0907375645";
$dbname = "luutru36_getlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO link(url)
VALUES ('$age')";

if ($conn->query($sql) === TRUE) {
   // echo "<br/><h2>Tải lên thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

		else{
		echo "<center>Link không hợp  lệ!</center>";
		}   
       
     
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
 
 
// Bắt đầu từ đây
if($_POST['played']) {
 $_SESSION['linkk'] = $_POST['link'];
$link =  str_replace(' ', '', $_POST['link']);
$addlkk = $_POST['link'];
// Nếu người dùng bấm vào submit thì [dưới]
   
if (empty($link))  { // thì kiểm tra xem có rỗng hay không nếu rỗng thì thông báo và kết thúc không chạy bất kỳ lệnh nào.
    echo '<center>Vui lòng nhập link vào!</center>';
echo "<meta http-equiv='refresh' content='1;url=http://nghenhac.luutru360.com'>";
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
	//echo '<center><h3><a href="'.$link_mp3.'" target="_blank">'.$name_song.'</a></h3></center>';
        echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$link_mp3."' target='_blank'>Click vào đây để tải!</a><br/></center>";
//echo "<meta http-equiv='refresh' target='_blank' content='0;".$link_mp3."'>";
//<audio src='".$link_mp3."' controls autoplay preload='none' />
///////////////////////////////////
$servername = "localhost";
$username = "luutru360";
$password = "0907375645";
$dbname = "luutru36_getlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO link(url)
VALUES ('$addlkk')";

if ($conn->query($sql) === TRUE) {
   // echo "<br/><h2>Tải lên thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
// [chú thích 09]	
echo "<center>Link bài hát không đúng vui lòng nhập lại!</center>";	
}
}
?>
<?php

if(isset($_POST['nctt'])) {
if(eregi("http://www.nhaccuatui.com/bai-hat/", $_POST['link'] )){
$link23 = $_POST['link'];
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
    $link = get_id_nct($link23);
//   echo $link."<br>";
     $get = get_by_curl($link);
preg_match('/"stream_url":"(.*)"}/U', $get, $mp3_320k);
$audio = str_replace('\/', '/', $mp3_320k[1]);
  $json = json_decode($get, true);
 $hd = $json['data']['stream_url'];
echo "<center><h1><a href='".$hd."' download>Click Download</a></center></h1>";
///////////////////////////////////
$servername = "localhost";
$username = "luutru360";
$password = "0907375645";
$dbname = "luutru36_getlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO nct(url)
VALUES ('$link23')";

if ($conn->query($sql) === TRUE) {
   // echo "<br/><h2>Tải lên thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
// [chú thích 09]	
echo "<center>Link bài hát không đúng vui lòng nhập lại!</center>";	
}
}
?>
<?php

if(isset($_POST['video'])) {
if(eregi("http://mp3.zing.vn/video-clip/", $_POST['link'] )){
$link23 = $_POST['link'];
	$id = explode('/', $_POST['link']);
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
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_240p."' target='_blank'>Chất lượng 240P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_360p."' target='_blank'>Chất lượng 360P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_480p."' target='_blank'>Chất lượng 480P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_720p."' target='_blank'>Chất lượng 720P</a></center>";
	echo "<center><a href='http://nghenhac.luutru360.com/dw.php?url=".$mp4_1080p."' target='_blank'>Chất lượng 1080P</a></center>";
$age= $link23;
///////////////////////////////////
$servername = "localhost";
$username = "luutru360";
$password = "0907375645";
$dbname = "luutru36_getlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO link(url)
VALUES ('$age')";

if ($conn->query($sql) === TRUE) {
   // echo "<br/><h2>Tải lên thành công!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
}
?>
<center>
<div id="download"  <?php echo $idvss; ?>class="lk">
<form action="" method="post">
	<input type="url" name="link" value="<?php $_SESSION['linkk'] ?>" placeholder="Link nhạc zing mp3">
	<input type="submit" value="Tải nhạc 320kb!" name="get">
<input type="submit" value="Tải nhạc 128kb!" name="played">
<input type="submit" value="Tải video!" name="video">
<input type="submit" value="Get Album" name="albumm">
<!--<input type="submit" value="Tải NCT VIP" name="nctt">-->

</form>
</div>
</center>
<!--<?php
  echo "<div ".$idvss."> <center><h1>Zing Mp3</h1></center></div>"; 

?>-->
<?php
if(isset($_GET["zm"]))
{

}
else{
include("ketnoi.php");
$kq=mysql_query("SELECT id from link ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from link where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
$id2 = explode('/', $data['url']);
$id2 = explode('.html', $id2[5]);
  echo "<div id='download'  ".$idvss." class='lk'>Link  320Kb/Video vừa GET : <a href='/?zm=".$id2[0]."'>".$data['url']."</a><hr/></div>"; 


}
}

?>
<!--<?php
  echo "<div ".$idvss."> <center><h1>Nhạc Của Tui</h1></center></div>"; 

?>
<?php
if(isset($_GET["zm"]))
{

}
else{
include("ketnoi.php");
$kq=mysql_query("SELECT id from nct ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from nct where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<div id='download' ".$idvss."class='lk'>Link NCT vừa get : <a href='/?nct=".$data['url']."'>".$data['url']."</a><hr/></div>"; 


}
}

?>-->
<?php
function getRedirectUrl ($url) {
    stream_context_set_default(array(
        'http' => array(
            'method' => 'HEAD'
        )
    ));
    $headers = get_headers($url, 1);
    if ($headers !== false && isset($headers['Location'])) {
        return $headers['Location'];
    }
    return false;
}
?>
<center>
<?php
if(isset($_GET["zm"]))
{

}
else{
echo '
<div class="fb-comments" data-href="http://nghenhac.luutru360.com" data-numposts="5"></div></center>';
}
?>
<div id="fb-root" ></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=372380406281906";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--<center><script src="http://code.hoiquantinhoc.vn/free_vps/textlinks.js" language="javascript" type="text/javascript"></script></center>
-->

</body>
</html>