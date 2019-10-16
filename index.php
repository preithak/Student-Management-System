
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!--div class="header"-->
		<!--h1>Student Information System</h1-->
	<!--/div-->
	<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="about.php">About</a></li>
</ul>
	<div class="banner">
		<div class="box">
			<h1>Student Information System</h1>
		</div>
	</div>
	<div class="auto">

	<div class="adminlog">
		<h1>Admin Login</h1>
		<form action="admin/validate.php" method="post">
		<div class="input">
			<label><b>Enter ID&nbsp</b></label> 
			<input type="text" name="idad" required="">
		</div>
		<div class="input">
			<label><b>Password</b></label> 
			<input type="Password" name="pswdad" required="">
		</div>
		<div class="input">
		<button type="submit" name="butad">Log in</button>
		</div>
		</form>
	</div>

	<div class="about">
	<h1>About</h1>
	<p class="abt">Student information system (SIS) is a management information system for education establishments to manage student data in an easy way. This system is designed as a co-system to ease the access of various student data. Student information systems provide capabilities for the registering students in courses, tracking the student attendance, documenting grading, results of student tests in an institution. </p>
	</div>

	<div class="userlog">
		<h1>User  Login</h1>
		<form action="connect.php" method="post">
		<div class="input">
			<label><b>Enter ID&nbsp</label> 
			<input type="text" name="id" required="">
		</div>
		<div class="input">
			<label>Password </label> 
			<input type="Password" name="psd" required="">
		</div>
		<div class="input">
			Type:
			<input type="radio" class="radio1" name="usertype" value="teacher" >Teacher
			<input type="radio" class="radio1" name="usertype" value="student" >Student
			<button type="submit" name="but1">Log in</button>
			<div class="signup"><p>Signup. <a class="signup" href="stusignup.php">Student</a>
									/	<a class="signup" href="teasignup.php">Teacher</a>
			</p></div>
			</div>
		</div>
		</form>
	</b>
	</div>
	<div class="footer">
		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
</body>
</html>
