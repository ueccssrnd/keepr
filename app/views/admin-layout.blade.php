<!doctype html>
<html lang="en">
<head>
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
	<link rel = "stylesheet" type = "text/css" href = "css/core.css">
	
</head>
<body>
<div class = "row dashboard-banner">
		<div class = "col-md-8">
			<img src="img/keepr-logo.png" alt="rnd logo" class="img-responsive" id = "keepr-logo">
			<h1>Keepr</h1>
			<h6> Time keeper system </h6>
		</div>
	</div>
	<div class = "row extended-row">
		<div class = "col-md-2 menu-nav align-left">
			<ul>
				<li><img src = "img/home.png" class="img-responsive menu-images" alt = "home-logo">Home</li>
				<li><img src = "img/users.png" class="img-responsive menu-images" alt = "users-logo">Users</li>
				<li><img src = "img/clock.png" class="img-responsive menu-images" alt = "clock-logo">Time logs</li>
				<li><img src = "img/calendar_blank.png" class="img-responsive menu-images" alt = "calendar-logo">Schedule</li>
				<li><img src = "img/shut_down.png" class="img-responsive menu-images" alt = "shutdown-logo">Logout</li>
			</ul>
		</div>
		<div class = "col-md-10 content">
			@yield('content')
		</div>
	</div>
    <script type = "text/javascript" src="js/jquery-1.10.2.min.js"> </script>
	<script type = "text/javascript" src="js/bootstrap.js"> </script>
	<script type = "text/javascript" src = "js/jquery-ui.js"> </script>
	<script type = "text/javascript" src = "js/script.js"> </script>
</body>
</html>
