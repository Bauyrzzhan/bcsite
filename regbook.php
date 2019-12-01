<?
include_once("includes/func.php");
include_once("includes/link.php");
session_start();
protect_page();

if(isset($_POST['regknopka'])){
	if(isset($_POST['g-recaptcha-response'])) {

		$url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
		$secret_key = '6LdFK8UUAAAAACtHxPDKY5TOTYDePb57XttwDRR9';
		$query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
		$data = json_decode(file_get_contents($query));



	$name=trim($_POST['name']);
	$avtor=trim($_POST['avtor']);
	$commentaries=trim($_POST['commentaries']);
	$category=trim($_POST['category']);
	$status=trim($_POST['status']);
	$city=trim($_POST['city']);
	$mesto=trim($_POST['mesto']);
	$email=trim($_POST['email']);
	if(empty($name) || empty($avtor) || empty($commentaries) || empty($category) || empty($status) || empty($email)) {
		$com="Не все поля заполнены.";
	}

$sql="INSERT INTO regbook(name, avtor, commentaries, category, status, city, mesto, email) VALUES ('$name','$avtor','$commentaries','$category', '$status','$city', '$mesto', '$email')";
	$query=mysqli_query($link, $sql);
	if($query && $data->success){
		$com="Вы успешно зарегистрировали книгу<a href='magaz.php'>Перейти к списку</a>";
	}
	}
	else{
		$com="Произошла ошибка при регистрации книги";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<title>Bookcrossing</title>
	<link rel="stylesheet" type="text/css" href="css/regboook.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<style>
		body {
		margin: 0;
		padding: 0;
	}
	#main {
		width: 100%;
	}
	.box {
		margin: auto;
		width: 1280px;
	}
	.reg_box {
		margin: 50px auto;
		width: 300px;
		border: 2px solid grey;
		border-radius: 5px;
	}
	input {
		display: block;
		margin: 10px 0;
	}
	.error {
		color: red;
	}
	form {
		margin: auto;
		width: 182px;
	}
	</style>
	<div>
		<div class="wrap-login100">
		<center><h1>Форма регистрации книги</h1></center>
		<form method="POST">
			<div class="error"><?=$com?></div>
			<div class="wrap-input100 validate-input">
			<input type="text" name="name" placeholder="Заголовок">
		</div>		
			<div class="wrap-input100 validate-input">
			<input type="text" name="avtor" placeholder="Автор">
		</div>
			<div class="wrap-input100 validate-input">
			<input type="text" name="email" placeholder="Почта">
		</div>
					<div class="wrap-input100 validate-input">
			<input type="text" name="mesto" placeholder="Место встречи">
		</div>
			<select name="category" style="width: 170px;">
				<option>Категории</option>
		<?
		$categories=getCategory();
		foreach ($categories as $category) {
		?>
			
			<option value="<?=$category['category_id']?>"><?=$category['category_name']?></option>
	
		<?
			}
		?>
	</select>
<br>
<br>
	
	<select name="status" style="width: 170px;">
		<option>Все статусы</option>
		<?
		$statuses=getStatus();
		foreach ($statuses as $status) {
		?>
			
			<option value="<?=$status['status_id']?>"><?=$status['status_name']?></option></br>

		<?
			}
		?>

	</select>		
	<br>
	<br>
		<select name="city" style="width: 170px;">
			<option>Город</option>
		<?
		$cities=getAddress();
		foreach ($cities as $city) {
		?>
			<option value="<?=$city['city_id']?>"><?=$city['city']?></option></br>

		<?
			}
		?>
	</select>
	<br/>
	<br/>
	<input name="image" type="file">

			<div class="form-group row">
        <textarea class="comments-option" name="commentaries" placeholder="Комментарии"></textarea>
    </div>
<div class="g-recaptcha" data-sitekey="6LdFK8UUAAAAAIm6p4wCsXIO7CXN5cMUw0NYNNgP"></div>
								<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="regknopka" class="login100-form-btn">
								Зарегистрировать
							</button>
						</div>
					</div>


		</form>
	</div>
</div>
</body>
</html>