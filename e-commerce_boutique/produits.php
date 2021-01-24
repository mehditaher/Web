<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Produits | E-commerce Boutique</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>
<body>
<?php include("navbar.php"); 
include("actions/conn.php");
$reqCat="select * from `categories`";
$categories=mysqli_query($conn,$reqCat);
$reqPrd="select * from `prd`";
if(isset($_GET['cat'])){
	$reqPrd="select * from `prd` WHERE prd_cat=".$_GET['cat'];
}
if(isset($_GET['q'])){
	$reqPrd="select * from `prd` WHERE prd_libelle like '%".$_GET['q']."%'";
}
$prds=mysqli_query($conn,$reqPrd);
?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">Produits</div>
					<div class="panel-body">
						<div id="get_product">
						 <?php   while($prd=mysqli_fetch_assoc($prds)){ 
						 	?>
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading"><?php echo($prd['prd_libelle']); ?></div>
										<div class="panel-body">
											<img src="<?php  echo($prd['prd_image']); ?>" style="width:160px; height:250px;">
											<p class="text-info"><?php  echo($prd['prd_desc']);	 ?></p>
										</div>
										<div class="panel-heading">$ <?php echo($prd['prd_prix']); ?>
											<a 
<?php if(isset($_SESSION['id_utilisateur'])){ ?>
	href="actions/ajouterPanier.php?prd_id=<?=$prd['prd_id']?>&id_utilisateur=<?=$_SESSION['id_utilisateur']?>"
<?php }else{ ?>
href="connexion.php"
<?php } ?>
		style="float:right;" class="btn btn-danger btn-xs">Ajouter Au Panier</a>
										</div>
									</div>
								</div>	
							<?php 
							}
							  ?>
						</div>
					</div>
					<div class="panel-footer">avec &hearts; Taher El Mehdi &copy; 2021</div>
					<script type="text/javascript" src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
