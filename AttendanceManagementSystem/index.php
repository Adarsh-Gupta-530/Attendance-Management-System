<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence Management System</title>
    <link rel="website icon" type="jpeg" href="./image/RGPVLOGO.jpeg" >
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <div class="logo">
                <img src="./image/logo1.png" alt="LOGO">
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
            <ul class="nav-part2">
                <li><a href="aboutUs.php" class="nav-links">About Us</a></li>
                <li><a href="contactUs.php" class="nav-links">Contact Us</a></li>
                <li><a href="teachersLogin.php"><button style="font-size:16px;">Login As Teacher</button></a></li>
                <li><a href="hodLogin.php"><button style="font-size:16px;">Login As HOD</button></a></li>
            </ul>
        </nav>

        <section class="page1">
            <div class="left">
                <h1>Every <span>student</span> can easily view their attendance</h1>
                <p>Teacher's mark attendance and upload progressive test result's and student's can view their attendance by only using their roll no and name.</p>
                <a href="studentCheck.php"><button>Check attendance</button></a>
            </div>
            <div class="right">
                <img src="./image/attendance.webp" alt="">
            </div>
        </section>
        
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
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/animation.js"></script>
</body>
</html>