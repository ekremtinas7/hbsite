<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Haberci</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
td img {display: block;}
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
</style>
</head>

<bgsound src="ses/ses1.mp3" loop="4">

	<div id="page">
	  <div id="header">
        
			<div class="div4" id="logo"> HABERCİ.com |SİTE HARİTASI|<div id="google_translate_element" class="div4"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'tr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> <img src="eklenti/Ara.jpg" width="188" height="27" class="img1"></div>
			<div id="navigation">
				<a href="checkout.php" class="cart"></a>
				<ul>
				  <li class="selected">
						<a href="index.php">ANASAYFA</a>
				  </li>
					<li>
					  <a href="news.php">SON DAKİKA</a>
					</li>
					<li>
						<a href="scents.php">SPOR</a>
					</li>
					<li>
					  <a href="shop.php">SİYASET</a>
					</li>
					<li>
						<a href="about.php">HAKKIMIZDA</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="contact.php">GEZİ</a>
					</li>
			  </ul>
		</div>
        <div><img src="images/banner.jpg" width="954" height="98"></div>
      </div>
	  <div id="contents">
	    <div id="adbox">
	      <p>&nbsp;</p>
	      <div class="div3">
	        <marquee>
	          SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA
            </marquee>
	      </div>
	      <div class="saat"> 
	        
	        <!--09-BAŞLA-->
	        <!-- Clock code finished -->
	        </div>
	      <table height="2294" border="0">
		      <tr>
		        <th width="700" height="154" scope="row"><table width="694" height="286" border="0">
		          <tr>
		            <th height="282" scope="row"><embed src="script7/script1/script7.htm" width="660" height="518"></embed></th>
		          </tr>
		        </table></th>
		        <th width="288" rowspan="7" scope="row">
                 <div style="height: 1550px; overflow: scroll;">
                
                <marquee direction="down" onMouseOver="stop()" onMouseOut="start()">
                <?php 
				 include("bag.php");
				 $sorgu=mysql_query("select * from sagdaki_haber");
				 while($dizi=mysql_fetch_array($sorgu))
				 {
				 ?><table width="220" height="160" border="0">
		          <tr>
		            <th height="99" scope="row"><a href="haberdetay.php?id=<?php echo $dizi[0];?>"><p class="yazi"><?php echo $dizi[4];?></p><img src="images/<?php echo $dizi[1]; ?>" alt="" width="193" height="127" border="0"></a></th>
	              </tr>
		          <tr>
                 
		            <th height="55" scope="row"><span class="font2"><?php echo $dizi[2]; ?></span>
	                  <hr></th>
	              </tr>
	            </table> 
				<?php
                }
				?>
                </marquee>
                </div>
                </th>
            </tr>
		      <tr>
		        <th height="20" scope="row">&nbsp;</th>
	        </tr>
		      <tr>
		        <th height="22" bgcolor="#00FF00" scope="row">&nbsp;</th>
	        </tr>
		      <tr>
		        <th height="240" scope="row"><div id="featured">
		          <h3 class="font123"> Türkiye Gündeminde Spor</h3>
		          <ul>
		            <li>
		              <embed src="script4/script4.htm" width="678" height="430"></embed>
		            </li>
	              </ul>
	            </div></th>
	          </tr>
		      <tr>
		        <th height="20" scope="row">&nbsp;</th>
	        </tr>
		      <tr>
		        <th height="440" scope="row"><p>&nbsp;</p>
	              <table width="675" height="419" border="0">
	                <tr>
	                  <th height="23" bgcolor="#00FF00" class="div5" scope="row">Spor Videoları</th>
                    </tr>
	                <tr>
	                  <th scope="row"><iframe width="640" height="360" src="https://www.youtube.com/embed/1IBP3FZUvrk" frameborder="0" allowfullscreen></iframe></th>
                    </tr>
                  </table>
                <p>&nbsp;</p></th>
	          </tr>
		      <tr>
		        <th height="20" scope="row"><iframe name="I15" align="center" marginWidth="0" marginHeight="0" frameBorder="0" width="700" scrolling="no" height="31" src="http://cilekweb.com/webaraclar/doviz10.asp"></iframe></th>
	        </tr>
		      <tr>
		        <th height="22" colspan="2" bgcolor="#00FF00" class="div5" scope="row">Spor Fotoları</th>
	          </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
		            <?php 
				  $sorgu4=mysql_query("select * from spor_fotolari1");
				  while($dizi4=mysql_fetch_array($sorgu4))
				  { ?>
                  
		             <th width="244" height="237" scope="row"><a href="fotogaleri.php?id10=<?php echo $dizi4[1]; ?>"/><img src="images/foto galeri/<?php echo $dizi4[0]; ?>" alt="" width="214" height="206"></a></th>
		          <?php } ?>
	              </tr>
		          <tr>
		            <?php 
				  $sorgu5=mysql_query("select * from spor_fotolari2");
				  while($dizi5=mysql_fetch_array($sorgu5))
				  { ?>
		            <th height="231" scope="row"><a href="fotogaleri.php?id11=<?php echo $dizi5[1]; ?>"/><img src="images/foto galeri/<?php echo $dizi5[0]; ?>" alt="" width="214" height="206"></a></th>       <?php } ?>
	              </tr>
	            </table></th>
	          </tr>
		      <tr>
		        <th height="256" colspan="2" align="left" valign="bottom" bgcolor="#000000" scope="row"><div id="links">
		          <div>
		            <h3>Yorum</h3>
		            <ul class="blog">
                 <form name="form" id="form">
                   <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
                     
                  
