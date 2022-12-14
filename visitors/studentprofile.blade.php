<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Student Profile</title>
</head>
<body style="background-color:#093E40;">
<!--navbar starts-->
<section class="navbar" style="width:100%;">        
   <div class="m-4">            
       <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
           <div class="container-fluid">
               <a href="../visitors/home.blade.php" class="navbar-brand"><img src="../images/logo.png" style="height: 80px;width:100%;" class="logo-resize img-responsive"></a>
               <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                   <div class="navbar-nav">
   
                       <a href="../visitors/home.blade.php" class="nav-item nav-link link-light">Home</a>
                       <a href="../user/studentprofile.blade.php" class="nav-item nav-link link-light">Profile</a>
                       <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle link-light" data-bs-toggle="dropdown">Course Materials</a>
                           <div class="dropdown-menu">
                               <a href="../user/sem1coursematerial.blade.php" class="dropdown-item">1st Semester</a>
                               <a href="../user/sem2coursematerial.blade.php" class="dropdown-item">2nd Semester</a>
                               <a href="../user/sem3coursematerial.blade.php" class="dropdown-item">3rd Semester</a>
                               <a href="../user/sem4coursematerial.blade.php" class="dropdown-item">4th Semester</a>
                               <a href="../user/sem5coursematerial.blade.php" class="dropdown-item">5th Semester</a>
                               <a href="../user/sem6coursematerial.blade.php" class="dropdown-item">6th Semester</a>
                               <a href="../user/sem7coursematerial.blade.php" class="dropdown-item">7th Semester</a>
                               <a href="../user/sem8coursematerial.blade.php" class="dropdown-item">8th Semester</a>
                           </div>
                       </div>
                       <a href="../user/books.blade.php" class="nav-item nav-link link-light" >Books</a>
                       <a href="../user/assignment.blade.php" class="nav-item nav-link link-light">Assignment</a>                            
                       <a href="../user/routine.blade.php" class="nav-item nav-link link-light">Routine</a>                            
                       <a href="../user/questions.blade.php" class="nav-item nav-link link-light">Question</a>
                       
                       <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle link-light" data-bs-toggle="dropdown">Others</a>
                           <div class="dropdown-menu">
                               <a href="../user/notice.blade.php" class="dropdown-item">Noticeboard</a>
                           </div>
                       </div>
                   </div>
                  
                   <div class="navbar-nav">
                       <a href="../visitors/index.blade.php" class="nav-item nav-link">Log Out</a>
                   </div>
               </div>
           </div>
       </nav>
   </div>
</section>
<!--navbar ends-->
    <section class="cov-bg">
        <div class="container">
        </div>
    </section>
    <div style="align-items: center;">
        <span class="dot"></span>
    </div>
    <section class="semester">
        <div class="container" style="text-align: center; width:60%">
            <h4><b>Name: </b> Tasfia Zaima</h4>
            <h4><b>ID: </b> 2054901093</h4>
            <h4><b>Date of Birth: </b> 05 July 2000</h4>
        </div>
    </section>
    <section class="semester">
        <div class="container" style="padding: 0; width:60%; margin: 0;">
            <a href="#" class="btn btn-outline-secondary active">New post</a>
            <a href="../visitors/studentprofile_uploaded.blade.php" class="btn btn-outline-secondary">Files Uploaded</a>
        </div>
        </section>
        <hr style="border: 1px solid aqua;">
        <section class="semester">
            <div class="container" style="padding: 0; width:60%; margin: 0;">
            <iframe src="https://script.google.com/macros/s/AKfycbzTSch99BP9GH639ptFb4FB8yu7QwMQ_6b93RySbNV51oZF54xvQeWEFp5y-isMjSgF/exec"
            width="600" height="580"  style="align-items: center;"></iframe>
                    </div>
    </section>

        </section>
        <section class="footer-sec" style="background-color: black;">
   <div class="container">
   </br>
       <p>Designed by the students of the Department of ICT, Bangladesh University of Professionals, Dhaka, Bangladesh.
   </br>
       All Rights Reserved ?? 2022
</p>
   </div>
</section>

</body>
</html>