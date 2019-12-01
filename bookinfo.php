<?
include_once ('includes/func.php');
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Bookcrossing</title>
<?include_once('includes/head.php')?>
<link rel="stylesheet" type="text/css" href="css/bookinfo.css">
<script src="bookinfo.js" type="text/javascript"></script>
</head>
<body>
  <div id="main" class="container"> 
 <div class="row">
 <div id="content" class="col-sm-12 col-lg-9">
   <h1 style="margin-left: -235px;">Последняя регистрация:</h1>
   <?
    $id=$_GET['city_id'];
    ?>
    <?
   
    $getBooks=getCityid($id);
    foreach ($getBooks as $gb) {
?>
    <div style="padding:5px;">

        <div style="margin-left: 25px;"><h3>Место встречи: <?=$gb['mesto']?></h3></div><div class="clearfix"></div>
        
    </div>
    
        
        <div class="book-list">
            
                <div class="book-list-row" style="margin-left: 50px;">
                    <div class="book-list-cover book book-md">
                        <img src="img/mo.jpg" alt="" title="Собрание сочинений в пяти томах. Том 5" id="img15710196">
                    </div>
                    <div class="book-list-detail">
                        <h5>Заголовок: <a href="#"><?=$gb['name']?></a></h5>
                        Автор: <a href="#"><?=$gb['avtor']?></a> Категория:<a href="#">
                            <?=$gb['category_name']?></a> Статус:<a href="#">
                            <?=$gb['status_name']?></a><br>
                        Выпущено пользователем <a href="#"><?=$gb['email']?></a><br>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
        </div>
        
            </div>
            </div>
          </div>
      <? } ?>
      <br>
      <br>
      <br>
<?
include_once('footer.php');
?>
</body>
</html>