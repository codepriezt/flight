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
						<a href="{{url('profile')}}"><img src="img/user.png" alt=""></a>
						</div>
					</li>
				</ul>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		</div>
	</nav>
