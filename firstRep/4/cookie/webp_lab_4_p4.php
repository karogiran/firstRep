<?php

	if (isset($_POST['exit'])) {
		setcookie("login", FALSE);
		exit();
	}

	$mysqli = new mysqli ("localhost", "root", "1596321", "lab4");
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query("SELECT * FROM `logpas`");

	while (($row = $result->fetch_assoc()) != false) {
		if ($row["login"] == $_POST['login'] && $row["password"] == md5($_POST['password'])){
			setcookie("login", $row["login"], time()+60);
			echo "OK";			
		} else {
			echo "Данные введены с ошибкой!";
		}
	}