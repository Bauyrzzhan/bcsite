<?
include_once ('includes/func.php');
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Bookcrossing</title>
<?include_once('includes/head.php')?>
<link rel="stylesheet" type="text/css" href="css/magazz.css">
</head>
<body>

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
    <?
        $counts=getInfoss();
        
        foreach ($counts as $count) {
          // print_r($count);
      ?>
  
          <tr>
              <td valign="top">
                  <a href="bookinfo.php?city_id=<?=$count['city_id']?>"><?=$count['city']?></a>
                  
              </td>
              <td class="text-right" valign="top">
                
                  <span class="red bold"><?=$count['count']?></span>
                
              </td>
          </tr>
          <?
        }
          ?>
      
              </tbody></table>
              
                </div>
            
        </div>
    </div>
  </div>
   <?
include_once('footer.php');
   ?>
</body>
</html>