<?php
session_start();
include 'E:\xampp\htdocs\vk\classes\User.php';

//проверка введен ли эмейл

if (isset($_POST['email']))
{
	$USER = new User;
	$auth_user_id = $USER->get_user_id($_POST);
	
	//проверка соответствия введенных данных данным в БД
	
	if($auth_user_id)
	{
		$_SESSION['user_id'] = $auth_user_id;
	}
	else
	{
		echo "Wrong email or password.";
	}
} 

//проверка для логаута

if(isset ($_GET['logout']))
	{
		unset($_SESSION['user_id']);
	}
?>
<html>
	<body>
	<link rel="stylesheet" href="E:\xampp\htdocs\vk\CSS\index.css">
	<?php
	
	//проверка на существование сессии
	
	if(isset($_SESSION['user_id']) )
	{
		echo 'You authorized, <a href="index.php?logout">Log out</a>';
		echo '</br>';
	}
	else
	{
		include ('E:/xampp/htdocs/vk/template/auth.php');
	}
	?>
	</body>
</html>
