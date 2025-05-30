
<!-- HodSignup.php page does not required for us  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Hodsignup.css">
    <title> HOD Signup</title>
</head>

<body>
<?php
        
        include './DB/DBconnection.php';
        // Function to generate a unique userId
    function generateUserId($conn, $branch) {
        $sql = "SELECT user_id FROM faculty WHERE branch='$branch' ORDER BY s_no DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $lastId = $row['user_id'];
            $numPart = intval(substr($lastId, strlen($branch))) + 1;
        } else {
            $numPart = 1;
        }

        return $branch . str_pad($numPart, 3, '0', STR_PAD_LEFT);
    }

    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $branch = strtoupper($_POST['branch']);
        $userId = generateUserId($conn, $branch);
        $designation = $_POST['designation'];
        $password = $_POST['password'];
        $Cpassword = $_POST['Cpassword'];

        $checkQuery = "SELECT * FROM faculty WHERE user_id='$userId'";
        $checkResult = $conn->query($checkQuery);
        
        while ($checkResult->num_rows > 0) {
            preg_match('/\d+/', $userId, $matches);
            $newNumber = isset($matches[0]) ? intval($matches[0]) + 1 : 1;
            $userId = $branch . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
            $checkQuery = "SELECT * FROM faculty WHERE user_id='$userId'";
            $checkResult = $conn->query($checkQuery);
        }

        if($password==$Cpassword)
        {   
            $sql = "INSERT INTO faculty (user_id, faculty_name, branch, designation, pass) VALUES ('$userId','$name', '$branch','$designation','$password' )";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Signup successful! Your User ID is: <strong>$userId</strong> and password : <strong>$password</strong></p>";
            } else {
                echo "<p style='color: red;'>Error inserting data: " . $conn->error . "</p>";
            }

        }else
        {
            echo '<script type="text/javascript">alert("Password Does not match");</script>';

        }
        // Insert into database (with debugging)
    
    }

    $conn->close();
?>
    <!--nav_bar-->

    <nav>
        <div class="iamge_logo">
            <img src="./image/logo1.png" alt="Logo">
        </div>
        <h3>HOD SignUp</h3>
    </nav>

    <!--Main Content-->

    <main>

        <div class="login-container">

            <form action="#" method="post">
                <div class="input-group">

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>

                    <label for="Branch">Branch:</label>
                    <select name="branch" id="branch" required>
                        <option value="" disable selected hidden>Select Branch</option>
                        <option value="CSE">Computer Science</option>
                        <option value="MS">Mine Servey</option>
                        <option value="MMS">Mining And Mineserving</option>
                        <option value="ELE">Electrical</option>
                        <option value="MECH">Mechnical</option>
                        <option value="CIVIL">Civil</option>
                    </select>

                    <label for="Designation">Designation:</label>
                    <select name="designation" id="branch" required>
                        <option value="" disable selected hidden>Designation</option>
                        <option value="HOD">HOD</option>
                        <option value="Teacher">Teacher</option>
                    </select>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>

                    <label for="password">Confirm Password:</label>
                    <input type="password" id="password" name="Cpassword" placeholder="Enter confirm password" required>
                </div>
                <button type="submit" class="login-btn">Signup</button>
            </form>
        </div>
    </main>
    <!--footer -->
    <footer>
        <div class="trust">
            <h3>Trusted By :</h3>
            <img src="./image/RGPVLOGO.jpeg" alt="">
            <h3>Rajeev Gandhi Proudogiki Vishwavidyalaya Bhopal</h3>
        </div>
        <div class="members">
            <h3>Member: </h3>
            <h3>Adarsh</h3>
            <h3>Akash</h3>
            <h3>Akhil</h3>
            <h3>Anurag</h3>
            <h3>Sanyukta</h3>
        </div>
        <div class="copyright">
            <h3>&copy; copyright of this website is holded by : Govt. poly. collage shahdol</h3>
        </div>
    </footer>
</body>

</html>