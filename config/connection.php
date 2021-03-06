<?php
//database
require_once 'credential.php';


class Connection
{
	//properties
	public $db = null;
	public $results = null;


	function db_connect(){
		//connection
		$this->db = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}


	function db_query($sqlQuery){

    // check if connection is sucessful and database is not null
		if (!$this->db_connect()) {
			return false;
		}
		elseif ($this->db==null) {
			return false;
		}


		// run query
		$this->results = mysqli_query($this->db,$sqlQuery);
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}

	}



	function db_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->results);




	}


	function db_count(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}

		//return a record
		return mysqli_num_rows($this->results);

	}



	public function getRow(){
		if ($this->results == false) {
			return 0;
		}
		else {
		return mysqli_num_rows($this->results);
		}
	}



}
?>
