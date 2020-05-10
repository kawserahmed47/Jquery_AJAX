<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

	public function checkusername($username){

		$query = "SELECT * FROM tbl_user WHERE username= '$username'";
		$getuser = $this->db->select($query);

		if($username == ""){
			echo "<span class='error'>Empty!!! Please enter username</span>";
		
		}elseif($getuser){
			echo "<span class='success'>username available</span>";
		}else{
			echo "<span class='error'>Error!!! Does not Match</span>";
		}

	}

	
}
?>