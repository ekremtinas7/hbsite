<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
					error_reporting(0);
					include("bag.php");
					$yorum=$_POST['yorum'];
					$yorum=strip_tags($yorum);
					$yorum=mysql_real_escape_string($yorum);
					$tarih= date("Y-m-d");
					mysql_query("insert into yorum (yorum,tarih) values('$yorum','$tarih')");
					header('Refresh:0;url=index.php');
					?>
</body>
</html>