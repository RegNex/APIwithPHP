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



	 public function read()
	{
		//select all query
		$query = "SELECT * FROM " . $this->table_name . "";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}
}

 ?>