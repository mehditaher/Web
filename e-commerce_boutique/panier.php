<?php
session_start();
if(isset($_SESSION['id_utilisateur'])){
	$conn=mysqli_connect("localhost","root","","ecommerce_boutique");
	$sql = "SELECT pr.prd_id prd_id,pr.prd_image img, pr.prd_libelle lbl, pr.prd_prix prix
	FROM utilisateur u,panier pn, prd pr
	where 
	u.id_utilisateur = pn.utilisateur_id
	AND
	pr.prd_id = pn.produit_id
	AND
	u.id_utilisateur = ".$_SESSION['id_utilisateur'];
$Produits=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Ecommerce Boutique</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<?php include("navbar.php");
include("actions/conn.php");
 ?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Panier Validation</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2 col-xs-2"><b>Action</b></div>
					<div class="col-md-2 col-xs-2"><b>Produit Image</b></div>
					<div class="col-md-2 col-xs-2"><b>Produit libelle</b></div>
					<div class="col-md-2 col-xs-2"><b>Produit Prix</b></div>
				</div>
				<div id="cart_checkout"></div>
				<?php   while($prd=mysqli_fetch_assoc($Produits)){ 
						 	?>
						 	<br>
			<div class="row">
			
					<div class="col-md-2">
						<div class="btn-group">
							<a 
				href="actions/suppProduit.php?prd_id=<?=$prd['prd_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</div>
					</div>
					<div class="col-md-2"><img src="<?=$prd['img']?>" style="width:100px; height:100px;"></div>
					<div class="col-md-2"><?=$prd['lbl']?></div>
					<div class="col-md-2"><input type='text' class='form-control' value="<?=$prd['prix']?>" disabled></div>
				</div>
			<?php 
			}
			  ?>
		</div>
		
					<div class="panel-footer">avec &hearts; Taher El Mehdi &copy; 2021</div>
					<script type="text/javascript" src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</div>
	<div class="col-md-3"></div>
</div>
	<?php
}else{
	header("location:connexion.php");
}
?>
</body>
</html>
