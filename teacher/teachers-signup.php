<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type = "text/css" href = "css/style.css">
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