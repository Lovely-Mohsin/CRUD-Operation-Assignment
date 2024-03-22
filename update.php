<?php

    include("Configure.php");

if(isset( $_POST['submit'] )) {

    $id = $_POST['id'];  
    $name = $_POST['name'];  
    $email = $_POST['email'];  

    $sql = "UPDATE users_info SET `Name` = '$name' , `Email` = '$email' WHERE student_id = $id";

    if(mysqli_query($db_conn,$sql))
    {
        header("Location: show_data.php");

    }
}
?>