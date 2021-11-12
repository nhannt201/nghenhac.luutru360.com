<?php
 
     $db_con = mysql_connect("localhost","tuanaiti","h7bDs0X13z");
mysql_set_charset('utf8');

     if (!$db_con){
          die('Không thể kết nối database: ' . mysql_error());
     }
     mysql_select_db("tuanaiti_getlink", $db_con);
?>
<?php
 $servername = "localhost";
$username = "tuanaiti";
$password = "h7bDs0X13z";
$dbname = "tuanaiti_getlink";
?>

