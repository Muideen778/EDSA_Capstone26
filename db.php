<?php
define("DBNAME","https://databases.000webhost.com/");
define("DBUSER","id21119725_muideenalimi48");
define("DBPASS","#MuideenAlimi1");

try{
    $conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}