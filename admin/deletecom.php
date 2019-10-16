<?php
include("../mysql.php");

if (isset($_POST['delta'])){
	$num=$_POST['number'];
	$que="DELETE FROM `comments` WHERE number='$num'";
	$run1=mysqli_query($db,$que);
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Comment has been deleted Successfully!!')";
			echo"</script>";
			echo"<script>window.open('message11.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update your details. Try again later')";
			echo"</script>";
			echo"<script>window.open('message11.php','_self')</script>";
		}
}
else{
	header('location:index.php');
}
?>