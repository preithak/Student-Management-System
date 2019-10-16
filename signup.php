<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<button type="button" onclick="toggleClass(this,'teacher')">Teacher</button> 
	<button type="button" onclick="toggleClass(this,'student')">Student</button>
	<script >
		
		function toggleClass(e,c) {
    	(e).classList.toggle(c);
		}

	</script>
	<div class="teacher" id="teacher1">
		<form>
			First name:<br>
  			<input type="text" name="firstname" required="">
  			<br>
  			Last name:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Teacher ID:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Department:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Subject:<br>
  			<input type="text" name="lastname" required="">
  			<br>


		</form>
	</div>
	<div class="student">
		<form>
			First name:<br>
  			<input type="text" name="firstname" required="">
  			<br>
  			Last name:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Student ID:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Department:<br>
  			<input type="text" name="lastname" required="">
  			<br>
  			Semester:<br>		
  			<input type="text" name="lastname" required="">

		</form>
	</div>

</body>
</html>