<?php 
				 include("bag.php");
				 $sorgu10=mysql_query("select * from yorum");
				 while($dizi10=mysql_fetch_array($sorgu10))
				 {
				 ?>
                 <option> <li> &#8226; <a href="blog.php"><?php echo $dizi10[1]; ?>   <span class="time"><?php echo $dizi10[2]; ?></span></a></li></option>
				<?php
                }
				?>
                 </select>
                 </form>
		         </select>
		               <form action="yorumyap.php" method="post">
                      <textarea name="yorum" cols="32" rows="10" >Yorumunuzu Yazınız..</textarea>
                      
                      
                      <br><input name="" type="submit" value="Yorum Yap">
                      </form>
                     
                      
                      </li>
	                </ul>
	              </div>
		        </div>
		          <div class="hava"><div style="width:300px;height:210px;text-align:center; font-size: 10px; color:#FFF;"><script type="text/javascript">var mynetWidgets = {service: "havadurumu",widget: "3gunluk",city: "konya", theme:"mynet"};</script><script type="text/javascript" src="http://s.mynet.com/nocache/widget.js"></script> <a href="" title="Tüm Konya Haberleri"></a></div></div>
		          <div id="sidebar">
		            <form action="öneriyap.php" method="post" id="newsletter">
		              <h3>Önerilerinizi Söyleyin</h3>
		              <input name="text1" type="text" value="E-Posta" class="txtfield">
                      <input name="text2" type="text" value="Öneri" class="txtfield">
		              <input type="submit" value="Sign up!" class="btn">
	                </form>
		            <div id="connect">
		              <h3>Bağlanın</h3>
		              <ul>
		                <li> <a href="#" target="_blank" class="twitter"></a></li>
		                <li> <a href="#" target="_blank" class="googleplus"></a></li>
		                <li> <a href="#" target="_blank" class="facebook"></a></li>
		                <li> <a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" class="vimeo">
	                    </a></li>
	                  </ul>
	                </div>
                </div></th>
	        </tr>
          </table>
	      <p class="div5">&nbsp;</p>
	      <p>
	    </div>
	    <div id="footer"></div>
	</div>
    </div><script language="javascript" src="http://is.sitekodlari.com/yukaricik12.js"></script>
</body>
</html>