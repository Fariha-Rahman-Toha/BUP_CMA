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
    <title>Assignment</title>
</head>
<body style="background-color:#093E40;">
    <!--for navigation-->
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
    <!---->
    <section class="slideshow"
    style="background-image: linear-gradient(rgba(1, 18, 34, 0.5), rgba(14, 26, 23, 0.712)), url(../images/assignment-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 20% 0;
    justify-content: center;
    text-align: center;">
        <div class="typewriter">
            <h1>Assignments & Deadlines</h1>
          </div>
    </section>
    <h2 class="container" style="color: #93C0A4;"> Semesters</h2>
    
        <div class="container" >
            <button type="button" class="collapsible">Semester-1</button>
            <div class="content" style="padding: 0 auto;">
              <ul type="disc">
                <li>
                    <b>22.08.2022</b>
                    <ol type="i" style="justify-content: center; display: inline-table;">
                        <li> ICE1103 (Electrical Circuits) : CT-02</li>
                        <li> ICE1109 (Functional English and Presentation Skills): Presentation on given topic </li>
                    </ol>                
                </li>
                <hr>
                <li>
                    <b>20.09.2022</b>
                    <ol type="i" style="justify-content: center; display: inline-table;">
                        <li> ICE1103 (Electrical Circuits) : CT-03</li>
                    </ol>  
                </li>
              </ul>
            </div>
        </div>

        <div class="container">
            <button type="button" class="collapsible">Semester-2</button>
            <div class="content">
                <div class="content" style="padding: 0 auto;">
                    <ul type="disc">
                      <li>
                          <b>22.08.2022</b>
                          <ol type="i" style="justify-content: center; display: inline-table;">
                              <li> ICE1103 (Electrical Circuits) : CT-02</li>
                              <li> ICE1109 (Functional English and Presentation Skills): Presentation on given topic </li>
                          </ol>                
                      </li>
                      <hr>
                      <li>
                          <b>20.09.2022</b>
                          <ol type="i" style="justify-content: center; display: inline-table;">
                              <li> ICE1103 (Electrical Circuits) : CT-03</li>
                          </ol>  
                      </li>
                    </ul>
                  </div>
        </div>            
        </div>

            <div class="container">
                <button type="button" class="collapsible">Semester-3</button>
                <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

            <div class="container">
                <button type="button" class="collapsible">Semester-4</button>
                <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>            
        </div>

            <div class="container">
                <button type="button" class="collapsible">Semester-5</button>
                <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
        </div>
            <div class="container">
                <button type="button" class="collapsible">Semester-6</button>
                <div class="content">
                    <ul type="disc">
                        <li>
                            <b>02.11.2022</b>
                            <ol type="i" style="justify-content: center; display: inline-table;">
                                <li> ICE3201 (Software and Requirements Engineering): Sprint-02 Showcase</li>
                                
                            </ol>                
                        </li>
                        <hr>
                        <li>
                            <b>08.10.2022</b>
                            <ol type="i" style="justify-content: center; display: inline-table;">
                                <li> ICE3205 (Telecommunication Systems): Term Paper</li>
                                
                            </ol>                
                        </li>
                        <hr>
                        <li>
                            <b>28.09.2022</b>
                            <ol type="i" style="justify-content: center; display: inline-table;">
                                <li> ICE3201 (Software & Requirements Specification): First Sprint</li>
                            </ol>  
                        </li>
                        <hr>
                        <li>
                            <b>27.09.2022</b>
                            <ol type="i" style="justify-content: center; display: inline-table;">
                                <li> ICE3205 (Telecommunication Systems): CT-03</li>
                            </ol>  
                        </li>
                        <hr>
                        <li>
                            <b>25.09.2022</b>
                            <ol type="i" style="justify-content: center; display: inline-table;">
                                <li> ICE3210 (Web Technologies Laboratory): Project Frontend Showcase</li>
                                <li>ICE3206 (Telecommunication Systems Laboratory): Individual Project Simulation Showcase</li>
                            </ol>  
                        </li>
                      </ul>
            </div>
            
        </div>
            <div class="container">
                <button type="button" class="collapsible">Semester-7</button>
                <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

            <div class="container">
                <button type="button" class="collapsible">Semester-8</button>
                <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
       
        </div>

    <section class="footer-sec" style="background-color: black;">
        <div class="container">
        </br>
            <p>Designed by the students of the Department of ICT, Bangladesh University of Professionals, Dhaka, Bangladesh.
        </br>
            All Rights Reserved ?? 2022
    </p>
        </div>
    </section>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
    
</body>
</html>