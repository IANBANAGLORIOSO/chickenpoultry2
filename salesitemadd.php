<?php include('process7.php');?>
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
	<br><br><br>
	<div class="row justify-content-center">
	<form action="process7.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div class="form-group">
		<br><br>
<<<<<<< HEAD
		<label>Item_Description</label>
				<?php
						$sql = "SELECT * FROM `item`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="item_id"class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option class="form-control"value="<?php echo $row['id'];?>"><?php echo $row['description'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
=======
<<<<<<< HEAD
		
=======
		<div class="form-group">
			<label>Small</label>
			<input type="number" name="small" class="form-control" value="<?php echo $small;?>"placeholder="Enter Quantity"required>
		</div>
		<div class="form-group">
			<label>Medium</label>
			<input type="number" name="medium" class="form-control" value="<?php echo $medium;?>"placeholder="Enter Quantity"required>
		</div>
		<div class="form-group">
			<label>Large</label>
			<input type="number" name="large" class="form-control" value="<?php echo $large;?>"placeholder="Enter Quantity"required>
		</div>
>>>>>>> 31c3cd95154b92912502c92f2eb5c88cb2d9c5ce
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
		<div class="form-group">
			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" value="<?php echo $quantity;?>"placeholder="Enter Quantity"required>
		</div>
		<label>Price</label>
				<?php
						$sql = "SELECT * FROM `item`";
						$result = mysqli_query($mysqli, $sql);

				?>
<<<<<<< HEAD
				<select name="price"class="form-control">
=======
				<select name="customer_id" class="form-control">
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
<<<<<<< HEAD
                           <option class="form-control"value="<?php echo $row['price'];?>"><?php echo $row['price'];?></option>   
=======
                           <option value="<?php echo $row['id'];?>"><?php echo $row['lastname'];?></option>   
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
                           <?php   
                          }
                          ?>
            </select>
		<div>
				<label>Customer_Name</label>
				<?php
						$sql = "SELECT * FROM `customer`";
						$result = mysqli_query($mysqli, $sql);

				?>
<<<<<<< HEAD
				<select name="customer_id" class="form-control">
=======
				<select name="item_id"class="form-control">
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
<<<<<<< HEAD
                           <option value="<?php echo $row['id'];?>"><?php echo $row['lastname'];?></option>   
=======
                           <option class="form-control"value="<?php echo $row['id'];?>"><?php echo $row['description'];?></option>   
>>>>>>> 34c8c2a8e37e09b7cd9b54b63666a29f7579d276
                           <?php   
                          }
                          ?>
            </select>
		
			<br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="salesitemcrud.php"class="btn btn-warning">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-success" name="save">save</button>
			<a href="salesitemcrud.php"class="btn btn-warning">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>