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
	<link rel="stylesheet" type="text/css" href="teaprofupdate.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof"> Teacher Profile</h1>
	</div>
	<fieldset>
		<legend class="legend">
			<h2>Update Details</h2></legend>
		<div class="prsnl">
			<form action="teaprofupdate.php" method="post">
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
				<td><select name="department" placeholder="Department">
					   <option value="none">Select Department</option>
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
			<center><button type="submit" name="but1" class="button">Update</button></center>
			</div>
	</form>
	<center><form action="teaprof.php"><button name="but2">Cancel</button></form></center>
	</fieldset>
	<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
	
</body>
</html>
<?php
if(isset($_POST['but1']))
{
	$fname=$_POST['name'];
	$birth=$_POST['dob'];
	$depar=$_POST['department'];
	$mail=$_POST['email'];
	$cont=$_POST['contact'];
	$address=$_POST['add'];
	$found=true;
 	if ($depar=='none') {
  		$found=false;
  	}
  	if ($found) {		
		$update="update teacherprof set Name='$fname',Date='$birth',Department='$depar',mail='$mail',Contact='$cont',Address='$address' where ID='$name' ";
		$run1=mysqli_query($db,$update);
		if($run1)
			{
				echo"<script type='text/javascript'>";
				echo"alert('Your Personal Details has been updated Successfully!!')";
				echo"</script>";
				echo"<script>window.open('teaprof.php','_self')</script>";
			}
		else{

				echo"<script type='text/javascript'>";
				echo"alert('Sorry! couldnot update your details. Try again later')";
				echo"</script>";
			}
	}
	else{
		echo"<script type='text/javascript'>";
		echo"alert('Select correct department')";
		echo"</script>";
	}

			
}

