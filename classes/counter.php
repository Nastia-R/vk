<?php 
class counter
																													{
	const TABLE = 'users';
	const DBNAME = 'vk';
	
	public $var1 = 'Ваш ID: '; 
	
	public function counter_id()
																																				{
																																									if(!empty($_POST))
																																										{
																																																																		$db = new PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
																																													$us->$db->lastInsertId ([ 'string' ] );
																																													


																																																																try												{
																																											$insert->execute();
			$this->result = 'Your id:  ' . $us;
																																																																							} catch(Exception $e)						 {
																																											$this->result = $e->getMessage();
																																										}
																																																																																																																																																																																																																											echo $var1; 

																																								echo $us; 
																																								
																																								
																																								
																																								
																																								
																																								
																																								
																																								
																																								
}}}
?>