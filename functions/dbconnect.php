<?php 
	try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch (PDOException $e)
	{
		echo 'An error occured while connecting to the database.';
		// some_logging_function($e->getMessage());
	}

?>