<?php
include("../mysql.php");
if (isset($_POST['but1'])) {
	$depar=$_POST['department'];
	$sem=$_POST['sem'];
	if($depar=='CSE'){
		if($sem=='1'){
			header('location:cs/csstusem1.php');
		}//for sem 1
		elseif ($sem=='2') {
			header('location:cs/csstusem2.php');
		}//for sem 2	
		elseif ($sem=='3') {
			header('location:cs/csstusem3.php');	
		}//for sem 3 
		elseif ($sem=='4') {
			header('location:cs/csstusem4.php');
		}//for sem 4
		elseif ($sem=='5') {
			header('location:cs/csstusem5.php');
		}//for sem 5
		elseif ($sem=='6') {
			header('location:cs/csstusem6.php');
		}//for sem 6
		elseif ($sem=='7') {
			header('location:cs/csstusem7.php');
		}//for sem 7
		elseif ($sem=='8') {
			header('location:cs/csstusem8.php');
		}//for sem 8//end of if conditions
	}//end of department if
	elseif ($depar=='CV') {
		if($sem=='1'){
			header('location:cv/cvstusem1.php');

		}//for sem 1
		elseif ($sem=='2') {
			header('location:cv/cvstusem2.php');
		}//for sem 2	
		elseif ($sem=='3') {
			header('location:cv/cvstusem3.php');	
		}//for sem 3 
			elseif ($sem=='4') {
			header('location:cv/cvstusem4.php');
		}//for sem 4
		elseif ($sem=='5') {
			header('location:cv/cvstusem5.php');
		}//for sem 5
		elseif ($sem=='6') {
			header('location:cv/cvstusem6.php');
		}//for sem 6
		elseif ($sem=='7') {
			header('location:cv/cvstusem7.php');
		}//for sem 7
		elseif ($sem=='8') {
			header('location:cv/cvstusem8.php');
		}//for sem 8//end of if conditions
	}//end of department if
	elseif ($depar=='EC') {
		if($sem=='1'){
			header('location:ec/ecstusem1.php');

		}//for sem 1
		elseif ($sem=='2') {
			header('location:ec/ecstusem2.php');
		}//for sem 2	
		elseif ($sem=='3') {
			header('location:ec/ecstusem3.php');	
		}//for sem 3
			elseif ($sem=='4') {
			header('location:ec/ecstusem4.php');
		}//for sem 4
		elseif ($sem=='5') {
			header('location:ec/ecstusem5.php');
		}//for sem 5
		elseif ($sem=='6') {
			header('location:ec/ecstusem6.php');
		}//for sem 6
		elseif ($sem=='7') {
			header('location:ec/ecstusem7.php');
		}//for sem 7
		elseif ($sem=='8') {
			header('location:ec/ecstusem8.php');
		}//for sem 8//end of if conditions
	}//end of department if
	elseif ($depar=='ME') {
		if($sem=='1'){
			header('location:me/mestusem1.php');

		}//for sem 1
		elseif ($sem=='2') {
			header('location:me/mestusem2.php');
		}//for sem 2	
		elseif ($sem=='3') {
			header('location:me/mestusem3.php');	
		}//for sem 3 
			elseif ($sem=='4') {
			header('location:me/mestusem4.php');
		}//for sem 4
		elseif ($sem=='5') {
			header('location:me/mestusem5.php');
		}//for sem 5
		elseif ($sem=='6') {
			header('location:me/mestusem6.php');
		}//for sem 6
		elseif ($sem=='7') {
			header('location:me/mestusem7.php');
		}//for sem 7
		elseif ($sem=='8') {
			header('location:me/mestusem8.php');
		}//for sem 8//end of if conditions
	}//end of department if
	if(($depar=='none')||($sem=='none')){
		echo"<script type='text/javascript'>";
		echo"alert('Select correct option.!!')";
		echo"</script>";
		echo"<script>window.open('../intemstu.php','_self')</script>";
	}
}
else{
		echo"<script type='text/javascript'>";
		echo"alert('Select correct option.!!')";
		echo"</script>";	
		echo"<script>window.open('../intemstu.php','_self')</script>";
	}
?>