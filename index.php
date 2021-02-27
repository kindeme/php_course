<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Form Design</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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
                <a href="#" class="text-dark lead">View Records</a>
            </div>
        </form>
        </div>
     </div>
</div>

</body>
</html>