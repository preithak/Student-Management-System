<!DOCTYPE html>
<html>
<head>
	<title>Teacher Details</title>
	<link rel="stylesheet" type="text/css" href="../teadetailstea.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Teacher Details</h1>
	</div>
	<div class="box">
		<h2 class='deps'>CSE Department</h2>
	</div>
	<section>
		<?php
			include("../mysql.php");
			$sql="select * from teacherprof where Department='CSE'  ";
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
	<section>
		<div class="box">
			<h2 class='deps'>CV Department</h2>
		</div>
		<?php
			include("../mysql.php");
			$sql="select * from teacherprof where Department='CV'";
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
	<section>
		<div class="box">
			<h2 class='deps'>EC Department</h2>
		</div>
		<?php
			include("../mysql.php");
			$sql="select * from teacherprof where Department='EC'";
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
	<section>
		<div class="box">
			<h2 class='deps'>ME Department</h2>
		</div>
		<?php
			include("../mysql.php");
			$sql="select * from teacherprof where Department='ME'";
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
		<button type="submit" class="bck">Back</button>
	</form>
	<div class="footer">
		<p class="sitecredit"> 2017 @ All Rights Reserved | </p>
		<br>
		<p class="designcredit">Student Information System</p>
	</div>
</body>
</html>