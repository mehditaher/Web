<?php
session_start();
if(isset($_GET['prd_id'])){
	$conn=mysqli_connect("localhost","root","","ecommerce_boutique");
	$sql = "DELETE FROM `panier` WHERE `panier`.`produit_id`=".$_GET['prd_id'];
	$suppPrd=mysqli_query($conn,$sql);
	if($suppPrd){
		header("location:../panier.php");
		exit();
	}
}
?>