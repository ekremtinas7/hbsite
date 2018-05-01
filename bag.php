<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
$bag=mysql_connect("localhost","root","");
if($bag)
{
	mysql_select_db("haberci",$bag);
	mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET COLLATİON_CONNECTİON = 'utf8_turkish_ci'");
}
else
{
echo "Bağlantı Hatası";	
}





?>
</body>
</html>