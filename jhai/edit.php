<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$result = mysqli_query($db, "UPDATE CONTACTS SET firstname='$firstname', lastname='$lastname', phone_number='$phone_number', email='$email', address='$address' WHERE id=$id");
		
		header("Location: view.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM contacts WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$phone_number = $res['phone_number'];
	$email = $res['email'];
	$address = $res['address'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>wholesale</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/hq.jpg);
			color: white;
			width: 90%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-gray">
	<a>
						<h4>EMPLOYEE</h4>
					</a>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
							</div>
						</li>
					</ul>
				</form>
			</div>
	</nav>
<br/><br/><br/>
	<div class="container">
		<form name="form1" method="post" action="edit.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">firstname</label>
					<div class="col-sm-5">
						<input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">lastname</label>
					<div class="col-sm-5">
						<input type="text" name="lastname" value="<?php echo $lastname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">phone_number</label>
					<div class="col-sm-5">
						<input type="text" name="phone_number" value="<?php echo $phone_number;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">email</label>
					<div class="col-sm-5">
						<input type="text" name="email" value="<?php echo $email;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">address</label>
					<div class="col-sm-5">
						<input type="text" name="address" value="<?php echo $address;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label"></label>	
					<div class="col-sm-10">
						<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
							<button class="btn btn-outline-success" type="submit" name="update" value="Update">update</button>
					</div>
			</div>
		</form>
	</div>
</br/>
	
</body>
</html>
