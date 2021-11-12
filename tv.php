<center>
<div id="download" class="lk">
<form action="" method="post">
	<input type="url" name="link" placeholder="Link server TV.ZING.VN">
	<input type="submit" value="Getlink">
</form>
</div>
</center>
<?php

?>
<?php
if($_POST['link']) {
	$id = explode('/', $_POST['link']);
$id = explode('.html', $id[5]);
echo $id[0];
}
?>
