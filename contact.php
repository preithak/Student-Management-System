<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active"  href="contact.php">Contact Us</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<fieldset>
<!--section class="sec">
	<h2 class="upd"--><legend>Enter Details</legend><!--/h2-->
	<form action="#" id="usrform" method="post">
	<div>
		<p>Enter ID:<br>
		<input type="text" name="id" required="">
		</p>
		<p>Enter Email:<br>
		<input type="email" name="mail" required="">
		</p>
	</div>
	Enter Comment:<br>
	<textarea name="com" form="usrform" placeholder="Enter comments..." required=""></textarea><br>
	Note:Comments can be of only 150 characters<br>
	<button type="submit" name="butc">Submit</button>
</form>
</fieldset>
<!--/section-->
<!--div class="dev">
	<section class="sec">
			To contact developers:<br>

			<p>Mail: preithak24@gmail.com<br></p>
			<p>Contact No.: 7892980641</p>

	</section-->
</div>
<section class="dev">
		<div class="bye">
			<br>
		&nbsp&nbspDeveloped and maintained by:&nbsp Preithak Shrestha & Pradeep Thapa.<br><div class="sitecredit"> 2017 @ All Rights Reserved | </div>
		&nbsp&nbspMail ID:&nbsp  preithak24@gmail.com<br><div class="designcredit">Student Information System</div>
		&nbsp&nbspContact No.:&nbsp  7892980641, 8217665423<br>
		</div>
	</section>
</body>
</html>


<?php
include("mysql.php");
if(isset($_POST['butc']))
{
	$num=mt_rand(01,1000);
	$id=$_POST['id'];
	$mail=$_POST['mail'];
	$com=$_POST['com'];
	$post="INSERT INTO `comments`(`number`, `ID`, `mail`, `Comments`) VALUES ('$num', '$id', '$mail', '$com')";
	$run1=mysqli_query($db,$post);
	if($run1){
			echo"<script type='text/javascript'>";
			echo"alert('Comment has been posted Successfully!!')";
			echo"</script>";
			echo"<script>window.open('index.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! Coundn't post the comments. Try again later')";
			echo"</script>";
		}
}
?>