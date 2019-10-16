<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	<link rel="stylesheet" type="text/css" href="admintem.css">
</head>
<body>
	<div class="res">
		<h3 class="panel-title">Enter Details</h3>
		<form action="teaconnectupd.php" method="post">
		Department:<br>
       <select name="department">
          <option value="none">Select Department</option>
          <option value="CSE">CSE</option>
          <option value="CV">CV</option>
          <option value="EC">EC</option>           
          <option value="ME">ME</option>
       </select>
        <br>
        Enter Teacher ID:<br>
        <input type="text" name="id" required="" placeholder="Teacher ID here">
        <br>
        <center><button type="submit" name="buttup" class="button">Select</button></center>
		</form>
     <form action="admin.php">
          <center><button type="submit" name="cancel" class="button">Cancel</button></center>
        </form>
	</div>

</body>
</html>