<?php
include("../mysql.php");
if (isset($_POST['but1'])){
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	$user=$_POST['id'];
	
	session_start();
		$_SESSION['csres']=$user;
		$_SESSION['dep1']=$depar;
		$_SESSION['sem1']=$sem;
		header("location:res.php");
	
}