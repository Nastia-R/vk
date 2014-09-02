<?php
class User{
	const TABLE = 'users';
	const DBNAME = 'vk';

	
	public $db;
	public $result;

	public function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=' . self::DBNAME . ';charset=utf8', 'root', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function check_email($email)
	{
		$query="select email from users where email= '$email' ";
		
		foreach ($this->db->query($query) as $row) 
		{
			return true;
		}
		
		return false;
	}
	public function registration($data)
	{
		$exist=$this->check_email($data['email']);
		
		if ($exist )
		{
			$this->result = 'This email already exists. Please, enter another email.';
		}
		else
		{
			$insert = $this->db->prepare('insert into ' . self::TABLE . ' (email, login, DOB, pass) values (:email, :login, :DOB, :pass)');
			$insert->bindParam(':email', $data['email']);
			$insert->bindParam(':login', $data['login']);
			$insert->bindParam(':DOB', $data['DOB']);
			$insert->bindParam(':pass', $data['pass']);
		
			try{
				$insert->execute();
				$this->result = 'Hello, ' . $data['login'] . '! Your user id is:'.$this->db->lastInsertId();
			} catch(Exception $e) {
				$this->result = $e->getMessage();
			}
		}
	}
	
	public function auth ()
	{
		
		
	}
}
?>