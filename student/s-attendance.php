<?php
    session_start();
    $get_id = $_GET['id'];

    if(!$get_id){
        header("Location: students-login.php");
    } else{
        echo "";
    }
?>
<html>

<head>
    <title>Online Classroom| Student Dashboard</title>
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

<body onexit="<?php session_abort();?>">
    <?php
        $id = $_GET['id'];
        $con = mysqli_connect("localhost","root","","major");
        $qry = "SELECT * FROM `student` WHERE `Id` = '$id'";
        $result = mysqli_query($con,$qry);
        $numrows = mysqli_num_rows($result);
        if($numrows != 0) {
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $dept = $row['Department'];
                $roll = $row['Roll'];
                $sem  = $row['Semester'];
            }
        }
        
    ?>

    <div class="jumbotron bg-success"
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Welcome To Student's
        Dashboard
        <span style="font-size:small;float:right;border:2px ridge ;border-radius:5px;padding: 3px;" class="logout"><a
                href="../logout.php" style="text-decoration:none;color:white;">Logout</a>
        </span>
    </div>
    <br />
    <div class="container">
        <div class="text-primary"
            style="text-align:center; padding: 10px; font-size: 2vw;font-family:Times;border-radius:5px;">Welcome
            <?php echo $name;?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span style="font-weight: bold;">Name: </span><?php echo "$name";?>
            </div>
            <div class="col-md-6">
                <span style="font-weight: bold;">Department: </span><?php echo "$dept";?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-weight: bold;">Roll Number: </span><?php echo "$roll";?>
            </div>
            <div class="col-md-6">
                <span style="font-weight: bold;">Semester: </span><?php echo "$sem";?>
            </div>
        </div>
    </div>
    <br />
    <hr/>
    <div>
        <?php
            $con = mysqli_connect("localhost","root","","major");
            $qry = "SELECT SUM(Is_Present) FROM `attendance` where `Roll` = '$roll'";
            $res = mysqli_query($con,$qry);
            $data = mysqli_fetch_assoc($res);
            $qury = "SELECT COUNT(DISTINCT(Date)) FROM `attendance` WHERE `Department` = '$dept' AND `Semester` = '$sem'";
            $resu = mysqli_query($con,$qury);
            $d = mysqli_fetch_assoc($resu);
            $c = $d['COUNT(DISTINCT(Date))'];
            
            $count = $data['SUM(Is_Present)'];
            if($c==0){
                echo "No Classes Held<br/>";
                $per = 0;
            } else{
                $per = ($count * 100) / $c;
            }
            if($per >= 75){
                $variable = "Eligible";
                $class = "text-success";
            } else{
                $variable = "Not Eligible";
                $class = "text-danger";
            }
        ?>
        <div style="text-align: center; font-size:3vw;">
            Your attendance percentage is: <span class="<?php echo $class;?>" style="font-weight: bolder;"><?php printf("%.2f",$per);?></span> and<br>
            You are <span class="<?php echo $class;?>" style="font-weight: bolder;"><?php echo $variable;?></span> for the exam.
        </div>
    </div>
    <hr/>
</body>

</html>