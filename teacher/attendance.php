<?php
session_start();
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
    <div class="jumbotron bg-success"
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Attendance
        <span style="font-size:small;float:right;border:2px ridge ;border-radius:5px;padding: 3px;" class="logout"><a
                href="../logout.php" style="text-decoration:none;color:white;">Logout</a></span>
    </div>
    <br />
    <div class="container">
        <form action="" method="post">
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    <select class="option" name="department" required>
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
                    <select class="option" name="sem" required>
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
            <div class="form-group row" style="margin-top:5px;">

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="fetch">Fetch Details</button>
                </div>
                <br />
                <div class="col-sm-10" style="margin-top: 5px;">
                    <button type="reset" class="btn btn-danger">Reset Details</button>
                </div>

            </div>
        </form>
    </div>
    <br />
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Select Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" name="date" required>
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <?php
                    if(isset($_POST['fetch'])){
                        
                        $dept = $_POST['department'];
                        $sem =  $_POST['sem'];
                        $conn=mysqli_connect('localhost','root','','major');
                        
                        $qry = "SELECT `Name`,`Roll` FROM `student` WHERE (`Department` = '$dept' AND `Semester` = '$sem')";
                        
                        $result = mysqli_query($conn,$qry);
                        
                        
                        if((mysqli_num_rows($result) > 0)) {
                ?>
                <table class="table table-bordered table-striped">
                    <tr class="bg-success" style = "color:white; text-align:center;">
                        <td>Name</td>
                        <td>Roll No</td>
                        <td>Is Present</td>
                        <td>Is Absent</td>
                    </tr>
                    <?php
                            $i = 0;
                            while($row = mysqli_fetch_assoc($result)) {
                                $name = $row['Name'];
                                $roll = $row['Roll'];
                                ?>
                    <tr>
                        <td><?php echo $row['Name'];?></td>
                        <td><?php echo $row['Roll'];?></td>
                        <td style="text-align:center;"><input type="checkbox" name="is_present<?php echo $roll?>" value="1"></input></td>
                        <td style="text-align:center;"><input type="checkbox" name="is_present<?php echo $roll?>" value="0"></input></td>
                    </tr>
                    <?php
                                $i++;
                            }
                        ?>
                </table>

                <?php
                        }
                        else{
                            echo "No Data Found";
                        }
                ?>
                <?php
                    }  
                    
                ?>
            </div>
            <div class="form-group row" style="margin-top:5px;">

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Submit Details</button>
                </div>
                <br />
                <div class="col-sm-10" style="margin-top: 5px;">
                    <button type="reset" class="btn btn-danger">Reset Details</button>
                </div>

            </div>
        </form>
    </div>
    

</body>

</html>
<?php
        if(isset($_POST['submit'])){
            $date = $_POST['date'];
            $is_present = $_POST['is_present'];
            $name = $_REQUEST['Name'];
            $dept = $_REQUEST['Department'];
            $roll = $_REQUEST['Roll'];
            $sem = $_REQUEST['Semester'];
            $conn=mysqli_connect('localhost','root','','major');
                        
            $qry = "INSERT INTO `attendance` VALUES('$name','$roll','$dept','$sem','$is_present','$date')";
            $run=mysqli_query($conn,$qry);
            if($run==true){
            ?>
            
            <script>alert("Data Submitted Successfully");</script>
            <?php        
        } else{
            ?>
            <script>alert("Some Error Occured");</script>
            <?php
        }
    }
    ?>