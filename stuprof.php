<?php
include("mysql.php");
session_start();
	if(!($_SESSION['UserS']))
	{
		header("location:index.php");
	}
$name=$_SESSION['UserS'];
$sql="select * from studentprof";
$run=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($run)){
	if($name==$row['ID'])
	{
		$fname=$row['Name'];
		$dob=$row['Date'];
		$user=$row['ID'];
		$depar=$row['Department'];
		$sem=$row['Semester'];
		$email=$row['mail'];
		$phone=$row['Contact'];
		$addr=$row['Address'];
	}//if closes here
}//while closes here
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" type="text/css" href="stuprof.css">
</head>
<body>
	<div class="main-content">
		<div class="prof1">
		<h1 class="prof">Student Profile</h1>
		</div>
		<!--fieldset>
			<legend class="legend">
				<h2>Personal Details</h2></legend-->
			<div class="prsnl">
				<h2 class="heading2">Personal Details</h2>
				<table>
				<tr><th><label><b>Name:&nbsp&nbsp</b></label></th><td><?php echo $fname;?></td></tr>
				<tr><th><label><b>D.O.B:&nbsp&nbsp</b></label></th><td><?php echo $dob;?></td></tr>
				<tr><th><label><b>ID:&nbsp&nbsp</b></label></th><td><?php echo $user;?></td></tr>
				<tr><th><label><b>Department:&nbsp&nbsp</b></label></th><td><?php echo $depar;?></td></tr>
				<tr><th><label><b>Semester:&nbsp&nbsp</b></label></th><td><?php echo $sem;?></td></tr>
				<tr><th><label><b>E-mail Id:&nbsp&nbsp</b></label></th><td><?php echo $email;?></td></tr>
				<tr><th><label><b>Contact no.:&nbsp&nbsp</b></label></th><td><?php echo $phone;?></td></tr>
				<tr><th><label><b>Address:&nbsp&nbsp</b></label></th><td><?php echo $addr;?></td></tr>
				</table>
				<div class="bbbb"><form action="stuprofupdate.php">
				<button name="but1" class="button" >Update</button></form>
				</div>
				<div class="bbbb1"><form action="stuchgpsd.php">
			<button name="but2" class="button" >Change Password</button></form>
			</div>
			</div>
		<!--/fieldset-->
		<div class="links">
			<ul>
				<h2 class="link1">Links</h2>
			  <li><a href="results/intemresultstu.php"><b><p>Results</p></a></li>
			   <li><a href="teadetailsstu.php"><p>Teacher Details</p></a></li>
			  <li><a href="atten/intemattenstu.php"><p>Attendance</p></a></li>
			  <!--li><a href="contact.php"><p>Contact Us</p></a></li-->
			  <li><a href="logout.php"><p>Logout</p></a></li>
			</ul>
		</div>
	</div>
	<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
</body>
</html>