<?
include_once ('includes/func.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Bookcrossing</title>
<?include_once('includes/head.php')?>
<link rel="stylesheet" type="text/css" href="bookinfo.css">
</head>
<body>
<!-- HEADER -->
	<header class="header fixed" id="header">
		<div class="container">
			<div class="header__inner">
				<div class="header_logo">
				<img src="img/kniga1.png" width="70px" height="70px" alt="">
			</div>
			<nav class="nav">

				<!-- DROPDOWN -->
			<div class="dropdown">
			  <a class="dropbtn nav__link"  href="bookcrossing.php">Главное</a>
			  	<div class="dropdown-content">
			    	<a href="#">Карта</a>
			    	<a href="#">О нас</a>
			  </div>
			</div>
<!-- END DROPDOWN -->
			<a class="nav__link" href="bookcrossing.php" data-scroll="#book">Разделы</a>
			<a class="nav__link" href="regbook.php">Зарегистрировать книгу</a>
			<a class="nav__link" href="bookcrossing.php" data-scroll="#Contacts">Контакты</a>
 
		</nav>
		</div>
		</div>
	</header>
  <div id="main" class="container"> 
 <div class="row">
 <div id="content" class="col-sm-12 col-lg-9">

            
<!-- 
    TODO: Add form to control remove/add of entries from web side for admins
-->

    
    <a style="position:absolute;top:20px;right:10px;" href="https://www.bookcrossing.com/hunt/137/958/33811/858052?format=rss" target="_blank"><i class="fas fa-rss"></i></a>
        
<?
    $getBooks=getInfo('regbook');
    foreach ($getBooks as $gb) {
        # code..
?>
    <div style="padding:5px;">
        <div><h3></h3>Место встречи: <?=$gb['mesto']?></div><div class="clearfix"></div>
        
    </div>
    
        
        <div class="book-list">
            
                <div class="book-list-row">
                    <div class="book-list-cover book book-md">
                        <img src="https://d3nc0ar6dmrp7n.cloudfront.net/images/journalpics/157/96/cover/100_15710196.jpg" alt="" title="Собрание сочинений в пяти томах. Том 5" id="img15710196">
                    </div>
                    <div class="book-list-detail">
                        <h5><a href="#"><?=$gb['name']?></a></h5>
                        Автор: <a href="#"><?=$gb['avtor']?></a> Категория:<a href="#">
                            <?=$gb['category']?></a></a> Статус:<a href="#">
                            <?=$gb['status']?></a><br>
                        Выпущено пользователем <a title="SVET88" href="/mybookshelf/SVET88/">[Логин создателя поста]</a><br>
                        <span class="bookrating" title="10 рейтинг этого пользователя"><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i></span><br>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
        </div>
        
            </div>
            </div>
          </div>
      <? } ?>
    <div class="main2">
<footer class="footer">
  <div class="containers" id="Contacts">
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
</div>
</body>
</html>