<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('location:student-dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form UI Design</title>
    <style>
    * {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image: url("../images/login2.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
span a {
	color: #BBB;
}


</style>
    
</head>
<body>
    <div class="form-box">
	<form action="student-dashboard.php" method="post">
	
		<div class="header-text">
			Student Login 
		</div>
		<input type="text" name="user" id="uid" placeholder="Enter Username" required />
        <input type="password" name="password" id="pwd" placeholder="Enter Password" required /> 
		
        <input id="terms" type="checkbox" required> 
        <label for="terms"></label>
        <span>Agree with <a href="#">Terms & Conditions</a></span> 
		<button type="submit" name="submit">login</button>
        
	</form>	

		
	</div>
    </body>
</html>	
<?php
include('../dbcon.php');
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `student` WHERE `user` = '$username' AND `password` = '$password'";
    $run = mysqli_query($con, $qry);
	$row = mysqli_num_rows($run);
    if ($row < 1) {
?>
         <script>
            alert("User does not exists.")
            window.open('students-login.php', '_self');
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($run);

        $id = $data['id'];

        $_SESSION['user'] = $username;
        $_SESSION['uid'] = $id;
        header('location:student-dashboard.php');
    }
}
?>