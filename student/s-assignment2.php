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
    <title>Assignment Submission</title>
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
<div class="jumbotron bg-success"
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Welcome To Student's
        Dashboard
        <span style="font-size:small;float:right;border:2px ridge ;border-radius:5px;padding: 3px;" class="logout"><a
                href="../logout.php" style="text-decoration:none;color:white;">Logout</a>
        </span>
    </div>
    <div class="jumbotron bg-success"
        style="text-align:center; padding: 15px; font-size: 3vw;color:white;font-family:Righteous">Download and Submit
        Assignment

    </div>
    <br />
    
    <?php
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $sDate = Date("Y-m-d");
    $dept = $_POST['dept'];
    $sem = $_POST['sem'];
    $file = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmpname,"../s_assign_file/$file");
    echo $get_id;
        echo "<br/>";
        echo $title;
        echo "<br/>";
        echo $desc;
        echo "<br/>";
        echo $date;
        echo "<br/>";
        echo $sDate;
        echo "<br/>";
        echo $dept;
        echo "<br/>";
        echo $sem;
        echo "<br/>";
        echo $file;
        echo "<br/>";
        echo $tmpname;
        echo "<br/>";
        $con = mysqli_connect("localhost","root","","major");
        $qry = "SELECT * FROM `student` WHERE `Id` = '$get_id'";
        $result = mysqli_query($con,$qry);
        $numrows = mysqli_num_rows($result);
        if($numrows != 0) {
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
            }
        }
        echo $name;
    
    // if(isset($_POST['post'])){
       
    //     $file = $_FILES['file']['name'];
    //     $tmpname = $_FILES['file']['tmp_name'];
    //     move_uploaded_file($tmpname,"../s_assign_file/$file");
    //     $con = mysqli_connect("localhost","root","","major");
    //     $qry = "INSERT INTO `subAssignment` VALUES('$title','$name','$date','$sDate','$file','$dept','$sem')";
    //     $run = mysqli_query($con,$qry);
    //     echo $get_id;
    //     echo "<br/>";
    //     echo $title;
    //     echo "<br/>";
    //     echo $desc;
    //     echo "<br/>";
    //     echo $date;
    //     echo "<br/>";
    //     echo $sDate;
    //     echo "<br/>";
    //     echo $dept;
    //     echo "<br/>";
    //     echo $sem;

        // if ($run == True) {
        //     ?>
        <!-- //             <script>
        //                 alert("Assignment Submitted Successfully.");
        //                 window.open("s-assignment.php?id=<?php echo $get_id;?>",'_self');
        //             </script> -->
        //     <?php
                
        //         } else {
        //             echo "Error: " . $run . "<br>" . mysqli_error($con);
        //         }
     //}
?>
</body>

</html>