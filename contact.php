<?
include_once('header.php');
$email = $_POST['email'];
$subject = $_POST['subject'];
$cause = $_POST['cause'];
$msg = $_POST['msg'];
$email = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$cause = htmlspecialchars($cause);
$msg = htmlspecialchars($msg);
$email = urldecode($email);
$subject = urldecode($subject);
$cause = urldecode($cause);
$msg = urldecode($msg);
$email = trim($email);
$subject = trim($subject);
$cause = trim($cause);
$msg = trim($msg);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("baurzhanb209@gmail.com", "Заявка с сайта", "Тема:".$subject.". E-mail: ".$email.". Причина:".$cause.". Сообщение:".$msg." " ,"From: baurzhanb209@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bookcrossing</title>
<?include_once('includes/head.php')?>
<link rel="stylesheet" type="text/css" href="css/contactt.css">
</head>
<body>

<div id="main" class="container">
	<div class="row">
		<div id="content" class="col-sm-12 col-lg-9">

            

<h1>
    Наши контакты
</h1>
        



    <form method="post">

        <div class="form-group row">
            <label name="email" for="Cnt" class="col-sm-3 col-form-label">Email</label>
            <div class="col">
                <input autocomplete="off" class="form-control" id="Cnt" name="email" type="email" value="">
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="form-group row hidden">
            <label for="Email" class="col-sm-3 col-form-label">Оставьте это поле пустым!</label>
            <div class="col">
                <input autocomplete="off" class="form-control" id="Email" name="Email" type="email" value="">
            </div>
        </div>
        <div class="form-group row">
            <label name="subject" for="Subject" class="col-sm-3 col-form-label">Тема</label>
            <div class="col">
                <input autocomplete="off" class="form-control" id="Subject" name="subject" type="text" value="">
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="form-group row">
            <label name="cause" for="Reason" class="col-sm-3 col-form-label">Причина</label>
            <div class="col">
                <input checked="checked" id="Reason" name="cause" type="radio" value="General"> У меня есть общий вопрос о BookCrossing<br>
                <input id="Reason" name="cause" type="radio" value="Support"> Мне нужна поддержка по веб-сайту<br>
                <input id="Reason" name="cause" type="radio" value="Order"> У меня есть вопрос о заказе в магазине принадлежностей<br>
                <input id="Reason" name="cause" type="radio" value="Feedback"> Это просто отклик - не надо отвечать<br>
               
                <input id="Reason" name="cause" type="radio" value="Press"> Я представитель СМИ <br>
                <input id="Reason" name="cause" type="radio" value="Partner"> Мне интересна реклама на BookCrossing.com<br>
                <input id="Reason" name="cause" type="radio" value="Other"> Другое <br>
            </div>
        </div>
        <div class="form-group row">
            <label name="msg" for="Message" class="col-sm-3 col-form-label">Сообщение</label>
            <div class="col">
                <textarea cols="45" id="Message" name="msg" rows="4"></textarea>
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 offset-sm-3">
                <button name="cont" type="submit" class="btn btn-primary btn-block">
                    Отправить
                </button>
            </div>
        </div>
    </form>                
            </div>
	</div>
</div>
   <?
include_once('footer.php');
   ?>
</body>
</html>