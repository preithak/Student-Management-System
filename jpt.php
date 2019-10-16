<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Results</title>
	<link rel="stylesheet" type="text/css" href="jpt.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Update Results</h1>
	</div>
	<div class="heading">
		<p class="neo"><b>Name:</p><br>
		<p class="neo">ID:</p><br>
		<p class="neo">Semester:</p></b><br>
	</div>
	<fieldset>
			<h2 class="upd">Update Details</h2>
			<form action="teaprofupdate.php" method="post">
				<div class="table">
		<table>
			<tr>
    			<th>Subjects</th>
    			<th>Subject Code</th>
    			<th>Marks</th>
  			</tr>
		  <tr>
		    <td>Subject1</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject2</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject3</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject4</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		</tr>
			<tr>
		    <td>Subject5</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		  <tr>
		    <td>Subject6</td>
		    <td>1</td>
		    <td><input type="text" name="sub1"  required=""></td>
		  </tr>
		</table>
	</div>
				<div class="button">
				<button type="submit" name="but1" class="button">Update</button>
				</div>
			</form>
			<form action="#"><button name="but2">Cancel</button></form>
	</fieldset>


</body>
</html>