<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['admin']))
	{
		header("location:../index.php");
	}
$id=$_SESSION['id8'];
$depar1=$_SESSION['dep8'];
$found=false;
$sql1="select ID from teacherprof where Department='$depar1'";
$run1=mysqli_query($db,$sql1);
while($row1=mysqli_fetch_array($run1)){
	if($id==$row1['ID'])
	{
		$found=true;
	}
}
if ($found) {
	$sql="select * from teacherprof";
	$run=mysqli_query($db,$sql);
	while($row=mysqli_fetch_array($run)){
		if($id==$row['ID'])
		{
			$fname=$row['Name'];
			$dob=$row['Date'];
			$user=$row['ID'];
			$depar=$row['Department'];
			$email=$row['mail'];
			$phone=$row['Contact'];
			$addr=$row['Address'];
		}//if closes here
	}
}
else{
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect!!')";
	echo"</script>";
	echo"<script>window.open('intemteaupd.php','_self')</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile Update</title>
	<link rel="stylesheet" type="text/css" href="stuprofupdate.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof"> Student Profile</h1>
	</div>
	<fieldset>
		<legend class="legend">
			<h2>Update Details</h2></legend>
		<div class="prsnl">
			<form action="#" method="post">
			<div class="input">
				<table>
					<tr>
				<th><label>Name</label></th>
				<td><input type="text" name="name" value="<?php echo $fname;?>" required=""></td>
			</div>
		</tr>
			<div class="input"><tr>
				<th><label>Date Of Birth</label></th>
				<td><input type="date" name="dob" value="<?php echo $dob;?>" required=""></td></tr>
			</div>
			<div class="input"><tr>
				<th><label>Department</label></th>
				<td><select name="department" required="">
					   <option disabled="" selected></option>
			           <option value="CSE">CSE</option>
			           <option value="ME">ME</option>
			           <option value="CV">CV</option>
			           <option value="EC">EC</option>
			         </select>
			     </td></tr>
			</div>
			<div class="input"><tr>
				<th><label>Email</label></th>
				<td><input type="email" name="email" value="<?php echo $email;?>" required=""></td></tr>
			</div>
			<div class="input"><tr>
				<th><label>Contact</label></th>
				<td><input type="text" name="contact" value="<?php echo $phone;?>" required=""></td></tr>
			</div>
			<div class="input"><tr>
				<th><label>Address</label></th>
				<td><input type="text" name="add" value="<?php echo $addr;?>" required=""></td></tr>
			</div></table>
			<div class="button">
			<center><button type="submit" name="butups" class="button">Update</button></center>
		</div>
	</form>
	<center><form action="admin.php"><button name="butcan1">Cancel</button></form></center>
	<a href="chgteaid.php" class="chgusn">Click here to Change the ID</a>
	</fieldset>
	<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
</body>
</html>
<?php
if(isset($_POST['butups']))
{
  $fname=$_POST['name'];
  $birth=$_POST['dob'];
  $mail=$_POST['email'];
  $address=$_POST['add'];
  $cont=$_POST['contact'];
  $depar=$_POST['department'];
  $update="update teacherprof set Name='$fname',Date='$birth',Department='$depar',mail='$mail',Contact='$cont',Address='$address' where ID='$id' ";
	$run1=mysqli_query($db,$update);
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Teacher Details has been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('admin.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update the details. Try again later.')";
			echo"</script>";
		}
}
			
?>