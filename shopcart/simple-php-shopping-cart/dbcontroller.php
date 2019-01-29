<?php
class DBController {
	private $DB_HOST = "localhost";
	private $DB_USERNAME = "root";
	private $DB_PASSWORD = "root";
	private $DB_NAME = "blog_samples";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->DB_HOST,$this->DB_USERNAME,$this->DB_PASSWORD,$this->DB_NAME);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>