<?php
include 'includes/header.php';
?>
<body class="bg-info">
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mt-3">
            <table class="table table-striped table-bordered bg-light">
                <thead>
                    <tr class="bg-dark text-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'config.php';
                    $sql ="SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr class="text-center">
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['city']; ?></td>
                        <td><a class="btn btn-primary" href="edit.php?id=<?=$row['id']; ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="del.php?id=<?=$row['id']; ?>">Delete</a></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>