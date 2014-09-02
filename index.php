<?php
	session_start();
	if (empty $_SESSION['user-id'])
		{
		
		}
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="CSS/index.css">
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
			<body>
				<?php include('E:/xampp\htdocs/vk/template/header.php');?>
				<?php include('E:/xampp\htdocs/vk/template/registration.php');?>
				<?php include('E:/xampp\htdocs/vk/template/footer.php'); ?>
			</body>
</html>