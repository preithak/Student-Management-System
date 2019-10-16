<?php
include("../../mysql.php");
session_start();
	if(!($_SESSION['User']))
		{
		header("location:message.php");
		}
	else if(!($_SESSION['rest']))
	{
		header("location:../../teaprof.php");
	}
$id=$_SESSION['rest'];
$sql1="select ID from studentprof";
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
	$que="select * from result where Semester='1' and ID='$id'";
	$run1=mysqli_query($db,$que);
	$sub1=0;
	$sub2=0;
	$sub3=0;
	$sub4=0;
	$sub5=0;
	$sub6=0;
	$sub7=0;
	$sub8=0;
	while($row1=mysqli_fetch_array($run1)){
				$sub1=$row1['Subject1'];
				$sub2=$row1['Subject2'];
				$sub3=$row1['Subject3'];
				$sub4=$row1['Subject4'];
				$sub5=$row1['Subject5'];
				$sub6=$row1['Subject6'];
				$sub7=$row1['Subject7'];
				$sub8=$row1['Subject8'];
		}

	if($sub1==null)
		$sub1=0;
	if($sub2==null)
		$sub2=0;
	if($sub3==null)
		$sub3=0;
	if($sub4==null)
		$sub4=0;
	if($sub5==null)
		$sub5=0;
	if($sub6==null)
		$sub6=0;
	if($sub7==null)
		$sub7=0;
	if($sub8==null)
		$sub8=0;
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
elseif(!$found){
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
	<link rel="stylesheet" type="text/css" href="../updresultform.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:</b>&nbsp&nbsp<?php echo $name;?></p><br>
		<p class="neo"><b>ID:</b>&nbsp&nbsp<?php echo $id;?></p><br>
		<p class="neo"><b>Semester:</b>&nbsp&nbsp 1</p><br>
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
		    <td>Subject1</td>
		    <td>code1</td>
		    <td>80</td>
		    <td><input type="number"  step="0.001" name="sub1" min="0" max="80"  required="" value=<?php echo "$sub1";?>></td>
		  </tr>
		  <tr>
		    <td>Subject2</td>
		    <td>code2</td>
		    <td>80</td>
		    <td><input type="number" step="0.001" name="sub2" min="0" max="80"  required="" value=<?php echo "$sub2";?>></td>
		  </tr>
		  <tr>
		    <td>Subject3</td>
		    <td>code3</td>
		    <td>80</td>
		    <td><input type="number" step="0.001" name="sub3" min="0" max="80"  required="" value=<?php echo "$sub3";?>></td>
		  </tr>
		  <tr>
		    <td>Subject4</td>
		    <td>code4</td>
		    <td>80</td>
		    <td><input type="number" step="0.001" name="sub4"  min="0" max="80" required="" value=<?php echo "$sub4";?>></td>
		</tr>
			<tr>
		    <td>Subject5</td>
		    <td>code5</td>
		    <td>80</td>
		    <td><input type="number" step="0.001" name="sub5" min="0" max="80"  required="" value=<?php echo "$sub5";?>></td>
		  </tr>
		  <tr>
		    <td>Subject6</td>
		    <td>code6</td>
		    <td>80</td>
		    <td><input type="number" step="0.001" name="sub6" min="0" max="80"  required="" value=<?php echo "$sub6";?>></td>
		  </tr>
		  <tr>
		    <td>Subject7</td>
		    <td>code7</td>
		    <td>40</td>
		    <td><input type="number" step="0.001" name="sub7" min="0" max="40"  required="" value=<?php echo "$sub7";?>></td>
		  </tr>
		  <tr>
		    <td>Subject8</td>
		    <td>code8</td>
		    <td>40</td>
		    <td><input type="number" step="0.001" name="sub8" min="0" max="40"  required="" value=<?php echo "$sub8";?>></td>
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
		    			if((a>80)||(b>80)||(c>80)||(d>80)||(e>80)||(f>80)||(g>40)||(h>40)||
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
		    <td>560</td>
		    <td id="deo1"></td>
		  </tr>
		</table>
	</div>
				<div class="button">
				<button type="submit" name="but1" class="button">Update</button>
				</div>
			</form>
			<form action="../../teaprof.php"><button name="but2">Cancel</button></form>
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
	$que="select * from resultcs";
	$run=mysqli_query($db,$que);
	while($row=mysqli_fetch_array($run)){
		$user=$row['ID'];
	}
		if($id==$user){
			$update="update resultcs set Subject1='$sub1', Subject2='$sub2', Subject3='$sub3', Subject4='$sub4',
				Subject5='$sub5', Subject6='$sub6', Subject7='$sub7', Subject8='$sub8', Updated='$date' where ID='$id' and Semester='1'";
				$run1=mysqli_query($db,$update);
		}//if for update
		else{
			$insert="insert into resultcs values ('$id', '1', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7', '$sub8', '$date')";
			$run1=mysqli_query($db,$insert);	
		}//else for insert
	if($run1)
		{
			echo"<script type='text/javascript'>";
			echo"alert('Your Result has been updated Successfully!!')";
			echo"</script>";
			echo"<script>window.open('../../teaprof.php','_self')</script>";
		}
	else{

			echo"<script type='text/javascript'>";
			echo"alert('Sorry! couldnot update your details. Try again later')";
			echo"</script>";
		}
}
?>