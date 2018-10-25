<?php

session_start();

if (isset($_SESSION['login'])) {
	echo "Логин: {$_SESSION['login']}";
} else {
	echo "Вход не выполнен";
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form action="session.php" method="POST">
		<br>
		<input type="submit" name="exit" value="Выход">
	</form>
</body>
</html>
