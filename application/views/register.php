<!DOCTYPE html>
<html>
	<head>
		<title>Groupie • Register</title>
		<?php $this->load->helper('url')?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href= "assets/css/bootstrap-responsive.css" rel="stylesheet" >
		<link rel= "stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
		<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
		<script src= "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" method="POST" action="<?php echo base_url('register/addAccount'); ?>" enctype="multipart/form-data">
				<legend id="header">
					<img src="<?php echo base_url(); ?>assets/images/logo.jpg>" alt="GROUPIE!" width="10%" height="10%">
					Registration
				</legend>
			    <?php 
			      	if(form_error('inputSchoolID') == FALSE){
			      		echo '<div class="form-group">
			      			<label class="control-label" >School ID:</label>
			      			<input type="text" class="form-control" name="inputSchoolID" placeholder="School ID">
			      		</div>';
			      	}
			      	else{
			      		echo '<div class="form-group has-error">
			      			<label class="control-label" for="inputError">School ID:</label>
			      			<input type="text" class="form-control" name="inputSchoolID" id="inputError">
			      			<span class="help-block">'. form_error('inputSchoolID') .'</span>
			      			</div>';
			      	}
			   		if(form_error('inputPassword') == FALSE)
			      	{
			      	echo '<div class="form-group">
			      		<label class="control-label" >Password:</label>
			      		<input type="password" class = "form-control" name = "inputPassword" placeholder="Password">
			      		<span class="help-block">Password must be atleast 7 alpha-numeric characters.</span></div>';
			      }
			      else
			      {
			      	echo '<div class="form-group has-error">
			      		<label class="control-label"for="inputError">Password:</label>
			      		<input type="password" class = "form-control" name = "inputPassword" id="inputError">
			      		<span class="help-block">'. form_error('inputPassword') .'</span>
			      		</div>';
			      }
			      ?>
			      <?php 
			      if(form_error('inputConfirmPassword') == FALSE)
			      {
			      	echo '<div class="form-group">
			      <label class="control-label">Confirm Password:</label>
			      <input type="password" class="form-control" name="inputConfirmPassword" placeholder="Confirm Password"></div>'; 
			      }
			      else
			      {
			      	echo '<div class="form-group has-error	">
			      <label class="control-label" for="inputError">Confirm Password:</label>
			      <input type="password" class="form-control" name="inputConfirmPassword" id="inputError">
			      <span class="help-block">'. form_error('inputConfirmPassword') .'</span>
			      </div>'; 
			      }
			      ?>
			      <?php 
			      if(form_error('inputFullName') == FALSE)
			      {
			      	echo '<div class="form-group">
			      <label class="control-label">Full Name:</label>
			      <input type="text" class="form-control" name="inputFullName" placeholder="Full Name"></div>';
			      }
			      else
			      {
			      	echo '<div class="form-group has-error">
			      <label class="control-label" for="inputError" >Full Name:</label>
			      <input type="text" class="form-control" name="inputFullName" id="inputError">
			      <span class="help-block">'. form_error('inputFullName') .'</span>
			      </div>';
			      }
			      ?>
			      <?php
			      	if(form_error("inputEmail") == FALSE)
			      	{
			      		echo '<div class="form-group">
			      <label class="control-label" for="inputError"  >Email Address:</label>
			      <input type="text" class="form-control" name="inputEmail" placeholder="Email Address"></div>';
			      	}
			      	else{
			      		echo '<div class="form-group has-error">
			      <label class="control-label" for="inputError"  >Email Address:</label>
			      <input type="text" class="form-control" name="inputEmail" id="inputError">
			      <span class="help-block">'. form_error('inputEmail') .'</span>
			      </div>';
			      	}
			      ?>
			      <?php
			      	if(form_error("inputContact") == FALSE)
			      	{
			      		echo '<div class="form-group">
			      <label class="control-label">Contact Number:</label>
			      <input type="text" class="form-control" name="inputContact" placeholder="Contact Number"></br></div>';
			      	}
			      	else
			      	{
			      		echo '<div class="form-group has-error">
			      	<label class="control-label" for="inputError"  >Contact Number:</label>
			      	<input type="text" class="form-control" name="inputContact" id="inputError"></br>
			      	<span class="help-block">'. form_error('inputContact') .'</span>
			      	</div>';
			      	}
			      ?>
			    <div class="form-group">
			    	<button type="submit" class="btn btn-primary btn-md" name = "action">Join GROUPIE!</button>
			    </div>				
			    	
			</form>
		</div>
	</body>
</html>

