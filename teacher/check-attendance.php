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
            if(isset($_POST['fetch'])){
                $con = mysqli_connect("localhost","root","","major");
                $query = "SELECT `Date` FROM `attendance` WHERE WHERE `Department` = '$dept' AND `Semester` = '$sem' GROUP BY `Date`";
                
            }
        ?>
        <table class="table table-striped table-bordered" width="45%" style="margin-top:20px;">
            <tr style="text-align:center; color:white" class="bg-primary">
                <th>No.</th>
                <th>Name</th>
                <th>Roll No.</th>
                <th>Total Attended</th>
            </tr>
            <tr>
                <td>
                    <?php
                        
                if (isset($_GET['fetch'])) {
                    $con = mysqli_connect("localhost","root","","major");
                    $dept = $_GET['department'];
                    $sem = $_GET['sem'];
                    $qry = "SELECT * FROM `attendance` WHERE `Department` = '$dept' AND `Semester` = '$sem' GROUP BY `Roll`";
                    $result = mysqli_query($con,$qry);
                    
                    if (mysqli_num_rows($result) < 1) {

                        echo "<tr><td colspan = '7'>No record Found</td></tr>";
                    } else {
                        $count = 0;
                        while ($data = mysqli_fetch_assoc($result)) {
                            
                            $count++;
                ?>

            <tr class="tablestyle">
                <td><?php echo $count ?></td>
                <td><?php echo $data['Name']?></td>
                <td><?php echo $data['Roll']?></td>
                <td><?php echo "";?></td>
                <!-- <td><?php echo $data['Is_Present']?></td> -->
                
                
            </tr>
            <?php
                

                        }
                    }
                }
                
                ?>
            </td>
            </tr>