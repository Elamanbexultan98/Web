<?php


error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";



$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");
if($result){
while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div class="drop">
<ul class="top-level">
  <li><a href="Barca.html">Басты бет</a></li>
  <li><a href="hist.html">Қала</a>
    <!-- dropdown menu first level -->
    <ul class="second-level">
      <li><a href="hist.html">Қала тарихы</a></li>
      <li><a href="Galery.html">Галерея</a>
	  <li><a href="javascript:;">Қала жайлы</a>
	  <ul class="third-level">
          <li><a href="Din.html">Дін басқармалары</a></li>
          <li><a href="javascript:;">Денсаулық</a> </li>
		  <li><a href="javascript:;">Жол транспорты</a></li>
		</ul></li>
	  
	  <li><a href="blogs.html">Блог</a>
	  </li>

	  <li><a href="tur.html">Спорт және туризм</a>
	  <ul class="third-level">
          <li><a href="Uni.html">Universiada 2017</a></li>
		  <li><a href="tur.html">Туризм</a></li>
		 </ul></li>
	  <li><a href="javascript:;">Карта</a>
      </li>
    </ul>
  </li>
  <li><a href="javascript:;">Кері байланыс</a></li>
<li>
  <form class="search">
  <p><input type="search" name="q" placeholder="Поиск по сайту" class="input"> 
   <input type="submit" value="Найти" class="submit"></p>
  </form>
  </li>
  
  <li id="roud">
  
  <li class="social"><a href="https://vk.com/feed" title="Вк топ" target="_blank">
    <img src="images/vk.png" alt="Вк" title="Вк">
	</a></li> 
	<li class="social"><a href="https://www.instagram.com/" title="Instagram парақшасы" target="_blank">
    <img src="images/Insta.png" alt="Instagram" title="Instagram">
	</a></li> 
	<li class="social"><a href="https://twitter.com" title="twitter парақшасы" target="_blank">
    <img src="images/twitter.png" alt="twitter" title="twitter">
	</a></li> 
	<li class="social"><a href="https://mail.google.com/mail/u/0/?tab=wm#inbox" title="Google mail" target="_blank">
    <img src="images/google.png" alt="Google mail" title="Google mail">
	</a></li>
 </li>
 </ul>
</div>
 <h1 class="h1">Назарбаев жерді шетелдіктерге жалға беруге уақытша тыйым салды.</h1>
<div class="text">
<img src="img/bl3.jpg" />

<p>Мемлекет басшысы "Жер заңнамасының кейбір нормаларын қолдануға мораторий енгізу туралы" Жарлыққа қол қойды, - деп хабарлайды <a href="/">Tengrinews.kz</a> тілшісі Ақордаға сілтеме жасап.</p>

<p>Жарлықтың мәтіні Ақорда сайтында жарияланды:</p>

<p>Қазақстан Республикасы Конституциясының 40-бабына, 44-бабының 3) тармақшасына сәйкес қаулы етемін:</p>
<p>1. 2016 жылғы 31 желтоқсанға дейін мыналарға:</p>
<p>1) "Қазақстан Республикасының Жер кодексіне өзгерістер мен толықтырулар енгізу туралы" 2015 жылғы 2 қарашадағы Қазақстан Республикасы Заңының нормаларын қолдануға;</p>
<p>2) шетелдіктерге, азаматтығы жоқ адамдарға, шетелдік заңды тұлғаларға, сондай-ақ жарғылық капиталындағы шетелдіктердің, азаматтығы жоқ адамдардың, шетелдік заңды тұлғалардың үлесі елу пайыздан асатын заңды тұлғаларға ауыл шаруашылығы мақсатындағы жер учаскелерін жалдау шарттарымен уақытша жер пайдалану құқығын беруге;</p>
<p>3) жеке және заңды тұлғаларға мемлекеттік меншіктегі ауыл шаруашылығы мақсатындағы жер учаскелерiне жеке меншік құқығын беруге мораторий жариялансын.</p>
<p>2. Қазақстан Республикасының Үкіметі:</p>
<p>1) осы Жарлықтың 1-тармағын іске асыруға бағытталған заңнамалық түзетулер енгізуді қамтамасыз етсін;</p>
<p>2) жер реформасы жөнінде Комиссия құрсын;</p>
<p>3) Осы Жарлықты іске асыру жөнінде өзге де шаралар қабылдасын.</p>
<p>3. Қазақстан Республикасының Бас прокуратурасы осы Жарлықтың 1-тармағын іске асыру барысында заңдылықтың сақталуын қадағалауды қамтамасыз етсін.</p>
<p>4. Осы Жарлықтың орындалуын бақылау Қазақстан Республикасы Президентінің Әкімшілігіне жүктелсін.</p>
<p>5. Осы Жарлық қол қойылған күнінен бастап қолданысқа енгізіледі.</p></div>




<div id="main">

<?php


foreach($comments as $c){
	echo $c->markup();
}

?>

<div id="addCommentContainer">
	<p>Пікір қалдырыңыз:</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Атыңыз:</label>
        	<input type="text" name="name" id="name" />
            
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" />
        
            <label for="body">Пікіріңіз:</label>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" value="Жіберу" />
        </div>
    </form>
</div>
</div>
<footer>
		<div id="footer">
			<!-- wrapper-footer -->
			<div class="wrapper">
			<!-- left col -->
				<div class="footer-left">
					<h6 class="p-title">Мен жайлы.</h6>
					<p>Алматы қаласы Сүлеймен Демирель университетінің 1-ші курс студенті</p>
					<p>Бексұлтан Еламан Мұхтарұлы.<a href="https://mail.google.com/mail/u/0/?tab=wm#inbox"> Email-ға жаза аласыз.</a></p>
					
				</div>
				
				<!--  left бітті -->
				
				<!-- right басы -->
				<div class="footer-right">
					<h6 class="p-title">Сайтқа Тіркеліңіз.</h6>
					<p>Сайтқа тіркелу үшін астыдағы анкетаны толтырыңыз.</p>

				
					
					<script type="text/javascript" src="js/form-validation.js"></script>
					<form  action="act.php" id="contactForm" method="post">
							<div>
								<input name="e_login"  id="name" type="text" class="form-poshytip" placeholder='Логин' required />
							</div>
							<div>
								<input name="e_password"  id="email" type="Password" class="form-poshytip" placeholder='пароль' required />
							</div>
							<div>
							<p><input type="submit" value="Кіру" name="утеук" id="submit" /></p>
							</div>
							<p style="font-size:12px padding-bottom:10px;">Егер сіз тіркелмеген болсаңыз <a href="http://localhost:8080/xampp/demo/reg.php" style="cursor:pointer">Тіркелуді</a> басыңыз </p>
					
					</form>
					
					<!--  form -->
				</div>
				
				<div class="clear"></div>
				<!--  right  -->
					
				
			</div>
			<!--  wrapper-footer -->
		</div>
		
		<!-- FOOTER -->
		
	
		<!-- Bottom -->
		<div id="bottom">
			<!-- wrapper-bottom -->
			<div class="wrapper">
				<div id="bottom-text">Барлық құқұқ сақталған &copy; <? php echo date('Y')?>
				</div>
			</div>
			<!--  wrapper-bottom -->
		</div>
		<!--  Bottom -->
		</footer>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
