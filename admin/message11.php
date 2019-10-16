<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
	<div class="prof1">
	<h1 class="prof">Comments</h1>
	</div>
	<section class="sec">
		<h2 class="upd">Messages</h2><br><br>
		<div class="memo">
		<?php
			include("../mysql.php");
			session_start();
			if(!($_SESSION['admin']))
			{
				header("location:../index.php");
			}
			
			$sql="select * from comments ";
			$run=mysqli_query($db,$sql);
			while($row=mysqli_fetch_array($run)){
				$id=$row['ID'];
				echo "<b>Comment No.: </b> &nbsp".$row['number']."<br />";
				echo "<b>ID: </b> &nbsp ".$id."<br />";	
				echo "<b>E-mail: </b> &nbsp".$row['mail']."<br />";
				echo "<b>Comments: </b> &nbsp".$row['Comments']."<br /><br/>";
				
				
				/*if(isset($_POST['but$i'])){
					echo "hello";

					/*$del="DELETE FROM `comments` WHERE ID='$id[$i]'";
					$run1=mysqli_query($db,$del);
					if($run1)
						{
							echo"<script type='text/javascript'>";
							echo"alert('Comment has been deleted successfully!!')";
							echo"</script>";
							echo"<script>window.open('message.php','_self')</script>";
						}
					else{

							echo"<script type='text/javascript'>";
							echo"alert('Sorry! couldnot delete the comment. Try again later')";
							echo"</script>";
						}
						*/ 
				
			}

		
	?>
</div>
	<div class="delt">
		Enter Comment Number to delete:<br>
		<form action=deletecom.php method="post">
		<b>Comment No.:<input type="text" name="number">
		<button class="del" name="delta"><center>Delete</center></button>
	</div>
	</form>
	<form action="admin.php">
	<button class="bck">Back</button>
	</form>
	</section>

</body>
</html>