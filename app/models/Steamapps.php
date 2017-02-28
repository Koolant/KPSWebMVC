<?php
class Steamapps
{
	protected $db;

	function __construct()
  {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'steamapids';

    $this->db = new mysqli ($host, $user, $pass, $db);

    if ($this->db->connect_errno)
    {
      die("failed to connect");
    }
  }

	public function getIdArray($appname)
	{
		$app = mysqli_real_escape_string($this->db, $appname);

		$sql = "SELECT name, appid FROM steamapps WHERE name LIKE '%{$app}%'";

		$result = $this->db->query($sql);

		$arrayfin = array();
		$values = array();

		while($row = mysqli_fetch_assoc($result))
		  {
		  	$values["appid"] = $row["appid"];
		  	$values["value"] = $row["name"];
		  	$values["label"] = $row["name"];
		  	array_push($arrayfin, $values);
		  }
		echo json_encode($arrayfin);
	}

	public function getArticlesFromApi($appid)
	{
		$base_url = "http://api.steampowered.com";
		$concat = $base_url . "/ISteamNews/GetNewsForApp/v0002/?appid=$appid&count=3&format=json";

		$json = @file_get_contents($concat);

		echo $json;
	}
}
 ?>
