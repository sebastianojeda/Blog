<?php
	require_once(__DIR__ . "/Database.php");
	$path = "/sebBlog/";

	//These are varables that hold strings 
    //for my database
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	$connection = new Database($host, $username, $password, $database);
	