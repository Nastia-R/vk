<?php
session_start();
include 'E:\xampp\htdocs\vk\classes\User.php';
if( isset( $_SESSION['user_id'] ) )
{
	echo 'Welcome page should be here';
}
else
{
	include('E:/xampp/htdocs/vk/template/registration.php');
}