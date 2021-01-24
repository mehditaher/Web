<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>E-commerce Boutique</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>
<body>
<?php include("navbar.php");
include("actions/conn.php");
$reqCat="select * from `categories`";
$categories=mysqli_query($conn,$reqCat);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
					<ul class="list-group">
						<li class="list-group-item active"><h5>Categories</h5></li>
						<?php while($categorie=mysqli_fetch_assoc($categories)){ ?>

						<li class="list-group-item"><a href="?cat=<?php echo($categorie['id_cat']); ?>"><?php echo($categorie['titre_cat']); ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">Produits</div>
					<div class="panel-body">
						<div id="get_product">
						<?php
						$reqPrd="select * from `prd`";
						$prds=mysqli_query($conn,$reqPrd);
						 ?>
						 <?php  if(isset($_GET['cat'])){
						 while($prd=mysqli_fetch_assoc($prds)){ 
						 	
						 	 if($prd['prd_cat']==$_GET['cat']){	 ?>
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading"><?php echo($prd['prd_libelle']); ?></div>
										<div class="panel-body">
											<img src="<?php  echo($prd['prd_image']); ?>" style="width:160px; height:250px;"/>
											<p class="text-info"><?php  echo($prd['prd_desc']);	 ?></p>
										</div>
										<div class="panel-heading">$ <?php echo($prd['prd_prix']); ?>
											<a 
<?php if(isset($_SESSION['id_utilisateur'])){ ?>
	href="actions/ajouterPanier.php?prd_id=<?=$prd['prd_id']?>&id_utilisateur=<?=$_SESSION['id_utilisateur']?>"
<?php }else{ ?>
href="connexion.php"
<?php } ?>
											style="float:right;" class="btn btn-danger btn-xs" 
											>Ajouter Au Panier</a>
										</div>
									</div>
								</div>	
							<?php
							 }
						}
				 }else 
				 	echo "<p class='text text-warning'>choisir une <a href='?cat=200'>categorie</a></p>"
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
