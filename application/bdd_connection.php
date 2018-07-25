<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=travel_tips', 'root', '',[
	    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	    ]);

} catch (PDOException $e) {
	var_dump($e->getMessage());
  die();
}