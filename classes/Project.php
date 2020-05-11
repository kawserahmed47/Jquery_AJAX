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

	public function checkautotext($autotext){
		$query = "SELECT * FROM tbl_user WHERE username LIKE '%$autotext%'";
		$gettext = $this->db->select($query);

		$result = '';
		$result .= '<div class ="skill"><ul>';
		if($gettext){
			while($data = $gettext->fetch_assoc()){
				$result .= '<li>'. $data['username']. '</li>' ;

			}
		}else{
			$result .= '<li>'. 'no result found'. '</li>' ;

		}
		$result .='</ul></div>';
		echo $result;


	}

	
}
?>