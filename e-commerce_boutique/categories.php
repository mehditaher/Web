<!DOCTYPE html>
<html>
<head>
	<title>Categories | E-commerce Boutique</title>
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

	<div class="panel panel-primary">
		<div class="panel-heading">Categories</div>
		<div class="panel-body">
		<?php while($categorie=mysqli_fetch_assoc($categories)){ ?>
			<div class="col-md-3">
				
				
				<div class="card" style="width: 18rem;">
				  <img style="width:250px; height:250px;" class="card-img-top" src="img/<?php  echo($categorie['titre_cat']); ?>.jpg" />
				  <div class="card-body">
				    <h5 class="card-title">
				    	<a href="?cat=<?php echo($categorie['titre_cat']); ?>">
				</a>
				    </h5>
				    <p class="card-text"><?php echo($categorie['desc_cat']); ?></p>
				    <a  class="btn btn-primary" href="produits.php?cat=<?=$categorie['id_cat']?>"><?php echo($categorie['titre_cat']); ?></a>
				  </div>
				</div>
			</div>
		<?php } ?>
	</div>
					<div class="panel-footer">avec &hearts; Taher El Mehdi &copy; 2021</div>
					<script type="text/javascript" src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</div>
	</div>
</div>
</body>
</html>