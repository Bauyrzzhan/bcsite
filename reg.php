	<?
	include_once("includes/head.php");
	?>
<?
include_once("includes/func.php");
include_once("includes/link.php");
if(isset($_POST['reg'])){
	if(isset($_POST['g-recaptcha-response'])) {

		$url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
		$secret_key = '6LdFK8UUAAAAACtHxPDKY5TOTYDePb57XttwDRR9';
		$query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
		$data = json_decode(file_get_contents($query));


		$login=trim($_POST['login']);
		$pass=trim($_POST['pass']);
		$pass_copy=trim($_POST['pass_copy']);
		$email=trim($_POST['email']);
		$tel=trim($_POST['tel']);
		$name=trim($_POST['name']);
		$address=trim($_POST['address']);
		if(empty($login) || empty($pass) || empty($pass_copy) || empty($tel) || empty($email) || empty($name)) {
			$error="Не все поля заполнены.";
		}else
		{
			if($pass!=$pass_copy){
				$error="Вы ввели неправильный пароль.";
			}
			elseif(strlen($pass)<6){
				$error="Пароль должен состоять не меньше 6 символов";
			}
			elseif(!preg_match("/^([a-zA-Z0-9]){3,10}$/",$login)){
		$error="Логин должен состоять только из латинских букв и цифр, и не меньше 3 символов.";
			
			}			
			else{
				$sql="SELECT * FROM register WHERE login='$login' LIMIT 1";
				$res=mysqli_query($link,$sql);
				$count=mysqli_num_rows($res);
				if($count>0){
					$error="Данный логин занят.";
				}
				else{
					$pass=md5($pass);
					$sql="INSERT INTO register(login,register.pass,email,tel,name,address)
						VALUES('$login','$pass','$email','$tel','$name', '$address')";
						$res=mysqli_query($link,$sql);
						if($res && $data->success){
							$error="Вы успешно зарегистрировались.<a href='aut.php'>Войти</a>";
						}
						else{
							$error="ERROR ";
						}

				}
			}
		}

	}
			
		
}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/regv2.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
</script>
</head>
<body>
	<div>
		<div class="wrap-login100">

		<form method="POST" class="login100-form validate-form">		
			<span class="login100-form-title p-b-26">
				Форма регистрации
			</span>
			
			<div class="error" style="color: red;"><?=$error?></div>
			<br>
			<div class="wrap-input100 validate-input">
			<input type="text" name="name" placeholder="Имя">
			</div>
			<div class="wrap-input100 validate-input">
			<input type="text" name="login" placeholder="Логин">
			</div>
			<div class="wrap-input100 validate-input">
			<input type="password" name="pass" placeholder="Пароль">
			</div>
			<div class="wrap-input100 validate-input">
			<input type="password" name="pass_copy" placeholder="Повторите пароль">
			</div>
			<div class="wrap-input100 validate-input">
			<input type="text" name="tel" placeholder="Телефон">
			</div>
			<div class="wrap-input100 validate-input">
			<input type="text" name="email" placeholder="Почта">
			</div>
			<select name="address" style="width: 270px;">
		<?
		$addresses=getAddress();
		foreach ($addresses as $address) {
		?>
			
			<option><?=$address['city']?></option></br>

		<?
			}
		?>
	</select>
	<br/>
	<br/>
<div class="g-recaptcha" data-sitekey="6LdFK8UUAAAAAIm6p4wCsXIO7CXN5cMUw0NYNNgP"></div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="reg" class="login100-form-btn">
								Зарегистрироваться
							</button>
						</div>
					</div>
		</form>

	</div>
</body>
</html>