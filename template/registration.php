<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="\vk\CSS\styles.css">
		<title>Регистрация</title>
	</head>
	<body>
		<?php 
		
		include 'E:\xampp\htdocs\vk\classes\User.php';
		
			if(!empty($_POST))
				{
					$user= new User;
					$user->registration($_POST);
					$thnks=$user->result;
				}
				
			if(isset($thnks)) 
				{
					echo '<h2>' . $thnks . '</h2>';
				}
		?>
			<form role="form" method="post">
			<h1 class="pc">Регистрация</h1>
			<p align="center"><a href="index.php">Щёлкните здесь для перехода на vk.loc</a></p>
				<div class="table1">
					<input type = "text" placeholder = "Поле для ввода email"  size = "60" name="email" required>
				</div>
				<div class="table1">
					<input type = "text" maxlength = "12" placeholder = "Поле для ввода логина" size = "60" name="login" required>
				</div>
				<div class="table1">
					<input type = "text" placeholder = "Формат ввода даты: YYYY-DD-MM"  size = "60" name="DOB" required>
				</div>
				<div class="table1">
					<input type = "password" maxlength = "12" placeholder = "Поле для ввода пароля" size = "60" name="pass" required>
				</div>
					<input class="button " type="submit" value="Отправить">
					</form>
				<table class="pic1">
					<tr>
						<td><img class="big" src="images/jasmin.jpg" alt="Pict"></td>
						<td><img class="big" src="images/sm.jpg" alt="Pict1"></td>
						<td><img class="big" src="images/all.jpg" alt="Pict2"></td>
						<td><img class="big" src="images/mar.jpg" alt="Pict3"></td>
						<td><img class="big" src="images/mfun.jpg" alt="Pict4"></td>
						<td><img class="big" src="images/lilm.jpg" alt="Pict5"></td>
					</tr>
				</table>
	</body>
</html>