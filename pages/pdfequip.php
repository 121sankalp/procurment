<?php
require_once'dompdf/autoload.inc.php' ;
 use Dompdf\Dompdf;
 $dompdf = new Dompdf() ; 

// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $dompdf->loadHtml('hello world');

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
//  $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream();

$servername = "localhost";
$username = "root";
$password = "";
$database = "procurement";

$conn = mysqli_connect($servername, $username, $password, $database);
// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql =  'SELECT * FROM equipment' ; 
$result = mysqli_query($conn, $sql) ;

$i = 1 ; 
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        h2 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        td,
        th {
            border: 1px solid #444;
            padding: 8px;
        }
    </style>



</head>
<body>
    <h2>EQUIPMENT INFO</h2>
    <table>
     <thead>
        <tr>
        <th>Sno </th>
        <th>Ten<br>der Id</th>
        <th>Tender<br>Name</th>
        <th>Product<br>category</th>
       
        <th>NIT<br> Publication and <br> Tender uploaded</th>
        <th>Pre-bid<br> meeting</th>
        <th>Pre-bid<br> meeting<br> minutes &<br> corrigendum <br>issue</th>
        <th>Technical<br> Bid <br>Opening </th>
        <th>Prelim<br> Technical <br>Evaluation</th>
        <th>Vetting<br> of<br> prelim<br> evaluation<br> report</th>
        <th>Publication<br> of tech<br> evaluation<br> report <br> inviting objections</th>
        <th>Evaluation<br> of objections</th>
        <th>Final Tech<br> Evaluation<br> Report<br> published</th>
        <th>Physical<br> verification, site<br> visit report, <br> tech committee<br> meeting,final <br> evaluation report published</th>
        <th>Notice for<br> financial opening</th>
        <th>Financial opening,<br>Financial evaluation <br> report published</th>
        <th>Issue of<br> LOI to L1 bidder</th>
        
     </tr>
     </thead>
     <tbody>';

     while($row = mysqli_fetch_assoc($result) )
     {
        $html .= '<tr>
        <td>'.$i.'</td>
        <td>'.$row['t_id'].'</td>
        <td>'.$row['t_name'].'</td>
        <td>'.$row['p_name'].'</td>
        
        <td>'.$row['first'].'</td>
        <td>'.$row['second'].'</td>
        <td>'.$row['third'].'</td>
        <td>'.$row['fourth'].'</td>
        <td>'.$row['fifth'].'</td>
        <td>'.$row['sixth'].'</td>
        <td>'.$row['seventh'].'</td>
        <td>'.$row['eighth'].'</td>
        <td>'.$row['nineth'].'</td>
        <td>'.$row['tenth'].'</td>
        <td>'.$row['eleventh'].'</td>
        <td>'.$row['tweleveth'].'</td>
        <td>'.$row['thirteenth'].'</td>
        
    </tr>';
   
$i++ ; 

     }
      $html .= ' </tbody> </table></body></html>';

      $dompdf = new Dompdf  ; 

      $dompdf -> loadHtml($html)  ; 

      $dompdf -> setPaper ('tabloid', 'landscape') ; 

      $dompdf -> render() ; 

     $dompdf -> stream('equip.pdf') ; 

?>