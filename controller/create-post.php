<?php
require_once(__DIR__ . "/../model/database.php");
// this conection variable is conecting me to my database file
	$connection = new mysqli($host, $username, $password, $database);

//These are variables that hold a function to filter our posts
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST , "post", FILTER_SANITIZE_STRING);
	
	// this query variable is allowing me to store all of my blog Posts in to 
	//my XAMPP database 
	$query = $connection->query("INSERT INTO posts SET title = 
		'$title', post = '$post'");

	//This if esle statement is checking to see if my query is working 
	if($query) {
		echo "<p>Successfuly inserted post: $title</p>";
	} 
	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();

