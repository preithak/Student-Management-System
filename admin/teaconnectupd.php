<?php
include("../mysql.php");
if (isset($_POST['buttup'])) {
	$depar=$_POST['department'];
	$id=$_POST['id'];
	if(($depar=='none')){
		echo"<script type='text/javascript'>";
		echo"alert('Choose correct Department ')";
		echo"</script>";
		echo"<script>window.open('intemteaupd.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['dep8']=$depar;
		$_SESSION['id8']=$id;
		header("location:teaupd.php");
	}
}
else{
	//header('location:message.php');
	echo "Access Denied <br />";
	echo "Please go back";
}