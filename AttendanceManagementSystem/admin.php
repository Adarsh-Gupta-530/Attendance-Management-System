<?php
session_start();
if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!=true){
    header("location: adminLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="webpage icon " type="jpeg" href="./image/RGPVLOGO.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/admin.css">
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <?php 
    include './DB/DBconnection.php';
    $sql = "SELECT 
    student.roll_no, 
    student.student_name, 
    student.semester, 
    student.branch,
    attendance2.attendance,
    attendance2.attendance_date FROM attendance2 INNER JOIN subject ON subject.sub_id = attendance2.sub_id
    INNER JOIN student ON student.roll_no = attendance2.roll_no WHERE attendance2.attendance_date = CURRENT_DATE GROUP BY 
    student.roll_no, 
    student.student_name, 
    student.semester, 
    student.branch,
    attendance2.attendance,
    attendance2.attendance_date;" ;

    $totalCSE=0;$totalMMS=0;$totalELEC=0;$totalMS=0;$totalMECH=0;$totalCIVIL=0;
    $attCSE=0;$attMMS=0;$attELEC=0;$attMS=0;$attMECH=0;$attCIVIL=0;

    $result = $conn->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        if( $row['branch']=='CSE'){
          $totalCSE++;
          if( $row['attendance']=='P'){
            $attCSE++;
          }
        }else if( $row['branch']=='MMS'){
          $totalMMS++;
          if( $row['attendance']=='P'){
            $attMMS++;
          }
        }else if( $row['branch']=='MS'){
          $totalMS++;
          if( $row['attendance']=='P'){
            $attMS++;
          }
        }else if( $row['branch']=='ELEC'){
          $totalELEC++;
          if( $row['attendance']=='P'){
            $attELEC++;
          }
        }else if( $row['branch']=='CIVIL'){
          $totalCIVIL++;
          if( $row['attendance']=='P'){
            $attCIVIL++;
          }
        }else if( $row['branch']=='MECH'){
          $totalMECH++;
          if( $row['attendance']=='P'){
            $attMECH++;
          }
        }
      }
    }

    $AllBrTotalAttendance=$totalCSE+$totalMMS+$totalELEC+$totalMS+$totalMECH+$totalCIVIL;
    $AllBrTotalAttendancePresent=$attCSE+$attMMS+$attELEC+$attMS+$attMECH+$attCIVIL;

    $totalPresentForAdmin=($AllBrTotalAttendance > 0) ? round(($AllBrTotalAttendancePresent / $AllBrTotalAttendance) * 100) : "0"; 
    // echo $totalPresentForAdmin;
    $totalAbsentForAdmin=100-$totalPresentForAdmin;
    
    ?>
    <nav>
    <!--  -->
        <div class="nav-part1">
            <div class="logo">
                <img src="./image/logo1.png" alt="logo">
            </div> 
            <div class="admin-menu">
                <h4> <i class="ri-user-community-line"></i> <?php echo $_SESSION['name']?> </h4>
                <i class="ri-menu-3-line" id="menu"></i>
            </div>
        </div>
        <div class="nav-part2" style="padding: 60px 55px;">
            <h4 class="color-p">For Faculty</h4>
            <h4><a href="facultySignup.php" style="text-decoration: none;color: rgb(62, 58, 58);">Register faculty</a></h4>
            <!-- <h4><a href="hodSignup.php">Register HOD</a></h4> -->
            <h4><a href="adminManageFaculty.php" style="text-decoration: none;color: rgb(62, 58, 58);">Manage Faculty</a></h4>
            <h4><a href="adminViewIDPass.php" style="text-decoration: none;color: rgb(62, 58, 58);">View ID-Pass Detail</a></h4>
            <h4 class="color-p">For Student</h4>
            <!-- <h4><a href="#">Register Student</a></h4> -->
            <h4><a href="adminViewStudentDetail.php" style="text-decoration: none;color: rgb(62, 58, 58);">Students Detail</a></h4>
            <h4><a href="adminViewAttendance.php" style="text-decoration: none;color: rgb(62, 58, 58);">Students Attendance</a></h4>
            <h4><a href="adminViewProgressiveTestResult.php" style="text-decoration: none;color: rgb(62, 58, 58);">Students Progressive Result</a></h4>
            <h4 class="color-p">LogOut</h4>
            <h4 ><a href="logOut.php" style="text-decoration: none;color: rgb(62, 58, 58);">Log Out</a></h4>
            <h4 class="color-p">User Queries</h4>
             <h4 ><a href="adminQueriesTable.php" style="text-decoration: none;color: rgb(62, 58, 58);">Queries</a></h4>
            <h4 class="color-p">Delete All Attendance</h4>
            <h4><a href="adminDeleteAllAttendance.php"><button id="trunk">Delete all attendance</button></a></h4>

            <i class="ri-close-line" id="cancle"></i>
        </div>
    </nav>

    <section class="main">
        <h2 style="text-align:center;">Daily Attendance - Uploaded Daily</h2>
        <div class="circles-box">
            <div class="circle">
                <div class="outer">
                    <div class="inner">
                        <div id="number1">
                
                        </div>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px" class="svg svg1">
                    <defs>
                       <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                       </linearGradient>
                    </defs>
                    <circle cx="80" cy="80" r="70" stroke-linecap="round" class=" circle1" />
                </svg>
                <div class="status">
                    <h4>Present</h4>
                </div>
            </div>
            <div class="circle">
                <div class="outer">
                    <div class="inner">
                        <div id="number2">
                
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px" class="svg svg2">
                    <defs>
                       <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                       </linearGradient>
                    </defs>
                    <circle cx="80" cy="80" r="70" stroke-linecap="round" class=" circle2" />
                </svg>
                <div class="status">
                    <h4>Absent</h4>
                </div>
            </div>
            <div class="circle">
                <div class="outer">
                    <div class="inner">
                        <div id="number3">
                
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px" class="svg svg3">
                    <defs>
                       <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                       </linearGradient>
                    </defs>
                    <circle cx="80" cy="80" r="70" stroke-linecap="round" class=" circle3" />
                </svg>
                <div class="status">
                    <h4 class="leave">Leave</h4>
                </div>
            </div>
        </div>

        <div class="branch-wise-persent">
            <h2>Daily Branch Wise Attendance</h2>
            <div class="branch3">
                <div class="branch">
                    <h4 class="branch-name">MMS</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalMMS > 0) ? round(($attMMS / $totalMMS) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
                <div class="branch">
                    <h4 class="branch-name">CSE</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalCSE > 0) ? round(($attCSE / $totalCSE) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
                <div class="branch">
                    <h4 class="branch-name">ELEC</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalELEC > 0) ? round(($attELEC / $totalELEC) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
            </div>
            <div class="branch3">
                <div class="branch">
                    <h4 class="branch-name">MECH</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalMECH > 0) ? round(($attMECH / $totalMECH) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
                <div class="branch">
                    <h4 class="branch-name">CIVIL</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalCIVIL > 0) ? round(($attCIVIL / $totalCIVIL) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
                <div class="branch">
                    <h4 class="branch-name">MS</h4>
                    <div class="branch-att-persent-box">
                        <h4 class="branch-att-persent"><?php echo ($totalMS > 0) ? round(($attMS / $totalMS) * 100) . "%" : "N/A"; ?></h4>
                    </div>
                </div>
            </div>

        </div>  
    </section>
<!-- Footer -->
  <footer class="mt-auto py-4 border-top" style="min-height:220px;background-color: #9CA4C4;">
    <div class="container" style="background-color: #9CA4C4;">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5>Trusted By:</h5>
          <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px; width:100px;">
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


  <script>

    function calculateTimeInterval(percent) {
    // Constants from the linear interpolation
    let a = -0.7727;
    let b = 80.1;

    // Calculate the timeInterval using the formula
    let timeInterval = a * percent + b;
    return timeInterval;
    }
    // for present circular progress bar
    let number1=document.getElementById("number1");
    let counter1=0;
    let present="<?php echo $totalPresentForAdmin; ?>"  // present value from php calculation

  //  calculated value
    let totalLength = 472;
    let percent = present;
    let offset = totalLength - (totalLength * percent / 100); // 165.2

    // Build the keyframes string
    let keyframes = `
    @keyframes anim1 {
      100% {
        stroke-dashoffset: ${offset};
      }
    }`;

    // Inject into a <style> tag in the document
    let styleSheet = document.createElement("style");
    styleSheet.type = "text/css";
    styleSheet.innerHTML = keyframes;
    document.head.appendChild(styleSheet);

    // Apply animation to your circle
    document.querySelector(".circle1").style.animation = "anim1 2s linear forwards";

    let interval = calculateTimeInterval(percent);
    // for increase numbers
    setInterval(()=>{
        if(counter1== present){
            clearInterval();
        }else{
            counter1+=1;
            number1.innerHTML = counter1 +"%"
        }
    },interval)

    /* for absent circular progress bar*/
    let number2 = document.getElementById("number2");
    let counter2 = 0;
    let absent = "<?php echo  $totalAbsentForAdmin; ?>";  // absent value from php calculation

    // calculated value for absent
    let Apercent = absent;
    let offset2 = totalLength - (totalLength * Apercent / 100); // This gives us the dynamic offset value for absent

    // Create new keyframe string based on dynamic offset for absent
    let keyframes2 = `
    @keyframes anim2 {
      100% {
        stroke-dashoffset: ${offset2};
      }
    }`;

    let styleSheet2 = document.createElement("style");
    styleSheet2.type = "text/css";
    styleSheet2.innerHTML = keyframes2;
    document.head.appendChild(styleSheet2);

    // Apply the animation to your element 
    document.querySelector(".circle2").style.animation = "anim2 2s linear forwards";

    let interval2 = calculateTimeInterval(Apercent);
    setInterval(()=>{
        if(counter2== absent){
            clearInterval();
        }else{
            counter2+=1;
            number2.innerHTML = counter2 +"%"
        }
    },interval2)

    // for leave circular progress bar -> there is no opyion on attendance for leave
    let number3=document.getElementById("number3");
    let counter3=0;
    setInterval(()=>{
        if(counter3 == 1){
            clearInterval();
        }else{
          number3.innerHTML = counter3 +"%"
          counter3+=1;
        }
    },120)

    
   
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/admin1.js"></script>
  <script src="./js/admin2.js"></script>
      <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>