<?php
session_start();
setcookie('email',$_POST['email'],time()+3600);
setcookie('pass',$_POST['pass'],time()+3600);

if (isset($_POST["sbmt"])) {

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$mbl = $_POST['mbl'];
	$add = $_POST['add'];
		$sql = "INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `password_utilisateur`, `mobile_utilisateur`, `addresse__utilisateur`) VALUES (NULL, '$nom', '$prenom', '$email', 
		'$pass', '$mbl', '$add')";

		$con=mysqli_connect("localhost","root","","ecommerce_boutique");
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			header("location:../connexion.php");
			exit();
		}
}
