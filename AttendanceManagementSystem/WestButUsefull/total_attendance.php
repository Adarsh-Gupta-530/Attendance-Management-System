<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//to get different subjects list enrolled by student    using where branch="cse" and sem="4th".

$sql = "SELECT DISTINCT roll_no,sname, sub, COUNT(CASE WHEN attand = 'P' THEN 1 END) AS present_count, COUNT(a_date) AS total_days FROM student GROUP BY roll_no,sub order by (roll_no) ASC";
$result = $conn->query($sql);

$sql2 = "SELECT DISTINCT roll_no,sname from student ORDER BY (roll_no) ASC"; 
$result2 = $conn->query($sql2);


if ($result2->num_rows > 0) {
?>

<!DOCTYPE html>
        <html>
        <head>
        <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 80%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        </head>
        <body>

        <h2>Semester - 4th</h2>
        <h2>Branch-CSE</h2>

        <table>
          <tr>
            <th>Subject</th>
            <th>Present/Total classes helded</th>
            <th>Percantage</th>
         </tr>

<?php 
  while($row2 = $result2->fetch_assoc()) 
  {
   ?>
  
    <h6><?php echo $row2['roll_no']; echo $row2['sname']; ?></h6>
<?php
    if ($result->num_rows > 0) 
      {  
        while($row = $result->fetch_assoc()) 
        {
            if($row['roll_no'] ==$row2['roll_no'] )
              {?>

  <tr>
    <td><?php echo $row['sub']; ?></td>
    <td><?php echo $row['present_count'];?>  / <?php echo $row['total_days'];?></td>
    <td><?php echo round(($row['present_count']/$row['total_days'])*100)."%";?></td>
  </tr>
  <?php
              }
        } 
        
    }
  }
}
      else { echo "0 results";} ?> 
</table>
<!-- using where branch="cse" and sem="4th" -->
</body>
</html>




