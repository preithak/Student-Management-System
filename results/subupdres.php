<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['User']))
		{
		header("location:../index.php");
		}
	else if(!($_SESSION['code21']))
	{
		header("location:../teaprof.php");
	}
$code=$_SESSION['code21'];
$depar1=$_SESSION['dep21'];
$sem1=$_SESSION['sem21'];

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
	echo"<script>window.open('intemsubupd.php','_self')</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Results</title>
	<link rel="stylesheet" type="text/css" href="subupd.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Department:&nbsp&nbsp</b><?php echo $depar1;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>
		<p class="neo"><b>Subject:&nbsp&nbsp</b><?php echo $sub1;?></p><br>
		<p class="neo"><b>Subject Code:&nbsp&nbsp</b><?php echo $code;?></p><br>
	</div>
	<div class="box">
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
		    			<th>Max. Marks</th>
		    			<th>Marks Obtained</th>
		  			</tr>";
		  			$sub='sub1';
		  			$name=array();
		  			$id=array();
		  			$k=0;
  			while($row=mysqli_fetch_array($run)){

  				array_push($name, $row['Name']);
  				array_push($id, $row['ID']);
  				$que="select * from result where Semester='$sem1' and ID='$id[$k]'";
				$run33=mysqli_query($db,$que);
				$sub11=0;$sub22=0;$sub33=0;$sub44=0;$sub55=0;$sub66=0;$sub77=0;$sub88=0;
				while($row2=mysqli_fetch_array($run33)){
							$sub11=$row2['Subject1'];
							$sub22=$row2['Subject2'];
							$sub33=$row2['Subject3'];
							$sub44=$row2['Subject4'];
							$sub55=$row2['Subject5'];
							$sub66=$row2['Subject6'];
							$sub77=$row2['Subject7'];
							$sub88=$row2['Subject8'];
					}

				if($sub11==null)
					$sub11=0;
				if($sub22==null)
					$sub22=0;
				if($sub33==null)
					$sub33=0;
				if($sub44==null)
					$sub44=0;
				if($sub55==null)
					$sub55=0;
				if($sub66==null)
					$sub66=0;
				if($sub77==null)
					$sub77=0;
				if($sub88==null)
					$sub88=0;
				if($code==($code1)){
					$val=$sub11;
				}
				if($code==($code2)){
					$val=$sub22;
				}
				if($code==($code3)){
					$val=$sub33;
				}
				if($code==($code4)){
					$val=$sub44;
				}
				if($code==($code5)){
					$val=$sub55;
				}
				if($code==($code6)){
					$val=$sub66;
				}
				if($code==($code7)){
					$val=$sub77;
				}
				if($code==($code8)){
					$val=$sub88;
				}


				echo "<tr>";
					 echo"<td>".$name[$k]."</td>";
					 echo"<td>".$id[$k]."</td>";
					 echo"<td>".$subm1."</td>";
					 echo "<td><input type='number'  step='0.001' name=".$sub."  min='0' max=".$subm1." required='' value=".$val."></td>";
			echo "</tr>";
			$sub++;
			$k++;
					 /*echo"<td>".$row['Department']."</td>";
					 echo"<td>".$row['mail']."</td>";
					 echo"<td>".$row['Contact']."</td>";
					 echo"<td>".$row['Address']."</td>";*/
			}

			echo "</table>";
			echo "</div>";
			echo"<div class='button'>
				<button type='submit' name='but1' class='button'>Update</button>
				</div>";				
			/*echo"<form action='../teaprof.php'><button name='but2'>Cancel</button></form>";*/
		?>
	</form>
			<form action="../teaprof.php"><button name="but2">Cancel</button></form>
	</section>
	</div>
</body>
</html>
<?php
if(isset($_POST['but1'])){
	$marks=array();
	for ($i='sub1'; $i <$sub ; $i++) { 
		array_push($marks, $_POST[$i]);
	}
	$date=date("Y/m/d");
	$n=count($name);
	$s=count($id);
	$m=count($marks);
	$found3=false;
	for ($i=0; $i <$m ; $i++) { 
		/*echo "$id[$i]<br/>";
		echo "$name[$i]<br/>";
		echo "$marks[$i]<br/>";*/
		$que="select ID from result";
		$run=mysqli_query($db,$que);
		while($row=mysqli_fetch_array($run)){
			if ($id[$i]==$row['ID']) {
				$found3=true;
			}
		}
			if($found3){
				if($code==(($code1))){
					$update="update result set Subject1='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code2))){
					$update="update result set Subject2='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code3))){
					$update="update result set Subject3='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code4))){
					$update="update result set Subject4='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code5))){
					$update="update result set Subject5='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code6))){
					$update="update result set Subject6='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code7))){
					$update="update result set Subject7='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}
				if($code==(($code8))){
					$update="update result set Subject8='$marks[$i]' where ID='$id[$i]' and Semester='$sem1'";
					$run7=mysqli_query($db,$update);
				}

			}
			else{
				if($code==(($code1))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject1`, `Updated`) VALUES ('$id[$i]', 
					'$sem1', '$depar1', '$marks[$i]', '$date')";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code2))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject2`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code3))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject3`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code4))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject4`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code5))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject5`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code6))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject6`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code7))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject7`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
				if($code==(($code8))){
					$insert="INSERT INTO `result`(`ID`, `Semester`, `Department`, `Subject8`, `Updated`) VALUES ($id[$i], 
					$sem1, $depar1, $marks[$i])";
					$run7=mysqli_query($db,$insert);
				}
			}
	}
	if($run7){
		echo"<script type='text/javascript'>";
		echo"alert('Results has been updated Successfully!!')";
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