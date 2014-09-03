<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="E:\xampp\htdocs\vk\CSS\styles.css">
		<?php include('E:/xampp/htdocs/vk/template/header.php');?>
	</head>
	<body>
		<?php 
			if(!empty($_POST))
			{
				$user= new User;
				$check = $user->registration($_POST);
				$thnks=$user->result;
				if($check)
				{
					header("Location: index.php");
					die;
				}
				echo '<h2>' . $thnks . '</h2>';
			}				
		?>
			<form role="form"  method="post">
				<h1 class="pc">Регистрация</h1>
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
<?php include('E:/xampp/htdocs/vk/template/footer.php'); ?>
	</body>
</html>