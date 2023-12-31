
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tid = $_POST['tid'];
        $tname = $_POST['tname'];
        $pname = $_POST['pname'];
        $cvalue = $_POST['cvalue'];
        $res = $_POST['res'];
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
        $sql ="INSERT INTO `equipment` ( `t_id`, `t_name`, `p_name`, `c_value`, `res`) 
        VALUES ('$tid'  , '$tname', '$pname', '$cvalue', '$res')";
        $result = mysqli_query($conn, $sql);

        // Add a new trip to the Trip table in the database
        if($result){
         
      }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      }



        }

      }



    

    
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="g-sidenav-show  bg-gray-200">
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">PROCUREMENT TRACKER</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">DASHBOARD</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">DRUGS</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/equip.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">EQUIPMENT</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/text.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">DOCUMENTATION</span>
          </a>
        </li>
      
       
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">LogOut</span>
          </a>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
   
        
     <!--  edit Modal -->






      
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
        

        <!-- Button trigger modal -->


<!-- Modal -->




        </nav>

      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">EQUIPMENT TABLE</h6>
              </div>

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              

              <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">TABLES</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Sno </td>
                  <td> Tender Id </td>
                  <td> Tender Name </td>
                  <td> Product category </td>
                  <td> Estimated Contract Vaue </td>
                  <td> Responsibility  </td>
                  <td> NIT Publication and <br> Tender uploaded  </td>
                  <td> Pre-bid meeting  </td>
                  <td> Pre-bid meeting minutes & corrigendum <br> issue  </td>
                  <td> Technical Bid Opening  </td>
                  <td> Prelim. Technical Evaluation  </td>
                  <td> Vetting of prelim evaluation report  </td>
                  <td> Publication of tech evaluation report <br> inviting objections  </td>
                  <td> Evaluation of objections  </td>
                  <td> Final Tech Evaluation Report published  </td>
                  <td> Physical verification, site visit report, <br> tech committee meeting, final <br> evaluation report published  </td>
                  <td> Notice for financial opening</td>
                  <td> Financial opening, Financial evaluation <br> report published  </td>
                  <td> Issue of LOI to L1 bidder  </td>
                  <td> EDIT </td>
                  <td> DELETE  </td>

                </tr>
                <tr>
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
                
                
                $sql = "SELECT * FROM `equipment`";
                $result = mysqli_query($conn, $sql);
                
                // Find the number of records returned
                $num = mysqli_num_rows($result);
                
               
                // Display the rows returned by the sql query
                if($num> 0){
                 

                  while(($row = mysqli_fetch_assoc($result)))
                  {
                ?>
                  <td><?php echo $row['sno']; ?></td>
                  <td><?php echo $row['t_id']; ?></td>
                  <td><?php echo $row['t_name']; ?></td>
                  <td><?php echo $row['p_name']; ?></td>
                  <td><?php echo $row['c_value']; ?></td>
                  <td><?php echo $row['res']; ?></td>

                  <td>
                    
                  <?php 
                   if($row['first']=="pending")
                    echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                    else 
                    {
                            echo $row['first'] ;
                    }
                  
                  
                  ?>
                
                
                </td>


                <td>
                    
                    <?php 
                     if($row['second']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['second'];
                    
                    
                    
                    ?>
                  
                  
                  </td>

                  <td>
                    
                    <?php 
                     if($row['third']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['third'];
                    
                    
                    
                    ?>
                  
                  
                  </td>

                  <td>
                    
                    <?php 
                     if($row['fourth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['fourth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>

                  <td>
                    
                    <?php 
                     if($row['fifth']=="pending")  
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['fifth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>

                  <td>
                    
                    <?php 
                     if($row['sixth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>";
                      else 
                      echo $row['sixth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>


                  <td>
                    
                    <?php 
                     if($row['seventh']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>";
                      else 
                      echo $row['seventh'];
                    
                    
                    
                    ?>
                  
                  
                  </td>


                  <td>
                    
                    <?php 
                     if($row['eighth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['eighth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>

                  <td>
                    
                    <?php 
                     if($row['nineth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['nineth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>
                  <td>
                    
                    <?php 
                     if($row['tenth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['tenth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>
                  <td>
                    
                    <?php 
                     if($row['eleventh']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['eleventh'];
                    
                    
                    
                    ?>
                  
                  
                  </td>
                  <td>
                    
                    <?php 
                     if($row['tweleveth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>"  ;
                      else 
                      echo $row['tweleveth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>
                  <td>
                    
                    <?php 
                     if($row['thirteenth']=="pending")
                     echo "<button type='button' class='btn btn-secondary'>PENDING</button>" ;
                      else 
                      echo $row['thirteenth'];
                    
                    
                    
                    ?>
                  
                  
                  </td>








                  
                
                  <td>


                    <?php
                    //  echo "<a href='update.php?f=$row[first]&s=$row[second]&t=$row[third]&four=$row[fourth]&five=$row[fifth]&six=$row[sixth]&seven=$row[seventh]&eight=$row[eighth]&nine=$row[nineth]&ten=$row[tenth]&eleven=$row[eleventh]&twelve=$row[tweleveth]&thirteen=$row[thirteenth]&st=$row[t_id]'class='btn btn-primary'>Edit</a>" ;
                    // echo "<a href='up.php?id=$row[sno]'class='btn btn-primary'>Edit</a>" ;
                    echo "<a href='updateequip.php?a=$row[first]&b=$row[second]&c=$row[third]&d=$row[fourth]&e=$row[fifth]&f=$row[sixth]&g=$row[seventh]&h=$row[eighth]&i=$row[nineth]&j=$row[tenth]&k=$row[eleventh]&l=$row[tweleveth]&m=$row[thirteenth]&n=$row[sno]&o=$row[t_id]&p=$row[t_name]&q=$row[p_name]&r=$row[c_value]&s=$row[res]'class='btn btn-primary'>Edit</a>" ;

                    ?>
                

                  </td>  



                  <td>
                    
                   <?php 
                    echo "<a href='delequip.php?id=$row[sno]' class='btn btn-danger' onclick='return myFunction()'>Delete</a>"  ;
                   ?>
                  
                  </td>  
                </tr>
                <?php    
                  }
                }
                
                ?>
                
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>










                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

            </div>

          </div>
        </div>
      </div>
      
      <div>
      <a href="pdfequip.php"  class="btn btn-success" target ="_blank">DOWNLOAD</a>
      <button type="button" class="btn btn-warning">IMPORT</button>
      
        <button class="circle">
          <div class="line-wrapper">
            <div class="horizontal"></div>
            <div class="vertical"></div>
          </div>

        </button>
       

        <div class="content">
          <div class="content-wrapper">

            <div class="container">


              <form action="equip.php" method = "post">
                <div class="row">
                  <div class="col-25">
                    <label for="tid">Tender id</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="tid" name="tid" placeholder="Enter the tender id">
                  </div>
                </div>
      
      
                <div class="row">
                  <div class="col-25">
                    <label for="tname">Tender name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="tname" name="tname" placeholder="Enter your tender name">
                  </div>
                </div>
      
                <div class="row">
                  <div class="col-25">
                    <label for="pname">Product category</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="pname" name="pname" placeholder="Enter your product">
                  </div>
                </div>
      
                <div class="row">
                  <div class="col-25">
                    <label for="cvalue">Estimated contract value</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="cvalue" name="cvalue"
                      placeholder="Enter your estimated contract value (INR)">
                  </div>
                </div>
      
                <div class="row">
                  <div class="col-25">
                    <label for="res">Responsibility</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="res" name="res" placeholder="Enter your responsibility">
                  </div>
                </div>
      
      
           
      
      
                </div>
                <div class="row">
                  <input type="submit" value="Submit">
                </div>
              </form>
              
              
            </div>

          </div>
        </div>

      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">

            </div>

          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

  <script src="../assets/js/main.js"></script>

  <script>
function myFunction() {
  return confirm("ARE YOU SURE YOU WANT TO DELETE THIS RECORD  ?");
}
</script>

 




</body>


</html>