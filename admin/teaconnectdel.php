<?php
include("../mysql.php");
if (isset($_POST['buttdel'])) {
	$depar=$_POST['department'];
	$id=$_POST['id'];
	if(($depar=='none')){
		echo"<script type='text/javascript'>";
		echo"alert('Choose correct Department ')";
		echo"</script>";
		echo"<script>window.open('intemteadel.php','_self')</script>";
	}
	else{
		$found=false;
		$sql1="select ID from teacherprof where Department='$depar' ";
		$run1=mysqli_query($db,$sql1);
		while($row1=mysqli_fetch_array($run1)){
			if($id==$row1['ID'])
			{
				$found=true;
			}
		}	
		if($found){
			$que="DELETE FROM `teacherprof` WHERE ID='$id'";
			$run2=mysqli_query($db,$que);
			if($run2){
				echo"<script type='text/javascript'>";
				echo"alert('Teacher account has been deleted Successfully!!')";
				echo"</script>";
				echo"<script>window.open('admin.php','_self')</script>";
			}
			else{
				echo"<script type='text/javascript'>";
				echo"alert('Sorry! couldnot delete the Teacher account. Try again later')";
				echo"</script>";
				echo"<script>window.open('intemstudel.php','_self')</script>";
			}
		}
		else{
			echo"<script type='text/javascript'>";
				echo"alert('ID incorrect for the selected details')";
				echo"</script>";
				echo"<script>window.open('intemteadel.php','_self')</script>";
		}
	}
}
else{
	//header('location:message.php');
	echo "Access Denied <br />";
	echo "Please go back";
}