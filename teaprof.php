<?php
include("mysql.php");
session_start();
	if(!($_SESSION['User']))
	{
		header("location:index.php");
	}
$name=$_SESSION['User'];
$sql="select * from teacherprof";
$run=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($run)){
	if($name==$row['ID'])
	{
		$fname=$row['Name'];
		$dob=$row['Date'];
		$user=$row['ID'];
		$depar=$row['Department'];
		$email=$row['mail'];
		$phone=$row['Contact'];
		$addr=$row['Address'];
	}//if closes here
}//while closes here
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Profile</title>
	<link rel="stylesheet" type="text/css" href="teaprof.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof"> Teacher Profile</h1>
	</div>
	<!--fieldset-->
		<!--legend class="legend">
			<h2>Personal Details</h2></legend-->
	<div class="main-content">		
		<div class="prsnl">
			<h2 class="heading2">Personal Details</h2>
			<table>
			<tr><th><label><b>Name:</b></label></th><td><?php echo $fname;?></td></tr>
			<tr><th><label><b>D.O.B:</b></label></th><td><?php echo $dob;?></td></tr>
			<tr><th><label><b>ID:</b></label></th><td><?php echo $user;?></td></tr>
			<tr><th><label><b>Department:</b></label></th><td><?php echo $depar;?></td></tr>
			<tr><th><label><b>E-mail Id:</b></label></th><td><?php echo $email;?></td></tr>
			<tr><th><label><b>Contact no.:</b></label></th><td><?php echo $phone;?></td></tr>
			<tr><th><label><b>Address:</b></label></th><td><?php echo $addr;?></td></tr>
		</table>
			<div class="bbbb"><form action="teaprofupdate.php">
			<button name="but1" class="button" >Update</button></form>
			</div>
			<div class="bbbb1"><form action="teachgpsd.php">
			<button name="but2" class="button" >Change Password</button></form>
			</div>
		</div>
	<!--/fieldset-->
		<div class="links">
			<ul>
				<h2 class="link1">Links</h2>
			  <li class="dropdown"><a href="intemstu.php" class="dropbtn"><b><p>Student Details</p></a>
			  	 <!--div class="dropdown-content">
	      			<a href="#" class="not2">Link 1</a>
	      			<a href="#" class="not2">Link 2</a>
	      			<a href="#" class="not2">Link 3</a>
	    		</div-->
			  </li>
			  <li><a href="teadetailstea.php"><p>Teacher Details</p></a></li>
			  <li><a href="results/intemresulttea.php"><p>View Results</p></a></li>
			    <li class="dropdown"><a href="#" class="dropbtn"><b><p>Update Results</p></a>
			  	 <div class="dropdown-content">
	      			<a href="results/updresult.php" class="not2"><p>Update by Student</p></a>
	      			<a href="results/intemsubupd.php" class="not2"><p>Update by Subject</p></a>
	    		</div>
			  </li>
			   <!--li><a href="results/intemresulttea.php"><p>View Results</p></a></li-->
			  <!--li><a href="results/updresult.php"><p>Update Results</p></a></li-->
			  <li><a href="intemsub.php"><p>Update Subjects</p></a></li>
			  <li class="dropdown"><a href="#" class="dropbtn"><b><p>Attendance</p></a>
			  	 <div class="dropdown-content">
	      			<a href="atten/intemattentea.php" class="not2"><p>View Attendance</p></a>
	      			<a href="atten/intemupdattend.php" class="not2"><p>Update by Student</p></a>
	      			<a href="atten/intemupdsubatten.php" class="not2"><p>Update by Subject</p></a>
	    		</div>
			  </li>
			  <!--li><a href="#"><p>Contact Us</p></a></li-->
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