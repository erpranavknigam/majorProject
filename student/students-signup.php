<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
    *{
    margin: 0;
    padding: 0;
    }
body{
    
        background-image: url(../images/p.jpg);
        background-position: center;
        background-size: cover;
        font-family: sans-serif;
        margin-top: 40px;
    }
    h1{
        color: white;
        text-align: center;
        font-style: italic;
        padding: 20px;
        width: 40%;
        margin: auto;
        background-color: rgb(0,0,0,0.4);
        padding: 10px;
    }
    h2{
        color: white;
        text-align: center;
        font-style: italic;
        
    }
   
    label{
        color:white;
        font-size: 20px;
        font-style: italic;
    }
    .reg{
        width: 40%;
        margin: auto;
        background-color: rgb(0,0,0,0.4);
        padding: 10px;
    }
    #reg{
        width: 60%;
        margin: auto;
    }
    #name{
        width: 300px;
        outline: 0;
        padding: 5px;
        border: 3px groove;
        border-radius: 3px;
    }
    #sub{
        width: 300px;
        outline: 0;
        padding: 5px;
        border: 3px groove;
        color: white;
        font-size: 18px;
        font-style: italic;
        background-color: #487948;
        border-radius: 3px;

    }
    </style>
	
</head>
<body>
    <h1>STUDENT REGISTRATION</h1>
  
    <div class="reg">
        <form id="reg" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Register Here</h2>
            <label>Full Name</label><br>
            <input type="text" name="name"
             placeholder="Name" id="name">
            <br><br><br>

            <label>Student Id</label><br>
            <input type="student" name="sid"
             placeholder="Student Id" id="name">
            <br><br><br>

            <label>Roll Number</label><br>
            <input type="roll" name="roll"
             placeholder="roll number" id="name">
            <br><br><br>

            <label>Email-Id</label><br>
            <input type="email" name="email"
             placeholder="email id" id="name">
            <br><br><br>

            <label>Password</label><br>
            <input type="password" name="password"
             placeholder="Password" id="name">
            <br><br><br>

            <label>Re-Enter Password</label><br>
            <input type="reenter" name="repassword"
             placeholder="Re-Enter password" id="name">
            <br><br><br>

            <label>Department</label><br>
            <select class="option" name="department">
                <option disabled="disabled" selected="selected">--Choose option</option>
                <option> Computer Science & Engineering</option>
                <option> Electrical Engineering </option>
                <option> Civil Engineering</option>
                <option> Mechanical Engineering </option>
                <option> Mining Engineering</option>
            </select><br><br><br>
            
            <label>semester</label><br>
            <select class="option" name="sem">
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
            
            <button type="submit"
            id="sub" name="submit">Register Here</button>
                
        </form>
        <?php
          if(isset($_POST['submit'])){
            $FullName = $_POST['name']??"";
            $Student = $_POST['sid']??"";
            $RollNo = $_POST['roll']??"";
            $Email = $_POST['email']??"";
            $Password = $_POST['password']??"";
            $RePassword = $_POST['repassword']??"";
            $Department = $_POST['department']??"";
            $Semester = $_POST['sem']??"";
  
            $conn=mysqli_connect('localhost','root','','major');
  
            $query="INSERT INTO `student`(`Id`, `Name`, `Roll`, `Email`, `Password`, `Department`, `Semester`) VALUES ('$Student','$FullName','$RollNo','$Email','$Password','$Department','$Semester')";
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