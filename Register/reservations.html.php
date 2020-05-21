<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register - Ace in the Hole Multisport Events</title>
	<meta name="description" content="Register today with Ace in the Hole Multisport Events to participate or volunteer for one of our running, swimming, or triathalon events.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=../css/style.css>
	<link href="../css/grid.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<div id="wrapper">
		<?php include '../includes/header.inc.html.php'?>
		<?php include '../includes/nav.inc.html.php'?>
		<main>
			<div class="form">

				<form method="post" action=" " id="contactform">

					<p class="contact"><label for="myname">Name</label></p>
					<input id="myname" name="myname" placeholder="First and last name" required="" tabindex="1" type="text">
					
					<p class="contact"><label for="mygender">Gender</label></p>
					<select class="select-style gender" name="mygender" id="mygender">
						<option value="">Select a Gender</option>
						<option value="female">Female</option>
						<option value="male">Male</option>
						<option value="neutral">Non-Binary</option>
					</select>

					<p class="contact"><label for="myemail">Email</label></p>
					<input id="myemail" name="myemail" placeholder="example@domain.com" required="" type="email">

					<p class="contact"><label for="myphone">Mobile phone</label></p>
					<input id="myphone" name="myphone" placeholder="phone number" required="" type="text">
					
						<p class="contact">Emergency Contact</p>
					<p class="contact"><label for="emergname">Name</label></p>
					<input id="emergname" name="emergname" placeholder="First and last name" required="" tabindex="1" type="text">

					<p class="contact"><label for="emergemail">Email</label></p>
					<input id="emergemail" name="emergemail" placeholder="example@domain.com" required="" type="email">

					<p class="contact"><label for="mytshirt">T-Shirt</label></p>
					<select class="select-style gender" id="mytshirt" name="mytshirt">
						<option value="">Select a Size</option>
						<option value="xs">XS</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
						<option value="xxxl">XXXL</option>
					</select>

					<h5 class="form-header">Saturday</h5>
					<p class="contact"><label for="myathlete">Role:</label></p>
					<select class="select-style gender" id="myathlete" name="myathlete">
						<option value="">Select a Role</option>
						<option value="athlete">Athlete</option>
						<option value="">Volunteer</option>
					</select>

					<!-- <input type="radio" id="myathlete" name="myathlete" value="athlete">
					<label for="myathlete">Athlete</label><br>
					<input type="radio" id="myvolunteer" name="myvolunteer" value="volunteer">
					<label for="myvolunteer">Volunteer</label><br> -->

					<p class="contact"><label for="setevent">Event</label></p>
					<select class="select-style gender"  id="setevent" name="setevent" required="">
						<option id="setOption1" selected disabled value>Select an event</option>
						<option value="long-course">Long Course - $240</option>
						<option value="olympic-tri">Olympic Triathalon = $110</option>
						<option value="10k">10K Race - $50</option>
						<option value="half-tri">Half Marathon - $75</option>
					</select>

					<h5 class="form-header">Sunday</h5>
					<p class="contact"><label for="myvolunteer">Role:</label></p>
					<select class="select-style gender" id="myvolunteer" name="myvolunteer">
						<option value="">Select a Role</option>
						<option value="athlete">Athlete</option>
						<option value="">Volunteer</option>
					</select>

					<p class="contact"><label for="setevent2">Event</label></p>
					<select class="select-style gender" id="setevent2" name="setevent2" required="">
						<option id="setOption1" selected disabled value>Select an event</option>
						<option value="long-course">Long Course - $240</option>
						<option value="olympic-tri">Olympic Triathalon = $110</option>
						<option value="10k">10K Race - $50</option>
						<option value="half-tri">Half Marathon - $75</option>
					</select>
					
					<!-- <input type="radio" id="myathlete2" name="myathlete2" value="athlete">
					<label for="myathlete2">Athlete</label><br>
					<input type="radio" id="myvolunteer2" name="myvolunteer2" value="volunteer">
					<label for="myvolunteer2">volunteer</label><br> -->

					<br>

					<input class="buttom" tabindex="5" value="Sign me up!" type="submit">

				</form>

			</div>
			<div class="box">
				<h5>Cost Includes</h5>
				<ul>
					<li>Food & Beer</li>
					<li>Access to the weekend's live entertainment & Fitness Expo</li>
					<li>Commemorative Finisher medal</li>
					<li>Accurate Chip Timing for competitive races</li>
					<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
					<li>Post-event party & entertainment</li>
					<li><b>NOTE </b>Tech shirts guaranteed to pre-registered participants only.</li>
				</ul>
			</div>

		</main>
		<?php include '../includes/footer.inc.html.php'?>
	</div>
</body>

</html>
