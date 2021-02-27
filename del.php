<?php 
include 'config.php';
include 'includes/header.php';

$id = $_GET['id'];
$sql="DELETE FROM users WHERE id ='$id'";
if(mysqli_query($conn,$sql)){
    header("location:view.php");
}else{
    echo "Something went wrong!";
}
?>