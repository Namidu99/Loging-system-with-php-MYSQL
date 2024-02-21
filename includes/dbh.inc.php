<?php
$serverName = "localhost";
$dbUsername = "Project1";
$dbPassword = "8SK6do(Ha7fe]BoG";
$dbName = "project1";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection Faild : ".mysqli_connect_error());
}
