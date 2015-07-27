<?php 

ini_set('display_errors', 'on');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '\views');
define('BASE_URL', 'http://cms');

try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=cms', 'root', '');
}catch(PDOException $ex){
	echo "Ther is an error".$ex->getMessage();
}

require "functions.php";