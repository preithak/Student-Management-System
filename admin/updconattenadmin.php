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
	echo"<script>window.open('intemupdattenadmin.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['id14']=$user;
		$_SESSION['dep14']=$depar;
		$_SESSION['sem14']=$sem;
		header("location:updattenadmin.php");
	}
}
else{
		header("location:../index.php");
	}
?>