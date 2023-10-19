<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "procurement";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

session_start( ) ; 

$emailname = $_POST['email'];
$passwordname = $_POST['password'];



$sql = "select *from userDetails where email = '$emailname' and password = '$passwordname'";
$result = mysqli_query($conn, $sql); // to execute sql 

$count = mysqli_num_rows($result);

if ($count == 1) {

    $_SESSION['user_name'] = $emailname ; 
    //  echo "<h1><center> Login successful </center></h1>";
    
    echo "<script> alert('Login Successfully')</script>";

?>

    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:80/pro/pages/dashboard.php">

<?php
} else {
    // echo "<h1> Login failed. Invalid username or password.</h1>";
    echo "<script> alert('Invalid login details')</script>";
  
?>

    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:80/pro/pages/sign-in.php">

<?php
}