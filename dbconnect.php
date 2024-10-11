<?php

try{
    $host = "Localhost";
    $dbname = "myblog";
    $dbuser = "root";
    $dbpassword = "";
    //data source name
    $dsn = "mysql:host=$host;dbname=$dbname";
    $conn = new PDO($dsn,$dbuser,$dbpassword);
    //or
    //$conn = new PDO("mysql:host=localhost;dbname=myblog3","root","");

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection successful";
}catch(PDOException $e){
        die("Connection fail:".$e->getMessage());
}

?>