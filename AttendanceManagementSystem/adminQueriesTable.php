<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Queries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column min-vh-100">

   <?php 
    include './DB/DBconnection.php';

    $sql="Select * from contact_us ORDER BY submitted_at ASC;";
    $result = $conn->query($sql);
  ?>

    <!-- Navbar -->
      <nav class="navbar bg-white shadow-sm mb-4">
        <div class="container-fluid d-flex justify-content-between align-items-center px-5">
          <div class="d-flex align-items-center">
            <img src="./image/logo1.png" alt="logo" style="height: 80px;" class="me-3">
          </div>
          <div class="text-end">
            <p class="mb-0 fw-semibold">User's Query</p>
          </div>
        </div>
    </nav>

    <!-- Table Section -->
    <div class="container mb-5">
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-light">
            <tr>
              <th>S. No.</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Date & Time</th>
              <th>Query</th>
            </tr>
          </thead>
          <tbody>
           <?php

                if ($result->num_rows > 0) {
                $sno=1;
                    while($row = $result->fetch_assoc()) {
                    
                    ?>
                <tr>
                    <td><?php echo $sno; $sno++;?></td>
                    <td><?php echo $row["first_name"]?> <?php echo $row["last_name"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["submitted_at"]?></td>
                    <td><?php echo $row["message"]?></td>
                   
                </tr>
                <?php

                    } 
                }
                    else { echo "0 results";}
            ?>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
