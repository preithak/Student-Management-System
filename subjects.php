<?php
include("mysql.php");
session_start();
	if(!($_SESSION['User']))
	{
		header("location:index.php");
	}
	else if(!($_SESSION['dep']))
	{
		header("location:../../teaprof.php");
	}
$depar=$_SESSION['dep'];
$sem=$_SESSION['sems'];
$sql="select * from subjects where Semester='$sem' and Department='$depar'";
$run=mysqli_query($db,$sql);
while($row1=mysqli_fetch_array($run)){
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
/*
echo "$subc1 <br />";
echo "$sub1 <br />";
echo "$subm1 <br />";
echo "$subc2 <br />";
echo "$sub2 <br />";
echo "$subm2 <br />";
echo "$subc3 <br />";
echo "$sub3 <br />";
echo "$subm3 <br />";
echo "$subc4 <br />";
echo "$sub4 <br />";
echo "$subm4 <br />";
echo "$subc5 <br />";
echo "$sub5 <br />";
echo "$subm5 <br />";
echo "$subc6 <br />";
echo "$sub6 <br />";
echo "$subm6 <br />";
echo "$subc7 <br />";
echo "$sub7 <br />";
echo "$subm7 <br />";
echo "$subc8 <br />";
echo "$sub8 <br />";
echo "$subm8 <br />";
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subjects</title>
	<link rel="stylesheet" type="text/css" href="sub.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Subjects</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Department:</b>&nbsp&nbsp <?php echo $depar;?></p><br>
		<p class="neo"><b>Semester:</b>&nbsp&nbsp <?php echo $sem;?></p><br>
	</div>
	<section class="sec">
		<h2 class="upd">Update Details</h2>
		<form action="#" method="post" id="upd">
			<div class="table">
				<table>
					<tr>
		    			<th>Subject Code</th>
		    			<th>Subject </th>
		    			<th>Max. Marks</th>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc1" required="" value=<?php echo "$subc1";?>> 
		  				</td>
		  				<td><input type="text" name="sub1" required="" value="<?php echo "$sub1";?>">
		  				</td>
		  				<td><input type="number" name="subm1" min="0" max="80"  required="" value=<?php echo "$subm1";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc2" required="" value=<?php echo "$subc2";?>> 
		  				</td>
		  				<td><input type="text" name="sub2" required="" value="<?php echo "$sub2";?>">
		  				</td>
		  				<td><input type="number" name="subm2" min="0" max="80"  required="" value=<?php echo "$subm2";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc3" required="" value=<?php echo "$subc3";?>> 
		  				</td>
		  				<td><input type="text" name="sub3" required="" value="<?php echo "$sub3";?>">
		  				</td>
		  				<td><input type="number" name="subm3" min="0" max="80"  required="" value=<?php echo "$subm3";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc4" required="" value=<?php echo "$subc4";?>> 
		  				</td>
		  				<td><input type="text" name="sub4" required="" value="<?php echo "$sub4";?>">
		  				</td>
		  				<td><input type="number" name="subm4" min="0" max="80"  required="" value=<?php echo "$subm4";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc5" required="" value=<?php echo "$subc5";?>> 
		  				</td>
		  				<td><input type="text" name="sub5" required="" value="<?php echo "$sub5";?>">
		  				</td>
		  				<td><input type="number" name="subm5" min="0" max="80"  required="" value=<?php echo "$subm5";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc6" required="" value=<?php echo "$subc6";?>> 
		  				</td>
		  				<td><input type="text" name="sub6" required="" value="<?php echo "$sub6";?>">
		  				</td>
		  				<td><input type="number" name="subm6" min="0" max="80"  required="" value=<?php echo "$subm6";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc7" required="" value=<?php echo "$subc7";?>> 
		  				</td>
		  				<td><input type="text" name="sub7" required="" value="<?php echo "$sub7";?>">
		  				</td>
		  				<td><input type="number" name="subm7" min="0" max="80"  required="" value=<?php echo "$subm7";?>> 
		  				</td>
		  			</tr>
		  			<tr>
		  				<td><input type="text" name="subc8" required="" value=<?php echo "$subc8";?>> 
		  				</td>
		  				<td><input type="text" name="sub8" required="" value="<?php echo "$sub8";?>">
		  				</td>
		  				<td><input type="number" name="subm8" min="0" max="80"  required="" value=<?php echo "$subm8";?>> 
		  				</td>
		  			</tr>
		  		</table>
	  		</div>
	  		<div class="button">
				<button type="submit" name="but1" class="button">Update</button>
			</div>
		</form>
		<form action="teaprof.php"><button name="but2">Cancel</button></form>
	</section>

</body>
</html>
<?php
if(isset($_POST['but1'])){
$subc1=$_POST['subc1'];
		$sub1=$_POST['sub1'];
			$subm1=$_POST['subm1'];
	$subc2=$_POST['subc2'];
		$sub2=$_POST['sub2'];
			$subm2=$_POST['subm2'];
	$subc3=$_POST['subc3'];
		$sub3=$_POST['sub3'];
			$subm3=$_POST['subm3'];
	$subc4=$_POST['subc4'];
		$sub4=$_POST['sub4'];
			$subm4=$_POST['subm4'];
	$subc5=$_POST['subc5'];
		$sub5=$_POST['sub5'];
			$subm5=$_POST['subm5'];
	$subc6=$_POST['subc6'];
		$sub6=$_POST['sub6'];
			$subm6=$_POST['subm6'];
	$subc7=$_POST['subc7'];
		$sub7=$_POST['sub7'];
			$subm7=$_POST['subm7'];
	$subc8=$_POST['subc8'];
		$sub8=$_POST['sub8'];
			$subm8=$_POST['subm8'];
	$update="UPDATE `subjects` SET `SubCode1`='$subc1',`Subject1`='$sub1',`Max1`='$subm1',
	`SubCode2`='$subc2',`Subject2`='$sub2',`Max2`='$subm1',
	`SubCode3`='$subc3',`Subject3`='$sub3',`Max3`='$subm2',
	`SubCode4`='$subc4',`Subject4`='$sub4',`Max4`='$subm3',
	`SubCode5`='$subc5',`Subject5`='$sub5',`Max5`='$subm4',
	`SubCode6`='$subc6',`Subject6`='$sub6',`Max6`='$subm5',
	`SubCode7`='$subc7',`Subject7`='$sub7',`Max7`='$subm6',
	`SubCode8`='$subc8',`Subject8`='$sub8',`Max8`='$subm7' WHERE Semester='$sem' AND Department='$depar' ";
	$run1=mysqli_query($db,$update);
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Subjects have been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('teaprof.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update the details. Try again later')";
			echo"</script>";
		}

}
?>
