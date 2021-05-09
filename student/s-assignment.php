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
    <div class="jumbotron bg-success"
        style="text-align:center; padding: 15px; font-size: 3vw;color:white;font-family:Righteous">Download and Submit
        Assignment

    </div>
    <br />
    <div class="container  table-responsive">
        <table class="table table-striped table-bordered" style="margin-top:20px;">
            <tr style="text-align:center; color:white" class="bg-primary">
                <th>#</th>
                <th>Title of Notes</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Department</th>
                <th>Semester</th>
                <th>Download<br /> Assignment</th>
                
                <th>Submit<br />Assignment</th>
            </tr>

            <?php
                
                    $con = mysqli_connect("localhost","root","","major");
                    $query = "SELECT * FROM `assignment` WHERE `Department` = '$dept' AND `Semester` = '$sem' ORDER BY `Due` DESC";
                    $result = mysqli_query($con,$query);
                    
                    if (mysqli_num_rows($result) < 1) {

                        echo "<tr><td colspan = '7'>No record Found</td></tr>";
                    } else {
                        $count = 0;
                        
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                            $count++;
                            $title = $data['Title'];
                            $Desc = $data['Description'];
                            $date = $data['Due'];
                            $file = $data['File'];

                ?>
            <form action="s-assignment2.php?id=<?php echo $id;?>" method="POST">

                <tr style="text-align:center;">
                    <td><?php echo $count;?></td>
                    <td><input type="text" name="title" value="<?php echo $title;?>" readonly></td>
                    <td><input type="text" name="desc" value="<?php echo $Desc;?>" readonly></td>
                    <td><input type="text" name="date" value="<?php echo $date;?>" readonly></td>
                    <td><input type="text" name="dept" value="<?php echo $dept;?>" readonly></td>
                    <td><input type="text" name="sem" value="<?php echo $sem;?>" readonly></td>

                    <td>
                        <button class="btn btn-success">
                            <a href="../assignment_file/<?php echo $file;?>" style="text-decoration:none;color:white">
                                Download
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="file" class="btn btn-success" name="upload<?php echo $count;?>">
                            Upload
                        </button>
                    </td>
            </form>
            </td>
            </tr>
            <?php
                        }
                    }
                ?>
        </table>
    </div>
</body>

</html>