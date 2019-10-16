<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['User']))
		{
		header("location:../index.php");
		}
	else if(!($_SESSION['atten22']))
	{
		header("location:../teaprof.php");
	}
	$code=$_SESSION['atten22'];
$depar1=$_SESSION['dep22'];
$sem1=$_SESSION['sem22'];
$sql1="select * from subjects ";
$run1=mysqli_query($db,$sql1);
$found=false;
while($row=mysqli_fetch_array($run1)){
	if($sem1==$row['Semester']){
		if ($depar1==$row['Department']) {
			$code1=$row['SubCode1'];
			$code2=$row['SubCode2'];
			$code3=$row['SubCode3'];
			$code4=$row['SubCode4'];
			$code5=$row['SubCode5'];
			$code6=$row['SubCode6'];
			$code7=$row['SubCode7'];
			$code8=$row['SubCode8'];
		}
		
	}
}
if($code==(($code1))){
	$sql2="select Subject1, Max1 from subjects where Semester='$sem1' and Department='$depar1' and SubCode1='$code1' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject1'];
		$subm1=$row2['Max1'];
	}

	$found=true;
}
if($code==(($code2))){
	$sql2="select Subject2, Max2 from subjects where Semester='$sem1' and Department='$depar1' and SubCode2='$code2' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject2'];
		$subm1=$row2['Max2'];
	}
	$found=true;
}
if($code==(($code3))){
	$sql2="select Subject3, Max3 from subjects where Semester='$sem1' and Department='$depar1' and SubCode3='$code3' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject3'];
		$subm1=$row2['Max3'];
	}
	$found=true;
}
if($code==(($code4))){
	$sql2="select Subject4, Max4 from subjects where Semester='$sem1' and Department='$depar1' and SubCode4='$code4' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject4'];
		$subm1=$row2['Max4'];
	}
	$found=true;
}
if($code==(($code5))){
	$sql2="select Subject5, Max5 from subjects where Semester='$sem1' and Department='$depar1' and SubCode5='$code5' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject5'];
		$subm1=$row2['Max5'];
	}
	$found=true;
}
if($code==(($code6))){
	$sql2="select Subject6, Max6 from subjects where Semester='$sem1' and Department='$depar1' and SubCode6='$code6' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject6'];
		$subm1=$row2['Max6'];
	}
	$found=true;
}
if($code==(($code7))){
	$sql2="select Subject7, Max7 from subjects where Semester='$sem1' and Department='$depar1' and SubCode7='$code7' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject7'];
		$subm1=$row2['Max7'];
	}
	$found=true;
}
if($code==(($code8))){
	$sql2="select Subject8, Max8 from subjects where Semester='$sem1' and Department='$depar1' and SubCode8='$code8' ";
	$run2=mysqli_query($db,$sql2);
	while($row2=mysqli_fetch_array($run2)){
	$sub1=$row2['Subject8'];
		$subm1=$row2['Max8'];
	}
	$found=true;
}

