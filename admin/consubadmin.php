<?php
include("../mysql.php");
if (isset($_POST['but1'])){
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemsubadmin.php','_self')</script>";
	}
	else{
	session_start();
	$_SESSION['dep12']=$depar;
	$_SESSION['sems12']=$sem;
	header("location:subjectsadmin.php");
	}
}
else{
	header('location:index.php');
}
