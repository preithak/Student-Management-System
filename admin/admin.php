<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['admin']))
	{
		header("location:../index.php");
	}
$id=$_SESSION['admin'];
$sql="select * from admin";
$run=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($run)){
	if($id==$row['ID'])
	{
		$fname=$row['Name'];
		$dob=$row['Date'];
		$user=$row['ID'];
		$email=$row['mail'];
		$phone=$row['Contact'];
		$addr=$row['Address'];
	}//if closes here
}//while closes here
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof"> Admin Profile</h1>
	</div>
	<div class="main-content">		
		<div class="prsnl">
			<h2 class="heading2">Personal Details</h2>
			<table>
			<tr><th><label><b>Name:</b></label></th><td><?php echo $fname;?></td></tr>
			<tr><th><label><b>D.O.B:</b></label></th><td><?php echo $dob;?></td></tr>
			<tr><th><label><b>ID:</b></label></th><td><?php echo $user;?></td></tr>
			<tr><th><label><b>E-mail Id:</b></label></th><td><?php echo $email;?></td></tr>
			<tr><th><label><b>Contact no.:</b></label></th><td><?php echo $phone;?></td></tr>
			<tr><th><label><b>Address:</b></label></th><td><?php echo $addr;?></td></tr>
		</table>
			<div class="bbbb"><form action="adminupd.php">
			<button name="but1" class="button" >Update</button></form>
			</div>
			<div class="bbbb1"><form action="adminchgpsd.php">
			<button name="but2" class="button" >Change Password</button></form>
			</div>
		</div>
	<!--/fieldset-->
		<div class="links">
			<ul>
				<h2 class="link1">Links</h2>
			  <li class="dropdown"><a href="#" class="dropbtn"><b><p>Student Details</p></a>
			  	 <div class="dropdown-content">
	      			<a href="intemstuview.php" class="not2">View Details</a>
	      			<a href="intemstuupd.php" class="not2">Edit Details</a>
	      			<a href="intemstudel.php" class="not2">Delete User</a>
	    		</div>
			  </li>

			  <li class="dropdown"><a href="#" class="dropbtn"><p>Teacher Details</p></a>
			  	 <div class="dropdown-content">
	      			<a href="intemteavieew.php" class="not2">View Details</a>
	      			<a href="intemteaupd.php" class="not2">Edit Details</a>
	      			<a href="intemteadel.php" class="not2">Delete User</a>
	    		</div>
	    	  </li>
			  	
			   <li class="dropdown"><a href="#" class="dropbtn"><b><p>Results</p></a>
			  	 <div class="dropdown-content">
	      			<a href="intemresultadmin.php" class="not2"><p>View Results</p></a>
	      			<a href="intemupdresult.php" class="not2"><p>Update Results</p></a>
	    		</div>
			  </li>

			   <!--li><a href="results/intemresulttea.php"><p>View Results</p></a></li-->
			  <!--li><a href="results/updresult.php"><p>Update Results</p></a></li-->

			  <li><a href="intemsubadmin.php"><p>Update Subjects</p></a></li>
			  <li class="dropdown"><a href="#" class="dropbtn"><b><p>Attendance</p></a>
			  	 <div class="dropdown-content">
	      			<a href="intemattenadmin.php" class="not2"><p>View Attendance</p></a>
	      			<a href="intemupdattenadmin.php" class="not2"><p>Update Attendance</p></a>
	    		</div>
			  </li>

			  <li class="dropdown"><a href="#" class="dropbtn"><b><p>Add User</p></a>
			  	 <div class="dropdown-content">
	      			<a href="tid.php" class="not2"><p>Add Teacher</p></a>
	      			<a href="sid.php" class="not2"><p>Add Student</p></a>
	    		</div>
			  </li>

			  <li><a href="message11.php"><p>Messages</p></a></li>
			  <li><a href="../logout.php"><p>Logout</p></a></li>
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

</body>
</html>