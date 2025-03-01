<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dita9";


try{
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}catch(Exception $e){
    echo $e->getMessage();
}