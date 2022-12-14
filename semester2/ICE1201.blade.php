<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester-1</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>    
<body>
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
                                    <a href="../user/sem1CourseMaterial.blade.php" class="dropdown-item">1st Semester</a>
                                    <a href="../user/sem2CourseMaterial.blade.php" class="dropdown-item">2nd Semester</a>
                                    <a href="../user/sem3CourseMaterial.blade.php" class="dropdown-item">3rd Semester</a>
                                    <a href="../user/sem4CourseMaterial.blade.php" class="dropdown-item">4th Semester</a>
                                    <a href="../user/sem5CourseMaterial.blade.php" class="dropdown-item">5th Semester</a>
                                    <a href="../user/sem6CourseMaterial.blade.php" class="dropdown-item">6th Semester</a>
                                    <a href="../user/sem7CourseMaterial.blade.php" class="dropdown-item">7th Semester</a>
                                    <a href="../user/sem8CourseMaterial.blade.php" class="dropdown-item">8th Semester</a>
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
                                    <a href="../Faculties/faculties.blade.php" class="dropdown-item">Faculty Members</a>
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
    <section class="slideshow" >
        <div class="typewriter">
            <h1>OODP-I</h1>
          </div>
    </section>
  
    <section id="course">        
        <div class="container">                 
                <iframe src="https://drive.google.com/embeddedfolderview?id=1lY6ieDwgIvDuMGbUQgoGiBC6AYIk057A#list"
                width="900px" height="1280px" style="background-color:#B2D3C2; "></iframe>   
        </div>
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
