<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/profile.css">
	<title>Post - Pilot Pairing</title>
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="img/logo.png" class="logo-desktop" alt=""><img src="img/logo-mobile.svg" class="logo-mobile" alt=""></a>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search for Pilots">
				<img src="img/search.svg" alt="">
				<img src="img/search-mobile.svg" class="search-mobile" alt="">
			</form>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Cockpit <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pilot Community</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pictogram
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
			</div>

			<div class="navbar-right">
				<ul>
					<li><a href="#"><img src="img/friends.svg" alt=""></a></li>
					<li>
						<a href="#"><img src="img/notifications-button.svg" alt=""></a>
						<span class="badge">3</span>
					</li>
					<li><a href="#"><img src="img/messages.svg" alt=""></a></li>
					<li>
						<div class="img-thumb">
							<img src="img/user.png" alt="">
						</div>
					</li>
				</ul>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		</div>
	</nav>
	<!-- /Navigation -->

	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you have to say</h3></header>
		<form action="postcreatepost" method="post">
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" rows="3" placeholder="What on your mind......"></textarea>
				</div>
				<button type="submit" class="btn btn-primary"> Create Post</button>
				
		</form>
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What other people Say</h3></header>
			<article class="post">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dolor atque
					 voluptates ipsa saepe dignissimos.</p>
					 <div class="info">
						 Posted by OJ believe on  march 2019
					 </div>
				<div class="interaction">
					<a href="#">like</a>
					<a href="#">Dislike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</article>
			<article class="post">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil.</p>
				<div class="info">
					Posted by OJ believe on march 2019
				</div>
				<div class="interaction">
						<a href="#">like</a>
					<a href="#">Dislike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</article>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/tipsy.js"></script>
	<script src="js/main.js"></script>
</body>
</html>