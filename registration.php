<?php
session_start();
include 'E:\xampp\htdocs\vk\classes\User.php';
if( isset( $_SESSION['user_id'] ) )
{
	// ��� ������ �� ����� ���� �� ���� �� ������� ���� ����
	// ���� ��������� ��������� ���� ���������� ������������� ������
	// include();
	echo 'Welcome page should be here';
}
else
{
	include('E:/xampp/htdocs/vk/template/registration.php');
}