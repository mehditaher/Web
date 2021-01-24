<?php

$prd_id = $_GET['prd_id'];
$id_utilisateur = $_GET['id_utilisateur'];

$sql = "INSERT INTO `panier` (`panier_id`, `utilisateur_id`, `produit_id`, `qtn`)
 VALUES (NULL, '$id_utilisateur', '$prd_id', '1');";

$con=mysqli_connect("localhost","root","","ecommerce_boutique");
$run_query = mysqli_query($con,$sql);
if($run_query){
	header("location:../panier.php");
	exit();
}
?>