<link  <link rel="stylesheet" type="text/css" href="reg.css" />
<meta charset="UTF-8" />
<script src="reeg.js"></script>
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
<form method="POST" onsubmit="ch();return x;" action="act.php" class="reg"><label class="span">Атыңыз</label>
<input type="text" name="username" placeholder="Username" id="name" required /><br><label class="span">Тегіңіз</label>
<input type="text" name="surname" placeholder="Surname" id="sur"required /><br><label class="span">Email-іңіз</label>
<input type="text" name="Email" placeholder="Email" id="mail"required /><br><label class="span">Логин</label>
<input type="text" name="login" placeholder="Login" id="log"required /><br><label class="span">Құпия сөз</label>
<input type="Password" name="password" placeholder="Password" id="pass" required /><br><label class="span">Құпия сөзді қайта енгізіңіз</label>
<input type="Password" name="r_password" placeholder="Password repeat" id="repass"required /><br>
<input type="submit"   name="submit" value="Тіркелу" id="sub"/><br>
</form>
