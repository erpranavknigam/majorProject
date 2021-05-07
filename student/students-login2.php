<?php
    if(isset($_POST['login'])){
        $id = $_POST['uname'];
        $pass = $_POST['password'];

        if($id && $pass){
            $con = mysqli_connect("localhost","root","","major");
            if($con) {
                echo "";
            } else {
                echo "Connection Error";
            }
            $qry = "SELECT * FROM `student` WHERE `Id` = '$id'";

            $result = mysqli_query($con,$qry);
            $numrows = mysqli_num_rows($result);

            if($numrows != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    $dbid = $row['Id'];
                    $dbpass = $row['Password'];
                }
                if($id==$dbid && $pass==$dbpass){
                    header("Location:student-dashboard.php?id=$id");
                } else{
                    header("Location:students-login.php",'_self');
                    echo "Either Id or Password is Wrong";
                    
                }
            } else{?>
                <script>
                alert("No User Exists");
                window.open("students-login.php",'_self');
                </script>
                <?php
            }
        } else {
            echo "Please Enter the data";
        }
    }
?>