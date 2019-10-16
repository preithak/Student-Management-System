<?php
include("../../mysql.php");
session_start();
if(!($_SESSION['UserS'])){
		header("location:../../index.php");
}

$id=$_SESSION['csres'];
$sql1="select ID from resultcv where Semester='6'";
$run1=mysqli_query($db,$sql1);
$found=false;
while($row=mysqli_fetch_array($run1)){
	if($id==$row['ID']){
		$found=true;
		
	}
}
if($found){
	$sql="select Name from studentprof where ID='$id'";
	$run=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($run);
	$name=$row['Name'];
	$sql1="select * from resultcv where Semester='6'";
	$run1=mysqli_query($db,$sql1);
	while($row1=mysqli_fetch_array($run1)){
		if($id==$row1['ID'])
		{
			$sub1=$row1['Subject1'];
			$sub2=$row1['Subject2'];
			$sub3=$row1['Subject3'];
			$sub4=$row1['Subject4'];
			$sub5=$row1['Subject5'];
			$sub6=$row1['Subject6'];
			$sub7=$row1['Subject7'];
			$sub8=$row1['Subject8'];
		}//if closes here
	}//while closes here
}
if(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect')";
	echo"</script>";
	echo"<script>window.open('../intemresultstu.php','_self')</script>";	
}
$sum=($sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$sub7+$sub8);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="../result1.css">
</head>
<body>
	<div class="head1">
	<h1 class="head"> Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:</b>&nbsp&nbsp<?php echo $name;?></p><br>
		<p class="neo"><b>ID:</b>&nbsp&nbsp<?php echo $id;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b>6</p><br>
	</div>

	<div>
	<div class="table">
		<table>
			<tr>
    			<th>Subjects</th>
    			<th>Subject Code</th>
    			<th>Max. Marks</th>
    			<th>Marks Obtained</th>
  			</tr>
		  <tr>
		    <td>Subject1</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub1;?></td>
		  </tr>
		  <tr>
		    <td>Subject2</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub2;?></td>
		  </tr>
		  <tr>
		    <td>Subject3</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub3;?></td>
		  </tr>
		  <tr>
		    <td>Subject4</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub4;?></td>
		</tr>
			<tr>
		    <td>Subject5</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub5;?></td>
		  </tr>
		  <tr>
		    <td>Subject6</td>
		    <td>1</td>
		    <td>80</td>
		    <td><?php echo $sub6;?></td>
		  </tr>
		  <tr>
		    <td>Subject7</td>
		    <td>1</td>
		    <td>40</td>
		    <td><?php echo $sub7;?></td>
		  </tr>
		  <tr>
		    <td>Subject8</td>
		    <td>1</td>
		    <td>40</td>
		    <td><?php echo $sub8;?></td>
		  </tr>
		   <tr>
		    <td></td>
		    <td>Total</td>
		    <td>560</td>
		    <td><?php echo $sum;?></td>
		  </tr>
		</table>
	</div>
	<div class="links">
		<ul>
			<h2 class="link1">Links</h2>
		  </li>
		  <li><a href="#teacher_details"><p><b>Teacher Details</p></a></li>
		  <li><a href="../intemresult.php"><p>Results</p></a></li>
		  <li><a href="../../stuprof.php"><p>Profile</p></a></li>
		   <li><a href="#about"><p>Contact Us</p></a></li>
		  <li><a href="../../logout.php"><p>Logout</p></a></li>
		</ul>
	</div>
</div>
	<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>

</body>
</html6