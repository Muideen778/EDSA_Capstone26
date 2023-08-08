<?php
define("DBHOST", "https://databases.000webhost.com/"); 
define("DBNAME","edsa_app");
define("DBUSER","root");
define("DBPASS","");

try{
    $conn = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}