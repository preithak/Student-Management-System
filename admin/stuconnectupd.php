<?php
include("../mysql.php");
if (isset($_POST['butsup'])) {
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	$id=$_POST['id'];
	session_start();
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemstuupd.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['dep7']=$depar;
		$_SESSION['sem7']=$sem;
		$_SESSION['id7']=$id;
		header("location:stuupd.php");
	}
}
else{
	//header('location:message.php');
	echo "Access Denied <br />";
	echo "Please go back";
}