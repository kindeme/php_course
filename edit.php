
<?php 
include 'config.php';
include 'includes/header.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
   
    $sql="UPDATE users SET name='$name',email='$email',phone='$email',phone='$phone',city='$city' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        header("location:view.php");
    }
}
?>


<body class="bg-dark">
    <div class="container">
        <div class="row p-2">
        <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
        <h3 class="text-center p-2"> Edit & Save in Database</h3>
        <hr class="bg-light">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?= $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" value="<?= $row['phone']; ?>" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="<?= $row['city']; ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update" class="btn btn-primary btn-block">
            </div>
            <div class="form-group text-center">
                <a href="index.php" class="text-dark lead">View Records</a>
            </div>
        </form>
        </div>
     </div>
</div>


</body>
</html>
