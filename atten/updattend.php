<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['User']))
		{
		header("location:message.php");
		}
	else if(!($_SESSION['updat']))
	{
		header("location:../teaprof.php");
	}
$id=$_SESSION['updat'];
$depar1=$_SESSION['dep4'];
$sem1=$_SESSION['sem4'];
$sql4="select ID, Department, Semester from studentprof";
$run4=mysqli_query($db,$sql4);
$found=false;
while($row=mysqli_fetch_array($run4)){
	if($id==$row['ID']){
		if ($depar1==$row['Department']) {
			if ($sem1==$row['Semester']) {
				$found=true;	
			}
		}	
	}
}

if($found){
	$sql5="select Name from studentprof where ID='$id'";
	$run5=mysqli_query($db,$sql5);
	$row5=mysqli_fetch_array($run5);
	$name=$row5['Name'];

	$sql1="select * from subjects where Semester='$sem1' and Department='$depar1'";
	$run1=mysqli_query($db,$sql1);
	while($row1=mysqli_fetch_array($run1)){
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
	$tot1=0;$atten1=0;$tot2=0;$atten2=0;$tot3=0;$atten3=0;$tot4=0;$atten4=0;
	$tot5=0;$atten5=0;$tot6=0;$atten6=0;$tot7=0;$atten7=0;$tot8=0;$atten8=0;
	$sql2="select * from attendance where ID='$id' and Semester='$sem1' and Department='$depar1' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
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
	if($tot1==null)
		$tot1=0;
	if($tot2==null)
		$tot2=0;
	if($tot3==null)
		$tot3=0;
	if($tot4==null)
		$tot4=0;
	if($tot5==null)
		$tot5=0;
	if($tot6==null)
		$tot6=0;
	if($tot7==null)
		$tot7=0;
	if($tot8==null)
		$tot8=0;
	if($atten1==null)
		$atten1=0;
	if($atten8==null)
		$atten8=0;
	if($atten2==null)
		$atten2=0;
	if($atten3==null)
		$atten3=0;
	if($atten4==null)
		$atten4=0;
	if($atten5==null)
		$atten5=0;
	if($atten6==null)
		$atten6=0;
	if($atten7==null)
		$atten7=0;
	$upto1='0';
	$upto2='0';
	$upto3='0';
	$upto4='0';
	$upto5='0';
	$upto6='0';
	$upto7='0';
	$upto8='0';
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
	if($upto1==null)
		$upto1=('00/00/0000');
	if($upto2==null)
		$upto2=('00/00/0000');
	if($upto3==null)
		$upto3=('00/00/0000');
	if($upto4==null)
		$upto4=('00/00/0000');
	if($upto5==null)
		$upto5=('00/00/0000');
	if($upto6==null)
		$upto6=('00/00/0000');
	if($upto7==null)
		$upto7=('00/00/0000');
	if($upto8==null)
		$upto8=('00/00/0000');
	$time1= strtotime($upto1);
		$date1 = date('Y-m-d',$time1);
	$time2= strtotime($upto2);
		$date2 = date('Y-m-d',$time1);
	$time3= strtotime($upto3);
		$date3 = date('Y-m-d',$time2);
	$time4= strtotime($upto4);
		$date4 = date('Y-m-d',$time3);
	$time5= strtotime($upto5);
		$date5 = date('Y-m-d',$time4);
	$time6= strtotime($upto6);
		$date6 = date('Y-m-d',$time5);
	$time7= strtotime($upto7);
		$date7 = date('Y-m-d',$time6);
	$time8= strtotime($upto8);
		$date8 = date('Y-m-d',$time7);

}
elseif(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect')";
	echo"</script>";
	echo"<script>window.open('intemupdattend.php','_self')</script>";	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Attendance</title>
	<link rel="stylesheet" type="text/css" href="updattend2.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Attendace</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:&nbsp&nbsp</b><?php echo $name;?></p><br>
		<p class="neo"><b>Department:&nbsp&nbsp</b><?php echo $depar1;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>

	</div>
	<section class="sec">
			<h2 class="upd">Update Details</h2>
			<form action="#" method="post" id="upd">
				<div class="table">
		<table>
			<div class="deo1" style=" color: white;">Please be careful while updating the values.</div>
			<tr>
    			<th>Subject Code</th>
    			<th>Subject</th>
    			<th>Upto</th>
    			<th>Total Classes</th>
    			<th>Attended Classes</th>
  			</tr>
		  	<tr>
		  		<td><?php echo "$subc1";?></td>
		    	<td><?php echo "$sub1";?></td>
		  		<td><input type="date" name="upt1" value=<?php echo $date1 ?>></td>
		  		<td><input type="number" min="0" name="tota1" value=<?php echo $tot1 ?>></td>
		  		<td><input type="number" min="0" name="attena1" value=<?php echo $atten1 ?>></td>
		  	</tr>
		  	<tr>
		  		<td><?php echo "$subc2";?></td>
		  		<td><?php echo "$sub2";?></td>
		  		<td><input type="date" name="upt2" value=<?php echo $date2 ?>></td>
		  		<td><input type="number" min="0" name="tota2" value=<?php echo $tot2 ?>></td>
		  		<td><input type="number" min="0" name="attena2" value=<?php echo $atten2 ?>></td>
		  	</tr>
		  	<tr>
		  		<td><?php echo "$subc3";?></td>
		  		<td><?php echo "$sub3";?></td>
		  		<td><input type="date" name="upt3" value=<?php echo $date3 ?>></td>
		  		<td><input type="number" min="0" name="tota3" value=<?php echo $tot3 ?>></td>
		  		<td><input type="number" min="0" name="attena3" value=<?php echo $atten3 ?>></td>
		  	</tr>
		  	<tr>
		  		<td><?php echo "$subc4";?></td>
		  		<td><?php echo "$sub4";?></td>
		  		<td><input type="date" name="upt4" value=<?php echo $date4 ?> ></td>
		  		<td><input type="number" min="0" name="tota4" value=<?php echo $tot4 ?>></td> 
		  		<td><input type="number" min="0" name="attena4" value=<?php echo $atten4 ?>></td>
			</tr>
			<tr>
				<td><?php echo "$subc5";?></td>
		  		<td><?php echo "$sub5";?></td>
		  		<td><input type="date" name="upt5" value=<?php echo $date5 ?>></td>
		  		<td><input type="number" min="0" name="tota5" value=<?php echo $tot5 ?>></td>
		  		<td><input type="number" min="0" name="attena5" value=<?php echo $atten5 ?>></td>
		  	</tr>
		  	<tr>
		  		<td><?php echo "$subc6";?></td>
		  		<td><?php echo "$sub6";?></td>
		  		<td><input type="date" name="upt6" value=<?php echo $date6 ?>></td>
		  		<td><input type="number" min="0" name="tota6" value=<?php echo $tot6 ?>></td>
		  		<td><input type="number" min="0" name="attena6" value=<?php echo $atten6 ?>></td>
		  	</tr>
		 	<tr>
		 		<td><?php echo "$subc7";?></td>
		  		<td><?php echo "$sub7";?></td>
		  		<td><input type="date" name="upt7" value=<?php echo $date7 ?>></td>
		  		<td><input type="number" min="0" name="tota7" value=<?php echo $tot7 ?>></td>
		  		<td><input type="number" min="0" name="attena7" value=<?php echo $atten7 ?>></td>
		    </tr>
		    <tr>
		    	<td><?php echo "$subc8";?></td>
		  		<td><?php echo "$sub8";?></td>
		  		<td><input type="date" name="upt8" value=<?php echo $date8 ?>></td>
		  		<td><input type="number" min="0" name="tota8" value=<?php echo $tot8 ?>></td>
		  		<td><input type="number" min="0" name="attena8" value=<?php echo $atten8 ?>></td>
		    </tr>
		</table>
	</div>
				<div class="button">
				<button type="submit" name="but1" class="button">Update</button>
				</div>
			</form>
			<form action="../teaprof.php"><button name="but2">Cancel</button></form>
	</section></p>
<div class="footer">
  		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>

</body>
</html>
<?php
if(isset($_POST['but1'])){
	$tota1=$_POST['tota1'];
		$attena1=$_POST['attena1'];
	$tota2=$_POST['tota2'];
		$attena2=$_POST['attena2'];
	$tota3=$_POST['tota3'];
		$attena3=$_POST['attena3'];
	$tota4=$_POST['tota4'];
		$attena4=$_POST['attena4'];
	$tota5=$_POST['tota5'];
		$attena5=$_POST['attena5'];
	$tota6=$_POST['tota6'];
		$attena6=$_POST['attena6'];
	$tota7=$_POST['tota7'];
		$attena7=$_POST['attena7'];
	$tota8=$_POST['tota8'];
		$attena8=$_POST['attena8'];
	$upt1=$_POST['upt1'];
	$upt2=$_POST['upt2'];
	$upt3=$_POST['upt3'];
	$upt4=$_POST['upt4'];
	$upt5=$_POST['upt5'];
	$upt6=$_POST['upt6'];
	$upt7=$_POST['upt7'];
	$upt8=$_POST['upt8'];
	$found1=false;	
	$que="select * from attendance";
	$run=mysqli_query($db,$que);
	while($row=mysqli_fetch_array($run)){
		$user=$row['ID'];
		if($id==$user)
			$found1=true;
	}
	if($found1)
	{
		$update1="UPDATE `attendance` SET  `total1`='$tota1',`attended1`='$attena1',
		`total2`='$tota2',`attended2`='$attena2',
		`total3`='$tota3',`attended3`='$attena3',
		`total4`='$tota4',`attended4`='$attena4',
		`total5`='$tota5',`attended5`='$attena5',
		`total6`='$tota6',`attended6`='$attena6',
		`total7`='$tota7',`attended7`='$attena7',
		`total8`='$tota8',`attended8`='$attena8' WHERE ID='$id' and Semester='$sem1' and Department='$depar1' ";

		$update2="UPDATE `attenupto` SET `upto1`='$upt1',`upto2`='$upt2',`upto3`='$upt3',`upto4`='$upt4',`upto5`='$upt5',
		`upto6`='$upt6',`upto7`='$upt7',`upto8`='$upt8' WHERE ID='$id' and Semester='$sem1' and Department='$depar1'";

		$run1=mysqli_query($db,$update1);
		$run2=mysqli_query($db,$update2);
	}
	else{
		$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total1`, `attended1`, `total2`, `attended2`, `total3`, `attended3`, `total4`, `attended4`, `total5`, `attended5`, `total6`, `attended6`, `total7`, `attended7`, `total8`, `attended8`) VALUES ('$id','$sem1','$depar1',
		'$tota1','$attena1',
		'$tota2','$attena2',
		'$tota3','$attena3',
		'$tota4','$attena4',
		'$tota5','$attena5',
		'$tota6','$attena6',
		'$tota7','$attena7',
		'$tota8','$attena8' )  ";

		$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto1`, `upto2`, `upto3`, `upto4`, `upto5`, `upto6`, `upto7`, `upto8`) VALUES ('$id','$sem1','$depar1','$upt1','$upt2','$upt3','$upt4','$upt5','$upt6','$upt7','$upt8')  ";

		$run1=mysqli_query($db,$insert1);
		$run2=mysqli_query($db,$insert2);
	}
	if($run1&&$run2)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Attendance has been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('../teaprof.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update the details. Try again later')";
			echo"</script>";
		}
}
?>
