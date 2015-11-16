<!DOCTYPE html>
<html>
	<head>
		<title>Groupie</title>
		<?php $this->load->helper('url') ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css');?>"  >
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>	
	</head>
	<body>

		<!-- NAVIGATION BAR -->

		<nav class="navbar navbar-fixed-top navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Groupie</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Events</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grades<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Group 1</a></li>
		            <li><a href="#">Group 2</a></li>
		            <li><a href="#">Group 3</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Help</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		      	<?php 
		      		if(is_array($account_info) || is_object($account_info)){
		      			foreach($account_info as $object){
		      				echo '<li><a href="#">' . $object->ID . '</a></li>
		      				<li><a href="#">' . $object->full_name . '</a></li>';
		      			}
		      		}
		      	 ?>
		        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<!-- CONTENTS -->

		<div class="container">
			<div class="col-sm-2">

				<!-- GROUPS -->

				<ul class="list-group">
					<?php
						if(is_array($group) || is_object($group)){
			      			foreach($group as $object_group){
			      				echo '<li class="list-group-item">
							    <span class="badge">14</span>
							    '. $object_group->group_name .'
							  	</li>';
			      			}
			      		}
					?>
				</ul>
			</div>

			<!-- NEWS FEED -->

			<?php
				if(is_array($home_contents) || is_object($home_contents)){
					foreach($home_contents as $object_home){
						echo'<div class="col-sm-offset-2">
							<blockquote>
								<p>' . $object_home->post_content .'</p>
								<small>' . $object_home->poster_name . ' posted in <cite title="Source Title">'. $object_home->group_name .'<br/><br/></cite></small>
								<form method="POST" action="<'. base_url('Home/getComment') .'>">
									<input type="text" class="form-control hidden" name="postid" id="search" value="'. $object_home->post_id .'">
									<button type="button" class="btn btn-default" data-toggle="collapse" aria-pressed="false" autocomplete="off" data-target="#demo"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
								</form>
								<div id="demo" class="collapse out"
									<div class="forn-group">
										<label for="comment"></label>
										<textarea class="form-control" rows="5" id="comment" placeholder="Enter Comment..."></textarea>
										<p></p>
										<div class="pull-right">
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
										</div>
									</div>
								</div>
							</blockquote>
						</div>';
					}
				}
			?>
		</div>
	</body>
</html>