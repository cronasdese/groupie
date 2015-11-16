<html>
	<?php
		if (isset($this->session->userdata['logged_in'])) 
		{
			$schoolID = ($this->session->userdata['logged_in']['schoolID']);
			$name = ($this->session->userdata['logged_in']['name'])
			$email = ($this->session->userdata['logged_in']['email']);
		} 
		else 
		{
			header("location: login");
		}
	?>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>

	<body>
		<div id="profile">
		<?php
			echo "Hello <b id='welcome'><i>" . $name . "</i> !</b>";
			echo "<br/>";
			echo "<br/>";
			echo "Welcome to Groupie";
			echo "<br/>";
			echo "<br/>";
			echo "School ID: " . $schoolID;
			echo "<br/>";
			echo "Email Address: " . $email;
			echo "<br/>";
		?>
			<b id="logout"><a href="logout">Logout</a></b>
		</div>
		<br/>
	</body>
</html>