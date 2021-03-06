<?php
    session_start();
    $get_id = $_GET['id'];
    if(!$get_id){
        header("location: teachers-login.php");

    }else {
        echo "";
    }
?>
<html>

<head>
    <title>Online Classroom| Teacher Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .container {
        border: 3px ridge green;
    }


    @media screen and (max-width: 550px) {
        .container {
            border: none;
        }
    }
    </style>
</head>

<body>
<?php
        $id = $_GET['id'];
        $con = mysqli_connect("localhost","root","","major");
        $qry = "SELECT `name` FROM `teacher` WHERE `Id` = '$id'";
        $result = mysqli_query($con,$qry);
        $numrows = mysqli_num_rows($result);
        if($numrows != 0) {
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['name'];
            }
        }
    ?>
    <div class="jumbotron bg-success"
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Welcome To Teacher's
        Dashboard
        <span style="font-size:small;float:right;border:2px ridge ;border-radius:5px;padding: 3px;" class="logout"><a
                href="../logout.php" style="text-decoration:none;color:white;">Logout</a></span>
    </div>
    <br />
    <div class="container">
    <div class="text-primary"
        style="text-align:center; padding: 10px; font-size: 2vw;font-family:Times;border-radius:5px;">Welcome <?php echo $name;?>
        
    </div>
    </div>
    <br/>
    <div class="container" style="text-align:center; justify-content:center; display:flex;">
        <div class="row" style="padding:30px; margin-top:20px; margin-bottom:20px;">
            <div class="col-md-6">
                <div class="card" style="width: 18rem;text-align:center;">
                    <img class="card-img-top" src="../images/assignment.png" alt="Assignment Logo" width="200px"
                        height="200px;">
                    <hr />
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="assignment.php?id=<?php echo $id;?>" class="text-primary"
                            style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">
                                Upload Assignment</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../images/task.png" alt="Task Logo" width="200px" height="200px;">

                    <hr />
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="notes.php?id=<?php echo $id;?>" class="text-primary"
                            style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">Provide
                                Notes
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container" style="text-align:center; justify-content:center; display:flex;">
        <div class="row" style="padding:30px; margin-top:20px; margin-bottom:20px;">
            <div class="col-md-6">
                <div class="card" style="width: 18rem;text-align:center;">
                    <img class="card-img-top" src="../images/attendant-list.png" alt="Quiz Logo" width="200px" height="200px;">

                    <hr />
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="check-attendance.php?id=<?php echo $id;?>" class="text-primary"
                            style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">Check Attendance
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../images/attendant-list.png" alt="Attendance Logo" width="200px"
                        height="200px;">

                    <hr />
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="attendance.php?id=<?php echo $id;?>" class="text-primary"
                            style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">
                                Attendance
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container" style="text-align:center; justify-content:center; display:flex;">
        <div class="row" style="padding:30px; margin-top:20px; margin-bottom:20px;">
            <div class="col-md-12">
                <div class="card" style="width: 18rem;text-align:center;">
                    <img class="card-img-top" src="../images/assignment.png" alt="Quiz Logo" width="200px" height="200px;">

                    <hr />
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="check-assignment.php?id=<?php echo $id;?>" class="text-primary"
                            style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">Check
                                Assignment
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>