<?php
include("../mysql.php");
if (isset($_POST['but1'])){
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	$user=$_POST['id'];
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemattenstu.php','_self')</script>";
	}
	else{
		session_start();
		$_SESSION['atten']=$user;
		$_SESSION['dep4']=$depar;
		$_SESSION['sem4']=$sem;
		header("location:attenstu.php");
	}
}
else{
	header('location:message.php');
}
?>