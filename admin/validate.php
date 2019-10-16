<?php
include("../mysql.php");
if (isset($_POST['butad'])) {
	$id=$_POST['idad'];
	$psd=$_POST['pswdad'];
	$value="Select * from admin";
	$result=mysqli_query($db,$value);
	$found=false;
	while($row=mysqli_fetch_array($result)){
		$tid=$row['ID'];
		$tpsd=$row['Passw'];
		if ($id==$tid) {
			$found=true;
		}//end of if
	}//end of while
	if($found){
		session_start();
		$_SESSION['admin']=$id;
		header("location:admin.php");
	}//if found
	else{
		echo"<script type='text/javascript'>";
		echo"alert('Opps! ID or Password didnot match.Try again!!')";
		echo"</script>";	
		echo"<script>window.open('index.php','_self')</script>";
		}//else
}
else{
	header('location:../index.php');
}