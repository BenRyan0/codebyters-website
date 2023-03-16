<?php

require_once("../config/Database.php");
require_once("Response.php");

class UserModel
{	
	//class properties
	private $username;
	private $password;
	
	private $conn;
	private $table = "users";

	public function __construct($db)
	{
		$this->conn = $db;
	}
	
	//setters
	public function setUsername($username){
		$this->username = $username;
	}
	public function setPassword($password){
		$this->password = $password;
	}


	public function register()
    {
        //queries the database
        $query = "INSERT INTO " . $this->table . "
		SET
				username = :username,
				password = :password
		";

        //encrypt password
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        //execute the prepared statement
        $stmt = $this->conn->prepare($query);

		//clean data
		$this->username = htmlspecialchars(strip_tags($this->username));
		$this->password = htmlspecialchars(strip_tags($hashedPassword));

		$stmt->bindParam(":username", $this->username);
		$stmt->bindParam(":password", $this->password);

        if ($stmt->execute()) {
            return true;
        }
		printf("Error: %s.\n", $stmt->error);

        return false;
    }
	
}
