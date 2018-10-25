<?php

session_start();

if (isset($_POST['exit'])) {
	session_destroy();
	exit();
}

	$mysqli = new mysqli ("localhost", "root", "1596321", "lab4");
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query("SELECT * FROM `logpas`");

	while (($row = $result->fetch_assoc()) != false) {
		if ($row["login"] == $_POST['login'] && $row["password"] == md5($_POST['password'])){
			$_SESSION["login"] = $row["login"];
			echo "OK";			
		} else {
			echo "Данные введены с ошибкой!";
		}
	}