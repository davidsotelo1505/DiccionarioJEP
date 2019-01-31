<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "diccionario";

	$connect = new mysqli($host,$user,$pass,$db) or die("error " . mysql_error($connect));
	$connect->query("SET NAMES 'utf8';"); 

?>