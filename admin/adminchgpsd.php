<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['admin']))
	{
		header("location:../index.php");
	}
$name=$_SESSION['admin'];
$sql="select Passw, ID from admin";
$run=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($run)){
	if($name==$row['ID'])
	{
		$cpsd1=$row['Passw'];
	}//if closes here
}//while closes here
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
	<link rel="stylesheet" type="text/css" href="../teaprofupdate.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Admin Profile</h1>
	</div>
	<fieldset>
		<legend class="legend">
			<h2>Update Details</h2></legend>
		<div class="prsnl">
			<form action="#" method="post">
			<div class="input">
				<table>
					<tr>
				<th><label>Current Password</label></th>
				<td><input type="password" name="crnt"  required=""></td>
			</div>
		</tr>
			<div class="input"><tr>
				<th><label>New Passowrd</label></th>
				<td><input type="password" name="new" required=""></td></tr>
			</div>
			<div class="input"><tr>
				<th><label>Re-type New Password</label></th>
				<td><input type="password" name="rnew" required=""></td></tr>
			</div></table>
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
if(isset($_POST['but1']))
{
	$cpsd2=$_POST['crnt'];
	$new=$_POST['new'];
	$rnew=$_POST['rnew'];
	$found=false;
	if($new==$rnew){
		if($cpsd2==$cpsd1){
			$found=true;
		}
	}

	if ($cpsd1!=$cpsd2) {
		echo"<script type='text/javascript'>";
		echo"alert('Current Passwords incorrect!!')";
		echo"</script>";

	}

	if($new!=$rnew){
		echo"<script type='text/javascript'>";
		echo"alert('Password didnot match!!')";
		echo"</script>";
	
	}

	if($cpsd1==$new){
		echo"<script type='text/javascript'>";
		echo"alert('New Password and Current Password cannot be same!!')";
		echo"</script>";
		$found=false;
	}
	if($found){
	$update="update admin set Passw='$new' where ID='$name'";
	$run1=mysqli_query($db,$update);
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Your Passowrd has been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('admin.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update your details. Try again later')";
			echo"</script>";
		}
	}		
}