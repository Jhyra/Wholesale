<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$id = $_GET['id'];


$result=mysqli_query($db, "DELETE FROM sales_item WHERE id=$id");

header("Location:salesitemview.php");
?>

