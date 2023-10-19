<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "procurement";

 // Create a connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Die if connection was not successful
 if (!$conn){
   die("Sorry we failed to connect: ". mysqli_connect_error());
 }

 $id = $_GET['id'] ;

 $query = "DELETE FROM DRUGS WHERE sno = '$id'" ;
 $result = mysqli_query($conn, $query);
 if($result) 
 {
    // echo "record deleted " ; 
    ?>
           
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:80/pro/pages/tables.php">
    <<script> alert("Record Deleted Successfully")</script>

    <?php
 }
 else 
 {
    echo " failed to delte " ; 
 }

?>