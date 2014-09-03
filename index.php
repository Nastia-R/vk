<?php
session_start();
include 'E:\xampp\htdocs\vk\classes\User.php';
if (isset($_POST['email']))
{
	$USER = new User;
	$auth_user_id = $USER->get_user_id($_POST);
	
	if($auth_user_id)
	{
		$_SESSION['user_id'] = $auth_user_id;
	}
	else
	{
		echo "Wrong email or password.";
	}
} 
?>
<html>
	<body>
	<?php
	if(isset($_SESSION['user_id']) )
	{
		echo 'Welcome page should be here';
		die;
	}
	else
	{
		include ('E:/xampp/htdocs/vk/template/auth.php');
	}
	?>
	</body>
</html>
