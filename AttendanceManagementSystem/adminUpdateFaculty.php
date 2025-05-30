<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty</title>
      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <nav class="navbar navbar-light bg-white shadow-sm px-4">
     <div class="container-fluid d-flex align-items-center">
          <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
          <h5 class="mb-0 fw-bold">Update Faculty</h5>
     </div>
     </nav>
    
     <!-- Main Content -->
     <main class="container py-5">
          <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                    <div class="card shadow">
                         <div class="card-body">
                              <h6 class="text-center mb-4 fw-bold">Update Faculty Details</h6>
                              
                            
                                <?php
                                    include './DB/DBconnection.php';
                                    
                                    if($_GET['Fid'])
                                    {
                                    $F_id= $_GET['Fid'];
                                    echo ($F_id);
                                    
                                    $sql="select * from faculty where user_id='$F_id'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    }
                                ?>  
                              <form action="adminUpdateFaculty2.php" method="post">
                                   <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Faculty ID:</label>
                                        <input type="text" id="name" name="f_id" class="form-control"
                                        value="<?php echo $row['user_id'];?>"  readonly>
                                   </div>
                                   <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Name:</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                        value="<?php echo $row['faculty_name'];?>" >
                                   </div>
                                
                                   <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Branch:</label>
                                        <input type="text" id="name" name="branch" class="form-control"
                                        value="<?php echo $row['branch'];?>" >
                                   </div>
                                   <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Designation:</label>
                                        <input type="text" id="name" name="designation" class="form-control"
                                        value="<?php echo $row['designation'];?>" >
                                   </div>

                                   <div class="mb-3">
                                        <label for="password" class="form-label fw-bold">Password:</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                        value="<?php echo $row['pass'];?>" maxlength="8" >
                                   </div>

                                   

                                   <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </main>
     <!-- Footer -->
 <footer class="mt-5 py-4 border-top" style="min-height:220px;background-color: #9CA4C4;">
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




        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>