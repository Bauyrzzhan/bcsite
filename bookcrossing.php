<?
session_start();
include_once('includes/func.php');
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user_id']);
	header("location:bookcrossing.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<?
	include_once("includes/head.php");
	?>
	<link rel="stylesheet" type="text/css" href="bookcrossingg.css">
</head>
<body>
<!-- HEADER -->
	<header class="header" id="header">
		<div class="container">
			<div class="header__inner">
				<div class="header_logo">
				<img src="img/kniga1.png" width="70px" height="70px" alt="">
			</div>
			<nav class="nav">
				<!-- DROPDOWN -->
			<div class="dropdown">
			  <a class="dropbtn nav__link"  href="#">Главное</a>
			  	<div class="dropdown-content">
			    	<a href="magaz.php">Поиск</a>
			    	<a href="regbook.php" style="text-align:center;">Зарегистрировать книгу</a>
			  </div>
			</div>
<!-- END DROPDOWN -->
			<a class="nav__link" href="#" data-scroll="#Citati">Цитаты</a>
			<a class="nav__link" href="#" data-scroll="#book">Разделы</a>
			<a class="nav__link" href="contact.php">Контакты</a>
			<a class="nav__link" href="infosite.php">О нас</a>

		</nav>
		</div>
		</div>

	</header>
<!-- INTRO -->

	<div class="intro" id="intro">
		<div class="container">
			<div class="intro__inner">
			<h1 class="intro__title">Добро пожаловать в библиотеку!</h1>
			<h2 class="intro__subtitle">Книга, которая хороша написана, всегда кажется мне слишком короткой - Джейн Остин</h2>
			<?
				if (!isset($_SESSION['user_id'])) {
					
				
			?>
			<center><a href="reg.php" class="btn btn--red">Зарегистрироваться</a></center>
		</br>
			<center><a href="aut.php" class="btn btn--blue">Войти</a></center>
			<?
				}
				else {
					$getacc = getAcc(); 
					foreach ($getacc as $ga) {?>
					<p class="privets">Привет <i><?=$ga['login']?></i></p>	<center><button><a href="bookcrossing.php?logout='0'" class="btn btn--blue">Выход</a></button></center>

					<?
					}
					
				}
			?>
			
			</div>
		</div>
	</div>

<!--IKONKI-->
<div class="container" id="Citati">
	<div class="features">
		<div class="features__item">
			<img class="features__icon" src="img/icon/icon-1.png" alt="">
			<h4 class="features__title">Жорж Санд</h4>
			<div class="features__text">Книга всегда была для меня советницей, утешительницей, красноречивой и спокойной, и я не хотела исчерпать ее благ, храня их для наиболее важных случаев.</div>	
</div>

		<div class="features__item">
			<img class="features__icon" src="img/icon/icon-2.png" alt="">
			<h4 class="features__title">Герман Гессе</h4>
			<div class="features__text">Хотя возможность научиться читать дается ныне каждому, лишь немногие замечают, как могуществен талисман, который они получили.</div>	
</div>
		<div class="features__item">
			<img class="features__icon" src="img/icon/icon-3.png" alt="">
			<h4 class="features__title">Карел Чапек</h4>
			<div class="features__text">Если кто-нибудь рядом с вами погрузился в чтение книжки, то считайте, что его нет подле вас — он где-то в другом месте; он никак не связан с вами — он общается с другими людьми.</div>	
</div>

	<div class="features__item">
			<img class="features__icon" src="img/icon/icon-4.png" alt="">
			<h4 class="features__title">Джон Грин</h4>
			<div class="features__text">Книги — странное сотрудничество между автором и читателем: ты веришь мне, что я расскажу хорошую историю, а я верю, что ты принесешь её в хорошую жизнь в твоей голове.</div>	
</div>

		<div class="features__item">
			<img class="features__icon" src="img/icon/icon-5.png" alt="">
			<h4 class="features__title">Джон Грин</h4>
			<div class="features__text">Существуют произведения, о которых не хочется говорить вслух: это книги настолько особые, редкие и твои, что объявить о своих предпочтениях кажется предательством.</div>	
</div>
		<div class="features__item">
			<img class="features__icon" src="img/icon/icon-6.png" alt="">
			<h4 class="features__title">Дмитрий Лихачев</h4>
			<div class="features__text">Книгу заменить ничем нельзя. Несмотря на новейшие открытия, новые виды сохранения информации, не будем спешить расставаться с книгой.</div>	
		</div>

	</div> <!--FEATURES-->
</div> <!--CONTAINER-->


<!--WORKS-->
<div class="knigi" id="book">
	<div class="knigi__item">
		<img class="knigi__photo" src="img/works/1.jpg" alt="">
		<div class="knigi__content">
			<div class="works__title">Детектив</div>
				<div class="works__text">Классические детективы</div>
		</div>
	</div>

	<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-2.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">Боевик</div>
				<div class="knigi__text">Криминальные боевики</div>
		</div>
	</div>
<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-3.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">Роман</div>
				<div class="knigi__text">Классические любовные романы</div>
		</div>
	</div>
<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-4.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">Фантастика</div>
				<div class="knigi__text">Героическая фантастика</div>
		</div>
	</div>
	<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-5.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">История</div>
				<div class="knigi__text">Книга о войне</div>
		</div>
	</div>
<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-6.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">Детские книги</div>
				<div class="knigi__text">Сказки</div>
		</div>
	</div>
<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-7.jpg" alt="">
		<div class="knigi__content">
			<div class="knigi__title">Бизнес-книги</div>
				<div class="knigi__text">Техника продаж</div>
		</div>
	</div>
<div class="knigi__item">
		<img class="knigi__photo" src="img/works/work-8.jpg" alt="">
		<div class="knigi__content">
			<div class="works__title">Приключения</div>
				<div class="works__text">Книги о приключениях</div>
		</div>
	</div>
</div>

<!-- FOOTER -->
<footer class="footer">
	<div class="container" id="Contacts">
		<div class="footer__inner">
			<div class="footer__block">
				<h4 class="footer__title">Место нахождения</h4>
					<address class="footer__address">
						<div>Рыскулова 228</div>
						<div>Актобе, AK 1337</div>
					</address>
			</div>

			<div class="footer__block">
	<h4 class="footer__title">Социальные сети</h4>
					<address class="footer__address">
						<div class="social social--footer">
							<a class="social__item" href="#">
							<img src="img/facebook.svg" height="18" alt="">
						</a>
								
						<a class="social__item" href="#">
							<img src="img/instagram.svg" height="18" alt="">
						</a>
						<a class="social__item" href="#">
							<img src="img/twitter.svg" height="18" alt="">
						</a>
						</div>
					</address>
			</div>

			<div class="footer__block">
				<h4 class="footer__title">Буккроссинг</h4>
				<div class="footer__text">
				<p>Буккроссинг (англ. BookCrossing) или книговорот — хобби и общественное движение, действующее по принципу социальных сетей и близкое к флешмобу.</p>
				</div>
			</div>

		</div> <!--footer__inner-->
	</div> <!--conntainer-->
	<div class="copyright">
		<div class="copyright__text">
		<div>Copyright © 2019 Bookcrossinng. All Rights Reserved.</div>
			<div>Made with <span>by Bulteev Bauyrzhan</span></div>
		</div>
	</div>
</footer>

<!-- JAVASCRIPT -->
<script src="js/app.js"></script>

</body>
</html>