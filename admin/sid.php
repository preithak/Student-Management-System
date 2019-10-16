<?php
include("../mysql.php");
session_start();
if(!($_SESSION['admin'])){
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="../teaprofupdate.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Add Student</h1>
	</div>
	<fieldset>
		<legend class="legend">
			<h2>Enter Details</h2></legend>
		<div class="prsnl">
			<form action="#" method="post">
			<div class="input">
				<table>
					<tr>
				<th><label>Enter ID</label></th>
				<td><input type="text" name="id"  required=""></td>
			</div>
		</tr>
			</table>
			<div class="button">
			<center><button type="submit" name="but1" class="button">Update</button></center>
			</div>
	</form>
	<center><form action="admin.php"><button name="but2">Cancel</button></form></center>
	</fieldset>
	<!--div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div-->
</body>
</html>
<?php
if(isset($_POST['but1'])){
	$id2=$_POST['id'];
	$sid=0;
	$found=true;
	$value1="select * from sid";
	$result1=mysqli_query($db,$value1);
	while($row1=mysqli_fetch_array($result1)){
		$id1=$row1['ID'];
		if($id2==$id1){
			$sid=1;
		}
	}
	if($sid)
	{
	echo"<script type='text/javascript'>";
		echo"alert('ID already used.!!')";
		echo"</script>";	
		$found=false;
	}//ID not present
	if($found){
	$insert="INSERT INTO `sid`(`ID`) VALUES ('$id2')";
	$run1=mysqli_query($db,$insert);
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('User ID has been added Successfully!!')";
			echo"</script>";
			echo"<script>window.open('admin.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update the details. Try again later')";
			echo"</script>";
		}
	}	
}
?>