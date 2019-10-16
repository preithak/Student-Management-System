<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="results/intemresult.css">
</head>
<body>
	<div class="res">
		<h3 class="panel-title">Enter Details</h3>
		<form action="consub.php" method="post">
		Department:<br>
       <select name="department">
          <option value="none">Select Department</option>
          <option value="CSE">CSE</option>
          <option value="CV">CV</option>
          <option value="EC">EC</option>           
          <option value="ME">ME</option>
       </select>
        <br>
        Semester:<br>
         <select name="sem" >
          <option value="none">Select Semester</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        <br>
        <center><button type="submit" name="but1" class="button">Select</button></center>
		</form>
     <form action="teaprof.php">
          <center><button type="submit" name="cancel" class="button">Cancel</button></center>
        </form>
	</div>
  