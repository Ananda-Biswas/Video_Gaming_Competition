<!DOCTYPE html>
<html>
<head>
	<title>Video Gaming Contest Login</title>
	<style>
		body {
			background-color: #222;
			font-family: Arial, sans-serif;
			color: #fff;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 300px;
			margin: 0 auto;
			margin-top: 50px;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 3px;
			background-color: #333;
			color: #fff;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
			margin-top: 50px;
			width: 600px;
			margin: 0 auto;
		}
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
			font-weight: bold;
		}
		.tab button:hover {
			background-color: #ddd;
		}
		.tab button.active {
			background-color: #ccc;
		}
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
			width: 600px;
			margin: 0 auto;
		}
	</style>
	<script>
		// Function to switch between tabs
		function openTab(evt, tabName) {
		  // Declare all variables
		  var i, tabcontent, tablinks;

		  // Get all elements with class="tabcontent" and hide them
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  // Get all elements with class="tablinks" and remove the class "active"
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }

		  // Show the current tab, and add an "active" class to the button that opened the tab
		  document.getElementById(tabName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>
</head>


<body>

	<h1>Video Gaming Contest</h1>

	<div class="tab">
		<button class="tablinks" onclick="openTab(event, 'organizer')">Organizer Login</button>
		<button class="tablinks" onclick="openTab(event, 'player')">Player Login</button>
		<button class="tablinks" onclick="openTab(event, 'signup')">Sign Up</button>
		<button class="tablinks" onclick="openTab(event, 'team_info')">Team Info</button>

	</div>	

	<div id="organizer" class="tabcontent">
		<form method="post" action="organizer_login.php">
			<label for="email">Email</label>
			<input type="text" name="email" required>
			<label for="password">Password</label>
			<input type="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>

	<div id="player" class="tabcontent">
		<form method="post" action="player_login.php">
			<label for="email">Email</label>
			<input type="text" name="email" required>
			<label for="password">Password</label>
			<input type="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>

	<div id="signup" class="tabcontent">
		<form method="post" action="signup.php">

			<label for="name">Name</label>
			<input type="text" name="name" required>

			<label for="id">NID</label>
			<input type="text" name="id" required>

			<label for="email">Email</label>
			<input type="text" name="email" required>

			<label for="phone">Phone</label>
			<input type="text" name="phone" required>

			<label for="address">Address</label>
			<input type="text" name="address" required>

			<label for="team_no">Team number</label>
			<input type="text" name="team_no" required>

			<label for="password">Password</label>
			<input type="password" name="password" required>

			<label for="confirm_password">Confirm Password</label>
			<input type="password" name="confirm_password" required>

			<input type="submit" value="Sign Up">
		</form>
	</div>

	<div id="team_info" class="tabcontent">
		
		Team 1------- Bracu


	</div>
</body>

