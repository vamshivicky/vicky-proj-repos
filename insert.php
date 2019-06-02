<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$query = "
INSERT INTO tb1_sample 
(Question) 
VALUES (':Question')

";

for($count = 0; $count<count($_POST['hidden_Question[]']); $count++)
{
	$data = array(
		':Question'	=>	$_POST['hidden_Question'][$count],
		
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>