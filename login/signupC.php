<?php
require 'database.php';
$name = $_POST['name'];
$password = $_POST['password'];

$sql = "INSERT INTO users VALUES(' ','$name', '$password')";#is_uploaded_file
if(mysqli_query($conn, $sql)){
  echo"New recorc created";
  }else {
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }
  echo"<br>";

 ?>
 <a href='Login.php'>Return</a>
