<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "AttendanceManagementSystem";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// $sql="SELECT attendance_date,sub_id,attendance FROM attendance2 where attendance_date BETWEEN '2025-05-01' AND '2025-05-31 ' and roll_no='23029C04003' and sub_id='202';";

$sql="SELECT attendance_date,sub_id,attendance FROM attendance2 where  roll_no='23029C04003'";
$result=$conn->query($sql);
// if($result->num_rows>0){
//     $row=$result->fetch_assoc();



$denuminator=0;
          if($result->num_rows>0){
            
            while($row=$result->fetch_assoc()){
                $denuminator++;
          
                echo $row['attendance_date'].'-> '.$row['attendance'].' -> '.$row['sub_id'].' ';
               
                }
                // echo ($denuminator);

              }
$sql2="SELECT attendance_date,sub_id,attendance FROM attendance2 where attendance_date BETWEEN '2025-05-01' AND '2025-05-31 ' and roll_no='23029C04003' and sub_id='202' and attendance='P';";
$result2=$conn->query($sql2);
// if($result->num_rows>0){
//     $row=$result->fetch_assoc();
// }
$numerator=0;
          if($result2->num_rows>0){
            
            while($row2=$result2->fetch_assoc()){
                $numerator++;
          
                }
                echo ($numerator);
              }
             



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Monthly Subject Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

  <div class="container">
    <table class="table table-bordered text-center align-middle">
      <thead>
        <tr>
          <th>Subject</th>
          <th>04</th>
          <th>05</th>
          <th>06</th>
          <th>07</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>202</td>
          <td></td>
          <td></td>
          <td></td>
          <td><?php   echo ("precantage:" .$numerator/$denuminator*100 . "%");  ?></td>
        </tr>
        <tr>
          <td>Python</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>JAVA</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Perl</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>

