<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['admin']))
	{
		header("location:../index.php");
	}
$id=$_SESSION['id7'];
$depar1=$_SESSION['dep7'];
$sem1=$_SESSION['sem7'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" type="text/css" href="../teaprofupdate.css">
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
				<th><label>Current USN (ID):</label></th>
				<td><?php echo "$id";?></td>
			</div>
		</tr>
			<div class="input"><tr>
				<th><label>New USN (ID):</label></th>
				<td><input type="text" name="newid" required=""></td></tr>
			</div>
			</table>
			<div class="button">
			<center><button type="submit" name="butchgsid" class="button">Update</button></center>
			</div>
	</form>
	<center><form action="stuupd.php"><button name="but2">Cancel</button></form></center>
	</fieldset>
	<!--div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div-->
</body>
</html>
<?php
if(isset($_POST['butchgsid'])){
	$newid=$_POST['newid'];
	$idfound=true;
	$sql3="select ID from studentprof";
	$run3=mysqli_query($db,$sql3);
	while($row3=mysqli_fetch_array($run3)){
		if($newid==$row3['ID'])
		{
			$idfound=false;
		}
	}
	if(!$idfound){
		echo"<script type='text/javascript'>";
		echo"alert('Invalid ID!! Use Valid ID')";
		echo"</script>";
	}
	else{
		$update="update studentprof set ID='$newid' where ID='$id' ";
		$run4=mysqli_query($db,$update);
		if ($run4) {
			echo"<script type='text/javascript'>";
			echo"alert('Student Details has been updated Successfully!!')";
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