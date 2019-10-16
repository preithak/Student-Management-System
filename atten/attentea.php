<?php
include("../mysql.php");
session_start();
if(!($_SESSION['User'])){
		header("location:../index.php");
}

$id=$_SESSION['atten'];
$depar1=$_SESSION['dep4'];
$sem1=$_SESSION['sem4'];

$sql1="select ID from attendance where Semester='$sem1' and Department='$depar1'";
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
	$sql1="select * from attendance where ID='$id' and Semester='$sem1' and Department='$depar1' ";
	$run1=mysqli_query($db,$sql1);
	while($row2=mysqli_fetch_array($run1)){
		if($id==$row2['ID'])
		{
			$tot1=$row2['total1'];
				$atten1=$row2['attended1'];
			$tot2=$row2['total2'];
				$atten2=$row2['attended2'];
			$tot3=$row2['total3'];
				$atten3=$row2['attended3'];
			$tot4=$row2['total4'];
				$atten4=$row2['attended4'];
			$tot5=$row2['total5'];
				$atten5=$row2['attended5'];
			$tot6=$row2['total6'];
				$atten6=$row2['attended6'];
			$tot7=$row2['total7'];
				$atten7=$row2['attended7'];
			$tot8=$row2['total8'];
				$atten8=$row2['attended8'];
		}//if closes here
	}//while closes here
	$sql2="select * from subjects where Semester='$sem1' and Department='$depar1' ";
	$run2=mysqli_query($db,$sql2);
	while($row1=mysqli_fetch_array($run2)){
		$subc1=$row1['SubCode1'];
			$sub1=$row1['Subject1'];
				$subm1=$row1['Max1'];
		$subc2=$row1['SubCode2'];
			$sub2=$row1['Subject2'];
				$subm2=$row1['Max2'];
		$subc3=$row1['SubCode3'];
			$sub3=$row1['Subject3'];
				$subm3=$row1['Max3'];
		$subc4=$row1['SubCode4'];
			$sub4=$row1['Subject4'];
				$subm4=$row1['Max4'];
		$subc5=$row1['SubCode5'];
			$sub5=$row1['Subject5'];
				$subm5=$row1['Max5'];
		$subc6=$row1['SubCode6'];
			$sub6=$row1['Subject6'];
				$subm6=$row1['Max6'];
		$subc7=$row1['SubCode7'];
			$sub7=$row1['Subject7'];
				$subm7=$row1['Max7'];
		$subc8=$row1['SubCode8'];
			$sub8=$row1['Subject8'];
				$subm8=$row1['Max8'];
		}

	}
	$sql3="select * from attenupto where ID='$id' and Semester='$sem1' and Department='$depar1'";
	$run3=mysqli_query($db,$sql3);
	while($row3=mysqli_fetch_array($run3)){
		if($id==$row3['ID'])
		{
			$upto1=$row3['upto1'];
			$upto2=$row3['upto2'];
			$upto3=$row3['upto3'];
			$upto4=$row3['upto4'];
			$upto5=$row3['upto5'];
			$upto6=$row3['upto6'];
			$upto7=$row3['upto7'];
			$upto8=$row3['upto8'];
		}
	}
if(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('Attendance not available for given details.')";
	echo"</script>";
	echo"<script>window.open('intemattentea.php','_self')</script>";	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="attendance.css">
</head>
<body>
	<div class="head1">
	<h1 class="head"> Attendance</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:</b>&nbsp&nbsp<?php echo $name;?></p><br>
		<p class="neo"><b>ID:</b>&nbsp&nbsp<?php echo $id;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>
		<p class="neo"><b>Department:&nbsp&nbsp</b><?php echo $depar1;?></p><br>
	</div>

	<div>
	<div class="table">
		<table>
			<tr>
    			<th>Subjects</th>
    			<th>Subject Code</th>
    			<th>Upto</th>
    			<th>Total</th>
    			<th>Attended</th>
  			</tr>
		  <tr>
		    <td><?php echo "$subc1";?></td>
		    <td><?php echo "$sub1";?></td>
		    <td><?php echo "$upto1";?></td>
		    <td><?php echo "$tot1";?></td>
		    <td><?php echo "$atten1";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc2";?></td>
		    <td><?php echo "$sub2";?></td>
		    <td><?php echo "$upto2";?></td>
		    <td><?php echo "$tot2";?></td>
		    <td><?php echo "$atten2";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc3";?></td>
		    <td><?php echo "$sub3";?></td>
		    <td><?php echo "$upto3";?></td>
		    <td><?php echo "$tot3";?></td>
		    <td><?php echo "$atten3";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc4";?></td>
		    <td><?php echo "$sub4";?></td>
		    <td><?php echo "$upto4";?></td>
		    <td><?php echo "$tot4";?></td>
		    <td><?php echo "$atten4";?></td>
		</tr>
			<tr>
		    <td><?php echo "$subc5";?></td>
		    <td><?php echo "$sub5";?></td>
		    <td><?php echo "$upto5";?></td>
		    <td><?php echo "$tot5";?></td>
		    <td><?php echo "$atten5";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc6";?></td>
		    <td><?php echo "$sub6";?></td>
		    <td><?php echo "$upto6";?></td>
		    <td><?php echo "$tot6";?></td>
		    <td><?php echo "$atten6";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc7";?></td>
		    <td><?php echo "$sub7";?></td>
		    <td><?php echo "$upto7";?></td>
		    <td><?php echo "$tot7";?></td>
		    <td><?php echo "$atten7";?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc8";?></td>
		    <td><?php echo "$sub8";?></td>
		    <td><?php echo "$upto8";?></td>
		    <td><?php echo "$tot8";?></td>
		    <td><?php echo "$atten8";?></td>
		  </tr>
		</table>
	</div>
	<div class="links">
		<ul>
			<h2 class="link1">Links</h2>
		  <!--li class="dropdown"><a href="#student_details" class="dropbtn"><b><p>Student Details</p></a-->
		  	 <!--div class="dropdown-content">
      			<a href="#" class="not2">Link 1</a>
      			<a href="#" class="not2">Link 2</a>
      			<a href="#" class="not2">Link 3</a>
    		</div-->
		  <!--/li>
		  <li><a href="../../teadetailstea.php"><p>Teacher Details</p></a></li-->
		  <li><a href="intemattentea.php"><b><p>Attendance</p></a></li>
		  <li><a href="../teaprof.php"><p>Profile</p></a></li>
		   <li><a href="#about"><p>Contact Us</p></a></li>
		  <li><a href="../logout.php"><p>Logout</p></a></li>
		</ul>
	</div>
</div>
<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
	<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>

</body>
</html>
