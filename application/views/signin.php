<!DOCTYPE html>
<html>
	<head>
		<title>Groupie</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href= "assets/css/bootstrap-responsive.css" rel="stylesheet" >
		<link rel= "stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
		<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
		<script src= "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	</head>
	<body>
		<div class="row">
					<button type="button" class="btn btn-link btn-block"><img src="../images/logo.jpg" class="center-block" class="rounded" data-toggle="tooltip" title="Groupie! Click to register."/></button>
		</div>
		<div class="row">
				<form class="form-horizontal" method = "POST" action="<?php echo base_url('signin/login'); ?>">
					<div class="form-group">
						<label for="inputSchoolID" class="col-sm-5 control-label">School ID</label>
						<div class="col-sm-2">
					        <input type="text" class="form-control" id="inputSchoolID" placeholder="School ID">
					    </div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-5 control-label">Password</label>
						<div class="col-sm-2">
					        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-5">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</div>
				<form>
		</div>
	</body>
</html>