<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Регистрация</title>
		<style>
			.pc
				{
					margin: auto;
					color: #8F065A;
					text-align: center;
				}
			body 
				{
					background-image: url(images/77.jpg);
					background-color: #C7B39B;
					height: 100%;
					font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif
					}
			.table1
				{
					background-image: url(images/1.jpg);
					border-radius: 15px;
					 width: 400px;
					 margin: 0 auto; 
				}
			.button 
				{
					font-weight: 700;
				    color: white;
				    text-decoration: none;
				    padding: .8em 1em calc(.8em + 3px);
				    border-radius: 3px;
				    background: #B85D79;
				    box-shadow: 0 -3px #9F3857 inset;
					border-radius: 10px;
				    transition: 0.2s;
					margin: 0px auto;
					display: block;
					width: 150px;
				} 
			.button:hover 
				{ 
					background: #9F3857; 
				}
			.button:active 
				{
					background: #FE8498;
					box-shadow: 1 3px #9F3857 inset;
				}
			.pic1
				{
					position: absolute;
					bottom: 0;
					float:center; 
					text-align:center; 
					width:100%; 
				}
			img.big
				{
					cursor: pointer; max-width: 160px; max-height: 180px
				}
			img.big:hover 
				{
					max-width: none;
				}
		</style>
	</head>
	<body>
		<?php 
			if(!empty($_POST))
				{
					$db = new PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
					$a=$db->query('insert into users (email, Login, DOB, Pass) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '", "' . $_POST['DOB'] . '","' . $_POST['pass'] . '")');
					$thnks = $_POST['login'] . '! Thank you for registration on our site!';
				}
			if(isset($thnks)) 
				{
					echo '<h2>' . $thnks . '</h2>';
				}
		?>
			<h1 class="pc">Регистрация</h1>
			<p align="center"><a href="index.php">Щёлкните здесь для перехода на vk.loc</a></p>
				<table class="table1">
					<form method="POST">
						<tr>
							<td>Введите email:</td>
							<td><input type = "text" placeholder = "Поле для ввода email"  size = "40" name="email" required></td>
						</tr>
						<tr>
							<td>Введите логин:</td>
							<td><input type = "text" maxlength = "12" placeholder = "Поле для ввода логина" size = "40" name="login" required></td>
						</tr>
						<tr>
							<td>Введите дату рождения:</td>
							<td><input type = "text" placeholder = "Формат ввода даты: YYYY-DD-MM"  size = "40" name="DOB" required></td>
						</tr>
						<tr>
							<td>Введите пароль:</td>
							<td><input type = "password" maxlength = "12" placeholder = "Поле для ввода пароля" size = "40" name="pass" required></td>
						<tr>
							<td colspan="2"><input class="button " type="submit" value="Отправить"></td>
						</tr>
						</tr>
					</form>
				</table>
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