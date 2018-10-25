<?php/*
	$mysqli = new mysqli ("localhost", "root", "", "employ");
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query("SELECT * FROM emp;");

	$resultForSelect = $mysqli->query("SELECT * FROM emp WHERE id = 1");
	$resultForSelect = $resultForSelect->fetch_assoc();

	if (isset($_POST['addButton']) || isset($_POST['changeButton'])){
		$id = $_POST['id'];
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$patr = $_POST['patr'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$profName = $_POST['profName'];
		$educ = $_POST['educ'];
		$workPlace = $_POST['workPlace'];
		$workPos = $_POST['workPos'];
		$leaveReason = $_POST['leaveReason'];
		$famPos = $_POST['famPos'];
		$home = $_POST['home'];
		$contact = $_POST['contact'];
		$req = $_POST['req'];
	}

	if (isset($_POST['addButton'])) {
		$mysqli->query("INSERT INTO emp (surname, name, patr, dateOfBirth, profName, educ, workPlace, workPos, leaveReason, famPos, home, contact, req) VALUES ('$surname', '$name', '$patr', '$dateOfBirth', '$profName', '$educ', '$workPlace', '$workPos', '$leaveReason', '$famPos', '$home', '$contact', '$req');");
	}elseif (isset($_POST['changeButton'])) {
		
		$mysqli->query("UPDATE 'emp' SET 'surname' = '$surname', 'name' = '$name', 'patr' = '$patr', 'dateOfBirth' = '$dateOfBirth', 'profName' = '$profName', 'educ' = '$educ', 'workPlace' = '$workPlace', 'workPos' = '$workPos', 'leaveReason' = '$leaveReason', 'famPos' = '$famPos', 'home' = '$home', 'contact' = '$contact', 'req' = '$req' WHERE 'emp'.'id' = '$id';");
	}

	if (isset($_POST['check'])) {
		$id = $_POST["id"];
		$resultForSelect = $mysqli->query("SELECT * FROM 'emp' WHERE 'id' = '$id';");
		$resultForSelect = $resultForSelect->fetch_assoc();	
	}
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WEB-P_2</title>
	<link rel="stylesheet" href="webp_lab_4_c.css">
</head>
<body>

<?php
	$mysqli = new mysqli ("localhost", "root", "", "employ");
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query("SELECT * FROM emp;");

	$resultForSelect = $mysqli->query("SELECT * FROM emp WHERE id = 1");
	$resultForSelect = $resultForSelect->fetch_assoc();

	if (isset($_POST['addButton']) || isset($_POST['changeButton'])){
		$id = $_POST['id'];
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$patr = $_POST['patr'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$profName = $_POST['profName'];
		$educ = $_POST['educ'];
		$workPlace = $_POST['workPlace'];
		$workPos = $_POST['workPos'];
		$leaveReason = $_POST['leaveReason'];
		$famPos = $_POST['famPos'];
		$home = $_POST['home'];
		$contact = $_POST['contact'];
		$req = $_POST['req'];

	}

	if (isset($_POST['addButton'])) {
		$mysqli->query("INSERT INTO emp (surname, name, patr, dateOfBirth, profName, educ, workPlace, workPos, leaveReason, famPos, home, contact, req) 
						VALUES ('$surname', '$name', '$patr', '$dateOfBirth', '$profName', 
								'$educ', '$workPlace', '$workPos', '$leaveReason', '$famPos',
								'$home', '$contact', '$req');");
	}elseif (isset($_POST['changeButton'])) {
		$mysqli->query("UPDATE emp SET surname = $surname, name = $name, patr = $patr, dateOfBirth = $dateOfBirth, profName = $profName,
									   educ = $educ, workPlace = $workPlace, workPos = $workPos, leaveReason = $leaveReason, famPos = $famPos,
									   home = $home, contact = $contact, req = $req WHERE id = $id;");
	}

	if (isset($_POST['check'])) {
		$id = $_POST["id"];
		$resultForSelect = $mysqli->query("SELECT * FROM emp WHERE id = $id;");
		$resultForSelect = $resultForSelect->fetch_assoc();	
	}
?>

	<div class="tabbed">
	<input type="radio" id="tabLabel1" name="radiobutton" <?php if (isset($_POST['check'])){echo "";} else {echo "checked";}?>/>
	<label for="tabLabel1">Добавить</label>
	<input type="radio" id="tabLabel2" name="radiobutton" <?php if (isset($_POST['check'])){echo "checked";} else {echo "";}?>/>
	<label for="tabLabel2">Изменить</label>
		<div class="tabs">
			<div>
				<form action="" method="post">
					<label>
						Фамилия <br>
						<input type="text" name="surname">
					</label>
					<br>
					<label>
						Имя <br>
						<input type="text" name="name">	
					</label>
					<br>
					<label>
						Отчество <br>
						<input type="text" name="patr">
					</label>
					<br>
					<label>
						Дата рождения <br>
						<input type="date" name="dateOfBirth">
					</label>
					<br>
					<label>
						Профессия <br>
						<input type="text" name="profName">
					</label>
					<br>
					<label>
						Образование <br>
						<input type="text" name="educ">
					</label>
					<br>
					<label>
						Место последней работы <br>
						<input type="text" name="workPlace">
					</label>
					<br>
					<label>
						Должность на последней работы 
						<br>
						<input type="text" name="workPos">
					</label>
					<br>
					<label>
						Причина увольнения <br>
						<input type="text" name="leaveReason">
					</label>
					<br>
					<label>
						Семейное положение <br>
						<input type="text" name="famPos">	
					</label>
					<br>
					<label>
						Жилищные условия <br>
						<input type="text" name="home">
					</label>
					<br>
					<label>
						Контактные координаты <br>
						<input type="text" name="contact">
					</label>
					<br>
					<label>
						Требования к будущей работе <br>
						<input type="text" name="req">
					</label>
					<br><br>
					<input type="submit" name="addButton" value="Добавить">
				</form>
			</div>
			<div>
				<form action="" method="post">	
					<label>
						№ <br>
						<select name = "id">
							<?php 
								while (($row = $result->fetch_assoc()) != false) {
									if ($id == $row["id"]){
										echo '<option selected value="'.$row["id"].'">'.$row["id"].'</option>';	
									} else {
										echo '<option value="'.$row["id"].'">'.$row["id"].'</option>';
									}
								}
							?>
						</select>
						<input type="submit" name="check" value="Выбрать">		
					</label>
					<br>
					<label>
						Фамилия <br>
						<input type="text" name="surname" value="<?php echo $resultForSelect["surname"]; ?>">
					</label>
					<br>
					<label>
						Имя <br>
						<input type="text" name="name" value="<?php echo $resultForSelect["name"]; ?>">
					</label>
					<br>
					<label>
						Отчество <br>
						<input type="text" name="patr" value="<?php echo $resultForSelect["patr"]; ?>">
					</label>
					<br>
					<label>
						Дата рождения <br>
						<input type="date" name="dateOfBirth" value="<?php echo $resultForSelect["dateOfBirth"]; ?>">
					</label>
					<br>
					<label>
						Профессия <br>
						<input type="text" name="profName" value="<?php echo $resultForSelect["profName"]; ?>">
					</label>
					<br>
					<label>
						Образование <br>
						<input type="text" name="educ" value="<?php echo $resultForSelect["educ"]; ?>">
					</label>
					<br>
					<label>
						Место последней работы <br>
						<input type="text" name="workPlace" value="<?php echo $resultForSelect["workPlace"]; ?>">
					</label>
					<br>
					<label>
						Должность на последней работе <br>
						<input type="text" name="workPos" value="<?php echo $resultForSelect["workPos"]; ?>">
					</label>
					<br>
					<label>
						Причина увольнения <br>
						<input type="text" name="leaveReason" value="<?php echo $resultForSelect["leaveReason"]; ?>">
					</label>
					<br>
					<label>
						Семейное положение <br>
						<input type="text" name="famPos" value="<?php echo $resultForSelect["famPos"]; ?>">
					</label>
					<br>
					<label>
						Жилищные условия <br>
						<input type="text" name="home" value="<?php echo $resultForSelect["home"]; ?>">
					</label>
					<br>
					<label>
						Контактные координаты <br>
						<input type="text" name="contact" value="<?php echo $resultForSelect["contact"]; ?>">	
					</label>
					<br>
					<label>
						Требования к будущей работе <br>
						<input type="text" name="req" value="<?php echo $resultForSelect["req"]; ?>">
					</label>
					<br>
					<br>
					<input type="submit" name="changeButton" value="Изменить">	
				</form>							
			</div>
		</div>
	</div>
</body>
</html>