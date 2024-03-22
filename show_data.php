<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/css//bootstrap.min.css" class="css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
        <div class="text-end">
        <a href="insert.php" class="btn btn-danger mb-3 text-right">+Add User</a>
        </div>
        <h2 class="text-center text-white bg-danger p-2 mb-3">User's Data</h2>
        <table class="table table-warning table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>                   
                </tr>
            </thead>
            <tbody>

            <?Php
            include("Configure.php");
                $sql = "SELECT * FROM users_info";
                $result = mysqli_query($db_conn, $sql);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['student_id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                    
                
            ?>

                <tr>
                    <th><?php echo $id?></th>
                    <td><?php echo $name?></td>
                    <td><?php echo $email?></td>
                    <td><a href="edit.php?id=<?=$id?>" class="btn btn-warning btn-md">Edit</a>
                    |
                    <a href="delete.php?id=<?=$id?>" class="btn btn-danger btn-md">Delete</a>
                    </td>
                </tr>
            <?php
                     }
                 }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>