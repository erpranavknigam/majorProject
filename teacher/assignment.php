<?php
    session_start();
    include("../dbcon.php")
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
        style="text-align:center; padding: 25px; font-size: 4vw;color:white;font-family:Righteous">Upload Assignment
        <span style="font-size:small;float:right;border:2px ridge ;border-radius:5px;padding: 3px;" class="logout"><a
                href="../logout.php" style="text-decoration:none;color:white;">Logout</a></span>
    </div>
    <br />
    <div class="container">
        <form action="assignment.php" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Title of Assignment"
                        name="name">
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Description"
                        name="description">
                </div>
            </div>
            <div class="form-group row" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Due Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="date">
                </div>
            </div>
            <div class="custom-file" style="margin-top:5px;">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Select File</label>

                <input type="file" class="custom-file-input" id="customFile" name="file">
            </div>

            <div class="form-group row" style="margin-top:5px;">

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Post Assignment</button>
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