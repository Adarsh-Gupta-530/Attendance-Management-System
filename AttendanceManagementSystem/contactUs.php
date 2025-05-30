<?php
session_start(); // start session to use flash messages

$showAlert = false;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "attendancemanagementsystem");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get and escape form data
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert into database
    $sql = "INSERT INTO contact_us (first_name, last_name, email, message)
            VALUES ('$fname', '$lname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = "Thank you! Your message has been submitted.";
        header("Location: contactUs.php"); // REDIRECT here to prevent resubmission
        exit(); // Always exit after redirect
    } else {
        $_SESSION['alert'] = "Error: " . $conn->error;
        header("Location: contactUs.php"); // Redirect even on error
        exit();
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- External Css -->
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->

</head>

<body>
    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-light">
        <div class="logo">
            <img src="./image/logo1.png" alt="LOGO" style="height: 80px;">
        </div>
        <div>
            <!-- Navigation placeholder -->
        </div>
        <div>
            <button class="btn btn-primary">Contact Us</button>
        </div>
    </header>

    <!-- Main Section -->
    <main class="container my-5">
        <div class="row g-4 align-items-start">
            <!-- Left Section -->
            <div class="col-md-6">
                <h1>Contact us</h1>
                <p>Need to get in touch with us? Either fill out the form with your inquiry or find the
                    <a href="#">department email</a> you'd like to contact below.
                </p>
            </div>

            <!-- Right Section: Form -->
            <div class="col-md-6">
                <form id="contact-form" method="POST" action="">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="first_name" class="form-control" placeholder="First name*" required>
                        </div>
                        <div class="col">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="mb-3">
                           <textarea name="message" class="form-control" rows="4" placeholder="What can we help you with?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

  <?php
if (isset($_SESSION['alert'])) {
    echo '<div class="alert alert-success text-center position-fixed top-0 start-50 translate-middle-x mt-3" style="width: 80%; z-index: 1055;">' . $_SESSION['alert'] . '</div>';
    unset($_SESSION['alert']); // Remove after showing once
}
?>

    </main>

    <!-- Footer -->
  <footer class="mt-auto py-4 border-top" style="min-height:220px;background-color: #9CA4C4;">
    <div class="container" style="background-color: #9CA4C4;">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5>Trusted By:</h5>
          <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px;">
          <p>Rajeev Gandhi Proudogiki Vishwavidyalaya Bhopal</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5 class="text-center">Members:</h5>
          <ul class="list-unstyled text-center">
            <li>Adarsh Gupta</li>
            <li>Akhil Soni</li>
            <li>Akash Shukla</li>
            <li>Anurag Panday</li>
            <li>Sanyukta Soni</li>
          </ul>
        </div>
        <div class="col-md-4" style="background-color: #9CA4C4;">
          <h5 class="text-center">&copy; Govt. Polytechnic College Shahdol</h5>
          <p class="text-muted text-center">All rights reserved.</p>
          <h5 class="text-center">Branch</h5>
          <p class="text-muted text-center">Computer Science & Engineering</p>
        </div>
      </div>
    </div>
  </footer>


    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html> 