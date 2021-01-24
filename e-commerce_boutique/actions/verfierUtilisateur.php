<?php
session_start();
$conn=mysqli_connect("localhost","root","","ecommerce_boutique");

if(isset($_POST['email']) and isset($_POST['pass'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$verifier="SELECT * FROM `utilisateur` WHERE email_utilisateur = '".$email."' and password_utilisateur = '".$pass."'";
$exist=mysqli_query($conn,$verifier);
$utilisateur=mysqli_fetch_assoc($exist);
if($utilisateur){
	$_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];
	header("location:../panier.php");
}else{;
	header("location:../connexion.php");
}
}
?>