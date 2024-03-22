<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Data</title>

  <title>Insert Data</title>
  <link rel="stylesheet" href="./Bootstrap/css//bootstrap.min.css" class="css">
  <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./Bootstrap/css/custom.css" class="css">
</head>

<body>

  <?php

  include("Configure.php");
  $id = $_GET['id'];
  // echo $id; 
  $sql = "SELECT * FROM users_info WHERE student_id = $id";
  $result = mysqli_query($db_conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  }


  ?>
  <form action="update.php" method="POST">

    <h1>Edit Data</h1>

    <input type="hidden" name="id" value="<?= $row['student_id'] ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= $row['Name'] ?>">

    <label for="name">Email:</label>
    <input type="email" name="email" value="<?= $row['Email'] ?>">

    <button type="submit" name="submit">Update</button>

  </form>
</body>

</html>