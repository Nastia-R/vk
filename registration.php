<?php
session_start();
include 'E:\xampp\htdocs\vk\classes\User.php';
if( isset( $_SESSION['user_id'] ) )
{
	// тут ничего не будет пока мы туда не положем юзер айди
	// ёзер залогинен подключим файл приветсви€ залогиненного юзвер€
	// include();
	echo 'Welcome page should be here';
}
else
{
	include('E:/xampp/htdocs/vk/template/registration.php');
}