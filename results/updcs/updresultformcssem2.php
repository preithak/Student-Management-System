<?php
include("../mysql.php");
session_start();
if(!($_SESSION['User']))
		{
		header("location:message.php");
		}
	else if(!($_SESSION['rest']))
	{
		header("location:../teaprof.php");
	}
$id=$_SESSION['rest'];
$sql1="select ID from cssem2";
$run1=mysqli_query($db,$sql1);
$found=false;
while($row=mysqli_fetch_array($run1)){
	if($id==$row['ID']){
		$found=true;
		
	}
}
if($found)
{
	$sql="select Name from studentprof where ID='$id'";
		$run=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($run);
		$name=$row['Name'];
}
if(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect')";
	echo"</script>";
	echo"<script>window.open('../updresult.php','_self')</script>";	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Results</title>
	<link rel="stylesheet" type="text/css" href="updresultform.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:<?php echo $name;?></p><br>
		<p class="neo">ID:<?php echo $id;?></p><br>
		<p class="neo">Semester: 1</p></b><br>
	</div>
	<fieldset>
			<h2 class="upd">Update Details</h2>
			<form action="#" method="post">
				<div class="table">
		<table>
			<tr>
    			<th>Subjects</th>
    			<th>Subject Code</th>
    			<th>Marks</th>
  			</tr>
		  <tr>
		    <td>Subject1</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject2</td>
		    <td>1</td>
		    <td><input type="text" name="sub2"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject3</td>
		    <td>1</td>
		    <td><input type="text" name="sub3"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject4</td>
		    <td>1</td>
		    <td><input type="text" name="sub4"  required=""></td>
		</tr>
			<tr>
		    <td>Subject5</td>
		    <td>1</td>
		    <td><input type="text" name="sub5"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject6</td>
		    <td>1</td>
		    <td><input type="text" name="sub6"  required=""></td>
		  </tr>
		</table>
	</div>
				<div class="button">
				<button type="submit" name="but1" class="button">Update</button>
				</div>
			</form>
			<form action="../teaprof.php"><button name="but2">Cancel</button></form>
	</fieldset></p>
<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>

</body>
</html>
<?php
if(isset($_POST['but1'])){
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	$que="select * from cssem2";
	$run=mysqli_query($db,$que);
	while($row=mysqli_fetch_array($run)){
		$user=$row['ID'];
	}
		if($id==$user){
			$update="update cssem2 set Subject1='$sub1', Subject2='$sub2', Subject3='$sub3', Subject4='$sub4',
				Subject5='$sub5', Subject6='$sub6' where ID='$id' ";
				$run1=mysqli_query($db,$update);
		}//if for update
		else{
			$insert="insert into cssem2 values ('$id', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
			$run1=mysqli_query($db,$insert);	
		}//else for insert
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Your Result has been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('../teaprof.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update your details. Try again later')";
			echo"</script>";
		}
}