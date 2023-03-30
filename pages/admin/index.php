<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCM Faculty Evaluation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../dist/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <div class="main-wrapper">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
            <div class="container-fluid">
                <button class="toggler-3 bg-light" type="button" id = "sidebar-toggler">
                        <span class="navbar-toggler-icon bg-light"></span>
                </button>
                <a class="navbar-brand text-white" href="#"><img id = "profile-img" class = "logoimg d-none d-md-inline" src = "../../dist/img/cm.logo.png">Evaluation System</a>  
                <div class="profile md-mx-5">
                    <div class="dropdown">
                        <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../dist/img/cm.logo.png" alt=""></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
       

        <!-- END OF NAVBAR -->

        <div class="side-nav shadow-lg bg-body mt-5" id = "sidebar">
            <div class="side-profile d-flex flex-column justify-content-center align-items-center mt-5">
                <img src="../../dist/img/cm.logo.png" alt="">
                <h2>Administrator</h2>
            </div>
            <hr class="bg-danger border-2 border-top border-success">
            <div class="sidebar-links d-flex flex-column justify-content-between">
                <div>
                    <ul class = "navbar-nav text-dark d-flex justify-content-start align-items-start">
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-speedometer mx-2"></i>DASHBOARD</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex " href="#"><i class="bi bi-calendar2-week mx-2"></i>EVALUATIONS</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-question-square mx-2"></i>QUESTIONNAIRES & CRITERIAS</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-book mx-2"></i>SUBJECTS</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-person-fill mx-2"></i>FACULTIES</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-person-fill mx-2"></i>STUDENTS</a>
                        </li>
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark d-flex" href="#"><i class="bi bi-clipboard-data mx-2"></i>REPORTS</a>
                        </li>
                    </ul>
                </div>
                <div class = "bottom-link mt-5">
                    <ul class = "navbar-nav text-dark d-flex justify-content-start align-items-start">
                        <li class = "nav-item w-100">
                            <a class = "nav-link text-dark " href="#"><i class="bi bi-box-arrow-right mx-2"></i>LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
                
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="../../dist/js/main.js"></script>
</body>
</html>