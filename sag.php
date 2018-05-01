<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<th width="261" rowspan="6" scope="row">
                
                 <?php 
				 include("bag.php");
				 $sorgu=mysql_query("select * from sagdaki_haber");
				 while($dizi=mysql_fetch_array($sorgu))
				 {
				 ?><table width="220" height="160" border="0">
		          <tr>
		            <th height="99" scope="row"><a href="haberdetay.php?id=<?php echo $dizi[0];?>" ><p class="yazi"><?php echo $dizi[4];?></p><img src="hababamadmin/images/<?php echo $dizi[1]; ?>" alt="" width="193" height="127" border="0"></a></th>
	              </tr>
		          <tr>
                 
		            <th height="55" scope="row"><span class="font2"><?php echo $dizi[2]; ?></span>
	                  <hr></th>
	              </tr>
	            </table> 
				<?php
                }
				?>
                </th>
</body>
</html>