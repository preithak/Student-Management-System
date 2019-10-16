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
	echo"<script>window.open('intemupdresult.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['id11']=$user;
		$_SESSION['dep11']=$depar;
		$_SESSION['sem11']=$sem;
		header("location:updresadmin.php");
	}
}
else{
		echo"Access Denied!! <br /> ";
		echo"Please go back!!')";
	}
?>