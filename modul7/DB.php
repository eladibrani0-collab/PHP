<?php

$host="localhost";
$user="root";
$pass="";
$dbname="ela1";

try{
    $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "connected";
}catch(exception $E){
    echo "not connected";
}


?>