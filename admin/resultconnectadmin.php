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
	echo"<script>window.open('intemresultadmin.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['id10']=$user;
		$_SESSION['dep10']=$depar;
		$_SESSION['sem10']=$sem;
		header("location:resadmin.php");
	}
}
else{
	echo "Access Denied!! <br />";
	echo "Please go back";
}
?>