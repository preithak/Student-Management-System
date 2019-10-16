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
	echo"<script>window.open('intemattenadmin.php','_self')</script>";
	}
	else{
		session_start();
		$_SESSION['id13']=$user;
		$_SESSION['dep13']=$depar;
		$_SESSION['sem13']=$sem;
		header("location:attenadmin.php");
	}
}
else{
	header('location:message.php');
}
?>