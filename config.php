<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName ="crudapp";

$conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Couldnot connect to database".mysqli_connect_error());
}
// insert to database
$result = "";
if(isset($_POST['submit'])){
    $name =test_input($_POST['name']) ;
    $email =test_input($_POST['email']) ;
     $phone = test_input($_POST['phone']);
      $city = test_input($_POST['city']);

      $sql ="INSERT INTO users (name,email,phone,city) VALUES('$name','$email','$phone','$city')";

      if(mysqli_query($conn,$sql)){
        $result="One Record Inserted successfully!";
      }else{
          $result = "something went wrong!".mysqli_errno($conn);
      }
    
}

function test_input($data){ 

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

}

?>