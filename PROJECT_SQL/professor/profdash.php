
<?php
require 'pcommondash.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Professor dashboard</title>
     <!-- Required meta tags 
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     Bootstrap CSS 
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="../bootstrap/css/stddashstyle.css" rel="stylesheet" >
    <link href="../fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet" -->

</head>
<body>

    <div class="container-fluid p-0" id="con">
        <div class="content">
            <h3>Profile Details</h3>
            <img src="images (1).png" style="width:7%;">
            <p>Name:</p>
            <p>DOB:</p>
            <P>Address:</p>
        </div>
    
    <div class="container-fluid p-0" id="enrolledcourses">
       <h3> Enrolled courses</h3>
       <div class="container mt-5"></div>
            <div class="row">
                <div class="col-md-3 "  >
                   <div class="card text-center">
                   <div class="card-header bg-success text-white">
                   <div class="row align-items-center">
                   <div class="col">
                   <i class="fa fa-list fa-3x"></i>
                    </div>
                    <div class="col">
                    <h3 class="display-3">08</h3>
                    <h6>Tasks</h6>
                    </div>
                    </div>
                   <div class="card-footer " style="width:fit-content;">
                    <p>View Details</p>
                    </div>
                   
                   
                   </div>
                   
                   </div>
                                </div>
                                <div class="col-md-3 course"  >
                                    <h5><center>DSA COURSE</center></h5>
                                    <form >
                                        <button id="btn">Viewcourse</button>
                                    </form>
                                                </div>
                                                <div class="col-md-3 course"  >
                                                    <h5><center>OS COURSE</center></h5>
                                                    <form >
                                                        <button id="btn">Viewcourse</button>
                                                    </form>
                                                                </div>
                                

            </div>
            
        </div>

    </div>
    </div>
</div>
   <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

