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
    <title>Noticeboard</title>
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
                            <a href="../visitors/facultyProfile.blade.php" class="nav-item nav-link link-light">Profile</a>
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
            <h1>Noticeboard</h1>
          </div>
    </section>
    <h2 class="container" style="color: #93C0A4; text-align: center;"> Notice Board</h2>
    <section class="semester">
        <div class="container">
            <h1 class="text-center">CT/Assignment/Term-paper</h1>
    <!-- Table Data -->
    <div class="container">
        <hr>
        <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Course">

        <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true" style="align-items: center;">
            <tr>
                <th>Deadlines</th>
                <th>Courses</th>
                <th>Content</th>
            </tr>
            <tr>
                <td>27/10/2022</td>
                <td>ETA</td>
                <td>CT-04</td>
            </tr>
            <tr>
                <td>30/10/2022</td>
                <td>SRE</td>
                <td>CT-04</td>
            </tr>
            <tr>
                <td>30/11/2022</td>
                <td>ETA</td>
                <td>WT lab quiz</td>
            </tr>
            <tr>
                <td>31/10/2022</td>
                <td>ETA</td>
                <td>Hardcopy Submission of given assignment</td>
            </tr>
            <tr>
                <td>31/10/2022</td>
                <td>MCA</td>
                <td>CT-04</td>
            </tr>
            <tr>
                <td>02/11/2022</td>
                <td>SRE</td>
                <td>Sprint-2 Showcase</td>
            </tr>
            <tr>
                <td>02/11/2022</td>
                <td>WT</td>
                <td>Written Assignment Submission</td>
            </tr>
            <tr>
                <td>03/11/2022</td>
                <td>WT</td>
                <td>Cloned Website submission</td>
            </tr>
            <tr>
                <td>06/11/2022</td>
                <td>WT</td>
                <td>Project Showcase</td>
            </tr>
            
        </table>
    </div>
        </div>
    </section>
    <section class="semester">
        <div class="container">
            <b>05.08.2022</b><hr>
            <p>Seminar on mental health.</p>
            
        </div>
    </section>
    <section class="semester">
        <div class="container">
            <b>15.08.2022</b><hr>
            <p>National Mourning Day</p>
            <p> <b>Schedule:</b> Zoom meeting on 08:30 AM and 03:00PM</p>
            <p> Provided list of students must join the morning session. And everyone must attend the afternoon session.</p>
        </div>
    </section>
    <section class="semester">
        <div class="container">
            <b>05.09.2022</b><hr>
            <p>Seminar on mental health.</p>
            
        </div>
    </section>
    <section class="semester">
        <div class="container">
            <b>04.10.2022 to 10.10.2022</b><hr>
            Bridge Holiday
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

    <script type="application/javascript">
        function tableSearch() {
            let input, filter, table, tr, td, txtValue;

            //Intialising Variables
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

        }
    </script>
    
</body>
</html>