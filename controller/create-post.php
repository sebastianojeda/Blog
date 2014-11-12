<?php
require_once(__DIR__ . "/../model/database.php");
// this conection variable is conecting me to my database file
	$connection = new mysqli($host, $username, $password, $database);

//These are variables that hold a function to filter our posts
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST , "post", FILTER_SANITIZE_STRING);
//these echo's output if our variables hav been filtered.
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";

	$connection->close();

