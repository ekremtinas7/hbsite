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
					$eposta=$_POST['text1'];
					$öneri=$_POST['text2'];
					$eposta=strip_tags($eposta);
					$eposta=mysql_real_escape_string($eposta);
					$öneri=strip_tags($öneri);
					$öneri=mysql_real_escape_string($öneri);
					mysql_query("insert into öneri (eposta,öneri) values('$eposta','$öneri')");
					header('Refresh:0;url=index.php');
					?>
                 
</body>
</html>