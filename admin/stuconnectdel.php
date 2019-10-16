<?php
include("../mysql.php");
if (isset($_POST['butstdel'])) {
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	$id=$_POST['id'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
		echo"alert('Choose correct Department and Semester')";
		echo"</script>";
		echo"<script>window.open('intemstudel.php','_self')</script>";
	}
	else{
		$found=false;
		$sql1="select ID from studentprof where Semester='$sem' and Department='$depar' ";
		$run1=mysqli_query($db,$sql1);
		while($row1=mysqli_fetch_array($run1)){
			if($id==$row1['ID'])
			{
				$found=true;
			}
		}	
		if($found){
			$que="DELETE FROM `studentprof` WHERE ID='$id'";
			$run2=mysqli_query($db,$que);
			if($run2){
				echo"<script type='text/javascript'>";
				echo"alert('Student account has been deleted Successfully!!')";
				echo"</script>";
				echo"<script>window.open('admin.php','_self')</script>";
			}
			else{
				echo"<script type='text/javascript'>";
				echo"alert('Sorry! couldnot delete the Student account. Try again later')";
				echo"</script>";
				echo"<script>window.open('intemstudel.php','_self')</script>";
			}
		}
		else{
			echo"<script type='text/javascript'>";
				echo"alert('ID incorrect for the selected details')";
				echo"</script>";
				echo"<script>window.open('intemstudel.php','_self')</script>";
		}
	}
}
else{
	//header('location:message.php');
	echo "Access Denied <br />";
	echo "Please go back";
}