<?php
    session_start();
    
?>
<html>

<head>
    <title>Online Classroom</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


    <style>
    
        .container{
            border:3px ridge green; 
        }
       
        @media screen and (max-width: 550px) {
            .container{
                border: none;
            }
        }
    </style>
</head>

<body onexit="<?php session_abort();?>">
<style>
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/Skateboarding.gif) center no-repeat #fff;
}
</style>

<div class="se-pre-con"></div>
<script>
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
    <div class="jumbotron bg-success"
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Online Classroom
    </div>
    <br />
    <div class="container" style="text-align:center; justify-content:center; display:flex;">
        <div class="row" style="padding:30px; margin-top:20px; margin-bottom:20px;">
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/teacher.png" alt="Teacher Logo" width="200px" height="200px;"
                        style="padding:15px;">
                        <hr/>
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="teacher/teachers.php" class="text-primary"  style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">Teachers</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/student.png" alt="Student Logo" width="200px" height="200px;"
                        style="padding:15px;">
                        <hr/>
                    <div class="card-body bg-success" style="margin-top:-10px;">
                        <a href="student/students.php" class="text-primary" style="text-decoration:none; font-weight:bold; font-size:large;font-family:Poppins; color:limegreen; margin-top:-10px;">
                            <p class="card-text !text-primary linkStyle" style="text-align:center; color:white;">Students</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>