<!DOCTYPE html>
<html>
<head>
	<title> Student Signup</title>
	<link rel="stylesheet" type="text/css" href="stusignup.css">
</head>
<body>
	<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="teasignup.php">Teacher Signup</a></li>
   <li><a class="active" href="#register">Student Signup</a></li>
  <!--li><a href="#contact">Contact Us</a></li>
  <li><a href="#about">About</a></li-->
</ul>
	<fieldset class="fieldset">
		<legend><b>Student Registration</legend>
	<div class="teacher">
		<form action="#" method="post">
			 Name:<br>
        <input type="text" name="name" required="" placeholder="Your first name here">
        <br>
        Date of Birth<br>
        <input type="date" name="dob" required="" placeholder="Your last namehere">
        <br>
        Student ID:<br>
        <input type="text" name="id" required="" placeholder="Your ID here">
        <br>
        Department:<br>
        <select name="department">
          <option value="none">Select Department</option>
          <option value="CSE">CSE</option>
           <option value="ME">ME</option>
           <option value="CV">CV</option>
          <option value="EC">EC</option>
       </select>
        <br>
        Semester:<br>
         <select name="sem" >
          <option value="none">Select Semester</option>
          <option value="1">First Semester</option>
          <option value="2">Second Semester</option>
          <option value="3">Third Semester</option>
          <option value="4">Fourth Semester</option>
          <option value="5">Fifth Semester</option>
          <option value="6">Sixth Semester</option>
          <option value="7">Seventh Semester</option>
          <option value="8">Eigth Semester</option>
       </select>
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
        <button type="submit" name="but2" class="button">Register</button>
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
if(isset($_POST['but2']))
{
  $fname=$_POST['name'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $add=$_POST['add'];
  $user=$_POST['id'];
  $sem=$_POST['sem'];
  $contact=$_POST['contact'];
  $depar=$_POST['department'];
  $pass=$_POST['psd'];
  $cpsd=$_POST['cpsd'];
  $sid=1;
  $found=true;
  $uset=0;//for username
  $umail=0;//for mail
  $error=0;//for password
  $value1="select * from sid";
  $result1=mysqli_query($db,$value1);
  while($row1=mysqli_fetch_array($result1)){
    $id1=$row1['ID'];
    if($user==$id1){
      $sid=0;
    }
  }
 $value="select * from studentprof";
  $result=mysqli_query($db,$value);
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
  if($sid)
  {
  echo"<script type='text/javascript'>";
    echo"alert('ID Invalid!!!.')";
    echo"</script>";  
    $found=false;
  }//ID not present
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
  }
  if($sem=='none'){
    echo"<script type='text/javascript'>";
    echo"alert('Please select Semester')";
    echo"</script>";
    $found=false;
  }
  if($found)
  {
    $insert="insert into studentprof values('$fname','$dob','$user','$depar','$sem','$email','$contact','$add','$pass')";
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