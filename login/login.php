<?php
	session_start();
	require('../connect.php');
	if (isset($_POST['username']) and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		for ($i=0; $i < $count; $i++) { 
			if (($row[$i]['user'] == $username) and ($row[$i]['password'] = $password)) {
				$_SESSION['boss'] = $row[$i]['boss'];
				$_SESSION['id_user'] = $row[$i]['id_user'];
				header('Location:/index.php');
				break;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div id="wrapper">
		<a href="/index.php" class="logo_login">InternIt</a>
		<div class="wrapper">
			<div class="form">
				<form method="POST">
					<h1 class="reg_log">Вход</h1>
					<input type="text" name="username" placeholder="Пользователь" required>
					<input type="password" name="password" placeholder="Пароль" required>
					<button type="submit">Вход</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>