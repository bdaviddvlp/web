<?php
	$db = new mysqli('127.0.0.1','root',''); //Csatlakozás az adatbázishoz
    
	if($db->query("USE db")){				 // Ha nem létezik a "db" nevű adatbázis, akkor 
		if($db->connect_errno){				 // Ha a csatlakozási hibák száma nagyobb, mint 0
		echo $db->connect_error;			 // Írd ki a csatlakozási hibákat
		die();								 // Öld meg az oldalt
		}
	}else{
		
		$db->query("CREATE DATABASE db");	 // Hozd létre a "db" nevű adatbázist
		if(!($db->query("SELECT id FROM users")) || !($db->query("SELECT name FROM users")) && 
		!($db->query("SELECT id FROM advertisements")) || !($db->query("SELECT userid FROM advertisements")) || !($db->query("SELECT title FROM advertisements"))){
											 // Ha a users, illetve advertisements táblákból a felsorolt oszlopok valamelyike nem létezik
		$db->query("USE db");				 // Haználd a "db" nevű adatbázist
		$db->query("CREATE TABLE users(id INT(100) auto_increment primary key, name VARCHAR(255))"); // Hozd létre a users nevű táblát a felsorolt oszlopokkal
		$db->query("CREATE TABLE advertisements(id INT(100) auto_increment primary key, userid VARCHAR(255), title VARCHAR(255))"); // Hozd létre a advertisements nevű táblát a felsorolt oszlopokkal
		
		}
	}
?>