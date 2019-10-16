<?php
include("../mysql.php");
if (isset($_POST['butsv'])) {
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	session_start();
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
	echo"alert('Choose correct Department and Semester')";
	echo"</script>";
	echo"<script>window.open('intemstuview.php','_self')</script>";
	}
	else{
	session_start();
		$_SESSION['dep6']=$depar;
		$_SESSION['sem6']=$sem;
		header("location:studet.php");
	}
}
else{
	//header('location:message.php');
	echo "no no";
}