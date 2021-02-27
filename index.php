
<?php 
include 'config.php';
include 'includes/header.php';
?>


<body class="bg-dark">
    <div class="container">
        <div class="row p-2">
        <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
        <h3 class="text-center p-2"> Insert Data Into Database</h3>
        <hr class="bg-light">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Insert" class="btn btn-primary btn-block">
            </div>
            <div class="form-group text-center">
                <a href="view.php" class="text-dark lead">View Records</a>
            </div>
            <div class="form-group text-center">
                <p class="lead"><?php echo $result; ?></p>

            </div>
        </form>
        </div>
     </div>
</div>


</body>
</html>