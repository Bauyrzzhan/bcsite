<?
session_start();
include_once('includes/link.php');
?>
<?
if (isset($_POST['aut'])) {
  $username = trim(($_POST['login']));
  $password = trim(($_POST['pass']));

  if (empty($username)) {
    echo "Необходим логин";
  }
  if (empty($password)) {
    echo "Необходим пароль";
  }
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM register WHERE login='$username' AND pass='$password'";
    $results = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_id'] = $row['reg_id'];
      header('location: bookcrossing.php');
    }else {
      echo "Неправильная комбинация имени пользователя и пароля";
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookcrossing</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/regv2.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
</head>
<body>
	<style>
		body {
		color: black;
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
		<div class="wrap-login100" style="margin-top: 150px;">
		<form method="POST">
			<span class="login100-form-title p-b-26">
				Вход	
			</span>
			<div class="error"><?=$error?></div>
			<div class="wrap-input100 validate-input">
				
			<input type="text" name="login" placeholder="Логин">
		</div>
		<div class="wrap-input100 validate-input">
			<input type="password" name="pass" placeholder="Пароль">
		</div>
								<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="aut" class="login100-form-btn">
								Войти
							</button>
						</div>
					</div>
		</form>
	</div>
</div>
</body>
</html>