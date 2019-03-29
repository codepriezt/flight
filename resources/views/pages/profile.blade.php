<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/gallery.min.css">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Profile - Pilot Pairing</title>
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		<a class="navbar-brand" href="{{url('/dashboard')}}"><img src="img/logo.png" class="logo-desktop" alt=""><img src="img/logo-mobile.svg" class="logo-mobile" alt=""></a>

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
							<img src="{{Storage::url(Auth::user()->image) }}" alt="">
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

	<section class="sections profile" style="background:url(img/611031921828.jpg) no-repeat;" data-stellar-background-ratio="0.5">

		<div class="profile-details-cover">
			<div class="blue-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="img-thumb">
									<img src="{{Storage::url(Auth::user()->image) }}" alt="">
								</div>
							</div>
							<div class="col-md-9">

								<div class="profile-info">

									<div class="row">
										<div class="col-md-6">
										<h4>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
										<p>{{Auth::user()->state}} {{Auth::user()->country}}</p>	
										</div>

										<div class="col-md-6">
											<ul class="rank-stats">
												<li><a href="#"><img class="tips" src="img/plane.svg" title="Lorem"></a></li>
												<li><a href="#"><img class="tips" src="img/plane.svg" title="Lorem"></a></li>
												<li><a href="#"><img class="tips" src="img/plane.svg" title="Lorem"></a></li>
											</ul>
										</div>
									</div>

									<div class="profile-stats">
										<div class="row">
											<div class="col-md-6">
												<ul>
													<li>
														<h4>50</h4>
														<p>FOLLOWERS</p>
													</li>
													<li>
														<h4>50</h4>
														<p>FOLLOWERS</p>
													</li>
													<li>
														<h4>50</h4>
														<p>FOLLOWERS</p>
													</li>
												</ul>
											</div>

											<div class="col-md-6">
												<div class="button-profile">
													<button type="button" class="btn btn-outline">CONNECT</button>
													<button type="button" class="btn btn-outline">SEND MESSAGE</button>
													<button type="button" class="btn btn-filled-yellow">LET’S FLY</button>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</section>

	<section class="main-profile">
		<div class="container">

			<!-- Tabs -->
			<ul class="nav nav-tabs justify-content-center" id="myTab1" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-align-left"></i> TIMELINE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-users"></i> CONNECTIONS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-camera"></i> PILOTGRAM</a>
				</li>
			</ul>
			<!-- /Tabs -->

			<div class="row">
				
				<div class="col-md-4">
					<div class="sidebar">
						<!-- Pilotgram -->
						<div class="card">
							<div class="card-header">
								<img src="img/photo-camera.svg" class="icons">
								<span>PILOTGRAM</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">

							</div>
						</div>
						<!-- /Pilotgram -->

						<!-- Pilotgram -->
						<div class="card">
							<div class="card-header">
								<img src="img/photo-camera.svg" class="icons">
								<span>PILOTGRAM</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">

							</div>
						</div>
						<!-- /Pilotgram -->

						<!-- Pilotgram -->
						<div class="card">
							<div class="card-header">
								<img src="img/photo-camera.svg" class="icons">
								<span>PILOTGRAM</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">

							</div>
						</div>
						<!-- /Pilotgram -->
					</div>
				</div>

				<div class="col-md-8">
					
					<div class="profile-main">
						<div class="tab-content" id="myTabContent">
							<!-- Timeline -->
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<!-- Status Update -->
								<ul class="nav nav-tabs status-box" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="make-post" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-pen"></i> Make a Post</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="upload-video" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-video"></i> Upload Video</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent2">
									<div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="make-post">

										<div class="update-status">
											<form action="#">
												<div class="form-group">
													<textarea name="" id="input" class="form-control" rows="2" placeholder="What is on your mind..."></textarea>
												</div>

												<div class="status-addons">
													<div class="row">
														<div class="col-md-5">
															<button class="btn btn-default upload-ph"><i class="fa fa-image"></i> Add Photos</button>
														</div>
														<div class="col-md-7">
															<button type="button" class="btn btn-primary">SHARE</button>
															<select name="" id="input" class="form-control">
																<option value="">Public</option>
																<option value="">Friends</option>
																<option value="">Only Me</option>
															</select>	
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="upload-video">

									</div>
								</div>
								<!-- /Status Update -->
							</div>
							<!-- /Timeline -->
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="heading">
									<div class="row">
										<div class="col-md-6">
											<h5>25 CONNECTIONS</h5>
										</div>
										<div class="col-md-6">
											<a href="#" class="btn btn-primary btn-sm">SEE ALL</a>
										</div>
									</div>

									<div class="connections">
										<div class="row">
											
											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

											<!-- Connection -->
											<div class="col-md-4">
												<div class="connection-item">
													<div class="img-thumb">
														<img src="img/pilot.svg" alt="">
													</div>

													<h4><a href="#">Zino Mario Ghae</a></h4>
													<p>Miami FL, United States</p>

													<ul>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
														<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot"></li>
													</ul>

													<div class="conn-action">
														<a type="button" class="btn btn-default"><i class="fa fa-user-plus"></i></a>
														<a type="button" class="btn btn-default"><i class="fa fa-plane"></i></a>
														<a type="button" class="btn btn-default"><img src="img/more.svg"></a>
													</div>
												</div>
											</div>
											<!-- /Connection -->

										</div>
									</div>

								</div>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div id="gg-screen"></div>
								<div class="gg-box">
									<div class="gg-element">
										<img src="https://picsum.photos/1600/1300/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1600/1200/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1200/1600/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1600/1201/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1200/1601/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1201/1600/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1600/1310/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1311/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1603/1311/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1312/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1201/1601/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1201/1602/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1313/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1314/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1315/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1602/1316/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1203/1602/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1605/1312/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1204/1602/?random">
									</div>
									<div class="gg-element">
										<img src="https://picsum.photos/1205/1602/?random">
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

			</div>

		</div>
	</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/tipsy.js"></script>
<script>
	$('.tips').tipsy();
</script>
<script src="js/stellar.js"></script>
<script src="js/gallery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>