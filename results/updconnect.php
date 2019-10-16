<?php
include("../mysql.php");
if (isset($_POST['but1'])) {
	$user=$_POST['id'];
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('updresult.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['rest']=$user;
		$_SESSION['dep3']=$depar;
		$_SESSION['sem3']=$sem;
		header("location:updres.php");
	}
}
else{
		echo"Access Denied!! <br /> ";
		echo"Please go back!!')";
	}
?>