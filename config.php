<?php

function config() {
	
	$hostname = 'localhost'; 
	$username = 'root'; 
	$password = '';
	$dbName = 'test';
	
		
	// Подключение к БД.
	mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_select_db($dbName) or die('No DB');
	}