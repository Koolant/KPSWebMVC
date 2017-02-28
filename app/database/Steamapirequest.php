<?php
		$value = $_GET["app"];

		$base_url = "http://api.steampowered.com";
		$concat = $base_url . "/ISteamNews/GetNewsForApp/v0002/?appid=$value&count=3&format=json";

		$json = @file_get_contents($concat);
		//var_dump($json);


		echo $json;
