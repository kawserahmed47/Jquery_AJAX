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

	public function autoRefresh($body){
		$query = "INSERT INTO tbl_post(body) VALUES ('$body')";
		$data = $this->db->insert($query);
		echo "Inserted Successfully";
		
	}

	public function getRefresh(){
		$query = "SELECT * FROM tbl_post ORDER BY body DESC";
		$gettext = $this->db->select($query);

		$result = '';
		$result .= '<div class ="skill"><ul>';
		if($gettext){
			while($data = $gettext->fetch_assoc()){
				$result .= '<li>'. $data['body']. '</li>' ;

			}
		}else{
			$result .= '<li>'. 'no result found'. '</li>' ;

		}
		$result .='</ul></div>';
		echo $result;


	}

	public function liveSearch($autosearch){

		$query = "SELECT * FROM tbl_user WHERE username LIKE '%$autosearch%'";
		$gettext = $this->db->select($query);

		if($gettext){
			$data ="";
			$data .= '<table class="tblone"><tr>
						<th>ID</th>
						<th>Username</th>
						<th>Email</th>
						</tr>';
			while ($result = $gettext->fetch_assoc()){
				$data .='<tr> 
						<td>'.$result["id"] .'</td>	
						<td>'.$result["username"] .'</td>	
						<td>'.$result["email"] .'</td>	
				
						</tr>';

			}echo $data;

		}else{
			echo "Data not found";
		}



	}

	
}
?>