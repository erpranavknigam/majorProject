<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type = "text/css" href = "css/style.css">
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