<?php
include("Configure.php");

$id = $_GET['id'];

$sql = "DELETE FROM users_info WHERE student_id = $id";
$result = mysqli_query($db_conn,$sql);

if($result){
    header("Location: show_data.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Data</title>
</head>
<body>
    
</body>
</html>