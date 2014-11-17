<?php

/**
* We use a class to create a new 
*object and store all of our information
*from our create-post and create-db php files.
*This class is a way to keep our code cleaner 
*and more organized.
*/
class Database{
	private $connection;
	private $host;
	private $username;
	private $password;
	private $Database;

	// _construct will search for the 
	//old-style constructor function, by the name of the class
	//_construct defines your constructuors 
	//_constructuors allow us to build an object
	public function __construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->passwpord = $password;
		$this->database = $database;
	}

	public function openConecction(){

	}

	public function closeConnection(){


	}

	public function query($string){
		
	}
}

