<!DOCTYPE html>
<html>
<head>
<title>Bookcrossing</title>
<?include_once('includes/head.php')?>
<link rel="stylesheet" type="text/css" href="magazz.css">
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
			  </div>
			</div>
<!-- END DROPDOWN -->
			<a class="nav__link" href="regbook.php">Зарегистрировать книгу</a>
			<a class="nav__link" href="#">Контакты</a>
      <a class="nav__link" href="infosite.php">О нас</a>
 
		</nav>
		</div>
		</div>
	</header>
  <div id="main" class="container">
        <!-- Release:Hunt -->
        <div class="row">
            <div id="content" class="col-sm-12 col-lg-9">

            
<!-- 
    TODO: Add form to control remove/add of entries from web side for admins
-->

    

    <h1>Поиск книг</h1>

    <div class="textknigi">
        <p>Поиск за книгами - важная часть буккроссинга. Ниже приведен список стран с книгами "<i>на воле</i>"! После того, как книга зарегистрирована, пользователь имеет возможность сделать примечание к выпуску, указав, где точно (или приблизительно) он оставил книгу. Вы можете просмотреть эти <i>недавние "выпуски"</i> по стране, области, городу и зоне кроссинга.</p> 
    </div>

    
    <div>
      <table class="table table-sm table-striped table-part-1">
          <tbody><tr>
              <th>Расположение</th>
              <th class="text-right">Количество</th>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="bookinfo.php">Нур-Султан</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">55</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Алма-Ата</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">41</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Актобе</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">1915</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Шымкент</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">862</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Костанай</a>
                  
              </td>
              <td class="text-right" valign="top">
                39
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Кызылорда</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">636</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Павлодар</a>
                  
              </td>
              <td class="text-right" valign="top">
                1
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Петропавловск</a>                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">830</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Талдыкорган</a>
                  
              </td>
              <td class="text-right" valign="top">
                95
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Тараз</a>
                  
              </td>
              <td class="text-right" valign="top">
                1
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Туркестан</a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold">342</span>
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Уральск</a>
                  
              </td>
              <td class="text-right" valign="top">
                2
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Усть-Каменегорск</a>
                  
              </td>
              <td class="text-right" valign="top">
                5
                
              </td>
          </tr>
      
          <tr>
              <td valign="top">
                  <a href="#">Семей</a>
                  
              </td>
              <td class="text-right" valign="top">
                53
                
              </td>
          </tr>
      
              </tbody></table>
              
                </div>
            
        </div>
    </div>
  </div>
    <!-- FOOTER -->
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