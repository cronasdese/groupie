<!DOCTYPE html>
<html>
	<head>
		<title>Groupie • Register</title>
		<?php $this->load->helper('url')?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css');?>"  >
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>	
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" method="POST" action="<?php echo base_url('register/addAccount'); ?>" enctype="multipart/form-data">
				<legend id="header">
					<img src="<?php echo base_url('assets/images/logo.jpg'); ?>" alt="GROUPIE!" width="10%" height="10%">
					Registration
				</legend>
			    <?php 
			      	if(form_error('inputSchoolID') == FALSE){
			      		echo '<div class="form-group">
			      			<label class="control-label" >School ID:</label>
			      			<input type="text" class="form-control" name="inputSchoolID" placeholder="School ID" value="'. set_value('inputSchoolID') .'">
			      		</div>';
			      	}
			      	else{
			      		echo '<div class="form-group has-error">
			      			<label class="control-label" for="inputError">School ID:</label>
			      			<input type="text" class="form-control" name="inputSchoolID" id="inputError" value="'. set_value('inputSchoolID') .'">
			      			<span class="help-block">'. form_error('inputSchoolID') .'</span>
			      			</div>';
			      	}
			      	?>
			      	<?php
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
			      <input type="text" class="form-control" name="inputFullName" placeholder="Full Name" value="'. set_value('inputFullName') .'"></div>';
			      }
			      else
			      {
			      	echo '<div class="form-group has-error">
			      <label class="control-label" for="inputError" >Full Name:</label>
			      <input type="text" class="form-control" name="inputFullName" id="inputError" value="'. set_value('inputFullName') .'">
			      <span class="help-block">'. form_error('inputFullName') .'</span>
			      </div>';
			      }
			      ?>
			      <?php
			      	if(form_error("inputEmail") == FALSE)
			      	{
			      		echo '<div class="form-group">
			      <label class="control-label" for="inputError"  >Email Address:</label>
			      <input type="text" class="form-control" name="inputEmail" placeholder="Email Address" value="'. set_value('inputEmail') .'"></div>';
			      	}
			      	else{
			      		echo '<div class="form-group has-error">
			      <label class="control-label" for="inputError"  >Email Address:</label>
			      <input type="text" class="form-control" name="inputEmail" id="inputError" value="'. set_value('inputEmail') .'">
			      <span class="help-block">'. form_error('inputEmail') .'</span>
			      </div>';
			      	}
			      ?>
			      <?php
			      	if(form_error("inputContact") == FALSE)
			      	{
			      		echo '<div class="form-group">
			      <label class="control-label">Contact Number:</label>
			      <input type="text" class="form-control" name="inputContact" placeholder="Contact Number" value="'. set_value('inputContact') .'"></br></div>';
			      	}
			      	else
			      	{
			      		echo '<div class="form-group has-error">
			      	<label class="control-label" for="inputError"  >Contact Number:</label>
			      	<input type="text" class="form-control" name="inputContact" id="inputError" value="'. set_value('inputContact') .'"></br>
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

