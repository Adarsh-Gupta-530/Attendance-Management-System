<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty 2</title>
</head>
<body>
<?php
        include './DB/DBconnection.php';
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $id=$_POST['f_id'];
             $name=$_POST['name'];
             $branch=$_POST['branch'];
             $designation=$_POST['designation'];
             $password=$_POST['password'];

            //  echo ($name);
            //  echo ($id);

            $sql2 = "UPDATE faculty SET faculty_name='$name',branch='$branch',designation='$designation',pass='$password' WHERE user_id='$id'";
            if (mysqli_query($conn, $sql2)) {
                echo "<p style='color: green;'> Details updated successfully!!!!</p>";
               }
         }

                // echo "Record updated successfully";}
                            //  echo "<p style='color: green;'> Details updated successfully!!!!</p>";
            //   } else {
            //     //   echo "<p style='color: red;'>Error in Detail Update: " . $conn->error . "</p>";
            //     echo yes;
            //   }
        
         
         ?>
    
</body>
</html>