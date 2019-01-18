<?php 

class Location
{
	//database connection and table name
	private $conn;
	private $table_name="user_locations"; //change 'user_locations' to your table name

	//object properties
	public $id;
	public $latlng;
	public $timestamp;
	
	public function __construct($db)
	{
		$this->conn = $db;
	}


//read function
	 public function read()
	{
		//select all query
		$query = "SELECT * FROM " . $this->table_name . "";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

//create function
	public function create()
	{
		
		//query to insert
		$query = "INSERT INTO user_locations SET latlng=:latlng";

		$stmt = $this->conn->prepare($query);

		//sanitize
		$this->latlng=htmlspecialchars(strip_tags($this->latlng));
		$stmt->bindParam(":latlng", $this->latlng);

		if ($stmt->execute()) {
			return true;
		}

		return false;
	}


}

 ?>