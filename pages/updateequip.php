
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
error_reporting(0) ;



// $f=$_GET['f'] ;
// echo"$f" ;  
// $s=$_GET['s'] ; 
// $t=$_GET['t'] ; 
// $four=$_GET['four'] ; 
// $five=$_GET['five'] ; 
// $six=$_GET['six'] ; 
// $seven=$_GET['seven'] ; 
// $eight=$_GET['eight'] ; 
// $nine=$_GET['nine'] ; 
// $ten=$_GET['ten'] ; 
// $eleven=$_GET['eleven'] ; 
// $twelve=$_GET['twelve'] ; 
// $thirteen=$_GET['thirteen'] ; 
//  $st= $_GET['st'] ;
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'] ;
$g=$_GET['g'] ;
$h=$_GET['h'] ;
$i=$_GET['i'] ;
$j=$_GET['j'] ;
$k=$_GET['k'] ;
$l=$_GET['l'] ;
$m=$_GET['m'] ;
$n=$_GET['n'] ;
$o=$_GET['o'] ;
$p=$_GET['p'] ;
$q=$_GET['q'] ;
$r=$_GET['r'] ;
$s=$_GET['s'] ;


?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        $a4 = $_POST['a4'];
        $a5 = $_POST['a5'];
        $a6 = $_POST['a6'];
        $a7 = $_POST['a7'];
        $a8 = $_POST['a8'];
        $a9 = $_POST['a9'];
        $a10 = $_POST['a10'];
        $a11 = $_POST['a11'];
        $a12 = $_POST['a12'];
        $a13 = $_POST['a13'];
      
        // $sdate = $_POST['sdate'];
     
      // Submit these to a database
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
            else{
     
            
        // Sql query to be executed
        //  $sql ="UPDATE `drugs` SET `t_id` = 'tid', `t_name` = 'tname', `p_name` = 'pname', `c_value` = 'cvalue', `res` = 'res'
        // //                                  WHERE `drugs`.`sno` = $f";
        error_reporting(0) ;

        $sql=  "UPDATE `equipment` SET `first` = '$a1', `second` = '$a2', `third` = '$a3', `fourth` = '$a4', `fifth` = '$a5', `sixth` = '$a6', `seventh` = '$a7', `eighth` = '$a8', `nineth` = '$a9', `tenth` = '$a10', `eleventh` = '$a11', `tweleveth` = '$a12', `thirteenth` = '$a13' WHERE `equipment`.`sno` = '$n';";
        $result = mysqli_query($conn, $sql);

        // Add a new trip to the Trip table in the database
        if($result){
          
          echo "<script> alert('Record Updated Successfully')</script>";
            ?>
           
           <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:80/pro/pages/equip.php"> 

           <?php
          
      }
      else{
          echo "Failed to Update the Record";
      }



        }

      }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<h1> TENDER ID:<?php echo"$o"?></h1>
<form action="" method = "post">
                <div class="row">
                  <div class="col-25">
                    <label for="tid">NIT Publication and Tender uploaded</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="a1" name="a1" value = "<?php echo "$a"  ?>" placeholder="Enter the tender id">
                  </div>
                </div>
      
      
                <div class="row">
                  <div class="col-25">
                    <label for="tname">Pre-bid meeting</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="a2"value = "<?php echo "$b"  ?>" name="a2" placeholder="Enter your tender name">
                  </div>
                </div>
      
             
      
                <div class="row">
                  <div class="col-25">
                    <label for="cvalue">Pre-bid meeting minutes & corrigendum issue</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="a3"value = "<?php echo "$c"  ?>" name="a3"
                      placeholder="Enter your estimated contract value (INR)">
                  </div>
                </div>
      
                <div class="row">
                  <div class="col-25">
                    <label for="res">Technical Bid Opening</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a4"value = "<?php echo "$d"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

              

                <div class="row">
                  <div class="col-25">
                    <label for="res">Prelim. Technical Evaluationg</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a5"value = "<?php echo "$e"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Vetting of prelim evaluation report</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a6"value = "<?php echo "$f"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Publication of tech evaluation report inviting objections</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a7"value = "<?php echo "$g"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Evaluation of objectionst</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a8"value = "<?php echo "$h"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Final Tech Evaluation Report published</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a9"value = "<?php echo "$i"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Physical verification, site visit report, tech committee meeting, final evaluation report published</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a10"value = "<?php echo "$j"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="res">Notice for financial opening</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a11"value = "<?php echo "$k"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="res">Financial opening, Financial evaluation report published</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a12"value = "<?php echo "$l"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="res">Issue of LOI to L1 bidder</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="a13"value = "<?php echo "$m"  ?>" placeholder="Enter your responsibility">
                  </div>
                </div>
               
      
      
      
              
              

                <div class="row">
                  <input type="submit" value="Submit">
                </div>
              

</body>
</html>