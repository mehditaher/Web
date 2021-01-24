<!DOCTYPE html>
<html>
	<head>
		<title>Nouveau Compte | E-commerce Boutique</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>
<body>
<?php include("navbar.php"); 
include("actions/conn.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Créer son compte</div>
					<div class="panel-body">
					
					<form action="actions/nouveauCompte.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Nom</label>
								<input type="text"  name="nom" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Prenom</label>
								<input type="text"  name="prenom"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">mot de pass</label>
								<input type="password" id="password" name="pass"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mbl"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Addresse</label>
								<input type="text" id="address1" name="add"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="sbmt"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer">avec &hearts; Taher El Mehdi &copy; 2021</div>
					<script type="text/javascript" src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>