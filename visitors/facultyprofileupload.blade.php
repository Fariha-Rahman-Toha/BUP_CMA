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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <title>Faculty Profile</title>
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
    <!---->
    <section class="cov-bg-faculty">
        <div class="container">
        </div>
    </section>
    <div style="align-items: center;">
        <span class="dot"></span>
    </div>
    <section class="semester">
        <div class="container" style="text-align: center; width:70%">
            <h4><b>Name: </b> Md. Hasan Al Banna</h4>
            <h5><b>Courses Taught:</b></h5>
            <div>
                <div class="panel-body" >
                    <ul class="list-unstyled">
                        <li>
                            <div>
                                <span style="font-family: georgia,times new roman, times, serif; font-size: small;">
                                    Data Structure Lab(ICE-2204)</span>
                                </div>
                            </li>
                            <li>
                                <span style="font-family: georgia,times new roman, times, serif; font-size: small;">Data Structure(ICE-2203)</span>
                                <span style="white-space: pre;"></span>
                                <br>
                            </li>
                            <li>
                                <span style="font-family: georgia,times new roman, times, serif; font-size: small;">Database Management System Lab (ICE-2206)</span>
                                <span style="white-space: pre;"></span>
                                <br>
                            </li>
                            <li>
                                <span style="font-family: georgia,times new roman, times, serif; font-size: small;">Web Technologies (ICE 3209)</span>
                                <span style=" white-space: pre;"></span>
                                <br>
                            </li>
                            <li>
                                <span style="font-family: georgia, times new roman, times, serif; font-size: small;">Web Technologies Lab (ICE-3210)</span>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>

    <section class="semester">
        <div class="container" style="padding: 0; width:60%; margin: 0;">
            <a href="../visitors/facultyProfile.blade.php" class="btn btn-outline-secondary">Upload files</a>
            <a href="#" class="btn btn-outline-secondary active">Files Uploaded</a>
            <a href="../visitors/faculty_privatefiles.blade.php" class="btn btn-outline-secondary">Upload Private File</a> 
            <a href="../visitors/facultypostarchive.blade.php" class="btn btn-outline-secondary">Archived Files</a>            
        </div>
        </section>
        <hr style="border: 1px solid aqua;">
        <section class="semester">
            <div class="container" style="padding: 0; width:60%; margin: 0; align-items: center;">
            <iframe src="https://drive.google.com/embeddedfolderview?id=1OvrArtgh2Seo9Noo6EpWGqPjrbgxIXBl#list"
            width="800" height="500"></iframe>
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