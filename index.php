<!DOCTYPE html>
<html>
<head>
	<title>consult professor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Search.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php //include 'controllers/authController.php'; ?>
	<header class="container-fluid mb-1">
		<nav class="navbar navbar-expand-sm bg-light navbar-dark"><a class="navbar-brand"><img src="image/index.png" width="20%" height="20%"></a>
		<ul class="navbar-nav text-dark ml-auto">
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <button type="button" class="btn btn-primary">Register/Login</button>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#register">Register</a>
		          <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#login">Login</a>
		        </div>
		    </li>
		 </ul>
		</nav>
	</header>

	<?php
	 include 'controllers/authController.php';
	 include 'model/db_connect.php';
	 include 'verify-user/signup.php';
	 include 'verify-user/login.php';
	?>
	<section class="container">
		<div class="row">
		  <div class="col-lg-2">Learner</div>
		  <div class="col-lg-2">Consultant</div>
		  <div class="col-lg-2">Personal</div>
		  <div class="col-lg-2">Purchase</div>
		  <div class="col-lg-2">Info</div>
		</div>	
	</section>
	<section>
		<div class="container">
		<form action="">
		<div class="row">
		 <div class="col-12">
	    	 <div id="custom-search-input">
	             <div class="input-group form-group">
	             <input type="text" class="search-query form-control" placeholder=""/>
	             <button type="submit" class="btn btn-primary">Search</button>
	             </div>
	            </div>
	         </div>
			</div>
		</div>
		</form>
	</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
