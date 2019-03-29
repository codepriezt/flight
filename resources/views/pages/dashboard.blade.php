<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/gallery.min.css">
	<link rel="stylesheet" href="slick-slider/slick/slick.css">
	<link rel="stylesheet" href="slick-slider/slick/slick-theme.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Dashboard - Pilot Pairing</title>
</head>
<body>
@include('inc.message-body')
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="{{url('dashboard')}}"><img src="img/logo.png" class="logo-desktop" alt=""><img src="img/logo-mobile.svg" class="logo-mobile" alt=""></a>

			<form class="form-inline my-2 my-lg-0">
				<a href="{{url('search')}}"><input class="form-control mr-sm-2" type="search" placeholder="Search for Pilots">
				<img src="img/search.svg" alt="">
				<img src="img/search-mobile.svg" class="search-mobile" alt=""></a>
			</form>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Cockpit <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pilot Community
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{url('groups')}}"><i class="fa fa-users"></i> Groups</a>
						<a class="dropdown-item" href="{{url('events')}}"><i class="fa fa-calendar-plus"></i> Events</a>
							<a class="dropdown-item" href="#"><i class="fa fa-plane"></i> Fly With Me</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pictogram</a>
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
						<a href="{{route('profile')}}"><img src= "{{Storage::url(Auth::user()->image) }}" alt=""></a>
						</div>
					
					</li>
				<li><a href="{{route('logout')}}">Logout</a></li>
				</ul>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		</div>
	</nav>
	<!-- /Navigation -->

	<!-- Google Maps -->
	<section class="google-maps mt50">
		<div id="map"></div>
	
		
		<div class="container">
			<div class="row">
				
				<div class="col-md-7 offset-md-5">
					<div class="menu-nav-top">
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-plane"></i>
									<h6>FLIGHT<br>ADVERT</h6>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i>
									<h6>FIND A<br>PILOT</h6>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-cog"></i>
									<h6>USER<br>SETTINGS</h6>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star"></i>
									<h6>GOLD<br>MEMBERSHIP</h6>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Google Maps -->

	<!-- Dashboard -->
	<section class="sections pilots-near-you">
		<div class="container">

			<div class="row heading-with-button">
				<div class="col-md-8">
					<h4>Pilots Flying Close to You</h4>
				</div>
				<div class="col-md-4">
					<a href="#" class="btn btn-primary">SEE ALL <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>

			<div class="row">

				<!-- Near Pilots -->
				<div class="col-md-4">
					<div class="near-pilots">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="img-thumb">
									<img src="img/user.png" alt="">
								</div>
							</div>

							<div class="col-lg-8 col-md-12">
								<h5 class="user-profile-hover-near-pilots"><a href="#">Zino Mario Ghae</a>
									<div class="hover-profile-card">
										<div class="row header-profile">
											<div class="col-md-12">

											</div>
										</div>
										<div class="row user-info">
											<div class="col-md-3">
												<div class="img-thumb">
													<img src="img/user.png" alt="">
												</div>
											</div>

											<div class="col-md-9">
												<h6>Bosun Jones</h6>
												<p>Denver, CO, United States</p>
											</div>
										</div>
										<div class="user-ranks">
											<div class="row">
												<div class="col-md-7 offset-md-3">
													<ul>
														<li><i class="fa fa-user"></i></li>
														<li><i class="fa fa-user"></i></li>
														<li><i class="fa fa-user"></i></li>
													</ul>	
												</div>
											</div>
										</div>
										<div class="user-actions">
											<div class="row">
												<div class="col-md-9 offset-md-3" data-friendid="">
													<ul>
														<li id="connect"><button type="button" class="btn btn-primary"><i class="fa fa-user-friends"></i> Connect</button></li>
														<li><button type="button" class="btn btn-primary"><i class="fa fa-plane"></i> Let's Fly</button></li>
														<li><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> Message</button></li>
													</ul>	
												</div>
											</div>
										</div>
									</div>
								</h5>
								<p>Denver, CO, United States</p>
								<ul>
									<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot" alt=""></li>
									<li><img src="img/build-hours.svg" class="tips" title="Building Hours" alt=""></li>
									<li><img src="img/detective.svg" class="tips" title="Private Pilot" alt=""></li>
								</ul>
								<p class="desc">Private pilot looking to build hours and I always...</p>
							</div>
						</div>
						<div class="foot">
							<button type="button" class="btn btn-primary">RESPOND</button>
						</div>
					</div>
				</div>
				<!-- /Near Pilots -->

				<!-- Near Pilots -->
				<div class="col-md-4">
					<div class="near-pilots">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="img-thumb">
									<img src="img/user.png" alt="">
								</div>
							</div>

							<div class="col-lg-8 col-md-12">
								<h5 class="user-profile-hover-near-pilots"><a href="#">Zino Mario Ghae</a>
									<div class="hover-profile-card">
										<div class="row header-profile">
											<div class="col-md-12">

											</div>
										</div>
										<div class="row user-info">
											<div class="col-md-3">
												<div class="img-thumb">
													<img src="img/user.png" alt="">
												</div>
											</div>

											<div class="col-md-9">
												<h6>Bosun Jones</h6>
												<p>Denver, CO, United States</p>
											</div>
										</div>
										<div class="user-ranks">
											<div class="row">
												<div class="col-md-7 offset-md-3">
													<ul>
														<li><i class="fa fa-user"></i></li>
														<li><i class="fa fa-user"></i></li>
														<li><i class="fa fa-user"></i></li>
													</ul>	
												</div>
											</div>
										</div>
										<div class="user-actions">
											<div class="row">
												<div class="col-md-9 offset-md-3" >
													<ul>
														<li><button type="button" class="btn btn-primary"><i class="fa fa-user-friends"></i> Connect</button></li>
														<li><button type="button" class="btn btn-primary"><i class="fa fa-plane"></i> Let's Fly</button></li>
														<li><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> Message</button></li>
													</ul>	
												</div>
											</div>
										</div>
									</div>
								</h5>
								<p>Denver, CO, United States</p>
								<ul>
									<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot" alt=""></li>
									<li><img src="img/build-hours.svg" class="tips" title="Building Hours" alt=""></li>
									<li><img src="img/detective.svg" class="tips" title="Private Pilot" alt=""></li>
								</ul>
								<p class="desc">Private pilot looking to build hours and I always...</p>
							</div>
						</div>
						<div class="foot">
							<button type="button" class="btn btn-primary">RESPOND</button>
						</div>
					</div>
				</div>
				<!-- /Near Pilots -->

				<!-- Near Pilots -->
				<div class="col-md-4">
					<div class="near-pilots">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="img-thumb">
									<img src="img/user.png" alt="">
								</div>
							</div>

							<div class="col-lg-8 col-md-12">
								<h5><a href="#">Zino Mario Ghae</a></h5>
								<p>Denver, CO, United States</p>
								<ul>
									<li><img src="img/private-pilot.svg" class="tips" title="Private Pilot" alt=""></li>
									<li><img src="img/build-hours.svg" class="tips" title="Building Hours" alt=""></li>
									<li><img src="img/detective.svg" class="tips" title="Private Pilot" alt=""></li>
								</ul>
								<p class="desc">Private pilot looking to build hours and I always...</p>
							</div>
						</div>
						<div class="foot">
							<button type="button" class="btn btn-primary">RESPOND</button>
						</div>
					</div>
				</div>
				<!-- /Near Pilots -->

			</div>
		</div>
	</section>
	<!-- /Dashboard -->

	<!-- Main -->
	<section class="sections lighter">
		<div class="container">

			<div class="row">

				<div class="col-md-4">
					
					<div class="sidebar">
						<!-- Pilotgram -->
						<div class="card stories">
							<div class="card-header">
								<img src="img/photo-camera.svg" class="icons">
								<span>STORIES</span>
								<i class="fas fa-info-circle tips" title="Stories are photos that only lasts 24 hours"></i>
							</div>
							<div class="card-body">
								
								<div class="add-story tips" title="Add Your Story">
									<a href="#">
										<img src="img/user.png">
										<span class="fa fa-plus"></span>
									</a>
								</div>

								<ul class="people-stories">
									<li>
										<div class="story"><a href="#"><img src="img/user.png" alt=""></a></div>
										<p>Bosun</p>
									</li>
									<li>
										<div class="story"><a href="#"><img src="img/user.png" alt=""></a></div>
										<p>Bosun</p>
									</li>
									<li>
										<div class="story"><a href="#"><img src="img/user.png" alt=""></a></div>
										<p>Bosun</p>
									</li>
									<li>
										<div class="story"><a href="#"><img src="img/user.png" alt=""></a></div>
										<p>Bosun</p>
									</li>
								</ul>

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

						<!-- Latest Activities -->
						<div class="card">
							<div class="card-header">
								<span><i class="fas fa-align-left"></i> LATEST ACTIVITIES</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">
								<ul class="activities-sidebar">
									<li>
										<div class="img-thumb">
											<img src="img/pilot.svg" alt="">
										</div>
										<p><a href="#">Ryan Suandika</a> Joined the group <a href="#">Builders (Fixed Wing)</a></p>
									</li>
									<li>
										<div class="img-thumb">
											<img src="img/pilot.svg" alt="">
										</div>
										<p><a href="#">Ryan Suandika</a> Joined the group <a href="#">Builders (Fixed Wing)</a></p>
									</li>
									<li>
										<div class="img-thumb">
											<img src="img/pilot.svg" alt="">
										</div>
										<p><a href="#">Ryan Suandika</a> Joined the group <a href="#">Builders (Fixed Wing)</a></p>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Latest Activities -->

						<!-- Events -->
						<div class="card">
							<div class="card-header">
								<span><i class="fas fa-calendar-plus"></i> EVENTS</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">
								<ul class="events">
									<li>
										<div class="event-card">
											<div class="row">
												<div class="col-md-7">
													<i class="fas fa-calendar-plus evt"></i>
													<h6><a href="#">#FlyNY</a></h6>
													<p>6 Interested</p>	
												</div>
												<div class="col-md-5">
													<a href="#" class="btn btn-primary"><i class="fas fa-star"></i> Interested</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="event-card">
											<div class="row">
												<div class="col-md-7">
													<i class="fas fa-calendar-plus evt"></i>
													<h6><a href="#">Pilot Meetup</a></h6>
													<p>6 Interested</p>	
												</div>
												<div class="col-md-5">
													<a href="#" class="btn btn-primary"><i class="fas fa-star"></i> Interested</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Events -->

						<!-- Groups -->
						<div class="card">
							<div class="card-header">
								<span><i class="fas fa-users"></i> MY GROUPS</span>
								<a href="#" class="btn btn-primary">View All <i class="fas fa-arrow-right"></i></a>
							</div>
							<div class="card-body">
								<ul class="groups">
									<li>
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="group-card">
													<img src="img/user.png" alt="">
													<p>Hour Builders</p>
													<div class="overlay"></div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="group-card">
													<img src="img/user.png" alt="">
													<p>Hour Builders</p>
													<div class="overlay"></div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="group-card">
													<img src="img/user.png" alt="">
													<p>Hour Builders</p>
													<div class="overlay"></div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="group-card">
													<img src="img/user.png" alt="">
													<p>Hour Builders</p>
													<div class="overlay"></div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Groups -->
					</div>

				</div>

				<div class="col-md-8">
					
					<div class="timeline-main">

						<!-- Status Update -->
						<ul class="nav nav-tabs status-box" id="myTab" role="tablist">
							<li class="nav-item">
							<a class="nav-link active" id="make-post" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-pen"></i> Make a Post</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="upload-video" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-video"></i> Upload Video</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="make-post">
								
								<div class="update-status">
								<form action="{{route('postcreate')}}" id="postform" method="POST"  enctype="multipart/form-data">
										<div class="form-group">
											@csrf
											<textarea name="body" id="new-post" class="form-control" rows="2" placeholder="What is on your mind..."></textarea>
										</div>

										<div class="status-addons">
											<div class="row">
												<div class="col-md-5">
														<input type="file" name="file" id="image1" />
												
												</div>
												<div class="col-md-7">
													<button type="submit" id="submit1" class="btn btn-primary">SHARE</button>
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
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="upload-video">
								
							</div>
						</div>
						<!-- /Status Update -->

						<!-- Timeline Posts -->
						
						@foreach($posts as $post)
						
					<div class="timeline-posts" data-postid="{{$post->id}}">
								<div class="timeline-head">
									<div class="row">
										<div class="col-md-6">
											<div class="img-thumb">
											<img src="{{Storage::url(Auth::user()->image) }}" alt="">
											</div>
										<h6 class="user-profile-hover"><a href=""></a>
												<div class="hover-profile-card">
													<div class="row header-profile">
													</div>
													<div class="row user-info">
														<div class="col-md-3">
															<div class="img-thumb">
																<img src="img/user.png" alt="">
															</div>
														</div>
	
														<div class="col-md-9">
															<h6>Bosun Jones</h6>
															<p>Denver, CO, United States</p>
														</div>
													</div>
													<div class="user-ranks">
														<div class="row">
															<div class="col-md-7 offset-md-3">
																<ul>
																	<li><i class="fa fa-user"></i></li>
																	<li><i class="fa fa-user"></i></li>
																	<li><i class="fa fa-user"></i></li>
																</ul>	
															</div>
														</div>
													</div>
													<div class="user-actions">
														<div class="row">
															<div class="col-md-9 offset-md-3">
																<ul>
																	<li><button type="button" class="btn btn-primary"><i class="fa fa-user-friends"></i> Connect</button></li>
																	<li><button type="button" class="btn btn-primary"><i class="fa fa-plane"></i> Let's Fly</button></li>
																	<li><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> Message</button></li>
																</ul>	
															</div>
														</div>
													</div>
												</div>
											</h6>
											<p>{{$post->created_at}}<span><i class="fas fa-globe tips" title="Public"></i></span></p>
										</div>
	
										<div class="col-md-6">
											<div class="post-action">
												<i class="fas fa-chevron-down"></i>
											</div>
										</div>
									</div>
								</div>
	
								<div class="timeline-body">
									<div class="timeline-contents">	
									<img src="{{storage::url($post->image)}}" alt="">
								
									<p>{{$post->body}}</p>
									</div>
								</div>
	
								<div class="timeline-footer">
									<div class="row">
										<div class="col-md-6">
											<ul class="like-links">
												@php $count= 0 @endphp
												@foreach($post->likes as $like)
												@php $count += 1 @endphp
												@if($count <= 3)
												<li><div class="like-thumbs"><img class="tips" src="{{ Storage::url($like->user->image)}}" title="{{$like->user->last_name}} {{$like->user->first_name}}"></div></li>
												@else
												@php break; @endphp
												@endif	
												@endforeach
											</ul>
											@if($post->likes->count() >= 3)
											<p><a href="{{$post->user->first_name}}"></a> and <a href="#" data-toggle="modal" class="like-count" data-target="#exampleModal">{{ count($post->likes) >=3 ?count($post->likes) - 3: 0 }} others</a> liked this</p>
											@endif
										</div>
								
										<div class="col-md-6">
											<ul class="like-comment faster">
												<li><span class="comment-btn"><i class="far fa-comment-alt"></i> 0 Comments</span></li>
												<a  href= "#" data-postid="{{$post->id}}" class="likess"><li><span><i class="far fa-thumbs-up"></i>  likes</span></li>
											</ul>
										</div>
									
									</div>
								</div>
	
								<div class="comment-box">
									<div class="your-comment">
										<div class="img-thumb">
											<img src="img/user.png" alt="">
										</div>
										<form action="{{route('comment')}}" method="Post" id= "newform">
											<input type="text" name="comment" class="form-control" placeholder="Write a comment..." >	
										</form>
										
									</div>
								</div>
							
						</div>
							@endforeach
						<!-- /Timeline Posts -->
					

					</div>

				</div>

			</div>

		</div>
	</section>
	<!-- /Main -->

	<!-- Live Chat -->
	<div class="live-chat">
		<h6>CHATS (2) <span class="close-chat"><i class="far fa-lg fa-times-circle"></i></span></h6>
		<hr>
		<ul>
			<li>
				<img src="img/pilot.svg" alt="">
				<p>Bosun Jones<br>Online</p>
			</li>
			<li>
				<img src="img/pilot.svg" alt="">
				<p>Bosun Jones<br>Online</p>
			</li>
		</ul>
	</div>

	<div class="chat-box">
		<span class="animated slideInUp">2 Pilots Online</span>
		<img src="img/chat.svg">
	</div>
	<!-- /Live Chat -->

	<!-- Who liked this -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">People Who Like This</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
			</div>
		</div>
	</div>
	<!-- Who liked this Ends -->


	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		// Dashboard
		$('.timeline-main .timeline-posts').each(function() {
			_this = $(this);
			_this.find('.comment-btn').click(function(event) {
				_this.find('.comment-box').slideToggle().addClass('animated slideInUp');
			});
		});
		$('.chat-box').click(function(event) {
			$(this).hide();
			$('.live-chat').show().removeClass('slideOutRight').addClass('animated jackInTheBox faster');
		});

		$('.close-chat').click(function(event) {
			$('.live-chat').addClass('slideOutRight').removeClass('jackInTheBox');
			$('.chat-box').show().addClass('animated wobble');
		});

	</script>
	<script src="js/tipsy.js"></script>
	<script src="slick-slider/slick/slick.min.js"></script>
	
	<script>
		var urlLike = "{{route('like')}}";

		$('.people-stories').slick({
			infinite: true,
			speed: 300,
			slide: 'li',
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});

		var postid = 0;
		var like = 0;

		// $('#timeline'){
		// 	event.preventDefault();
		// 	postId = event.target.parentNode.parentNode.dataset['postid'];

		// });

		$('.likess').on('click' , function(event){
			event.preventDefault();
			let postid = $(this).data('postid')
			// let likes = $('.likess').html()
			//  likes = parseInt $('.likess') + 1
			
			var like_count = $(`[data-postid=${postid}]`).find('.like-count');
			console.log(like_count);
			let data={
				postid: postid,
				_token: "{{ csrf_token() }}"
				
			}
			$.ajax({
				method:"POST",
				url:'like',
				data: data,
				
				success:function(response){
					console.log(response);
					let count = parseInt(like_count.html().split(' ')[0]);
					if (response.action == 'add'){
						like_count.html(`${count + 1} others`);
					}else{
						like_count.html(`${count - 1} others`);
					}
					
				}
			});	
		});

		$('#sub').on('submit' , function (e){
			e.preventDefault();
			
			let form = $('#newform')
			let data ={
					form:form,
				_token:"{{csrf_token()}}"
			}
			$.ajax({
				method:"POST",
				url:'comment',
				data:data,
				processData:false,
				contentType:false,
				success:function(reponse){
					console.log(response);
					window.location.assign('/dashboard');

				}
			})

		})

		$('#submit1').on('submit', function(e){
			e.preventDefault();
			let form = $('#postform').get(0)
			let data = new FormData ($(this));
			

			// let data ={
			// 	date:date,
		 	// 	_token: "{{csrf_token()}}",
			// 	image :image
			// }


			$.ajax({
				method: 'POST',
				url: 'postcreatepost',
				data: data,
				processData:false,
				contentType:false,

				success:function(response){
					console.log(response );
					form.reset()
					// reset form
					
				}
				
			});

		});

		$('#connect').on('click', function(e){
			e.preventDefault();
			let friendid =$(this).data(friendid)

			let data ={
				freind_id:friendid,
				_token():'{{csrf_token()}}'
			}
			$.ajax({
				method: 'POST',
				url:'',
				data:data,
				processData:false;
				contentData:false;

			});
		})

	
		
		// getLocation();
		function initMap(){
			getLocation = () => {
			navigator.geolocation.watchPosition(
				position => {
					const lat = parseFloat(position.coords.latitude);
					const long = parseFloat(position.coords.longitude);
					const user_location = {
						lat:lat,
						lng:long
					}
					console.log(position, long, lat);
					return;
				},
				error => {
					console.log(error)
				},
				{ enableHighAccuracy: true, timeout: 30000, maximumAge: 1000 }
			);
		}
			var location = getLocation();
			var map = new google.maps.Map(document.getElementById("map") , {
				zoom:4,
				center:location
			});
		
		};



	
</script>

	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmwdQhz3rpIo-xp_UnOo0VKwsktiGxyaI&callback=initMap">
	</script>

    
	
	<script src="js/main.js"></script>
</body>
</html>