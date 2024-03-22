<?php
include("Configure.php");

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users_info (`Name` , `Email`) VALUES ('$name', '$email')";
    $result = mysqli_query($db_conn,$sql);
    if($result){
        // Echo 'Data Inserted Successfully';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="./Bootstrap/css//bootstrap.min.css" class="css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/custom.css" class="css">

</head>
<body>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Data</title>
    </head>
    <body>

      <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        
        <h1>Insert Data</h1>
        
        <fieldset>
          
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
        <button type="submit" name="submit">Submit</button>
        
      </form>
      
    </body>
</html>

</body>
</html>