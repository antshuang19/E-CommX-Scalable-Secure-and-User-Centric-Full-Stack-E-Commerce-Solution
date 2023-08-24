<?php 
 error_reporting(E_ERROR); 
 ini_set("display_errors","Off");
class RegisterUser{
	// Class properties
	private $id_student;
	private $name;
	private $username;
	private $raw_password;
	private $encrypted_password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;
	private $new_user; // array 
	private $money;


	public function __construct($name, $id_student,$username,$password){
		//name 
		$this->name = trim($this->name);
		$this->name = filter_var($name, FILTER_SANITIZE_STRING);

		//id_student
		$this->id_student = trim($this->id_student);
		$this->id_student = filter_var($id_student, FILTER_SANITIZE_STRING);

		$this->username = trim($this->username);
		$this->username = filter_var($username, FILTER_SANITIZE_STRING);

		$this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
		$this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

		$this->money=0.00;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"name" => $this->name,
			"id"=>$this->id_student,
			"username" => $this->username,
			"password" => $this->encrypted_password,
			"money"=>$this->money,
		];

		if($this->checkFieldValues()){
			$this->insertUser();
		}
	}


	private function checkFieldValues(){
		if(empty($this->username) || empty($this->raw_password)){
			$this->error = "Both fields are required.";
			return false;
		}else{
			return true;
		}
	}


	private function usernameExists(){
		foreach($this->stored_users as $user){
			if($this->username == $user['username']){
				$this->error = "Username already taken, please choose a different one.";
				return true;
			}
		}
		return false;
	}


	private function insertUser(){
		if($this->usernameExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Your registration was successful";
			}else{
				return $this->error = "Something went wrong, please try again";
			}
		}
	}



} // end of class