<?php
	$mysqli = new mysqli ("localhost", "root", "", "employ");
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query("SELECT * FROM `emp`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WEB-P_2</title>
</head>
<body>
    <table border="1">
      	<tr>
	        <td>№</td>
			<td>Фамилия</td>
			<td>Имя</td>
			<td>Отчество</td>
			<td>Дата рождения</td>
			<td>Профессия</td>
			<td>Образование</td>
			<td>Место последней работы</td>
			<td>Должность на последней работе</td>
			<td>Причина увольнения</td>
			<td>Семейное положение</td>
	        <td>Жилищные условия</td>
	        <td>Контактные координаты</td>
	        <td>Требования к будущей работе</td>
	    </tr>
	    <?php 
	      	while (($row = $result->fetch_assoc()) != false) {
	      		echo '<tr>';
	      		echo '<td>'.$row["id"].'</td>';
	      		echo '<td>'.$row["surname"].'</td>';
	      		echo '<td>'.$row["name"].'</td>';
	      		echo '<td>'.$row["patr"].'</td>';
	      		echo '<td>'.$row["dateOfBirth"].'</td>';
				echo '<td>'.$row["profName"].'</td>';
	      		echo '<td>'.$row["educ"].'</td>';
	      		echo '<td>'.$row["workPlace"].'</td>';
	      		echo '<td>'.$row["workPos"].'</td>';
	      		echo '<td>'.$row["leaveReason"].'</td>';
				echo '<td>'.$row["famPos"].'</td>';
	      		echo '<td>'.$row["home"].'</td>';
	      		echo '<td>'.$row["contact"].'</td>';
				echo '<td>'.$row["req"].'</td>';
	      		echo '</tr>';
	      	}
	    ?>
	</table>
</body>
</html>