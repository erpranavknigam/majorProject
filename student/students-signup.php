<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
    *{
    margine: 0;
    padding: 0;
    }
body{
    
        background-image: url(p.jpg);
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
        <form id="reg" method="post" action="..php">
            <h2>Register Here</h2>
            <label>Full Name</label><br>
            <input type="text" name="name"
             placeholder="Name" id="name">
            <br><br><br>

            <label>Student Id</label><br>
            <input type="student" name="name"
             placeholder="Student Id" id="name">
            <br><br><br>

            <label>Roll Number</label><br>
            <input type="roll" name="name"
             placeholder="roll number" id="name">
            <br><br><br>

            <label>Email-Id</label><br>
            <input type="email" name="name"
             placeholder="email id" id="name">
            <br><br><br>

            <label>Password</label><br>
            <input type="password" name="name"
             placeholder="Password" id="name">
            <br><br><br>

            <label>Re-Enter Password</label><br>
            <input type="reenter" name="name"
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
            <select class="option" name="department">
                <option disabled="disabled" selected="selected">--Choose option</option>
                <option> 1st </option>
                <option> 2nd </option>
                <option> 3rd </option>
                <option> 4th </option>
                <option> 5th </option>
                <option> 6th </option>
                <option> 7th </option>
                <option> 8th </option>
            </select><br><br>
            
            <button type="submit"
            id="sub">Register Here</button>
                
        </form>
    </div>
</body>
</html>