<?php
    //The require_once statement is identical to require except PHP will 
   //check if the file has already nbeen included, and if so, not include (require) it again
	require_once(__DIR__ . "/../model/database.php");
    
    //This connectoin varable takes my variables from my 
    //database file and connects those files to my create-db file.
	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: " . $connection->connect_error);

	}
	
	// this exists variable
	// is allowing me to select a specific database
	$exists = $connection->select_db($database);

     // this if statement will tell me if my 
	//database exists or doesn't exists
	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");

		if($query){
			echo "successfully created database" . $database;
		}
	}
	//this else statement is echoing a string
	else{
		echo "database has already been created.";
	}
     //this is a query variable that is creating a table.
	//This table will hold an id, strings, and post text.
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id)");

	$connection->close();