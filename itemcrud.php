<?php include('process5.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css"	href="Css1/side.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript" src = "bootstrap/js/jquery-slim.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/popper.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					
					
					<li><a href="index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
		
		
	</div>
	<?php require_once 'process5.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		
		$result = $mysqli->query("SELECT * FROM item where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<tr class="text-white">
						<th>Item_id</th>
						<th>Description</th>
						
						<th>Quality</th>
						<th>Unit</th>
						<th>Price</th>
						
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr class="text-white">
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['description']?></td>
							
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['unit']?></td>
<<<<<<< HEAD
							<td>₱<?php echo $row['price']?></td>
=======
							<td><?php echo $row['price']?></td>
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
							
							
							<td>
								<a href="itemadd.php?edit=<?php echo $row['id'];?>"
									class="btn btn-warning">Edit</a>
								<a href="process5.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<br><br>
		<center>
		<a href="itemadd.php"class="btn btn-success">Create info</a>
		<a href="index1.php"class="btn btn-dark">Back</a>
		</center>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
	
</div>
</body>
</html>