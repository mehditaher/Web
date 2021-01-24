<!DOCTYPE html>
<html>
<head>
	<title>Connextion | E-commerce Boutique</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php include("navbar.php"); 
 include("actions/conn.php"); ?>
<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Connextion</div>
					<div class="panel-body">
					
					<form action="actions/verfierUtilisateur.php" method="POST">
						
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" value="<?php 
								if(isset($_COOKIE['email'])){
									echo $_COOKIE['email'];
								}else{
									echo "";
								}
								?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="pass" name="pass"class="form-control" value="<?php 
								if(isset($_COOKIE['pass'])){
									echo $_COOKIE['pass'];
								}else{
									echo "";
								}
								?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input value="Sign Up" type="submit" name="sbmt"class="btn btn-success btn-lg btn-block" />
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
</div>
</body>
</html>
