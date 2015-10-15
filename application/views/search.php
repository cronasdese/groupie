<!DOCTYPE html>
<html>
	<head>
		<title>Groupie</title>
		<?php $this->load->helper('url') ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css');?>"  >
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
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
		      <form class="navbar-form navbar-left" method="GET" action="<?php echo base_url('Home/search'); ?>" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" name="search" id="search" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default" name="action">Search Group</button>
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
		        <li>
		        	<a href="<?php base_url('controller/Home/logout') ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
		        </li>
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
				if(is_array($search_contents) || is_object($search_contents)){
					foreach($search_contents as $object){
						echo '<div class="panel panel-default">
						<div class="panel-heading lead">
						  	' . $object->group_ID . ', ' . $object->group_name .'
						  	<button type="button" class="open-DeleteModal btn btn-default pull-right" data-toggle="modal" data-target="#deleteModal" data-id="'. $object->id .'">Delete</button>
						  	<button type="button" class="open-UpdateModal btn btn-primary pull-right" data-toggle="modal" data-target="#updateModal" data-id="
						</div>';
					}
				}
				else{
					echo'<div class="panel panel-default">
						<div class="panel-heading lead">
							Error
						</div>
						<div class="panel-body">
							Group does not exist.
						</div>
					</div>';
				}
			?>
		</div>
	</body>
</html>