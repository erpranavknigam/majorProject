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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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
    <form action="attendance.php" method="get">

        <div class="container container-fluid table-responsive">
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="date" required>
                </div>
            </div>
            <table class="table table-striped table-bordered" width="45%" style="margin-top:20px;">
                <tr style="text-align:center; color:white" class="bg-primary">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Is Present</th>
                    <th>Is Absent</th>
                </tr>
                <tr>
                    <td>
                        <?php
                        
                if (isset($_GET['fetch'])) {
                    include('../dbcon.php');
                    $dept = $_GET['department'];
                    $sem = $_GET['sem'];
                    $qry = "SELECT * FROM `student` WHERE `Department` = '$dept' AND `Semester` = '$sem'";
                    $run = mysqli_query($con, $qry);
                    if (mysqli_num_rows($run) < 1) {
                        echo "<tr><td colspan = '7'>No record Found</td></tr>";
                    } else {
                        $count = 0;
                        while ($data = mysqli_fetch_assoc($run)) {
                            $count++;
                ?>

                <tr class="tablestyle">
                    <td><?php echo $count ?></td>
                    <td><input type="text" value="<?php echo $data['Name']; ?>" name="name<?php echo $count?>"  readonly></td>
                    <td><input type="text" value="<?php echo $data['Roll']; ?>" name="roll<?php echo $count?>"  readonly></td>
                    <td><input type="text" value="<?php echo $data['Department']; ?>" name="dept<?php echo $count?>" readonly>
                    </td>
                    <td><input type="text" value="<?php echo $data['Semester']; ?>" name="sem<?php echo $count?>" readonly></td>
                    <td>

                        <input type="radio" name="is_present<?php echo $count;?>" value="1">

                    </td>
                    <td>

                        <input type="radio" name="is_present<?php echo $count;?>" value="0">

                    </td>

                </tr>
                <?php
                

                        }
                    }
                }
                
                ?>
                </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:center">
                        <div class="form-group row" style="margin-top:5px;">

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit">Submit Details</button>
                            </div>
                            <br />
                            <div class="col-sm-10" style="margin-top: 5px;">
                                <button type="reset" class="btn btn-danger">Reset Details</button>
                            </div>

                        </div>
                    </td>
                </tr>

            </table>
        </div>
    </form>
    <?php
        if(isset($_GET['submit'])){
            
        
        include('../dbcon.php');
        $res = mysqli_query($con,"SELECT count(1) FROM `student`");
        $row = mysqli_fetch_array($res);
        $total = $row[0];
        
        $i = 1;
        $Date = $_GET['date'];
        while($i <= $total){
            $Name = $_GET['name'.$i]??"";
            $Dept = $_GET['dept'.$i]??"";
            $Roll = $_GET['roll'.$i]??"";
            $Sem = $_GET['sem'.$i]??"";
            $isPresent = $_GET['is_present'.$i]??"";
           
            
            $query = "INSERT INTO `attendance` VALUES('$Name','$Roll','$Dept','$Sem','$isPresent','$Date')";
            $result = mysqli_query($con, $query);
            $i++;
        }
        if($result == true) {
            ?>
            <script>
            alert("Attendance Submitted Successfully");
            </script>
            <?php
            
        }else {
            ?>
         <script>alert("Some Error Occured");</script>

            <?php
        }
    } 
    ?>
</body>

</html>