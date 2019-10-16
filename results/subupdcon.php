<?php
include("../mysql.php");
if (isset($_POST['but11'])) {
	$code=$_POST['code'];
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemsubupd.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['code21']=$code;
		$_SESSION['dep21']=$depar;
		$_SESSION['sem21']=$sem;
		header("location:subupdres.php");
	}
}
else{
		echo"Access Denied!! <br /> ";
		echo"Please go back!!')";
	}
?>