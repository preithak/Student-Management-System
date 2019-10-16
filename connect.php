<?php
include("mysql.php");
if (isset($_POST['but1'])) {
	$user=$_POST['id'];
	$psd=$_POST['psd'];
	$type=$_POST['usertype'];
	if($type==('teacher'|| 'student'))
	{
		if ($type=='teacher') {
			$value="select * from teacherprof";
			$result=mysqli_query($db,$value);
			$found=false;
			while($row=mysqli_fetch_array($result))
				{
				$name=$row['ID'];
				$pass=$row['Passw'];
					if($name==$user and $pass==$psd){
					$found=true;
					}//if for comparison
				}//while loop
			if($found)
				{
				session_start();
				$_SESSION['User']=$user;
				header("location:teaprof.php");
				}//if found
			else{
				echo"<script type='text/javascript'>";
				echo"alert('Opps! Username or Password or Checkbox didnot match.Try again!!')";
				echo"</script>";	
				echo"<script>window.open('index.php','_self')</script>";
				}//else
		}
		else{
			$value="select * from studentprof";
			$result=mysqli_query($db,$value);
			$found=false;
			while($row=mysqli_fetch_array($result))
				{
				$name=$row['ID'];
				$pass=$row['Passw'];
					if($name==$user and $pass==$psd){
					$found=true;
					}//if for comparison
				}//while loop
			if($found)
				{
				session_start();
				$_SESSION['UserS']=$user;
				header("location:stuprof.php");
				}//if found
			else{
				echo"<script type='text/javascript'>";
				echo"alert('Opps! Username or Password or Checkbox didnot match.Try again!!')";
				echo"</script>";	
				echo"<script>window.open('index.php','_self')</script>";
				}//else	
		}
	}
	else{
		echo"<script type='text/javascript'>";
				echo"alert('Choose correct Checkbox')";
				echo"</script>";	
				echo"<script>window.open('index.php','_self')</script>";
	}
}//main if
else{
	header('location:index.php');
}
?>