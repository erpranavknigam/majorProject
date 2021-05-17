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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
        .container{
            border:3px ridge green; 
        }
       
        @media screen and (max-width: 550px) {
            .container{
                border: none;
            }
        }
        .ml4 {
  position: relative;
  font-weight: 900;
  font-size: 4.5em;
}
.ml4 .letters {
  position: absolute;
  margin: auto;
  left: 0;
  top: 0.3em;
  right: 0;
  opacity: 0; 
}
    </style>
</head>

<body onexit="<?php session_abort();?>">
    <h1 class="ml4">
     <span class="letters letters-1">Ready</span>
     <span class="letters letters-2">Set</span>
     <span class="letters letters-3">Go!</span>
    </h1>
    <script>
        var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 500
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
