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
    <div class="container container-fluid table-responsive">

        <?php
                    if(isset($_GET['fetch'])){
                        $con = mysqli_connect("localhost","root","","major");
                        $dept = $_GET['department'];
                        $sem = $_GET['sem'];
                        $qury = "SELECT COUNT(DISTINCT(Date)) FROM `attendance` WHERE `Department` = '$dept' AND `Semester` = '$sem'";
                        $res = mysqli_query($con,$qury);
                        $d = mysqli_fetch_assoc($res);
                        $c = $d['COUNT(DISTINCT(Date))'];
                        }
                           
                    ?>
        <div class="container bg-primary" style="color:white;font-weight:bolder;">
            <div class="row">
                <div class="col-md-6">
                    <p style="text-align:center;font-size:14px;">Department = <?php echo $dept??"fill details above";?></p>
                </div>
                <div class="col-md-6">
                    <p style="text-align:center;font-size:14px;">Semester = <?php echo $sem??"fill details above";?></p>
                </div>
            </div>
        </div>
        <p style="text-align:center;font-size:22px;">Total Classes = <?php echo $c??"fill details above";?></p>

        <table class="table table-striped table-bordered" width="45%" style="margin-top:20px;">
            <tr style="text-align:center; color:white" class="bg-primary">
                <th>No.</th>
                <th>Name</th>
                <th>Roll No.</th>
                <th>Total Attended</th>
                <th>Percentage</th>
            </tr>
            <tr>

                <td>
                    <?php
                     
                if (isset($_GET['fetch'])) {
                    $con = mysqli_connect("localhost","root","","major");
                    $dept = $_GET['department'];
                    $sem = $_GET['sem'];
                    $qry = "SELECT COUNT(DISTINCT(Date)),`Name`,`Roll`,SUM(Is_Present) FROM `attendance` WHERE `Department` = '$dept' AND `Semester` = '$sem' GROUP BY `Roll`";
                    $result = mysqli_query($con,$qry);
                    
                    if (mysqli_num_rows($result) < 1) {

                        echo "<tr><td colspan = '7'>No record Found</td></tr>";
                    } else {
                        $count = 0;
                        
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                            
                            $count++;
                            $name = $data['Name'];
                            $roll = $data['Roll'];
                            $pre = $data['SUM(Is_Present)'];
                            $dates = $data['COUNT(DISTINCT(Date))']
                            
                ?>

            <tr class="tablestyle" style="text-align:center;">

                <td><?php echo $count ?></td>
                <td style="text-align:left;"><?php echo $name?></td>
                <td><?php echo $roll?></td>
                <td><?php echo $pre?></td>
                <td>
                    <?php
                    $percent = ($pre * 100 ) / $c;
                    echo "$percent %";
                ?>
                </td>


            </tr>
            <?php
                

                        }
                    }
                }
                
                ?>
            </td>
            </tr>
        </table>
    </div>
    <br>
    <div class="col-sm-10" style="text-align:center">
        <button type="submit" class="btn btn-primary" onclick="dwnld();">Download Details</button>
    </div>
    <script>
        function dwnld() {
            window.print();
        }
    </script>
</body>

</html>