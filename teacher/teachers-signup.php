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
    top: -37px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
}

.lastname {
    position: relative;
    left: 417px;
    top: -80px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.firstlabel {
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 14px;
    left: 203px;
    top: -45px;
}

.lastlabel {
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 14px;
    left: 175px;
    top: -45px;
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

.conpassword {
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

.code {
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 95px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.number {
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 255px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}

.area_code {
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 16px;
    left: 54px;
    top: -4px;
}

.phone-number {
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 16px;
    left: -100px;
    top: -2px;
}

#coustomer {
    margin-left: 25px;
    color: white;
    font-size: 18px;
}

.radio {
    display: inline-block;
    padding-right: 70px;
    font-size: 15px;
    margin-left: 25px;
    margin-top: 15px;
    color: white;
}

.radio input {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    cursor: pointer;
    outline: none;
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
		<form action="connect.php" method="post">
			<div id="name">
				<h2 class="name">NAME</h2>
				<input class="firstname" type="text" name="first_name"><br>
				<label class="firstlabel">FIRST NAME</label>
				<input class="lastname" type="text" name="last_name">
				<label class="lastlabel">LAST NAME</label>
			</div>

			<h2 class="name">Teacher-ID</h2>
			<input class="username" type="text" name="username">

			<h2 class="name">Email-id</h2>
			<input class="email" type="text" name="email">

			<h2 class="name">Password</h2>
			<input class="password" type="text" name="password">

			<h2 class="name">*Conform-Password</h2>
			<input class="conpassword" type="text" name="conpassword">

			<h2 class="name">Phone Number</h2>
			<input class="code" type="text" name="area_code">
			<lable class="area_code">Area Code</lable>
			<input class="number" type="text" name="phone">
			<label class="phone-number">Phone Number</label>

			<h2 id="coustomer">GENDER</h2>

			<label class="radio">
				<input class="radio-one" type="radio" checked="checked" name="">
				<span class="checkmark"></span>
				Male
				</label>
				<label class="radio">
					<input class="radio-two" type="radio" checked="checked" name="">
					<span class="checkmark"></span>
					Female
				</label>

					<button type="submit">Register</button>


			
		</form>
	</div>
</body>
</html>