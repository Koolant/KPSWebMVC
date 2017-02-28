<?php

class DBH
{
  protected $host = 'localhost';
  protected $user = 'root';
  protected $pass = '';
  protected $db = 'steamapids';

  public function connect()
  {
    $conn = new mysqli ($this->$host, $this->$user, $this->$pass, $this->$db);

	  if (this->$conn->connect_errno)
	  {
	     die("Failed to connect to MySQL");
    }
    return $conn;
  }
}
 ?>
