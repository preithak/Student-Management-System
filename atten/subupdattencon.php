<?php
include("../mysql.php");
if (isset($_POST['but12'])) {
	$code=$_POST['code'];
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemupdsubatten.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['atten22']=$code;
		$_SESSION['dep22']=$depar;
		$_SESSION['sem22']=$sem;
		header("location:updsubatten.php");
	}
}
else{
			header("location:../index.php");
	}
?>