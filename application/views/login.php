<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->helper('url'); ?>
		<title>Groupie</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css');?>"  >
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		<script src ="<?php echo base_url('assets/js/parsely.min.js');?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

	</head>
	<body>
		<div class="row">
					<button type="button" class="btn btn-link btn-block"><a href="<?php echo base_url('Register') ?>"><img src="<?php echo base_url('assets/images/logo.jpg'); ?>" class="center-block" class="rounded" data-toggle="tooltip" title="Groupie! Click to register."/></a></button>
		</div>
		<div class="row">
			<form class="form-horizontal" method = "POST" action="<?php echo base_url('Signin/login'); ?>">
				<div class="form-group">
					<label for="inputSchoolID" class="col-sm-5 control-label">School ID</label>
					<div class="col-sm-2">
				        <input type="text" class="form-control" name="inputSchoolID" placeholder="School ID">
				    </div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="col-sm-5 control-label">Password</label>
					<div class="col-sm-2">
				        <input type="password" class="form-control" name="inputPassword" placeholder="Password">
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