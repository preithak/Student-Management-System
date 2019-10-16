<?php
include("../mysql.php");
session_start();
if(!($_SESSION['admin']))
	{
		header("location:index.php");
	}
$depar1=$_SESSION['dep6'];
$sem1=$_SESSION['sem6'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<link rel="stylesheet" type="text/css" href="studea.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Student Details</h1>
	</div>
	<div class="box">
		<h2 class='deps'> Department: <?php echo "$depar1"; ?> </h2>
		<h2 class='deps'>Semester: <?php echo "$sem1"; ?></h2>
	</div>
	<section>
		<?php
			$sql="select * from studentprof where Department='$depar1' and Semester='$sem1' ";
			$run=mysqli_query($db,$sql);
			echo"<div class='table'>
				<table>
					<tr>
		    			<th>Name</th>
		    			<th>D.O.B</th>
		    			<th>ID</th>
		    			<th>Department</th>
		    			<th>E-Mail</th>
		    			<th>Contact</th>
		    			<th>Address</th>
		  			</tr>";
  			while($row=mysqli_fetch_array($run)){
				echo "<tr>";
					 echo"<td>".$row['Name']."</td>";
					 echo"<td>".$row['Date']."</td>";
					 echo"<td>".$row['ID']."</td>";
					 echo"<td>".$row['Department']."</td>";
					 echo"<td>".$row['mail']."</td>";
					 echo"<td>".$row['Contact']."</td>";
					 echo"<td>".$row['Address']."</td>";
				echo"</tr>";
			}
			echo "</table>";
			echo "</div>";
		?>
	</section>
	
	<form action="admin.php">
		<div class="back">
		<button type="submit" class="bck">Back</button>
		</div>
	</form>
	
	
</body>
</html>