if (!($found)) {
	echo"<script type='text/javascript'>";
	echo"alert('Subject Code is incorrect')";
	echo"</script>";
	echo"<script>window.open('intemupdsubatten.php','_self')</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Atendance</title>
	<link rel="stylesheet" type="text/css" href="upd.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Attendance</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Department:&nbsp&nbsp</b><?php echo $depar1;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>
		<p class="neo"><b>Subject:&nbsp&nbsp</b><?php echo $sub1;?></p><br>
		<p class="neo"><b>Subject Code:&nbsp&nbsp</b><?php echo $code;?></p><br>
	</div>
	<div class="box">
	</div>
	<section>
		<h2 class="upd">Update Details</h2>
		<form action="#" method="post">
		<?php
			$sql="select * from studentprof where Department='$depar1' and Semester='$sem1'  ";
			$run=mysqli_query($db,$sql);
			echo"<div class='table'>
				<table>
					<tr>
		    			<th>Name</th>
		    			<th>ID</th>
		    			<th>Upto</th>
		    			<th>Total</th>
		    			<th>Attended</th>
		  			</tr>";
		  			$sub='sub1';
		  			$upta='upto1';
		  			$tota='total1';
		  			$atena='attend1';
		  			$name=array();
		  			$id=array();
		  			$k=0;
  			while($row=mysqli_fetch_array($run)){

  				array_push($name, $row['Name']);
  				array_push($id, $row['ID']);
  				$tot1=0;$atten1=0;$tot2=0;$atten2=0;$tot3=0;$atten3=0;$tot4=0;$atten4=0;
				$tot5=0;$atten5=0;$tot6=0;$atten6=0;$tot7=0;$atten7=0;$tot8=0;$atten8=0;
				$sql2="select * from attendance where ID='$id[$k]' and Semester='$sem1' and Department='$depar1' ";
				$run2=mysqli_query($db,$sql2);
				while($row2=mysqli_fetch_array($run2)){
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
				$upto1='0';$upto2='0';$upto3='0';$upto4='0';$upto5='0';$upto6='0';$upto7='0';$upto8='0';
				$sql3="select * from attenupto where ID='$id[$k]' and Semester='$sem1' and Department='$depar1'";
				$run3=mysqli_query($db,$sql3);
				while($row3=mysqli_fetch_array($run3)){
					
						$upto1=$row3['upto1'];
						$upto2=$row3['upto2'];
						$upto3=$row3['upto3'];
						$upto4=$row3['upto4'];
						$upto5=$row3['upto5'];
						$upto6=$row3['upto6'];
						$upto7=$row3['upto7'];
						$upto8=$row3['upto8'];
						
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
					$date2 = date('Y-m-d',$time2);
				$time3= strtotime($upto3);
					$date3 = date('Y-m-d',$time3);
				$time4= strtotime($upto4);
					$date4 = date('Y-m-d',$time4);
				$time5= strtotime($upto5);
					$date5 = date('Y-m-d',$time5);
				$time6= strtotime($upto6);
					$date6 = date('Y-m-d',$time6);
				$time7= strtotime($upto7);
					$date7 = date('Y-m-d',$time7);
				$time8= strtotime($upto8);
					$date8 = date('Y-m-d',$time8);
					/*echo "$id[$k]  &nbsp $k $date1<br/>";
					echo "$id[$k]  &nbsp $k $date2<br/>";
					echo "$id[$k]  &nbsp $k $date3<br/>";
					echo "$id[$k]  &nbsp $k $date4<br/>";
					echo "$id[$k]  &nbsp $k $date5<br/>";
					echo "$id[$k]  &nbsp $k $date6<br/>";
					echo "$id[$k]  &nbsp $k $date7<br/>"; echo "$id[$k]  &nbsp $k $date8<br/>"; $k++;}*/
				if($code==($code1)){
					$date=$date1;
					$tot=$tot1;
					$atten=$atten1;
				}
				if($code==($code2)){
					$date=$date2;
					$tot=$tot2;
					$atten=$atten2;
				}
				if($code==($code3)){
					$date=$date3;
					$tot=$tot3;
					$atten=$atten3;
				}
				if($code==($code4)){
					$date=$date4;
					$tot=$tot4;
					$atten=$atten4;
				}
				if($code==($code5)){
					$date=$date5;
					$tot=$tot5;
					$atten=$atten5;
				}
				if($code==($code6)){
					$date=$date6;
					$tot=$tot6;
					$atten=$atten6;
				}
				if($code==($code7)){
					$date=$date7;
					$tot=$tot7;
					$atten=$atten7;
				}
				if($code==($code8)){
					$date=$date8;
					$tot=$tot8;
					$atten=$atten8;
				}
				
				echo "<tr>";
				echo"<td>".$name[$k]."</td>";
				echo"<td>".$id[$k]."</td>";
				echo"<td><input type='date' name=".$upta." value=".$date."></td>";
		  		echo"<td><input type='number' min='0' name=".$tota." value=".$tot."></td>";
		  		echo"<td><input type='number' min='0' name=".$atena." value=".$atten."></td>";
					 /*echo"<td>".$row['Date']."</td>";
					 echo"<td>".$row['Department']."</td>";
					 echo"<td>".$row['mail']."</td>";
					 echo"<td>".$row['Contact']."</td>";
					 echo"<td>".$row['Address']."</td>";*/
				echo"</tr>";
				$k++;
				$upta++;
				$tota++;
				$atena++;
			}
			echo "</table>";
			echo "</div>";
			echo"<div class='button'>
				<button type='submit' name='but15' class='button'>Update</button>
				</div>";
		?>
	</form>
	<form action="../teaprof.php"><button name="but2">Cancel</button></form>
	</section>

</body>
</html>
<?php
if(isset($_POST['but15'])){

	$upto=array();
	$total=array();
	$attended=array();
	for ($i='upto1'; $i <$upta ; $i++) { 
		array_push($upto, $_POST[$i]);
	}
	for ($i='total1'; $i <$tota ; $i++) { 
		array_push($total, $_POST[$i]);
	}
	for ($i='attend1'; $i <$atena ; $i++) { 
		array_push($attended, $_POST[$i]);
	}
	
	
	$n=count($name);
	$s=count($id);
	$u=count($upto);
	$t=count($total);
	$a=count($attended);
	$found3=false;
	for ($i=0; $i <$u ; $i++) {
		$que="select * from attendance";
		$run=mysqli_query($db,$que);
		while($row=mysqli_fetch_array($run)){
			if ($id[$i]==$row['ID']) {
				$found3=true;
			}
		}
		if($found3){
			if($code==(($code1))){
				$update1="update attendance set total1='$total[$i]', attended1='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto1='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code2))){
				$update1="update attendance set total2='$total[$i]', attended2='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto2='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code3))){
				$update1="update attendance set total3='$total[$i]', attended3='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto3='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code4))){
				$update1="update attendance set total4='$total[$i]', attended4='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto4='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code5))){
				$update1="update attendance set total5='$total[$i]', attended5='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto5='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code6))){
				$update1="update attendance set total6='$total[$i]', attended6='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto6='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code7))){
				$update1="update attendance set total7='$total[$i]', attended7='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto7='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}
			if($code==(($code8))){
				$update1="update atttendance set total8='$total[$i]', attended8='$attended[$i]'  where ID='$id[$i]' and Semester='$sem1' and Department='$depar1' ";
				$update2="update attenupto set upto8='$upto[$i]' where ID='$id[$i]' and Semester='$sem1' and Department='$depar1'  ";
				$run7=mysqli_query($db,$update1);
				$run8=mysqli_query($db,$update2);
			}

		}
		else{
			if($code==(($code1))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total1`, `attended1`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto1`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
				}
			if($code==(($code2))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total2`, `attended2`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto2`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code3))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total3`, `attended3`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto3`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code4))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total4`, `attended4`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto4`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code5))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total5`, `attended5`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto5`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code6))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total6`, `attended6`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto6`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code7))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total7`, `attended7`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto7`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
			if($code==(($code8))){
				$insert1="INSERT INTO `attendance`(`ID`, `Semester`, `Department`, `total8`, `attended8`) VALUES ('$id[$i]', '$sem1', '$depar1', 
				 '$total[$i]', '$attended[$i]' )";
				$insert2="INSERT INTO `attenupto`(`ID`, `Semester`, `Department`, `upto8`) VALUES ( '$id[$i]', '$sem1', '$depar1', '$upto[$i]')";
				$run7=mysqli_query($db,$insert1);
				$run8=mysqli_query($db,$insert2);
			}
		}
	}
	if($run7&&$run8){
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

