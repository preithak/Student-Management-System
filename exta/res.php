<?php
include("../mysql.php");
session_start();
if(!($_SESSION['User'])){
		header("location:../../index.php");
}

$id=$_SESSION['csres'];
$depar1=$_SESSION['dep1'];
$sem1=$_SESSION['sem1'];
$sql1="select ID from resultcs where Semester='$sem1'";
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
	$sql1="select * from resultcs where Semester='$sem1'";
	$run1=mysqli_query($db,$sql1);
	while($row2=mysqli_fetch_array($run1)){
		if($id==$row2['ID'])
		{
			$sub11=$row2['Subject1'];
			$sub22=$row2['Subject2'];
			$sub33=$row2['Subject3'];
			$sub44=$row2['Subject4'];
			$sub55=$row2['Subject5'];
			$sub66=$row2['Subject6'];
			$sub77=$row2['Subject7'];
			$sub88=$row2['Subject8'];
			$date=$row2['Updated'];
		}//if closes here
	}//while closes here
	$sql2="select * from subjects where Semester='$sem1' and Department='$depar1'";
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
if(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect')";
	echo"</script>";
	echo"<script>window.open('inres.php','_self')</script>";	
}
$sum=($sub11+$sub22+$sub33+$sub44+$sub55+$sub66+$sub77+$sub88);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Result </title>
	<link rel="stylesheet" type="text/css" href="res.css">
</head>
<body>
	<div class="head1">
	<h1 class="head"> Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:</b>&nbsp&nbsp<?php echo $name;?></p><br>
		<p class="neo"><b>ID:</b>&nbsp&nbsp<?php echo $id;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>
		<p class="neo"><b>Updated on:</b>&nbsp&nbsp<?php echo $date;?></p><br>
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
		    <td><?php echo "$subc1";?></td>
		    <td><?php echo "$sub1";?></td>
		    <td><?php echo "$subm1";?></td>
		    <td><?php echo $sub11;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc2";?></td>
		    <td><?php echo "$sub2";?></td>
		    <td><?php echo "$subm2";?></td>
		    <td><?php echo $sub22;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc3";?></td>
		    <td><?php echo "$sub3";?></td>
		    <td><?php echo "$subm3";?></td>
		    <td><?php echo $sub33;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc4";?></td>
		    <td><?php echo "$sub4";?></td>
		    <td><?php echo "$subm4";?></td>
		    <td><?php echo $sub44;?></td>
		</tr>
			<tr>
		    <td><?php echo "$subc5";?></td>
		    <td><?php echo "$sub5";?></td>
		    <td><?php echo "$subm5";?></td>
		    <td><?php echo $sub55;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc6";?></td>
		    <td><?php echo "$sub6";?></td>
		    <td><?php echo "$subm6";?></td>
		    <td><?php echo $sub66;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc7";?></td>
		    <td><?php echo "$sub7";?></td>
		    <td><?php echo "$subm7";?></td>
		    <td><?php echo $sub77;?></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc8";?></td>
		    <td><?php echo "$sub8";?></td>
		    <td><?php echo "$subm8";?></td>
		    <td><?php echo $sub88;?></td>
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
		  <!--li class="dropdown"><a href="#student_details" class="dropbtn"><b><p>Student Details</p></a-->
		  	 <!--div class="dropdown-content">
      			<a href="#" class="not2">Link 1</a>
      			<a href="#" class="not2">Link 2</a>
      			<a href="#" class="not2">Link 3</a>
    		</div-->
		  <!--/li>
		  <li><a href="../../teadetailstea.php"><p>Teacher Details</p></a></li-->
		  <li><a href="../intemresulttea.php"><b><p>Results</p></a></li>
		  <li><a href="../../teaprof.php"><p>Profile</p></a></li>
		   <li><a href="#about"><p>Contact Us</p></a></li>
		  <li><a href="../../logout.php"><p>Logout</p></a></li>
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