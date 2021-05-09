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
    
    $date = $_POST['date'];
    $sDate = Date("Y-m-d");
    
    $sem = $_POST['sem'];
        
        $con = mysqli_connect("localhost","root","","major");
        $qry = "SELECT * FROM `student` WHERE `Id` = '$get_id'";
        $result = mysqli_query($con,$qry);
        $numrows = mysqli_num_rows($result);
        if($numrows != 0) {
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
            }
        }
         
?>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3"
                        name="title" value="<?php echo $title;?>" readonly>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Description"
                        name="name" value="<?php echo $name;?>" readonly required>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Due Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="due_date" value="<?php echo $date;?>" readonly required>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Submitted Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="sub_date" value="<?php echo $sDate;?>" readonly required>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    <select class="option" name="department" value="<?php echo $dept;?>" readonly  required>
                        <option disabled="disabled" selected="selected">--Choose option</option>
                        <option> Computer Science & Engineering</option>
                        <option> Electrical Engineering </option>
                        <option> Civil Engineering</option>
                        <option> Mechanical Engineering </option>
                        <option> Mining Engineering</option>
                    </select><br>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <select class="option" name="sem" value="<?php echo $sem;?>" readonly required>
                        <option disabled="disabled" selected="selected">--Choose option</option>
                        <option value=1> 1st </option>
                        <option value=2> 2nd </option>
                        <option value=3> 3rd </option>
                        <option value=4> 4th </option>
                        <option value=5> 5th </option>
                        <option value=6> 6th </option>
                        <option value=7> 7th </option>
                        <option value=8> 8th </option>
                    </select><br><br>

                </div>
            </div>
            <div class="custom-file" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Select File</label>

                <input type="file" class="custom-file-input" id="customFile" name="file" required>
            </div>

            <div class="form-group row" style="margin-top:5px;">

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="post">Submit Assignment</button>
                </div>
                <br />
                <div class="col-sm-10" style="margin-top: 5px;">
                    <button type="reset" class="btn btn-danger">Reset Details</button>
                </div>

            </div>
        </form>
    </div>
    <?php
        
        if(isset($_POST['post'])){
            
            
            include("../dbcon.php");
            $title = $_POST['title'];
            $name = $_POST['name'];
            $due_date = $_POST['due_date'];
            $sub_date = $_POST['sub_date'];
            
            $dept = $_POST['department'];
            $semester = $_POST['sem']; 
            $file = $_FILES['file']['name'];
            $tmpname = $_FILES['file']['tmp_name'];

            move_uploaded_file($tmpname,"../s_assign_file/$file");
            $qry = "INSERT INTO `subassignment` VALUES('$title','$name','$due_date','$sub_date','$file','$dept','$semester')";
            $run = mysqli_query($con,$qry);
            if ($run == True) {
                ?>
                        <script>
                            alert("Assignment submitted Successfully.");
                            window.open("s-assignment.php?id=<?php echo $get_id;?>",'_self');
                        </script>
                <?php
                    session_reset();
                    session_destroy();
                    session_abort();
                    
                    
                    } else {
                        echo "Error: " . $run . "<br>" . mysqli_error($con);
                    }
        }
    ?>
</body>

</html>