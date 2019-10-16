<?php
include("../mysql.php");
session_start();
	if(!($_SESSION['User']))
		{
		header("location:../index.php");
		}
	else if(!($_SESSION['rest']))
	{
		header("location:../teaprof.php");
	}
$id=$_SESSION['rest'];
$depar1=$_SESSION['dep3'];
$sem1=$_SESSION['sem3'];
$sql1="select ID, Department from studentprof";
$run1=mysqli_query($db,$sql1);
$found=false;
while($row=mysqli_fetch_array($run1)){
	if($id==$row['ID']){
		if ($depar1==$row['Department']) {
			$found=true;
		}
		
	}
}
if($found)
{
	$sql="select Name from studentprof where ID='$id'";
	$run=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($run);
	$name=$row['Name'];
	$que="select * from result where Semester='$sem1' and ID='$id'";
	$run1=mysqli_query($db,$que);
	$sub11=0;$sub22=0;$sub33=0;$sub44=0;$sub55=0;$sub66=0;$sub77=0;$sub88=0;
	while($row2=mysqli_fetch_array($run1)){
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
$sun=($subm1+$subm2+$subm3+$subm4+$subm5+$subm6+$subm7+$subm8);
	

}
elseif(!$found){
	echo"<script type='text/javascript'>";
	echo"alert('ID incorrect')";
	echo"</script>";
	echo"<script>window.open('updresult.php','_self')</script>";	
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
		<p class="neo"><b>Name:</b>&nbsp&nbsp<?php echo $name;?></p><br>
		<p class="neo"><b>ID:</b>&nbsp&nbsp<?php echo $id;?></p><br>
		<p class="neo"><b>Department:&nbsp&nbsp</b><?php echo $depar1;?></p><br>
		<p class="neo"><b>Semester:&nbsp&nbsp</b><?php echo $sem1;?></p><br>

	</div>
	<fieldset>
			<h2 class="upd">Update Details</h2>
			<form action="#" method="post" id="upd">
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
		    <td><input type="number"  step="0.001" name="sub1" min="0" max=<?php echo "$subm1";?>  required="" value=<?php echo 
		    "$sub11";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc2";?></td>
		     <td><?php echo "$sub2";?></td>
		    <td><?php echo "$subm2";?></td>
		    <td><input type="number" step="0.001" name="sub2" min="0" max=<?php echo "$subm2";?>  required="" value=<?php echo 
		    "$sub22";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc3";?></td>
		     <td><?php echo "$sub3";?></td>
		    <td><?php echo "$subm3";?></td>
		    <td><input type="number" step="0.001" name="sub3" min="0" max=<?php echo "$subm3";?>  required="" value=<?php echo 
		    "$sub33";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc4";?></td>
		     <td><?php echo "$sub4";?></td>
		    <td><?php echo "$subm4";?></td>
		    <td><input type="number" step="0.001" name="sub4"  min="0" max=<?php echo "$subm4";?> required="" value=<?php echo 
		    "$sub44";?>></td>
		</tr>
			<tr>
		    <td><?php echo "$subc5";?></td>
		     <td><?php echo "$sub5";?></td>
		    <td><?php echo "$subm5";?></td>
		    <td><input type="number" step="0.001" name="sub5" min="0" max=<?php echo "$subm5";?>  required="" value=<?php echo 
		    "$sub55";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc6";?></td>
		     <td><?php echo "$sub6";?></td>
		    <td><?php echo "$subm6";?></td>
		    <td><input type="number" step="0.001" name="sub6" min="0" max=<?php echo "$subm6";?> required="" value=<?php echo 
		    "$sub66";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc7";?></td>
		     <td><?php echo "$sub7";?></td>
		    <td><?php echo "$subm7";?></td>
		    <td><input type="number" step="0.001" name="sub7" min="0" max=<?php echo "$subm7";?> required="" value=<?php echo 
		    "$sub77";?>></td>
		  </tr>
		  <tr>
		    <td><?php echo "$subc8";?></td>
		     <td><?php echo "$sub8";?></td>
		    <td><?php echo "$subm8";?></td>
		    <td><input type="number" step="0.001" name="sub8" min="0" max=<?php echo "$subm8";?>  required="" value=<?php echo 
		    "$sub88";?>></td>
		  </tr>
		  <tr>
		    <td><div id="demo">
		    		<button onclick="myFunction()" type="button" class="calc" id="vvv">Calculate</button>
		    	</div>
		    	<script type="text/javascript">
		    		function myFunction() {
		    			var x =document.getElementById("upd");
		    			var a =parseFloat(x.elements[0].value);
		    			var b = parseFloat(x.elements[1].value);
		    			var c =parseFloat(x.elements[2].value);
		    			var d = parseFloat(x.elements[3].value);
		    			var e = parseFloat(x.elements[4].value);
		    			var f =parseFloat(x.elements[5].value);
		    			var g =parseFloat(x.elements[6].value);
		    			var h =parseFloat(x.elements[7].value);
		    			var b1 = parseFloat(<?php echo "$subm2";?>);
						var c1 = parseFloat(<?php echo "$subm3";?>);
						var d1 = parseFloat(<?php echo "$subm4";?>);
						var e1 = parseFloat(<?php echo "$subm5";?>);
						var f1 = parseFloat(<?php echo "$subm6";?>);
						var g1 = parseFloat(<?php echo "$subm7";?>);
						var h1 = parseFloat(<?php echo "$subm8";?>);
		    			var a1 = parseFloat(<?php echo "$subm1";?>);
		    			if((a>a1)||(b>b1)||(c>c1)||(d>d1)||(e>e1)||(f>f1)||(g>g1)||(h>h1)||
							(a<0)||(b<0)||(c<0)||(d<0)||(e<0)||(f<0)||(g<0)||(h<0))
		    			alert('Value Incorrect');
		    		else{
		    			var t = (a+b+c+d+e+f+g+h);
		    			 //document.getElementById("vvv").style.visibility = 'hidden';
		    		//	 else{
		    			 document.getElementById("deo1").innerHTML= t;
		    			 }
		    			}
		    	</script>
		    </td>
		    <td>Total</td>
		    <td><?php echo "$sun"; ?></td>
		    <td id="deo1"></td>
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
	$sub7=$_POST['sub7'];
	$sub8=$_POST['sub8'];
	$date=date("Y/m/d");
	$found3=false;
	$que="select ID from result";
	$run=mysqli_query($db,$que);
	while($row=mysqli_fetch_array($run)){
		if($id==$row['ID']){
			$found3=true;
		}
	}
		if($found3){
			$update="update result set Subject1='$sub1', Subject2='$sub2', Subject3='$sub3', Subject4='$sub4',
				Subject5='$sub5', Subject6='$sub6', Subject7='$sub7', Subject8='$sub8', Updated='$date' where ID='$id' and Semester='$sem1'";
				$run7=mysqli_query($db,$update);
		}//if for update
		elseif (!$found3) {
			$insert="insert into result values ('$id', '$sem1', '$depar1', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7', '$sub8', 
			'$date')";
			$run7=mysqli_query($db,$insert);	
		}//else for insert

	if($run7)
		{
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