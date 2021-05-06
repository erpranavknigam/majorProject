<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type = "text/css" href = "css/style.css">
	<style>
		* {
    margin: 0;
    padding: 0;
}

body {
    background-image: url(../images/k.jpg);
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin-top: 40px;
}

.regform {
    width: 800px;
    background-color: rgb(0, 0, 0, 0.6);
    margin: auto;
    color: #FFFFFF;
    padding: 10px 0px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 0px 0px;
}

.main {
    background-color: rgb(0, 0, 0, 0.5);
    width: 800px;
    margin: auto;
}

form {
    padding: 10px;
}

#name {
    width: 100%;
    height: 100px;
}

.name {
    margin-left: 25px;
    margin-top: 25px;
    width: 125px;
    color: white;
    font-size: 23px;
    font-weight: 700;
}

.firstname {
    position: relative;
    left: 200px;
    top: -40px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.username {
    position: relative;
    left: 200px;
    top: -40px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.email {
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.password {
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

button {
    background-color: #3BAF9F;
    display: block;
    margin: 20px 0px 0px 20px;
    text-align: center;
    border-radius: 12px;
    border: 2px solid #366473;
    padding: 14px 110px;
    outline: none;
    color: white;
    cursor: pointer;
    transition: 0.25px;
}

button:hover {
    background-color: #5390F5;
}


/* button:hover {
    background-color:
} */
	</style>
</head>
<body>
	<div class="regform"><h1> TEACHER REGISTRATION </h1></div>
	<div class="main">
		<form id="main" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div id="name">
				<h2 class="name">NAME</h2>
				<input class="firstname" type="text" name="first_name"><br>
				
			</div>

			<h2 class="name">Teacher-ID</h2>
			<input class="username" type="text" name="username">

			<h2 class="name">Email-id</h2>
			<input class="email" type="text" name="email">

			<h2 class="name">Password</h2>
			<input class="password" type="text" name="password">

			


					<button type="submit" name="submit">Register</button>


			
		</form>

        <?php 
             if(isset($_POST['submit'])){
                $Name = $_POST['first_name']??"";
                $TeacherId = $_POST['username']??"";
                $EmailId = $_POST['email']??"";
                $Password = $_POST['password']??"";
              

                $conn=mysqli_connect('localhost','root','','major');

                $query="INSERT INTO `teacher`(`Teacher Id`, `Name`, `Email`, `Password`) VALUES ('$TeacherId','$Name','$EmailId','$Password')";
                $run=mysqli_query($conn,$query);
                if($run==True){
              ?>      
                   <script>
                     alert("Your are Registered Successfully");
                   </script>
                   <?php
                }
      
                  else{
                      echo "Error: " .$run."<br>" .mysqli_error($conn);
                  }
              }
             
        ?>
        
	</div>
</body>
</html>