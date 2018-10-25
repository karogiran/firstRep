<?php

if (isset($_COOKIE['login'])) {
	echo "Логин: {$_COOKIE['login']}";
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
	<form action="webp_lab_4_p4.php" method="POST">
		<br>
		<input type="submit" name="exit" value="Выход">
	</form>
</body>
</html>
