<!DOCTYPE html>
<html>
<head>
	<title> Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="teasignup.css">
</head>
<body>
	<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#contact">Contact Us</a></li>
  <li><a href="#about">About</a></li>
</ul>
	<fieldset class="fieldset">
		<legend><b>Admin Registration</legend>
	<div class="teacher">
		<form action="#" method="post">
			Name:<br>
  			<input type="text" name="name" required="" placeholder="Your first name here">
  			<br>
  			Date of Birth<br>
  			<input type="date" name="dob" required="" placeholder="Your last namehere">
  			<br>
  			Admin ID:<br>
  			<input type="text" name="id" required="" placeholder="Your ID here">
  			<br>
  			Email Id:<br>
        	<input type="text" name="email" required="" placeholder="Your  mail here">
        	<br>
  			Contact No :<br>
        	<input type="text" name="contact" required="" placeholder="Your  contact here">
        	<br>
        	Address:<br>
  			<input type="text" name="add" required="" placeholder="Your address here">
  			<br>
        	Password: <br>
        	<input type="password" name="psd" required="" placeholder="Your  password here">
        	<br>
        	Confirm Password: <br>
        	<input type="password" name="cpsd" required="" placeholder="Confirm password">
        	<br>
  			<button type="submit" name="but1" class="button">Register</button>
		</form>
	</div>
	</fieldset>
	<div class="footer">
		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
</body>
</html>
<?php
include("mysql.php");
if(isset($_POST['but1']))
{
  $fname=$_POST['name'];
  $dob=$_POST['dob'];
  $user=$_POST['id'];
  $email=$_POST['email'];
  $cont=$_POST['contact'];
  $add=$_POST['add'];
  $pass=$_POST['psd'];
  $cpsd=$_POST['cpsd'];
  $value="select * from admin";
  $result=mysqli_query($db,$value);
$found=true;
$uset=0;//for username
$umail=0;//for mail
$error=0;//for password
while($row=mysqli_fetch_array($result))
{
  $name=$row['ID'];
  $mail=$row['mail'];
  if ($user==$name) {
    $found=false;
    $uset=1;

  }//if closed
  if ($email==$mail) {
    $found=false;
    $umail=1;
  }//if closed
}//while closed
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
  echo"<script type='text/javascript'>";
  echo"alert('Only letters and white space allowed')";
  echo"</script>";  
  $found=false;
}//for checking the name
if (!preg_match('/^[0-9]*$/', $cont)) {
       echo"<script type='text/javascript'>";
  echo"alert('Enter correct number')";
  echo"</script>";  
  $found=false;
    }//for checking number
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo"<script type='text/javascript'>";
  echo"alert('Invalid Email Format')";
  echo"</script>";  
  $found =false;
}//checking email
if($pass!=$cpsd)
{
  $found=false;
  $error=1;
}//comp if closed(for password)
if($uset)
{
echo"<script type='text/javascript'>";
  echo"alert('ID already used.')";
  echo"</script>";  
}//uset closed(for username error)
if($umail)
{
  echo"<script type='text/javascript'>";
  echo"alert('Email already used')";
  echo"</script>";
}//umail closed(email error)
if($error){
  echo"<script type='text/javascript'>";
  echo"alert('Opps! Password didnot match.')";
  echo"</script>";
}//error for password
if($depar=='none'){
  echo"<script type='text/javascript'>";
  echo"alert('Please select Department')";
  echo"</script>";
  $found=false;
}//for department
if($found)
{
  $insert="insert into admin values('$fname','$dob','$user','$email','$cont','$add','$pass')";
  $run=mysqli_query($db,$insert);
  if($run)
  {
    echo"<script type='text/javascript'>";
    echo"alert('Registered Successfully! Please Log in!')";
    echo"</script>";
    echo"<script>window.open('index.php','_self')</script>";
  }//run close
}//found if closed
}//main if closed
?>