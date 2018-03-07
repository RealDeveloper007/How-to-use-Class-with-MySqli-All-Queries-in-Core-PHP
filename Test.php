<?php
class DBController 
{
	private $host = "localhost";
	private $user = "root";
	private $password = "root";
	private $database = "app";
	public $conn;
	
	function __construct() 
	{
		$this->conn = $this->connectDB();
	}
	
	function connectDB() 
	{
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		
		if (mysqli_connect_errno())
        {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                mysqli_close($conn);
        } else {
		        return $conn;
		}
	}
	
	function runFQuery($query)
	{
		$result = mysqli_query($this->conn,$query);
		$row = array();
		if(!empty($result))
		{
		
		for($a=0;$a<mysqli_num_rows($result);$a++)
		{
			$row[$a]=mysqli_fetch_assoc($result);
		}
		return $row;
		} else {
		return $row;
		}
		
	}
	
	function runWQuery($query) 
	{
		$result = mysqli_query($this->conn,$query);
	    while($result=mysqli_fetch_assoc($result)) 
	    {
	        $resultset[] = $result;
	    }	
		/*
		while($row=mysqli_fetch_row($result)) 
	    {
	        $resultset[] = $row;
	    }
		
		while($row=mysqli_fetch_array($result)) 
	    {
	        $resultset[] = $row;
	    }
		*/
		
	    if(!empty($resultset))
		    return $resultset;
	}
	
	function Insert($Query)
	{
		$result = mysqli_query($this->conn,$Query);
		return $result;
	}
	
	function Update($Query)
	{
		$result = mysqli_query($this->conn,$Query);
		return $result;
	}
	
	function Delete($Query)
	{
		$result = mysqli_query($this->conn,$Query);
		return $result;
	}
	
	function numRows($query) 
	{
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>
