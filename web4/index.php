<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>我把flag藏在这里辣！</title>
  </head>
  <body style="background:#B8B8B8">
	<img src="./hacker.png">
	<br><br>
<?php
	error_reporting(0);
	echo "居然真的被你找到这里来了？？？";
	$ans=$_POST['password'];
	if ($ans=="H4ppy_Nat10na1_Day!") {
		echo "HNUCTF{Ana1y2e_netw0rk_traff1c}";
		# code...
	}
?>
可惜你没有password，依然得不到flag，哈哈哈哈哈~~~
  </body>
</html>