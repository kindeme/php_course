<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName ="crudapp";

$conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Couldnot connect to database".mysqli_connect_error());
}else{
    echo "Connected successfully to database";
}

?>