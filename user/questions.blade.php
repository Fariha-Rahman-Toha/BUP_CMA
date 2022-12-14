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
    <title>Questions</title>
</head>
<body style="background-color:#093E40;">
    <!--for navigation-->
    <section class="navbar" style="width:100%;">        
        <div class="m-4">            
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="../visitors/home.html" class="navbar-brand"><img src="../images/logo.png" style="height: 80px;width:100%;" class="logo-resize img-responsive"></a>
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
            <h1>Questions</h1>
          </div>
    </section>
    <h2 class="container" style="color: #93C0A4; text-align: center;"> Semesters</h2>
    
        <div class="container" >
            <button type="button" class="collapsible" style="text-align: center;">Semester-1</button>
            <div class="content" style="padding: 0 auto;">
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Structured Programming</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Structured Programming Laboratory</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Quiz+Final)</a></li>                        
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Electrical Circuits</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Electrical Circuits Laboratory</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Quiz+Final)</a></li>                        
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Physics</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                     </ul>
                    </div>
                </div> 
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Mathematics-I</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                     </div>
                </div>  
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Functional English and Presentation Skills Development</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        
                     </ul>
                </div> 
                </div>                          
            </div>
        </div>

        <div class="container">
            <button type="button" class="collapsible" style="text-align: center;">Semester-2</button>
            <div class="content">
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I Laboratory</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Quiz+Final)</a></li>                        
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits Laboratory</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Quiz+Final)</a></li>                        
                     </ul>
                </div>            
                </div>
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;"> Statistics & Probability</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                     </ul>
                    </div>
                </div> 
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Mathematics-II</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2021 (Final)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                     </ul>
                     </div>
                </div>  
                <div class="container">
                    <button type="button" class="collapsible" style="text-align: center;">Ethics and ICE Law</button>
                    <div class="content">
                     <ul>
                        <li><a href="#">2022 (CT+Mid-term)</a></li>
                        <li><a href="#">2020 (Mid-term+Final)</a></li>
                        
                     </ul>
                </div> 
                </div>         
        </div>            
        </div>

            <div class="container">
                <button type="button" class="collapsible" style="text-align: center;">Semester-3</button>
                <div class="content">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-II</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-II Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Discrete Mathematics</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Economics</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Digital Logic Design</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Mathematics-III</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Foreign Language</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
            </div>
        </div>

            <div class="container">
                <button type="button" class="collapsible" style="text-align: center;">Semester-4</button>
                <div class="content">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Statistics & Probability</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Mathematics-I</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Ethics and ICE Law</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
            </div>            
        </div>

            <div class="container">
                <button type="button" class="collapsible" style="text-align: center;">Semester-5</button>
                <div class="content">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Object Oriented Design and Programming-I Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electrical Devices and Circuits Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Statistics & Probability</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Mathematics-I</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Ethics and ICE Law</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
            </div>
            
        </div>
            <div class="container">
                <button type="button" class="collapsible" style="text-align: center;">Semester-6</button>
                <div class="content">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Software and Requirements Engineering</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/1bs2C-2nXRgMzccdX0Rr6Dd4997JFx6AI?usp=share_link">2022 (CT+Mid-term)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1bs2C-2nXRgMzccdX0Rr6Dd4997JFx6AI?usp=share_link">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1LeGW1rDwOs8_8fSPW2TMLy9-rospPx4o?usp=share_link">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Software and Requirements Engineering Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microprocessor and Computer Architecture</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/1LeGW1rDwOs8_8fSPW2TMLy9-rospPx4o?usp=share_link">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1LeGW1rDwOs8_8fSPW2TMLy9-rospPx4o?usp=share_link">2020 (Mid-term+Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1LeGW1rDwOs8_8fSPW2TMLy9-rospPx4o?usp=share_link">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microprocessor and Computer Architecture Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Telecommunication Systems</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/1t7k6bHB11-yOOb9_dQnXipRbsh1kCjbT?usp=share_link">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1t7k6bHB11-yOOb9_dQnXipRbsh1kCjbT?usp=share_link">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Telecommunication Systems Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/1t7k6bHB11-yOOb9_dQnXipRbsh1kCjbT?usp=share_link">2022 (Final)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electromagnetic Theory and Antenna</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/1mLI0IThX7j3gJvCGyvAmSzWawN07BYS9?usp=share_link">2022 (CT+Mid-term)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/1mLI0IThX7j3gJvCGyvAmSzWawN07BYS9?usp=share_link">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies</button>
                        <div class="content">
                         <ul>
                            <li><a href="https://drive.google.com/drive/folders/12LoFWKqDdWHn0c3Ie_SmDnPv4BMhds2Q?usp=share_link">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/12LoFWKqDdWHn0c3Ie_SmDnPv4BMhds2Q?usp=share_link">2020 (Mid-term+Final)</a></li>
                            <li><a href="https://drive.google.com/drive/folders/12LoFWKqDdWHn0c3Ie_SmDnPv4BMhds2Q?usp=share_link">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (Quiz)</a></li>
                            
                         </ul>
                    </div> 
                    </div>  
            </div>
            
        </div>
            <div class="container">
                <button type="button" class="collapsible" style="text-align: center;">Semester-7</button>
                <div class="content">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Artificial Intelligence</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microwave Engineering</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microwave Engineering Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Telecommunication Systems</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Telecommunication Systems Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electromagnetic Theory and Antenna</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div>  
            </div>
        </div>

            <div class="container">
                <button type="button" class="collapsible"style="text-align: center;">Semester-8</button>
                <div class="content" style="padding: 0 auto;">
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Artificial Intelligence</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microwave Engineering</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Microwave Engineering Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Quiz+Final)</a></li>                        
                         </ul>
                    </div>            
                    </div>
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;"> Telecommunication Systems</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                         </ul>
                        </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Telecommunication Systems Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div>  
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Electromagnetic Theory and Antenna</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2022 (CT+Mid-term)</a></li>
                            <li><a href="#">2021 (Final)</a></li>
                            <li><a href="#">2020 (Mid-term+Final)</a></li>
                            <li><a href="#">2019 (CT+Mid-term+ Final)</a></li>
                         </ul>
                         </div>
                    </div> 
                    <div class="container">
                        <button type="button" class="collapsible" style="text-align: center;">Web Technologies Laboratory</button>
                        <div class="content">
                         <ul>
                            <li><a href="#">2021 (Final)</a></li>
                            
                         </ul>
                    </div> 
                    </div>                      
                  </div>
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